<?php 
	//load file model
	include "models/HomeModel.php";
	class HomeController extends Controller{
		//ke thua HomeModel
		use HomeModel;
		public function index(){
			//load view
			$this->loadView("HomeView.php");
		}
	}
 ?>