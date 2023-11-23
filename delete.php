<!DOCTYPE html>
<html>
<head>
<title></title>

</head>
<body>

<h2>UPDATE Data Using PHP</h2>
</div>

<p>Click On Menu</p>

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

         if(isset($_GET['submit'])) 
         {
          $genre_name=$_GET['genre_name'];
          $date_of_origin=$_GET['date_of_origin'];

          $query = mysqli_query($conn, "DELETE FROM genres WHERE genre_name='$genre_name'");

        //  $query = mysqli_query($conn, "UPDATE genres SET genre_name='$genre_name', date_of_origin='$date_of_origin' WHERE genre_name='$genre_name'");
        }
        $query = mysqli_query( $conn, "SELECT * FROM genres");
        while ($row = mysqli_fetch_array($query)) {

            echo "<b><a href='delete.php?delete={$row['genre_name']}'>{$row['date_of_origin']}</a></b>";
            echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['delete'])) {
$delete = $_GET['delete'];
$query1 = mysqli_query($conn, "SELECT * FROM genres ");
while ($row1 = mysqli_fetch_array($query1)) {

echo "<form class='form' method='get'>";
echo "<h2>DELETE Form</h2>";
echo "<hr/>";
echo"<input class='input'name='genre_name' value='{$row1['genre_name']}' />";
echo "<br />";
echo "<label>" . "date_of_origin:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='date_of_origin' value='{$row1['date_of_origin']}' />";

echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='delete' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Deleted Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysqli_close($conn);
?>
</body>
</html>
