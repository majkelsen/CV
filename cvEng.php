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
                        <h2>English <i class="fas fa-equals"></i> B2</h2>
                    </span>
                </div>
                <div class="hobby container">
                        <i class="fas fa-dharmachakra  logo"></i>
                        <span>
                            <h1>Hobby</h1>
                            <div class="HobbyIcons">
                                <h3><i class="fas fa-microchip"></i> PC / hardware</h3>
                                <h3><i class="fas fa-running"></i> running / calisthenics</h3>
                                <h3><i class="fas fa-book"></i> books / games</h3>
                                <h3><i class="fas fa-film"></i> creating video</h3>
                            </div>
                            
                        </span>
                    </div>
                    <div class="contact container">
                        <span class="popup">
                            <div class="triangle"></div>
                            <h1>! CONTACT !</h1>
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
                <div class="road container">
                <i class="far fa-user-circle logo"></i>
                        <span>
                        <h1>About me</h1>
                            <p>In the past few years while doing business, I gained a lot of experience in management. It taught me, above all, responsibility for my duties, as well as teamwork and cooperation with other people. </p> 
                            <p>Currently, being a freelancer, I decided that the time has come for a change. I would like to start new job in a larger IT company, to broaden my horizons, and gain new, exciting experiences. </p>
                            <p>As a reliable person, I offer my full commitment to future duties. Of course, I also declare a constant contribution to improving my skills to perform more and more advanced tasks with increasing agility. I also sincerely express opinions and give feedback to my co-workers.</p>
                         </span>
                </div>
                
                <div class="it container">
                        <i class="fas fa-code  logo"></i>
                        <span>
                        <h1>Developed  IT technologies</h1>  
                            <p>Well-known principles of creating <b>HTML</b> page structure , extensive knowledge about styling using <b>CSS</b> style sheets, writing scripts and implementing functionality of elements, using pure <b>JavaScript</b>. </p>
                            <p>Familiarization with the operating principles of additives, such as the <b>jQuerry</b> library or the <b>Sass</b> preprocessor. Small projects created with the help of the <b>Bootstrap</b> library. </p>
                            <p>Implementation of single, simpler <b>PHP</b> scripts on the page. A well-known <b>GIT</b> version control system.</p>
                            <p>First projects in <b>React</b>, where I am currently expanding my knowledge, working with the <b>Node.js</b> environment, <b>Express</b> framework and the <b>MongoDB</b> database.  </p>
                            <p>Currently, I am in the process of creating an application to control the home budget, operating on data added and updated by the user. </p>

                                           
                        </span>
                </div>
                <div class="schools container">
                        <i class="fas fa-graduation-cap logo"></i>
                        <span>
                            <h1>Learning road</h1>
                                <h3>currently : Self-study </h3>
                                <p>internet courses, creating smaller projects</p>
                                <p>building my own portfolio</p>
                                <h3>2013-2017 : Akademia Górniczo-Hutnicza in Cracow</h3>
                                <p>department IEiT - the Faculty of INFORMATICS</p>
                                <p>obtaining the title of <b>ENGINEER PROGRAMMER</b></p>   
                                <p>The completed studies, apart from understanding the spectrum of IT fields, were largely focused on object-oriented programming. My Engineer's Thesis  was a web-mobile system written using such technologies as Laravel (PHP), Bootstrap (CSS), Ionic (Angular).</p>
                                <h3>2009-2013 : Z.S. Elektryczno-Mechanicznych in N.S.</h3>
                                <p>technical school - the Faculty of MECHATRONICS</p>
                                <p>obtaining the title of <b>MECHATRONICS TECHNIQUE</b> </p>
                
                        </span>
                </div>
                <div class="work container">
                        <i class="far fa-building  logo"></i>
                        <span>
                            <h1>Work experience</h1>
                            <h3> <b>10.2017 - 12.2019:</b> SIMPRO Michał Magiera</h3>
                                <p>One-man business</p>
                                <p>Front-end freelance.</p>
                                <p>Small commercial landing-page projects.</p>                                
                                <p>Construction of custom, liquid cooled PC's.</p>  
                                <p>Manufacture production in a casual aspect.</p>                            
                            
                            <h3> <b>05.2015 - 09.2017:</b> CRISO sp. z o.o.</h3>
                                <p>Co-management of a company dealing in the recycling of recyclable materials on many levels of its functioning.</p>       
                                <p>Keeping complete accounting documentation and raw material registers.</p>
                                <p>Updating inventory levels.</p>
                                <p>Contact with contractors.</p>
                                <p>Planning the direction of enterprise development.</p>
                                <p>Financial control and analysis of the company's condition.</p>
                            
                            <h3> <b>2011 - 2015:</b> MAXIM Jan Magiera </h3>
                                <p>Help in a family business and implementation in its service. </p>
                                <p>Learning about how to run a business. </p>
                            

                                <div class="rodo">I consent to the processing of my personal data by <b><i>*******</i> </b>, for the purposes of the recruitment process (in accordance with the Act of 10 May 2018 on data protection personal data (Journal of Laws of 2018, item 1000) and in accordance with Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the protection of individuals with regard to the processing of personal data and on the free flow of such data and repealing Directive 95/46 / EC (GDPR)).
                                I consent to the processing of my personal data for future recruitment processes.                               
                                </div>

                                
                        </span>
                        
                </div>
                    <div class="footer">
                        <h3>Curriculum Vitae : Michał Magiera </h3>
                        <h4>Created with : HTML | CSS | JS | PHP</h4>
                    </div>
            </section>

    </main>

        <div class="responsive">
            <section>  
                <div class="bdr">
                    <div class="adnotation">
                            <h4>Wersja językowa: <br><a href="cv.php"><img src="img/pl.png" alt=""></a> <a href="cvEng.php"><img class="eng" src="img/eng.png" alt=""></a></h4>
                            <h1>You can't watch at this resolution. </h1>
                            <h2>To view the complete content, switch to a device with a higher resolution display (at least 800px wide).</h2>
                    </div>
                </div>
                <div class="contact container">
                        <span class="popup2">
                            <div class="triangle"></div>
                            <h1>! Contact !</h1>
                            <h3><i class="fas fa-mail-bulk"></i> m@magieramichal.pl</h3>
                            <h3><i class="fas fa-phone"></i> 501-107-828</h3>
                            <h3><i class="fas fa-globe-africa"></i> magieramichal.pl</h3><h5>pass: 2020cvM</h5>
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
                    <h5>password to CV: 2020cvM</h5> 
                    <h3><a href="https://github.com/majkelsen" target="_blank"><i class="fab fa-github-square"></i> github.com/majkelsen</a></h3>
                    <h3><a href="https://www.linkedin.com/in/michal-magiera-mm" target="_blank"><i class="fab fa-linkedin"></i> in/michal-magiera-mm</a></h3>
                    <h3>LANGUAGE VERSION: <br><a href="cv.php"><img src="img/pl.png" alt=""></a> <a href="cvEng.php"><img class="eng" src="img/eng.png" alt=""></a></h3>
                </div>
                    
                <div class="popRight">
                <form  id="myform" method="POST" action="email.php">
                    <label for="name">Name & Surname</label>
                    <input type="text" id="name" name="name" placeholder="Write in name & surname.." 
                    value="<?php if (isset($_SESSION['f_name'])) echo $_SESSION['f_name'];?>">
        

                    <label for="company">Company</label>
                    <input type="text" id="company" name="company" placeholder="Write in company name.."
                    value="<?php if (isset($_SESSION['f_company'])) echo $_SESSION['f_company'];?>">

                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder= "Write in your email.."
                    value="<?php	if (isset($_SESSION['f_email'])) echo $_SESSION['f_email'];?>">
                                                
                    <label for="goal">Contact purpose</label>
                    <select id="goal" name="goal">                        
                        <option value="Oferta handlowa">Job offer</option>
                        <option value="Zapytanie">Query</option>
                        <option value="Propozycja współpracy">Coop proposal</option>
                        <option value="Inne">Others</option>
                    </select>

                    <textarea name="message" id="message" cols="" rows="" placeholder="Write in message..."><?php	if (isset($_SESSION['f_message'])) echo $_SESSION['f_message'];?></textarea>

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