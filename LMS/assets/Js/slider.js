let currentIndex = 0;
const slides = document.querySelectorAll(".slide");

function showNextSlide() {
    slides[currentIndex].style.opacity = 0; // Hide current slide
    currentIndex = (currentIndex + 1) % slides.length; // Update index
    slides[currentIndex].style.opacity = 1; // Show next slide
}

setInterval(showNextSlide, 3000); // Change slide every 3 seconds

// Dropdown Functionality for Services
function toggleDropdown(serviceId) {
    const description = document.getElementById(serviceId);
    
    // Toggle the display property of the service description
    if (description.style.display === 'block') {
        description.style.display = 'none';
    } else {
        // Hide all other descriptions before showing the clicked one
        const allDescriptions = document.querySelectorAll('.service-description');
        allDescriptions.forEach(desc => desc.style.display = 'none');
        
        description.style.display = 'block';
    }
}