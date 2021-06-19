<?php





$link =mysqli_connect("127.0.0.1", "mihai", "parola123", "Universitate", 3306);
if ($link->connect_errno) {
    echo "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
}

?>