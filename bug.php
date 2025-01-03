function foo(a, b) {
  if (a === b) {
    return true; 
  } else if (a > b) { 
    return foo(a - b, b);
  } else { 
    return foo(a, b - a);
  }
}

//This function has a bug in case where a and b are both 0. It leads to an infinite recursion causing a stack overflow error. 