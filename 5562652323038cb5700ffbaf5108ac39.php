/**
 * Applies given function to given operands
 * 
 * @param int $a First operand
 * @param int $b Second operand
 * @param callback $function Operation to perform on them
 * @return int Result of calculation
 */
function calculate($a, $b, $function)
{
    return $function($a, $b);
}

$plus  = function($a, $b) {
	return $a + $b;
};

$minus = function($a, $b) {
	return $a - $b;
};

echo calculate(2, 3, $plus), "\r\n";
echo calculate(3, 2, $minus), "\r\n";