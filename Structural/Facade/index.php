<?php

use DesignPatterns\Structural\Facade\Entities\Cart\Cart;
use DesignPatterns\Structural\Facade\Entities\Product\Name;
use DesignPatterns\Structural\Facade\Entities\Product\Product;
use DesignPatterns\Structural\Facade\Entities\Product\ProductId;
use DesignPatterns\Structural\Facade\Entities\Product\Status;

// Autoloader classes

require __DIR__ . '/../../app/AutoLoader.php';
$autoloader = new \app\lib\AutoLoader();
$autoloader->addNamespace('DesignPatterns\\Structural\\Facade', realpath(__DIR__));
$autoloader->register();

$cart = new Cart();
$product1 = new Product(
    new ProductId(1),
    new Name('Test product 1'),
    new Status('active_yes')
);

$product2 = new Product(
    new ProductId(2),
    new Name('Test product 2'),
    new Status('active_yes')
);

$cart->addProduct($product1);
$cart->addProduct($product2);

$cart->removeProduct(1);
print_r($cart);
