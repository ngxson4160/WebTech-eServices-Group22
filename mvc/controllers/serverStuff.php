<?php 
if(isset($_POST["searchSubmit"])) {
    $list=null;
    $name = $_POST["search'"];
  
 
    $mysqli = new mysqli("localhost","root","","web_service");

    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit(); 
    }
    
    $query = "SELECT * from product where LOWER(name) LIKE '%$name%'";
    // $result = $mysqli-> query($query);
    if ($result = $mysqli -> query($query)) {
      while ($row = $result -> fetch_row()) {
        echo 
        '<div class="col-4 col-md-6 col-sm-12">
        <div class="product-card">
            <div class="product-card-img">
                <img src="http://localhost/prj_test/public/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
                <img src="http://localhost/prj_test/public/images/kisspng-beats-electronics-headphones-apple-beats-studio-red-headphones.png" alt="">
            </div>
            <div class="product-card-info">
                <div class="product-btn">
                    <a href="./product-detail.html" class="btn-flat btn-hover btn-shop-now">shop now</a>
                    <button class="btn-flat btn-hover btn-cart-add">
                        <i class="bx bxs-cart-add"></i>
                    </button>
                    <button class="btn-flat btn-hover btn-cart-add">
                        <i class="bx bxs-heart"></i>
                    </button>
                </div>
                <div class="product-card-name">'
                    . $row[1].'
                </div>
                <div class="product-card-price">
                    
                    <span class="curr-price">'. $row[3]. 'VND</span>
                </div>
            </div>
        </div>
</div>'
                   ;
      }
      $result -> free_result();
    }
    
    $mysqli -> close();

}

?>