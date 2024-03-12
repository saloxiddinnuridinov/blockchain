<!DOCTYPE html PUBLIC>
<html>
<head>
    <title>Block Chain</title>
    <meta/>
    <link href="{{asset("style.css")}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/arial.js"></script>
    <script type="text/javascript" src="js/cuf_run.js"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="headert_text_resize">
                <div class="textarea">
                    <h2>BlockChain</h2>
                    <p><strong>Posted by Owner</strong> | <strong>Filed under templates, internet</strong></p>
                    <p>This is a free CSS website template by HotWebsiteTemplates.net. This work is distributed under the Creative Commons Attribution 3.0 License, which means that you are free to use it for any personal or commercial purpose provided you credit me in the form of a link back to HotWebsiteTemplates.net.</p>
                    <a href="#"><img src="images/read_more.gif" alt="" width="131" height="32" border="0" /></a>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="body">
            <div class="body_resize">
                <div class="left">
                    <form action="{{route('createNewBlock')}}" method="post" id="contactform">
                        <ol>
                            <li>
                                <label for="company">Website</label>
                                <input id="company" name="company" class="text" />
                            </li>
                            <li>
                                <label for="message">Your Message*</label>
                                <textarea id="message" name="message" rows="6" cols="50"></textarea>
                            </li>
                            <li class="buttons">
                                <input type="submit" name="ok" value="Send message" class="send" />
                                <div class="clr"></div>
                            </li>
                        </ol>
                    </form>
                </div>
                <div class="right">
                    <div class="blog">
                        <img src="images/What-Is-Blockchain-Infographic.jpg" width="100%" alt="">
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
</body>
</html>
