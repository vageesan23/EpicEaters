<?php include '../parts/head.php' ?>
<style>
    .signup-page {
        background: #fff;
    }

    .signup-form {
        height: 620px;
    }

    .signout-img {
        height: 300px;
        margin-left: 360px;
    }

    .signup-form .ui-grid-a .ui-block-a {
        margin-left: 40px;
        width: 45%;
        text-align: center; 
    }

    .signup-form .ui-grid-a .ui-block-b {
        width: 25px;
    }

    .signup-form .ui-grid-a .ui-block-c {
        width: 45%;
    }

    .ui-input-text {
        border: none;
    }

    .ui-corner-all {
        border-radius: 0px;
    }

    .ui-shadow-inset {
        box-shadow: none;
    }

    .signup-form .ui-grid-a .form-text {
        text-align: center;
        border-bottom: 2px solid #000;
        border-radius: 0px;
        margin-bottom: 20px;
    }

    .have-account {
        font-weight: 100;
        color: #000 !important;
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        margin-top: 10px;
    }

    @media (max-width: 768px) {
        .signup-form {
            height: 780px;
        }

        .signout-img {
            height: 400px;
            margin-left: 180px;
        }

        .signup-form .ui-grid-a .form-text {
            text-align: center;
            border-bottom: 2px solid #000;
            font-size: 18px;
            border-radius: 0px;
            margin-bottom: 30px;
        }
    }

</style>
<!-- This is register page-->
<div data-role="page" id="register" class="signup-page">

    <div role="main" class="ui-content">


        <div class="header-title" style="display: flex;">
            <span class="iconify" alt="page_icon" data-icon="ri:login-circle-line" data-width="50" data-height="50"></span>
            <h3>Sign Up</h3>
        </div>
        <form class="signup-form">
            <img src="../../common/assets/images/signout-img.png" alt="login-img" class="signout-img">
            <fieldset class="ui-grid-a">
                <div class="ui-block-a" class="form-left-side">
                    <input type="text" name="firstName" id="firstName" value="" placeholder="First Name" class="form-text">
                    <input type="email" name="email" id="email" value="" placeholder="E-Mail" class="form-text">
                    <input type="password" name="password" id="password" value="" placeholder="Password" class="form-text">
                    <input type="text" name="phoneNo" id="phoneNo" value="" placeholder="Phone No" class="form-text">
                </div>
                <div class="ui-block-b"></div>
                <div class="ui-block-c">
                    <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name" class="form-text">
                    <input type="text" name="username" id="username" value="" placeholder="Username" class="form-text">
                    <input type="password" name="rePassword" id="rePassword" value="" class="form-text" placeholder="Re-type Password">
                </div>
            </fieldset><!-- /grid-a -->

            <a href="home.php">
                <button style="opacity: 1; width: 205px; margin: 25px auto auto auto">Sign Up</button>
            </a>
            <center>
                <a data-ajax="false" href="logIn.php" class="have-account">
                    Already have an account?
                </a>
            </center>
        </form>


    </div>
</div>