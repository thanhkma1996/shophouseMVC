<?php  

      class controller_category_product extends controller {
        public function __construct(){
          parent::__construct();
          //load view
          require "view/frontend/view_category_product.php";
        }
      }
      new controller_category_product();
  
?>