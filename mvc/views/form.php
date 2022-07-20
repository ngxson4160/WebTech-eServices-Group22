<link rel="stylesheet" type="text/css" href="/prj_test/public/css/form.css"> 
<form method="POST" action="/prj_test/Product/addProduct" enctype="multipart/form-data">      
    <input name="name" type="text" class="feedback-input" placeholder="Name" />   
    <input name="descriptions" type="text" class="feedback-input" placeholder="Descriptions" />
    <input name="price" type="text" class="feedback-input" placeholder="Price" />
    <input type="file" name="fileToUpload" id="fileToUpload"
    
    accept="image/png, image/jpeg"
    value="SUBMIT">
    <input type="submit" name = "submit" value="SUBMIT"/>
  </form>
  
  
  