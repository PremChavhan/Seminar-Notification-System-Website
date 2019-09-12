

<?php
$s_host="remotemysql.com";
$s_user="3v1YqpRRgB";
$s_pword="hOsOv01V8O";
$s_db="3v1YqpRRgB";

$conn = new mysqli($s_host,$s_user,$s_pword,$s_db);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully \n";

 
 mysqli_select_db($s_db,$conn);
 echo "trying 3";
 echo  $_REQUEST['Email'];
 //echo "\n";
 echo "trying 1";
 $data= $_REQUEST['Email'];
 echo "trying 2";
 

 $sql="INSERT INTO newsletter(Email) 
        VALUES($data)";
 
 if (mysqli_query($sql))

   {
       echo "Success";

  
   }
   else
   {

echo "1 record added";
}

 

mysqli_close($conn)

?>

