<?php
$pol= mysqli_connect("localhost","root","","zadanie") or die ('Brak polaczenia z serwerem');
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$nazwa=$_POST['nazwa'];
$data=$_POST['data'];
$rozpoczecie=$_POST['rozpoczecie'];
$zakonczenie=$_POST['zakonczenie'];
$a=$_POST['a'];
$b=$_POST['b'];

$dodaj_dane=mysqli_query($pol,"INSERT INTO `terminarz`(`imie`, `nazwisko`, `nazwa`, `data`, `rozpoczecie`, `zakonczenie`) VALUES ('$imie','$nazwisko','$nazwa','$data','$rozpoczecie','$zakonczenie')");
header('Location: zalogowano.php');
?>