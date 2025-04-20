<?php
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'login':
                include_once 'view/v_header.php';
                include_once 'view/v_login.php';
                include_once 'view/v_footer.php';
                break;
            case 'post-login':
                include_once 'model/m_user.php';
    
                $email_err = $password_err = $login_err = "";
                $email = $password = "";

                if(empty($_POST['email'])) {
                    $email_err = "Email không được để trống";
                    $_SESSION['email_err'] = $email_err;
                } else {
                    $email = trim($_POST['email']);
                }

                if(empty($_POST['password'])) {
                    $password_err = "Mật khẩu không được để trống";
                    $_SESSION['password_err'] = $password_err;
                } else {
                    $password = trim($_POST['password']);
                }

                // Nếu có lỗi, quay lại trang đăng nhập
                if (!empty($email_err) || !empty($password_err)) {
                    header("Location: ?mod=user&act=login");
                    exit();
                }

                // Kiểm tra thông tin đăng nhập
                $user_tk = get_user($email, $password);

                if ($user_tk && isset($user_tk['id_user'])) {
                    unset($user_tk['password']);
                    $_SESSION['user_tk'] = $user_tk;
                    header("location: ?mod=page&act=home");
                } else {
                    $_SESSION['login_err'] = "Email hoặc mật khẩu không đúng";
                    header("Location: ?mod=user&act=login");
                }
          
                break;
            case 'logout':
                unset($_SESSION['user_tk']);
                unset($_SESSION['totalItems']);
                header('location: ?mod=user&act=login');
                break;
            case 'register':
                include_once 'view/v_header.php';
                include_once 'view/v_register.php';
                include_once "view/v_footer.php";
                break;
            case 'post-register':
                include_once 'model/m_user.php';

            $name = $email = $password = $rewrite = "";
            $name_err = $email_err = $password_err = $rewrite_err = $signUp_err = "";

            // Kiểm tra họ tên
            if(empty($_POST['name'])){
                $name_err = "Họ tên không được bỏ trống";
                $_SESSION['name_err'] = $name_err;
            } else {
                $name = trim($_POST['name']);
            }

            // Kiểm tra email
            if(empty($_POST['email'])){
                $email_err = "Email không được bỏ trống";
                $_SESSION['email_err'] = $email_err;
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $email_err = "Email không hợp lệ";
                $_SESSION['email_err'] = $email_err;
            } else {
                $email = trim($_POST['email']);
            }

            // Kiểm tra mật khẩu
            if(empty($_POST['password'])){
                $password_err = "Mật khẩu không được bỏ trống";
                $_SESSION['password_err'] = $password_err;
            }else{
                $password = trim($_POST['password']);
            }

            // Kiểm tra nhập lại mật khẩu
            if(empty($_POST['rewrite'])){
                $rewrite_err = "Vui lòng nhập lại mật khẩu";
                $_SESSION['rewrite_err'] = $rewrite_err;
            } elseif ($_POST['rewrite'] !== $_POST['password']) {
                $rewrite_err = "Mật khẩu nhập lại không khớp";
                $_SESSION['rewrite_err'] = $rewrite_err;
            } else {
                $rewrite = trim($_POST['rewrite']);
            }

            // Nếu có lỗi, quay lại trang đăng ký
            if (!empty($email_err) || !empty($password_err) || !empty($name_err) || !empty($rewrite_err)) {
                header("Location: ?mod=user&act=register");
                exit();
            }

            // Kiểm tra xem email đã tồn tại chưa
            if(check_email($email)){
                $_SESSION['email_err'] = "Email đã tồn tại";
                header("location: ?mod=user&act=register");
                exit();
            }

            // Thực hiện đăng ký
            if(user_register($name, $email, $password)){
                $_SESSION['success_msg'] = "Đăng ký thành công! Vui lòng đăng nhập.";
                header("location: ?mod=user&act=login");
            } else {
                $_SESSION['signUp_err'] = "Đăng ký thất bại. Vui lòng thử lại.";
                header("location: ?mod=user&act=register");
            }
                break;

        }
    }else{
        header('location: ?mod=page&act=home');
    }
?>