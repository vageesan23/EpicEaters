<?php include '../parts/head.php' ?>
<!-- This is slash it page-->
<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>
    <?php
    $data = $GLOBALS['db'];
    $json = json_decode($data, true);
    $id = $_GET['id'];
    ?>
    <div role="main" class="ui-content">
        <center>
            <img src="../../common/assets/images/clicker/clickerProduct-iPad.jpg"
                 style="margin: -16px 0px 0px -16px; width: 105%;">
        </center>
        <div class="ui-bar ui-bar-a ui-card" style="height: unset; max-width: 70%; margin: auto;">

            <img class="center" src="../../common/assets/images/products/product-1.jpg" style="max-width: 120px">
            <div class="ui-grid-a">
                <div class="ui-block-a" style="width: 80%">
                    <p style="font-weight: 200; font-family: 'Poppins';"><?php echo $json[$id]['name'] ?? '' ?> </p>
                    <div style="display: flex;">
                        <p class="card-price"
                           style="position: relative; color: red; text-decoration: line-through;"><?php echo $json[$id]['price'] ?? '' ?></p>
                        <p class="card-price"
                           style="margin-left: 20px; position: relative"><?php echo $json[$id]['price'] * 0.7 ?? '' ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="progress-wrapper">
            <div class="progress-bar">
                <span class="progress-bar-fill" style="width: 70%;"></span>
            </div>
            <center><h3>70%</h3></center>
        </div>
        <div class="back-box" style="margin-bottom: 20px; border-radius: 0px; width: 80%; margin-left: 10%;">
            <center>
                <a href="#popupBasic" data-rel="popup" data-position-to="window"
                   data-transition="pop"><h3
                            style="color: #EF005A;">Invite your friends to get the offer prices</h3></a>
            </center>
        </div>
        <div style="width: 600px; padding: 30px; text-align: center"  data-role="popup" id="popupBasic">
            <h2>Invite your friends to get the offer price</h2>
            <div class="share-social">
                <img src="../../common/assets/images/social-icons/link.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" href="#";>
                    <!-- <p>Copy link</p> -->
                <img src="../../common/assets/images/social-icons/facebook.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" href="#">
                    <!-- <p>Facebook</p> -->
                <img src="../../common/assets/images/social-icons/twitter.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" href="#">
                    <!-- <p>Twitter</p> -->
                <img src="../../common/assets/images/social-icons/instagram.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" href="#">
                    <!-- <p>Instagram</p> -->
                <img src="../../common/assets/images/social-icons/whatsapp.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" href="#">
                    <!-- <p>Whatsapp</p> -->
                <img src="../../common/assets/images/social-icons/more.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" href="#">
                    <!-- <p>Other</p> -->
                
            </div>
        </div>
    </div>
        <script>
            $(document).on("popupafteropen", function() {
                $('#popupBasic').popup('reposition', 'positionTo: window');
            });
        </script>
        <?php include '../parts/chatbot.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
