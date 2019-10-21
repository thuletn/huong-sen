<?php if (! defined('BASEPATH')) exit('No direct access allowed');

class cauhinh_model extends CI_Model {
	public function __construct(){
        parent::__construct();
    }


    public function getThongTin(){
        $this->db->select('*');
        $this->db->where('ten','qlthongtin');
        $noidung = $this->db->get('ttcn_cauhinh');
        $noidung = $noidung->result_array();
        foreach ($noidung as $value) {
            $noidung = $value['noidung'];
        }
        return $noidung;
    }

    public function getSlider(){
        $this->db->select('*');
        $this->db->where('ten','qlslider');
        $noidung = $this->db->get('ttcn_cauhinh');
        $noidung = $noidung->result_array();
        foreach ($noidung as $value) {
            $noidung = $value['noidung'];
        }
        return $noidung;
    }

    public function getLogo(){
        $this->db->select('*');
        $this->db->where('ten','qllogo');
        $logo = $this->db->get('ttcn_cauhinh');
        $logo = $logo->result_array();
        foreach ($logo as $value) {
            $logo = $value['noidung'];
        }
        return $logo;
    }

    public function upDataThongTin($dulieu){
        $noidung = array(
            'ten' => 'qlthongtin',
            'noidung' => $dulieu
        );
         $this->db->where('ten','qlthongtin');
         return $this->db->update('ttcn_cauhinh',$noidung);
     }

    public function upDataLogo($dulieu){
        $noidung = array(
            'ten' => 'qllogo',
            'noidung' => $dulieu
        );
         $this->db->where('ten','qllogo');
         return $this->db->update('ttcn_cauhinh',$noidung);
     }
    public function upDataSlider($dulieu){
        $noidung = array(
            'ten' => 'qlslider',
            'noidung' => $dulieu
        );
         $this->db->where('ten','qlslider');
         return $this->db->update('ttcn_cauhinh',$noidung);
     }

    public function loadLienhe(){
    	$this->db->select('*');
    	$dl = $this->db->get('ttcn_lienhe');
    	$dl = $dl->result_array();
    	return $dl;
    }
    public function loadGt(){
        $this->db->select('*');
        $dl = $this->db->get('ttcn_gt');
        $dl = $dl->result_array();
        return $dl;
    }

    public function upDataGt($idgt,$trichdangt,$noidung){
        $gt = array(
            'idgt' => $idgt,
            'trichdangt' => $trichdangt,
            'noidung' => $noidung
        );
        $this->db->where('idgt',$idgt);
        return $this->db->update('ttcn_gt',$gt);
    }
}