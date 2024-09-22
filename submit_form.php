<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $designation = $_POST['designation'];
    $institution = $_POST['institution'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $description = $_POST['description'];

    $to = "prof.baronsam@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $message = "
    Name: $name\n
    Email: $email\n
    Phone: $phone\n
    City: $city\n
    Designation: $designation\n
    Institution/Organization: $institution\n
    Country: $country\n
    State: $state\n
    Description: $description
    ";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Sent Successfully";
    } else {
        echo "Failed to send";
    }

    // Debugging output (optional, remove or comment out in production)
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
}
?>
