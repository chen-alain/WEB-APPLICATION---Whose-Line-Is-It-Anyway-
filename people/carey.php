<script src="js/carey.js"></script>
<link href="css/carey.css" rel="stylesheet" type="text/css">

<div class="person">
    <h2>Drew Carey</h2>
    <img class="profile" src="resources/carey.jpg" height="300" alt="Drew Carey">
    <p>
        Drew Carey was the original host of the U.S. version of <strong>Whose Line Is It Anway?.</strong>
        <br> On the show, he sits behind the desk and does absolutely nothing.
    </p>

    <p> 
        In most games, Drew does a game with either the winners or the non-winners, <br>
        and popular games he has done are <i>Hoedown</i>, <i>Irish Drinking Song</i>, and <i>Three-Headed Broadway Star.</i>
    </p>

    <p> 
        Outside of <strong>Whose Line?</strong>, Drew currently hosts <i>The Price is Right</i> and starred in his comedy <i>The Drew Carey Show</i>.
    </p>

    <div class="activity">
        <h3>Hey, <?php print $_SESSION['loggedin'] ?>:</h3>
        <h3>Are You a True <i>Whose Line?</i> Fan?</h3>
        <div id="careyQuiz">
            <div id="careyQuizContent">
                <h4>Take the Quiz</h4>
            </div>
            <button id="careyQuizButton">Start!</button>
        </div>
    </div>
</div>