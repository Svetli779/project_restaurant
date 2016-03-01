<?php

/**
 * Description of account_model
 *
 * @author Svetli
 */
class Account_model extends CI_Model{
    

    public function login(){
        //find username and pass in DB
        
        $username = $this->input->post('username_log');
        $password = md5($this->input->post('password_log'));
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('users');
        //
        if($query->num_rows() == 1){
            foreach ($query->result() as $row){
                return  $row;
            }
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    public function register($randomPass){
        //create user and recording in DB
        $username = $this->input->post('username');
        $fname = $this->input->post('firstname');
        $lname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $pass = md5($this->input->post('password'));
        $data = array(
            'username'        =>  $username,
            'fname'           =>  $fname,
            'lname'           =>  $lname,
            'email'           =>  $email,
            'password'        =>  $pass,
            'activation_code' => $randomPass
        );
        
        $this->db->where('username',$username);
        $query1 = $this->db->get('users');
        $this->db->where('email',$email);
        $query2 = $this->db->get('users');

        if($query1->num_rows() > 0 || $query2->num_rows() > 0){
            return FALSE;
        }
        else{
            $this->db->insert('users',$data);
            return TRUE;
        }
        
    }
    
    public function user_info(){
        //find user in db and show
        $user_id = $this->session->userdata('user_id');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('users');
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return FALSE;
    }
    
    public function update_user(){
        $user_id = $this->session->userdata('user_id');
        $username = $this->input->post('username');
        $fname = $this->input->post('firstname');
        $lname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $data = array(
            'username' =>  $username,
            'fname'    =>  $fname,
            'lname'    =>  $lname,
            'email'    =>  $email
        );
        
        if($user_id && $this->change_email($email) && $this->change_user($username)){
            $this->db->where('user_id',$user_id);
            $this->db->update('users',$data);
            return TRUE;   
        }
        else {
            return FALSE;
        }
    }
    
    public function del_user(){
    
        $user_id = $this->session->userdata('user_id');
        if($user_id){
            $this->db->where('user_id',$user_id);
            $this->db->delete('users');
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
   
    
    public function check_user(){
        $username = $this->input->post('username');
        $this->db->where('username',$username);
        $query = $this->db->get('users');
        if($query->num_rows() == 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    public function email_check(){
        $email = $this->input->post('email');
        $this->db->where('email',$email);
        $query = $this->db->get('users');
        if($query->num_rows() == 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    public function change_user($username){
        $user_id = $this->session->userdata('user_id');
        $sql= "SELECT * FROM `users` WHERE user_id NOT LIKE '$user_id' AND username LIKE '$username'";
        $query=$this->db->query($sql);
        if($query->num_rows() > 0){
            return FALSE;  
        }
        else{
            return TRUE;
        }
    }

    public function change_email($email){
        $user_id = $this->session->userdata('user_id');
        $sql= "SELECT * FROM `users` WHERE user_id NOT LIKE '$user_id' AND email LIKE '$email'";
        $query=$this->db->query($sql);
        if($query->num_rows() > 0){
          //return 
            return FALSE;  
        }
        else{
            return TRUE;
        }
    }  
    
    public function update_pass(){
        $user_id = $this->session->userdata('user_id');
        $new_pass = md5($this->input->post('newpassword'));
        $data = array(
            'password'=>$new_pass
        );
        $password = md5($this->input->post('old_password'));
        $this->db->where('password',$password);
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('users');
        if($query->num_rows() == 1){
            $this->db->where('user_id',$user_id);
            $this->db->update('users',$data);
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    public function reset_password($email,$randomPassword){
        $this->db->where('email',$email);
        $query = $this->db->get('users');
        $data = array(
            'password'=>$randomPassword
        );
        if($query->num_rows() == 1){
            $this->db->where('email',$email);
            $this->db->update('users',$data);
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    public function email_find($email){
        $this->db->where('email',$email);
        $query = $this->db->get('users');
        if($query->num_rows() == 0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    public function activate($email,$activ_code){
        $this->db->where('email',$email);
        $this->db->where('activation_code',$activ_code);
        $query = $this->db->get('users');
        $data = array(
            'activ'=>1
        );
        if($query->num_rows() == 1){
            $this->db->where('email',$email);
            $this->db->update('users',$data);
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
}
