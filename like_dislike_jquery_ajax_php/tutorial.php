<?php
class Tutorial{
	
	function __construct(){
		//db details
		$db_host = 'localhost';
		$db_user = 'megacour_user';
		$db_pass = '7130chachia';
		$db_name = 'megacour_dev';
		
		//connect db
		$con = mysql_connect($db_host, $db_user, $db_pass);
		
		//select db
		mysql_select_db($db_name, $con);
	}
	
	function get_rows($id = ''){
		if($id != ''){
			//fetch single row
			$query = mysql_query("SELECT * FROM tutorials WHERE id = $id");
			$data = mysql_fetch_assoc($query);
		}else{
			//fetch all rows
			$query = mysql_query("SELECT * FROM tutorials");
			while($row = mysql_fetch_assoc($query)){
				$data[] = $row;
			}
		}
		return $data;
	}
	
	function insert($data = array()){
		$data_array_num = count($data);
		$columns = "";
		$values = "";
		$i=0;
		foreach($data as $key=>$val){ 
			$i++;
			$sep = ($i == $data_array_num)?"":", ";
			$columns .= $key.$sep;
			$values .= $val.$sep;
		}
		$insert = mysql_query("INSERT INTO tutorials ($columns) VALUES ($values)");
		return $insert?TRUE:FALSE;
	}
	
	function update($data = array(), $conditions = array()){
		$data_array_num = count($data);
		$cols_vals = "";
		$condition_str = "";
		$i=0;
		foreach($data as $key=>$val){
			$i++;
			$sep = ($i == $data_array_num)?'':', ';
			$cols_vals .= $key."='".$val."'".$sep;
		}
		foreach($conditions as $key=>$val){
			$i++;
			$sep = ($i == $data_array_num)?"":" AND ";
			$condition_str .= $key."='".$val."'";
		}

		$update = mysql_query("UPDATE tutorials SET $cols_vals WHERE $condition_str");
		return $update?TRUE:FALSE;
	}
}
?>