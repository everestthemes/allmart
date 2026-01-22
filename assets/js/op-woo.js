/**
 * Omnipress WooCommerce JS
 */

(function () {
  // Append Quantity Increment / Decrement Buttons
  function allmart_add_inc_dec() {
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
  // function allmart_handle_quantity() {
  //   const qtyWrapper = document.querySelectorAll(".quantity");

  //   qtyWrapper.forEach((el) => {
  //     const incdecBox = el.querySelector(".op-qty-incdec-wrap");
  //     const input = el.querySelector(".qty");

  //     incdecBox.addEventListener("click", (e) => {
  //       if (!e.target.classList.contains("op-btn-qty")) return;

  //       let oldValue = parseInt(input.value);

  //       if (isNaN(oldValue)) {
  //         oldValue = 0;
  //       }

  //       input.value = e.target.classList.contains("q_inc")
  //         ? oldValue + 1
  //         : Math.max(oldValue - 1, 0);
  //       input.dispatchEvent(new Event("change", { bubbles: true }));
  //     });
  //   });
  // }

  // Review Stars
  function allmart_product_review_stars() {
    for (let i = 1; i <= 5; i++) {
      const starLink = document.querySelector(`a.star-${i}`);
      if (starLink) {
        starLink.textContent = starLink.textContent.charAt(0);
      }
    }
  }

  window.addEventListener("load", function () {
    // allmart_add_inc_dec();
    // allmart_handle_quantity();
    // allmart_product_search_modal();
    allmart_product_review_stars();

    // document.addEventListener("mousemove", function () {
    //   if (!document.querySelector(".op-btn-qty")) {
    //     allmart_add_inc_dec();
    //     allmart_handle_quantity();
    //   }
    // });

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

})();
