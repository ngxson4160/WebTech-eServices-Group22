<?php
    class News extends Controller{
        function sayHi(){
            $ti = Controller::model("SinhVienModel");
            echo $ti->getSV1();
        }
    }
?>