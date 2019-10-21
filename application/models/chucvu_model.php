<?php if (! defined('BASEPATH')) exit('No direct access allowed');
class chucvu_model extends CI_Model {
	public function __construct(){
        parent::__construct();
    }

    public function getCV(){
        $this->db->select('*');
        $res = $this->db->get('ttcn_chucvu');
        $res = $res ->result_array();
        return $res;
    }

    public function insertCV($tenchucvu,$hesoluong){
    	// xử lý thông tin nhận về và upload vào mysql
    	$chuvcu = array(
    		'tenchucvu' => $tenchucvu,
    		'hesoluong' => $hesoluong
    	);
    	$this->db->insert('ttcn_chucvu',$chuvcu);
    	return $this->db->insert_id();
    }

    public function deleteDataCV($idchucvu){
        $this->db->where('idchucvu',$idchucvu);
        return $this->db->delete('ttcn_chucvu');
    }

    public function upDataCV($idchucvu,$tenchucvu,$hesoluong){
        $chucvu = array(
            'idchucvu' => $idchucvu,
            'tenchucvu' => $tenchucvu,
            'hesoluong' => $hesoluong
        );
        $this->db->where('idchucvu',$idchucvu);
        return $this->db->update('ttcn_chucvu',$chucvu);
    }
}