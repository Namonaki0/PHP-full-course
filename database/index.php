<?php

include("database.php");

$username = "Gina";
$password = "Rock238F";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$hash')";

try {
    mysqli_query($connection, $sql);
    echo "User registered";
} catch (mysqli_sql_exception) {
    echo "Cannot register user";
}

mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>

<body>
    Test
</body>

</html>