<!-- dbCon.php -->
<?php 
function connect($flag=TRUE){
	$servername = "localhost";
	$username = "id16857186_restaurant";
	$password = "m6v\0qQc?J=Exz>0";
	$dbName = "id16857186_res_booking";

	// Create connection
	if($flag){
		$conn = new mysqli($servername, $username, $password, $dbName);
	}else{
		$conn = new mysqli($servername, $username, $password);
	}
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: $conn->connect_error");
	} 
	//echo "Connected successfully";
	
	return $conn;
}

?>