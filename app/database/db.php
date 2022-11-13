<?php

session_start();
require("connect.php");


function db($value)
{
	echo "<pre>",print_r($value,true),"</pre>";
	die();
}

//Function used to execute the sql and return stmt
function executeQuery($sql,$data)
{
    global $conn;
	$stmt= $conn->prepare($sql);
	$values = array_values($data);
	$types = str_repeat("s",count($values));
	$stmt->bind_param($types, ...$values);
    $stmt ->execute();
	return $stmt;

}

function selectAll($table,$conditions = [])
{
	global $conn;
	$sql = "SELECT * FROM $table ";

	if(empty($conditions))
	{
		$stmt= $conn->prepare($sql);
		$stmt ->execute();
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;
	}

	else
	{
		$i=0;
		
		foreach($conditions as $key => $value)
		{	
			
			
			if($i===0)
			{
				$sql =$sql . "WHERE $key=?";
			

			}
			else 
			{
				$sql = $sql. " AND $key = ?";
	
            }
			$i++;
        }

		$sql = $sql;
		$stmt = executeQuery($sql,$conditions);
		$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		return $records;

	}
		
}


function selectOne($table,$conditions)
{
	global $conn;
	$sql = "SELECT * FROM $table ";

	$i=0;
	foreach($conditions as $key => $value)
	{	
			
			
		if($i===0)
		{
			$sql =$sql . "WHERE $key=?";
			

		}
		else 
		{
			$sql = $sql. " AND $key = ?";
	
        }
		$i++; 
    }

	$sql = $sql." LIMIT 1";
	$stmt = executeQuery($sql,$conditions);
	$records = $stmt->get_result()->fetch_assoc();
	return $records;

		
}


//iserting data into the database
function create($table,$data)
{
	global $conn;
	$sql= "INSERT INTO $table SET ";

	$i=0;
	foreach($data as $key => $value)
	{
			if($i===0)
			{
				$sql= $sql." $key = ?";

			}

			else
			{
				$sql = $sql. ", $key = ?";
	
            }

			$i++;
	}

	$sql=$sql;
	$stmt=executeQuery($sql,$data);
	$id = $stmt->insert_id;
	return $id;


}


//update values in the database

function update($table,$id,$data)
{
	global $conn;

	//UPDATE users SET admin=? usename=? password=? WHERE id=?
	$sql = "UPDATE $table SET ";
	$i=0;

	foreach($data as $key=>$value)
	{
		if($i===0)
		{
			$sql = $sql. " $key=?";
		}
		else
		{
			$sql= $sql. ", $key=?";
	
        }
		$i++;
	}
	$sql = $sql. " WHERE id=?";
	$data['id']=$id;
	$stmt=executeQuery($sql,$data);
	return $stmt->affected_rows;


}


	



function delete($table,$id)
{
	global $conn;

	//DELETE FROM users WHERE id=?
	$sql = "DELETE FROM $table WHERE id=? ";

	$stmt=executeQuery($sql,['id'=>$id]);
	return $stmt->affected_rows;

	
}


function getRealEstateAgent()
{
	global $conn;

	$sql= "SELECT * FROM agents WHERE agent=?";

	$stmt = executeQuery($sql,['agent'=>1]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;


}




function getClientTestimonials()
{
	global $conn;

	$sql= "SELECT * FROM clients WHERE published=?";

	$stmt = executeQuery($sql,['published'=>1]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;


}


function getPublishedProperty()
{
	global $conn;

	$sql= "SELECT * FROM properties WHERE published=?";

	$stmt = executeQuery($sql,['published'=>1]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;


}



function getNumberOfCustomers()
{
	global $conn;

	$sql= "SELECT count(username) FROM users WHERE admin=?";

	$stmt = executeQuery($sql,['admin'=>0]);
	$records = $stmt->get_result()->fetch_assoc();
	

	foreach($records as $record)
	{
		$record;
	}

	return $record;



}






function getNumberOfPropertiesInprogress()
{
	global $conn;

	$sql= "SELECT count(name) FROM properties WHERE published=? AND sold=?";

	$stmt = executeQuery($sql,['published'=>1,'sold'=>0]);
	$records = $stmt->get_result()->fetch_assoc();
	

	foreach($records as $record)
	{
		$record;
	}

	return $record;



}







function getNumberOfProperties()
{
	global $conn;

	$sql= "SELECT count(name) FROM properties WHERE published=?";

	$stmt = executeQuery($sql,['published'=>1]);
	$records = $stmt->get_result()->fetch_assoc();
	

	foreach($records as $record)
	{
		$record;
	}

	return $record;



}




function searchPosts($sterm)
{
	$match='%' . $sterm .'%';
	global $conn;

	$sql= "SELECT 
		p.*, u.username 
		FROM posts AS p 
		JOIN users AS u
		ON p.user_id = u.id 
		WHERE p.published=?

		AND p.title LIKE ? OR p.body LIKE ? ";

	$stmt = executeQuery($sql,['published'=>1,'title'=> $match, 'body'=>$match]);
	$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
	return $records;
	


}





?>