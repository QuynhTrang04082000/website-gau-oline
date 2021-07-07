<?php 
	trait WishlistModel{
		public function modelAdd($id){
		    if(!isset($_SESSION['Wishlist'][$id])) {        
		        //---
		        //PDO
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from products where id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        //---
		        
		        $_SESSION['Wishlist'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'photo' => $product->photo
		        );
		    }
		}
		public function modelDelete($id){
		    unset($_SESSION['Wishlist'][$id]);
		}
	}
 ?>