import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", (e) => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", (e) => {
    if (document.body.classList.contains("page-template-page-home")) {
      let herotl = gsap.timeline();
      herotl.to(".section-hero-mask", {duration: 2, delay: 1, clipPath: 'inset(0 0 100% 0)'});
      herotl.from(".section-hero-scroll", {duration: 2, y: 50, opacity: 0}, "<");
      herotl.from(".section-hero-title", {duration: 2, y: 50, opacity: 0}, "<0.5");
      herotl.from(".button, .site-logo", {duration: 1.5, y: 50, opacity: 0, stagger: 0.15}, "<0.5");
    }


    let headertl = gsap.timeline();
    headertl.to(".main-header", {
      scrollTrigger: {
        trigger: '.main-header',
        start: 'top top',
        end: 99999,
        scrub: true,
        //markers: true,
        toggleActions: "play none none reset",
        toggleClass: {className: 'main-header--scrolled', targets: '.main-header'},
      }
    });

  }, false);
});