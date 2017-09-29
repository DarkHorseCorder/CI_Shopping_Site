<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('Carousel_model');
        $this->load->model('Productlist_model');
        $this->load->model('Products_model');
        $this->load->model('Bestgood_model');
        $this->load->model('Basket_model');
    }

    public function index($id) {

        /* sending users list and session variable to interface */
        // $data["product"] = $this->Products_model->get_products($id);

        $data["productLists"] = $this->Productlist_model->get_productlist();
        $data["products"] = $this->Products_model->get_products();
        $data["bestGoods"] = $this->Bestgood_model->get_best_goods();
        $data["id"] = $id;
        $baskets = $this->Basket_model->get_all();
        $total_count = 0;
        $total_price = 0;
        foreach ($baskets as $key => $item) {
            $product = $this->Products_model->get_products($item->product_id);
            $name = $product->name;
            $price = $product->price;
            $filename = $product->filename;
            $baskets[$key]->name = $name;
            $baskets[$key]->price = $price;
            $baskets[$key]->filename = $filename;
            $total_count += $item->count;
            $total_price += $price * $item->count;
        }
        $data["baskets"] = $baskets;
        $data["total_price"] = $total_price;
        $data["total_count"] = $total_count != 0 ? $total_count : "";        

        /* loading the views */
        $this->load->view("templates/header", $data);
        $this->load->view("category/index", $data);
        $this->load->view("templates/footer");
	}
}
