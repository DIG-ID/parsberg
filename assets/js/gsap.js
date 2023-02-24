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

      // Intro Section
      let introtl = gsap.timeline({ defaults: { duration: 1 } });
      introtl.from('.section-intro .section-title', { x: '-50px', opacity: 0 });
      introtl.from('.section-intro .section-description', { x: '50px', opacity: 0 }, '<');
      introtl.from('.section-intro .section-hero-symbol', { opacity: 0 }, '<');
      let introSt = ScrollTrigger.create({
        trigger: '.section-intro',
        start: 'top 60%',
        end: '20% 60%',
        scrub: 1,
        //markers: true,
        toggleActions: 'play pause reverse reset',
        animation: introtl
      });

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

    // Zimmer Section
    let zimmerTargets = gsap.utils.toArray([".zimmer-card .details .title", ".zimmer-card .details .subtitle", '.zimmer-card .details .description']);

    let zimmerA = gsap.from( zimmerTargets, {
      duration: 1,
      y: '-50px',
      opacity: 0,
      stagger: 0.15,
      scrollTrigger: {
        trigger: '.zimmer-card',
        start: '-50px 40%',
        end: '60% 60%',
        scrub: 1,
        markers: true,
        toggleActions: 'play pause reverse reset',
      }
    });


    /* menu open/close */
    const toggleBtn = document.querySelector('.menu-button');

    let togglerTl = gsap.timeline({
      defaults: {
        duration: 0.5
      },
      onReverseComplete: () => {
        gsap.set( ".main-header", {
          clearProps: "backgroundColor"
        } );
      }
    });
    togglerTl.to('.main-header', { backgroundColor: 'var(--main-green)', minHeight: '100vh'});
    togglerTl.to('.navigation-mobile', { y: '0%'}, '<');
    togglerTl.to('.navigation-mobile', { opacity: 1}, '<0.25');
    togglerTl.from('.navigation-mobile .nav-link', { x: '-50px', opacity: 0, stagger: 0.25 }, '<0.25');
    togglerTl.paused(true);

    toggleBtn.addEventListener( 'click', (e) => {
      const bookButtons = document.querySelectorAll('.book-button'); // Select all buttons with the class "book-button"
      bookButtons.forEach(button => {
        button.classList.toggle('bg-main-green');
        button.classList.toggle('text-main-beige');
        button.classList.toggle('bg-main-beige');
        button.classList.toggle('text-main-green');
      });
      document.body.classList.toggle('menu-open');
      if (togglerTl.paused()) {
        togglerTl.play();
      } else if (togglerTl.reversed()) {
        togglerTl.restart();
      } else {
        togglerTl.reverse();
      }
    });





  }, false);
});