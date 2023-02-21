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

    /* menu open/close */
    const header = document.querySelector('.main-header');
    const toggleBtn = document.querySelector('.menu-button');

    //let togglerTl = gsap.timeline();
    //togglerTl.from(header, {duration: 2, minHeight: '100vh'});

    toggleBtn.addEventListener( 'click', (e) => {
      toggleBtn.classList.toggle('main-header--open');
    });


  }, false);
});