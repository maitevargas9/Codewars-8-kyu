'''
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
'''

def remove(s):
    return s.removesuffix('!')