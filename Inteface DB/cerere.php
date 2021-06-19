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
            <form class="d-flex" action="cerere.php">
                <button class="btn btn-outline-info" type="submit" > Cerere</button>
            </form>
            <form class="d-flex" action="AddData.php">
                <button type="submit" class="btn btn-outline-info">Modifica date</button>
            </form>

            <form class="d-flex" action="cautaTabel.php">
                <input class="form-control me-2" type="search" name="tabel" placeholder="Nume tabel" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Cauta</button>
            </form>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


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