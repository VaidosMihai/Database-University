<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include "sql_connect.php";
$orderBy = !empty($_GET["orderby"]) ? $_GET["orderby"] : "name";
$order = !empty($_GET["order"]) ? $_GET["order"] : "asc";

$sql = "SELECT * FROM countries ORDER BY " . $orderBy . " " . $order;

$result = $link->query($sql);

$nameOrder = "asc";
$codeOrder = "asc";

if($orderBy == "name" && $order == "asc") {
$nameOrder = "desc";
}
if($orderBy == "code" && $order == "asc") {
$codeOrder = "desc";
}
?>
<table class="table table-bordered">
    <thead>
    <tr>
        <th><a href="?orderby=name&order=<?php echo $nameOrder; ?>">ID</a></th>
        <th><a href="?orderby=code&order=<?php echo $codeOrder; ?>">Nume</a></th>
        <th><a href="?orderby=judet&order=<?php echo $codeOrder; ?>">Judet</a></th>
        <th><a href="?orderby=oras&order=<?php echo $codeOrder; ?>">Oras</a></th>
    </tr>
    </thead>
    <tbody>

    <?php
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['id_universitate']; ?></td>
            <td><?php echo $row['nume_universitate']; ?></td>
            <td><?php echo $row['judet']; ?></td>
            <td><?php echo $row['oras']; ?></td>
        </tr>
        <?php
    }
    ?>

    </tbody>
</table>

</div>

</body>
</html>