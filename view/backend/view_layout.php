<!DOCTYPE html>
<html>
<base href="http://techhousestore.byethost7.com">
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
  <script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="active"><a href="quan-li-web?controller=category_product">Danh mục sản phẩm</a></li>
             <li class="active"><a href="quan-li-web?controller=product">Danh sách sản phẩm</a></li>
                <li class="active"><a href="quan-li-web?controller=slide">Slide</a></li>
              <li class="active"><a href="quan-li-web?controller=news">Tin tức</a></li>
               <li class="active"><a href="quan-li-web?controller=introduce">Gioi thiệu</a></li>
             <li class="active"><a href="quan-li-web?controller=order">Đơn hàng</a></li>
               <li class="active"><a href="quan-li-web?controller=adv">quảng cáo</a></li>
             <li class="active"><a href="quan-li-web?controller=ky">Kỉ yếu</a></li>
              <li class="active"><a href="quan-li-web?controller=policy">Chính sách</a></li>
               <li class="active"><a href="quan-li-web?controller=rules">Điều Khoản</a></li>
             <li class="active"><a href="quan-li-web?controller=user">User</a></li>
             <li class="active"><a href="quan-li-web?controller=permission">Phân quyền user</a></li>
             <li class="active"><a href="quan-li-web?controller=logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container" style="margin-top: 180px;">
    	<?php
    		if(file_exists("controller/backend/$controller"))
    			require "controller/backend/$controller";
    	 ?>
    </div>
</body>

</html>
