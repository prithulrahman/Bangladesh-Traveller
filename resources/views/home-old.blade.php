<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BangladeshTravellers.com</title>
  <link rel="stylesheet" href="{{ asset("css/styles.css") }}" />
</head>
<body>
    <!-- <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    </style> -->
    <nav class="navbar">
        <div class="navbar-left">
            <span class="logo-text">Bangladesh Travellers</span>
            <img src="{{ asset("images/BDTravellers.png") }}" alt="Logo" class="logo-img">
        </div>
        <div class="navbar-center">
            <a href="index.html">Home</a>
            <a href="#">Historical Places</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Services</a>
        </div>
        <div class="navbar-right">
            <a href="Signup.html"><button>Signup</button></a>
            <a href="Registration.html"><button>Register</button></a>

                    <!-- Reward Points Counter -->
            <div class="reward-widget">
                <span class="reward-icon">⭐</span>
                <span class="reward-points" id="rewardPoints">0</span>
                <span class="reward-label">Points</span>
            </div>
        
                <!-- User Profile Logo -->
            <div class="user-profile">
                    <img src="{{ asset("images/Sachin.jpg") }}" alt="User Profile" class="profile-img" id="profileImg" />
                <div class="profile-dropdown" id="profileDropdown">
                    <a href="Profile.html" class="dropdown-item">View Profile</a>
                    <a href="#settings" class="dropdown-item">Settings</a>
                    <a href="#logout" class="dropdown-item logout">Logout</a>
                </div>
            </div>

        </div>
    </nav>

    <section class="page" id="page1">
        <!-- <img src="images/person-traveling-enjoying-their-vacation.jpg" alt="Background" class="bg-img"> -->
        <p><blockquote>Welcome to BangladeshTravellers.com</blockquote></p>
        <h1>Explore Bangladesh</h1>
        <div class="options">
            <button class="option-btn">District</button>
            <button class="option-btn">Region</button>
        </div>
    </section>


    <footer class="footer-container">
        <!-- Left Section: Logo -->
        <div class="footer-section footer-logo">
            <div class="footer-logo-text">BangladeshTravellers</div>
        </div>

        <!-- Middle Section: Contact Info -->
        <div class="footer-section footer-contact">
            <div class="contact-item">
                <span class="contact-icon">📞</span>
                <span class="contact-text">+8801705712769</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">🏠</span>
                <span class="contact-text">Sector #07, Road #02, Uttara, Dhaka</span>
            </div>
            <div class="contact-item">
                <span class="contact-icon">✉️</span>
                <span class="contact-text">jarifrahman444@gmail.com</span>
            </div>
        </div>

        <!-- Right Section: Important Links -->
        <div class="footer-section footer-links">
            <ul class="footer-link-list">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#howitworks">How it Works</a></li>
                <li><a href="#privacy">Privacy Policy</a></li>
            </ul>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright">
            <p>&copy; 2025 BangladeshTravellers.com | All Rights Reserved</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>