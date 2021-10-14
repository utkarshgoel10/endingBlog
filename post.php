<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<title>ending</title>
	<link rel="stylesheet" type="text/css" href="blogcss.css">
	<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>


<!---------------------------------------------------- NAVBAR --------------------------------------------------->

<nav class="navbar navbar-expand-lg">
   <div class="container" style="position: relative; top: 5px">
      <a class="navbar-brand" href="index.php">
      <img src="media/logo.png" height="30.17px" width="auto" style="position: relative; top: -2px;" alt="">
      </a>
      <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
         <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
               <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Products</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Jobs</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               More
               </a>
               <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  </div> -->
            </li>
         </ul>
         <a class="navbar-brand" href="#">
         <img src="media/gplay.png" height="40px" width="auto">
         </a>
         <a class="navbar-brand" href="#">
         <img src="media/applestore.png" height="40px" width="auto">
         </a>
      </div>
   </div>
</nav>
<hr>

<!-------------------------------------------- BLOG CONTENT  --------------------------------------------->
      
<div class="container">
      <?php
         $post_id = $_GET['id'];
         $postQuery = "SELECT * FROM posts WHERE id=$post_id";
         $runPQ = mysqli_query($db,$postQuery);
         $post = mysqli_fetch_assoc($runPQ);
      ?>

   <div style="margin-top: 83px">
      <h4 class="h4class">
         <?=$post['title']?>
      </h4>
   </div>
   <div style="margin-top: 10px">
      <h6 class="h6class">
         <?=$post['subheading']?>
      </h6>
   </div>
   <div class="for-cover-photo" style="margin-top: 24px">
      <img src="media/cover.png">
   </div>
   <div style="margin-top: 71px;">
      <p class="content-p"><?=$post['body']?></p>
   </div>
</div>

<!------------------------------------------------------- Footer -------------------------------------------->

<footer class="footer" id="blogpg-footer">
   <div class="container">
      <div class="col-lg-8" style="float: left;">
         <div class="foot-logo" style="margin-top: 50px;">
            <img src="media/company-logo.png" height="30px" width="auto">
         </div>
         <div class="foot-line1" style="margin-top: 30px;">
            <a href="#" style="order: 0;">Download Now</a>
            <a href="#" style="order: 1; padding-left: 24px;">License</a>
         </div>
         <div class="foot-line2" style="margin-top: 20px">
            <a href="#" style="order: 0;">About</a>
            <a href="#" style="order: 1; padding-left: 22px;">Features</a>
            <a href="#" style="order: 2; padding-left: 22px;">Pricing</a>
            <a href="#" style="order: 3; padding-left: 22px;">Careers</a>
            <a href="#" style="order: 4; padding-left: 22px;">Help</a>
            <a href="#" style="order: 5; padding-left: 22px;">Privacy Policy</a>
         </div>
         <div class="foot-line3">
            <p>© 2021. All rights reserved</p>
         </div>
      </div>
      <div class="col-lg-4" style="margin-left: 80%;">
         <div style="padding-top: 50px;">
            <p class="get-app">Get the App</p>
         </div>
         <div style="padding-top: 12px;">
            <a href="#">
            <img src="media/applestore.png" height="40px" width="auto">
            </a>
         </div>
         <div style="padding-top: 12px;">
            <a href="#">
            <img src="media/gplay.png" height="40px" width="auto">
            </a>
         </div>
      </div>
   </div>
</footer>


</body>
</html>
