<?php
include_once 'connection.php';
try
{
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(!empty($_POST['contact-name']) && !empty($_POST['contact-email']) && !empty($_POST['contact-phone']) && !empty($_POST['contact-subject']) && !empty($_POST['contact-message'])) {
            $name = $_POST['contact-name'];
            $company = $_POST['contact-company'];
            $email = $_POST['contact-email'];
            $phone = $_POST['contact-phone'];
            $subject = $_POST['contact-subject'];
            $message = $_POST['contact-message'];
            if(!empty($_POST['contact-checkbox'])) {
                $checkbox = true;
            } else {
                $checkbox = false;
            }

            $database = new Connection();
            $db = $database->openConnection();
            
            // inserting data into create table using prepare statement to prevent from sql injections
            $stm = $db->prepare("INSERT INTO contact (name,company,email,phone,subject,message,marketing) VALUES ( :name, :company, :email, :phone, :subject, :message, :marketing)") ;
            // inserting a record
            $stm->execute(array(':name' => $name , ':company' => $company , ':email' => $email, ':phone' => $phone, ':subject' => $subject, ':message' => $message, ':marketing' => $checkbox));
            echo "New record created successfully";
        }
    }
    else {
        echo "There was an issue adding the data to the database";
    }
    
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
?>