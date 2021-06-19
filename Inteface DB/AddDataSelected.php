<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
</br>

<?php

include "sql_connect.php";

$cuvant = $_GET["tabel"];

switch ($cuvant) {

    case "":
        echo "<style>
    h3{
        text-align:center
        }</style>
        <h3 > Nu a-ti cautat nici un tabel ! </h3>";
        break;
    case "Universitate":
        echo'<form class="d-flex" action="Insert.php" method="get">
    <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
    <input type="number" name="id" placeholder="id">
    <input type="text" name="nume" placeholder="nume universitate">
    <input type="text" name="judet" placeholder="judet">
    <input type="text" name="oras" placeholder="oras">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_universitate'] . "</tdtext-align:center>";
            echo "<td>" . $row['nume_universitate'] . "</td>";
            echo "<td>" . $row['judet'] . "</td>";
            echo "<td>" . $row['oras'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Facultate":
        echo'<form class="d-flex" action="Insert.php">
    <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
    <input type="number" name="ID_Facultate" placeholder="ID Facultate">
    <input type="text" name="Domeniu" placeholder="Domeniu">
    <input type="text" name="Adresa" placeholder="Adresa">
    <input type="text" name="Nr_Sali" placeholder="Nr.Sali">
    <input type="text" name="ID_Universitate" placeholder="id_universitate">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
        echo "<table border='1' i=''>
              <tr>
              <th>ID_facultate</th>
              <th>Domeniu</th>
              <th>Adresa</th>
              <th>Nr.Sali</th>
              <th>ID_universitate</th>
              </tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_facultate'] . "</td>";
            echo "<td>" . $row['domeniu_facultate'] . "</td>";
            echo "<td>" . $row['adresa'] . "</td>";
            echo "<td>" . $row['nrSali'] . "</td>";
            echo "<td>" . $row['id_universitate'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Profesor":
        echo'<form class="d-flex" action="Insert.php">
    <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
    <input type="number" name="ID_Profesor" placeholder="ID Profesor">
    <input type="text" name="Nume" placeholder="Nume">
    <input type="text" name="Telefon" placeholder="Telefon" minlength="12" maxlength="12">
    <input type="text" name="Email" placeholder="@Email">
    <input type="number" name="Salariu" placeholder="Salariu">
    <input type="number" name="ID_facultate" placeholder="ID Facultate">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_profesor'] . "</td>";
            echo "<td>" . $row['nume_profesor'] . "</td>";
            echo "<td>" . $row['telefon_profesor'] . "</td>";
            echo "<td>" . $row['email_profesor'] . "</td>";
            echo "<td>" . $row['salariu_profesor'] . "</td>";
            echo "<td>" . $row['id_facultate'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Curs":
        echo'<form class="d-flex" action="Insert.php">
    <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
    <input type="number" name="ID_Curs" placeholder="ID Curs">
    <input type="text" name="Nume_curs" placeholder="Numele Cursului">
    <input type="text" name="Sala" placeholder="Sala">
    <input type="number" name="ID_profesor" placeholder="ID Profesor">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_curs'] . "</td>";
            echo "<td>" . $row['nume_curs'] . "</td>";
            echo "<td>" . $row['sala_curs'] . "</td>";
            echo "<td>" . $row['id_profesor'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Domeniu":
        echo'<form class="d-flex" action="Insert.php">
    <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
    </form>
    <form class="d-flex" style="size: small" action="Insert.php">
    <input type="number" name="ID_Domeniu" size="10px" placeholder="ID Domeniu">
    <input type="text" name="Nume_Domeniu" placeholder="Numele Domeniului">
    <input type="number" name="locuritotale" placeholder="Nr Locuri Totale">
    <input type="number" name="locuriTaxa" placeholder="Locuri la Taxa">
    <input type="number" name="locuriBuget" placeholder="Locuri la Buget">
    <input type="number" name="durataLiceta" placeholder="Durata Licenta">
    <input type="number" name="ID_facultate" placeholder="ID Facultate">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
              <th>ID_Domeniu</th>
              <th>Nume Domeniu</th>
              <th>Locuri totale</th>
              <th>Locuri la taxa</th>
              <th>Locuri la buget</th>
              <th>Durata licenta</th>
              <th>ID Facultate</th>
              </tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_domeniu'] . "</tdtext-align:center>";
            echo "<td>" . $row['nume_domeniu'] . "</td>";
            echo "<td>" . $row['NRlocuri_domeniu'] . "</td>";
            echo "<td>" . $row['locuriTaxa_domeniu'] . "</td>";
            echo "<td>" . $row['locuriBuget_domeniu'] . "</td>";
            echo "<td>" . $row['durata_licenta'] . "</td>";
            echo "<td>" . $row['id_facultate'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Student":
        echo'<p class="d-flex" action="Insert.php">
    <p><input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search"></p>
    <input type="number" name="ID_Student"  placeholder="ID Student" size="1">
    <input type="text" name="Nume"  placeholder="Nume" size="7">
    <input type="text" name="Prenume" placeholder="Prenume" size="7">
    <input type="number" name="Telefon" placeholder="Numar de Telefon" minlength="12" maxlength="12">
    <input type="text" name="Email" placeholder="Email" size="7">
    <input type="number" name="Venit" placeholder="Venit Lunar" size="7">
    <input type="number" name="ID_domeniu" placeholder="ID Domeniu" size="7">
    <input type="number" name="ID_bursa" placeholder="ID Bursa" size="7">
    <input type="number" name="ID_grupa" placeholder="ID Grupa" size="7">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
        while ($row = mysqli_fetch_array($result)) {
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
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Bursa":
        echo'<form class="d-flex" action="Insert.php">
    <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
    <input type="number" name="ID_bursa" placeholder="ID Bursa">
    <input type="text" name="Tip" placeholder="Tip">
    <input type="number" name="Suma" placeholder="Suma">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_bursa'] . "</tdtext-align:center>";
            echo "<td>" . $row['tip_bursa'] . "</td>";
            echo "<td>" . $row['suma_bursa'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Grupa":
        echo'<form class="d-flex" action="Insert.php">
    <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
    <input type="number" name="ID_grupa" placeholder="ID Bursa">
    <input type="number" name="Anul" placeholder="Anul grupei">
    <input type="number" name="NRgrupa" placeholder="Numarul grupei">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_grupa'] . "</tdtext-align:center>";
            echo "<td>" . $row['anul'] . "</td>";
            echo "<td>" . $row['nr_grupa'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Sesiune":
        echo'<form class="d-flex" action="Insert.php">
    <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
    <input type="number" name="ID_sesiune" placeholder="ID Sesiune">
    <input type="number" name="Anul_ses" placeholder="Anul sesiunii">
    <input type="number" name="ID_examen" placeholder="ID Examen">
    <input type="number" name="ID_student" placeholder="ID Student">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_sesiune'] . "</tdtext-align:center>";
            echo "<td>" . $row['an_sesiune'] . "</td>";
            echo "<td>" . $row['id_examen'] . "</td>";
            echo "<td>" . $row['id_student'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        break;
    case "Examen":
        echo'<form class="d-flex" action="Insert.php">
    <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
    <input type="number" name="ID_examen" placeholder="ID Examen">
    <input type="text" name="Nume_examen" placeholder="Nume examen">
    <input type="text" name="Sala" placeholder="Sala">
    <input type="datetime-local" name="DataOra" placeholder="Data si ora">
    <button class="btn btn-outline-info" type="submit" >Adauga Datele</button>
</form>';
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
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_examen'] . "</tdtext-align:center>";
            echo "<td>" . $row['nume_examen'] . "</td>";
            echo "<td>" . $row['sala_examen'] . "</td>";
            echo "<td>" . $row['dataOra_examen'] . "</td>";
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