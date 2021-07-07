<?php 
	trait SearchModel{
		//lay danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){			
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : "";
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : "";
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where price >= $fromPrice and price <= $toPrice order by id desc limit $from,$recordPerPage");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			//---
			return $result;
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : "";
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : "";
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where price >= $fromPrice and price <= $toPrice");
			//ham rowCount: dem so ket qua tra ve
			return $query->rowCount();
			
		}		
	}
 ?>