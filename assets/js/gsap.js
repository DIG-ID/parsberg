import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {
    if (document.body.classList.contains("page-template-page-home")) {
      //Hero Section
      let herotl = gsap.timeline();
      herotl.to(".section-hero-mask", {duration: 2, delay: 1, clipPath: 'inset(0 0 100% 0)'});
      herotl.from(".section-hero-scroll", {duration: 2, y: 50, opacity: 0}, "<");
      herotl.from(".section-hero-title", {duration: 2, y: 50, opacity: 0}, "<0.5");
      herotl.from(".button, #site-logo-wrapper", {duration: 1.5, y: 50, opacity: 0, stagger: 0.15}, "<0.5");

      // Location Section
      let locationtl = gsap.timeline({ defaults: { duration: 1 } });

      locationtl.from('.section-location svg', { y: '-50px', opacity: 0 });
      locationtl.from('.section-location span', { opacity: 0 }, '<');
      locationtl.from('.section-location p', { y: '-50px', opacity: 0 });

      let locationSt = ScrollTrigger.create({
        trigger: '.section-location',
        start: '-50px 40%',
        end: '60% 60%',
        scrub: 1,
        //markers: true,
        toggleActions: 'play pause reverse reset',
        animation: locationtl
      });
    }

    /* menu open/close */
    const toggleBtn = document.querySelector('.menu-button');

    let togglerTl = gsap.timeline();
    //togglerTl.to('.main-header', {duration: 0.5, backgroundColor: 'var(--main-green)', minHeight: '100vh'});
    //togglerTl.to('.navigation-mobile', {duration: 0.5, y: '0%', opacity: 1});
    togglerTl.from('.navigation-mobile .nav-link', {duration: 0.6, delay: 0.5, x: '-100px', opacity: 0, stagger: 0.15 });
    togglerTl.paused(true);

    toggleBtn.addEventListener( 'click', (e) => {
      //toggleBtn.classList.toggle('main-header--open');
      document.body.classList.toggle('menu-open');

      /*if (document.body.classList.contains("menu-open")) {
        gsap.from('.navigation-mobile .nav-link', {duration: 1, delay: 0.5, y: '-200px', opacity: 0, stagger: 0.25 });
      } else {
        gsap.to('.navigation-mobile .nav-link', {duration: 0.4, x: '50px', opacity: 0, stagger: 0.15 });
      }*/

      if (togglerTl.paused()) {
        togglerTl.play();
      } else if (togglerTl.reversed()) {
        togglerTl.play();
        togglerTl.timeScale(1);
      } else {
        togglerTl.reverse();
      }
    });




  }, false);
});