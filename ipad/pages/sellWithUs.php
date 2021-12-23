<?php include '../parts/head.php' ?>
<!-- This is sell with us page-->

<style>
    @media (max-width: 768px) {
        .ui-block-a {
            margin-left: 0px !important;
        }

        .ui-side {
            margin-left: 60px !important;
        }

        .header-title {
            margin-left: 270px !important;
        }
    }

    .header-title {
        margin-bottom: 30px !important;
        margin-left: 395px;
    }

    .back-box {
        margin-bottom: 0px !important;
    }

    .head-icon {
        position: relative;
        left: -215px;
        bottom: -6px;
    }
</style>

<div data-role="page" id="sellWithUs" style='background-image: url("../../common/assets/images/bg-1.png"); background-size: cover;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content" style='background-image: url("../common/assets/images/bg-1.png"); background-size: cover;'>

        <div class="back-box" style="padding: 20px 20px 50px 20px; background-color: rgba(0, 0, 0, 0.7);">
            <div class="header-title" style="color: white">
                <span class="iconify head-icon" alt="page_icon" data-icon="ps:promo" data-width="45" data-height="45"></span>
                <h3>Earn with Us</h3>
            </div>
            <form style="color: #1797F3;" onsubmit="required()">
                <fieldset class="ui-side" style="min-width: 100%;">
                    <div class="ui-block-a" style="margin-left: 80px; width: 40%">
                        <input type="text" name="firstName" id="firstName" value="" placeholder="First Name" required>
                        <input type="text" name="address" id="address" value="" placeholder="Address" required>
                        <input type="text" name="username" id="username" value="" placeholder="Email" required>
                        <input type="password" name="password" id="password" value="" placeholder="Password" required>
                    </div>
                    <div class="ui-block-b" style="width: 20px"></div>
                    <div class="ui-block-c" style="width: 40%">
                        <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name" required>
                        <input type="text" name="nic" id="nic" value="" placeholder="NIC" required>
                        <br /><br />
                        <div class="re-pw" style="margin: -1px;">
                            <input class="re-password" style="margin-top: -10px ;min-height:2.7em; position:relative; bottom:-4px" type="password" name="rePassword" id="rePassword" value="" placeholder="Re-type Password" required>
                        </div>
                    </div>
                </fieldset><!-- /grid-a -->

                <button style="opacity: 1; width: 205px; margin: 25px auto 4px auto">Register</button>
                <center>
                    <a data-ajax="false" href="logIn.php" style="text-decoration: none; font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                        Already have an account?
                    </a>
                </center>
            </form>
        </div>

    </div>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../parts/footer.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
</div>

<script>
    function required() {
        alert('Your Account has been Registered Successfully.\nWelcome to Epic Eaters!');
    }
</script>