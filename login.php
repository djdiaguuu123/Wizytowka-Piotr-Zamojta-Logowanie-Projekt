<?php
//rozpoczęcie sesji
session_start();
if ((!isset($_POST['login'])) || (!isset($_POST['password']))){
    header('Locaton: index.php');
    exit();
}
//połączenie pliku config.php do zaloguj.php
require_once "config.php";
//łączenie z bazą danych
$dbConnect = @new mysqli($mysqlHost, $mysqlUser, $mysqlPasswd, $mysqlDbName);
//obsluga bledow
if ($dbConnect->connect_errno!=0)
{
    echo "<p>Error: </p>".$dbConnect->connect_errno . "<p>Szczegóły: </p>".$dbConnect->connect_error;
}
//jezeli nie ma bledow
else {
    //Pobranie loginu i hasła metodą post z html
    $login = $_POST['login'];
    $passwd = $_POST['password'];
    //zabezpieczenie, zamiana na encje
    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $passwd = htmlentities($passwd, ENT_QUOTES, "UTF-8");
    //wyslanie zapytania przez if.Jak zapytanie nie bezie moglo byc wykonane to if sie nie wykona. Zapytanie do bazy danych
    if ($rezultat = @$dbConnect->query(
    //sprintf pilnuje zmiennej %s - string. w miejsce %s wstawi argumenty.
        sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND pass='%s'",
            //mysqli ... zabezpiecza przed wstrzykiwaniem SQL'a
            mysqli_real_escape_string($dbConnect,$login),
            mysqli_real_escape_string($dbConnect,$passwd))))
    {
        //zwraca ile wynikow
        $ileUser = $rezultat->num_rows;
        if($ileUser>0)
        {
            $_SESSION['czyZalogowany'] = true;

            //zapisanie wyszukanych rekordow z sql do tablicy asiocacyjnej (jako index sluza nazwy kolumn z bazy)
            $wiersz = $rezultat->fetch_assoc();
            //sesja - zmienna pomiedzy plikami PHP
            $_SESSION['id'] = $wiersz['id'];
            $_SESSION['user'] = $wiersz['user'];
            $_SESSION['email'] = $wiersz['email'];
            $_SESSION['kredyt'] = $wiersz['kredyt'];
            $_SESSION['iloscZamowien'] = $wiersz['iloscZamowien'];
            $_SESSION['iloscUslug'] = $wiersz['iloscUslug'];
            $_SESSION['dniPremium'] = $wiersz['dniPremium'];
            //wywalenie zmiennej blad
            unset($_SESSION['blad']);
            //na koncu czyszczenie ramu
            $rezultat->close();
            //przekierowanie do innego pliku (po zalogowaniu)
            header('Location: panel.php');
        } else{
            $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login i/lub hasło!</span>';
            header('Location: index.php');
        }
    }
    //zakonczenie polaczneia
    $dbConnect->close();
}
?>