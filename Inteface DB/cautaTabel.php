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
if($cuvant!="")echo "<style>
        h2{
        text-align:center
        }</style>
        <h2 > Tabelul $cuvant contine urmatoarele date: </h2>";
switch ($cuvant) {

    case "":
       echo "<style>
    h3{
        text-align:center
        }</style>
        <h3 > Nu a-ti cautat nici un tabel ! </h3>";
        break;
    case "Universitate":
        include "sql_connect.php";
        $sql = "SELECT * FROM Universitate";
        $result = $link->query($sql);
        echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
              </style>
              <table border='1'>
              <tr>
              <th>ID_universitate</th>
              <th>Nume</th>
              <th>Judet</th>
              <th>Oras</th>
              </tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['id_universitate'] . "</tdtext-align:center>";
                    echo "<td>" . $row['nume_universitate'] . "</td>";
                    echo "<td>" . $row['judet'] . "</td>";
                    echo "<td>" . $row['oras'] . "</td>";
                    echo "<td>
                          <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_universitate']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='delete.php/?id=" .$row['id_universitate']."' >Delete</a>
                                </div></td>";
                    echo "</tr>";
                }
                echo "</table>";
                break;
    case "Facultate":
        include "sql_connect.php";
        $sql = "SELECT * from Facultate";
        $result = $link->query($sql);
        echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
                </style>";
        echo "<table border='1'>
              <tr>
              <th>ID_facultate</th>
              <th>Domeniu</th>
              <th>Adresa</th>
              <th>Nr.Sali</th>
              <th>ID_universitate</th>
              </tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $row['id_facultate'] . "</td>";
            echo "<td>" . $row['domeniu_facultate'] . "</td>";
            echo "<td>" . $row['adresa'] . "</td>";
            echo "<td>" . $row['nrSali'] . "</td>";
            echo "<td>" . $row['id_universitate'] . "</td>";
            echo "<td>
                                <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_facultate']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='deleteFacultate.php/?id=" .$row['id_facultate']."' >Delete</a>
                                </div></td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Profesor":
        include "sql_connect.php";
        $sql = "SELECT * from Profesor";
        $result = $link->query($sql);
        echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
              </style>
              <table border='1'>
              <tr>
              <th>ID_profesor</th>
              <th>Nume</th>
              <th>Telefon</th>
              <th>Email</th>
              <th>Salariu</th>
              <th>ID_facultate</th>
              </tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $row['id_profesor'] . "</td>";
            echo "<td>" . $row['nume_profesor'] . "</td>";
            echo "<td>" . $row['telefon_profesor'] . "</td>";
            echo "<td>" . $row['email_profesor'] . "</td>";
            echo "<td>" . $row['salariu_profesor'] . "</td>";
            echo "<td>" . $row['id_facultate'] . "</td>";
            echo "<td>
                                <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_profesor']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='deleteProfesor.php/?id=" .$row['id_profesor']."' >Delete</a>
                                </div></td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Curs":
        include "sql_connect.php";
        $sql = "SELECT * from Curs";
        $result = $link->query($sql);
        echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
              </style>
              <table border='1'>
              <tr>
              <th>ID_curs</th>
              <th>Nume curs</th>
              <th>Sala</th>
              <th>ID_profesor</th>
              </tr>";
        while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['id_curs'] . "</td>";
                    echo "<td>" . $row['nume_curs'] . "</td>";
                    echo "<td>" . $row['sala_curs'] . "</td>";
                    echo "<td>" . $row['id_profesor'] . "</td>";
                    echo "<td>
                                <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_curs']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='delete.php/?id=" .$row['id_curs']."' >Delete</a>
                                </div></td>";
                    echo "</tr>";
                }
                echo "</table>";
        break;
    case "Domeniu":
        include "sql_connect.php";
        $sql = "SELECT * from Domeniu";
        $result = $link->query($sql);
        echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
              </style>
              <table border='1'>
              <tr>
              <th>ID Domeniu</th>
              <th>Nume Domeniu</th>
              <th>Locuri in total</th>
              <th>Locuri la taxa</th>
              <th>Locuri la buget</th>
              <th>Durata licenta</th>
              <th>ID Facultate</th>
              </tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['id_domeniu'] . "</tdtext-align:center>";
                    echo "<td>" . $row['nume_domeniu'] . "</td>";
                    echo "<td>" . $row['NRlocuri_domeniu'] . "</td>";
                    echo "<td>" . $row['locuriTaxa_domeniu'] . "</td>";
                    echo "<td>" . $row['locuriBuget_domeniu'] . "</td>";
                    echo "<td>" . $row['durata_licenta'] . "</td>";
                    echo "<td>" . $row['id_facultate'] . "</td>";
                    echo "<td>
                                <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_domeniu']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='delete.php/?id=" .$row['id_domeniu']."' >Delete</a>
                                </div></td>";
                    echo "</tr>";
                }
                echo "</table>";
                break;
    case "Student":
        include "sql_connect.php";
        $sql = "SELECT * from Student";
        $result = $link->query($sql);
        echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
              </style>
              <table border='1'>
              <tr>
              <th>ID_student</th>
              <th>Nume</th>
              <th>Prenume</th>
              <th>Telefon</th>
              <th>Email</th>
              <th>Venit Lunar</th>
              <th>ID_domeniu</th>
              <th>ID_bursa</th>
              <th>ID_grupa</th>
              </tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['id_student'] . "</tdtext-align:center>";
                    echo "<td>" . $row['nume_student'] . "</td>";
                    echo "<td>" . $row['prenume_student'] . "</td>";
                    echo "<td>" . $row['telefon_student'] . "</td>";
                    echo "<td>" . $row['email_student'] . "</td>";
                    echo "<td>" . $row['venitLunar_student'] . "</td>";
                    echo "<td>" . $row['id_domeniu'] . "</td>";
                    echo "<td>" . $row['id_bursa'] . "</td>";
                    echo "<td>" . $row['id_grupa'] . "</td>";
                    echo "<td>
                                <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_student']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='delete.php/?id=" .$row['id_student']."' >Delete</a>
                                </div></td>";
                    echo "</tr>";
                }
                echo "</table>";
                break;
    case "Bursa":
        include "sql_connect.php";
        $sql = "SELECT * from Bursa";
        $result = $link->query($sql);
        echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
              </style>
              <table border='1'>
              <tr>
              <th>ID_bursa</th>
              <th>Tip</th>
              <th>Suma</th>
              </tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['id_bursa'] . "</tdtext-align:center>";
                    echo "<td>" . $row['tip_bursa'] . "</td>";
                    echo "<td>" . $row['suma_bursa'] . "</td>";
                    echo "<td>
                                <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_bursa']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='delete.php/?id=" .$row['id_bursa']."' >Delete</a>
                                </div></td>";
                    echo "</tr>";
                }
                echo "</table>";
                break;
    case "Grupa":
        include "sql_connect.php";
        $sql = "SELECT * from Grupa";
        $result = $link->query($sql);
        echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
              </style>
              <table border='1'>
              <tr>
              <th>ID_grupa</th>
              <th>Anul grupei</th>
              <th>Nr.grupa</th>
              </tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['id_grupa'] . "</tdtext-align:center>";
                    echo "<td>" . $row['anul'] . "</td>";
                    echo "<td>" . $row['nr_grupa'] . "</td>";
                    echo "<td>
                                <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_grupa']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='delete.php/?id=" .$row['id_grupa']."' >Delete</a>
                                </div></td>";
                    echo "</tr>";
                }
                echo "</table>";
                break;
    case "Sesiune":
        include "sql_connect.php";
        $sql = "SELECT * from Sesiune";
        $result = $link->query($sql);
                echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
              </style>
              <table border='1'>
              <tr>
              <th>ID_sesiune</th>
              <th>Anul sesiunii</th>
              <th>ID_examen</th>
              <th>ID_student</th>
              </tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['id_sesiune'] . "</tdtext-align:center>";
                    echo "<td>" . $row['an_sesiune'] . "</td>";
                    echo "<td>" . $row['id_examen'] . "</td>";
                    echo "<td>" . $row['id_student'] . "</td>";
                    echo "<td>
                                <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_sesiune']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='delete.php/?id=" .$row['id_sesiune']."' >Delete</a>
                                </div></td>";
                    echo "</tr>";
                }
                echo "</table>";
                break;
    case "Examen":
        include "sql_connect.php";
        $sql = "SELECT * from Examen";
        $result = $link->query($sql);
        echo "<style> 
                table
                {
                 background-color: #baeeff;
                 border-color: #003f54;
                 width: 100%;
                 text-align:center
                }
                th 
                {
                    font-size: 20px;
                    height: 50px;
                }
              </style>
              <table border='1'>
              <tr>
              <th>ID_examen</th>
              <th>Nume examen</th>
              <th>Sala</th>
              <th>Data si Ora</th>
              </tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo "<tr>";
                    echo "<td>" . $row['id_examen'] . "</tdtext-align:center>";
                    echo "<td>" . $row['nume_examen'] . "</td>";
                    echo "<td>" . $row['sala_examen'] . "</td>";
                    echo "<td>" . $row['dataOra_examen'] . "</td>";
                    echo "<td>
                                <div class='btn-group'>
                                <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_examen']."'>Edit</a>
                                <a class='btn btn-outline-danger' href='delete.php/?id=" .$row['id_examen']."' >Delete</a>
                                </div></td>";
                    echo "</tr>";
                }
                echo "</table>";
                break;
}
?>
</body>
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
</html>
