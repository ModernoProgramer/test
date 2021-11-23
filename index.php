<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informação Do Pc</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php

$tempo = 12;
$hora = date("H");

if ( $tempo < $hora ):
    $css = "background-color: white;";
elseif ( $tempo =< $hora ):
    $css = "background-color: yellow;";
elseif ( $tempo < $hora):
    $css = "backgorund-color: black;";
else:
    $css = "background-color: red;";
endif;

echo '<style>'.$css.'</style>';

?>
<body>
    <header>
<h1>Informaçao Do Pc</h1>
    </header>
<section>
<div>
    <img src="coputador.jpg" alt="coputador.jpg">
</div>

</section>
<footer>
<p>&copy;Informaçao Do pc</p>

<?php

error_reporting(E_ALL); ini_set("display_erros",1);

$shellcommand1 = shell_exec('$HOME');
$shellcommand2 = shell_exec('$LOGNAME');
$shellcommand3 = shell_exec('$LANGUAGE');
$shellcommand4 = shell_exec('$UID');
$shellcommand5 = shell_exec('$DISPLAY');
$shellcommand6 = shell_exec('$COLORTERM');
$shellcommand7 = shell_exec('$SHELL"');

echo $shellcommand1;
echo $shellcommand2;
echo $shellcommand3;
echo $shellcommand4;
echo $shellcommand5;
echo $shellcommand6;
echo $shellcommand7;

?>
</footer>
<script src="fundo.js"></script>
</body>
</html>
