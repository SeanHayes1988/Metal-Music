<?php
# Include script to make a database connection and menu bar
include("database.php");
include("menuBar.html");

#check connection to server and check if the fields are empty 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST['genre_name']) && empty($_POST['year']) && empty($_POST['month']) && empty($_POST['place_of_origin']) && empty($_POST['notable_bands']) && empty($_POST['comments'])){
    # If the fields are empty, display a message to the user
    #echo "Please fill in the fields";

# Process the form data if the input fields are not empty
}else{

$genre_name      = $_POST['genre_name'];
$year            = $_POST['year'];
$month           = $_POST['month'];
$place_of_origin = $_POST['place_of_origin'];
$notable_bands   = $_POST["notable_bands"];
$comments        = $_POST["comments"];

# Insert into the database
$query = "INSERT INTO genres (genre_name,year,month,place_of_origin,notable_bands,comments) VALUES ('$genre_name','$year', '$month', '$place_of_origin','$notable_bands',
    '$comments')";
if (mysqli_query($conn, $query)) {
    echo "New Genre Created \m/ \m/ ";
    } else {
         echo "Computer Says No!!!: " . $conn->error;
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Create Genre</title>
    <link rel="stylesheet"  type="text/css" href="style1.css">

 <script>
    //confirmation box 
        function validateForm() {
            return confirm('Click Ok To Confirm Genre and Metal Up Your Ass!!!');
        }

</script>

<style> 
        .tags-input { 
            display: inline-block; 
            position: relative; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
            padding: 5px; 
            box-shadow: 2px 2px 5px #00000033; 
            width: 50%; 
        } 

        .tags-input ul { 
            list-style: none; 
            padding: 0; 
            margin: 0; 
        } 

        .tags-input li { 
            display: inline-block; 
            background-color: #f2f2f2; 
            color: #333; 
            border-radius: 20px; 
            padding: 5px 10px; 
            margin-right: 5px; 
            margin-bottom: 5px; 
        } 

        .tags-input input[type="text"] { 
            border: none; 
            outline: none; 
            padding: 5px; 
            font-size: 14px; 
        } 

        .tags-input input[type="text"]:focus { 
            outline: none; 
        } 

        .tags-input .delete-button { 
            background-color: transparent; 
            border: none; 
            color: #999; 
            cursor: pointer; 
            margin-left: 5px; 
        } 
    </style>



</head>
<body>
    <h1>Create Genres </h1>
    <form name="createGenre" id="createGenre" method="post" action="createGenre.php" >

        <label for="genre_name" class="required"> Genre Name: </label> 
        <input type="text" name="genre_name" id="genre_name" required><br><br>

        <label for="year" class="required"> Year of Origin: </label>
        <select class="form-select" id="year" name="year" required>
            <option value="">year</option>
            <option value="1940">1940</option>
            <option value="1941">1941</option>
            <option value="1942">1942</option>
            <option value="1943">1943</option>
            <option value="1944">1944</option>
            <option value="1945">1945</option>
            <option value="1946">1946</option>
            <option value="1947">1947</option>
            <option value="1948">1948</option>
            <option value="1949">1949</option>
            <option value="1950">1950</option>
            <option value="1951">1951</option>
            <option value="1952">1952</option>
            <option value="1953">1953</option>
            <option value="1954">1954</option>
            <option value="1955">1955</option>
            <option value="1956">1956</option>
            <option value="1957">1957</option>
            <option value="1958">1958</option>
            <option value="1959">1959</option>
            <option value="1960">1960</option>
            <option value="1961">1961</option>
            <option value="1962">1962</option>
            <option value="1963">1963</option>
            <option value="1964">1964</option>
            <option value="1965">1965</option>
            <option value="1966">1966</option>
            <option value="1967">1967</option>
            <option value="1968">1968</option>
            <option value="1969">1969</option>
            <option value="1970">1970</option>
            <option value="1971">1971</option>
            <option value="1972">1972</option>
            <option value="1973">1973</option>
            <option value="1974">1974</option>
            <option value="1975">1975</option>
            <option value="1976">1976</option>
            <option value="1977">1977</option>
            <option value="1978">1978</option>
            <option value="1979">1979</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>

        <label for="month" class="required">   Month of Origin: </label>
        <select class="form-select" id="month" name="month" required>
            <option value="">month</option>
            <option value="00">Not Specified</option>
            <option value="01">January</option>
            <option value="02">February</option>
            <option value="03">March</option>
            <option value="04">April</option>
            <option value="05">May</option>
            <option value="06">June</option>
            <option value="07">July</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select><br><br>

        <label for="place_of_origin" class="required">Place(s) Of Origin: </label>
         <textarea type="text" name="place_of_origin" id="input-tag" required></textarea><br><br>
 
        <label for="notable_band"s class="required">Notable Bands: </label>
        <textarea name="notable_bands" id="notable_bands" required></textarea><br><br>

        Comments:
        <textarea name="comments" id="comments"></textarea><br><br>

        <input type="submit" name="save" value="submit" onclick="return validateForm()" > 
        <p><span class="required">Required Field</span></p>
    </form> 



</body>
</html>