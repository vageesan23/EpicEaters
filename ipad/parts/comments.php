<div style="
    margin-top: 3vh;
    padding: 20px;
">
    <h2>Comments</h2>
    <table style="min-width: 100%;">
        <tr>
            <td width="90%">
                <div style="margin-left: 25px; margin-right:8px">
                    <input type="text" data-clear-btn="true" name="comment" id="inputComment" value="">
                </div>
            </td>
            <td width="80px">
                <button id="postBtn" style="opacity: 1; max-height:80px; max-width: 100%"
                        onclick="getInputValue(this);">Post
                </button>
            </td>
        </tr>
    </table>


    <ul id="ul" style="list-style: none; margin-left: -40px;">
        <li>
            <div class="back-box" style="padding: 5px 10px;margin: 10px 10px 10px 10px;">
                <table>
                    <tr>
                        <td>
                            <img alt="page_icon" src="../../common/assets/images/icons/user.png" height="100px"
                                 width="100px">
                        </td>
                        <td>
                            <div class="product-comment"></div>
                            <h3>Goofy</h3>
                            <p>What are the colours available?</p>


                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div>
                                <a style="margin: 10px; float: left" onclick="openReply()">reply</a>
                                <i style="font-size: 30px;" onclick="likeUnlike(this)" class="fa fa-thumbs-up"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td id="repliersPhoto">

                        </td>
                        <td id="displayReply">

                        </td>
                    </tr>
                    <tr id="replyTextField">
                    </tr>
                </table>
            </div>

        </li>
    </ul>
</div>

<script>
    function getInputValue(e) {
        let comment = $('#inputComment').val();
        $("#ul").append('' +
            ' <li>' +
            '<div class="back-box" style="padding: 5px 10px;">' +
            '<table>' +
            '<tr>' +
            '<td>' +
            '<img alt="page_icon" src="../../common/assets/images/icons/user.png" height="100px" width="100px">' +
            '</td>' +
            '<td>' +
            '<div class="product-comment"></div>' +
            '<h3>Snoopy</h3>' +
            '<p id="snoopyComment">' + comment + '</p>' +
            '<div>' +
            '<a style="margin: 10px" onclick="openReply1()">reply</a>' +
            '<i style="font-size: 30px;" onclick="likeUnlike(this)" class="fa fa-thumbs-up"></i>' +
            '</div>' +
            '</div>' +
            '</td>' +
            '</td>' +
            '</tr>' +
            '<tr>' +
            '<td id="repliersPhoto1">' +
            '</td>' +
            '<td id="displayReply1">' +
            '</td>' +
            '</tr>' +
            '<tr id="replyTextField1">' +
            '</tr>' +
            '</div>' +
            '</table>' +
            '</li>'
        )
        ;

    }

    function openReply() {
        console.log('type a reply');
        $("#replyTextField").append('' +
            '<td></td>' +
            '<td width="90%">' +
            '<input type="text" data-clear-btn="true" name="reply" id="inputReply" value="" style=" max-width:178%; margin-left: 25px; margin-right:8px; border: none">' +
            '<button id="replyPostBtn" style="opacity: 1; background-color: #1797F3; color: white; border: none" onclick="displayReply();">Post</button>' +
            '</td>');

    }

    function displayReply() {
        let replyText = $('#inputReply1').val();
        console.log('reply is: ' + replyText);
        $("#displayReply1").append('' +
            '<h3>Snoopy</h3>' +
            '<p id="snoopyReply">' + replyText + '</p>'
        );
        $("#repliersPhoto").append('<img alt="page_icon" src="../../common/assets/images/icons/user.png" height="50px" width="50px" style="margin-left: 26px;" >');

    }

    let liked = false;

    function likeUnlike(x) {
        if (liked) {
            $(x).css({"color": "black"});
            liked = false;
        } else {
            $(x).css({"color": "blue"});
            liked = true;
        }
    }

    function openReply1() {
        console.log('type a reply');
        $("#replyTextField1").append('' +
            '<td></td>' +
            '<td width="90%">' +
            '<input type="text" data-clear-btn="true" name="reply" id="inputReply1" value="" style=" max-width:178%; margin-left: 25px; margin-right:8px; border: none">' +
            '<button id="replyPostBtn1" style="opacity: 1; background-color: #1797F3; color: white; border: none" onclick="displayReply1();">Post</button>' +
            '</td>');

    }

    function displayReply1() {
        let replyText = $('#inputReply1').val();
        console.log('reply is: ' + replyText);
        $("#displayReply1").append('' +
            '<h3>Snoopy</h3>' +
            '<p id="snoopyReply1">' + replyText + '</p>'
        );
        $("#repliersPhoto1").append('<img alt="page_icon" src="../../common/assets/images/icons/user.png" height="50px" width="50px" style="margin-left: 26px;" >');

    }


</script>