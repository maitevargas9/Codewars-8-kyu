/*
Description

Task
Create a method all which takes two params:
a sequence
a function (function pointer in C)
and returns true if the function in the params returns true for every element in the sequence. 
Otherwise, it should return false. If the sequence is empty, it should return true, since technically nothing failed 
the test.

Example
all((1, 2, 3, 4, 5), greater_than_9) -> false
all((1, 2, 3, 4, 5), less_than_9)    -> True

Help
Here's a (Ruby) resource if you get stuck:
http://www.rubycuts.com/enum-all
*/

import java.util.Arrays;
import java.util.function.IntPredicate;

public class Solution {

  public static boolean all(int[] list, IntPredicate predicate) {
    return Arrays.stream(list).allMatch(predicate);
  }
}
