<?php
require('db.php');
require('uploaddata.php');
//require('function.php');
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
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
   <body>

<div class="container">
   <a href="index.php" id="go-home">← Go back to Home</a>
</div>

<div class="container" id="form-parent">
   
<form action="uploaddata.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <input type="text" class="form-control" id="title" name="title" placeholder="Blog Title" required>
  </div>
    <div class="form-group">
    <input type="file"  class="form-control hero-img" id="file" name="file">
  </div> 
      <div class="form-group">
    <input type="text" class="form-control" id="subhead" name="subhead" placeholder="SubHeading" required>
  </div>
  <div class="form-group">
    <textarea id="body" name="body" rows="8" cols="50" class="form-control" placeholder="Blog Content" required></textarea>
  </div>
<div>
  <button type="submit" id="publish-btn" class="btn" name="submit">Publish</button>
</div>
</form>

</div>

   </body>
</html>	