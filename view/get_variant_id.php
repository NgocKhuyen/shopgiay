<?php
include_once 'model/pdo.php';
include_once 'model/m_product.php';

$colorId = $_GET['color'] ?? null;
$sizeId = $_GET['size'] ?? null;

if ($colorId && $sizeId) {
  $sql = "SELECT id FROM giay_chitiet 
          WHERE id_giay = ? 
          AND id_mausac = ? 
          AND id_kichthuoc = ?";
  $variant = pdo_getOne($sql, [
    $_GET['product_id'], // Truyền id_giay từ trang detail
    $colorId,
    $sizeId
  ]);
  
  echo json_encode(['id_giaychitiet' => $variant['id'] ?? null]);
}