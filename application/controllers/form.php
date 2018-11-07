<?php
/**
 * Created by PhpStorm.
 * User: bsse0
 * Date: 2/28/2018
 * Time: 2:42 PM
 */

class form extends My_Controller
{
    public function index()
    {
        if ($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_header');
            $this->load->view('ui/left_side');
            $this->load->view('ui/field_reserve');
            $this->load->view('ui/right_side');
        }
        else{
            $this->load->view('ui/page404');
        }
    }

    public function reserve_field()
    {
        if ($this->session->userdata('usertype') == 'User') {
            $this->load->view('header/user_header');
            $this->load->view('ui/left_side');
            $this->load->view('ui/field_reserve');
            $this->load->view('ui/right_side');
        }
        else{
            $this->load->view('ui/page404');
        }
    }


    public function field()
    {
        $data = array('hired_by' => $this->input->post('name'),
            'date' => $this->input->post('date'),
            'status' => "pending"
        );


        $this->load->model('database');
        if ($this->database->saveFormData($data)) {
            echo "Added";
        } else {
            echo "Not Added";

        }


    }


}