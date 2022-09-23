<?php

session_start();
$role = " ";
$location = "";
$user = "";

function userIsLoggedIn()
{

	if (isset($_POST['action']) and $_POST['action'] == 'login') {
		if (
			!isset($_POST['email']) or $_POST['email'] == '' or
			!isset($_POST['password']) or $_POST['password'] == ''
		) {
			$GLOBALS['loginError'] = 'Please fill in both fields';
			return FALSE;
		}
		$password = $_POST['password'];
		if (databaseContainsAuthor($_POST['email'], $password)) {

			$_SESSION['loggedIn'] = TRUE;
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['password'] = $password;
			$_SESSION['role'] = $GLOBALS['role'];
			$_SESSION['location'] = $GLOBALS['location'];
			$_SESSION['userdata'] = $GLOBALS['user'];
			$_SESSION['lga_id'] = $GLOBALS['lga_id'];


			return TRUE;
		} else {

			unset($_SESSION['loggedIn']);
			unset($_SESSION['email']);
			unset($_SESSION['password']);
			unset($_SESSION['role']);
			unset($_SESSION['location']);
			unset($_SESSION['userdata']);

			$GLOBALS['loginError'] = 'The specified email address or password was incorrect.';
			return FALSE;
		}
	}

	if (isset($_POST['action']) and $_POST['action'] == 'logout') {

		unset($_SESSION['loggedIn']);
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		unset($_SESSION['role']);
		unset($_SESSION['location']);
		unset($_SESSION['userdata']);
		header('Location: ' . $_POST['goto']);

		exit();
	}


	if (isset($_SESSION['loggedIn'])) {
		return databaseContainsAuthor($_SESSION['email'],	$_SESSION['password']);
	}
}



function databaseContainsAuthor($email, $password)
{
	include 'db.inc.php';
	$email = mysqli_real_escape_string($link, $email);
	$password = mysqli_real_escape_string($link, $password);
	$password = md5($password . 'ijdb');
	$sql = "SELECT * FROM application_user	WHERE username='$email' AND password='$password'";
	$result = mysqli_query($link, $sql);
	if (!$result) {
		$error = 'Error searching for user.' . mysqli_error($link);

		include 'error.html.php';
		exit();
	}
	$row = mysqli_fetch_array($result);
	if (mysqli_num_rows($result) == 1) {
		$GLOBALS['role'] = $row['role'];
		$GLOBALS['location'] = $row['lga'];
		$GLOBALS['user'] = $row['username'];
		$GLOBALS['lga_id'] = $row['lga_id'];
		return TRUE;
	} else {
		return FALSE;
	}
}