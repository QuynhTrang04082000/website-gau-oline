<?php 
	trait ProductsModel{
		//lay danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){	
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;	
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			$sqlOrder = " order by id desc ";
			//lay bien order truyen tu url
			$order = isset($_GET["order"]) ? $_GET["order"] : "";
			switch($order){
				case "priceAsc":
					$sqlOrder = " order by price asc ";
				break;
				case "priceDesc":
					$sqlOrder = " order by price desc ";
				break;
				case "nameAsc":
					$sqlOrder = " order by name asc ";
				break;
				case "nameDesc":
					$sqlOrder = " order by name desc ";
				break;
			}
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id in (select id from categories where id=$category_id or parent_id=$category_id) $sqlOrder limit $from,$recordPerPage");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			//---
			return $result;
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where category_id in (select id from categories where id=$category_id or parent_id=$category_id)");
			//ham rowCount: dem so ket qua tra ve
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function getCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id=$category_id");
			$record = $query->fetch();
			return $query->rowCount() > 0 ? $record->name : "";
		}		
	}
 ?>