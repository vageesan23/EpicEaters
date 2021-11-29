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
            <img src="../../common/assets/images/SlashitProduct.png"
                 style="margin: -20px -20px 20px -20px; width: 110%;">
        </center>
        <div class="ui-bar ui-bar-a ui-card" style="height: unset; max-width: 70%; margin: auto;">

            <img class="center" src="../images/cat.png" style="max-width: 120px">
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
        <div class="back-box" style="margin-bottom: 20px">
            <center>
                <a href="#popupBasic" data-rel="popup" data-position-to="window"
                   data-transition="pop"><h3
                            style="color: #1797F3;">Invite Friends
                        to slash prices</h3></a>
            </center>
        </div>
        <div style="width: 400px; padding: 30px; text-align: center" data-role="popup" id="popupBasic">
            <h2>Share with Social Media</h2>
            <div class="share-social"><a style="color: white;" href="#" class="fa fa-facebook"></a>
                <a style="color: white;" href="#" class="fa fa-twitter"></a>
                <a style="color: white;" href="#" class="fa fa-instagram"></a>
                <a style="color: white;" href="#" class="fa fa-snapchat-ghost"></a></div>
        </div>
    </div>
        <script>
            $(document).on("popupafteropen", function() {
                $('#popupBasic').popup('reposition', 'positionTo: window');
            });
        </script>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>