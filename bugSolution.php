function foo(a, b) {
  if (a === 0 && b === 0) {
    return 0; // Handle the case where both a and b are 0
  } else if (a === b) {
    return a; 
  } else if (a > b) { 
    return foo(a - b, b);
  } else { 
    return foo(a, b - a);
  }
}
//This is a corrected version of the function that handles the case where both a and b are 0.