document.addEventListener("DOMContentLoaded", () => {
    checkHeaderId();
    var formBtns = document.querySelectorAll(".nav-item");
    formBtns.forEach(btn => {
        var scrollUrl = btn.querySelector("a").getAttribute("href");
        if (scrollUrl && scrollUrl.includes("?scrollto=")) {
            btn.addEventListener("click", function() {
                var url = new URL(scrollUrl);
                var scrolltoValue = url.searchParams.get("scrollto");

                if (scrolltoValue) {
                    // Store only the 'scrollto' value in local storage
                    localStorage.setItem("scrollUrl", scrolltoValue);
                }
            });
        }
    });
});

// window.addEventListener("load", checkHeaderId() );
window.addEventListener("load", checkHeaderId);

function checkHeaderId() {
    var scrollUrl = localStorage.getItem("scrollUrl");
    if (scrollUrl != null) {
        let headerHeight = document.querySelector("#header").offsetHeight;
        let targetElement = document.getElementById(scrollUrl);
        if (targetElement) {
            setTimeout(() => {
                let scrollVal = targetElement.offsetTop;

                jQuery('html, body').animate({
                    scrollTop: scrollVal - headerHeight + 90,
                }, 2000);
                console.log("Scroll Value:", scrollVal);
                console.log("Header Height:", headerHeight);
            }, 500); // 2-second delay
        }
        // Remove the stored value after scrolling
        localStorage.removeItem("scrollUrl");
    }
}
