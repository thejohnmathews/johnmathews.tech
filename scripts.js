function togglePost(headerElement) {
    const postContent = headerElement.nextElementSibling;

    if (postContent.style.display === "none" || postContent.style.display === "") {
        postContent.style.display = "block";
    } else {
        postContent.style.display = "none";
    }
}
