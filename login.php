<?php
    if(!session_start()) {
		// If the session couldn't start, present an error
		header("Location: error.php");
		exit;
	}

	// If user has already logged in, redirect to members page.
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	
	if ($loggedIn) {
		header("Location: members.php");
		exit;
	}
	
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'do_login') {
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : strtolower($_POST['username']);
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	
		if ($username == "test" && $password == "pass") {
			$_SESSION['loggedin'] = $username;
			header("Location: members.php");
			exit;
		} else {
			$error = 'Error: Incorrect username or password';
			require "login_form.php";
		}		
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
	}
	
?>