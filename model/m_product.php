<?php
    include_once 'model/pdo.php';

    function product_getNew(){
        $sql = "SELECT * FROM giay ORDER BY id_giay DESC LIMIT 4";
        return pdo_getAll($sql); 
    }
    function product_getMorePurchase(){
        $sql = "SELECT * FROM giay  WHERE luotMua >= 40";
        return pdo_getAll($sql);
    }

    function product_getDetail($id){
        // 1. Lấy thông tin sản phẩm
        $sql = "SELECT * FROM giay WHERE id_giay = ?";
        $product = pdo_getOne($sql, $id);
        
        // 2. Lấy tất cả bản ghi chi tiết: màu - size - tồn kho - ID chi tiết
        $sqlDetails = "SELECT 
                        gct.id AS id_giaychitiet,
                        ms.id_mausac, ms.tenMauSac, ms.maMau,
                        kt.id_kichthuoc, kt.kichThuoc,
                        gct.soluong, gct.tonkho
                    FROM giay_chitiet gct
                    JOIN mausac ms ON gct.id_mausac = ms.id_mausac
                    JOIN kichthuoc kt ON gct.id_kichthuoc = kt.id_kichthuoc
                    WHERE gct.id_giay = ?";

        $details = pdo_getAll($sqlDetails, $id);
        // Gắn mảng màu vào thông tin sản phẩm
        $product['details'] = $details;
        return $product;
    }
    
    function productImage($id) {
        $sql = "SELECT hinhanh FROM hinhanh INNER JOIN giay ON giay.id_giay = hinhanh.id_giay WHERE giay.id_giay = ?";
        return pdo_getAll($sql, $id);
    }
    function get_productRelated($id){
        $sql = "SELECT * FROM giay WHERE id_danhMuc=? ORDER BY RAND() LiMIT 4";
        return pdo_getAll($sql, $id);
    }
    function get_productByPage($start, $limit){
        $start = intval($start);
        $limit = intval($limit);
        $sql = "SELECT * FROM giay LIMIT $start, $limit";
        return pdo_getAll($sql);
    }
    function get_totalProducts(){
        $sql = "SELECT COUNT(*) FROM giay";
        return pdo_getValue($sql);
    }
    function get_Category(){
        $sql = "SELECT * FROM danhmuc";
        return pdo_getAll($sql);
    }
    function get_productByCategory($id,  $start, $limit){
        $start = intval($start);
        $limit = intval($limit);
        $sql = "SELECT * FROM giay WHERE id_danhMuc = ? LIMIT $start, $limit";
        return pdo_getAll($sql, $id);
    }
    function get_brand($name, $start, $limit){
        $start = intval($start);
        $limit = intval($limit);
        $sql = "SELECT * FROM giay WHERE thuongHieu=? LIMIT $start, $limit";
        return pdo_getAll($sql, $name);
    }
    function arrange_product_a($start, $limit){
        $sql = "SELECT * FROM giay ORDER BY gia ASC LIMIT $start, $limit";
        return pdo_getAll($sql);
    }
    function arrange_product_d($start, $limit){
        $sql = "SELECT * FROM giay ORDER BY gia DESC LIMIT $start, $limit";
        return pdo_getAll($sql);
    }
    function get_categoryName($id) {
        $sql = "SELECT ten_danhMuc FROM danhmuc WHERE id_danhMuc = ?";
        return pdo_getOne($sql, $id);
    }
    function get_productByCategorySort($id, $start, $limit, $order) {
        $start = intval($start);
        $limit = intval($limit);
        $order = strtoupper($order) === 'DESC' ? 'DESC' : 'ASC'; // Chống injection
        $sql = "SELECT * FROM giay WHERE id_danhMuc = ? ORDER BY gia $order LIMIT $start, $limit";
        return pdo_getAll($sql, $id);
    }
    function get_brandSort($name, $start, $limit, $order) {
        $start = intval($start);
        $limit = intval($limit);
        $order = strtoupper($order) === 'DESC' ? 'DESC' : 'ASC'; // Chống injection
        $sql = "SELECT * FROM giay WHERE thuongHieu = ? ORDER BY gia $order LIMIT $start, $limit";
        return pdo_getAll($sql, $name);
    }

    function get_shoeDetail_quantity($id) {
        $sql = "SELECT * FROM giay_chitiet WHERE id = ?";
        return pdo_getOne($sql, $id);
    }  

?>