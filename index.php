<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form action="" method='POST'> -->
<!-- <div class="row mb-3">

  <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label> -->
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