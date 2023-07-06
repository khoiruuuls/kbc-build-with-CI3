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
    public function getConsultantAndProgram()
    {
        $query = $this->db->select('consultant.* , COUNT(program.consultant_id) as total ')
                                ->from('consultant')
                                ->join('program','consultant.id = program.consultant_id','left')
                                ->group_by('consultant.id')->get();
        return $query->result();
    }

    public function getConsultantRole($id)
    {
        $consultant = $this->db->select('*')
                                ->from('consultant')
                                ->where('users_id',$id)
                                ->get()->result();
        // $result = $this->db->select('*')
        //                     ->from('program')
        //                     ->where('consultant_id',$consultantId[0]->id)
        //                     ->get()->result();
        return $consultant;
    }
    public function selectWhereConsultant($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('consultant');
        return $query->result();
    }

    public function getConsultantsByProgramId($programId)
    {
        $this->db->select('consultant.*');
        $this->db->from('consultant');
        $this->db->join('program', 'program.consultant_id = consultant.id');
        $this->db->where('program.id', $programId);
        $query = $this->db->get();
        return $query->result();
    }

    public function getProgramsByConsultantId($consultantId)
    {
        $this->db->select('program.*');
        $this->db->from('program');
        $this->db->join('consultant', 'program.consultant_id = consultant.id');
        $this->db->where('consultant.id', $consultantId);
        $query = $this->db->get();
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
        if($this->input->post('photo') == $this->input->post('foto') || $this->input->post('photo') == NULL){
            $newFileName = $this->input->post('foto');
            
        }else{

            if ($_FILES['photo']['name']) {
                
                $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION); // Ekstensi file
                $allowedExtensions = array('jpg', 'jpeg', 'png');
                if(in_array($fileExtension,$allowedExtensions)){

                    $targetDir = "assets/img/consultant/"; // Direktori tujuan tempat menyimpan file yang diunggah

                    $newFileName = uniqid() . '.' . $fileExtension;
                    $targetFile = $targetDir . $newFileName;
                    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
                        $hapusFileLama = "assets/img/consultant/".$this->input->post('foto');
                        unlink($hapusFileLama);

                       
                    } 
                        
                }

                
                
            }
        }

        $data = [
            'photo' => $newFileName,
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

    public function countProgramsByConsultantId($consultantId)
    {
        $this->db->select('COUNT(program.id) AS program_count');
        $this->db->from('consultant');
        $this->db->join('program', 'program.consultant_id = consultant.id');
        $this->db->where('consultant.id', $consultantId);
        $query = $this->db->get();
        $result = $query->row();

        return $result->program_count;
    }

    public function getConsultantWithProgramCount()
    {
        $this->db->select('consultant.*, COUNT(program.id) as program_count');
        $this->db->from('consultant');
        $this->db->join('program', 'program.consultant_id = consultant.id', 'left');
        $this->db->group_by('consultant.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getConsultantWithPrograms()
    {
        $this->db->select('consultant.*, program.program_name');
        $this->db->from('consultant');
        $this->db->join('program', 'program.consultant_id = consultant.id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function getConsultantWithProgramsCount()
    {
        $this->db->select('consultant.*, COUNT(program.id) AS program_count');
        $this->db->from('consultant');
        $this->db->join('program', 'program.consultant_id = consultant.id', 'left');
        $this->db->group_by('consultant.id');
        $query = $this->db->get();
        return $query->result();
    }

    public function getBahasaOptions()
    {
        $query = $this->db->get('bahasa');
        $options = array();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $options[$row->id] = $row->bahasa_name;
            }
        }

        return $options;
    }
}