<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../template/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../template/plugins/animate/animate.min.css">
    <link rel="stylesheet" href="../template/plugins/fontawesome/all.css">
    <link rel="stylesheet" href="../template/plugins/webfonts/font.css">
    <link rel="stylesheet" href="../template/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../template/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="../template/css/style.css">
    <link rel="stylesheet" href="../template/plugins/uikit/uikit.min.css" />
    <link rel="stylesheet" href="../template/css/sign.css">
    <link rel="stylesheet" href="../template/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <script src="../template/js/cart.js"></script>

  <title>Menshoes</title>
</head>

<body>

  <div class="header">
    <a style="color: #ffffff;text-decoration: none;" href="index.html">
      MIỄN PHÍ VẬN CHUYỂN VỚI ĐƠN HÀNG NỘI THÀNH > 300K - ĐỔI TRẢ TRONG 30 NGÀY - ĐẢM BẢO CHẤT LƯỢNG
    </a>
  </div>

  <!-- Navbar (Desktop Only) -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
      <a class="navbar-brand" href="?mod=page&act=home">
        <img src="../template/images/logo.png" class="logo-top" alt="">
      </a>

      <div class="desk-menu collapse navbar-collapse justify-content-md-center">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="?mod=page&act=home">TRANG CHỦ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?mod=product&act=collection">BỘ SƯU TẬP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?mod=page&act=introduce">GIỚI THIỆU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?mod=page&act=contact">LIÊN HỆ</a>
          </li>
        </ul>
      </div>

      <div class="icon-ol d-flex align-items-center">
        <input required id="inputSearchAuto" name="q" maxlength="40" autocomplete="off"
          class="searchinput input-search search-input" type="text" placeholder="Tìm kiếm sản phẩm...">
        <a href="#"><i class="fas fa-search ml-2"></i></a>
      </div>

      <div class="cart-icon-wrapper position-relative">
        <a href="#" data-toggle="modal" data-target="#cartModal">
          <i class="fas fa-shopping-cart ml-3" style="color: #272727"></i>

          <span class="cart-count"><?=  $countCart['count'] ?? ( $_SESSION['count'] ?? 0 ) ?></span>
        </a>
      </div>

      <?php
      $userAvatar = isset($_SESSION['user_tk']['img_user'])
        ? "../template/images/user/" . $_SESSION['user_tk']['img_user']
        : "../template/images/user/default-avatar.jpg";
      ?>

      <?php if (isset($_SESSION['user_tk'])): ?>
        <div class="block-click ml-3">
          <div class="block-user">
            <a href="#" class="img-user" data-toggle="modal" data-target="#userModal">
              <img src="<?= htmlspecialchars($userAvatar) ?>" class="block-user__img mr-3" style="cursor: pointer;"
                alt="user">
            </a>
          </div>
        </div>
      <?php else: ?>
        <a style="color: #272727" class="ml-3" href="?mod=user&act=login">
          <i class="fas fa-user-alt icon"></i>
        </a>
      <?php endif; ?>
    </div>
  </nav>

  <!-- Modal Giỏ Hàng -->
  <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content mt-4">
        <div class="modal-header p-3 border-bottom">
          <h5 class="modal-title text-white ">Giỏ Hàng Của Bạn</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php if (!empty($_SESSION['cart'])): ?>
            <?php foreach ($_SESSION['cart'] as $item): ?>
              <div class="cart-item">
                <img src="../template/images/shoes/<?= $item['hinh'] ?>"
                  alt="<?= htmlspecialchars($item['tenGiay']) ?>">
                <div class="cart-item-info">
                  <h6 class="mb-1"><?= htmlspecialchars($item['tenGiay']) ?></h6>
                  <span class="mb-0"><?= $item['kichThuoc'] ?></span> |
                  <span class="mb-0"><?= $item['tenMauSac'] ?></span>
                  
                  <span><strong> x</strong><?= $item['soluong'] ?></span>
                  <p class="mb-0"><?= number_format($item['gia'], 0, ',', '.') ?>₫</p>
                </div>
              </div>
            <?php endforeach; ?>
            <div class="total-price">
              <h6 class="m-0">Tổng tiền:
                <?= number_format(array_sum(array_map(function ($item) {
                  return $item['gia'] * $item['soluong'];
                }, $_SESSION['cart'])), 0, ',', '.') ?>₫
              </h6>
            </div>
          <?php else: ?>
            <div class="p-3 text-center">Giỏ hàng trống</div>
          <?php endif; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <a href="?mod=cart&act=cart" class="btn btn-primary text-white" style="background-color:#4267b2;">Xem giỏ
            hàng</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tài Khoản -->
  <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true"
    data-backdrop="false" data-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header p-3 border-bottom">
          <h5 class="modal-title text-white">Tài Khoản</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h6 class="mb-3">Xin chào bạn!</h6>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="?mod=page&act=profile" class="text-dark">
                <i class="fas fa-user mr-2"></i> Tài khoản của tôi
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-dark">
                <i class="fas fa-box mr-2"></i> Đơn hàng của tôi
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-dark">
                <i class="fas fa-heart mr-2"></i> Yêu thích
              </a>
            </li>
          </ul>
        </div>
        <div class="modal-footer justify-content-center">
          <a class="btn btn-danger" href="index.php?mod=user&act=logout">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>

</body>

</html>