<?php

include("config.php");

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../BOOKSTORE/css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">
    <div class="flex">
        <div class="image">
            <img src="../BOOKSTORE/images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>why choose us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, eum cupiditate ut possimus incidunt vero? Reprehenderit quis repellendus distinctio. Aliquid eum nulla facilis dolore debitis consequatur excepturi doloremque nisi?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, eum cupiditate ut possimus incidunt vero? Reprehenderit quis repellendus distinctio. Aliquid eum nulla facilis dolore debitis consequatur excepturi doloremque nisi?</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>
    </div>
</section>

<section class="home-contact">
    <div class="content">
        <h3>Have any questions?</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Doloribus, voluptatum! Quisquam, cumque.</p>
        <a href="contact.php" class="white-btn">Contact Us</a>
    </div>
</section>

<section class="reviews">

    <h1 class="title">customer's review</h1>

    <div class="box-container">

        <div class="box">
            <img src="../BOOKSTORE/images/pic-1.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Doloribus, voluptatum! Quisquam, cumque.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/pic-2.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Doloribus, voluptatum! Quisquam, cumque.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sarah Dean</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/pic-3.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Doloribus, voluptatum! Quisquam, cumque.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ransomees Joa</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/pic-4.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Doloribus, voluptatum! Quisquam, cumque.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ransomees Joa</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/pic-5.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Doloribus, voluptatum! Quisquam, cumque.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ransomees Joa</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/pic-6.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, voluptatum! Quisquam, cumque. Doloribus, voluptatum! Quisquam, cumque.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ransomees Joa</h3>
        </div>
</section>

<section class="authors">

    <h1 class="title">greate authors</h1>

    <div class="box-container">

        <div class="box">
            <img src="../BOOKSTORE/images/author-1.jpg" alt="">
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/author-2.jpg" alt="">
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/author-3.jpg" alt="">
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/author-4.jpg" alt="">
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/author-5.jpg" alt="">
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>

        <div class="box">
            <img src="../BOOKSTORE/images/author-6.jpg" alt="">
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
            <h3>John Doe</h3>
        </div>
    </div>
</section>




















<?php include 'footer.php'; ?>
<script src="../BOOKSTORE/js/script.js"></script>
</body>
</html>