<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/28/2018
 * Time: 6:13 PM
 */

class page404 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->output->set_status_header('404');
        $this->load->view('ui/page404');
    }
}