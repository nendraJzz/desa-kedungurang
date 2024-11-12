window.addEventListener('scroll', function() {
  const navbar = document.getElementById('navbar');
  if (window.scrollY > 50) {
    navbar.classList.remove('bg-transparent');
    navbar.classList.add('bg-orange-500');
  } else {
    navbar.classList.remove('bg-orange-500');
    navbar.classList.add('bg-transparent');
  }
});