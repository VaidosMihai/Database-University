
<?php
include "sql_connect.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `Sesiune` WHERE id_sesiune=$id";
    $query_run=mysqli_query($link,$query);
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Date sterse")</script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Date nu au fost sterse")</script>';
    }
}
?>

