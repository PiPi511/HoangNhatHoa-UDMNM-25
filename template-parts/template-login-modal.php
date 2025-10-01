<?php
/**
 * Template Name: Login Modal Custom
 * Description: Trang đăng nhập với form custom dạng modal cho theme tự viết.
 */
get_header();
?>

<style>
/* Modal styles */
#login-modal-bg {
    display: none;
    position: fixed; z-index: 9999; left:0; top:0; width:100vw; height:100vh;
    background: rgba(0,0,0,0.5);
}
#login-modal-box {
    background: #fff; max-width: 350px; margin: 100px auto; padding: 30px 24px;
    border-radius: 8px; position: relative; box-shadow: 0 2px 12px rgba(0,0,0,0.2);
    top: 15vh;
}
#login-modal-box label { display:block; margin-bottom: 4px; }
#login-modal-box input { width: 100%; margin-bottom: 12px; padding: 7px; }
#login-modal-close {
    position: absolute; right: 12px; top: 10px; font-size: 22px; color: #333; cursor: pointer;
}
#login-btn-header { cursor:pointer; color:#fff; display: inline-block; }
#login-btn-header .fa-user { margin-right: 5px;}
</style>

<!-- Giả lập header có icon đăng nhập -->
<div style="background:#111d2b; padding: 30px 0 10px 0; text-align:right;">
    <a href="#" id="login-btn-header">
        <i class="fa fa-user"></i> Đăng nhập
    </a>
</div>

<!-- Modal Đăng nhập -->
<div id="login-modal-bg">
    <div id="login-modal-box">
        <span id="login-modal-close">&times;</span>
        <h3>Đăng nhập</h3>
        <?php
        if ( is_user_logged_in() ) {
            echo '<p>Bạn đã đăng nhập. <a href="' . wp_logout_url( home_url() ) . '">Đăng xuất</a></p>';
        } else {
            if ( isset($_POST['login_submit']) ) {
                $creds = array();
                $creds['user_login'] = sanitize_user($_POST['username']);
                $creds['user_password'] = $_POST['password'];
                $creds['remember'] = true;
                $user = wp_signon( $creds, false );

                if ( is_wp_error($user) ) {
                    echo '<p style="color:red;">' . esc_html($user->get_error_message()) . '</p>';
                } else {
                    // Chuyển hướng về trang chủ
                    echo '<script>window.location="' . esc_url(home_url()) . '"</script>';
                    exit;
                }
            }
            ?>
            <form method="post" autocomplete="off">
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" id="username" required>
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" required>
                <button type="submit" name="login_submit">Đăng nhập</button>
            </form>
            <p><a href="<?php echo esc_url(wp_lostpassword_url()); ?>">Quên mật khẩu?</a></p>
        <?php } ?>
    </div>
</div>

<script>
// Hiện modal khi nhấn icon
document.getElementById('login-btn-header').onclick = function(e) {
    e.preventDefault();
    document.getElementById('login-modal-bg').style.display = 'block';
};
// Ẩn modal khi nhấn dấu X
document.getElementById('login-modal-close').onclick = function() {
    document.getElementById('login-modal-bg').style.display = 'none';
};
// Ẩn modal khi click ngoài box
window.onclick = function(event) {
    var modalBg = document.getElementById('login-modal-bg');
    if (event.target == modalBg) {
        modalBg.style.display = "none";
    }
};
</script>

<?php get_footer(); ?>