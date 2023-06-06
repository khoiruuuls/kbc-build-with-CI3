<?php

class HomeController extends CI_Controller
{

    public function index()
    {
        $this->load->model("ConsultantModel");
        $this->load->model("SeminarModel");
        $this->load->model("ProgramModel");
        $data = [
            'program' => $this->ProgramModel->get4Program(),
            'consultant' => $this->ConsultantModel->get3Consultant(),
            'service' => $this->ProgramModel->typeService(),
            'page_title' => 'Home',
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        $this->load->view('home', $data);
    }

    public function faq()
    {
        $data = [
            'page_title' => 'FAQ',
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        $this->load->view('main/faq', $data);
    }

    public function blog()
    {
        $data = [
            'page_title' => 'Blog',
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        $this->load->view('main/blog', $data);
    }

    public function consultation()
    {
        $this->load->model("ConsultantModel");
        $this->load->model("ConsultantModel");
        $this->load->model("ProgramModel");

        $data = [
            'consultant' => $this->ConsultantModel->getConsultant(),
            'page_title' => 'Consultant',
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        $this->load->view('main/consultation', $data);
    }

    public function eksplorasi()
    {
        $this->load->model("ProgramModel");

        $data = [
            'program' => $this->ProgramModel->getProgram(),
            'page_title' => 'Eksplorasi',
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
        ];
        $this->load->view('main/eksplorasi', $data);
    }

    public function detail($id)
    {
        $this->load->model("ConsultantModel");
        $this->load->model("ProgramModel");

        $data = [
            'programs' => $this->ConsultantModel->getProgramsByConsultantId($id), // Retrieve associated program(s)
            'consultant' => $this->ConsultantModel->selectWhereConsultant($id),
            'program_count' => $this->ConsultantModel->countProgramsByConsultantId($id), // Count of programs
            'page_title' => 'Detail Consultant',
            'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
            'languages' => $this->db->where('consultant_id', $id)->get('bahasa')->result(),
            'sertifikasis' => $this->db->where('consultant_id', $id)->get('sertifikasi')->result(),
            'pengalamans' => $this->db->where('consultant_id', $id)->get('pengalaman')->result(),
            'spesialisasis' => $this->db->where('consultant_id', $id)->get('spesialisasi')->result(),
        ];

        $this->load->view('main/detail', $data);
    }

    public function detailProgram($id)
    {
        $this->load->model("ProgramModel");
        $this->load->model("ConsultantModel");
        $data = [
            'program' => $this->ProgramModel->selectWhereProgram($id),
            'consultants' => $this->ConsultantModel->getConsultantsByProgramId($id), // Retrieve consultants associated with the program
            'consultant_count' => $this->ProgramModel->countConsultantsByProgramId($id), // Count of consultants
            'page_title' => 'Program',
            'users' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('main/detail/program', $data);
    }

    public function seminar($id)
    {
        $this->load->model("SeminarModel");
        $data = [
            'seminar' => $this->SeminarModel->selectWhereSeminar($id),
            'page_title' => 'Seminar',
            'users' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('main/seminar', $data);
    }

    public function pesanan()
    {
        $data = [
            'page_title' => 'Detail Pesanan',
            'users' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('main/detail/pesanan', $data);
    }
    public function pembayaran()
    {

        $data = [
            'page_title' => 'Detail Pesanan',
            'users' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
        ];
        $this->load->view('main/detail/pembayaran', $data);
    }
}
