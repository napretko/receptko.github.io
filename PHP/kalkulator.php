<?php
    session_start();
    $db=new mysqli('localhost','root','','recepti') or die("Ni se mogoče povezati");

    $selectOption = $_GET['jedi'];

    $sql2="SELECT * FROM recept WHERE ime_jedi = $selectOption";
	$result2 = $db->query($sql);
	while($rows2 = $result2->fetch_assoc())
	{
        $kalorije = $rows2['kalorije'];

        echo $kalorije;
    }
?>