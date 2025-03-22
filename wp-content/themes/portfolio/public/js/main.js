document.addEventListener("DOMContentLoaded", function () {
    const timeline = document.querySelector(".scholar ol");
    const items = document.querySelectorAll(".scholar ol li");

    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 0.5
    };

    let lastObserved = 0;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                if (index === 0) {
                    timeline.classList.add("animate");
                }

                setTimeout(() => {
                    entry.target.classList.add("line-visible");
                    setTimeout(() => {
                        entry.target.classList.add("visible");
                    }, 500);
                }, index * 400);
            }
        });
    }, observerOptions);

    items.forEach((item, index) => {
        observer.observe(item);
    });
});
