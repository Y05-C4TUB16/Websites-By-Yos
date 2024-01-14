<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contacts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Men Apparel</title>
</head>

<body>
    <div class="nav-container">
        <ul class="navigations">
            <h1 class="symbol"><a href="Raku.php">楽</a></h1>
            <li class="item item-1"><a href="mens.php">EXPLORE</a></li>
            <li class="item item-1"><a href="contacts.php">CONTACTS</a></li>
            <li class="item item-1"><a href="Raku.php#about-us">ABOUT US</a></li>
        </ul>

        <h1><a href="Raku.php" class="logo">R A K U</a></h1>

        <ul class="icon-navigations">
            <li class="icon-1"><a href="Search.php"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </a></li>
    </div>

    <!-- Content -->
    
    <div class="contact-box">
        <h2>Contact Us</h2>
        <p>If you have any questions or concerns, feel free to reach out to us.</p>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="footer-section">
            <div class="men">
                <h3>Men</h3>
                <a href="#">EXPLORE MEN’S</a>
                <a href="#">CLOTHING</a>
                <a href="#">SNOW</a>
            </div>

            <div class="explore">
                <h3>Explore</h3>
                <a href="#">OUR STORES</a>
                <a href="#">ABOUT</a>
            </div>

            <div class="support">
                <h3>Support</h3>
                <a href="#">FAQ</a>
                <a href="#">ACCESSIBILITY</a>
                <a href="#">CONTACTS</a>
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