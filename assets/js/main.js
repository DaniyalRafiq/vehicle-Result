// client Slick Slider

// Get Quote Form validation

(function () {
  'use strict';
  var forms = document.querySelectorAll('.needs-validation');
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add('was-validated');
    }, false);
  });
})();


$(document).ready(function () {
  $('.navdesktop').hover(
    function () {
      $(this).addClass('show');
      $(this).find('.dropdown-navdesktop').first().addClass('show');
    },
    function () {
      $(this).removeClass('show');
      $(this).find('.dropdown-navdesktop').first().removeClass('show');
    }
  );
});

// Sticky header

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
})

// end Sticky header


const swiper = new Swiper(".result-swiper", {
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  grabCursor: true, // enables dragging with mouse
});



