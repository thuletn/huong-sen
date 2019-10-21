<?php if (! defined('BASEPATH')) exit('No direct access allowed');

class datban extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('ban_model');
	}
/*	public function index(){
		$this->load->view('view_tc/Datban_view');
	}*/
	public function datban_add(){
		$tenkh = $this->input->post('tenkh');
		$email = $this->input->post('email');
		$sdt = $this->input->post('sdt');
		$ngaydatban = $this->input->post('ngaydatban');
		$giodatban = $this->input->post('giodatban');
		$giodatban = (string)$ngaydatban." ".(string)$giodatban;
		/*var_dump($giodatban);
		die();*/
		$songuoi = $this->input->post('songuoi');

		$this->load->model('Datban_model');
		if($this->Datban_model->insertDatban($tenkh,$email,$sdt,$giodatban,$songuoi)){
			echo "thêm thành công";
		}
		else{
			echo "thất bại";
		}
	}

	public function datban_list(){
		$this->load->model('Datban_model');
		$ketqua = $this->Datban_model->loadDatban();
		$tenban = $this->ban_model->getAllBanTrong();
		$ketqua = array(
			'dl'=> $ketqua,
			'tenban'=> $tenban
		);
		   // echo "<pre>";
		   // var_dump($ketqua);
		   // die();
		$this->load->view('view_ql/qlDatban_view',$ketqua);
	}


	public function datban_duyeta($iddb){
		$trangthai = '1';
		$trangthaiban = '1';
		$idban = $this->input->post('idban');
		// echo $idban;
		// die();
		$this->load->model('Datban_model');
		$this->load->model('ban_model');
		// echo $this->Datban_model->duyetDatbana($iddb,$trangthai,$idban);
		// die();
		if($this->Datban_model->duyetDatbana($iddb,$trangthai,$idban)){
			$this->load->view('thongbao/thongbaodatban_view');
		}
		else {
			echo "thất bạn";
		}
		$this->ban_model->duyetTTB1($idban,$trangthaiban);
	}

	public function datban_duyetb($iddb,$idban){
		$trangthai = '2';
		$trangthaiban = '2';
		// echo $idban;
		// die();
		$this->load->model('Datban_model');
		$this->load->model('ban_model');
		if($this->Datban_model->duyetDatbana($iddb,$trangthai,$idban)){
			$this->load->view('thongbao/thongbaodatban_view');
		}
		else {
			echo "thất bạn";
		}
		$this->ban_model->duyetTTB1($idban,$trangthaiban);
	}

	public function datban_huydat($iddb){
		$trangthai = '3';
		/*echo $sdt;
		die();*/
		$this->load->model('Datban_model');
		if($this->Datban_model->duyetDatbanHuy($iddb,$trangthai)){
			$this->load->view('thongbao/thongbaodatban_view');
		}
		else {
			echo "thất bạn";
		}
	}

	public function datban_delete($iddb){
		$this->load->model('Datban_model');
		if($this->Datban_model->deleteDatban($iddb)){
			$this->load->view('thongbao/thongbaodatban_view');
		}
		else{
			echo "không thành công";
		}
	}
}