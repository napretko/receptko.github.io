<?php
session_start();
$db=new mysqli('localhost','root','','recepti') or die("Ni se mogoče povezati");

/*Podatki za recept*/
$id = $_POST['id'];
$ime = $_POST['ime_jedi'];
$opis = $_POST['opis_jedi'];
$kalorije = $_POST['kalorije'];
$osebe = $_POST['osebe'];
$cas = $_POST['cas'];
//$slika = $_POST['slika'];
$vrsta = $_POST['vrsta'];

$sql = "INSERT INTO recept (id_recepta ,ime_jedi, opis_jedi, kalorije, količina, cas_priprave, /*slika,*/ idVrsta_jedi)
VALUES ('$id' ,'$ime', '$opis', '$kalorije', '$osebe', '$cas', /*'$slika',*/'$vrsta')";

/*Podatki za postopek*/
$postopek = $_POST['posotpek'];
$postopekopis = $_POST['posotpek-opis'];

$sql2 = "INSERT INTO recept_priprava (id_recepta ,id_koraka, opis_jedi)
VALUES ('$id', '$postopek', '$postopekopis')";

mysqli_query($db, $sql);
header('location: ../HTML/recepti.php');
