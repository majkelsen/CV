<?php
	session_start();
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Michał Magiera - CV</title>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <main>
            <section class="left">
                <div class="personals container">
                    <i class="foto1 logo">
                        <i class="foto2 ">
                            <i class="foto4 "></i>
                        </i>
                        <i class="foto3 "></i>
                    </i>
                    <span>
                        <h1>Michał <h2>Magiera</h2></h1>
                    <h4>Front End Developer</h4>
                    
                    </span>

                </div>
                <div class="ambilities container">
        
                    <span>
                    <div class="skillsTable">
                            <div class="skillsBlock">
                                <h3><i class="fab fa-html5"></i><br> HTML</h3>
                            </div>
                            <div class="skillsBlock">
                                <h3><i class="fab fa-css3-alt"></i><br> CSS</h3>
                            </div>
                            <div class="skillsBlock">
                                <h3><i class="fab fa-js"></i><br> JS</h3>    
                            </div>
                            <div class="skillsBlock break">
                                <h3><i class="fab fa-react"></i><br> REACT</h3>
                            </div>
                            <div class="skillsBlock break">
                                <h3><i class="fab fa-node-js"></i><br> NODE</h3>
                            </div>
                            
                            <div class="skillsBlock">              
                                <h3><i class="fab fa-github-square"></i><br> GIT</h3>
                            </div>
                            
                            <div class="skillsBlock">                            
                                <h3><i class="fas fa-bold"></i><br> BOOTSTRAP</h3>
                            </div>
                            <div class="skillsBlock">
                                <h3><i class="fab fa-sass"></i><br> SASS</h3>
                            </div>
                            
                        </div>
                        <h2>Angielski <i class="fas fa-equals"></i> B2</h2>
                    </span>
                </div>
                <div class="hobby container">
                        <i class="fas fa-dharmachakra  logo"></i>
                        <span>
                            <h1>Hobby</h1>
                            <div class="HobbyIcons">
                                <h3><i class="fas fa-microchip"></i> hardware / sprzęt pc</h3>
                                <h3><i class="fas fa-running"></i> biegi / kalistenika</h3>
                                <h3><i class="fas fa-book"></i> książki / gry</h3>
                                <h3><i class="fas fa-film"></i> tworzenie/montaż video</h3>
                            </div>
                            
                        </span>
                    </div>
                    <div class="contact container">
                        <span class="popup">
                            <div class="triangle"></div>
                            <h1>! KONTAKT !</h1>
                            <h3><i class="fas fa-mail-bulk"></i> m@magieramichal.pl</h3>
                            <h3><i class="fas fa-phone"></i> 501-107-828</h3>
                            <h3><i class="fas fa-globe-africa"></i> magieramichal.pl</h3>
                            <i class="far fa-envelope  logo"></i>
                            <div class="links">
                                <a href="https://github.com/majkelsen" target="_blank"><i class="fab fa-github-square"></i><br>github.com/majkelsen</a>
                                <a href="https://www.linkedin.com/in/michal-magiera-mm" target="_blank"><i class="fab fa-linkedin"></i><br>/michal-magiera-mm</a>
                            </div>
                        </span>
                        
                    </div>
                    
            </section>

            <section class="right">
                <div class="road container rep">
                <i class="far fa-user-circle logo"></i>
                        <span>
                        <h1>Krótko o mnie</h1>
                            <p>Kilka poprzednich lat zdobywałem doświadczenie w zarządzaniu i prowadzeniu działalności gospodarczych. Nauczyło mnie to przede wszystkim odpowiedzialności za swoje obowiązki, a także pracy w zespole i współpracy z innymi. </p>
                            <p>Aktualnie będąc już freelancerem, zdecydowałem iż przyszedł czas na zatrudnienie się w większym przedsiębiorstwie branży IT, aby poszerzyć swoje horyzonty i zdobyć nowe, rozwijające doświadczenia. </p>
                            <p>Jako osoba rzetelna, oferuję swoje pełne zaangażowanie w powierzone przyszłe obowiązki. Oczywiście deklaruję również nieustanny wkład w ulepszanie swoich umiejętności, aby wykonywać coraz to bardziej zaawansowane zadania z rosnącą sprawnością.</p>
                         </span>
                </div>
                
                <div class="it container">
                        <i class="fas fa-code  logo"></i>
                        <span>
                        <h1>Rozwijane technologie IT</h1>  
                            <p>Dobrze poznane zasady tworzenia struktury strony <b>HTML</b>, szeroka wiedza o stylowaniu za pomocą arkuszy styli <b>CSS</b>, pisanie skryptów i implementowanie funkcjonalności elementów przy pomocy czystego <b>JavaScript</b>. </p>
                            <p>Zaznajomienie się z zasadami działania usprawnień, takich jak biblioteka <b>jQuerry</b> czy preprocesor <b>Sass</b>. Drobne projekty stworzone przy pomocy biblioteki <b>Bootstrap</b>. </p>
                            <p>Implementacja na stronie pojedynczych, prostszych skryptów <b>PHP</b>. W dobrym stopniu poznany system kontroli wersji <b>GIT</b>.</p>
                            <p>Pierwsze projekty w <b>React</b>, w którym w tym momencie rozszerzam swoją więdzę, pracując ze środowiskiem <b>Node.js</b>, frameworkiem <b>Express</b> oraz bazą <b>MongoDB</b>.  </p>
                            <p>Obecnie jestem w trakcie tworzenia aplikacji do kontrolowania budżetu domowego, operującej na dodawanych i aktualizowanych przez użytkownika danych. </p>

                                           
                        </span>
                </div>
                <div class="schools container">
                        <i class="fas fa-graduation-cap logo"></i>
                        <span>
                            <h1>Droga nauczania</h1>
                                <h3>aktualnie : Samokształcenie </h3>
                                <p>kursy internetowe, tworzenie własnych projektów</p>
                                <h3>2013-2017 : Akademia Górniczo-Hutnicza w Krakowie</h3>
                                <p>wydział IEiT - kierunek INFORMATYKA</p>
                                <p>uzyskanie tytułu <b>INŻYNIERA PROGRAMISTY</b> </p>   
                                <p>Ukończone studia, poza poznaniem spektrum dziedzin informatycznych, w dużej mierze nastawione były na programowanie obiektowe. Mój projekt inżynierski był systemem webowo-mobilnym napisanym przy pomocy takich technologii jak Laravel (PHP), Bootstrap (CSS), Ionic (Angular).</p>
                                <h3>2009-2013 : Z.S. Elektryczno-Mechanicznych w N.S.</h3>
                                <p>technikum - kierunek MECHATRONIKA</p>
                                <p>uzyskanie tytułu <b>TECHNIKA MECHATRONIKA</b></p>
                
                                
                        </span>
                </div>
                <div class="work container">
                        <i class="far fa-building  logo"></i>
                        <span>
                            <h1>Doświadczenie zawodowe</h1>
                            <h3> <b>10.2017 - 12.2019:</b> SIMPRO Michał Magiera</h3>
                                <p>Prowadzenie jednoosobowej działalności.</p>
                                <p>Freelance w zakresie front-endu.</p>
                                <p>Drobne projekty komercyjne typu landing-page.</p>                                
                                <p>Budowa customowych komputerów stacjonarnych, chłodzonych cieczą.</p> 
                                <p>Produkcja manufakturowa, w dorywczym aspekcie.</p>                             
                            
                            <h3> <b>05.2015 - 09.2017:</b> CRISO sp. z o.o.</h3>
                                <p>Współzarządzanie spółką zajmującej się recyklingiem surowców wtórnych, na wielu płaszczyznach jej funkcjonowania.</p>       
                                <p>Prowadzenie kompletnej dokumentacji księgowej oraz rejestrów surowcowych.</p>
                                <p>Aktualizowanie stanów magazynu.</p>
                                <p>Kontakt z kontrahentami.</p>
                                <p>Planowanie kierunku rozwoju przedsiębiorstwa.</p>
                                <p>Kontrola finansów i analizowanie kondycji spółki.</p>
                            
                            <h3> <b>2011 - 2015:</b> MAXIM Jan Magiera </h3>
                                <p>Pomoc w firmie rodzinnej i wdrażanie się w jej obsługę. </p>
                                <p>Nauka i poznawanie fukcjonowania działalności. </p>
                            

                                <div class="rodo">Wyrażam zgodę na przetwarzanie moich danych osobowych przez firmę <b><i>*******</i></b>, dla potrzeb niezbędnych do realizacji procesu rekrutacji (zgodnie z ustawą z dnia 10 maja 2018 roku o ochronie danych osobowych (Dz. Ustaw z 2018, poz. 1000) oraz zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (RODO)).
                                Wyrażam zgodę na przetwarzanie moich danych osobowych w zakresie przyszłych procesów rekrutacyjnych.
                                
                                </div>

                                
                        </span>
                        
                </div>
                    <div class="footer">
                        <h3>Curriculum Vitae : Michał Magiera </h3>
                        <h4>Stworzone za pomocą : HTML | CSS | JS | PHP</h4>
                    </div>
            </section>

    </main>

        <div class="responsive">
            <section>  
                <div class="bdr">
                    <div class="adnotation">
                            <h4>LANGUAGE VERSION: <br><a href="cv.php"><img src="img/pl.png" alt=""></a> <a href="cvEng.php"><img class="eng" src="img/eng.png" alt=""></a></h4>
                            <h1>Znajdujesz się na niepełnej wersji strony. </h1>
                            <h2>Aby zobaczyć kompletną treść przejdź na urządzenie z wyświetlaczem o większej rozdzielczości (conajmniej 800px szerokości).</h2>
                    </div>
                </div>
                <div class="contact container">
                        <span class="popup2">
                            <div class="triangle"></div>
                            <h1>! KONTAKT !</h1>
                            <h3><i class="fas fa-mail-bulk"></i> m@magieramichal.pl</h3>
                            <h3><i class="fas fa-phone"></i> 501-107-828</h3>
                            <h3><i class="fas fa-globe-africa"></i> magieramichal.pl</h3><h5>hasło do CV: 2020cvM</h5>
                            <i class="far fa-envelope  logo"></i>
                            <div class="links">
                                <a href="https://github.com/majkelsen" target="_blank"><i class="fab fa-github-square"></i><br>github.com/majkelsen</a>
                                <a href="https://www.linkedin.com/in/michal-magiera-mm" target="_blank"><i class="fab fa-linkedin"></i><br>/michal-magiera-mm</a>                        
                            </div>                            
                        </span>
                </div>
            </section>  
        </div>


    <section class="modal-wrap">
        <div class="modal">
                <span class="hide"><i class="fas fa-times"></i></span>
                
                <div class="popLeft">
                    <h3><i class="fas fa-mail-bulk"></i> m@magieramichal.pl</h3>
                    <h3><i class="fas fa-phone"></i> 501-107-828</h3>
                    <h3><i class="fas fa-globe-africa"></i> magieramichal.pl </h3> 
                    <h5>hasło do CV: 2020cvM</h5> 
                    <h3><a href="https://github.com/majkelsen" target="_blank"><i class="fab fa-github-square"></i> github.com/majkelsen</a></h3>
                    <h3><a href="https://www.linkedin.com/in/michal-magiera-mm" target="_blank"><i class="fab fa-linkedin"></i> in/michal-magiera-mm</a></h3>
                    <h3>LANGUAGE VERSION: <br><a href="cv.php"><img src="img/pl.png" alt=""></a> <a href="cvEng.php"><img class="eng" src="img/eng.png" alt=""></a></h3>
                </div>
                    
                <div class="popRight">
                <form  id="myform" method="POST" action="email.php">
                    <label for="name">Imię i Nazwisko</label>
                    <input type="text" id="name" name="name" placeholder="Podaj imię i nazwisko.." 
                    value="<?php if (isset($_SESSION['f_name'])) echo $_SESSION['f_name'];?>">
        

                    <label for="company">Firma</label>
                    <input type="text" id="company" name="company" placeholder="Podaj nazwę firmy.."
                    value="<?php if (isset($_SESSION['f_company'])) echo $_SESSION['f_company'];?>">

                    <label for="email">E-mail zwrotny</label>
                    <input type="text" id="email" name="email" placeholder= "Podaj swój email.."
                    value="<?php	if (isset($_SESSION['f_email'])) echo $_SESSION['f_email'];?>">
                                                
                    <label for="goal">Cel kontaktu</label>
                    <select id="goal" name="goal">
                        <option value="Zapytanie">Zapytanie</option>
                        <option value="Oferta handlowa">Oferta pracy</option>
                        <option value="Propozycja współpracy">Propozycja współpracy</option>
                        <option value="Inne">Inne</option>
                    </select>

                    <textarea name="message" id="message" cols="" rows="" placeholder="Treść wiadomości..."><?php	if (isset($_SESSION['f_message'])) echo $_SESSION['f_message'];?></textarea>

    <?php
        if(isset($_SESSION['error'])){
            echo ($_SESSION['error']);
            unset ($_SESSION['error']);
            echo ('<script>
            document.querySelector(".modal-wrap").classList.add("active");
            document.querySelector("main").classList.add("blur");
            </script>');
        }
        if(isset($_SESSION['success'])){
            echo ($_SESSION['success']);
            unset($_SESSION['success']);
            echo ('<script>
            document.querySelector(".modal-wrap").classList.add("active");
            document.querySelector("main").classList.add("blur");
            </script>');
        }
    ?>
                    <label for=""></label>
                    <input type="submit" value="Wyślij" id="submit" name="submit" />
                </form>
                </div>
        </div>
    </section>

    <script src="script.js"></script>
    
</body>

</html>