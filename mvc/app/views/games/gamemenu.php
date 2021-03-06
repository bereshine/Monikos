<!-- Created by Dana Elhertani, Danila Chenchik Monikos LLC -->

<link rel="stylesheet" type="text/css" href="/mvc/public/css/game.css"/>

<meta name='viewport' content="width=device-width, initial-scale=1" />

<body id="main_app_module" ng-app="gameMenuApp" ng-controller="gameMenuCtrl">

    <div id='app_header'>
        <a onclick="golistManager()" ><button class = 'back'>Back</button></a>

        <a onclick="gohome()"><img id="toplogo" src="/mvc/public/images/logo_without_words_version_1.png"></a>
         <a style="display: none" id="payment" ng-click="payment()"><button class = 'upgrade'>Upgrade</button></a>
        <div onclick="toggleMenuNav()" class=menu-info>
            <span id="notificationIndicator"></span>
            <img src=/mvc/public/images/man-user.png>
        </div>
        <p id="datalid" style="display:none"><?=$data['lid']?></p>
        <div id='menu-popup' class='menu-popup'>
            <div class=notif-info>
                <h2>Notifications</h2>
                <p id="noNotificationsText">There are no notifications at this moment.</p>
                <div style="display:none" id="notificationsBlock">
                    <!--append notifications in here-->
                </div>
            </div>
            <div class=user-info>
                <img src="/mvc/public/images/landing_page/logo2.png">
                <div class=user-info-sub>
                    <div class=username-info>{{capsules[0].username}}</div>
                    <div class=email-info>({{capsules[0].email}})</div>
                    <div class=capsule-info>{{capsules[0].capsules}} Capsules</div>
                    <a href="#" onclick="logout()"><div class=logout-btn>logout</div></a>

                </div>
            </div>
        </div>
    </div>

    <div id = app_content>
        <div class="blank"></div>
        <div class = "flex-container">

            <a onclick="gotoFlashcard()"><div class = "flex-item " id ='game_0'><br>FLASHCARD<br><img src="/mvc/public/images/flashcards.png" width="170px" height="170px"></div></a>

            <a onclick="gotoGame1()"><div class = "flex-item " id ='game_1'><br>MATCHING<br><img src="/mvc/public/images/matching.png" width="170px" height="170px"></div></a>

        </div>
        <div class = "flex-container distort">

            <a onclick ="gotoGame2()"><div class = "flex-item " id ='game_2'><br>PILL GAME<br><img src="/mvc/public/images/pill_game.png" width="170px" height="170px"></div></a>

<!--           <a href='#'><div class = "game-block game-white" id ='game_3'>MULTIPLE CHOICE<br>QUIZ</div></a>-->

            <div class = "flex-item " id ='challenge-block' ng-init="img=getImg()" ><span id='challengeText'>CHALLENGE A<br>FRIEND<br><img ng-src="{{img}}" width="150px" height="140px"></span>
                <div id="innerChallenge" style="display:none">
                    <p id="selectGameText">Select a Game</p>
                    <div id="#challenge-matching" class="challengeButton SelectChallengeGameButton" onclick="selectChallengeGame('matching')">MATCHING</div>

					<div id="#challenge-pill" class="challengeButton SelectChallengeGameButton" onclick="selectChallengeGame('pill')">PILL GAME</div>
<!--

                    <div id="#challenge-quiz" class="challengeButton SelectChallengeGameButton" onclick="selectChallengeGame('quiz')">QUIZ</div>
-->

                </div>
                <div id="innerChallengeFindFriend" style="display:none">
                    <p id="selectUserText">Select a User</p>
                    <p id="error" ng-bind="challengeError" style="display:none;font-size: 10px;
    font-weight: 100;"></p>
                    <input type="text" name="findUser" id="findUser" placeholder="username">
                    <div class="challengeButton" id="challengeUserButton" ng-click="selectUser()">Choose</div>
                </div>
                <div id="innerChallengePlaceBet" style="display:none">
                    <p id="placeBetText">Place a Bet</p>
                    <p id="error555" style="display:none;font-size: 10px;
    font-weight: 100;"></p>
                    <input type="number" name="capsulesQuantity" id="capsulesQuantity">
                    <div class="challengeButton" id="challengeSubmit" onclick="challengeSubmit()">Challenge</div>
                </div>
                <div id="innerChallengeLoading" style="display:none">
                    <img src="/mvc/public/images/loading.gif">
                </div>

              </div>

            </div>

        </div>
    </div>

</body>

<script src="/mvc/public/js/games/gameMenuCtrl.js"></script>
