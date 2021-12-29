<?php include '../parts/head.php' ?>
<style>
    .page-icon {
        margin-top: 10px;
    }

    .main-part .main-card {
        height: auto; 
        max-width: 750px; 
        margin: auto; 
        position: relative; 
        display: flex;
    }
    
    .main-part .main-img {
        max-width: 270px; 
        height: 220px; 
        border-radius: 15px;
        object-fit: cover; 
        overflow: auto;
        margin: 45px 0px 0px 0px;
        text-align: left;
        background-size: cover;
    }

    .main-part .ui-grid-a .ui-block-a .ar-view img {
        height: 75px; 
        width: 75px; 
        margin-left: 350px; 
        margin-top: -30px; 
        margin-bottom: -50px;
    }

    .main-part .ui-grid-a .ui-block-a .main-pr-name {
        font-weight: 200; 
        font-family: 'Poppins'; 
        font-size: 18px; 
        margin-top: 20px;
        margin-left: 50px;
    }

    .main-part .ui-grid-a .ui-block-a .rating {
        margin-top: 10px;
        font-size: 18px;
        margin-left: 40px;
    }

    .main-part .ui-grid-a .ui-block-a .rating-checked {
        margin-top: 10px;
        font-size: 18px;
        margin-left: 40px;
    }

    .main-part .ui-grid-a .ui-block-a .main-pr-price {
        position: relative;
        margin-top: 20px;
        color: #63717a;
        margin-left: 50px;
    }

    .main-part .ui-grid-a .ui-block-a .main-desc {
        font-size: 18px;
        width: 100%;
        margin-left: 50px;
    }

    .main-part .ui-grid-a .ui-block-a .read-more {
        margin-left: 40px;
    }

    .main-part .ui-grid-a .ui-block-a .long-desc {
        font-size: 16px;
    }

    .main-part .ui-grid-a .ui-block-a .long-desc p {
            text-align: justify;
            font-weight: 200;
            /* height: 60px;
            width: 100%;
            overflow-y: scroll; */
            margin-left: 35px;
        }

    .main-part .ui-grid-a .ui-block-a .heart-icon {
        margin-top: 15px; 
        margin-right: 25px; 
        height: 30px;
    }

    .main-part .ui-grid-a .ui-block-a .chat-icon {
        height: 30px; 
        margin-top: 15px; 
        margin-left:2px; 
        margin-right: 20px;
    }

    .main-part .ui-grid-a .ui-block-a .cart-icon {
        height: 30px;
        margin-top: 15px;
        margin-left: 15px;
        margin-right: 25px;
    }

    .main-part .ui-grid-a .ui-block-a .buy-btn {
        margin-left: 15px;
        margin-top: -15px;
        width: 75px;
        border-radius: 30px;
        font-family: 'Poppins';
        font-size: 18px;
    }

    .sub-img {
        height: auto;
        width: 25%;
        float: left;
    }

    .sub-name {
        font-weight: 200;
        font-family: 'Poppins';
        font-size: 22px;
        margin-top: 10px;
        margin-left: 15px;
    }

    .sub-price {
        position: relative;
        font-size: 20px;
        color: #63717a;
        margin-top: 15px;
        margin-left: 15px;
    }

    @media (max-width: 400px) {
        .main-part .main-card {
            padding: 1px;
            height: auto; 
            max-width: 320px; 
            margin: auto; 
            position: relative; 
            display: flex; 
            /* transform: translateX(40px); */
        }

        .main-part .main-img {
            width: 200px;
            height: 150px;
            margin-top: 60px;
            padding: 20px;
            /* transform: translateX(-30px); */
        }
        .main-part .ui-grid-a .ui-block-a .ar-view img {
            height: 50px; 
            width: 50px; 
            margin-left: 120px; 
            margin-top: -150px; 
            margin-bottom: -35px;
        }

        .main-part .ui-grid-a .ui-block-a .main-pr-name {
            font-weight: 200; 
            font-family: 'Poppins'; 
            font-size: 16px; 
            margin-top: 20px;
            margin-left: 20px;
        }

        .main-part .ui-grid-a .ui-block-a .rating {
            margin-top: 5px;
            margin-left: 10px;
            font-size: 14px;
        }

        .main-part .ui-grid-a .ui-block-a .rating-checked {
            margin-top: 5px;
            font-size: 14px;
            margin-left: 10px;
        }

        .main-part .ui-grid-a .ui-block-a .main-pr-price {
            position: relative;
            margin-top: 15px;
            font-size: 14px;
            color: #63717a;
            margin-left: 20px;
        }

        .main-part .ui-grid-a .ui-block-a .main-desc {
            font-size: 11px;
            width: 100%;
            margin-left: 20px;
        }

        .main-part .ui-grid-a .ui-block-a .read-more {
            font-size: 12px;
            margin-left: 10px;
        }

        .main-part .ui-grid-a .ui-block-a .long-desc {
            font-size: 11px;
        }

        .main-part .ui-grid-a .ui-block-a .long-desc p {
            text-align: justify;
            font-weight: 200;
            /* height: 30px;
            width: 100%;
            overflow-y: scroll; */
            margin-left: 5px;
        }

        .main-part .ui-grid-a .ui-block-a .heart-icon {
            margin-top: 15px; 
            margin-left: 10px;
            margin-right: 2px; 
            height: 15px;
        }

        .main-part .ui-grid-a .ui-block-a .chat-icon {
            height: 25px; 
            margin-top: 15px; 
            margin-left: 2px; 
            margin-right: 2px;
            
        }

        .main-part .ui-grid-a .ui-block-a .cart-icon {
            height: 25px;
            margin-top: 15px;
            margin-left: 2px;
            margin-right: 2px;
        }

        .main-part .ui-grid-a .ui-block-a .buy-btn {
            margin-left: 2px;
            margin-top: -10px;
            width: 50px;
            border-radius: 30px;
            font-family: 'Poppins';
            font-size: 12px;
        }

        .sub-name {
            font-size: 12px;
        }

        .sub-img {
            width: 40%;
        }

        .sub-price {
            font-size: 10px;
        }

        .similar-product {
            width: 100%;
        }

        .similar-product .ui-card {
            display: inline-flex;
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
        <span class="iconify page-icon" alt="page_icon" data-icon="uil:parcel" data-width="30" data-height="30"></span>
            <h3 style="margin-top: -3px; margin-bottom: 10px; color: black;">Product</h3>
        </div>

        <div class="main-part" style="width: 100%;">
            <div class="ui-bar ui-bar-a ui-card main-card">

            <?php echo '<img class="center main-img" src="', $json[$id]['image'], '">' ?? '' ?>
            
                <div class="ui-grid-a">
                    <div class="ui-block-a main-content" style="width: 100%">
                    <a href="#viewAR" data-rel="popup" data-position-to="window"
                       data-transition="pop" class="ar-view"><img alt="page_icon" src="../../common/assets/images/icons/ar-1.png"></a>
                    <p class="main-pr-name"><?php echo $json[$id]['name'] ?? '' ?> </p>
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        if ((int)$json[$id]['rating'] <= $i) {
                            echo
                            '<span class="fa fa-star rating"></span>';
                        } else {
                            echo
                            '<span class="fa fa-star fa-checked rating-checked"></span>';
                        }
                    }
                    ?>
                    <p class="card-price main-pr-price">LKR <?php echo $json[$id]['price'] ?? '' ?></p>
                    <div class="ui-block-a" style="width:80%">
                        <div style="margin-top: 1px">
                            <p class="main-desc" style="font-weight: 300;"><?php echo $json[$id]['description'] ?? '' ?></p>
                            <div data-role="collapsible" data-enhanced="true"
                                class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-collapsed">
                                <span class="ui-collapsible-heading ui-collapsible-heading-collapsed read-more" style="margin-top: 10px;
                                    padding: 0 10px; font-weight: 500;">
                                    <a data-ajax="false" href="#" class="ui-collapsible-toggle" style="font-weight: 300;">
                                    Readmore
                                    </a>
                                </span>

                                <div class="ui-collapsible-content ui-collapsible-content-collapsed long-desc" aria-hidden="true">
                                    <p><?php echo $json[$id]['longDescription'] ?? '' ?></p>
                                </div>
            
                                <div style="display: inline-flex;width: 100%; justify-content: center; margin-left: 10px;">
                                    <span class="flaticon-122-heart fav-icon-card heart-icon" id="<?php echo $id ?>"
                                            onclick="favourite(this)" ></span>
                                    <span><a href="#" onclick="collectchat.open()">
                                            <img src="../../common/assets/images/icons/chat.png" alt="chat" class="chat-icon">
                                        </a>
                                    </span>
                                    <span>
                                        <a href="#cart-feedback" data-rel="popup" data-position-to="window" data-transition="pop">
                                            <img src="../../common/assets/images/icons/product-cart.png" alt="cart" id="addToCart" class="cart-icon">
                                        </a>
                                    </span>
                                    <span>
                                        <a style="margin: 10px">
                                            <button id="buyNow" class="buy-btn">Buy</button>
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
        <b><span style="margin-left: 25px; position: relative; top: 30px;">Similar Items</span></b>
        <div class="ui-grid-a" style="margin-top: 20px;">
        
        <div class="ui-block-a similar-product" style="width: 50%;">
            <a target="_parent" href="product.php?id=<?php echo $json[$id + 1]['id'] ?>">
                            <div class="ui-bar ui-bar-a ui-card"
                                 style="height: unset; max-width: 100%; margin-left: 20px; margin-top: 20px; margin-bottom: 40px;">
                                
                                <?php echo '<img class="center sub-img" src="', $json[$id + 1]['image'], '" >' ?? '' ?>
                                <div>
                                <p class="sub-name"><?php echo $json[$id + 1]['name'] ?? '' ?> </p>
                                <p class="card-price sub-price">
                                    LKR <?php echo $json[$id + 1]['price'] ?? '' ?></p>
                                    </div>
                            </div>
                        </a>
        </div>
        <div class="ui-block-b similar-product" style="width: 50%;">
        <a target="_parent" href="product.php?id=<?php echo $json[$id + 2]['id'] ?>">
                            <div class="ui-bar ui-bar-a ui-card"
                                 style="height: unset; max-width: 100%; margin-left: 20px; margin-top: 20px; margin-bottom: 40px;">
                                <?php echo '<img class="center sub-img" src="', $json[$id + 2]['image'], '" >' ?? '' ?>
                                <div>
                                <p class="sub-name"><?php echo $json[$id + 2]['name'] ?? '' ?> </p>
                                <p class="card-price sub-price">
                                        LKR <?php echo $json[$id + 2]['price'] ?? '' ?></p>
                                        </div>
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
