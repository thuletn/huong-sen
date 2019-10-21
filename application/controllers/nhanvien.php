<?php if (! defined('BASEPATH')) exit('No direct access allowed');
class nhanvien extends CI_Controller {
	private $sl;
	public function __construct(){
		parent::__construct();
		$this->sl = 8;
	}
	/*public function test(){
		$this->load->model('nhanvien_model');
		$res = $this->nhanvien_model->getAllDataNV($this->sl);
		echo "<pre>";
		var_dump($res);
	}*/
	public function index(){
		$this->load->model('nhanvien_model');
		$res = $this->nhanvien_model->getAllDataNV($this->sl);
		$sotrang = $this->nhanvien_model->soTrangNV($this->sl);
		// var_dump($res1);
		// die();
		$res = array(
			"mangketqua"=>$res,
			"sotrang"=>$sotrang,
			// "chucvu"=>$res1
			);
		//truyền dữ liệu cho view
		$this->load->view('view_ql/nhanvien_view',$res);
	}
	public function themNhanVien(){
		$this->load->model('chucvu_model');
		$res1 = $this->chucvu_model->getCV();
		$res = array(
			"chucvu"=>$res1
			);
		$this->load->view('view_ql/themNhanVien_view',$res);
	}

	public function suaNhanVien($idnv){
		$this->load->model('chucvu_model');
		$this->load->model('nhanvien_model');
		$tenchucvu = $this->nhanvien_model->getTenCVByIdTin($idnv);
		/*var_dump($tenchucvu);
		die();*/
		$nv1 = $this->nhanvien_model->getNVById($idnv);
		$res1 = $this->chucvu_model->getCV();
		$res = array(
			"nhanvien"=>$nv1,
			"chucvu"=>$res1,
			'tencv' => $tenchucvu
			);
		$this->load->view('view_ql/suaNhanVien_view',$res);
	}
	//phan trang
	public function page($sotrang){
		$this->load->model('nhanvien_model');
        $dl = $this->nhanvien_model->getDataPage($sotrang,$this->sl);
        $sotrang = $this->nhanvien_model->soTrangNV($this->sl);
		$res = array("mangketqua"=>$dl,'sotrang'=>$sotrang);
		//truyền dữ liệu cho view
		$this->load->view('view_ql/nhanvien_view',$res);
    }
	public function nhanvien_add(){
    	//xử lý ảnh avartar
		$target_dir = "fileupload/";
		$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["anhavatar"]["tmp_name"]);
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
		if ($_FILES["anhavatar"]["size"] > 5000000) {
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
			if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
				//echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
			} else {
				//echo "Sorry, there was an error uploading your file.";
			}
		}
	//lấy dữ liệu từ view
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sdt = $this->input->post('sdt');
		$chucvu = $this->input->post('chucvu');
		/*var_dump($chucvu);
		die();*/
		$fb = $this->input->post('fb');
		$anhavatar = base_url()."fileupload/".basename($_FILES["anhavatar"]["name"]);
		//echo "Tên ảnh là: ".$_FILES["anhavatar"]["name"];

		$this->load->model('nhanvien_model');
		$trangthai = $this->nhanvien_model->insertNV($ten,$tuoi,$sdt,$chucvu,$anhavatar,$fb);
		if($trangthai){
			$this->load->view('thongbao/thongbao_view');
		}
		else{
			echo "thất bại";
		}
	}
	// sửa dữ liệu
	/*public function nhanvien_edit($idnv){
		$this->load->model('nhanvien_model');
		$ketqua = $this->nhanvien_model->getDataNV($idnv);
		var_dump($tenchucvu);
		die();
		$ketqua = array(
			'dulieukq' => $ketqua,
		 );
		$this->load->view('view_ql/nhanvienEdit_view',$ketqua);
	}*/
	//updata dữ liệu
	public function nhanvien_updata(){
		//lấy dữ liệu từ view
		$idnv = $this->input->post('idnv');
		$ten = $this->input->post('ten');
		$tuoi = $this->input->post('tuoi');
		$sdt = $this->input->post('sdt');
		//xử lý chức vụ
		$idchucvu = $this->input->post('idchucvu');
		if($idchucvu){
			$idchucvu = $this->input->post('idchucvu');
		}
		else{
			$idchucvu = $this->input->post('idchucvucu');
		}

		$fb = $this->input->post('fb');

		//xử lý ảnh avartar
		$target_dir = "fileupload/";
		$target_file = $target_dir . basename($_FILES["anhavatar"]["name"]);
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
		if ($_FILES["anhavatar"]["size"] > 5000000) {
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
			if (move_uploaded_file($_FILES["anhavatar"]["tmp_name"], $target_file)) {
				//echo "The file ". basename( $_FILES["anhavatar"]["name"]). " has been uploaded.";
			} else {
				//echo "Sorry, there was an error uploading your file.";
			}
		}
		$anhavatar = basename($_FILES["anhavatar"]["name"]);

		//kiểm tra xem có sự thay đổi ảnh hay không
		if($anhavatar){
			$anhavatar = base_url()."fileupload/".basename($_FILES["anhavatar"]["name"]);
		}
		else{
			$anhavatar = $this->input->post('anhavatar2');
			//echo $anhavatar;
		}
		//echo $idnv,$ten,$tuoi,$sdt,$chucvu,$anhavatar,$fb;
		//gọi model
		$this->load->model('nhanvien_model');
		if($this->nhanvien_model->upDataNV($idnv,$ten,$tuoi,$sdt,$idchucvu,$anhavatar,$fb)){
			//echo "thanhcog";
			$this->load->view('thongbao/thongbao_view');
		}
		else{
			echo "không thành công";
		}
	}
	// xóa dữ liệu
	public function nhanvien_delete($idnv){
		$this->load->model('nhanvien_model');
		if($this->nhanvien_model->deleteDataNV($idnv)){
			$this->load->view('thongbao/thongbao_view');
		}
		else{
			echo "không thành công";
		}
	}

	// lấy tên chuc vu
	public function laytenchucvu(){

		$this->load->model('nhanvien_model');
		$chucvu = $this->nhanvien_model->getChuVu();
		var_dump($chucvu);

	}
	// quan ly luong
	public function luong(){
		$this->load->model('nhanvien_model');
		$res = $this->nhanvien_model->getAllDataNV($this->sl);
		$res = array(
			"mangketqua"=>$res
			);
		$this->load->view('view_ql/qlLuong_view',$res);
	}
}