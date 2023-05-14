<?php

class SignController extends CI_Controller {
    public function user(){
        $data['page_title'] = 'User Profile';
        $this->load->view('auth/user-profile', $data);
    }
    public function signin(){
        $data['page_title'] = 'Sign In';
        $this->load->view('auth/sign-in', $data);
    }
    
    public function signup(){
        $data['page_title'] = 'Sign Up';
        $this->load->view('auth/sign-up', $data);
    }

    public function signupConsultant(){
        $data['page_title'] = 'Sign Up Consultant';
        $this->load->view('auth/sign-up-consultant', $data);
    }
}