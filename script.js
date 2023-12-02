// JavaScript code to handle shopping cart functionality

const cartItems = document.getElementById("cart-items");
const totalAmount = document.getElementById("total-amount");

// Function to add an item to the cart
function addItemToCart(productName, price) {
  const cartItem = document.createElement("li");
  cartItem.className = "cart-item";
  cartItem.innerHTML = `${productName} - $${price.toFixed(
    2
  )} <button class="remove-btn">Remove</button>`;
  cartItems.appendChild(cartItem);

  updateTotalAmount(price);
}

// Function to remove an item from the cart
function removeItemFromCart(item) {
  const price = parseFloat(item.innerText.split("$")[1]);
  cartItems.removeChild(item);

  updateTotalAmount(-price);
}

// Function to update the total amount in the cart
function updateTotalAmount(price) {
  const currentTotal = parseFloat(totalAmount.innerText);
  const newTotal = currentTotal + price;
  totalAmount.innerText = newTotal.toFixed(2);
}

// Sample items (You can add more items to the cart)
addItemToCart("Product 1", 10.99);
addItemToCart("Product 2", 15.49);
addItemToCart("Product 3", 5.99);

// Event delegation to handle remove button clicks
cartItems.addEventListener("click", (event) => {
  if (event.target.classList.contains("remove-btn")) {
    const cartItem = event.target.parentElement;
    removeItemFromCart(cartItem);
  }
});
