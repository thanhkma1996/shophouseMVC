<h1>Những Hoạt Động Tại KMA</h1>
        <div class="wrapper-blog"> 
        <?php 
          foreach($arr as $rows)
          {
         ?>
          <!-- list ky -->
          <!-- <div class="row"> -->
            <div class="col-md-6 article" style="overflow: hidden; height: 500px;"> <a href="ki-yeu/chi-tiet/<?php echo remove_unicode($rows->pk_ky_id); ?>" class="image"> <img src="public/upload/ky/<?php echo $rows->c_img; ?>" alt="ki-yeu/chi-tiet/<?php echo remove_unicode($rows->c_name); ?>" title="<?php echo $rows->c_name; ?>" class="img-responsive"> </a>
              <h3><a href="ki-yeu/chi-tiet/<?php echo remove_unicode($rows->pk_ky_id); ?>"><?php echo $rows->c_name; ?></a></h3>
              <p class="desc"><?php echo $rows->c_description; ?></p>
            </div>
          <!-- end list ky --> 
          <?php } ?>
          <div style="clear: both;"></div>
          <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li><a href="#">Trang</a></li>
            <?php 
              for($i = 1; $i <= $num_page; $i++)
              {
             ?>
            <li><a href="ki-yeu/trang/<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
          </ul>
        </div>
        