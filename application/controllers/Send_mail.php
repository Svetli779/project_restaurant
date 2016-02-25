<?php

/**
 * Description of send_mail
 *
 * @author Svetli
 */
class Send_mail extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
      
    public function send(){
        //TODO setings for google
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'dimitrov.s.3ds@gmail.com',
            'smtp_pass' => ''
        );

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");

        //TODO config inputs
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $messege = $this->input->post('message');

        //TODO validation
        $validation = $this->form_validation;
        $validation->set_rules('name','Name','trim|required|min_length[3]|max_length[32]');
        $validation->set_rules('email','Email','trim|required|valid_email|max_length[32]');
        $validation->set_rules('subject','Subject','trim|required|min_length[3]');
        $validation->set_rules('message','Message','trim|required');

        if($validation->run()){
        //TODO send email
            $this->email->from($email,$name);
            $this->email->to('dimitrov.s.3ds@gmail.com');
            $this->email->subject($subject);
            $this->email->message($messege);
            $this->email->send();

            $data['main_content'] = 'thank_you';
            $this->load->view('theme_default/content',$data);
        }
        else {
             redirect('/contacts/');

        }
    }
    
}
