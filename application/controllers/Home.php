<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Home extends CI_Controller {



    public function __construct(){
        parent::__construct();
        $this->load->database('sports');
        $this->load->model('prime_model');

    }

    public function load(){
        $data['visibility']="none";
        $this->load->view('header/guest_header',$data);
        $this->load->view('ui/forgot');
    }

    public function home(){
        redirect('login/gotoGuest');
    }

    public function enterEmail(){
        if(!$this->input->post('email1')){

                $data['visibility']="none";
                $this->load->view('header/guest_header',$data);

                $this->load->view('ui/forgot');


        }


        else{

            $receiver = $this->input->post('email1');
            $this->db->select('users.user_id,users.name,users.username,
                    users.email,
                    users.password,users.user_type')
                ->from('users')
                ->where("(users.email = '$receiver')");
            $query = $this->db->get();
            $data1 = array();
            if($query->num_rows() == 1){
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

                    //Recipients
                    $mail->setFrom('jamil.iitdu@gmail.com', 'DUPEC');
                    $mail->addAddress($receiver, 'User');     // Add a recipient

                    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                    $pass = ''; //remember to declare $pass as an array
                    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                    for ($i = 0; $i < 8; $i++) {
                        $n = rand(0, $alphaLength);
                        $pass .= $alphabet[$n];
                    }
                    //return implode($pass); //turn the array into a string
                    $user_data = array(
                        'pass' => $pass,
                        'email' => $receiver
                    );
                    $data1['code'] = $pass;
                    $data1['email'] = $receiver;
                    $data1['time'] = time();
                    $this->db->where('email', $receiver);
                    $q = $this->db->get('forgottemp');

                    if ( $q->num_rows() > 0 )
                    {
                        $this->db->where('email',$receiver);
                        $this->db->update('forgottemp',$data1);
                    } else {
                        $this->db->set('email', $receiver);
                        $this->db->insert('forgottemp',$data1);
                    }

                    // $this->db->insert('forgottemp',$data1);

                    $this->session->set_userdata($user_data);
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Here is the subject';
                    $mail->Body    = base_url() . 'Home/verify/' .$receiver.'/'.$pass;
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    $mail->send();
                    redirect('login/loginNow');
                   // redirect('Home/enterPassword/'.$receiver);
                } catch (Exception $e) {
                    redirect('login/gotoLogin');
                }


            }
            else{
             //   $this->session->set_flashData('msg',"Unauthorized Email");
                $data['visibility']="block";
                $this->load->view('header/guest_header',$data);

                $this->load->view('ui/forgot');            }


        }

    }

    public function index(){

        $data = array();
        $data['arr'] = $this->prime_model->showPreviousMatch();
        $data['segment'] = 0;
        $this->db->select('*');
        $query = $this->db->get('departments');
        $this->db->select('*');
        $data['teams'] =  $query->result_array();

        $data['segment']=0;

        $this->load->view('header/guest_home_header',$data);
        $this->load->view('ui/left_home_side',$data);
        $this->load->view('ui/middle');
        $this->load->view('ui/right_home_side');
/*//Load Composer's autoloader
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

            //Recipients
            $mail->setFrom('jamil.iitdu@gmail.com', 'Mailer');
            $mail->addAddress('bsse0802@iit.du.ac.bd', 'Jamil');     // Add a recipient

            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = ''; //remember to declare $pass as an array
            $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass .= $alphabet[$n];
            }
            //return implode($pass); //turn the array into a string



            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = $pass;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        } catch (Exception $e) {
        }

        redirect('Home/load');*/
    }


    public function verify(){
        $email = $this->uri->segment(3);
        $pass = $this->uri->segment(4);

        $this->db->select('*');
        $this->db->from('forgottemp');
        $this->db->where('email', $email);
        //$pass1 = $this->db->get();

        $query = $this->db->get();
        $ret = $query->row();
        $pass1 =  $ret->code;
        $email1 = $ret->email;
        $time1 = $ret->time;
        $data = array(
            'email' =>  $email1
        );


        if((strcmp($pass, $pass1 == 0)&& (time()-$time1)<3600)){
//            $this->load->view('header/guest_header');
//            $this->load->view('ui/password',$data);
            redirect('home/gotoPassword/'.$email);

        }
        else redirect('page404');




//            $this->db->select('temp');
//            $this->db->where('email', $email);
//            $query = $this->db->get('users');
//            $arr =  $query->result_array();
//            $code1 = $arr[0]['temp'];

            //echo $code." ".$pass." ".$this->input->post('password1')." ".$email ;

        }





    public function enterPassword(){
        if($this->input->post('password1')) {
            $code = $this->input->post('password1');
            $email = $this->input->post('email');
           // echo $email." dads";
            $data = array(
                'password' => md5($code)

            );
           // echo $email."  ".$code;
            $this->db->where('email', $email);
            $this->db->update('users', $data);
            $this->session->sess_destroy();
            //$this->session->set_flashdata('item', 'Password changed successfully!');
            //echo $this->session->flashdata('item');
            $this -> db -> where('email', $email);
            $this -> db -> delete('forgottemp');
            redirect('login/loginNow');

        }
    }


        public function gotoPassword()
        {
            $data =array(
                'email' => $this->uri->segment(3)
            );
            $this->load->view('header/guest_header');
            $this->load->view('ui/password', $data);
        }





}
?>