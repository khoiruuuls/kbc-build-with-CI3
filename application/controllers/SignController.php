<?php

class SignController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UserModel');
    }

    public function user()
    {
        $data['page_title'] = 'User Profile';
        $data['user']    = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('auth/user-profile', $data);
    }

    public function signin()
    {
        $data['page_title'] = 'Sign In';
        $this->load->view('auth/sign-in', $data);
    }

    // public function signinadmin()
    // {
    //     $data['user']    = $this->db->get_where('users', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['page_title'] = 'Sign In';
    //     $this->load->view('main/admin/index', $data);
    // }



    public function signup()
    {

        if ($this->input->post()) {

            if ($this->input->post('cek') == 'on') {

                //pengecekan data
                $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[users.name]');
                $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]', [
                    'required' => 'Please input password is required',
                    'valid_email' => 'The input you enter is not in the form of an email',
                    'is_unique' => 'The e-mail already exists'
                ]);
                $this->form_validation->set_rules('noHp', 'noHp', 'trim|required|numeric', [
                    'required' => 'Please input No Handphone is required',
                    'numeric' => 'The input you enter is not of type number'
                ]);

                $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|matches[konfirmasi]', [
                    'required' => 'Please input password is required',
                    'min_length' => 'Password too short!'
                ]);
                $this->form_validation->set_rules('password', 'konfirmasi', 'trim|required|matches[password]');

                if ($this->form_validation->run() != false) {
                    $data = [
                        'name' => htmlspecialchars($this->input->post('name', true)),
                        'email' => htmlspecialchars($this->input->post('email', true)),
                        'password' => md5($this->input->post('password')),
                        'no' => htmlspecialchars($this->input->post('noHp', true)),
                        'role_id' => 1
                    ];

                    $this->db->insert('users', $data);
                    $this->session->set_flashdata('message', 'Congratulation! your account has been created. Please login');
                    return redirect('auth/sign-in');
                    // redirect('auth/sign-up');
                }
            }
        }


        $data['title_page'] = 'KBC - Sign Up';
        $data['page_title'] = 'Sign Up';
        $this->load->view('auth/sign-up', $data);
    }

    public function signupConsultant()
    {
        $data['page_title'] = 'Sign Up Consultant';
        $this->load->view('auth/sign-up-consultant', $data);
    }

    public function LoginUser()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Verifikasi email dan password di database
        $query = $this->db->get_where('users', array('email' => $email));
        $user = $query->row();


        if ($user->password == md5($password)) {
            $pengecekan = $this->db->get_where('users', array(
                'email' => $email,
                'password' => md5($password)
            ));
            if ($pengecekan->row()) {
                $this->session->set_userdata([
                    'name' => $user->name,
                    'email' => $user->email,
                    'role_id' => $user->role_id
                ]);
                if ($user->role_id == 1) {
                    return redirect(site_url('./'));
                } else {
                    return redirect('admin/tambah');
                }
            }
            // var_dump($pengecekan->row());
        }

        return redirect('auth/sign-in');
    }

    public function signout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        redirect('./');
    }
}