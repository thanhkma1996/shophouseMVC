 <aside class="aside-category">
            <h3><i class="fa fa-bars"></i>&nbsp;&nbsp; Danh mục sản phẩm</h3>
            <ul class="list-unstyled">
              <?php 
                  $arr_category = $this->model->fetch("select * from tbl_category_product order by pk_category_product_id desc");

                  foreach($arr_category as $rows_category)
                  {
              ?>
              <li ><a href="san-pham/danh-muc/<?php echo $rows_category->pk_category_product_id; ?>/<?php echo remove_unicode($rows_category->c_name); ?>"><?php 
                  echo $rows_category->c_name; ?>
                </a></li>

                <?php } ?>
            </ul>
          </aside>

    