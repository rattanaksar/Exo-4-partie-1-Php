<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4 : Les variables PHP</title>
</head>
<body>
    <h1>Exo 4 Partie : Les variables PHP</h1>
    <?php
        echo 'ceci est une chaine simple de type string';
        echo "<br>";
        $a= 1234;
        echo $a;
        echo "<br>";
        $var='42352.23';
        $float_value_of_var = floatval($var);
        echo $float_value_of_var;        
        echo "<br>";
        echo '"string": '.(boolval("string") ? 'true' : 'false')."\n";
    ?>
</body>
</html>