<?php
# Include script to make a database connection
include("database.php");
include("menuBar.html");
# Empty string to be used later
$genre_name='';
$date_of_origin='';
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
      $genre_name=$row["genre_name"];
      $date_of_origin=$row["date_of_origin"];
      $place_of_origin=$row["place_of_origin"];
      $notable_bands = $row["notable_bands"];
      $comments= $row["comments"];
    }
    echo "Current Details: " ."<b> - Genre Name:</b> " . $genre_name. " <b>Date Of Origin:</b>" . $date_of_origin. "<b>Place Of Origin:</b>" . $place_of_origin. " 
    <b> Notable Bands:</b>" . $notable_bands . "<b> Comments</b>". $comments. "<br>";
  } else {
    echo "Error updating";
  }
}

# Check that the input fields are not empty and process the data
if(!empty($_POST['genre_name']) && !empty($_POST['date_of_origin']) && !empty($_POST['place_of_origin']) ){
    # Insert into the database
  $query = "UPDATE genres SET date_of_origin='".$_POST['date_of_origin']."', place_of_origin='".$_POST['place_of_origin']."', notable_bands='".$_POST['notable_bands']."',
            comments='".$_POST['comments']."' WHERE genre_name='".$_POST['genre_name']."' ";
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
        Genre Name: <input type="text" name="genre_name" value="<?php echo($genre_name); ?>" required><br><br/>
        Date of Origin: <input type="text" name="date_of_origin" value="<?php echo($date_of_origin); ?>" required><br/>
        Place(s) of Origin: <input type="text" name="place_of_origin" value="<?php echo($place_of_origin); ?>" required><br><br/>
        Notable Bands: <input type="text" name="notable_bands" value="<?php echo($notable_bands); ?>" required><br><br/>
        Comments: <textarea name="comments" value="<?php echo($comments); ?>" required></textarea><br><br/>
        <br/>
        <input type="submit" value="update">
    </form>
</body>
</html>