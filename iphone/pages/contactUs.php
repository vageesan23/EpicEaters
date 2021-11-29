<?php include '../parts/head.php' ?>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
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

</script>

<!-- This is checkout page-->
<div data-role="page" id="contactUs">
    <?php include '../parts/header.php' ?>
    <div class="header-title">
        <h3>Contact Us</h3>
        <img alt="page_icon" src="../../common/assets/images/icons/contact_us.png" height="35" width="35">
    </div>
    <div style="padding: 10px 20px; background-color: rgba(0, 0, 0, 0)">
        <form class="form-light">
            <h4>You can send your suggestions/feedback :</h4>
            <input type="text" name="name" id="name" value="" placeholder="Name">
            <input type="text" name="email" id="email" value="" placeholder="e-mail">
            <textarea name="comment" id="comment" placeholder="Comment/Suggestions"></textarea>
            <button style="opacity: 1">Submit</button>
        </form>

        <div class="back-box" style="padding: 15px; margin-bottom: 20px">
            <h3 style="text-align: center">You can reach us on:</h3>
            <div class="ui-grid-a">
                <div class="ui-block-a" style="padding: 8px"><i class="fa flaticon-080-instagram"></i>
                    icraft
                </div>
                <div class="ui-block-b" style="padding: 8px"><i class="fa flaticon-099-facebook"></i>
                    icraftSL
                </div>
                <div style="padding: 8px"><i class="fa flaticon-049-telephone"></i> 011-2029079</div>
            </div>
        </div>
        <!--  locations-->
        <div onload="initialize()" style="margin-bottom: 70px">
            <div data-role="collapsible" data-collapsed="false">
                <h4>Nugegoda</h4>
                <div>
                    <div id="map" style="width:100%; height:220px"></div>
                </div>
            </div>
            <div data-role="collapsible">
                <h4>Kurunegala</h4>
                <div>
                    <div id="map-2" style="width:100%; height:220px"></div>
                </div>
            </div>
            <div data-role="collapsible">
                <h4>Kandy</h4>
                <div>
                    <div id="map-3" style="width:100%; height:220px"></div>
                </div>
            </div>
        </div>
        <?php include '../parts/bottomNavbar.php' ?>
        <?php include '../parts/footer.php' ?>
    </div>
    </body>
    </html>
