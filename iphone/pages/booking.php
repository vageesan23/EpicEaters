<?php include '../parts/head.php' ?>
<script src="https://js.stripe.com/v3/"></script>
<!-- This is booking page-->
<div data-role="page" id="booking" style='background-image: url("../../common/assets/images/booking_back.jpg");
     background-size: cover; background-position: bottom;'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">

        <div class="back-box" style="padding: 50px 20px; background-color: rgba(0, 0, 0, 0.7)">
            <div style="color: white;" class="header-title">
                <h3>Booking</h3>
                <img alt="page_icon" src="../../common/assets/images/icons/booking.png" height="35" width="35">
            </div>
            <form id="booking-form"
                  action="#"
                  method="POST">
                <input type="text" name="firstName" id="firstName" value="" placeholder="Name" required>
                <select name="select-native-1" id="location" required>
                    <option value="1" disabled hidden selected>Select Location</option>
                    <option value="2">Nugegoda</option>
                    <option value="3">Kurunegala</option>
                    <option value="4">Kandy</option>
                </select>
                <select name="select-native-1" id="timeSlot" required>
                    <option value="1" disabled hidden selected>Select Time Slot</option>
                    <option value="2">15:00 p.m</option>
                    <option value="3">16:00 p.m</option>
                    <option value="4">17:00 p.m</option>
                </select>
                <select name="select-native-1" id="session" required>
                    <option value="1" disabled hidden selected>Select Session</option>
                    <option value="2">Hand Craft</option>
                    <option value="3">Wooden Craft</option>
                </select>
                <center>
                    <span style="color:#fff;">Note: The payment of LKR 2500/= need to paid for these session.</span>
                </center>
                <button style="opacity: 1">Place Booking</button>
            </form>
        </div>

    </div>
<?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</body>
<script>
    window.addEventListener("DOMContentLoaded", function () {
        var form = document.getElementById("booking-form");

        form.addEventListener("submit", function (ev) {
            ev.preventDefault();
            // Create an instance of the Stripe object with API key
            const stripe = Stripe("<?php echo $GLOBALS['stripe_key'] ?>");

            let location = $('#location').find(":selected").text();
            let timeSlot = $('#timeSlot').find(":selected").text();
            let session = $('#session').find(":selected").text();
            fetch("../../common/functions/checkout.php?cat=booking&origin=<?php echo $origin ?? 'iPhone' ?>", {
                method: "POST",
                body: JSON.stringify({name: session + " " + timeSlot + " " + location}),
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (session) {
                    return stripe.redirectToCheckout({sessionId: session.id});
                })
                .then(function (result) {
                    // If redirectToCheckout fails due to a browser or network
                    // error, you should display the localized error message to your
                    // customer using error.message.
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function (error) {
                    console.error("Error:", error);
                });
        });
    })
</script>
</html>
