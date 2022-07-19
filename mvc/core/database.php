<?php
    class DB{
        public $connect;
        protected $serverName = "localhost";
        protected $userName= "root";
        protected $passWord = "";
        protected $dbName = "web_service";

        function __construct(){
            $this->connect = mysqli_connect($this->serverName, $this->userName, $this->passWord);
            mysqli_select_db($this->connect, $this->dbName);
            mysqli_query($this->connect, "SET NAMES 'utf8'");
        }
    }
?>