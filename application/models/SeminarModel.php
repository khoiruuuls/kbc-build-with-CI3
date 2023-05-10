<?php

class SeminarModel extends CI_MOdel {
    public function getSeminar() {
        $query = $this->db->get('seminar');
        return $query->result();
    }
    public function selectWhereSeminar($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('seminar');
        return $query->result();
    }
}