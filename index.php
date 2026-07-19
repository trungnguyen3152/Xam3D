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
            <a href="#" class="mobile-login-btn">Đăng nhập</a>
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
    <!-- Login Button (Bottom Left) -->
    <a href="#" class="login-box">Đăng nhập</a>
    
    <script type="module" src="app.js"></script>
</body>
</html>
