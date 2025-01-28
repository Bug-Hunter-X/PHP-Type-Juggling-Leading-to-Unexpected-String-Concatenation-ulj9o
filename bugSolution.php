```php
function calculateSum($a, $b) {
  if (!is_numeric($a) || !is_numeric($b)) {
    throw new InvalidArgumentException('Both arguments must be numeric.');
  }
  return $a + $b;
}

$result = calculateSum(10, 20); // Correct addition
var_dump($result); // Output: int(30)

$result = calculateSum(10, '20'); //Throws Exception
```