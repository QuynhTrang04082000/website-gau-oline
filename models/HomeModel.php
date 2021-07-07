<?php 
	trait HomeModel{
		//hot product
		public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where displayhomepage=1 order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetProducts($category_id){
			$conn = Connection::getInstance();
			//lay cac san pham thuoc danh muc do va danh muc cap con cua no
			$query = $conn->query("select * from products where category_id in (select id from categories where id=$category_id or parent_id=$category_id) order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>