<?php
require_once('oop/interface.move.php');
require_once('oop/class.game.php');
require_once('oop/class.tictactoe.php');

session_start();

//Create new session
if (!isset($_SESSION['game']['tictactoe']))
	$_SESSION['game']['tictactoe'] = new tictactoe();

?>
<html>
	<head>
		<title>Tic Tac Toe</title>
		<link rel="stylesheet" type="text/css" href="inc/style.css" />
	</head>
	<body>
		<div id="content">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<h2>Tic Tac Toe!</h2>
		<h2>Let's Play the game</h2>
		<?php
			$_SESSION['game']['tictactoe']->playGame($_POST);
		?>
		</form>
		</div>
	</body>
</html>