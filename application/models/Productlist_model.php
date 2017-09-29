<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productlist_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_productlist($id=0)
    {
        if($id)
        {
            $this->db->where('id', $id);
            return $this->db->get('product_list')->row();
        }
        $this->db->order_by('id');
        return $this->db->get('product_list')->result();
    }

}