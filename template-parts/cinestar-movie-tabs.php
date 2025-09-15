<style>
.cinestar-movie-tabs {
  display: flex;
  justify-content: space-between;
  align-items: stretch;
  background: #232b47;
  margin: 0;
  padding: 0;
  border-radius: 0 0 0 0;
}
.cinestar-movie-tabs .tab-link {
  flex: 1 1 0;
  text-align: center;
  font-size: 1.7rem;
  font-weight: 900;
  padding: 20px 0 12px 0;
  color: #fff;
  cursor: pointer;
  border-bottom: 5px solid transparent;
  transition: color 0.2s, border-bottom 0.2s;
  background: none;
  letter-spacing: 1px;
  outline: none;
  border-radius: 0;
  user-select: none;
}
.cinestar-movie-tabs .tab-link.active {
  color: #ffe600;
  border-bottom: 5px solid #ffe600;
  background: #181f37;
}
.cinestar-movie-tabs .tab-link:not(.active):hover {
  color: #ffe600;
}
.tab-content {
  display: none;
  animation: fadeIn 0.25s;
}
.tab-content.active {
  display: block;
}
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
</style>

<ul class="cinestar-movie-tabs">
  <li class="tab-link active" data-tab="tab-dang-chieu">PHIM ĐANG CHIẾU</li>
  <li class="tab-link" data-tab="tab-sap-chieu">PHIM SẮP CHIẾU</li>
  <li class="tab-link" data-tab="tab-dac-biet">SUẤT CHIẾU ĐẶC BIỆT</li>
  <li class="tab-link" data-tab="tab-bang-gia">BẢNG GIÁ VÉ</li>
</ul>

<div id="tab-dang-chieu" class="tab-content active">
  <?php get_template_part('template-parts/cinestar-now-showing'); ?>
</div>
<div id="tab-sap-chieu" class="tab-content">
  <?php get_template_part('template-parts/cinestar-coming-soon'); ?>
</div>
<div id="tab-dac-biet" class="tab-content">
  <?php get_template_part('template-parts/cinestar-special-show'); ?>
</div>
<div id="tab-bang-gia" class="tab-content">
  <!-- Nội dung bảng giá vé nếu có -->
</div>

<script>
(function(){
  const tabLinks = document.querySelectorAll('.cinestar-movie-tabs .tab-link');
  const tabContents = document.querySelectorAll('.tab-content');

  tabLinks.forEach(function(tab){
    tab.addEventListener('click', function(e){
      e.preventDefault();
      // Remove active from all tabs
      tabLinks.forEach(t => t.classList.remove('active'));
      // Hide all tab contents
      tabContents.forEach(c => c.classList.remove('active'));
      // Add active to clicked tab
      tab.classList.add('active');
      // Show corresponding tab content
      const content = document.getElementById(tab.dataset.tab);
      if(content) content.classList.add('active');
    });
  });
  // Ensure only the first tab is active at start
  tabLinks[0].classList.add('active');
  tabContents[0].classList.add('active');
})();
</script>

