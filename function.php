<?php

function getImagesByPost($db,$post_id){
	     $query = "SELECT * FROM images WHERE post_id=$post_id";
         $run = mysqli_query($db,$query);
         $data = array();
		 while ($d= mysqli_fetch_assoc($run)) {
		 	$data[] =$d;
		 }
		 return $data;
}


?>