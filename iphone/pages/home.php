<?php include '../parts/head.php' ?>
<!-- This is page 1-->

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

<div data-role="page" id="page1">
    <?php include '../parts/header.php' ?>

    <!-- video -->
    <video style="object-fit: cover;" width="100%" height="250" autoplay>
        <source src="../videos/introduction-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- welcome note-->
    <div style="position: absolute;">
        <h2 style="padding: 5px 20px; margin-top: -75px; font-size: 20px;
                color: rgb(255, 255, 255); font-family: 'Poppins', sans-serif; font-weight: 400;">
            Hello there, What dessert do you want today?
        </h2>
    </div>

    <div role="main" class="ui-content" style="margin-top: -250px;">
        <!-- POI Card-->
        <div class="ui-grid-d search" data-filter="true" data-filter-placeholder="Search for Dessert items" style="margin-top: 200px;">
            <div>
                <h3 style="float: left; font-weight: 700; line-height: 3.5em;">Recommended</h3>
                <a data-ajax="false" href="shop.php" data-transition="pop" style="float: right; line-height: 3.5em;">View
                    All</a>
            </div>
            <?php
            $data = $GLOBALS['db'];
            $json = json_decode($data, true);

            foreach ($json as $key => $item) {
                if ($key % 4 == 0) {
                    $column = 'a';
                } else if ($key % 3 == 0) {
                    $column = 'b';
                } else if ($key % 2 == 0) {
                    $column = 'c';
                } else {
                    $column = 'd';
                }
                $name = $item['name'];
                $image = $item['image'];
                $price = $item['price'];

                if ($key == 4) {
                    echo '';
                    $column = 'c';
                } elseif ($key == 5) {
                    $column = 'd';
                }

                include '../parts/poiCard.php';
                if ($key++ == 5) break;
            }
            ?>
        </div>
        <div>
            <?php
            $data = $GLOBALS['db'];
            $json = json_decode($data, true);
            ?>

            <div class="ui-grid-d" style="margin: auto">
                <h3 style="float: left;font-weight: 800;margin-top: 25px;margin-bottom: 17px;">Offers</h3>

                <?php
                $data = $GLOBALS['db'];
                $json = json_decode($data, true);

                $key = -1;
                for ($i = 6; $i < sizeof($json); $i++) {
                    $key++;
                    $item = $json[$i];

                    if ($key % 4 == 0) {
                        $column = 'a';
                    } else if ($key % 4 == 1) {
                        $column = 'b';
                    } else if ($key % 4 == 2) {
                        $column = 'c';
                    } else {
                        $column = 'd';
                        $key = -1;
                    }
                    $name = $item['name'];
                    $image = $item['image'];
                    $price = $item['price'];
                    include '../parts/poiCard.php';
                }
                ?>
            </div>
        </div>
    </div>
    <?php include '../popups/introductoryInformation.php' ?>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</body>
<script>
    if (!$.cookie('introduction')) {
        $(window).on('load', function() {
            $.cookie('introduction', true, {
                path: '/'
            });
            $("#popupIntroductory").popup("open");
        });
    }

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
        $.cookie('wishList', JSON.stringify(data), {
            path: '/'
        });
    }
</script>

</html>