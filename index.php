<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet0 Exercice02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet03 Exercice02</h1>
            <h2 class="col-12 text-info text-center">Créez une fonction qui retourne une chaîne de caractère.</h2>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary justify-content-center">
            <?php
               $text = 'Hello Lovely !';
               function returnString($string = 'Hello Lovely !'){
                   return $string;
               }
               echo returnString();
            ?>
            <?php
               $text = 'Hello my dear !';
               function returnString2($string1){
                   return $string1;
               }
               echo returnString2($text);
            ?>
        </div>
    </div>
</body>
</html>