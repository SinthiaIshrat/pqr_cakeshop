<?php
//session_start(); 
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="" href="css/styles.css">
    <link rel="stylesheet" type="" href="css/styles_new.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
include "components/options.php";
include "components/logo.php";
include "components/nav.php";
// include "components/logo2.php";
?>
<!--<div class="logo">
    <img src="images/SugarSparkles.png" alt="">
</div>-->
<!-- <br> -->
<!-- ------------------------------------------- Nav bar ----------------------------------------- -->
<!--<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#Menu">Menu</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#3D">3D</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#Order">Order</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active" aria-current="page" href="#Notify">Notify</a>
  </li>
  <li class="nav-item">
  <?php 
    // $count=0;
    // if (isset($_SESSION['cart'])) {
    //     $count=count($_SESSION['cart']);
    // }
  ?>  
  <a class="btn btn-outline-success" aria-current="page" href="mycart.php">Cart (<?php echo $count; ?>)</a>
  </li>
</ul> -->
<!-- <br>
<br>
<div class="logo2">
    <img src="images/SugerSparklesCover.png" alt="">
</div>
<br>
<br> -->

<!-- ---------------------------------------------- 3 cards -------------------------------------------- -->
<section class="container my-5">
            <div class="overflow-hidden text-center">
                <div class="row gy-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="p-3 border bg-warning d-flex align-items-center justify-content-between rounded-5">
                            <h1 class="text-white">Cakes</h1>
                            <img width="90px" src="images/Cakes.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-3 border bg-success d-flex align-items-center justify-content-between rounded-5">
                            <h1 class="text-white">Pastry</h1>
                            <img width="90px" src="images/Pastry.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="p-3 border bg-info d-flex align-items-center justify-content-between rounded-5">
                            <h1 class="text-white">Desserts</h1>
                            <img width="90px" src="images/Desserts.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <!-- -------------------------------------------- Menu ---------------------------------------- -->

<?php

    include "components/menu.php";
?>
<br>
<br>
<br>
<!-- ------------------------------------------------- 3D view --------------------------------------- -->
 <div class="links"  id="3D">
    <h1>3D cake view</h1>
</div>
    <br>
<div class="Animate">
<br>
    <h2>Chocolate cake:</h2>
    <div class="sketchfab-embed-wrapper"> <iframe title="Chocolate Gateau" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/2b74dca897f146ee84de66bbe4a8470d/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/chocolate-gateau-2b74dca897f146ee84de66bbe4a8470d?utm_medium=embed&utm_campaign=share-popup&utm_content=2b74dca897f146ee84de66bbe4a8470d" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;">  </a> <a href="https://sketchfab.com/Viscom_Cakesburg?utm_medium=embed&utm_campaign=share-popup&utm_content=2b74dca897f146ee84de66bbe4a8470d" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a>  <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=2b74dca897f146ee84de66bbe4a8470d" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"></a></p></div>
    <br>
    <h2>Strawberry cake:</h2>
    <div class="sketchfab-embed-wrapper"> <iframe title="Heart-shaped cake" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/9b22fc3dce074a8bae410a674a07d229/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/heart-shaped-cake-9b22fc3dce074a8bae410a674a07d229?utm_medium=embed&utm_campaign=share-popup&utm_content=9b22fc3dce074a8bae410a674a07d229" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com/pan_stasian?utm_medium=embed&utm_campaign=share-popup&utm_content=9b22fc3dce074a8bae410a674a07d229" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=9b22fc3dce074a8bae410a674a07d229" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"></a></p></div>
    <br>
    <h2>Rich Berry cake:</h2>
    <div class="sketchfab-embed-wrapper"> <iframe title="Rich Berry Cake" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/018a1c8a97de4a2f8621314cc5a74147/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/rich-berry-cake-018a1c8a97de4a2f8621314cc5a74147?utm_medium=embed&utm_campaign=share-popup&utm_content=018a1c8a97de4a2f8621314cc5a74147" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com/f3dorov?utm_medium=embed&utm_campaign=share-popup&utm_content=018a1c8a97de4a2f8621314cc5a74147" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=018a1c8a97de4a2f8621314cc5a74147" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"></a></p></div>
    <br>
    <h2>Chocolate Cupcake:</h2>
    <div class="sketchfab-embed-wrapper"> <iframe title="Valentine Cupcake with Cherries" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/30f3e389f9644d518c2fdad0ca5aece7/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/valentine-cupcake-with-cherries-30f3e389f9644d518c2fdad0ca5aece7?utm_medium=embed&utm_campaign=share-popup&utm_content=30f3e389f9644d518c2fdad0ca5aece7" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com/KarynaTrychyk?utm_medium=embed&utm_campaign=share-popup&utm_content=30f3e389f9644d518c2fdad0ca5aece7" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=30f3e389f9644d518c2fdad0ca5aece7" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"></a></p></div>
    <br>
    <h2>Donut Cupcake:</h2>
    <div class="sketchfab-embed-wrapper"> <iframe title="Donut Cupcakes (#SketchfabWeeklyChallenge)" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/18fec1c442ef422395fd60e3ab3b8b4f/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/donut-cupcakes-sketchfabweeklychallenge-18fec1c442ef422395fd60e3ab3b8b4f?utm_medium=embed&utm_campaign=share-popup&utm_content=18fec1c442ef422395fd60e3ab3b8b4f" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com/RafaelBR873D?utm_medium=embed&utm_campaign=share-popup&utm_content=18fec1c442ef422395fd60e3ab3b8b4f" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=18fec1c442ef422395fd60e3ab3b8b4f" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"></a></p></div>
    <br>
    <h2>Chocolate Pastry:</h2>
    <div class="sketchfab-embed-wrapper"> <iframe title="A Slice Of Chocolate Gateau" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/7aa1d48475374002bf914c5c243ea7eb/embed"> </iframe> <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;"> <a href="https://sketchfab.com/3d-models/a-slice-of-chocolate-gateau-7aa1d48475374002bf914c5c243ea7eb?utm_medium=embed&utm_campaign=share-popup&utm_content=7aa1d48475374002bf914c5c243ea7eb" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com/Viscom_Cakesburg?utm_medium=embed&utm_campaign=share-popup&utm_content=7aa1d48475374002bf914c5c243ea7eb" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"> </a> <a href="https://sketchfab.com?utm_medium=embed&utm_campaign=share-popup&utm_content=7aa1d48475374002bf914c5c243ea7eb" target="_blank" rel="nofollow" style="font-weight: bold; color: #1CAAD9;"></a></p></div>
    <br>
    
</div>
</div> 
<br><br>
<div class="links"  id="Order">
        <!-- <h1>Order</h1> -->
</div>
<!-- <form action="dborders.php" method="POST" enctype="multipart/form-data" id="orderForm">
    <h2>SugarSparkles</h2>
    <label>Customer Name :</label>
    <input type="text" name="customername" placeholder="Name"><br>
    <br>
    <label>Line on top :</label>
    <input type="text" name="line" placeholder="Line"><br>
    <br>
    <label>Upload your design :</label>
    <input type="file" name="file">
    <br>
    <label>Describe your design :</label>
    <textarea name="details"></textarea>
    <br> 
    <label>Flavour :</label>
    <select name="flavour">
        <option value="Vanilla">Vanilla</option>
        <option value="Chocolate">Chocolate</option>
        <option value="Butterscotch">Butterscotch</option>
        <option value="Rashmalai">Rashmalai</option>
        <option value="Strawberry">Strawberry</option>
        <option value="Blueberry">Blueberry</option>
        <option value="Mango">Mango</option>
        <option value="Lemon">Lemon</option>
    </select>
    <br>
    <label>Contact : </label>
    <input type="number" name="contact" placeholder="Contact"><br>
    <br>
    <br>
    <button class="ABC" type="submit" name="submit"> <i class="fa-solid fa-right-to-bracket fa-fade" style="color: #ffffff;"></i>   Submit</button>
</form> -->

<?php

        // include "components/orderform.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>