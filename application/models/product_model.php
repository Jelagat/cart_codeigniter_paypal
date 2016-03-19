<?php

class Product_model extends CI_Model {

    //get all products
    public function get_products() {
        $this->db->select('*');
        $this->db->from('products');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_product($id) {

        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('id' , $id);
        $query = $this->db->get();
        return $query->row();

    }

}