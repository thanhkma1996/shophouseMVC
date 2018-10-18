<?php 
	class controller_add_edit_rules extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			switch($act){
				case "edit":
					$form_action = "admin.php?controller=add_edit_rules&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from tbl_rules where pk_rules_id=$id");
					include "view/backend/view_add_edit_rules.php";
				break;
				case "do_edit":
					$c_name = $_POST["c_name"];
					$c_hotrules = isset($_POST["c_hotrules"])?1:0;
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_rules set c_name='$c_name',c_hotrules=$c_hotrules,c_description='$c_description',c_content='$c_content' where pk_rules_id=$id");
					
				case "add":
					$form_action = "admin.php?controller=add_edit_rules&act=do_add";
					include "view/backend/view_add_edit_rules.php";
				break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_hotrules = isset($_POST["c_hotrules"])?1:0;
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$this->model->execute("insert into tbl_rules(c_name,c_hotrules,c_description,c_content) values('$c_name',$c_hotrules,'$c_description','$c_content')");
					header("location:admin.php?controller=rules");
				break;
			}
		}
	}
	new controller_add_edit_rules();
 ?>