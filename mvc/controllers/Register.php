<?php
    class Register extends Controller {

        public $userModel;
        public $productModel;
        
        function __construct(){
            $this->userModel = $this->model("UserModel");
            $this->productModel = $this->model("ProductModel");
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
            $list = $this->productModel->findAll(); 
            if($userErr == '' && $passErr == ''){
                $kq = $this->userModel->selectPassword($userName);

                if(password_verify($password, $kq)){
                    
                    $cookie_name = "user";
                    $cookie_value = $userName;
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                    echo "<script type='text/javascript'> 
                        alert('Đăng nhập thành công');
                        // window.location.href='/prj_test/Register/admin';
                    </script>";
                    $this->view("index",[
                        "user" => $userName,
                        "list" => $list
                    ]);
                }else{
                    $this->view("index", [
                        "msg1" => "Mật khẩu hoặc tài khoản không đúng!",
                        "cls" => "block",
                        "list" => $list
                    ]);
                }
            } else {
                $this->view("index",[
                    "cls" => "block",
                    "msg2" => $userErr,
                    "msg3" => $passErr,
                    "list" => $list
                ]);
            }
        }
        public function logout(){
            if(isset($_POST["logout"])){
                $cookie_name = "user";
                    $cookie_value = "";
                    setcookie($cookie_name, $cookie_value, time() -3600, "/");
                
                // unset($_COOKIE["user"]);
                $list = $this->productModel->findAll(); 
                $this->view("index",[
                
                "list" => $list
                // "page" => "SinhVienDetail",
                ]);
            }
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

        function create(){
            $this->view("form",[]);
        }

        function admin(){
            
            // $this->view("product-crud-table",[]);
            if(!isset($_COOKIE["user"])){
                $this->view("index",[]);
            }
            else{
                $list = $this->productModel->findAll();
                // echo $_COOKIE["user"];
                if($_COOKIE["user"] == ""){
                    $this->view("index",["list" => $list]);
                }
                else 
                    $this->view("product-crud-table",["list" => $list]);
            }
        }
        
    }
?>