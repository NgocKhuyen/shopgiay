<main class="cart-container">
    <!-- Phần danh sách sản phẩm con cat -->
    <section class="cart-items">
        <h2>Giỏ hàng</h2>
        
        <?php if (empty($cartItems)): ?>
            <div class="empty-cart">Giỏ hàng của bạn đang trống</div>
        <?php else: ?>
            <?php foreach ($cartItems as $item): ?>
                <div class="cart-item">
                    <!-- Hình ảnh -->
                    <img src="<?= $baseUrl ?>template/images/shoes/<?= $item['hinh'] ?>" 
                         alt="<?= $item['tenGiay'] ?>" 
                         style="width: 80px; height: auto;">

                    <!-- Thông tin sản phẩm -->
                    <div class="cart-info">
                        <h3><?= $item['tenGiay'] ?></h3>
                        <span><?=  $item['kichThuoc'] ?></span> | <span><?=  $item['tenMauSac'] ?></span>
                        <!-- Trạng thái tồn kho (tùy chỉnh theo CSDL) -->
                        <!-- <span class="price"><?= number_format($item['gia']) ?>₫</span> -->
                        <span class="stock"><?= ($item['tonkho'] > 0) ? 'Còn hàng' : 'Hết hàng' ?></span>
                    </div>

                    <div class="cart-group" data-id="<?= $item['id_giaychitiet'] ?>" data-price="<?= $item['gia'] ?>">
                        <!-- Điều chỉnh số lượng -->
                        <div class="quantity-controls">
                            <button class="giam">-</button>
                            <input type="number" class="soluong" min="1" value="<?= $item['soluong'] ?>" max="<?= $item['tonkho'] ?>">
                            <button class="tang">+</button>
                        </div>

                        <!-- Tổng tiền cho sản phẩm -->
                        <div class="item-total">
                            <?= number_format($item['gia'] * $item['soluong']) ?>₫
                        </div>

                    </div>
                    <!-- Nút xóa -->
                    <form action="?mod=cart&act=del_cart" method="post">
                        <input type="hidden" name="id_giohang" value="<?= $item['id_giohang'] ?>">
                        <button type="submit" class="delete-item" ><i class="icon-del fa fa-trash"></i></button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>

    <!-- Phần tổng hợp -->
    <aside class="cart-summary">
        <h3>Tùy chọn</h3>

        <div class="cart-detail">
            <!-- Tổng tiền sản phẩm -->
            <div><span>Tổng</span><span id="subtotal"><?= number_format($total) ?>₫</span></div>
            
            <!-- Phí vận chuyển (cố định) -->
            <div><span>Phí vận chuyển</span><span class="free">Miễn phí</span></div>
        </div>

        <!-- Tổng thanh toán -->
        <div class="cart-total">
            <strong>Tổng</strong>
            <span id="total"><?= number_format($total) ?>₫</span> <!-- Giả sử miễn phí vận chuyển -->
        </div>

        <a href="?mod=checkout&act=checkout"
            class="btn__link"
            onmouseover="this.style.textDecoration='none'"
            onmouseout="this.style.textDecoration='none'">
           
            Đặt hàng
        </a>

        <!-- Chính sách -->
        <ul class="policies">
            <li>✔ Chính sách bảo mật (Thanh toán an toàn và bảo mật)</li>
            <li>🚚 Chính sách giao hàng (Giao hàng tận nhà.)</li>
            <li>↩ Chính sách hoàn trả</li>
        </ul>
    </aside>
</main>