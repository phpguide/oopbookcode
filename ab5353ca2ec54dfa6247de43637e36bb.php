trait Loggable
{
    protected $logger;

    public function setLogger(ILogger $logger)
    {
        $this->logger = $logger;
    }

    public function log($level, $message)
    {
        $this->logger->log($level, $message);
    }
}

class Foo
{
    use Loggable;

    public function doSomething()
    {
        $this->log("critical", "I am doing something");
    }
}