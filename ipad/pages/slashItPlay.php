<?php include '../parts/head.php' ?>
<!-- This is slash it page-->
<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>
    <!-- <style>
        .ui-content1 {
            margin-bottom: 0px;
        }
    </style> -->

    <div role="main" class="ui-content">
        <center>
            <img src="../../common/assets/images/clicker/clickerProduct-iPad.jpg"
                    style="margin: -16px 0px 0px -16px; width: 105%;">
        </center>

        <div style="margin: auto; width: fit-content;">
            <?php
            $data = $GLOBALS['db'];
            $json = json_decode($data, true);

            foreach ($json as $key => $item) {
                if ($key % 2 == 0) {
                    $column = 'a';
                } else {
                    $column = 'b';
                }
                $name = $item['name'];
                $price = $item['price'];
                $image = $item['image'];
                $page = 'slashItProduct.php';
                include '../parts/poiCard.php';
            }
            ?>
        </div>
    </div>
        <?php include '../parts/chatbot.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
