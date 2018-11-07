<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Volleyball extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('prime_model');
    }

    public function index(){
        $data['title'] = 'Fetch Database Info';
        $data['volleyballmatches'] = $this->prime_model->get_data('volleyballmatches');
        $data['segment']=0;

//        $data['userdata'] = $this->session->userdata();
//        if($data['userdata']['usertype']=='Operator')
//        $this->load->view('volleyball/volleyball',$data);
//        else
//        $this->load->view('volleyball/volleyball_ad_user',$data);
        if (!$this->session->userdata('username')) {
            $this->load->view('header/guest_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('volleyball/volleyball_ad_user', $data);
            $this->load->view('ui/right_side');
        }else {
//            echo 'oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooookkkkkkkkkkkkkkkkkkkkkkkk';
            $data['userdata'] = $this->session->userdata();
            if ($data['userdata']['usertype'] == 'Operator') {
                $this->load->view('header/operator_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('volleyball/volleyball', $data);
                $this->load->view('ui/right_side');
            } elseif ($data['userdata']['usertype'] == 'Admin') {
                $this->load->view('header/admin_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('volleyball/volleyball_ad_user', $data);
                $this->load->view('ui/right_side');
            } else {
                $this->load->view('header/user_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('volleyball/volleyball_ad_user', $data);
                $this->load->view('ui/right_side');
            }
        }
    }
    
    
    public function create() {
        $this->load->library('form_validation');
        $data = array(
            'title' => 'Create a match',
            'action' => site_url('volleyball/create'),
            'button' => 'Create',
            'userdata' => $this->session->userdata()
        );
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('win', 'Win', 'required');
            $this->form_validation->set_rules('lose', 'Lose', 'required');
            $this->form_validation->set_rules('man', 'Man of the match', 'required');

            //$this->form_validation->set_message('valid_email', 'This {field} filed is invalid');
            $win = $this->input->post('win', TRUE);
            $lose = $this->input->post('lose', TRUE);
            $man = $this->input->post('man', TRUE);
            $info = array(
                'win' => $win,
                'lose' => $lose,
                'man' => $man
            );
            if ($this->form_validation->run()) {
                $this->db->insert('volleyballmatches', $info);
                redirect('volleyball');
            } else {
                if ($data['userdata']['usertype'] == 'Operator') {
                    $this->load->view('header/operator_header', $data);
                    $this->load->view('ui/left_side');
                    $this->load->view('volleyball/volleyball_form');
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
            $this->load->view('volleyball/volleyball_form');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }


    }
    public function edit($id) {
        $this->load->library('form_validation');

        if ($id != '') {
            $volleyballmatch_id = (int) $id;
            $data = array(
                'title' => 'Edit a match',
                'action' => site_url('volleyball/edit') . '/' . $volleyballmatch_id,
                'volleyballmatch' => $this->prime_model->get_data('volleyballmatches', 'id', $volleyballmatch_id),
                'button' => 'Update',
                'userdata' => $this->session->userdata()
            );
            if (count($data['volleyballmatch']) < 1) {
                redirect('volleyball');
            }
        }

        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('win', 'Win', 'required');
            $this->form_validation->set_rules('lose', 'Lose', 'required');
            $this->form_validation->set_rules('man', 'Man of the match', 'required');

            $win = $this->input->post('win', TRUE);
            $lose = $this->input->post('lose', TRUE);
            $man = $this->input->post('man', TRUE);
            $info = array(
                'win' => $win,
                'lose' => $lose,
                'man' => $man
            );
            if ($this->form_validation->run()) {
                $this->db->where('id', $volleyballmatch_id)->update('volleyballmatches', $info);                
                redirect('volleyball');
            } else {
                if ($data['userdata']['usertype'] == 'Operator') {
                    $this->load->view('header/operator_header', $data);
                    $this->load->view('ui/left_side');
                    $this->load->view('volleyball/volleyball_form');
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
            $this->load->view('volleyball/volleyball_form');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }
    }
    public function delete($id) {
        $data['userdata'] = $this->session->userdata();
        if ($data['userdata']['usertype'] == 'Operator') {

            if ($id != '') {
                $this->db->where('id', (int) $id)->delete('volleyballmatches');
                redirect('volleyball');
            }
        } else {
            $this->load->view('ui/page404');
        }

    }
}



