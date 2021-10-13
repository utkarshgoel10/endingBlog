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
      <link rel="stylesheet" type="text/css" href="mycss.css">
   </head>
   <body>

<!---------------------------------------------------- NAVBAR --------------------------------------------------->

<nav class="navbar navbar-expand-lg">
   <div class="container" style="position: relative; top: 5px">
      <a class="navbar-brand" href="index.php">
      <img src="logo.png" height="30.17px" width="auto" style="position: relative; top: -2px;" alt="">
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
         <img src="gplay.png" height="40px" width="auto">
         </a>
         <a class="navbar-brand" href="#">
         <img src="applestore.png" height="40px" width="auto">
         </a>
      </div>
   </div>
</nav>
<hr>

                 <!---------------------------------- Header --------------------------------------->

<div class="container">
   <h1 class="top-h1">Lorem ipsum dolor sit amet</h1>
   <div class="row">
      <div class="col-sm-6 top-content">
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc odio in et, lectus sit lorem id integer.</p>
         <a href="upload.php" style="text-decoration: none; color: inherit;"><button class="btn bttn bttn3">Publish</button></a>
      </div>
      <div class="col-sm-6">
         <img id="head-img" src="head.png" width="570px" height="auto" style="position:relative;top: -55px;">
      </div>
   </div>
</div>


<!----------------------------------------------------- BLOGS -------------------------------------------------------->

<div class="container" id="blog-section">
   <h2 id="blog-h2">Blogs</h2>
   <div id="blog-cards-parent" class="row">

      <?php
         $postQuery = "SELECT * FROM posts";
         $runPQ = mysqli_query($db,$postQuery);
         while ($post = mysqli_fetch_assoc($runPQ)){
         ?>

      <div class="col-12 col-sm-4 col-lg-4 col-xl-4 col-md-4">
         <div class="blog-cards" >
            <a href="post.php?id=<?=$post['id']?>" style="text-decoration: none;color: inherit;">
               <div class="blog-pic">
                  <img src="<?=$post['image']?>" class="phone">
               </div>
               <div>
                  <h5 class="blog-head"> <?=$post['title']?> </h5>
               </div>
                           <div>
               <p class="blog-sub"><?=$post['subheading']?></p>
            </div>
            </a>

         </div>
      </div>


      <?php
         }
         ?>



   </div>
</div>

<!-------------------------------------------------- Key Features ---------------------------------------------------->


<div class="container" id="features-div">
   <h2 id="features-head">
      Discover the key features
   </h2>
   <div class="row" style="position: relative; margin-top: 48px">
      <div class="cards-div col-12 col-sm-3 col-lg-3 col-md-3 col-xl-3" style="left: 0px;">
         <div>
            <h5 class="card-h5">Mobile <br>Responsive</h5>
         </div>
         <div>
            <img src="icon1.png" class="icon-h5">
         </div>
      </div>
      <div class="cards-div col-12 col-sm-3 col-lg-3 col-md-3 col-xl-3" style="left: 285px;">
         <div>
            <h5 class="card-h5">User <br>Friendly</h5>
         </div>
         <div>
            <img src="icon2.png" class="icon-h5">
         </div>
      </div>
      <div class="cards-div col-12 col-sm-3 col-lg-3 col-md-3 col-xl-3" style="left: 570px;">
         <div>
            <h5 class="card-h5">Well Organised Layers</h5>
         </div>
         <div>
            <img src="icon3.png" class="icon-h5">
         </div>
      </div>
      <div class="cards-div col-12 col-sm-3 col-lg-3 col-md-3 col-xl-3" style="left: 855px;">
         <div>
            <h5 class="card-h5">Easily Customisable</h5>
         </div>
         <div>
            <img src="icon4.png" class="icon-h5">
         </div>
      </div>
   </div>
   <div class="row" style="position: relative;">
      <div class="cards-div col-12 col-sm-3 col-lg-3 col-md-3 col-xl-3" style="left: 0px; top: 265px;">
         <div>
            <h5 class="card-h5">Better Components</h5>
         </div>
         <div>
            <img src="icon5.png" class="icon-h5">
         </div>
      </div>
      <div class="cards-div col-12 col-sm-3 col-lg-3 col-md-3 col-xl-3" style="left: 285px; top: 265px;">
         <div>
            <h5 class="card-h5">Multiple <br>Blocks</h5>
         </div>
         <div>
            <img src="icon6.png" class="icon-h5">
         </div>
      </div>
      <div class="cards-div col-12 col-sm-3 col-lg-3 col-md-3 col-xl-3" style="left: 570px; top: 265px;">
         <div>
            <h5 class="card-h5">Robust <br>Workflow</h5>
         </div>
         <div>
            <img src="icon7.png" class="icon-h5">
         </div>
      </div>
      <div class="cards-div col-12 col-sm-3 col-lg-3 col-md-3 col-xl-3" style="left: 855px; top: 265px;">
         <div>
            <h5 class="card-h5">Mobile <br>Responsive</h5>
         </div>
         <div>
            <img src="icon8.png" class="icon-h5">
         </div>
      </div>
   </div>
   <div class="circ-div">
      <img class="circ" src="circle.png">
   </div>
</div>

<!-------------------------------------------------- Bottom waitlist --------------------------------------->

<div class="container" style="margin-top: 225px">
   <div style="position: relative; ">
      <img src="bottom.png" style="width: 100%; display: block;margin-left: auto;margin-right: auto;height: auto;">
      <h3 class="bottom-txt" style="position: absolute; left: 480px; top: 18px;">Join 569 more people in the waitlist</h3>
      <div class="search-white" style="position: absolute; left: 480px; top: 188px;">
         <p id="search-white-txt">Your work email address</p>
      </div>
      <div class="search-black" style="position: absolute; left: 728px; top: 190px;">
         <p id="search-black-txt">Join the waitlist</p>
      </div>
   </div>
</div>

<!------------------------------------------------------- Footer -------------------------------------------->

<footer class="footer" style="margin-top: 120px;">
   <div class="container">
      <div class="col-lg-8" style="float: left;">
         <div class="foot-logo" style="margin-top: 50px;">
            <img src="company-logo.png" height="30px" width="auto">
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
            <img src="applestore.png" height="40px" width="auto">
            </a>
         </div>
         <div style="padding-top: 12px;">
            <a href="#">
            <img src="gplay.png" height="40px" width="auto">
            </a>
         </div>
      </div>
   </div>
</footer>


</body>
</html>