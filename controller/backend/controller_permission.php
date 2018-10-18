<?php
	include "controller_checkpermission.php";
	//check permission
	if(check_permission("user") == false)
		header("location:trang-chu");

	$pk_user_id = isset($_GET["id"]) ? $_GET["id"]:0;
	//-------
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$menu = isset($_POST["menu"]) ? $_POST["menu"] : array();
		//xoa cac ban ghi da phan quyen truoc do cua user co id la $pk_user_id
		execute("delete from tbl_permission where fk_user_id=$pk_user_id");
		foreach($menu as $pk_menu_admin_id){
			//add
			$c_add = isset($_POST["add_$pk_menu_admin_id"]) ? 1:0;
			//edit
			$c_edit = isset($_POST["edit_$pk_menu_admin_id"]) ? 1:0;
			//delete
			$c_delete = isset($_POST["delete_$pk_menu_admin_id"]) ? 1:0;

			execute("insert into tbl_permission(fk_user_id,fk_menu_admin_id,c_add,c_edit,c_delete) values($pk_user_id,$pk_menu_admin_id,$c_add,$c_edit,$c_delete)");
		}
		header("location:trang-chu?controller=user");
	}
	//-------	
	//lay danh sach menu
	$arr = fetch("select * from tbl_menu_admin");
	//load view
	include "view/backend/view_permission.php";
?>