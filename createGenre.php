<?php
# Include script to make a database connection
include("connect.php");
include("menuBar.html");

if (!empty($_GET['genre_name']) || !empty($_GET['date_of_origin']) || !empty($_GET['place_of_origin']) || !empty($_GET["notable_bands"]) || !empty($_GET["comments"])){

$genre_name      = $_GET['genre_name'];
$date_of_origin  = $_GET['date_of_origin'];
$place_of_origin = $_GET['place_of_origin'];
$notable_bands   = $_GET["notable_bands"];
$comments        = $_GET["comments"];

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

<!--<script type="text/javascript">


function validateForm() {
  var genre_name = document.forms["createGenre"]["genre_name"].value;
  var date_of_origin = document.forms["createGenre"]["date_of_origin"].value;

  if (genre_name == "") {
    alert("Genre Name text field cannot be empty!!!");
    return false;
    }
    else if(date_of_origin == ""){
    alert("Date of Origin field cannot be empty!!!");
    return false;   
    }

}

</script>-->
</head>
<body>
    <h1>Create Genres </h1>
        <form name="createGenre" method="get" action="createGenre.php" onsubmit="return validateForm()" required>
            Name: <input type="text" name="genre_name"><br><br/>
            Date of Origin: <input type="text" name="date_of_origin"><br/><br/>
            Place Of Origin: <input type="text" name="place_of_origin"><br/><br/>
            Notable Bands: <input type="text" name="notable_bands"><br><br/>
            Comments: <textarea name="comments"></textarea><br><br/>
        <input type="submit" name="save" value="submit" >
    </form>

</body>
</html>
