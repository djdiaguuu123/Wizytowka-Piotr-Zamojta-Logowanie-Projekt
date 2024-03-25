<?php
//rozpoczęcie sesji
session_start();
//sprawdzanie czy zalogowany
if ((isset($_SESSION['czyZalogowany'])) && ($_SESSION['czyZalogowany']==true)){
    header('Location: panel.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Zaloguj się</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-box">
    <h2>Zaloguj się</h2>
    <!--Tworzenie formularza. Metoda post. Odniesienie do login.php-->
    <form action="login.php" method="post">
        <div class="user-box">
            <input required type="text" name="login">
            <label>Login</label>
        </div>
        <div class="user-box">
            <input required type="password" name="password">
            <label>Hasło</label>
        </div>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <input type="submit" value="Zaloguj się" id="prz"> <br><br><br>
        <p1>Nie masz jeszcze konta? <a href="register.php">Zarejestruj się!</a></p1>
    </form>
    <?php
    //wyswietlanie bledu POKAZYWANIE TYLKO WTEDY JAK JEST ZADEKLAROANA ZMIENNA BLAD
    if(isset($_SESSION['blad'])) {
        echo $_SESSION['blad'];
    }
    ?>
</body>
</html>