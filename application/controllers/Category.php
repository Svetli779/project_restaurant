<?php
/**
 * Description of category
 *
 * @author Svetli
 */
class Category extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('category_model');
    }

    public function index(){
        //load category view
        $data['main_content'] = 'category';
        $this->load->view('theme_default/content',$data);
    }
    
    //pagination
    
    public function products() {
        
        $product_type= $this->uri->segment(3);
        $config = array();
        $config["base_url"] = base_url() . "category/products/$product_type";
        $config["total_rows"] = $this->category_model->record_count($product_type);
        $config["per_page"] = 9;
        $config["uri_segment"] = 4;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["results"] = $this->category_model->fetch_products($config["per_page"], $page,$product_type);
        $data["links"] = $this->pagination->create_links();

        $this->load->view('theme_default/header');
        $this->load->view('products',$data);
        $this->load->view('theme_default/footer');
   }
     
    //end pagination
    
}
