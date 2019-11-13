<?php
    session_start();
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: cv.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Witam na mojej stronie CV! Podaj hasło dostępowe!</title>

    <link href="https://fonts.googleapis.com/css?family=Niramit:400,500,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&amp;subset=latin-ext" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
</head>

<body>

<div class="menu">
    <div class="hello">
        <h1>witaj</h1>
        <h2>podaj hasło aby przejść do CV </h2>
        <h2 style="text-transform:none">(2019cvM)</h2>
    </div>

    <div class="form">
        <form action="login.php" method="POST">
<?php
    if(isset($_SESSION['blad'])){
        echo ($_SESSION['blad']);
        unset($_SESSION['blad']);
    }
?>
            <input type="text" id="password" name="password" placeholder="HASŁO">
            <input type="submit" value="prześlij">

        </form>
       
    </div>
</div>

</body>

</html>