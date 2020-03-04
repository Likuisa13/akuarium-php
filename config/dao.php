<?php 
include_once 'dbconfig.php';

class Dao 
{
	var $link;
	public function __construct()
	{
			$this->link = new Dbconfig(); //object
		}
		public function view($tabel)
		{
			$query = "SELECT * FROM $tabel";
			return mysqli_query($this->link->conn, $query);	
		}

		public function execute($query)
		{
			$result = mysqli_query($this->link->conn, $query);
			if ($result) {
				return $result;
			}else{
				return mysqli_error($this->link->conn);
			}
		}


	}

	?>