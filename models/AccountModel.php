<?php 
	trait AccountModel{
		public function modelRegister(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			$password = $_POST["password"];
			//kiem tra neu email khong ton tai trong table customers thi insert
			$conn = Connection::getInstance();
			$check = $conn->prepare("select id from customers where email=:var_email");
			$check->execute(array("var_email"=>$email));
			if($check->rowCount() == 0){
				$password = md5($password);
				$query = $conn->prepare("insert into customers set name=:var_name,email=:var_email,address=:var_address,phone=:var_phone,password=:var_password");
				$query->execute(array("var_name"=>$name,"var_email"=>$email,"var_address"=>$address,"var_phone"=>$phone,"var_password"=>$password));
				//di chuyen den trang login
				header("location:index.php?controller=account&action=login&notify=success");
			}else
				header("location:index.php?controller=account&action=register&notify=exists");
		}
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			$password = md5($password);
			$conn = Connection::getInstance();
			$query = $conn->prepare("select email,id from customers where email=:var_email and password=:var_password");
			$query->execute(array("var_email"=>$email,"var_password"=>$password));
			if($query->rowCount() > 0){
				//---
				$record = $query->fetch();
				//---
				$_SESSION["customer_email"] = $record->email;
				$_SESSION["customer_id"] = $record->id;
				header("location:index.php");
			}else
				header("location:index.php?controller=account&action=login");
		}
	}
 ?>