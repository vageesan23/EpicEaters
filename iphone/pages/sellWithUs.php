<?php include '../parts/head.php' ?>
<!-- This is sell with us page-->
<div data-role="page" id="sellWithUs" style='background-image: url("../../common/assets/images/christmas.jpg"); background-size: cover;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content" style='background-image: url("../common/assets/images/christmas.jpg"); background-size: cover;'>


        <div style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.7); border-radius:20px">

            <div style="color: white;" class="header-title">
                <h3>Booking</h3>
                <img alt="page_icon" src="../../common/assets/images/icons/booking.png" height="35" width="35">
            </div>
            <form>

                <input type="text" name="firstName" id="firstName" value="" placeholder="First Name">
                <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name">
                <input type="text" name="address" id="address" value="" placeholder="Address">
                <input type="text" name="nic" id="nic" value="" placeholder="NIC">
                <input type="text" name="username" id="username" value="" placeholder="Username">
                <input type="password" name="password" id="password" value="" placeholder="Password">
                <input type="password" name="rePassword" id="rePassword" value="" placeholder="Re-type password">

                <button style="opacity: 1">Sign Up</button>
                <center>
                    <a data-ajax="false" href="logIn.php" style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px;">
                        Already have an account?
                    </a>
                </center>
            </form>
        </div>


    </div>
    <div style="margin-bottom: 100px;">
        <?php include '../parts/footer.php' ?>
    </div>
</div>