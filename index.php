<?php 
session_start(); 
require './auth.php';

$authText = isAuthorized() ? "Log Out" : "Log In";
$authLink = isAuthorized() ? "logout.php" : "login.php";
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>Головна сторінка — Проєкт</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container">
    
    <header>
        <div class="logo-block">
            <span>Brooklyn</span>
        </div>
        <menu class="desktop-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="<?php echo $authLink; ?>"><?php echo $authText; ?></a></li>
        </menu>
    </header>

    <main>
        <section class="testimonial">
            <h3>Testimonial</h3>
            <p>There are many variations of passages of Lorem Ipsum available</p>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p class="feedback">"Nulla efficitur nisl sit amet velit malesuada dapibus. Duis mollis felis turpis, nec semper odio convallis at."</p>
                        <p class="feedback_author">Esther Howard</p>
                        <p class="feedback_position">Managing Director, ABC company</p>
                    </div>
                    <div class="swiper-slide">
                        <p class="feedback">"Morbi ornare elit at libero suscipit porta. Матеріал виконано в межах лабораторного практикуму."</p>
                        <p class="feedback_author">Арсен</p>
                        <p class="feedback_position">Private Manager</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="form-section">
            <h3>Let's discuss your Project</h3>
            <div class="form-container">
                <form class="main-form">
                    <label for="name">Name*</label>
                    <input type="text" id="name">
                    
                    <label for="email">Email*</label>
                    <input type="text" id="email">
                    
                    <label for="location">Location</label>
                    <input type="text" id="location">
                    
                    <div class="double-input">
                        <div>
                            <label for="budget">Budget*</label>
                            <input type="text" id="budget">
                        </div>
                        <div>
                            <label for="subject">Subject*</label>
                            <input type="text" id="subject">
                        </div>
                    </div>
                    
                    <label for="message">Message*</label>
                    <textarea id="message"></textarea>
                    
                    <button class="submit-btn" type="submit">
                        <span>Submit</span>
                    </button>
                </form>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer_logo">
            <span>Brooklyn</span>
        </div>
        <p class="footer_copyright">&copy; 2026 Picto. All rights reserved.</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>