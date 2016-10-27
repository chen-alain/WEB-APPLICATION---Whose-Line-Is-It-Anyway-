<?php
if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= isset($pageTitle) ? $pageTitle : "Whose Line Fan Page" ?></title>
    
    <script src="./js/jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="./js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="./js/jquery-ui-1.11.4.custom/jquery-ui.css">
    
    <script>
        $(function() {
            $( "#menu" ).buttonset();
        });
    </script>
       
    <link rel="stylesheet" type="text/css" href="./css/header.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    
    <?php
        if( isset($styleSrc) )
        {
            print '<link rel="stylesheet" type="text/css" href="' . $styleSrc . '">' ;
            
        }
        
        if( isset($scriptSrc) )
            print '<script src="' . $scriptSrc . '"></script>' ;        
    ?>
    
</head>
<body>
    <div id="header" class="clearfix">
        <a href="index.php" class="noUnderline"> <img src="resources/logo.jpg" alt="Logo" class="banner"> <h1 class="banner"> Whose Line Is It Anyway Fan Page </h1></a>
        
        <form action="index.php" method="POST">
            <div id="menu">
                <input type="submit" id="homeMenuItem" name="home" value="Home">
                <input type="submit" id="aboutMenuItem" name="about" value="About">
                <input type="submit" id="membersMenuItem" name="members" value="Members">
                <?php 
                    // If user has already logged in, redirect to members page.
                    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];

                    if ($loggedIn) {
                        print '<input type="submit" name="logout" value="Logout">';
                    }
                    
                ?>
            </div>
        </form>
    </div>
    
    
