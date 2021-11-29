<?php include '../parts/head.php' ?>
<!-- This is store page-->
<div data-role="page" id="product">

    <?php include '../parts/header.php' ?>

    <?php
    $data = $GLOBALS['db'];
    $json = json_decode($data, true);
    $id = $_GET['id'];
    ?>
    <div role="main" class="ui-content" style="padding: 0">

        <div class="header-title">
            <h3>Product</h3>
            <img alt="page_icon" src="../../common/assets/images/icons/login.png" height="35" width="35">
        </div>
        <!--start of main grid-->
        <div class="ui-grid-a" style="padding: 30px">
            <!--            start of main product block-->
            <div class="ui-block-a">
                <div class="ui-bar ui-bar-a ui-card product-card" style="height: unset; max-width: 70%; margin: auto;">

                    <span class="flaticon-122-heart fav-icon-card" id="<?php echo $id ?>"
                          onclick="favourite(this)"></span>
                    <?php echo '<img class="center" src="', $json[$id]['image'], '" >' ?? '' ?>
                    <div class="ui-grid-a">
                        <div class="ui-block-a" style="width: 80%">
                            <p style="font-size: 30px; font-family: 'Poppins',serif;"><?php echo $json[$id]['name'] ?? '' ?> </p>
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                                if ((int)$json[$id]['rating'] <= $i) {
                                    echo
                                    '<span class="fa fa-star" style="font-size: 18px"></span>';
                                } else {
                                    echo
                                    '<span class="fa fa-star fa-checked" style="font-size: 18px"></span>';
                                }
                            }
                            ?>
                            <p class="card-price" style="position: relative; font-size: 30px">
                                LKR <?php echo $json[$id]['price'] ?? '' ?></p>
                        </div>
                        <div class="ui-block-b" style="width: 20%">
                            <a href="#viewAR" data-rel="popup" data-position-to="window"
                               data-transition="pop"><img alt="page_icon" src="../../common/assets/images/icons/ar.png"></a>
                        </div>
                    </div>
                    <p style="font-weight: 200; font-size: 22px; margin-top: -35px"><?php echo $json[$id]['description'] ?? '' ?></p>
                </div>
            </div>
            <!--            start of feature product block-->
            <div class="ui-block-b ipad-feature-product">
                <div>
                    <h2>
                        <center style="margin-bottom: -15px;">Have a question?</center>
                    </h2>
                    <a href="#" onclick="collectchat.open()">
                        <button style="margin: auto;  font-size: 20px; width:70%">Chat Now</button>
                    </a>
                </div>
                <!-- BUTTONS -->
                <div style="display: inline-flex; width: 100%; justify-content: center; font-size: 30px">
                    <a href="#cart-feedback" data-rel="popup" data-position-to="window" data-transition="pop">
                        <button id="addToCart">Add to Cart</button>
                    </a>
                    <a style="margin: 10px">
                        <button id="buyNow" style="margin-left: 15px; margin-top: 5px;">Buy Now</button>
                    </a>
                </div>

                <div style="text-align: center; padding: 60px; top: 0; transform: translateX(-50%);" data-role="popup"
                     id="cart-feedback">
                    <h1>Added to Cart</h1> <img style="width: 90px" src="../../common/assets/images/checked-green.png">
                </div>

                <!-- product description -->
                <div>
                    <h2>Product Description</h2>
                    <p style="text-align: justify; font-weight: bolder; font-size: 23px"><?php echo $json[$id]['longDescription'] ?? '' ?></p>
                    <br/>
                </div>

            </div>


            <?php include '../popups/customer_Rewards.php' ?>
            <?php include '../popups/chatWithSeller.php' ?>
            <?php include '../popups/viewAR.php' ?>
            <?php include '../parts/bottomNavbar.php' ?>
        </div>
        <div style="padding: 15px; margin-left: 20px">
            <h2>Similar Products</h2>
            <!--                start of mini product grid-->
            <div>
                <div class="ui-grid-b">
                    <div class="ui-block-a">
                        <a target="_parent" href="product.php?id=<?php echo $json[$id + 1]['id'] ?>">
                            <div class="ui-bar ui-bar-a ui-card"
                                 style="height: unset; max-width: 70%; margin: auto;">

                                <?php echo '<img class="center" src="', $json[$id + 1]['image'], '" >' ?? '' ?>
                                <p style="font-weight: 200; font-family: 'Poppins'; font-size: 22px"><?php echo $json[$id + 1]['name'] ?? '' ?> </p>
                                <p class="card-price"
                                   style="position: relative; font-size: 25px">
                                    LKR <?php echo $json[$id + 1]['price'] ?? '' ?></p>
                            </div>
                        </a>
                    </div>
                    <div class="ui-block-b">
                        <a target="_parent" href="product.php?id=<?php echo $json[$id + 2]['id'] ?>">
                            <div class="ui-bar ui-bar-a ui-card"
                                 style="height: unset; max-width: 70%; margin: auto;">
                                <?php echo '<img class="center" src="', $json[$id + 2]['image'], '" >' ?? '' ?>
                                <div class="ui-block-a" style="width: 80%">
                                    <p style="font-weight: 200; font-family: 'Poppins'; font-size: 22px"><?php echo $json[$id + 2]['name'] ?? '' ?> </p>
                                    <p class="card-price"
                                       style="position: relative; font-size: 25px">
                                        LKR <?php echo $json[$id + 2]['price'] ?? '' ?></p>
                                </div>

                            </div>
                        </a>
                    </div>
                    <div class="ui-block-c">
                        <a target="_parent" href="product.php?id=<?php echo $json[$id + 3]['id'] ?>">
                            <div class="ui-bar ui-bar-a ui-card"
                                 style="height: unset; max-width: 70%; margin: auto;">
                                <?php echo '<img class="center" src="', $json[$id + 3]['image'], '" >' ?? '' ?>
                                <div class="ui-block-a" style="width: 80%">
                                    <p style="font-weight: 200; font-family: 'Poppins'; font-size: 22px"><?php echo $json[$id + 3]['name'] ?? '' ?> </p>
                                    <p class="card-price"
                                       style="position: relative; font-size: 25px">
                                        LKR <?php echo $json[$id + 3]['price'] ?? '' ?></p>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>


            <!-- comment area -->
            <?php include '../parts/comments.php' ?>

        </div>
    </div>
    <?php include '../parts/footer.php' ?>
</div>
</div>
</body>
<script src="https://js.stripe.com/v3/"></script>
<script>
    $(window).bind("DOMNodeInserted", function () {
        $("#chat-bot-iframe").contents().find(".powered-by").empty();

    });
    $(window).on('load', function () {
        if ($.cookie('wishList') != null) {
            data = JSON.parse($.cookie('wishList'));
            for (let i = 0; i < data.length; i++) {
                $("#" + data[i]).css('color', 'red');
            }
        }

        // buy now
        $buyNowButton = $('#buyNow');
        $buyNowButton.on('click', function () {
            // Create an instance of the Stripe object with API key
            const stripe = Stripe("<?php echo $GLOBALS['stripe_key'] ?>");

            fetch("../../common/functions/checkout.php?origin=<?php echo $origin ?? 'iPhone' ?>", {
                method: "POST",
                body: JSON.stringify([{"id": <?php echo $id ?>, "qty": 1}]),
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
    });

    function favourite(e) {
        let id = e.id;
        if ($.cookie('wishList') != null) {
            data = JSON.parse($.cookie('wishList'));
            if (!data.includes(id)) {
                data.push(id);
                $(e).css('color', 'red')
            } else {
                data = data.filter(item => item !== id);
                $(e).css('color', 'black')
            }
        } else {
            data = [];
            data.push(id);
            $(e).css('color', 'red')
        }
        $.cookie('wishList', JSON.stringify(data), {path: '/'});
    }

    $addCartButton = $('#addToCart');
    $addCartButton.on('click', function () {
        let found = false;
        let qty = 1;
        if ($.cookie('cart') != null) {
            data = JSON.parse($.cookie('cart'));
            for (let i = 0; i < data.length; i++) {
                if (data[i]['id'] === <?php echo $id ?>) {
                    data[i]['qty'] = data[i]['qty'] + 1;
                    qty = data[i]['qty'];
                    found = true;
                    break;
                }
            }
        } else {
            data = [];
        }
        if (!found) {
            data.push({"id": <?php echo $id ?>, "qty": qty});
        }
        $.cookie('cart', JSON.stringify(data), {path: '/'});
        $('#addToCart').html('Added ' + qty);
        // alert("Added to the cart");
    });
</script>
</html>