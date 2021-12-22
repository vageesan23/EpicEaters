<!--
Wish List Page
-->

<style>
    .ui-content {
        margin-bottom: 45px !important;
    }

    .ui-popup {
        position: relative;
        left: 125px;
        min-width: 250px !important;
    }

    .fa {
        position: relative;
        top: 10px;
    }

    .bold-text {
        position: relative;
        bottom: 17px;
        left: 7px;
    }

    .ui-mobile label,
    .ui-controlgroup-label {
        margin: 0 0 1em !important;
    }
</style>

<?php include '../parts/head.php' ?>
<div data-role="page" id="shop">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="display: flex;margin-bottom: 5px;">
            <span class="iconify" data-icon="iconoir:favourite-book" data-width="43" data-height="43"></span>
            <h3 style="padding-top: 4px">Favourite List</h3>
        </div>
        <!-- POI Card-->
        <div id="content" class="ui-grid-a search" data-filter="true" data-filter-placeholder="Search for your dessert" style="margin-top: 35px;">

            <div id="items"></div>
            <a data-rel="popup" data-position-to="window" data-transition="pop" href="#wishListEmail">
                <button style="width: 325px;margin: auto;">Share to Email</button>
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
                '                             style="width: 80px; height: 80px; top: 50%; margin-top: 22px; transform: translateY(-50%);">\n' +
                '\n' +
                '                    </div>\n' +
                '                    <div class="ui-block-b" style="width: 40%; font-size: 12px; ">\n' +
                '                        <a data-ajax="false" href="product.php?id=' + id + '" \n' +
                '                           data-transition="pop"><p style="font-size: 17px; color: #333333; margin-top:10px;">' + data["name"] + '</p></a>\n' +
                '                    </div>\n' +
                '                    <div class="ui-block-c" style="width: 30%; height: 50px">\n' +
                '                        <p style=" font-size: 15px; color: #63717A; font-weight: 800;margin-top:12px;">LKR ' + data["price"] + '</p>\n' +
                '                    </div>\n' +
                '                </div>\n');
        });

    setTimeout(function() {
        update();
    }, 200);
</script>

</html>