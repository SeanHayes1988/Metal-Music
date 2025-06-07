<?php
# Include script to make a database connection
include("database.php");
include("menuBar.html");
# Empty string to be used later
$genre_name='';
$monthV='';
$yearV='';
$place_of_origin='';
$notable_bands='';
$comments='';

# Button click to update using POST method
if(!empty($_POST['update']) && !empty($_POST['genre_name']) )  {
  $genre_name=$_POST['genre_name'];
  # Fetch record with genre_name and populate it in the form
  $query= "SELECT * FROM genres WHERE genre_name='".$_POST['genre_name']."' ";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    # Output data for each row
    while($row = $result->fetch_assoc()) {
      $genre_name =$row["genre_name"];
      $monthV=$row["monthV"];
      $yearV=$row["yearV"];
      $place_of_origin=$row["place_of_origin"];
      $notable_bands = $row["notable_bands"];
      $comments= $row["comments"];
    }
    echo "Current Details: " ."<b> - Month Of Origin:</b> " . $monthV. " <b>Year of Origin:</b>" . $yearV. "<b>Place Of Origin:</b>" . $place_of_origin. " 
    <b> Notable Bands:</b>" . $notable_bands . "<b> Comments</b>". $comments. "<br>";
  } else {
    echo "Error updating";
  }
}

# Check that the input fields are not empty and process the data
if(!empty($_POST['genre_name']) && !empty($_POST['monthV']) && !empty($_POST['place_of_origin']) ){
    # Insert into the database
  $query = "UPDATE genres  SET monthV ='$momthV' WHERE genre_name='".$_POST['genre_name']."' ";
  if (mysqli_query($conn, $query)) {
      echo "Record updated successfully!<br/>";
      echo '<a href="homeG.php">Get Form</a><br/>
            <a href="HomeP.php">Post Form</a>';
      die(0);
  } else {
      # Display an error message if unable to update the record
       echo "Error updating record: " . $conn->error;
       die(0);
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Genre Details </title>
</head>
<body>
    <h1>Form</h1>
    <p>Edit the record</p>
    <form method="POST" action="editGenres.php">
      <input type="hidden" name="genre_name" value="<?php echo $genre_name ?>">
        Month of Origin: <input type="text" name="monthV" value="<?php echo($monthV); ?>"><br><br/>
        Year of Origin: <input type="text" name="yearV" value="<?php echo($yearV); ?>"><br/>

        <!--
        Place(s) of Origin:<textarea rows='5' cols='20' name='place_of_origin' wrap='physical'>  <?php echo($place_of_origin);?></textarea>
        Notable Bands <textarea rows='5' cols='20' name='notable_bands' wrap='physical'>  <?php echo($notable_bands);?></textarea>
        Comments <textarea rows='5' cols='20' name='comments' wrap='physical'>  <?php echo($comments);?></textarea>
        <br/>-->
        <input type="submit" value="update">
    </form>
</body>
</html>