<?php include '../parts/head.php' ?>

<!-- This is Clicker it page-->

<style>
    .ui-content1 {
        margin-bottom: 0px;
    }

    
    .douknow {
        margin: -6px 0px 0px -16px;
        width: 104%;
        /* height: 10%; */
    }

    @media (max-width: 376px) {
        .douknow {
            width: 104% !important;
            /* height: 10% !important; */
            margin: -6px 0px 0px -8px !important;
        }

</style>

<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>


    <div role="main" class="ui-content1">
        <div>
            <img src="../../common/assets/images/clicker/clickerforiPhone.jpg" 
                style="width: 100%;">
            <img class="douknow" src="../../common/assets/images/clicker/doyouknow-iPhone.png" 
                style="">

            <a data-ajax="false" href="slashItPlay.php">
                <img src="../../common/assets/images/clicker/letsplay-iPhone.png" 
                    style="width: 60%; margin-left: 20%;">
                </a>
            <img src="../../common/assets/images/clicker/regulation-iPhone.png" 
                style="width: 100%; ">
        </div>

    </div>
        <?php include '../parts/chatbot.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
