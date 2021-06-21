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
                <h1>Kako shujšati</h1>
                    <p>Večina ljudi se ne zaveda kako priti do hujšanja, zato slepo sledijo programom katere drugi naredijo za njih. Pri takšnem načinu ponavadi vedno pride
                    do tega, da se prekršimo in prekinemo naš program, kar nas spravi nazaj na začetno točko. Edina stvar, ki vpliva na izgubo kil je, da zaužijemo manj kalorij kot jih porabimo.
                    Najbolj preprosto je če si zapisujemo koliko kalorij zaužijemo in pred tem z TDEE kalkulatorjem zračunamo koliko jih porabimo glede na našo tedensko aktivnost.</p>
                    
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
                Poznamo veliko različnih programov, ki jih izbiramo, ko želimo shujšati. Ker je dieta samo način prehranjevanja, so ti programi samo 
                različen način prehranjevanja. Poznamo : Rastlinsko dijeto, Dieta z nizkimi ogljikovimi hidrati, paleo dieta, dieta z nizkimi maščobami ali dieta z prekinitvenim postom. Vnaprej bodo predstavljeni vsi ti programi bolj podrobno, da si boste lažje izbrali kateremu boste sledili in kateri vam najbolj ustreza.
            </p>
        </div>
    </div>
    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/Rastlinska.jpg" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Rastlinska dieta</p>
            Ta vrsta prehranjevanja se deli na tri dele, v glavnem je pomembno, da se prehranjujemo večino brez mesnih izdelkov. Eni se prekršijo z tem da uživajo tudi ribe, kar jim pomaga pri držanju diete.
            Druga vrsta je, kjer uživamo živalske izdelke, kot so mleko ali jajca, pri tretji "veganski" pa to ni dovoljeno, vse kar je živalskega ne sme biti na našem krožniku.
        </div>
    </div>

    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/LowCarb.jpg" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Dieta z nizkimi ogljikovimi hidrati</p>
            Pri tem načinu prehranjevanja se izogibamo jedi, ki vsebujejo ogljikove hidrati. Torej ne jemo testenin, riža, kruha in podobne jedi, ki vsebujejo ogljikove hidrate.
            Poleg tega lahko jemo vse ampak kot pri vsaki shujševalni dieti moramo biti pozorni na to koliko hrane zaužijemo. Ta dieta torej vsebuje veliko beljakovin in maščob.
        </div>
    </div>

    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/Paleo.jpg" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Paleo dieta</p>
            Paleo dieta se predvsem drži tega, da jemo kot so jedli v časih nabiralništva. izogibamo se vsakršne procesirane hrane, torej jemo samo hrano, ki ni procesirana.
            Jemo veliko mesa in predvsem živalskim izdelkov in pa tudi rastlniskih ampak nič kar je že procesirano.
        </div>
    </div>


    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/LowFat.jpg" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Dieta z nizkimi maščobami</p>
             Podobno kot dieta brez ogljikovih hidratov, je precej preprosta za spremljati. Izogibamo se kolikor se da vsem maščobam.
             Tu seveda lahko zaužijemo kolikor želimo ogljikovih hidratov in beljakovin. Kot je že v imenu najbolj pomembno je, da zaužijemo čim manj maščob.
        </div>
    </div>


    <div class="rastlinska_dieta">
        <div class="rastlinska_leva">
            <img src="../Images/Fasting.png" alt="" >
        </div>
        <div class="rastlinska_desna">
            <p class="gold2">Deita z prekinitvenim postom</p>
            Pri tej dieti lahko jemo kar želimo, nič ni omejeno. Pomemben je le čas prehranjevanja. Odvisno kako se odločimo si postavimo čas kadar ne smemo jesti in lahko pijemo samo vodo. Ponavadi 16 ur ne jemo in 8 ur jemo, lahko pa tudi bol ekstremo 20 in 4 ure.
            Do zdaj je ta dieta pokazala največ prednosti in nič kaj slabega kar bi nas odgnalo od nje. 
        </div>
    </div>