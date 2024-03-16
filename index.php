<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO RPG</title>
</head>
<body>
    <h1>Exercice personnel de POO</h1>
    <h2>Thème : RPG</h2>
<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});

//===================== Characters =====================// 
$character1 = new Character("Flibouche");

//===================== Actions =====================// 
echo $character1->getInfos();



?>
</body>
</html>