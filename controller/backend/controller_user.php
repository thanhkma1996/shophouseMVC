<?php

      class controller_user extends controller{
        public function __construct() {

          parent:: __construct();
          //------------------
          $act = isset($_GET["act"])?$_GET["act"]:"";
          switch ($act) {
            case "delete":
                     $id = isset($_GET["id"])&& is_numeric($_GET["id"])?$_GET["id"]:0;
                     // thực thi truy vấn
                      $this->model->execute("delete from tbl_user where pk_user_id=$id");
                  //   $this->model->execute("delete from tbl_user where pk_user_id=$id");
                     header("location:admin.php?controller=user");
              break;
              
            
          }
         

          // số bản ghi trên trang
          $record_per_page = 4;
          //tính tổng số bản ghi
          $total_recod = $this -> model -> num_rows("select * from tbl_user");
          // tính só trang
          $num_page = ceil ($total_recod/$record_per_page);
          // lấy biến p từ url ( để xác định là đến trang thhuws mấy)
          $p = isset($_GET["p"])&& $_GET["p"]>0?($_GET["p"]-1):0;

          // Xác định lấy dữ liệu từ bản ghi nào
          $from = $p*$record_per_page;

          $arr = $this -> model -> fetch ("select * from tbl_user order by pk_user_id desc limit $from,$record_per_page");
          //load view
          require "view/backend/view_user.php";
        }
      }

        new controller_user();
 ?>
