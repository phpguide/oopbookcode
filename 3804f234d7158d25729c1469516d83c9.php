class Calculator
{
    public function plus($a, $b)
    {
        return $a + $b;
    }
}

$calc = new Calculator();
echo calculate(1, 3, [$calc, 'plus']);