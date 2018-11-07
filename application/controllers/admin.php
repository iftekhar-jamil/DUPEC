<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/28/2018
 * Time: 12:08 AM
 */

class Admin extends My_Controller
{
    public function index() {
        //  echo "Something!";

    }


    public function field(){
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
        $data['requests'] = $this->database->getRequests();

        if($this->session->userdata('usertype')=='Admin') {
            $this->load->view('header/admin_header', $data);
            $this->load->view('ui/fieldReserverequests');
        }
        else{
            $this->load->view('ui/page404');
        }
    }


    public function swimming(){
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
        $data['requests'] = $this->database->getSwimRequests();



        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_header');
            $this->load->view('ui/swimrequests',$data);
        }
        else{
            $this->load->view('ui/page404');
        }

    }


    public function showAllSwim(){
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
        $data['requests'] = $this->database->getAllSwimRequests();



        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_header');
            $this->load->view('ui/swimrequests',$data);
        }
        else{
            $this->load->view('ui/page404');
        }

    }




    public function edit($id) {
        $this->load->model('database');
        $this->database->edit($id);
        redirect('admin/field');

    }

    public function editSwim($id) {
        $this->load->model('database');
        $this->database->editSwim($id);
        redirect('admin/swimming');

    }

    public function reject($id){
        $this->load->model('database');
        $this->database->reject($id);
        redirect('admin/field');
    }

    public function rejectSwim($id){
        $this->load->model('database');
        $this->database->rejectSwim($id);
        redirect('admin/swimming');
    }



    public function newField(){
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
        $data['requests'] = $this->database->getNewFieldRequests();
        $data['dt']  = date("Y-m-d");
        //echo "sssc";
        //print_r($data);
        if($this->session->userdata('usertype')=='User') {
            $this->load->view('header/user_header', $data);
            $this->load->view('ui/left_side',$data);
            $this->load->view('field/requests',$data);
        }
        else{
            $this->load->view('ui/page404');
        }
    }

    public function apply(){

        if(!$this->input->post('email')){
            if($this->uri->segment(3))
                $date = $this->uri->segment(3);
            if($this->uri->segment(4))
                $session = $this->uri->segment(4);
            $this->session->set_userdata('date', $date);
            $this->session->set_userdata('session', $session);

            if($this->session->userdata('usertype')=='User') {
                $this->load->view('header/user_header');
                $this->load->view('ui/left_side');
                $this->load->view('ui/takeInfo');
            }
        }

        else{
            $data = array(
                 'date' => $this->session->userdata('date'),
                 'session' =>  $this->session->userdata('session'),
                 'status' => 'pending',
                 'organization' => $this->input->post('organization'),
                'email' => $this->input->post('email'),
                'purpose' => $this->input->post('purpose')
            );
            $this->db->insert('fieldrequests', $data);
            redirect('admin/newField');
        }
    }


    public function editField($id){
        $this->load->model('database');
        //echo $id;
        $this->database->editField($id);
        redirect('admin/newRequests');
    }


    public function rejectField($id){
        $this->load->model('database');
        $this->database->rejectField($id);
        redirect('admin/newRequests');
    }



    public function newRequests(){
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
        $data['requests'] = $this->database->getNewFieldRequests();

        if($this->session->userdata('usertype')=='Admin') {
            $this->load->view('header/admin_header', $data);
            $this->load->view('ui/newfieldRequests');
        }
        else{
            $this->load->view('ui/page404');
        }
    }

    public function showAllField(){
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
        $data['requests'] = $this->database->getNewFieldRequests();



        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_header');
            $this->load->view('ui/newfieldRequests',$data);
        }
        else{
            $this->load->view('ui/page404');
        }

    }


    public function showLessField(){
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
        $data['requests'] = $this->database->getlessNewFieldRequests();



        if ($this->session->userdata('usertype') == 'Admin') {
            $this->load->view('header/admin_header');
            $this->load->view('ui/newfieldRequests',$data);
        }
        else{
            $this->load->view('ui/page404');
        }

    }





}
