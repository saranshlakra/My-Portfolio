<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="other_resources/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="other_resources/css/grid.css">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <title>Portfolio</title>

</head>

<body>

    <!-- php and make it index.php -->
<?php
// connecting to db
    $connect = mysqli_connect( 
    "localhost", 
    "root", 
    "", 
    "cms_portfolio" 
);

// getting table data using sql query
$query = 'SELECT *
FROM about
ORDER BY tagline DESC';

$experience_query = 'SELECT *
FROM experience
ORDER BY company_name DESC';

$skills_query = 'SELECT *
FROM skills
ORDER BY title DESC';

$education_query = 'SELECT *
FROM education
ORDER BY instituename DESC';

$result = mysqli_query($connect, $query);
$result_exp = mysqli_query($connect, $experience_query);
$result_skills = mysqli_query($connect, $skills_query);
$result_edu = mysqli_query($connect, $education_query);


while($record = mysqli_fetch_assoc($result)){
    $photo =  '<img src="'.$record["photo"].'" alt="Weapon photo 1">';
    $tagline = $record["tagline"];
    $description = $record["description"];

}

while($record_exp = mysqli_fetch_assoc($result_exp)){
   
    $company_name = $record_exp["company_name"];
    $position = $record_exp["position"];
    $job_role = $record_exp["job_role"];
    $start_date = $record_exp["start_date"];
    $end_date = $record_exp["end_date"];    
    $photo = $record_exp["photo"];

}

while($record_skills = mysqli_fetch_assoc($result_skills)){
   
    $title = $record_skills["title"];
    $photo = $record_skills["photo"];
    // $level = $record_skills["level"]; future use
    
}

while($record_edu = mysqli_fetch_assoc($result_edu)){
   
    $title = $record_edu["instituename"];
    $photo = $record_edu["degree"];
    // $level = $record_skills["level"]; future use
    
}
?>

    <nav class="side-nav sticky box-shadow">

        <!-- <img class="materimgal-imgcons nav-icon"
            src="/Projects/Website Project/Website project for git/My-Portfolio-main/nav-icon.svg"> -->
        <i class="material-icons nav-icon check-icon-0 nav-icon-1">
            menu
        </i><i class="material-icons nav-icon check-icon-1 nav-icon-0 ">
            close
        </i>

        <ul>

            <li class="logo">
                <a href="#" id="name">
                    <h3> Saransh Lakra<br>
                        <span class="brown-text"> Web Dev. UAV Pilot</span>
                    </h3>
                </a>
            </li>
        </ul>
        <nav class=" transparent transparent1 ">
            <nav class="nav-mobile ">
                <ul>
                    <li>
                        <a href="#about">
                            <i class="material-icons about-icon">
                                person
                            </i><span>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#experience">
                            <i class="material-icons experience-icon">
                                work
                            </i><span>Experience</span>
                        </a>
                    </li>
                    <li>
                        <a href="#skills">
                            <i class="material-icons skill-icon">
                                wb_incandescent
                            </i><span>Skills</span>
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <i class="material-icons project-icon">
                                construction
                            </i><span>Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="#education">
                            <i class="material-icons education-icon">
                                school
                            </i><span>Education</span>
                        </a>
                    </li>
                    <li>
                        <a href="#hire">
                            <i class="material-icons hire-icon">
                                emoji_people
                            </i><span>Hire</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <i class="material-icons contact-icon">
                                contact_phone
                            </i><span>Contact</span>
                        </a>

                    </li>
                    <li>
                        <a href="#resume-1">
                            <i class="material-icons resume-icon">
                                feed
                            </i><span>Resume</span>
                        </a>

                    </li>

                </ul>
            </nav>
        </nav>
        <div class="overlay"></div>

    </nav>

    <header>
        <div class="hero-text-box">
            <div>
                <h1> I like the<span class="teal"> perfect blend</span> <br>
                    of <span class="underline"> technology & imagination. </span>
                </h1>
            </div>
        </div>
        <!-- <embed
            src="/Projects/Website Project/Website project for git/My-Portfolio-main/resources/css/music/bg-music.mp3"
            type="" name='Music' loop='false' hidden='true' autoplay='true' autostart='true'> // music code -->
    </header>

    <section id="about" class="about js-class-feature">

        <h2 class="about-1">ABOUT</h2>

        <div class="box-shadow js-an-1" id="about-div">
            <blockquote>
                <h2>
               <?php echo $tagline ?>
                </h2>
            </blockquote>

            <p> <?php echo $description ?></p>
        </div>
    </section>

    <section class="about" id="experience">
        <h2 class="about-1">EXPERIENCE</h2>
        <div class="container">
            <div class="exp-1 box-shadow js-an-2">
                <div class="company-details">
                    <div class="company-logo-EP">
                        <a href="#" id="comp-1-logo"></a>
                    </div>
                    <div class="company-name-EP">
                        <h2>
                        <?php echo $company_name ?>
                        </h2>
                    </div>
                    <div class="position-name-EP">

                        <h2 class="position-font"><?php echo $position ?></h2>

                    </div>
                </div>

                <ul class="job-points">
                    <li><?php echo $job_role ?></li>
                    <!-- <li>Monitoring website performance and rectifying front-end related issues</li>
                    <li>Troubleshooting network and hardware faults</li> -->
                </ul>
                <h6><?php echo $start_date ?> - <?php echo $end_date ?></h6>
            </div>
            <div class="exp-1 box-shadow js-an-3">
                <div class="company-details">
                    <div class="company-logo">
                        <a href="#" id="comp-1-logo"></a>
                    </div>
                    <div class="company-name">
                        <h2>Unwind Life </h2>
                    </div>
                    <div class="position-name">

                        <h2 class="position-font">Technical Assistant</h2>

                    </div>
                </div>

                <ul class="job-points">
                    <li>Provided technical guidance to clients </li>
                    <li>Advised clients on the technicalities and choice of the company products</li>
                    <li>Created new features and functionality in the existing website of the company</li>
                    <li>Designed prototypes to enhance the look and functionality of the website </li>
                    <li>Ensured scalability of all the product images for better loading speed and
                        performance of the website</li>
                </ul>
                <h6>May 2017 - September 2019</h6>
            </div>
            <div class="exp-2 box-shadow js-an-4-1">
                <div class="company-details" id="freelance-details-div">
                    <div class="company-logo-1">
                        <a href="#" id="comp-1-logo">
                            <span class="material-icons freelance-logo">
                                engineering
                            </span>
                        </a>
                    </div>
                    <div class="company-name" id="freelance-name-div">
                        <h2>Freelance </h2>
                    </div>
                    <div class="position-name-1">

                        <h2 class="position-font">Drone Pilot <br> Frontend Dev</h2>
                    </div>
                </div>

                <ul class="job-points">
                    <li>Worked with Delhi Police in Surveillance using self-designed drone during
                        Covid-19 lockdown</li>
                    <li>Worked on UI development (JS animations, nav menu, alert modules) with Senpiper
                        Technologies India Pvt. Ltd. </li>
                    <li>Repairing and troubleshooting</li>
                    <li>Designed web-based portfolios</li>
                </ul>
                <h6> Year 2020 </h6>
            </div>

        </div>
    </section>

    <section class="about" id="skills">
        <h2 class="about-1">SKILLS</h2>
        <div class="container">
            <div class="skills-1 box-shadow">
                <h2 class="tech-heading">Frontend</h2>

                <div id="technology-1" class="js-an-5">

                    <img alt src="html.svg" class="tech-icon media-html" id="html">
                    <?php echo $title ?>
                </div>
                <div id="technology-2" class="js-an-5">
                    <img alt src="css3.svg" class="tech-icon">
                    CSS
                </div>
                <div id="technology-3" class="js-an-5">
                    <img alt src="javascript.svg" class="tech-icon">

                    JavaScript (Basic)
                </div>
                <div id="technology-4" class="js-an-5">
                    <img alt src="react.svg" class="tech-icon" id="react-icon">

                    React.js
                </div>
            </div>

            <div class="skills-1 box-shadow">
                <h2 class="tech-heading">Other</h2>

                <div class="tech-skills-2 js-an-5 " id="technology-other-1">

                    <img alt src="vs.svg" class="tech-icon" id="html">

                    Microsoft VS
                </div>
                <div class="tech-skills-2 js-an-5" id="technology-other-2">

                    <img alt src="photoshop.svg" class="tech-icon" id="html">

                    Photoshop
                </div>

                <div class="tech-skills-2 js-an-5" id="technology-other-2">

                    <img alt src="github.svg" class="tech-icon" id="html">

                    Github
                </div>
                <div class="tech-skills-2 js-an-5" id="technology-other-2">

                    <img alt src="premiere.svg" class="tech-icon" id="html">

                    Premiere Pro
                </div>
                <div class="tech-skills-2 js-an-5" id="technology-other-2">

                    <img alt src="drone.png" class="tech-icon" id="html">

                    Drone Pilot
                </div>
                <div class="tech-skills-2 js-an-5" id="technology-other-2">

                    <img alt src="aeromodelling.svg" class="tech-icon" id="html">

                    Aeromodeller
                </div>
                <div class="tech-skills-2 js-an-5" id="technology-other-2">

                    <img alt src="gear.svg" class="tech-icon" id="html">

                    And more..
                </div>
            </div>
        </div>
    </section>
    <section id="projects" class="about">

        <h2 class="about-1">PROJECTS</h2>
        <div class="row row-for-3">

            <div class="col col-new box-shadow js-an-6">
                <div class="bg">
                    <div class="project-img-container">
                        <img class="project-img" alt="" src="im-11.jpg">
                    </div>
                </div>
                <div class="project-info">
                    <span>InkMaster's Website <a class="no-a-style js-an-11"
                            href="https://as-inkmaster.000webhostapp.com/" target="_blank"><i
                                class="material-icons about-icon">visibility</i> </a> </span>
                    <p>I designed this website for a start-up company, called A&S Ink Master</p>
                </div>
            </div>

            <div class="col col-new box-shadow js-an-6">
                <div class="bg">
                    <div class="project-img-container">
                        <img class="project-img" alt="" src="im-ul.png">
                    </div>
                </div>
                <div class="project-info">
                    <span>Unwind Life Website <a class="no-a-style js-an-11" href="https://www.unwindlife.com/"
                            target="_blank"><i class="material-icons about-icon">visibility</i> </a> </span>
                    <p>Check out the login module of this website - Unwindlife.com</p>
                </div>
            </div>


            <div class="col col-new box-shadow js-an-6">
                <div class="bg">
                    <div class="project-img-container">
                        <img class="project-img" alt="" src="im-sp.png">
                    </div>
                </div>
                <div class="project-info">
                    <span>Senpiper Website <a class="no-a-style js-an-11" href="https://senpiper.com/"
                            target="_blank"><i class="material-icons about-icon">visibility</i> </a> </span>
                    <p>Check some cool animations on this website - Senpiper Technologies</p>
                </div>
            </div>

            <div class="col col-new box-shadow js-an-6">
                <div class="bg">
                    <div class="project-img-container">
                        <img class="project-img" alt="" src="Nimit Portfolio.png">
                    </div>
                </div>
                <div class="project-info">
                    <span>Digital Portfolio <a class="no-a-style js-an-11"
                            href="https://nimsphotography.000webhostapp.com/" target="_blank"><i
                                class="material-icons about-icon">
                                visibility
                            </i> </a> </span>
                    <p>Check out this super cool digital portfolio of a photographer</p>
                </div>
            </div>

        </div>
        <div class="row row-for-3">
            <div class="col col-new box-shadow js-an-6">
                <div class="bg">
                    <div class="project-img-container">
                        <img class="project-img" alt="" src="budget-app-project.jpg">
                    </div>
                </div>
                <div class="project-info">
                    <span>Budget App <a class="no-a-style js-an-11"
                            href="https://saranshlakra.github.io/Budget-App-Website.github.io/" target="_blank"><i
                                class="material-icons about-icon">
                                visibility
                            </i> </a> </span>
                    <p>A budget calculation app. Try it! just click on the eye button</p>
                </div>
            </div>
            <div class="col col-new box-shadow js-an-6 margin-left">
                <div class="bg">
                    <div class="project-img-container">
                        <img class="project-img" alt="" src="exam-app-project.jpg">
                    </div>
                </div>
                <div class="project-info">
                    <span>Exam App <a class="no-a-style js-an-11"
                            href="https://saranshlakra.github.io/Exam-App.github.io/" target="_blank"><i
                                class="material-icons about-icon">
                                visibility
                            </i> </a> </span>
                    <p>This is an exam app. Let's do some GA questions. Hit the eye button</p>
                </div>
            </div>

            <div class="col col-new box-shadow js-an-6">
                <div class="bg">
                    <div class="project-img-container">
                        <img class="project-img" alt="" src="drone-project.jpg">
                    </div>
                </div>
                <div class="project-info">
                    <span>Multirotor <a class="no-a-style js-an-11" href="" target="_blank"><i
                                class="material-icons about-icon">
                                visibility
                            </i> </a> </span>
                    <p>This is a fully automated drone. Let's see the world from above </p>
                </div>
            </div>

            <div class="col col-new box-shadow js-an-6">
                <div class="bg">
                    <div class="project-img-container">
                        <img class="project-img" alt="" src="dice-game-project.jpg">
                    </div>
                </div>
                <div class="project-info">
                    <span>Dice Game <a class="no-a-style js-an-11"
                            href="https://saranshlakra.github.io/Dice-Game.github.io/" target="_blank"><i
                                class="material-icons about-icon">
                                visibility
                            </i> </a> </span>
                    <p>This is a dice game. Wanna play? just click on the eye button</p>
                </div>
            </div>

        </div>
        <!-- </div> -->
    </section>

    <section id="education" class="about">

        <h2 class="about-1">EDUCATION</h2>

        <div class="row edu-row" id="edu1">
            <div class="col span-1-of-2 box-shadow edu-1">
                <p class="edu"><?php echo $instituename ?></p>
                <span class="edu-address">Faridabad, Haryana</span>
                <ul class="edu-ul">
                    <li>B.Tech in Computer Science & Engineering</li>
                </ul>
            </div>
            <div class="col span-1-of-2 box-shadow edu-2">
                <p class="edu">Sanatan Dharam Public School</p>
                <span class="edu-address">Punjabi Bagh, Delhi</span>
                <ul class="edu-ul">
                    <li class="edu-li"> Senior Secondary School</li>
                    <li class="edu-li">Secondary School</li>
                </ul>
            </div>
        </div>


    </section>

    <section id="hire" class="about">

        <h2 class="about-1">HIRE</h2>

        <div class="row form-row" id="form">
            <!-- <div class="col span-1-of-2 box-shadow "> -->
            <h2 class="hire js-an-7">Hire me</h2>
            <form action="https://usebasin.com/f/df040f11349d" method="POST">
                <div class="row form-ele-row">
                    <div class="form-label col span-1-of-4">
                        <label for="">Name</label>
                    </div>
                    <div class="col form-fields span-2-of-4">
                        <input type="text" name="name" id="form-name" placeholder="Your Name" required>
                    </div>
                </div>
                <div class="row form-ele-row">
                    <div class="form-label col span-1-of-4">
                        <label for="">Email</label>
                    </div>
                    <div class="col form-fields span-2-of-4">
                        <input type="text" name="email" id="email" placeholder="Your Email" required>
                    </div>
                </div>

                <div class="row form-ele-row">
                    <div class="form-label col span-1-of-4">
                        <label for="">Drop your message</label>
                    </div>
                    <div class="col form-fields span-2-of-4">
                        <textarea name="message" id="" placeholder="Your message" cols="10" rows="10"></textarea>
                    </div>
                </div>
                <div class="row form-ele-row">
                    <div class="col span-1-of-4">
                        <label for="">&nbsp</label>
                    </div>
                    <div class="col span-2-of-4" id="send-btn">
                        <input type="submit" value="Send" id="btn-send">
                    </div>

                </div>
            </form>
        </div>

    </section>

    <section id="contact" class="about">

        <h2 class="about-1">CONTACT</h2>

        <div class="row form-row" id="form-row-contact1">
            <div class="contact-row js-an-8">
                <p> <img src="phone.svg" alt="Phone" class="contacts-icon">
                    <a class="contact-links" aria-label="Saransh's gmail id">+91
                        88605815**</a>
                </p>

            </div>
            <div class="contact-row js-an-8">
                <p> <img src="gmail.svg" alt="Gmail" class="contacts-icon">
                    <a class="contact-links" aria-label="Saransh's gmail id" href="https:gmail.com"
                        target="_blank">saranshlakra* @gmail.com</a>
                </p>

            </div>
            <div class="contact-row js-an-8">
                <p> <img src="github-contact.svg" alt="Github" class="contacts-icon">
                    <a class="contact-links" aria-label="Saransh's gmail id" href="https://github.com/saranshlakra"
                        target="_blank">https://github.com/saranshlakra</a>
                </p>

            </div>
            <div class="contact-row js-an-8">
                <p> <img src="linkedin.svg" alt="Linked In" class="contacts-icon">
                    <a class="contact-links" aria-label="Saransh's gmail id"
                        href="https://www.linkedin.com/in/saransh-lakra-910ba87a"
                        target="_blank">https://www.linkedin.com/in/saransh-lakra-910ba87a</a>
                </p>

            </div>
        </div>

    </section>

    <section class="about resume" id="resume-1">
        <h2 class="about-1">RESUME</h2>
        <div class="download">
            <img class="js-an-9" src="jpeg.svg" alt="Resume JPEG format">
            <a href=" add resume jpeg path here" download> <input type="submit" class='jpeg' value="Hi! &#128512; I am Mr. Jpeg"
                    id="btn-send">
            </a>
        </div>
        <div class="download">
            <img class="js-an-10" src="pdf.svg" alt="Resume PDF format">
            <a href="resources/Resume_Saransh.pdf" download>
                <input type="submit" class='pdf' value="Hey! &#128513; I'm  Mr. Pdf" id="btn-send"> </a>
        </div>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
    <script src="resources/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/portfolio.js"></script>

</body>

</html>