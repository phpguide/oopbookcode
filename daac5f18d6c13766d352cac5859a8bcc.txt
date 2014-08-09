/**
 * @param IAuthProvider $provider
 */
function login(IAuthProvider $provider)
{
    $id = $provider->getUserId();
}