<h1>Chính sách</h1>
        <div class="wrapper-blog"> 
        <?php 
          foreach($arr as $rows)
          {
         ?>
          <!-- list policy -->
          <!-- <div class="row"> -->
            <div class="col-md-12 article" "> <a href="chinh-sach/chi-tiet/<?php echo remove_unicode($rows->pk_policy_id); ?>" class="image"> </a>
              <h3><a href="chinh-sach/chi-tiet/<?php echo $rows->pk_policy_id; ?>"><?php echo $rows->c_name; ?></a></h3>
              <p class="desc"><?php echo $rows->c_description; ?></p>
            </div>
           
          <!-- end list policy --> 
          <?php } ?>
          <div style="clear: both;"></div>
          <ul class="pagination pull-right" style="margin-top: 0px !important">
            <li><a href="#">Trang</a></li>
            <?php 
              for($i = 1; $i <= $num_page; $i++)
              {
             ?>
            <li><a href="chinh-sach/trang/<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php } ?>
          </ul>
        </div>