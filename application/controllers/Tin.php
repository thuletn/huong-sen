<?php if (! defined('BASEPATH')) exit('No direct access allowed');

class Tin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Tin_model');
	}

	public function index(){
	}

	public function danhmuctin(){
		$ketqua = $this->Tin_model->loadDanhsach();
		$ketqua = array('dl'=> $ketqua);
		$this->load->view('view_ql/Danhmuctin_view',$ketqua);
	}
	public function themdanhmuc(){
		$tendanhmuc = $this->input->post('tendanhmuc');
		if($this->Tin_model->insertDanhMuc($tendanhmuc)){
			echo "thanhcong";
		}
		else {
			echo "lỗi";
		}
	}
	public function danhmuctin_add(){
		$tendanhmuc = $this->input->post('tendanhmuc');
		$id=$this->Tin_model->insertDanhMuc($tendanhmuc);
		/*echo "<pre>";
		var_dump($id);*/
		echo json_encode($id);
	}
	public function danhmuctin_delete($iddm){
		$this->Tin_model->deleteDanhMuc($iddm);
	}

	public function danhmuctin_edit(){
		//echo "hello";
		$iddm = $this->input->post('iddm');
		$tendanhmuc = $this->input->post("tendanhmuc");
		$this->Tin_model->updateDanhMuc($iddm,$tendanhmuc);
	}

	//quản lý tin
	public function quanlytin(){
		$dl1 =$this->Tin_model->loadDanhsach();
		$dl2 = $this->Tin_model->loadDanhSachTin();

		$dulieu = array(
			'dulieudanhmuc' => $dl1,
			'dulieutin'=> $dl2

	);
		$this->load->view('view_ql/Tin_view',$dulieu);
	}
	public function tin_add(){
		//xử lý ảnh tin
		$target_dir = "fileupload/";
		$target_file = $target_dir . basename($_FILES["anhtin"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["anhtin"]["tmp_name"]);
			if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				//echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		/*if (file_exists($target_file)) {
			echo "File đã tồn tại";
			$uploadOk = 0;
		}*/
		// Check file size
		if ($_FILES["anhtin"]["size"] > 5000000) {
			//echo "Sorry, your file is too large.";
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
			if (move_uploaded_file($_FILES["anhtin"]["tmp_name"], $target_file)) {
				//echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
			} else {
				//echo "Sorry, there was an error uploading your file.";
			}
		}

		$anhtin = base_url()."fileupload/".basename($_FILES["anhtin"]["name"]);

		// xử lý nội dung còn lại
		$tieude = $this->input->post('tieude');
		$iddm = $this->input->post('iddm');
		$noidungtin = $this->input->post('noidungtin');
		$trichdan = $this->input->post('trichdan');
		if($this->Tin_model->insertTin($tieude,$iddm,$noidungtin,$anhtin,$trichdan)){
			$this->load->view('thongbao/thongbaoaddtin_view');
		}
		else{
			var_dump("thatbai");
		}
	}
	//sua tin
	public function tin_edit($idtt){
		$dl1 =$this->Tin_model->loadDanhsach();
		$ketqua = $this->Tin_model->getTinById($idtt);
		$tendanhmuc = $this->Tin_model->getTendanhmucByIdTin($idtt);
		$dulieu = array(
			'dulieusua' => $ketqua,
			'dulieudanhmuc' => $dl1,
			'tendanhmuc'=> $tendanhmuc
		);
		$this->load->view('view_ql/TinEdit_view',$dulieu);
	}

	public function tin_updata(){
		$anhtincu = $this->input->post('anhtincu');
		$anhtin = $_FILES['anhtin']['name'];
		if(empty($anhtin)){
			$anhtin = $anhtincu;
				//echo $anhtin;
		}
		else{
			$target_dir = "fileupload/";
			$target_file = $target_dir . basename($_FILES["anhtin"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
				$check = getimagesize($_FILES["anhtin"]["tmp_name"]);
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
				if ($_FILES["anhtin"]["size"] > 5000000) {
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
				if (move_uploaded_file($_FILES["anhtin"]["tmp_name"], $target_file)) {
						//echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
				} else {
						//echo "Sorry, there was an error uploading your file.";
				}
			}

		$anhtin = base_url()."fileupload/".basename($_FILES["anhtin"]["name"]);
		}
		$idtt = $this->input->post('idtt');
		$tieude = $this->input->post('tieude');
		$iddm = $this->input->post('iddm');
		if($iddm==0){
			$iddm = $this->input->post('iddmcu');
		}
		$noidungtin = $this->input->post('noidungtin');
		$trichdan = $this->input->post('trichdan');
		$this->Tin_model->updateTinById($idtt,$tieude,$iddm,$noidungtin,$anhtin,$trichdan);
		$this->load->view('thongbao/thongbaoaddtin_view');
	}
	/*public function tin_delete($idtt){
		if($this->Tin_model->deleteTin($idtt));
			var_dump("thanhcong");
		}
		else{
			var_dump("thatbai");
		}
	}*/
	public function tin_delete($idtt){
		if($this->Tin_model->deleteTin($idtt)){
			$this->load->view('thongbao/thongbaoaddtin_view');
		}

		else{
			var_dump("thatbai");
		}
	}
}