<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/28/2018
 * Time: 2:42 PM
 */

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class register extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database('sports');
        $this->load->model('prime_model');

    }

    public function index()
    {
        $this->load->view('authentication/signUp');

    }


    public function register_here()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('pass', 'pass', 'required|min_length[5]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[pass]');

        $name = $this->input->post('name', TRUE);
        $username = $this->input->post('username', TRUE);
        $email = $this->input->post('email', TRUE);
        $pass = md5($this->input->post('pass', TRUE));
        $user_type = "User";
        $dob = $this->input->post('dob');
        $fteam = $this->input->post('fteam');
        $fplayer = $this->input->post('fplayer');
        $gender  = $this->input->post('gender');
        $data = array(
            'username' => $username,
            'name' => $name,
            'password' => $pass,
            'email' => $email,
            'dob' => $dob,
            'fteam' => $fteam,
            'fplayer' => $fplayer,
            'gender' => $gender
        );
        $info = array(

            'username' => $username,
            'user_type' => $user_type,
            'name' => $name,
            'email' => $email,
            'gmail' => $gender,
            'password' => $pass,
            'dob' => $dob,
            'fteam' => $fteam,
            'fplayer' => $fplayer
        );
        $data1 = array();
        if ($this->form_validation->run()) {
            require './vendor/autoload.php';
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->SMTPDebug = 1;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'jamil.iitdu@gmail.com';                 // SMTP username
                $mail->Password = 'jamil12345';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                $receiver = $this->input->post('email');
                //Recipients
                $mail->setFrom('jamil.iitdu@gmail.com', 'Mailer');
                $mail->addAddress($receiver, 'User');     // Add a recipient

                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = ''; //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 8; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass .= $alphabet[$n];
                }
                $data['code'] = $pass;
                $data1['code'] = $pass;
                $data1['email'] = $receiver;
                $data1['fteam'] = $fteam;
                $data1['fplayer'] = $fplayer;
                $data1['dob'] = $dob;
                $data1['gender'] = $gender;


                $this->session->set_userdata($data);
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body = base_url() . 'register/verify/' .$receiver.'/'.$pass;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
            }
            catch (Exception $e) {
                //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                redirect('login/loginNow');
            }


            $this->load->model('database');

            $data1['time'] = time();
            $data1['username'] = $username;
            $data1['name'] = $name;
            $data1['password'] = $info['password'];
            $this->db->where('email', $receiver);
            $q = $this->db->get('signuptemp');

            if ( $q->num_rows() > 0 )
            {
                $this->db->where('email',$receiver);
                $this->db->update('signuptemp',$data1);
            } else {
                $this->db->set('email', $receiver);
                $this->db->insert('signuptemp',$data1);
            }



            //$data['validity'] = 0;
            // $this->db->insert('signuptemp',$data1);
            $data['arr'] = $this->prime_model->showPreviousMatch();
            $data['segment'] = 0;

//            $this->load->view('header/guest_header', $data);
//            $this->load->view('ui/left_side');
//            $this->load->view('ui/middle');
//            $this->load->view('ui/right_side');
            redirect('login/loginNow');
        } else {

            $this->load->view('authentication/signUp.php', $data);
            return;
        }
    }


    public function addUserByAdmin()
    {
        if ($this->session->userdata('usertype') == 'Admin') {

            $this->load->view('authentication/adduserbyadmin');
        } else {
            $this->load->view('ui/page404');
        }
    }

    public function verify()
    {
        $email = $this->uri->segment(3);
        $pass = $this->uri->segment(4);


        $this->db->select('*');
        $this->db->from('signuptemp');
        $this->db->where('email', $email);
        //$pass1 = $this->db->get();

        $query = $this->db->get();
        $ret = $query->row();
        $pass1 =  $ret->code;
        $email1 = $ret->email;
        $username1 = $ret->username;
        $password1 = $ret->password;
        $name1 = $ret->name;
        $time1 = $ret->time;
        $gender = $ret->gender;
        $dob = $ret->dob;
        $fteam = $ret->fteam;
        $fplayer = $ret->fplayer;


        if (strcmp($pass, $pass1 == 0)&& (time()-$time1)<3600) {
            //echo "Account verified!";
            $data = array(
                'email' => $email,
                'name' => $name1,
                'password' => $password1,
                'user_type' => "User",
                'username' => $username1,
                'gender' => $gender,
                'dob' => $dob,
                'fteam' => $fteam,
                'fplayer' => $fplayer


            );
            $this->load->model('database');
            if ($this->database->saveForm($data)) {
                $this->session->sess_destroy();
                $this -> db -> where('email', $email1);
                $this -> db -> delete('signuptemp');

                redirect('login/loginNow');
            }
        }

        else redirect('page404');
    }

    public function addByAdmin()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('pass', 'pass', 'required|min_length[5]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[pass]');

        $name = $this->input->post('name', TRUE);
        $username = $this->input->post('username', TRUE);
        $email = $this->input->post('email', TRUE);
        $pass = md5($this->input->post('pass', TRUE));
        $user_type = $this->input->post('role', TRUE);
        $data = array(
            'username' => $username,
            'name' => $name,
            'email' => $email
        );
        $info = array(

            'username' => $username,
            'user_type' => $user_type,
            'name' => $name,
            'email' => $email,
            'password' => $pass
        );
       // echo "ok";
        if ($this->form_validation->run()) {
            $this->db->insert('users', $info);
            //$this->load->view('ui/home.php');
            redirect('register/manageUserByAdmin');
           } //else {
            if ($this->session->userdata('usertype') == 'Admin') {
              //  $this->load->view('authentication/addUserByAdmin.php', $data);
               // return;
                redirect('register/manageUserByAdmin');
            } else {
                $this->load->view('ui/page404');
            }
        }




    public function manageUserByAdmin(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/admin/index';
        $config['total_rows'] = $this->db->get('users')->num_rows();
        $config['per_page'] = 5;
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<ul class="pagination no-margin">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['next_link'] = 'Next >';
        $config['prev_link'] = '< Prev';

        $this->pagination->initialize($config);
        if ($this->uri->segment(4)) {
            $data['segment'] = $this->uri->segment(4);
        } else {
            $data['segment'] = 0;
        }

        $this->load->model('database');
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where('user_type','Operator')
            ->or_where('user_type','Admin');
        $query = $this->db->get();
        $arr =  $query->result_array();
        $data['arr'] = $arr;

        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_header');
            $this->load->view('ui/left_side');
            $this->load->view('ui/showUsersToAdmin', $data);
        }
        else{
            $this->load->view('ui/page404');
        }

    }

    public function showUsers(){
//        $this->db->select("*");
//        $this->db->from("users");
//        $this->db->where('user_type','Operator')
//            ->or_where('user_type' , 'Admin');
//        //$this->db->where('user_type','Admin');
//        $query = $this->db->get();
//        $arr =  $query->result_array();
//        $data = array(
//            'arr' => $arr
//        );
//        $this->load->view('header/user_header');
//        $this->load->view('ui/showUsers',$data);
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/admin/index';
        $config['total_rows'] = $this->db->get('users')->num_rows();
        $config['per_page'] = 5;
        $config['num_links'] = 3;
        $config['full_tag_open'] = '<ul class="pagination no-margin">';
        $config['full_tag_close'] = '</ul>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['next_link'] = 'Next >';
        $config['prev_link'] = '< Prev';

        $this->pagination->initialize($config);
        if ($this->uri->segment(4)) {
            $data['segment'] = $this->uri->segment(4);
        } else {
            $data['segment'] = 0;
        }

        $this->load->model('database');
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where('user_type','User');
        $query = $this->db->get();
        $arr =  $query->result_array();
        $data['arr'] = $arr;



        if ($this->session->userdata('usertype') == 'User') {

            $this->load->view('header/user_header');
            $this->load->view('ui/left_side');
            $this->load->view('ui/showUsers', $data);
        }
        else     $this->load->view('ui/page404');
    }













}