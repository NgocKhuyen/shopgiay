<div class="container" style="margin-top: 50px;">
  <div class="row">
    <div class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
      <div class="sidebar-page">
        <div class="group-menu">
          <div class="page_menu_title title_block">
            <h2>Danh mục sản phẩm</span></h2>
          </div>
          <div class="layered layered-category">
            <div class="layered-content">
              <ul class="menuList-links">
                <?php foreach ($categoryList as $dm): ?>
                  <li class=""><a
                      href="?mod=product&act=collection&id_danhMuc=<?= $dm['id_danhMuc'] ?>"><span><?= $dm['ten_danhMuc'] ?></span></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
          <div class="page_menu_title title_block mt-3">
            <h2>Thương hiệu</span></h2>
          </div>
          <div class="layered layered-category">
            <div class="layered-content">
              <ul class="menuList-links">
                <li class=""><a href="?mod=product&act=collection&brand=Nike"> <span> Nike </span></a></li>
                <li class=""><a href="?mod=product&act=collection&brand=Adidas"> <span> Adidas </span></a></li>
                <li class=""><a href="?mod=product&act=collection&brand=Puma"> <span> Puma </span></a></li>
                <li class=""><a href="?mod=product&act=collection&brand=Vans"> <span> Vans </span></a></li>
                <li class=""><a href="?mod=product&act=collection&brand=Converse"> <span> Converse </span></a></li>
                <li class=""><a href="?mod=product&act=collection&brand=Clarks"> <span> Clarks </span></a></li>
                <li class=""><a href="?mod=product&act=collection&brand=Martens"> <span> Martens </span></a></li>
                <li class=""><a href="?mod=product&act=collection&brand=Timeberland"> <span> Timeberland </span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?php
    $baseQuery = "?mod=product&act=collection";
    if (isset($_GET['id_danhMuc'])) {
      $baseQuery .= "&id_danhMuc=" . $_GET['id_danhMuc'];
    } elseif (isset($_GET['brand'])) {
      $baseQuery .= "&brand=" . $_GET['brand'];
    }

    $currentSort = $_GET['sort'] ?? '';
    ?>
    <div class="col-md-9 col-sm-12 col-xs-12">
      <div class="wrap-collection-title row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <h1 class="title"><?= $tieuDeTrang ?></h1>
          <div class="alert-no-filter"></div>
        </div>
        <div class="col-md-4 d-sm-none d-md-block d-none d-sm-block" style="float: left">
          <div class="option browse-tags">
            <span class="custom-dropdown custom-dropdown--grey">
              <select class="sort-by custom-dropdown__select" onchange="location = this.value;">
                <option value="<?= $baseQuery ?>&sort=price-asc" <?= $currentSort == 'price-asc' ? 'selected' : '' ?>>Giá:
                  Tăng dần</option>
                <option value="<?= $baseQuery ?>&sort=price-desc" <?= $currentSort == 'price-desc' ? 'selected' : '' ?>>
                  Giá: Giảm dần</option>
              </select>
            </span>
          </div>
        </div>
      </div>
      <div class="row">


        <?php foreach ($productAll as $pa): ?>
          <div class="col-md-3 col-sm-6 col-xs-6 col-6">
            <div class="product-block">
              <div class="product-img fade-box">
                <a href="?mod=product&act=detail&id=<?= $pa['id_giay'] ?>" title="#" class="img-resize">
                  <img src="<?= $baseUrl ?>template/images/shoes/<?= $pa['hinh'] ?>" alt="#" class="lazyloaded">
                  <img src="<?= $baseUrl ?>template/images/shoes/<?= $pa['hinh'] ?>" alt="#" class="lazyloaded">
                </a>

              </div>
              <div class="product-detail clearfix">
                <div class="pro-text">
                  <a style=" color: black;
                                                              font-size: 14px;text-decoration: none;"
                    href="?mod=product&act=detail&id=<?= $pa['id_giay'] ?>" title="<?= $pa['tenGiay'] ?>" inspiration
                    pack>
                    <?= $pa['tenGiay'] ?>
                  </a>
                </div>
                <div class="pro-price">
                  <p class=""><?= number_format($pa['gia']) ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="sortpagibar pagi clearfix text-center">
        <div id="pagination" class="clearfix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?php
            // Giữ lại các tham số GET trừ page
            $params = $_GET;
            unset($params['page']);
            $queryString = !empty($params) ? http_build_query($params) . '&' : '';
            ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
              <?php if ($i == $page): ?>
                <span class="page-node current"><?= $i ?></span>
              <?php else: ?>
                <a class="page-node" href="?<?= $queryString ?>page=<?= $i ?>"><?= $i ?></a>
              <?php endif; ?>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
              <a class="next" href="?<?= $queryString ?>page=<?= $page + 1 ?>">
                <svg viewBox="0 0 31 10" style="width: 31px; height: 10px;">
                  <polygon points="31,5 25,0 25,4 0,4 0,6 25,6 25,10"></polygon>
                </svg>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
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
            <img class="img-resize" src="../template/images/shoes/gallery_item_1.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="../template/images/shoes/gallery_item_2.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="../template/images/shoes/gallery_item_3.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="../template/images/shoes/gallery_item_4.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="../template/images/shoes/gallery_item_5.jpg" alt="">
          </div>
        </li>
        <li>
          <div class="gallery_item">
            <img class="img-resize" src="../template/images/shoes/gallery_item_6.jpg" alt="">
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>