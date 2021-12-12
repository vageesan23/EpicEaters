<?php include '../parts/head.php' ?>
<!-- This is sell with us page-->

<style>
    @media (max-width: 376px) {
        .header-title {
            margin-left: 80px !important;
            margin-bottom: 25px !important;
            margin-top: -17px !important;
        }

        .head-icon {
            position: relative;
            right: 215px !important;
            bottom: -6px !important;
        }
    }

    .header-title {
        margin-left: 290px;
        margin-bottom: 25px !important;
        margin-top: -17px;
    }

    .head-icon {
        position: relative;
        right: 215px !important;
        bottom: -6px !important;
    }
</style>

<div data-role="page" id="sellWithUs" style='background-image: url("../../common/assets/images/bg-1.png"); background-size: cover;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content" style='background-image: url("../common/assets/images/christmas.png"); background-size: cover;'>


        <div style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.7); border-radius:20px">

            <div class="header-title" style="color: white">
                <span class="iconify head-icon" alt="page_icon" data-icon="ps:promo" data-width="45" data-height="45"></span>
                <h3>Earn with Us</h3>
            </div>
            <form onsubmit="required()">

                <input type="text" name="firstName" id="firstName" value="" placeholder="First Name" required>
                <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name" required>
                <input type="text" name="address" id="address" value="" placeholder="Address" required>
                <input type="text" name="nic" id="nic" value="" placeholder="NIC" required>
                <input type="text" name="username" id="username" value="" placeholder="Email" required>
                <input type="password" name="password" id="password" value="" placeholder="Password" required>
                <input type="password" name="rePassword" id="rePassword" value="" placeholder="Re-type password" required>

                <button style="opacity: 1; margin-top:30px;">Sign Up</button>
                <center>
                    <a data-ajax="false" href="logIn.php" style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px; text-decoration:none;">
                        Already have an account?
                    </a>
                </center>
            </form>
        </div>
    </div>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</div>

<script>
    function required() {
        alert('Your Account has been Registered Successfully.\nWelcome to Epic Eaters!');
    }
</script>