<!--
Cart Page
-->
<?php include '../parts/head.php' ?>
<!--
Testing Card

Payment succeeds
4242 4242 4242 4242

Payment requires authentication
4000 0025 0000 3155

Payment is declined
4000 0000 0000 9995
-->

<script src="https://js.stripe.com/v3/"></script>
<!-- This is shop page-->
<div data-role="page" id="cart" style='min-height: unset; background-image:linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ), url("../../common/assets/images/cart-back.jpg")'>
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">

        <!-- POI Card-->
        <div style="background-color: #ffffffe3;" class="back-box">
            <div class="header-title" style="margin-bottom: 10px;">
                <h3>Cart</h3>
                <img alt="page_icon" src="../../common/assets/images/icons/checkout.png" height="35" width="35">
            </div>
            <!--card data will load dynamically-->
            <div id="items">
            </div>

            <div style="text-align: center;">
                <h1>Total: <span id="totalPrice" class="price-color">LKR.0.00</span></h1>
            </div>
            <div style="text-align: center;">
                <button id="checkout-button" disabled>Order</button>
            </div>
        </div>
    </div>

    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</body>
<script>
    let total = 0;
    let product_ids = [];

    const update = async () => {
        const cart = JSON.parse($.cookie('cart'));
        for (let i = 0; i < cart.length; i++) {
            let id = cart[i]['id'];
            let qty = cart[i]['qty'];
            await addCard(id, qty);
            product_ids.push({"id": id, "qty": qty});
        }

        total = Math.round(total * 100) / 100;
        $('#totalPrice').html('LKR ' + total);
    }

    const addCard = async (id, qty) =>
        $.getJSON("<?php echo $GLOBALS['domain'] ?>/common/functions/getProduct.php?id=" + id, function (data, status) {
            let price = parseFloat(data["price"]) * qty;
            total += price;
            $('#items').append(
                '<div class="ui-grid-c back-box" style="padding: <?php echo $padding ?? "10px" ?>; margin-bottom: 20px">\n' +
                '                <div class="ui-block-a " style="width: 25%;">\n' +
                '                    <img alt="product_image" class="center" src="' + data["image"] + '"\n' +
                '                         style="top: 50%;;">\n' +
                '                </div>\n' +
                '                <div class="ui-block-b" style="width: 50%; font-size: 12px; padding-left: 10px">\n' +
                '                        <a data-ajax="false" href="product.php?id=' + id + '" \n' +
                '                           data-transition="pop"><p style="font-size: 22px">' + data["name"] + ' </p><span style="font-size: 20px">x' + qty + '</span></a>\n' +
                '                </div>\n' +
                '                <div class="ui-block-c" style="width: 25%; font-size: 22px; ">\n' +
                '                    <p> LKR ' + price + '</p>\n' +
                '                </div>\n' +
                '            </div>');

        });
    if ($.cookie('cart') != null) {
        update();
        $('#checkout-button').attr('disabled', false);
    }

    const headers = {
        "Content-Type": "application/json",
        "Access-Control-Origin": "*"
    };

    // Create an instance of the Stripe object with API key
    const stripe = Stripe("<?php echo $GLOBALS['stripe_key'] ?>");
    const checkoutButton = document.getElementById("checkout-button");

    checkoutButton.addEventListener("click", function () {
        $('#checkout-button').attr('disabled', true);
        $('#checkout-button').html("Processing");
        fetch("../../common/functions/checkout.php?origin=<?php echo $origin ?? 'iPhone' ?>", {
            method: "POST",
            body: JSON.stringify(product_ids)
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
</script>
</html>