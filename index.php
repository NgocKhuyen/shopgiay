<?php
    $baseUrl = 'http://localhost:3000/';
    session_start();
    if(isset($_GET['mod'])){
        switch($_GET['mod']){
            case 'page':
                include_once 'controller/c_page.php';
                break;
            case 'product':
                include_once 'controller/c_product.php';
                break;
            case 'cart':
                include_once 'controller/c_cart.php';
                break;
            case 'checkout':
                include_once 'controller/c_checkout.php';
                break;
            case 'user':
                include_once 'controller/c_user.php';
                break;
            default:
            include_once 'controller/c_page.php';
            break;
        }
    }else{
        header("location: ?mod=page&act=home");
    }
?>