<html>
<head>
<title>Create Table</title>
</head>
<body>

<?php 
try{
$server = 'localhost';
$user = 'root';
$pass = '';
$mydb = 'mysql';
$table_name = 'products';
$connect = mysqli_connect($server, $user, $pass);
$desc = $_GET["desc"];
$cost = intval($_GET["cost"]);
$num =intval($_GET["num"]);
$weight =intval($_GET["weight"]);
if (!$connect) {
    
    die ("Cannot connect to $server using $user");
} else {
    $sql = "SELECT * from $table_name";
   
    mysqli_select_db($connect,$mydb);
    if (mysqli_query($connect, $sql)) {
        $result = mysqli_query($connect, $sql);
        
     //    Return the number of rows in result set
        $rowcount = mysqli_num_rows( $result );
    
        
    }
   
    $SQLcmd = "INSERT INTO $table_name (Product_desc, Cost, Weight, Numb) VALUES ('{$desc}','{$cost}','{$weight}','{$num}');";
 
    
    
    if (!mysqli_query($connect,$SQLcmd)){
        print "hello";
        die ("Table Create Creation Failed SQLcmd=$SQLcmd");
       
        
    } else {
        print "<br>SQLcmd=$SQLcmd";
        
    }
    print "hello";
    mysqli_close($connect);
}
}catch(Exception $ex){
       
}
?>
</body>
</html> 