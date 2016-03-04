<?php
$name = $_POST['UserName'];
$passwd = $_POST['Password'];
$con = mysql_connect("localhost","TestAcc","test");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test", $con);
$sql = "SELECT * FROM user";
$result = mysql_query($sql);
$column = mysql_fetch_array($result);

if($name == "")
{
     
     echo"<script type='text/javascript'>alert('Enter username');location='login.php';  
            </script>";  
}elseif($passwd == "")
{
    
     echo"<script type='text/javascript'>alert('Enter password');location='login.php';  
            </script>";   
}
else
{
    if(($column['UserName'] == $name)&&($column['Password'] == $passwd))
    {
         echo"<script type='text/javascript'>alert('loginSuccessful');location='http://lorapark.github.io/';</script>";
    }
    else
    {
      
         echo"<script type='text/javascript'>alert('Wrong password');location='login.php';  
            </script>";  
    }
}



mysql_close($con);
