import { gsap } from "gsap";
//gsap.registerPlugin(DrawSVGPlugin);

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", (e) => {

  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", (e) => {
    //custom GSAP code goes here
    // This tween will rotate an element with a class of .my-element
    if (document.body.classList.contains("page-template-page-templates")) {
      let herotl = gsap.timeline();
      //herotl.from("#draw-me", {duration:1, stagger: 0.1, drawSVG: 0});
      herotl.to("#section-hero-panel", {duration: 2, delay: 1, yPercent: -100});
      herotl.to("#main-symbol", {duration: 2, y: 100, opacity: 0}, "<1.5");
      herotl.from("#section-hero-title", {duration: 1.5, y: 200, opacity: 0}, "<-0.5");
      herotl.from(".button, .site-logo", {duration: 1, y: 200, opacity: 0, stagger: 0.15}, "<0.5");
      
    }
  
  }, false);
  
});