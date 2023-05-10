<?php

class ConsultantModel extends CI_MOdel {
    public function getConsultant() {
        $query = $this->db->get('consultant');
        return $query->result();
    }
    public function selectWhereConsultant($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('consultant');
        return $query->result();
    }
}