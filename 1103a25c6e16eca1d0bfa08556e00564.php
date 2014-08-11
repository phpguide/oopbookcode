class User implements IUser
{
	const LAST_PAGE_SESSION_KEY = 'lastPage';
	
	public function getLastVisitedPage()
	{
		return $this->session->get(self::LAST_PAGE_SESSION_KEY);
	}
	
	public function setLastVisitedPage($page)
	{
		$this->session->set(self::LAST_PAGE_SESSION_KEY, $page);
	}
	
	// ...
}

class AuthorizedUser extends User {}

class GuestUser extends User {}