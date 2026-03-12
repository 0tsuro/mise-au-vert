import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.getElementById("navbar");

    const onScroll = () => {
        if (!navbar) return;

        if (window.scrollY > 60) {
            navbar.classList.add(
                "bg-[#F8F5F0]/90",
                "backdrop-blur-xl",
                "shadow-[0_1px_0_rgba(0,0,0,0.06)]",
            );
        } else {
            navbar.classList.remove(
                "bg-[#F8F5F0]/90",
                "backdrop-blur-xl",
                "shadow-[0_1px_0_rgba(0,0,0,0.06)]",
            );
        }
    };

    onScroll();
    window.addEventListener("scroll", onScroll);

    const reveals = document.querySelectorAll(".reveal");

    if (reveals.length) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12 },
        );

        reveals.forEach((el) => observer.observe(el));
    }
});
