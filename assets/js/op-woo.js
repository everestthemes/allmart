/**
 * Omnipress WooCommerce JS
 */

(function () {
  // Append Quantity Increment / Decrement Buttons
  function all-mart_add_inc_dec() {
    // select all quantity div
    const qtyDiv = document.querySelectorAll(".quantity");

    qtyDiv.forEach((wrap) => {
      const incdecWrap = document.createElement("div");
      incdecWrap.className = "op-qty-incdec-wrap";
      incdecWrap.innerHTML = `
                <div class="op-btn-qty q_inc">+</div>
                <div class="op-btn-qty q_dec">-</div>
            `;
      wrap.appendChild(incdecWrap);
    });
  }

  // Handle IncDec values
  function all-mart_handle_quantity() {
    const qtyWrapper = document.querySelectorAll(".quantity");

    qtyWrapper.forEach((el) => {
      const incdecBox = el.querySelector(".op-qty-incdec-wrap");
      const input = el.querySelector(".qty");

      incdecBox.addEventListener("click", (e) => {
        if (!e.target.classList.contains("op-btn-qty")) return;

        let oldValue = parseInt(input.value);

        if (isNaN(oldValue)) {
          oldValue = 0;
        }

        input.value = e.target.classList.contains("q_inc")
          ? oldValue + 1
          : Math.max(oldValue - 1, 0);
        input.dispatchEvent(new Event("change", { bubbles: true }));
      });
    });
  }

  // Product Search Modal
  function all-mart_product_search_modal() {
    const searchModal = document.querySelector(".search-modal__content");
    const searchOpen = document.querySelector(".open-search-modal");
    const searchClose = document.querySelector(".close-search-modal");

    searchOpen.addEventListener("click", (e) => {
      searchModal.style.display = "flex";
      document.body.style.overflow = "hidden";
    });

    // close search modal
    searchClose.addEventListener("click", (e) => {
      searchModal.style.display = "none";
      document.body.style.overflow = "auto";
    });

    window.addEventListener("click", (e) => {
      if (e.target === searchModal) {
        searchModal.style.display = "none";
        document.body.style.overflow = "auto";
      }
    });
  }

  // Review Stars
  function all-mart_product_review_stars() {
    for (let i = 1; i <= 5; i++) {
      const starLink = document.querySelector(`a.star-${i}`);
      if (starLink) {
        starLink.textContent = starLink.textContent.charAt(0);
      }
    }
  }

  window.addEventListener("load", function () {
    all-mart_add_inc_dec();
    all-mart_handle_quantity();
    all-mart_product_search_modal();
    all-mart_product_review_stars();

    document.addEventListener("mousemove", function () {
      if (!document.querySelector(".op-btn-qty")) {
        all-mart_add_inc_dec();
        all-mart_handle_quantity();
      }
    });

    // Change Product add to cart button text
    const atcBtns = document.querySelectorAll(".add_to_cart_button");
    if (atcBtns !== null) {
      atcBtns.forEach((atcBtn) => {
        atcBtn.addEventListener("click", function () {
          atcBtn.innerHTML = "added to cart";
        });
      });
    }
  });

  const swiper = new Swiper(".swiper", {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
    },
  });
})();
