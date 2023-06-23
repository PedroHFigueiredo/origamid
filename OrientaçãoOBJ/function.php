<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'teste');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

//Data Insertion Function
	public function insert($nome,$mae,$pai,$email,$telefone,$endereco,$dataEntrada)
	{
	// $ret=mysqli_query($this->dbh,"insert into tblusers(FirstName,LastName,EmailId,ContactNumber,Address) values('$fname','$lname','$emailid','$contactno','$address')");
		$ret=mysqli_query($this->dbh,"insert into cadastro(nome,pai,mae,email,telefone,endereco,dataEntrada) values('$nome','$mae','$pai','$email','$telefone','$endereco','$dataEntrada')");
	return $ret;
	}

//Data read Function
public function fetchdata()
	{
	$result=mysqli_query($this->dbh,"select * from cadastro") or die( mysqli_error($this->dbh));
	return $result;
	}


//Data one record read Function
public function fetchonerecord($id)
	{
	$oneresult=mysqli_query($this->dbh,"select * from cadastro where id=$id");
	return $oneresult;
	}


//Data updation Function
public function update($nome,$mae,$pai,$email,$telefone,$endereco,$userid)
	{
	$updaterecord=mysqli_query($this->dbh,"update  cadastro set nome='$nome',mae='$mae',pai='$pai',email='$email',telefone='$telefone',endereco='$endereco' where id='$userid' ");
	return $updaterecord;
	}


//Data Deletion function Function
public function delete($id)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from cadastro where id=$id");
	return $deleterecord;
	}


} 
?>