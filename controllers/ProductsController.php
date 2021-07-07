<?php 
	//load file model
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//ke thua class ProductsModel
		use ProductsModel;
		//liet ke so ban ghi
		public function categories(){
			//quy dinh so ban ghi mot trang
			$recordPerPage = 20;
			//tinh so trang
			//ham ceil la ham lay tran. VD: ceil(2.1) = 3
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//lay danh sach cac ban ghi co phan trang
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("ProductsCategoriesView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$record = $this->modelGetRecord($id);
			$this->loadView("ProductsDetailView.php",["record"=>$record]);
		}
		//danh gia so sao
		public function rating(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$star = isset($_GET["star"]) ? $_GET["star"] : 0;
			//insert thong tin vao bao rating
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into rating set product_id=:var_product_id, star=:var_star");
			$query->execute(array("var_product_id"=>$id,"var_star"=>$star));
			//di chuyen den trang chi tiet san pham
			header("location:index.php?controller=products&action=detail&id=$id");
		}
		//lay so sao tuong ung voi id truyen vao
		public function getStar($id,$star){
			$conn = Connection::getInstance();
			$query = $conn->query("select id from rating where product_id=$id and star=$star");
			//dem so ban ghi tra ve
			return $query->rowCount();
		}
		public function ajax(){
			//lay bien key truyen tu url
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where name like '%$key%'");
			$result = $query->fetchAll();
			$strResult = "";
			foreach($result as $rows)
				$strResult = $strResult."<li><img src='assets/upload/products/{$rows->photo}'><a href='index.php?controller=products&action=detail&id={$rows->id}'>{$rows->name}</a></li>";
			echo $strResult;
		}
	}
 ?>