<section class="promotion-section" style="
    width: 100vw;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    position: relative;
    background: linear-gradient(180deg,rgba(24,22,57,0.96) 0%,rgba(61,41,116,0.93) 100%);
    padding: 56px 0;
    overflow: hidden;
">
  <div class="container" style="max-width:1300px;margin:0 auto;">
    <h1 style="
      color:#fff;
      text-align:left;
      font-size:2.3rem;
      font-weight:900;
      letter-spacing:1px;
      text-shadow:0 2px 8px #181f37;
      margin-bottom:36px;
      margin-left:40px;
    ">
      KHUYẾN MÃI
    </h1>

    <!-- Slider -->
    <div class="promotion-slider-wrapper" style="
      position:relative;
      display:flex;
      justify-content:center;
      align-items:center;
      width:100%;
      min-height:240px;
    ">
      <!-- Prev -->
      <button id="promo-prev" class="promo-arrow promo-arrow-left">&lt;</button>

      <!-- Slides wrapper -->
      <div class="promo-slides">
        <!-- Sẽ được JS render -->
      </div>

      <!-- Next -->
      <button id="promo-next" class="promo-arrow promo-arrow-right">&gt;</button>
    </div>

    <!-- Dots -->
    <div class="promo-dots" style="text-align:center;margin:28px 0 22px 0;">
      <span class="promo-dot"></span>
      <span class="promo-dot"></span>
      <span class="promo-dot"></span>
      <span class="promo-dot"></span>
    </div>

    <!-- Button -->
    <div style="text-align:center;">
      <a href="/chuong-trinh-khuyen-mai" class="btn btn-yellow">TẤT CẢ ƯU ĐÃI</a>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function(){
  const slideImgs = [
    "<?php echo get_template_directory_uri(); ?>/assets/images/promotion1.jpg",
    "<?php echo get_template_directory_uri(); ?>/assets/images/promotion2.jpg",
    "<?php echo get_template_directory_uri(); ?>/assets/images/promotion3.jpg",
    "<?php echo get_template_directory_uri(); ?>/assets/images/promotion4.jpg"
  ];
  const slideAlt = ["Khuyến mãi 1", "Khuyến mãi 2", "Khuyến mãi 3", "Khuyến mãi 4"];

  const wrapper = document.querySelector('.promo-slides');
  const dots = document.querySelectorAll('.promo-dot');
  const prevBtn = document.getElementById('promo-prev');
  const nextBtn = document.getElementById('promo-next');
  const sliderWrapper = document.querySelector('.promotion-slider-wrapper');

  let total = slideImgs.length;
  let show = 3;
  let current = 0;
  let autoPlay;

  function renderSlides() {
    wrapper.innerHTML = '';
    for (let i = 0; i < show; i++) {
      let idx = (current + i) % total;
      let div = document.createElement('div');
      div.className = 'promo-slide';
      let img = document.createElement('img');
      img.src = slideImgs[idx];
      img.alt = slideAlt[idx];
      div.appendChild(img);
      wrapper.appendChild(div);
    }

    // reset dots
    dots.forEach(d => d.classList.remove('promo-dot-active'));
    dots[current].classList.add('promo-dot-active');
  }

  function nextSlide() {
    current = (current + 1) % total;
    renderSlides();
  }

  function prevSlide() {
    current = (current - 1 + total) % total;
    renderSlides();
  }

  function startAutoPlay() {
    autoPlay = setInterval(nextSlide, 3000);
  }

  function stopAutoPlay() {
    clearInterval(autoPlay);
  }

  // Event
  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);
  dots.forEach((d, i) => d.addEventListener('click', () => {
    current = i;
    renderSlides();
  }));

  sliderWrapper.addEventListener('mouseenter', stopAutoPlay);
  sliderWrapper.addEventListener('mouseleave', startAutoPlay);

  // init
  renderSlides();
  startAutoPlay();
});
</script>

<style>
/* Arrow */
.promo-arrow {
  background:rgba(24,22,57,0.96);
  border:none;
  cursor:pointer;
  outline:none;
  font-size:2.8rem;
  color:#fff;
  width:48px;
  height:48px;
  display:flex;
  align-items:center;
  justify-content:center;
  position:absolute;
  top:50%;
  transform:translateY(-50%);
  z-index:5;
  border-radius:50%;
  box-shadow:0 2px 12px rgba(0,0,0,0.18);
  transition: background 0.2s;
}
.promo-arrow-left { left:-52px; }
.promo-arrow-right { right:-52px; }
.promo-arrow:hover { background:#ffe600; color:#181f37; }

/* Slides */
.promo-slides {
  display:flex;
  gap:24px;
  justify-content:center;
  align-items:center;
  margin:0 auto;
  transition: all 0.4s cubic-bezier(.32,.77,.52,.94);
  overflow:visible;
  width:1248px;
  min-width:1248px;
  min-height:260px;
}
.promo-slide {
  flex:0 0 400px;
  display:flex;
  align-items:center;
  justify-content:center;
}
.promo-slide img {
  width:400px;
  border-radius:16px;
  box-shadow:0 4px 24px rgba(0,0,0,0.18);
}

/* Dots */
.promo-dot {
  display:inline-block;
  width:16px;
  height:16px;
  border-radius:50%;
  background:#fff;
  margin:0 6px;
  box-shadow:0 2px 8px #181f37;
  cursor:pointer;
}
.promo-dot-active { background:#ffe600 !important; }

/* Button */
.btn.btn-yellow {
  display:inline-block;
  background:#ffe600;
  color:#181f37;
  font-weight:700;
  padding:15px 48px;
  border-radius:7px;
  font-size:1.22rem;
  text-decoration:none;
  box-shadow:0 2px 8px #181f37;
  letter-spacing:1px;
}

/* Responsive */
@media (max-width:1400px) {
  .promo-slides { width:100% !important; min-width:0 !important; }
  .promo-slide { flex:0 0 30vw; max-width:98vw; }
  .promo-arrow-left { left:0 !important; }
  .promo-arrow-right { right:0 !important; }
}
@media (max-width:900px) {
  .promo-slides { width:100% !important; min-width:0 !important; gap:10px !important;}
  .promo-slide { flex:0 0 95vw; max-width:100vw;}
}
</style>
