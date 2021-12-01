<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php echo "<p> PHP généré par le module php dans apache </p>"; ?>
        </title>

    </head>
    <body>
        <?php

//on affiche des chaines de caracteres
    echo 'bonjour<br><BR>';
    echo "tonton<br><BR>";
    echo ("hjkjklkdlj<BR><BR>");
    echo '<br>1234565434567 ceci est une chaine de caractère </BR><BR>';

// on affiche un entier
echo 10 .'</br>' ;

echo "concaténation";
  $a = 33.3 .' ceci est un decimal <BR><BR>';
  $b = 'chaine de caractères <BR> <BR>';
  $c = 33-3 ." ceci est un entier <BR><BR>";

//affichage les variables

  echo $a ;
  echo '<br>' ;
  echo $b, $a, $c ;
  echo " \t Bonjour le monde \t" ."tabulation";
  //echo $b; 

  echo nl2br("sun \n moon \n moon1 \n moon2 "); 
  echo nl2br("foo isn't\n bar");

  ?>

    </body>
</html>