interface ILibrary
{
    /**
     * Returns the book to the library
     * @param Book $book The book to return
     * @return void
     */
    public function returnBook(Book $book);

    /**
     * Borrows a book from the library
     * @param Book $book The book to borrow
     * @return void
     */
    public function takeBook(Book $book);

    /**
     * Returns a list of books currently in the library
     * @return Book[]
     */
    public function listBooks();
}