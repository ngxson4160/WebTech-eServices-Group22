<?php
    class SinhVienModel extends DB{

        public function getSV(){
            return "Nguyen Van Teo";
        }

        public function tong($a,$b){
            return $a+$b;
        }
        
        public function getSinhVien(){
            $tmp = "select * from sinhvien ";
            return mysqli_query($this->connect, $tmp);
        }

    }
?>