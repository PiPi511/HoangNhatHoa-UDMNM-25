<section class="entertainment-services" style="background: #151c2c; padding: 60px 0 80px 0; width:100vw; left: 50%; right: 50%; margin-left: -50vw; margin-right: -50vw; position: relative;">
  <div class="container" style="max-width:1220px;margin:0 auto;">
    <h2 style="color:#fff;text-align:center;font-size:2.5rem;font-weight:900;letter-spacing:2px;text-shadow:0 2px 8px #181f37;margin-bottom:20px;">DỊCH VỤ GIẢI TRÍ KHÁC</h2>
    <p style="color:#fff;text-align:center;font-size:1.18rem;max-width:740px;margin:0 auto 36px auto;line-height:1.7;">
      Cinestar không chỉ chiếu phim – chúng tôi còn mang đến nhiều mô hình giải trí đặc sắc khác, giúp bạn tận hưởng từng giây phút bên ngoài màn ảnh rộng.
    </p>
    <div class="entertainment-grid" style="display:flex;flex-direction:column;gap:36px;">
      <!-- Row 1 -->
      <div class="entertainment-row" style="display:flex;gap:36px;justify-content:center;">
        <a href="http://localhost/cinestar/kidzone/" class="entertainment-card" style="flex:1;max-width:370px;min-width:260px;background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.13);transition:transform 0.2s;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kidzone.jpg" alt="Kidzone" style="width:100%;height:auto;object-fit:contain;">
          <div style="padding:18px 0 18px 0;text-align:center;background:#ffe600;">
            <span style="font-weight:700;font-size:1.25rem;color:#181f37;letter-spacing:1px;">KIDZONE</span>
          </div>
        </a>
        <a href=" http://localhost/cinestar/bowling/" class="entertainment-card" style="flex:1;max-width:370px;min-width:260px;background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.13);transition:transform 0.2s;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bowling.jpg" alt="Bowling" style="width:100%;height:auto;object-fit:contain;">
          <div style="padding:18px 0 18px 0;text-align:center;background:#ffe600;">
            <span style="font-weight:700;font-size:1.25rem;color:#181f37;letter-spacing:1px;">BOWLING</span>
          </div>
        </a>
        <a href="http://localhost/cinestar/billiard/" class="entertainment-card" style="flex:1;max-width:370px;min-width:260px;background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.13);transition:transform 0.2s;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/billiards.jpg" alt="Billiards" style="width:100%;height:auto;object-fit:contain;">
          <div style="padding:18px 0 18px 0;text-align:center;background:#ffe600;">
            <span style="font-weight:700;font-size:1.25rem;color:#181f37;letter-spacing:1px;">BILLIARDS</span>
          </div>
        </a>
      </div>
      <!-- Row 2 -->
      <div class="entertainment-row" style="display:flex;gap:36px;justify-content:center;">
        <a href=" http://localhost/cinestar/restaurant/" class="entertainment-card" style="flex:1;max-width:370px;min-width:260px;background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.13);transition:transform 0.2s;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/restaurant.jpg" alt="Restaurant" style="width:100%;height:auto;object-fit:contain;">
          <div style="padding:18px 0 18px 0;text-align:center;background:#ffe600;">
            <span style="font-weight:700;font-size:1.25rem;color:#181f37;letter-spacing:1px;">RESTAURANT</span>
          </div>
        </a>
        <a href=" http://localhost/cinestar/gym/" class="entertainment-card" style="flex:1;max-width:370px;min-width:260px;background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.13);transition:transform 0.2s;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gym.jpg" alt="Gym" style="width:100%;height:auto;object-fit:contain;">
          <div style="padding:18px 0 18px 0;text-align:center;background:#ffe600;">
            <span style="font-weight:700;font-size:1.25rem;color:#181f37;letter-spacing:1px;">GYM</span>
          </div>
        </a>
        <a href=" http://localhost/cinestar/opera/" class="entertainment-card" style="flex:1;max-width:370px;min-width:260px;background:#fff;border-radius:18px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.13);transition:transform 0.2s;">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/operahouse.jpg" alt="Operahouse" style="width:100%;height:auto;object-fit:contain;">
          <div style="padding:18px 0 18px 0;text-align:center;background:#ffe600;">
            <span style="font-weight:700;font-size:1.25rem;color:#181f37;letter-spacing:1px;">OPERAHOUSE</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<style>
.entertainment-card:hover {
  transform: translateY(-8px) scale(1.03);
  box-shadow: 0 8px 36px rgba(0,0,0,0.18);
  text-decoration: none !important;
}
@media (max-width: 1100px) {
  .entertainment-row { flex-direction: column; gap: 18px !important; }
  .entertainment-card { max-width: 98vw !important; min-width: 0 !important; }
  .entertainment-grid { gap: 18px !important; }
}
@media (max-width: 600px) {
  .entertainment-card img { height: 32vw !important; min-height: 120px; }
  .entertainment-card { border-radius: 10px !important; }
  .entertainment-row { gap: 10px !important; }
  .entertainment-services { padding: 32px 0 40px 0 !important; }
}
</style>