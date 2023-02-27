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
        //scrub: 1,
        //markers: true,
        //toggleActions: 'play pause reverse reset',
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

      // Aktivitaten Section
      let aktivitatenTargets = gsap.utils.toArray([".section-activities .title", ".section-activities .description", ".section-activities .button"]);
      let aktivitaten = gsap.from( aktivitatenTargets, {
        duration: 1,
        y: '50px',
        opacity: 0,
        stagger: 0.25,
        scrollTrigger: {
          trigger: '.section-activities',
          start: '-50px 40%',
          end: '60% 60%',
          //scrub: 1,
          //markers: true,
        }
      });
      // About Section
      let aboutTargets = gsap.utils.toArray([".section-about .title", ".section-about .description", ".section-about .button"]);
      let about = gsap.from( aboutTargets, {
        duration: 1,
        y: '50px',
        opacity: 0,
        stagger: 0.25,
        scrollTrigger: {
          trigger: '.section-about',
          start: '-50px 40%',
          end: '60% 60%',
          //scrub: 1,
          //markers: true,
        }
      });
    }

    // Zimmer Section
    let zimmerTargetsA = gsap.utils.toArray([".zimmer-card .title", ".zimmer-card .subtitle", ".zimmer-card .description", ".zimmer-card .button"]);
    let zimmerA = gsap.from( zimmerTargetsA, {
      duration: 1,
      y: '50px',
      opacity: 0,
      stagger: 0.25,
      scrollTrigger: {
        trigger: '.zimmer-card',
        start: '-50px 40%',
        end: '60% 60%',
        //scrub: 1,
        //markers: true,
      }
    });
    let zimmerAimg = gsap.from( ".zimmer-card .image-wrapper", {
      duration: 1,
      clipPath: 'inset(0 0 0 100%)',
      stagger: 0.25,
      scrollTrigger: {
        trigger: '.zimmer-card .image-wrapper',
        start: '-50px 40%',
        end: '60% 60%',
        //scrub: 1,
        //markers: true,
      }
    });

    // Zimmer Section
    let zimmerTargetsB = gsap.utils.toArray([".zimmer-card--rev .title", ".zimmer-card--rev .subtitle", ".zimmer-card--rev .description", ".zimmer-card--rev .button"]);
    let zimmerB = gsap.from( zimmerTargetsB, {
      duration: 1,
      y: '50px',
      opacity: 0,
      stagger: 0.25,
      scrollTrigger: {
        trigger: '.zimmer-card--rev',
        start: '-50px 40%',
        end: '60% 60%',
        //scrub: 1,
        //markers: true,
      }
    });
    let zimmerBimg = gsap.from( ".zimmer-card--rev .image-wrapper", {
      duration: 1,
      clipPath: 'inset(0 100% 0 0)',
      stagger: 0.25,
      scrollTrigger: {
        trigger: '.zimmer-card--rev .image-wrapper',
        start: '-50px 40%',
        end: '60% 60%',
        //scrub: 1,
        //markers: true,
      }
    });

    // Services Section
    let servicesTargets = gsap.utils.toArray([".section-services .title", ".section-services .description", ".section-services .list", ".section-services .button"]);
    let services = gsap.from( servicesTargets, {
      duration: 1,
      y: '50px',
      opacity: 0,
      stagger: 0.25,
      scrollTrigger: {
        trigger: '.section-services',
        start: '-50px 40%',
        end: '60% 60%',
        //scrub: 1,
        //markers: true,
      }
    });


    /* menu open/close */
    const toggleBtn = document.querySelector('.menu-button');
    let togglerTl = gsap.timeline({
      defaults: {
        duration: 0.4
      },
      onReverseComplete: () => {
        gsap.set( ".main-header", {
          clearProps: "backgroundColor"
        } );
        gsap.set( ".menu-button .toggle .bar", {
          clearProps: "backgroundColor"
        } );
        gsap.set( ".main-header .book-button", {
          clearProps: "backgroundColor,color"
        } );
      }
    });
    togglerTl.to('.main-header', {backgroundColor: 'var(--main-green)', minHeight: '100vh'});
    togglerTl.to('.navigation-mobile', {y: '0%'}, '<');
    togglerTl.to('.navigation-mobile', {opacity: 1}, '<0.25');
    togglerTl.to('.main-header .menu-button .toggle .bar', {backgroundColor: 'var(--main-beige)'}, '<0.25');
    togglerTl.to('.main-header .book-button', {backgroundColor: 'var(--main-beige)', color: 'var(--main-green)', opacity: 1}, '<0.25');
    togglerTl.from('.navigation-mobile .nav-link', {x: '-50px', opacity: 0, stagger: 0.20}, '<0.25');
    togglerTl.paused(true);

    toggleBtn.addEventListener( 'click', (e) => {
      document.body.classList.toggle('menu-open');
      if (togglerTl.paused()) {
        togglerTl.play();
      } else if (togglerTl.reversed()) {
        togglerTl.restart().timeScale(1);
      } else {
        togglerTl.timeScale(6).reverse();
      }
    });





  }, false);
});