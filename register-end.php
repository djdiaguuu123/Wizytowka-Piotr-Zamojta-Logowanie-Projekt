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
    $email = $_POST['email'];
    //zapytanie
    $sql = "INSERT INTO uzytkownicy (user, pass, email, kredyt, iloscZamowien, iloscUslug, dniPremium) VALUES ('$login', '$passwd', '$email', 0, 0, 0, 0)";
    //wyslanie zapytania przez if.Jak zapytanie nie bezie moglo byc wykonane to if sie nie wykona. Zapytanie do bazy danych
    if ($rezultat = @$dbConnect->query($sql))
    {
        $_SESSION['blad'] = '<span style="color:green">Konto zostało utworzone! Zaloguj się teraz.</span>';
        header('Location: index.php');
        //na koncu czyszczenie ramu
        $rezultat->close();
    }
    //zakonczenie polaczneia
    $dbConnect->close();
}
?>