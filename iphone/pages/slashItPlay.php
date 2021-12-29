<?php include '../parts/head.php' ?>

<!-- This is Clicker Select product page-->

<style>
    .ui-filterable {
        position: relative;
        bottom: 4px;
    }

    .ui-content {
        margin-bottom: 30px;
    }

    .card-title {
        max-width: 135px;
        font-size: 15px;
        margin-top: -16px;
    }

    .card-price {
        font-size: 14px !important;
    }

    .clicker-Pro{
        margin: 0px 0px 0px 0px; 
        width: 100%;
    }

    @media (max-width: 376px) {
        .card-title {
            max-width: 135px !important;
            font-size: 13px !important;
            margin-top: -10px !important;
        }

        .card-price {
            font-size: 11px !important;

        }

        .clicker-Pro{
            margin: 0px 0px 0px 0px !important; 
            width: 100% !important;
        }

    }
</style>

<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>
    <div role="main" class="ui-content" style="padding: 0">
        <center>
            <img class="clicker-Pro" src="../../common/assets/images/clicker/clickerProduct-iPhone.jpg">
        </center>

        <div style="margin: auto; width: fit-content;">
            <?php
            $data = $GLOBALS['db'];
            $json = json_decode($data, true);

            foreach ($json as $key => $item) {
                if ($key % 4 == 0) {
                    $column = 'a';
                } else if ( $key % 3 == 0) {
                    $column = 'b';
                } else if ( $key % 2 == 0) {
                    $column = 'c';
                } else {
                    $column = 'd';
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
