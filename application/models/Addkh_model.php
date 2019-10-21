<?php if (! defined('BASEPATH')) exit('No direct access allowed');

class Addkh_model extends CI_Model {
	public $var;
	public function __construct(){
        parent::__construct();
    }
    public function insert($tk,$tdd,$mk,$sdt){
    	$khachhang = array('TK'=>$tk , 'TDD'=>$tdd , 'MK'=>$mk , 'SDT'=>$sdt);
    	$this->db->insert('ttcn_khachhang', $khachhang);
    	return $this->db->insert_id();
    }
}