<?php

class ProgramModel extends CI_MOdel {
    public function getProgram() {
        $query = $this->db->get('program');
        return $query->result();
    }
    public function get4Program() {
        $this->db->limit(4);
        $query = $this->db->get('program');
        return $query->result();
    }
    public function selectWhereProgram($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('program');
        return $query->result();
    }
}