class MyDateTime extends DateTimeImmutable
{
	public function __toString()
	{
		return $this->format("d/m/Y H:i:s");
	}
}