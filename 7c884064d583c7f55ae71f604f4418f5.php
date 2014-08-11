class Book
{
    /** @var Current Book Title */
    private $title;

    /** Returns the title of the book
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /** Sets the new title of the book
     * @param String $title the new title to set
     * @return void
     */
    public function setTitle($title) {
        $this->title = $title;
    }
}