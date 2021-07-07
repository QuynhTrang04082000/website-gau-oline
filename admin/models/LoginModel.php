<?php 
	trait LoginModel{
		public function modelLogin(){
			$email = $_POST["email"];
			//ham mysql_escape_string su dung de loai bo mot so ky tu dac biet (lien quan den loi sql injection)
			//VD: ky tu ' se tro thanh \'
			//$email = mysql_escape_string($email);
			$password = $_POST["password"];	
			//$password = mysql_escape_string($password);		
			//ma hoa password
			$password = md5($password);
			//echo $password;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//chuan bi cau truy van			
			$query = $conn->query("select email,password from users where email='$email'");
			if($query->rowCount() > 0){
				$record = $query->fetch();
				if($record->password == $password){
					$_SESSION["email"] = $email;
					header("location:index.php");
				}
			}else
				header("location:index.php?controller=login");
		}
	}
 ?>