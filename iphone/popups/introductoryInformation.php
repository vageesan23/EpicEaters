<!--intro_popup1-->
<div data-role="popup" id="popupIntroductory" data-theme="a" class="ui-corner-all" style="height: auto">
    <form>
        <div style="padding: 10px 30px;height: 350px; width: 300px;">
            <a data-ajax="false" href="#home" data-transition="pop"
               style="position: absolute; margin: 10px 10px 0 0; text-decoration: none">&times</a>
            <div class="header-title" style="margin-bottom: 17px; overflow: auto">
                <h3>Getting Started</h3>
            </div>
            <div style="background-color: #f0862640; height: 205px;width: 225px; margin-left: 32px;">
                <img id="imageIntro" src="../../common/assets/images/introductory/intro_info1.png"
                     style="height: 106px; width: 125px; margin: 50px;">
                <span id="introText">Search your dream product</span>
                <br/>
            </div>
            <br/>
            <a id="nxtBtn" onclick="next(this)" data-transition="pop"
               style="float: right; margin: 10px 10px 0 0; text-decoration: none">Next</a>
        </div>
    </form>
</div>

<script>
    let page = 1;
    const next = (element) => {
        if (page === 1) {
            $('#imageIntro').attr('src', "../../common/assets/images/introductory/intro_info2.png");
            page++;
        } else if (page === 2) {
            $('#imageIntro').attr('src', "../../common/assets/images/introductory/intro_info3.png");
            //element.innerHTML = "Finish";
            $('#nxtBtn').replaceWith('<a  href="#home" data-transition="pop" style="float: right; margin: 10px 10px 0 0; text-decoration: none">Close</a>');
            //element.style.visibility = "hidden";
        }
    }
</script>

