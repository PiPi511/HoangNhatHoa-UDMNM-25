<?php
/**
 * Footer template for Cinestar Theme
 */
?>
<footer class="cinestar-footer">
  <div class="cinestar-footer-bg">
    <div class="footer-container">
      <div class="footer-brand">
        <a href="http://localhost/cinestar/">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-footer.png" alt="Cinestar Logo" class="footer-logo" />
        <div class="footer-slogan">BE HAPPY, BE A STAR</div>
        <div class="footer-buttons">
          <a href="#" class="footer-btn footer-btn-primary">ĐẶT VÉ</a>
          <a href="#" class="footer-btn footer-btn-outline">ĐẶT BẮP NƯỚC</a>
        </div>
        <div class="footer-socials">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-fb.svg" alt="Facebook" /></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-yt.svg" alt="YouTube" /></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-tt.svg" alt="TikTok" /></a>
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-zalo.svg" alt="Zalo" /></a>
        </div>
        <div class="footer-lang">
          <span>Ngôn ngữ:</span>
          <span class="footer-lang-vn"><img src="<?php echo get_template_directory_uri(); ?>/assets/icon-vn.svg" alt="VN" /> VN</span>
        </div>
      </div>
      <div class="footer-links">
        <div class="footer-col">
          <div class="footer-title">TÀI KHOẢN</div>
          <a href="#" class="cinestar-login-link"><i class="fa fa-user"></i> Đăng nhập</a>
          <a href="<?php echo esc_url(wp_registration_url()); ?>">Đăng ký</a>
          <a href="#">Membership</a>
        </div>
        <div class="footer-col">
          <div class="footer-title">XEM PHIM</div>
          <a href="#">Phim đang chiếu</a>
          <a href="#">Phim sắp chiếu</a>
          <a href="#">Suất chiếu đặc biệt</a>
        </div>
        <div class="footer-col">
          <div class="footer-title">THUÊ SỰ KIỆN</div>
          <a href="#">Thuê rạp</a>
          <a href="#" style="color:#ffe600;">Các loại hình cho thuê khác</a>
        </div>
        <div class="footer-col">
          <div class="footer-title">CINESTAR</div>
          <a href="#">Giới thiệu</a>
          <a href="#">Liên hệ</a>
          <a href="#">Tuyển dụng</a>
        </div>
        <div class="footer-col">
          <div class="footer-title">DỊCH VỤ KHÁC</div>
          <a href="#">Nhà hàng</a>
          <a href="#">Kidzone</a>
          <a href="#">Bowling</a>
          <a href="#">Billiards</a>
          <a href="#">Gym</a>
          <a href="#">Nhà hát Opera</a>
          <a href="#">Coffee</a>
        </div>
        <div class="footer-col">
          <div class="footer-title">HỆ THỐNG RẠP</div>
          <a href="#">Tất cả hệ thống rạp</a>
          <a href="#">Cinestar Quốc Thanh (TP.HCM)</a>
          <a href="#">Cinestar Hai Bà Trưng (TP.HCM)</a>
          <a href="#">Cinestar Sinh Viên (TP.HCM)</a>
          <a href="#">Cinestar Huế (TP.Huế)</a>
          <a href="#">Cinestar Đà Lạt (Lâm Đồng)</a>
          <a href="#">Cinestar Lâm Đồng (Đức Trọng)</a>
          <a href="#">Cinestar Mỹ Tho (Tiền Giang)</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Popup Đăng nhập Cinestar -->
<div id="cinestar-login-popup" class="cinestar-login-popup-bg" style="display:none;">
  <div class="cinestar-login-popup">
    <h2>Đăng nhập</h2>
    <form method="post" action="<?php echo esc_url(wp_login_url()); ?>">
      <input type="text" name="log" placeholder="Tên đăng nhập hoặc email" required>
      <input type="password" name="pwd" placeholder="Mật khẩu" required>
      <button type="submit">Đăng nhập</button>
    </form>
    <div class="login-links">
      <a href="<?php echo esc_url(wp_lostpassword_url()); ?>">Quên mật khẩu?</a>
      <a href="<?php echo esc_url(wp_registration_url()); ?>">Đăng ký</a>
    </div>
    <span class="cinestar-login-close">&times;</span>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var loginBtn = document.querySelector('.cinestar-login-link');
  var popup = document.getElementById('cinestar-login-popup');
  var closeBtn = document.querySelector('.cinestar-login-close');
  if(loginBtn && popup && closeBtn){
    loginBtn.addEventListener('click', function(e) {
      e.preventDefault();
      popup.style.display = 'flex';
    });
    closeBtn.addEventListener('click', function() {
      popup.style.display = 'none';
    });
    popup.addEventListener('click', function(e) {
      if(e.target === popup) popup.style.display = 'none';
    });
  }
});
</script>