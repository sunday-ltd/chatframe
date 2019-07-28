<!doctype html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,700&display=swap&subset=latin-ext" rel="stylesheet">

	<!-- Preferred: use CDN -->
	{{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sunday-ltd/web-widget@1.0/build/assets/css/chat.min.css">--}}
	<!-- Also an option: use local -->
	<link rel="stylesheet" type="text/css" href="{{asset("sundayit/chatframe/chatframe/chat.css")}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
<!-- jQuery is requested. -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
    /**
     * This script is custom development by Sunday Ltd.
     * https://sundayit.hu/chatbots
     */

    $(function()  {
        // Start listening
        checkLastMessage();
    });

    /**
     * Adds tryping indicator if necessary
     */
    function checkLastMessage() {

        var lastMessage = $("ol.chat").find('li').not('.typing').last();
        if (lastMessage.length === 0) {
            setTimeout(checkLastMessage, 1000);
            return;
        }

        // Status: Waiting for response, already have indicator
        if (isTyping() && lastMessage.is('.visitor')) {
            setTimeout(checkLastMessage, 30);
            return;
        }

        // Status: Does not have indicator
        if (lastMessage.is('.visitor'))  {

            // Last message is from visitor, adding indicator
            addLoadingIndicator();
            setTimeout(checkLastMessage, 250);
        }
        else  {
            // Last message is from chatbot, removing indicator
            removeLoadingIndicator();
            setTimeout(checkLastMessage, 1000);
        }
    }

    /**
     * Gets if the typing indicator is present
     * @returns {boolean}
     */
    function isTyping() {
        return $("ol.chat").find("li.typing").length > 0;
    }

    /**
     * Adds the loading indicator
     */
    function addLoadingIndicator() {
        var checkMessage = '<li class="chatbot typing" style=""><div class="msg animated fadeIn"><div><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div></li>';
        var d = $('ol.chat');
        d.append(checkMessage);

        var messageArea = $("#messageArea");
        messageArea.scrollTop(messageArea.prop("scrollHeight"));
    }

    /**
     * Removes the loading indicator
     */
    function removeLoadingIndicator() {
        $("ol.chat").find("li.typing").remove();
    }
</script>
<!-- Preferred: use CDN -->
{{--<script src="https://cdn.jsdelivr.net/gh/sunday-ltd/web-widget@1.0/build/js/chat.js" integrity="sha256-Z02f5SBrHjDa7aDifizRsZMDWHmTXk7/Qljv5gR3UEU=" crossorigin="anonymous"></script>--}}
<!-- Also an option: use local -->
<script src="{{asset("sundayit/chatframe/chatframe/chat.js")}}"></script>
</body>
</html>
