<?php include '../parts/head.php' ?>

<!-- This is Clicker Play page-->

<style>
    .product-view {
        height: 100px;
        width: 100px;
        margin: 50px 0px 0px 10px;
    }

    .dname {
        /* max-width: none; */
        font-size: 22px;
        font-family: 'Poppins';
        margin: 50px 0px 0px 150px;
        font-weight: bold;
        white-space: nowrap;
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
            <img src="../../common/assets/images/clicker/clickerProduct-iPad.jpg"
                 style="margin: -16px 0px 0px -16px; width: 105%;">
        </center>
        
        <div class="m" style ="display:flex">
        <div class="ui-bar ui-bar-a ui-card" style="height: unset; max-width: 90%; margin-top: 50px; margin-left: 50px;">

            <?php echo '<img class="center" style="max-width: 320px; margin-top: 30px;" src="', $json[$id]['image'], '" >' ?? '' ?>
           
        </div>
        <p class="dname"><?php echo $json[$id]['name'] ?? '' ?> </p>

        <div class="progress-wrapper" style="margin:100px 0px 0px -280px; width:70%; ">
            <div class="progress-bar" style="background-color: #C4C4C4;">
                <span class="progress-bar-fill" style="width: 70%; background-color: #EF005A;
                "></span>
            </div>
            <div class="ui-grid-a">
                <div class="ui-block-a" style="width: 80%;;
                ; margin:40px 0px 0px 150px">
                    <div style="display: flex;">
                        <p class="card-price"
                           style="position: relative; color: #63717A; text-decoration: line-through; font-size: 30px;">LKR <?php echo $json[$id]['price'] ?? '' ?></p>
                        <p class="card-price"
                           style="margin-left: 20px; position: relative; color: #63717A; font-size: 40px; margin: 40px 0px 0px -20px;">
                           LKR <?php echo $json[$id]['price'] * 0.7 ?? '' ?></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div class="back-box" style="margin-bottom: 20px;margin-top: 50px; border-radius: 0px; width: 80%; margin-left: 10%;">
            <center>
                <a href="#popupBasic" data-rel="popup" data-position-to="window"
                   data-transition="pop"><h3
                            style="color: #EF005A;">Invite your friends to get the offer prices</h3></a>
            </center>
        </div>

        <div style="width: 600px; padding: 30px; text-align: center"  data-role="popup" id="popupBasic">
            <h2>Invite your friends to get the offer price</h2>
            <div class="share-social">
                <!-- <p>Copy link</p> -->
                <a onclick="myFunction()">
                    <img src="../../common/assets/images/social-icons/link.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" ></a>
                <!-- <p>Facebook</p> -->
                <a href="https://www.facebook.com/">
                    <img src="../../common/assets/images/social-icons/facebook.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" ></a>
                <!-- <p>Twitter</p> -->
                <a href="https://www.twitter.com/">
                    <img src="../../common/assets/images/social-icons/twitter.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" ></a>
                <!-- <p>Instagram</p> -->
                <a href="https://www.instagram.com/">
                    <img src="../../common/assets/images/social-icons/instagram.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" ></a>
                <!-- <p>Whatsapp</p> -->
                <a href="https://www.whatsapp.com/">
                    <img src="../../common/assets/images/social-icons/whatsapp.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" ></a>
                <!-- <p>Other</p> -->
                <a href="#">
                    <img src="../../common/assets/images/social-icons/more.png" 
                    style="color: white; margin: 15px; height: 144px; width: 120px;" ></a>                
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

    <!-- <script>
        function myFunction() {
          var copyText = document.getElementById("myInput");
          copyText.select();
          copyText.setSelectionRange(0, 99999);
          navigator.clipboard.writeText(copyText.value);
          
          var tooltip = document.getElementById("myTooltip");
          tooltip.innerHTML = "Copied: " + copyText.value;
        }
        
        function outFunc() {
          var tooltip = document.getElementById("myTooltip");
          tooltip.innerHTML = "Copy to clipboard";
        }
        </script> -->

    </body>
    </html>
