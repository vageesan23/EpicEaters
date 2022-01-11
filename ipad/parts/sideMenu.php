<style>
    .popup-logout {
        margin-left: -165px;
    }

    .side-nav-logout-btn {
        justify-content: center;
        margin-left: 85px;
        margin-top: 25px;
    }

    .popup-logout .ui-content .side-nav-logout-btn {
        background-color: #ef005a;
        border-color: #ef005a;
        color: #fff;
    }

    @media screen and (max-width: 1024px) {
        .side-nav-logout-btn {
            justify-content: center;
            margin-left: 85px;
            margin-top: 25px;
        }
    }

    @media screen and (max-width: 768px) {
                td{
                    padding: 8px;
                }
}
</style>
<div data-role="panel" data-display="overlay" data-position-fixed="true" id="sideMenu"
     style="min-width: 230px; z-index: 1010;">
    <!-- panel content goes here -->
    <div style="display: flex; background-color:#E9ECEF">
    <div style="height: 150px; background-color:#E9ECEF; padding-top: 20px; padding-right: 10px; padding-left: 0px">
    <span class="iconify" alt="page_icon" data-icon="jam:user-circle" data-width="100" data-height="100"></span>
    <p style="font-size: 10px; padding-top: 0px; padding-left: 20px"><a data-ajax="false" href="../pages/profile.php" >View Profile</a></p>
</div>
        <div class="side-menu-info" style="padding-top: 2px">
            <p><span id="userName"></span></p>
            <p>Coins Awarded: <span id="coinCount"></span></p>
            <div style="border-radius: 15px; width: 150px; display: flex; background-color:#ffffff">
            &nbsp<span style=" padding-left:4px; padding-top:2px" class="iconify" alt="page_icon" data-icon="bx:bxs-offer" data-width="20" data-height="20"></span>
            <p style="font-size: 10px; padding-left:11px;padding-top:2px"><a data-ajax="false" href="../pages/sellerProfile.php">Check Seller Profile</a></p>
</div>
        </div>
</div>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script>
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function displayCoinCount() {
            var coinCount = readCookie('coinCount');
            var userName = readCookie('userName');
            $("#coinCount").html(coinCount);
            $("#userName").html(userName);
        }

        displayCoinCount();
    </script>
    <table class="side-menu" style="text-align: center">
        <tr>
            <td><a data-ajax="false" href="../pages/home.php" style="display: flex"><span class="iconify" alt="page_icon" data-icon="ant-design:home-filled" data-width="28
            " data-height="28
            "></span><p style="font-size: 18px; padding-left: 25px;padding-top: 4px">  Home</p></a>
            </td>
    </tr>
   
            <tr><td><br><a data-ajax="false" href="../pages/booking.php" style="display: flex"><span class="iconify" alt="page_icon" data-icon="tabler:brand-booking" data-width="28
            " data-height="30"></span><p style="font-size: 18px; padding-left: 25px;padding-top: 4px">Book Course</p></a></td>
    </tr>
    <tr>        
    <td><br><a data-ajax="false" href="../pages/contactUs.php" style="display: flex"><span class="iconify" alt="page_icon" data-icon="fluent:person-call-20-regular" data-width="28
    " data-height="28
    "></span><p style="font-size: 18px; padding-left: 25px;padding-top: 4px">Contact Us</p></a></td>
        </tr>
        <tr>
            <td><br><a data-ajax="false" href="../pages/shop.php" style="display: flex"><span class="iconify" alt="page_icon" data-icon="fluent:building-shop-20-filled" data-width="28
            " data-height="28
            "></span><p style="font-size: 18px; padding-left: 25px;padding-top: 2px">Shop</p></a>
            </td>
    </tr>
    <tr>
            <td><br><a data-ajax="false" href="../pages/orderHistory.php" style="display: flex"><span class="iconify" alt="page_icon" data-icon="prime:history" data-width="28
            " data-height="28
            "></span><p style="font-size: 18px; padding-left: 25px;padding-top: 2px">Past Orders</p></a></td>
    </tr>
        <tr>
            <td><br><a data-ajax="false" href="../pages/about.php" style="display: flex"><span class="iconify" alt="page_icon" data-icon="bx:bx-info-square" data-width="28
            " data-height="28
            "></span><p style="font-size: 18px; padding-left: 25px;padding-top: 2px">About Us</p></a></td>
        </tr>
        <tr>
            <td><br><a data-rel="popup" data-position-to="window" href="#viewQR" style="display: flex"><span class="iconify" alt="page_icon" data-icon="heroicons-solid:qrcode" data-width="28
            " data-height="28
            "></span><p style="font-size: 18px; padding-left: 25px;padding-top: 2px">Scan QR</p></a></td>
    </tr>
    <tr>
            <td><br><a data-ajax="false" href="../pages/sellWithUs.php" style="display: flex"><span class="iconify" alt="page_icon" data-icon="ps:promo" data-width="28
            " data-height="28
            "></span><p style="font-size: 18px; padding-left: 25px;padding-top: 2px">Earn with Us</p></a></td>
    </tr>
        <tr>
            <td><br><a href="#popupDialog" data-rel="popup" data-position-to="window"
                   data-transition="pop" style="display: flex"><span class="iconify" alt="page_icon" data-icon="gridicons:sign-out" data-width="28
                   " data-height="28
                   "></span><p style="padding-left: 25px;padding-top: 2px">Sign Out</p></a></td>
        </tr>
    </table>

    <div data-role="popup" class="popup-logout" id="popupDialog" data-overlay-theme="b" data-theme="b" data-dismissible="true">

        <div role="main" class="ui-content">
            <h3 class="ui-title">Are you sure you want to Sign-out?</h3>
            <a href="../pages/logIn.php" class="side-nav-logout-btn ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b"
               data-transition="flow" style="background: #ef005a; color: #fff; width: 150px;">Sign-out</a>
        </div>
    </div>
    <div style="width: 100%; background-color:#E9ECEF; padding: 0; position:absolute; bottom: 0">
        <p style="text-align: center;">Version 1.0.0</p>
    </div>
</div>

<?php include("../popups/viewQR.php") ?>
<?php include("../popups/QRrewards.php") ?>
