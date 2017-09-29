<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_carousels($id=0)
    {
        if($id)
        {
            $this->db->where('id', $id);
            return $this->db->get('carousels')->row();
        }
        $this->db->order_by('id');
        return $this->db->get('carousels')->result();
    }
    
    function delete_carousels($id=0)
    {
        $this->db->where('id', $id);
        $this->db->delete('carousels');

        return $this->db->affected_rows();
    }

    function insert_carousels($name='', $state_id='')
    {
        $data = array(
            'name' => $name,
            'state_id' => $state_id
        );
        $this->db->insert('carousels', $data);

        return $this->db->insert_id();
    }

    function edit_carousels($name='', $state_id='', $id=0)
    {
        $data = array(
            'name' => $name,
            'state_id' => $state_id
        );
        $this->db->where('id', $id);
        $this->db->update('carousels', $data);
        
        return $this->db->affected_rows();
    }

}