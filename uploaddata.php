<?php
require('db.php');
// require('upload.php');
error_reporting(E_ERROR | E_PARSE);

$targetDir = "uploads/";
$fileName = basename($_FILES['file']['name']);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST['submit'])){

  //INSERTING CNTNT, SUBHEAD, HEAD
  $title = $_POST['title'];
  $subhead = $_POST['subhead'];
  $body = $_POST['body'];
  $file = $_FILES['file'];

  // $filename = $file['name'];
  // $filepath = $file['tmp_name'];
  $fileerror = $file['error'];

  if($fileerror == 0){

  	// $destfile = 'upload/'.$filename;
  	// move_uploaded_file($filepath, $destfile);
  	move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);


  	$insertquery = "INSERT INTO posts(title, subheading, body, image) values('$title', '$subhead', '$body','$targetFilePath')";
 	$query = mysqli_query($db, $insertquery);


 	if($query){
 		?>    <script type="text/javascript">alert('Successfull');</script>    <?php
 	}else{
 		?>    <script type="text/javascript">alert('Error uploading files.');</script>    <?php
 	}

  }


    ?>
<script type="text/javascript">
window.location = "index.php";
</script>      
    <?php
// print_r($file);
}

?>
