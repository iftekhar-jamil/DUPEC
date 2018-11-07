<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Athletics extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('prime_model');
    }

    public function index()
    {
        $data['title'] = 'Fetch Database Info';
        $data['athleticsmatches'] = $this->prime_model->get_data('athleticsmatches');
        $data['segment'] = 0;
//        $data['userdata'] = $this->session->userdata();
//        if($data['userdata']['usertype']=='Operator')
//        $this->load->view('athletics/athletics',$data);
//        else
//        $this->load->view('athletics/athletics_ad_user',$data);
        if (!$this->session->userdata('username')) {
            $this->load->view('header/guest_header', $data);
            $this->load->view('ui/left_side');
            $this->load->view('athletics/athletics_ad_user', $data);
            $this->load->view('ui/right_side');
        } else {
//            echo 'oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooookkkkkkkkkkkkkkkkkkkkkkkk';
            $data['userdata'] = $this->session->userdata();
            if ($data['userdata']['usertype'] == 'Operator') {
                $this->load->view('header/operator_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('athletics/athletics', $data);
                $this->load->view('ui/right_side');
            } elseif ($data['userdata']['usertype'] == 'Admin') {
                $this->load->view('header/admin_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('athletics/athletics_ad_user', $data);
                $this->load->view('ui/right_side');
            } else {
                $this->load->view('header/user_header', $data);
                $this->load->view('ui/left_side');
                $this->load->view('athletics/athletics_ad_user', $data);
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
            'action' => site_url('athletics/create'),
            'button' => 'Create',
            'userdata' => $this->session->userdata()
        );
        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('hall_name', 'Hall Name', 'required');
            $this->form_validation->set_rules('sportname', 'sportname', 'required');
            $this->form_validation->set_rules('rank1', 'rank1', 'required');
            $this->form_validation->set_rules('rank2', 'rank2', 'required');
            $this->form_validation->set_rules('rank3', 'rank3', 'required');

            //$this->form_validation->set_message('valid_email', 'This {field} filed is invalid');
            $hall_name = $this->input->post('hall_name', TRUE);
            $sportname = $this->input->post('sportname', TRUE);
            $rank1 = $this->input->post('rank1', TRUE);
            $rank2 = $this->input->post('rank2', TRUE);
            $rank3 = $this->input->post('rank3', TRUE);
            $info = array(
                'hall_name' => $hall_name,
                'sportname' => $sportname,
                'rank1' => $rank1,
                'rank2' => $rank2,
                'rank3' => $rank3
            );
            if ($this->form_validation->run()) {
                $this->db->insert('athleticsmatches', $info);
                redirect('athletics');
            } else {
                if ($data['userdata']['usertype'] == 'Operator') {
                    $this->load->view('header/operator_header', $data);
                    $this->load->view('ui/left_side');
                    $this->load->view('athletics/athletics_form');
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
            $this->load->view('athletics/athletics_form');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }
    }

    public
    function edit($id)
    {
        $this->load->library('form_validation');
        $data['userdata'] = $this->session->userdata();

        if ($id != '') {
            $athleticsmatch_id = (int)$id;
            $data = array(
                'title' => 'Edit a match',
                'action' => site_url('athletics/edit') . '/' . $athleticsmatch_id,
                'athleticsmatch' => $this->prime_model->get_data('athleticsmatches', 'id', $athleticsmatch_id),
                'button' => 'Update',
                'userdata' => $this->session->userdata()
            );
            if (count($data['athleticsmatch']) < 1) {
                redirect('athletics');
            }
        }

        if ($this->input->post('submit')) {
            $this->form_validation->set_rules('hall_name', 'Hall Name', 'required');
            $this->form_validation->set_rules('sportname', 'sportname', 'required');
            $this->form_validation->set_rules('rank1', 'rank1', 'required');
            $this->form_validation->set_rules('rank2', 'rank2', 'required');
            $this->form_validation->set_rules('rank3', 'rank3', 'required');

            //$this->form_validation->set_message('valid_email', 'This {field} filed is invalid');
            $hall_name = $this->input->post('hall_name', TRUE);
            $sportname = $this->input->post('sportname', TRUE);
            $rank1 = $this->input->post('rank1', TRUE);
            $rank2 = $this->input->post('rank2', TRUE);
            $rank3 = $this->input->post('rank3', TRUE);
            $info = array(
                'hall_name' => $hall_name,
                'sportname' => $sportname,
                'rank1' => $rank1,
                'rank2' => $rank2,
                'rank3' => $rank3
            );
            if ($this->form_validation->run()) {
                $this->db->where('id', $athleticsmatch_id)->update('athleticsmatches', $info);
                redirect('athletics');
            } else {
                if ($data['userdata']['usertype'] == 'Operator') {
                    $this->load->view('header/operator_header', $data);
                    $this->load->view('ui/left_side');
                    $this->load->view('athletics/athletics_form');
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
            $this->load->view('athletics/athletics_form');
            $this->load->view('ui/right_side');
        } else {
            $this->load->view('ui/page404');
        }
    }

    public
    function delete($id)
    {
        $data['userdata'] = $this->session->userdata();
        if ($data['userdata']['usertype'] == 'Operator') {

            if ($id != '') {
                $this->db->where('id', (int)$id)->delete('athleticsmatches');
                redirect('athletics');
            }
        } else {
            $this->load->view('ui/page404');
        }
    }
}



