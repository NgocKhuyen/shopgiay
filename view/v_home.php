 
  <!-- Owl-Carousel -->
  <div class="owl-carousel owl-theme owl-carousel-setting">
    <div class="item"><img src="../template/images/slideshow_1.jpg" class="d-block w-100" alt="..."></div>
    <div class="item"><img src="../template/images/slideshow_2.jpg" class="d-block w-100" alt="..."></div>
  </div>
<section>
  <div class="content">
    <div class="container">
      <div class="hot_sp" style="padding-bottom: 10px;">
        <h2 style="text-align:center;padding-top: 10px">
          <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm bán chạy</a>
        </h2>
        <div class="view-all" style="text-align:center;padding-top: -10px;">
          <a style="color: black;text-decoration: none" href="">Xem thêm</a>
        </div>
      </div>
    </div>
  </div>
  <!--Product-->
  <div class="container" style="padding-bottom: 50px;">
    <div class="row">
      <?php foreach ($productPurchase as $p): ?>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="?mod=product&act=detail&id=<?= $p['id_giay']?>" title="Adidas EQT Cushion ADV" class="img-resize">
                <img src="<?= $baseUrl ?>template/images/shoes/<?= $p['hinh'] ?>" alt="Adidas EQT Cushion ADV"
                  class="lazyloaded">
                <img src="<?= $baseUrl ?>template/images/shoes/<?= $p['hinh'] ?>" alt="Adidas EQT Cushion ADV"
                  class="lazyloaded">
              </a>

            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                    font-size: 14px;text-decoration: none;" href="?mod=product&act=detailid=<?=$p['id_giay']?>"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  <?= $p['tenGiay'] ?>
                </a>
              </div>
              <div class="pro-price">
                <p class=""><?= number_format($p['gia'], 0, '', '.') ?>₫</p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<section class="section wrapper-home-banner">
  <div class="container-fluid" style="padding-bottom: 50px;">
    <div class="row">
      <div class="col-xs-12 col-sm-4 home-banner-pd">
        <div class="block-banner-category">
          <a href="#" class="link-banner wrap-flex-align flex-column">
            <div class="fg-image fade-box">
              <img class="lazyloaded" src="../template/images/shoes/block_home_category1_grande.jpg" alt="Shoes">
            </div>
            <figcaption class="caption_banner site-animation">
              <p>Bộ sưu tập</p>
              <h2>
                Đại sứ thương hiệu
              </h2>
            </figcaption>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 home-banner-pd">
        <div class="block-banner-category">
          <a href="#" class="link-banner wrap-flex-align flex-column">
            <div class="fg-image fade-box">
              <img class="lazyloaded" src="../template/images/shoes/block_home_category2_grande.jpg" alt="Shoes">
            </div>
            <figcaption class="caption_banner site-animation">
              <p>Bộ sưu tập</p>
              <h2>
                Thương hiệu
              </h2>
            </figcaption>
          </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 home-banner-pd">
        <div class="block-banner-category">
          <a href="#" class="link-banner wrap-flex-align flex-column">
            <div class="fg-image">
              <img class="lazyloaded" src="../template/images/shoes/block_home_category3_grande.jpg" alt="Shoes">
            </div>
            <figcaption class="caption_banner site-animation">
              <p></p>
              <h2>
                Blog
              </h2>
            </figcaption>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="content">
    <div class="container">
      <div class="hot_sp">
        <h2 style="text-align:center;">
          <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm mới</a>
        </h2>
       
      </div>
    </div>
  </div>
  <div class="row">
      <?php foreach ($productNew as $pn): ?>
        <div class="col-md-3 col-sm-6 col-xs-6 col-6">
          <div class="product-block">
            <div class="product-img fade-box">
              <a href="?mod=product&act=detail&id=<?=$pn['id_giay']?>" title="Adidas EQT Cushion ADV" class="img-resize">
                <img src="<?= $baseUrl ?>template/images/shoes/<?= $pn['hinh'] ?>" alt="Adidas EQT Cushion ADV"
                  class="lazyloaded">
                <img src="<?= $baseUrl ?>template/images/shoes/<?= $pn['hinh'] ?>" alt="Adidas EQT Cushion ADV"
                  class="lazyloaded">
              </a>

            </div>
            <div class="product-detail clearfix">
              <div class="pro-text">
                <a style=" color: black;
                                                    font-size: 14px;text-decoration: none;" href="?mod=product&act=detail&id=<?=$pn['id_giay']?>"
                  title="Adidas EQT Cushion ADV" inspiration pack>
                  <?= $pn['tenGiay'] ?>
                </a>
              </div>
              <div class="pro-price">
                <p class=""><?= number_format($pn['gia'], 0, '', '.') ?>₫</p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    </div>
  </div>
</section>
<section class="">
    <div class="content">
      <div class="container">
        <div class="hot_sp">
          <h2 style="text-align:center;padding-top: 10px">
            <a style="font-size: 28px;color: black;text-decoration: none" href="">Bài viết mới nhất</a>
          </h2>
          <br />
        </div>
      </div>
    </div>
    New
  <div>
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="post_item">
            <div class="post_featured">
              <a href="#" title="Adidas EQT Cushion ADV">
                <img class="img-resize" style="padding-bottom:15px;" src="./template/images/shoes/new-1.jpg"
                  alt="Adidas Falcon nổi bật mùa Hè với phối màu color block">
              </a>
            </div>
            <div class="pro-text">
              <span class="post_info_item">

                Thứ Ba 11,06,2019

              </span>
            </div>
            <div class="pro-text">
              <h3 class="post_title">
                <a style=" color: black;
                                    font-size: 18px;text-decoration: none;" href="#" inspiration pack>
                  Adidas Falcon nổi bật mùa Hè với phối màu color block
                </a>
              </h3>
            </div>
            <div style="text-align:center; padding-bottom: 30px;">
              <span>Cuối tháng 5, adidas Falcon đã cho ra mắt nhiều phối màu đón chào mùa Hè khiến giới trẻ yêu
                thích không thôi. Tưởng chừng thương hiệu sẽ tiếp tục...</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="post_item">
            <div class="post_featured">
              <a href="#" title="Adidas EQT Cushion ADV">
                <img class="img-resize" style="padding-bottom:15px;" src="./template/images/shoes/new-2.jpg"
                  alt="Saucony hồi sinh mẫu giày chạy bộ cổ điển của mình – Aya Runner">
              </a>
            </div>
            <div class="pro-text">
              <span class="post_info_item">

                Thứ Ba 11,06,2019

              </span>
            </div>
            <div class="pro-text">
              <h3 class="post_title">
                <a style=" color: black;
                                                    font-size: 18px;text-decoration: none;" href="#" inspiration pack>
                  Saucony hồi sinh mẫu giày chạy bộ cổ điển của mình – Aya Runner
                </a>
              </h3>
            </div>
            <div style="text-align:center; padding-bottom: 30px;">
              <span>Là một trong những đôi giày chạy bộ tốt nhất vào những năm 1994, 1995, Saucony Aya Runner vừa có
                màn trở lại
                vô cùng ấn tượngCó vẻ như 2019...</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="post_item">
            <div class="post_featured">
              <a href="#" title="Adidas EQT Cushion ADV">
                <img class="img-resize" style="padding-bottom:15px;" src="./template/images/shoes/new-3.jpg"
                  alt="Nike Vapormax Plus trở lại với sắc tím mộng mơ và thiết kế chuyển màu đẹp mắt">
              </a>
            </div>
            <div class="pro-text">
              <span class="post_info_item">

                Thứ Ba 11,06,2019

              </span>
            </div>
            <div class="pro-text">
              <h3 class="post_title">
                <a style=" color: black;
                                        font-size: 18px;text-decoration: none;" href="#" inspiration pack>
                  Nike Vapormax Plus trở lại với sắc tím mộng mơ và thiết kế chuyển màu đẹp mắt
                </a>
              </h3>
            </div>
            <div style="text-align:center; padding-bottom: 30px;">
              <span>Là một trong những mẫu giày retro có nhiều phối màu gradient đẹp nhất từ trước đến này, Nike
                Vapormax Plus vừa có màn trở lại bá đạo dành cho...</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section wrapper-home-newsletter">
  <div class="container-fluid">
    <div class="content-newsletter">
      
      <p>Đăng ký nhận bản tin của Runner Inn để cập nhật những sản phẩm mới, nhận thông tin ưu đãi đặc biệt và thông
        tin
        giảm giá khác.</p>
      <div class="form-newsletter">
        
      </div>
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
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="./template/images/shoes/gallery_item_1.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="./template/images/shoes/gallery_item_2.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="./template/images/shoes/gallery_item_3.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="./template/images/shoes/gallery_item_4.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="./template/images/shoes/gallery_item_5.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="./template/images/shoes/gallery_item_6.jpg" alt="">
          </div>
        </li>
      </ul>
    </div>
  </div>
</section> -->

</div>