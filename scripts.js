// scripts.js: add dynamic functionality to the webpage, but this is still WIP
// created 11/20/24 by John Mathews

function changeSlide(button, direction) {
    const slideshow = button.closest(".slideshow-container");
    const slides = slideshow.querySelectorAll(".slide");
    let currentIndex = Array.from(slides).findIndex(slide => slide.classList.contains("active"));

    // Remove active class from the current slide
    slides[currentIndex].classList.remove("active");

    // Calculate the new index
    currentIndex += direction;
    if (currentIndex < 0) currentIndex = slides.length - 1; // Wrap to the last slide
    if (currentIndex >= slides.length) currentIndex = 0;   // Wrap to the first slide

    // Add active class to the new slide
    slides[currentIndex].classList.add("active");
}