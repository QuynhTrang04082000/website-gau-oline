<?php 
	include "models/CartModel.php";
	class CartController extends Controller{
		//ke thua class CartModel
		use CartModel;
		//ham tao
		public function __construct(){
			//neu gio hang chua ton tai thi khoi tao no
			if(isset($_SESSION["cart"]) == false)
				$_SESSION["cart"] = array();
		}
		//them san pham vao gio hang
		public function create(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham cartAdd de them san pham vao gio hang
			$this->cartAdd($id);
			//quay tro lai trang gio hang
			header("location:index.php?controller=cart");
		}
		//hien thi gio hang
		public function index(){
			$this->loadView("CartView.php");
		}
		//xoa san pham khoi gio hang
		public function delete(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham cartDelete de them san pham vao gio hang
			$this->cartDelete($id);
			//quay tro lai trang gio hang
			header("location:index.php?controller=cart");
		}
		//xoa toan bo gio hang
		public function destroy(){
			//goi ham cartDestroy de xoa gio hang
			$this->cartDestroy($id);
			//quay tro lai trang gio hang
			header("location:index.php?controller=cart");
		}
		//cap nhat nhieu san pham
		public function update(){
			//duyet cac phan tu trong session array
			foreach($_SESSION["cart"] as $product){
				$id = $product["id"];
				$quantity = $_POST["product_$id"];
				//goi ham cartUpdate de update lai so luong
				$this->cartUpdate($id,$quantity);
			}
			//quay tro lai trang gio hang
			header("location:index.php?controller=cart");
		}
		//thanh toan gio hang
		public function checkout(){
			//kiem tra neu user chua dang nhap thi di chuyen den trang dang nhap
			if(isset($_SESSION["customer_email"]) == false)
				header("location:index.php?controller=account&action=login");
			else{
				//goi ham cartCheckOut de thanh toan gio hang
				$this->cartCheckOut();
				header("location:index.php?controller=cart");
			}
		}
	}
 ?>