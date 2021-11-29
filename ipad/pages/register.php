<?php include '../parts/head.php' ?>
<!-- This is register page-->
<div data-role="page" id="register"
     style='background-image: url("../../common/assets/images/christmas.jpg"); background-size: cover;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">


        <div class="back-box" style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.7);">
            <div class="header-title" style="color: white">
                <h3>Sign Up</h3>
                <img alt="page_icon" src="../../common/assets/images/icons/registration.png" height="35" width="35">
            </div>
            <form style="color: #1797F3;">
                <fieldset class="ui-grid-a">
                    <div class="ui-block-a" style="margin-left: 50px; width: 40%">
                        <input type="text" name="firstName" id="firstName" value="" placeholder="First Name">
                        <input type="text" name="username" id="username" value="" placeholder="Username">
                        <input type="password" name="password" id="password" value="" placeholder="Password">
                    </div>
                    <div class="ui-block-b" style="width: 20px"></div>
                    <div class="ui-block-c" style="width: 40%">
                        <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name">
                        <br/><br/>
                        <input style="margin-top: -5px" type="password" name="rePassword" id="rePassword" value=""
                               placeholder="Re-type Password">
                    </div>
                </fieldset><!-- /grid-a -->

                <button style="opacity: 1; width: 205px; margin: 25px auto auto auto">Sign Up</button>
                <center>
                    <a data-ajax="false" href="logIn.php"
                       style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                        Already have an account?
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