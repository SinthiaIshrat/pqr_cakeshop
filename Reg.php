<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   <style>
form {
   border: 2px solid #ccc;
	padding: 10px;
	background: pink;
	border-radius: 15px;
   margin: auto;
   width: 50%;
   text-align: center;
}
h1{
   width: 50%;
   margin: auto;
   padding: 10px;
   text-align: center;
}
.btn{
border-radius: 12px;
transition-duration: 0.4s;
background color: #ff00bb;
border: none;
color: black;
padding: 16px 20px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
}
</style>
</head>
<body>
<?php
include "components/options.php";
?>
<div class="form">
<h1>Registration</h1>
<form method="post" action="adduser.php">
<h3>Username :</h3> <input name="username" placeholder="username">
<h3>Mail :</h3> <input name="mail"  placeholder="mail">
<h3>Password :</h3> <input type="password" name="pass"  placeholder="password">


<br><br>
<button class="panda-btn">Registration</button>
<br>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>