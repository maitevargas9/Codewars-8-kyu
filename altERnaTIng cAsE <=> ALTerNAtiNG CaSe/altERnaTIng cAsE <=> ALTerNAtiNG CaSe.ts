/*
Description

Define String.prototype.toAlternatingCase (or a similar function/method such as 
to_alternating_case/toAlternatingCase/ToAlternatingCase in your selected language; see the initial solution for details) 
such that each lowercase letter becomes uppercase and each uppercase letter becomes lowercase. For example:
"hello world".toAlternatingCase() === "HELLO WORLD"
"HELLO WORLD".toAlternatingCase() === "hello world"
"hello WORLD".toAlternatingCase() === "HELLO world"
"HeLLo WoRLD".toAlternatingCase() === "hEllO wOrld"
"12345".toAlternatingCase()       === "12345"                   // Non-alphabetical characters are unaffected
"1a2b3c4d5e".toAlternatingCase()  === "1A2B3C4D5E"
"String.prototype.toAlternatingCase".toAlternatingCase() === "sTRING.PROTOTYPE.TOaLTERNATINGcASE"
As usual, your function/method should be pure, i.e. it should not mutate the original string.
*/

export function toAlternatingCase(s: string): string {
  let str = "";
  for (let i = 0; i < s.length; i++) {
    if (s[i] == s[i].toLowerCase()) {
      str += s[i].toUpperCase();
    } else {
      str += s[i].toLowerCase();
    }
  }
  return str;
}
