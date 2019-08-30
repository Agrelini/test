<?php 

    $headerConfig = [ 'title' =>"Каталог",
    'style' => ['stile.css', 'catalog.css']
];

    include("modules/header.php");

    // Сделаем массив для данных
    $template = [
        'title' =>"Мужчинам",
        'id' => 1,
        'products'=>[]
    ];

    if(!empty($_GET['id'])){
// Формируем запрос в БД
    $sql_catalog = "SELECT * FROM catalogs WHERE id = {$_GET['id']}";
// Отправляем запрос
    $result_catalog = mysqli_query($db, $sql_catalog);
// Переводим ответ из БД на язык PHP и добавляем в массив каталог
    $catalog = mysqli_fetch_assoc($result_catalog);

    // d($catalog);

// Массив каталог переводим в массив темплейт
    $template['title'] = $catalog['name'];
    $template['id'] = $catalog['id'];

    // Выводим из БД все карточки продуктов
    // Формируем запрос в БД
    $sql_products = "SELECT * FROM products";
    // Отправляем запрос
    $result_products = mysqli_query($db, $sql_products);

    // Количество записей в переменной продукты
    $counts = $result_products->num_rows;
    // $counts = mysqli_num_rows($result_products);

    // $i=0;
    // while ($i < $counts) {
    //     $products = mysqli_fetch_assoc($result_products);
    //     d($products);
    //         $i++;           
    //     }

// С помощью цикла выводим по очереди все продукты из БД
     while ($counts>0) {
        $products = mysqli_fetch_assoc($result_products);
        $template['products'][] = $products;
        $counts--;
      
     }  

     d($template['products']);

    // $products = mysqli_fetch_assoc($result_products);
    // while ($products) {
    //     d($products);
    //     $products = mysqli_fetch_assoc($result_products);   
    // }



    }

// Повторить Insert Select из уроков по БД
    
?>
        
<div class="catalog">

<h1 class="catalog-head"> <?=$template['title']?> </h1>
<div class="catalog-desc"></div>
<div class="catalog-filters"></div>
<div class="catalog-products"></div>
<div class="catalog-pagination"></div>

</div>