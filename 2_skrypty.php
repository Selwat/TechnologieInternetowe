<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/table.css">
    <title>Document</title>
</head>
<body>
    <h4>Poczatek pliku</h4>
    <?php
    //include, require, include_once, require_once
    //include "./scripts/skripts_1.php";
    //require "./scripts/skripts_1.php";//once wyswietla tylko raz
    ?>
    <h4>Koniec pliku</h4>

    <h3>Lista</h3>
    <?php
        require_once "./scripts/list.php";
        require_once "./scripts/table.php";
    ?>
</body>
</html>
