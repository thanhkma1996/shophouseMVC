<h1>Giới Thiệu</h1>
        <div class="wrapper-blog"> 
        <?php 
          foreach($arr as $rows)
          {
         ?>
          <!-- list introduce -->
          <!-- <div class="row"> -->
            <div class="col-md-6 article" style="overflow: hidden; height: 500px;"> <a href="gioi-thieu/chi-tiet/<?php echo remove_unicode($rows->pk_introduce_id); ?>" class="image"> <img src="public/upload/introduce/<?php echo $rows->c_img; ?>" alt="gioi-thieu/chi-tiet/<?php echo remove_unicode($rows->c_name); ?>" title="<?php echo $rows->c_name; ?>" class="img-responsive"> </a>
              <h3><a href="gioi-thieu/chi-tiet/<?php echo remove_unicode($rows->pk_introduce_id); ?>"><?php echo $rows->c_name; ?></a></h3>
              <p class="desc"><?php echo $rows->c_description; ?></p>
            </div>
          <!-- end list introduce --> 
          <?php } ?>
          <div style="clear: both;"></div>
          <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li><a href="#">Trang</a></li>
            <?php 
              for($i = 1; $i <= $num_page; $i++)
              {
             ?>
            <li><a href="gioi-thieu/trang/<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
          </ul>
        </div>
        