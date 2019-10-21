<?php if (! defined('BASEPATH')) exit('No direct access allowed');
class trangchu extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('thucdon_model');
		$this->load->model('cauhinh_model');
	}
	public function index(){
		$res1 = $this->thucdon_model->getMoan();
		$res2 = $this->thucdon_model->getDouong();
		$res3 = $this->thucdon_model->getCombo();
		$res4 = $this->cauhinh_model->loadLienhe();

		$noidung = $this->cauhinh_model->getThongTin();
    	$noidung = json_decode($noidung,true);

    	$logo = $this->cauhinh_model->getLogo();
    	$logo = json_decode($logo,true);
    	// echo "<pre>";
    	// var_dump($noidung);
    	// die();
		$res5 = $this->cauhinh_model->loadGt();
		$res = array(
			"monan"=>$res1,
			"douong"=>$res2,
			"combo"=>$res3,
			"lienhe" =>$res4,
			"dulieu"=>$noidung,
			"anhlogo"=>$logo,
			"gt"=>$res5
		);
		$this->load->view('view_tc/index_view',$res);
	}

	public function loadtrangchu(){
		$noidung = $this->cauhinh_model->getThongTin();
    	$noidung = json_decode($noidung,true);
    	$res1 = $this->thucdon_model->getMoan();
    	$res2 = $this->thucdon_model->getDouong();
		$res3 = $this->thucdon_model->getCombo();
    	$res = array(
			"monan"=>$res1,
			"douong"=>$res2,
			"combo"=>$res3,
			'dulieu'=>$noidung
			/*"gt"=>$res5*/
		);
		$this->load->view('view_tc/trangchu_view',$res);
	}
	public function gioithieu(){
		$res4 = $this->cauhinh_model->loadLienhe();
		$res5 = $this->cauhinh_model->loadGt();
		$res = array(
			"lienhe" =>$res4,
			"gt"=>$res5
		);
		$this->load->view('view_tc/gioithieu_view',$res);
	}

}