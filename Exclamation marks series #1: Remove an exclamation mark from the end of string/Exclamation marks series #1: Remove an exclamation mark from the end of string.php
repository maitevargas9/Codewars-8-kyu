<?php
/*
Description

Remove an exclamation mark from the end of a string. For a beginner kata, you can assume that the input data is always
a string, no need to verify it.

Examples
"Hi!"     ---> "Hi"
"Hi!!!"   ---> "Hi!!"
"!Hi"     ---> "!Hi"
"!Hi!"    ---> "!Hi"
"Hi! Hi!" ---> "Hi! Hi"
"Hi"      ---> "Hi"
*/

function remove(string $s): string {
  return (substr($s, -1) === '!') ? substr($s, 0, -1) : $s;
}
?>