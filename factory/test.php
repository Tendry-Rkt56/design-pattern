<?php

use App\Controller\ProductController;
use App\Controller\UserController;
use App\Factory;

require_once 'vendor/autoload.php';

$factory = new Factory();

/** Instanciation des entités via la class Factory */

$user = $factory->getEntity('user'); // Instance de l'entité User
$product = $factory->getEntity('product'); // Instance de l'entité Product
echo $user->all() ."\n";
echo $product->all() ."\n";

/** Instanciation des entités via la class Factory */

/** Instanciation des Controllers via la class Factory */

$userController = $factory->getController(UserController::class); // Instance du controller UserController
$productController = $factory->getController(ProductController::class); // Instance du controller ProductController
echo $userController->doSomething() ."\n";
echo $productController->doSomething() ."\n";

/** Instanciation des Controllers via la class Factory */
