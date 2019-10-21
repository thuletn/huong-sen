<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class admin extends CI_Controller
{
    public function __construct()
    {
       parent::__construct();
       //load model user
    }

    public function index()
    {
       $this->load->view('view_ql/admin_view');
    }
}