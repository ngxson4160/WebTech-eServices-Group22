<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="http://localhost/prj_test/public/css/style.css">  
<link rel="stylesheet" type="text/css" href="http://localhost/prj_test/public/css/form.css">  
<div class="container">
  <div class="container">
    <h2> Quản lý sản phẩm </h2>
    <form method="POST" action = "/prj_test/Register/create">
    <button class="button1"> Thêm sản phẩm </button>
    </form>
  </div>
    
    <ul class="responsive-table">
      <li class="table-header">
          <div class="col col-1 title">Name</div>
          <div class="col col-2 title">Describe</div>
          <div class="col col-3 title">Price</div>
          <div class="col col-4 title">Image</div>
          <div class="col col-5 title title_1">Action</div>
        </li>
    <?php 
      if(isset($data["list"])){
        while($row = mysqli_fetch_array($data["list"])){
          echo  '<li class="table-row">
                <div class="col col-1" data-label="Name">'.$row["name"].'</div>
                <div class="col col-2" data-label="Describe">'.$row["descriptions"].'</div>
                <div class="col col-3" data-label="Price">'.$row["price"].'</div>
                <div class="product-card-img">
                            <img src="'. substr($row["img"],15).'" alt="" style="height: 100px; width: 100px">
                            <img src="/prj_test/public/images/JBL_Quantum_400_Product Image_Hero Mic Up.webp" alt="">
                        </div>
                <div class="col col-5" data-label="Action">
                  <a href="http://localhost/prj_test/Product/delete/'.$row["id"].' class="btn btn-sm btn-link" data-button-type="delete"><i class="la la-trash"></i> Delete</a>
                  <a href="form.html" class="btn btn-sm btn-link"><i class="la la-edit"></i> Edit</a>
                </div>
                </li>';
        }
      }
        
    ?>
    </ul>
  </div>
</html>