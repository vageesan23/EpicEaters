<div style="max-width: none; min-width: 200px;" data-role="popup" id="viewQR" data-theme="a" class="ui-content">
    <div class="header-title" style="margin-top: -10px; display: flex">
        <h4>Scan Reward QR Code</h4>
        <img alt="page_icon" src="../../common/assets/images/icons/qr.png" height="35" width="35">
    </div>
    <div style="width: 100%" id="reader"></div>
    <script src="../../common/js/html5-qrcode.min.js"></script>
    <script>
        var scannedd = false;

        function onScanSuccess(qrCodeMessage) {
            // handle on success condition with the decoded message
            if (!scannedd) {
                $("#viewQR").popup("close");
                $("#qrId").html(qrCodeMessage);
                const diamonds = qrCodeMessage.substr(0, qrCodeMessage.indexOf(' '));
                const existing = readCookie('diamondCount');
                console.log(diamonds);
                console.log(existing);
                const newTotal = +diamonds + +existing;
                $("#diamondCount").html(newTotal);
                const cookieString = "diamondCount=" + newTotal + "; path=/";
                document.cookie = cookieString;
                scannedd = true;
            }
            $("#qrRewards").popup("open");
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