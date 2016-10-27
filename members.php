<?php
    if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}
	
	// If user has already logged in, redirect to members page.
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}

    $pageTitle = "Whose Line Is It Anyway? Fan Page - Members";
    $styleSrc = "./css/members.css";
    $scriptSrc = "./js/members.js";

    require "header.php";

?>

<div id="tabs">
    <ul>
        <li><a href="#carey">Drew Carey</a></li>
        <li><a href="#tyler">Aisha Tyler</a></li>
        <li><a href="#brady">Wayne Brady</a></li>
        <li><a href="#mochrie">Colin Mochrie</a></li>
        <li><a href="#stiles">Ryan Stiles</a></li>
    </ul>
    
    <div id="carey">
        <?php
            include "people/carey.php";
        ?>
    </div>
    
    <div id="tyler">
        <?php
            include "people/tyler.php";
        ?>
        
    </div>
    
    <div id="brady">
        <?php
            include "people/brady.php";
        ?>
    </div>
    
    <div id="mochrie">
        <?php
            include "people/mochrie.php";
        ?>
    </div>
    
    <div id="stiles">
        <?php
            include "people/stiles.php";
        ?>
    </div>
    
</div>

<?php 
    require "footer.php";
?>