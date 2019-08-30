<?php 
include('config/db.php');
include('modules/functions.php');
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?= "Nordic || {$title}"?></title>
    <link rel="stylesheet" href="style.css">

</head>


<body>

    <div class="wrapper">
        <header class="head">
            <a href="" id='logo' class='logo'></a>
            <nav>
                <a href="catalog.php?id=1" class="top">Мужчинам</a>
                <a href="catalog.php?id=2" class="about-us">Женщинам</a>
                <a href="catalog.php?id=3" class="">Детям</a>
               
            </nav>
            <div class="burger">
                <div class="burger-line"></div>
            </div>
        </header>