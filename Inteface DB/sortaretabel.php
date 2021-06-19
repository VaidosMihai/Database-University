<!doctype html>
<html>
<head>
    <?php
    include("sql_connect.php");

    $rowperpage = 5;
    $row = 0;

    // Previous Button
    if(isset($_POST['but_prev'])){
        $row = $_POST['row'];
        $row -= $rowperpage;
        if( $row < 0 ){
            $row = 0;
        }
    }

    // Next Button
    if(isset($_POST['but_next'])){
        $row = $_POST['row'];
        $allcount = $_POST['allcount'];

        $val = $row + $rowperpage;
        if( $val < $allcount ){
            $row = $val;
        }
    }

    // generating orderby and sort url for table header
    function sortorder($fieldname){
        $sorturl = "?order_by=".$fieldname."&sort=";
        $sorttype = "asc";
        if(isset($_GET['order_by']) && $_GET['order_by'] == $fieldname){
            if(isset($_GET['sort']) && $_GET['sort'] == "asc"){
                $sorttype = "desc";
            }
        }
        $sorturl .= $sorttype;
        return $sorturl;
    }
    ?>
</head>
<body>

<div id="content">
    <style>
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
    <table width="100%" id="emp_table" border="1">
        <tr class="tr_header">

            <th ><a href="<?php echo sortorder('id_facultate'); ?>" class="sort">ID Facultate</a></th>
            <th ><a href="<?php echo sortorder('domeniu_facultate'); ?>" class="sort">Domeniu</a></th>
            <th ><a href="<?php echo sortorder('adresa'); ?>" class="sort">Adresa</a></th>
            <th ><a href="<?php echo sortorder('nrSali'); ?>" class="sort">Nr Sali</a></th>
            <th ><a href="<?php echo sortorder('id_universitate'); ?>" class="sort">ID Universitate</a></th>
        </tr>
        <?php

        $sql = "SELECT COUNT(*) AS cntrows FROM Facultate";
        $result = mysqli_query($link,$sql);
        $fetchresult = mysqli_fetch_array($result);
        $allcount = $fetchresult['cntrows'];


        $orderby = " ORDER BY id desc ";
        if(isset($_GET['order_by']) && isset($_GET['sort'])){
            $orderby = ' order by '.$_GET['order_by'].' '.$_GET['sort'];
        }


        $sql = "SELECT * FROM Facultate ".$orderby." limit $row,".$rowperpage;
        $result = mysqli_query($link,$sql);
        $sno = $row + 1;
        while($fetch = mysqli_fetch_array($result)){
            $name = $fetch['id_facultate'];
            $salary = $fetch['domeniu_facultate'];
            $gender = $fetch['adresa'];
            $city = $fetch['nrSali'];
            $email = $fetch['id_universitate'];
            ?>
            <tr>

                <td align='center'><?php echo $name; ?></td>
                <td align='center'><?php echo $salary; ?></td>
                <td align='center'><?php echo $gender; ?></td>
                <td align='center'><?php echo $city; ?></td>
                <td align='center'><?php echo $email; ?></td>
                <div class='btn-group'>
                    <a class='btn btn-outline-warning' href='edit.php/?id=" .$row['id_universitate']."'>Edit</a>
                    <a class='btn btn-outline-danger' href='delete.php/?id=" .$row['id_universitate']."' >Delete</a>
                </div></td>";
            </tr>
            <?php
            $sno ++;
        }
        ?>
    </table>

</div>
</body>
</html>