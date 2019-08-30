<?php
include('../config/db.php');
include('../modules/functions.php');

$response = [
'products'=>[],
'pagination'=>[
    'countPage'=> 1,
    'nowPage'=> 1
]
];

$product_on_page = 3;
$now_page = 1;

if(!empty($_GET['id'])){

    // Гет параметр о номере страницы, проверить если не пустой.
    if (!empty($_GET['nowPage'])){
        $now_page =  $_GET['nowPage']; 
    }

    // Найдем какое кол-во товаров всего есть
    $sql_products_all = "SELECT products.* FROM products 
    INNER JOIN catalogs_products ON catalogs_products.product_id = products.id 
    WHERE catalogs_products.catalog_id = {$_GET['id']}";

    $result_products_all = mysqli_query($db, $sql_products_all);
    $product_counts = mysqli_num_rows($result_products_all);
    // ceil () - округление в большую сторону
    $count_page = ceil($product_counts/ $product_on_page);

    $response['pagination']['countPage'] = $count_page;
    $response['pagination']['nowPage'] = $now_page;

    $start_row_page = ($now_page - 1) * $product_on_page;

    // Выводим из БД карточки продуктов
    // Формируем запрос в БД
    $sql_products = "SELECT products.* FROM products 
    INNER JOIN catalogs_products ON catalogs_products.product_id = products.id 
    WHERE catalogs_products.catalog_id = {$_GET['id']}
    LIMIT {$start_row_page}, {$product_on_page}
    ";
    // Отправляем запрос
    $result_products = mysqli_query($db, $sql_products);

    // Количество записей в переменной продукты
    $counts = $result_products->num_rows;

    // С помощью цикла выводим по очереди все продукты из БД
    while ($counts>0) {
        $products = mysqli_fetch_assoc($result_products);
        $response['products'][] = $products;
        $counts--;
    
    }   
}

sleep(3);
echo json_encode($response);
?>

