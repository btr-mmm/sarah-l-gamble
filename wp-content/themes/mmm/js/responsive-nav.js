class ResponsiveNav {
  constructor(inputParams) {
    const defaultParams = {
      nav: "header nav",
      navOpen: ".nav-toggle.nav-open",
      navClose: ".nav-toggle.nav-close",
      fadedBg: ".nav-fade-bg",
      breakpoint: 900,
      resizeDelay: 50,
    };

    const { nav, navOpen, navClose, fadedBg, breakpoint, resizeDelay } = {
      ...defaultParams,
      ...inputParams,
    };

    this.nav = document.querySelector(nav);
    this.navOpen = document.querySelector(navOpen);
    this.navClose = document.querySelector(navClose);
    this.fadedBg = document.querySelector(fadedBg);
    this.breakpoint = breakpoint;
    this.resizeDelay = resizeDelay;
    this.resizeTimeout = false;

    this.isNavOpen = false;

    this.init();
  }

  init() {
    window.addEventListener("resize", () => {
      clearTimeout(this.resizeTimeout);
      this.resizeTimeout = setTimeout(
        this.onResize.bind(this),
        this.resizeDelay
      );
    });

    this.navOpen.addEventListener("click", this.openNav.bind(this));

    this.navClose.addEventListener("click", this.closeNav.bind(this));
    this.fadedBg.addEventListener("click", this.closeNav.bind(this));
    window.addEventListener("keydown", this.keypressCloseNav.bind(this));

    if (window.innerWidth > this.breakpoint) {
      this.renderDesktop();
    } else {
      this.renderMobile();
    }
  }

  onResize() {
    if (window.innerWidth > this.breakpoint) {
      this.renderDesktop();
    } else {
      this.renderMobile();
    }
  }

  renderDesktop() {
    this.navOpen.classList.add("hidden");
    this.navOpen.ariaHidden = true;
    this.navClose.classList.add("hidden");
    this.navClose.ariaHidden = true;
    this.nav.classList.remove("nav-mobile");
  }

  renderMobile() {
    this.navOpen.classList.remove("hidden");
    this.navOpen.ariaHidden = false;
    this.navClose.classList.remove("hidden");
    this.navClose.ariaHidden = false;
    this.nav.classList.add("nav-mobile");
  }

  openNav() {
    this.isNavOpen = true;
    this.nav.classList.add("displayed");
    this.fadedBg.classList.add("displayed");
  }

  closeNav() {
    this.nav.classList.remove("displayed");
    this.fadedBg.classList.remove("displayed");
    this.isNavOpen = false;
  }

  keypressCloseNav(e) {
    if (this.isNavOpen && e.key == "Escape") {
      this.closeNav();
    }
  }
}
