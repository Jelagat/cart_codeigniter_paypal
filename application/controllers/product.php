<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: adityagupta
 * Date: 19/03/16
 * Time: 11:44 PM
 */

class Product extends CI_Controller {

    public function index() {

        //get all products
        $this->load->model('product_model');
        $data['products'] = $this->product_model->get_products();

        //to view
        $data['main_content'] = 'product';
        $this->load->view('include/main', $data);
    }

    public function details($id) {

        $this->load->model('product_model');
        $data['product'] = $this->product_model->get_product($id);

        $data['main_content'] = 'details';
        $this->load->view('include/main', $data);
    }
}