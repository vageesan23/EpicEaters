<?php include '../parts/head.php' ?>
<style>
    .ui-grid-a {
        overflow: initial !important;
    }

    @media (max-width: 1024px) {
        .ar-view {
            margin-left: 130px;
        }

        .ui-grid-a .rating {
            font-size: 25px;
            margin-left: 50px;
        }

        .fav-icon-card {
            /* margin-right: 100px; */
        }

        #addToCart {
            margin: 0px 30px;
        }

        .main-pro-img {
            width: 350px;
            height: 300px;
        }
    }
</style>
<!-- This is store page-->
<div data-role="page" id="product">

    <?php include '../parts/header.php' ?>

    <?php
    $data = $GLOBALS['db'];
    $json = json_decode($data, true);
    $id = $_GET['id'];
    ?>
    <div role="main" class="ui-content" style="padding: 0; display: block; box-sizing: unset;">

        <div class="header-title" style="display: flex;">
            <span class="iconify" alt="page_icon" data-icon="uil:parcel" data-width="50" data-height="50"></span>
            <h3 style="margin-top: -3px; margin-bottom: 10px; color: black;">Product</h3>
            <!-- <img alt="page_icon" src="../../common/assets/images/icons/login.png" height="35" width="35"> -->
        </div>
        <!--start of main grid-->
        <div class="ui-grid-a" style="padding: 30px;">
            <!--            start of main product block-->
            <div class="ui-block-a">
            <?php echo '<img class="center main-pro-img" style="height:280px; width: 300px; border-radius: 15px; box-shadow: 0 0 20px 0 #343434;" src="', $json[$id]['image'], '" >' ?? '' ?>
                <div class="ui-bar ui-bar-a ui-card product-card" style="height: auto; max-width: 600px; margin: auto; margin-top: -5px;">
                    
                    <div class="ui-grid-a">
                        <div class="ui-block-a" style="width: 100%">
                        <div class="ui-block-b" style="width: 100%; margin-left: 240px; transform: transitionY(15px); margin-bottom: -10px;">
                            <a href="#viewAR" data-rel="popup" data-position-to="window"
                               data-transition="pop"><img alt="page_icon" class="ar-view" src="../../common/assets/images/icons/ar-1.png" style="height: 75px; width: 75px;"></a>
                        </div>
                            <p style="font-size: 26px; font-family: 'Poppins',serif; color: #333; font-weight: 400; text-align: center;"><?php echo $json[$id]['name'] ?? '' ?> </p>
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                                if ((int)$json[$id]['rating'] <= $i) {
                                    echo
                                    '<span class="fa fa-star rating" style="font-size: 18px; text-align: center; margin-left: 52px;"></span>';
                                } else {
                                    echo
                                    '<span class="fa fa-star fa-checked rating-checked" style="font-size: 18px; text-align: center; margin-left: 52px;"></span>';
                                }
                            }
                            ?>
                            <p class="card-price" style="position: relative; font-size: 22px; text-align: center; margin-top: 15px; margin-bottom: 5px; color: #63717a">
                                LKR <?php echo $json[$id]['price'] ?? '' ?></p>
                        </div>
                    </div>
                    <p style="font-weight: 200; font-size: 22px; margin-top: 0px"><?php echo $json[$id]['description'] ?? '' ?></p>
                    <div data-role="collapsible" data-enhanced="true"
             class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed">
                        <span class="ui-collapsible-heading ui-collapsible-heading-collapsed" style="margin-top: 10px;
                         padding: 0 5px;">
                            <a data-ajax="false" href="#" class="ui-collapsible-toggle" style="font-size: 20px;">
                            Readmore
                            </a>
                        </span>

            <div class="ui-collapsible-content ui-collapsible-content-collapsed" aria-hidden="true">
                <p style="text-align: justify; font-weight: 200;"><?php echo $json[$id]['longDescription'] ?? '' ?></p>
            </div>
        </div>
                    <div style="display: inline-flex; width: 100%; justify-content: center; font-size: 30px">
                    <span class="flaticon-122-heart fav-icon-card" id="<?php echo $id ?>"
                          onclick="favourite(this)" style="margin-top: 15px; margin-right: 25px;" ></span>
                          <span><a href="#" onclick="collectchat.open()">
                        <img src="../../common/assets/images/icons/chat.png" alt="chat" style="height: 40px; margin-top: 15px; mnargin-left:35px; margin-right: 25px;">
                    </a></span>
                    <span>
                    <a href="#cart-feedback" data-rel="popup" data-position-to="window" data-transition="pop">
                        <img src="../../common/assets/images/icons/product-cart.png" alt="cart" id="addToCart" style="height: 40px; margin-top: 15px; margin-left: 15px; margin-right: 25px;">
                    </a>
                    </span>
                    <span>
                    <a style="margin: 10px">
                        <button id="buyNow" style="margin-left: 15px; margin-top: -30px; width: 100px; border-radius: 30px; font-family: 'Poppins'; font-size: 18px;">Buy</button>
                    </a>
                    </span>
                    </div>
                </div>

            </div>
            <!--            start of feature product block-->
            <div class="ui-block-b ipad-feature-product">
                <div>
                <h2>Similar Products</h2>
            <!--                start of mini product grid-->
            <div>
                <div class="ui-grid-b">
                    <div class="ui-block-a" style="width: 100%;">
                        <a target="_parent" href="product.php?id=<?php echo $json[$id + 1]['id'] ?>">
                            <div class="ui-bar ui-bar-a ui-card"
                                 style="height: unset; max-width: 100%; margin-left: 20px; margin-top: 20px; margin-bottom: 40px;">
                                
                                <?php echo '<img class="center" style="height: auto; width: 30%; float: left;" src="', $json[$id + 1]['image'], '" >' ?? '' ?>
                                <p style="font-weight: 200; font-family: 'Poppins'; font-size: 22px; margin-top: 10px;"><?php echo $json[$id + 1]['name'] ?? '' ?> </p>
                                <p class="card-price"
                                   style="position: relative; font-size: 20px; color: #63717a; margin-top: 15px;">
                                    LKR <?php echo $json[$id + 1]['price'] ?? '' ?></p>
                            </div>
                        </a>
                    <!-- </div>
                    <div class="ui-block-b"> -->
                        <a target="_parent" href="product.php?id=<?php echo $json[$id + 2]['id'] ?>">
                            <div class="ui-bar ui-bar-a ui-card"
                                 style="height: unset; max-width: 100%; margin-left: 20px; margin-top: 20px; margin-bottom: 40px;">
                                <?php echo '<img class="center" style="height: auto; width: 30%; float: left;" src="', $json[$id + 2]['image'], '" >' ?? '' ?>
                                <p style="font-weight: 200; font-family: 'Poppins'; font-size: 22px; margin-top: 10px;"><?php echo $json[$id + 2]['name'] ?? '' ?> </p>
                                <p class="card-price"
                                       style="position: relative; font-size: 20px; color: #63717a; margin-top: 15px;">
                                        LKR <?php echo $json[$id + 2]['price'] ?? '' ?></p>
                            </div>
                        </a>
                    <!-- </div>
                    <div class="ui-block-c"> -->
                        <a target="_parent" href="product.php?id=<?php echo $json[$id + 3]['id'] ?>">
                            <div class="ui-bar ui-bar-a ui-card"
                                 style="height: unset; max-width: 100%; margin-left: 20px; margin-top: 20px; margin-bottom: 40px;">
                                <?php echo '<img class="center" style="height: auto; width: 30%; float: left;" src="', $json[$id + 3]['image'], '" >' ?? '' ?>
                                <p style="font-weight: 200; font-family: 'Poppins'; font-size: 22px; margin-top: 10px;"><?php echo $json[$id + 3]['name'] ?? '' ?> </p>
                                <p class="card-price"
                                       style="position: relative; font-size: 20px; color: #63717a; margin-top: 15px;">
                                        LKR <?php echo $json[$id + 3]['price'] ?? '' ?></p>
                            </div>
                        </a>

                        <a target="_parent" href="product.php?id=<?php echo $json[$id + 4]['id'] ?>">
                            <div class="ui-bar ui-bar-a ui-card"
                                 style="height: unset; max-width: 100%; margin-left: 20px; margin-top: 20px; margin-bottom: 40px;">
                                <?php echo '<img class="center" style="height: auto; width: 30%; float: left;" src="', $json[$id + 4]['image'], '" >' ?? '' ?>
                                <p style="font-weight: 200; font-family: 'Poppins'; font-size: 22px; margin-top: 10px;"><?php echo $json[$id + 4]['name'] ?? '' ?> </p>
                                <p class="card-price"
                                       style="position: relative; font-size: 20px; color: #63717a; margin-top: 15px;">
                                        LKR <?php echo $json[$id + 4]['price'] ?? '' ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                    
                </div>
                <!-- BUTTONS -->

                <div style="text-align: center; padding: 60px; top: 0; transform: translateX(-50%);" data-role="popup"
                     id="cart-feedback">
                    <h1>Added to Cart</h1> <img style="width: 90px" src="../../common/assets/images/checked-green.png">
                </div>


            </div>


            <?php include '../popups/customer_Rewards.php' ?>
            <?php include '../popups/chatWithSeller.php' ?>
            <?php include '../popups/viewAR.php' ?>
        </div>
        <div style="padding: 15px; margin-left: 20px;">
            


            <!-- comment area -->
            <?php include '../parts/comments.php' ?>

        </div>
    </div>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
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
