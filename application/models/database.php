<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 3/1/2018
 * Time: 1:34 AM
 */

class Database extends CI_Model
{

    
    public function __construct() {
        parent::__construct();
    }
//inserting sign up and add new user(by admin) data
    public function saveForm($form_data)
    {
        $this->db->insert('users', $form_data);
        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }
    

// retrieving all the reservation requests from database for admin's approval
    
    
    
      public function getRequests()
    {
            $query = $this->db->query("select * from fieldreserve");
            return $query->result_array();

    }

        public function getNewFieldRequests(){

            $this->db->select("*");
            $this->db->from("fieldrequests");
          //  $this->db->where('status','pending');
            $query = $this->db->get();
            return $query->result_array();
        }


    public function getSwimRequests()
    {
        $this->db->select("*");
        $this->db->from("swimmingpool");
        $this->db->where('status','pending');
        $query = $this->db->get();
        return $query->result_array();

    }

    public function getAllSwimRequests()
    {
        $this->db->select("*");
        $this->db->from("swimmingpool");
        //$this->db->where('status','pending');
        $query = $this->db->get();
        return $query->result_array();

    }




    public function saveFormData($form_data)
    {
        $this->db->insert('fieldreserve', $form_data);
        if ($this->db->affected_rows() == '1')
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }


    public function editField($id){
        $this->db->query("update fieldrequests set status='approved' where fieldrequests.id = '$id'");
    }

    public function rejectField($id){
        $this -> db -> where('id', $id);
        $this -> db -> delete('fieldrequests');
    }
    
    
      public function edit($id){
          
          $this->db->query("update fieldreserve set status='approved' where fieldreserve.id = '$id'");
      }
    
    
    
      public function reject($id){
          
            $this->db->query("update fieldreserve set status='rejected' where fieldreserve.id = '$id'");

    }

    public function editSwim($id){

        $this->db->query("update swimmingpool set status='approved' where swimmingpool.id = '$id'");
    }
    public function rejectSwim($id){

        //$this->db->query("update swimmingpool set status='rejected' where swimmingpool.id = '$id'");
        $this -> db -> where('id', $id);
        $this -> db -> delete('swimmingpool');
    }




    public function getUserWithEmail($email, $password)
    {
//        echo $email.$password;
        $this->db->select('*')
            ->from('users')
            ->where("(users.email = '$email' AND users.password = '$password')");
        
//        $this->db->select();
//        $this->db->from('users as t1');
//        $this->db->where('email', $email);
//        $this->db->where('t2.password', $password);
//        $this->db->join('table2 as t2', 't2.id = t1.id', 'left');
//        $query = -$this->db->get();
//        //$query->row();
//        $query->result();

        $query = $this->db->get();

        if($query->num_rows() == 1){
            return $query->result_array();

            //print_r('found');
        }else{
            return null;
        }
    }
    

    public function getDirectorRequest(){
        $query = $this->db->query("select * from user where designation = 'director' AND status = 0 AND removed = 0");
        return $query->result_array();

    }

    public function updateStatus($email){
        $this->db->query("update user set status=1 where user.email = '$email'");
    }
    public function updateRemove($email){
        $this->db->query("update user set removed=1 where user.email = '$email'");
    }

    public function ForgotPassword($email)
    {
        $this->db->select('email');
        $this->db->from('users');
        $this->db->where('email', $email);
        $query=$this->db->get();
        return $query->row_array();
    }

    public function sendpassword($data)
    {
        $email = $data['email'];
        $query1=$this->db->query("SELECT *  from users where email = '".$email."' ");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)

        {
            $passwordplain = "";
            $passwordplain  = rand(99999999,999999999);
            $newpass['password'] = md5($passwordplain);
            $this->db->where('email', $email);
            $this->db->update('users', $newpass);
            $mail_message='Dear '.$row[0]['name'].','. "\r\n";
            $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
            $mail_message.='<br>Please Update your password.';
            $mail_message.='<br>Thanks & Regards';
            $mail_message.='<br>Your company name';
            date_default_timezone_set('Etc/UTC');
            require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPSecure = "tls";
            $mail->Debugoutput = 'html';
            $mail->Host = "yooursmtp";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = "your@email.com";
            $mail->Password = "password";
            $mail->setFrom('admin@site', 'admin');
            $mail->IsHTML(true);
            $mail->addAddress($email);
            $mail->Subject = 'OTP from company';
            $mail->Body    = $mail_message;
            $mail->AltBody = $mail_message;
            if (!$mail->send()) {
                $this->session->set_flashdata('msg','Failed to send password, please try again!');
            } else {
                $this->session->set_flashdata('msg','Password sent to your email!');
            }
            redirect('login/gotoLogin');
        }
        else
        {
            $this->session->set_flashdata('msg','Email not found try again!');
            redirect('login/gotoLogin');
        }
    }

    public function getlessNewFieldRequests(){

        $this->db->select("*");
        $this->db->from("fieldrequests");
        $this->db->where('status','pending');
        $query = $this->db->get();
        return $query->result_array();
    }


}