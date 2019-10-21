<?php if (! defined('BASEPATH')) exit('No direct access allowed');

class khachhang extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('khachhang_model');
		$res = $this->khachhang_model->getAllDataKH();
		$res = array("mangketqua"=>$res);
		//truyền dữ liệu cho view
		$this->load->view('view_ql/khachhang_view',$res);
	}

	public function khachhang_add(){
		//lấy dữ liệu từ view
		$tk = $this->input->post('tk');
		$tdd = $this->input->post('tdd');
		$mk = $this->input->post('mk');
		$sdt = $this->input->post('sdt');
		$this->load->model('khachhang_model');
		$trangthai = $this->khachhang_model->insertKh($tk,$tdd,$mk,$sdt);
		if($trangthai){
			header("Location:http://localhost/ttcn/khachhang");
		}
		else{
			echo "thất bại";
		}
	}
	public function khachhang_delete($IDKH){
		$this->load->model('khachhang_model');
		if($this->khachhang_model->deleteDataKH($IDKH)){
			header("Location:http://localhost/ttcn/khachhang");
		}
		else{
			echo "không thành công";
		}
	}

	public function khachhang_updata(){
		//lấy dữ liệu từ view
		$idkh = $this->input->post('idkh');
		$tk = $this->input->post('tk');
		$tdd = $this->input->post('tdd');
		$mk = $this->input->post('mk');
		$sdt = $this->input->post('sdt');
		/*echo $sdt;
		die();*/
		$this->load->model('khachhang_model');
		if($this->khachhang_model->upDataKH($idkh,$tk,$tdd,$mk,$sdt)){
			header("Location:http://localhost/ttcn/khachhang");
		}
		else{
			echo "không thành công";
		}
	}
}