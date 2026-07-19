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
