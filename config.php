<?php
	session_start();

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "en";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
        else if ($_GET['lang'] == "de")
			$_SESSION['lang'] = "de";
        else if ($_GET['lang'] == "sv")
			$_SESSION['lang'] = "sv";
        else if ($_GET['lang'] == "es")
			$_SESSION['lang'] = "es";
        else if ($_GET['lang'] == "pt")
			$_SESSION['lang'] = "pt";
        else if ($_GET['lang'] == "fr")
			$_SESSION['lang'] = "fr";
        else if ($_GET['lang'] == "it")
			$_SESSION['lang'] = "it";
        else if ($_GET['lang'] == "ro")
			$_SESSION['lang'] = "ro";
        else if ($_GET['lang'] == "ru")
			$_SESSION['lang'] = "ru";
        else if ($_GET['lang'] == "bg")
			$_SESSION['lang'] = "bg";
        else if ($_GET['lang'] == "bs")
			$_SESSION['lang'] = "bs";
        else if ($_GET['lang'] == "ko")
			$_SESSION['lang'] = "ko";
        else if ($_GET['lang'] == "jp")
			$_SESSION['lang'] = "jp";
		else if ($_GET['lang'] == "cmd")
			$_SESSION['lang'] = "cmd";
	}

	require_once "languages/" . $_SESSION['lang'] . ".php";
?>