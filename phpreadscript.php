<?PHP
	require 'configure.php';

	$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );
	print "Server found" . "<BR>";

	$database = "petlist";

	$db_found = mysqli_select_db($db_handle, $database);

	if ($db_found) 
	{

	$SQL = "SELECT * FROM tbl_information";
	$result = mysqli_query($db_handle, $SQL);

	while ( $db_field = mysqli_fetch_assoc($result) ) 
	{

	print $db_field['ID'] . "<BR>";
	print $db_field['Pet_Name'] . "<BR>";
	print $db_field['Species'] . "<BR>";
	print $db_field['Owner'] . "<BR>";
	print $db_field['DOB'] . "<BR>";
	print $db_field['DOD'] . "<BR>";

	}

	}
	else {

	print "Database NOT Found ";

	}

	mysqli_close($db_handle);

?>