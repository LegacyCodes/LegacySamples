<?php include 'config.class.php';

	class Database extends Configuration {
		
		# Store the single instance of Database
		private static $_instant;
		
		# Store the pdo connect content
		private $_connect;
		
		# Private constructor to limit object instantiation to within the class
		private function __construct(){}
		
		# Getter method for creating/returning the single instance of this class
		public static function getInstance()
		{
			if(!self::$_instant)
				self::$_instant = new self();
			return self::$_instant;
		}
		
		# Connects to the database
		/* ------------------------------
		 * @ So basically were passing the following variables $host, $name, $user, $pass
		 * @ and were connecting to the database using PDO
		 * @ so if there is a mistake in the config.class.php file,
		 * @ we store the mistake in a separate file name PDOerrors.txt
		 * ------------------------------
		 */ 
		private function connect()
		{					
			try{
				$this->_connect = new PDO("mysql:host=$this->_host;dbname=$this->_name;",$this->_user,$this->_pass);
				$this->_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->_connect->exec("SET CHARACTER SET utf8");
				//$this->_connect->exec('USE project');
										.$this->_name.         ;
				}
			catch(PDOException $e){
				
				file_put_contents('      ', $e->getMessage(), FILE_APPEND);
				}
			return $this->_connect;
		}
		# Starts the connection to the database
		/* ------------------------------
		 * @ So basically it assigns the variables to connect function
		 * @ and starts the connection to the database
		 * ------------------------------
		 */
		public function start(){
			$this->connect();
		}
		
		# Closes the connection to the database
		/* ------------------------------
		 * @ So basically sets the connection variable that stores the connection to NULL
		 * @ and closes the connection by echoing out "Connection has been closed!"
		 * @ if by chance you wish to unset the variable rather than null it do so.
		 * ------------------------------
		 */
		public function close(){
			//unset($this->_connect);
			$this->_connect = NULL;
			
			
			
		}
		
		# Reads the rows from the databe tables
		/* ------------------------------
		 * @ it reads the rows from the database tables by looping trough all of them
		 * @ and diplaying the content as an object
		 *  ------------------------------
		 */
		public function read($query){
			
			# needs to be more dynamic --Work on it later--
			$read = $this->_connect->query($query);
			
			$read->setFetchMode(PDO::FETCH_OBJ);
			
			while ($rows = $read->fetch()) {
				
				
				
				
			}
		}
		
		# Inserts content to the database
		/* ------------------------------
		 * @ Inserts the content to the database deping upon the orther of the array
		 * @ ofcourse it needs to be more dynamic so --Work on it latter--
		 * ------------------------------
		 */
		 public function insert($id, $name, $type, $query){
			# needs to be more dynamic --Work on it latter--
			$insert = $this->_connect->prepare($query);
			$insert->execute(array($id, $name, $type));
		 }
		
		# Deletes rows  from the database table
		/* ------------------------------
		 * @ Deletes the current row depending upon an id (should fix this and implemented)
		 * @ Still it provides a more flexible way rather than coding the query everytime
		 * @ all you need to do is specified an id (fix it latter for security reasomes)
		 * ------------------------------
		 */
		public function delete($id, $query){
			# needs to be more dynamic and secure			
			$delete = $this->_connect->prepare($query);
			$delete->execute(array($id));
		}
	}