class Timer
{
    /**
     * Returns a point in time reperesented in seconds
     * @return float
     */
    public function getTime()
    {
        return microtime(true);
    }

    /**
     * Calculates the difference in minutes between two points
     * @param float $timeStart
     * @param float $timeEnd
     * @return float amount of minutes rounded to two digits
     */
    public function calculateMinutesElapsed($timeStart, $timeEnd)
    {
        return number_format(($timeEnd - $timeStart) / 60, 2);
    }
}

$timer = new Timer();
$start = $timer->getTime();
sleep(130);
$end = $timer->getTime();
echo 'Minutes passed:', $timer->calculateMinutesElapsed($start, $end);