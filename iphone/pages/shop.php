<?php include '../parts/head.php' ?>

<!-- This is shop page-->

<style>
    .ui-filterable {
        position: relative;
        bottom: 4px;
    }

    .ui-content {
        margin-bottom: 30px;
    }

    .card-title {
        max-width: none;
        font-size: 15px;
        margin-top: -16px;
    }

    .card-price {
        font-size: 14px !important;
    }

    @media (max-width: 376px) {
        .card-title {
            font-size: 14px !important;
            margin-top: -2px !important;
        }

        .card-price {
            font-size: 13px !important;

        }
    }
</style>

<div data-role="page" id="shop">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content" style="margin: 0; padding: 0; min-height: 85vh;">
    <div class="header-title" style="display: flex;">
        <span class="iconify" alt="page_icon" data-icon="fluent:building-shop-20-filled" data-width="50" data-height="50"></span>
            <h3 style="margin-top: -3px; margin-bottom: 10px; color: black;">Shop</h3>
        </div>

        <!-- POI Card-->
        <div class="ui-grid-d search" data-filter="true" data-filter-placeholder="Search for food Products"
             style="padding: 15px; width: fit-content; margin: 10px auto 100px auto;">
        
             <!-- This is the sort fumction -->
            <div>
                <!-- <h3 style="float: left; font-weight: 800">DYI Products</h3> -->
                <!-- <button onclick=sort()><?php if ($_COOKIE['sortDb'] == 'db') {
                        echo "Sort A-Z";
                    } else echo "Reset Sort" ?></button> -->
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
        <?php include '../parts/chatbot.php' ?>
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
