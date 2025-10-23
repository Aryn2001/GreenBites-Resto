
// // slider code 
// document.addEventListener("DOMContentLoaded", function () {
//   let slideIndex = 0;
//   const slides = document.querySelectorAll(".hero-slide");
//   const dots = document.querySelectorAll(".hero-dot");
//   const prev = document.querySelector(".hero-prev");
//   const next = document.querySelector(".hero-next");

//   function showSlide(index) {
//     slides.forEach((slide, i) => {
//       slide.classList.remove("active-slide");
//       dots[i].classList.remove("active");
//     });
//     slides[index].classList.add("active-slide");
//     dots[index].classList.add("active");
//   }

//   function nextSlide() {
//     slideIndex = (slideIndex + 1) % slides.length;
//     showSlide(slideIndex);
//   }

//   function prevSlide() {
//     slideIndex = (slideIndex - 1 + slides.length) % slides.length;
//     showSlide(slideIndex);
//   }

//   next.addEventListener("click", nextSlide);
//   prev.addEventListener("click", prevSlide);

//   dots.forEach((dot, i) => {
//     dot.addEventListener("click", () => {
//       slideIndex = i;
//       showSlide(slideIndex);
//     });
//   });

//   showSlide(slideIndex);
//   setInterval(nextSlide, 5000);
// });


// end of slider code

// navbar

// JavaScript for Sticky Navbar Class Toggling
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.custom-navbar');
    
    // Get the height of the hero section (which is 100vh)
    const heroHeight = window.innerHeight; 

    // If the scroll position is greater than the hero section height (e.g., 80% of it)
    if (window.scrollY > heroHeight * 0.8) { 
        // Remove the transparent class, allowing the solid custom-navbar styles to take effect
        navbar.classList.remove('transparent-initial');
    } else {
        // Add the transparent class back when near the top
        navbar.classList.add('transparent-initial');
    }
});

function confirmDelete(event, form) {
    event.preventDefault(); // Stop form submission

    // Custom confirmation popup
    if (confirm("Are you sure you want to delete this review? This action cannot be undone.")) {
        form.submit(); // Submit the form if confirmed
    }
}

document.getElementById("reservationForm").addEventListener("submit", function (event) {
    let date = document.getElementById("reservation_date").value;
    let time = document.getElementById("reservation_time").value;
    let name = document.getElementById("customer_name").value;
    let contact = document.getElementById("contact_number").value;

    if (!date || !time || !name || !contact) {
        alert("Please fill out all required fields!");
        event.preventDefault();
    }
});

function initMap() {
    const greenBitesLocation = { lat: 29.9457, lng: 78.1642 }; // Haridwar coordinates (approx)
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: greenBitesLocation,
    });
    new google.maps.Marker({
        position: greenBitesLocation,
        map: map,
        title: "Green Bites",
    });
}

// Load map when page is ready (called via script tag with API key)
