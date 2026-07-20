<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xám 3D</title>
    <link rel="icon" href="Image/icon3.png" type="image/png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="site-header">
        <div class="top-logo">
            <img src="Image/logo2.png" alt="Logo">
        </div>
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav class="top-nav">
            <a href="#" class="active">Trang chủ</a>
            <a href="#">Sản Phẩm</a>
            <a href="#">Thư viện</a>
            <a href="#">Liên hệ</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="#" class="mobile-login-btn" id="mobileLogoutBtn">Đăng xuất</a>
            <?php else: ?>
                <a href="#" class="mobile-login-btn">Đăng nhập</a>
            <?php endif; ?>
        </nav>
    </header>

    <div class="app-container">
        <!-- Main Content Area -->
        <main class="main-content">
            <section class="hero-section">
                <div class="hero-text">
                    <h1>3D Print and more.</h1>
                    <p>3D Print and more.</p>
                    <a href="#" class="btn-primary">Khám phá ngay</a>
                </div>
                <div class="hero-visual">
                    <div id="viewer-container">
                        <!-- 3D Viewer Canvas will be injected here -->
                        <div class="placeholder-text"></div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- Features Section -->
    <div class="features-wrapper">
        <section class="features-section">
            <div class="feature-card">
                <div class="feature-icon">💡</div>
                <h3>Facebook</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🥕</div>
                <h3>Zalo</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">♾️</div>
                <h3>Tiktok</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
        </section>
    </div>
    <!-- Login Button (Bottom Right) -->
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="#" class="login-box" id="desktopLogoutBtn">Chào, <?php echo htmlspecialchars($_SESSION['username']); ?> (Đăng xuất)</a>
    <?php else: ?>
        <a href="#" class="login-box">Đăng nhập</a>
    <?php endif; ?>
    
    <!-- Login Popup Modal -->
    <div class="login-overlay" id="loginPopup">
        <div class="login-modal">
            <span class="close-btn" id="closeLogin">&times;</span>
            <h2 id="modalTitle">Đăng nhập</h2>
            <div id="authMessage" style="display: none; padding: 10px; margin-bottom: 15px; border-radius: 4px; font-size: 0.9rem; text-align: center;"></div>
            <form id="authForm" action="#" method="POST">
                <input type="hidden" id="authAction" name="action" value="login">
                <div class="input-group" id="groupUsername">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group register-field" id="groupEmail">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-group" id="groupPassword">
                    <label for="password">Mật khẩu</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" required>
                        <span class="toggle-password" data-target="password">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </span>
                    </div>
                </div>
                <div class="input-group register-field" id="groupConfirmPassword">
                    <label for="confirm_password">Xác nhận mật khẩu</label>
                    <div class="password-wrapper">
                        <input type="password" id="confirm_password" name="confirm_password">
                        <span class="toggle-password" data-target="confirm_password">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn-submit" id="mainSubmitBtn">Đăng nhập</button>
                
                <div class="forgot-password-link" id="forgotPasswordLink">
                    <a href="#" id="forgotPasswordBtn">Quên mật khẩu?</a>
                </div>
                
                <div class="divider" id="divider">
                    <span>Hoặc</span>
                </div>
                
                <button type="button" class="btn-register" id="toggleModeBtn">Đăng ký</button>
            </form>
        </div>
    </div>
    
    <script type="module" src="app.js"></script>
</body>
</html>
