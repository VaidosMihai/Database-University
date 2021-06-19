<?php
include 'mysql.php';

if(isset($_GET['order']))
{
    $order=$_GET['order'];
}
else{
    $order='asset_num';
}

if(isset($_GET['sort']))
{
    $sord=$_GET['sort'];
}
else{
    $sort='ASC';
}

    $resultSet=$mysqli->query("Select * from Universitate Order By $order $sort");
    if($resultSet->num_rows>0)
    {
        $sort=='DESC' ? $sort='ASC':$sort='DESC';
        echo "
        <table border='1'>
            <tr>
                <th><a href='?order=id_universitate&&sort=$sort'>ID</th>
                <th><a href='?order=nume_universitate&&sort=$sort'>Nume</th>
                <th><a href='?order=judet&&sort=$sort'>Judet</th>
                <th><a href='?order=oras&&sort=$sort'>Oras</th>
            </tr>";

        while($rows=$resultSet->fetch_assoc)
        {
            $id_universitate=$rows['id_universitate'];
            $nume_universitate=$rows['nume_universitate'];
            $judet=$rows['judet'];
            $oras=$rows['oras'];
        }

    echo" </table>";
    }else {echo "No record returned.";}
    ?>