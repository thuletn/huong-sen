<?php if (! defined('BASEPATH')) exit('No direct access allowed');
class ban extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('ban_model');
		$res = $this->ban_model->getAllBan();
		$res = array("mangketqua"=>$res);
		//truyền dữ liệu cho view
		$this->load->view('view_ql/qlBan_view',$res);
	}

	public function ban_add(){
		//lấy dữ liệu từ view
		$tenban = $this->input->post('tenban');
		$soghe = $this->input->post('soghe');
		$trangthaiban = 0;
		$this->load->model('ban_model');
		if($this->ban_model->insertBan($tenban,$soghe,$trangthaiban)){
			$this->load->view('thongbao/thongbaoban_view');
		}
		else{
			echo "thất bại";
		}
	}

	public function ban_updata(){
		//lấy dữ liệu từ view
		$idban = $this->input->post('idban');
		$tenban = $this->input->post('tenban');
		$soghe = $this->input->post('soghe');
		$trangthaiban = $this->input->post('trangthaiban');
		/*echo $sdt;
		die();*/
		$this->load->model('ban_model');
		if($this->ban_model->upDataBan($idban,$tenban,$soghe,$trangthaiban)){
			$this->load->view('thongbao/thongbaoban_view');
		}
		else{
			echo "không thành công";
		}
	}
}