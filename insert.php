<?php
$db = new PDO('mysql:host=localhost;dbname=telefoons',
    "root" . "");
$melding = "";
if (isset($_POST['verstuur'])) {
    if (empty($_POST['merk'])) {
        $melding = "vul alles in kanker mongool";
    }
}

$sql = "INSERT INTO merk (naam) VALUES (:name)";

$stmt = $db->prepare($sql);
$name = $_POST['merk'];
$stmt->execute(['name' => $name])
?>
<html lang="nl">
<head>
    <title>OEFENOPDRACHT</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form  method="post">
<h4 style="margin: 50px">
    Voeg een merk toe!<br><br>
<input type="text" name="merk"><br><br>

<input  type="submit" name="verstuur" value="Verstuur">
    <br>
    <br>
    <?php echo $melding?>
    <br>
    <br>
    <button style="margin-left: 685px" class="btn btn-secondary" type="submit"><a href="index.php" class="text-reset text-decoration-none">Ga terug naar overzicht pagina!</a></button>

</h4>
</form>
</body>
</html>
<label></label>
