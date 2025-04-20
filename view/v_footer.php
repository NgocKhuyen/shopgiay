<footer class="main-footer">
  <div class="container">
    <div class="">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-col footer-block">
            <h4 class="footer-title">
              Giới thiệu
            </h4>
            <div class="footer-content">
              <p>Runner Inn trang mua sắm trực tuyến của thương hiệu giày, thời trang nam, nữ, phụ kiện, giúp bạn
                tiếp
                cận xu hướng thời trang mới nhất.</p>
              <div class="logo-footer">
                <img src="../template/images/logo-bct.png" alt="Bộ Công Thương">
              </div>
              <div class="social-list">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-google"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-youtube"></a>
                <a href="#" class="fab fa-skype"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-col footer-link">
            <h4 class="footer-title">
              PHÁP LÝ &amp; CÂU HỎI
            </h4>
            <div class="footer-content toggle-footer">
              <ul>
                <li class="item">
                  <a href="#" title="Tìm kiếm">Tìm kiếm</a>
                </li>
                <li class="item">
                  <a href="#" title="Giới thiệu">Giới thiệu</a>
                </li>
                <li class="item">
                  <a href="#" title="Chính sách đổi trả">Chính sách đổi trả</a>
                </li>
                <li class="item">
                  <a href="#" title="Chính sách bảo mật">Chính sách bảo mật</a>
                </li>
                <li class="item">
                  <a href="#" title="Điều khoản dịch vụ">Điều khoản dịch vụ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-col footer-block">
            <h4 class="footer-title">
              Thông tin liên hệ
            </h4>
            <div class="footer-content toggle-footer">
              <ul>
                <li><span>Địa chỉ:</span> 117-119 Lý Chính Thắng, Phường 7, Quận 3, TP. Hồ Chí Minh, Vietnam</li>
                <li><span>Điện thoại:</span> +84 (028) 38800659</li>
                <li><span>Fax:</span> +84 (028) 38800659</li>
                <li><span>Mail:</span> contact@aziworld.com</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="footer-col footer-block">
            <h4 class="footer-title">
              FANPAGE
            </h4>
            <div class="footer-content">
              <div id="fb-root">
                <div class="footer-static-content">
                  <div class="fb-page" data-href="https://www.facebook.com/AziWorld-Viet-Nam-908555669481794/"
                    data-tabs="timeline" data-width="" data-height="215" data-small-header="false"
                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/AziWorld-Viet-Nam-908555669481794/"
                      class="fb-xfbml-parse-ignore"><a
                        href="https://www.facebook.com/AziWorld-Viet-Nam-908555669481794/">AziWorld Viet Nam</a>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-footer--copyright">
    <div class="container">
      <hr>
      <div class="main-footer--border" style="text-align:center;padding-bottom: 15px;">
        <p>Copyright © 2019 <a href="https://runner-inn.myharavan.com"> Runner Inn</a>. <a target="_blank"
            href="https://www.facebook.com/henrynguyen202">Powered by HuniBlue</a></p>
      </div>
    </div>
  </div>
</footer>
<script async defer crossorigin="anonymous" src="../template/plugins/sdk.js"></script>
<script src="../template/plugins/jquery-3.4.1/jquery-3.4.1.min.js"></script>
<script src="../template/plugins/bootstrap/popper.min.js"></script>
<script src="../template/plugins/bootstrap/bootstrap.min.js"></script>
<script src="../template/plugins/owl.carousel/owl.carousel.min.js"></script>
<script src="../template/js/home.js"></script>
<script src="../template/js/script.js"></script>
<script src="../template/plugins/uikit/uikit.min.js"></script>
<script src="../template/plugins/uikit/uikit-icons.min.js"></script>
<script>
  
  $(document).mouseup(function (e) {
    // Đóng user modal
    var userModal = $("#userModal .modal-content");
    if (!userModal.is(e.target) && userModal.has(e.target).length === 0) {
      $('#userModal').modal('hide');
    }

    // Đóng cart modal
    var cartModal = $("#cartModal .modal-content");
    if (!cartModal.is(e.target) && cartModal.has(e.target).length === 0) {
      $('#cartModal').modal('hide');
    }
  });
</script>


</body>

</html>