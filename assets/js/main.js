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


const orderModal = document.getElementById('orderModal');
const planSelect = document.getElementById('planSelect');
const modalLabel = document.getElementById('orderModalLabel');

orderModal.addEventListener('show.bs.modal', event => {
  const trigger = event.relatedTarget;
  const plan = trigger.getAttribute('data-plan');
  const price = trigger.getAttribute('data-price');

  // 1. Update modal heading
  modalLabel.innerHTML = `${plan} <br> ${price}`;

  // 2. Clear all options in the select
  planSelect.innerHTML = '';

  // 3. Add only one option (the selected one)
  const option = document.createElement('option');
  option.value = plan;
  option.textContent = `${plan} – ${price}`;
  option.selected = true;
  planSelect.appendChild(option);
});

// Optional: Reset modal on close
orderModal.addEventListener('hidden.bs.modal', () => {
  modalLabel.innerHTML = 'Place Your Order';

  // Restore all package options
  planSelect.innerHTML = `
    <option selected disabled value="">Choose a package</option>
    <option value="Instant Elite">Instant Elite – $50.99</option>
    <option value="Premium">Premium – $65.99</option>
    <option value="Basic Insight">Basic Insight – $45.99</option>
    `;
});




document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("orderForm");

  form.addEventListener("submit", function (e) {
    let isValid = true;

    // Reset all
    form.querySelectorAll(".form-control, .form-check-input").forEach(el => {
      el.classList.remove("is-invalid");
    });

    const fullName = form.full_name;
    const email = form.email;
    const phone = form.phone;
    const vehicle = form.vehicle_name;
    const vin = form.vin_number;
    const pkg = form.package;

    if (fullName.value.trim() === "") {
      showError(fullName, "Full name is required.");
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
      showError(email, "Please enter a valid email address.");
    }

    if (!/^[\d\s\-]{7,20}$/.test(phone.value)) {
      showError(phone, "Please enter a valid phone number.");
    }

    if (vehicle.value.trim() === "") {
      showError(vehicle, "Vehicle name is required.");
    }

    if (vin.value.trim().length < 5) {
      showError(vin, "VIN number must be at least 5 characters.");
    }

    if (!pkg.value) {
      showError(pkg, "Please select a package.");
    }

    // Checkboxes
    ['term1', 'term2', 'term3'].forEach(id => {
      const checkbox = document.getElementById(id);
      if (!checkbox.checked) {
        checkbox.classList.add("is-invalid");
        isValid = false;
      }
    });

    if (!isValid) e.preventDefault();

    function showError(input, message) {
      const feedback = input.nextElementSibling;
      if (feedback && feedback.classList.contains("invalid-feedback")) {
        feedback.textContent = message;
      }
      input.classList.add("is-invalid");
      isValid = false;
    }
  });
});