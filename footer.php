<?php
/**
 * Footer template for Cinestar Theme
 */
?>
<footer class="cinestar-footer">
  <div class="cinestar-footer-bg">
    <div class="footer-container">
      <div class="footer-brand">
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
<style>
.cinestar-footer {
  width: 100%;
  position: relative;
}

.cinestar-footer-bg {
  width: 100%;
  background: radial-gradient(circle at 70% 30%, #7a3cff 0%, #2a2e92 50%, #5b0d8e 100%);
  padding: 56px 0 32px 0;
  color: #fff;
}

.footer-container {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 32px; /* thêm padding cho cân đối */
  display: flex;
  gap: 36px;
  justify-content: flex-start;
  align-items: flex-start;
  flex-wrap: wrap;
}

.footer-brand {
  min-width: 270px;
  max-width: 290px;
  margin-right: 40px;
  flex: 1;
}
.footer-logo {
  width: 170px;
  margin-bottom: 18px;
}
.footer-slogan {
  font-size: 1.15rem;
  margin-bottom: 18px;
  font-weight: 500;
  letter-spacing: 1px;
}
.footer-buttons {
  display: flex;
  gap: 12px;
  margin-bottom: 20px;
}
.footer-btn {
  display: inline-block;
  font-weight: bold;
  border-radius: 7px;
  font-size: 1.05rem;
  padding: 9px 28px;
  text-align: center;
  text-decoration: none;
  transition: all 0.18s;
  border: 2px solid #ffe600;
}
.footer-btn-primary {
  background: #ffe600;
  color: #2a2e92;
}
.footer-btn-outline {
  background: transparent;
  color: #ffe600;
}
.footer-btn:hover {
  filter: brightness(1.12);
  opacity: 0.95;
}
.footer-socials {
  margin-bottom: 14px;
}
.footer-socials a {
  display: inline-block;
  margin-right: 10px;
  vertical-align: middle;
}
.footer-socials img {
  width: 28px;
  height: 28px;
}
.footer-lang {
  margin-top: 8px;
  font-size: 1rem;
  color: #fff;
  display: flex;
  align-items: center;
  gap: 6px;
}
.footer-lang-vn {
  margin-left: 8px;
  display: flex;
  align-items: center;
  gap: 2px;
  font-weight: bold;
  color: #ffe600;
}
.footer-lang-vn img {
  width: 20px;
  height: 20px;
  margin-right: 2px;
}
.footer-links {
  display: flex;
  gap: 48px 36px;
  flex-wrap: wrap;
  flex: 3 1 0%;
}
.footer-col {
  min-width: 150px;
  margin-bottom: 16px;
  display: flex;
  flex-direction: column;
}
.footer-title {
  font-weight: bold;
  color: #fff;
  margin-bottom: 10px;
  font-size: 1.08rem;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}
.footer-col a {
  color: #fff;
  text-decoration: none;
  margin-bottom: 8px;
  font-size: 1rem;
  transition: color 0.2s;
}
.footer-col a:hover {
  color: #ffe600;
}
.cinestar-login-popup-bg {
  position: fixed; left: 0; top: 0; width: 100vw; height: 100vh;
  background: rgba(10,20,40,0.6); z-index: 9999;
  display: flex; align-items: center; justify-content: center;
}
.cinestar-login-popup {
  background: #141a3b;
  color: #fff;
  padding: 36px 32px 28px 32px;
  border-radius: 18px;
  min-width: 320px;
  max-width: 94vw;
  position: relative;
  box-shadow: 0 8px 48px rgba(0,0,0,0.3);
}
.cinestar-login-popup h2 {
  font-size: 1.6rem; margin-bottom: 22px; color: #ffe600; font-weight: bold;
  text-align: center;
}
.cinestar-login-popup input[type="text"],
.cinestar-login-popup input[type="password"] {
  display: block; width: 100%; margin-bottom: 18px; padding: 12px;
  border-radius: 7px; border: none; font-size: 1rem;
  background: #21285a; color: #fff;
}
.cinestar-login-popup button[type="submit"] {
  width: 100%; padding: 12px; border-radius: 7px;
  background: #ffe600; color: #2a2e92; font-weight: bold; font-size: 1.06rem;
  border: none; cursor: pointer; transition: background 0.22s;
}
.cinestar-login-popup button[type="submit"]:hover {
  background: #fff052;
}
.cinestar-login-popup .login-links {
  margin-top: 14px; text-align: center;
}
.cinestar-login-popup .login-links a {
  color: #ffe600; margin: 0 8px; text-decoration: none; font-size: 0.98rem;
}
.cinestar-login-close {
  position: absolute; top: 10px; right: 18px; font-size: 2rem; color: #ffe600;
  cursor: pointer; font-weight: bold; line-height: 1;
}
@media (max-width: 1100px) {
  .footer-container {
    flex-direction: column;
    gap: 24px;
    padding: 0 24px;
  }
  .footer-links {
    flex-wrap: wrap;
    gap: 24px 16px;
  }
}
@media (max-width: 700px) {
  .cinestar-footer-bg {
    padding: 32px 0 16px 0;
  }
  .footer-brand {
    margin-bottom: 32px;
    margin-right: 0;
    max-width: 100%;
  }
  .footer-col {
    min-width: 120px;
    font-size: 0.98rem;
  }
}
</style>
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