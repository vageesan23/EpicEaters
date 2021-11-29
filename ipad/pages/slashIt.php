<?php include '../parts/head.php' ?>
<!-- This is slash it page-->
<div data-role="page" id="slashit">
    <?php include '../parts/header.php' ?>

    <div role="main" class="ui-content">
        <div class="header-title" style="margin-bottom: 10px;">
            <h3>Slash It</h3>
            <img alt="page_icon" src="../../common/assets/images/icons/slashIt.png" height="35" width="35">
        </div>

        <center>
            <a data-ajax="false" href="slashItPlay.php">
                <img src="../../common/assets/images/slashit/playNwin.png" width="340px">
            </a>
        </center>
        <div style="display: flex; justify-content: space-around; padding: 40px 0px">
            <img src="../../common/assets/images/slashit/slashit-banner-1.png" width="330">
            <img src="../../common/assets/images/slashit/callfriend.png" style="border-radius: 20px;">
            <img src="../../common/assets/images/slashit/callfriend2.png" style="border-radius: 20px;">
        </div>
        <div style="display: flex">
            <img src="../../common/assets/images/slashIt-ipad2.png"
                 style="width: 28%; margin-right: 20px; border-radius: 46px; ">
            <img src="../../common/assets/images/slashIt-ipad.png" style="width: 70%">
        </div>
    </div>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
