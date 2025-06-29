# Description
# Convert number to reversed array of digits
# Given a random non-negative number, you have to return the digits of this number within an array in reverse order.
# Example(Input => Output):
# 35231 => [1,3,2,5,3]
# 0 => [0]

digitize <- function(n) {
  num_str <- as.character(n)
  num_chars <- strsplit(num_str, "")[[1]]
  reversed_num_chars <- rev(num_chars)
  as.numeric(reversed_num_chars)
}