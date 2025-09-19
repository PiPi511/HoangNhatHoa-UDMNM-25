<?php
/* Template Name: Event */
get_header();
?>

<section class="event-page-section" style="background: radial-gradient(ellipse at top, #005667 0%, #181f37 100%); min-height: 100vh; width:100vw; left:50%; right:50%; margin-left:-50vw; margin-right:-50vw; position:relative; padding-top:36px; padding-bottom:0;">
  <div class="event-content" style="max-width:1200px; margin:0 auto; padding:32px 0 60px 0;">
    <h1 style="color:#ffe600; font-size:2.6rem; font-family:'Oswald','Montserrat',Arial,sans-serif; font-weight:900; letter-spacing:2px; text-align:center; margin-bottom:38px; text-transform:uppercase; text-shadow:0 2px 8px #181f37;">Tổ Chức Sự Kiện Tại Cinestar</h1>
    
    <div class="event-lead" style="color:#fff; font-size:1.18rem; text-align:center; margin-bottom:48px; line-height:1.8;">
      Cinestar không chỉ là địa điểm lý tưởng để thưởng thức điện ảnh mà còn là nơi tổ chức các sự kiện đẳng cấp: ra mắt phim, họp báo, hội thảo, tiệc sinh nhật, gặp gỡ khách hàng, gala, team building và nhiều loại hình sự kiện khác. Với không gian hiện đại, âm thanh ánh sáng chuyên nghiệp cùng đội ngũ tổ chức tận tâm, Cinestar cam kết mang lại trải nghiệm trọn vẹn và thành công cho mọi sự kiện của bạn.
    </div>
    
    <!-- Sự kiện mẫu 1 -->
    <div class="event-row" style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:40px 28px;margin-bottom:60px;">
      <div class="event-img" style="flex:1 1 540px;max-width:600px;display:flex;justify-content:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-premiere.jpg" alt="Sự kiện ra mắt phim Cinestar" style="width:100%;max-width:540px;aspect-ratio:16/9;object-fit:cover;border-radius:16px;box-shadow:0 2px 20px rgba(0,0,0,0.17);" />
      </div>
      <div class="event-desc" style="flex:1 1 470px;max-width:540px;">
        <h2 style="color:#fff;font-size:1.4rem;font-family:'Oswald','Montserrat',Arial,sans-serif;font-weight:800;margin-bottom:16px;text-transform:uppercase;letter-spacing:1px;">Ra Mắt Phim & Họp Báo</h2>
        <ul style="color:#fff;font-size:1.07rem;line-height:1.7;margin-bottom:18px;padding-left:18px;">
          <li>Không gian sang trọng, kiểm soát tốt truyền thông và số lượng khách mời.</li>
          <li>Trang thiết bị chiếu phim, âm thanh, ánh sáng, livestream hiện đại, đáp ứng sự kiện quy mô lớn.</li>
          <li>Hỗ trợ tổ chức workshop, talkshow, ký tặng, giao lưu diễn viên.</li>
        </ul>
      </div>
    </div>

    <!-- Sự kiện mẫu 2 -->
    <div class="event-row" style="display:flex;flex-wrap:wrap-reverse;align-items:center;justify-content:space-between;gap:40px 28px;margin-bottom:60px;">
      <div class="event-desc" style="flex:1 1 470px;max-width:540px;">
        <h2 style="color:#fff;font-size:1.4rem;font-family:'Oswald','Montserrat',Arial,sans-serif;font-weight:800;margin-bottom:16px;text-transform:uppercase;letter-spacing:1px;">Tổ Chức Tiệc Sinh Nhật</h2>
        <ul style="color:#fff;font-size:1.07rem;line-height:1.7;margin-bottom:18px;padding-left:18px;">
          <li>Không gian riêng tư, bài trí vui tươi, phù hợp cho trẻ nhỏ hoặc nhóm bạn.</li>
          <li>Gói dịch vụ trọn gói: trang trí, bánh kem, ăn nhẹ, xem phim, hoạt náo, chụp hình lưu niệm.</li>
          <li>Ưu đãi đặc biệt cho nhóm khách hàng lớn hoặc trường học.</li>
        </ul>
      </div>
      <div class="event-img" style="flex:1 1 540px;max-width:600px;display:flex;justify-content:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-birthday.jpg" alt="Tổ chức sinh nhật tại Cinestar" style="width:100%;max-width:540px;aspect-ratio:16/9;object-fit:cover;border-radius:16px;box-shadow:0 2px 20px rgba(0,0,0,0.17);" />
      </div>
    </div>

    <!-- Sự kiện mẫu 3 -->
    <div class="event-row" style="display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:40px 28px;margin-bottom:60px;">
      <div class="event-img" style="flex:1 1 540px;max-width:600px;display:flex;justify-content:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-corporate.jpg" alt="Tổ chức hội nghị hội thảo Cinestar" style="width:100%;max-width:540px;aspect-ratio:16/9;object-fit:cover;border-radius:16px;box-shadow:0 2px 20px rgba(0,0,0,0.17);" />
      </div>
      <div class="event-desc" style="flex:1 1 470px;max-width:540px;">
        <h2 style="color:#fff;font-size:1.4rem;font-family:'Oswald','Montserrat',Arial,sans-serif;font-weight:800;margin-bottom:16px;text-transform:uppercase;letter-spacing:1px;">Hội Thảo - Hội Nghị - Gala</h2>
        <ul style="color:#fff;font-size:1.07rem;line-height:1.7;margin-bottom:18px;padding-left:18px;">
          <li>Đáp ứng đa dạng loại hình hội thảo, hội nghị khách hàng, gala dinner, team building…</li>
          <li>Không gian linh hoạt, sức chứa lớn, bố trí tùy biến theo yêu cầu.</li>
          <li>Hỗ trợ ăn uống, giải trí, hoạt động nhóm, bốc thăm trúng thưởng...</li>
        </ul>
      </div>
    </div>

    <!-- Đăng ký tổ chức sự kiện -->
    <div class="event-register-box" style="background:rgba(255,255,255,0.04);border-radius:14px;padding:28px 18px;margin-top:44px;text-align:center;">
      <h2 style="color:#ffe600;font-size:1.3rem;font-weight:900;margin-bottom:18px;letter-spacing:1px;text-transform:uppercase;">Liên hệ tổ chức sự kiện tại Cinestar</h2>
      <div style="color:#fff;font-size:1.08rem;margin-bottom:18px;">
        Hotline: <a href="tel:19006088" style="color:#ffe600;">1900 6088</a> <br>
        Email: <a href="mailto:lienhe@cinestar.com.vn" style="color:#ffe600;">lienhe@cinestar.com.vn</a>
      </div>
      <a href="/lien-he" style="display:inline-block;padding:13px 38px;background:#ffe600;color:#181f37;font-weight:900;font-size:1.13rem;border-radius:8px;text-decoration:none;box-shadow:0 2px 10px rgba(0,0,0,0.10);transition:all 0.18s;">ĐĂNG KÝ NGAY</a>
    </div>
  </div>
</section>
<style>
.event-page-section {
  font-family: 'Montserrat', Arial, sans-serif;
}
@media (max-width: 1000px) {
  .event-content { padding-left:10px;padding-right:10px; }
  .event-row { flex-direction:column !important;gap:34px 0!important; }
  .event-desc, .event-img { max-width:100%!important;text-align:center!important; }
  .event-img img { max-width:98vw!important; }
}
@media (max-width: 700px) {
  .event-row { gap:18px 0!important; }
  .event-desc ul { font-size:1rem !important;}
  .event-desc h2 { font-size:1.12rem !important;}
  .event-img img { max-width:100vw!important;height:auto!important;}
}
</style>

<?php get_footer(); ?>