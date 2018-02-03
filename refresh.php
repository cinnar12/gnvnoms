<?php include 'database.php'; ?>
<?php

if (isset($_POST['refresh'])) {
  refresh_table($conn);
}

if (isset($_POST['name']) && isset($_POST['price'])) {

  $name = sanitizeMySQL($conn, $_POST['name']);
  $location = sanitizeMySQL($conn, $_POST['location']);
  $genre = sanitizeMySQL($conn, $_POST['genre']);
  $price = sanitizeMySQL($conn, $_POST['price']);
  $phone = sanitizeMySQL($conn, $_POST['phone']);

  $query = "INSERT INTO restaurants (name, location, genre, price, phone)
  VALUES (?, ?, ?, ?, ?)";

  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  if ($result) {
    refresh_table($conn);
  }

}

function refresh_table($conn) {
  $query = "SELECT * FROM restaurants ORDER BY name";
  $restaurantsgnv = mysqli_query($conn, $query);

  echo '<table>
  <tr>
  <th>Name</th>
  <th>Location</th>
  <th>Genre</th>
  <th>Price</th>
  <th>Phone</th>
  </tr>';
  while ($row = mysqli_fetch_assoc($restaurantsgnv)) {
    echo '<tr>';
    echo '<td>';
    echo stripslashes($row['name']);
    echo '</td>';
    echo '<td>';
    echo $row['location'];
    echo '</td>';
    echo '<td>';
    echo $row['genre'];
    echo '</td>';
    echo '<td>';
    echo $row['price'];
    echo '</td>';
    echo '<td>';
    echo $row['phone'];
    echo '</td>';
    echo '</tr>';
  }
  echo '</table>' ;
}

function sanitizeMySQL($conn, $var) {
  $var = strip_tags($var);
  $var = mysqli_real_escape_string($conn, $var);
  return $var;
}

?>
