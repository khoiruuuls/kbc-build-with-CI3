<?php

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        //tabel tabel
        $this->load->view('main/admin/index');
    }

    public function tambah()
    {
        // $this->load->view('main/admin/index');
        if($this->input->post())
        {
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
            if($this->form_validation->run() == TRUE){
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
                            'name' => htmlspecialchars($this->input->post('name'),true),
                            'tag' => htmlspecialchars($this->input->post('tag'),true),
                            'type' => htmlspecialchars($this->input->post('type'),true),
                            'descProgram' => htmlspecialchars($this->input->post('descProgram'),true),
                            'priceMin' => htmlspecialchars($this->input->post('priceMin'),true),
                            'priceMax' => $priceMax,
                            'dateStart' => htmlspecialchars($this->input->post('date_start'),true),
                            'dateEnd' => htmlspecialchars($this->input->post('date_end'),true),
                            'time_start' => htmlspecialchars($this->input->post('time_start'),true),
                            'time_end' => htmlspecialchars($this->input->post('time_end'),true),
                            'mode' => 'online',
                            'url' => htmlspecialchars($this->input->post('url'),true),
                            'lokasi' => null,
                            'alamat' => null,
                            'kota' => null,
                            'kuota' => htmlspecialchars($this->input->post('kuota'),true),
                        ];
                        $this->db->insert('program',$uploadDb);
                        return redirect('admin/index');

                    }
                    echo 'gak upload';
                
                }
            echo 'gak daoer';
            }
        }
        $data['user']    = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['page_title'] = 'Sign In';
        $this->load->view('main/admin/tambah', $data);
    }
}
