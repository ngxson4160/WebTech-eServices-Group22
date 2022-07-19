<?php
    class Register extends Controller {

        public $userModel;
        
        function __construct(){
            $this->userModel = $this->model("UserModel");
        }

        public function index(){
            $this->view("index", [
            ]);
        }

        public function khachHangDangKi(){
            if(isset($_POST["register"])){

                // define variables to empty values  
                $userErr = $emailErr =  $passErr = $confirmErr = '';

                //get input
                $userName = $_POST["userName"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $confirmPassword = $_POST["confirmPassword"];

                //validate userName
                if (!$userName) {  
                    $userErr = "Username is required!";  
                } 
                else if(null != $this->userModel->selectUser($userName)){ 
                    $userErr = "Username exists!";
                }else{
                    if (!preg_match("/^[0-9A-Za-z_]*$/",$userName)) {  
                        $userErr = "Error username: Only alphabets and numbers";  
                    } 
                }

                //validate email
                if (!$email) {  
                    $emailErr = "Email is required!";  
                } 
                else if(null != $this->userModel->selectEmail($email)){ 
                    $emailErr = "Email exists!";
                }else{
                    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 
                    if(!preg_match ($pattern, $email) ){  
                        $emailErr = "Error email: Invalid email format!";  
                    } 
                }

                //validate password
                if(!$password){
                    $passErr = "Password is required!";
                } else {
                    if (!preg_match("/^[0-9A-Za-z_ ]*$/",$password)) {  
                        $passErr = "Error password: Only alphabets, numbers white space are allowed";  
                    }  
                }

                //validate confirm password
                if(!$confirmPassword){
                    $confirmErr = "Confirm password is required!";
                } else {
                    if($password != $confirmPassword){
                        $confirmErr = 'Error confirm password!';
                    }   
                }

                
                $password = password_hash($password, PASSWORD_DEFAULT);
            }

            if($userErr =='' && $emailErr == '' && $passErr == '' && $confirmErr == ''){
                $kq = $this->userModel->insertUser($userName, $email, $password);
                // $this->view("index", [
                //     "check" => $kq
                // ]);

                echo "<script type='text/javascript'> 
                    alert('Register Successful!'); 
                    window.location.href='/prj_test/Home';
                </script>";
                

            }else{
                $this->view("index", [
                    "isRegister" => true,
                    "cls" => "block",
                    "userErr" => $userErr,
                    "emailErr" => $emailErr,
                    "passErr" => $passErr,
                    "confirmErr" => $confirmErr
                ]);
            }

        }
        
        public function khachHangDangNhap(){

            // define variables to empty values 
            $userErr = $passErr = '';
            
            //get input
            if(isset($_POST["continue"])){
                $userName = $_POST["userName"];
                $password = $_POST["password"];
            }
            
            
            if($userName == ''){
                    $userErr = "Chưa nhập User Name!";
            }

            if($password == ''){
                    $passErr = "Chưa nhập Password!";
            }

            if($userErr == '' && $passErr == ''){
                $kq = $this->userModel->selectPassword($userName);

                if(password_verify($password, $kq)){
                    echo "<script type='text/javascript'> 
                        alert('Đăng nhập thành công');
                        window.location.href='/prj_test/Home';
                    </script>";
                }else{
                    $this->view("index", [
                        "msg1" => "Mật khẩu hoặc tài khoản không đúng!"
                    ]);
                }
            } else {
                $this->view("index",[
                    "cls" => "block",
                    "msg2" => $userErr,
                    "msg3" => $passErr
                ]);
            }
        }

        
    }
?>