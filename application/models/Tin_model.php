<?php if (! defined('BASEPATH')) exit('No direct access allowed');

class Tin_model extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function insertDanhMuc($tendanhmuc){
		$dl = array(
			'tendanhmuc' =>$tendanhmuc
		);
		$this->db->insert('ttcn_danhmuctin',$dl);
		return $id=$this->db->insert_id();
	}

	public function loadDanhsach(){
		$this->db->select('*');
		$dl = $this->db->get('ttcn_danhmuctin');
		$dl = $dl->result_array();
		return $dl;
	}

	public function deleteDanhMuc($iddm){
		$this->db->where('iddm',$iddm);
        return $this->db->delete('ttcn_danhmuctin');
	}
	public function updateDanhMuc($iddm,$tendanhmuc){
        $dlupdate = array(
            'iddm' => $iddm,
            'tendanhmuc' => $tendanhmuc,
        );
        $this->db->where('iddm',$iddm);
        return $this->db->update('ttcn_danhmuctin', $dlupdate);
    }
    // model cho tin tức
    public function insertTin($tieude,$iddm,$noidungtin,$anhtin,$trichdan){
    	$dulie = array(
    		'tieude' => $tieude,
    		'iddm' => $iddm,
    		'noidungtin' => $noidungtin,
    		'anhtin' => $anhtin,
    		'trichdan' => $trichdan
    	 );
    	$this->db->insert('ttcn_tintuc',$dulie);
    	return $this->db->insert_id();
    }

    public function loadDanhSachTin(){
    	$this->db->select('*');
        $this->db->from('ttcn_tintuc');
        $this->db->join('ttcn_danhmuctin', 'ttcn_tintuc.iddm = ttcn_danhmuctin.iddm');
    	$dl = $this->db->get();
    	$dl = $dl->result_array();
    	return $dl;
    }

    public function getTinById($idtt){
        $this->db->select('*');
        $this->db->where('idtt',$idtt);
        $ketqua = $this->db->get('ttcn_tintuc');
        $ketqua = $ketqua->result_array();
        return $ketqua;
    }
    public function getTendanhmucByIdTin($idtt){
        $this->db->select('*');

        $this->db->from('ttcn_danhmuctin');

        $this->db->join('ttcn_tintuc','ttcn_tintuc.iddm = ttcn_danhmuctin.iddm','left');

        $this->db->where('ttcn_tintuc.idtt',$idtt);
        $ketqua = $this->db->get();
        $ketqua = $ketqua->result_array();
        $ten = $ketqua[0]['tendanhmuc'];
        return $ten;
    }
    public function updateTinById($idtt,$tieude,$iddm,$noidungtin,$anhtin,$trichdan){
        $dulieusua = array(
            'idtt' => $idtt,
            'tieude' => $tieude,
            'iddm' => $iddm,
            'noidungtin' => $noidungtin,
            'anhtin' => $anhtin,
            'trichdan' => $trichdan
        );
        $this->db->where('idtt',$idtt);
        $this->db->update('ttcn_tintuc', $dulieusua);
    }
    public function deleteTin($idtt){
        $this->db->where('idtt',$idtt);
        return $this->db->delete('ttcn_tintuc');
    }
}