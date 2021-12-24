<?php include '../parts/head.php' ?>
<style>
    @media (max-width: 375px) {
        .main-part {
            display: block;
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
    <div role="main" class="ui-content">

        <div class="header-title" style="display: flex;">
        <span class="iconify" alt="page_icon" data-icon="uil:parcel" data-width="50" data-height="50"></span>
            <h3 style="margin-top: -3px; margin-bottom: 10px; color: black;">Product</h3>
        </div>

        <div class="main-part" style="width: 100%; display: inline-flex;">
        <?php echo '<img class="center" src="', $json[$id]['image'], '" style="max-width: 330px; height: 200px; border-radius: 15px; transform: translateX(5px); margin-top: 60px; box-shadow: 0 0 20px 0 #343434; text-align: left;">' ?? '' ?>
            <div class="ui-bar ui-bar-a ui-card" style="height: auto; max-width: 100%; margin: auto;">
            
                <div class="ui-grid-a">
                    <div class="ui-block-a" style="width: 100%">
                    <a href="#viewAR" data-rel="popup" data-position-to="window"
                       data-transition="pop"><img alt="page_icon" src="../../common/assets/images/icons/ar-1.png" style="height: 75px; width: 75px; margin-left: 320px; margin-top: -20px; margin-bottom: -70px;"></a>
                    <p style="font-weight: 200; font-family: 'Poppins'; margin-top: 20px;"><?php echo $json[$id]['name'] ?? '' ?> </p>
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        if ((int)$json[$id]['rating'] <= $i) {
                            echo
                            '<span class="fa fa-star" style="margin-top: 10px;"></span>';
                        } else {
                            echo
                            '<span class="fa fa-star fa-checked" style="margin-top: 10px;"></span>';
                        }
                    }
                    ?>
                    <p class="card-price" style="position: relative; margin-top: 20px; color: #63717a;">LKR <?php echo $json[$id]['price'] ?? '' ?></p>
                    <div class="ui-block-a" style="width:65%">
                        <div style="margin-top: 1px">
                            <p style="font-weight: 300;"><?php echo $json[$id]['description'] ?? '' ?></p>
                            <div data-role="collapsible" data-enhanced="true"
                                class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed">
                                <span class="ui-collapsible-heading ui-collapsible-heading-collapsed" style="margin-top: 10px;
                                    padding: 0 12px; font-weight: 500;">
                                    <a data-ajax="false" href="#" class="ui-collapsible-toggle" style="font-weight: 300;">
                                    Readmore
                                    </a>
                                </span>

                                <div class="ui-collapsible-content ui-collapsible-content-collapsed" aria-hidden="true">
                                    <p style="text-align: justify; font-weight: 200;"><?php echo $json[$id]['longDescription'] ?? '' ?></p>
                                </div>
            
                                <div style="display: inline-flex;width: 100%; justify-content: center; margin-left: 55px;">
                                    <span class="flaticon-122-heart fav-icon-card" id="<?php echo $id ?>"
                                            onclick="favourite(this)" style="margin-top: 15px; margin-right: 25px;" ></span>
                                    <span><a href="#" onclick="collectchat.open()">
                                            <img src="../../common/assets/images/icons/chat.png" alt="chat" style="height: 40px; margin-top: 15px; mnargin-left:35px; margin-right: 25px;">
                                        </a>
                                    </span>
                                    <span>
                                        <a href="#cart-feedback" data-rel="popup" data-position-to="window" data-transition="pop">
                                            <img src="../../common/assets/images/icons/product-cart.png" alt="cart" id="addToCart" style="height: 40px; margin-top: 15px; margin-left: 15px; margin-right: 25px;">
                                        </a>
                                    </span>
                                    <span>
                                        <a style="margin: 10px">
                                            <button id="buyNow" style="margin-left: 15px; margin-top: -15px; width: 150px; border-radius: 30px; font-family: 'Poppins'; font-size: 18px;">Buy</button>
                                        </a>
                                    </span>
                                </div>
                </div>
            </div>
        </div>
                <!-- </div>
                <div class="ui-block-b" style="width: 20%"> -->
                    
                </div>
            </div>
        </div>
                </div>

        <!-- text area -->


        <!-- BUTTONS -->
        

        <div class="ui-content" style="text-align: center; padding: 20px;" data-role="popup" id="cart-feedback">
            <h3>Added to Cart</h3> <img style="width: 60px" src="../../common/assets/images/icons/green-tick.png">
        </div>

        <div class="ui-grid-a" style="margin-top: 50px;">
        <!-- <b><span>Similar Items</span></b> -->
        <div class="ui-block-a" style="width: 50%;">
            <!-- <?php
            for ($i = $id + 1; $i < $id + 3; $i++) {
                if ($i == 0) {
                    $column = 'a';
                } else {
                    $column = 'b';
                }
                $name = $json[$i]['name'];
                $price = $json[$i]['price'];
                $image = $json[$i]['image'];
                $key = $i;
                include '../parts/poiCard.php';
            }
            ?> -->
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
        </div>
        <div class="ui-block-b" style="width: 50%;">
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
    </div>
        </div>
        
    </div>
    <?php include '../parts/comments.php' ?>

    <?php include '../popups/chatWithSeller.php' ?>
    <?php include '../popups/viewAR.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
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
    });
</script>
</html>
