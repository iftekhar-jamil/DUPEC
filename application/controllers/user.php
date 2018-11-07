<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/28/2018
 * Time: 12:07 AM
 */

class User extends My_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->database('sports');
        $this->load->model('database');

    }
    public function index(){
        $this->load->view('ui/welcome');
//        $this->load->database('sports');
//        $this->load->model('database');
    }

    /**
     *
     */
    public function adminPage(){
        $in['check'] = $this->session->flashdata('in');


        $this->load->model('database');
        $deptRequest['req'] = $this->database->getDirectorRequest();
        if($deptRequest == null){
            echo 'not found';
        }
        //print_r($deptRequest);
        $this->load->view('ui/admin_home',$deptRequest,$in);
    }
    
    public function viewProfile(){
        $data['userdata'] = $this->session->userdata();

        //$data['userdata'] = $this->session->userdata();

//        echo $data['userdata']['username'];

        if($this->session->has_userdata('usertype')) {
            $id = $data['userdata']['user_id'];
            $this->db->select('*');
            $this->db->where('user_id', $id);
            $query = $this->db->get('users');
            $arr1 = $query->result_array();
            $arr = array(
                'name' => $arr1[0]['name'],
                'username' => $arr1[0]['username'],
                'usertype' => $arr1[0]['user_type'],

                'email' => $arr1[0]['email'],
                'gender' => $arr1[0]['password'],
                'fteam' => $arr1[0]['fteam'],
                'fplayer' => $arr1[0]['fplayer'],
                'dob' => $arr1[0]['dob']
            );
            if ($data['userdata']['usertype'] == 'Admin') {
                $this->load->view('header/admin_header', $data);
                $this->load->view('userAccount/userProfile', $data);
            } else if ($data['userdata']['usertype'] == 'Operator') {
                $this->load->view('header/operator_header', $data);
                $this->load->view('userAccount/userProfile', $data);
            } else if ($data['userdata']['usertype'] == 'User') {
                $this->load->view('header/user_header', $data);
                $this->load->view('userAccount/userProfile', $data);
            }
        }
        else redirect('page404');
    }


    public function deleteAccount()
    {
        $data['userdata'] = $this->session->userdata();
        if($this->input->post('password')){
            $userdata = $this->database->getUserWithEmail($data['userdata']['email'], md5($this->input->post('password')));
            if($userdata!=null){
                $this->db->where('email', $data['userdata']['email']);
                $this->db->delete('users');
                $this->session->sess_destroy();
                redirect('login/loginHere');
            }
            else redirect('user/deleteAccount');
        }
        else $this->load->view('userAccount/useraccntdel');
    }


    public function delete($id) {
        $data['userdata'] = $this->session->userdata();
        if ($data['userdata']['usertype'] == 'Admin') {

            if ($id != '') {
                $this->db->where('user_id', (int) $id)->delete('users');
                redirect('register/manageUserByAdmin');
            }
        } else {
            $this->load->view('ui/page404');
        }

    }


    public function edit($id){
        $this->db->select('*');
        $this->db->where('user_id', $id);
        $query = $this->db->get('users');
        $data['userdata'] = $this->session->userdata();
        $arr1 = $query->result_array();
        $data['arr'] = $arr1;
        //print_r($arr1);
        if ($data['userdata']['usertype'] == 'Admin') {
            $this->load->view('header/admin_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('ui/editbyAdmin',$data);
        }
        else $this->load->view('ui/page404');
        //$this->load->view('editbyAdmin',$data);
    }

    public function editUser()
    {
        if ($this->input->post(1)) {
            $data = array(
                'username' => $this->input->post(1),
                'name' => $this->input->post(2),
                'user_type' => $this->input->post(3),
                'user_id' => $this->input->post(4)
            );
            //$newpass['password'] = md5($passwordplain);
            $this->db->where('user_id', $this->input->post(4));
            $this->db->update('users', $data);
            redirect('register/manageUserByAdmin');
        }
    }


    public function editAccount($id){
        $this->db->select('*');
        $this->db->where('user_id', $id);
        $query = $this->db->get('users');
        $data['userdata'] = $this->session->userdata();
        $arr1 = $query->result_array();
        $data['arr'] = $arr1;
        //print_r($arr1);
        if($this->session->userdata('usertype')=='Admin') {
            $this->load->view('header/admin_header');
            $this->load->view('ui/left_side');
            $this->load->view('ui/editbyUser',$data);
            $this->load->view('ui/right_side');
        }

        else if($this->session->userdata('usertype')=='User') {
            $this->load->view('header/user_header');
            $this->load->view('ui/left_side');
            $this->load->view('ui/editbyUser',$data);
            $this->load->view('ui/right_side');
        }

        else if ($this->session->userdata('usertype')=='Operator') {
            $this->load->view('header/operator_header');
            $this->load->view('ui/left_side');
            $this->load->view('ui/editbyUser',$data);
            $this->load->view('ui/right_side');
        }
        else $this->load->view('ui/page404');
        //$this->load->view('editbyAdmin',$data);
    }


    public function editProfile(){
        if ($this->input->post(1)) {
            $data = array(
                'username' => $this->input->post(1),
                'name' => $this->input->post(2),
                'user_id' => $this->input->post(3),
                'gender' => $this->input->post(4),
                'fplayer' => $this->input->post(5),
                'fteam' => $this->input->post(6),
                'dob' => $this->input->post(7),

            );
            //$newpass['password'] = md5($passwordplain);
            $this->db->where('user_id', $this->input->post(3));
            $this->db->update('users', $data);
            redirect('login/gotologin');
        }
    }
}