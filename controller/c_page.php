<?php
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'home':
                include_once "model/m_product.php";
                $productNew = product_getNew();
                $productPurchase = product_getMorePurchase();
                include_once 'view/v_header.php';
                include_once 'view/v_home.php';
                include_once 'view/v_footer.php';
                break;
            case 'introduce':
                include_once 'view/v_header.php';
                include_once 'view/v_introduce.php';
                include_once 'view/v_footer.php';
                break;
            case 'contact':
                include_once 'view/v_header.php';
                include_once 'view/v_contact.php';
                include_once 'view/v_footer.php';
                break;
            case 'profile':
                include_once 'view/v_header.php';
                include_once 'view/v_profile_edit.php';
                include_once 'view/v_footer.php';
                break;
        }
    }else{
        header("location: ?mod=page&act=home");
    }
?>