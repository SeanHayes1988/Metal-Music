<?php
         $dbhost = 'localhost';
         $dbuser = 'sean';
         $dbpass = 'metalislife';
         $db = "metal_music";

         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
      
         if($conn ->connect_error)  
         {
            die("Could not connect: " . $conn->connect_error);
         }

         if(isset($_POST['submit'])) 
         {
          $genre_name=$_POST['genre_name'];
     
          $query = "INSERT INTO genres (genre_name) 
          VALUES ('$genre_name')";
        }

         if (!mysqli_query($conn, $query)) 
         {
          die('An error occurred. Your review has not been submitted.');
        } 
        else {
      echo "Thanks for your review.";
    }



?>
