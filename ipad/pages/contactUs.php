<?php include '../parts/head.php' ?>
<style>
    .header-title {
        display: flex;
    }

    .contactus-head {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .contactus-head h4 {
        text-shadow: none;
        margin-top: 5px;
        font-size: 18px;
        text-align: center;
    }

    .back-box {
        padding: 30px 20px;
        background-color: rgba(0, 0, 0, 0)
    }

    .loca-img {
        height: 30px;
        width: 30px;
    }

    .location-map {
        margin-top: 20px;
        margin-bottom: 50px;
        display: flex;
    }

    .map-location {
        width: 30%;
        margin: 0px 20px;
    }

    .ui-body-inherit {
        border-color: transparent;
        background-color: transparent;
        box-shadow: none;
    }

    .map-location .ui-collapsible-content {
        padding: 0px;
        border-radius: 15px;
        margin-top: 20px;
        width: 920px !important;
        /* border-color: transparent;
        background-color: transparent; */
        box-shadow: none;
    }

    .gmap {
        width: 920px !important;
    }

    .map2 {
        transform: translateX(-310px) !important;
    }

    .map3 {
        transform: translateX(-630px) !important;
    }

    .gmap div {
        border-radius: 15px;
    }

    .ui-btn {
        background-color: #282929;
        color: #fff;
    }

    .ui-input-text {
        padding: 5px 10px;
        border: none;
        width: 280px;
        box-shadow: none !important;
        text-shadow: none !important;
        border-radius: 5px !important;
        background-color: #f3f4f9 !important;
    }

    .location-map .ui-body-inherit,
    .form-contact .ui-body-inherit {
        background-color: transparent !important;
        border-color: transparent !important;
    }

    .ui-block-a {
        text-shadow: none !important;
    }

    .ui-corner-all {
        border-radius: 0px;
    }

    .ui-shadow-inset {
        box-shadow: none !important;
    }

    .form-head {
        text-shadow: none !important;
        text-align: center;
        margin-bottom: 20px;
    }

    .txtarea {
        width: 545px !important;
        margin-left: 8px !important;
        padding: 5px 20px !important;
    }

    .ui-grid-a>.ui-block-a {
        width: 50%;
    }

    .form-contact {
        padding: 10px 20px;
        background-color: rgba(0, 0, 0, 0);
        display: flex;
    }

    .submit {
        opacity: 1;
        width: 250px !important;
        margin-left: 170px;
        margin-top: 20px;
    }

    .in-name,
    .in-mail,
    .txtarea {
        background-color: #f3f4f9 !important;
    }

    .in-name,
    .in-mail {
        border-radius: 5px !important;
    }

    .map1 iframe,
    .map2 iframe,
    .map3 iframe {
        border-radius: 15px;
    }

    @media (max-width: 768px) {
        .map-location .ui-collapsible-content {
            width: 670px !important;
        }

        .gmap {
            width: 670px !important;
        }

        .form-contact {
            display: block;
        }

        .ui-grid-a>.ui-block-a {
            width: 50%;
        }

        .ui-input-text {
            width: 330px;
        }

        .txtarea {
            width: 650px !important;
            padding: 5px 20px !important;
        }

        .submit {
            margin-left: 260px;
            width: 150px !important;
        }

        .social-net {
            margin-top: 30px;
        }

        .social-name {
            display: flex;
            text-align: center;
        }

        .icon {
            margin-right: 20px;
            margin-left: 20px;
        }

        .map2 {
            transform: translateX(-225px) !important;
        }

        .map3 {
            transform: translateX(-455px) !important;
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
        var latlng = new google.maps.LatLng(6.86673, 79.89347);
        var latlng2 = new google.maps.LatLng(7.487436, 80.365025);
        var latlng3 = new google.maps.LatLng(7.268108, 80.598766);

        var daisyDes = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var sanaCake = {
            zoom: 15,
            center: latlng2,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var eleKuruma = {
            zoom: 15,
            center: latlng3,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map"), daisyDes);

        var map2 = new google.maps.Map(document.getElementById("map-2"), sanaCake);

        var map3 = new google.maps.Map(document.getElementById("map-3"), eleKuruma);

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
<div data-role="page" id="contactUs" style="background-color: #fff;">

    <?php include '../parts/header.php' ?>

    <div class="header-title">
        <span class="iconify" alt="page_icon" data-icon="fluent:person-call-20-regular" data-width="50"
            data-height="50"></span>
        <h3>Conact Us</h3>
    </div>
    <div class="back-box">
        <div class="ui-grid-a">

            <div class="contactus-head">
                <img class="loca-img" src="../../common/assets/images/icons/location.png">
                <h4>Locate Us</h4>
            </div>

            <!-- locations-->
            <div onload="initialize()" class="location-map">
                <div class="map-location" data-role="collapsible" data-collapsed="false">
                    <h4>Daisy Desserts</h4>
                    <div class="gmap map1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014728.2339753686!2d79.63424941030655!3d6.549165419143573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2575180993cdd%3A0x2b8e377dd72c4bbf!2sAngel%20Home%20Made%20Food!5e0!3m2!1sen!2slk!4v1641676918534!5m2!1sen!2slk"
                            width="100%" height="320" style="border:0; border-radius: 15px;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                </div>
                <div class="map-location" data-role="collapsible">
                    <h4>Sana's Cakes</h4>
                    <div class="gmap map2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014728.2339753686!2d79.63424941030655!3d6.549165419143573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae251db425a1db5%3A0x84953a7bd066f4c7!2sOshella%20-%20Homemade%20Goodness!5e0!3m2!1sen!2slk!4v1641677079136!5m2!1sen!2slk"
                            width="100%" height="320" style="border:0; border-radius: 15px;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                </div>
                <div class="map-location" data-role="collapsible">
                    <h4>ELe-kuruma</h4>
                    <div class="gmap map3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014728.2339753686!2d79.63424941030655!3d6.549165419143573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b240d49be95%3A0xfded90a50c2219bf!2sHome%20made%20food!5e0!3m2!1sen!2slk!4v1641677221742!5m2!1sen!2slk"
                            width="100%" height="320" style="border:0; border-radius: 15px;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <div class="form-contact">
                <form class="form-light" style="font-weight: bolder; font-size: 18px">
                    <h4 class="form-head">You can send your suggestions/feedback :</h4>
                    <div class="ui-grid-a">
                        <div class="ui-block-a">
                            <input class="in-name" type="text" name="name" id="name" value="" placeholder="Name">
                        </div>
                        <div class="ui-block-b">
                            <input class="in-mail" type="text" name="email" id="email" value="" placeholder="E-mail">
                        </div>
                    </div>
                    <textarea class="txtarea" name="comment" id="comment" placeholder="Comment/Suggestions"
                        style="background-color: #f3f4f9 !important;"></textarea>
                    <button class="submit">Submit</button>
                </form>
                <div style="width: 10%;"></div>
                <div class="social-net" style="padding: 0px; margin-bottom: 20px">
                    <h3 style="text-align: center; margin-bottom: 20px;">You can reach us on:</h3>
                    <div class="ui-grid-a social-name">
                        <div class="icon" style="padding: 8px; display: flex;">
                            <i class="fa flaticon-080-instagram"></i>
                            <div style="width: 15px;"></div>@epic_eaters
                        </div>
                        <div class="icon" style="padding: 8px; display: flex;">
                            <i class="fa flaticon-099-facebook"></i>
                            <div style="width: 15px;"></div>epic_eaters
                        </div>
                        <div class="icon" style="padding: 8px; display: flex;">
                            <i class="fa flaticon-049-telephone"></i>
                            <div style="width: 15px;"></div>>+94 11 233 455
                        </div>
                    </div>
                </div>
            </div><!-- /grid-a -->
        </div>
    </div>
    <?php include '../parts/chatbot.php' ?>
    <?php include '../parts/bottomNavbar.php' ?>
    <?php include '../parts/footer.php' ?>
</div>
</body>

</html>