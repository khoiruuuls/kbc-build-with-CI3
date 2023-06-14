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
        if($this->session->userdata('role_id') == 2){

            if ($this->input->get('search')) {
                $this->db->like('name', $this->input->get('search'));
                $query = $this->db->get('program');
                $dataProgram = $query->result();
            } else {
                $this->load->model("ProgramModel");
                $dataProgram = $this->ProgramModel->getProgram();
            }

            if ($this->input->get('search1')) {
                $this->db->like('name', $this->input->get('search1'));
                $query = $this->db->get('consultant');
                $dataConsultant = $query->result();
            } else {
                $this->load->model("ConsultantModel");
                $dataConsultant = $this->ConsultantModel->getConsultant();
            }
    
    
            
    
            $data = [
                'consultant' => $dataConsultant,
                'program' => $dataProgram,
                'page_title' => 'Dashboard',
                'user' => $this->db->get_where('users', ['email' =>
                $this->session->userdata('email')])->row_array(),
            ];
    
            return $this->load->view('main/admin/index', $data);
        }
        return redirect(site_url('./'));
    }

    // public function tambah()
    // {
    //     // $this->load->view('main/admin/index');
    //     if ($this->input->post()) {
    //         //rules
    //         // 'numeric' => 'The input you enter is not of type number'
    //         $this->form_validation->set_rules('name', 'name', 'trim|required', [
    //             'required' => 'Please input name is required',
    //         ]);
    //         $this->form_validation->set_rules('tag', 'tag', 'trim|required', [
    //             'required' => 'Please input tag is required',
    //         ]);
    //         $this->form_validation->set_rules('descProgram', 'descProgram', 'trim|required', [
    //             'required' => 'Please input descProgram is required',
    //         ]);

    //         $this->form_validation->set_rules('url', 'url', 'trim|required', [
    //             'required' => 'Please input url is required',
    //         ]);

    //         $this->form_validation->set_rules('priceMin', 'priceMin', 'trim|required', [
    //             'required' => 'Please input priceMin is required',
    //         ]);
    //         $this->form_validation->set_rules('kuota', 'kuota', 'trim|required', [
    //             'required' => 'Please input kuota is required',
    //         ]);
    //         // var_dump($_FILES);
    //         // die;
    //         if ($this->form_validation->run() == TRUE) {
    //             // return 'tes';
    //             $priceMax = $this->input->post('priceMin') + 100000;
    //             if ($_FILES['photo']['name']) {
    //                 $config['upload_path'] = 'assets/img/program/';
    //                 $config['allowed_types'] = 'jpg|png|jpeg';
    //                 $config['max_size'] = 2048;
    //                 $config['file_name'] = $_FILES['photo']['name'];

    //                 $this->load->library('upload', $config);

    //                 if ($this->upload->do_upload('photo')) {

    //                     $uploadDb = [
    //                         'photo' => $this->upload->data('file_name'),
    //                         'name' => htmlspecialchars($this->input->post('name'), true),
    //                         'tag' => htmlspecialchars($this->input->post('tag'), true),
    //                         'type' => htmlspecialchars($this->input->post('type'), true),
    //                         'descProgram' => htmlspecialchars($this->input->post('descProgram'), true),
    //                         'priceMin' => htmlspecialchars($this->input->post('priceMin'), true),
    //                         'priceMax' => $priceMax,
    //                         'dateStart' => htmlspecialchars($this->input->post('date_start'), true),
    //                         'dateEnd' => htmlspecialchars($this->input->post('date_end'), true),
    //                         'time_start' => htmlspecialchars($this->input->post('time_start'), true),
    //                         'time_end' => htmlspecialchars($this->input->post('time_end'), true),
    //                         'mode' => 'online',
    //                         'url' => htmlspecialchars($this->input->post('url'), true),
    //                         'lokasi' => null,
    //                         'alamat' => null,
    //                         'kota' => null,
    //                         'kuota' => htmlspecialchars($this->input->post('kuota'), true),
    //                     ];
    //                     $this->db->insert('program', $uploadDb);
    //                     return redirect('admin/index');
    //                 }
    //                 echo 'gak upload';
    //             }
    //             echo 'gak daoer';
    //         }
    //     }
    //     $data['user']    = $this->db->get_where('users', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['page_title'] = 'Tambah Konsultan';
    //     $this->load->view('main/admin/tambah', $data);
    // }

    public function tambah()
    {
        $this->load->library('upload');
        $this->config->load('upload', true);

        if ($this->input->post()) {
            // Form validation rules
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('tag', 'Tag', 'trim|required');
            $this->form_validation->set_rules('descProgram', 'Description', 'trim|required');
            $this->form_validation->set_rules('url', 'URL', 'trim|required');
            $this->form_validation->set_rules('priceMin', 'Minimum Price', 'trim|required');
            $this->form_validation->set_rules(
                'kuota',
                'Quota',
                'trim|required'
            );

            if ($this->form_validation->run() == TRUE) {
                $priceMin = $this->input->post('priceMin');
                $priceMax = $priceMin + 100000;
                $consultantID = $this->input->post('consultant_id');

                if ($_FILES['photo']['name']) {
                    $uploadConfig = $this->config->item('upload');
                    $this->upload->initialize($uploadConfig);

                    if ($this->upload->do_upload('photo')) {
                        $uploadData = $this->upload->data();

                        $insertData = [
                            'photo' => $uploadData['file_name'],
                            'name' => htmlspecialchars($this->input->post('name'), true),
                            'tag' => htmlspecialchars(
                                $this->input->post('tag'),
                                true
                            ),
                            'type' => htmlspecialchars($this->input->post('type'), true),
                            'descProgram' => htmlspecialchars(
                                $this->input->post('descProgram'),
                                true
                            ),
                            'priceMin' => $priceMin,
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
                            'consultant_id' => $consultantID,
                        ];

                        $this->db->insert('program', $insertData);
                        redirect('admin/index');
                    } else {
                        $uploadError = $this->upload->display_errors();
                        echo $uploadError;
                    }
                } else {
                    echo 'No file selected.';
                }
            }
        }

        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['page_title'] = 'Tambah Konsultan';
        $this->load->model('ConsultantModel');
        $data['consultants'] = $this->ConsultantModel->getConsultant();
        $this->load->model('ConsultantModel');
        $data['bahasa_options'] = $this->ConsultantModel->getBahasaOptions();
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

    public function updateConsultant($id)
    {
        $this->load->model("ConsultantModel");
        $this->ConsultantModel->updateConsultant($id);
        redirect('admin');
    }

    public function delete_row($id)
    {
        $this->load->model("ProgramModel");
        $this->ProgramModel->delete($id);

        return redirect('admin');
    }

    public function delete_consultant($id)
    {
        // hapus consultant
        $this->load->model("ConsultantModel");
        $this->ConsultantModel->delete($id);
        return redirect('admin');
    }


    public function add_consultant()
    {
        $this->load->model("ConsultantModel");

        if ($this->input->post()) {

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
            $this->form_validation->set_rules('jumlah_client', 'jumlah_client', 'trim|required|numeric', [
                'required' => 'Please input jumlah_client is required',
                'numeric' => 'The input you enter is not of type number'
            ]);
            $this->form_validation->set_rules('akun_media', 'akun_media', 'trim|required', [
                'required' => 'Please input akun_media is required',
            ]);

            if ($this->form_validation->run() == TRUE) {
                if ($_FILES['photo']['name']) {
                    $config['upload_path'] = 'assets/img/consultant/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 2048;
                    $config['file_name'] = $_FILES['photo']['name'];

                    $this->load->library('upload');
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('photo')) {

                        $uploadDb = [

                            'photo' => $this->upload->data('file_name'),
                            'name' => htmlspecialchars($this->input->post('name'), true),
                            'profile' => htmlspecialchars($this->input->post('profile'), true),
                            'profesi' => 'consultant',
                            'alamat' => htmlspecialchars($this->input->post('alamat'), true),
                            'email' => htmlspecialchars($this->input->post('email'), true),
                            'no_handphone' => $this->input->post('no_handphone'),
                            'akun_media' => htmlspecialchars($this->input->post('akun_media'), true),
                            'jumlah_client' => $this->input->post('jumlah_client'),
                        ];

                        $this->db->insert('consultant', $uploadDb);
                        $consultant_id = $this->db->insert_id();

                        $bahasa = $this->input->post('bahasa');
                        if (!empty($bahasa)) {
                            $bahasa_data = array();
                            foreach ($bahasa as $bahasa_item) {
                                $bahasa_data[] = array(
                                    'consultant_id' => $consultant_id,
                                    'bahasa_name' => $bahasa_item
                                );
                            }

                            $this->db->insert_batch('bahasa', $bahasa_data);
                        }

                        $spesialisasi = $this->input->post('spesialisasi');
                        if (!empty($spesialisasi)) {
                            $spesialisasi_data = array();
                            foreach ($spesialisasi as $spesialisasi_item) {
                                $spesialisasi_data[] = array(
                                    'consultant_id' => $consultant_id,
                                    'spesialisasi_name' => $spesialisasi_item
                                );
                            }

                            $this->db->insert_batch('spesialisasi', $spesialisasi_data);
                        }

                        $sertifikasi = $this->input->post('sertifikasi');
                        $startDates = $this->input->post('start_date');
                        $endDates = $this->input->post('end_date');

                        if (!empty($sertifikasi)) {
                            $sertifikasi_data = array();

                            foreach ($sertifikasi as $index => $sertifikasi_item) {
                                $sertifikasi_data[] = array(
                                    'consultant_id' => $consultant_id,
                                    'sertifikasi_name' => $sertifikasi_item,
                                    'date_start' => isset($startDates[$index]) ? $startDates[$index] : null,
                                    'date_end' => isset($endDates[$index]) ? $endDates[$index] : null
                                );
                            }

                            $this->db->insert_batch('sertifikasi', $sertifikasi_data);
                        }

                        $pengalaman = $this->input->post('pengalaman');
                        $startDates = $this->input->post('start_date');
                        $endDates = $this->input->post('end_date');

                        if (!empty($pengalaman)) {
                            $pengalaman_data = array();

                            foreach ($pengalaman as $index => $pengalaman_item) {
                                $pengalaman_data[] = array(
                                    'consultant_id' => $consultant_id,
                                    'pengalaman_name' => $pengalaman_item,
                                    'date_start' => isset($startDates[$index]) ? $startDates[$index] : null,
                                    'date_end' => isset($endDates[$index]) ? $endDates[$index] : null
                                );
                            }

                            $this->db->insert_batch('pengalaman', $pengalaman_data);
                        }

                        return redirect('admin/index');
                    }
                }
            }
        }


        $data = [
            'page_title' => 'Tambah Konsultan',
            'user' => $this->db->get_where('users', [
                'email' => $this->session->userdata('email')
            ])->row_array(),
            'bahasa_options' => $this->ConsultantModel->getBahasaOptions()
        ];

        $this->load->view('main/admin/add_consultant', $data);
    }


    public function edit_consultant($id)
    {

        $this->load->model("ConsultantModel");
        $data['consultant'] = $this->ConsultantModel->editConsultant($id);
        $data['page_title'] = 'Edit';
        $data['user']    = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('main/admin/edit_consultant', $data);
    }
}
