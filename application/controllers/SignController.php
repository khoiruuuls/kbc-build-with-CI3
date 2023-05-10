<?php

class SignController extends CI_Controller {
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
}