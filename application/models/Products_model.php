<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_products($id=0)
    {
        if($id)
        {
            $this->db->where('id', $id);
            return $this->db->get('products')->row();
        }
        $this->db->order_by('id');
        return $this->db->get('products')->result();
    }
    
        function get_products_img($id=0)
    {
        if($id)
        {
            $this->db->where('ID_', $id);
            return $this->db->get('img')->row();
        }
        $this->db->order_by('id');
        return $this->db->get('img')->result();
    }
    
    function get_products_first($id=0)
    {
        if($id)
        {
           #$this->db->where('id', $id AND 'first', 1);
           $this->db->query('SELECT * FROM aaa WHERE first =1 ');

            return $this->db->get('products')->row();
        }
        $this->db->order_by('id');
        return $this->db->get('products')->result();
    }
    
    
    function delete_products($id=0)
    {
        $this->db->where('id', $id);
        $this->db->delete('products');

        return $this->db->affected_rows();
    }

    function insert_products($data)
    {
        $this->db->insert('products', $data);

        return $this->db->insert_id();
    }

    function edit_products($name='', $state_id='', $id=0)
    {
        $data = array(
            'name' => $name,
            'state_id' => $state_id
        );
        $this->db->where('id', $id);
        $this->db->update('products', $data);
        
        return $this->db->affected_rows();
    }

}