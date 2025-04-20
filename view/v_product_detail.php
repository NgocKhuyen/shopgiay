<div class="container">
  <div class="row product-detail-wrapper">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="row product-detail-main pr_style_01">
        <div class="col-md-7 col-sm-12 col-xs-12">
          <div class="product-gallery">
            <div class="product-gallery__thumbs-container hidden-sm
                  hidden-xs">
              <div class="product-gallery__thumbs thumb-fix">
                <div class="product-gallery__thumb" id="imgg1">
                  <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                    data-image="<?= $baseUrl ?>template/images/shoes/<?= $productDetail['hinh'] ?>"
                    data-zoom-image="<?= $baseUrl ?>template/images/shoes/<?= $productDetail['hinh'] ?>">
                    <img src="<?= $baseUrl ?>template/images/shoes/<?= $productDetail['hinh'] ?>"
                      data-image="<?= $baseUrl ?>template/images/shoes/<?= $productDetail['hinh'] ?>"
                      alt="<?= $productDetail['tenGiay'] ?>" grape="">
                  </a>
                </div>
                <?php ?>
                <?php foreach ($productImage as $key => $img): ?>
                  <div class="product-gallery__thumb" id="imgg<?= $key + 2 ?>">
                    <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="<?= $baseUrl ?>template/images/shoes/<?= $img['hinhanh'] ?>"
                      data-zoom-image="<?= $baseUrl ?>template/images/shoes/<?= $img['hinhanh'] ?>">
                      <img src="<?= $baseUrl ?>template/images/shoes/<?= $img['hinhanh'] ?>"
                        data-image="<?= $baseUrl ?>template/images/shoes/<?= $img['hinhanh'] ?>"
                        alt="Nike Air Max 90 Essential" grape="">
                    </a>
                  </div>
                <?php endforeach; ?>


              </div>
            </div>
            <div class="product-image-detail box__product-gallery
                  scroll hidden-xs">

              <ul id="sliderproduct" class="site-box-content
                    slide_product">
                <li class="product-gallery-item gallery-item
                        current " id="imgg1a">
                  <img class="product-image-feature "
                    src="<?= $baseUrl ?>template/images/shoes/<?= $productDetail['hinh'] ?>" alt="none images" grape="">
                </li>
                <?php foreach ($productImage as $key => $im): ?>
                  <li class="product-gallery-item gallery-item
                        current " id="imgg<?= $key + 2 ?>a">
                    <img class="product-image-feature " src="<?= $baseUrl ?>template/images/shoes/<?= $im['hinhanh'] ?>"
                      alt="none images" grape="">
                  </li>
                <?php endforeach; ?>


              </ul>

            </div>
          </div>

          <div class="product-gallery-slide">
            <div class="owl-carousel owl-theme owl-product-gallery-slide"">
                  <div class=" item">
              <div class="product-gallery__thumb  >
                    <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                data-image="images/detailproduct/1.jpg" data-zoom-image="images/detailproduct/1.jpg">
                <img src="images/detailproduct/1.jpg" data-image="images/detailproduct/1.jpg" alt="none images"
                  grape="">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="product-gallery__thumb  >
                    <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                data-image="images/detailproduct/2.jpg" data-zoom-image="images/detailproduct/2.jpg">
                <img src="images/detailproduct/2.jpg" data-image="images/detailproduct/2.jpg" alt="none images"
                  grape="">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="product-gallery__thumb  >
                    <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                data-image="images/detailproduct/3.jpg" data-zoom-image="images/detailproduct/3.jpg">
                <img src="images/detailproduct/3.jpg" data-image="images/detailproduct/3.jpg"
                  alt="Nike Air Max 90 Essential" grape="">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="product-gallery__thumb  >
                    <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                data-image="images/detailproduct/4.jpg" data-zoom-image="images/detailproduct/4.jpg">
                <img src="images/detailproduct/4.jpg" data-image="images/detailproduct/4.jpg"
                  alt="Nike Air Max 90 Essential" grape="">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="product-gallery__thumb  >
                    <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                data-image="images/detailproduct/5.jpg" data-zoom-image="images/detailproduct/5.jpg">
                <img src="images/detailproduct/5.jpg" data-image="images/detailproduct/5.jpg"
                  alt="Nike Air Max 90 Essential" grape="">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="product-gallery__thumb  " id="imgg1">
                <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                  data-image="images/detailproduct/6.jpg" data-zoom-image="images/detailproduct/6.jpg">
                  <img src="images/detailproduct/6.jpg" data-image="images/detailproduct/6.jpg"
                    alt="Nike Air Max 90 Essential" grape="">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="product-gallery__thumb  " id="imgg1">
                <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                  data-image="images/detailproduct/7.jpg" data-zoom-image="images/detailproduct/7.jpg">
                  <img src="images/detailproduct/7.jpg" data-image="images/detailproduct/7.jpg"
                    alt="Nike Air Max 90 Essential" grape="">
                </a>
              </div>
            </div>
            <div class="item">
              <div class="product-gallery__thumb  " id="imgg1">
                <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                  data-image="images/detailproduct/8.jpg" data-zoom-image="images/detailproduct/8.jpg">
                  <img src="images/detailproduct/8.jpg" data-image="images/detailproduct/8.jpg"
                    alt="Nike Air Max 90 Essential" grape="">
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-5 col-sm-12 col-xs-12
                product-content-desc" id="detail-product">
        <div class="product-content-desc-1">
            <div class="product-title">
                <h1><?= $productDetail['tenGiay'] ?></h1>
                <span id="pro_sku">Thương hiêu: <?= $productDetail['thuongHieu'] ?></span>
            </div>
            <div class="product-price" id="price-preview"><span
                class="pro-price"><?= number_format($productDetail['gia']) ?></span></div>
                <form id="add-item-form" action="?mod=cart&act=add_to_cart" method="post" class="variants clearfix">
                    <!-- Phần chọn màu sắc -->
                    <div class="select-color mt-2" id="color-options">
                        <?php 
                            $renderedColors = [];
                            foreach ($productDetail['details'] as $item): 
                                if (in_array($item['id_mausac'], $renderedColors)) continue;
                                $renderedColors[] = $item['id_mausac'];
                        ?>
                            <div class="mb-3 mr-4 d-inline-block">
                                <input 
                                    type="radio" 
                                    name="color" 
                                    id="color-<?= $item['id_mausac'] ?>" 
                                    value="<?= $item['id_mausac'] ?>" 
                                    class="d-none"
                                >
                                <label 
                                    for="color-<?= $item['id_mausac'] ?>" 
                                    class="color-swatch" 
                                    style="background-color: <?= $item['maMau'] ?>;"
                                    title="<?= $item['tenMauSac'] ?>"
                                ></label>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Phần chọn kích thước -->
                    <div class="select-size mt-2" id="size-options">
                        <?php 
                            $renderedSizes = [];
                            foreach ($productDetail['details'] as $item): 
                                if (in_array($item['id_kichthuoc'], $renderedSizes)) continue;
                                $renderedSizes[] = $item['id_kichthuoc'];
                        ?>
                            <input 
                                type="radio" 
                                name="size" 
                                value="<?= $item['id_kichthuoc'] ?>" 
                                id="size-<?= $item['id_kichthuoc'] ?>" 
                                class="d-none"
                            >
                            <label for="size-<?= $item['id_kichthuoc'] ?>" class="size-label mr-2 mb-2">
                                <?= $item['kichThuoc'] ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                    <?php foreach ($productDetail['details'] as $item): ?>
                        <input 
                            type="hidden" 
                            class="giaychitiet-map" 
                            data-color="<?= $item['id_mausac'] ?>" 
                            data-size="<?= $item['id_kichthuoc'] ?>" 
                            value="<?= $item['id_giaychitiet'] ?>"
                        >
                    <?php endforeach; ?>
                    <input type="hidden" name="id_giaychitiet" id="id_giaychitiet">

                    <input type="hidden" name="price" value="<?= $productDetail['gia'] ?>">
                    <div class="selector-actions">

                    <div class="quantity-area clearfix">
                        <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                        <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                        <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                    </div>

                    <?php if (isset($_SESSION['error'])): ?>
                        <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
                        <?php unset($_SESSION['error']); ?>
                    <?php endif; ?>
                    
                    <div class="wrap-addcart clearfix">
                        <div class="row-flex">
                            <?php if (isset($_SESSION['user_tk'])): ?>
                                <button type="submit" class="buy-now button" style="display: block;">Thêm vào giỏ</button>
                            <?php else: ?>
                                <a href="?mod=user&act=login" class="buy-now button"
                                style="display: block; text-decoration: none; color: white;">
                                Đăng nhập để mua hàng
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    </div>

                </form>



            <div class="product-description">
                <div class="title-bl">
                <h2>Mô tả</h2>
                </div>
                <div class="description-content">
                <div class="description-productdetail">
                    <p><span><?= $productDetail['moTa'] ?></span><br><br></p>

                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
    <div class="list-productRelated clearfix">
    <div class="heading-title text-center">
        <h2>Sản phẩm liên quan</h2>
    </div>
    <div class="container">
        <div class="row">
        <?php foreach ($productRelated as $item): ?>
            <div class="col-md-3 col-sm-6 col-xs-6 col-6">
            <div class="product-block">
                <div class="product-img fade-box">
                <a href="?mod=product&act=detail&id=<?= $item['id_giay'] ?>" title="#" class="img-resize">
                    <img src="<?= $baseUrl ?>template/images/shoes/<?= $item['hinh'] ?>" alt="#" class="lazyloaded">
                    <img src="images/shoes/shoes fade 1.jpg" alt="Adidas EQT Cushion ADV" class="lazyloaded">
                </a>

                </div>
                <div class="product-detail clearfix">
                <div class="pro-text">
                    <a style="color: black;
                                font-size: 14px;text-decoration: none;"
                    href="?mod=product&act=detail&id=<?= $item['id_giay'] ?>" title="Adidas EQT Cushion ADV" inspiration
                    pack>
                    <?= $item['tenGiay'] ?>
                    </a>
                </div>
                <div class="pro-price">
                    <p class=""><?= number_format($item['gia']) ?></p>
                </div>
                </div>
            </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    </div>

</div>
</div>
</div>


<!-- Dữ liệu JSON chi tiết để xử lý bằng JS -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        initProductDetail(<?= json_encode($productDetail['details']) ?>);
    });

    document.addEventListener("DOMContentLoaded", function () {
        const detailsData = <?= json_encode($productDetail['details']) ?>;
        initcartDetail(detailsData);
    });
</script>