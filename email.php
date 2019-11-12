<?php
session_start();

// if (empty($_POST['submit']))
// 	{
// 		header('Location: cv.php');
// 		exit();
// 	}
	

if (!empty($_POST['submit'])) {
    $odbiorca = "simpro@vp.pl";

    $name = htmlspecialchars(trim($_POST['name']));
    $company = htmlspecialchars(trim($_POST['company']));
    $email =  htmlspecialchars(trim($_POST['email']));
    $goal =  htmlspecialchars(trim($_POST['goal']));
    $message = htmlspecialchars(trim($_POST['message']));
    $submit = $_POST['submit'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);

    if (!isset($_COOKIE['send'])){
    
    // $name check
        if (empty($name)){
            $_SESSION['error'] = '<div class="error">Nie wypełniłeś pola Imię i Nazwisko!</div>';
            header('Location: cv.php');
        }
        elseif (strlen($name) > 40){
            $_SESSION['error'] = '<div class="error">Za długie imię i nazwisko - max. 40 znaków </div>';
            header('Location: cv.php');
        }

    // $company check
        if (empty($company)){
            $_SESSION['error'] = '<div class="error">Nie wypełniłeś pola z Nazwą Firmy!</div>';
            header('Location: cv.php');
        }
        elseif (strlen($company) > 40){
            $_SESSION['error'] = '<div class="error">Za długa nazwa - max. 40 znaków </div>';
            header('Location: cv.php');
        }

    // $email check
        if (empty($email)){
            $_SESSION['error'] = '<div class="error">Nie wypełniłeś pola E-mail!</div>';
            header('Location: cv.php');
        }
        else{
            $testemail = filter_var($email, FILTER_SANITIZE_EMAIL);
            if (filter_var($testemail, FILTER_VALIDATE_EMAIL) == false){            
                $_SESSION['error'] = '<div class="error">Niepoprawny adres E-mail!</div>';
                header('Location: cv.php');
            }  
        }
        if (strlen($email) > 30){
            $_SESSION['error'] = '<div class="error">Za długi e-mail - max. 30 znaków !</div>';
            header('Location: cv.php');
        }
    
    // $message check
        if (empty($message)){
            $_SESSION['error'] = '<div class="error">Nie wypełniłeś pola z zawartościa wiadomości!</div>';
            header('Location: cv.php');
        }
        elseif (strlen($message) > 1000){
            $_SESSION['error'] = '<div class="error">Za długa treść wiadomości - max. 1000 znaków </div>';
            header('Location: cv.php');
        }

    // data save
    if (!empty($name)){$_SESSION['f_name'] = $name;}
    if (!empty($company)){$_SESSION['f_company'] = $company;}
    if (!empty($email)){$_SESSION['f_email'] = $email;}
    if (!empty($message)){$_SESSION['f_message'] = $message;}
          
        //Sprawdzam czy są błędy i wysyłam wiadomość
        if (empty($_SESSION['error']))
            {
                $mailSender = "Wiadomość przysłał: $name ($company)";
                $mailReply = "Email zwrotny: $email";
                $mailText = "Treść wiadomości:<br>  $message <br><br> ($ip, $host)";
                $letter = $mailSender."<br><br> ".$mailReply."<br><br> ".$mailText."<br> ";    
               
                $temat = "$goal - $name ($company)";
                
                $header = "Content-type: text/html; charset=utf-8; \r\n";  
    
                if (@mail("simpro@vp.pl", $temat , $letter, $header))     
                {
                    $_SESSION['success'] = '<div class="success">Twoja wiadomość została wysłana.</div>';
                    setcookie("send", time()+60, time()+60);
                    unset($_SESSION['f_name']);
                    unset($_SESSION['f_company']);
                    unset($_SESSION['f_email']);
                    unset($_SESSION['f_message']);

                    header('Location: cv.php');
                }
                else
                    $_SESSION['error'] = '<div class="error">Wystąpił błąd podczas wysyłania wiadomości, spróbuj ponownie później.</div>';
                    header('Location: cv.php');
                }
            }
            else{
                $_SESSION['error'] = '<div class="error">Odczekaj'.($_COOKIE['send']-time()).' sekund przed wysłaniem kolejnej wiadomości</div>';
                header('Location: cv.php');
        }

}
?>