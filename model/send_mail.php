<?php
if (isset($_POST['email']))  {
    $admin_email = '18510@ma-web.nl';
    $email = $_POST['email'];
    $subject = "vraag/opmerking";
    $comment = $_POST['message'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $phone = $_POST['number'];
    $total = 'bericht'."\n\n".$comment."\n\ninfo\n naam: ".$fname." ".$lname."\n telefoonnummer: ". $phone. "\n email: ".$email;
    $full_email = $fname." ".$lname.'<'.$email.'>';

    mail($admin_email, "$subject", $total, "From:" . $full_email);
    echo "Thank you for contacting us!";
}
