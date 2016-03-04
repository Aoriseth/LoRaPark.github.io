<!DOCTYPE>
<html>
    <head> 
        <title>LogIn</title>
    </head>
<style type="text/css">  
    .div  
    {  
        height:1000px;  
        width:700px;  
        text-align:center;  
        margin:40px;  
          
    }  
    .title
    {
         color:rgb(212,244,23);
         text-indent:290px;
    }
    .text  
    {  
        font-size:20px;  
        margin:20px;  
          
    }  
    .button  
    {  
        font-size:10px;  
          
    }  
   </style>  
   <script type =text/javascript>
       
       function register(){
           window.location.href = 'Interface.php';
       }
       
       
       </script>
     
<body>   
   
<h1> <div class ="title">PlEASE LOG IN </div></h1> 

<form action="check.php" method="post">
    <div class="div">  
        <div class="text">  
        UserName: <input type="text" name="UserName" /></div>
        <div class="text"> 
        Password: <input type="password" name="Password" /></div>
    <div class="div">  
    <div class="button">
        <input type="submit" value="login" />
        <input type="button" name ="Register" value="Register" onclick="register()" /></div>
        </div>
        </div>
</form>


 

</body>
</html>
