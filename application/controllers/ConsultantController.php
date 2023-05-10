<?php

class ConsultantController extends CI_Controller {
    public function index(){
        $this->load->model("ConsultantModel");
        $data ['consultant'] = $this->ConsultantModel->getConsultant();
    }
}
