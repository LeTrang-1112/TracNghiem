<?php
class Model
{
	protected $conn;

	function __construct()
	{
		try {
			$this->conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=UTF8;SET time_zone='Asia/Ho_Chi_Minh'", DB_USERNAME, DB_PASSWORD);
    		// set the PDO error mode to exception
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}

	}
	/* Hàm insert dùng PDO */
	public function insert($table , $value, $row = null){
		if($row!=null){
			$sql = "INSERT INTO ".$table." (".$row.") VALUES (".$value.")";
		} else{
			$sql = "INSERT INTO ".$table." VALUES (".$value.")";
		}
		try{
			// use exec() because no results are returned
			$this->conn->exec($sql);
			return 1;
		} catch(PDOException $e) {
			return $sql . "<br>" . $e->getMessage();
		}
	}
	/* Hàm update dùng PDO */
	public function update($table, $setCol, $setVal, $cond){
		$sql = '';
		if(gettype($setCol) == "string"){
			$sql = "UPDATE ".$table." SET ".$setCol."=".$setVal." WHERE ".$cond."";
		} else {
			$set = '';
			for($i = 0; $i < count($setCol); $i++){
				$set .= $setCol[$i]."=".$setVal[$i].",";
			}
			$set = rtrim($set,',');
			$sql = "UPDATE ".$table." SET ".$set." WHERE ".$cond."";
		}
		try{
			// Prepare statement
			$stmt = $this->conn->prepare($sql);
			// execute the query
			$stmt->execute();
			return 1;
		} catch(PDOException $e) {
			return $sql . "<br>" . $e->getMessage();
		}
	}
	/* Hàm delete dùng PDO */
	public function delete($table, $cond){
		$sql = "DELETE FROM ".$table." WHERE ".$cond."";
		try{
			// use exec() because no results are returned
			$this->conn->exec($sql);
			return 1;
		} catch(PDOException $e) {
			return $sql . "<br>" . $e->getMessage();
		}
	}
	/* Hàm select dùng PDO */
	public function select($what, $table, $cond = null, $option = null){
		if($cond == ''){
			$sql = "SELECT ".$what." FROM ".$table." ".$option;
		} else {
			$sql = "SELECT ".$what." FROM ".$table." WHERE ".$cond." ".$option;
		}
		try{
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			// set the resulting array to associative
			$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
			return $result;
		} catch(PDOException $e) {
			return "Error: " . $e->getMessage();
		}
	}
	function __destruct()
	{
		$this->conn = null;
	}
}