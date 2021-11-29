<?php include '../parts/head.php' ?>
<!-- This is login page-->
<div data-role="page" id="login"
     style='background-image: url("../../common/assets/images/baskets.jpg"); background-size: cover;'>
    <?php include '../parts/header.php' ?>

    <div role="main" style="display: flex; justify-content: center;" class="ui-content">


        <div class="back-box"
             style="padding: 50px 20px; width: 600px; background-color: rgba(0, 0, 0, 0.7); margin-top: 100px;">
            <div class="header-title" style="color: white">
                <h3>Login</h3>
                <img alt="page_icon" src="../../common/assets/images/icons/login.png" height="35" width="35">
            </div>
            <form style="color: #1797F3;">

                <input type="text" name="username" id="username" value="" placeholder="Username">
                <input type="password" name="password" id="password" value="" placeholder="Password">

                <a href="home.php">
                    <button style="opacity: 1; width: 205px; margin: 25px auto auto auto;">Sign In</button>
                </a>
                <center>
                    <a data-ajax="false" href="register.php"
                       style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                        Don't have an account?
                    </a>
                </center>
            </form>
        </div>
    </div>

    <!-- Footer-->
    <div class="footer_main-no-navbar">
        <p>
            © 2020 Made In Sri Lanka.</br>
            Designed & Developed by Team Idea Infinite
        </p>
    </div>

</div>