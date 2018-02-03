<?php
	include 'database.php';
	$query = "SELECT * FROM restaurants ORDER BY name";
	$restaurantsgnv = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>Welcome to GNV Noms</title>
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto:900" rel="stylesheet">
</head>

<body>
	<div id="title">
  <h1>GNV Noms<br>Database</h1>
  <h3 id="about">Restaurants in Gainesville, Florida</h3>
	</div>
  <div id="container">
    <div id="nav">
      <button id="viewtable">View Restaurants</button>
      <button id="viewform">Add Restaurant</button>
    </div>

    <div id="table">
			<h2>Restaurant Database</h2>
			<div id="restaurantlist"></div>
    </div>

    <div id="form">
      <h2>Add Restaurant</h2>
      <p>Fill out the form below to submit a restaurant.</p>
      <form id="restaurantform">
        <label for="name">Name </label>
	      <input type="text" name="name" id="name" maxlength="30" required>
        <label for="location">Location</label>
        <input type="text" name="location" id="location" maxlength="50" required>
        <label for="genre">Food Genre</label>
        <input type="text" name="genre" id="genre" required>
        <label for="price">Price Range</label>
        <select name="price" id="price" required>
          <option value="$">$</option>
          <option value="$$">$$</option>
          <option value="$$$">$$$</option>
        </select>
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" maxlength="10" required>
        <input type="submit" id="submit" value="Submit">
      </form>
    </div>

    <div id="success">
      <h2>Thanks for submitting!</h2>
    </div>
	</div>

	<div id="git">
		<a href="https://github.com/cinnar12/gnvnoms">GitHub</a>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
	<script src="js/main.js"></script>

</body>

</html>
