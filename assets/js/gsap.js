import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {
    if (document.body.classList.contains("page-template-page-home")) {
      //Hero Section
      let herotl = gsap.timeline()
      .to(".section-hero-mask", {duration: 2, delay: 1, clipPath: 'inset(0 0 100% 0)'})
      .from(".section-hero-scroll", {duration: 2, y: 50, opacity: 0}, "<")
      .from(".section-hero-title", {duration: 2, y: 50, opacity: 0}, "<0.5")
      .from(".button, #site-logo-wrapper", {duration: 1.5, y: 50, opacity: 0, stagger: 0.15}, "<0.5");

      // Home Intro Section
      let homeIntro = gsap.timeline({
        scrollTrigger: {
          trigger: '.section-intro',
          start: 'top 60%',
          end: '20% 60%',
          toggleActions: 'play none none none',
        },
        defaults: {
          duration: 1
        }
      })
      .from('.section-intro .section-title', { x: '-50px', opacity: 0 })
      .from('.section-intro .section-description', { x: '50px', opacity: 0 }, '<')
      .from('.section-intro .section-hero-symbol', { opacity: 0 }, '<');

      // Location Section
      let location = gsap.timeline({
        scrollTrigger: {
          trigger: '.section-location',
          start: '-50px 40%',
          end: '60% 60%',
          scrub: 1,
          //markers: true,
          toggleActions: 'play pause reverse reset',
        },
        defaults: {
          duration: 1
        },
      })
      .from('.section-location svg', { y: '-50px', opacity: 0 })
      .from('.section-location span', { opacity: 0 }, '<')
      .from('.section-location p', { y: '-50px', opacity: 0 });

      // Zimmer Section
      let zimmerATargets = gsap.utils.toArray([".zimmer-card .title", ".zimmer-card .subtitle", ".zimmer-card .description", ".zimmer-card .section-btn"]);
      let zimmerAtl = gsap.timeline({
        defaults: {
          duration: 1,
        },
        scrollTrigger: {
          trigger: '.zimmer-card',
          start: '-50px 40%',
          end: '60% 60%',
          //scrub: 1,
          //markers: true,
        }
      });
      zimmerAtl.from( zimmerATargets, {y: '50px', opacity: 0, stagger: 0.25});
      zimmerAtl.from( ".zimmer-card .image-wrapper", {clipPath: 'inset(0 0 0 100%)'}, '<');

      // Zimmer Rev Section
      let zimmerBTargets = gsap.utils.toArray([".zimmer-card--rev .title", ".zimmer-card--rev .subtitle", ".zimmer-card--rev .description", ".zimmer-card--rev .section-btn"]);
      let zimmerBtl = gsap.timeline({
        defaults: {
          duration: 1,
        },
        scrollTrigger: {
          trigger: '.zimmer-card--rev',
          start: '-50px 40%',
          end: '60% 60%',
          //scrub: 1,
          //markers: true,
        }
      });
      zimmerBtl.from( ".zimmer-card--rev .image-wrapper", {clipPath: 'inset(0 100% 0 0)'});
      zimmerBtl.from( zimmerBTargets, {y: '50px',  opacity: 0, stagger: 0.25}, '<');
      
      // Aktivitaten Section
      let aktivitatenTargets = gsap.utils.toArray([".section-activities .title", ".section-activities .description", ".section-activities .section-btn"]);
      gsap.from( aktivitatenTargets, {
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
      let aboutTargets = gsap.utils.toArray([".section-about .title", ".section-about .description", ".section-about .section-btn"]);
      gsap.from( aboutTargets, {
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
    } else {
      // Intro Section
      let intro = gsap.timeline({
        defaults: {
          duration: 1.2,
          autoAlpha: 0
        }
      })
      .from('.section-intro-title, .section-intro-small-title, .section-intro-description', { y: '50px', opacity: 0, stagger:0.25});
    }

    // Services Section
    let servicesTargets = gsap.utils.toArray([".section-services .title", ".section-services .description", ".section-services .list", ".section-services .section-btn"]);
    gsap.from( servicesTargets, {
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
    })
    .to('.main-header', {backgroundColor: 'var(--main-green)', minHeight: '100vh'})
    .to('.navigation-mobile', {y: '0%'}, '<')
    .to('.navigation-mobile', {opacity: 1}, '<0.25')
    .to('.main-header .menu-button .toggle .bar', {backgroundColor: 'var(--main-beige)'}, '<0.25')
    .to('.main-header .book-button', {backgroundColor: 'var(--main-beige)', color: 'var(--main-green)', opacity: 1}, '<0.25')
    .from('.navigation-mobile .nav-link', {x: '-50px', opacity: 0, stagger: 0.20}, '<0.25')
    .paused(true);

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



    if (document.body.classList.contains("page-template-page-services")) {
      // Breakfast Section
      let breakfast = gsap.timeline({
        scrollTrigger: {
          trigger: '.section-breakfast',
          start:"top 50%",
          end:"bottom top",
          //markers: true,
          toggleActions:"restart none none none"
        },
        defaults: {
          duration: 1.2,
          autoAlpha: 0
        },
      })
      .from('.section-breakfast-small-title, .section-breakfast-description', { x: '-50px', opacity: 0, stagger:0.25})
      .from('.section-breakfast-title, .breakfast-swiper', { x: '50px', opacity: 0, stagger:0.25},'<0.25');
      // Gym Section
      let gym = gsap.timeline({
        scrollTrigger: {
          trigger: '.section-gym',
          start:"top 50%",
          end:"bottom top",
          //markers: true,
          toggleActions:"restart none none none"
        },
        defaults: {
          duration: 1.2,
          autoAlpha: 0,
        },
      })
      .from( '.section-gym-small-title, .section-gym-description' ,{ x: '-50px', opacity: 0, stagger:0.2 })
      .from( '.section-gym-title, .gym-swiper' ,{ x: '50px', opacity: 0, stagger:0.25}, '<0.25');
    }
    if (document.body.classList.contains("post-type-archive-zimmer")) {

    }
    if (document.body.classList.contains("post-type-archive-aktivitaten")) {
      // Environment Section
      let envir = gsap.timeline({
        scrollTrigger: {
          trigger: '.section-environment',
          start:"top 50%",
          end:"bottom top",
          //markers: true,
          toggleActions:"restart none none none"
        },
        defaults: {
          duration: 1.2,
          autoAlpha: 0,
        },
      })
      .from( '.section-environment-small-title, .section-environment-description' ,{ x: '-50px', opacity: 0, stagger:0.2 })
      .from( '.section-environment-title, .section-environment-image' ,{ x: '50px', opacity: 0, stagger:0.25}, '<0.25');
      // Connection Section
      let connec = gsap.timeline({
        scrollTrigger: {
          trigger: '.section-connection',
          start:"top 50%",
          end:"bottom top",
          //markers: true,
          toggleActions:"restart none none none"
        },
        defaults: {
          duration: 1.2,
          autoAlpha: 0,
        },
      })
      .from( '.section-connection-small-title, .section-connection-description' ,{ x: '-50px', opacity: 0, stagger:0.2 })
      .from( '.section-connection-title, .section-connection-image' ,{ x: '50px', opacity: 0, stagger:0.25}, '<0.25');
    }
  }, false);
});