<?php

session_start();
//directories
define('CLIENT_DIR', '../Store/');
define('CART_DIR', '../Store/');
define('PRODUCT_DIR', '../Store/');
define('SMARTY_DIR', 'C:/xampp/htdocs/Store/vendor/smarty/smarty/');

// setups
include(CLIENT_DIR . 'libs/client_setup.php');
include(CART_DIR . 'libs/cart_setup.php');
include(PRODUCT_DIR . 'libs/product_setup.php');

//class instance
$client = new Client();
$cart = new Cart();
$product = new Product();

// set the current action
$_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';
echo $_action;
switch ($_action) {
    case 'loginform':
        $client->showloginform();
        break;
    case 'login':
        $client->login();
        break;
    case 'logout':
        $client->logout();
        break;
    case 'contact':
        $cart->showcontact();
        break;
    case 'about':
        $cart->showabout();
        break;
    case 'products':
        $product->listproducts();
        break;
    case 'registerform':
        $client->displayregform();
        break;
    case 'register':
        $client->newclient($_POST);
        break;
    case 'verification':
        $client->accountvalidation();
        break;
    case 'productdestination':
        $product->productdestination();
        break;
    case 'index':
        $cart->index();
        break;
    case 'clients':
        $client->displayclients($client->getall());
        break;
    case 'cart':
        $cart->showcart();
        break;
    default:
        break;
}
?>



