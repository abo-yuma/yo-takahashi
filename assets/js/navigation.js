document.addEventListener("DOMContentLoaded", () => {
  const body = document.body;
  const html = document.documentElement;
  const toggle = document.getElementById("menu-toggle");
  const navigation = document.getElementById("offcanvas-navigation");
  const overlay = document.getElementById("offcanvas-overlay");

  if (!toggle || !navigation || !overlay) {
    return;
  }

  /*
   * Submenu
   */
  const menu = navigation.querySelector(".offcanvas-menu");

  if (menu) {
    const parentItems = menu.querySelectorAll("li");

    parentItems.forEach((item) => {
      // Find direct child link and submenu.
      const link = Array.from(item.children).find(
        (child) => child.tagName === "A",
      );

      const submenu = Array.from(item.children).find(
        (child) => child.tagName === "UL",
      );

      if (!link || !submenu) {
        return;
      }

      // Create submenu toggle button.
      const submenuToggle = document.createElement("button");

      submenuToggle.type = "button";
      submenuToggle.className = "submenu-toggle";
      submenuToggle.setAttribute("aria-expanded", "false");
      submenuToggle.setAttribute(
        "aria-label",
        `Open submenu: ${link.textContent.trim()}`,
      );

      // Reference the submenu ID if one already exists.
      if (submenu.id) {
        submenuToggle.setAttribute("aria-controls", submenu.id);
      }

      // Chevron icon (inline SVG).
      submenuToggle.innerHTML = `
        <svg
          viewBox="0 0 24 24"
          width="18"
          height="18"
          aria-hidden="true"
          focusable="false"
        >
          <path
            d="m6 9 6 6 6-6"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      `;

      // Start with the submenu closed.
      submenu.hidden = true;

      // Place the toggle button after the parent link.
      link.insertAdjacentElement("afterend", submenuToggle);

      // Toggle submenu.
      submenuToggle.addEventListener("click", () => {
        const shouldExpand =
          submenuToggle.getAttribute("aria-expanded") !== "true";

        submenuToggle.setAttribute("aria-expanded", String(shouldExpand));

        submenuToggle.setAttribute(
          "aria-label",
          `${shouldExpand ? "Close" : "Open"} submenu: ${link.textContent.trim()}`,
        );

        item.classList.toggle("submenu-open", shouldExpand);
        submenu.hidden = !shouldExpand;

        // Close nested submenus when this submenu closes.
        if (!shouldExpand) {
          submenu.querySelectorAll(".submenu-toggle").forEach((button) => {
            button.setAttribute("aria-expanded", "false");

            const parentLink = Array.from(button.parentElement.children).find(
              (child) => child.tagName === "A",
            );

            button.setAttribute(
              "aria-label",
              `Open submenu: ${parentLink?.textContent.trim() || "menu"}`,
            );
          });

          submenu.querySelectorAll("li.submenu-open").forEach((nestedItem) => {
            nestedItem.classList.remove("submenu-open");
          });

          submenu.querySelectorAll("ul").forEach((nestedMenu) => {
            nestedMenu.hidden = true;
          });
        }
      });
    });
  }

  /*
   * Open off-canvas navigation.
   */
  function openMenu() {
    body.classList.add("menu-open");
    html.classList.add("menu-open");

    toggle.setAttribute("aria-expanded", "true");
    toggle.setAttribute("aria-label", "Close menu");

    navigation.setAttribute("aria-hidden", "false");
    navigation.removeAttribute("inert");

    overlay.hidden = false;
  }

  /*
   * Close off-canvas navigation.
   */
  function closeMenu() {
    body.classList.remove("menu-open");
    html.classList.remove("menu-open");

    toggle.setAttribute("aria-expanded", "false");
    toggle.setAttribute("aria-label", "Open menu");

    navigation.setAttribute("aria-hidden", "true");
    navigation.setAttribute("inert", "");

    // Reset all submenus.
    navigation.querySelectorAll(".submenu-toggle").forEach((button) => {
      button.setAttribute("aria-expanded", "false");

      const parentLink = Array.from(button.parentElement.children).find(
        (child) => child.tagName === "A",
      );

      button.setAttribute(
        "aria-label",
        `Open submenu: ${parentLink?.textContent.trim() || "menu"}`,
      );
    });

    navigation.querySelectorAll("li.submenu-open").forEach((item) => {
      item.classList.remove("submenu-open");
    });

    navigation.querySelectorAll(".offcanvas-menu ul").forEach((submenu) => {
      submenu.hidden = true;
    });

    overlay.hidden = true;
    toggle.focus();
  }

  /*
   * Main menu toggle.
   */
  toggle.addEventListener("click", () => {
    if (body.classList.contains("menu-open")) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  /*
   * Close when clicking the overlay.
   */
  overlay.addEventListener("click", closeMenu);

  /*
   * Close when pressing Escape.
   */
  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape" && body.classList.contains("menu-open")) {
      closeMenu();
    }
  });
});
