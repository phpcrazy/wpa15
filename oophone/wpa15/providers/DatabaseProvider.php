<?php 

class DB {

	private static $_instance = null;

	private $conn;
	private $query;

	public function __construct() {
		try {
			$this->conn = new PDO(
				'mysql:host=localhost;dbname=wpa15contact', 
				'root', 'mmlinks');
			echo "Connection OK!";
		} catch (PDOException $e) {
			echo "Something wrong. Database connection failed.";
		}
	}

	public static function table($tablename) {
		if(!(self::$_instance instanceof DB)) {
            self::$_instance = new DB();
        }
        self::$_instance->query = self::$_instance->conn->query('SELECT * FROM ' 
			. $tablename);
        return self::$_instance;
	}

	public function get() {
		$result = $this->query->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}

?>