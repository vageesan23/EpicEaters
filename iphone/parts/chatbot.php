<style>
    @media (max-width: 376px) {
        .chat-bot {
            left: 305px !important;
        }
    }

    .chat-bot {
        border-radius: 100px;
        height: 60px;
        bottom: 60px;
        position: relative;
        left: 740px;
    }
</style>

<div class="ui-footer-fixed">
    <a href="#" onclick="collectchat.open()">
        <img class="chat-bot" alt="Smooch Messenger Button" src="../../common/assets/images/chatbot.jpg">
    </a>
</div>

<script>
    $(window).bind("DOMNodeInserted", function () {
        $("#chat-bot-iframe").contents().find(".powered-by").empty();

    });
</script>