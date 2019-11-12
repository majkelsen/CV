<?php
	session_start();
	
	if (!isset($_POST['password']))
	{
		header('Location: index.php');
		exit();
	}
	
	require_once "connect.php";
	
	$connection = new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connection->connect_errno!=0)
	{
		echo "Error: ".$connection->connect_errno;
	}
	else
	{
		$password = $_POST['password'];
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");
		
		// HASHOWANIE PODANEGO HASŁA
		// $haslo_hash =password_hash($password, PASSWORD_DEFAULT);
		// echo $haslo_hash; exit();


		$rezultat = @$connection->query("SELECT pass FROM logins WHERE id=1");
    $rezultat2 = @$connection->query("SELECT pass FROM logins WHERE id=2");
		$check = $rezultat->fetch_assoc();
		$check2 = $rezultat2->fetch_assoc(); 

		if (password_verify($password,$check['pass'])) {

			$_SESSION['zalogowany'] = true;
								
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: cv.php');

		}else {
            if (password_verify($password,$check2['pass'])) {
            
                		$_SESSION['zalogowany'] = true;
            								
            				unset($_SESSION['blad']);
            				$rezultat->free_result();
            				header('Location: cv.php');
            
            		}
			$_SESSION['blad'] = '<div class="error">HASŁO NIEPRAWIDŁOWE</div>';
			header('Location: index.php');

		}

		$connection->close();
	}
?>