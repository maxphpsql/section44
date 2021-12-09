<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Les conditions </title>
</head>
<body>
    <?php

    $nom = "leroy" ;
    $prenom = "pierre" ;
    $age = 19 ;
    // est ce que pierre est majeur

    // if ($age >= 18 ){
    //     //execute du code
    //     echo('pierre est majeur');
    // }
    // else{
    //     echo('pierre est mineur');
    // }
    // if (condition) {execution 01} else {execution 02}

(($age >= 18) ? $reponse= " majeur -- " : $reponse="mineur -- "); 

echo $reponse ;

    ?>
</body>
</html>