<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'checkout':
            include_once 'model/m_checkout.php';
            include_once 'model/m_cart.php';

            if (!isset($_SESSION['user_tk'])) {
                header('Location: ?mod=user&act=login');
            }
            if (is_array($_SESSION['user_tk'])) {
                $id_user = $_SESSION['user_tk']['id_user'];
            } else {
                $id_user = $_SESSION['user_tk'];
            }
            $cartItems = cart_getByUser($id_user); 



            include_once 'view/v_header.php';
            include_once 'view/v_payment.php';
            include_once 'view/v_footer.php';
            break;

        default:
    }
} else {
    header('location: ?mod=page&act=home');
}
?>