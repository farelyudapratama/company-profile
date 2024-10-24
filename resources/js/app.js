import './bootstrap';
import { gsap } from "gsap";

document.addEventListener('DOMContentLoaded', () => {
    gsap.from(".gsap-animate", { opacity: 0, y: -50, duration: 1 });
});