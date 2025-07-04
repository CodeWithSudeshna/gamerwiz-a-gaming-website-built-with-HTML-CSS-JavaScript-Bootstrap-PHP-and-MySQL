
// Spinner
setTimeout(function () {
    var spinner = document.getElementById('spinner');
    if (spinner) {
        spinner.classList.remove('show');
    }
}, 1);


// Back to top button
window.addEventListener('scroll', function () {
  var backToTop = document.querySelector('.back-to-top');
  if (!backToTop) return;
  if (window.scrollY > 300) {
    backToTop.style.display = 'flex';
  } else {
    backToTop.style.display = 'none';
  }
});

document.querySelector('.back-to-top').addEventListener('click', function(e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

