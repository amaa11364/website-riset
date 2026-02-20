// Mobile Menu
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileMenu) {
        mobileMenu.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });
    }
    
    // Mobile dropdown
    if (window.innerWidth <= 768) {
        const dropdowns = document.querySelectorAll('.dropdown > .nav-link');
        
        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('click', function(e) {
                e.preventDefault();
                const parent = this.parentElement;
                parent.classList.toggle('active');
            });
        });
    }
    
    // Search form
    const searchForm = document.querySelector('.search-form');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('.search-input');
            if (input.value.trim()) {
                window.location.href = '/search.php?q=' + encodeURIComponent(input.value);
            }
        });
    }
});