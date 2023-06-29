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
        if($this->session->userdata('role_id') == 3 || $this->session->userdata('role_id') == 2 ){

            $this->load->library('pagination');
            if($this->session->userdata('role_id') == 3){
                $consultantId = $this->db->select('id')
                                ->from('consultant')
                                ->where('users_id',$this->session->userdata('id'))
                                ->get()->result();
                $program = $this->db->select('*')->from('program')->where('consultant_id',$consultantId[0]->id)->count_all_results();

            }else{
                $program = $this->db->count_all('program');
            }
            
            $config['base_url'] = base_url().'Admin/index';
            
            $config['total_rows'] = $program; 
            $config['per_page'] = 5;
            $choice = $config['total_rows'] / $config['per_page']; 
            $config['uri_segment'] = 3; 
            $config['num_links'] = floor($choice); 
            $config['full_tag_open'] = '<div class="container"><button class="button prevNext" id="prev" disabled><i class="bi bi-chevron-left"></i></button><div class="links">';
            $config['full_tag_close'] = '</div><button class="button prevNext" id="next"><i class="bi bi-chevron-right"></i></button></div>';
            $config['first_link'] = '';
            $config['last_link'] = '';
            $config['first_tag_open'] = '';
            $config['first_tag_close'] = '';
            $config['prev_link'] = '';
            $config['prev_tag_open'] = '';
            $config['prev_tag_close'] = '';
            $config['next_link'] = '';
            $config['next_tag_open'] = '';
            $config['next_tag_close'] = '';
            $config['last_tag_open'] = '';
            $config['last_tag_close'] = '';
            $config['cur_tag_open'] = '<a href="#" class="link active">';
            $config['cur_tag_close'] = '</a>';
            $config['num_tag_open'] = '<a href="#" class="link">';
            $config['num_tag_close'] = '</a>';
            
            $this->pagination->initialize($config);

            $this->load->model("ProgramModel");
                
            $offset = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
            // $data['users'] = $this->db->limit($config['per_page'], $offset)->get('users')->result();

            
            $this->load->model("ConsultantModel");
            if($this->session->userdata('role_id') == 2){
                $dataConsultant = $this->ConsultantModel->getConsultant();
                $resultProgram = $this->db->limit($config['per_page'], $offset)->get('program')->result();
            }else{
                $resultProgram = $this->db->select('*')->from('program')->where('consultant_id',$consultantId[0]->id)->limit($config['per_page'], $offset)->get()->result();
                $dataConsultant = $this->ConsultantModel->getConsultantRole($this->session->userdata('id'));
            }
            // var_dump($resultProgram);die;
            $data = [
                
                'consultant' => $dataConsultant,
                'program' =>  $resultProgram,
                'page_title' => 'Dashboard',
                'user' => $this->db->get_where('users', ['email' =>
                $this->session->userdata('email')])->row_array(),
            ];
    
            $this->load->view('main/admin/index', $data);
        }
    }

    public function statusProgram()
    {
        if($this->session->userdata('role_id') == 2){
            if($this->input->post('program_id')){
                $this->db->where('id', $this->input->post('program_id'));
                $this->db->update('program', [
                    'status' => 'aktif'
                ]);
            }

        }
        return redirect('admin/index');

    }
    
    public function searchProgram()
    {
        if($this->session->userdata('role_id') == 3 ||$this->session->userdata('role_id') == 2){
            $searchTerm = $this->input->post('searchProgram');
            if($this->session->userdata('role_id') == 3){
                $consultantId = $this->db->select('id')
                                    ->from('consultant')
                                    ->where('users_id',$this->session->userdata('id'))
                                    ->get()->result();
                $query = $this->db->like('name',$searchTerm)->where('consultant_id',$consultantId[0]->id)->get('program');
                
            }else{
                $this->db->like('name', $searchTerm);
                $query = $this->db->get('program');
    
            }
                   
            $data['results'] = $query->result();
    
            
            $this->load->view('main/admin/searchProgram', $data);

        }
        return redirect(site_url('./'));
    }

    public function tambah()
    {
        // $this->load->view('main/admin/index');
        if ($this->input->post()) {
            // var_dump($this->input->post());die;
            $this->form_validation->set_rules('name', 'name', 'trim|required', [
                'required' => 'Please input name is required',
            ]);
            $this->form_validation->set_rules('tag', 'tag', 'trim|required', [
                'required' => 'Please input tag is required',
            ]);
            $this->form_validation->set_rules('descProgram', 'descProgram', 'trim|required', [
                'required' => 'Please input descProgram is required',
            ]);


            $this->form_validation->set_rules('priceMin', 'priceMin', 'trim|required', [
                'required' => 'Please input priceMin is required',
            ]);
            $this->form_validation->set_rules('priceMax', 'priceMax', 'trim|required', [
                'required' => 'Please input priceMax is required',
            ]);
            // var_dump($this->input->post());
            // var_dump($this->form_validation->run());
            // die;
            $this->form_validation->set_rules('kuota', 'kuota', 'trim|required', [
                'required' => 'Please input kuota is required',
            ]);
            if($this->input->post('priceMin') < $this->input->post('priceMax')){

                if($this->input->post('mode') == 'online'){
                    $url = htmlspecialchars($this->input->post('url'));
                    $lokasi = null;
                    $alamat = null;
                    $kota = null;
                    // echo 'online';
                    // die;
                }else if($this->input->post('mode') == 'offline'){
                    $url = null;
                    $lokasi = htmlspecialchars($this->input->post('tempat'));
                    $alamat = htmlspecialchars($this->input->post('alamat'));
                    $kota = htmlspecialchars($this->input->post('kota'));
                    // echo 'offline';
                    // die;
                }else if($this->input->post('mode') == 'hybrid'){
                    $url = htmlspecialchars($this->input->post('url'));
                    $lokasi = htmlspecialchars($this->input->post('tempat'));
                    $alamat = htmlspecialchars($this->input->post('alamat'));
                    $kota = htmlspecialchars($this->input->post('kota'));
                    // echo 'hy';
                    // die;
                }
                // var_dump(htmlspecialchars($this->input->post('url')));
                // die;

                
                
    
                if ($this->form_validation->run() == TRUE) {
                    // return 'tes';
                   
                    if ($_FILES['photo']['name']) {
                        
                        $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION); // Ekstensi file
                        $allowedExtensions = array('jpg', 'jpeg', 'png');
                        if(in_array($fileExtension,$allowedExtensions)){
    
                            $targetDir = "assets/img/program/"; // Direktori tujuan tempat menyimpan file yang diunggah
        
                            $newFileName = uniqid() . '.' . $fileExtension;
                            $targetFile = $targetDir . $newFileName;
                            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
                                
                                $uploadDb = [
                                    'photo' => $newFileName,
                                    'name' => htmlspecialchars($this->input->post('name'), true),
                                    'tag' => htmlspecialchars($this->input->post('tag'), true),
                                    'type' => htmlspecialchars($this->input->post('type'), true),
                                    'descProgram' => htmlspecialchars($this->input->post('descProgram'), true),
                                    'priceMin' => $this->input->post('priceMin'),
                                    'priceMax' => $this->input->post('priceMax'),
                                    'dateStart' => htmlspecialchars($this->input->post('date_start'), true),
                                    'dateEnd' => htmlspecialchars($this->input->post('date_end'), true),
                                    'time_start' => htmlspecialchars($this->input->post('time_start'), true),
                                    'time_end' => htmlspecialchars($this->input->post('time_end'), true),
                                    'mode' => $this->input->post('mode'),
                                    'url' => $url,
                                    'lokasi' => $lokasi,
                                    'alamat' => $alamat,
                                    'kota' => $kota,
                                    'kuota' => htmlspecialchars($this->input->post('kuota'), true),
                                    'consultant_id' => $this->input->post('users_id')
                                ];
                                $this->db->insert('program', $uploadDb);
                                return redirect('admin/index');
                                } 
                                echo 'tempat eror';
                            }
    
                        
                        echo 'gak upload';
                    }
                    echo 'gak daoer';
                }
            }
            echo 'melebihi max';
            die;
            
        }
        if($this->session->userdata('role_id') == 2)
        {
            $konsul = $this->db->select('id,name')
                        ->from('consultant')
                        ->get()
                        ->result();
        }else{
            $konsul = null;
        }
        $data['consultant'] = $konsul;
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
        if($id){
            if($this->input->post())
            {
                // var_dump($this->input->post('mode'));
                // die;
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

                $this->form_validation->set_rules('priceMax', 'priceMax', 'trim|required', [
                    'required' => 'Please input priceMax is required',
                ]);
                $this->form_validation->set_rules('kuota', 'kuota', 'trim|required', [
                    'required' => 'Please input kuota is required',
                ]);
                if ($this->form_validation->run() == TRUE) {
                    // return 'tes';
                    if($this->input->post('mode') == 'online'){
                        $url = htmlspecialchars($this->input->post('url'));
                        $lokasi = null;
                        $alamat = null;
                        $kota = null;
                        // echo 'online';
                        // die;
                    }else if($this->input->post('mode') == 'offline'){
                        $url = null;
                        $lokasi = htmlspecialchars($this->input->post('tempat'));
                        $alamat = htmlspecialchars($this->input->post('alamat'));
                        $kota = htmlspecialchars($this->input->post('kota'));
                        // echo 'offline';
                        // die;
                    }else if($this->input->post('mode') == 'hybrid'){
                        $url = htmlspecialchars($this->input->post('url'));
                        $lokasi = htmlspecialchars($this->input->post('tempat'));
                        $alamat = htmlspecialchars($this->input->post('alamat'));
                        $kota = htmlspecialchars($this->input->post('kota'));
                        // echo 'hy';
                        // die;
                    }
                    // var_dump($url,$lokasi,)
                    
                    
                    if($_FILES['photo']['name']== $this->input->post('foto') || $_FILES['photo']['name'] == NULL){
                        $newFileName = $this->input->post('foto');
                        
                    }else{

                        if ($_FILES['photo']['name']) {
                            
                            $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION); // Ekstensi file
                            $allowedExtensions = array('jpg', 'jpeg', 'png');
                            if(in_array($fileExtension,$allowedExtensions)){
        
                                $targetDir = "assets/img/program/"; // Direktori tujuan tempat menyimpan file yang diunggah
            
                                $newFileName = uniqid() . '.' . $fileExtension;
                                $targetFile = $targetDir . $newFileName;
                                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
                                    $hapusFileLama = "assets/img/program/".$this->input->post('foto');
                                    unlink($hapusFileLama);

                                   
                                } 
                                    
                            }
        
                            
                            
                        }
                    }
                    $uploadDb = [
                        'photo' => $newFileName,
                        'name' => htmlspecialchars($this->input->post('name'), true),
                        'tag' => htmlspecialchars($this->input->post('tag'), true),
                        'type' => htmlspecialchars($this->input->post('type'), true),
                        'descProgram' => htmlspecialchars($this->input->post('descProgram'), true),
                        'priceMin' => htmlspecialchars($this->input->post('priceMin'), true),
                        'priceMax' => htmlspecialchars($this->input->post('priceMax'),true),
                        'dateStart' => htmlspecialchars($this->input->post('date_start'), true),
                        'dateEnd' => htmlspecialchars($this->input->post('date_end'), true),
                        'time_start' => htmlspecialchars($this->input->post('time_start'), true),
                        'time_end' => htmlspecialchars($this->input->post('time_end'), true),
                        'mode' => $this->input->post('mode'),
                        'url' => $url,
                        'lokasi' => $lokasi,
                        'alamat' => $alamat,
                        'kota' => $kota,
                        'kuota' => htmlspecialchars($this->input->post('kuota'), true),
                        
                    ];
                    $this->db->where('id', $id);
                    $this->db->update('program', $uploadDb);
                    return redirect('admin/index');
                    
                }   
            }
        }
    }

    public function updateConsultant()
    {
        // var_dump($this->input->post('sertifikasi'));
        // var_dump($this->input->post('sertifikasiOld'));
        // die;
        if($_FILES['photo']['name'] == $this->input->post('foto') || $_FILES['photo']['name'] == NULL){
            // echo 'gagal';
            // die;
            $newFileName = $this->input->post('foto');
            
        }else{
            // echo 'berhasil';
            // die;

            if ($_FILES['photo']['name']) {
                
                $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION); // Ekstensi file
                $allowedExtensions = array('jpg', 'jpeg', 'png');
                if(in_array($fileExtension,$allowedExtensions)){

                    $targetDir = "assets/img/consultant/"; // Direktori tujuan tempat menyimpan file yang diunggah

                    $newFileName = uniqid() . '.' . $fileExtension;
                    $targetFile = $targetDir . $newFileName;
                    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
                        $hapusFileLama = "assets/img/consultant/".$this->input->post('foto');
                        unlink($hapusFileLama);

                       
                    } 
                    
                        
                }

                
                
            }
        }
        // $dataSertifikasiDelete = [];
        // for ($i=0; $i < count($this->input->post('sertifikasi')); $i++) { 
        //     for ($j=0; $j < count($this->input->post('sertifikasiOld')) ; $j++) { 
        //         if($this->input->post('sertifikasi')[$i] == $this->input->post('sertifikasiOld')[$j] ){
        //             $dataSertifikasiDelete = $this->input->post('sertifikasi');
        //         }
        //     }
        // }
        $dataBaruSerti = array_diff($this->input->post('sertifikasi'),$this->input->post('sertifikasiOld'));
        $dataSertiDelete = array_diff($this->input->post('sertifikasiOld'),$this->input->post('sertifikasi'));
        $dataPengaDelete = array_diff($this->input->post('pengalamanOld'),$this->input->post('pengalaman'));
        // $dataBaruPenga1 = array_diff($this->input->post('pengalamanOld'),$this->input->post('pengalaman'));
        $dataBaruPenga = array_diff($this->input->post('pengalaman'),$this->input->post('pengalamanOld'));

        
        // $dataBedaPenga = null;
        // $dataBedaSerti = [];

        // if (!empty($dataBaruPenga)) {
        //     $dataBedaPenga = reset($dataBaruPenga);
        // }

        // if (!empty($dataBaruSerti)) {
        //     $dataBedaSerti = reset($dataBaruSerti);
        // }
        // var_dump($dataPengaDelete);
        // var_dump($dataBaruSerti);die;
        
        $data = [
            'photo' => $newFileName,
            'name' => htmlspecialchars($this->input->post('name'), true),
            // 'users_id' => $user[0]['id'],
            // 'profesi' => 'consultant',
            'profile' => htmlspecialchars($this->input->post('profile'), true),
            'alamat' => htmlspecialchars($this->input->post('alamat'), true),
            'email' => htmlspecialchars($this->input->post('email'), true),
            'no_handphone' => htmlspecialchars($this->input->post('no_handphone'), true),
            'akun_media' => htmlspecialchars($this->input->post('akun_media'), true),
            'jumlah_client' => htmlspecialchars($this->input->post('jumlah_client'), true),
                                // 'spesifikasi' => htmlspecialchars($this->input->post('spesifikasi'), true)
        ];



        // $data = [
        //     'photo' => $newFileName,
        //     'name' => htmlspecialchars($this->input->post('name'), true),
        //     'profesi' => 'consultant',
        //     'alamat' => htmlspecialchars($this->input->post('alamat'), true),
        //     'email' => htmlspecialchars($this->input->post('email'), true),
        //     'no_handphone' => $this->input->post('no_handphone'),
        //     'perusahaan' => htmlspecialchars($this->input->post('perusahaan'), true),
        //     'spesialisasi' => htmlspecialchars($this->input->post('spesialisasi'), true),
        //     'akun_media' => htmlspecialchars($this->input->post('akun_media'), true),
        //     'jumlah_client' => $this->input->post('jumlah_client'),
        // ];
        $this->db->where('id', $this->input->post('id'), true);
        $this->db->update('consultant', $data);

        // var_dump($dataPengaDelete);die;
        // var_dump($this->input->post('bahasa'));die;
        if($this->input->post('bahasa') != NUll){
            for ($i=0; $i < count($this->input->post('bahasa')) ; $i++) { 
                $this->db->insert('bahasa',[
                    'bahasa_name' => $this->input->post('bahasa')[$i],
                    'consultant_id' => $this->input->post('id')
                ]);
                
            }
        }
        if($this->input->post('bahasaOld') != NUll){
            for ($i=0; $i < count($this->input->post('bahasaOld')) ; $i++) { 
                $this->db->where('id',$this->input->post('bahasaOld')[$i]);
                $this->db->delete('bahasa');
                
            }
        }

        if($this->input->post('spesialisasiOld') != NUll){
            for ($i=0; $i < count($this->input->post('spesialisasiOld')) ; $i++) { 
                $this->db->where('id',$this->input->post('spesialisasiOld')[$i]);
                $this->db->delete('spesialisasi');
                
            }
        }

        if($this->input->post('spesialisasi') != NUll){
            for ($i=0; $i < count($this->input->post('spesialisasi')) ; $i++) { 
                $this->db->insert('spesialisasi',[
                    'spesialisasi_name' => $this->input->post('spesialisasi')[$i],
                    'consultant_id' => $this->input->post('id')
                ]);
                
            }
        }
        if($dataSertiDelete != NULL){
            for ($i=3; $i < count($dataSertiDelete) + 3 ; $i++) { 
                $this->db->where('sertifikasi_name',$dataSertiDelete[$i]);
                $this->db->delete('sertifikasi');
            }
        }
        

        if($dataBaruSerti != NUll ){
            for ($i=3; $i < count($dataBaruSerti) + 3  ; $i++) { 
                $this->db->insert('sertifikasi',[
                    'sertifikasi_name' => $dataBaruSerti[$i],
                    'date_start' => $this->input->post('start_date')[$i - 3],
                    'date_end' => $this->input->post('end_date')[$i - 3],
                    'consultant_id' => $this->input->post('id')
                ]);
                
            }
        }

        if($dataPengaDelete != NULL){
            for ($i=3; $i < count($dataPengaDelete) + 3 ; $i++) { 
                $this->db->where('pengalaman_name',$dataPengaDelete[$i]);
                $this->db->delete('pengalaman');
            }
        }

        if($dataBaruPenga != NUll ){
            for ($i=3; $i < count($dataBaruPenga) + 3 ; $i++) { 
                $this->db->insert('pengalaman',[
                    'pengalaman_name' => $dataBaruPenga[$i],
                    'date_start' => $this->input->post('start_pengalaman_date')[$i - 3],
                    'date_end' => $this->input->post('end_pengalaman_date')[$i - 3],
                    'consultant_id' => $this->input->post('id')
                ]);
                
            }
        }

        
        
        

        return redirect('admin/index');
    }

    public function delete()
    {
        // var_dump($this->input->get('data'));die;
        $photo = $this->db->select("photo")
                            ->from('program')
                            ->where('id',$this->input->get('data'))
                            ->get()
                            ->result();
        // var_dump($photo[0]->photo);die;
        $path = 'assets/img/program/'.$photo[0]->photo;
        if(file_exists($path)){
            unlink($path);
        }
        $this->db->where('id',$this->input->get('data'));
        $this->db->delete('program');
        return redirect('admin/index');
    }

    public function delete_consultant()
    {
        // hapus consultant
        
        $photo = $this->db->select("photo,users_id")
                            ->from('consultant')
                            ->where('id',$this->input->get('data'))
                            ->get()
                            ->result();
        $userId = $this->db->select('id')
                                ->from('users')
                                ->where('id',$photo[0]->users_id)
                                ->get()
                                ->result();
        $programDelete = $this->db->select('id')
                                    ->from('program')
                                    ->where('consultant_id',$this->input->get('data'))
                                    ->get()
                                    ->result();
        // var_dump($programDelete[0]->id);die;
        // var_dump($photo[0]->photo);die;
        $path = 'assets/img/consultant/'.$photo[0]->photo;
        
        if(file_exists($path)){
            unlink($path);
            // $this->db->where('id',$userId[0]->id);
            // $this->db->delete('users');

            // $this->db->where('id',$id);
            // $this->db->delete('consultant');
            // return redirect('admin/index');
        }
        if(count($programDelete) > 0){
            for ($i=0; $i < count($programDelete); $i++) { 
                $this->db->where('id',$programDelete[$i]->id);
                $this->db->delete('program');
            }
        }
        $this->db->where('id',$userId[0]->id);
        $this->db->delete('users');

        $this->db->where('id',$this->input->get('data'));
        $this->db->delete('consultant');
        return redirect('admin/index');
    }

    public function add_consultant()
    {

        if ($this->input->post()) {
            // $i = 1;
            // var_dump($this->input->post('bahasa')[$i]);die;

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
            
            // var_dump($this->form_validation->run());
            // die;
            
            
            if ($this->form_validation->run() == TRUE) {
                if ($_FILES['photo']['name']) {
                    
                    $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION); // Ekstensi file
                    $allowedExtensions = array('jpg', 'jpeg', 'png');
                    if(in_array($fileExtension,$allowedExtensions)){

                        $targetDir = "assets/img/consultant/"; // Direktori tujuan tempat menyimpan file yang diunggah
    
                        $newFileName = uniqid() . '.' . $fileExtension;
                        $targetFile = $targetDir . $newFileName;
                        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
                            // echo 'berhasil';
                            // die;
                            $this->db->insert('users',[
                                'name' => htmlspecialchars($this->input->post('name'), true),
                                'email' => htmlspecialchars($this->input->post('email'), true),
                                'password' => md5($this->input->post('password'),true),
                                'role_id' => 3
                            ]);

                            $user = $this->db->select('id,name')
                                            ->from('users')
                                            ->where('name',$this->input->post('name'))
                                            ->get()
                                            ->result_array();

                            $uploadConsultant = [
                                'photo' => $newFileName,
                                'name' => htmlspecialchars($this->input->post('name'), true),
                                'users_id' => $user[0]['id'],
                                'profesi' => 'consultant',
                                'profile' => htmlspecialchars($this->input->post('profile'), true),
                                'alamat' => htmlspecialchars($this->input->post('alamat'), true),
                                'email' => htmlspecialchars($this->input->post('email'), true),
                                'no_handphone' => htmlspecialchars($this->input->post('no_handphone'), true),
                                'akun_media' => htmlspecialchars($this->input->post('akun_media'), true),
                                'jumlah_client' => htmlspecialchars($this->input->post('jumlah_client'), true),
                                // 'spesifikasi' => htmlspecialchars($this->input->post('spesifikasi'), true),
                            ];
                            $this->db->insert('consultant', $uploadConsultant);
                            // echo 'berhasil';
                            // die;

                            $consultant = $this->db->select('id,name')
                                                    ->from('consultant')
                                                    ->where('name',$this->input->post('name'))
                                                    ->get()
                                                    ->result_array();
                            
                            if($this->input->post('bahasa') != NUll){
                                for ($i=0; $i < count($this->input->post('bahasa')) ; $i++) { 
                                    $this->db->insert('bahasa',[
                                        'bahasa_name' => $this->input->post('bahasa')[$i],
                                        'consultant_id' => $consultant[0]['id']
                                    ]);
                                    
                                }
                            }

                            if($this->input->post('spesialisasi') != NULL){
                                for ($i=0; $i < count($this->input->post('spesialisasi')) ; $i++) { 
                                    $this->db->insert('spesialisasi',[
                                        'spesialisasi_name' => $this->input->post('spesialisasi')[$i],
                                        'consultant_id' => $consultant[0]['id']
                                    ]);
                                    
                                }
                            }

                            // echo 'berhasil';
                            // die;

                            if($this->input->post('sertifikasi') != NULL){
                                for ($i=0; $i < count($this->input->post('sertifikasi')) ; $i++) { 
                                    $this->db->insert('sertifikasi',[
                                        'sertifikasi_name' => $this->input->post('sertifikasi')[$i],
                                        'date_start' => $this->input->post('start_date')[$i],
                                        'date_end' => $this->input->post('end_date')[$i],
                                        'consultant_id' => $consultant[0]['id']
                                    ]);
                                    
                                }
                            }

                            if($this->input->post('pengalaman') != NULL){
                                for ($i=0; $i < count($this->input->post('pengalaman')) ; $i++) { 
                                    $this->db->insert('pengalaman',[
                                        'pengalaman_name' => $this->input->post('pengalaman')[$i],
                                        'date_start' => $this->input->post('start_pengalaman_date')[$i],
                                        'date_end' => $this->input->post('end_pengalaman_date')[$i],
                                        'consultant_id' => $consultant[0]['id']
                                    ]);
                                    
                                }
                            }
                            
                            // echo 'berhasil';
                            // die;


                            return redirect('admin/index');
                            } 
                            
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

    public function edit_consultant($id)
    {
        $bahasa =$this->db->select('bahasa.*')
                    ->from('consultant')
                    ->join('bahasa', 'consultant.id = bahasa.consultant_id')
                    ->where('bahasa.consultant_id',$id)
                    ->get();
        
        $spesialisasi =$this->db->select('spesialisasi.*')
                    ->from('consultant')
                    ->join('spesialisasi', 'consultant.id = spesialisasi.consultant_id')
                    ->where('spesialisasi.consultant_id',$id)
                    ->get();
        // var_dump($bahasa->result());die;
        $sertifikasi =$this->db->select('sertifikasi.*')
                    ->from('consultant')
                    ->join('sertifikasi', 'consultant.id = sertifikasi.consultant_id')
                    ->where('sertifikasi.consultant_id',$id)
                    ->get();

        $pengalaman =$this->db->select('pengalaman.*')
                    ->from('consultant')
                    ->join('pengalaman', 'consultant.id = pengalaman.consultant_id')
                    ->where('pengalaman.consultant_id',$id)
                    ->get();
        $this->load->model("ConsultantModel");
        $data['consultant'] = $this->ConsultantModel->editConsultant($id);
        $data['page_title'] = 'Edit';
        $data['bahasaCons'] = $bahasa->result();
        $data['spesialisasiCons'] = $spesialisasi->result();
        $data['sertifikasiCons'] = $sertifikasi->result();
        $data['pengalamanCons'] = $pengalaman->result(); 
        $data['user']    = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('main/admin/edit_consultant', $data);
    }
}