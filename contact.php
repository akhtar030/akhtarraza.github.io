<?php 
    $to = "akhtarraza30@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['fullName'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $subject = "Form submission";
    $message = $full_name . " " . "\n\n" . $_POST['message'];

    $headers = 'From: info@akhtarraza.onrender.com'. "\r\n" .
                 'Reply-To: akhtarraza30@gmail.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();
    $isEmailSent = mail($to,$subject,$message,$phone,$country,$headers);
    alert("Mail Sent. Thank you " . $full_name . ", we will contact you shortly.");
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    if(isset($isEmailSent))//change
    {
        alert("Mail sent successfully...");
        header("Location: index.html");
    }
    else
    {
        alert("Mail could not be sent...");
        header("Location: https://akhtarraza.onrender.com/#contact");
    }
?>