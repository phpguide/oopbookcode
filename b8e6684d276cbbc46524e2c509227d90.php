class Autoloader
{
	private $map = [];
	private $vendorDir = null; 

	public function register()
	{
		spl_autoload_register(array($this, 'load'));
	}

	public function map($namespace, $directory)
	{
		if (!is_dir($directory))
			throw new \InvalidArgumentException("Directory $directory is not a valid directory");

		$this->map[$namespace] = $directory; 
	}

	public function mapVendorDir($directory)
	{
		if (!is_dir($directory))
			throw new \InvalidArgumentException ("Directory '$directory' is not a valid directory");

		$this->vendorDir = $directory;
	}

	private function load($struct)
	{
		if (false === ($pos = strrpos($prefix, '\\')))
			throw new \InvalidArgumentException ("'$struct' does not belong to a namespace");

		$namespace = mb_substr($struct, 0, $pos);

		$dir = isset($this->map[$namespace])
			? $this->map[$namespace]
			: $this->vendorDir;

		$this->loadFromDir($dir, $struct);
	}

	private function loadFromDir($dir, $struct) {
		// same as you did before
	}
}