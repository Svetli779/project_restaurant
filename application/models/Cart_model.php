<?php

/**
 * Description of cart_model
 *
 * @author Svetli
 */
class Cart_model extends CI_Model{
    
    public function get($table,$pr){
        //get products in SESSION
        
        $query =  $this->db->get_where($table,$pr);
        return $query->result();
        
        foreach ($query->result() as $row) {
            $result[]=$row;
        }
        return $result;
    }
    
}
