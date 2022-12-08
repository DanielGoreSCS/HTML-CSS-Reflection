<?php
include_once 'connection.php';
try
{
    $database = new Connection();
    $db = $database->openConnection();
    // sql to create table
    $sql = "CREATE TABLE `offices` (
        `name` varchar(30) NOT NULL,
        `image` varchar(100) NOT NULL,
        `address` text NOT NULL,
        `phone` varchar(14) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        
        CREATE TABLE `contact` (
        `name` varchar(100) NOT NULL,
        `company` varchar(100) NOT NULL,
        `email` varchar(100) NOT NULL,
        `phone` varchar(20) NOT NULL,
        `subject` text NOT NULL,
        `message` text NOT NULL,
        `marketing` tinyint(1) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "Tables News and Contact created successfully";
    $database->closeConnection();
}
catch (PDOException $e)
{
    //echo "There is some problem in connection: " . $e->getMessage();
}
//write query
$sql = $db->query('SELECT * FROM offices');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Netmatters | Full Service Digital Agency | Cambridgeshire &amp; Norfolk | Netmatters</title>
        <script src="https://kit.fontawesome.com/3c7305378e.js" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link rel="stylesheet" href="../js/owlcarousel/assets/owl.carousel.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="../css/style.css" rel="stylesheet">
        
    </head>

    <body>
        <div class="wrapper-main">
            <?php
            include 'sidebar.php';
            ?>
            <div class="fade-wrapper"></div>
            
            <div class="wrapper">
                <!--  -->
                <?php 
                    include 'header.php';
                ?>
                <div class="hidden-xs breadcrumb-container">
                    <div class="container">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li>/ Our Offices</li>
                        </ul>
                    </div>
                </div>
                <div class="page-head">
                    <div class="container">
                        <h1>Our Offices</h1>
                    </div>
                </div>
                <div class="container section">
                    
                    <div class="row">
                    <?php
                    while ($row = $sql->fetch())
                    {
                        echo "<div class='col-lg-4 mt-4'>";
                        echo "<article class='card card-offices'>";
                        echo "<img src=" . $row['image'] . " alt=" . $row['name'] . ">";
                        echo "<div class='card-body card-office'>";
                        echo "<div class='card-body-text'>";
                        echo "<span class='h2 card-title'>" . $row['name'] . "</span>";
                        echo "<p class='card-text'>" . $row['address'] . "</p>";
                        echo "</div>";
                        echo "<span class='tel h3'>" . $row['phone'] . "</span>";
                        echo "<span class='btn'>Read More</span>";
                        echo "</div></article>";
                        echo "<div class='map'><iframe src='" . $row['map'] . "' width='720' height='300' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe></div>";
                        echo "</div>";
                    }
                    ?>
                    </div>
                </div>
                <div class="container section row">
                    <div class="col-lg-8">
                        <form class="contact-form" action="contact_form.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="contact-name">Your Name <span class="danger">*</span></label>
                                    <input class="form-control mb-4 required" id="contact-name" name="contact-name" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact-company">Company Name</label>
                                    <input class="form-control mb-4" id="contact-company" name="contact-company" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact-email">Your Email <span class="danger">*</span></label>
                                    <input class="form-control mb-4 required" id="contact-email" name="contact-email" type="email">
                                </div>
                                <div class="col-lg-6">
                                    <label for="contact-phone">Your Telephone Number <span class="danger">*</span></label>
                                    <input class="form-control mb-4 required" id="contact-phone" name="contact-phone" type="tel">
                                </div>
                                <div class="col-lg-12">
                                    <label for="contact-subject">Subject <span class="danger">*</span></label>
                                    <input class="form-control mb-4 required" id="contact-subject" name="contact-subject" type="text">
                                </div>
                                <div class="col-lg-12">
                                    <label for="contact-message">Message <span class="danger">*</span></label>
                                    <textarea class="form-control mb-4 required" id="contact-message" name="contact-message"></textarea>
                                </div>
                                <div class="form-check mb-4">
                                    <input class="form-check-input" id="contact-checkbox" name="contact-checkbox" type="checkbox">
                                    <label class="form-check-label d-inline" for="contact-checkbox">Please tick this box if you wish to recieve marketing information from us&period; Please see our <a href="#">Privacy Policy</a> for more information on how we use your data&period;</label><br>
                                </div>
                                <button class="btn form-submit" type="button" name="contact-submit" onclick="validateForm()">Send Enquiry</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 contact">
                        <div>
                            <p><strong>Email us on:<strong></p>
                            <p><a class="h3" href="#">sales@netmatters.com</a></p>
                            <p><strong>Business hours:<strong></p>
                            <p><strong>Monday - Friday 07:00 - 10:00<strong></p>
                        </div>
                        <div>
                            <div class="accordion out-of-hours">
                                <a href="#"><h4>Out of Hours IT Support </h4><i class="fa-solid fa-chevron-down"></i></a>
                                <div class="accordion-hidden">
                                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                    <p>
                                        <strong>Monday - Friday 18:00 - 22:00</strong>
                                        <strong>Saturday 08:00 - 16:00</strong>
                                        <strong>Sunday 10:00 - 18:00</strong>
                                    </p>
                                    <p>
                                        To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours
                                        &nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php 
                    include 'footer.php';
                ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="../js/owlcarousel/owl.carousel.min.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>