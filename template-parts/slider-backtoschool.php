<section class="slider-backtoschool" style="
    width: 100vw;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    position: relative;
    background: #151c2c;
    padding: 32px 0;
    overflow: hidden;
">
  <div class="slider-backtoschool-wrapper" style="
      max-width: 1360px;
      margin: 0 auto;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    ">
    <!-- Prev arrow -->
    <button id="bts-prev" class="slider-arrow slider-arrow-left" aria-label="Previous slide">
      <span>&lt;</span>
    </button>
    <!-- Slides wrapper -->
    <div class="bts-slides" style="
        width: 100%;
        max-width: 1360px;
        height: 350px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
      ">
      <!-- JS sẽ render ảnh ở đây -->
    </div>
    <!-- Next arrow -->
    <button id="bts-next" class="slider-arrow slider-arrow-right" aria-label="Next slide">
      <span>&gt;</span>
    </button>
  </div>
  <!-- Dots -->
  <div class="bts-dots" style="text-align:center;margin:18px 0 0 0;">
    <span class="bts-dot"></span>
    <span class="bts-dot"></span>
    <span class="bts-dot"></span>
    <span class="bts-dot"></span>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function(){
  // Đổi đường dẫn ảnh thật của bạn ở đây
  const slideImgs = [
    "<?php echo get_template_directory_uri(); ?>/assets/images/backtoschool1.jpg",
    "<?php echo get_template_directory_uri(); ?>/assets/images/backtoschool2.jpg",
    "<?php echo get_template_directory_uri(); ?>/assets/images/backtoschool3.jpg",
    "<?php echo get_template_directory_uri(); ?>/assets/images/backtoschool4.jpg"
  ];
  const slideAlt = [
    "Back to school 1", "Back to school 2", "Back to school 3", "Back to school 4"
  ];

  const wrapper = document.querySelector('.bts-slides');
  const dots = document.querySelectorAll('.bts-dot');
  let total = slideImgs.length;
  let current = 0;
  let interval;

  function renderSlides() {
    wrapper.innerHTML = '';
    let img = document.createElement('img');
    img.src = slideImgs[current];
    img.alt = slideAlt[current];
    img.style.width = '100%';
    img.style.maxWidth = '1360px';
    img.style.height = '350px';
    img.style.objectFit = 'top';
    img.style.borderRadius = '18px';
    img.style.boxShadow = '0 4px 24px rgba(0,0,0,0.18)';
    wrapper.appendChild(img);

    // Reset toàn bộ dot trước khi active
    dots.forEach((d, i) => {
      d.classList.remove('bts-dot-active');
      if (i === current) d.classList.add('bts-dot-active');
    });
  }

  function nextSlide(){
    current = (current + 1) % total;
    renderSlides();
  }
  function prevSlide(){
    current = (current - 1 + total) % total;
    renderSlides();
  }

  document.getElementById('bts-next').onclick = function(){
    nextSlide();
    resetAuto();
  };
  document.getElementById('bts-prev').onclick = function(){
    prevSlide();
    resetAuto();
  };

  dots.forEach((d,i) => d.onclick = function(){
    current = i;
    renderSlides();
    resetAuto();
  });

  // Auto slide
  function startAuto(){ interval = setInterval(nextSlide, 3000); }
  function stopAuto(){ clearInterval(interval); }
  function resetAuto(){ stopAuto(); startAuto(); }

  document.querySelector('.slider-backtoschool').addEventListener('mouseenter', stopAuto);
  document.querySelector('.slider-backtoschool').addEventListener('mouseleave', startAuto);

  renderSlides();
  startAuto();
});
</script>

<style>
/* Arrow style giống Cinestar */
.slider-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    width: 48px;
    height: 48px;
    background: rgba(255,255,255,0.15);
    border: none;
    outline: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
    font-size: 2.6rem;
    color: #fff;
    box-shadow: 0 2px 8px rgba(0,0,0,0.09);
}
.slider-arrow-left { left: 50px; }
.slider-arrow-right { right: 50px; }
.slider-arrow:hover {
    background: rgba(255,255,255,0.30);
    color: #ffe600;
}
.slider-arrow span {
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
}

/* Dot style */
.bts-dot {
    display:inline-block;
    width:14px;
    height:14px;
    border-radius:50%;
    background:#fff;
    margin:0 6px;
    box-shadow:0 2px 8px #181f37;
    cursor:pointer;
}
.bts-dot-active { background:#ffe600 !important; }

/* Responsive */
@media (max-width:1500px) {
  .slider-backtoschool-wrapper, .bts-slides { max-width:98vw !important; }
}
@media (max-width:800px) {
  .bts-slides img { height: 42vw !important; }
  .slider-arrow { width: 38px; height: 38px; font-size: 2rem;}
  .slider-arrow-left { left: -18px; }
  .slider-arrow-right { right: -18px; }
}
</style>
