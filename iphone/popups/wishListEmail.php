<!--
Wish List email function.
-->
<div style="max-width: none; min-width: 200px; transform: translateX(-50%)" data-role="popup" id="wishListEmail"
     data-theme="a" class="ui-content">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js">
    </script>
    <form id="my-form"
          action="#"
          method="POST">
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" required/>
        <button id="my-form-button">Send</button>
        <p id="my-form-status"></p>
    </form>

    <script>
        window.addEventListener("DOMContentLoaded", function () {

            // get the form elements defined in your form HTML above

            const form = document.getElementById("my-form");
            const button = document.getElementById("my-form-button");
            const status = document.getElementById("my-form-status");
            const email = document.getElementById("email");
            const items = document.getElementById("items");

            // Success and Error functions for after the form is submitted

            function success() {
                form.reset();
                button.style = "display: none ";
                status.innerHTML = "Email Sent!";
            }

            // handle the form submission event
            form.addEventListener("submit", function (ev) {
                ev.preventDefault();
                $('#my-form-button').attr('disabled', 'disabled');
                $('#my-form-button').html("Sending");
                html2canvas(items, {useCORS: true}).then(
                    function (canvas) {
                        const data = canvas.toDataURL();
                        console.log(data);
                        Email.send({
                            SecureToken: "34bd09c6-e5f4-4a35-a8b2-e857011f8c68",
                            To: email.value,
                            From: "teamideainfinite@gmail.com",
                            Subject: "Your WishList",
                            Body: "<html lang='en'><h1>Your WishList is attached below</h1><br><img alt='screenshot' src='" + data + "'></html>",
                            Attachments: [
                                {
                                    name: "wishlist.png",
                                    data: data
                                }]
                        }).then(
                            message => {
                                console.log(message);
                                success();
                            }
                        );
                    });
            });
        });

    </script>
</div>