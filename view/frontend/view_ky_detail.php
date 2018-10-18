   <!-- main -->
        <div class="ky-detail">
          <h3><?php echo $arr->c_name;  ?></h3>
            <p style="text-align: center;"><img src="public/upload/ky/<?php echo $arr->c_img ?>" style="width: 500px; margin: "></p>
            <p><?php echo $arr->c_description; ?></p>
             <p><?php echo $arr->c_content; ?></p>
        </div>
        
        <!-- end main --> 
  <?php 
            include "view/frontend/view_comment.php";

        ?>