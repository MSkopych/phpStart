<?PHP 
echo ("odpowiedz z php, dane formy!<br>");
echo ($_POST['imie']."<br>");

if(!empty($_POST['nazwisko'])){
    echo("wypelni pole nazwisko <br>");
}
else{
    echo ($_POST['nazwisko']."<br>");
}


echo ($_POST['zawod']."<br>");
echo ($_POST['mail']."<br><br>");

if(!isset($_POST['wyksz'])){
    echo('wypelni pole wyksztalcenie <br>');
}
else
{
    echo("Zostalo wybrane wyksztalcenie: ".$_POST['wyksz']."<br>");
}




// isset() --- sprzwdza czy pole formulaza zostalo wypelnione, if wynik = true ==> danne przekazane, else wynik = false ==> danne nie przekazane do skruptu
// empty() --- sprzwdza czy argument zmiennej zostal pusta, if pusta empty = true; else empty = false;



?>