<?php
    class  Home extends Controller {
        
        public $category;
        public $product;
        public $detailProduct;
        
        function __construct(){
            // $this->category = $this->model("CategoryModel");
            // $this->product = $this->model("ProductModel");
            // $this->detailProduct = $this->model("DetailProductModel");
        }

        function index(){
            //Lấy model

            //Lấy view
            Controller::view("index", [
                // "page" => "SinhVienDetail",
            ]);
            
            
        }

        function show(){

            //Lấy model
            $teo = Controller::model("SinhVienModel");

            //Lấy view
            Controller::view("index", [
                "page" => "SinhVienDetail",
                "mau" => "blue",
                "SV" => $teo-> getSinhVien()
            ]);

        }
    }
?>
