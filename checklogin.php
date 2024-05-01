<?php
   $mail = $_GET["mail"];
   $password = $_GET["pass"];
   $db =  mysqli_connect("127.0.0.1", "root" , "", "cakeshop_db");
   $x = "SELECT * FROM `users` WHERE mail='$mail' and password='$password'";
   $result = $db->query($x);
   

   if( $result->num_rows > 0){
	  if(isset($_GET["remember"])){
       setcookie("is_login",true, time()+ 600);
	  }
      else{
       setcookie("is_login",true, time()+ 20);
	  }		  
	  setcookie("user", $mail, time()+600);  
	  header("Location:view_products.php");
   }
   else{
	   setcookie("login_error","Username and
	   password doesnt match", time()+ 600 );
	   header("Location:login.php");   
   }

