<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: adityagupta
 * Date: 19/03/16
 * Time: 11:44 PM
 */

class Product extends CI_Controller {

    public function index() {


        $data['name'] = 'adisha';
        $data['main_content'] = 'product';



        $this->load->view('include/main', $data);
    }
}