<?php





$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$cat = $_POST['cat'];
$message = $_POST['message'];




$to = "support@superappsolutions.com";
$subject = "Email From $name";
$message = "Hey  I need $cat.\n$message\nMy Number Is $phone";
$headers = "From: $email";

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo 1;
} else {
    echo 0;
}


?>