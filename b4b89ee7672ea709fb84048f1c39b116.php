class CounterStrikeServerInfoFetcher implements IGameInfoProvider
{
    private $serverUrl,
            $serverRawData;
            $serverData = array();

    /**
     * Checks game status on a counter strike server
     * @param $serverUrl string Url of the server ip:port
     */
    public function __construct($serverUrl)
    {
        if (empty($serverUrl))
            throw new InvalidArgumentException("Invalid server url");

        $this->serverUrl = $serverUrl;
    }

    /**
     * Gets server information raw data
     * @return string
     */
    private function getServerRawData()
    {
        if ($this->serverRawData === null
            || $this->serverRawData === false)
			$this->serverRawData = file_get_contents($this->serverUrl);

        return $this->serverRawData;
    }

    /**
     * Get the currently played Map name
     * @return string Map name
     */
    public function getMapName()
    {
        if ($this->serverData['mapName'] === null)
            $this->serverData['mapName'] = $this->parseMapName($this->getServerRawData())

        return $this->serverData['mapName'];
    }

    /**
     * Gets the number of online players
     * @return int Amount of players online
     */
    public function getPlayerCount()
    {
        if ($this->serverData['playerCount'] === null)
            $this->serverData['playerCount'] = $this->parsePlayerCount($this->getServerRawData());

        return $this->serverData['playerCount'];

    }

    /*
     * Gets the leader board and player ranks
     * @return Player[] List of players ordered by rank
     */
    public function getStats()
    {
        if ($this->serverData['stats'] === null)
            $this->serverData['stats'] = $this->parseStats($this->getServerRawData());

        return $this->serverData['stats'];
    }

    // ...
    
    private function parseMapName($data) {}
    private function parsePlayerCount($data) {}
    private function parseStats($data) {}
}