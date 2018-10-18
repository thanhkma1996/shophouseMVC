<?php  

      class controller_support extends controller {
        public function __construct(){
          parent::__construct();
          $arr = $this->model->fetch("select * from tbl_support");
          //load view
          require "view/frontend/view_support.php";
        }
      }
      new controller_support();
  
?>