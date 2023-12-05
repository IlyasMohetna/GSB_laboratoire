// "use strict";
// (() => {
//   var navbar = document.querySelector(".app-header");
//   var navbar1 = document.querySelector(".app-sidebar");
//   var sticky = navbar.clientHeight;
//   var sticky1 = navbar1.clientHeight;
//   function stickyFn() {
//     console.log(window.scrollY >= sticky)
//     if (window.scrollY >= sticky) {
//       navbar.classList.add("sticky-pin")
//       navbar1.classList.add("sticky-pin")
//     } else {
//       navbar.classList.remove("sticky-pin");
//       navbar1.classList.remove("sticky-pin");
//     }
//   }
//   window.addEventListener('scroll', stickyFn);
//   window.addEventListener('DOMContentLoaded', stickyFn);


// })();


"use strict";
(() => {
  window.addEventListener('scroll', stickyFn);
  var navbar = document.getElementById("sidebar");
  var sticky = navbar.offsetTop;
  function stickyFn() {
    if (window.scrollY >= 75) {
      navbar.classList.add("sticky-pin")
    } else {
      navbar.classList.remove("sticky-pin");
    }
  }
  window.addEventListener('scroll', stickyFn);
  window.addEventListener('DOMContentLoaded', stickyFn);
})();
