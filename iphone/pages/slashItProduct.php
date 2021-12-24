<?php include '../parts/head.php' ?>

<!-- This is Clicker Play page-->

<style>
    .dname {
        /* max-width: none; */
        font-size: 18px;
        margin: 60px 0px 0px 125px;
        white-space: nowrap;
    }

    .dbar {
        margin: -120px 0px 0px 80px;
    }

    .dprice {
        margin: -12px 0px 0px 30px;
        font-size: 15px;
        white-space: nowrap;
    }

    .doffprice {
        margin: 0px 0px 0px 70px;
        font-size: 25px;
        white-space: nowrap;
    }

    @media (max-width: 376px) {
        .dname {
            font-size: 14px !important;
            margin: 50px 0px  0px  50px  !important;
            white-space: nowrap !important;
        }

        .dbar {
            margin: -22px 0px 0px 7px !important;

        }

        .dprice {
            margin: -18px 0px 0px -120px !important;
            font-size: 15px;
            white-space: nowrap;
        }

        .doffprice {
            margin: 8px 0px 0px 10px !important;
            font-size: 20px !important;
            white-space: nowrap;
            padding-left: 5px;
        }
    }
</style>

<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>

    <?php
    $data = $GLOBALS['db'];
    $json = json_decode($data, true);
    $id = $_GET['id'];
    ?>

    <div role="main" class="ui-content">
        <center>
            <img src="../../common/assets/images/clicker/clickerProduct-iPhone.jpg"
                 style="margin: -15px 0px 0px -15px; width: 108%;">
        </center>

        <div class="m" style ="display:flex">
        <div class="ui-bar ui-bar-a ui-card" style="height: unset;  margin-top: 50px; margin-left: 10px;">
            <img class="center" src="../../common/assets/images/products/product-1.jpg" style="max-width: 320px; margin-top: 25px;">           
        </div>
        
        <p class="dname" style="font-weight: bold; font-family: 'Poppins';">
            <?php echo $json[$id]['name'] ?? '' ?></p>

        <div class="progress-wrapper" style="margin: 30% 0% 0% -40% ; width:80%; ">
            <div class="progress-bar dbar" style="background-color: #C4C4C4;">
                <span class="progress-bar-fill" style="width: 70%; background-color: #EF005A;
                "></span>
            </div>
            <div class="ui-grid-a">
                <div class="ui-block-a" style="width: 15%; margin:40px 0px 0px 150px">
                    <div style="display: flex;">
                        <p class="card-price dprice"
                           style="position: relative; color: #63717A; text-decoration: line-through;">LKR <?php echo $json[$id]['price'] ?? '' ?></p>
                        <p class="card-price doffprice"
                           style="position: relative; color: #63717A;">LKR <?php echo $json[$id]['price'] * 0.7 ?? '' ?></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div class="back-box" style="margin-bottom: 20px;margin-top: 50px; border-radius: 0px; width: 80%; margin-left: 10%;">
            <center>
                <a href="#popupBasic" data-rel="popup" data-position-to="window"
                   data-transition="pop"><h3
                            style="color: #EF005A; font-size: 12px;">Invite your friends to get the offer prices</h3></a>
            </center>
        </div>

        <div style="width: 300px; text-align: center; font-size: 12px;" data-role="popup" id="popupBasic">
            <h2>Invite your friends to get the offer price</h2>
            <div class="share-social">
                <img src="../../common/assets/images/social-icons/link.png" 
                    style="color: white; margin: 12px; height: 96px; width: 80px;" href="#";>
                    <!-- <p>Copy link</p> -->
                <img src="../../common/assets/images/social-icons/facebook.png" 
                    style="color: white; margin: 12px; height: 96px; width: 80px;" href="#">
                    <!-- <p>Facebook</p> -->
                <img src="../../common/assets/images/social-icons/twitter.png" 
                    style="color: white; margin: 12px; height: 96px; width: 80px;" href="#">
                    <!-- <p>Twitter</p> -->
                <img src="../../common/assets/images/social-icons/instagram.png" 
                    style="color: white; margin: 12px; height: 96px; width: 80px;" href="#">
                    <!-- <p>Instagram</p> -->
                <img src="../../common/assets/images/social-icons/whatsapp.png" 
                    style="color: white; margin: 12px; height: 96px; width: 80px;" href="#">
                    <!-- <p>Whatsapp</p> -->
                <img src="../../common/assets/images/social-icons/more.png" 
                    style="color: white; margin: 12px; height: 96px; width: 80px;" href="#">
                    <!-- <p>Other</p> -->
                
            </div>
        </div>
    </div>
        <?php include '../parts/chatbot.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
