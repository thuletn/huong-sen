<?php if (! defined('BASEPATH')) exit('No direct access allowed');

class ban_model extends CI_Model {
	public function __construct(){
        parent::__construct();
    }

    public function getAllBan(){
        $this->db->select('*');
        $this->db->order_by('trangthaiban','asc');
        $ban = $this->db->get('ttcn_ban');
        $ban = $ban->result_array();
        return $ban;
    }

    public function getAllBanTrong(){
        $this->db->select('*');
        $this->db->where('trangthaiban',0);
        $ban = $this->db->get('ttcn_ban');
        $ban = $ban->result_array();
        return $ban;
    }

    public function insertBan($tenban,$soghe,$trangthaiban){
    	// xử lý thông tin nhận về và upload vào mysql
    	$ban = array(
    		'tenban' => $tenban,
    		'soghe' => $soghe,
    		'trangthaiban' =>$trangthaiban
    	);
    	$this->db->insert('ttcn_ban',$ban);
    	return $this->db->insert_id();
    }

    public function upDataBan($idban,$tenban,$soghe,$trangthaiban){
        $ban = array(
        	'idban' => $idban,
    		'tenban' => $tenban,
    		'soghe' => $soghe,
    		'trangthaiban' =>$trangthaiban
    	);
        $this->db->where('idban',$idban);
        return $this->db->update('ttcn_ban',$ban);
    }

    public function duyetTTB1($idban,$trangthaiban){
        // echo $idban;
        // die();
        $ban = array(
            'idban' => $idban,
            'trangthaiban' =>$trangthaiban
        );
        $this->db->where('idban',$idban);
        return $this->db->update('ttcn_ban',$ban);
    }
}