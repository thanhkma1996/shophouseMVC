<?php
	session_start();

	require "config.php";

	require "application/model.php";
	require "application/controller.php";
	//load file remove_unicode
	include "function/remove_unicode.php";

		$controller = isset($_GET["controller"])?$_GET["controller"]:"home";
		//gan thanh duong dan vat ly
		$controller = ($controller!="")?"controller_$controller.php":"";

		//load layout admin
		require "view/frontend/view_layout.php";


?>
