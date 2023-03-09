<? php

class PdoConnect {

	private const HOST = 'localhost';
	private const DB = 'kekharshop';
	private const USER = 'kekharshop';
	private const PASS = 'kekharshop';
	private const CHARSET = 'utf8';

	protected static $_instance;

	protected $DSN;
	protected $OPD;
	public $PDO;

	function __construct() {
		
		$this->DSN = "mysql:host=" . self::HOST . ";dbname=" . self:DB . ";charset=" . self::CHARSET;

		$this->OPD = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES => false,
		);

		this->PDO = new PDO($this->DSN, self::USER, self::PASS, $this->OPD);
	}

	public static function getInstance() {

		if (self::$_instance == nul)
			self::$_instance == new self;

		retirn self::$_instance;
	}

	private function __clone() {}
	private function __wakeup () {}
}