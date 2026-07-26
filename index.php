<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xám 3D</title>
    <link rel="icon" href="Image/icon3.png" type="image/png">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
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
                    <div id="viewer-container" style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;">
                        <img src="Image/cs.png" alt="Coming Soon" class="hero-image">
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
    
    <!-- Footer Section -->
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-top">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <img src="Image/logo2.png" alt="Xám 3D Logo" style="height: 30px; margin-right: 10px; border-radius: 6px;">
                        <span>Xám 3D</span>
                    </div>
                    <p>Xám 3D empowers teams to transform raw data into clear, compelling visuals — making insights easier to share, understand, and act on.</p>
                    <div class="social-icons">
                        <a href="#" aria-label="X (Twitter)"><svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></a>
                        <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                        <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a>
                        <a href="#" aria-label="GitHub"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></a>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="link-column">
                        <h4>Product</h4>
                        <a href="#">Features</a>
                        <a href="#">Pricing</a>
                        <a href="#">Integrations</a>
                        <a href="#">Changelog</a>
                    </div>
                    <div class="link-column">
                        <h4>Resources</h4>
                        <a href="#">Documentation</a>
                        <a href="#">Tutorials</a>
                        <a href="#">Blog</a>
                        <a href="#">Support</a>
                    </div>
                    <div class="link-column">
                        <h4>Company</h4>
                        <a href="#">About</a>
                        <a href="#">Careers</a>
                        <a href="#">Contact</a>
                        <a href="#">Partners</a>
                    </div>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <p>&copy; 2026 Xám 3D. All rights reserved.</p>
                <div class="bottom-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookies Settings</a>
                </div>
            </div>
        </div>
    </footer>

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
