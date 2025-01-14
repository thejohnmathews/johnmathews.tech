// imgurembed.js: code to keep dynamically loading imgur images
// created 1/14/25 by John Mathews -->

document.addEventListener("DOMContentLoaded", function () {
    function initializeImgurEmbeds() {
        const blockquotes = document.querySelectorAll(".imgur-embed-pub");
        blockquotes.forEach(blockquote => {
            if (!blockquote.getAttribute("data-initialized")) {
                blockquote.setAttribute("data-initialized", "true");
                window.imgurEmbed.createIframe();
            }
        });
    }

    if (window.imgurEmbed && typeof window.imgurEmbed.createIframe === "function")initializeImgurEmbeds();
    else{
        
        let retryCount = 0;
        const retryInterval = setInterval(() => {

            if (window.imgurEmbed && typeof window.imgurEmbed.createIframe === "function"){
                initializeImgurEmbeds();
                clearInterval(retryInterval);
            }else if (retryCount > 10) clearInterval(retryInterval); 
            retryCount++;
        }, 500); 
    }
});