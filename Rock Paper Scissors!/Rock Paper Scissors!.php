<?php
/*
Description

Rock Paper Scissors

Let's play! You have to return which player won! In case of a draw return Draw!.

Examples(Input1, Input2 --> Output):
"scissors", "paper" --> "Player 1 won!"
"scissors", "rock" --> "Player 2 won!"
"paper", "paper" --> "Draw!"
*/

function rpc($p1, $p2) {
  if ($p1 === $p2) {
    return 'Draw!';
  }

  if (
      ($p1 === 'rock' && $p2 === 'scissors') ||
      ($p1 === 'paper' && $p2 === 'rock') ||
      ($p1 === 'scissors' && $p2 === 'paper')
  ) {
    return 'Player 1 won!';
  } else {
    return 'Player 2 won!';
  }
}
?>