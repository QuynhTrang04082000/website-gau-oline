<?php 
	trait ProductsModel{
		//lay danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){			
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit $from,$recordPerPage");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			//---
			return $result;
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products");
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
		public function modelUpdate($id){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"])?1:0;
			$price = $_POST["price"];
			$discount = $_POST["discount"];
			$category_id = $_POST["category_id"];
			//update cot name
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("update products set name=:_name,description=:_description,content=:_content,hot=:_hot,price=:_price,discount=:_discount,category_id=:_category_id where id=:_id");
			$query->execute([":_name"=>$name,":_description"=>$description,":_content"=>$content,":_hot"=>$hot,":_price"=>$price,":_discount"=>$discount,":_category_id"=>$category_id,":_id"=>$id]);
			//---
			//neu user upload anh thi lay anh cu de xoa, sau do upload anh moi va update database
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldQuery = $conn->query("select photo from products where id=$id");
				if($oldQuery->rowCount() > 0)
					$oldPhoto = $oldQuery->fetch();
					if(file_exists("../assets/upload/products/".$oldPhoto->photo))
						unlink("../assets/upload/products/".$oldPhoto->photo);
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh moi
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
				//update csdl
				$query = $conn->prepare("update products set photo = :_photo where id=:_id");
				$query->execute([":_photo"=>$photo,":_id"=>$id]);
				//---
			}
			//---
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"])?1:0;
			$photo = "";
			$price = $_POST["price"];
			$discount = $_POST["discount"];
			$category_id = $_POST["category_id"];
			//---
			//neu user upload anh thi lay anh cu de xoa, sau do upload anh moi va update database
			if($_FILES["photo"]["name"] != ""){				
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh moi
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
			}
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into products set name=:_name,description=:_description,content=:_content,hot=:_hot,photo=:_photo,price=:_price,discount=:_discount,category_id=:_category_id");
			$query->execute([":_name"=>$name,":_description"=>$description,":_content"=>$content,":_hot"=>$hot,":_photo"=>$photo,":_price"=>$price,":_discount"=>$discount,":_category_id"=>$category_id]);			
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldQuery = $conn->query("select photo from products where id=$id");
			if($oldQuery->rowCount() > 0)
				$oldPhoto = $oldQuery->fetch();
				if(file_exists("../assets/upload/products/".$oldPhoto->photo))
					unlink("../assets/upload/products/".$oldPhoto->photo);
			//---
			$conn->query("delete from products where id=$id");
		}
		public function modelListCategories(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id,name from categories where parent_id = 0 order by id desc");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
		public function modelListCategoriesSub($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id,name from categories where parent_id = $id order by id desc");
			//tra ve mot ban ghi
			return $query->fetchAll();
		}
	}
 ?>