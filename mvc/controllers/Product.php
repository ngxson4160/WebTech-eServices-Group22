<?php
class Product extends Controller {
    
    public $productModel;
    
    function __construct(){
        $this->productModel = $this->model("ProductModel");
    }
    
    public function index(){
        $this->view("index", [
        ]);
    }
    
    public function search(){
        $list=null;
        if(isset($_POST["searchSubmit"])){
            $search=  $_POST["search'"];
            $list = $this->productModel->search($search);
            
            $this->view("products", [
                "test"=>"123",
                "listProd" => $list
            ]);
        }
        
        $this->view("products", [
            "test"=>"123",
            "listProd" => $list
        ]);
        
    }
    public function getAll(){
        $list = $this->productModel->findAll(); 
        // this 
    }
    public function detail(){
        if(isset($_GET["url"])){
            $url = explode("/", filter_var(trim($_GET["url"], "/")));
        }
        $id = $url[2];
        $product = $this->productModel->findById($id);
        
        $this->view("product-detail",[
            "product"=>$product
        ]);
    }
    public function addProduct(){
        // /img upload
        $target_dir = $_SERVER['DOCUMENT_ROOT']."/prj_test/public/images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        // echo $target_file;
        $name = $_POST['name'];
        $descriptions = $_POST['descriptions'];
        $price = $_POST['price'];
        $insert = $this->productModel->insertProduct($name,$descriptions,$price,$target_file);
        echo $insert;
        $this->view("product-crud-table");
    }
    
}

?>