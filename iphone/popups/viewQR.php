<div style="max-width: none; min-width: 100%;" data-role="popup" id="viewQR" data-theme="a" class="ui-content">
    <div class="header-title" style="margin-top: -10px; display: flex">
        <span class="iconify" alt="page_icon" data-icon="heroicons-solid:qrcode" data-width="23" data-height="23"></span>
        <h4 style="padding-left:10px; padding-top: 2px">Scan QR</h4>
    </div>
    <div style="width: 100%" id="reader"></div>
    <!-- <video id="preview"></video> -->
    <script src="../../common/js/html5-qrcode.min.js"></script>
    <script>      
        var scannedd = false;
        

        function onScanSuccess(qrCodeMessage) {
            // handle on success condition with the decoded message
             if (!scannedd) {
                
                $("#viewQR").popup("close");
                $("#qrId").html(qrCodeMessage);
                const coins = qrCodeMessage.substr(0, qrCodeMessage.indexOf(' '));
                const existing = readCookie('coinCount');
                console.log(coins);
                console.log(existing);
                const newTotal = +coins + +existing;
                $("#coinCount").html(newTotal);
                const cookieString = "coinCount=" + newTotal + "; path=/";
                document.cookie = cookieString;
             }
            $("#qrRewards").popup("open");
        }

        function onScanError(errorMessage) {
    // handle on error condition, with error message
}
        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    </script>
</div>