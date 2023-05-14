<?php

class SignController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }


    public function signin(){
        $data['title_page'] = 'KBC - Sign In';
        $this->load->view('auth/sign-in', $data);
    }
    
    public function signup(){
        $data['title_page'] = 'KBC - Sign Up';
        $this->load->view('auth/sign-up', $data);
    }

    public function signupConsultant(){
        $data['title_page'] = 'KBC - Sign Up Consultant';
        $this->load->view('auth/sign-up-consultant', $data);
    }


    //POST

    public function RegisterUser()
    {
        
        

        //mengatasi jika user melakukan url langsung tanpa disubmit
        if(!$this->input->post())
        {
            return redirect('auth/sign-up');
        }
        
        if($this->input->post('cek') != 'on')
        {
            return redirect('auth/sign-up');
        }
        //pengecekan data
        $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[users.name]');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]',[
            'required' => 'Please input password is required',
            'valid_email' => 'The input you enter is not in the form of an email',
            'is_unique' => 'The e-mail already exists'
        ]);
        $this->form_validation->set_rules('noHp', 'no', 'trim|required|numeric',[
            'required' => 'Please input No Handphone is required',
            'numeric' => 'The input you enter is not of type number'
        ]);
        
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|matches[konfirmasi]', [
            'required' => 'Please input password is required',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password', 'konfirmasi', 'trim|required|matches[password]');
        // if($this->input->post('password') != $this->input->post('konfirmasi'))
        // {
        //     return redirect('auth/sign-up');
        // }
        // echo 'tes';
        // var_dump($this->input->post());
        // var_dump($this->form_validation->run());
        // return 'tes';
        // var_dump($this->form_validation->run());
        if ($this->form_validation->run() == false) {
            // $data['title_page'] = 'KBC - Sign Up';
            // $this->load->view('auth/sign-up', $data);
            return redirect('auth/sign-up');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => md5($this->input->post('password')),
                'no' => htmlspecialchars($this->input->post('noHp',true)),
                'role_id' => 1
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', 'Congratulation! your account has been created. Please login');
            return redirect('auth/sign-in');
        }
    
    }


    public function LoginUser()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        // Verifikasi email dan password di database
        $query = $this->db->get_where('users', array('email' => $email));
        $user = $query->row();
        
        if ($user && password_verify($password, $user->password)) {
            // Login berhasil, buat sesi pengguna
            $this->session->set_userdata('id', $user->id);
            
            // Alihkan ke halaman dashboard atau halaman yang sesuai
            return redirect('tes/tes');
        } else {
            // Login gagal, tampilkan pesan kesalahan
            return redirect('auth/sign-in');
        }
    }
}