document.body.classList.add('js');

document.addEventListener("DOMContentLoaded", function () {
    const animatables = document.querySelectorAll(".animate");
    const timeline = document.querySelector(".scholar_container");
    const items = document.querySelectorAll(".scholar_item");

    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -20px 0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains("animate")) {
                    entry.target.classList.add("scroll-animation");
                }

                if (entry.target.tagName === "LI") {
                    if (index === 0) {
                        timeline.classList.add("line-animation");
                    }

                    setTimeout(() => {
                        entry.target.classList.add("line-visible");
                        setTimeout(() => {
                            entry.target.classList.add("visible");
                        }, 500);
                    }, index * 400);
                }
            }
        });
    }, observerOptions);

    animatables.forEach((animatable) => observer.observe(animatable));
    items.forEach((item) => observer.observe(item));
});
