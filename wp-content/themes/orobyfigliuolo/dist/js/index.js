"use-strict";
document.addEventListener("DOMContentLoaded", () => {
  const menuHandler = () => {
    const menu = document.querySelector(".sidemenu");
    const menuBtn = document.querySelector(".topbar__menu");
    const closeMenu = document.querySelector(".sidemenu__header__close-logo");
    const menuToggles = [menuBtn, closeMenu];

    menuToggles.forEach(el =>
      el.addEventListener("click", evt => {
        !menu.classList.contains("menu__active") ? menu.classList.toggle("menu__active") : menu.classList.toggle("menu__active");
      })
    );
    document.addEventListener("click", evt => {
      if (
        menu.classList.contains("menu__active") &&
        !evt.target.parentNode.className.includes("topbar") &&
        !evt.target.parentNode.className.includes("sidemenu")
      ) {
        menu.classList.toggle("menu__active");
      }
    });
  };

  const footerAccordion = () => {
    const accordionItemHeaders = document.querySelectorAll(".top-part__menu__accordion__header");

    accordionItemHeaders.forEach(el => {
      el.addEventListener("click", evt => {
        el.classList.toggle("active");
        // Adding active also to img tag inside the container
        el.children[1].classList.toggle("active");

        const accordionItemBody = el.nextElementSibling;
        if (el.classList.contains("active")) {
          accordionItemBody.style.maxHeight = `${accordionItemBody.scrollHeight}px`;
        } else {
          accordionItemBody.style.maxHeight = 0;
        }
      });
    });
  };

  menuHandler();
  footerAccordion();
});
