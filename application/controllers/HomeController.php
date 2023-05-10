<?php

class HomeController extends CI_Controller {
    public function index(){
        $this->load->model("ConsultantModel");
        $this->load->model("SeminarModel");
        $data ['consultant'] = $this->ConsultantModel->getConsultant();
        $data ['seminar'] = $this->SeminarModel->getSeminar();
        $data ['page_title'] = 'KBC - Home';
        $this->load->view('home', $data);
    }
    public function faq(){
        $data ['page_title'] = 'KBC - FAQ';
        $this->load->view('main/faq', $data);
    }
    public function blog(){
        $data ['page_title'] = 'KBC - Blog';
        $this->load->view('main/blog', $data);
    }
    public function consultation(){
        $this->load->model("ConsultantModel");
        $data ['consultant'] = $this->ConsultantModel->getConsultant();
        $data ['page_title'] = 'KBC - Consultation';
        $this->load->view('main/consultation', $data);
    }
    public function coaching(){
        $this->load->model("ConsultantModel");
        $data ['consultant'] = $this->ConsultantModel->getConsultant();
        $data ['page_title'] = 'KBC - Coaching';
        $this->load->view('main/coaching', $data);
    }
    public function detail($id){
        $this->load->model("ConsultantModel");
        $data ['consultant'] = $this->ConsultantModel->selectWhereConsultant($id);
        $data ['page_title'] = 'KBC - Detail Consultant';
        $this->load->view('main/detail', $data);
    }
    public function seminar($id){
        $this->load->model("SeminarModel");
        $data ['seminar'] = $this->SeminarModel->selectWhereSeminar($id);
        $data ['page_title'] = 'KBC - Seminar';
        $this->load->view('main/seminar', $data);
    }
    
}