<?php

    if( strtolower($_POST["about"]) == "about" )
    {
        header( "Location: about.php" );
        exit;
    }
    else if( strtolower($_POST["members"]) == "members" )
    {
        header( "Location: login.php" );
        exit;
    }
    else if( strtolower($_POST["logout"]) == "logout" )
    {
        header( "Location: logout.php" );
        exit;
    }

    $pageTitle = "Whose Line Is It Anyway? Fan Page - Home";
    $styleSrc = "./css/index.css";
    $scriptSrc = "./js/index.js";

    require "header.php";

?>

<div id="textbox">    
    <p>This is an unofficial fan page for the U.S. version of <br><strong>Whose Line Is It Anyway?</strong></p>
    <p>I am an avid fan of the show and any improv in general, and by creating this website, I wish to (re-)introduce improv to the masses.</p>
    <p>Improv can take a lot of skill, practice, and thinking, but improv is very fun due to its unpredictable nature.</p>
    <p>I hope you enjoy this website and gain an appreciation of improv.</p>   
</div>

<div id="imagebox">
    <img id="dontmatter" src="./resources/dontmatter.jpg" alt="Nothing Matters!" title="Drag Me!" width="100">
</div>


<?php 
    require "footer.php";
?>