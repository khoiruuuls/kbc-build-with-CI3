<?php

class KuotaProgramModel extends CI_MOdel
{
    public function programKuotaCount()
    {
        $query = $this->db->select('program.*, COUNT(kuota_program.program_id) as total')
                            ->from('kuota_program')
                            ->join('program', 'kuota_program.program_id = program.id')
                            ->group_by('kuota_program.program_id')
                            ->order_by('total', 'DESC')
                            ->limit(4,0)
                            ->get();
        return $query->result();
    }

}
