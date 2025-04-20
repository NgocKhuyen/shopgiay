<?php
    include_once 'model/pdo.php';

    function get_cart($id_giaychitiet, $id_user) {
        $sql = "SELECT * FROM giohang WHERE id_giaychitiet = ? AND id_user = ?";
        return pdo_getOne($sql, $id_giaychitiet, $id_user);
    }

    function add_to_cart($id_giaychitiet, $id_user, $soluong, $gia) {
        $sql = "INSERT INTO giohang (id_giaychitiet, id_user, soluong, gia) VALUES (?, ?, ?, ?)";
        return pdo_execute($sql, $id_giaychitiet, $id_user, $soluong, $gia);
    }
    function update_cart_quantity($id_giaychitiet, $id_user, $soluong, $gia) {
        $sql = "UPDATE giohang SET soluong = ?, gia = ? WHERE id_giaychitiet = ? AND id_user = ?";
        return pdo_execute($sql, $soluong, $gia, $id_giaychitiet, $id_user);
    }

    function cart_getByUser($id_user) {
        $sql = "SELECT 
                    gh.id_giohang AS id_giohang,
                    gh.soluong,
                    gh.gia,
                    g.tenGiay,
                    g.hinh,
                    ms.tenMauSac,
                    kt.kichThuoc,
                    gct.id AS id_giaychitiet,
                    gct.tonkho  
                FROM giohang gh
                JOIN giay_chitiet gct ON gh.id_giaychitiet = gct.id
                JOIN giay g ON gct.id_giay = g.id_giay
                JOIN mausac ms ON gct.id_mausac = ms.id_mausac
                JOIN kichthuoc kt ON gct.id_kichthuoc = kt.id_kichthuoc
                WHERE gh.id_user = ?";
        return pdo_getAll($sql, $id_user);
    }
    function get_cart_total($id_user) {
        $sql = "SELECT count(id_user) as count FROM giohang WHERE id_user = ?";
        return pdo_getOne($sql, $id_user);
    }
    
    function del_cart($id_cart) {
        $sql = "DELETE FROM giohang WHERE id_giohang = ?";
        return pdo_execute($sql, $id_cart);
    }
?>