<?php 
	include "models/WishlistModel.php";
	class WishlistController extends Controller{
		use WishlistModel;
		public function __construct(){
			if(!isset($_SESSION["Wishlist"]))
				$_SESSION["Wishlist"] = array();
		}
		public function create(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$this->modelAdd($id);
			header("location:index.php?controller=wishlist");
		}
		public function index(){
			$this->loadView("WishlistView.php");
		}
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$this->modelDelete($id);
			header("location:index.php?controller=wishlist");
		}
	}
 ?>