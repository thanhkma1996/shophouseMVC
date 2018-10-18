<?php
	// file controller
	class controller{
		// khai bao bien model
		public $model;
		public function __construct(){
			//khoi tao bien model la object cua class controoler de tu bien model nay co the tasc dong duoc vao cac ham trong class model
			$this->model = new model();
		}
	}


?>