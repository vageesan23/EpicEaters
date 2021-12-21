<!--
Wish List Page
-->
<?php include '../parts/head.php' ?>
<div data-role="page" id="shop">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="display: flex;margin-top: 18px;margin-bottom: 10px;">
            <span class="iconify" data-icon="iconoir:favourite-book" data-width="43" data-height="43"></span>
            <h3 style="padding-top: 4px">Favourite List</h3>
        </div>
        <!-- POI Card-->
        <div id="content" class="ui-grid-a search" data-filter="true" data-filter-placeholder="Search for your favourite dessert" style="margin-top: 40px;margin-bottom: -15px;">

            <div id="items"></div>
            <a data-rel="popup" data-position-to="window" data-transition="pop" href="#wishListEmail">
                <button style="width: 230px;margin: auto;">Share to Email</button>
            </a>
        </div>
    </div>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../popups/wishListEmail.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</body>
<script>
    const update = async () => {
        let data;
        if ($.cookie('wishList') != null) {
            data = JSON.parse($.cookie('wishList'));
            for (let j = 0; j < data.length; j++) {
                await addCard(data[j]);
            }
        }
    }

    const addCard = async (id) =>
        $.getJSON("../../common/functions/getProduct.php?id=" + id, function(data, status) {

            $('#items').append(
                '                <div class="ui-grid-c back-box" style="padding: 20px; margin-bottom: 10px">\n' +
                '                    <div class="ui-block-a " style="width: 30%; height: 50px">\n' +
                '                        <img alt="product_image" class="center" src="' + data["image"] + '"\n' +
                '                             style="width: 80px; height: 80px; top: 50%; margin-top: 30px; transform: translateY(-50%);">\n' +
                '\n' +
                '                    </div>\n' +
                '                    <div class="ui-block-b" style="width: 50%; font-size: 12px; ">\n' +
                '                        <a data-ajax="false" href="product.php?id=' + id + '" \n' +
                '                           data-transition="pop"><p style="font-size: 22px">' + data["name"] + '</p></a>\n' +
                '                    </div>\n' +
                '                    <div class="ui-block-c" style="width: 20%; height: 50px">\n' +
                '                        <p style=" font-size: 20px; color: #f5a278; font-weight: 800;">LKR ' + data["price"] + '</p>\n' +
                '                    </div>\n' +
                '                </div>\n');
        });

    setTimeout(function() {
        update();
    }, 200);
</script>

</html>