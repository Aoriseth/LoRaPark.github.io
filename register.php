<?php
$name = $_POST['UserName'];
$passwd = $_POST['Password'];
$passwd2 = $_POST['Password2'];
$con = mysql_connect("localhost","TestAcc","test");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $con);

if($passwd == $passwd2)
{
    $sql="INSERT INTO user ( UserName, Password)
   VALUES
   ('$name','$passwd')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
    echo "Register successful";
}
else{
    echo "please type the Same password";
}



mysql_close($con);

