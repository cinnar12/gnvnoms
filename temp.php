<?php include 'database.php'; ?>
<?php

if (isset($_POST['refresh'])) {
  refresh_table($conn);
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

?>
