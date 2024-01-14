<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mens.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300&display=swap" rel="stylesheet">
    <title>Men Apparel</title>
</head>

<body>
    <div class="nav-container">

        <ul class="navigations">
            <h1 class="symbol"><a href="Raku.php">楽</a></h1>
            <li class="item item-1"><a href="#">Men</a></li>
            <li class="item item-1"><a href="contacts.php">Contacts</a></li>
            <li class="item item-1"><a href="Raku.php#about-us">About us</a></li>
        </ul>

        <h1><a href="Raku.php" class="logo">R A K U</a></h1>

        <ul class="icon-navigations">

            <li class="icon-1"><a href="#"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </a></li>
    </div>

    <!-- Content -->

    <div class="background">
        <img class="model" src="img/menbackground.png" alt="">
    </div>

    <section class="sec">
        <div class="products">

            <div class="sec">

                <h1 style="margin-bottom: 20px;">Men's Apparel</h1>
                <hr class="line" style="width: 96%; border: 1px solid #000; margin-bottom: 50px;">


                <!-- Products CLOTHING START -->
                <div class="products">

                    <div class="card">
                        <div class="img"><img src="img/clothing1.png" alt=""></div>
                        <div class="desc">Men</div>
                        <div class="title">Men's Henley Shirt Casual Long Sleeve</div>
                        <div class="box">
                            <div class="price">₱1,099</div>
                            <button class="btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img"><img src="img/clothing2.png" alt=""></div>
                        <div class="desc">Men</div>
                        <div class="title">Men's Oversized T-Shirt</div>
                        <div class="box">
                            <div class="price">₱369</div>
                            <button class="btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img"><img src="img/clothing3.png" alt=""></div>
                        <div class="desc">Men</div>
                        <div class="title">Men's Woven Cotton Linen Casual Short Sleeve Shirt </div>
                        <div class="box">
                            <div class="price">₱399</div>
                            <button class="btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img"><img src="img/clothing4.png" alt=""></div>
                        <div class="desc">Men</div>
                        <div class="title">Men's Vintage Crochet Shirt</div>
                        <div class="box">
                            <div class="price">₱399</div>
                            <button class="btn">Buy Now</button>
                        </div>
                    </div>

                </div>

                <!-- Products CLOTHING END -->

                <!-- Products Pants Start -->
                <div class="products">

                    <div class="card">
                        <div class="img"><img src="img/pants1.png" alt=""></div>
                        <div class="desc">Men</div>
                        <div class="title">Men Elastic Waist Solid Slant Pocket Trousers</div>
                        <div class="box">
                            <div class="price">₱799 </div>
                            <button class="btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img"><img src="img/pants2.png" alt=""></div>
                        <div class="desc">Men</div>
                        <div class="title">Men Drawstring Waist Slant Pocket Shorts</div>
                        <div class="box">
                            <div class="price">₱799</div>
                            <button class="btn">Buy Now</button>
                        </div>
                    </div>


                    <div class="card">
                        <div class="img"><img src="img/pants3.png" alt=""></div>
                        <div class="desc">Men</div>
                        <div class="title">Mens Cotton Solid Color Loose Casual, Harem Pants </div>
                        <div class="box">
                            <div class="price">₱699 </div>
                            <button class="btn">Buy Now</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="img"><img src="img/shorts1.png" alt=""></div>
                        <div class="desc">Men</div>
                        <div class="title">Men Letter Patched Detail Drawstring Waist Shorts</div>
                        <div class="box">
                            <div class="price">₱359 </div>
                            <button class="btn">Buy Now</button>
                        </div>
                    </div>
                </div>
                <!-- Products Pants & Shorts End -->

    </section>

    <!-- Javascript -->

    <div id="checkoutModal">
        <h2>Confirm Purchase</h2>
        <ul id="selectedProducts"></ul>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" min="1" value="1">

        <label for="address">Address:</label>
        <input type="text" id="address" placeholder="Enter your address" required>

        <label for="paymentMethod">Payment Method:</label>
        <select id="paymentMethod">
            <option value="creditCard">Credit Card</option>
            <option value="cashOnDelivery">Cash on Delivery</option>
            <option value="gcash">GCash</option>
        </select>

        <button id="confirmPurchaseBtn">Confirm Purchase</button>
    </div>

    <div id="confirmationMessage">
        <h2>Thank You for Your Purchase!</h2>
        <p id="purchaseDetails"></p>
        <button id="continueShoppingAfterPurchaseBtn">Continue Shopping</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buyButtons = document.querySelectorAll(".btn");
            const selectedProducts = [];
            const checkoutModal = document.getElementById("checkoutModal");
            const selectedProductsList = document.getElementById("selectedProducts");
            const confirmPurchaseBtn = document.getElementById("confirmPurchaseBtn");
            const quantityInput = document.getElementById("quantity");
            const addressInput = document.getElementById("address");
            const paymentMethodSelect = document.getElementById("paymentMethod");
            const confirmationMessage = document.getElementById("confirmationMessage");
            const purchaseDetails = document.getElementById("purchaseDetails");
            const continueShoppingAfterPurchaseBtn = document.getElementById("continueShoppingAfterPurchaseBtn");

            function handleButtonClick(event) {
                const card = event.target.closest(".card");
                const title = card.querySelector(".title").innerText;
                const price = card.querySelector(".price").innerText;

                selectedProducts.push({
                    title,
                    price
                });
                updateCheckout();
            }

            function updateCheckout() {
                selectedProductsList.innerHTML = "";

                selectedProducts.forEach(product => {
                    const listItem = document.createElement("li");
                    listItem.textContent = `${product.title} - ${product.price}`;
                    selectedProductsList.appendChild(listItem);
                });

                checkoutModal.style.display = "block";
            }

            function confirmPurchase() {
                const quantity = quantityInput.value;
                const address = addressInput.value;
                const paymentMethod = paymentMethodSelect.value;

                // Validate address
                if (!address.trim()) {
                    alert("Please enter your address.");
                    return;
                }

                // Calculate the total purchase amount
                const totalAmount = selectedProducts.reduce((total, product) => {
                    return total + parseFloat(product.price.replace('₱', '')) * quantity;
                }, 0);

                // Display the confirmation message
                purchaseDetails.innerHTML = `
                Quantity: ${quantity} <br>
                Address: ${address} <br>
                Payment Method: ${paymentMethod} <br>
                Total Purchase: ₱${totalAmount.toFixed(2)}
            `;

                confirmationMessage.style.display = "block";
                resetCheckout();
            }

            function resetCheckout() {
                selectedProducts.length = 0;
                quantityInput.value = "1";
                addressInput.value = "";
                paymentMethodSelect.value = "creditCard";
                updateCheckout();
                checkoutModal.style.display = "none";
            }

            function continueShopping() {
                confirmationMessage.style.display = "none";
            }

            buyButtons.forEach(button => {
                button.addEventListener("click", handleButtonClick);
            });

            confirmPurchaseBtn.addEventListener("click", confirmPurchase);
            continueShoppingAfterPurchaseBtn.addEventListener("click", continueShopping);
        });
    </script>

    <!-- Javascript -->

    <!-- footer -->

    <footer>
        <div class="footer-section">
            <div class="men">
                <h3>Men</h3>
                <a href="#">EXPLORE MEN’S</a>
                <a href="#">CLOTHING</a>

            </div>


            <div class="explore">
                <h3>Explore</h3>
                <a href="#">OUR STORES</a>
                <a href="Raku.php#about-us">ABOUT US</a>
            </div>

            <div class="support">
                <h3>Support</h3>
                <a href="#">FAQ</a>
                <a href="#">ACCESABILITY</a>
                <a href="contacts.php">CONTACTS</a>
            </div>

            <div class="social-icons">
                <h3>Connect</h3>
                <a href="#">INSTAGRAM</a>
                <a href="#">FACEBOOK</a>
                <a href="#">TIKTOK</a>
                <a href="#">TWITTER</a>
            </div>
        </div>
    </footer>

    <div class="copyright">
        <p>© 2023 ALL RIGHTS RESERVED | <a href="#">PRIVACY</a> | <a href="#">TERMS OF USE</a></p>
    </div>
</body>

</html>