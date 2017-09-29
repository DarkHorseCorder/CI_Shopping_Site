<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bestgood_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function get_best_goods($id=0)
    {
        if($id)
        {
            $this->db->where('id', $id);
            return $this->db->get('best_goods')->row();
        }
        $this->db->order_by('id');
        return $this->db->get('best_goods')->result();
    }
}