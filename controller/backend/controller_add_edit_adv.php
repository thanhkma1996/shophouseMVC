<?php 
	class controller_add_edit_adv extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_adv&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from tbl_adv where pk_adv_id=$id");
					include "view/backend/view_add_edit_adv.php";
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$c_position = isset($_POST["c_"])?1:0;
					$c_img = $_POST["c_img"];
					$c_url = $_POST["c_url"];
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_adv set c_name='$c_name',c_img='$c_img',c_url='$c_url',c_position=$c_position where pk_adv_id=$id");
					//kiem tra, neu user chon anh thi thuc hien upload anh
					if($_FILES["c_img"]["name"] != ""){
						//-------------
						//lay anh cu
						$arr_old_img = $this->model->fetch_one("select c_img from tbl_adv where pk_adv_id=$id");
						$old_img = isset($arr_old_img->c_img)?$arr_old_img->c_img:"";
						if($old_img != "")
							unlink("public/upload/adv/$old_img");
						//-------------
						$c_img = time().$_FILES["c_img"]["name"];
						//upload image
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/adv/$c_img");
						//update c_img
						$this->model->execute("update tbl_adv set c_img='$c_img' where pk_adv_id=$id");				
					}
					header("location:admin.php?controller=adv");
				break;
				case "add":
					$form_action = "admin.php?controller=add_edit_adv&act=do_add";
					include "view/backend/view_add_edit_adv.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_position = isset($_POST["c_hotadv"])?1:0;
					$c_url = $_POST["c_url"];
					$c_img = "";
					if($_FILES["c_img"]["name"] != ""){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload image
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "public/upload/adv/$c_img");
					}
					$this->model->execute("insert into tbl_adv(c_name,c_img,c_url,c_position) values('$c_name','$c_img','$c_url','$c_position')");
					header("location:admin.php?controller=adv");
				break;
			}
		}
	}
	new controller_add_edit_adv();
 ?>