class CounterStrikeServerInfoFetcher implements IGameInfoProvider
{
    private $mapName,
            $playerCount,
            $stats;

    // Bad code example. Do not do this at home!
    public function __construct($serverUrl)
    {
        $serverData = file_get_contents($serverUrl);
        
        $this->mapName = $this->parseMapName($serverData);
        $this->playerCount = $this->parsePlayerCount($serverData);
        $this->stats = $this->parseStats($serverData);
    }

    public function getMapName()     { return $this->mapName; }
    public function getPlayerCount() { return $this->playerCount; }
    public function getStats()       { return $this->stats; }

    // ...

    private function parseMapName($data) { ... }
    private function parsePlayerCount($data) { ... }
    private function parseStats($data) { ... }
}