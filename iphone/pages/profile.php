<?php include '../parts/head.php' ?>
<!-- This is profile page-->
<div data-role="page" id="profile"
     style='background-image: url("../common/assets/images/profile-back.jpg");
     background-size: cover; background-position: bottom;'>

    <?php include '../parts/header.php' ?>

    <div class="header-title" style="display: flex;">
        <span class="iconify" alt="page_icon" data-icon="jam:user-circle" data-width="50" data-height="50"></span>

        <h3>Profile</h3>
    </div>
    <div style="padding: 10px 20px; background-color: rgba(0, 0, 0, 0); position:relative">
        <div class="back-box" >
            <center>
                <img alt="page_icon" src="../../common/assets/images/icons/user.png" height="100px" width="100px">
            </center>
            <table style="width:105%; padding-top: 40px; margin-left:5%">
                <tr>
                    <td>Username</td>
                    <td>: Smith</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: Smith@gmail.com</td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td>: Smith</td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>: Jackson</td>
                </tr>
            </table>
        </div>
        <div style="display: flex; margin: 5px auto auto; width: fit-content">
                <a data-ajax="false" href="orderHistory.php">
                    <button style="opacity: 1; font-size: 14px; background-color:#EEF005A">Order History</button>
                </a>
                <div style="width: 20px"></div>
                <a data-rel="popup" data-position-to="window" href="#editprofile">
                    <button style="opacity: 1; font-size: 14px;background-color:#EEF005A">Edit Details</button>
                </a>
            </div>
    </div>
    <?php include '../popups/editProfile.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>

</div>
</body>
</html>
