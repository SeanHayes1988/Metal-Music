<?php
         $dbhost = 'localhost';
         $dbuser = 'sean';
         $dbpass = 'metalislife';
         $db     = "metal_music";

         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
      
         if($conn ->connect_error)  
         {
            die("Could not connect: " . $conn->connect_error);
         }

         if(isset($_POST['add_genre'])) 
         {
          $genre_name       =    $_POST['genre_name'];
          $date_of_origin   =    $_POST['date_of_origin'];

     
          $query = "INSERT INTO genres (genre_name, date_of_origin)
                     VALUES ('$genre_name', '$date_of_origin')";
        }

         if (!mysqli_query($conn, $query)) 
         {
          die('An error occurred. Your review has not been submitted.');
        } 
        else {
      echo "Thanks for your review.";
    }



?>
