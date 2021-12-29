<?php include '../parts/head.php' ?>

<!-- This is Clicker Select product page-->

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

<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>
    
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
