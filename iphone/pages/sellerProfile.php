<?php include '../parts/head.php' ?>
<style>
    .header-title h3 {
        padding: 5px;
    }

    .back-box center img {
        width: 250px;
        height: 200px;
    }

    .btns {
        display: flex;
        text-align: center;
        margin: 10px 0px 30px 115px;
    }

    .btns a button {
        opacity: 1;
        font-size: 14px;
        width: 250px;
    }

    button .ui-link {
        color: #fff !important;
    }

    .table-order {
        margin-bottom: 70px;
        border-radius: 10px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        overflow: hidden;
    }

    .back-box table, .table-order table, .table-product table {
        width: 100%;
        border-collapse: collapse;
    }

    .table-order table, .table-product table {
        background-color: #e9ecef;
        border-radius: 10px;
        margin: 0px 1px;
    }

    .table-order table tr,
    .table-product table tr {
        /*notice*/
        margin: 15px 5px 15px 5px;
        padding: 15px;
        height: 0px;
    }

    table th,
    table td {
        height: 50px;
    }

    .id,
    .qty,
    .status {
        text-align: center;
    }

    .order-head,
    .product-head {
        margin-left: 25px;
        margin-bottom: 20px;
    }

    .btn-space {
        width: 70px;
    }

    @media (max-width: 400px) {
        .main-sell-card tr {
            font-size: 13px;
        }

        .main-sell-card td {
            height: 30px;
        }

        .btns {
            display: flex;
            text-align: center;
            margin: 10px -25px 30px 25px;
        }

        .btns a button {
            opacity: 1;
            font-size: 14px;
            width: 150px;
        }

        .btn-space {
            width: 25px;
        }
    }
</style>
<!-- This is checkout page-->
<div data-role="page" id="sellerProfile" style='background-image: url("../common/assets/images/profile-back.jpg");
     background-size: cover; background-position: bottom;'>

    <?php include '../parts/header.php' ?>

    <div class="header-title" style="display: flex;">
        <span class="iconify" alt="page_icon" data-icon="jam:user-circle" data-width="40" data-height="40"></span>
        <h3>Profile</h3>
    </div>
    <div style="background-color: rgba(0, 0, 0, 0)">
        <div class="back-box" style="padding: 50px 20px; margin-bottom: 20px">
            <center>
                <img alt="page_icon" src="../../common/assets/images/seller-profile.jpg">
            </center>
            <table class="main-sell-card">
                <tr>
                    <td>Username :</td>
                    <td>Janice45</td>
                </tr>
                <tr>
                    <td>Email&ensp;&ensp;&ensp;&emsp; :</td>
                    <td>janiceharper45@gmail.com</td>
                </tr>
                <tr>
                    <td>First Name :</td>
                    <td>Janice</td>
                </tr>
                <tr>
                    <td>Last Name :</td>
                    <td>Harper</td>
                </tr>
            </table>
        </div>
        <div class="btns">
            <a href="../pages/orderHistory.php"><button>Order History</button></a>
            <div class="btn-space"></div>
            <a data-rel="popup" data-position-to="window" href="#editprofile">
                <button>Edit Details</button>
            </a>
        </div>

        <!-- table -->
        <div class="order-table-head">
            <h2 class="order-head">Order</h2>
        </div>
        <div class="table-order">
            <!--        <div style="margin-bottom: 70px; background-color: #F3F4F9; ">-->
            <table>
                <tr>
                    <th class="id">ID</th>
                    <th class="item-name">ITEM NAME</th>
                    <th class="qty">QTY</th>
                    <th class="status">STATUS</th>
                </tr>
                <tr>
                    <td class="id">01</td>
                    <td class="item-name">Chocolate Cake</td>
                    <td class="qty">05</td>
                    <td class="status">
                        <button style="opacity: 1; padding: 4px; background-color: #FDFF9E; color: black;
                                border-color: #fdff9e; box-shadow: none; font-size: 11px" disabled>
                            Shipped
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="id">02</td>
                    <td class="item-name">Vanilla Cake</td>
                    <td class="qty">10</td>
                    <td class="status">
                        <button style="opacity: 1; padding: 4px; background-color: #9EFFB4; color: black;
                                border-color: #9effb4; box-shadow: none; font-size: 11px" disabled>
                            Completed
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="id">03</td>
                    <td class="item-name">Strawberry Cake</td>
                    <td class="qty">15</td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="id"></td>
                    <td class="item-name"></td>
                    <td class="qty"></td>
                    <td class="status"></td>
                </tr>
                <tr>
                    <td class="id"></td>
                    <td class="item-name"></td>
                    <td class="qty"></td>
                    <td class="status"></td>
                </tr>
            </table>
        </div>
        <div class="product-table">
            <div>
                <h2 class="product-head">Products</h2>
            </div>
            <div class="table-product">
                <table>
                    <tr class="table-tr head-tr">
                        <th>ITEM NAME</td>
                        <th>QTY</th>
                    </tr>
                    <tr class="table-tr">
                        <td>Chocolate Cake</td>
                        <td class="qty">05</td>
                    </tr>
                    <tr class="table-tr">
                        <td>Vanilla Cake</td>
                        <td class="qty">10</td>
                    </tr>
                    <tr class="table-tr">
                        <td>Butterscotch Cake</td>
                        <td class="qty">15</td>
                    </tr>
                    <tr class="table-tr">
                        <td>Blackforest Cake</td>
                        <td class="qty">05</td>
                    </tr>
                    <tr class="table-tr">
                        <td>Whiteforest Cake</td>
                        <td class="qty">04</td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="margin-bottom: 20px;"></div>


        <?php include '../popups/editProfile.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/chatbot.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>

    </html>