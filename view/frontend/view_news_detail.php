   <!-- main -->
        <div class="news-detail">
          <h3><?php echo $arr->c_name;  ?></h3>
            <p style="text-align: center;"><img src="public/upload/news/<?php echo $arr->c_img ?>" style="width: 500px; margin: "></p>
            <p><?php echo $arr->c_description; ?></p>
             <p><?php echo $arr->c_content; ?></p>
        </div>
        <?php 
        		include "view/frontend/view_comment.php";

        ?>
        <!-- end main --> 
