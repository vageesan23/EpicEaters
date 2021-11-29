<?php include '../parts/head.php' ?>
<!-- This is checkout page-->
<div data-role="page" id="checkout">

    <?php include '../parts/header.php' ?>

    <div class="header-title">
        <h3>Checkout</h3>
        <img alt="page_icon" src="../../common/assets/images/icons/checkout.png" height="35" width="35">
    </div>
    <div style="padding: 10px 20px; background-color: rgba(0, 0, 0, 0)">
        <form class="form-light">
            <p>Shipping Information</p>
            <input type="text" name="address1" id="address1" value="" placeholder="Address Line 1">
            <input type="text" name="address2" id="address2" value="" placeholder="Address Line 2">
            <input type="text" name="address3" id="address3" value="" placeholder="Address Line 3">
            <div style=" display: inline-flex">
                <input type="text" name="zip" id="zip" value="" placeholder="Zone">
                <input type="text" name="country" id="country" value="" placeholder="Country">
            </div>
            <fieldset data-role="controlgroup" data-theme="b" data-type="horizontal">
                <legend style="padding: 5px">Payment Method:</legend>
                <input type="radio" name="radio-choice-t-6" id="radio-choice-t-6a" value="on" checked="checked">
                <label for="radio-choice-t-6a">Card</label>
                <input type="radio" name="radio-choice-t-6" id="radio-choice-t-6b" value="off">
                <label for="radio-choice-t-6b">Stripe</label>
            </fieldset>
            <input type="text" name="cardNo" id="cardNo" value="" placeholder="Card Number">
            <div style="display: inline-flex">
                <input type="text" name="cvv" id="cvv" value="" placeholder="CVV">
                <input type="text" name="exp" id="exp" value="" placeholder="MM/YY">
            </div>
            <button style="opacity: 1">Sign In</button>
        </form>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
