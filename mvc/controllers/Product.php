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
            // while($row = mysqli_fetch_array($result)){
            //     $id =  $row["id"] ;
            //     $name = $row["name"];
            //     $descriptions = $row["descriptions"];
            //     $img = $row["img"];
            //     }
    
            // if(isset($tmp)){
            //     return $tmp;
            // }
            $this->view("products", [
                "test"=>"123",
                "listProd" => $list
            ]);
            
        }

    }
?>