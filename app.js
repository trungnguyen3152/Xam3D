document.addEventListener('mousemove', (e) => {
    // Tính toán tọa độ chuột theo % của màn hình
    const x = (e.clientX / window.innerWidth) * 100;
    const y = (e.clientY / window.innerHeight) * 100;
    
    // Cập nhật biến CSS --mouse-x và --mouse-y
    document.body.style.setProperty('--mouse-x', `${x}%`);
    document.body.style.setProperty('--mouse-y', `${y}%`);
});

// Xử lý menu trên thiết bị di động
const menuToggle = document.querySelector('.menu-toggle');
const topNav = document.querySelector('.top-nav');

if(menuToggle && topNav) {
    menuToggle.addEventListener('click', () => {
        topNav.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });
}

// Xử lý Popup đăng nhập
const loginBtns = document.querySelectorAll('.login-box, .mobile-login-btn');
const loginPopup = document.getElementById('loginPopup');
const closeLogin = document.getElementById('closeLogin');

if (loginPopup) {
    loginBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            loginPopup.classList.add('show');
        });
    });

    if (closeLogin) {
        closeLogin.addEventListener('click', () => {
            loginPopup.classList.remove('show');
        });
    }

    // Đóng popup khi bấm ra ngoài modal
    loginPopup.addEventListener('click', (e) => {
        if (e.target === loginPopup) {
            loginPopup.classList.remove('show');
        }
    });
}

// Chuyển đổi chế độ form
const toggleModeBtn = document.getElementById('toggleModeBtn');
const mainSubmitBtn = document.getElementById('mainSubmitBtn');
const modalTitle = document.getElementById('modalTitle');
const forgotPasswordBtn = document.getElementById('forgotPasswordBtn');

const groupUsername = document.getElementById('groupUsername');
const groupEmail = document.getElementById('groupEmail');
const groupPassword = document.getElementById('groupPassword');
const groupConfirmPassword = document.getElementById('groupConfirmPassword');
const forgotPasswordLink = document.getElementById('forgotPasswordLink');
const divider = document.getElementById('divider');

if(toggleModeBtn) {
    let currentMode = 'login'; // login, register, forgot
    
    const setMode = (mode) => {
        currentMode = mode;
        const authAction = document.getElementById('authAction');
        if (authAction) authAction.value = mode;
        
        if (mode === 'login') {
            modalTitle.textContent = "Đăng nhập";
            mainSubmitBtn.textContent = "Đăng nhập";
            toggleModeBtn.textContent = "Đăng ký";
            forgotPasswordLink.style.display = 'block';
            divider.style.display = 'flex';
            
            groupUsername.style.display = 'block';
            groupUsername.querySelector('input').setAttribute('required', 'true');
            
            groupPassword.style.display = 'block';
            groupPassword.querySelector('input').setAttribute('required', 'true');
            
            groupEmail.classList.remove('show');
            groupEmail.querySelector('input').removeAttribute('required');
            
            groupConfirmPassword.classList.remove('show');
            groupConfirmPassword.querySelector('input').removeAttribute('required');
        } else if (mode === 'register') {
            modalTitle.textContent = "Đăng ký tài khoản";
            mainSubmitBtn.textContent = "Tạo tài khoản";
            toggleModeBtn.textContent = "Quay lại đăng nhập";
            forgotPasswordLink.style.display = 'none';
            divider.style.display = 'flex';
            
            groupUsername.style.display = 'block';
            groupUsername.querySelector('input').setAttribute('required', 'true');
            
            groupPassword.style.display = 'block';
            groupPassword.querySelector('input').setAttribute('required', 'true');
            
            groupEmail.classList.add('show');
            groupEmail.querySelector('input').setAttribute('required', 'true');
            
            groupConfirmPassword.classList.add('show');
            groupConfirmPassword.querySelector('input').setAttribute('required', 'true');
        } else if (mode === 'forgot') {
            modalTitle.textContent = "Khôi phục mật khẩu";
            mainSubmitBtn.textContent = "Lấy lại mật khẩu";
            toggleModeBtn.textContent = "Quay lại đăng nhập";
            forgotPasswordLink.style.display = 'none';
            divider.style.display = 'flex';
            
            groupUsername.style.display = 'none';
            groupUsername.querySelector('input').removeAttribute('required');
            
            groupPassword.style.display = 'none';
            groupPassword.querySelector('input').removeAttribute('required');
            
            groupConfirmPassword.classList.remove('show');
            groupConfirmPassword.querySelector('input').removeAttribute('required');
            
            groupEmail.classList.add('show');
            groupEmail.querySelector('input').setAttribute('required', 'true');
        }
    };

    toggleModeBtn.addEventListener('click', () => {
        if(currentMode === 'login' || currentMode === 'forgot') {
            setMode('register');
        } else {
            setMode('login');
        }
    });
    
    if (forgotPasswordBtn) {
        forgotPasswordBtn.addEventListener('click', (e) => {
            e.preventDefault();
            setMode('forgot');
        });
    }
}

// Ẩn/hiển thị mật khẩu
const togglePasswordBtns = document.querySelectorAll('.toggle-password');
togglePasswordBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const targetId = btn.getAttribute('data-target');
        const input = document.getElementById(targetId);
        
        if (input.type === 'password') {
            input.type = 'text';
            btn.style.opacity = '1';
        } else {
            input.type = 'password';
            btn.style.opacity = '0.5';
        }
    });
});

// Auth Form Submission
const authForm = document.getElementById('authForm');
const authMessage = document.getElementById('authMessage');

if (authForm) {
    authForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        const formData = new FormData(authForm);
        
        fetch('auth.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            authMessage.style.display = 'block';
            authMessage.textContent = data.message;
            if (data.status === 'success') {
                authMessage.style.backgroundColor = '#d4edda';
                authMessage.style.color = '#155724';
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            } else {
                authMessage.style.backgroundColor = '#f8d7da';
                authMessage.style.color = '#721c24';
            }
        })
        .catch(err => {
            console.error('Error:', err);
        });
    });
}

// Logout Buttons
const logoutBtns = document.querySelectorAll('#mobileLogoutBtn, #desktopLogoutBtn');
logoutBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        const formData = new FormData();
        formData.append('action', 'logout');
        
        fetch('auth.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                window.location.reload();
            }
        });
    });
});
