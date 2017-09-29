<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basket_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_baskets($id=0)
    {
        if($id)
        {
            $this->db->where('id', $id);
            return $this->db->get('basket')->row();
        }
        $this->db->order_by('id');
        return $this->db->get('basket')->result();
    }

    function get_all()
    {
        $this->db->order_by('updated_at');
        $this->db->like('updated_at', date('Y-m-d'));
        $this->db->group_by("product_id");
        $this->db->select_sum('count');
        $this->db->select('product_id');
        return $this->db->get('basket')->result();
    }    
    
    function delete_basket($product_id)
    {   
        $this->db->like('updated_at', date('Y-m-d'));
        $this->db->where('product_id', $product_id);
        return $this->db->delete('basket');
    }

    function insert_basket($data)
    {
        $this->db->insert('basket', $data);

        return $this->db->insert_id();
    }


}