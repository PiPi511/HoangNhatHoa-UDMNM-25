<?php
/* Template Name: Membership */
get_header();
?>

<section class="membership-page-section" style="background: radial-gradient(ellipse at top, #4747bb 0%, #181f37 100%); min-height: 100vh; width:100vw; left: 50%; right: 50%; margin-left: -50vw; margin-right: -50vw; position: relative; padding-top: 36px; padding-bottom: 0;">
  <div class="membership-content" style="max-width:1280px;margin:0 auto;padding:32px 0 60px 0;min-height:80vh;">
    <!-- C'FRIEND row -->
    <div class="membership-row" style="display:flex;flex-wrap:wrap;align-items:flex-start;justify-content:space-between;gap:40px 24px;margin-bottom:90px;">
      <div class="membership-desc" style="flex:1 1 470px;max-width:560px;">
        <h2 style="color:#fff;font-size:2.1rem;font-family:'Oswald','Montserrat',Arial,sans-serif;font-weight:900;margin-bottom:22px;text-transform:uppercase;letter-spacing:1px;line-height:1;">HẠNG C'FRIEND</h2>
        <ul style="color:#fff;font-size:1.19rem;line-height:1.8;margin-bottom:32px;padding-left:20px;font-family:'Montserrat',Arial,sans-serif;">
          <li>Thẻ thành viên được cấp lần đầu khi khách hàng mua từ 2 vé xem phim bất kỳ tại Cinestar.</li>
          <li>Thành viên được tích lũy điểm dựa trên giá trị mua hàng hóa và dịch vụ.</li>
          <li>Giảm ngay 10% trên tổng hóa đơn bắp nước khi mua trực tiếp tại quầy.</li>
          <li>Nhận 1 vé xem phim 2D miễn phí trong tuần sinh nhật (tính từ Thứ Hai đến Chủ Nhật), áp dụng khi tài khoản tích lũy từ 500 điểm trở lên.</li>
        </ul>
        <a href="/dat-ve" style="display:inline-block;padding:15px 38px;background:#ffe600;color:#181f37;font-weight:900;font-size:1.25rem;border-radius:8px;text-decoration:none;box-shadow:0 2px 10px rgba(0,0,0,0.10);transition:all 0.18s;font-family:'Oswald','Montserrat',Arial,sans-serif;">ĐẶT VÉ NGAY</a>
      </div>
      <div class="membership-img" style="flex:1 1 540px;max-width:600px;display:flex;justify-content:center;align-items:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-cfriend.jpg" alt="C'Friend Card" style="width:100%;max-width:640px;aspect-ratio:16/9;object-fit:cover;border-radius:18px;box-shadow:0 4px 24px rgba(0,0,0,0.18);" />
      </div>
    </div>
    <!-- C'VIP row -->
    <div class="membership-row" style="display:flex;flex-wrap:wrap;align-items:flex-start;justify-content:space-between;gap:40px 24px;">
      <div class="membership-img" style="flex:1 1 540px;max-width:600px;display:flex;justify-content:center;align-items:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-cvip.jpg" alt="C'VIP Card" style="width:100%;max-width:540px;aspect-ratio:15/9;object-fit:cover;border-radius:18px;box-shadow:0 4px 24px rgba(0,0,0,0.18);margin-top:20px;" />
      </div>
      <div class="membership-desc" style="flex:1 1 470px;max-width:560px;">
        <h2 style="color:#fff;font-size:2.1rem;font-family:'Oswald','Montserrat',Arial,sans-serif;font-weight:900;margin-bottom:22px;text-transform:uppercase;letter-spacing:1px;line-height:1;">HẠNG C'VIP</h2>
        <ul style="color:#fff;font-size:1.19rem;line-height:1.8;margin-bottom:32px;padding-left:20px;font-family:'Montserrat',Arial,sans-serif;">
          <li>Thẻ được cấp cho thành viên C'Friend khi đạt mốc tích lũy từ 10.000 điểm trở lên.</li>
          <li>Giảm ngay 15% trên hóa đơn bắp nước khi mua trực tiếp tại quầy.</li>
          <li>Nhận 2 vé xem phim và combo 1 bắp và 2 nước trong tuần sinh nhật (tính từ Thứ Hai đến Chủ Nhật).</li>
          <li>Có cơ hội nhận vé tham dự các buổi Lễ Ra Mắt Phim và tham gia nhiều chương trình khuyến mãi hấp dẫn từ Cinestar.</li>
        </ul>
        <a href="/dat-ve" style="display:inline-block;padding:15px 38px;background:#ffe600;color:#181f37;font-weight:900;font-size:1.25rem;border-radius:8px;text-decoration:none;box-shadow:0 2px 10px rgba(0,0,0,0.10);transition:all 0.18s;font-family:'Oswald','Montserrat',Arial,sans-serif;">ĐẶT VÉ NGAY</a>
      </div>
    </div>
  </div>
</section>
<style>
.membership-page-section {
    font-family: 'Montserrat', Arial, sans-serif;
}
@media (max-width: 1200px) {
  .membership-content { padding-left:10px;padding-right:10px; }
  .membership-row { flex-direction:column !important;gap:38px 0!important; }
  .membership-desc, .membership-img { max-width:100%!important;text-align:center!important; }
  .membership-img img { max-width:98vw!important; }
}
@media (max-width: 700px) {
  .membership-row { gap:24px 0!important; }
  .membership-desc ul { font-size:1rem !important;}
  .membership-desc h2 { font-size:1.3rem !important;}
  .membership-img img { max-width:100vw!important;height:auto!important;}
}
</style>

<?php get_footer(); ?>