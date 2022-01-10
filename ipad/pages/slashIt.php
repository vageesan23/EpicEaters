<?php include '../parts/head.php' ?>

<!-- This is Clicker page-->

<style>
    .split {
        /* height: 100%; */
        width: 50%;
        position: absolute;
    }
    .ui-content1 {
        margin-bottom: 0px;
    }

    @media (max-width: 768px) {
        .doyouknow {
            margin-left: 62%  !important;
            width: 35%  !important;
            margin-top: -240px  !important;
            position: absolute  !important;
        }
    }
    .doyouknow{
        /* margin-left: -830px; */
        margin-left: 60%;
        width: 35%;
        margin-top: -315px;
        position: absolute;
    }

    .regulationiPad {
        width: 58%;
        /* height: 10%; */
        margin: 0px 0px 25px 0px;
    }
</style>

<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>    

    <div   class="ui-content1" style="padding: 0%;">
        <div>
            <img src="../../common/assets/images/clicker/clickerforiPad.jpg" 
                style="width: 100%;">
            <img class="doyouknow" src="../../common/assets/images/clicker/doyouknow-iPad.png">

            <a data-ajax="false" href="slashItPlay.php">
                <img src="../../common/assets/images/clicker/letsplay_iPad.png" 
                    style="width: 20%; margin-top: -85px; margin-left: 70%; position: absolute;">
                </a>

            <img src="../../common/assets/images/clicker/img-iPad.png" 
                style="width: 40%; margin: 0px 0px 22px 0px;">
            <img class="regulationiPad" src="../../common/assets/images/clicker/regulation_iPad.png">
        </div>

    </div>
        <?php include '../parts/chatbot.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
