<?php include '../parts/head.php' ?>
<!-- This is page 1-->
<div data-role="page" id="page1">
    <?php include '../parts/header.php' ?>

    <!-- video -->
    <video style="object-fit: cover;" width="100%" height="240" autoplay>
        <source src="../videos/intro.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- welcome note-->
    <div style="position: absolute;">
        <h2
                style="padding: 5px 20px; margin-top: -120px; font-size: 20px;
                color: rgb(255, 255, 255); font-family: 'Poppins', sans-serif; font-weight: 200;">
            Hello Snoopy, What DIY do you want
            today?
        </h2>
    </div>

    <div role="main" class="ui-content" style="margin-top: -250px;">
        <!-- POI Card-->
        <div class="ui-grid-d search" data-filter="true" data-filter-placeholder="Search for DIY products"
             style="margin-top: 200px;">
            <div>
                <h3 style="float: left; font-weight: 800">Recommended DYI</h3>
                <a data-ajax="false" href="shop.php" data-transition="pop" style="float: right; line-height: 3.5em;">View
                    All</a>
            </div>
            <?php
            $data = $GLOBALS['db'];
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
        <?php include '../popups/introductoryInformation.php' ?>
        <?php include '../parts/chatbot.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
    </div>
    <?php include '../parts/footer.php' ?>
    </body>
    <script>
        if (!$.cookie('introduction')) {
            $(window).on('load', function () {
                $.cookie('introduction', true, {path: '/'});
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
            $.cookie('wishList', JSON.stringify(data), {path: '/'});
        }
    </script>
    </html>
