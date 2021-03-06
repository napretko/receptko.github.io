<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/ShujsevalniProgrami.css" type="text/css">
    <link rel="stylesheet" href="../CSS/index.css" type="text/css">
    <title>Receptko</title>
</head>

<body>
    
<header>
    <div class="nav-bar">
        <div class="nav-bar-left">
            <a class="gold2" href="index.php">Receptko</a>
        </div>
        <div class="nav-bar-right">
            <a href="recepti.php">Recepti</a>
            <a href="ShujsevalniProgrami.php">Dietni programi</a>
            <a href="nakupovalni seznam.php">Nakupovalni seznam</a>
            <a href="kalkulator kalorij.php">Kalkulator kalorij</a>

            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
            {
                echo '<a >'.$_SESSION['uporabnisko_ime'].'</a>';
                echo 
                    '<a href="../PHP/odjava.php">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 30 30" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </a>';
            }
            else
            {
                echo 
                    '<a href="prijava.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor">
                            <path fillRule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clipRule="evenodd" />
                        </svg>
                    </a>';
            }?>
        </div>         
    </div>
    <div class="ozadje"> </div>
</header>

<section class="Kako_shujsati">
    <div class="hujsanje">
        <div class="hujsanje_levo">
           <img src="../Images/Hujsanje.jpg" alt="Healthy plate" style=" width:450px; height:500px;"> 
        </div> 
        <div class="hujsanje_desno">
            <div class="text">
            <p class="gold2">Skrivnosti</p>
                <h1>Kako shuj??ati</h1>
                    <p>Ve??ina ljudi se ne zaveda kako priti do huj??anja, zato slepo sledijo programom katere drugi naredijo za njih. Pri tak??nem na??inu ponavadi vedno pride
                    do tega, da se prekr??imo in prekinemo na?? program, kar nas spravi nazaj na za??etno to??ko. Edina stvar, ki vpliva na izgubo kil je, da zau??ijemo manj kalorij kot jih porabimo.
                    Najbolj preprosto je ??e si zapisujemo koliko kalorij zau??ijemo in pred tem z TDEE kalkulatorjem zra??unamo koliko jih porabimo glede na na??o tedensko aktivnost.</p>
                    
            </div>
        </div>       
    </div>
    
</section>

<section class="vrste_programov">
    <div class="programi">
        <div class="programi_levo">
            <p class="gold2">Programi</p>
                <h1>Vrste programov</h1>
        </div>
        <div class="programi_desno">
            <p>
                Poznamo veliko razli??nih programov, ki jih izbiramo, ko ??elimo shuj??ati. Ker je dieta samo na??in prehranjevanja, so ti programi samo 
                razli??en na??in prehranjevanja. Poznamo : Rastlinsko dijeto, Dieta z nizkimi ogljikovimi hidrati, paleo dieta, dieta z nizkimi ma????obami ali dieta z prekinitvenim postom. Vnaprej bodo predstavljeni vsi ti programi bolj podrobno, da si boste la??je izbrali kateremu boste sledili in kateri vam najbolj ustreza.
            </p>
        </div>
    </div>
    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/Rastlinska.jpg" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Rastlinska dieta</p>
            Ta vrsta prehranjevanja se deli na tri dele, v glavnem je pomembno, da se prehranjujemo ve??ino brez mesnih izdelkov. Eni se prekr??ijo z tem da u??ivajo tudi ribe, kar jim pomaga pri dr??anju diete.
            Druga vrsta je, kjer u??ivamo ??ivalske izdelke, kot so mleko ali jajca, pri tretji "veganski" pa to ni dovoljeno, vse kar je ??ivalskega ne sme biti na na??em kro??niku.
        </div>
    </div>

    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/LowCarb.jpg" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Dieta z nizkimi ogljikovimi hidrati</p>
            Pri tem na??inu prehranjevanja se izogibamo jedi, ki vsebujejo ogljikove hidrati. Torej ne jemo testenin, ri??a, kruha in podobne jedi, ki vsebujejo ogljikove hidrate.
            Poleg tega lahko jemo vse ampak kot pri vsaki shuj??evalni dieti moramo biti pozorni na to koliko hrane zau??ijemo. Ta dieta torej vsebuje veliko beljakovin in ma????ob.
        </div>
    </div>

    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/Paleo.jpg" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Paleo dieta</p>
            Paleo dieta se predvsem dr??i tega, da jemo kot so jedli v ??asih nabiralni??tva. izogibamo se vsakr??ne procesirane hrane, torej jemo samo hrano, ki ni procesirana.
            Jemo veliko mesa in predvsem ??ivalskim izdelkov in pa tudi rastlniskih ampak ni?? kar je ??e procesirano.
        </div>
    </div>


    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/LowFat.jpg" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Dieta z nizkimi ma????obami</p>
             Podobno kot dieta brez ogljikovih hidratov, je precej preprosta za spremljati. Izogibamo se kolikor se da vsem ma????obam.
             Tu seveda lahko zau??ijemo kolikor ??elimo ogljikovih hidratov in beljakovin. Kot je ??e v imenu najbolj pomembno je, da zau??ijemo ??im manj ma????ob.
        </div>
    </div>


    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/Fasting.png" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Deita z prekinitvenim postom</p>
            Pri tej dieti lahko jemo kar ??elimo, ni?? ni omejeno. Pomemben je le ??as prehranjevanja. Odvisno kako se odlo??imo si postavimo ??as kadar ne smemo jesti in lahko pijemo samo vodo. Ponavadi 16 ur ne jemo in 8 ur jemo, lahko pa tudi bol ekstremo 20 in 4 ure.
            Do zdaj je ta dieta pokazala najve?? prednosti in ni?? kaj slabega kar bi nas odgnalo od nje. 
        </div>
    </div>