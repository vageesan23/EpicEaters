<?php include '../parts/head.php' ?>
<style>
    .login-iPhone {
        background: #fff;
    }

    .header-title {
        display: flex;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .header-title .page-icon {
        margin-top: 15px;
    }

    .login-form {
        height: 740px;
    }

    .login-form img {
        height: 250px;
        display: block;
        margin: 30px 0px 60px 200px;
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
        margin-bottom: 100px;
    }

    .ui-input-text {
        border: none;
        width: 650px;
        margin-left: 65px;
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

    @media (max-width: 400px) {
        .login-form {
            height: 580px !important;
        }

        .login-form img {
            height: 220px;
            display: block;
            margin: 30px 0px 60px 0px;
        }

        .ui-input-text {
            border: none;
            width: 320px;
            margin-left: 15px;
        }

        .login-form .login-un {
            font-size: 14px;
        }

        .login-form .login-pwd {
            font-size: 14px;
            margin-bottom: 70px;
        }

        .sign-in-btn button {
            font-size: 16px;
            width: 150px;
            height: 45px;
        }

        .account-create {
            font-size: 10px;
            letter-spacing: 0px;
        }
    }
</style>


<!-- This is login page-->
<div data-role="page" id="login">

    <div role="main" class="ui-content login-iPhone">

        <div class="header-title">
            <span class="iconify page-icon" alt="page_icon" data-icon="ri:login-circle-fill" data-width="30"
                data-height="30"></span>
            <h3>Login</h3>
        </div>
        <form class="login-form">

            <img src="../../common/assets/images/logo_footer_login.png" alt="login-img">
            <input type="text" name="username" id="username" value="" placeholder="Username" class="login-un">
            <input type="password" name="password" id="password" value="" placeholder="Password" class="login-pwd">

            <a href="home.php" class="sign-in-btn">
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