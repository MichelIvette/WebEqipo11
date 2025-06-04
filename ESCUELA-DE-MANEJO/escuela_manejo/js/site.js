const sidebar = document.getElementById('sidebar');
const menuToggle = document.getElementById('menuToggle');
const mainContent = document.getElementById('mainContent');

menuToggle.addEventListener('click', function () {
    const isActive = sidebar.classList.toggle('active');
    mainContent.classList.toggle('sidebar-open', isActive);
    document.body.classList.toggle('no-scroll', isActive);
});

document.addEventListener('click', function (event) {
    if (!sidebar.contains(event.target) && !menuToggle.contains(event.target)) {
        sidebar.classList.remove('active');
        mainContent.classList.remove('sidebar-open');
        document.body.classList.remove('no-scroll');
    }
});

