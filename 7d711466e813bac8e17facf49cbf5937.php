trait Loggable
{
    protected $logger;

    public function setLogger(ILogger $logger)
    {
        $this->logger = $logger;
    }

    public function log($message, $level)
    {
        $this->logger->log($message, $level);
    }
}

class Foo
{
    use Loggable;

    public function doSomething()
    {
        $this->log("I am doing something", "critical");
    }
}