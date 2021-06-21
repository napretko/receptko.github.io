<?php 
session_start();
$db=new mysqli('localhost','root','','recepti') or die("Ni se mogoče povezati");

$uporabnisko_ime=$_POST['uporabnisko_ime'];
$Geslo=$_POST['Geslo'];

$sql="SELECT id_uporabnik , Geslo , Admin FROM uporabnik WHERE uporabnisko_ime='$uporabnisko_ime'";
$result=$db->query($sql);
if ($result=$db->query($sql)) 
{
  $row=$result->fetch_assoc();
  if($row)
  {
    if($row['Geslo']==$Geslo)
    {
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $row['id_uporabnik'];
      $_SESSION["Admin"]=$row['Admin'];
      $_SESSION["uporabnisko_ime"] = $uporabnisko_ime;

      header("location: ../HTML/index.php");
    }
    else 
    {
      $_SESSION['napaka']="Geslo";
      echo "Napaka :( error 1";
      header('location: ../HTML/prijava.php');
    }
  }

  else 
  {
    $sql2="SELECT id_uporabnik , Geslo , Admin FROM admin WHERE uporabnisko_ime='$uporabnisko_ime'";
    $result2=$db->query($sql2);
    if ($result2=$db->query($sql2)) {
      $row2=$result2->fetch_assoc();
      if ($row2) {
        if($row2['Geslo']==$Geslo)
        {

          $_SESSION["loggedin"] = true;
          $_SESSION["id"] = $row2['id_uporabnik'];
          $_SESSION["admin"]=$row2['Admin'];
          $_SESSION["uporabnisko_ime"] = $uporabnisko_ime;

          header("location: ../HTML/administrator.php");

        }
        else {
          $_SESSION['napaka']="Geslo";
          header('location: ../HTML/prijava.php');
        }
      }
      else {
        $_SESSION['napaka']="Uporabnisko_ime1";
        header('location: ../HTML/prijava.php');
      }
    }
  }
}
else {
  echo "Napaka :( error 523";
}