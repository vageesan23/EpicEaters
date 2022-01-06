<?php include '../parts/head.php' ?>
<!-- This is sell with us page-->

<style>
    @media (max-width: 768px) {
        .ui-block-a {
            margin-left: 0px !important;
        }

        .ui-side {
            margin-left: 60px !important;
        }

        .header-title {
            margin-left: 270px !important;
        }

        .p-text {
            margin-left: 55px !important;
            margin-right: 45px !important;
        }
    }

    .header-title {
        margin-bottom: 30px !important;
        margin-left: 395px;
    }

    .back-box {
        margin-bottom: 0px !important;
    }

    .head-icon {
        position: relative;
        left: -220px;
        bottom: -6px;
    }

    .ui-icon-carat-d {
        border-radius: 10px !important;
        max-height: 2.4em !important;
    }

    .ui-select {
        margin-left: 2px !important;
        margin-right: -2px !important;
    }

    .dropdown-border {
        position: relative;
        bottom: 3px;
        font-weight: normal;
    }

    .ui-select>.ui-btn {
        background-color: white !important;
    }

    .ui-checkbox {
        position: relative;
        top: 11px;
        right: 8px;
    }
</style>

<div data-role="page" id="sellWithUs" style='background-image: url("../../common/assets/images/bg-1.png"); background-size: cover;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content" style='background-image: url("../common/assets/images/bg-1.png"); background-size: cover;'>

        <div class="back-box" style="padding: 20px 20px 50px 20px; background-color: rgba(0, 0, 0, 0.7);">
            <div class="header-title" style="color: white">
                <span class="iconify head-icon" alt="page_icon" data-icon="tabler:brand-booking" data-width="45" data-height="45"></span>
                <h3>Book Course</h3>
            </div>
            <form style="color: #1797F3;" action="https://buy.stripe.com/test_fZeeWOaUEaQ812wbIN" onsubmit="clearForm()">
                <p class="p-text" style="color:#fff; margin-bottom:12px; margin-left:70px">*Personal Details</p>
                <fieldset class="ui-side" style="min-width: 100%;">
                    <div class="ui-block-a" style="margin-left: 80px; width: 40%">
                        <input type="text" name="firstName" id="firstName" value="" placeholder="First Name" required>
                        <input type="text" name="tel" id="tel" value="" placeholder="Mobile No" required>
                        <input type="text" name="username" id="username" value="" placeholder="Username" required>
                    </div>
                    <div class="ui-block-b" style="width: 20px"></div>
                    <div class="ui-block-c" style="width: 40%">
                        <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name" required>
                        <input type="text" name="nic" id="nic" value="" placeholder="NIC" required>
                        <br /><br />
                    </div>
                </fieldset><!-- /grid-a -->
                <fieldset class="ui-side" style="min-width: 100%; margin-top:-8px;">
                    <div class="ui-block-a" style="margin-left: 80px; width: 40%">
                        <input type="text" name="address" id="address" value="" placeholder="Address" required>
                    </div>
                    <div class="ui-block-b" style="width: 20px"></div>
                    <div class="ui-block-c" style="width: 40%">
                        <input type="text" name="lastName" id="lastName" value="" placeholder="Zip Code" required>
                    </div>
                </fieldset><!-- /grid-a -->
                <p class="p-text" style="color:#fff; margin-bottom:12px; margin-left:70px; margin-top:30px;">*Membership Details</p>

                <fieldset class="ui-side" style="min-width: 100%;">
                    <div class="ui-block-a" style="margin-left: 80px; width: 40%">
                        <select class="dropdown-border" name="select-native-1" id="location" required>
                            <option value="1" disabled hidden selected>Select Membership</option>
                            <option value="2">Annual Membership ( LKR 25,000 )</option>
                            <option value="3">Monthly Membership ( LKR 6,000 )</option>
                        </select>
                    </div>
                    <div class="ui-block-b" style="width: 20px"></div>
                    <div class="ui-block-c" style="width: 40%">
                        <select class="dropdown-border" name="select-native-1" id="session" required>
                            <option value="1" disabled hidden selected>Select Course</option>
                            <option value="2">Professional Cookery</option>
                            <option value="3">Baking Breads and Rolls</option>
                            <option value="4">Kitchen Skills</option>
                            <option value="5">International Cuisine</option>
                            <option value="6">Garde Manger</option>
                        </select>
                    </div>
                </fieldset><!-- /grid-a -->
                <p class="p-text" style="color:#fff; margin-bottom:12px; margin-left:78px; margin-top:30px; margin-right:80px">Note: By clicking the "Place Booking" button you are submiting your online application and will be re-directed to a form to submit your payment. Once we recieve your payment, we will contact you about your Membership.</p>
                <p class="p-text" style="color:#fff; margin-bottom:12px; margin-left:78px; margin-top:20px;"><input type="checkbox" name="checkbox-0" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agree to the Terms & Conditions</p>
                <button style="opacity: 1; width: 205px; margin: 25px auto 4px auto">Place Booking</button>

            </form>
        </div>

    </div>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../parts/footer.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
</div>

<script>
    function clearForm() {
        document.getElementById('firstName').value = '';
        document.getElementById('lastName').value = '';
        document.getElementById('tel').value = '';
        document.getElementById('nic').value = '';
        document.getElementById('username').value = '';
        document.getElementById('address').value = '';
        document.getElementById('lastName').value = '';
        document.getElementById('location').value = '';
        document.getElementById('session').value = '';
        document.getElementById('checkbox').value = '';
    }
</script>