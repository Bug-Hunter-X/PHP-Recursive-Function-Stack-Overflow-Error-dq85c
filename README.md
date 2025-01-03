# PHP Recursive Function Bug

This repository demonstrates a common bug in recursive PHP functions: the improper handling of base cases which causes a stack overflow error.  The `foo()` function attempts to calculate the greatest common divisor (GCD) using Euclid's algorithm. However, it lacks a proper base case for when both inputs are zero, resulting in infinite recursion.

The solution shows how to correctly handle the base case, preventing the stack overflow. 

## Bug

The `bug.php` file contains the erroneous code.

## Solution

The `bugSolution.php` file provides the corrected code.