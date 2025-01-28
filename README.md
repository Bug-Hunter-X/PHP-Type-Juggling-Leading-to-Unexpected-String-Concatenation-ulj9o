# PHP Type Juggling Bug

This example demonstrates a common error in PHP related to type juggling.  When performing arithmetic operations, PHP automatically converts operands to a common type.  However, this can lead to unexpected results when mixing strings and numbers.

The `calculateSum` function intends to add two numbers. However, if a string is passed as an argument, PHP will perform string concatenation instead of numerical addition. This subtle error can be hard to spot and debug, especially in larger applications.

The solution demonstrates how to enforce type checking to avoid this issue.