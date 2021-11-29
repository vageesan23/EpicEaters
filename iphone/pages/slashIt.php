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
            <img src="../../common/assets/images/slashit/slashit-banner-1.png" width="330">
        </center>
        <div style="display: flex; justify-content: space-around; padding: 10px">
            <img src="../../common/assets/images/slashit/callfriend.png" width="95">
            <img src="../../common/assets/images/slashit/callfriend2.png" width="95">
            <img src="../../common/assets/images/slashit/selectitem.png" width="95">
        </div>
        <div style="display: flex; justify-content: space-around; padding: 10px">
            <img src="../../common/assets/images/slashit/gift.png" width="95">
            <a data-ajax="false" href="slashItPlay.php">
                <img src="../../common/assets/images/slashit/playNwin.png" width="200">
            </a>
        </div>
        <center>
            <img src="../../common/assets/images/slashit/gameRules.png" width="330">
        </center>
    </div>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
