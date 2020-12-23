<?php
include_once 'EmergencyDepartment.php';
//include_once 'Patient.php';

$ed = new EmergencyDepartment();

for ($i = 1; $i < 6; $i++) {
    $rand = rand(1, 6);
    $patient = new Patient("Bệnh nhân $i", $rand);
    $ed->add($patient);
}

echo "<pre>";
var_dump($ed);
echo "<hr>";

var_dump($ed->get());
echo "<hr>";

var_dump($ed->get());
echo "<hr>";

var_dump($ed);
echo "<hr>";


?>
<!--<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    fieldset {
        width: max-content;
        margin: 20px auto;
        text-align: center;
    }
</style>
<body>
<form action="" method="post">
    <fieldset>
        <legend>Thêm bệnh nhân</legend>
        Tên: <input type="text" name="inputName"><br>
        Code: <input type="number" name="inputCode"><br>
        <input type="submit">
    </fieldset>
    <fieldset>
        <legend>Danh sách các bệnh nhân</legend>
        <ul id="listPatients">
            <?php /*foreach ($ed->patients as $value): */?>
                <li><br>
                    <span>
                    Tên: <?php /*echo $value->name */?><br>
                    Code: <?php /*echo $value->code */?>
                    </span>
                </li>
            <?php /*endforeach; */?>
        </ul>
    </fieldset>
</form>
<form action="" method="get">
    <fieldset>
        <legend>Bệnh nhân hiện tại đang khám</legend>
        <span id="currentPatient">None</span><br>
        <input type="submit" value="Next">
    </fieldset>
</form>
</body>
</html>
--><?php
/*if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['inputName'];
    $code = $_POST['inputCode'];

    $patient = new Patient($name, $code);
    $ed->add($patient);
    header('Location: index.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $patient = $ed->get();
    $name = $patient->name;
    $code = $patient->code;
    echo "<script>document.getElementById('currentPatient').innerHTML = '$name<br>$code';</script>";
    header('Location: index.php');
}*/
    ?>