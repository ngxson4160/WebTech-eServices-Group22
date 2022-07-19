<?php
    class ProductModel extends DB{
        function search($name){
            $query = "SELECT * from product where LOWER(name) LIKE '%$name%'";
            $result = mysqli_query($this->connect, $query);
            return $result;
        }
    }
?>