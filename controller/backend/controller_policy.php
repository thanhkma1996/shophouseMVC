<?php 
	class controller_policy extends controller{
		public function __construct(){
			parent::__construct();
			//-------------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
					//-------------
					//-------------
					//thuc thi truy van
					$this->model->execute("delete from tbl_policy where pk_policy_id=$id");
					header("location:admin.php?controller=policy");
				break;
			}
			
			//-------------
			//so ban ghi tren trang
			$record_per_page = 20;
			//tinh tong so ban ghi
			$total_record = $this->model->num_rows("select * from tbl_policy");
			//tinh so trang
			$num_page = ceil($total_record/$record_per_page);
			//lay bien p tu url (de xac dinh la den trang thu may)
			$p = isset($_GET["p"])&&$_GET["p"]>0?($_GET["p"]-1):0;
			//xac dinh lay du lieu tu ban ghi nao
			$from = $p*$record_per_page;
			//thuc hien truy van csdl
			$arr = $this->model->fetch("select * from tbl_policy order by pk_policy_id desc limit $from,$record_per_page");
			//load view
			include "view/backend/view_policy.php";
			//-------------
		}
	}
	new controller_policy();
 ?>