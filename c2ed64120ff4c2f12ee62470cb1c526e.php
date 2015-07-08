interface INewsProvider
{
    /**
     * @param int $count how many entries to return
     * @return array 
     */
    public function GetLatestNews($count);
}