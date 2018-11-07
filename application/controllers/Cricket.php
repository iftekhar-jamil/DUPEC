<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cricket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('prime_model');
    }

    public function index()
    {
        $data['title'] = 'Fetch Database Info';
        $data['matches'] = $this->prime_model->get_data('matches');
        $data['segment'] = 0;
        //$this->load->view('cricket/cricket',$data);
//        $data['userdata'] = $this->session->userdata();
//        echo $data['userdata']['usertype'];
        if (!$this->session->userdata('username')) {
            $this->load->view('header/guest_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('cricket/cricket_ad_user');
            $this->load->view('ui/right_side');
        } else {
//            echo 'oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooookkkkkkkkkkkkkkkkkkkkkkkk';
            $data['userdata'] = $this->session->userdata();
            if ($data['userdata']['usertype'] == 'Operator') {
                $this->load->view('header/operator_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('cricket/cricket');
                $this->load->view('ui/right_side');
            } elseif ($data['userdata']['usertype'] == 'Admin') {
                $this->load->view('header/admin_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('cricket/cricket_ad_user', $data);
                $this->load->view('ui/right_side');
            } else {
                $this->load->view('header/user_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('cricket/cricket_ad_user', $data);
                $this->load->view('ui/right_side');
            }
        }

    }

    public function create()
    {
        $this->load->library('form_validation');
        $data['userdata'] = $this->session->userdata();

        $data = array(
            'title' => 'Create a match',
            'action' => site_url('cricket/create'),
            'button' => 'Create'
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
                $this->db->insert('matches', $info);
                redirect('cricket');
            } else {
                if ($data['userdata']['usertype'] == 'Operator') {
                    $this->load->view('header/operator_header', $data);
                    $this->load->view('ui/left_side');
                    $this->load->view('cricket/cricket_form');
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
            $this->load->view('cricket/cricket_form');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }
    }

    public function edit($id)
    {
        $this->load->library('form_validation');
        $data['userdata'] = $this->session->userdata();

        if ($id != '') {
            $match_id = (int)$id;
            $data = array(
                'title' => 'Edit a match',
                'action' => site_url('cricket/edit') . '/' . $match_id,
                'match' => $this->prime_model->get_data('matches', 'id', $match_id),
                'button' => 'Update'
            );
            if (count($data['match']) < 1) {
                redirect('cricket');
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
                $this->db->where('id', $match_id)->update('matches', $info);
                redirect('cricket');
            } else {
                if ($data['userdata']['usertype'] == 'Operator') {
                    $this->load->view('header/operator_header', $data);
                    $this->load->view('ui/left_side');
                    $this->load->view('cricket/cricket_form');
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
            $this->load->view('cricket/cricket_form');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }
    }


    public function delete($id)
    {
        $data['userdata'] = $this->session->userdata();
        if ($data['userdata']['usertype'] == 'Operator') {

            if ($id != '') {
                $this->db->where('id', (int)$id)->delete('matches');
                redirect('cricket');
            }
        } else {
            $this->load->view('ui/page404');
        }
    }

}



