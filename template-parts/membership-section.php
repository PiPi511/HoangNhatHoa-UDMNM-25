<section class="membership-section" style="
    width: 100%;
    background: linear-gradient(180deg,rgba(24,22,57,0.96) 0%,rgba(61,41,116,0.93) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-membership.jpg') center center / cover no-repeat;
    padding: 60px 0 70px 0;
    overflow: hidden;
">
  <div class="container" style="max-width:1200px;margin:0 auto;">
    <h1 style="color:#fff;text-align:center;font-size:2.4rem;font-weight:900;letter-spacing:2px;text-shadow:0 2px 8px #181f37;margin-bottom:38px;">
      CHƯƠNG TRÌNH THÀNH VIÊN
    </h1>
    <div class="membership-cards" style="
      display: flex;
      justify-content: center;
      gap: 48px;
      flex-wrap: wrap;
    ">
      <!-- Card C'Friend -->
      <div class="membership-card" style="
        background: transparent;
        border-radius: 22px;
        overflow: visible;
        width: 500px;
        min-width: 260px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        position: relative;
      ">
        <div style="
          position:relative;
          width:100%;
          display:flex;
          justify-content:center;
          align-items:center;
          margin-bottom: 0;
        ">
          <div style="
            position:absolute;
            left:50%;top:50%;transform:translate(-50%,-50%);
            width:98%;height:100%;
            z-index:0;
            filter: blur(22px);
            background: radial-gradient(circle,rgba(255,234,0,0.38) 0%,rgba(255,234,0,0.0) 88%);
            opacity:0.95;
            border-radius:20px;
          "></div>
          <a href="http://localhost/cinestar/membership/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cfriend.jpg" alt="C'Friend" style="
            width:100%;max-width:460px;display:block;position:relative;z-index:1;
            border-radius:18px;
            box-shadow:0 0 32px 8px rgba(255,234,0,0.13);
          ">
        </div>
        <div style="
          width:100%;
          background: none;
          margin-top: 0;
          text-align: left;
          padding: 32px 36px 28px 36px;
          display: flex;
          flex-direction: column;
          align-items: flex-start;
        ">
          <h2 style="color:#fff;font-size:1.54rem;font-weight:900;text-shadow:0 1px 5px #000;margin-bottom:12px;letter-spacing: 1px;">
            THÀNH VIÊN C'FRIEND
          </h2>
          <div style="color:#fff;font-size:1.08rem;margin-bottom:18px;">
            Thẻ C'Friend mang đến nhiều ưu đãi cho thành viên mới
          </div>
          <a href="http://localhost/cinestar/membership/" class="btn btn-yellow" style="
            display:inline-block;background:#ffe600;color:#181f37;font-weight:700;
            padding:13px 38px;border-radius:7px;font-size:1.08rem;text-decoration:none;
            box-shadow:0 2px 8px #181f37;
            letter-spacing: 1px;
          ">TÌM HIỂU NGAY</a>
        </div>
      </div>
      <!-- Card C'VIP -->
      <div class="membership-card" style="
        background: transparent;
        border-radius: 22px;
        overflow: visible;
        width: 500px;
        min-width: 260px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        position: relative;
      ">
        <div style="
          position:relative;
          width:100%;
          display:flex;
          justify-content:center;
          align-items:center;
          margin-bottom: 0;
        ">
          <div style="
            position:absolute;
            left:50%;top:50%;transform:translate(-50%,-50%);
            width:98%;height:100%;
            z-index:0;
            filter: blur(22px);
            background: radial-gradient(circle,rgba(201,106,255,0.34) 0%,rgba(201,106,255,0.0) 88%);
            opacity:0.92;
            border-radius:20px;
          "></div>
          <a href="http://localhost/cinestar/membership/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cvip.jpg" alt="C'VIP" style="
            width:100%;max-width:460px;display:block;position:relative;z-index:1;
            border-radius:18px;
            box-shadow:0 0 32px 8px rgba(201,106,255,0.13);
          ">
        </div>
        <div style="
          width:100%;
          background: none;
          margin-top: 0;
          text-align: left;
          padding: 32px 36px 28px 36px;
          display: flex;
          flex-direction: column;
          align-items: flex-start;
        ">
          <h2 style="color:#fff;font-size:1.54rem;font-weight:900;text-shadow:0 1px 5px #000;margin-bottom:12px;letter-spacing: 1px;">
            THÀNH VIÊN C'VIP
          </h2>
          <div style="color:#fff;font-size:1.08rem;margin-bottom:18px;">
            Thẻ VIP Cinestar dành riêng cho bạn những đặc quyền chất riêng.
          </div>
          <a href="http://localhost/cinestar/membership/" class="btn btn-yellow" style="
            display:inline-block;background:#ffe600;color:#181f37;font-weight:700;
            padding:13px 38px;border-radius:7px;font-size:1.08rem;text-decoration:none;
            box-shadow:0 2px 8px #181f37;
            letter-spacing: 1px;
          ">TÌM HIỂU NGAY</a>
        </div>
      </div>
    </div>
  </div>
</section>