let cart = JSON.parse(localStorage.getItem("cart")) || [];

function addToCart(name, price, image) {
  let existingProduct = cart.find((item) => item.name === name);

  if (existingProduct) {
    existingProduct.quantity++;
  } else {
    cart.push({
      name: name,
      price: price,
      image: image,
      quantity: 1,
    });
  }

  localStorage.setItem("cart", JSON.stringify(cart));

  alert(name + " added to cart successfully!");
}