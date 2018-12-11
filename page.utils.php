<?php
/**
 * Created by PhpStorm.
 * User: percevase
 * Date: 27/11/18
 * Time: 22:30
 */

/**
 * @param $title
 */
function start_page ($title) {
    echo '<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<title>'.$title.'</title>
	</head>
	<body>
		<div id="page-content">';
}

function end_page () {
    echo '    </div>
	</body>
</html>';
}