<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../../public/css/style.css">  
<div class="container">
    <h2>Responsive Tables Using LI <small>Triggers on 767px</small></h2>
    <ul class="responsive-table">
      <li class="table-header">
        <div class="col col-1 title">Name</div>
        <div class="col col-2 title">Describe</div>
        <div class="col col-3 title">Price</div>
        <div class="col col-4 title">Image</div>
        <div class="col col-5 title title_1">Action</div>
      </li>
      <li class="table-row">
        <div class="col col-1" data-label="Name">42235</div>
        <div class="col col-2" data-label="Describe">John Doe</div>
        <div class="col col-3" data-label="Price">$350</div>
        <div class="col col-4" data-label="Image">Pending</div>
        <div class="col col-5" data-label="Action">
          <a href="javascript:void(0)" onclick="deleteEntry(this)" class="btn btn-sm btn-link" data-button-type="delete"><i class="la la-trash"></i> Delete</a>
          <a href="form.html" class="btn btn-sm btn-link"><i class="la la-edit"></i> Edit</a>
        </div>
      </li>
      <li class="table-row">
        <div class="col col-1" data-label="Name">42235</div>
        <div class="col col-2" data-label="Describe">John Doe</div>
        <div class="col col-3" data-label="Price">$350</div>
        <div class="col col-4" data-label="Image">Pending</div>
        <div class="col col-5" data-label="Action">
          <a href="javascript:void(0)" onclick="deleteEntry(this)" class="btn btn-sm btn-link" data-button-type="delete"><i class="la la-trash"></i> Delete</a>
          <a href="form.html" class="btn btn-sm btn-link"><i class="la la-edit"></i> Edit</a>
        </div>
      </li><li class="table-row">
        <div class="col col-1" data-label="Name">42235</div>
        <div class="col col-2" data-label="Describe">John Doe</div>
        <div class="col col-3" data-label="Price">$350</div>
        <div class="col col-4" data-label="Image">Pending</div>
        <div class="col col-5" data-label="Action">
          <a href="javascript:void(0)" onclick="deleteEntry(this)" class="btn btn-sm btn-link" data-button-type="delete"><i class="la la-trash"></i> Delete</a>
          <a href="form.html" class="btn btn-sm btn-link"><i class="la la-edit"></i> Edit</a>
        </div>
      </li><li class="table-row">
        <div class="col col-1" data-label="Name">42235</div>
        <div class="col col-2" data-label="Describe">John Doe</div>
        <div class="col col-3" data-label="Price">$350</div>
        <div class="col col-4" data-label="Image">Pending</div>
        <div class="col col-5" data-label="Action">
          <a href="javascript:void(0)" onclick="deleteEntry(this)" class="btn btn-sm btn-link" data-button-type="delete"><i class="la la-trash"></i> Delete</a>
          <a href="form.html" class="btn btn-sm btn-link"><i class="la la-edit"></i> Edit</a>
        </div>
      </li>
    </ul>
  </div>
</html>