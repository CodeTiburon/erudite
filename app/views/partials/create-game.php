<div id="create-game-page">

    <h1>Create New Game</h1>
    <div class="ui form">
        <form id="create-game-form" method="post">
            <div class="ui error message" style="display:none"><ul class="list"></ul></div>
            <h4 class="ui dividing header">Game Information</h4>
            <div class="two fields">
                <div class="field">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Game title" />
                </div>
                <div class="field">
                    <div class="two fields">
                        <div class="field">
                            <label>Game Type</label>
                            <select class="ui dropdown" name="room">
                                <option value="">[ Select Game Type ]</option>
                                <option value="jostler">Jostler (5 minutes, 15 cards)</option>
                                <option value="thief">Thief (10 minutes, 30 cards)</option>
                                <option value="robber">Robber (15 minutes, 45 cards)</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Max number of players</label>
                            <input type="text" name="max_players_num" placeholder="Max # of players" value="5" />
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="ui dividing header">Topics and Countries</h4>
            <div class="field">
                <div class="sixteen wide column">
                    <div class="ui stackable inverted divided relaxed grid">
                        <div class="four wide column">
                            <div class="field">
                                <label>Topics</label>
                                <div class="topics-list">
                                </div>
                            </div>
                        </div>
                        <div class="twelve wide column">
                            <div class="field">
                                <label>Countries</label>
                                <div class="countries-list"></div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="ui submit button">Create</div>
        </form>
    </div>
</div>