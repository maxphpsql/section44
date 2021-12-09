<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> objet et tableau </title>
    </head>
    <body>
    <?php

//les booleens
$valeur = true;
$valeur = false;

var_dump($valeur);

// les tableaux
$couleur[0] = "orange" ;
$couleur[1] = "blue";
$couleur[2] = "jaune" ;
$couleur[3] = "black";
$couleur[7] = "purple";

// un autre tableau
$colors = array("green", "blue", "white");
// presentation du tableau
echo '<pre>';
var_dump($couleur);
echo '</pre>';
/// a vous de
$txt = "PHP";
echo "I love $txt! </br> and coding !";
//case sensitive
$color = "rouge";
echo "<br> Ma voiture est " . $color . "<br>";
echo "Ma maison est ". $color .  "<br>";
echo "Mon bateau est " . $color . "<br>";
// commenter du code

$x = 5 /* + 15 */ + 5;
echo $x;

//typage
$boleen = true;
$txt = "Hello world!";
$x = 5;
$y = 10.5;
//$couleur ;

echo '<pre>';
var_dump( "resultat de var_dump ligne 51", $y, $x,  $txt, $boleen, $colors, $couleur);
echo '</pre>';

$voiture = array( true ,"Volvo", "BMW", "Toyota");

echo '<pre>';
var_dump($voiture);
echo '</pre>';

//https://www.w3schools.com/php/php_arrays_indexed.asp

$euro = 6.55957;  
printf("%.0f",$euro);


    ?>
    </body>
</html>