<?php

class ConsultantModel extends CI_MOdel
{
    public function get3Consultant()
    {
        $this->db->limit(3);
        $query = $this->db->get('consultant');
        return $query->result();
    }
    public function getConsultant()
    {
        $query = $this->db->get('consultant');
        return $query->result();
    }
    public function selectWhereConsultant($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('consultant');
        return $query->result();
    }
}