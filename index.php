

 send data from sql to php
  <?php
	$dbh = mysqli_connect('localhost', 'root',  "",'mahero111');
	//connect to MySQL server if (!$dbh)

	// die("Unable to connect to MySQL: " . mysqli_error());

	//if connection failed output error message
    if (!mysqli_select_db($dbh,'contacts'))

	// die("Unable to select database: " . mysqli_error());
    //if selection fails output error message

	$sql_stmt = "SELECT * FROM contacts";
    //SQL select query

     $result = mysqli_query($dbh,$sql_stmt);
     //execute SQL statement

	if (!$result)
		die("Database access failed: " . mysqli_error());
    	//output error message if query execution failed

		$rows = mysqli_num_rows($result);
   		// get number of rows returned

	if ($rows) {

	while ($row = mysqli_fetch_array($result)) {
		echo 'ID: ' . $row['id'] . '<br>';
		echo 'Full Names: ' . $row['fullnames'] . '<br>';

		echo 'Email: ' . $row['email'] . '<br>';

	}
}
mysqli_close($dbh); //close the database connection
?>
