<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require 'C:\MAMP\htdocs\phpmailer\phpmailer\src\Exception.php';
    require 'C:\MAMP\htdocs\phpmailer\phpmailer\src\PHPMailer.php';
    require 'C:\MAMP\htdocs\phpmailer\phpmailer\src\SMTP.php';

    require 'C:\MAMP\vendor\autoload.php';

    include 'formulaire.php';

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'laure.bouet@yahoo.fr';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
        $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
    
        //Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    $destinataire = $_POST['email'];
    $objet = 'Confirmation réservation';
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $pers = $_POST['nbpers'];


    $message = "
    <font>
    Merci pour votre réservation,
    Nous avons le plaisir de confirmer votre réservation. 
    Le $date à $heure pour $pers personne(s).

    Dans le cas d'une annulation, merci de nous prévenir à l'avance, 
    Merci à vous, 
    
    </font>
    ";

    $headers = "Content-Type:text/plain; charset=utf-8\r\n";
    // $headers = "From : laure.bouet@yahoo.fr";


    if (mail($destinataire,$objet,$message))
        echo "envoyé !";
    else
        echo "erreur d'envoi!";
?>
