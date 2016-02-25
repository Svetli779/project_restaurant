<?php

/**
 * Description of Contact
 *
 * @author Svetli
 */
class Contact extends CI_Controller{
    
    public function index(){
        //construct map
        $this->load->library('googlemaps');
        $config = array();
        $config['center'] = 'sofia , bulgaria';
        $config['zoom'] = 15;
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = 'sofia , bulgaria';
        $this->googlemaps->add_marker($marker); 
        
        $data['map'] = $this->googlemaps->create_map();
        
        //load contact view
        $data['main_content'] = 'contacts';
        $this->load->view('theme_default/content',$data);
    }
    
}
