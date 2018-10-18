<?php 
	class controller_register extends controller{
		public function __construct(){
			parent::__construct();
			//-------------
			global $conn;
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$hovaten = mysqli_escape_string($conn,$_POST["hovaten"]);
				$email = mysqli_escape_string($conn,$_POST["email"]);
				$diachi = mysqli_escape_string($conn,$_POST["diachi"]);
				$dienthoai = mysqli_escape_string($conn,$_POST["dienthoai"]);
				$password = md5($_POST["password"]);
				//kiem tra, neu user chua ton tai thi moi cho dang ky
				$check = $this->model->num_rows("select email from tbl_customer where email='$email'");
				if($check==0){
					//them moi ban ghi
					$this->model->execute("insert into tbl_customer(hovaten,email,diachi,dienthoai,password) values('$hovaten','$email','$diachi','$dienthoai','$password')");
					//header("location:index.php?controller=login&act=register_success");
					
					
				}
				echo "<script language='javascript'>location.href='dang-nhap';</script>";
			}
			//-------------
			include "view/frontend/view_register.php";
		}
	}
	new controller_register();
 ?>