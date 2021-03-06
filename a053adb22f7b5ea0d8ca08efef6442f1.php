class Auth
{
	const LOGIN_RESULT_SUCCESS           = 0;
	const LOGIN_RESULT_INVALID_NICKNAME  = 1;
	const LOGIN_RESULT_WRONG_PASSWORD    = 2;
	const LOGIN_RESULT_UNREGISTERED_NAME = 3;
	const LOGIN_RESULT_BRUTEFORCE        = 45646543214;
	
	public function login($name, $pass)
	{
		// ...
		return self::LOGIN_RESULT_SUCCESS;
	}
}

$auth = new Auth();

$authStatus = $auth->login($name, $pass);

if ($authStatus === Auth::LOGIN_RESULT_SUCCESS)
	// ...