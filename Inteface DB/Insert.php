<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="sorttable.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Baza de date</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php" action="index.php" type="submit">Baza de date a unor Universitati</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php" action="index.php" type="submit">Home</a>
                </li>
            </ul>

            <form class="d-flex" action="AddData.php">

                <button type="submit" class="btn btn-outline-info">Adaugare date</button>

            </form>

            <form class="d-flex" action="cautaTabel.php">
                <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Cauta</button>
            </form>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<?php
include "sql_connect.php";

$cuvant = $_GET["tabel"];

switch ($cuvant)
{
        case "Universitate":
        {
            $x = $_GET["id"];
            $y = $_GET["nume"];
            $z = $_GET["judet"];
            $k = $_GET["oras"];


            $sql = "INSERT INTO $cuvant VALUES ($x,'$y','$z','$k')";
            $result = mysqli_query($link, $sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
            break;
        }
        case"Facultate":
        {
            $x=$_GET["ID_Facultate"];
            $y=$_GET["Domeniu"];
            $z=$_GET["Adresa"];
            $k=$_GET["Nr_Sali"];
            $l=$_GET["ID_Universitate"];


        $sql = "INSERT INTO $cuvant VALUES ($x,'$y','$z',$k,$l)";
        $result= mysqli_query($link,$sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
        break;
        }
        case "Profesor":
        {
            $x=$_GET["ID_Profesor"];
            $y=$_GET["Nume"];
            $z=$_GET["Telefon"];
            $k=$_GET["Email"];
            $l=$_GET["Salariu"];
            $j=$_GET["ID_facultate"];

            $sql = "INSERT INTO $cuvant VALUES ($x,'$y','$z','$k',$l,$j)";
            $result= mysqli_query($link,$sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
            break;
        }
        case "Domeniu":
        {
            $x=$_GET["ID_Domeniu"];
            $y=$_GET["Nume_Domeniu"];
            $z=$_GET["locuritotale"];
            $k=$_GET["locuriTaxa"];
            $l=$_GET["locuriBuget"];
            $j=$_GET["durataLicenta"];
            $h=$_GET["ID_facultate"];


            $sql = "INSERT INTO $cuvant VALUES ($x,'$y',$z,$k,$l,$j,$h)";
            $result= mysqli_query($link,$sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
            break;
        }
        case "Curs":
        {
            $x=$_GET["ID_Curs"];
            $y=$_GET["Nume_curs"];
            $z=$_GET["Sala"];
            $k=$_GET["ID_profesor"];

            $sql = "INSERT INTO $cuvant VALUES ($x,'$y','$z',$k)";
            $result= mysqli_query($link,$sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
            break;
        }
        case "Student":
        {
            $x=$_GET["ID_Student"];
            $y=$_GET["Nume"];
            $z=$_GET["Prenume"];
            $k=$_GET["Telefon"];
            $l=$_GET["Email"];
            $j=$_GET["Venit"];
            $h=$_GET["ID_domeniu"];
            $g=$_GET["ID_bursa"];
            $f=$_GET["ID_grupa"];

            $sql = "INSERT INTO $cuvant VALUES ($x,'$y','$z','$k','$l',$j,$h,$g,$f)";
            $result= mysqli_query($link,$sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
            break;
        }
        case "Bursa":
        {
            $x = $_GET["ID_bursa"];
            $y = $_GET["Tip"];
            $z = $_GET["Suma"];

            $sql = "INSERT INTO $cuvant VALUES ($x,'$y',$z)";
            $result = mysqli_query($link, $sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
            break;
        }
        case "Grupa":
        {
            $x=$_GET["ID_grupa"];
            $y=$_GET["Anul"];
            $z=$_GET["NRgrupa"];

            $sql = "INSERT INTO $cuvant VALUES ($x,$y,$z)";
            $result= mysqli_query($link,$sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
            break;
        }
        case "Sesiune":
        {
            $x=$_GET["ID_sesiune"];
            $y=$_GET["Anul_ses"];
            $z=$_GET["ID_examen"];
            $k=$_GET["ID_student"];

            $sql = "INSERT INTO $cuvant VALUES ($x,$y,$z,$k)";
            $result= mysqli_query($link,$sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
            break;
        }
        case "Examen":
        {
            $x=$_GET["ID_examen"];
            $y=$_GET["Nume_examen"];
            $z=$_GET["Sala"];
            $k=$_GET["DataOra"];


            $sql = "INSERT INTO $cuvant VALUES ($x,'$y','$z','$k')";
            $result= mysqli_query($link,$sql);
            echo '  <style>
                    h1{
                        text-align: center;
                        padding: 20px;
                        background-color: #1d4b8f;
                        color: #ea2f10;}
                    </style>
                    <h1><p>Datele au fost introduse</p></h1>';
            break;
        }
}

?>
<style>
    footer
    {
        text-align: center;
        padding: 3px;
        background-color: #1d4b8f;
        color: white;
    }
</style>
<footer>
    <div class = 'jumbotron blue-background-success py-2 text-center'>
        Vaidos Mihai-Iulian
    </div>
</footer>
</body>
</html>
