<?php

class ProgramModel extends CI_MOdel
{
    public function typeService()
    {
        $query = $this->db->get('type_sevice');
        return $query->result();
    }
    public function getProgram()
    {
        $query = $this->db->get('program');
        return $query->result();
    }
    public function get4Program()
    {
        $this->db->limit(4);
        $query = $this->db->get('program');
        return $query->result();
    }
    public function selectWhereProgram($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('program');
        return $query->result();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('program');
    }

    public function editProgram($id)
    {
        return $this->db->get_where('program', ['id' => $id])->row_array();
    }

    public function updateProgram()
    {

        $data = [
            'name' => htmlspecialchars($this->input->post('name'), true),
            'tag' => htmlspecialchars($this->input->post('tag'), true),
            'type' => htmlspecialchars($this->input->post('type'), true),
            'descProgram' => htmlspecialchars($this->input->post('descProgram'), true),
            'priceMin' => htmlspecialchars($this->input->post('priceMin'), true),
            'dateStart' => htmlspecialchars($this->input->post('date_start'), true),
            'dateEnd' => htmlspecialchars($this->input->post('date_end'), true),
            'time_start' => htmlspecialchars($this->input->post('time_start'), true),
            'time_end' => htmlspecialchars($this->input->post('time_end'), true),
            'mode' => 'online',
            'url' => htmlspecialchars($this->input->post('url'), true),
            'lokasi' => null,
            'alamat' => null,
            'kota' => null,
            'kuota' => htmlspecialchars($this->input->post('kuota'), true),
        ];
        $this->db->where('id', $this->input->post('id'), true);
        $this->db->update('program', $data);
    }

    public function countConsultantsByProgramId($programId)
    {
        $this->db->select('COUNT(consultant.id) AS consultant_count');
        $this->db->from('program');
        $this->db->join('consultant', 'program.consultant_id = consultant.id');
        $this->db->where('program.id', $programId);
        $query = $this->db->get();
        $result = $query->row();

        return $result->consultant_count;
    }

    public function getProgramCount()
    {
        return $this->db->count_all('program');
    }

    public function getProgramById($id)
    {
        $query = $this->db->get_where('program', ['id' => $id]);
        return $query->row();
    }
}
