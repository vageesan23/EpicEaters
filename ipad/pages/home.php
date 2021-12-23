<?php include '../parts/head.php' ?>
<!-- This is page 1-->

<style>
    @media (min-width: 767px) and (max-width: 1023px) {
        .advertisement {
            height: 195px !important;
        }
    }

    .card-title {
        max-width: none;
        margin-top: 7px;
    }

    .ui-content {
        margin-bottom: 45px;
    }

    .ui-filterable {
        position: relative;
        bottom: 17px;
    }
</style>

<div data-role="page" id="page1">
    <?php include '../parts/header.php' ?>

    <!-- video -->
    <video style="object-fit: cover;" width="100%" height="300" autoplay>
        <source src="../videos/introduction-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- welcome note-->
    <div style="position: absolute;">
        <h2 style="padding: 5px 20px;margin-top: -70px;font-size: 20px;color: rgb(255, 255, 255);font-family: 'Poppins', sans-serif;font-weight: 500;">
            Hello there, What dessert do you want today?
        </h2>
    </div>

    <div role="main" class="ui-content" style="margin-top: -279px;">
        <!-- POI Card-->
        <div class="ui-grid-d search" data-filter="true" data-filter-placeholder="Search for dessert items" style="width: fit-content; margin: 215px auto 0 auto;">

            <div>
                <h3 style="float: left; font-weight: 800;line-height: 4.5em; ">Recommended</h3>
                <a data-ajax="false" href="shop.php" data-transition="pop" style="float: right; line-height: 4.5em;">View
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
                    echo '
                    <div class="ui-block-a" style="min-width: 25%; margin-top: 10px">
                    <img class="advertisement" src="http://via.placeholder.com/400x220.png/B7B7B7/808080?text=Advertisement" 
                    style="width: 97%; height: 230px; border-radius: 20px">
                </div>';
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

            <div class="ui-grid-d" style="width: fit-content; margin: auto">
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