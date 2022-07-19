<?php
    class UserModel extends DB{
        function insertUser($userName, $email, $password){
            $query = "INSERT INTO user(id, user, email, password) VALUES(null, '$userName', '$email','$password')";
            
            $result = false;

            if(mysqli_query($this->connect, $query)){
                $result = true;
            }
            
            return json_encode($result);
        }

        function selectUser($userName){
            $query = "SELECT id from user where user = '$userName'";
            $result = mysqli_query($this->connect, $query);
            while($row = mysqli_fetch_array($result)){
                $tmp =  $row["id"] ;
                }
    
            if(isset($tmp)){
                return $tmp;
            }
        }

        function selectEmail($email){
            $query = "SELECT id from user where email = '$email'";
            $result = mysqli_query($this->connect, $query);
            while($row = mysqli_fetch_array($result)){
                $tmp =  $row["id"] ;
                }
    
            if(isset($tmp)){
                return $tmp;
            }
        }
        
        function selectPassword($userName){
            $query = "SELECT password from user where user = '$userName'";
            
            $result = mysqli_query($this->connect, $query);
            
            while($row = mysqli_fetch_array($result)){
            $tmp =  $row["password"] ;
            }

            if(isset($tmp)){
                return $tmp;
            }
        }
    }
    
?>