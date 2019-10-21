<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class dangnhap extends CI_Controller
{
    public function __construct()
    {
       parent::__construct();
       //load model user
       $this->load->model('User_model');
    }

    public function index()
    {
       $this->load->view('view_ql/dangnhapadmin_view');
    }
}