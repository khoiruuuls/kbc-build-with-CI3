<?php

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->input->get('search'))
        {
            $this->db->like('name', $this->input->get('search'));
            $query = $this->db->get('program');
            $dataProgram = $query->result();
        }else{
            $this->load->model("ProgramModel");
            $dataProgram = $this->ProgramModel->getProgram();
        }
        $data['program'] = $dataProgram;
        $data['page_title'] = 'Dashboard';
        $data['user']    = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('main/admin/index', $data);
    }

    public function tambah()
    {
        // $this->load->view('main/admin/index');
        if ($this->input->post()) {
            //rules
            // 'numeric' => 'The input you enter is not of type number'
            $this->form_validation->set_rules('name', 'name', 'trim|required', [
                'required' => 'Please input name is required',
            ]);
            $this->form_validation->set_rules('tag', 'tag', 'trim|required', [
                'required' => 'Please input tag is required',
            ]);
            $this->form_validation->set_rules('descProgram', 'descProgram', 'trim|required', [
                'required' => 'Please input descProgram is required',
            ]);

            $this->form_validation->set_rules('url', 'url', 'trim|required', [
                'required' => 'Please input url is required',
            ]);

            $this->form_validation->set_rules('priceMin', 'priceMin', 'trim|required', [
                'required' => 'Please input priceMin is required',
            ]);
            $this->form_validation->set_rules('kuota', 'kuota', 'trim|required', [
                'required' => 'Please input kuota is required',
            ]);
            // var_dump($_FILES);
            // die;
            if ($this->form_validation->run() == TRUE) {
                // return 'tes';
                $priceMax = $this->input->post('priceMin') + 100000;
                if ($_FILES['photo']['name']) {
                    $config['upload_path'] = 'assets/img/program/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 2048;
                    $config['filename'] = $_FILES['photo']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('photo')) {

                        $uploadDb = [
                            'photo' => $this->upload->data('file_name'),
                            'name' => htmlspecialchars($this->input->post('name'), true),
                            'tag' => htmlspecialchars($this->input->post('tag'), true),
                            'type' => htmlspecialchars($this->input->post('type'), true),
                            'descProgram' => htmlspecialchars($this->input->post('descProgram'), true),
                            'priceMin' => htmlspecialchars($this->input->post('priceMin'), true),
                            'priceMax' => $priceMax,
                            'dateStart' => htmlspecialchars($this->input->post('date_start'), true),
                            'dateEnd' => htmlspecialchars($this->input->post('date_end'), true),
                            'time_start' => htmlspecialchars($this->input->post('time_start'), true),
                            'time_end' => htmlspecialchars($this->input->post('time_end'), true),
                            'mode' => 'online',
                            'url' => htmlspecialchars($this->input->post('url'), true),
                            'lokasi' => null,
                            'alamat' => null,
                            'kota' => null,
                            'kuota' => htmlspecialchars($this->input->post('kuota'), true),
                        ];
                        $this->db->insert('program', $uploadDb);
                        return redirect('admin/index');
                    }
                    echo 'gak upload';
                }
                echo 'gak daoer';
            }
        }
        $data['user']    = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['page_title'] = 'Tambah Konsultan';
        $this->load->view('main/admin/tambah', $data);
    }

    public function edit($id)
    {

        $this->load->model("ProgramModel");
        $data['program'] = $this->ProgramModel->editProgram($id);
        $data['page_title'] = 'Edit';
        $data['user']    = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('main/admin/edit', $data);
    }

    public function update($id)
    {
        $this->load->model("ProgramModel");
        $this->ProgramModel->updateProgram($id);
        redirect('admin');
    }

    public function delete_row($id)
    {
        $this->load->model("ProgramModel");
        $this->ProgramModel->delete($id);
        return redirect('admin');
    }

    public function add_consultant()
    {

        if($this->input->post()){
            
            $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[consultant.name]', [
                'required' => 'Please input name is required',
                'is_unique' => 'The Name already exists'
            ]);
            
            $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[consultant.email]|valid_email', [
                'required' => 'Please input email is required',
                'is_unique' => 'The e-mail already exists',
                'valid_email' => 'The input you enter is not in the form of an email'
            ]);
            $this->form_validation->set_rules('alamat', 'alamat', 'trim|required', [
                'required' => 'Please input alamat is required',
            ]);
            
            $this->form_validation->set_rules('no_handphone', 'no_handphone', 'trim|required|numeric', [
                'required' => 'Please input no_hanphone is required',
                'numeric' => 'The input you enter is not of type number'
            ]);
            
            $this->form_validation->set_rules('spesialisasi', 'spesialisasi', 'trim|required', [
                'required' => 'Please input spesialisasi is required',
            ]);
            $this->form_validation->set_rules('perusahaan', 'perusahaan', 'trim|required', [
                'required' => 'Please input perusahaan is required',
            ]);
            $this->form_validation->set_rules('jumlah_client', 'jumlah_client', 'trim|required|numeric', [
                'required' => 'Please input jumlah_client is required',
                'numeric' => 'The input you enter is not of type number'
            ]);
            $this->form_validation->set_rules('akun_media', 'akun_media', 'trim|required', [
                'required' => 'Please input akun_media is required',
            ]);

            // var_dump($this->form_validation->run());
            // die;

            

            if ($this->form_validation->run() == TRUE) {
                if ($_FILES['photo']['name']) {
                    $config['upload_path'] = 'assets/img/consultant/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 2048;
                    $config['filename'] = $_FILES['photo']['name'];

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('photo')) {

                        $uploadDb = [
                            'photo' => $this->upload->data('file_name'),
                            'name' => htmlspecialchars($this->input->post('name'), true),
                            'profesi' => 'consultant',
                            'alamat' => htmlspecialchars($this->input->post('alamat'), true),
                            'email' => htmlspecialchars($this->input->post('email'), true),
                            'no_handphone' => $this->input->post('no_handphone'),
                            'perusahaan' => htmlspecialchars($this->input->post('perusahaan'), true),
                            'spesialisasi' => htmlspecialchars($this->input->post('spesialisasi'), true),
                            'akun_media' => htmlspecialchars($this->input->post('akun_media'), true),
                            'jumlah_client' => $this->input->post('jumlah_client'),
                        ];
                        $this->db->insert('consultant', $uploadDb);
                        return redirect('admin/index');
                    }
                    
                }
               
            }


        }

        $data = [
            'page_title' => 'Tambah Konsultan',
            'user' => $this->db->get_where('users', [
                'email' => $this->session->userdata('email')
            ])->row_array()
        ];

        $this->load->view('main/admin/add_consultant', $data);
    }
}