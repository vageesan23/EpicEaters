<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        min-height: 100vh;
        width: 100%;
        background: #EEECEB;
    }

    footer {
        background: #28292A;
        width: 100%;
        bottom: 0;
        left: 0;
    }

    footer::before {
        content: '';
        position: absolute;
        left: 0;
        /* top: 100px; */
        height: 1px;
        width: 100%;
        background: #000;
    }

    footer .content {
        max-width: 1250px;
        margin: auto;
        padding: 30px 40px 15px 40px;
    }

    footer .content .top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 40px;
        margin-left: -13px;
    }

    .content .top .logo-details {
        color: #fff;
        font-size: 30px;
    }

    .content .top .media-icons {
        display: flex;
    }

    .content .top .media-icons a {
        height: 40px;
        width: 40px;
        margin: 0 8px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        color: #fff;
        font-size: 17px;
        text-decoration: none;
        transition: all 0.4s ease;
    }

    .top .media-icons a:nth-child(1) {
        background: white;
        color: black;
    }

    .top .media-icons a:nth-child(1):hover {
        color: #4267B2;
        background: #fff;
    }

    .top .media-icons a:nth-child(2) {
        background: white;
        color: black;
    }

    .top .media-icons a:nth-child(2):hover {
        color: #1DA1F2;
        background: #fff;
    }

    .top .media-icons a:nth-child(3) {
        background: white;
        color: black;
    }

    .top .media-icons a:nth-child(3):hover {
        color: #E1306C;
        background: #fff;
    }

    .top .media-icons a:nth-child(4) {
        background: white;
        color: black;
    }

    .top .media-icons a:nth-child(4):hover {
        color: #0077B5;
        background: #fff;
    }

    .top .media-icons a:nth-child(5) {
        background: white;
        color: black;
    }

    .top .media-icons a:nth-child(5):hover {
        color: #FF0000;
        background: #fff;
    }

    footer .content .link-boxes {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    /* footer .content .link-boxes .box {
        width: calc(100% / 5 - 10px);
    } */

    .content .link-boxes .box .link_name {
        color: #fff;
        font-size: 20px;
        font-weight: 400;
        margin-bottom: 10px;
        position: relative;
    }

    .link-boxes .box .link_name::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        height: 2px;
        width: 35px;
        background: #fff;
    }

    .content .link-boxes .box li {
        margin: 6px 0;
        list-style: none;
    }

    .content .link-boxes .box li a {
        color: #fff;
        font-size: 17px;
        font-weight: 400;
        text-decoration: none;
        opacity: 0.8;
        transition: all 0.4s ease
    }

    .content .link-boxes .box li a:hover {
        opacity: 1;
        text-decoration: underline;
    }

    .content .link-boxes .input-box {
        margin-right: 55px;
    }

    .link-boxes .input-box input {
        height: 40px;
        width: calc(100% + 55px);
        outline: none;
        border: 2px solid #AFAFB6;
        background: #140B5C;
        border-radius: 4px;
        padding: 0 15px;
        font-size: 15px;
        color: #fff;
        margin-top: 5px;
    }

    .link-boxes .input-box input::placeholder {
        color: #AFAFB6;
        font-size: 16px;
    }

    .link-boxes .input-box input[type="button"] {
        background: #fff;
        color: #140B5C;
        border: none;
        font-size: 18px;
        font-weight: 500;
        margin: 4px 0;
        opacity: 0.8;
        cursor: pointer;
        transition: all 0.4s ease;
    }

    .input-box input[type="button"]:hover {
        opacity: 1;
    }

    footer .bottom-details {
        width: 100%;

    }

    footer .bottom-details .bottom_text {
        max-width: 1250px;
        margin: auto;
        padding: 20px 40px;
        display: flex;
        justify-content: center;
    }

    .bottom-details .bottom_text span,
    .bottom-details .bottom_text a {
        font-size: 18px;
        font-weight: 300;
        color: #fff;
        opacity: 0.8;
        text-decoration: none;
    }

    .bottom-details .bottom_text a:hover {
        opacity: 1;
        text-decoration: underline;
    }

    .bottom-details .bottom_text a {
        margin-right: 10px;
    }

    @media (max-width: 900px) {
        footer .content .link-boxes {
            flex-wrap: wrap;
        }

        footer .content .link-boxes .input-box {
            width: 40%;
            margin-top: 10px;
        }
    }

    @media (max-width: 700px) {
        footer {
            position: relative;
        }

        .content .top .logo-details {
            font-size: 26px;
        }

        .content .top .media-icons a {
            height: 35px;
            width: 35px;
            font-size: 14px;
            line-height: 35px;
        }

        /* footer .content .link-boxes .box {
            width: calc(100% / 3 - 10px);
        } */

        footer .content .link-boxes .input-box {
            width: 60%;
        }

        .bottom-details .bottom_text span,
        .bottom-details .bottom_text a {
            font-size: 12px;
        }
    }

    @media (max-width: 520px) {
        footer::before {
            top: 145px;
        }

        footer .content .top {
            flex-direction: column;
        }

        .content .top .media-icons {
            margin-top: 16px;
        }

        /* footer .content .link-boxes .box {
            width: calc(100% / 2 - 10px);
        } */

        footer .content .link-boxes .input-box {
            width: 100%;
        }
    }
</style>

<footer>
    <div class="content">
        <div class="top">

            <img class="logo_name" src="../../common/assets/images/logo-footer.png" style="height: 75px; width: 112px;">

            <div class="media-icons">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                <a href="https://www.whatsapp.com/" target="_blank"><i class="fa fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="link-boxes">
            <ul class="box">
                <li class="link_name">Links</li>
                <li><a href="../pages/home.php">Home</a></li>
                <li><a href="../pages/contactUs.php">Contact</a></li>
                <li><a href="../pages/about.php">About Us</a></li>
            </ul>
            <ul class="box">
                <li class="link_name">Services</li>
                <li><a href="../pages/shop.php">Shop</a></li>
                <li><a href="../pages/booking.php">Book Course</a></li>
                <li><a href="#">Scan QR</a></li>
            </ul>
            <ul class="box">
                <li class="link_name">Other services</li>
                <li><a href="../pages/sellWithUs.php">Earn with Us</a></li>
                <li><a href="#">Chat with Us</a></li>
                <li><a href="#">Contact with Seller</a></li>
            </ul>
            <ul class="box">
                <li class="link_name">Contact</li>
                <li><a href="tel:+766027633">+76 6027 633</a></li>
                <li><a href="tel:+718879887">+71 8879 887</a></li>
                <li><a href="mailto:epiceaters@gmail.com">Epiceaters@gmail.com</a></li>
            </ul>
        </div>
    </div>
    <div class="bottom-details">
        <div class="bottom_text">
            <span class="copyright_text">Copyright ?? Epic Eaters</span>
        </div>
    </div>
</footer>