
document.addEventListener("DOMContentLoaded", function () {

    window.addEventListener('scroll', function () {
        var navbarbrand = document.getElementById('navbar-brand');
        var navbar = document.getElementById('navbar_top');
        var menuItems = document.querySelectorAll('.nav-link');
  
        if (window.scrollY > 200) {
            navbar.classList.add('fixed-top');
            document.body.style.paddingTop = navbar.offsetHeight + 'px';
            navbar.style.backgroundColor = '#000000';
            // Cambiar el color del texto a blanco
            navbarbrand.style.color = '#fff';
            // Cambiar el color del texto a blanco
            menuItems.forEach(function (item) {
                item.style.color = '#fff';
            });
        } else {
            navbar.classList.remove('fixed-top');
            document.body.style.paddingTop = '0';
            navbar.style.backgroundColor = 'rgb(255, 222, 249)';
                 // Cambiar el color del texto a negro
                 navbarbrand.style.color = 'rgba(0, 0, 0, 0.8)';
            // Restaurar el color del texto a negro
            menuItems.forEach(function (item) {
                item.style.color = 'rgba(0, 0, 0, 0.8)';
            });
        }
    });
  });