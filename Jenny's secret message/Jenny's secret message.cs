/*
Description

Jenny has written a function that returns a greeting for a user. However, she's in love with Johnny, 
and would like to greet him slightly different. She added a special case to her function, but she made a mistake.

Can you help her?

using System;

public static class Kata
{
  public static string greet(string name)
  {
    return "Hello, " + name + "!";
    if(name == "Johnny")
      return "Hello, my love!";
  }
}
*/

using System;

public static class Kata
{
  public static string greet(string name)
  {
    if (name == "Johnny") {
      return "Hello, my love!";
    }
    return "Hello, " + name + "!";
  }
}