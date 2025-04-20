<div class="container">
    <!-- Progress steps -->
    <div class="checkout-steps d-flex justify-content-center align-items-center text-center my-4">
        <div class="step me-3 active">1. Giỏ hàng</div>
        <div class="divider mx-2">→</div>
        <div class="step me-3 active">2. Thanh toán</div>
        <div class="divider mx-2">→</div>
        <div class="step">3. Hoàn tất</div>
    </div>
    <form action="">
        <div class="row g-4">
            <!-- Left Column - Thông tin thanh toán -->
            <div class="col-lg-7 mb-5">
                <div class="card checkout-form">
                    <div class="card-header bg-color">
                        <h4 class="text-white mb-0">THÔNG TIN THANH TOÁN</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <!-- Thông tin liên hệ -->
                            <div class="mb-2">
                                <div class="row g-3">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Họ và tên</label>
                                        <input type="text" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Số điện thoại</label>
                                        <input type="text" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" placeholder="" required>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label class="form-label">Ghi chú</label>
                                        <textarea class="form-control" name="ghichu" rows="4" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="payment-methods">
                                <h5 class="mb-3">Phương thức thanh toán</h5>
                                <div class="method-option">
                                    <input type="radio" name="paymentMethod" id="cod" checked>
                                    <label for="cod" class="method-card">
                                        <span>Thanh toán khi nhận hàng (COD)</span>
                                    </label>
                                </div>

                                <div class="method-option">
                                    <input type="radio" name="paymentMethod" id="bankTransfer">
                                    <label for="bankTransfer" class="method-card">
                                        <span>Chuyển khoản ngân hàng</span>
                                    </label>
                                </div>

                                <div class="method-option">
                                    <input type="radio" name="paymentMethod" id="momo">
                                    <label for="momo" class="method-card">
                                        <span>Ví điện tử Momo</span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Column - Tóm tắt đơn hàng -->
            <div class="col-lg-5">
                <div class="card order-summary">
                    <div class="card-header bg-color">
                        <h4 class="text-white mb-0">TÓM TẮT ĐƠN HÀNG</h4>
                    </div>
                    <div class="card-body">
                        <div class="order-items">
                            <?php
                                foreach($cartItems as $item) : ?>
                                    <div class="item">
                                        <div class="product-info">
                                            <img src="<?= $baseUrl ?>template/images/shoes/<?= $item['hinh'] ?>" alt="Giày" class="product-image">
                                            <div>
                                                <h6><?= $item['tenGiay'] ?> <strong> x</strong><span><?= $item['soluong'] ?></span></h6>
                                                <small>Size: <?= $item['kichThuoc'] ?> | Màu: <?= $item['tenMauSac'] ?></small>
                                            </div>
                                        </div>
                                        <div class="product-price"><?= number_format($item['gia']) ?></div>
                                    </div>
                            <?php endforeach; ?>
                            <!-- Thêm các sản phẩm khác -->
                        </div>

                        <div class="summary-details">
                            <div class="d-flex justify-content-between">
                                <span>Tạm tính:</span>
                                <span>4,500,000₫</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Phí vận chuyển:</span>
                                <span class="text-success">Miễn phí</span>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between fw-bold">
                                <span>Tổng cộng:</span>
                                <span class="text-danger">4,500,000₫</span>
                            </div>
                        </div>
                        <div class="terms mt-4 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    Tôi đã đọc và đồng ý với <a href="#" class="text-info">điều khoản dịch vụ</a>
                                </label>
                            </div>
                        </div>

                            <div class="wrap-addcart clearfix">
                                <div class="row-flex">
                                    <button type="submit" class="buy-now button" style="display: block;">Hoàn tất thanh toán</button>
                                </div>
                            </div>
                            <a href="cart.html" class="btn btn-outline-secondary w-100 mt-2">
                                <i class="bi bi-arrow-left me-2"></i>Quay lại giỏ hàng
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </form>

</div>