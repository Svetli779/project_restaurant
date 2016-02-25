<?php

/**
 * Description of About
 *
 * @author Svetli
 */
class About extends CI_Controller{
    
    public function index(){
        //load about view
        $data['main_content'] = 'about';
        $this->load->view('theme_default/content',$data);
    }
    
}
