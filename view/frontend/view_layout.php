    <!doctype html>
    <!--[if !IE]><!-->
    <html lang="vi">
    <!--<![endif]-->
    <base href="http://techhousestore.byethost7.com">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="content-language" content="vi" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noodp,index,follow" />
    <meta name='revisit-after' content='1 days' />
    <meta name="keywords" content="">
    <title>TechHouse Store</title>
    <meta name="description" content="TechHouse Store">
    <meta property="og:type" content="website">
    <meta property="og:title" content="TechHouse Store">
    <meta property="og:image" content="public/frontend/100/047/633/themes/517833/assets/logo.png">
    <meta property="og:image:secure_url" content="public/frontend/100/047/633/themes/517833/assets/logo.png">
    <meta property="og:url" content="trang-chu">
    <meta property="og:site_name" content="TechHouse Store">
    <link rel="canonical" href="trang-chu">
    <link rel="shortcut icon" href="public/frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361" type="image/x-icon" />
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
    <link href='public/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='public/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='public/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <link href='public/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <script src='public/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='public/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
    <script src='public/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
    <link href='public/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
    <meta property="fb:194566867753934" content="144839162775011"/>
<meta property="fb:admins" content="100005919048690"/>
    </head>
      <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=144839162775011';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <body class="index">
    
           <!--Start of Tawk.to Script-->
                <script type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/59ede8aa4854b82732ff72cc/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
                </script>
<!--End of Tawk.to Script-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1780127515631166";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div id="fb-root"></div>
    <!-- header -->
    <header id="header">
    <!-- top header -->
    <div class="top-header">
      <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> 01689487864</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:soldiersoociu@gmail.com">soldiersoociu@gmail.com</a></span> </div>
        <div class="col-xs-12 col-sm-6 col-md-6 customer"> 
        <?php
            if(isset($_SESSION["customer_email"])&&$_SESSION["customer_email"] != "")
            {
         ?>
         Xin chào <?php echo $_SESSION["customer_email"]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="thoat">Logout</a>
         <?php 
          }else{
          ?>
        <a href="dang-nhap"><i class="fa fa-user"></i> Đăng nhập</a> <a href="dang-ki"><i class="fa fa-user-plus"></i> Đăng ký</a> 
        <?php } ?>
        </div>
      </div>
      </div>
    </div>
    <!-- end top header --> 
    <!-- middle header -->
    <div class="mid-header">
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="trang-chu"> <img src="public/frontend/100/047/633/themes/517833/assets/logo.png" alt="TechHouse Store" title="TechHouse Store" class="img-responsive"> </a> </div>
      <div class="col-xs-12 col-sm-12 col-md-6 header-search"> 
        <script type="text/javascript">
          function search(){
          key = document.getElementById("key").value;
          location.href="trang-chu?controller=search&key="+key;
          return false;
          }
        </script>
        <form method="post" action="">
        <input type="text" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
        <button  type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
        </form>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
        <div class="wrapper-mini-cart"> <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="gio-hang"> <span class="mini-cart-count"> 
        <?php 
          //tinh so luong san pham trong gio hang
          $num_cart = 0;
          if(isset($_SESSION["cart"])){
            foreach($_SESSION["cart"] as $value)
              $num_cart++;
          }
          echo $num_cart;
         ?>
         </span> sản phẩm <i class="fa fa-caret-down"></i></a>
        <div class="content-mini-cart">
          <div class="has-items">
          <ul class="list-unstyled">
          <?php 
              if(isset($_SESSION["cart"]))
              {
                foreach($_SESSION["cart"] as $product)
                {
           ?>
            <li class="clearfix" id="item-1853038">
            <div class="image"> <a href="san-pham/chi-tiet/<?php echo $product["pk_product_id"]; ?>"> <img alt="<?php echo $product["c_name"]; ?>" src="public/upload/product/<?php echo $product["c_img"]; ?>" title="<?php echo $product["c_name"]; ?>" class="img-responsive"> </a> </div>
            <div class="info">
              <h3> <a href="san-pham/chi-tiet/<?php echo remove_unicode($product["pk_product_id"]); ?>"><?php echo $product["c_name"]; ?></a></h3>
              <p><?php echo $product["number"]; ?> x <?php echo number_format($product["c_price"]); ?>₫</p>
            </div>
            <div> <a href="xoa-gio-hang/<?php echo $product["pk_product_id"]; ?>"> <i class="fa fa-times"></i></a> </div>
            </li>
            <?php 
                }
              }
             ?>
          </ul>
          <a href="thanh-toan" class="button">Thanh toán</a> </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    <!-- end middle header --> 
    <!-- bottom header -->
    <div class="bottom-header">
      <div class="container">
      <div class="clearfix">
        <ul class="main-nav hidden-xs hidden-sm list-unstyled">
        <li class="active"><a href="trang-chu">Trang chủ</a></li>
        <li ><a href="gioi-thieu">Giới Thiệu</a></li>
        <li ><a href="tin-tuc">Tin tức</a></li>
        <li ><a href="gio-hang">Giỏ hàng</a></li>
        <li ><a href="ki-yeu">Kỉ Yếu</a></li>
         
         <li ><a href="chinh-sach">chính sách</a></li>
         <li ><a href="dieu-khoan">Điều khoản</a></li>
        </ul>
        <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
        <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
        <li class="active"><a href="trang-chu">Trang chủ</a></li>
        <li ><a href="gioi-thieu">Giới thiệu</a></li>
        <li ><a href="tin-tuc">Tin tức</a></li>
        <li ><a href="dieu-khoan">Điều Khoản</a></li>
        </ul>
      </div>
      </div>
    </div>
    <!-- end bottom header -->
    </header>
    <!-- end header -->
    <div class="content">
      <div class="container">
      <h1 style="display:none;">TechHouse Store</h1>

      <div class="row">
        <div class="col-xs-12 col-md-3"> 
         <!-- category product -->
      <?php include "controller/frontend/controller_category_product.php"; ?>
      <!-- end category product -->
        <!-- end support -->
        <?php include "controller/frontend/controller_support.php"; ?>
        <!-- end support online --> 
        <!-- hot news -->
        <?php include "controller/frontend/controller_hotnews.php"; ?>
        <!-- end hot news -->
        <!-- adv -->

        <a href="tin-tuc"><img src="public/frontend/images/22.jpg"></a>
        <!-- end adv -->

        </div>
        <div class="col-xs-12 col-md-9"> 
        <!-- main -->

        <?php 
          if(file_exists("controller/frontend/$controller"))
            include "controller/frontend/$controller";
         ?>
        <!-- end main --> 
        </div>
      </div>
      <!-- adv -->
      <?php include "controller/frontend/controller_adv.php"; ?>
      <!-- end adv --> 

      </div>
    </div>
    <div class="privacy">
      <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="public/frontend/100/047/633/themes/517833/assets/ico-service-1221b.png?1481775169361" alt="Giao hàng miễn phí" title="Giao hàng miễn phí" class="img-responsive"> </div>
        <div class="info">
          <h3>Giao hàng miễn phí</h3>
          <p>Miễn phí giao hàng trong nội thành Hà Nội</p>
        </div>
        </div>
        <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="public/frontend/100/047/633/themes/517833/assets/ico-service-2221b.png?1481775169361" class="img-responsive" alt="Khuyến mại" title="Khuyến mại"> </div>
        <div class="info">
          <h3>Khuyến mại</h3>
          <p>Khuyến mại sản phẩm nếu đơn hàng trên 1.000.000đ</p>
        </div>
        </div>
        <div class="col-xs-12 col-sm-4">
        <div class="image"> <img src="public/frontend/100/047/633/themes/517833/assets/ico-service-3221b.png?1481775169361" class="img-responsive" alt="Hoàn trả lại tiền" title="Hoàn trả lại tiền"> </div>
        <div class="info">
          <h3>Hoàn trả lại tiền</h3>
          <p>Nếu sản phẩm không đảm bảo chất lượng hoặc sản phẩm không đúng miêu tả</p>
        </div>
        </div>
      </div>
      </div>
    </div>
    <footer id="footer">
      <div class="top-footer">
      <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-3">
          <h3>Về chúng tôi</h3>
          <ul class="list-unstyled">
          <li><a href="trang-chu">Trang chủ</a></li>
          <li><a href="gioi-thieu">Giới thiệu</a></li>
          <li><a href="tin-tuc">Tin tức</a></li>
          <li><a href="chinh-sach">Chính sách</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Liên kết</h3>
          <ul class="list-unstyled">
          <li><a href="https://www.facebook.com/profile.php?id=100005919048690">Facebook</a></li>
          <li><a href="@">Zalo</a></li>
          <li><a href="">Google</a></li>
          <li><a href="r">Nhóm hỗ trợ</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Chính sách</h3>
          <ul class="list-unstyled">
          <li><a href="chinh-sach">Chính sách thanh toán</a></li>
          <li><a href="chinh-sach">Chính sách vận chuyển</a></li>
          <li><a href="chinh-sach/trang/2">Chính sách đổi trả</a></li>
          <li><a href="chinh-sach/trang/1">Chính sách bảo hành</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-3">
          <h3>Điều khoản</h3>
          <ul class="list-unstyled">
          <li><a href="dieu-khoan">Điều khoản sử dụng</a></li>
          <li><a href="dieu-khoan">Điều khoản giao dịch</a></li>
          <li><a href="dieu-khoan">Dịch vụ tiện ích</a></li>
          <li><a href="dieu-khoan">Quyền sở hữu trí tuệ</a></li>
          </ul>
        </div>
        </div>
        <div class="payments-method"> <img src="public/frontend/100/047/633/themes/517833/assets/payments-method221b.png?1481775169361" alt="Phương thức thanh toán" title="Phương thức thanh toán"> </div>
      </div>
      </div>
      <div class="bottom-footer">
      <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-5"> © Bản quyền thuộc về THANHKMA Team</div>
        <div class="col-xs-12 col-sm-7">
          <ul class="list-unstyled">
          <li><a href="trang-chu">Trang chủ</a></li>
          <li><a href="gioi-thieu">Giới thiệu</a></li>
          <li><a href="tin-tuc">Tin tức</a></li>
          <li><a href="chinh-sach">Chính sách</a></li>
          </ul>
        </div>
        </div>
      </div>
      </div>
    </footer>
    <script src='public/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
    <script src='public/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
    <script src='public/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
    <script src='public/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
    <script src='public/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
    <div class="ajax-error-modal modal">
      <div class="modal-inner">
      <div class="ajax-error-title">Lỗi</div>
      <div class="ajax-error-message"></div>
      </div>
    </div>
    <div class="ajax-success-modal modal">
      <div class="overlay"></div>
      <div class="content col-xs-12">
      <div class="ajax-left"> <img class="ajax-product-image" alt="&nbsp;" src="#" style="max-width:65px; max-height:100px"/> </div>
      <div class="ajax-right">
        <p class="ajax-product-title"></p>
        <p class="success-message btn-go-to-cart"><span style="color:#789629">&#10004;</span> Đã được thêm vào giỏ hàng.</p>
        <div class="actions">
        <button class="button" onclick="window.location='cart'">Đi tới giỏ hàng</button>
        <button class="button" onclick="window.location='checkout'">Thanh toán</button>
        </div>
      </div>
      <a href="javascript:void(0)" class="close-modal"><i class="fa fa-times"></i></a> </div>
    </div>
    
    </body>
    </html>