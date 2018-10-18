<?php 
	class controller_add_edit_policy extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_policy&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from tbl_policy where pk_policy_id=$id");
					include "view/backend/view_add_edit_policy.php";
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$c_hotpolicy = isset($_POST["c_hotpolicy"])?1:0;
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_policy set c_name='$c_name',c_hotpolicy=$c_hotpolicy,c_description='$c_description',c_content='$c_content' where pk_policy_id=$id");
					//kiem tra, neu user chon anh thi thuc hien upload anh
				case "add":
					$form_action = "admin.php?controller=add_edit_policy&act=do_add";
					include "view/backend/view_add_edit_policy.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_hotpolicy = isset($_POST["c_hotpolicy"])?1:0;
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$this->model->execute("insert into tbl_policy(c_name,c_hotpolicy,c_description,c_content) values('$c_name',$c_hotpolicy,'$c_description','$c_content')");
					header("location:admin.php?controller=policy");
				break;
			}
		}
	}
	new controller_add_edit_policy();
 ?>