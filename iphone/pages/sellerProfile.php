<?php include '../parts/head.php' ?>
<style>
    table, td, th {
        border: 1px solid black;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
</style>
<!-- This is checkout page-->
<div data-role="page" id="sellerProfile"
     style='background-image: url("../common/assets/images/profile-back.jpg");
     background-size: cover; background-position: bottom;'>

    <?php include '../parts/header.php' ?>

    <div class="header-title" style="margin-top: -10px;">
        <h3>Profile</h3>
        <img alt="page_icon" src="../../common/assets/images/icons/registration.png" height="35" width="35">
    </div>
    <div style="padding: 10px 20px; background-color: rgba(0, 0, 0, 0)">
        <div class="back-box" style="padding: 50px 20px; margin-bottom: 20px">
            <center>
                <img alt="page_icon" src="../../common/assets/images/icons/user.png" height="100px" width="100px">
            </center>
            <table style="width:100%; padding-top: 40px">
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
            <div style="display: flex; padding-top: 20px">
                <button style="opacity: 1; font-size: 14px;">Order History</button>
                <div style="width: 20px"></div>
                <button style="opacity: 1; font-size: 14px;">Edit Details</button>
            </div>
        </div>

        <!-- table -->
        <div style="margin-bottom: 70px; border-radius: 10px;
  -moz-border-radius: 4px
  -webkit-border-radius: 4px;
  overflow: hidden; background-color: #F3F4F9;/*notice*/ ">
            <!--        <div style="margin-bottom: 70px; background-color: #F3F4F9; ">-->
            <table>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                <tr>
                    <td>01</td>
                    <td>Dream catcher</td>
                    <td>o5</td>
                    <td>
                        <button style="opacity: 1; padding: 4px; background-color: #FDFF9E; color: black;
                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>
                            Shipped
                        </button>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Kerosene Lamp</td>
                    <td>10</td>
                    <td>
                        <button style="opacity: 1; padding: 4px; background-color: #9EFFB4; color: black;
                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>
                            Completed
                        </button>
                    </td>
                    <td>
                        <button style="opacity: 1; padding: 4px; background-color: #1797F3; color: white;
                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>
                            Mark as done
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Paper flower</td>
                    <td>50</td>
                    <td>
                        <button style="opacity: 1; padding: 4px; background-color: #FDFF9E; color: black;
                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>
                            Shipped
                        </button>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Paper flower</td>
                    <td>50</td>
                    <td>
                        <button style="opacity: 1; padding: 4px; background-color: #FDFF9E; color: black;
                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>
                            Shipped
                        </button>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Paper flower</td>
                    <td>50</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Paper flower</td>
                    <td>50</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
