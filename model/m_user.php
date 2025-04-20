<?php
    include_once "model/pdo.php";
    function get_user($email, $password){
        $sql = "SELECT * FROM user WHERE email=? AND password=?";
        return pdo_getOne($sql, $email, $password);
    }
    function check_email($email){
        $sql = "SELECT * FROM user WHERE email=? ";
        $user = pdo_getOne($sql, $email);
        return isset($user['id_user']);
    }
    function user_register($name,$email,$password){
        $sql = "INSERT INTO user(`name`,`email`,`password`) VALUES (?,?,?)";
        return pdo_execute($sql, $name, $email, $password);
    }
?>