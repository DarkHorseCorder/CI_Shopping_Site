<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Products_model');
        $this->load->model('Basket_model');
    }
    public function index($id){

        /* sending users list and session variable to interface */
        $data["products"] = $this->Products_model->get_products();
        $data["product"] = $this->Products_model->get_products($id);
        $data["img"] = $this->Products_model->get_products_img();
    
        $baskets = $this->Basket_model->get_all();
        $total_count = 0;
        $total_price = 0;
        foreach ($baskets as $key => $item) {
           
        }
        $data["baskets"] = $baskets;
        $data["total_price"] = $total_price;
        $data["total_count"] = $total_count != 0 ? $total_count : "";

        $this->load->view("templates/header", $data);
        $this->load->view("single/index", $data);
        $this->load->view("templates/footer", $data);
	}
}
