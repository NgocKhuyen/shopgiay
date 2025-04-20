<div class="content">
    <section class="signup">
        <div class="container">
            <div class="signin-left">
                <div class="sign-title">
                    <h1>Tạo tài khoản</h1>
                </div>
            </div>
            <div class="signin-right">
                <form action="?mod=user&act=post-register" method="post">
                    <div class="lastname form-control1">
                        <input type="text" id="lastname" name="name" placeholder="Tên" required>
                        <?php if (!empty($_SESSION['name_err'])): ?>
                            <p style="color:red;"><?php echo $_SESSION['name_err']; unset($_SESSION['name_err']); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="email form-control1">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <?php if (!empty($_SESSION['email_err'])): ?>
                            <p style="color:red;"><?php echo $_SESSION['email_err']; unset($_SESSION['email_err']); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="password form-control1">
                        <input type="password" id="password" name="password" placeholder="Mật khẩu" required>
                        <?php if (!empty($_SESSION['password_err'])): ?>
                            <p style="color:red;"><?php echo $_SESSION['password_err']; unset($_SESSION['password_err']); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="password form-control1">
                        <input type="password" id="rewrite" name="rewrite" placeholder="Nhập lại mật khẩu" required>
                        <?php if (!empty($_SESSION['rewrite_err'])): ?>
                            <p style="color:red;"><?php echo $_SESSION['rewrite_err']; unset($_SESSION['rewrite_err']); ?></p>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($_SESSION['signUp_err'])): ?>
                        <p style="color:red;"><?php echo $_SESSION['signUp_err']; unset($_SESSION['signUp_err']); ?></p>
                    <?php endif; ?>

                    <div class="recaptcha form-control1">
                        BẠN ĐÃ CÓ TÀI KHOẢN? <a href="?mod=user&act=login">Đăng nhập</a>
                    </div>
                    <div class="submit">
                        <input type="submit" class="btn" value="Đăng ký" style="color: white; font-weight: bold;">
                    </div>
                    <div class="backto">
                        <a href="?mod=page&act=home"><i class="fa fa-long-arrow-alt-left"></i> Quay lại trang chủ</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="section section-gallery">
        <div class="">
            <div class="hot_sp" style="padding-top: 70px;padding-bottom: 50px;">
                <h2 style="text-align:center;padding-top: 10px">
                    <a style="font-size: 28px;color: black;text-decoration: none" href="">Khách hàng và Runner Inn</a>
                </h2>
            </div>
            <div class="list-gallery clearfix">
                <ul class="shoes-gp">
                    <li><div class="gallery_item"><img class="img-resize" src="images/shoes/gallery_item_1.jpg" alt=""></div></li>
                    <li><div class="gallery_item"><img class="img-resize" src="images/shoes/gallery_item_2.jpg" alt=""></div></li>
                    <li><div class="gallery_item"><img class="img-resize" src="images/shoes/gallery_item_3.jpg" alt=""></div></li>
                    <li><div class="gallery_item"><img class="img-resize" src="images/shoes/gallery_item_4.jpg" alt=""></div></li>
                    <li><div class="gallery_item"><img class="img-resize" src="images/shoes/gallery_item_5.jpg" alt=""></div></li>
                    <li><div class="gallery_item"><img class="img-resize" src="images/shoes/gallery_item_6.jpg" alt=""></div></li>
                </ul>
            </div>
        </div>
    </section>
</div>
