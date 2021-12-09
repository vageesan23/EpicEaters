<?php include '../parts/head.php' ?>
<!-- This is profile page-->
<div data-role="page" id="profile">

    <?php include '../parts/header.php' ?>
    <div role="main" class="ui-content">
        <div style="padding: 50px 20px">

            <div class="header-title" style="display: flex; margin-top: -40px;padding-bottom:20px">
            <span class="iconify" alt="page_icon" data-icon="jam:user-circle" data-width="50" data-height="50"></span>
                <h3 style="margin-top:-3px; color: black">Profile</h3>
            </div>

            <div class="back-box"
            style="padding: 50px 20px; width: 90%; margin: auto; background-color: #ffffff">
                <center>
                    <img alt="page_icon" src="../../common/assets/images/icons/user.png" height="100px" width="100px">
                </center>
                <table style="width:65%; padding-top: 40px; margin-left:28%">
                    <tr>
                        <td>Username</td>
                        <td>:  Smith</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:  Smith@gmail.com</td>
                    </tr>
                <tr>
                    <td>First Name</td>
                    <td>:  Smith</td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>:  Jackson</td>
                </tr>
            </table>
             </div>  
         </div>
         <div style="display: flex; margin: 5px auto auto; width: fit-content">
                 <a data-ajax="false" href="orderHistory.php">
                     <button style="opacity: 1; font-size: 14px;">Order History</button>
                 </a>
                 <div style="width: 20px"></div>
                 <a data-rel="popup" data-position-to="window" href="#editprofile">
                     <button style="opacity: 1; font-size: 14px;">Edit Details</button>
                 </a>
             </div>
    </div>
    <?php include '../popups/editProfile.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
    </body>
    </html>
