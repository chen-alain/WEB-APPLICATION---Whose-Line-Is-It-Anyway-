<?php

    $pageTitle = "Whose Line Is It Anyway? Fan Page - Log In";
    $styleSrc = "./css/login_form.css";
    $scriptSrc = "./js/login_form.js";

    require "header.php";

?>

<div id="loginWidget" class="ui-widget">
        <div class="ui-widget-header" >
            <h1>Login</h1>
            <p>Login to access members-only content!</p>
        </div>
        
        
        <?php
            if ($error) {
                print "<div class=\"ui-state-error\">$error</div>\n";
            }
        ?>
        
        <form action="login.php" method="POST">
            
            <input type="hidden" name="action" value="do_login">
            
            <div class="stack">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" autofocus value="<?php print $username; ?>">
            </div>
            
            <div class="stack">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all">
            </div>
            
            <div class="stack">
                <input type="submit" value="Submit">
            </div>
        </form>


<?php 
    require "footer.php";
?>

