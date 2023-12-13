<?php
# Include script to make a database connection
include("database.php");
include("menuBar.html");

if(empty($_POST['genre_name']) && empty($_POST['date_of_origin'])){
    # If the fields are empty, display a message to the user
    echo "Please fill in the fields";

# Process the form data if the input fields are not empty
}else{

$genre_name      = $_POST['genre_name'];
$date_of_origin  = $_POST['date_of_origin'];
$place_of_origin = $_POST['place_of_origin'];
$notable_bands   = $_POST["notable_bands"];
$comments        = $_POST["comments"];

echo ('Genre Name:'      . $genre_name. '<br/>');
echo ('Date of Origin:'  . $date_of_origin. '<br/>');
echo ('Place of Origin:' . $place_of_origin. '<br/>');
echo ('Place of Origin:' . $notable_bands. '<br/>');
echo ('Place of Origin:' . $comments. '<br/>');
# Insert into the database
$query = "INSERT INTO genres (genre_name,date_of_origin,place_of_origin,notable_bands,comments) VALUES ('$genre_name','$date_of_origin','$place_of_origin','$notable_bands',
    '$comments')";
if (mysqli_query($conn, $query)) {
    echo "New record created successfully !";
    } else {
         echo "Error inserting record: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Genre</title>
</head>
<body>
    <h1>Create Genres </h1>
    <form method="post" action="createGenre.php">
        Name: <input type="text" name="genre_name"><br><br/>
        Date of Origin: <input type="text" name="date_of_origin"><br/><br/>
        Place Of Origin: <input type="text" name="place_of_origin"><br/><br/>
        Notable Bands: <input type="text" name="notable_bands"><br><br/>
        Comments: <textarea name="comments"></textarea><br><br/>
        <input type="submit" name="save" value="submit" >
    </form>