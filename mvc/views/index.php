<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATShop</title>
    <!-- google font -->
    <link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
			integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- app css -->
    <base href="http://localhost:">
    <link rel="stylesheet" href="/prj_test/public/css/app.css">
    <link rel="stylesheet" href="/prj_test/public/css/grid.css">
    <link rel="stylesheet" href="/prj_test/public/css/regis.css">
    <link rel="stylesheet" href="/prj_test/public/css/toast.css">
</head>

<body>
       
    <!-- header -->
    <header>
        <!-- mobile menu -->
        <div class="mobile-menu bg-second">
            <a href="#" class="mb-logo">ATShop</a>
            <span class="mb-menu-toggle" id="mb-menu-toggle">
                <i class='bx bx-menu'></i>
            </span>
        </div>
        <!-- end mobile menu -->
        <!-- main header -->
        <div class="header-wrapper" id="header-wrapper">
            <span class="mb-menu-toggle mb-menu-close" id="mb-menu-close">
                <i class='bx bx-x'></i>
            </span>
            <!-- top header -->
            <div class="bg-second">
                <div class="top-header container">
                    <ul class="devided">
                        <li>
                            <a href="#">+840123456789</a>
                        </li>
                        <li>
                            <a href="#">atshop@mail.com</a>
                        </li>
                    </ul>
                    <ul class="devided">
                        <li class="dropdown">
                            <a href="">USD</a>
                            <i class='bx bxs-chevron-down'></i>
                            <ul class="dropdown-content">
                                <li><a href="#">VND</a></li>
                                <li><a href="#">JPY</a></li>
                                <li><a href="#">EUR</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="">ENGLISH</a>
                            <i class='bx bxs-chevron-down'></i>
                            <ul class="dropdown-content">
                                <li><a href="#">VIETNAMESE</a></li>
                                <li><a href="#">JAPANESE</a></li>
                                <li><a href="#">FRENCH</a></li>
                                <li><a href="#">SPANISH</a></li>
                            </ul>
                        </li>
                        <li><a href="#">ORDER TRACKING</a></li>
                    </ul>
                </div>
            </div>
            <!-- end top header -->
            <!-- mid header -->
            <div class="bg-main">
                <div class="mid-header container">
                    <a href="#" class="logo">ATShop</a>
                    <form  action = "/prj_test/Product/search" method = "POST">
                    <div class="search">
                        <input type="text" placeholder="Search" name = "search'">
                        <button type = "submit" name = "searchSubmit"><i class='bx bx-search-alt'></i></button>
                        <!-- <i class='bx bx-search-alt'></i> -->
                    </div>
                    </form>
                    <ul class="user-menu">
                    <?php if(isset($data["user"])) echo '
                        <li><br><button><a href="http://localhost/prj_test/Register/admin">Go to admin management</a></button></li>
                        <li style = "color: red">Welcome '. $data["user"].
                    '<br>
                    <form action = "prj_test/Register/logout" method = "POST">
                    <button type = "submit" name="logout">LOGOUT</button>
                    </form>
                    </li> ';?>
                        <li><a><i class='bx bx-bell'></i></a></li>
                        <li><a><i class='bx bx-user-circle account'></i></a></li>
                        <li><a><i class='bx bx-cart'></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- end mid header -->
            <!-- bottom header -->
            <div class="bg-second">
                <div class="bottom-header container">
                    <ul class="main-menu">
                        <li><a href="#">home</a></li>
                        <!-- mega menu -->
                        <li class="mega-dropdown">
                            <a href="/prj_test/mvc/views/products.php">Shop<i class='bx bxs-chevron-down'></i></a>
                            <div class="mega-content">
                                <div class="row">
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="#">Wireless</a></li>
                                                <li><a href="#">Inear headphone</a></li>
                                                <li><a href="#">Overear headphone</a></li>
                                                <li><a href="#">sport headphone</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="#">Wireless</a></li>
                                                <li><a href="#">Inear headphone</a></li>
                                                <li><a href="#">Overear headphone</a></li>
                                                <li><a href="#">sport headphone</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="#">Wireless</a></li>
                                                <li><a href="#">Inear headphone</a></li>
                                                <li><a href="#">Overear headphone</a></li>
                                                <li><a href="#">sport headphone</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-12">
                                        <div class="box">
                                            <h3>Categories</h3>
                                            <ul>
                                                <li><a href="#">Wireless</a></li>
                                                <li><a href="#">Inear headphone</a></li>
                                                <li><a href="#">Overear headphone</a></li>
                                                <li><a href="#">sport headphone</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row img-row">
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="/prj_test/public/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="/prj_test/public/images/JBL_TUNE220TWS_ProductImage_Pink_ChargingCaseOpen.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="/prj_test/public/images/JBL_JR 310BT_Product Image_Hero_Skyblue.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="box">
                                            <img src="/prj_test/public/images/JBLHorizon_001_dvHAMaster.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end mega menu -->
                        <li><a href="#">blog</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- end bottom header -->
        </div>
        <!-- end main header -->
    </header>
    <!-- end header -->
    <div class="dialog" style="
    <?php 
    if(isset($data["cls"]))
    echo 'display:'.$data["cls"]
    ?>
    ">

        <div class="register">
            <div class="btn-exit">
                <i class='bx bxs-x-circle'></i>
            </div>
            
            <form action="prj_test/Register/khachHangDangNhap" method="POST" class="form" id="login" style = "
            <?php 
            if(isset($data["isRegister"]))
            echo 'display:none'
            ?>
            ">
                <h1 class="form__title">Login</h1>
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name = "userName" autofocus placeholder="Username or email">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" name="password" autofocus placeholder="Password">
                    <div class="form__input-error-message"></div>
                </div>
                <button class="form__button" name="continue" type="submit">Continue</button>
                <p class="form__text">
                    <a href="#" class="form__link">Forgot your password?</a>
                </p>
                <p class="form__text">
                    <a class="form__link" href="./" id="linkCreateAccount">Don't have an account? Create account</a>
                </p>
                <br>
                <?php
                    if(isset($data["msg1"])){
                        echo "<span style='color: red' >".$data["msg1"]."</span> <br>";
                    }
                    if(isset($data["msg2"])){
                        echo "<span style='color: red' >".$data["msg2"]."</span> <br>";
                    }
                    if(isset($data["msg3"])){
                        echo "<span style='color: red' >".$data["msg3"]."</span> <br>";
                    }
                ?>
                
            </form>

            <form action="prj_test/Register/khachHangDangKi" method="POST" class="form form--hidden" id="createAccount" style="
            <?php if(isset($data["isRegister"]))
            echo 'display:block'?>
            "
            >

                <h1 class="form__title">Create Account</h1>
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                    <input type="text" id="signupUsername" name = "userName" class="form__input" autofocus placeholder="Username">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" name="email" autofocus placeholder="Email Address">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" name="password" autofocus placeholder="Password">
                    <div class="form__input-error-message"></div>
                </div>
                <div class="form__input-group">
                    <input type="password" class="form__input" name="confirmPassword" autofocus placeholder="Confirm password">
                    <div class="form__input-error-message"></div>
                </div>
                <button class="form__button" type="submit" name="register">Register</button>
                <!-- <p class="form__text">
                    <a class="form__link" href="./" id="linkLogin">Already have an account? Sign in</a>
                </p> -->
                <?php
                    if(isset($data["userErr"])){
                        echo "<span style='color: red' >".$data["userErr"]."</span> <br>";
                    }
                    if(isset($data["emailErr"])){
                        echo "<span style='color: red' >".$data["emailErr"]."</span> <br>";
                    }
                    if(isset($data["passErr"])){
                        echo "<span style='color: red' >".$data["passErr"]."</span> <br>";
                    }
                    if(isset($data["confirmErr"])){
                        echo "<span style='color: red' >".$data["confirmErr"]."</span> <br>";
                    }
                ?>
            </form>
        </div>
    </div>

    <!-- hero section -->
    <div class="hero">
        <div class="slider">
            <div class="container">
                <!-- slide item -->
                <div class="slide active">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                JBL TUNE 750TNC
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Next-gen design
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolor commodi dignissimos culpa, eaque eos necessitatibus possimus veniam, cupiditate rerum deleniti? Libero, ducimus error? Beatae velit dolore sint explicabo! Fugit.
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img top-down">
                        <img src="/prj_test/public/images/JBL_E55BT_KEY_RED_6063_FS_x1-1605x1605px.webp" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                JBL Quantum ONE
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Ipsum dolor
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio, voluptatum aperiam nobis quis maxime corporis porro alias soluta sunt quae consectetur aliquid blanditiis perspiciatis labore cumque, ullam, quam eligendi!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img right-left">
                        <img src="/prj_test/public/images/JBL_E55BT_KEY_BLACK_6175_FS_x1-1605x1605px.png" alt="">
                    </div>
                </div>
                <!-- end slide item -->
                <!-- slide item -->
                <div class="slide">
                    <div class="info">
                        <div class="info-content">
                            <h3 class="top-down">
                                JBL JR 310BT
                            </h3>
                            <h2 class="top-down trans-delay-0-2">
                                Consectetur Elit
                            </h2>
                            <p class="top-down trans-delay-0-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo aut fugiat, libero magnam nemo inventore in tempora beatae officiis temporibus odit deserunt molestiae amet quam, asperiores, iure recusandae nulla labore!
                            </p>
                            <div class="top-down trans-delay-0-6">
                                <button class="btn-flat btn-hover">
                                    <span>shop now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="img left-right">
                        <img src="/prj_test/public/images/JBL_JR 310BT_Product Image_Hero_Skyblue.png" alt="">
                    </div>
                </div>
                <!-- end slide item -->
            </div>
            <!-- slider controller -->
            <button class="slide-controll slide-next">
                <i class='bx bxs-chevron-right'></i>
            </button>
            <button class="slide-controll slide-prev">
                <i class='bx bxs-chevron-left'></i>
            </button>
            <!-- end slider controller -->
        </div>
    </div>
    <!-- end hero section -->

    <!-- promotion section -->
    <div class="promotion">
        <div class="row">
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>Headphone & Earbuds</h3>
                        <button class="btn-flat btn-hover"><span>shop collection</span></button>
                    </div>
                    <img src=".http://localhost/prj_testpublic/images/JBLHorizon_001_dvHAMaster.png" alt="">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>JBL Quantum Series</h3>
                        <button class="btn-flat btn-hover"><span>shop collection</span></button>
                    </div>
                    <img src="/prj_test/public/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
                </div>
            </div>
            <div class="col-4 col-md-12 col-sm-12">
                <div class="promotion-box">
                    <div class="text">
                        <h3>True Wireless Earbuds</h3>
                        <button class="btn-flat btn-hover"><span>shop collection</span></button>
                    </div>
                    <img src="/prj_test/public/images/JBL_TUNE220TWS_ProductImage_Pink_ChargingCaseOpen.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end promotion section -->

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>Latest product</h2>
            </div>
            <div class="row" id="latest-products">
            <?php if(isset($data["list"])){
                while($row = mysqli_fetch_array($data["list"])){
                echo '<div class="col-3 col-md-6 col-sm-12">
                <a href = "/prj_test/Product/detail/'.$row["id"].'">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="'. substr($row["img"],15).'" alt="">
                            <img src="/prj_test/public/images/JBL_Quantum_400_Product Image_Hero Mic Up.webp" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">shop now</button>
                                <button class="success">
                                    <button class="btn-flat btn-hover btn-cart-add ">
                                        <i class="bx bxs-cart-add"></i>
                                    </button>
                                    
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add ">
                                    <i class="bx bxs-heart"></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                '.$row["name"].'
                            </div>
                            <div class="product-card-price">
                                
                                <span class="curr-price">'.$row["price"].'</span>
                            </div>
                        </div>
                    </div>
                   
                </a>
                </div>';
                }
                };?>
                
                
              
                
            </div>
            <div class="section-footer">
                <a href="/prj_test/mvc/views/products.php" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div>
    <!-- end product list -->

    <!-- special product -->
    <div class="bg-second">
        <div class="section container">
            <div class="row">
                <div class="col-4 col-md-4">
                    <div class="sp-item-img">
                        <img src="/prj_test/public/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="sp-item-info">
                        <div class="sp-item-name">JBL TUNE 750TNC</div>
                        <p class="sp-item-description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore dignissimos itaque et eaque quod harum vero autem? Reprehenderit enim non voluptate! Qui provident modi est non eius ratione, debitis iure.
                        </p>
                        <button class="btn-flat btn-hover">shop now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end special product -->

    <!-- product list -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>best selling</h2>
            </div>
            <div class="row" id="best-products">
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="product-card">
                        <div class="product-card-img">
                            <img src="/prj_test/public/images/JBL_Quantum_400_Product Image_Hero 02.png" alt="">
                            <img src="/prj_test/public/images/JBL_Quantum_400_Product Image_Hero Mic Up.webp" alt="">
                        </div>
                        <div class="product-card-info">
                            <div class="product-btn">
                                <button class="btn-flat btn-hover btn-shop-now">shop now</button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-cart-add'></i>
                                </button>
                                <button class="btn-flat btn-hover btn-cart-add">
                                    <i class='bx bxs-heart'></i>
                                </button>
                            </div>
                            <div class="product-card-name">
                                JBL Quantum 400
                            </div>
                            <div class="product-card-price">
                                <span><del>$300</del></span>
                                <span class="curr-price">$200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-footer">
                <a href="/prj_test/mvc/views/products.php" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div>
    <!-- end product list -->

    <!-- blogs -->
    <div class="section">
        <div class="container">
            <div class="section-header">
                <h2>latest blog</h2>
            </div>
            <div class="blog">
                <div class="blog-img">
                    <img src="/prj_test/public/images/JBL_Quantum400_Lifestyle1.png" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover">read more</button>
                </div>
            </div>
            <div class="blog row-revere">
                <div class="blog-img">
                    <img src="/prj_test/public/images/JBL_TUNE220TWS_Lifestyle_black.png" alt="">
                </div>
                <div class="blog-info">
                    <div class="blog-title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="blog-preview">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi, eligendi dolore. Sapiente omnis numquam mollitia asperiores animi, veritatis sint illo magnam, voluptatum labore, quam ducimus! Nisi doloremque praesentium laudantium repellat.
                    </div>
                    <button class="btn-flat btn-hover">read more</button>
                </div>
            </div>
            <div class="section-footer">
                <a href="#" class="btn-flat btn-hover">view all</a>
            </div>
        </div>
    </div>
    <!-- end blogs -->

    <!-- footer -->
    <footer class="bg-second">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">Products</h3>
                    <ul class="menu">
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">product help</a></li>
                        <li><a href="#">warranty</a></li>
                        <li><a href="#">order status</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">services</h3>
                    <ul class="menu">
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">product help</a></li>
                        <li><a href="#">warranty</a></li>
                        <li><a href="#">order status</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6">
                    <h3 class="footer-head">support</h3>
                    <ul class="menu">
                        <li><a href="#">Help center</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">product help</a></li>
                        <li><a href="#">warranty</a></li>
                        <li><a href="#">order status</a></li>
                    </ul>
                </div>
                <div class="col-3 col-md-6 col-sm-12">
                    <div class="contact">
                        <h3 class="contact-header">
                            ATShop
                        </h3>
                        <ul class="contact-socials">
                            <li><a href="#">
                                    <i class='bx bxl-facebook-circle'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-youtube'></i>
                                </a></li>
                            <li><a href="#">
                                    <i class='bx bxl-twitter'></i>
                                </a></li>
                        </ul>
                    </div>
                    <div class="subscribe">
                        <input type="email" placeholder="ENTER YOUR EMAIL">
                        <button>subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <div id="toasts"></div>
    
    <!-- app js -->
    <script src="/prj_test/public/resources/lib/jquery-3.6.0.min.js"></script>
    <script src="/prj_test/public/js/app.js"></script>
    <script src="/prj_test/public/js/index.js"></script>
    <script src="/prj_test/public/js/regis.js"></script>
    <script src="/prj_test/public/js/toast.js"></script>
</body>

</html>