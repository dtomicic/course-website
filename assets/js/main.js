//Nav function
var toggleIcon = document.getElementById('navbar__link-toggle');
var navLinks = document.getElementById('navbar__links');

toggleIcon.addEventListener('click', function() {
  navLinks.classList.toggle('nav-open');
});