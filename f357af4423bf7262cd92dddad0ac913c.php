class EmailSender
{
  const EMAIL_FROM = "your@email.com";
  const EMAIL_TITLE = "Email from our website";

  public function send($to, $text)
  {
    mail($to, self::EMAIL_TITLE, $text, self::EMAIL_FROM);
  }
}