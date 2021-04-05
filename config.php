<?php
	session_start();

	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "it";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "it")
			$_SESSION['lang'] = "it";
		else if ($_GET['lang'] == "ce")
			$_SESSION['lang'] = "ce";
	}

	require_once "languages/" . $_SESSION['lang'] . ".php";
?>