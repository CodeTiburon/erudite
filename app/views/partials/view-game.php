<div id="view-game-page">

    <h1>Game "<span id="game-title">%TITLE%</span>"</h1>
    <div class="sixteen wide column">
        <div class="ui stackable inverted divided relaxed grid">
            <div class="four wide column">
                <h4>Time Left</h4>
                <h1><i class="icon wait"></i> <span>12:56</span></h1>
                <h4>Game Information</h4>
                <p>Type: <span id="game-type"></span></p>
                <p>Countries: <span id="game-countries"></span></p>
                <p>Topic: <span id="game-topics"></span></p>
                <h4>Players List <span id="game-players-num">0</span>/<span id="game-max-players-num">0</span></h4>
                <div class="ui divided list" id="game-board-players">
                </div>
            </div>
            <div class="twelve wide column game-board" id="game-board-join">
                <div class="ui center aligned segment">
                    <button class="ui button blue massive" onclick="$(this).addClass('loading'); window.setTimeout(function(){location.href='view.html';}, 1200);">Join this Game</button>
                </div>
            </div>
            <div class="twelve wide column game-board-active" id="game-board-questions">
                <h4>Questions</h4>
                <div class="ui segment">
                    <div class="ui five column grid">
                        <div class="column">
                            <div class="ui segment green inverted center aligned card">
                                <h1><i class="icon checkmark"></i></h1>
                                <p>+500 points</p>
                                <p>You</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment red inverted center aligned card">
                                <h1><i class="icon remove"></i></h1>
                                <p>-300 points</p>
                                <p>You</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment center aligned card">
                                <h1><i class="icon remove"></i></h1>
                                <p>-250 points</p>
                                <p><i>Stevie Feliciano</i></p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment center aligned card">
                                <h1><i class="icon checkmark"></i></h1>
                                <p>+250 points</p>
                                <p><i>Veronika Ossi</i></p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment blue inverted center aligned card">
                                <h1><i class="icon">?</i></h1>
                                <p>300 points</p>
                                <p>New</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment blue inverted center aligned card">
                                <h1><i class="icon">?</i></h1>
                                <p>200 points</p>
                                <p>New</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment blue inverted center aligned card">
                                <h1><i class="icon">?</i></h1>
                                <p>150 points</p>
                                <p>New</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment green inverted center aligned card">
                                <h1><i class="icon checkmark"></i></h1>
                                <p>+500 points</p>
                                <p>You</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment red inverted center aligned card">
                                <h1><i class="icon remove"></i></h1>
                                <p>-300 points</p>
                                <p>You</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment center aligned card">
                                <h1><i class="icon remove"></i></h1>
                                <p>-250 points</p>
                                <p><i>Stevie Feliciano</i></p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment center aligned card">
                                <h1><i class="icon checkmark"></i></h1>
                                <p>+250 points</p>
                                <p><i>Veronika Ossi</i></p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment blue inverted center aligned card">
                                <h1><i class="icon">?</i></h1>
                                <p>150 points</p>
                                <p>New</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment blue inverted center aligned card">
                                <h1><i class="icon">?</i></h1>
                                <p>100 points</p>
                                <p>New</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment blue inverted center aligned card">
                                <h1><i class="icon">?</i></h1>
                                <p>400 points</p>
                                <p>New</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ui segment blue inverted center aligned card">
                                <h1><i class="icon">?</i></h1>
                                <p>800 points</p>
                                <p>New</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>