<?php if (! defined('BASEPATH')) exit('No direct access allowed');

class khachhang_model extends CI_Model {
	public $var;
	public function __construct(){
        parent::__construct();
    }
    public function insertKH($tk,$tdd,$mk,$sdt){
    	// xử lý thông tin nhận về và upload vào mysql
    	$khachhang = array(
    		'TK' => $tk,
    		'TDD' => $tdd,
    		'MK' =>$mk,
    		'SDT' =>$sdt,);
    	$this->db->insert('ttcn_khachhang',$khachhang);
    	return $this->db->insert_id();
    }
    //lấy dữ liệu
    public function getAllDataKH(){
        $this->db->select('*');
        $khachhang = $this->db->get('ttcn_khachhang');
        $khachhang = $khachhang->result_array();
        return $khachhang;
    }

    public function deleteDataKH($IDKH){
        $this->db->where('IDKH',$IDKH);
        return $this->db->delete('ttcn_khachhang');
    }

    public function upDataKH($idkh,$tk,$tdd,$mk,$sdt){
        $khachhang1 = array(
            'IDKH' => $idkh,
            'TK' => $tk,
            'TDD' => $tdd,
            'MK' =>$mk,
            'SDT' =>$sdt
        );
        $this->db->where('IDKH',$idkh);
        return $this->db->update('ttcn_khachhang',$khachhang1);
    }
}