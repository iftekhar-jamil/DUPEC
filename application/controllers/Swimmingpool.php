<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
class Swimmingpool extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('swim');
    }


    public function index()
    {
        $data['title'] = 'Fetch Database Info';
        $data['swimmingpools'] = $this->swim->get_data('swimmingpool');
        $data['segment'] = 0;
        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/user_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('swimmingpool/swimmingpool');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }
    }


    public function information()
    {
        if ($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_header');
            $this->load->view('ui/swimInfo');
        } else {
            $this->load->view('ui/page404');
        }
    }

        public function create()
    {
        $this->load->library('form_validation');
        $data = array(
            'title' => 'Create a match',
            'action' => site_url('swimmingpool/create'),
            'button' => 'Create'
        );
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('type', 'type', 'required');
            //$this->form_validation->set_rules('remaining_session', 'remaining_session', 'required');
            //$this->form_validation->set_rules('expired_date', 'expired_date', 'required');
            $this->form_validation->set_rules('gender', 'gender', 'required');

            //$this->form_validation->set_message('valid_email', 'This {field} filed is invalid');
            $name = $this->input->post('name', TRUE);
            $email = $this->input->post('email', TRUE);
            $type = $this->input->post('type', TRUE);
//            $remaining_session = $this->input->post('remaining_session', TRUE);
//            $expired_date = $this->input->post('expired_date', TRUE);
            $gender = $this->input->post('gender', TRUE);
            $dt = date("Y-m-d");

            $info = array(
                'name' => $name,
                'email' => $email,
                'type' => $type,
                'remaining_session' => 8,
                'expired_date' => date( "Y-m-d", strtotime( "$dt +180 day" ) ),
                'gender' => $gender,
                'status' => 'pending'
            );





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
                $mail->setFrom('jamil.iitdu@gmail.com', 'Dhaka University Swimming pool');
                $mail->addAddress($email, 'User');     // Add a recipient

                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = ''; //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < 8; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass .= $alphabet[$n];
                }
                $info['code'] = $pass;
                $this->session->set_userdata($data);
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body = "Your code for swimming pool is".$pass;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
            } //echo 'Message has been sent';
            catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }







            if ($this->form_validation->run()) {
                $this->db->insert('swimmingpool', $info);
                redirect('swimmingpool/create');
            } else {
                if ($this->session->userdata('usertype') == 'User') {
                    $this->load->view('header/user_header');
                    $this->load->view('ui/left_side');
                    $this->load->view('swimmingpool/create', $data);
                    $this->load->view('ui/right_side');
                } else {
                    $this->load->view('ui/page404');
                }
                return;
            }
        }
      //  else redirect('swimmingpool/create');
        else if($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_header');
            $this->load->view('ui/left_side');
            $this->load->view('swimmingpool/create', $data);
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }
    }


    public function edit($id)
    {
        $this->load->library('form_validation');

        if ($id != '') {
            $swimmingpool_id = (int)$id;
            $data = array(
                'title' => 'Edit a match',
                'action' => site_url('swimmingpool/edit') . '/' . $swimmingpool_id,
                'swimmingpool' => $this->swim->get_data('swimmingpool', 'id', $swimmingpool_id),
                'button' => 'Update'
            );
            if (count($data['swimmingpool']) < 1) {
                redirect('swimmingpool');
            }
        }

        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('name', 'name', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('type', 'type', 'required');
            $this->form_validation->set_rules('remaining_session', 'remaining_session', 'required');
            $this->form_validation->set_rules('expired_date', 'expired_date', 'required');
            $this->form_validation->set_rules('gender', 'gender', 'required');

            //$this->form_validation->set_message('valid_email', 'This {field} filed is invalid');
            $name = $this->input->post('name', TRUE);
            $email = $this->input->post('email', TRUE);
            $type = $this->input->post('type', TRUE);
            $remaining_session = $this->input->post('remaining_session', TRUE);
            $expired_date = $this->input->post('expired_date', TRUE);
            $gender = $this->input->post('gender', TRUE);
            $info = array(
                'name' => $name,
                'email' => $email,
                'type' => $type,
                'remaining_session' => $remaining_session,
                'expired_date' => $expired_date,
                'gender' => $gender,
                'status' => 'pending'
            );
            if ($this->form_validation->run()) {
                $this->db->where('id', $swimmingpool_id)->update('swimmingpool', $info);
                redirect('swimmingpool');
            } else {
                if ($this->session->userdata('usertype') == 'User') {
                    $this->load->view('header/user_header');
                    $this->load->view('ui/left_side');
                    $this->load->view('swimmingpool/create', $data);
                    $this->load->view('ui/right_side');
                } else {
                    $this->load->view('ui/page404');
                }
                return;
            }
        }
        if ($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_header');
            $this->load->view('ui/left_side');
            $this->load->view('swimmingpool/create', $data);
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }
    }


    public function delete($id)
    {
        if ($this->session->userdata('usertype') == 'User') {

            if ($id != '') {
                $this->db->where('id', (int)$id)->delete('swimmingpool');
                redirect('swimmingpool');
            }
        } else {
            $this->load->view('ui/page404');
        }
    }
}



