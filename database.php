<?php

	class database
	{
		private $host="localhost";
		private $username="root";
		private $password="";
		private $dbName ="university";

		public function InsertData($query)
		{
			$con = new mysqli($this->host,$this->username,$this->password,$this->dbName);
			if($con)
			{
				if(mysqli_query($con,$query))
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return 'Database is not Connected';
			}
		}

		public function GetData($query)
		{
			$con = new mysqli($this->host,$this->username,$this->password,$this->dbName);
			if($con)
			{
				$result = mysqli_query($con,$query);
				return $result;
			}
			else
			{
				return 'Database is not Connected';
			}
		}
		public function LastId($qry)
		{
			$con = new mysqli($this->host,$this->username,$this->password,$this->dbName);
			if(!$con)
			{
				echo '<script type="text/javascript">alert("Database is not Connected , Please Contact with Developer")</script>';
			}
			if(mysqli_query($con,$qry))
			{
				
				$id =  mysqli_insert_id($con);
				mysqli_close($con);
				return $id;
			}
			else
			{
				mysqli_close($con);
				return false;
			}
			
		}
	}