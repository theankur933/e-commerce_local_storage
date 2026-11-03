document.addEventListener("DOMContentLoaded", function () {

    const products = document.querySelectorAll(".product-item");
    const loadMoreBtn = document.getElementById("loadMoreBtn");

    let visibleProducts = 6;
    const productsPerClick = 3;

    // Initially show 6 products
    products.forEach((product, index) => {
        if (index < visibleProducts) {
            product.classList.add("show");
        }
    });

    // Load More button click
    loadMoreBtn.addEventListener("click", function () {

        let count = 0;

        for (let i = visibleProducts; i < products.length; i++) {

            if (count < productsPerClick) {
                products[i].classList.add("show");
                count++;
            } else {
                break;
            }

        }

        visibleProducts += count;

        // Hide button when all products are visible
        if (visibleProducts >= products.length) {
            loadMoreBtn.style.display = "none";
        }

    });

    // Hide button if products are 6 or less
    if (products.length <= visibleProducts) {
        loadMoreBtn.style.display = "none";
    }

});