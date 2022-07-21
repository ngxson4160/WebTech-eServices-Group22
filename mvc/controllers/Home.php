<?php
    class  Home extends Controller {
        
        public $category;
        public $product;
        public $detailProduct;
        public $productModel;
        function __construct(){
            // $this->category = $this->model("CategoryModel");
            // $this->product = $this->model("ProductModel");
            // $this->detailProduct = $this->model("DetailProductModel");
            $this->productModel = $this->model("ProductModel");
        }

        function index(){
            //Lấy model
            $list = $this->productModel->findAll(); 
                // this 
            
            //Lấy view
            Controller::view("index", [
                "list" => $list
                // "page" => "SinhVienDetail",
            ]);
            
            
        }

        // function admin(){
        //     $this->view("form",[]);
        // }

        
    }
?>
