<?php

/**
 * Description of category_model
 *
 * @author Svetli
 */
class Category_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }


    public function record_count($product_type){
        $query = $this->db->get($product_type);
        return $query->num_rows();
    }
 
    public function fetch_products($limit, $start,$product_type) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($product_type);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
    
    public function products($product_type){
        //find all products in tables in DB
       $query = $this->db->get($product_type);
       return $query->result();
       foreach ($query->result() as $row){
           $pro[]=$row;
       }
       return $pro;
    }
    
}
