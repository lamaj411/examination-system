<?php




class Database extends Exception {

		// Setting up variables
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $db = 'aptitude';
	private $base;

		// Defining constructor
	public function __construct() {
		$this->connect();
	}
		// Database connection
	public function connect() {

		try {
				//Crearing database source name 
			$nrja = 'mysql:host=' . $this->host . ';dbname=' . $this->db;

				//Creating object in PDO
			$this->base = new PDO($nrja, $this->username, $this->password);
			$this->base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->base->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

			return true;
		} catch( PDOException $e ) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}

	}

	public function execute_query( $sql, $array = NULL ) {

		try {
			$statement = $this->base->prepare($sql);
			$big_data  = $statement->execute($array);

			if( $big_data ) {
				return true;
			} else {
				return false;
			}
		}  catch (PDOException $e) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}

	}

	public function display( $sql, $array = NULL ) {

		try {
			$statement = $this->base->prepare($sql);
			$statement->execute( $array );

			return $big_data = $statement->fetchAll();
		}  catch (PDOException $e) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}
	}



	// cust function new nr  added
	public function execute_query_return_id( $sql, $array = NULL ) {

		try {
			$statement = $this->base->prepare($sql);
			$big_data  = $statement->execute($array);

			$retunrId = $this->base->lastInsertId(); 

			if( $big_data ) {
				return $retunrId;
			} else {
				return false;
			}
		}  catch (PDOException $e) {
			echo '<script type="text/javascript">console.log("' .  ' Error: ' . $e->getMessage()  . '");</script>';
		}

	}

	// end cust function
}	



















?>