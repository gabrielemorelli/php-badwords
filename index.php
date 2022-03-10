<?php
$paragrafoPrincale = "nuovo esercizio con php";
echo '<h1> Paragrafo principale </h1>';
echo $paragrafoPrincale;
echo '<h2> Lunghezza Paragrafo </h2>';
$LunghezzaParagrofo = strlen($paragrafoPrincale);
echo $LunghezzaParagrofo;

$paroladacensurare = $_GET['censura'];
$Censurato = str_ireplace($paroladacensurare, '***', $paragrafoPrincale);
echo '<h2>  Paragrafo Censurato </h2>';
echo $Censurato;

?>



