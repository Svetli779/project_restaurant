<?php

/**
 * Description of cart
 *
 * @author Svetli
 */
class Cart extends CI_Controller{
    
    public function add(){
    // TODO load cart view + model order 

        $pr = $this->input->post('product_id');
        $price = $this->input->post('price');
        $qty = 1;
        $name = $this->input->post('name');

        $insert = array(
            'id'=>$pr,
            'qty'=>$qty,
            'price'=>$price,
            'name'=>$name
            );


        $this->cart->insert($insert);

        $data['main_content'] = 'category';
        $this->load->view('theme_default/content',$data);

    }


    public function view(){ 

        $data['main_content'] = 'cart';
        $this->load->view('theme_default/content',$data);

    }


    public function uplode(){

        $this->cart->update($_POST);

        $data['main_content'] = 'cart';
        $this->load->view('theme_default/content',$data);
    }


    public function remove($rowid){
        $this->cart->update(array(
            'rowid' => $rowid,
            'qty' => 0
        ));

        $data['main_content'] = 'cart';
        $this->load->view('theme_default/content',$data);
    }
    
}
