<?php 


class Seminar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        // $this->load->model('SeminarModel');
        // $this->load->model('UserModel');
    }

    public function index()
    {
        if(isset($_GET['search'])){
            $this->db->like('name', $this->input->get('search'));
            $query = $this->db->get('seminar');
            // $data['seminars'] = $query->result()
        }elseif($this->input->get('opsi')){
            $this->db->where('status',$this->input->get('opsi'));
            $query = $this->db->get('seminar');
        }else{
            $query = $this->db->select('id,name,date_start ,status,photo')
                                ->from('seminar')
                                ->where('consultant_id', 0)
                                ->get();

        }

            // var_dump($query->result());
        


        

        $data['seminar'] = $query->result();
        return $this->load->view('main/seminar/index', $data);
    }

    public function hapus()
    {
        $path = 'assets/img/program/'.$this->input->post('file');
        if(file_exists($path)){
            unlink($path);
            $this->db->where('id',$this->input->post('id'));
            $this->db->delete('seminar');
            return redirect('seminar/index');
        }
        return redirect('seminar/index');
    }

    public function detail($id)
    {
        $query = $this->db->get_where('seminar', array('id' => $id));

        $data['detail'] = $query->row();
        // var_dump();
        $this->load->view('main/seminar/detail',$data);
    }

    public function edit($id)
    {
        if($this->input->post())
        {
        
           
            $type = '';
            $typeDataInput = [];
            if($this->input->post('type') == 'online'){
                $type = 'Online';
                $typeDataInput = [
                    'url' => $this->input->post('url'),
                    'lokasi' => null,
                    'alamat' => null,
                    'kota' => null
                ];
            }else{
            
                if($this->input->post('type') == 'hybrid'){
                    
                    $type = 'Hybrid';
                    $typeDataInput = [
                        'url' => $this->input->post('url'),
                        'lokasi' => $this->input->post('lokasi'),
                        'alamat' => $this->input->post('alamat'),
                        'kota' => $this->input->post('kota')
                    ];
                }else{
                    $typeDataInput = [
                        'url' => null,
                        'lokasi' => $this->input->post('lokasi'),
                        'alamat' => $this->input->post('alamat'),
                        'kota' => $this->input->post('kota')
                    ];
                    $type = 'Offline';
                }
            }

            // var_dump($this->upload->data());
            // die;
            if($this->input->post('photo') == $this->input->post('foto')){
                $fiksFoto = $this->input->post('photo');
            }else{
                if(isset($_FILES['foto']['name'])){
                    $config['upload_path'] = 'assets/img/program/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 2048;
                    $config['filename'] = $_FILES['foto']['name'];
                    
                    $this->load->library('upload', $config);
                    
                    if ($this->upload->do_upload('foto')) {
                        $fiksFoto = $this->upload->data('file_name');
                        
                        
                       
                    } 
                }

            }

            if($fiksFoto){
                $data = [
                    'name' => htmlspecialchars($this->input->post('judul', true)),
                    'consultant_id' => 1,
                    'type' => $type,
                    'status' => $this->input->post('status'),
                    'sub_title' => htmlspecialchars($this->input->post('format', true)),
                    'date_start' => htmlspecialchars($this->input->post('date_start',true)),
                    'date_end' => htmlspecialchars($this->input->post('date_end',true)),
                    'time_start' => htmlspecialchars($this->input->post('time_start',true)),
                    'time_end' => htmlspecialchars($this->input->post('time_end',true)),
                    'link' => $typeDataInput['url'],
                    'lokasi' => $typeDataInput['lokasi'],
                    'alamat' => $typeDataInput['alamat'],
                    'kota' => $typeDataInput['kota'],
                    'price' => htmlspecialchars($this->input->post('harga',true)),
                    'kuota' => htmlspecialchars($this->input->post('kuota',true)),
                    'photo' => $fiksFoto
                    
                ];
                $this->db->where('id', $id);
                $this->db->update('seminar', $data);
                // $this->session->set_flashdata('message', 'Congratulation! your account has been created. Please login');
                return redirect('seminar/index');

            }
                    
                // redirect('auth/sign-up');
           

        }
        
        $query = $this->db->get_where('seminar', array('id' => $id));

        $data['edit'] = $query->row();
        $this->load->view('main/seminar/edit',$data);
    }

    public function tambah()
    {
        
        if($this->input->post())
        {
           
            $type = '';
            $typeDataInput = [];
            if($this->input->post('type') == 'online'){
                $type = 'Online';
                $typeDataInput = [
                    'url' => $this->input->post('url'),
                    'lokasi' => null,
                    'alamat' => null,
                    'kota' => null
                ];
            }else{
            
                if($this->input->post('type') == 'hybrid'){
                    
                    $type = 'Hybrid';
                    $typeDataInput = [
                        'url' => $this->input->post('url'),
                        'lokasi' => $this->input->post('lokasi'),
                        'alamat' => $this->input->post('alamat'),
                        'kota' => $this->input->post('kota')
                    ];
                }else{
                    $typeDataInput = [
                        'url' => null,
                        'lokasi' => $this->input->post('lokasi'),
                        'alamat' => $this->input->post('alamat'),
                        'kota' => $this->input->post('kota')
                    ];
                    $type = 'Offline';
                }
            }

            // var_dump($this->upload->data());
            // die;
            if(isset($_FILES['foto']['name'])){
                $config['upload_path'] = 'assets/img/program/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 2048;
                $config['filename'] = $_FILES['foto']['name'];
                
                $this->load->library('upload', $config);
                
                if ($this->upload->do_upload('foto')) {
                    $data = [
                        'name' => htmlspecialchars($this->input->post('judul', true)),
                        'consultant_id' => 1,
                        'type' => $type,
                        'status' => $this->input->post('status'),
                        'sub_title' => htmlspecialchars($this->input->post('format', true)),
                        'date_start' => htmlspecialchars($this->input->post('date_start',true)),
                        'date_end' => htmlspecialchars($this->input->post('date_end',true)),
                        'time_start' => htmlspecialchars($this->input->post('time_start',true)),
                        'time_end' => htmlspecialchars($this->input->post('time_end',true)),
                        'link' => $typeDataInput['url'],
                        'lokasi' => $typeDataInput['lokasi'],
                        'alamat' => $typeDataInput['alamat'],
                        'kota' => $typeDataInput['kota'],
                        'price' => htmlspecialchars($this->input->post('harga',true)),
                        'kuota' => htmlspecialchars($this->input->post('kuota',true)),
                        'photo' => $this->upload->data('file_name')
                        
                    ];
                    
                    $this->db->insert('seminar', $data);
                    // $this->session->set_flashdata('message', 'Congratulation! your account has been created. Please login');
                    return redirect('seminar/index');
                } 

            }
                    
                // redirect('auth/sign-up');
           

        }else{

            return $this->load->view('main/seminar/tambah');
        }
        
            // echo 'tes';
        

    }
}