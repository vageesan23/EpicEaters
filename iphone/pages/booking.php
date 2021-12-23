<?php include '../parts/head.php' ?>
<!-- This is sell with us page-->

<style>
    @media (max-width: 376px) {
        .header-title {
            margin-left: 80px !important;
            margin-bottom: 25px !important;
            margin-top: -17px !important;
        }

        .head-icon {
            position: relative;
            right: 215px !important;
            bottom: -6px !important;
        }
    }

    .header-title {
        margin-left: 290px;
        margin-bottom: 25px !important;
        margin-top: -17px;
    }

    .head-icon {
        position: relative;
        right: 215px !important;
        bottom: -6px !important;
    }

    .dropdown-border {
        position: relative;
        bottom: 3px;
        font-weight: normal;
    }

    .ui-select>.ui-btn {
        background-color: white !important;
    }

    .ui-icon-carat-d {
        border-radius: 10px !important;
        max-height: 2.4em !important;
    }

    .ui-checkbox {
        position: relative;
        top: 7px;
        right: 1px;
    }
</style>

<div data-role="page" id="sellWithUs" style='background-image: url("../../common/assets/images/bg-1.png"); background-size: cover;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content" style='background-image: url("../common/assets/images/christmas.png"); background-size: cover;'>


        <div style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.7); border-radius:20px">

            <div class="header-title" style="color: white">
                <span class="iconify head-icon" alt="page_icon" data-icon="tabler:brand-booking" data-width="45" data-height="45"></span>
                <h3>Book Course</h3>
            </div>
            <form action="https://www.geeksforgeeks.org" target="_blank">
                <p class="p-text" style="color:#fff; margin-bottom:15px; margin-left:-8px">*Personal Details</p>

                <input type="text" name="firstName" id="firstName" value="" placeholder="First Name" required>
                <input type="text" name="lastName" id="lastName" value="" placeholder="Last Name" required>
                <input type="text" name="tel" id="tel" value="" placeholder="Mobile No" required>
                <input type="text" name="nic" id="nic" value="" placeholder="NIC" required>
                <input type="text" name="username" id="username" value="" placeholder="Username" required>
                <input type="text" name="address" id="address" value="" placeholder="Address" required>
                <input type="text" name="address" id="address" value="" placeholder="Zip Code" required>
                <br>
                <p class="p-text" style="color:#fff; margin-bottom:15px; margin-left:-8px">*Personal Details</p>

                <select class="dropdown-border" name="select-native-1" id="location" required>
                    <option value="1" disabled hidden selected>Select Membership</option>
                    <option value="2">Annual Membership ( LKR 25,000 )</option>
                    <option value="3">Monthly Membership ( LKR 6,000 )</option>
                </select>
                <select class="dropdown-border" name="select-native-1" id="session" required>
                    <option value="1" disabled hidden selected>Select Course</option>
                    <option value="2">Professional Cookery</option>
                    <option value="3">Baking Breads and Rolls</option>
                    <option value="4">Kitchen Skills</option>
                    <option value="5">International Cuisine</option>
                    <option value="6">Garde Manger</option>
                </select>

                <br>
                <p class="p-text" style="color:#fff; margin-bottom:15px; margin-left:-8px; font-size:13px;">Note: By clicking the "Place Booking" button you are submiting your online application and will be re-directed to a form to submit your payment. Once we recieve your payment, we will contact you about your Membership.</p>
                <p class="p-text" style="color:#fff; margin-left:-13px; font-size:13px;"><input type="checkbox" name="checkbox-0" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agree to the Terms & Conditions</p>

                <button style="opacity: 1;width: 300px;margin: auto;margin-top: 30px;">Place Booking</button>
                <center>
                    <a data-ajax="false" href="logIn.php" style="font-weight: 100; color: white; font-family: 'Poppins', sans-serif; font-size: 12px; text-decoration:none;">
                        Already have an account ?
                    </a>
                </center>
            </form>
        </div>
    </div>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</div>
<script>
    window.addEventListener("DOMContentLoaded", function() {
        var form = document.getElementById("booking-form");

        form.addEventListener("submit", function(ev) {
            ev.preventDefault();
            // Create an instance of the Stripe object with API key
            const stripe = Stripe("<?php echo $GLOBALS['stripe_key'] ?>");

            let location = $('#location').find(":selected").text();
            let timeSlot = $('#timeSlot').find(":selected").text();
            let session = $('#session').find(":selected").text();
            fetch("../../common/functions/checkout.php?cat=booking&origin=<?php echo $origin ?? 'iPhone' ?>", {
                    method: "POST",
                    body: JSON.stringify({
                        name: session + " " + timeSlot + " " + location
                    }),
                })
                .then(function(response) {
                    return response.json();
                })
                .then(function(session) {
                    return stripe.redirectToCheckout({
                        sessionId: session.id
                    });
                })
                .then(function(result) {
                    // If redirectToCheckout fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using error.message.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function(error) {
                    console.error("Error:", error);
                });
        });
    })
</script>