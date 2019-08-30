<?php
$headerConfig = [
'title' => 'Каталог',
'styles'=>['style.css', 'catalog.css']
];

include('modules/header.php');

?>

<?php
$footerConfig = [
    'script'=>['script.js', 'catalog.js']
];

include('modules/footer.php');

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

  }

?>
    
<div data-catalog-id='<?= $template['id'] ?>' class="catalog">

<h1 class="catalog-head"> <?=$template['title']?> </h1>
<div class="catalog-desc"></div>
<div class="catalog-filters"></div>
<div class="catalog-products"></div>
<div class="catalog-pagination"></div>
<div class="catalog-preloader">Загрузка</div>
</div>

<?php
$footerConfig = [
    'script'=>['script.js', 'catalog.js']
];

include('modules/footer.php');

?>