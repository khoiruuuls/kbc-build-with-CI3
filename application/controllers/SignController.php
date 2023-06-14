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
        $data = [
            'page_title' => 'User Profile',
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('auth/user-profile', $data);
    }

    public function signin()
    {
        $data['page_title'] = 'Sign In';
        $this->load->view('auth/sign-in', $data);
    }

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

        $data['page_title'] = 'Sign Up';
        $this->load->view('auth/sign-up', $data);
    }

    public function signupConsultant()
    {
        if($this->input->post()){
            // var_dump($this->input->post());
            // die;
            if ($this->input->post('cek') == 'on') {

                //pengecekan data
                $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[users.name]');
                $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]', [
                    'required' => 'Please input password is required',
                    'valid_email' => 'The input you enter is not in the form of an email',
                    'is_unique' => 'The e-mail already exists'
                ]);
                $this->form_validation->set_rules('no_handphone', 'no_handphone', 'trim|required|numeric', [
                    'required' => 'Please input No Handphone is required',
                    'numeric' => 'The input you enter is not of type number'
                ]);

                $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|matches[konfirmasi]', [
                    'required' => 'Please input password is required',
                    'min_length' => 'Password too short!'
                ]);
                $this->form_validation->set_rules('password', 'konfirmasi', 'trim|required|matches[password]');
                // var_dump($this->form_validation->run());
                // die;
                if ($this->form_validation->run() != false) {
                    $dataUser = [
                        'name' => htmlspecialchars($this->input->post('name', true)),
                        'email' => htmlspecialchars($this->input->post('email', true)),
                        'password' => md5($this->input->post('password')),
                        // 'no' => htmlspecialchars($this->input->post('no_handphone', true)),
                        'role_id' => 3
                    ];
                    $this->db->insert('users', $dataUser);
                    $user = $this->db->select('id,name')
                                        ->from('users')
                                        ->where('name',$this->input->post('name'))
                                        ->get()
                                        ->result_array();
                    
                    $dataConsul = [
                        'name' => htmlspecialchars($this->input->post('name',true)),
                        'users_id' => $user[0]['id'],
                        'no_handphone' => $this->input->post('no_handphone'),
                        'provinsi' => $this->input->post('provinsi')
                    ];
                    $this->db->insert('consultant',$dataConsul);
                    
                    $this->session->set_flashdata('message', 'Congratulation! your account has been created. Please login');
                    return redirect('auth/sign-in');
                    // redirect('auth/sign-up');
                }
            }

        }
        //menggunakan api provinsi
        $Key_URL = 'https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json';
        $provinsi = file_get_contents($Key_URL);
        // $data['provinsi'] = $provinsi;
        $data['provinsi'] = json_decode($provinsi,true);
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
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role_id' => $user->role_id
                ]);
                if ($user->role_id == 1) {
                    return redirect(site_url('./'));
                } elseif($user->role_id == 3){
                    return redirect('dashboard');
                }else {
                    return redirect('admin');
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
