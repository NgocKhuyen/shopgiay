<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'cart':
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
            $_SESSION['cart'] = $cartItems;

            $total = 0;
            foreach ($cartItems as $item) {
                $total += $item['gia'] * $item['soluong'];
            }

            // Nếu là request AJAX (dùng để chỉ lấy tổng)
            if (!empty($_GET['ajax']) && $_GET['ajax'] == '1') {
                header('Content-Type: application/json');
                echo json_encode(['success' => true, 'total' => $total]);
                exit;
            }

            $countCart = get_cart_total($id_user);
            $_SESSION['count'] = $countCart['count'];

            include_once 'view/v_header.php';
            include_once 'view/v_cart.php';
            include_once 'view/v_footer.php';
            break;

        case 'add_to_cart':
            include_once 'model/m_cart.php';
            include_once 'model/m_product.php';
    
            if (!isset($_SESSION['user_tk'])) {
                header('Location: ?mod=user&act=login');
                exit;
            }
            $id_giaychitiet = $_POST['id_giaychitiet'];
            $quantity = $_POST['quantity'] ?? 1;
            $price = $_POST['price'] ?? 0;
            $id_user = $_SESSION['user_tk']['id_user'];
            if (!$id_giaychitiet) {
                $_SESSION['error'] = "Thiếu thông tin sản phẩm.";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
            $productDetail = get_shoeDetail_quantity($id_giaychitiet);
            if (!$productDetail) {
                $_SESSION['error'] = "Sản phẩm không tồn tại.";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
            $cart = get_cart($id_giaychitiet, $id_user);
            $currentQuantity = $cart ? $cart['soluong'] : 0;
            $totalQuantity = $currentQuantity + $quantity;
            // Kiểm tra tồn kho
            if ($totalQuantity > $productDetail['tonkho']) {
                $_SESSION['error'] = "Chỉ còn {$productDetail['tonkho']} sản phẩm trong kho. Vui lòng giảm số lượng.";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit;
            }
            if($cart) {
                $newQuantity = $cart['soluong'] + $quantity;
                update_cart_quantity($id_giaychitiet, $id_user, $totalQuantity, $price);
            } else {
                add_to_cart($id_giaychitiet, $id_user, $quantity, $price);
            }
            header('Location: ?mod=cart&act=cart');
            break;

        case 'update_qtnCart': 
            include_once 'model/m_cart.php';
            header('Content-Type: application/json');
            $id_user = $_SESSION['user_tk']['id_user'];
            $id_chitiet = $_POST['id_chitiet'] ?? null;
            $quantity = $_POST['quantity'] ?? 1;
            $price = $_POST['price'] ?? 1;
            $success = update_cart_quantity($id_chitiet, $id_user, $quantity, $price);
            echo json_encode(['success' => $success]);
            exit;
        case 'del_cart': 
            include_once 'model/m_cart.php';
            $id_cart = $_POST['id_giohang'];
            if ($id_cart) {
                del_cart($id_cart);
            }
            header('Location: ?mod=cart&act=cart');
            break;
        default:
    }
} else {
    header('location: ?mod=page&act=home');
}
?>