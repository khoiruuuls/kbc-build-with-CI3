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

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('consultant');
    }

    public function editConsultant($id)
    {
        return $this->db->get_where('consultant', ['id' => $id])->row_array();
    }
    public function updateConsultant()
    {

        $data = [
            'photo' => $this->upload->data('file_name'),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'profesi' => 'consultant',
            'alamat' => htmlspecialchars($this->input->post('alamat'), true),
            'email' => htmlspecialchars($this->input->post('email'), true),
            'no_handphone' => $this->input->post('no_handphone'),
            'perusahaan' => htmlspecialchars($this->input->post('perusahaan'), true),
            'spesialisasi' => htmlspecialchars($this->input->post('spesialisasi'), true),
            'akun_media' => htmlspecialchars($this->input->post('akun_media'), true),
            'jumlah_client' => $this->input->post('jumlah_client'),
        ];
        $this->db->where('id', $this->input->post('id'), true);
        $this->db->update('consultant', $data);
    }
}