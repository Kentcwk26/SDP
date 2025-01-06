<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Index</title>
    <link rel="stylesheet" type="text/css" href="css/style5.css">
    <link rel="icon" type="image/x-icon" href="png/Icon.png">
</head>
<style>
    * {box-sizing:border-box}
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }
    .mySlides {
        display: none;
    }
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    .active, .dot:hover {
        background-color: #717171;
    }
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }
    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }
    #content{
        float: left;
        overflow: hidden;
        text-align: left;
        padding-top: 20px;
        padding-left: 20px;
        width: 450px;
        height: 300px;
    }
    #slider{
        float: right;
        width: 900px;
        height: 600px;
        margin-top: 20px;
        margin-right: 10px;
    }
    #search{
        float: right;
        width: 1480px;
        height: 60px;
        margin-top: 20px;
        margin-right: 10px;
    }
    .box{
        position: relative;
        background-color: black;
        width: 600px;
        height: 300px;
        color: white;
        padding: 140px 80px;
        font-size: 25px;
        font-weight: bold;
        text-align: center;
    }
    input[type=button]{
        width: 140px;
        height: 40px;
        margin-left: 4px;
        padding: 10px;
        text-align: center; 
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
    }
    input[type=button]:active, button:active {
        box-shadow: 0 5px black;
        transform: translateY(2px);
    }
    .text {
        color: black;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .box:hover .overlay {
        transform: scale(1);
    }
    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #B2BD8C;
        overflow: hidden;
        width: 100%;
        height: 100%;
        transform: scale(0);
        transition: .3s ease;
        opacity: 0.9;
    }
</style>
<body style="background-color: #fae094;">
<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiM2MmUzNjgiLCJ3ZWIiOnsiYm90SWQiOiI2NDU3MzFhMGU5YzUyZjAwMjg4OWQwNGIiLCJ0aGVtZSI6IiM2MmUzNjgifX0=" async defer></script>
    <?php
        include "header4.php";
    ?>
    <div id="content">
        <h2 style="color:green; font-size: 26px;">Who are we and What we are doing?</h2>
        <h3 style="font-size: 20px; text-align: left; width: 400px; height: 80px;">We are an organization who have provide many kinds of services such as treatments, pet grooming, etc.....</h3>
        <input type="button" value="Read More...." onclick="window.open('aboutus2.php','_SELF')">
    </div>
    <div id="slider">
        <div class="mySlides fade">
            <img src="png/pets-3715733_1920-1024x682.jpg" style="width: 100%; height: 600px;">
        </div>
        <div class="mySlides fade">
            <img src="png/grooming.jpg" style="width: 100%; height: 600px;">
        </div>
        <div class="mySlides fade">
            <img src="png\IMG_5457.jpg" style="width: 100%; height: 600px;">
        </div>
    </div>
    <div id="search" style="margin-bottom: 40px;">
        <form action="search.php" method="POST">
            <input type="text" name="search" placeholder="Search" style="width: 1300px; height: 60px; border-radius: 100px; padding-left: 20px; margin-left: 20px; margin-top: 20px; font-size: 20px;">
            <input type="submit" name="submit" value="Search" style="width: 100px; height: 50px; border-radius: 100px; margin-left: 20px; margin-top: 20px; font-size: 20px; cursor: pointer;">
        </form>
    </div>
    <div style="display:flex; justify-content: center; width: 1500px; height: 400px;">
        <div class="box" style="background-image: url('img/groom.jpg'); background-size: cover; margin: 40px; cursor: pointer;">
            <a href="customer_add.php"><div class="overlay">
                <div class="text"><br>Pet Grooming<br><br>Everyday except weekdays, starting from 9am to 9pm</div>
            </div></a>
        </div>
        <div class="box" style="background-image: url('img/vet.jpg'); background-size: cover; margin: 40px; cursor: pointer;">
            <a href="customer_add.php"><div class="overlay">
                <div class="text"><br>Pet Medical Services<br><br>Everyday except weekdays, starting from 9am to 9pm</div>
            </div></a>
        </div>
    </div>
    <div style="display:flex; justify-content: center; width: 1500px; height: 400px;">
        <div class="box" style="background-image: url('img/board.jpg'); background-size: cover; margin: 40px; cursor: pointer;">
            <a href="customer_add.php"><div class="overlay">
                <div class="text"><br>Pet Sitting<br><br>Everyday except weekdays, starting from 9am to 9pm</div>
            </div></a>
        </div>
        <div class="box" style="background-image: url('img/IMG_5457.jpg'); background-size: cover; margin: 40px; cursor: pointer;">
            <a href="customer_add.php"><div class="overlay">
                <div class="text"><br><br>Overnight Pet Care (1 day)</div>
            </div></a>
        </div>
    </div>
    <div style="display:flex; justify-content: center; width: 1500px; height: 400px;">
        <div class="box" style="background-image: url('png/products.jpg'); background-size: cover; cursor: pointer;">
            <a href="customer_product.php"><div class="overlay">
                <div class="text"><br><br>Products</div>
            </div></a>
        </div>
    </div>
    <div style="display: flex; justify-content: center; padding: 40px">
        <button onclick="window.open('customer_add.php','_SELF')" style="cursor: pointer; width: 220px; font-weight: bold; height: 40px; border-radius: 50px; background-color: #A3825C; color: white; margin-right: 20px; margin-bottom: 20px">Make Appointment Now</button>
    </div>
    <div style="clear:both;"></div>
    <footer><?php include('footer1.php') ?></footer>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        function currentSlide(n) {
        showSlides(slideIndex = n);
        }
        showSlides();
        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 10000); 
        }
    </script>
</body>
</html>