<!doctype html>
<html>
<head>
<?php
$title = basename( $_SERVER['PHP_SELF'], '.php' );
$title = str_replace( '_', ' ', $title );
$title = str_replace( '-', ' ', $title );
//$title = ucfirst( $title );
$title = ucwords( $title );
?>
	<meta charset="utf-8" />
	<title><?php echo $title; ?> | flexify frontend framework</title>

	<link href="css/flexify.css" rel="stylesheet" />

	<link href="css/demo.css" rel="stylesheet" />

</head>

<body class="fx-wrap">

<div class="fx-container fx-container-lg">

	<div class="fx-p-a">