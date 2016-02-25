<?php

/**
 * Description of home
 *
 * @author Svetli
 */
class Home extends CI_Controller{
    
    public function index(){
        //load homepage view
        $data['main_content'] = 'home';
        $this->load->view('theme_default/content',$data);
    }
    
    public function error(){
        //load view error
        $data['main_content'] = 'error';
        $this->load->view('theme_default/content',$data);
    }
    
}
