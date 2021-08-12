<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Partnering</title>
    <script src="src/js/frame.js" rel="script"></script>
    <link rel="icon" href="src/img/idle_purple_face.jpg">
    <link href="src/css/base.css" type="text/css" rel="stylesheet">
    <link href="src/css/submission.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="bg-dark h-100" onload="frameAdjustments()">
<div>
    <a href="index.php"><img src="src/img/new_gif_black.gif" style="box-shadow: #000 0 0 50px 60px" alt="Idleglance banner" id="idleglance_banner"></a>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-2 mb-2">
            <div class="card">
                <div class="card-body text-center">
                    <h4> We want to expand and offer you the opportunity to become a part of the IDLEGLANCE-Network.
                        <img src="src/img/littopia.png" height="25" width="25" alt="littopia">
                        <img src="src/img/glob.svg" height="25" width="25" alt="globe">
                    </h4>
                </div>
                <div class="card-header text-center">
                    <h2>
                        🔥 Become an official IDLEGLANCE-Discord Parnter 🔥
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <iframe class="rounded col-12 col-lg-6 offset-lg-3" id="contentFrame" name="contentFrame" src="iframe/submission.php"></iframe>
        </div>
    </div>
    <div class="col-12 mt-3 text-uppercase fixed-bottom bg-dark">
        <ul class="list-root d-flex justify-content-around list-unstyled">
            <li class="list-footer-element"><a class="footer-element" target="_blank" href="https://www.youtube.com/c/idleglance">Youtube</a></li>
            <li class="list-footer-element"><a class="footer-element" href="https://open.spotify.com/artist/7potggOp6uRFRIH7y74rgI?si=1Z6CUuo7QIe12wTQ0fTQ3g">Spotify</a></li>
            <li class="list-footer-element"><a class="footer-element" target="_blank" href="https://vk.com/idleglance">VK</a></li>
            <li class="list-footer-element"><a class="footer-element" href="https://soundcloud.com/idleglance">Soundcloud</a></li>
            <li class="list-footer-element"><a class="footer-element" target="_blank" href="https://idleglance.com">Official Idleglance Webpage</a></li>
            <li class="list-footer-element"><a class="footer-element" target="_blank" href="https://www.instagram.com/idleglance/">Instagram</a></li>
        </ul>
    </div>
</div>
</body>
</html>

<?php
/*
 * - alles in frames fassen, statt statisch wie bislang
 * - webhook verfeinern
 * - anfangen an DiscordBot zu abuen
 * - /admin
 *  - Oberfläsche um individuelle Eingaben tätigen zu können
 *    - test channel
 *    - live-channel
 *    - mehrere verschiedene Channel, kommt eben darauf an, wie viele Serverman füttern möchte
 *    - eigene Felder?
 * - Bot muss Nachrichten auslesen können
 *  - Bot muss dann entsprechend des Usernames eine Antwort schreiben können
 *
 * */

/* Discord Bot, private message:
To check if a message is DM, i use this:

if($message->channel->guild_id === NULL)

To send messages, i use this:

$user->sendMessage($text);
 */