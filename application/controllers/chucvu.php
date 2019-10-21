<?php if (! defined('BASEPATH')) exit('No direct access allowed');
class chucvu extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('chucvu_model');
		$res = $this->chucvu_model->getCV();
		$res = array(
			"chucvu" =>$res
		);
		//truyền dữ liệu cho view
		$this->load->view('view_ql/qlChucVu_view',$res);
	}

	public function chucvu_add(){
		//lấy dữ liệu từ view
		$tenchucvu = $this->input->post('tenchucvu');
		$hesoluong = $this->input->post('hesoluong');
		$this->load->model('chucvu_model');
		$trangthai = $this->chucvu_model->insertCV($tenchucvu,$hesoluong);
		if($trangthai){
			$this->load->view('thongbao/thongbaocv_view');
		}
		else{
			echo "thất bại";
		}
	}

	public function chucvu_delete($idchucvu){
		$this->load->model('chucvu_model');
		if($this->chucvu_model->deleteDataCV($idchucvu)){
			$this->load->view('thongbao/thongbaocv_view');
		}
		else{
			echo "không thành công";
		}
	}

	public function chucvu_updata(){
		//lấy dữ liệu từ view
		$idchucvu = $this->input->post('idchucvu');
		$tenchucvu = $this->input->post('tenchucvu');
		$hesoluong = $this->input->post('hesoluong');
/*		echo $idchucvu;
		die();*/
		$this->load->model('chucvu_model');
		if($this->chucvu_model->upDataCV($idchucvu,$tenchucvu,$hesoluong)){
			$this->load->view('thongbao/thongbaocv_view');
		}
		else{
			echo "không thành công";
		}
	}
}