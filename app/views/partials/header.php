<!DOCTYPE html>
<html>
    <head>
        <title>Erudite online quiz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./assets/vendors.css" />
        <link rel="stylesheet" href="./assets/main.css" />
        <script src="./assets/vendors.js"></script>

    </head>
    <body>
        <input type="hidden" value="<?php echo $username ?>" id="global-username" />
        <div class="pusher">
            <div class="full height">
                <div class="bar light fixed">
                    <div class="ui page grid">
                        <div class="column">
                            <div class="ui logo shape">
                                <div class="sides">
                                    <div class="ui side active">
                                        <img class="ui image" src="/assets/images/logo.png">
                                    </div>
                                </div>
                            </div>

                            <div class="ui right floated secondary menu">
                                <div class="ui floating item avatar">
                                    <img class="ui avatar image" src="http://www.gravatar.com/avatar/<?php echo md5($username); ?>.jpg?d=monsterid&s=70" width="35" />
                                </div>
                                <div class="ui floating link item">
                                    <div class="text"><a href="/logout">Logout</a></div>
                                </div>
                            </div>

                            <div class="ui large secondary network menu">
                                <a class="view-ui item transition animating scale in active" data-page="games-page" href="#"><i class="cube icon"></i> Games</a>
                                <a class="view-ui item transition animating scale in" data-page="create-game-page" href="#"><i class="plus icon"></i> Create Game</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui vertical feature segment">
                    <div class="ui centered page grid">
                        <div class="sixteen wide column app-container">