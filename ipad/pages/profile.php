<?php include '../parts/head.php' ?>
<!-- This is profile page-->
<div data-role="page" id="profile"
     style='background-image: url("../../common/assets/images/profile-back.jpg");
     background-size: cover; background-position: bottom;'>

    <?php include '../parts/header.php' ?>
    <div role="main" class="ui-content">
        <div class="back-box" style="padding: 50px 20px; background-color: rgba(1, 1, 1, 0.7);">

            <div class="header-title" style="color: white">
                <h3>Profile</h3>
                <img alt="page_icon" src="../../common/assets/images/icons/registration.png" height="35" width="35">
            </div>

            <div class="back-box"
                 style="padding: 50px 20px; background-color: rgba(255, 255, 255, 0.7); width: 50%; margin: auto;">
                <center>
                    <img alt="page_icon" src="../../common/assets/images/icons/user.png" height="100px" width="100px">
                </center>
                <table style="width: 100%; margin-left: 15%;color: black;font-weight: bolder;">
                    <tr>
                        <td>Username</td>
                        <td>Smith</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>Smith@gmail.com</td>
                    </tr>
                <tr>
                    <td>First Name</td>
                    <td>Smith</td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>Jackson</td>
                </tr>
            </table>
             </div>

             <div style="display: flex; padding-top: 20px; margin: 10px auto auto; width: fit-content;">
                 <a data-ajax="false" href="orderHistory.php">
                     <button style="opacity: 1; font-size: 14px;">Order History</button>
                 </a>
                 <div style="width: 20px"></div>
                 <a data-rel="popup" data-position-to="window" href="#editprofile">
                     <button style="opacity: 1; font-size: 14px;">Edit Details</button>
                 </a>
             </div>
         </div>
    </div>
    <?php include '../popups/editProfile.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
    </body>
    </html>
