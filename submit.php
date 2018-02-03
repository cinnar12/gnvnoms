<?php include 'database.php'; ?>

<?php

if (isset($_POST['name']) && isset($_POST['price'])) {

    $name = sanitizeMySQL($conn, $_POST['name']);
    $location = sanitizeMySQL($conn, $_POST['location']);
    $genre = sanitizeMySQL($conn, $_POST['genre']);
    $price = sanitizeMySQL($conn, $_POST['price']);
    $phone = sanitizeMySQL($conn, $_POST['phone']);

    // create a PHP timestamp
    //date_default_timezone_set('America/New_York');
    //$date = date('m-d-Y', time());

    $query = "INSERT INTO restaurants (name, location, genre, price, phone)
    VALUES (?, ?, ?, ?, ?)";

    if ( $stmt = mysqli_prepare($conn, $query) ) {

        mysqli_stmt_bind_param($stmt, 'ssssi',
        $name,
        $location,
        $genre,
        $price,
        $phone
        );

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
} else {
    echo "Failed to enter!";
}

function sanitizeMySQL($conn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($conn, $var);
    return $var;
}

?>
