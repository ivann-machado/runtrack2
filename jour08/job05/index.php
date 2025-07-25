<?php 
session_start();
if (isset($_POST['reset'])) {
	session_unset();
}
$gameOver = isset($_SESSION['gameOver']) ? $_SESSION['gameOver'] : false;
$isDraw = false;
$xTurn = isset($_SESSION['xTurn']) ? $_SESSION['xTurn'] : true;
$board = isset($_SESSION['board']) ? $_SESSION['board'] : [['', '', ''], ['', '', ''], ['', '', '']];
if (isset($_POST['tile']) && $_POST['tile'] >= 0 && $_POST['tile'] < 9 && !$gameOver) {
	$ter = sprintf("%02d", base_convert($_POST['tile'], 10, 3));
	if (empty($board[$ter[0]][$ter[1]])) {
		$board[$ter[0]][$ter[1]] = $xTurn ? 'X' : 'O';
		$xTurn = !$xTurn;
	}
	if (!$gameOver) {
		for ($i = 0; $i < 3; $i++) { 
			$wLine = [$board[0][$i], $board[1][$i], $board[2][$i]];
			if ((count(array_unique($board[$i])) === 1 && !in_array('', $board[$i])) || (count(array_unique($wLine)) === 1 && !in_array('', $wLine))) {
				$gameOver = true;
				goto a;
			}
		}
		$dlLine = [$board[0][0], $board[1][1], $board[2][2]];
		$drLine = [$board[0][2], $board[1][1], $board[2][0]];
		if ((count(array_unique($dlLine)) === 1 && !in_array('', $dlLine)) || (count(array_unique($drLine)) === 1 && !in_array('', $drLine))) {
			$gameOver = true;
		}
		if (!$gameOver && !in_array('', array_merge(...$board))) {
			$gameOver = true;
			$isDraw = true;
		}
		a:
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title></title>
</head>
<body>
	<h1 class="player_indicator"><?php echo $xTurn ? 'X' : 'O'; ?></h1>
	<form class="board" action="./" method="post">
		<button class="board_tile remove-left-border remove-top-border" name="tile" value="0"><?php echo $board[0][0]; ?></button>
		<button class="board_tile remove-top-border" name="tile" value="1"><?php echo $board[0][1]; ?></button>
		<button class="board_tile remove-right-border remove-top-border" name="tile" value="2"><?php echo $board[0][2]; ?></button>
		<button class="board_tile remove-left-border" name="tile" value="3"><?php echo $board[1][0]; ?></button>
		<button class="board_tile" name="tile" value="4"><?php echo $board[1][1]; ?></button>
		<button class="board_tile remove-right-border" name="tile" value="5"><?php echo $board[1][2]; ?></button>
		<button class="board_tile remove-left-border remove-bottom-border" name="tile" value="6"><?php echo $board[2][0]; ?></button>
		<button class="board_tile remove-bottom-border" name="tile" value="7"><?php echo $board[2][1]; ?></button>
		<button class="board_tile remove-right-border remove-bottom-border" name="tile" value="8"><?php echo $board[2][2]; ?></button>
	</form>
	<?php if ($gameOver): ?>
		<div class="modal">
			<div class="modal_body">
				<div class="message"><?php if (!$isDraw): echo !$xTurn ? 'X' : 'O'; ?> a remporté la partie !<?php elseif ($isDraw): ?>Egalité<?php endif; ?></div>
				<form>
					<button class="reset_btn" action="./">Play Again</button>
				</form>
			</div>
		</div>
	<?php endif; ?>
	<form action="./" method="post">
		<button class="reset_btn" name="reset">Reset</button>
	</form>
</body>
</html>
<?php
$_SESSION['board'] = $board;
$_SESSION['xTurn'] = $xTurn;
$_SESSION['gameOver'] = $gameOver;
if ($gameOver || (isset($_POST['reset']))) {
	session_destroy();
}
?>