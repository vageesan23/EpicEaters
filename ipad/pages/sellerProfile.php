<?php include '../parts/head.php' ?>
<style>
    .sell-pro-card {
        padding: 10px 20px;
        background-color: rgba(0, 0, 0, 0);
        width: 100%;
        display: flex;
    }

    .sell-pro-card table {
        width: 100% !important;
        padding-top: 40px;
        border: none;
    }

    .back-box {
        padding: 50px 20px;
        margin-bottom: 20px;
    }

    .sell-pro-table {
        width: 100%;
    }

    .back-box table, .table-order table, .product-table table {
        width: 100%;
        border-collapse: collapse;
        line-height: 2.0rem;
    }

    table tr td {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .back-box center img {
        height: 250px;
        width: 300px;
    }

    .table-order {
        margin-bottom: 1px;
        border-radius: 10px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        overflow: hidden;
    }

    .table-order table,
    .product-table table {
        margin: 5px 80px 20px 20px;
        width: 95%;
    }

    .table-order table tr,
    .product-table table tr {
        background-color: #e9ecef;
        border-radius: 50px;
        margin: 15px auto;
    }

    .table-order table th {
        height: 50px;
    }

    .table-order table td,
    .product-table table td {
        height: 50px;
    }

    .table-order table tr td {
        padding: 15px;
    }

    .pro-td {
        padding: 15px;
    }

    .product-table td:nth-child(2),
    .product-table td:nth-child(3),
    .product-table td:nth-child(4),
    .product-table td:nth-child(5),
    .product-table td:nth-child(6) {
        text-align: center;
    }

    .btns {
        margin-top: 20px;
        margin-left: 100px;
    }

    .btns button {
        opacity: 1;
        font-size: 15px;
        width: 60%;
        text-align: center;
    }

    @media (max-width: 800px) {

        .table-order table,
        .product-table table {
            margin: 5px 0px 20px 0px;
            width: 95%;
        }

        .table-order table td,
        .product-table table td {
            font-size: 14px;
            line-height: 15px;
        }

        .main-pro-card td {
            font-size: 12px;
            padding: 5px;
        }

        .btns {
            margin-left: 80px;
        }

        .btns button {
            font-size: 13px;
        }
    }
</style>
<!-- This is checkout page-->
<div data-role="page" id="sellerProfile" style='background-image: url("../common/assets/images/profile-back.jpg");
     background-size: cover; background-position: bottom;'>

    <?php include '../parts/header.php' ?>

    <div class="header-title" style="display: flex; margin-top: 10px;">
        <span class="iconify" alt="page_icon" data-icon="jam:user-circle" data-width="50" data-height="50"></span>
        <h3>Profile</h3>
    </div>

    <div class="main-sel-pro-content">
        <div class="ui-grid-a seller-profile">
            <div class="ui-block-a sell-pro-card">
                <div class="back-box">
                    <center>
                        <img alt="page_icon" src="../../common/assets/images/seller-profile.jpg">
                    </center>
                    <table class="main-pro-card" style="width: 100%;">
                        <tr>
                            <td>Username &emsp;&nbsp; : &ensp;</td>
                            <td>Janice45</td>
                        </tr>
                        <tr>
                            <td>Email &emsp;&emsp;&emsp;&ensp; : &ensp;</td>
                            <td>janiceharper45@gmail.com</td>
                        </tr>
                        <tr>
                            <td>First Name &emsp; : &ensp;</td>
                            <td>Janice</td>
                        </tr>
                        <tr>
                            <td>Last Name &emsp; : &ensp;</td>
                            <td>Harper</td>
                        </tr>
                    </table>
                    <div class="btns">
                        <button>Edit Details</button>
                    </div>
                </div>
            </div>
            <div class="ui-block-b"></div>
            <div class="ui-block-c">

                <!-- table -->
                <div class="order-table-head">
                    <h2>Order</h2>
                    <div class="table-order">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Status</th>
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
                </div>
                <div class="product-table-head">
                    <h2>Products</h2>
                    <div class="product-table">
                        <table>
                            <tr>
                                <th>Item Name</th>
                                <th>Qty</th>
                            </tr>
                            <tr>
                                <td>Chocolate Cake</td>
                                <td class="qty">05</td>
                            </tr>
                            <tr>
                                <td>Vanilla Cake</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Butterscotch Cake</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Blackforest Cake</td>
                                <td>05</td>
                            </tr>
                            <tr>
                                <td>Whiteforest Cake</td>
                                <td>04</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</body>

</html>