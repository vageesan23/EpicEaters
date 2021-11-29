<!--
Order History Page
-->
<?php include
'../parts/head.php';
ob_start();
session_start();
?>
<!-- This is order history page-->
<div data-role="page" id="orderHistory">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>Order History</h3>
            <img alt="page_icon" src="../../common/assets/images/icons/shop.png" height="35" width="35">
        </div>
        <!-- POI Card-->

        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo '<div class="ui-grid-c back-box" ' .
                'style="padding: 15px; margin-bottom: 10px; background-color: #D4EDDA; color: #009999">' .
                'Your Payment is Successful! You will receive your order soon.</div>';
            setcookie('cart', null, time() - 3600, '/');

        } else if (isset($_GET['status']) && $_GET['status'] == 'failed') {
            echo '<div class="ui-grid-c back-box" ' .
                'style="padding: 15px; margin-bottom: 10px; background-color: #F8D7DA; color: #721C24">' .
                'Your Payment is not successful! Please check your card detail.</div>';
        }
        ?>
        <div class="ui-grid-a search" data-filter="true" data-filter-placeholder="Search for orders"
             style="margin-top: 10px;">
            <p id="loading" style="text-align: center">Loading...</p>
            <div id="items">
                <!--cards-->
            </div>
        </div>
    </div>
    <?php include '../popups/addRating.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</body>
<script>
    const update = async () => {
        $.getJSON('../../common/orders.json', function (data) {
            let status = data['status'];
            let bookingId = 13000;

            Object.keys(status).forEach(async function (k) {
                if (status[k] !== "REJECTED") {
                    let order = data[k];
                    if (Array.isArray(order)) {
                        for (let j = 0; j < order.length; j++) {
                            let id = order[j]['id'];
                            let qty = order[j]['qty'];
                            await addCard(id, qty);
                        }
                    } else {
                        addBookingCard(order['name'], bookingId++);
                    }
                }
            });
        });
    }

    const addCard = async (id, qty) => {
        $.getJSON("<?php echo $GLOBALS['domain'] ?>/common/functions/getProduct.php?id=" + id, function (data, status) {
            let price = parseFloat(data["price"]) * qty;

            $('#items').append(
                '                <div class="ui-grid-c back-box" style="padding: 15px; margin-bottom: 10px">\n' +
                '                    <div class="ui-block-a " style="width: 30%;">\n' +
                '                        <img alt="product_image" class="center" src="' + data["image"] + '"\n' +
                '                             style="width: 100px; height: 100px; top: 50%; position: absolute; transform: translateY(-50%);">\n' +
                '\n' +
                '                    </div>\n' +
                '                    <div class="ui-block-b" style="width: 40%; padding-left: 20px; font-size: 22px">\n' +
                '                        <p>' + data["name"] + '</p><span style="font-size: 20px">x' + qty + '</span>\n' +
                '                        <button style="opacity: 1; padding: 8px; background-color: #fff63f; color: black;\n' +
                '                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>\n' +
                '                            Pending\n' +
                '                        </button>\n' +
                '                    </div>\n' +
                '                    <div class="ui-block-c" style="width: 20%; font-size: 20px; ">\n' +
                '                        <a href="#popuprating" style="padding: 10px" data-rel="popup" data-position-to="window"\n' +
                '                           class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a"\n' +
                '                           data-transition="pop" onclick="return rate(' + id + ');">Rate</a>\n' +
                '                        <p>LKR ' + price + '</p>\n' +
                '                    </div>\n' +
                '                </div>\n');
        });
    }

    const addBookingCard = (name, id) => {

        $('#items').append(
            '                <div class="ui-grid-c back-box" style="padding: 5px; margin-bottom: 10px">\n' +
            '                    <div class="ui-block-a " style="width: 15%;">\n' +
            '                        <img alt="product_image" class="center" src="https://c1.sfdcstatic.com/content/dam/blogs/ca/Blog%20Posts/shake-up-sales-meeting-og.jpg"\n' +
            '                             style="width: 50px; top: 50%; position: absolute; transform: translateY(-50%);">\n' +
            '\n' +
            '                    </div>\n' +
            '                    <div class="ui-block-b" style="width: 50%;">\n' +
            '                        <p>' + name + ' (Booking)</p>\n' +
            '                        <button style="opacity: 1; padding: 4px; background-color: #fff63f; color: black;\n' +
            '                                border-color: #fff; box-shadow: none; font-size: 11px" disabled>\n' +
            '                            Pending\n' +
            '                        </button>\n' +
            '                    </div>\n' +
            '                    <div class="ui-block-c" style="width: 10%;">\n' +
            '                        <p>x 1</p>\n' +
            '                    </div>\n' +
            '                    <div class="ui-block-d" style="width: 25%; font-size: 12px; ">\n' +
            '                        <a href="#popuprating" data-rel="popup" data-position-to="window"\n' +
            '                           class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a"\n' +
            '                           data-transition="pop" onclick="return rate(' + id + ');">Rate Now</a>\n' +
            '                        <p>LKR 2500.00</p>\n' +
            '                    </div>\n' +
            '                </div>\n');
    };

    setTimeout(function () {
        $('#loading').hide();
        update();
    }, 2000);

    // rating
    const ratings = document.getElementsByClassName('rating');
    let r = 0;
    const addedRatings = {};
    let selectedProduct = 0;
    for (let i = 0; i < ratings.length; i++) {
        r = new SimpleStarRating(ratings[i]);

        ratings[i].addEventListener('rate', function (e) {
            onRateChange(e.detail);

        });
    }

    function rate(id) {
        selectedProduct = id;
        r.setCurrentRating(addedRatings[selectedProduct]);
        $('.your-choice-was').hide();
        return true;
    }

    function onRateChange(rate) {
        addedRatings[selectedProduct] = rate;
        //alert("You Rated : " + rate + " stars !!!");
        // $( "#popuprating" ).popup( "close" );
        // $( "#rate-feedback" ).popup( "open" );
        if (rate) {
            $('.your-choice-was').show();
            $('.choice').text(rate);
        } else {
            $('.your-choice-was').hide();
        }
        setTimeout(function(){ $( "#popuprating" ).popup( "close" ); }, 2000);
        setTimeout(function(){ $( "#rate-feedback" ).popup( "open" );}, 3500);
    }

</script>
</html>
