
			<div class="wrapper-tab-collections" style="margin-top:0px;">
			  <div class="tabs-container">
				<ul class="list-unstyled">
				  <li><a href="#content-taba1" class="head-tabs head-tab1" data-src=".head-tab1">
					<h2>Tìm kiếm</h2>
					</a></li>
				</ul>
			  </div>
			  <div class="tabs-content row">
				<div id="content-taba4" class="content-tab content-tab-proindex"> 
		<?php 			
			foreach($arr as $rows)
			{
		 ?>
				  <!-- box product -->
					<div class="col-xs-6 col-md-3 col-sm-6 ">
					  <div class="product-grid" id="product-1168979">
						<div class="image"> <a href="san-pham/chi-tiet<?php echo remove_unicode($rows["pk_product_id"]); ?>"><img src="public/upload/product/<?php echo $rows["c_img"]; ?>" title="<?php echo $rows["c_name"]; ?>" alt="<?php echo $rows["c_name"]; ?>" class="img-responsive"></a> </div>
						<div class="info">
						  <h3 class="name"><a href="san-pham/chi-tiet<?php echo $rows["pk_product_id"]; ?>"><?php echo $rows["c_name"]; ?></a></h3>
						  <p class="price-box"> <span class="special-price"> <span class="price product-price"> <?php echo number_format($rows["c_price"]); ?> </span> </span> </p>
						  <div class="action-btn">
							<form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
							  <a href="index.php?controller=cart&act=add&id=<?php echo $rows["pk_product_id"]; ?>" class="button">Mua hàng</a>
							</form>
						  </div>
						</div>
					  </div>
					</div>
					<!-- end box product --> 
				<?php } ?>
				<!-- paging -->
                  <div style="clear: both;"></div>
                  <ul class="pagination pull-right" style="margin-top: 0px !important; padding-right: 15px;">
                    <li><a href="#">Trang</a></li>
                 <?php for($i = 1; $i <= $num_page; $i++){ ?>
                    <li><a href="san-pham/trang/<?php echo $i; ?>"><?php echo $i; ?></a></li>
                  <?php } ?>
                  </ul>              
                <!-- end paging -->	 





				</div>
			  </div>
			