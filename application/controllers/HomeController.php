<?php

class HomeController extends CI_Controller {
    public function index(){
        $this->load->model("ConsultantModel");
        $this->load->model("SeminarModel");
        $this->load->model("ProgramModel");
        $data ['consultant'] = $this->ConsultantModel->getConsultant();
        $data ['program'] = $this->ProgramModel->get4Program();
        $data ['page_title'] = 'Home';
        $this->load->view('home', $data);
    }
    public function faq(){
        $data ['page_title'] = 'FAQ';
        $this->load->view('main/faq', $data);
    }
    public function blog(){
        $data ['page_title'] = 'Blog';
        $this->load->view('main/blog', $data);
    }
    public function consultation(){
        $this->load->model("ConsultantModel");
        $data ['consultant'] = $this->ConsultantModel->getConsultant();
        $data ['page_title'] = 'Consultation';
        $this->load->view('main/consultation', $data);
    }
    public function coaching(){
        $this->load->model("ProgramModel");
        $data ['program'] = $this->ProgramModel->getProgram();
        $data ['page_title'] = 'Coaching';
        $this->load->view('main/coaching', $data);
    }
    public function detail($id){
        $this->load->model("ConsultantModel");
        $data ['consultant'] = $this->ConsultantModel->selectWhereConsultant($id);
        $data ['page_title'] = 'Detail Consultant';
        $this->load->view('main/detail', $data);
    }
    public function seminar($id){
        $this->load->model("SeminarModel");
        $data ['seminar'] = $this->SeminarModel->selectWhereSeminar($id);
        $data ['page_title'] = 'KBC - Seminar';
        $this->load->view('main/seminar', $data);
    }
    public function detailProgram($id){
        $this->load->model("ProgramModel");
        $data ['program'] = $this->ProgramModel->selectWhereProgram($id);
        $data ['page_title'] = 'Program';
        $this->load->view('main/detail/program', $data);
    }
    
}