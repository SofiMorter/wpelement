var isMobile = {
  Android: function () {
    return navigator.userAgent.match(/Android/i);
  },
  BlackBerry: function () {
    return navigator.userAgent.match(/BlackBerry/i);
  },
  iOS: function () {
    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
  },
  Opera: function () {
    return navigator.userAgent.match(/Opera Mini/i);
  },
  Windows: function () {
    return navigator.userAgent.match(/IEMobile/i);
  },
  any: function () {
    return isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows();
  },
};

let body = document.querySelector("body");

if (isMobile.any()) {
  body.classList.add("mobile");
  let button = document.querySelector(".tablet-burger-btn");
  let burgerShow = document.querySelector(".burger-list-wrapper");
  let burgerOverlay = document.querySelector(".overlay");
  button.addEventListener("click", function () {
    burgerShow.classList.add("burgerIsShown");
  });

  burgerOverlay.addEventListener("click", function () {
    burgerShow.classList.remove("burgerIsShown");
  });
}

const gridWrapper = document.getElementById("grid-wrapper");
const h2 = document.getElementById("h2");
if (h2 && gridWrapper) {
  h2.style.width = `${gridWrapper.offsetWidth}px`;
}

const secCatRowWrap = document.getElementById("sec-cat-row-wrap");
const secCat = document.getElementById("sec-cat");

if (secCat && secCatRowWrap) {
  secCat.style.width = `${secCatRowWrap.offsetWidth}px`;
}

const blogGrid = document.getElementById("blogGrid");
const blogH2 = document.getElementById("blogH2");

if (blogGrid && blogH2) {
  blogH2.style.width = `${blogGrid.offsetWidth}px`;
}

let images = document.getElementsByClassName("material-grid-item");
let lightboxes = document.getElementsByClassName("lightbox");

if (images && lightboxes) {
  for (let i = 0; i < images.length; i++) {
    images[i].addEventListener("click", () => {
      lightboxes[i].classList.toggle("lightbox-active");
    });
  }

  for (let lightbox of lightboxes) {
    lightbox.addEventListener("click", () => {
      lightbox.classList.toggle("lightbox-active");
    });
  }
}

const catParents = document.querySelectorAll(".product-categories > .cat-parent");
if (catParents) {
  catParents.forEach((parent) => {
    parent.insertAdjacentHTML("afterbegin", "<span>+</span>");
    document.querySelector('span').addEventListener('click', (event) => {
        console.list(event)
    })
  });
}
