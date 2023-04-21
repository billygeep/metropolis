document.addEventListener(
  "DOMContentLoaded",
  () => {
    class Nav {
      constructor() {
        this.navBurger = document.getElementById("re-nav-burger");
        this.navBurger.addEventListener("click", () => {
          this.toggleNav();
        });

        this.navMain = document.getElementById("re-nav-link-container");
        console.log(this.navMain);
        this.isOpen = false;
      }

      toggleNav() {
        this.isOpen = !this.isOpen;
        console.log(this.isOpen);
        this.isOpen
          ? this.navMain.classList.add("active")
          : this.navMain.classList.remove("active");
      }
    }

    class Carousel {
      constructor(_id, _pips) {
        this.id = _id;
        this.pips = _pips;
        this.carouselEl = document.getElementById(this.id);

        this.carouselInner =
          this.carouselEl.getElementsByClassName("carousel-inner")[0];

        console.log(this.carouselInner);
        this.imgs = this.carouselEl.getElementsByClassName("carousel-image");
        this.carouselInner.style.width = this.imgs.length * 100 + "%";
        this.counter = 0;
        this.increment = 100 / this.imgs.length;

        this.touchstartX = 0;
        this.touchendX = 0;

        const anchorButtons = document.getElementsByClassName("intro-arrow");

        for (let i = 0; i < anchorButtons.length; i++) {
          anchorButtons[i].addEventListener("click", () => {
            const element = document.getElementById("title");
            element.scrollIntoView();
          });
        }

        this.buttonHolder;

        if (this.pips) {
          this.addPips();
        } else {
          this.addButtons();
        }
        this.addButtonFunctionality();
        // this.addSwipe();
      }

      addButtons() {
        this.buttonHolder = document.getElementsByClassName(
          "floorplan-button-container"
        )[0];
        const buttons = this.buttonHolder.getElementsByClassName(
          "floorplan-button-on"
        );
        for (let i = 0; i < buttons.length; i++) {
          buttons[i].addEventListener("click", (event) => {
            event.preventDefault();
            const val = i;
            this.carouselInner.style.transform =
              "translateX(" + -this.increment * val + "%)";
            this.addActiveButton(val);
          });
        }

        this.addActiveButton(0);
      }

      addPips() {
        const pipContainer =
          this.carouselEl.getElementsByClassName("carousel-pips")[0];
        for (let i = 0; i < this.imgs.length; i++) {
          const pipEl = document.createElement("button");
          pipEl.className = "carousel-pip";
          pipContainer.appendChild(pipEl);
          const val = i;
          pipEl.addEventListener("click", () => {
            this.carouselInner.style.transform =
              "translateX(" + -this.increment * val + "%)";
            this.addActivePip(val);
            this.addActiveLabel(val);
          });
        }

        this.addActivePip(0);
        this.addActiveLabel(0);
      }

      addActivePip(val) {
        const pips = this.carouselEl.getElementsByClassName("carousel-pip");
        for (let i = 0; i < pips.length; i++) {
          if (i == val) {
            if (!pips[i].classList.contains("active"))
              pips[i].classList.add("active");
          } else {
            if (pips[i].classList.contains("active"))
              pips[i].classList.remove("active");
          }
        }
      }

      addActiveLabel(val) {
        const labels = this.carouselEl.getElementsByClassName("carousel-label");
        for (let i = 0; i < labels.length; i++) {
          if (i == val) {
            if (!labels[i].classList.contains("active"))
              labels[i].classList.add("active");
          } else {
            if (labels[i].classList.contains("active"))
              labels[i].classList.remove("active");
          }
        }
      }

      addActiveButton(val) {
        const buttons = this.buttonHolder.getElementsByClassName(
          "floorplan-button-on"
        );
        for (let i = 0; i < buttons.length; i++) {
          if (i == val) {
            if (!buttons[i].classList.contains("active"))
              buttons[i].classList.add("active");
          } else {
            if (buttons[i].classList.contains("active"))
              buttons[i].classList.remove("active");
          }
        }
      }

      addButtonFunctionality() {
        const leftButton = this.carouselEl.getElementsByClassName(
          "carousel-button-left"
        )[0];
        const rightButton = this.carouselEl.getElementsByClassName(
          "carousel-button-right"
        )[0];

        leftButton.addEventListener("click", () => {
          this.nextImage(-1);
        });
        rightButton.addEventListener("click", () => {
          this.nextImage(1);
        });
      }

      nextImage(val) {
        this.counter += val;

        if (this.counter >= this.imgs.length) this.counter = 0;
        if (this.counter < 0) this.counter = this.imgs.length - 1;

        this.carouselInner.style.transform =
          "translateX(" + -this.increment * this.counter + "%)";

        if (this.pips) {
          this.addActivePip(this.counter);
          this.addActiveLabel(this.counter);
        } else {
          this.addActiveButton(this.counter);
        }
      }
    }

    class Main {
      constructor() {
        this.anchorAmin = 0;
        this.anchorBmin = 0;
        this.anchorCmin = 0;

        this.anchorAmin = 0;
        this.heightB = 0;
        this.anchorCmin = 0;

        this.introImage = document.getElementById("intro-image");
        this.arrowDown = document.getElementById("down-arrow");
        this.arrowRight = document.getElementById("right-arrow");
        this.arrowUp = document.getElementById("up-arrow");

        this.fadeInElsB = document.getElementsByClassName("fade-in-b");
        this.fadeInElsC = document.getElementsByClassName("fade-in-c");

        this.canScroll = false;

        //this.setAnchorPoints();
        //this.activeScroll();
      }

      startIntro() {
        const introLogo = document.getElementById("intro-logo");
        const introText = document.getElementById("intro-text");

        this.introImage.style.transition = "1s 0s ease-in-out";
        introLogo.style.transition = "1s 0.5s ease-in-out";
        introText.style.transition = "1s 0.8s ease-in-out";
        this.arrowDown.style.transition = "1.5s 1s ease-in-out";

        introLogo.style.opacity = 1;
        introText.style.opacity = 1;
        this.introImage.style.opacity = 1;

        introLogo.style.transform = "translateY(0)";
        introText.style.transform = "translateY(0)";
        this.arrowDown.style.transform = "translateY(0)";

        setTimeout(() => {
          this.arrowDown.style.transition = "0s";
          this.introImage.style.transition = "0s";
          this.canScroll = true;

          this.setAnchorPoints();
        }, 2500);
      }

      activeScroll() {
        window.addEventListener("scroll", () => {
          this.scrollArrows();
        });
        window.addEventListener("resize", () => {
          this.setAnchorPoints();
        });
      }

      setAnchorPoints() {
        const app = document.getElementById("app");
        this.totalHeight = app.clientHeight;

        const anchorA = document.getElementById("anchorA");
        const anchorB = document.getElementById("anchorB");
        const anchorC = document.getElementById("anchorC");

        this.anchorAmin = anchorA.offsetTop;
        this.anchorBmin = anchorB.offsetTop;
        this.anchorCmin = anchorC.offsetTop;

        this.heightB = anchorB.offsetHeight / 3;
      }

      scrollArrows() {
        const scrollY = window.scrollY;
        const ih = window.innerHeight;
        const ay = scrollY < this.anchorAmin ? 0 : scrollY * 0.25;
        const bx =
          scrollY < this.anchorBmin ? 0 : (scrollY - this.anchorBmin) / 2;
        const cy =
          scrollY < this.anchorCmin ? 1000 : this.totalHeight - scrollY - ih;

        this.arrowRight.style.transform = `translateX(${bx}px)`;
        this.arrowUp.style.transform = `translateY(${cy}px)`;

        const opacityB =
          scrollY < this.anchorBmin * 0.5
            ? 0
            : (scrollY - this.anchorBmin * 0.5) / this.heightB;
        const opacityC =
          scrollY < this.anchorBmin * 0.75
            ? 0
            : (scrollY - this.anchorBmin * 0.75) / this.heightB;

        for (let i = 0; i < this.fadeInElsB.length; i++) {
          this.fadeInElsB[i].style.opacity = opacityB;
          this.fadeInElsC[i].style.opacity = opacityC;
        }

        if (this.canScroll) {
          this.arrowDown.style.transform = `translateY(${ay}px)`;
          let opacityA = scrollY < this.anchorAmin ? 1 : 1 - scrollY / ih;
          if (opacityA < 0) opacityA = 0;
          this.arrowDown.style.opacity = opacityA;
        }
      }
    }

    if (document.getElementById("re-nav-burger")) {
      const nav = new Nav();
    }
    if (document.getElementById("viewCarousel")) {
      const carousel = new Carousel("viewCarousel", true);
    }
    if (document.getElementById("app")) {
      const main = new Main();
    }
  },
  false
);

// jQuery( document ).ready(function() {

// 	let counter = 0;
// 	let l = jQuery('.custom-carousel-section').length - 1;
// 	let sectionw = 100 / (l + 1)

// 	function goForward () {
// 		counter--;
// 		if (counter < -l) counter = 0;
// 		jQuery('#custom-carousel-inner').css({'transform': 'translateX(' + counter * sectionw + '%)' });

// 		clearTimeout(mytimer);
// 		controlCarousel();
// 	}
// 	function goBack () {
// 		counter++;
// 		if (counter > 0) counter = -l;
// 		jQuery('#custom-carousel-inner').css({'transform': 'translateX(' + counter * sectionw + '%)' });

// 		clearTimeout(mytimer);
// 		controlCarousel();
// 	}

// 	function clickNav () {
// 		menuopen = !menuopen;

// 		jQuery('#wkm-header-mobile-panel').toggleClass('active');
// 		jQuery('#wkm-burger-menu').toggleClass('active');
// 		jQuery('#wkm-burger-close').toggleClass('active');
// 	}

// 	let stickyActive = false;
// 	let menuopen = false;

// 	jQuery('#wkm-burger').on('click', clickNav);
// 	// jQuery('#wkm-header-mobile-panel').scroll((e) => { e.preventDefault() })

// 	let timerActive = false;
// 	let mytimer

// 	function checkCarousel () {
// 		if (jQuery('#custom-carousel')) {
// 			console.log('GO')

// 			jQuery('#custom-carousel-back').on('click', goBack);
// 			jQuery('#custom-carousel-forward').on('click', goForward);

// 			controlCarousel();
// 		}
// 	}

// 	// jQuery('.show-tooltip').mouseover(() => {
// 	// 	jQuery('#tooltip-hover').css({'display' : 'block'})
// 	// });
// 	// jQuery('.show-tooltip').mouseout(() => {
// 	// 	jQuery('#tooltip-hover').css({'display' : 'none'})
// 	// });

// 	function controlCarousel () {
// 		mytimer = setTimeout(() => {
// 			if (jQuery('#custom-carousel')) {
// 				goForward();
// 			}
// 		}, 10000)
// 	}

// 	checkCarousel();

// 	jQuery( document ).scroll((e) => {
// 		let st = jQuery(window). scrollTop();
// 		if (!stickyActive && st > 100) {
// 			stickyActive = true;
// 			jQuery('#wkm-header-sticky').addClass('active');
// 		}
// 		if (stickyActive && st <= 100) {
// 			stickyActive = false;
// 			jQuery('#wkm-header-sticky').removeClass('active');
// 		}
// 	})
// });
