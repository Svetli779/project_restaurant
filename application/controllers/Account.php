<?php

/**
 * Description of account
 *
 * @author Svetli
 */

class Account  extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('account_model');
    }
    public function index(){
        $data['main_content'] = 'register';
        $this->load->view('theme_default/content',$data);
    }
    
    
    public function login(){
        // load model account login
                
        $validation = $this->form_validation;
        $validation->set_rules('username_log','User Name','trim|required|min_length[3]|max_length[32]');
        $validation->set_rules('password_log','Password','trim|required|min_length[5]|max_length[32]');
        if($validation->run()){
            if($this->account_model->login()){
                $data = array(
                    'is_logged' => TRUE,
                    'username' => $this->input->post('username_log'),
                    'user_id' => $this->account_model->login()
                );
                $this->session->set_userdata($data);
                redirect('/home/');
            }
            else {
                $this->session->set_flashdata('errmsg','Wrong username or password!');
                $this->index();
            }
        }
        else {
                $this->index();
        }
    }
    
    
    public function register(){

        //load model account register
   
        $validation = $this->form_validation;
        $validation->set_rules('username','User Name','trim|required|min_length[5]|max_length[32]');
        $validation->set_rules('firstname','First Name','trim|required|min_length[3]|max_length[32]');
        $validation->set_rules('lastname','Last Name','trim|required|min_length[3]|max_length[32]');
        $validation->set_rules('email','Email Address','trim|required|valid_email|max_length[32]');
        $validation->set_rules('password','Password','trim|required|min_length[5]|max_length[32]|matches[repassword]');
        $validation->set_rules('repassword','Repeat Password','trim|required|min_length[5]|max_length[32]');
        if($validation->run()){
            if($this->account_model->register()){
                $this->session->set_flashdata('register','Your account was successfully created !');
                redirect('/home/');
            }
            else{
                $this->session->set_flashdata('errreg','Username or email already exist!');
                $this->index();
            }
        }
        else{
                $this->index();
        }
        
    }
    
    public function user_information(){
        $is_logged = $this->session->userdata('is_logged');
        if($is_logged){
            $data["result"] = $this->account_model->user_info();
            $this->load->view('theme_default/header');
            $this->load->view('user_account',$data);
            $this->load->view('theme_default/footer');
        }
        else {
            $this->index();
        }
    }
    
    public function show_user(){
        $is_logged = $this->session->userdata('is_logged');
        if($is_logged){
            $data["result"] = $this->account_model->user_info();
            $this->load->view('theme_default/header');
            $this->load->view('user_info',$data);
            $this->load->view('theme_default/footer');
        }
        else {
            $this->index();
        }
        
    }
    
    public function update_user(){
        //upadate user info
        $is_logged = $this->session->userdata('is_logged');
            if($is_logged){
            $validation = $this->form_validation;
            $validation->set_rules('username','User Name','trim|required|min_length[5]|max_length[32]');
            $validation->set_rules('firstname','First Name','trim|required|min_length[3]|max_length[32]');
            $validation->set_rules('lastname','Last Name','trim|required|min_length[3]|max_length[32]');
            $validation->set_rules('email','Email Address','trim|required|valid_email|max_length[32]');

            if($validation->run()){
                if($this->account_model->update_user()){
                    $this->session->unset_userdata('username');
                    $data = array(
                        'username' => $this->input->post('username')   
                    );
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('update','Your account was successfully changed !');
                    $this->user_information();

                }
                else{
                    $this->session->set_flashdata('uperror','Username or email allready exist please try with another one !');
                    $this->index();
                }
            }
            else{
                $this->index();
            }
        }
        else{
            $this->index();
        }
    }
    
    public function del_user(){
        $is_logged = $this->session->userdata('is_logged');
        if($is_logged){
            $delete = $this->account_model->del_user();
            if($delete){
                session_destroy();
                $this->index();
            }
            else{
                $this->index();
            }
        }
        else{
            $this->index();
        }
    }

    public function user_check(){
        $validation = $this->form_validation;
        $validation->set_rules('username','User Name','trim|required|min_length[3]|max_length[32]');
        if($validation->run()){
            if($this->account_model->check_user()){
                echo '<p class="free">Username is free to use !</p>';
            }
            else{
                echo '<p class="error">Username is taken !</p>';
            }
        }
        else{
            $this->index();
        }
    }

    public function email_check(){
        $validation = $this->form_validation;
        $validation->set_rules('email','Email Address','trim|required|valid_email|max_length[32]');
        if($validation->run()){
            if($this->account_model->email_check()){
                echo '<p class="free">Email is free to use !</p>';
            }
            else{
                echo '<p class="error">Email is taken !</p>';
            }
        }
        else{
           $this->index();
        }
    }
    
    public function change_user(){
        $validation = $this->form_validation;
        $validation->set_rules('username','User Name','trim|required|min_length[3]|max_length[32]');
        if($validation->run()){
            $username = $this->input->post('username');
            if($this->account_model->change_user($username)){
                echo '<p class="free">Username is free to use !</p>';
            }
            else{
                echo '<p class="error">Username is taken !</p>';
            }
        }
        else {
            $this->index();
        }
    }
    
    public function change_email(){
        $validation = $this->form_validation;
        $validation->set_rules('email','Email Address','trim|required|valid_email|max_length[32]');
        if($validation->run()){
            $email = $this->input->post('email');
            if($this->account_model->change_email($email)){
                echo '<p class="free">Email is free to use !</p>';
            }
            else{
                echo '<p class="error">Username is taken !</p>';
            }
        }
        else{
            $this->index();
        }
    }
    
    public function forgotten_pass(){
        $data['main_content'] = 'forgotten_pass';
        $this->load->view('theme_default/content',$data);
    }

    public function reset_pass(){
        $validation = $this->form_validation;
        $validation->set_rules('email_reset','Email','trim|required|valid_email|max_length[32]');
        if($validation->run()){
            $email = $this->input->post('email_reset');
            if($this->account_model->email_find($email)){
                $this->session->set_flashdata('uperror','We can not find this '.$email.' email ! Please enter valid email !');
                $this->forgotten_pass();
            }
            else{
                $length = 8;
                $string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $stringLength = strlen($string);
                $randomPass = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomPass .= $string[rand(0, $stringLength - 1)];
                }
                $randomPassword = md5($randomPass);
                $this->account_model->reset_password($email,$randomPassword);
                $myemail = 'dimitrov.s.3ds@gmail.com';
                $config = array(
                    'protocol'  => 'smtp',
                    'smtp_host' => 'ssl://smtp.googlemail.com',
                    'smtp_port' => 465,
                    'smtp_user' => $myemail,
                    'smtp_pass' => ''
                );
                $subject = 'Reset your Password !';
                $name = 'Admin';
                $message ='Your new password is : '.$randomPass.' ! Please log in and change it immediately.';
                $this->load->library('email',$config);
                $this->email->set_newline("\r\n");
                $this->email->from($myemail,$name);
                $this->email->to($email);
                $this->email->subject($subject);
                $this->email->message($message);
                $this->email->send();
                $this->session->set_flashdata('update','Your password was successfully changed . Please look your email for more information .');
                $this->forgotten_pass();
            }
        }
        else{
            $this->session->set_flashdata('uperror','Please enter a valid email address !');
            $this->forgotten_pass();
        }
   
    }
    
    public function change_password(){
        $data['main_content'] = 'password';
        $this->load->view('theme_default/content',$data);
    }
    
    public function update_password(){
        $is_logged = $this->session->userdata('is_logged');
        if($is_logged){
            $validation = $this->form_validation;
            $validation->set_rules('old_password','Old Password','trim|required|min_length[5]|max_length[32]');
            $validation->set_rules('newpassword','New Password','trim|required|min_length[5]|max_length[32]|matches[renewpassword]');
            $validation->set_rules('renewpassword','Repeat Password','trim|required|min_length[5]|max_length[32]');
            if($validation->run()){
                if($this->account_model->update_pass()){
                    $this->session->set_flashdata('update_pass','Your password was successfully changed !');
                    $this->user_information();
                }
                else{
                    $this->session->set_flashdata('uperror','You Wrong old password !');
                    $this->user_information();
                }
            }
            else{
                $this->session->set_flashdata('uperror','Please fill in the fields correctly !');
                $this->user_information();
            }
        }
        else{
            $this->index();
        }
    }
    
    public function find_email(){
        $validation = $this->form_validation;
        $validation->set_rules('email','Email Address','trim|required|valid_email|max_length[32]');
        if($validation->run()){
            if($this->account_model->email_check()){
                echo '<p class="error">We can not find email with this parameters ! Please try with another one !</p>';
            }
            else{
                echo '<p class="free">Email was found !  Press button for reset password.</p>';
            }
        }
        else{
            $this->reset_pass();
        }
    }
    
    public function logout(){
        //load login view
        $this->session->sess_destroy();
        $data['main_content'] = 'register';
        $this->load->view('theme_default/content',$data);
    }
}