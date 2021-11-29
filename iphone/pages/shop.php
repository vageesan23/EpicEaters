<?php include '../parts/head.php' ?>
<!-- This is shop page-->
<div data-role="page" id="shop">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content" style="margin: 0; padding: 0; min-height: 85vh;">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>Shop</h3>
            <img alt="page_icon" src="../../common/assets/images/icons/shop.png" height="35" width="35">
        </div>
        <!-- POI Card-->
        <div class="ui-grid-d search" data-filter="true" data-filter-placeholder="Search for DIY products"
             style="padding: 15px; width: fit-content; margin: 10px auto 100px auto;">
            <div>
                <h3 style="float: left; font-weight: 800">DYI Products</h3>
                <button onclick=sort()><?php if ($_COOKIE['sortDb'] == 'db') {
                        echo "Sort A-Z";
                    } else echo "Reset Sort" ?></button>
            </div>
            <?php
            $data = $GLOBALS[$_COOKIE['sortDb']];
            $json = json_decode($data, true);

            foreach ($json as $key => $item) {
                if ($key % 4 == 0) {
                    $column = 'a';
                } else if ($key % 4 == 1) {
                    $column = 'b';
                } else if ($key % 4 == 2) {
                    $column = 'c';
                } else {
                    $column = 'd';
                }
                $name = $item['name'];
                $price = $item['price'];
                $image = $item['image'];
                include '../parts/poiCard.php';
            }
            ?>
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    <script>
        if ($.cookie('wishList') != null) {
            data = JSON.parse($.cookie('wishList'));
            for (let i = 0; i < data.length; i++) {
                $("#" + data[i]).css('color', 'red');
            }
        }

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
            $.cookie('wishList', JSON.stringify(data), { path: '/' });
        }

        function sort() {
            if (getCookie('sortDb') === 'db') {
                document.cookie = "sortDb=sodb";
            } else {
                document.cookie = "sortDb=db";
            }
            console.log(getCookie('sortDb'))
            window.location.reload();
        }

        function getCookie(cname) {
            const name = cname + "=";
            const decodedCookie = decodeURIComponent(document.cookie);
            const ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    </script>
    </html>
