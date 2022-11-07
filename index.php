<?php
$db = new PDO('mysql:host=localhost;dbname=telefoons',
    "root" . "");
$query = $db->prepare("select naam FROM merk");
$query->execute();
$telefonen = $query->fetchAll(PDO::FETCH_ASSOC);


?>
<html lang="nl">
<head>
    <title>OEFENOPDRACHT</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<table>
    <tr>
        <th>merk</th>
        <th>model</th>
    </tr>
    <tr>
        <td><?php
            $teller = 1;

            foreach ($telefonen as $telefoon) {
                ;
                echo $teller, " ";
                echo $telefoon['naam'] . " <br>";
                $teller++;
            }
            ?></td>
        <td><?php
            $query = $db->prepare("select naam FROM model");
            $query->execute();
            $modellen = $query->fetchAll(PDO::FETCH_ASSOC);

            $teller = 1;

            foreach ($modellen as $model) {
                ;
                echo $teller, " ";
                echo $model['naam'] . " <br>";
                $teller++;
            }
            ?></td>
    </tr>
</table>
<button style="margin-left: 685px" class="btn btn-secondary" type="submit"><a href="insert.php" class="text-reset text-decoration-none">Merk toevoegen</a></button>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
</body>
</html>