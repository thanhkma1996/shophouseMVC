
        <div class="wrapper-blog"> 
        <?php 
          foreach($arr as $rows)
          {
         ?>
          <!-- list adv -->
          <!-- <div class="row"> -->
            <div class="col-md-12 article" style="overflow: hidden;"> <a href="tin-tuc"> <img src="public/upload/adv/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_url; ?>" >
            </div>
          <!-- end list adv --> 
          <?php } ?>
         
        </div> 