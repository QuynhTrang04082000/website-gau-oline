<?php 
	trait HeaderModel{
		//load menu cap 1
		public function modelGetCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		//load menu cap 2
		public function modelGetCategoriesSub($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id desc");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			return $result;
			
		}
	}
 ?>