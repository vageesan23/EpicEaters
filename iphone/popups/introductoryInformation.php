<!--intro_popup1-->
<div data-role="popup" id="popupIntroductory" data-theme="a" class="ui-corner-all" style="height: 420px; border-radius:40px;">
    <form>
        <div style="height: 350px; width: 300px;">
            <a data-ajax="false" href="#home" data-transition="pop" style="position: relative; text-decoration: none; top:18px; left:270px;">&times</a>
            <div class="header-title" style="margin-bottom: 17px; overflow: auto">
                <h3>Getting Started</h3>
            </div>
            <div style="background-color: rgba(239, 0, 90, 0.25); border-radius:30px; border:4px Solid#EF005A; height: 205px;width: 225px; margin-left: 40px;">
                <img id="imageIntro" src="../../common/assets/images/introductory/intro_info1.png" style="height: 106px; width: 125px; margin: 50px;">
                <span style="margin-left: 7px !important;" id="introText"><b>Search your dessert item</b></span>
                <br />
            </div>
            <br />
            <a id="nxtBtn" onclick="next(this)" data-transition="pop" style="float: right; margin: 40px 15px 0 0; text-decoration: none">Next</a>
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
            $('#nxtBtn').replaceWith('<a  href="#home" data-transition="pop" style="float: right; margin: 40px 15px 0 0; text-decoration: none">Close</a>');
            //element.style.visibility = "hidden";
        }
    }
</script>