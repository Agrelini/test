<?php 
include('config/db.php');
include('modules/functions.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$headerConfig['title']?></title>
    
    <?php foreach($headerConfig['styles'] as $stylePath): ?>
    <link rel="stylesheet" href="/styles/<?=$stylePath?>">
<?php endforeach; ?>

</head>
<body>
<div class="wrapper">
    <header>
        <nav>

        </nav>

        <div class="user_basket">
            <a href='/basket.php' class="user_basket__basket">
                Корзина (<span class='user_basket__basket__count'></span>)
</a>
        </div>

</header>


