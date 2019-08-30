<?php
$headerConfig = [
'title' => 'Карточка товара',
'styles'=>['style.css', 'product.css']
];

include('modules/header.php');

$template =[];
if(!empty($_GET['id'])){
$sql_product = "SELECT * FROM products WHERE id={$_GET['id']}";
$result_product = mysqli_query($db, $sql_product);
$data_product = mysqli_fetch_assoc($result_product);
$template = $data_product;
}else{
    header('Location: /catalog.php?id=1');
}
?>

<div  class="product">

<h1 class="product-head"> <?=$template['name']?> </h1>
<button data-product-id="<?= $template['id'] ?>"> Добавить в корзину</button>
<div class="product-desc"><?=$template['text']?></div>
<div class="product-price"><?=$template['price']?></div>
<div class="product-price"><?=$template['sku']?></div>
</div>


<?php
$footerConfig = [
    'script'=>['script.js', 'product.js']
];

include('modules/footer.php');

?>