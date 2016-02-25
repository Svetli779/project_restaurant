<?php

/**
 * Description of search
 *
 * @author Svetli
 */
class Search extends CI_Controller{
    
    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model('find_keyword');
    } 

   
    public function search_keyword(){
        //find keyword in db
        $keyword = addslashes($this->input->post('keyword')); 

        $validation = $this->form_validation;
        $validation->set_rules('keyword','Keyword','trim|required|min_length[3]');

        if($validation->run()){

            $data["results"] = $this->find_keyword->search($keyword);

            $this->load->view('theme_default/header');
            $this->load->view('result',$data);
            $this->load->view('theme_default/footer');

        }
        else{
            
            //$data['main_content'] = 'home';
            //$this->load->view('theme_default/content',$data);
            
           redirect('home');
        }
    
    }
    
}
