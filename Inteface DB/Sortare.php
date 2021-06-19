
<?php
include 'sql_connect.php';

$err = false;
$date_tabel;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $numeTABEL = stripslashes($_POST['nume_tabela']);

    if (isset($_POST['tip_actiune'])) {

        $nume_cheie_primara = $_POST['nume_cheie_primara'];
        $valoare_cheie_primara = $_POST['valoare_cheie_primara'];

        if ($_POST['tip_actiune'] === 'edit') {
            $numeTABEL = $_POST['nume_tabela'];
            $nume_coloana = $_POST['nume_coloana'];
            $valoare_noua = $_POST['valoare_noua'];

            $q = sendQuery('update ' . $numeTABEL . ' set ' . $nume_coloana . ' = ? where ' . $nume_cheie_primara . ' = ?;', $valoare_noua, $valoare_cheie_primara);

            die(json_encode(array(
                "status" => $q != -1
            )));
        }

        sendQuery('delete from ' . $numeTABEL . ' where ' . $nume_cheie_primara . ' = ?; ', $valoare_cheie_primara);
    }

    $query = 'select * from ' . $numeTABEL;

    if (isset($_POST['sortare_dupa']) && $_POST['sortare_dupa'] != "") {
        $query .= ' order by ' . $_POST['sortare_dupa'] . ' ASC';
    }

    $date_tabel = sendQuery($query . ';');

    if ($date_tabel == -1) {
        $err = true;
    }

}
?>
<!DOCTYPE html>
<html lang = 'ro'>
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
        <a class="navbar-brand" href="#">Baza de date a unor Universitati</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <button type="button" class="btn btn-outline-success">Stergere date</button>
            <form class="d-flex" action="https://google.com">

                <button type="button" type="submit" class="btn btn-outline-success">Adaugare date</button>
            </form>

            <form class="d-flex" action="Sortare.php">
                <input class="form-control me-2" type="search" name="nume_tabela" placeholder="Nume tabel" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cauta</button>
            </form>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<div class = 'jumbotron bg-success py-3' style="background-color: darkslateblue">
    <form class = 'text-white text-center' action = 'Sortare.php' method = 'POST'>
        <div class = 'form-group'>
            <label for = 'nume_tabela'>Nume tabela:</label>
            <input type = 'text' name = 'nume_tabela'></input>
            <button class = 'btn btn-success' type = 'submit' style="background-color: #537840 ">Trimite</button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        ?>

        <?php if ($err != false) { ?>

            <p class = 'text-white text-center'> Nu exista acest tabel. </p>

        <?php  } else { ?>

            <div id = 'mesaj' class = 'alert d-none alert-danger text-center mb-4 mt-4'></div>

            <table class = 'text-white w-100 text-center'>

                <?php

                echo '<tr>';
                foreach ($date_tabel[0] as $numeColoana => $valoareColoana) {
                    echo '<th>' . $numeColoana . '</th>';
                }
                echo '</tr>';

                foreach ($date_tabel as $linie) {
                    echo '<tr>';

                    $nume_cheie_primara = array_keys($linie)[0];
                    $valoare_cheie_primara = $linie[$nume_cheie_primara];

                    foreach ($linie as $numeColoana => $valoareColoana) {
                        echo '<td class = "coloana" nume_coloana = "' . $numeColoana . '" nume_cheie_primara = "' . $nume_cheie_primara . '" valoare_cheie_primara = "' . $valoare_cheie_primara . '" 
                                        nume_tabela = "' . $numeTABEL . '" contenteditable = "true">' . $valoareColoana . '</td>';
                    }

                    echo '<td>
                                    <form class = "container text-white" action = "Sortare.php" method = "POST">
                                        <input type = "hidden" name = "nume_tabela" value = "' . $numeTABEL . '">';
                    if (isset($_POST['sortare_dupa']) && $_POST['sortare_dupa'] != "")
                        echo '<input type = "hidden" name = "sortare_dupa" value = "' . $_POST['sortare_dupa'] . '">';

                    echo '
                                        <input type = "hidden" name = "tip_actiune" value = "stergere">
                                        <input type = "hidden" name = "nume_cheie_primara" value = "' .$nume_cheie_primara . '">
                                        <input type = "hidden" name = "valoare_cheie_primara" value = "' . $valoare_cheie_primara . '">
                                        
                                        <button type = "submit" class = "button btn-primary">Delete</button>
                                    </form>
                                    
                                </td>';

                    echo '</tr>';
                }

                ?>

            </table>

            <form class = 'container text-white text-center w-25 my-4' action = 'Sortare.php' method = 'POST'>
                <div class = 'form-group'>

                    <input type = 'hidden' name = 'nume_tabela' value = '<?php echo $numeTABEL; ?>'>

                    <select class = 'custom-select' name = 'sortare_dupa'>
                        <option value = "">Order by</option>
                        <?php
                        foreach ($date_tabel[0] as $numeColoana => $valoareColoana) {
                            echo '<option value = "' . $numeColoana . '">' . $numeColoana . '</option>';
                        }
                        ?>
                    </select>
                    <button class="btn btn-light" type = 'submit' >Sorteaza</button>
                </div>
            </form>

        <?php } ?>

        <?php
    }
    ?>

</body>

</html>

<script>
    const elemente = document.getElementsByClassName("coloana")
    const mesaj = document.getElementById('mesaj')

    for (let i = 0; i < elemente.length; ++i) {
        elemente[i].addEventListener('keyup', async () => {

            const nume_tabela = elemente[i].getAttribute('nume_tabela')
            const nume_coloana = elemente[i].getAttribute('nume_coloana')
            const nume_cheie_primara = elemente[i].getAttribute('nume_cheie_primara')
            const valoare_cheie_primara = elemente[i].getAttribute('valoare_cheie_primara')
            const valoare_noua = elemente[i].innerHTML

            const ans = JSON.parse(await Promise.resolve($.post('Sortare.php', {
                nume_tabela: nume_tabela,
                nume_coloana: nume_coloana,
                nume_cheie_primara: nume_cheie_primara,
                valoare_cheie_primara: valoare_cheie_primara,
                valoare_noua: valoare_noua,
                tip_actiune: "edit"
            })))

            if (!ans.status) {
                $(mesaj).removeClass('d-none').html('A aparut o eroare la actualizarea coloanei.')
            }

            else {
                $(mesaj).addClass('d-none')
            }

        })
    }

</script>