namespace PHPGuide;

class User
{
    /** @var int User's id */
    public $id;

    /** @var string Username */
    public $name;

    /** @var string User's first name */
    public $firstName;

    /** @var string User's encrypted password */
    public $pass;

    /** @var \DateTime Last user's visit */
    public $lastVisit;
}