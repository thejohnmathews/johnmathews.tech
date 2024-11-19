// stcripts.js: add dynamic functionality to the webpage, but this is still WIP
// created 11/20/24 by John Mathews

document.addEventListener("DOMContentLoaded", () => {
    const slideshows = document.querySelectorAll(".post-slideshow");

    slideshows.forEach(slideshow => {
        let images = slideshow.querySelectorAll("img");
        let index = 0;

        if (images.length > 1) {
            setInterval(() => {
                images[index].style.display = "none"; // Hide current image
                index = (index + 1) % images.length; // Move to next image
                images[index].style.display = "block"; // Show next image
            }, 5000); // Change every 5 seconds
        }
    });
});
