document.addEventListener("DOMContentLoaded", () => {
  const body = document.body;
  const html = document.documentElement;
  const toggle = document.getElementById("menu-toggle");
  const navigation = document.getElementById("offcanvas-navigation");
  const overlay = document.getElementById("offcanvas-overlay");

  if (!toggle || !navigation || !overlay) {
    return;
  }

  function openMenu() {
    body.classList.add("menu-open");
    html.classList.add("menu-open");

    toggle.setAttribute("aria-expanded", "true");
    toggle.setAttribute("aria-label", "Close menu");

    navigation.setAttribute("aria-hidden", "false");
    navigation.removeAttribute("inert");

    overlay.hidden = false;
  }

  function closeMenu() {
    body.classList.remove("menu-open");
    html.classList.remove("menu-open");

    toggle.setAttribute("aria-expanded", "false");
    toggle.setAttribute("aria-label", "Open menu");

    navigation.setAttribute("aria-hidden", "true");
    navigation.setAttribute("inert", "");

    overlay.hidden = true;
    toggle.focus();
  }

  toggle.addEventListener("click", () => {
    if (body.classList.contains("menu-open")) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  overlay.addEventListener("click", closeMenu);
});
