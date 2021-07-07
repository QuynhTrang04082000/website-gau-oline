<?php 
	trait NewsModel{
		//lay danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){			
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news order by id desc limit $from,$recordPerPage");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			//---
			return $result;
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from news");
			//ham rowCount: dem so ket qua tra ve
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"])?1:0;
			//update cot name
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("update news set name=:_name,description=:_description,content=:_content,hot=:_hot where id=:_id");
			$query->execute([":_name"=>$name,":_description"=>$description,":_content"=>$content,":_hot"=>$hot,":_id"=>$id]);
			//---
			//neu user upload anh thi lay anh cu de xoa, sau do upload anh moi va update database
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldQuery = $conn->query("select photo from news where id=$id");
				if($oldQuery->rowCount() > 0)
					$oldPhoto = $oldQuery->fetch();
					if(file_exists("../assets/upload/news/".$oldPhoto->photo))
						unlink("../assets/upload/news/".$oldPhoto->photo);
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh moi
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/news/$photo");
				//update csdl
				$query = $conn->prepare("update news set photo = :_photo where id=:_id");
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
			//---
			//neu user upload anh thi lay anh cu de xoa, sau do upload anh moi va update database
			if($_FILES["photo"]["name"] != ""){				
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh moi
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/news/$photo");
			}
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into news set name=:_name,description=:_description,content=:_content,hot=:_hot,photo=:_photo");
			$query->execute([":_name"=>$name,":_description"=>$description,":_content"=>$content,":_hot"=>$hot,":_photo"=>$photo]);			
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldQuery = $conn->query("select photo from news where id=$id");
			if($oldQuery->rowCount() > 0)
				$oldPhoto = $oldQuery->fetch();
				if(file_exists("../assets/upload/news/".$oldPhoto->photo))
					unlink("../assets/upload/news/".$oldPhoto->photo);
			//---
			$conn->query("delete from news where id=$id");
		}
	}
 ?>