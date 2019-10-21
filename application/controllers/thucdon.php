<?php if (! defined('BASEPATH')) exit('No direct access allowed');
class thucdon extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function thucdondoan(){
		$this->load->model('thucdon_model');
		$res = $this->thucdon_model->getMoan();
		$res = array("mangketqua"=>$res);
		//truyền dữ liệu cho view
		$this->load->view('view_ql/qlThucdonda_view',$res);
	}

	public function thucdondouong(){
		$this->load->model('thucdon_model');
		$res = $this->thucdon_model->getDouong();
		$res = array("mangketqua"=>$res);
		//truyền dữ liệu cho view
		$this->load->view('view_ql/qlThucdondu_view',$res);
	}

	public function thucdoncombo(){
		$this->load->model('thucdon_model');
		$res = $this->thucdon_model->getCombo();
		$res = array("mangketqua"=>$res);
		//truyền dữ liệu cho view
		$this->load->view('view_ql/qlThucdoncb_view',$res);
	}

	public function themthucdon(){
		$this->load->view('view_ql/themThucdon_view');
	}

	public function thucdon_add(){
		$target_dir = "fileupload/";
		$target_file = $target_dir . basename($_FILES["anh"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["anh"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		/*if (file_exists($target_file)) {
			echo "File đã tồn tại";
			$uploadOk = 0;
		}*/
		// Check file size
		if ($_FILES["anh"]["size"] > 5000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			echo "Chỉ chấp nhận file ảnh";
		$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Lỗi, file chưa được upload";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
				//echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
			} else {
				//echo "Sorry, there was an error uploading your file.";
			}
		}

		$anh = base_url()."fileupload/".basename($_FILES["anh"]["name"]);
		$tieude = $this->input->post('tieude');
		$mota = $this->input->post('mota');
		$gia = $this->input->post('gia');
		$loai = $this->input->post('loai');

		$this->load->model('thucdon_model');
		$trangthai = $this->thucdon_model->insertTD($anh,$tieude,$mota,$gia,$loai);
		if($trangthai){
			$this->load->view('thongbao/thongbaoaddtd_view');
		}
		else{
			echo "thất bại";
		}
	}

	public function thucdonda_updata(){
		//lấy dữ liệu từ view
		$idma = $this->input->post('idma');
		$tieude = $this->input->post('tieude');
		$mota = $this->input->post('mota');
		$gia = $this->input->post('gia');
		$loai = $this->input->post('loai');
		//xử lý ảnh avartar
		$target_dir = "fileupload/";
		$target_file = $target_dir . basename($_FILES["anh"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		/*if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
			if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//echo "File is not an image.";
				$uploadOk = 0;
			}
		}*/
		// Check if file already exists
		/*if (file_exists($target_file)) {
			echo "File đã tồn tại";
			$uploadOk = 0;
		}*/
		// Check file size
		if ($_FILES["anh"]["size"] > 5000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			//echo "Chỉ chấp nhận file ảnh";
		$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			//echo "Lỗi, file chưa được upload";
			// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
				//echo "The file ". basename( $_FILES["anh"]["name"]). " has been uploaded.";
			} else {
				//echo "Sorry, there was an error uploading your file.";
			}
		}
		$anh = basename($_FILES["anh"]["name"]);

		//kiểm tra xem có sự thay đổi ảnh hay không
		if($anh){
			$anh = base_url()."fileupload/".basename($_FILES["anh"]["name"]);
		}
		else{
			$anh = $this->input->post('anh2');
			//echo $anhavatar;
		}
		/*echo $idma,$anh,$tieude,$mota,$gia;
		die();*/
		//gọi model
		$this->load->model('thucdon_model');
		if($this->thucdon_model->upDataTDDA( $idma,$anh,$tieude,$mota,$gia)){
			//echo "thanhcog";
			if($loai == 'Đồ ăn'){
				$this->load->view('thongbao/editda_view');
			}

			else if($loai =='Combo'){
				$this->load->view('thongbao/editcb_view');
			}

			else {
				$this->load->view('thongbao/editdu_view');
			}
		}
		else{
			echo "không thành công";
		}
	}

	public function thucdon_delete($loai,$idma){
		/*var_dump($loai);
		var_dump($idma);
		die();*/
		$this->load->model('thucdon_model');
		if($this->thucdon_model->deleteTD($idma)){
			if($loai == '%C4%90%E1%BB%93%20%C4%83n'){
				$this->load->view('thongbao/editda_view');
			}

			else if($loai =='Combo'){
				$this->load->view('thongbao/editcb_view');
			}

			else {
				$this->load->view('thongbao/editdu_view');
			}
		}
		else{
			echo "không thành công";
		}
	}
}