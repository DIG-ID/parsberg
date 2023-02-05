import { gsap } from "gsap";

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", (e) => {

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", (e) => {
    //custom GSAP code goes here
    // This tween will rotate an element with a class of .my-element
    if (document.body.classList.contains("page-template-page-templates")) {
      let herotl = gsap.timeline();
      herotl.to("#main-symbol", {duration: 1, delay: 0.6, ease: "backInOut", y: -100, opacity: 0 });
      herotl.to("#section-hero-panel", {yPercent: -120, opacity: 0, duration: 1.2, ease: "backInOut"});
      herotl.from("#main-header", {y: 200, opacity: 0, duration: 1});
      herotl.from("#section-hero-title", {y: 100, opacity: 0, duration: 1});
    } 
  
  }, false);
  
});