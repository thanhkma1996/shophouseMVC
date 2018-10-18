<?php 
	class controller_search extends controller{
		public function __construct(){
			parent::__construct();
			$key = isset($_GET["key"])?$_GET["key"]:"";
			//---------
			//dinh nghia so ban ghi tren 1 trang
			$record_per_page = 15;			
			//tinh tong so ban ghi
			$total = $this->model->num_rows("select * from tbl_product where c_name like '%$key%' or c_description like '%$key%' or c_content like '%$key%'");
			//dinh nghia so trang = tongsobanghi/so-ban-ghi-tren-trang
			//tinh so trang
			$num_page = ceil($total/$record_per_page);
			//xac dinh trang hien tai
			$p = isset($_GET["p"])?($_GET["p"]-1):0;
			//lay tu ban ghi nao
			$from = $p*$record_per_page;
			//thuc hien cau truy van de lay danh sach cac ban ghi
			$arr = $this->model->fetch("select * from tbl_product  where c_name like '%$key%' or c_description like '%$key%' or c_content like '%$key%' order by pk_product_id desc limit $from,$record_per_page");
			//---------
			//load view
			include "view/frontend/view_search.php";
		}
	}
	new controller_search();
 ?>