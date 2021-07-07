<?php 

	//load file model
	include "models/AccountModel.php";
	class AccountController extends Controller{
		//ke thua class model
		use AccountModel;
		public function register(){
			$this->loadView("AccountRegisterView.php");
		}
		public function registerPost(){
			//goi ham model de insert ban ghi
			$this->modelRegister();			
		}
		public function login(){
			$this->loadView("AccountLoginView.php");
		}
		public function loginPost(){
			//goi ham model de kiem tra dang nhap
			$this->modelLogin();
		}
		//dang xuat
		public function logout(){
			unset($_SESSION["customer_email"]);
			header("location:index.php");
		}
	}	
 ?>