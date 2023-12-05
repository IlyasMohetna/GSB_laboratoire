"use strict";

let mainContent;
(function () {
    let html = document.querySelector('html');
    mainContent = document.querySelector('.main-content');

    localStorageBackup2();
    switcherClick();
    checkOptions();
    setTimeout(() => {
        checkOptions();
    }, 1000);
    /* LTR to RTL */
    // html.setAttribute("dir" , "rtl") // for rtl version

})();

function switcherClick() {
    let ltrBtn, rtlBtn, verticalBtn, horiBtn, lightBtn, darkBtn, boxedBtn, fullwidthBtn, scrollHeaderBtn, scrollMenuBtn, fixedHeaderBtn, fixedMenuBtn, lightHeaderBtn, darkHeaderBtn, colorHeaderBtn, gradientHeaderBtn, lightMenuBtn, darkMenuBtn, colorMenuBtn, gradientMenuBtn, transparentMenuBtn, transparentHeaderBtn, regular, classic, modern, defaultBtn, closedBtn, iconTextBtn, detachedBtn, overlayBtn, doubleBtn, menuClickBtn, menuHoverBtn, iconClickBtn, iconHoverBtn, primaryDefaultColor1Btn, primaryDefaultColor2Btn, primaryDefaultColor3Btn, primaryDefaultColor4Btn, primaryDefaultColor5Btn, bgDefaultColor1Btn, bgDefaultColor2Btn, bgDefaultColor3Btn, bgDefaultColor4Btn, bgDefaultColor5Btn, bgImage1Btn, bgImage2Btn, bgImage3Btn, bgImage4Btn, bgImage5Btn, ResetAll, resetBtn,loaderEnable,loaderDisable;
    let html = document.querySelector('html');
    lightBtn = document.querySelector('#switcher-light-theme');
    darkBtn = document.querySelector('#switcher-dark-theme');
    ltrBtn = document.querySelector('#switcher-ltr');
    rtlBtn = document.querySelector('#switcher-rtl');
    verticalBtn = document.querySelector('#switcher-vertical');
    horiBtn = document.querySelector('#switcher-horizontal');
    boxedBtn = document.querySelector('#switcher-boxed');
    fullwidthBtn = document.querySelector('#switcher-full-width');
    fixedMenuBtn = document.querySelector('#switcher-menu-fixed');
    scrollMenuBtn = document.querySelector('#switcher-menu-scroll');
    fixedHeaderBtn = document.querySelector('#switcher-header-fixed');
    scrollHeaderBtn = document.querySelector('#switcher-header-scroll');
    lightHeaderBtn = document.querySelector('#switcher-header-light');
    darkHeaderBtn = document.querySelector('#switcher-header-dark');
    colorHeaderBtn = document.querySelector('#switcher-header-primary');
    gradientHeaderBtn = document.querySelector('#switcher-header-gradient');
    transparentHeaderBtn = document.querySelector('#switcher-header-transparent');
    lightMenuBtn = document.querySelector('#switcher-menu-light');
    darkMenuBtn = document.querySelector('#switcher-menu-dark');
    colorMenuBtn = document.querySelector('#switcher-menu-primary');
    gradientMenuBtn = document.querySelector('#switcher-menu-gradient');
    transparentMenuBtn = document.querySelector('#switcher-menu-transparent');
    regular = document.querySelector('#switcher-regular');
    classic = document.querySelector('#switcher-classic');
    modern = document.querySelector('#switcher-modern');
    defaultBtn = document.querySelector('#switcher-default-menu');
    menuClickBtn = document.querySelector('#switcher-menu-click');
    menuHoverBtn = document.querySelector('#switcher-menu-hover');
    iconClickBtn = document.querySelector('#switcher-icon-click');
    iconHoverBtn = document.querySelector('#switcher-icon-hover');
    closedBtn = document.querySelector('#switcher-closed-menu');
    iconTextBtn = document.querySelector('#switcher-icontext-menu');
    overlayBtn = document.querySelector('#switcher-icon-overlay');
    doubleBtn = document.querySelector('#switcher-double-menu');
    detachedBtn = document.querySelector('#switcher-detached');
    resetBtn = document.querySelector('#resetbtn');
    primaryDefaultColor1Btn = document.querySelector('#switcher-primary');
    primaryDefaultColor2Btn = document.querySelector('#switcher-primary1');
    primaryDefaultColor3Btn = document.querySelector('#switcher-primary2');
    primaryDefaultColor4Btn = document.querySelector('#switcher-primary3');
    primaryDefaultColor5Btn = document.querySelector('#switcher-primary4');
    bgDefaultColor1Btn = document.querySelector('#switcher-background');
    bgDefaultColor2Btn = document.querySelector('#switcher-background1');
    bgDefaultColor3Btn = document.querySelector('#switcher-background2');
    bgDefaultColor4Btn = document.querySelector('#switcher-background3');
    bgDefaultColor5Btn = document.querySelector('#switcher-background4');
    bgImage1Btn = document.querySelector('#switcher-bg-img');
    bgImage2Btn = document.querySelector('#switcher-bg-img1');
    bgImage3Btn = document.querySelector('#switcher-bg-img2');
    bgImage4Btn = document.querySelector('#switcher-bg-img3');
    bgImage5Btn = document.querySelector('#switcher-bg-img4');
    ResetAll = document.querySelector('#reset-all');
    loaderEnable = document.querySelector('#switcher-loader-enable');
    loaderDisable = document.querySelector('#switcher-loader-disable');

   // primary theme
  let primaryColor1Var = primaryDefaultColor1Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "58, 88, 146");
      localStorage.setItem("primaryRGB1", "58 88 146");
      html.style.setProperty("--primary-rgb", `58, 88, 146`);
      html.style.setProperty("--primary", `58 88 146`);
      updateColors();
    }
  );
  let primaryColor2Var = primaryDefaultColor2Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "92, 144, 163");
      localStorage.setItem("primaryRGB1", "92 144 163");
      html.style.setProperty("--primary-rgb", `92, 144, 163`);
      html.style.setProperty("--primary", `92 144 163`);
      updateColors();
    }
  );
  let primaryColor3Var = primaryDefaultColor3Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "161, 90, 223");
      localStorage.setItem("primaryRGB1", "161 90 223");
      html.style.setProperty("--primary-rgb", `161, 90, 223`);
      html.style.setProperty("--primary", `161 90 223`);
      updateColors();
    }
  );
  let primaryColor4Var = primaryDefaultColor4Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "78, 172, 76");
      localStorage.setItem("primaryRGB1", "78 172 76");
      html.style.setProperty("--primary-rgb", `78, 172, 76`);
      html.style.setProperty("--primary", `78 172 76`);
      updateColors();
    }
  );
  let primaryColor5Var = primaryDefaultColor5Btn.addEventListener(
    "click",
    () => {
      localStorage.setItem("primaryRGB", "223, 90, 90");
      localStorage.setItem("primaryRGB1", "223 90 90");
      html.style.setProperty("--primary-rgb", `223, 90, 90`);
      html.style.setProperty("--primary", `223 90 90`);
      updateColors();
    }
  );

   // Background theme
   let backgroundColor1Var = bgDefaultColor1Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${50 + 14} ${62 + 14} ${93 + 14}`);
    localStorage.setItem("darkBgRGB", "50 62 93");
    localStorage.setItem("ynexMenu","dark");
    localStorage.setItem("ynexHeader","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "55 67 98");
    document.querySelector('html').style.setProperty('--input-border', "55 67 98");
    localStorage.setItem("--light", "55 67 98");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor2Var = bgDefaultColor2Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${81 + 14} ${93 + 14} ${50 + 14}`);
    localStorage.setItem("darkBgRGB", "81 93 50");
    localStorage.setItem("ynexMenu","dark");
    localStorage.setItem("ynexHeader","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "86 98 55");
    document.querySelector('html').style.setProperty('--input-border', "86 98 55");
    localStorage.setItem("--light", "86 98 55");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor3Var = bgDefaultColor3Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${79 + 14} ${50 + 14} ${93 + 14}`);
    localStorage.setItem("darkBgRGB", "79 50 93");
    localStorage.setItem("ynexMenu","dark");
    localStorage.setItem("ynexHeader","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "84 55 98");
    document.querySelector('html').style.setProperty('--input-border', "84 55 98");
    localStorage.setItem("--light", "84 55 98");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor4Var = bgDefaultColor4Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${50 + 14} ${87 + 14} ${93 + 14}`);
    localStorage.setItem("darkBgRGB", "50 87 93");
    localStorage.setItem("ynexMenu","dark");
    localStorage.setItem("ynexHeader","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "55 93 98");
    document.querySelector('html').style.setProperty('--input-border', "55 93 98");
    localStorage.setItem("--light", "55 93 98");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });
  let backgroundColor5Var = bgDefaultColor5Btn.addEventListener("click", () => {
    localStorage.setItem("bodyBgRGB", `${93 + 14} ${50 + 14} ${50 + 14}`);
    localStorage.setItem("darkBgRGB", "93 50 50");
    localStorage.setItem("ynexMenu","dark");
    localStorage.setItem("ynexHeader","dark");
    html.classList.add("dark");
    html.classList.remove("light");
    html.setAttribute("data-menu-styles", "dark");
    html.setAttribute("data-header-styles", "dark");
    document.querySelector('html').style.setProperty('--light', "98 55 55");
    document.querySelector('html').style.setProperty('--input-border', "98 55 55");
    localStorage.setItem("--light", "98 55 55");
    document
      .querySelector("html")
      .style.setProperty("--body-bg", localStorage.bodyBgRGB);
    document
      .querySelector("html")
      .style.setProperty("--dark-bg", localStorage.darkBgRGB);
    document.querySelector("#switcher-dark-theme").checked = true;
  });

    // Bg image
    let bgImg1Var = bgImage1Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg1");
        localStorage.setItem("bgimg", "bgimg1");
      });
      let bgImg2Var = bgImage2Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg2");
        localStorage.setItem("bgimg", "bgimg2");
      });
      let bgImg3Var = bgImage3Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg3");
        localStorage.setItem("bgimg", "bgimg3");
      });
      let bgImg4Var = bgImage4Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg4");
        localStorage.setItem("bgimg", "bgimg4");
      });
      let bgImg5Var = bgImage5Btn.addEventListener("click", () => {
        html.setAttribute("bg-img", "bgimg5");
        localStorage.setItem("bgimg", "bgimg5");
      });

    /* Light Layout Start */
    let lightThemeVar = lightBtn.addEventListener('click', () => {
        lightFn();
        localStorage.setItem("ynexHeader", 'light');
        localStorage.removeItem("bodylightRGB")
        localStorage.removeItem("bodyBgRGB")
        localStorage.removeItem("ynexMenu")
    })
    /* Light Layout End */

    /* Dark Layout Start */
    let darkThemeVar = darkBtn.addEventListener('click', () => {
        darkFn();
        localStorage.setItem("ynexMenu", 'dark');
        localStorage.setItem("ynexHeader", 'dark');
    });
    /* Dark Layout End */

    /* Light Menu Start */
    let lightMenuVar = lightMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'light');
        localStorage.setItem("ynexMenu", 'light');
    });
    /* Light Menu End */

    /* Color Menu Start */
    let colorMenuVar = colorMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'color');
        localStorage.setItem("ynexMenu", 'color');
    });
    /* Color Menu End */

    /* Dark Menu Start */
    let darkMenuVar = darkMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'dark');
        localStorage.setItem("ynexMenu", 'dark');
    });
    /* Dark Menu End */

    /* Gradient Menu Start */
    let gradientMenuVar = gradientMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'gradient');
        localStorage.setItem("ynexMenu", 'gradient');
    });
    /* Gradient Menu End */

    /* Transparent Menu Start */
    let transparentMenuVar = transparentMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-styles', 'transparent');
        localStorage.setItem("ynexMenu", 'transparent');
    });
    /* Transparent Menu End */

    /* Light Header Start */
    let lightHeaderVar = lightHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'light');
        localStorage.setItem("ynexHeader", 'light');
    });
    /* Light Header End */

    /* Color Header Start */
    let colorHeaderVar = colorHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'color');
        localStorage.setItem("ynexHeader", 'color');
    });
    /* Color Header End */

    /* Dark Header Start */
    let darkHeaderVar = darkHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'dark');
        localStorage.setItem("ynexHeader", 'dark');
    });
    /* Dark Header End */

    /* Gradient Header Start */
    let gradientHeaderVar = gradientHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'gradient');
        localStorage.setItem("ynexHeader", 'gradient');
    });
    /* Gradient Header End */

    /* Transparent Header Start */
    let transparentHeaderVar = transparentHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-styles', 'transparent');
        localStorage.setItem("ynexHeader", 'transparent');
    });
    /* Transparent Header End */

    /* Full Width Layout Start */
    let fullwidthVar = fullwidthBtn.addEventListener('click', () => {
        html.setAttribute('data-width', 'fullwidth');
        localStorage.setItem("ynexfullwidth", true);
        localStorage.removeItem("ynexboxed");
    });
    /* Full Width Layout End */

    /* Boxed Layout Start */
    let boxedVar = boxedBtn.addEventListener('click', () => {
        html.setAttribute('data-width', 'boxed');
        localStorage.setItem("ynexboxed", true);
        localStorage.removeItem("ynexfullwidth");
        checkHoriMenu()
    });
    /* Boxed Layout End */

    /* Regular page style Start */
    let shadowVar = regular.addEventListener('click', () => {
        html.setAttribute('data-page-style', 'regular');
        localStorage.setItem("ynexregular", true);
        localStorage.removeItem("ynexclassic");
        localStorage.removeItem("ynexmodern");
    });
    /* Regular page style End */

    /* Classic page style Start */
    let noShadowVar = classic.addEventListener('click', () => {
        html.setAttribute('data-page-style', 'classic');
        localStorage.setItem("ynexclassic", true);
        localStorage.removeItem("ynexregular");
        // localStorage.removeItem("ynexmodern");
    });
    /* Classic page style End */

    // /* modern page style Start */
    let modernVar = modern.addEventListener('click', () => {
        html.setAttribute('data-page-style', 'modern');
        localStorage.setItem("ynexmodern", true);
        localStorage.removeItem("ynexregular");
        localStorage.removeItem("ynexclassic");
    });
    // /* modern page style End */

    /* Header-Position Styles Start */
    let fixedHeaderVar = fixedHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-position', 'fixed');
        localStorage.setItem("ynexheaderfixed", true);
        localStorage.removeItem("ynexheaderscrollable");
    });

    let scrollHeaderVar = scrollHeaderBtn.addEventListener('click', () => {
        html.setAttribute('data-header-position', 'scrollable');
        localStorage.setItem("ynexheaderscrollable", true);
        localStorage.removeItem("ynexheaderfixed");
    });
    /* Header-Position Styles End */

    /* Menu-Position Styles Start */
    let fixedMenuVar = fixedMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-position', 'fixed');
        localStorage.setItem("ynexmenufixed", true);
        localStorage.removeItem("ynexmenuscrollable");
    });

    let scrollMenuVar = scrollMenuBtn.addEventListener('click', () => {
        html.setAttribute('data-menu-position', 'scrollable');
        localStorage.setItem("ynexmenuscrollable", true);
        localStorage.removeItem("ynexmenufixed");
    });
    /* Menu-Position Styles End */

    /* Default Sidemenu Start */
    let defaultVar = defaultBtn.addEventListener('click', () => {
        html.setAttribute('data-vertical-style', 'default');
        html.setAttribute('data-nav-layout', 'vertical')
        toggleSidemenu();
        localStorage.removeItem("ynexverticalstyles");
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* Default Sidemenu End */

    /* Closed Sidemenu Start */
    let closedVar = closedBtn.addEventListener('click', () => {
        closedSidemenuFn();
        localStorage.setItem("ynexverticalstyles", 'closed');
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* Closed Sidemenu End */

    /* Hover Submenu Start */
    let detachedVar = detachedBtn.addEventListener('click', () => {
        detachedFn();
        localStorage.setItem("ynexverticalstyles", 'detached');
    });
    /* Hover Submenu End */

    /* Icon Text Sidemenu Start */
    let iconTextVar = iconTextBtn.addEventListener('click', () => {
        iconTextFn();
        localStorage.setItem("ynexverticalstyles", 'icontext');
    });
    /* Icon Text Sidemenu End */

    /* Icon Overlay Sidemenu Start */
    let overlayVar = overlayBtn.addEventListener('click', () => {
        iconOverayFn();
        localStorage.setItem("ynexverticalstyles", 'overlay');
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* Icon Overlay Sidemenu End */

    /* doublemenu Sidemenu Start */
    let doubleVar = doubleBtn.addEventListener('click', () => {
        doubletFn();
        localStorage.setItem("ynexverticalstyles", 'doublemenu');
    });
    /* doublemenu Sidemenu End */

    /* Menu Click Sidemenu Start */
    let menuClickVar = menuClickBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        menuClickFn();
        localStorage.setItem("ynexnavstyles", 'menu-click');
        localStorage.removeItem("ynexverticalstyles");
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
        }
    });
    /* Menu Click Sidemenu End */

    /* Menu Hover Sidemenu Start */
    let menuhoverVar = menuHoverBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        menuhoverFn();
        localStorage.setItem("ynexnavstyles", 'menu-hover');
        localStorage.removeItem("ynexverticalstyles");

        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
        }
    });
    /* Menu Hover Sidemenu End */

    /* icon Click Sidemenu Start */
    let iconClickVar = iconClickBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        iconClickFn();
        localStorage.setItem("ynexnavstyles", 'icon-click');
        localStorage.removeItem("ynexverticalstyles");

        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
            document.querySelector("#slide-left").classList.add("d-none")
        }
        document.querySelectorAll(".main-menu>li.open").forEach((ele)=>{
            if(!ele.classList.contains('active')){
                ele.classList.remove('open')
                ele.querySelector('ul').style.display = 'none'
            }
        })
    });
    /* icon Click Sidemenu End */

    /* icon hover Sidemenu Start */
    let iconhoverVar = iconHoverBtn.addEventListener('click', () => {
        html.removeAttribute('data-vertical-style');
        iconHoverFn();
        localStorage.setItem("ynexnavstyles", 'icon-hover');
        localStorage.removeItem("ynexverticalstyles");

        if(document.querySelector("html").getAttribute("data-nav-layout")=='horizontal'){
            document.querySelector(".main-menu").style.marginLeft = "0px"
            document.querySelector(".main-menu").style.marginRight = "0px"
            ResizeMenu()
            document.querySelector("#slide-left").classList.add("d-none")
        }
    });
    /* icon hover Sidemenu End */

    /* Sidemenu start*/
    let verticalVar = verticalBtn.addEventListener('click', () => {
        let mainContent = document.querySelector('.main-content');
        // local storage
        localStorage.removeItem("ynexlayout");
        localStorage.setItem("ynexverticalstyles", 'default');
        verticalFn();
        setNavActive();
        mainContent.removeEventListener('click', clearNavDropdown);

        //
        document.querySelector(".main-menu").style.marginLeft = "0px"
        document.querySelector(".main-menu").style.marginRight = "0px"

        document.querySelectorAll(".slide").forEach((element) => {
            if (
              element.classList.contains("open") &&
              !element.classList.contains("active")
            ) {
              element.querySelector("ul").style.display = "none";
            }
        });
    });
    /* Sidemenu end */

    /* horizontal start*/
    let horiVar = horiBtn.addEventListener('click', () => {
        let mainContent = document.querySelector('.main-content');
        html.removeAttribute('data-vertical-style');
        //    local storage
        localStorage.setItem("ynexlayout", 'horizontal');
        localStorage.removeItem("ynexverticalstyles");

        horizontalClickFn();
        clearNavDropdown();
        mainContent.addEventListener('click', clearNavDropdown);
    });
    /* horizontal end*/

    /* rtl start */
    let rtlVar = rtlBtn.addEventListener('click', () => {
        localStorage.setItem("ynexrtl", true);
        localStorage.removeItem("ynexltr");
        rtlFn();
        if (document.querySelector(".noUi-target")) {
            console.log("working");
            document.querySelectorAll(".noUi-origin").forEach((e) => {
              e.classList.add("!transform-none");
            });
        }
    });
    /* rtl end */

    /* ltr start */
    let ltrVar = ltrBtn.addEventListener('click', () => {
        //    local storage
        localStorage.setItem("ynexltr", true);
        localStorage.removeItem("ynexrtl");
        ltrFn();
        if (document.querySelector(".noUi-target")) {
            document.querySelectorAll(".noUi-origin").forEach((e) => {
              e.classList.add("!transform-none");
            });
          }
    });
    /* ltr end */

    // reset all start
    let resetVar = ResetAll.addEventListener('click', () => {
        ResetAllFn();
        setNavActive();
        document.querySelector("html").setAttribute("data-menu-styles","dark");
        document.querySelector('#switcher-menu-dark').checked = true;
        document.querySelectorAll(".slide").forEach((element) => {
            if (
              element.classList.contains("open") &&
              !element.classList.contains("active")
            ) {
              element.querySelector("ul").style.display = "none";
            }
        });
    })
    // reset all end

    /* loader start */
    loaderEnable.onclick = ()=>{
        document.querySelector("html").setAttribute("loader","enable");
        localStorage.setItem("loaderEnable","true")
    }

    loaderDisable.onclick = ()=>{
        document.querySelector("html").setAttribute("loader","disable");
        localStorage.setItem("loaderEnable","false")
    }
    /* loader end */
}

function ltrFn() {
    let html = document.querySelector('html')
    html.setAttribute("dir", "ltr");
    document.querySelector('#switcher-ltr').checked = true;
    checkOptions();
}

function rtlFn() {
    let html = document.querySelector('html');
    html.setAttribute("dir", "rtl");
    checkOptions();
}

function lightFn() {
    let html = document.querySelector('html');
    html.setAttribute('class', 'light');
    html.setAttribute('data-header-styles', 'light');
    if(localStorage.getItem("ynexlayout") == "horizontal"){
        html.setAttribute('data-menu-styles', 'light');
    }
    if(!localStorage.getItem('primaryRGB')){
        html.setAttribute('style','')
    }
    document.querySelector('#switcher-light-theme').checked = true;
    document.querySelector('#switcher-menu-light').checked = true;
    document.querySelector('#switcher-header-light').checked = true;
    updateColors()
    localStorage.removeItem("ynexdarktheme");
    localStorage.removeItem("ynexbgColor");
    localStorage.removeItem("ynexheaderbg");
    localStorage.removeItem("ynexbgwhite");
    localStorage.removeItem("ynexmenubg");
    localStorage.removeItem("ynexmenubg");
    checkOptions();
    html.style.removeProperty('--body-bg-rgb');
    html.style.removeProperty('--body-bg-rgb2');
    html.style.removeProperty("--body-bg");
    html.style.removeProperty("--dark-bg");
    html.style.removeProperty("--light");
    html.style.removeProperty("--form-control-bg");
    html.style.removeProperty("--input-border");

    document.querySelector("#switcher-background4").checked = false
    document.querySelector("#switcher-background3").checked = false
    document.querySelector("#switcher-background2").checked = false
    document.querySelector("#switcher-background1").checked = false
    document.querySelector("#switcher-background").checked = false
    document.querySelector('#switcher-menu-light').checked = true;
    document.querySelector('#switcher-header-light').checked = true;

}

function darkFn() {
    let html = document.querySelector('html');
    html.setAttribute('class', 'dark');
    html.setAttribute('data-header-styles', 'dark');
    html.setAttribute('data-menu-styles', 'dark');
    if(!localStorage.getItem('primaryRGB')){
        html.setAttribute('style','')
    }
    document.querySelector('#switcher-menu-dark').checked = true;
    document.querySelector('#switcher-header-dark').checked = true;
    document.querySelector('html').style.removeProperty('--body-bg-rgb');
    document.querySelector('html').style.removeProperty('--body-bg-rgb2');
    document.querySelector('html').style.removeProperty("--body-bg");
    document.querySelector('html').style.removeProperty("--dark-bg");
    document.querySelector('html').style.removeProperty('--light');
    document.querySelector('html').style.removeProperty('--form-control-bg');
    document.querySelector('html').style.removeProperty('--input-border');
    updateColors()
    localStorage.setItem("ynexdarktheme", true);
    localStorage.removeItem("ynexlighttheme");
    localStorage.removeItem("bodyBgRGB");
    localStorage.removeItem("ynexbgColor");
    localStorage.removeItem("ynexheaderbg");
    localStorage.removeItem("ynexbgwhite");
    localStorage.removeItem("ynexmenubg");
    checkOptions();

    document.querySelector("#switcher-background4").checked = false
    document.querySelector("#switcher-background3").checked = false
    document.querySelector("#switcher-background2").checked = false
    document.querySelector("#switcher-background1").checked = false
    document.querySelector("#switcher-background").checked = false
    document.querySelector('#switcher-menu-dark').checked = true;
    document.querySelector('#switcher-header-dark').checked = true;
}

function verticalFn() {
    let html = document.querySelector('html');
    html.setAttribute('data-nav-layout', 'vertical');
    html.setAttribute('data-vertical-style', 'overlay');
    html.removeAttribute('data-nav-style');
    localStorage.removeItem('ynexnavstyles');
    html.removeAttribute('data-toggled');
    document.querySelector('#switcher-vertical').checked = true;
    document.querySelector('#switcher-menu-click').checked = false;
    document.querySelector('#switcher-menu-hover').checked = false;
    document.querySelector('#switcher-icon-click').checked = false;
    document.querySelector('#switcher-icon-hover').checked = false;
    checkOptions();
    if(!localStorage.ynexMenu){
    html.setAttribute("data-menu-styles","dark")
    }
}

function horizontalClickFn() {
    document.querySelector('#switcher-horizontal').checked = true;
    document.querySelector('#switcher-menu-click').checked = true;
    let html = document.querySelector('html');
    html.setAttribute('data-nav-layout', 'horizontal');
    html.removeAttribute('data-vertical-style');
    if (!html.getAttribute('data-nav-style')) {
        html.setAttribute('data-nav-style', 'menu-click');
    }
    if(!localStorage.ynexMenu && !localStorage.bodylightRGB){
        html.setAttribute("data-menu-styles","light")
        document.querySelector('#switcher-menu-light').checked = true;
        checkOptions();
    }
    checkOptions();
    checkHoriMenu();
}


function ResetAllFn() {
    let html = document.querySelector('html');
    if(localStorage.getItem("ynexlayout")=="horizontal"){
        document.querySelector(".main-menu").style.display = "block"
    }
    checkOptions();

    // clearing localstorage
    localStorage.clear();

    // reseting to light
    lightFn();

    //To reset the light-rgb
    document.querySelector('html').removeAttribute("style")

    // clearing attibutes
    // removing header, menu, pageStyle & boxed
    html.removeAttribute('data-nav-style');
    html.removeAttribute('data-menu-position');
    html.removeAttribute('data-header-position');
    html.removeAttribute('data-width');
    html.removeAttribute('data-page-style');

    // removing theme styles
    html.removeAttribute('bg-img');

    // clear primary & bg color
    html.style.removeProperty(`--primary`);
    html.style.removeProperty(`--body-bg-rgb`);

    // reseting to ltr
    ltrFn();

    // reseting to vertical
    verticalFn();
    mainContent.removeEventListener('click', clearNavDropdown);

    // reseting page style
    document.querySelector('#switcher-classic').checked = false;
    document.querySelector('#switcher-modern').checked = false;
    document.querySelector('#switcher-regular').checked = true;

    // reseting layout width styles
    document.querySelector('#switcher-full-width').checked = true;
    document.querySelector('#switcher-boxed').checked = false;

    // reseting menu position styles
    document.querySelector('#switcher-menu-fixed').checked = true;
    document.querySelector('#switcher-menu-scroll').checked = false;

    // reseting header position styles
    document.querySelector('#switcher-header-fixed').checked = true;
    document.querySelector('#switcher-header-scroll').checked = false;

    // reseting sidemenu layout styles
    document.querySelector('#switcher-default-menu').checked = true;
    document.querySelector('#switcher-closed-menu').checked = false;
    document.querySelector('#switcher-icontext-menu').checked = false;
    document.querySelector('#switcher-icon-overlay').checked = false;
    document.querySelector('#switcher-detached').checked = false;
    document.querySelector('#switcher-double-menu').checked = false;

    // resetting theme primary
    document.querySelector("#switcher-primary").checked = false
    document.querySelector("#switcher-primary1").checked = false
    document.querySelector("#switcher-primary2").checked = false
    document.querySelector("#switcher-primary3").checked = false
    document.querySelector("#switcher-primary4").checked = false

    // resetting theme background
    document.querySelector("#switcher-background").checked = false
    document.querySelector("#switcher-background1").checked = false
    document.querySelector("#switcher-background2").checked = false
    document.querySelector("#switcher-background3").checked = false
    document.querySelector("#switcher-background4").checked = false


    // reseting chart colors
    updateColors();

    // to reset horizontal menu scroll
    document.querySelector(".main-menu").style.marginLeft = "0px"
    document.querySelector(".main-menu").style.marginRight = "0px"

}

function checkOptions() {

    // dark
    if (localStorage.getItem('ynexdarktheme')) {
        document.querySelector('#switcher-dark-theme').checked = true;
    }

    // horizontal
    if (localStorage.getItem('ynexlayout') === "horizontal") {
        document.querySelector('#switcher-horizontal').checked = true;
        document.querySelector('#switcher-menu-click').checked = true;
    }
    else {
        document.querySelector('#switcher-vertical').checked = true;
    }

    //RTL
    if (localStorage.getItem('ynexrtl')) {
        document.querySelector('#switcher-rtl').checked = true;
    }
    else {
        document.querySelector('#switcher-ltr').checked = true;
    }

    // light header
    if (localStorage.getItem('ynexHeader') === "light") {
        document.querySelector('#switcher-header-light').checked = true;
    }

    // color header
    if (localStorage.getItem('ynexHeader') === "color") {
        document.querySelector('#switcher-header-primary').checked = true;
    }

    // gradient header
    if (localStorage.getItem('ynexHeader') === "gradient") {
        document.querySelector('#switcher-header-gradient').checked = true;
    }

    // dark header
    if (localStorage.getItem('ynexHeader') === "dark") {
        document.querySelector('#switcher-header-dark').checked = true;
    }
    // transparent header
    if (localStorage.getItem('ynexHeader') === "transparent") {
        document.querySelector('#switcher-header-transparent').checked = true;
    }

    // light menu
    if (localStorage.getItem('ynexMenu') === 'light') {
        document.querySelector('#switcher-menu-light').checked = true;
    }

    // color menu
    if (localStorage.getItem('ynexMenu') === 'color') {
        document.querySelector('#switcher-menu-primary').checked = true;
    }

    // gradient menu
    if (localStorage.getItem('ynexMenu') === 'gradient') {
        document.querySelector('#switcher-menu-gradient').checked = true;
    }

    // dark menu
    if (localStorage.getItem('ynexMenu') === 'dark') {
        document.querySelector('#switcher-menu-dark').checked = true;
    }
    // transparent menu
    if (localStorage.getItem('ynexMenu') === 'transparent') {
        document.querySelector('#switcher-menu-transparent').checked = true;
    }

    //boxed
    if (localStorage.getItem('ynexboxed')) {
        document.querySelector('#switcher-boxed').checked = true;
    }

    //scrollable
    if (localStorage.getItem('ynexheaderscrollable')) {
        document.querySelector('#switcher-header-scroll').checked = true;
    }
    if (localStorage.getItem('ynexmenuscrollable')) {
        document.querySelector('#switcher-menu-scroll').checked = true;
    }

    //fixed
    if (localStorage.getItem('ynexheaderfixed')) {
        document.querySelector('#switcher-header-fixed').checked = true;
    }
    if (localStorage.getItem('ynexmenufixed')) {
        document.querySelector('#switcher-menu-fixed').checked = true;
    }

    //classic
    if (localStorage.getItem('ynexclassic')) {
        document.querySelector('#switcher-classic').checked = true;
    }

    // //modern
    if (localStorage.getItem('ynexmodern')) {
        document.querySelector('#switcher-modern').checked = true;
    }

    // sidemenu layout style
    if (localStorage.ynexverticalstyles) {
        let verticalStyles = localStorage.getItem('ynexverticalstyles');
        switch (verticalStyles) {
            case 'default':
                document.querySelector('#switcher-default-menu').checked = true;
                break;
            case 'closed':
                document.querySelector('#switcher-closed-menu').checked = true;
                break;
            case 'icontext':
                document.querySelector('#switcher-icontext-menu').checked = true;
                break;
            case 'overlay':
                document.querySelector('#switcher-icon-overlay').checked = true;
                break;
            case 'detached':
                document.querySelector('#switcher-detached').checked = true;
                break;
            case 'doublemenu':
                document.querySelector('#switcher-double-menu').checked = true;
                break;
            default:
                document.querySelector('#switcher-default-menu').checked = true;
                break;
        }
    }
    // navigation menu style
    if (localStorage.ynexnavstyles) {
        let navStyles = localStorage.getItem('ynexnavstyles');
        switch (navStyles) {
            case 'menu-click':
                document.querySelector('#switcher-menu-click').checked = true;
                break;
            case 'menu-hover':
                document.querySelector('#switcher-menu-hover').checked = true;
                break;
            case 'icon-click':
                document.querySelector('#switcher-icon-click').checked = true;
                break;
            case 'icon-hover':
                document.querySelector('#switcher-icon-hover').checked = true;
                break;
        }
    }

    // loader
    if(localStorage.loaderEnable != "true"){
        document.querySelector("#switcher-loader-disable").checked = true
    }
}

// chart colors
let myVarVal,primaryRGB
function updateColors() {
    'use strict'
    primaryRGB = getComputedStyle(document.documentElement).getPropertyValue('--primary-rgb').trim();

    //get variable
    myVarVal = localStorage.getItem("primaryRGB") || primaryRGB;
    if (document.querySelector("#salesOverview") !== null) {
        salesOverview();
    }
    if (document.querySelector("#sale-value") !== null) {
        saleValue();
    }
    if (document.querySelector("#earnings") !== null) {
        Earnings();
    }
    if (document.querySelector("#total-visitors") !== null) {
        visitors();
    }
    if (document.querySelector("#crypto") !== null) {
        cryptoCurrency();
    }
    if (document.querySelector("#subscriptionOverview") !== null) {
        subOverview();
    }
    if (document.querySelector("#candidates-chart") !== null) {
        Candidates();
    }
    if (document.querySelector("#nft-balance-chart") !== null) {
        nftBalane();
    }
    if (document.querySelector("#nft-statistics") !== null) {
        nftStatistics();
    }
    if (document.querySelector("#report") !== null) {
        targetReport();
    }
    if (document.querySelector("#views") !== null) {
        pageviews();
    }
    if (document.querySelector("#sessions") !== null) {
        Sessions();
    }
    if (document.querySelector("#analytics-bouncerate") !== null) {
        bounceRate();
    }
    if (document.querySelector("#audienceReport") !== null) {
        audienceReport();
    }
    if (document.querySelector("#country-sessions") !== null) {
        countrySessions();
    }
    if (document.querySelector("#session-users") !== null) {
        userSession();
    }
    if (document.querySelector("#projectAnalysis") !== null) {
        projectAnalysis();
    }
    if (document.querySelector("#crm-total-customers") !== null) {
        crmtotalCustomers();
    }
    if (document.querySelector("#crm-revenue-analytics") !== null) {
        revenueAnalytics();
    }
    if (document.querySelector("#crm-profits-earned") !== null) {
        crmProfitsearned();
    }
    if (document.querySelector("#leads-source") !== null) {
        leads(myVarVal);
    }
    if (document.querySelector("#performanceReport") !== null) {
        hrmperformanceReport();
    }
    if (document.querySelector("#jobs-summary") !== null) {
        JobsSummary();
    }
    if (document.querySelector("#total-invested") !== null) {
        stockstotalInvested();
    }
    if (document.querySelector("#totalInvestmentsStats") !== null) {
        totalInvestmentsStats();
    }
    if (document.querySelector("#stocks-marketcap") !== null) {
        stocksMarketcap();
    }
    if (document.querySelector("#courses-earnings") !== null) {
        earningsReport();
    }
    if (document.querySelector("#course-payouts") !== null) {
        coursePayouts();
    }
    if (document.querySelector("#waterTrack") !== null) {
        waterTrack();
    }
}
updateColors()

function localStorageBackup2(){
    if (localStorage.bodyBgRGB || localStorage.bodylightRGB){
        document.querySelector('#switcher-dark-theme').checked = true;
        document.querySelector('#switcher-menu-dark').checked = true;
        document.querySelector('#switcher-header-dark').checked = true;
    }

    if (localStorage.bodyBgRGB && localStorage.bodylightRGB) {
        if(localStorage.bodyBgRGB == "20, 30, 96"){
            document.querySelector("#switcher-background").checked = true
        }
        if(localStorage.bodyBgRGB == "8, 78, 115"){
            document.querySelector("#switcher-background1").checked = true
        }
        if(localStorage.bodyBgRGB == "90, 37, 135"){
            document.querySelector("#switcher-background2").checked = true
        }
        if(localStorage.bodyBgRGB == "24, 101, 51"){
            document.querySelector("#switcher-background3").checked = true
        }
        if(localStorage.bodyBgRGB == "120, 66, 20"){
            document.querySelector("#switcher-background4").checked = true
        }
    }

    if (localStorage.primaryRGB) {
        if(localStorage.primaryRGB == "58, 88, 146"){
            document.querySelector("#switcher-primary").checked = true
        }
        if(localStorage.primaryRGB == "92, 144, 163"){
            document.querySelector("#switcher-primary1").checked = true
        }
        if(localStorage.primaryRGB == "172, 172, 80"){
            document.querySelector("#switcher-primary2").checked = true
        }
        if(localStorage.primaryRGB == "165, 94, 131"){
            document.querySelector("#switcher-primary3").checked = true
        }
        if(localStorage.primaryRGB == "87, 68, 117"){
            document.querySelector("#switcher-primary4").checked = true
        }
    }

    if(localStorage.loaderEnable == "true"){
        document.querySelector("#switcher-loader-enable").checked = true
    }
}


