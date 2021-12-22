<?php
$title = "Home";
$content = '  
<section class="offer" id="offer">
<h1 class="heading" style="text-align: center;" data-aos="zoom-in"> <span>Top Devices</span> </h1>
<div class="box-container">
    <div class="box">
        <div class="image" data-aos="fade-right">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1xKO3u_Efjih4yLxSsOzDiTOnRqsHwqSlJw&usqp=CAU" alt="">
        </div>
        <div class="info">
            <h3>Smart TV</h3>
        </div>
    </div>

    <div class="box">
            <div class="image" data-aos="fade-left">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeEejv1rJGJFwXqhSQFIf3QQeqwK-tg2TQeQ&usqp=CAU" alt="">
            </div>
            <div class="info">
                <h3>Game Console</h3>
            </div>
    </div>
    
    <div class="box">
       <div class="image" data-aos="fade-left">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGHD1pW4aV_cIKK4Y_goh90tSa5ylF1Y9z-w&usqp=CAU" alt="">
       </div>
          <div class="info">
             <h3>Smartphones</h3>
          </div> 
    </div>

    <div class="box">
       <div class="image" data-aos="fade-left">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWMPEt2WLWwwmUcgcZNB4nbnxr5hh_nZEKDQ&usqp=CAU" alt="">
       </div>
       <div class="info">
         <h3>Speakers</h3>
       </div>
    </div>

    <div class="box">
       <div class="image" data-aos="fade-left">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-G7cy8om0h8d1-t3ndQjxHf-k237YOk6zPw&usqp=CAU" alt="">
       </div>
       <div class="info">
         <h3>Headphones</h3>
       </div>
    </div>

    <section class="deal" id="deal">

    <h1 class="heading" style="text-align: center;" data-aos="zoom-in"> <span> Deal of the day </span> </h1>
    <div class="box-container">
        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-4YnqKZP13nbAs6oHG-AaQ2vYkcuR1ZuWoQ&usqp=CAU" alt="">
            <div class="content">
                <h3>Laptop</h3>
                <p>upto 25% off on your First purchase</p>
                <a href="#"><button class="btn">explore</button></a>
            </div>
        </div>
    
        <div class="box">
            <img src="data:image/jpeg;base64,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" alt="">
            <div class="content">
                <h3>new headphone</h3>
                <p>upto 20% off on your first purchase</p>
                <a href="#"><button class="btn">explore</button></a>
            </div>
        </div>

        <div class="box">
            <img src="data:image/jpeg;base64,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" alt="">
            <div class="content">
                <h3>Smart Phones</h3>
                <p>upto 50% off on first purchase</p>
                <a href="#"><button class="btn">explore</button></a>
            </div>
        </div>
    </div>
</section>

';


include 'site.php';
?>