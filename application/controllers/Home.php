<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        $this->load->model('Carousel_model');
        $this->load->model('Productlist_model');
        $this->load->model('Products_model');
        $this->load->model('Bestgood_model');
        $this->load->model('Basket_model');
    }

	public function index()
	{
        $data["carousels"] = $this->Carousel_model->get_carousels();
        $data["productLists"] = $this->Productlist_model->get_productlist();
        $data["products"] = $this->Products_model->get_products_first();
        $data["bestGoods"] = $this->Bestgood_model->get_best_goods();
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
        if (isset($_POST['basket']) && $_POST['basket'] = 'on') {
            $this->load->view('templates/cart', $data);
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('home/index', $data);
            $this->load->view('templates/footer', $data);
        }
	}

    function collect() {
        if (isset($_POST['id']) && isset($_POST['num'])) {
            //$product = $this->Products_model->get_products($_POST['id']);
            $data['product_id'] = $_POST['id'];
            $data['count'] = $_POST['num'];
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            echo $this->Basket_model->insert_basket($data);
        }
    }
    function delete_basket() {
        if (isset($_POST['product_id'])) {
            echo $this->Basket_model->delete_basket($_POST['product_id']);
        }
    } 
    function count_basket() {
        if (isset($_POST['product_id']) && isset($_POST['count'])) {
            $data['count'] = $_POST['count'];
            $data['product_id'] = $_POST['product_id'];
            $data['created_at'] = date('Y-m-d H:i:s');
            $data['updated_at'] = date('Y-m-d H:i:s');
            echo $this->Basket_model->insert_basket($data);
            //echo $_POST['product_id'];
        }
    }        
}
