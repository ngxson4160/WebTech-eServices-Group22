<?php
    class ProductModel extends DB{
        function findAll(){
            $query = "SELECT * FROM product";
            $result = mysqli_query($this->connect, $query);
            return $result;
        }
        function findById($id){
            $query = "SELECT * FROM product WHERE id = $id";
            $result = mysqli_query($this->connect, $query);
            return $result;
        }

        function search($name){
            $query = "SELECT * from product where LOWER(name) LIKE '%$name%'";
            $result = mysqli_query($this->connect, $query);
            return $result;
        }
        function insertProduct($name,$descriptions,$price,$target_file){
            $query = "INSERT INTO product(name,descriptions,price,img) VALUES ('$name','$descriptions',$price,'$target_file')";
            $result = mysqli_query($this->connect, $query);
            return $result;
        }
    }
?>