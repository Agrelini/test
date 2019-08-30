<?php
$headerConfig = [
'title' => 'Корзина',
'styles'=>['style.css', 'basket.css']
];

include('modules/header.php');

// unset($_SESSION['basket']);
$template = ['products' =>[],
'full_price'=> 0
];

if (!empty($_SESSION['basket'])){
    // d($_SESSION['basket']);

    foreach($_SESSION['basket'] as $basketItem){ 
       echo $basketItem['id'];

$sql_basket_item = "SELECT * FROM products WHERE id={$basketItem['id']}";
$result_basket_item = mysqli_query($db, $sql_basket_item);
$data_basket_item = mysqli_fetch_assoc($result_basket_item);
$data_basket_item['quantity']=$basketItem['quantity'];
$data_basket_item['fullPrice']=$data_basket_item['quantity']*$data_basket_item['price'];
$template['products'][] = $data_basket_item;

$template['full_price'] += $data_basket_item['fullPrice'];
}
d($template);
}
?>

 <main class="main">
 <p>Hello World</p>
 <br>
        <div class="basket-wrapper">
                <div class="basket-wrapper__header flex flex-column-center">
                    <h1 class="basket-wrapper__header__head">Ваша корзина</h1>
                    <p class="basket-wrapper__header__p">Товары резервируются на ограниченное время</p>
                </div>
                <div class="basket-wrapper__items">
                    <div class="basket-wrapper__items__row flex flex-row">
                        <div class="items-left flex flex-row">
                            <p class="items-left__head title">Фото</p>
                            <p class="items-left__head title">Наименование</p>
                        </div>
                        <div class="items-right flex flex-row">
                                <p class="items-right__head title">Размер</p>
                                <p class="items-right__head title">Количество</p>
                                <p class="items-right__head title">Стоимость</p>
                                <p class="items-right__head title">Удалить</p>
                        </div>
                    </div>


                    <?php foreach ($template['products'] as $product): ?>
                    <div class="basket-wrapper__items__row flex flex-row">
                        <div class="items-left flex flex-row">
                            <div class="items-left__pic" style="background-image:url('<?=$product['pic']?>')"></div>
                            <div class="items-left__column flex flex-column-start">
                                <div class="items-left__column__head"><?=$product['name']?> </div>
                                <div class="items-left__column__sku"><?=$product['sku']?></div>
                            </div>
                        </div>
                        <div class="items-right flex flex-row">
                            <div class="item-size">39</div>
                            <div class="item-quantity">
                            <?=$product['quantity']?>
                            </div>
                            <div class="item-price"><?=$product['price']?></div>
                            <div class="item-delite">Х</div>
                        </div>
                        </div>
                    <?php endforeach; ?>  
 
                          
        </div>
    </main>

<?php
$footerConfig = [
    'script'=>['script.js', 'basket.js']
];

include('modules/footer.php');

?>