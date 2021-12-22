<?php
$title = "Login";
$content2 = '

    <section class="login" id="login">
        <h1 class="heading" style="text-align: center;" data-aos="zoom-in"> <span>Login </span> </h1><br>
    <div class="container" data-aos="zoom-out">
        <form action="#">
          <div class="input-box">
            <input type="text" placeholder="Enter Email" required>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Enter Password" required>
          </div>
          <div class="input-box button">
            <input type="submit" name="" value="Submit">
          </div>
        </form><br>
          <div class="option">or Connect With Social Media</div>
          <div class="google">
            <a href="#"><i class="fab fa-google-plus-g"></i>Sign in With Google</a>
          </div>
          <div class="facebook">
            <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
          </div>
      </div><br><br>
</section> 

';
include 'site.php';
?>