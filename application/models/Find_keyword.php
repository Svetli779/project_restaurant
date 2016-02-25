<?php

/**
 * Description of find_keyword
 *
 * @author Svetli
 */
class Find_keyword extends CI_Model{
   
   //find keyword in db
    public function search($keyword){
        
        $sql = " 
            select product_id,price,picture,weight,title_en as P , description_en as V FROM `alcoholik_drinks` WHERE title_en or description_en like '%$keyword%'
            union
            select product_id,price,picture,weight,title_en as P , description_en as V FROM `appetizers` WHERE title_en or description_en like '%$keyword%'
            union
            select product_id,price,picture,weight,title_en as P , description_en as V FROM `desserts` WHERE title_en or description_en like '%$keyword%'
            union
            select product_id,price,picture,weight,title_en as P , description_en as V FROM `main_dishes` WHERE title_en or description_en like '%$keyword%'
            union
            select product_id,price,picture,weight,title_en as P , description_en as V FROM `salads` WHERE title_en or description_en like '%$keyword%'  
            union
            select product_id,price,picture,weight,title_en as P , description_en as V FROM `soft_drinks` WHERE title_en or description_en like '%$keyword%'
            union
            select product_id,price,picture,weight,title_en as P , description_en as V FROM `soups` WHERE title_en or description_en like '%$keyword%'
        ";
        $query=$this->db->query($sql);
        
        return $query->result();
        
    }

    
}
