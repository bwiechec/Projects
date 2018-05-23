<?php
session_start();
require_once('php/counter.php');
require_once('php/dataCzas.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zaloguj się</title>
	<link rel="icon" href="fav.png">
	<link href="stylesheets/index.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
		<div class="container-fluid">
		<div class="navbar-header">
		<a class="navbar-brand"><span id="IEheader">Informatyka Europejczyka</span></a>
		</div>
		<ul class="nav navbar-nav">
		<li><a href="index.php">Strona główna</a></li>
		<li><a href="kontakt.php">Kontakt</a></li>
		<li><a href="zadania.php">Zadania</a></li>
		</ul>
		</div>
	</nav>
    
	<div class="container">
    <div class="col-md-5 col-sm-5">
    <fieldset>
        <legend>Panel logowania</legend>
        <?php if(isset($_SESSION['komunikat'])){
            echo $_SESSION['komunikat'];
            unset($_SESSION['komunikat']);
} ?>
    <div class="panel-body">
        <form role="form" action="php/login.php" method="post">
            <div class="form-group">
            <label for="emailInput">Adres e-mail</label>
            <input type="email" class="form-control" id="emailInput" name="emailInput">
            </div>
            
            <div class="form-group">
            <label for="passInput">Hasło</label>         
            <input type="password" class="form-control" id="passInput" name="passInput">
            </div>
            <input type="submit" class="btn btn-primary" value="Zaloguj się">
            <br>
            <br>
            <p>Nie masz konta? <a href="registration.php">Zarejestruj się</a></p>
        </form>
    </div>
    </fieldset>
    </div>

            
    <div class="col-md-6 col-sm-6">
        <fieldset>
        <legend>Witaj na naszej stronie</legend>
            <p>Znajdziesz tutaj zadania z kasiążki Informatyka Europejczyka. Wraz z ich treścią i rozwiązaniami, jednak aby mieć do nich dostęp musisz być zalogowany. Skorzystaj z formularza po lewej stronie. Lub jeżeli nie masz jeszcze konta w naszym serwisie możesz je założyć, korzystając z tego samego panelu po lewej stronie.</p>
        </fieldset> 
    </div>
        
    </div>
    
	<nav class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="container-fluid">
            <p class="navbar-text pull-right">Copyright © 2017 - Barosz Wiecheć & Cezary Nowacki</p>
            <p class="navbar-text pull-left">
            <?php    
                if($licznik == 1) {
            echo "Odwiedziłeś nas raz przez ostatnie 24 godziny.";
        } else {
            echo "Odwiedziłeś nas $licznik razy, przez ostatnie 24 godziny. ";
        }
            echo "Jest: ".date("d-m-Y H:i");       
        ?>
            </p>
		</div>
	</nav>
</body>
</html>