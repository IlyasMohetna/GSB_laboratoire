(function () {
  "use strict";

  /* page loader */
  function hideLoader() {
    const loader = document.getElementById("loader");
    loader.classList.add("!hidden");
  }
  window.addEventListener("load", hideLoader);
  /* page loader */

  /* footer year */
  document.getElementById("year").innerHTML = new Date().getFullYear();
  /* footer year */
  /*Start Sidemenu Scroll */
  var myElement = document.getElementById("sidebar-scroll");
  new SimpleBar(myElement, { autoHide: true });
  /*End Sidemenu Scroll */

  /*Start Sidemenu Scroll */
  var myElement = document.getElementById("header-notification-scroll");
  new SimpleBar(myElement, { autoHide: true });
  /*End Sidemenu Scroll */

  /* header dropdowns scroll */
  var myHeaderShortcut = document.getElementById("header-shortcut-scroll");
  new SimpleBar(myHeaderShortcut, { autoHide: true });
  /*End header dropdowns scroll */
  /* Choices JS */
  document.addEventListener("DOMContentLoaded", function () {
    var genericExamples = document.querySelectorAll("[data-trigger]");
    for (let i = 0; i < genericExamples.length; ++i) {
      var element = genericExamples[i];
      new Choices(element, {
        allowHTML: true,
        placeholderValue: "This is a placeholder set in the config",
        searchPlaceholderValue: "Search",
      });
    }
  });
  /* Choices JS */

  if (document.querySelector("#hs-overlay-switcher")) {
    /*Start Switcher Scroll */
    // var myElement1 = document.getElementById("switcher-body");
    // new SimpleBar(myElement1, { autoHide: true });
    /*End Switcher Scroll */

    //switcher color pickers
    const pickrContainerPrimary = document.querySelector(
      ".pickr-container-primary"
    );
    const themeContainerPrimary = document.querySelector(
      ".theme-container-primary"
    );
    const pickrContainerBackground = document.querySelector(
      ".pickr-container-background"
    );
    const themeContainerBackground = document.querySelector(
      ".theme-container-background"
    );

    /* for theme primary */
    const nanoThemes = [
      [
        "nano",
        {
          defaultRepresentation: "RGB",
          components: {
            preview: true,
            opacity: false,
            hue: true,

            interaction: {
              hex: false,
              rgba: true,
              hsva: false,
              input: true,
              clear: false,
              save: false,
            },
          },
        },
      ],
    ];
    const nanoButtons = [];
    let nanoPickr = null;
    for (const [theme, config] of nanoThemes) {
      const button = document.createElement("button");
      button.innerHTML = theme;
      nanoButtons.push(button);

      button.addEventListener("click", () => {
        const el = document.createElement("p");
        pickrContainerPrimary.appendChild(el);

        /* Delete previous instance */
        if (nanoPickr) {
          nanoPickr.destroyAndRemove();
        }

        /* Apply active class */
        for (const btn of nanoButtons) {
          btn.classList[btn === button ? "add" : "remove"]("active");
        }

        /* Create fresh instance */
        nanoPickr = new Pickr(
          Object.assign(
            {
              el,
              theme,
              default: "#845adf",
            },
            config
          )
        );

        /* Set events */
        nanoPickr.on("changestop", (source, instance) => {
          let color = instance.getColor().toRGBA();
          let html = document.querySelector("html");
          html.style.setProperty(
            "--primary",
            `${Math.floor(color[0])} ${Math.floor(color[1])} ${Math.floor(
              color[2]
            )}`
          );
          html.style.setProperty(
            "--color-primary-rgb",
            `${Math.floor(color[0])} ,${Math.floor(color[1])}, ${Math.floor(
              color[2]
            )}`
          );
          /* theme color picker */
          localStorage.setItem(
            "primaryRGB",
            `${Math.floor(color[0])}, ${Math.floor(color[1])}, ${Math.floor(
              color[2]
            )}`
          );
          localStorage.setItem(
            "primaryRGB1",
            `${Math.floor(color[0])} ${Math.floor(color[1])} ${Math.floor(
              color[2]
            )}`
          );
          updateColors();
        });
      });

      themeContainerPrimary.appendChild(button);
    }
    nanoButtons[0].click();
    /* for theme primary */

    /* for theme background */
    const nanoThemes1 = [
      [
        "nano",
        {
          defaultRepresentation: "RGB",
          components: {
            preview: true,
            opacity: false,
            hue: true,

            interaction: {
              hex: false,
              rgba: true,
              hsva: false,
              input: true,
              clear: false,
              save: false,
            },
          },
        },
      ],
    ];
    const nanoButtons1 = [];
    let nanoPickr1 = null;
    for (const [theme, config] of nanoThemes) {
      const button = document.createElement("button");
      button.innerHTML = theme;
      nanoButtons1.push(button);

      button.addEventListener("click", () => {
        const el = document.createElement("p");
        pickrContainerBackground.appendChild(el);

        /* Delete previous instance */
        if (nanoPickr1) {
          nanoPickr1.destroyAndRemove();
        }

        /* Apply active class */
        for (const btn of nanoButtons) {
          btn.classList[btn === button ? "add" : "remove"]("active");
        }

        /* Create fresh instance */
        nanoPickr1 = new Pickr(
          Object.assign(
            {
              el,
              theme,
              default: "#845adf",
            },
            config
          )
        );

        /* Set events */
        nanoPickr1.on("changestop", (source, instance) => {
          let color = instance.getColor().toRGBA();
          let html = document.querySelector("html");
          html.style.setProperty(
            "--body-bg",
            `${Math.floor(color[0] + 14)}
             ${Math.floor(color[1] + 14)}
              ${Math.floor(color[2] + 14)}`
          );
          html.style.setProperty(
            "--dark-bg",
            `
            ${Math.floor(color[0])}
            ${Math.floor(color[1])}
            ${Math.floor(color[2])}
            `
          );
          html.style.setProperty(
            "--light",
            `
            ${Math.floor(color[0] + 5)}
            ${Math.floor(color[1] + 5)}
            ${Math.floor(color[2] + 5)}
            `
          );
          localStorage.removeItem("bgtheme");
          updateColors();
          html.classList.add("dark");
          html.classList.remove("light");
          html.setAttribute("data-menu-styles", "dark");
          html.setAttribute("data-header-styles", "dark");
          document.querySelector("#switcher-dark-theme").checked = true;
          localStorage.setItem(
            "bodyBgRGB",
            `${Math.floor(color[0] + 14)}
             ${Math.floor(color[1] + 14)}
              ${Math.floor(color[2] + 14)}`
          );
          localStorage.setItem(
            "--light",
            `${Math.floor(color[0] + 5)}
             ${Math.floor(color[1] + 5)}
              ${Math.floor(color[2] + 5)}`
          );
          localStorage.setItem(
            "darkBgRGB",
            `${Math.floor(color[0])} ${Math.floor(color[1])} ${Math.floor(
              color[2]
            )}`
          );
        });
      });
      themeContainerBackground.appendChild(button);
    }
    nanoButtons1[0].click();
    /* for theme background */
  }

  /* box with close button */
  let DIV_Box = ".box";
  let boxRemoveBtn = document.querySelectorAll(".box-remove");
  boxRemoveBtn.forEach((ele) => {
    ele.addEventListener("click", function (e) {
      e.preventDefault();
      let $this = this;
      let box = $this.closest(DIV_Box);
      box.remove();
      return false;
    });
  });
  /* box with close button */

  /* box with fullscreen */
  let boxFullscreenBtn = document.querySelectorAll(".box-fullscreen");
  boxFullscreenBtn.forEach((ele) => {
    ele.addEventListener("click", function (e) {
      let $this = this;
      let box = $this.closest(DIV_Box);
      box.classList.toggle("box-fullscreen");
      box.classList.remove("box-collapsed");
      e.preventDefault();
      return false;
    });
  });
  /* box with fullscreen */ /* back to top */

  /* card with close button */

  const scrollToTop = document.querySelector(".scrollToTop");
  const $rootElement = document.documentElement;
  const $body = document.body;
  window.onscroll = () => {
    const scrollTop = window.scrollY || window.pageYOffset;
    const clientHt = $rootElement.scrollHeight - $rootElement.clientHeight;
    if (window.scrollY > 100) {
      scrollToTop.style.display = "flex";
    } else {
      scrollToTop.style.display = "none";
    }
  };
  scrollToTop.onclick = () => {
    window.scrollTo(0, 0);
    // window.scrollTo({ top: 0, behavior: 'smooth' });
  };
  /* back to top */

  /*header-remove */
  const headerbtn2 = document.querySelectorAll(".header-remove-btn");

  headerbtn2.forEach((button, index) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      button.parentNode.remove();
      if (document.getElementById("allCartsContainer")) {
        document.getElementById("cart-data").innerText = `${
          document.getElementById("allCartsContainer").children.length
        } Items`;
        document.getElementById("cart-data2").innerText = `${
          document.getElementById("allCartsContainer").children.length
        }`;
      }
      if (document.getElementById("allNotifyContainer")) {
        document.getElementById("notify-data").innerText = `${
          document.getElementById("allNotifyContainer").children.length
        }`;
      }

      if (document.getElementById("allCartsContainer")) {
        if (document.getElementById("allCartsContainer").children.length == 0) {
          document.getElementById("allCartsContainer").parentNode.innerHTML = `
                        <div class="p-6 pb-8 text-center">
                          <div>
                            <i class="ri ri-shopping-cart-2-line leading-none text-4xl avatar avatar-lg bg-primary/20 text-primary rounded-full p-3 align-middle flex justify-center mx-auto"></i>
                            <div class="mt-5">
                              <p class="text-base font-semibold text-gray-800 dark:text-white mb-1">
                                No Items In Cart
                              </p>
                              <p class="text-xs text-gray-500 dark:text-white/70">
                              When you have Items added here , they will appear here.
                              </p>
                              <a href="javascript:void(0);" class="m-0 ti-btn ti-btn-primary py-1 mt-5"><i class="ti ti-arrow-right text-base leading-none"></i>Continue Shopping</a>
                            </div>
                          </div>
                        </div>`;
        }
      }
      if (document.getElementById("allNotifyContainer")) {
        if (
          document.getElementById("allNotifyContainer").children.length == 0
        ) {
          document.getElementById("allNotifyContainer").parentNode.innerHTML = `
          <div class="p-6 pb-8 text-center">
          <div>
            <i class="ri ri-notification-off-line leading-none text-4xl avatar avatar-lg bg-secondary/20 text-secondary rounded-full p-3 align-middle flex justify-center mx-auto"></i>
            <div class="mt-5">
              <p class="text-base font-semibold text-gray-800 dark:text-white mb-1">
                No Notifications Found
              </p>
              <p class="text-xs text-gray-500 dark:text-white/70">
              When you have notifications added here , they will appear here.
              </p>
            </div>
          </div>
        </div>`;
        }
      }
    });
  });
  /*header-remove */

  /* for cart dropdown */
  const headerbtn = document.querySelectorAll(".dropdown-item-close");
  headerbtn.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      button.parentNode.parentNode.parentNode.parentNode.parentNode.remove();
      document.getElementById("cart-data").innerText = `${
        document.querySelectorAll(".dropdown-item-close").length
      } Items`;
      document.getElementById("cart-icon-badge").innerText = `${
        document.querySelectorAll(".dropdown-item-close").length
      }`;
      console.log(
        document.getElementById("header-cart-items-scroll").children.length
      );
      if (document.querySelectorAll(".dropdown-item-close").length == 0) {
        let elementHide = document.querySelector(".empty-header-item");
        let elementShow = document.querySelector(".empty-item");
        elementHide.classList.add("hidden");
        elementShow.classList.remove("hidden");
      }
    });
  });
  /* for cart dropdown */

  /* for notifications dropdown */
  const headerbtn1 = document.querySelectorAll(".dropdown-item-close1");
  headerbtn1.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      button.parentNode.parentNode.parentNode.parentNode.remove();
      document.getElementById("notifiation-data").innerText = `${
        document.querySelectorAll(".dropdown-item-close1").length
      } Unread`;
      document.getElementById("notification-icon-badge").innerText = `${
        document.querySelectorAll(".dropdown-item-close1").length
      }`;
      if (document.querySelectorAll(".dropdown-item-close1").length == 0) {
        let elementHide1 = document.querySelector(".empty-header-item1");
        let elementShow1 = document.querySelector(".empty-item1");
        elementHide1.classList.add("hidden");
        elementShow1.classList.remove("hidden");
      }
    });
  });
  /* for notifications dropdown */
})();

/* full screen */
var elem = document.documentElement;
function openFullscreen() {
  let open = document.querySelector(".full-screen-open");
  let close = document.querySelector(".full-screen-close");
  if (!document.fullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) {
      /* Safari */
      elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) {
      /* IE11 */
      elem.msRequestFullscreen();
    }
    close.classList.add("block");
    close.classList.remove("hidden");
    open.classList.add("hidden");
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.webkitExitFullscreen) {
      /* Safari */
      document.webkitExitFullscreen();
    } else if (document.msExitFullscreen) {
      /* IE11 */
      document.msExitFullscreen();
    }
    close.classList.remove("block");
    open.classList.remove("hidden");
    close.classList.add("hidden");
    open.classList.add("block");
  }
}

/* count-up */
var i = 1;
setInterval(() => {
  document.querySelectorAll(".count-up").forEach((ele) => {
    if (ele.getAttribute("data-count") >= i) {
      i = i + 1;
      ele.innerText = i;
    }
  });
}, 10);
/* count-up */
