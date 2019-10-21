<?php if (! defined('BASEPATH')) exit('No direct access allowed');

class Datban_model extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function insertDatban($tenkh,$email,$sdt,$giodatban,$songuoi){
		$khachhang = array(
			'tenkh' => $tenkh,
			'email' => $email,
			'sdt' => $sdt,
			'giodatban' => $giodatban,
			'songuoi' => $songuoi,
		);
		return $this->db->insert('ttcn_datban',$khachhang);
	}

	public function loadDatban(){
        $this->db->select('*');
        $this->db->from('ttcn_datban');
        $this->db->join('ttcn_ban', 'ttcn_datban.idban = ttcn_ban.idban');
        $this->db->order_by('ttcn_datban.trangthai','asc');
        $dl = $this->db->get();
        return $dl->result_array();

    	// $this->db->select('*');
    	// $this->db->order_by('trangthai','asc');
    	// $dl = $this->db->get('ttcn_datban');
    	// $dl = $dl->result_array();
     //    return $dl;
    }

    public function duyetDatbana($iddb,$trangthai,$idban){
        $datban = array(
            'iddb' => $iddb,
            'trangthai' => $trangthai,
            'idban' => $idban
        );
        $this->db->where('iddb',$iddb);
        return $this->db->update('ttcn_datban',$datban);
    }

    public function duyetDatbanb($iddb,$trangthai){
        $datban = array(
            'iddb' => $iddb,
            'trangthai' => $trangthai,
        );
        $this->db->where('iddb',$iddb);
        return $this->db->update('ttcn_datban',$datban);
    }

    public function huyDatban($iddb,$trangthai){
        $datban = array(
            'iddb' => $iddb,
            'trangthai' => $trangthai,
        );
        $this->db->where('iddb',$iddb);
        return $this->db->update('ttcn_datban',$datban);
    }

    public function deleteDatban($iddb){
        $this->db->where('iddb',$iddb);
        return $this->db->delete('ttcn_datban');
    }

    public function duyetDatbanHuy($iddb,$trangthai){
        $datban = array(
            'iddb' => $iddb,
            'trangthai' => $trangthai,
        );
        $this->db->where('iddb',$iddb);
        return $this->db->update('ttcn_datban',$datban);
    }
}