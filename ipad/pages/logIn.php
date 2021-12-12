<?php include '../parts/head.php' ?>
<!-- This is login page-->
<div data-role="page" id="login"
     style='background-color: #fff; overflow: hidden;'>
    <!-- <?php include '../parts/header.php' ?> -->

    <div role="main" style="display: flex; justify-content: center; margin-bottom: 0px" class="ui-content">


        <div class="back-box">
            <div class="header-title" style="color: white">
                <img alt="page_icon" src="../../common/assets/images/icons/login.png" height="35" width="35">
                <h3 style="color: #000;">Login</h3>
            </div>
            <form style="color: #1797F3; height: 750px; width: 600px">
                
                <img src="../../ipad/images/logo(footer).png" alt="login-img" style="height: 300px; display: block; margin: auto; background-color: #000">
                <input type="text" name="username" id="username" value="" placeholder="Username/ E-mail" style="box-sizing: border-box; border: none; border-bottom: 2px solid #000; border-radius: 0px; text-align: center; margin-top: 50px; margin-bottom: 50px;">
                <input type="password" name="password" id="password" value="" placeholder="Password" style="box-sizing: border-box; border: none; border-bottom: 2px solid #000; border-radius: 0px; text-align: center; margin-bottom: 50px;">
                <input type="checkbox" value="rememberMe" id="rememberMe">
                <label for="rememberMe">Remember Me</label>

                <a href="home.php">
                    <button style="opacity: 1; width: 205px; margin: 25px auto auto auto;">Sign In</button>
                </a>
                <center>
                    <a data-ajax="false" href="register.php"
                       style="font-weight: 100; color: #000; font-family: 'Poppins', sans-serif; font-size: 12px;">
                        Don't have an account?
                    </a>
                </center>
            </form>
        </div>
    </div>

    <!-- Footer-->
    <!-- <div class="footer_main-no-navbar">
        <p>
            © 2020 Made In Sri Lanka.</br>
            Designed & Developed by Team Idea Infinite
        </p>
    </div> -->

</div>