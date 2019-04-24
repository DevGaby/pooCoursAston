<?php

require '../../Product.php';
require '../../ProductStoreInterface.php';
require '../../MockProductStore.php';

$product = new Product();
$product ->setId(1);

$store = new MockProductStore();
$store ->add($product);

echo '<pre>';
print_r($store->all());
echo '</pre>';