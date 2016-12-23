<?PHP
//session_start();
//if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	//header ("Location: login.php");
//}

//set the session variable to 1, if the user signs up. That way, they can use the site straight away
//do you want to send the user a confirmation email?
//does the user need to validate an email address, before they can use the site?
//do you want to display a message for the user that a particular username is already taken?
//test to see if the u and p are long enough
//you might also want to test if the users is already logged in. That way, they can't sign up repeatedly without closing down the browser
//other login methods - set a cookie, and read that back for every page
//collect other information: date and time of login, ip address, etc
//don't store passwords without encrypting them

$uname = "";
$pword = "";
$errorMessage = "";
$num_rows = 0;

function quote_smart($value, $handle) {

   if (get_magic_quotes_gpc()) {
       $value = stripslashes($value);
   }

   if (!is_numeric($value)) {
       $value = "'" . mysqli_real_escape_string($handle,$value) . "'";
   }
   return $value;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	//====================================================================
	//	GET THE CHOSEN U AND P, AND CHECK IT FOR DANGEROUS CHARCTERS
	//====================================================================
	$uname = $_POST['username'];
	$pword = $_POST['password'];

	$uname = htmlspecialchars($uname);
	$pword = htmlspecialchars($pword);

	//====================================================================
	//	CHECK TO SEE IF U AND P ARE OF THE CORRECT LENGTH
	//	A MALICIOUS USER MIGHT TRY TO PASS A STRING THAT IS TOO LONG
	//	if no errors occur, then $errorMessage will be blank
	//====================================================================

	$uLength = strlen($uname);
	$pLength = strlen($pword);

	if ($uLength >= 10 && $uLength <= 30) {
		$errorMessage = "";
	}
	else {
		$errorMessage = $errorMessage . "Correo debe tener minimo 5 caracteres" . "<BR>";
	}

	if ($pLength >= 8 && $pLength <= 16) {
		$errorMessage = "";
	}
	else {
		$errorMessage = $errorMessage . "Contraseña debe tener mas de 8 caracteres y menos de 16" . "<BR>";
	}


//test to see if $errorMessage is blank
//if it is, then we can go ahead with the rest of the code
//if it's not, we can display the error

	//====================================================================
	//	Write to the database
	//====================================================================
	if ($errorMessage == "") {

	$user_name = "root";
	$pass_word = "";
	$database = "repuestosbd";
	$server = "localhost";

	$db_handle = mysqli_connect($server, $user_name, $pass_word,$database);
	$db_found = mysqli_select_db($db_handle,$database);

	if ($db_found) {

		$uname = quote_smart($uname, $db_handle);
		$pword = quote_smart($pword, $db_handle);

	//====================================================================
	//	CHECK THAT THE USERNAME IS NOT TAKEN
	//====================================================================

		$SQL = "SELECT * FROM clientes WHERE correo = $uname";
		$result = mysqli_query($db_handle,$SQL);
		$num_rows = mysqli_num_rows($result);

		if ($num_rows > 0) {
			$errorMessage = "Correo ya en uso";
		}
		
		else {

			$SQL = "INSERT INTO clientes (correo,pass) VALUES ($uname, md5($pword))";

			$result = mysqli_query($db_handle,$SQL);

			mysqli_close($db_handle);

		//=================================================================================
		//	START THE SESSION AND PUT SOMETHING INTO THE SESSION VARIABLE CALLED login
		//	SEND USER TO A DIFFERENT PAGE AFTER SIGN UP
		//=================================================================================

			session_start();
			$_SESSION['login'] = "1";

			header ("Location: ../indexe.php");

		}

	}
	else {
		$errorMessage = "Database Not Found";
	}




	}

}


?>

	<html>
	<head>
	<title>Basic Login Script</title>


	</head>
	<body>


<FORM NAME ="form1" METHOD ="POST" ACTION ="file:///C|/Users/felipe/Downloads/phpFiles/courseFiles/scripts/login/signup.php">

Username: <INPUT TYPE = 'TEXT' Name ='username'  value="<?PHP print $uname;?>" maxlength="20">
Password: <INPUT TYPE = 'TEXT' Name ='password'  value="<?PHP print $pword;?>" maxlength="16">

<P>
<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "Register">


</FORM>
<P>

<?PHP print $errorMessage;?>

	</body>
	</html>
