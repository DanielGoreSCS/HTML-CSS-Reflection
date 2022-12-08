<?php
include_once 'php/connection.php';
try
{
     $database = new Connection();
     $db = $database->openConnection();
     // sql to create table
     $sql = "CREATE TABLE `news` (
        `title` varchar(100) NOT NULL,
        `image` varchar(100) NOT NULL,
        `text` text NOT NULL,
        `author_name` varchar(100) NOT NULL,
        `author_picture` varchar(100) NOT NULL,
        `date` varchar(100) NOT NULL,
        `theme` varchar(100) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
     // use exec() because no results are returned
     $db->exec($sql);
     echo "Table News created successfully";
     $database->closeConnection();
}
catch (PDOException $e)
{
    //echo "There is some problem in connection: " . $e->getMessage();
}
//write query
$sql = $db->query('SELECT * FROM news');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Netmatters | Full Service Digital Agency | Cambridgeshire &amp; Norfolk | Netmatters</title>
        <script src="https://kit.fontawesome.com/3c7305378e.js" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="js/owlcarousel/assets/owl.carousel.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="css/style.css" rel="stylesheet">
        
    </head>

    <body>
        <div class="wrapper-main">
        <?php
        include 'php/sidebar.php';
        ?>
        
        <div class="fade-wrapper"></div>

        <div class="wrapper">
            <?php 
            include 'php/header.php';
            ?>


            <main>
                <div class="hero-img hero-gradient">
                    <div class="container hero-text text-xs-center text-md-left">
                        <h1 class="display-md-3">The East Of England&apos;s Leading Technology Company</h1>
                        <p>With offices in Cambridge&comma; Wymondham & Great Yarmouth</p>
                    </div>
                </div>
                <div class="container section">
                    <h2 class="h1 service-list float-sm-left">
                        <strong>Our Services</strong>
                    </h2>
                    <div class="row">
                        <div class="col-lg-4 mt-4">
                            <a href="#">
                                <div class="card card-services software pt-4">
                                    <div class="card-body">
                                        <i class="fa-solid fa-grip icon-rounded besp-soft fa-2x mx-auto"></i>
                                        <span class="h2 card-title">Bespoke Software</span>
                                        <p class="card-text">Tailored software solutions to improve business productivity and online profits&period;</p>
                                        <span class="btn besp-soft">Read More</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mt-4">
                            <a href="#">
                                <div class="card card-services it pt-4">
                                    <div class="card-body">
                                        <i class="fa-solid fa-desktop icon-rounded it-sup fa-2x mx-auto"></i>
                                        <span class="h2 card-title">IT Support</span>
                                        <p class="card-text">Remotely managed IT services that is catered to your businesses needs&comma; adds value &amp; reduces costs&period;</p>
                                        <span class="btn it-sup">Read More</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mt-4">
                            <a href="#">
                                <div class="card card-services digital pt-4">
                                    <div class="card-body">
                                        <i class="fa-solid fa-signal icon-rounded dig-mark fa-2x mx-auto"></i>
                                        <span class="h2 card-title">Digital Marketing</span>
                                        <p class="card-text">Driven brand awareness &amp; ROI through creative digital marketing campaigns&period;</p>
                                        <span class="btn dig-mark">Read More</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xxl-3 mt-4">
                            <a href="#">
                                <div class="card card-services telecoms pt-4">
                                    <div class="card-body">
                                        <i class="fa-solid fa-phone icon-rounded tel-serv fa-2x mx-auto"></i>
                                        <span class="h2 card-title">Telecoms Services</span>
                                        <p class="card-text">Stay connected with bespoke telecoms solutions when you need it most&period;</p>
                                        <span class="btn tel-serv">Read More</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xxl-3 mt-4">
                            <a href="#">
                                <div class="card card-services web pt-4">
                                    <div class="card-body">
                                        <i class="fa-solid fa-code icon-rounded web-des fa-2x mx-auto"></i>
                                        <span class="h2 card-title">Web Design</span>
                                        <p class="card-text">User&hyphen;centric design for businesses looking to make a lasting impression&period;</p>
                                        <span class="btn web-des">Read More</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xxl-3 mt-4">
                            <a href="#">
                                <div class="card card-services cyber pt-4">
                                    <div class="card-body">
                                        <i class="fa-solid fa-shield-halved icon-rounded cyb-sec fa-2x mx-auto"></i>
                                        <span class="h2 card-title">Cyber Security</span>
                                        <p class="card-text">Ensuring your online business stays secure 24&#47;7 365 days of the year&period;</p>
                                        <span class="btn cyb-sec">Read More</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xxl-3 mt-4">
                            <a href="#">
                                <div class="card card-services developer pt-4">
                                    <div class="card-body">
                                        <i class="fa-solid fa-graduation-cap  icon-rounded dev-train fa-2x mx-auto"></i>
                                        <span class="h2 card-title">Developer Training</span>
                                        <p class="card-text">Have you considered a career in web development but you aren&apos;t sure where to start&quest;</p>
                                        <span class="btn dev-train">Read More</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="owl-carousel">
                        <div>
                            <img class="greyscale" src="img/slider/future-50-bw.jpg" alt="">
                            <img class="coloured" src="img/slider/future-50.jpg" alt="">
                        </div>
                        <div>
                            <img class="greyscale" src="img/slider/google-partner-bw.jpg" alt="">
                            <img class="coloured" src="img/slider/google-partner.jpg" alt="">
                        </div>
                        <div>
                            <img class="greyscale" src="img/slider/investing-in-future-growth-bw.jpg" alt="">
                            <img class="coloured" src="img/slider/investing-in-future-growth.jpg" alt="">
                        </div>
                        <div>
                            <img class="greyscale" src="img/slider/norfolk-carbon-charter-bw.jpg" alt="">
                            <img class="coloured" src="img/slider/norfolk-carbon-charter.jpg" alt="">
                        </div>
                        <div>
                            <img class="greyscale" src="img/slider/PPC_logo-bw.jpg" alt="">
                            <img class="coloured" src="img/slider/PPC_logo.jpg" alt="">
                        </div>
                        <div>
                            <img class="greyscale" src="img/slider/princess-royal-training-bw.jpg" alt="">
                            <img class="coloured" src="img/slider/princess-royal-training.jpg" alt="">
                        </div>
                        <div>
                            <img class="greyscale" src="img/slider/qms-bw.jpg" alt="">
                            <img class="coloured" src="img/slider/qms.jpg" alt="">
                        </div>
                        <div>
                            <img class="greyscale" src="img/slider/skills-of-tomorrow-bw.jpg" alt="">
                            <img class="coloured" src="img/slider/skills-of-tomorrow.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="welcome section">
                    <div class="container">
                        <div class="row flex-column flex-lg-row">
                            <div class="col-lg-6">
                                <h2 class="h1"><strong>Welcome To Netmatters</strong></h2>
                                <p>
                                    <strong>
                                        Netmatters Ltd is a leading web design&comma; IT support and digital marketing agency based in the East of England with offices in
                                        <a href="#" style="color: #fff"><u>Cambridge</u></a>
                                        &comma;
                                        <a href="#" style="color: #fff"><u>Wymondham</u></a>
                                        and
                                        <a href="#" style="color: #fff"><u>Great Yarmouth</u></a>
                                    </strong>
                                </p>
                                <p>We offer a wide range of digital services to businesses including software and website development&comma; IT Support&comma; telecoms services&comma; digital marketing services and cyber security&period;</p>
                                <p>Founded in 2008&comma; we partner with business from all industry sectors to help them gain new prospects&comma; nature existing leads and further grow their sales&period;</p>
                                <div>
                                    <a class="btn read-more" href="#">Read More <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h2 class="h1"><strong>What Our Clients Think</strong></h2>
                                <div class="mb-4">
                                    <i class="fa-solid fa-star d-inline"></i>
                                    <i class="fa-solid fa-star d-inline"></i>
                                    <i class="fa-solid fa-star d-inline"></i>
                                    <i class="fa-solid fa-star d-inline"></i>
                                    <i class="fa-solid fa-star d-inline"></i>
                                </div>
                                <p>
                                    <span class="client-quote">Great service&period; Took the reigns and did all the leg work for us&period; Ensured we were happy with our website and made all changes necessary as and when asked to do so&period;</span>
                                </p>
                                <p>
                                    <span class="client-quote-author">Oliver King &hyphen; SEA Scaffolding</span>
                                </p>
                                <div>
                                    <a class="btn google" href="#">Google Reviews <i class="fa-solid fa-arrow-right"></i></a>
                                    <a class="btn trustpilot" href="#">Trustpilot Reviews <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="container section">
                <h2 class="h1 float-sm-left">
                    <strong>Latest News</strong>
                </h2>
                <div class="row">
                    <?php
                    while ($row = $sql->fetch())
                    {
                        echo "<div class='col-md-6 col-lg-4 mt-4'>";
                        echo "<article class='card card-latest-news'>";
                        echo "<img src=" . $row['image'] . " alt=" . $row['title'] . ">";
                        echo "<div class='card-body card-news " . $row['theme'] . "'>";
                        echo "<div class='card-body-text'>";
                        echo "<span class='h2 card-title'>" . $row['title'] . "</span>";
                        echo "<p class='card-text'>" . $row['text'] . "</p>";
                        echo "</div>";
                        echo "<span class='btn'>Read More</span>";
                        echo "<div class='card-footer d-flex'>";
                        echo "<img src=" . $row['author_picture'] . " alt=" . $row['author_name'] . ">";
                        echo "<div class='card-footer-text d-flex flex-column'>";
                        echo "<strong>Posted by " . $row['author_name'] . "</strong>";
                        echo "<span>" . $row['date'] . "</span>";
                        echo "</div></div></div></article></div>";
                    }
                    ?>
                </div>
            </aside>
            <div class="clients d-none d-md-block">
                <div class="container">
                    <div class="list">
                        <div class="item">
                            <div class="description">
                                <div class="tooltips">
                                    <h3>Busseys</h3>
                                    <p>One of the UK's leading Ford dealerships.</p>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                            <img class="greyscale" src="img/clients/busseys_greyscale.jpg" alt="">
                            <img class="coloured" src="img/clients/busseys-coloured.png" alt="">
                        </div>
                        <div class="item">
                            <div class="description">
                                <div class="tooltips">
                                    <h3>Crane Garden Builders</h3>
                                    <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in the UK.</p>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                            <img class="greyscale" src="img/clients/crane-garden-buildings-greyscale.jpg" alt="">
                            <img class="coloured" src="img/clients/crane-garden-buildings-coloured.png" alt="">
                        </div>
                        <div class="item">
                            <div class="description">
                                <div class="tooltips">
                                    <h3>Beat</h3>
                                    <p>The UK's eating disorder charity founded in 1989.</p>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                            <img class="greyscale" src="img/clients/beat-greyscale.jpg" alt="">
                            <img class="coloured" src="img/clients/beat-coloured.png" alt="">
                        </div>
                        <div class="item">
                            <div class="description">
                                <div class="tooltips">
                                    <h3>Northern Diver</h3>
                                    <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                                    <div class="arrow"></div>
                                </div>
                            </div>
                            <img class="greyscale" src="img/clients/northern-diver-greyscale.jpg" alt="">
                            <img class="coloured" src="img/clients/northern-diver-coloured.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            include 'php/footer.php';
            ?>
        </div>
        </div>

        <!-- Cookie Popup -->
        <div id="consent-popup" class="d-none">
            <h3>Cookies Policy</h3>
            <p>
                Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do,
                 and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "<a href="#">Privacy Policy</a>"
                 otherwise click "Accept Cookies" to enter.
            </p>
            <div class="row">
                <div class="col-sm-6 spacer-xs">
                    <a id="cookie-settings" class="btn btn-default" href="#">Change Settings</a>
                </div>
                <div class="col-sm-6">
                    <a id="accept" class="btn web-des" href="#">Accept Cookies</a>
                </div>
            </div>
        </div>
        <!-- Cookie Settings -->
        <div class="cookie-settings">
            <div class="container">
                <div class="h3">Cookies Preferences</div>
                <div class="h5">
                    Netmatters uses cookies on their website. Cookies are small text files that are stored on your computer or other device by websites that you visit.
                    This page explains the cookies we use and what we use them for, and lets you turn them on or off. (Some cookies are necessary in order for our
                    website to work properly.) We also explain below which other companies use cookies on our website and what they use them for, and lets you turn
                    those other companies' cookies on or off.
                </div>
                <div class="h5">
                    Our website uses cookies in order to make the website easier to use, to support the provision of information and functionality to you, as well
                    as to provide us with information about how the website is used so that we can make sure it is as up to date, relevant and error free as we can.
                    We also use cookies to try to ensure that our online adverts reflect the interests of web users. Further information about the types of cookies
                    that are used on our website is set out box below.
                </div>
                <div class="h5">
                    As well as the options provided below, you can choose to restrict or block cookies through your browser settings at any time. For more information
                    about how to do this, and about cookies in general, you can visit
                    <a href="https://cookiepedia.co.uk/all-about-cookies" target="_blank" rel="noopener noreferrer">www.cookiepedia.co.uk</a> and
                    <a href="https://www.youronlinechoices.eu" target="_blank" rel="noopener noreferrer">www.youronlinechoices.eu</a>. However, please be aware that
                    restricting or blocking cookies set on our website may impact the functionality or performance of the website, or prevent you from using certain
                    services provided through the website
                </div>
                <div class="h5">
                    Please note that third parties (including, for example, advertising networks and providers of external services like website analysis services)
                    may also use cookies, over which we have no control, although we may receive services from these third parties (including, for example, for
                    targeted advertising purposes and website analytics). These cookies are likely to be performance cookies or targeting cookies (as described below).
                </div>
            </div>
            <div class="container">
                <div class="h1">Functional Cookies</div>
                <div class="h5">
                    Functional cookies allow our website to remember choices you make, such as your user name, log in details or language preferences, and any
                    customisations you make to pages on our website during your visit.
                </div>
                <div class="h4"><strong>Examples of how we use these cookies include:</strong></div>
                <ul>
                    <li>Live chat</li>
                </ul>
                <div class="buttons">
                    <button id="cookie--disable1" type="button" class="btn web-des">Disable</button>
                    <button id="cookie--enable1" type="button" class="btn btn-light">Enable</button>
                </div>
            </div>
            <div class="container">
                <div class="h1">Performance &amp; Analytics</div>
                <div class="h5">
                    These cookies help us understand how people use our website. They collect information such as which pages on our website visitors go to most
                    often, which features they use, and which websites people have visited before they visit ours. We use this information to improve our website
                    and provide a better user experience.
                </div>
                <div class="h4"><strong>Examples of how we use these cookies include:</strong></div>
                <ul>
                    <li>Monitoring and providing statistics on how our website is used.</li>
                    <li>Helping us improve our website by measuring any errors that occur.</li>
                    <li>Testing the website's design and operability</li>
                </ul>
                <div class="buttons">
                    <button id="cookie--disable2" type="button" class="btn web-des">Disable</button>
                    <button id="cookie--enable2" type="button" class="btn btn-light">Enable</button>
                </div>
            </div>
            <div class="container">
                <div class="h5">
                    Different web browsers may use different methods for managing cookies. Please follow the instructions below, from the web browser manufacturers
                    directly, to configure your browser settings*.
                </div>
                <ul>
                    <li>
                        <a href="https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies">Microsoft Internet Explorer (IE)</a>
                    </li>
                    <li>
                        <a href="https://support.google.com/chrome/answer/95647?hl=en">Google Chrome</a>
                    </li>
                    <li>
                        <a href="https://support.apple.com/en-gb/guide/safari/manage-cookies-and-website-data-sfri11471/mac">Safari</a>
                    </li>
                    <li>
                        <a href="https://support.mozilla.org/en-US/kb/enable-and-disable-cookies-website-preferences">Firefox</a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="btn btn-default">Show detailed preferences</div>
            </div>
            <div class="container actions">
                <div class="buttons">
                    <button id="Cancel" type="button" class="btn btn-default">Cancel</button>
                    <button id="Accept2" type="button" class="btn web-des">Continue to website</button>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="js/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>