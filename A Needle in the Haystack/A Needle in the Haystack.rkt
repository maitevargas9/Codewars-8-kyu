#lang racket

(provide find-needle)

(define (find-needle lst)
  (string-append "found the needle at position " (number->string (index-of lst "needle"))))