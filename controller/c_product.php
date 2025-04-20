<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'detail':
            include_once 'model/m_product.php';
            $productDetail = product_getDetail($_GET['id']);
            $productImage = productImage($_GET['id']);
            $productRelated = get_productRelated($productDetail['id_danhMuc']);
         

            include_once 'view/v_header.php';
            include_once 'view/v_product_detail.php';
            include_once 'view/v_footer.php';
            break;
        case 'collection':
            include_once 'model/m_product.php';
            $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
            $limit = 20;
            $start = ($page - 1) * $limit;
            $cate_id = $_GET['id_danhMuc'] ?? null;
            $brand = $_GET['brand'] ?? null;
            $sort = $_GET['sort'] ?? null;
            $categoryList = get_Category();
            $totalProducts = get_totalProducts();
            if ($cate_id) {
                if ($sort == 'price-asc') {
                    $productAll = get_productByCategorySort($cate_id, $start, $limit, 'ASC');
                } elseif ($sort == 'price-desc') {
                    $productAll = get_productByCategorySort($cate_id, $start, $limit, 'DESC');
                } else {
                    $productAll = get_productByCategory($cate_id, $start, $limit);
                }
            } elseif ($brand) {
                if ($sort == 'price-asc') {
                    $productAll = get_brandSort($brand, $start, $limit, 'ASC');
                } elseif ($sort == 'price-desc') {
                    $productAll = get_brandSort($brand, $start, $limit, 'DESC');
                } else {
                    $productAll = get_brand($brand, $start, $limit);
                }
            } else {
                if ($sort == 'price-asc') {
                    $productAll = arrange_product_a($start, $limit);
                } elseif ($sort == 'price-desc') {
                    $productAll = arrange_product_d($start, $limit);
                } else {
                    $productAll = get_productByPage($start, $limit);
                }
            }

            $totalPages = ceil($totalProducts / $limit);
            $tieuDeTrang = "Tất cả sản phẩm";
            if (isset($_GET['id_danhMuc'])) {
                $idDanhMuc = $_GET['id_danhMuc'];
                $row = get_categoryName($idDanhMuc);
                if ($row) {
                    $tieuDeTrang = $row['ten_danhMuc'];
                }
            } elseif (isset($_GET['brand'])) {
                $tieuDeTrang = $_GET['brand'];
            }
            include_once 'view/v_header.php';
            include_once 'view/v_collection.php';
            include_once 'view/v_footer.php';
            break;
        default:
    }
} else {
    header('location: ?mod=page&act=home');
}
?>