<?php

class Wishlist extends CI_Controller {

    public function addWishlist()
    {
        if($this->session->userdata()){
            if($this->input->post())
            {
                $data = [
                    'program_id' => $this->input->post('program_id'),
                    'user_id' => $this->session->userdata('id')
                ];

                $this->db->insert('wishlist',$data);
                return redirect('/consultation');
            }
        }

        return redirect(site_url('./'));
    }

    
    
}
