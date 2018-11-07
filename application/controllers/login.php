<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/28/2018
 * Time: 1:21 AM
 */

//require 'admin.php';
class Login extends My_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
        $this->load->model('prime_model');

    }

    public function index()
    {
        $data['arr'] = $this->prime_model->showPreviousMatch();
        $data['segment'] = 0;
        $this->session->sess_destroy();
        if ($this->session->userdata('username')) {
            redirect('login/gotoGuest');
//            $this->load->view('header/guest_home_header', $data);
//            $this->load->view('ui/left_home_side');
//            $this->load->view('ui/middle');
//            $this->load->view('ui/right_home_side');
        } else redirect('login/gotoLogin');
    }

    public function gotoLogin()
    {
        if ($this->session->userdata('usertype') == 'Admin') {
            redirect('login/gotoAdmin');
        } else if ($this->session->userdata('usertype') == 'User') {

            redirect('login/gotoUser');
        } else if ($this->session->userdata('usertype') == 'Operator') {
            redirect('login/gotoOperator');

        } else {


            redirect('login/gotoGuest');
        }
    }


    public function gotoGuest()
    {
        $data['arr'] = $this->prime_model->showPreviousMatch();
        $data['segment'] = 0;
        $this->db->select('*');
        $query = $this->db->get('departments');
        $data['teams'] = $query->result_array();
        if (!$this->session->userdata('usertype')) {
            $this->load->view('header/guest_home_header', $data);
            $this->load->view('ui/left_home_side');
            $this->load->view('ui/middle');
            $this->load->view('ui/right_home_side');
        }
    }

    public function gotoForgot()
    {
        $this->load->view('ui/forgot');
    }

    public function gotoRegister()
    {
        $this->load->view('ui/register');
    }

    public function gotoAdmin()
    {
        $data['arr'] = $this->prime_model->showPreviousMatch();
        $data['segment'] = 0;
        $this->db->select('*');
        $query = $this->db->get('departments');
        $data['teams'] = $query->result_array();
        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_home_header', $data);
            $this->load->view('ui/left_home_side');
            $this->load->view('ui/middle');
            $this->load->view('ui/right_home_side');
        }
        else    $this->load->view('ui/page404');
    }

    public function gotoOperator()
    {
        $data['arr'] = $this->prime_model->showPreviousMatch();
        $data['segment'] = 0;
        $this->db->select('*');
        $query = $this->db->get('departments');
        $data['teams'] = $query->result_array();
        if ($this->session->userdata('usertype') == 'Operator') {
            $this->load->view('header/operator_home_header', $data);
            $this->load->view('ui/left_home_side');
            $this->load->view('ui/middle');
            $this->load->view('ui/right_home_side');
        }        else    $this->load->view('ui/page404');


    }

    public function gotoUser()
    {
        $data['arr'] = $this->prime_model->showPreviousMatch();
        $data['segment'] = 0;
        $this->db->select('*');
        $query = $this->db->get('departments');
        $data['teams'] = $query->result_array();
        if ($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_home_header', $data);
            $this->load->view('ui/left_home_side');
            $this->load->view('ui/middle');
            $this->load->view('ui/right_home_side');
        }        else    $this->load->view('ui/page404');

    }

    public function first()
    {
//        if($this->session->userdata('usertype')=='Admin')
//            redirect('gotoAdmin');
//
//        if($this->session->userdata('usertype')=='Operator')
//            redirect('gotoOperator');
//
//        if($this->session->userdata('usertype')=='User')
//            redirect('gotoUser');

        $this->load->view('ui/welcome');
    }

    public function loginNow()
    {
        if ($this->session->userdata('usertype') == 'Admin')
            redirect('login/gotoAdmin');

        if ($this->session->userdata('usertype') == 'Operator')
            redirect('login/gotoOperator');

        if ($this->session->userdata('usertype') == 'User')
            redirect('login/gotoUser');
        $data['visibility'] = "none";
        $this->load->view('authentication/login', $data);
    }

    public function signIn()
    {
        $this->load->view('front/admin_page');
    }

    /**
     *
     */
    public function loginHere()
    {
//        $data = array();
//        $data['teams1'] = $this->prime_model->retriveTeams();
        // $arr11 = $this->prime_model->retriveTeams();

        if ($this->input->post('email') && $this->input->post('password'))
            redirect('login/loginHere');
        if (!$this->session->userdata('username')) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('pass', 'pass', 'required');

            $email = $this->input->post('email', TRUE);
            $pass = $this->input->post('pass', TRUE);

            $data['visibility'] = "block";

            $data = array(
                'email' => $email);

            $data['users'] = array('email' => $this->input->post('email'), 'password' => ($this->input->post('pass')));
            $this->db->select('*');
            $query = $this->db->get('departments');
            $data['teams'] = $query->result_array();

            if ($this->form_validation->run()) {
                $this->load->model('database');


                $userdata = $this->database->getUserWithEmail($data['users']['email'], md5($data['users']['password']));

                if ($userdata != null) {
                    $user_data = array(

                        'id' => $userdata[0]['user_id'],
                        'name' => $userdata[0]['name'],
                        'username' => $userdata[0]['username'],
                        'user_id' => $userdata[0]['user_id'],
                        'usertype' => $userdata[0]['user_type'],

                        'email' => $userdata[0]['email'],
                        'dob' => $userdata[0]['dob'],
                        'fteam' => $userdata[0]['fteam'],
                        'fplayer' => $userdata[0]['fplayer'],
                        'gender' => $userdata[0]['gender']


                    );

                    $this->session->set_userdata($user_data);
                    $data['arr'] = $this->prime_model->showPreviousMatch();

                    $data['segment'] = 0;
                    if ($userdata[0]['user_type'] == 'Admin') {
//                        $this->load->view('header/admin_home_header',$data);
//                        $this->load->view('ui/left_home_side');
//                        $this->load->view('ui/middle');
//                        $this->load->view('ui/right_home_side');
                        redirect('login/gotoAdmin');
                    }
                    if ($userdata[0]['user_type'] == 'User') {
                        redirect('login/gotoUser');
                    }
                    if ($userdata[0]['user_type'] == 'Operator') {
                        redirect('login/gotoOperator');
                    }
                } else {
                    $data['visibility'] = "block";
                    $this->load->view('authentication/login.php', $data);
                }

            } else {
                $data['visibility'] = "none";
                $this->load->view('authentication/login.php', $data);
            }

        } else {
            $data['arr'] = $this->prime_model->showPreviousMatch();
            $data['segment'] = 0;
            if ($this->session->userdata['usertype'] == 'Admin') {
//                $this->load->view('header/admin_home_header', $data);
//                $this->load->view('ui/left_home_side');
//                $this->load->view('ui/middle');
//                $this->load->view('ui/right_home_side');
                redirect('login/gotoAdmin');

            }
            if ($this->session->userdata['usertype'] == 'User') {
//                $this->load->view('header/user_home_header', $data);
//                $this->load->view('ui/left_home_side');
//                $this->load->view('ui/middle');
//                $this->load->view('ui/right_home_side');
                redirect('login/gotoUser');

            }
            if ($this->session->userdata['usertype'] == 'Operator') {
//                $this->load->view('header/operator_home_header', $data);
//                $this->load->view('ui/left_home_side');
//                $this->load->view('ui/middle');
//                $this->load->view('ui/right_home_side');
                redirect('login/gotoOperator');

            } else {
                $this->session->sess_destroy();
                redirect('login/loginHere');
            }
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        //$this->load->view('ui/home.php');
        redirect('login/gotoGuest');
    }

    public function forgotPassword()
    {
        if ($this->input->post('email')) {
            $email = $this->input->post('email');
            $this->load->model('database');
            $findemail = $this->database->ForgotPassword($email);
            if ($findemail) {
                $this->database->sendpassword($findemail);
            } else {
                $this->session->set_flashdata('msg', ' Email not found!');
                redirect('login/gotoLogin');
            }
        } else {
            $this->load->view('header/guest_header');
            $this->load->view('ui/forgot');
        }
    }

}