<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fixture extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('prime_model');
    }
    public function operate(){
        $data['userdata'] = $this->session->userdata();
        if ($data['userdata']['usertype'] == 'Operator') {

            $this->load->view('fixture/operate');
        }else{
            $this->load->view('ui/page404');
        }
    }

    public function index(){
        $data['title'] = 'Fetch Database Info';
        $data['fixture'] = $this->prime_model->get_data('fixture');
        $data['segment'] =0;
        $query = $this->db->query("SELECT * from fixture");
        //return $query->result();
        $data['arr'] = $query->result_array();
        //$this->load->view('fixture',$data);
//        $data['userdata'] = $this->session->userdata();
//        if($data['userdata']['usertype']=='Admin')
//        $this->load->view('fixture/fixture',$data);
//        else
//        $this->load->view('fixture/fixture_ad_user',$data);
        if (!$this->session->userdata('username')) {
            $this->load->view('header/guest_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('fixture/fixture_guest_view', $data);
            $this->load->view('ui/right_side');
        } else {
//            echo 'oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooookkkkkkkkkkkkkkkkkkkkkkkk';
            $data['userdata'] = $this->session->userdata();
            if ($data['userdata']['usertype'] == 'Operator') {
                $this->load->view('header/operator_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('fixture/fixture', $data);
            } elseif ($data['userdata']['usertype'] == 'Admin') {
                $this->load->view('header/admin_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('fixture/fixture_ad_user', $data);
                $this->load->view('ui/right_side');
            } else {
                $this->load->view('header/user_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('fixture/fixture_ad_user', $data);
                $this->load->view('ui/right_side');
            }
        }
    }
    public function create() {
        $this->load->library('form_validation');
        $data['userdata'] = $this->session->userdata();

        $data = array(
            'title' => 'Create a match',
            'action' => site_url('fixture/create'),
            'button' => 'Create',
            'userdata' => $this->session->userdata()
        );
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('sportname', 'sportname', 'required');
            $this->form_validation->set_rules('team1', 'team1', 'required');
            $this->form_validation->set_rules('team2', 'team2', 'required');
            $this->form_validation->set_rules('date', 'date', 'required');
            $this->form_validation->set_rules('time', 'time', 'required');

            //$this->form_validation->set_message('valid_email', 'This {field} filed is invalid');
            $sportname = $this->input->post('sportname', TRUE);
            $team1 = $this->input->post('team1', TRUE);
            $team2 = $this->input->post('team2', TRUE);
            $date = $this->input->post('date', TRUE);
            $time = $this->input->post('time', TRUE);
            $info = array(
                'sportname' => $sportname,
                'team1' => $team1,
                'team2' => $team2,
                'date' => $date,
                'time' => $time
            );
            if ($this->form_validation->run()) {
                $this->db->insert('fixture', $info);
                redirect('fixture');
            } else {
                if ($data['userdata']['usertype'] == 'Operator') {
                    $this->load->view('header/operator_header', $data);
                    $this->load->view('ui/left_side');
                    $this->load->view('fixture/fixture_form');
//                    $this->load->view('ui/right_side');
                    return;
                } else {
                    $this->load->view('ui/page404');
                }
            }
        }
        if ($data['userdata']['usertype'] == 'Operator') {
            $this->load->view('header/operator_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('fixture/fixture_form');
//            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }



    }
    public function edit($id) {
        $this->load->library('form_validation');
        $data['userdata'] = $this->session->userdata();

        if ($id != '') {
            $fixture_id = (int) $id;
            $data = array(
                'title' => 'Edit a match',
                'action' => site_url('fixture/edit') . '/' . $fixture_id,
                'fixture' => $this->prime_model->get_data('fixture', 'id', $fixture_id),
                'button' => 'Update',
                'userdata' => $this->session->userdata()
            );
            if (count($data['fixture']) < 1) {
                redirect('fixture');
            }
        }

        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('sportname', 'sportname', 'required');
            $this->form_validation->set_rules('team1', 'team1', 'required');
            $this->form_validation->set_rules('team2', 'team2', 'required');
            $this->form_validation->set_rules('date', 'date', 'required');
            $this->form_validation->set_rules('time', 'time', 'required');

            //$this->form_validation->set_message('valid_email', 'This {field} filed is invalid');
            $sportname = $this->input->post('sportname', TRUE);
            $team1 = $this->input->post('team1', TRUE);
            $team2 = $this->input->post('team2', TRUE);
            $date = $this->input->post('date', TRUE);
            $time = $this->input->post('time', TRUE);
            $info = array(
                'sportname' => $sportname,
                'team1' => $team1,
                'team2' => $team2,
                'date' => $date,
                'time' => $time
            );
            if ($this->form_validation->run()) {
                $this->db->where('id', $fixture_id)->update('fixture', $info);                
                redirect('fixture');
            } else {
                if ($data['userdata']['usertype'] == 'Operator') {
                    $this->load->view('header/operator_header', $data);
                    $this->load->view('ui/left_side');
                    $this->load->view('fixture/fixture_form');
                    $this->load->view('ui/right_side');
                    return;
                } else {
                    $this->load->view('ui/page404');
                }
            }
        }
        if ($data['userdata']['usertype'] == 'Operator') {
            $this->load->view('header/operator_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('fixture/fixture_form');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }
    }
    public function delete($id) {
        $data['userdata'] = $this->session->userdata();
        if ($data['userdata']['usertype'] == 'Operator') {

            if ($id != '') {
                $this->db->where('id', (int) $id)->delete('fixture');
                redirect('fixture');
            }
        } else {
            $this->load->view('ui/page404');
        }

    }

    public function predict(){
        $prediction = $this->input->post('predict');
        $id = $this->uri->segment(3);
        $flag = false;
        $email = $this->session->userdata('email');
        $data = array(
            'match_id' => $id,
            'user_id' => $email,
            'prediction' => $prediction
        );

        $this->db->where('user_id',$email);
        $this->db->where('match_id',$id);
        $q = $this->db->get('prediction');

        if ( $q->num_rows() > 0 )
        {
            $flag = true;
            $this->db->where('user_id',$email);
            $this->db->where('match_id',$id);
            $this->db->update('prediction',$data);
        } else {
            //$this->db->set('user_id', $id);
            $this->db->insert('prediction',$data);
        }
        //$email = $this->session->userdata('email');
        $query = $this->db->query("SELECT * from fixture where id = $id");
        $arr = $query->result_array();
        //echo $arr[0]['id'];
        if(strcmp($prediction,$arr[0]['team1']))
        {
            $this->db->set('cnt2', 'cnt2 + 1', FALSE);
            $this->db->where('id',$id);
            $this->db->update('fixture');
            if($flag) {
                $this->db->set('cnt1', 'cnt1 - 1', FALSE);
                $this->db->where('id', $id);
                $this->db->update('fixture');
            }
        }

        else{
            $this->db->set('cnt1', 'cnt1 + 1', FALSE);
            $this->db->where('id',$id);
            $this->db->update('fixture');
            if($flag){
                $this->db->set('cnt2', 'cnt2 - 1', FALSE);
                $this->db->where('id',$id);
                $this->db->update('fixture');
            }
        }
        redirect('Fixture');
    }
}



