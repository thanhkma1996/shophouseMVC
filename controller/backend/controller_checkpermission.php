<?php
	function controller_checkpermission($controller){
		//lay pk_user_id            
	    $arr_user = fetch_one("select pk_user_id from tbl_user where c_username='".$_SESSION["c_username"]."'");
	    $pk_user_id = isset($arr_user["pk_user_id"]) ? $arr_user["pk_user_id"]:0;
	    //lay pk_menu_id
	    $arr_menu = fetch_one("select pk_menu_admin_id from tbl_menu_admin where c_controller_name='$controller'");
	     $pk_menu_id = isset($arr_menu["pk_menu_admin_id"])?$arr_menu["pk_menu_admin_id"]:0;
	    //kiem tra xem user nay co quyen doi voi controller nay khong
	    //$check = fetch_one
	    die("select pk_permission_id from tbl_permission where fk_user_id=$pk_user_id and fk_menu_admin_id=$pk_menu_id");
	    if(isset($check["pk_permission_id"]))
	    	return true;
	    return false;
	}
	function check_add($controller){
		//lay pk_user_id            
	    $arr_user = fetch_one("select pk_user_id from tbl_user where c_username='".$_SESSION["c_username"]."'");
	    $pk_user_id = isset($arr_user["pk_user_id"]) ? $arr_user["pk_user_id"]:0;
	    //lay pk_menu_id
	    $arr_menu = fetch_one("select pk_menu_admin_id from tbl_menu_admin where c_controller_name='$controller'");
	     $pk_menu_id = isset($arr_menu["pk_menu_admin_id"])?$arr_menu["pk_menu_admin_id"]:0;
	    //kiem tra xem user nay co quyen doi voi controller nay khong
	    $check = fetch_one("select pk_permission_id from tbl_permission where fk_user_id=$pk_user_id and fk_menu_admin_id=$pk_menu_id and c_add=1");
	    if(isset($check["pk_permission_id"]))
	    	return true;
	    return false;
	}
	function check_edit($controller){
		//lay pk_user_id            
	    $arr_user = fetch_one("select pk_user_id from tbl_user where c_username='".$_SESSION["c_username"]."'");
	    $pk_user_id = isset($arr_user["pk_user_id"]) ? $arr_user["pk_user_id"]:0;
	    //lay pk_menu_id
	    $arr_menu = fetch_one("select pk_menu_admin_id from tbl_menu_admin where c_controller_name='$controller'");
	     $pk_menu_id = isset($arr_menu["pk_menu_admin_id"])?$arr_menu["pk_menu_admin_id"]:0;
	    //kiem tra xem user nay co quyen doi voi controller nay khong
	    $check = fetch_one("select pk_permission_id from tbl_permission where fk_user_id=$pk_user_id and fk_menu_admin_id=$pk_menu_id and c_edit=1");
	    if(isset($check["pk_permission_id"]))
	    	return true;
	    return false;
	}
	function check_delete($controller){
		//lay pk_user_id            
	    $arr_user = fetch_one("select pk_user_id from tbl_user where c_username='".$_SESSION["c_username"]."'");
	    $pk_user_id = isset($arr_user["pk_user_id"]) ? $arr_user["pk_user_id"]:0;
	    //lay pk_menu_id
	    $arr_menu = fetch_one("select pk_menu_admin_id from tbl_menu_admin where c_controller_name='$controller'");
	     $pk_menu_id = isset($arr_menu["pk_menu_admin_id"])?$arr_menu["pk_menu_admin_id"]:0;
	    //kiem tra xem user nay co quyen doi voi controller nay khong
	    $check = fetch_one("select pk_permission_id from tbl_permission where fk_user_id=$pk_user_id and fk_menu_admin_id=$pk_menu_id and c_delete=1");
	    if(isset($check["pk_permission_id"]))
	    	return true;
	    return false;
	}
?>