<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa Form</title>
</head>
<body>
    <?php
        $paragrafo = $_POST["Paragrafo"];
        $parola = $_POST["parolaCensurata"];
        $asterischi = "<span style=color:grey>***</span>";
        $stringaCensurata = str_ireplace( $parola , $asterischi , $paragrafo);
    ?>

    <h2>Il Paragrafo scritto è:</h2>
        <p><?php echo $paragrafo;?></p>
    <p>La Lunghezza del paragrafo è :<?php echo strlen($paragrafo);?></p>

    <h2>La parola Censurata è:</h2>
        <p><?php echo $stringaCensurata; ?></p>
    <p>La lunghezza della stringa censurata é:<?php echo strlen($stringaCensurata); ?></p>
</body>
</html>