namespace PHPGuide;
class User
{
    /** @var int User's id */
    public $id;

    /** @var string username */
    public $name;

    /** @var string Encrypted users password */
    public $pass;

    /** @var \DateTime last users visit */
    public $lastVisit;
}