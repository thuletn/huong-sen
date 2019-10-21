<?php if (! defined('BASEPATH')) exit('No direct access allowed');
class nhanvien_model extends CI_Model {
	public $var;
	public function __construct(){
        parent::__construct();
    }
    public function insertNV($ten,$tuoi,$sdt,$chucvu,$anhavatar,$fb){
    	// xử lý thông tin nhận về và upload vào mysql
    	$nhanvien = array(
    		'Ten' => $ten,
    		'Tuoi' => $tuoi,
    		'Sdt' =>$sdt,
    		'idchucvu' =>$chucvu,
    		'Anh' => $anhavatar,
    		'Fb' =>$fb);
    	$this->db->insert('ttcn_nhanvien',$nhanvien);
    	return $this->db->insert_id();
    }
    //lấy dữ liệu
    public function getAllDataNV($sl){
        //SELECT * FROM `ttcn_nhanvien`,`ttcn_chucvu` WHERE ttcn_nhanvien.idchucvu = ttcn_chucvu.idchucvu
        $this->db->select('*');
        $this->db->from('ttcn_nhanvien');
        $this->db->join('ttcn_chucvu', 'ttcn_nhanvien.idchucvu = ttcn_chucvu.idchucvu');
        $this->db->order_by('idnv','desc');
        $this->db->limit($sl, 0);
        $nhanvien = $this->db->get();
        return $nhanvien->result_array();
    }
    //lấy dữ liệu 1 nhân viên
    public function getNVById($idnv){
        $this->db->select('*');
        $this->db->where('idnv',$idnv);
        $nv = $this->db->get('ttcn_nhanvien');
        $nv = $nv->result_array();
        return $nv;
    }
    //tính số trang nhân viên
    public function soTrangNV($sl){
        $this->db->select('*');
        $nv = $this->db->get('ttcn_nhanvien');
        $nv = $nv->result_array();
        $slnv = count($nv);
        /*var_dump($slnv);
        die();*/
        $sotrang = ceil($slnv/$sl);
        return $sotrang;
    }
    //load tin theo trang
    public function getDataPage($trangthumay,$sl){
        $vitri=($trangthumay-1)*$sl;
        $this->db->select('*');
        $this->db->from('ttcn_nhanvien');
        $this->db->join('ttcn_chucvu', 'ttcn_nhanvien.idchucvu = ttcn_chucvu.idchucvu');
        $this->db->order_by('idnv','desc');
        $this->db->limit($sl, $vitri);
        $nhanvien = $this->db->get();
        return $nhanvien->result_array();
    }
    public function getDataNV($key){
        $this->db->select('*');
        $this->db->where('Idnv',$key);
        $nv = $this->db->get('ttcn_nhanvien');
        $nv = $nv ->result_array();
        return $nv;
    }

    public function upDataNV($idnv,$ten,$tuoi,$sdt,$idchucvu,$anhavatar,$fb){
        $nhanvien1 = array(
            'Idnv' => $idnv,
            'Ten' => $ten,
            'Tuoi' => $tuoi,
            'Sdt' =>$sdt,
            'idchucvu' =>$idchucvu,
            'Anh' => $anhavatar,
            'Fb' =>$fb
        );
        $this->db->where('Idnv',$idnv);
        return $this->db->update('ttcn_nhanvien',$nhanvien1);
    }

    public function deleteDataNV($idnv){
        $this->db->where('idnv',$idnv);
        return $this->db->delete('ttcn_nhanvien');
    }
    //lay ten chuc vu theo ma
    public function getTenCVByIdTin($idnv){
        $this->db->select('*');

        $this->db->from('ttcn_chucvu');

        $this->db->join('ttcn_nhanvien','ttcn_nhanvien.idchucvu = ttcn_chucvu.idchucvu','left');

        $this->db->where('ttcn_nhanvien.idnv',$idnv);
        $ketqua = $this->db->get();
        $ketqua = $ketqua->result_array();
        $ten = $ketqua[0]['tenchucvu'];
        return $ten;
    }
    public function getChuVu(){
        $this->db->select('*');

        $this->db->from('ttcn_chuvu');

        $this->db->join('ttcn_nhanvien','ttcn_nhanvien.idchucvu = ttcn_chucvu.idchucvu','left');
        $this->db->where('ttcn_nhanvien.Idnv',1);

        $ketqua = $this->db->get();
        $ketqua = $ketqua->result_array();
        $chucvu = $ketqua[0]['chucvu'];
       /* var_dump($chucvu);
        die();*/
        return $chucvu;
    }
}