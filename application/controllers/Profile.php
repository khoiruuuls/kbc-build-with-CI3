<?php

class Profile extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('text');
    }

    public function index()
    {

        if (!$this->session->userdata('name')) {
            return redirect(site_url('./'));
        }
        if ($this->input->post()) {

            if ($this->input->post('name') == $this->session->userdata('name')) {
                $this->form_validation->set_rules('name', 'name', 'trim|required', [
                    'required' => 'Please input name is required',

                ]);
            } else {
                $this->form_validation->set_rules('name', 'name', 'trim|required|is_unique[users.email]', [
                    'required' => 'Please input name is required',
                    'is_unique' => 'The name already exists'
                ]);
            }
            if ($this->input->post('email') == $this->session->userdata('email')) {
                $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email', [
                    'required' => 'Please input email is required',
                    'valid_email' => 'The input you enter is not in the form of an email',
                ]);
            } else {
                $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]', [
                    'required' => 'Please input email is required',
                    'valid_email' => 'The input you enter is not in the form of an email',
                    'is_unique' => 'The e-mail already exists'
                ]);
            }
            // var_dump($this->form_validation->run());
            //     die;
            // var_dump($this->input->post());
            // die;
            if ($this->input->post('tahun') == null || $this->input->post('bulan') == null || $this->input->post('tahun') == null) {
                $date = null;
            } else {
                $date = date('Y-m-d', strtotime($this->input->post('tahun') . "-" . $this->input->post('bulan') . "-" . $this->input->post('hari')));
            }
            if ($this->form_validation->run() == true) {
                $data = [
                    'name' => htmlspecialchars($this->input->post('name')),
                    'email' => htmlspecialchars($this->input->post('email')),
                    'no' => $this->input->post('no'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'date' => $date
                ];
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('users', $data);

                return redirect(site_url('./'));
            }
        }
        $data['user'] = $this->db->get_where('users', array('name' => $this->session->userdata('name')))->row_array();
        $data['page_title'] = 'Ubah Profile';


        $this->load->view('main/profile/index', $data);
    }


    public function settingsBank()
    {
        if (!$this->session->userdata('name')) {
            return redirect(site_url('./'));
        }
        if ($this->input->post()) {
            $this->form_validation->set_rules('nomer', 'nomer', 'trim|required|is_unique[bank.nomer]|numeric', [
                'required' => 'Please input nomer is required',
                'is_unique' => 'The nomer already exists',
                'numeric' => 'The input you enter is not of type number'
            ]);
            $this->form_validation->set_rules('bb/tt', 'bb/tt', 'trim|required|is_unique[bank.bb/tt]', [
                'required' => 'Please input bb/tt is required',
                'is_unique' => 'The bb/tt already exists'
            ]);
            $this->form_validation->set_rules('cvv', 'cvv', 'trim|required|is_unique[bank.cvv]|numeric', [
                'required' => 'Please input cvv is required',
                'is_unique' => 'The cvv already exists',
                'numeric' => 'The input you enter is not of type number'
            ]);
            $this->form_validation->set_rules('name_kartu', 'name_kartu', 'trim|required|is_unique[bank.name_kartu]', [
                'required' => 'Please input name_kartu is required',
                'is_unique' => 'The name_kartu already exists'
            ]);

            if ($this->form_validation->run() == true) {
                $data = [
                    'name' => 'BCA',
                    'bb/tt' => htmlspecialchars($this->input->post('bb/tt')),
                    'nomer' => $this->input->post('nomer'),
                    'name_kartu' => htmlspecialchars($this->input->post('name_kartu')),
                    'cvv' => $this->input->post('cvv'),
                    'users_id' => $this->input->post('id')
                ];
                $this->db->insert('bank', $data);
                return redirect(site_url('./'));
            }
        }
        $data['user'] = $this->db->get_where('users', array('name' => $this->session->userdata('name')))->row_array();
        $this->db->where('users_id', $data['user']['id']);
        $query = $this->db->get('bank');
        $data['bank'] = $query->result();
        $data['page_title'] = 'Bank';
        $this->load->view('main/profile/settingsBank', $data);
    }


    public function password()
    {
        if (!$this->session->userdata('name')) {
            return redirect(site_url('./'));
        }
        if ($this->input->post()) {
            // var_dump(md5($this->input->post('old_password')) ,$this->input->post('password_asli'));
            // die;
            if (md5($this->input->post('old_password')) == $this->input->post('password_asli')) {
                $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|matches[konfirmasi]');
                $this->form_validation->set_rules('password', 'konfirmasi', 'trim|required|matches[password]');

                if ($this->form_validation->run() == true) {

                    $data = [
                        'password' => $this->input->post('password')
                    ];
                    $this->db->where('id', $this->input->post('id'));
                    $this->input->update('users', $data);
                    redirect(site_url('./'));
                }
            }
        }
        $data['user'] = $this->db->get_where('users', array('name' => $this->session->userdata('name')))->row_array();
        $data['page_title'] = 'Ubah Password';
        $this->load->view('main/profile/password', $data);
    }

    public function wishlist()
    {
        $this->load->model("ProgramModel");
        $data['program'] = $this->ProgramModel->getProgram();
        $data['page_title'] = 'Wishlist';
        $data['user']    = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('main/profile/wishlist', $data);
    }
    public function myprogram()
    {
        $this->load->model("ProgramModel");
        $data['program'] = $this->ProgramModel->getProgram();
        $data['page_title'] = 'My Program';
        $data['user']    = $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('main/profile/myprogram', $data);
    }
}