<!-- <?php include '../parts/head.php' ?> -->
<style>
    .login-page {
        background-color: #fff;
        overflow: auto;
    }

    .login-main-content {
        display: flex;
        justify-content: center;
        margin-bottom: 0px;
    }

    .header-title {
        display: flex;
    }

    .header-title .page-icon {
        margin-top: 10px;
    }

    .header-title h3 {
        color: #000;
        margin-top: 5px;
    }

    .login-form {
        height: 620px;
        width: 600px
    }

    .login-form img {
        height: 250px;
        display: block;
        margin: 30px 0px 40px 110px;
    }

    .login-form .login-un {
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid #000;
        border-radius: 0px;
        text-align: center;
        font-size: 20px;
        margin-top: 50px;
        margin-bottom: 50px;
        background-color: transparent;
    }

    .login-form .login-pwd {
        border: none;
        border-bottom: 2px solid #000;
        border-radius: 0px;
        text-align: center;
        font-size: 20px;
        margin-bottom: 80px;
        background-color: transparent;
    }

    .ui-input-text {
        border: none;
        width: 850px;
        margin-left: -120px;
    }

    .ui-corner-all {
        border-radius: 0px;
    }

    .ui-shadow-inset {
        box-shadow: none;
    }

    .sign-in-btn button {
        opacity: 1;
        border-radius: 30px;
        width: 250px;
        font-size: 18px;
        letter-spacing: 1px;
        margin: 25px auto auto auto;
        text-decoration: none;
    }

    .account-create {
        font-weight: 300;
        letter-spacing: 1px;
        margin-top: 10px;
        color: #000 !important;
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .login-form {
            height: 800px;
            width: 900px
        }

        .login-form img {
            height: 300px;
            display: block;
            margin: 70px 0px 100px 210px;
        }

        .ui-input-text {
            border: none;
            width: 650px;
            margin-left: 125px;
        }

        .login-form .login-un {
            margin-top: 120px;
            margin-bottom: 80px;
        }
    }
</style>
<!-- This is login page-->
<div class="login-page" data-role="page" id="login">

    <div role="main" class="ui-content login-main-content">


        <div class="" style="background-color: #fff;">
            <div class="header-title">
                <span class="iconify page-icon" alt="page_icon" data-icon="ri:login-circle-fill" data-width="50"
                    data-height="50"></span>
                <h3>Login</h3>
            </div>
            <form class="login-form">

                <img src="../../common/assets/images/logo_footer_login.png" alt="login-img">
                <input type="text" name="username" id="username" value="" placeholder="Username/ E-mail"
                    class="login-un">
                <input type="password" name="password" id="password" value="" placeholder="Password" class="login-pwd">

                <a class="sign-in-btn" href="home.php">
                    <button>Sign In</button>
                </a>
                <center>
                    <a data-ajax="false" href="register.php" class="account-create">
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