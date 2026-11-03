
let cart = JSON.parse(localStorage.getItem("cart")) || [];

function updateCart() {

    localStorage.setItem("cart", JSON.stringify(cart));

    let totalItems = cart.reduce((total, item) => {
        return total + Number(item.quantity);
    }, 0);

    let cartCount = document.getElementById("cart-count");

    if (cartCount) {
        cartCount.innerText = totalItems > 99 ? "99+" : totalItems;
        cartCount.style.display = totalItems > 0 ? "flex" : "none";
    }
}

// Beautiful Toast Notification
function showNotification(name) {

    let oldToast = document.querySelector(".cart-toast");

    if (oldToast) {
        oldToast.remove();
    }

    let toast = document.createElement("div");

    toast.className = "cart-toast";

    toast.innerHTML = `
        <div class="toast-icon">✓</div>
        <div class="toast-content">
            <strong>Added to Cart!</strong>
            <span>${name} added successfully.</span>
        </div>
        <button class="toast-close" aria-label="Close">&times;</button>
    `;

    document.body.appendChild(toast);

    toast.querySelector(".toast-close").addEventListener("click", () => {
        toast.classList.add("hide-toast");
        setTimeout(() => toast.remove(), 300);
    });

    setTimeout(() => {
        toast.classList.add("hide-toast");

        setTimeout(() => toast.remove(), 300);

    }, 3000);
}

function addToCart(name, price, image) {

    let existingProduct = cart.find(item => item.name === name);

    if (existingProduct) {
        existingProduct.quantity++;
    } else {
        cart.push({
            name: name,
            price: Number(price),
            image: image,
            quantity: 1
        });
    }

    updateCart();

    showNotification(name);
}

document.addEventListener("DOMContentLoaded", updateCart);