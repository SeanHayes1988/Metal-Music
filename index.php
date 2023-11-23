
<html>
   <head>
      <title>Connect to MariaDB Server</title>
        <link rel="stylesheet" type="text/css" href="border.css" />
      
   </head>

   <body>
      <?php

      /*if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
      $uri = 'https://';
   } else {
      $uri = 'http://';
   }
   $uri .= $_SERVER['HTTP_HOST'];
   header('Location: '.$uri.'/dashboard/');
   exit;*/

         $dbhost = 'localhost';
         $dbuser = 'sean';
         $dbpass = 'metalislife';
         $db     = "metal_music";
         $conn   = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
      
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         
         //echo 'Connected successfully';
      ?>

     

         <table border="" align="center">
         <tr>
         <td>Genre Name</td>
         <td>Date of Origin</td>
         </tr>

        <?php

         $query = mysqli_query($conn, "SELECT * FROM genres")
            or die (mysqli_error( $conn));

             echo'<a href="genres.html"><b> HOME</b> </a>';


               while ($row = mysqli_fetch_array($query)) {
                  echo
                  "<tr>
                  <td>{$row['genre_name']}</td>
                  <td>{$row['date_of_origin']}</td>
                  </tr\n>";
               }

         mysqli_close($conn);

      ?>
   </body>
</html>
