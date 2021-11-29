<?php include '../parts/head.php' ?>
<!-- This is register page-->
<div data-role="page" id="register"
     style='background-image: url("../../common/assets/images/winestopper.jpg"); background-size: cover;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">

        <div class="header-title">
            <h3>Sign Up</h3>
            <img alt="page_icon" src="../../common/assets/images/icons/registration.png" height="35" width="35">
        </div>
        <div class="back-box" style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.5)">
            <form>

                <input type="text" name="firstName" id="firstName" value="" placeholder="First Name">
                <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name">
                <input type="text" name="username" id="username" value="" placeholder="Username">
                <input type="password" name="password" id="password" value="" placeholder="Password">
                <input type="password" name="rePassword" id="rePassword" value="" placeholder="Re-type Password">

                <button style="opacity: 1">Sign Up</button>
                <center>
                    <a data-ajax="false" href="logIn.php"
                       style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                        Already have an account?
                    </a>
                </center>
            </form>
        </div>


    </div>
    <div style="position: absolute; bottom: 0; width: 100%; margin-bottom: -50px;">
        <?php include '../parts/footer.php' ?>
    </div>
</div>