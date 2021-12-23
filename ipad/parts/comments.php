<div style="
    margin-top: 5vh;
    padding: 2px;
">
    <h2>Comments</h2>
    <table style="min-width: 100%;">
        <tr>
            <td width="100%">
                <div style="margin-left: -10px; margin-right:8px">
                    <input type="text" data-clear-btn="true" name="comment" id="inputComment" value="">
                </div>
            </td>
            <td width="80px">
                <button id="postBtn" style="opacity: 1; max-height:80px; max-width: 100%; background-color:#EF005A"
                        onclick="getInputValue();">Post
                </button>
            </td>
        </tr>
    </table>


    <ul id="ul" style="list-style: none; margin-left: -10px;">
        <li>
            <div class="back-box" style="padding: 5px 10px;margin: 10px 10px 10px 10px;">
                <table>
                    <tr>
                        <td>
                        <span class="iconify" alt="page_icon" data-icon="jam:user-circle" data-width="100" data-height="100"></span>
                        </td>
                        <td>
                            <div class="product-comment"></div>
                            <h3>Snoopy</h3>
                            <p>What are the Flavours available?</p>


                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div>
                                <a id="" style="margin-left:-95px;font-size: 18px; color:#EF005A" onclick="openReply(this)">reply</a>
                                <i style="font-size: 23px; padding-left:13px" onclick="likeUnlike(this)" class="fa fa-thumbs-up"></i>
                            </div>
                        </td>
                    </tr>
                    <tr>

                        <td id="repliersPhoto" style="display:grid; padding-left:75px"> 

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
    var count= 1;
    function getInputValue() {
        var imp = "x";
        count = count + 1;
        let comment = $('#inputComment').val();
        $("#ul").append(
            ' <li>' +
            '<div class="back-box" style="padding: 5px 10px;">' +
            '<table>' +
            '<tr>' +
            '<td>' +
            '<span class="iconify" alt="page_icon" data-icon="jam:user-circle" data-width="100" data-height="100"></span>' +
            '</td>' +
            '<td>' +
            '<div class="product-comment"></div>' +
            '<h3>Snoopy</h3>' +
            '<p id="snoopyComment">' + comment + '</p>' +
            '</td>'+
            '</tr>'+
            '<tr>'+
            '<td>'+
            '<div style="width:103px">' +
            '<a id="'+count+'" style="margin-left:20px;font-size: 18px; color:#EF005A" onclick="openReply(this)">reply</a>' +
            '<i style="font-size: 23px; padding-left:13px" onclick="likeUnlike(this)" class="fa fa-thumbs-up"></i>' +
            '</div>' +
            '</td>' +
            '</tr>' +
            '<tr>' +
            '<td id="repliersPhoto'+count+'" style="display:grid;  padding-left:75px">' +
            '</td>' +
            '<td id="displayReply'+count+'" style="margin-left:5px">' +
            '</td>' +
            '</tr>' +
            '<tr id="replyTextField'+count+'">' +
            '</tr>' +
            '</div>' +
            '</table>' +
            '</li>'
        )
        ;

    }

    function openReply(e) {
        var num = e.id
        $("#replyTextField"+e.id).append('' +
            '<td></td>'+
            '<td width="90%">' +
            '<input type="text" data-clear-btn="true" name="reply" id="inputReply'+e.id+'" value="" style=" max-width:178%; margin-left: 25px; margin-right:8px; border: none">' +
            '<button id="'+e.id+'" style="opacity: 1; background-color: #EF005A; color: white" onclick="displayReply(this);">Post</button>' +
            '</td>');

    }

    function displayReply(d) {
        let replyText = $('#inputReply'+d.id).val();
        console.log('reply is: ' + replyText);
        $("#displayReply"+d.id).append('' +
            '<h3>Snoopy</h3>' +
            '<p id="snoopyReply">' + replyText + '</p>'
        );
        $("#repliersPhoto"+d.id).append('<span class="iconify" alt="page_icon" data-icon="jam:user-circle" data-width="50" data-height="50"></span>');
        
    }

    let liked = false;

    function likeUnlike(x) {
        if (liked) {
            $(x).css({"color": "black"});
            liked = false;
        } else {
            $(x).css({"color": "#EF005A"});
            liked = true;
        }
    }

    // function openReply1() {
    //     console.log('type a reply');
    //     $("#replyTextField1").append('' +
    //         '<td></td>' +
    //         '<td width="90%">' +
    //         '<input type="text" data-clear-btn="true" name="reply" id="inputReply1" value="" style=" max-width:178%; margin-left: 25px; margin-right:8px; border: none">' +
    //         '<button id="replyPostBtn1" style="opacity: 1; background-color: #1797F3; color: white; border: none" onclick="displayReply1();">Post</button>' +
    //         '</td>');

    // }

    // function displayReply1() {
    //     let replyText = $('#inputReply1').val();
    //     console.log('reply is: ' + replyText);
    //     $("#displayReply1").append('' +
    //         '<h3>Snoopy</h3>' +
    //         '<p id="snoopyReply1">' + replyText + '</p>'
    //     );
    //     $("#repliersPhoto1").append('<img alt="page_icon" src="../../common/assets/images/icons/user.png" height="50px" width="50px" style="margin-left: 26px;" >');

    // }


</script>