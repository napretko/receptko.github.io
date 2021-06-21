<?php
session_start();

$db=new mysqli('localhost','root','','recepti') or die("Ni se mogoče povezati");

$uporabnisko_ime=$_POST['uporabnisko_ime'];
$Ime=$_POST['Ime'];
$Priimek=$_POST['Priimek'];
$Gmail=$_POST['Gmail'];
$Geslo=$_POST['Geslo'];
$Telefonska=$_POST['Telefonska'];

$sql="SELECT uporabnisko_ime FROM uporabnik WHERE uporabnisko_ime='$uporabnisko_ime'";
$result=$db->query($sql);
if ($result=$db->query($sql)) 
{
  $row=$result->fetch_assoc();
  if($row)
  {
    $_SESSION['napaka']="uporabnisko_ime";
    header('location: ../HTML/registracija.php');
  }

  else 
  {
    $sql="SELECT Gmail FROM uporabnik WHERE Gmail='$Gmail'";
    $result=$db->query($sql);
    if ($result=$db->query($sql)) 
    {
      $row=$result->fetch_assoc();
      if($row)
      {
        $_SESSION['napaka']="Gmail";
        header('location: ../HTML/registracija.php');
      }
      else 
      {
        $sql="SELECT Telefonska FROM uporabnik WHERE Telefonska='$Telefonska'";
        $result=$db->query($sql);
        if ($result=$db->query($sql)) 
        {
          $row=$result->fetch_assoc();
          if($row)
          {
            $_SESSION['napaka']="Telefonska";
            header('location: ../HTML/registracija.php');
          } 

          else 
          {
            $query="INSERT INTO uporabnik(uporabnisko_ime, Gmail, Ime, Priimek, Geslo, Telefonska, Admin) VALUES('$uporabnisko_ime','$Gmail','$Ime','$Priimek','$Geslo','$Telefonska','NE');";
            $db->query($query);
            $sql="SELECT id_uporabnik FROM uporabnik WHERE uporabnisko_ime='$uporabnisko_ime'";
            $result=$db->query($sql);

            if ($result=$db->query($sql)) 
            {
              $row=$result->fetch_assoc();
              if($row)
              {
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $row['id_uporabnik'];
                $_SESSION["uporabnisko_ime"] = $uporabnisko_ime;
                $_SESSION["Admin"]="NE";
                header('Location: ../HTML/index.php');
              }
              else 
              {
                echo "napaka pri idju";
              }
            }

              else 
              {
                $sql = "DELETE FROM uporabnik WHERE id_uporabnik = '$id_uporabnik'";
                if ($db->query($sql) === TRUE) 
                {
                  header("location: ../HTML/registracija.php");
                } 
                else 
                {
                  echo "Error deleting record: " . $db->error;
                }

              }
          } 
        }

      }
    }
  }
}

mysqli_close($db);