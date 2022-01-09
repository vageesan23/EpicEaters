<?php include '../parts/head.php' ?>
<style>
    .header-title .iconify {
        margin-top: 10px;
    }

    .main-submit-form {
        padding: 0% 5%;
    }

    .main-submit-form h4 {
        margin-top: 5px !important;
        margin-bottom: 5px !important;
    }

    .main-submit-form .ui-body-inherit {
        background-color: transparent !important;
        border-color: transparent !important;
    }

    .main-submit-form textarea .ui-corner-all {
        border-radius: 5px !important;
    }

    .ui-block-a,
    .ui-block-c {
        width: 45%;
        border-radius: 15px;
        margin-bottom: 15px;
    }

    .ui-block-b {
        width: 10%;
    }

    .sub-btn {
        opacity: 1;
        width: 30% !important;
        padding: 10px !important;
        margin: 0% 35% 2% 35%;
    }

    .contactus-head {
        display: flex;
        width: 100%;
        padding: 1% 7%;
    }

    .contactus-head img {
        height: 25px;
    }

    .gmap {
        padding: 0% 5%;
        display: flex;
    }

    .gmap div {
        width: 30%;
        margin: 0px 20px;
    }

    .gmap .ui-collapsible-content {
        padding: 0px !important;
        border-radius: 15px;
        margin-top: 20px;
        border-color: transparent !important;
        background-color: transparent !important;
    }

    .map1 .ui-body-inherit,
    .map2 .ui-body-inherit,
    .map3 .ui-body-inherit {
        background-color: transparent !important;
        border-color: transparent !important;
    }

    .map1,
    .map2,
    .map3 {
        width: 690px !important;
    }

    .map1 {
        transform: translateX(-3%);
    }

    .map2 {
        transform: translateX(-37%);
    }

    .map3 {
        transform: translateX(-72%);
    }

    .back-box {
        background-color: transparent;
        text-shadow: transparent;
    }

    .back-box h3 {
        text-shadow: none;
    }

    .social-net {
        margin: 0px 100px;
    }

    .social-net2 {
        margin: 0px 285px;
    }

    @media (max-width: 400px) {
        .main-submit-form h4 {
            font-size: 14px !important;
        }

        .ui-block-a,
        .ui-block-c {
            width: 100%;
        }

        .ui-block-b {
            width: 0%;
        }

        .gmap div {
            width: 30%;
            margin: 0px 5px;
        }

        .gmap h4 {
            font-size: 12px;
        }

        .map1,
        .map2,
        .map3 {
            width: 330px !important;
        }

        .map2 {
            transform: translateX(-36%);
        }

        .map3 {
            transform: translateX(-70%);
        }

        .back-box h3 {
            font-size: 14px !important
        }

        .social-net {
            margin: 0px 10px;
            font-size: 12px;
        }

        .social-net2 {
            margin: 0px 80px;
            font-size: 12px;
        }
    }
</style>
<!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=<API-Key-Here>&callback=initialize"
        defer
></script>

<script>
    function initialize() {
        var latlng = new google.maps.LatLng(18.520266, 73.856406);
        var latlng2 = new google.maps.LatLng(28.579943, 77.330006);
        var latlng3 = new google.maps.LatLng(28.579943, 77.330006);
        var nugegoda = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var kurunegala = {
            zoom: 15,
            center: latlng2,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var kandy = {
            zoom: 15,
            center: latlng3,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map"), nugegoda);

        var map2 = new google.maps.Map(document.getElementById("map-2"), kurunegala);

        var map3 = new google.maps.Map(document.getElementById("map-3"), kandy);

        var myMarker = new google.maps.Marker(
            {
                position: latlng,
                map: map,
                title: "Nugegoda"
            });

        var myMarker2 = new google.maps.Marker(
            {
                position: latlng2,
                map: map2,
                title: "Kurunegala"
            });

        var myMarker3 = new google.maps.Marker(
            {
                position: latlng3,
                map: map3,
                title: "Kandy"
            });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script> -->

<!-- This is checkout page-->
<div data-role="page" id="contactUs">
    <?php include '../parts/header.php' ?>
    <div class="header-title" style="display: flex;">
        <span class="iconify" alt="page_icon" data-icon="fluent:person-call-20-regular" data-width="30"
            data-height="30"></span>
        <h3>Conact Us</h3>
    </div>

    <div>
        <form class="form-light main-submit-form">
            <h4>You can send your suggestions/feedback :</h4>
            <div class="ui-block-a">
                <input type="text" name="name" id="name" value="" placeholder="Name">
            </div>
            <div class="ui-block-b"></div>
            <div class="ui-block-c">
                <input type="text" name="email" id="email" value="" placeholder="E-mail">
            </div>
            <textarea class="txtarea" name="comment" id="comment" placeholder="Comment/Suggestions"></textarea>
            <button class="sub-btn">Submit</button>
        </form>

        <!--  locations-->
        <div class="contactus-head">
            <img class="loca-img" src="../../common/assets/images/icons/location.png">
            <h4>Locate Us</h4>
        </div>
        <div class="gmap" onload="initialize()" style="margin-bottom: 30px">
            <div data-role="collapsible" data-collapsed="false">
                <h4>Daisy Desserts</h4>
                <div class="map1">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014728.2339753686!2d79.63424941030655!3d6.549165419143573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2575180993cdd%3A0x2b8e377dd72c4bbf!2sAngel%20Home%20Made%20Food!5e0!3m2!1sen!2slk!4v1641676918534!5m2!1sen!2slk"
                        width="100%" height="220" style="border:0; border-radius: 15px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
            <div data-role="collapsible">
                <h4>Sana's Cakes</h4>
                <div class="map2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014728.2339753686!2d79.63424941030655!3d6.549165419143573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae251db425a1db5%3A0x84953a7bd066f4c7!2sOshella%20-%20Homemade%20Goodness!5e0!3m2!1sen!2slk!4v1641677079136!5m2!1sen!2slk"
                        width="100%" height="220" style="border:0; border-radius: 15px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
            <div data-role="collapsible">
                <h4>Ele-kuruma</h4>
                <div class="map3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014728.2339753686!2d79.63424941030655!3d6.549165419143573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b240d49be95%3A0xfded90a50c2219bf!2sHome%20made%20food!5e0!3m2!1sen!2slk!4v1641677221742!5m2!1sen!2slk"
                        width="100%" height="220" style="border:0; border-radius: 15px;" allowfullscreen=""
                        loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div class="back-box" style="padding: 15px; margin-bottom: 20px">
            <h3 style="margin-bottom: 10px;">You can reach us on:</h3>
            <div class="ui-grid-a">
                <div style="display: flex;">
                    <div class="social-net" style="padding: 8px"><i class="fa flaticon-080-instagram"></i>
                        @epic_eaters
                    </div>
                    <div class="social-net" style="padding: 8px"><i class="fa flaticon-099-facebook"></i>
                        epic_eaters
                    </div>
                </div>
                <div class="social-net2" style="padding: 8px"><i class="fa flaticon-049-telephone"></i> +94 11-233 455
                </div>
            </div>
        </div>

        <?php include '../parts/chatbot.php' ?>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>

    </html>