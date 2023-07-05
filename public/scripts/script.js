const menuToggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('nav ul');
const menuLinks = document.querySelectorAll('.menu li a');

menuToggle.addEventListener('click', function() {
  this.classList.toggle('activated');
  menu.classList.toggle('show');
});

menuLinks.forEach(function(menuLink) {
  menuLink.addEventListener('click', function() {
    menu.classList.remove('show');
    menuToggle.classList.remove('activated');
  });
});