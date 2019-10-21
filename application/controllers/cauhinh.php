<?php if (! defined('BASEPATH')) exit('No direct access allowed');
class cauhinh extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('cauhinh_model');
	}

	// public function thongtin(){
	// 	//lay du lieu tu csdl
	// 	$nd = $this->cauhinh_model->getThongTin();

	// 	// bien json thanh mang
	// 	$nd = json_decode($nd,true);
	// 	$nd = array('noidung' => $nd );
	// 	/*echo "<pre>";
	// 	var_dump($nd);
	// 	echo "<pre>";*/
	// 	$this->load->view('view_ql/qlLienHe_view',$nd);
	// }

	public function thongtin_update(){
		$dulieu = $this->cauhinh_model->getThongTin();
        $noidung = json_decode($dulieu,true);
        if($noidung = null){
            $noidung = array();
        }
        $sdt = $this->input->post('sdt');
        $diachi = $this->input->post('diachi');
        $email = $this->input->post('email');
        $fb = $this->input->post('fb');
        $twitter = $this->input->post('twitter');
        $ggplus = $this->input->post('ggplus');
        $instagram = $this->input->post('instagram');
	    $dulieu = array(
            'sdt' => $sdt,
            'diachi' => $diachi,
            'email' => $email,
            'fb' => $fb,
            'twitter' => $twitter,
            'ggplus' => $ggplus,
            'instagram' => $instagram
        );
        array_push($dulieu,$noidung);
        $dulieu = json_encode($dulieu);
        if($this->cauhinh_model->upDataThongTin($dulieu)){
			$this->load->view('thongbao/thongbaolh_view');
		}
		else{
			echo "không thành công";
		}
    }

    public function thongtin(){
    	$noidung = $this->cauhinh_model->getThongTin();
    	$noidung = json_decode($noidung,true);
    	$noidung = array(
    		'dulieu'=>$noidung);
    	  /*echo "<pre>";
    	  var_dump($noidung);
    	  die();*/
    	$this->load->view('view_ql/qlLienHe_view',$noidung);
    }
	public function gioithieu(){
		$res = $this->cauhinh_model->loadGt();
		$res = array(
			"gt" =>$res
		);
		$this->load->view('view_ql/qlGioiThieu_view',$res);
	}
	public function capnhat(){
		$noidung = $this->cauhinh_model->getSlider();
    	$noidung = json_decode($noidung,true);
    	// echo "<pre>";
    	// var_dump($noidung);
    	// die();
    	$logo = $this->cauhinh_model->getLogo();
    	$logo = json_decode($logo,true);
    	/*echo "<pre>";
    	var_dump($logo);
    	die();*/
    	$noidung = array(
    		'dulieu'=>$noidung,
    		'anhlogo'=>$logo
    	);
    	
        $this->load->view('view_ql/qlAnh_view',$noidung);
    }
    public function slider_update(){
    	$dulieu = $this->cauhinh_model->getSlider();
        $noidung = json_decode($dulieu,true);
        if($noidung = null){
            $noidung = array();
        }
    	$anh1 = $_FILES['slider1']['name'];
    	$fileanh1 = $_FILES['slider1']['tmp_name'];
    	$slider_cu1 = $this->input->post('slider_cu1');
    	// var_dump($silder_cu);
    	// die();
    	if(empty($anh1)){
    		$tenfile1=$slider_cu1;
    	}
    	else{
    		$duongdan1 = "fileupload/".$anh1;
    		move_uploaded_file($fileanh1, $duongdan1);
    		$tenfile1= base_url()."fileupload/".$anh1;
    	}

    	$anh2 = $_FILES['slider2']['name'];
    	$fileanh2 = $_FILES['slider2']['tmp_name'];
    	$slider_cu2 = $this->input->post('slider_cu2');
    	/*var_dump($slider_cu2);
    	 die();*/
    	if(empty($anh2)){
    		$tenfile2=$slider_cu2;
    	}
    	else{
    		$duongdan2 = "fileupload/".$anh;
    		move_uploaded_file($fileanh2, $duongdan2);
    		$tenfile2= base_url()."fileupload/".$anh2;
    	}
    	// var_dump($tenfile1);
        $dulieu = array(
            "slider1" => $tenfile1,
            "slider2" => $tenfile2
        );
        array_push($dulieu,$noidung);
        $dulieu = json_encode($dulieu);
        echo $this->cauhinh_model->upDataSlider($dulieu);
         die();
        if($this->cauhinh_model->upDataSlider($dulieu)){
			$this->load->view('thongbao/thongbaocapnhat_view');
		}
		else{
			echo "không thành công";
		}
    }

    public function logo_update(){
    	$dulieu = $this->cauhinh_model->getLogo();
        $noidung = json_decode($dulieu,true);
        if($noidung = null){
            $noidung = array();
        }
    	$anh = $_FILES['logo']['name'];
    	$fileanh = $_FILES['logo']['tmp_name'];
    	$logocu = $this->input->post('logo_cu');
    	if(empty($anh)){
    		$tenfile=$logocu;
    	}
    	else{
    		$duongdan = "fileupload/".$anh;
    		move_uploaded_file($fileanh, $duongdan);
    		$tenfile= base_url()."fileupload/".$anh;
    	}
    	/*var_dump($tenfile);
    	die();*/

    	$dulieu = array(
            "logo" => $tenfile
        );
        array_push($dulieu,$noidung);
        $dulieu = json_encode($dulieu);
        // echo $this->cauhinh_model->upDataLogo($dulieu);
        if($this->cauhinh_model->upDataLogo($dulieu)){
			$this->load->view('thongbao/thongbaocapnhat_view');
		}
		else{
			echo "không thành công";
		}
    }

	public function gioithieu_updata(){
		$idgt = $this->input->post('idgt');
		$trichdangt = $this->input->post('trichdangt');
		$noidung = $this->input->post('noidung');

		if($this->cauhinh_model->upDataGt($idgt,$trichdangt,$noidung)){
			$this->load->view('thongbao/thongbaosuagt_view');
		}
		else{
			echo "không thành công";
		}
	}
}