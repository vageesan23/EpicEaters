<div style="max-width: none; min-width: 700px; top: 85px; height: 75vh; left: 0; transform: translateX(-50%);"
     data-role="popup" id="viewAR" data-theme="a"
     class="ui-content">

    <meta name="description" content="Model Viewer (VR / AR) • A-Frame">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <script src="../../common/js/aframe.min.js"></script>
    <script src="../../common/js/aframe-extras.min.js"></script>

    <script src="../../common/js/hide-on-enter-ar.js"></script>
    <script src="../../common/js/ar-shadows.js"></script>
    <script src="../../common/js/model-viewer.js"></script>
    <script src="../../common/js/background-gradient.js"></script>

    <body>
    <a-scene
            embedded
            renderer="colorManagement: true;"
            model-viewer="gltfModel: #man; title: <?php echo $json[$id]['name'] ?>">
        <a-assets>

            <a-asset-item id="man" src=<?php echo $json[$id]['ar_view'] ?>
            response-type="arraybuffer" crossorigin="anonymous"></a-asset-item>

            <img id="shadow"
                 src="https://cdn.glitch.com/20600112-c04b-492c-8190-8a5ccc06f37d%2Fshadow.png?v=1606338852399"></img>
        </a-assets>
    </a-scene>
    </body>
</div>