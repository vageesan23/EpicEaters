<?php include '../parts/head.php' ?>
<!-- This is slash it page-->
<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>

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
    </style>
    

    <div   class="ui-content1" style="padding: 0%;">
        <!-- <div class="header-title" style="margin-bottom: 10px;">
            <h3>Slash It</h3>
            <img alt="page_icon" src="../../common/assets/images/icons/slashIt.png" height="35" width="35">
        </div> -->
        <div>
            <img src="../../common/assets/images/clicker/clickerforiPad.jpg" 
                style="width: 100%;">
            <img class="doyouknow" src="../../common/assets/images/clicker/doyouknow-iPad.png">

            <a data-ajax="false" href="slashItPlay.php">
                <img src="../../common/assets/images/clicker/letsplay_iPad.png" 
                    style="width: 20%; margin-top: -78px; margin-left: 70%; position: absolute;">
                </a>

            <img src="../../common/assets/images/clicker/img-iPad.png" 
                style="width: 40%;">
            <img src="../../common/assets/images/clicker/regulation-iPad.png" 
                style="width: 55%; ">
        </div>

        <!-- <div>
            <div class="split left">
                <img src="../../common/assets/images/clicker/img-iPad.png" 
                style="width: 80%; margin-top: 20px;">
            </div>
            
            <div class="split right"> 
                <img src="../../common/assets/images/clicker/regulation-iPad.png" 
                style="width: 80%; ">
            </div>
        </div> -->

        <!-- <center>
            <a data-ajax="false" href="slashItPlay.php">
                <img src="../../common/assets/images/clicker/letsplay-iPad.png" style="width: 30%; padding-top: -40px;">
            </a>
        </center> -->
        <!-- <div style="display: flex; justify-content: space-around; padding: 40px 0px">
            <img src="../../common/assets/images/slashit/slashit-banner-1.png" width="330">
            <img src="../../common/assets/images/slashit/callfriend.png" style="border-radius: 20px;">
            <img src="../../common/assets/images/slashit/callfriend2.png" >
        </div>
        <div style="display: flex">
            <img src="../../common/assets/images/slashIt-ipad2.png"
                 style="width: 28%; margin-right: 20px; border-radius: 46px; ">
            <img src="../../common/assets/images/slashIt-ipad.png" style="width: 70%">
        </div> -->

    </div>
        <?php include '../parts/chatbot.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
