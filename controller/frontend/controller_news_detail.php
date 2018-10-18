<?php
		class controller_news_detail extends controller {
			public function __construct(){
				parent::__construct();
				$id = isset($_GET["id"])&&is_numeric($_GET["id"])?
				$_GET["id"]:0;
				// lấy 1 bản ghi có id truyền vào
				$arr = $this -> model ->fetch_one("select * from tbl_news where pk_news_id = $id");
				include "view/frontend/view_news_detail.php";
			}
		}
	
			new controller_news_detail();
?>