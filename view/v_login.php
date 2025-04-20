
  <!--Content-->
<div class="content">
    <section class="signin ">
        <div class="container">
            <div class="signin-left">
                <div class="sign-title">
                    <h1>Đăng nhập</h1>
                </div>
            </div>
            <div class="signin-right " id="a-sign">
                <form action="?mod=user&act=post-login" method="post" class="form-login">
                    <div class="username form-control1 ">
                        <input type="email"   id="username" name="email" placeholder="Email" required>
                    </div>
                    <?php if (!empty($_SESSION['email_err'])): ?>
                        <p style="color:red;"><?php echo $_SESSION['email_err']; unset($_SESSION['email_err']); ?></p>
                    <?php endif; ?>

                    <div class="password form-control1">
                        <input type="password" id="password" name="password" placeholder="Mật khẩu" required>
                    </div>
                    <?php if (!empty($_SESSION['password_err'])): ?>
                        <p style="color:red;"><?php echo $_SESSION['password_err']; unset($_SESSION['password_err']); ?></>
                    <?php endif; ?>
                <div class="forgetPass d-flex" >
                        <div class="save">
                        <input type="checkbox" name="" class="">
                        <label for="">Lưu mật khẩu</label>
                        </div>
                        <a id="quenmk" class="ml-3">Quên mật khẩu?</a>
                    </div>
                    <br>
                    <?php if (!empty($_SESSION['login_err'])): ?>
                        <p style="color:red;"><?php echo $_SESSION['login_err']; unset($_SESSION['login_err']); ?></p>
                    <?php endif; ?>
                    <div class="submit">
                        <input type="submit" class="btn" value="Đăng nhập">
                    </div>
                    <br>
                    <div class="signUp">
                        <p class="class="recaptcha form-control1"">Bạn chưa có tài khoản<span>?  Đăng ký <a href="?mod=user&act=register" style="color: #2962ff"> Tại đây</a></span></p>
                    </div>
                    
                </form>
            </div>
         
        </div>
    </section>    
    

 
  