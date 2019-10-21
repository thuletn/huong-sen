<?php if (! defined('BASEPATH')) exit('No direct access allowed');
class thucdon_model extends CI_Model {
	public function __construct(){
        parent::__construct();
    }
    public function insertTD($anh,$tieude,$mota,$gia,$loai){
    	// xử lý thông tin nhận về và upload vào mysql
    	$thucdon = array(
    		'anh' => $anh,
    		'tieude' => $tieude,
    		'mota' =>$mota,
    		'gia' =>$gia,
    		'loai' => $loai,);
    	$this->db->insert('ttcn_menu',$thucdon);
    	return $this->db->insert_id();
    }

    public function getMoan(){
        $this->db->where("loai","Đồ ăn");
        $this->db->select('*');
        $this->db->order_by('idma','desc');
        $thucdon = $this->db->get('ttcn_menu');
        $thucdon = $thucdon->result_array();
        return $thucdon;
    }

    public function getDouong(){
        $this->db->where("loai","Đồ uống");
        $this->db->select('*');
        $this->db->order_by('idma','desc');
        $thucdon = $this->db->get('ttcn_menu');
        $thucdon = $thucdon->result_array();
        return $thucdon;
    }

    public function getCombo(){
        $this->db->where("loai","Combo");
        $this->db->select('*');
        $this->db->order_by('idma','desc');
        $thucdon = $this->db->get('ttcn_menu');
        $thucdon = $thucdon->result_array();
        return $thucdon;
    }

    public function upDataTDDA( $idma,$anh,$tieude,$mota,$gia){
        $moan1 = array(
            'idma' => $idma,
            'anh' => $anh,
            'tieude' => $tieude,
            'mota' =>$mota,
            'gia' =>$gia,
        );
        $this->db->where('idma',$idma);
        return $this->db->update('ttcn_menu',$moan1);
    }

    public function deleteTD($idma){
        $this->db->where('idma',$idma);
        return $this->db->delete('ttcn_menu');
    }
}