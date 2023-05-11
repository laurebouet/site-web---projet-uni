<?php 
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require "../projetWeb/PHPMailer/src/Exception.php";
    require "../projetWeb/PHPMailer/src/PHPMailer.php";
    require "../projetWeb/PHPMailer/src/SMTP.php";
    
    
    $mail = new PHPMailer(true);
    $mail->isSMTP();   
    // $mail->Mailer ="smtp";
    // include 'formulaire.php';

    // $destinataire = $_POST['email'];
    // $nom = $_POST['nom'];
    // $objet = 'Confirmation réservation';
    // $date = $_POST['date'];
    // $heure = $_POST['heure'];
    // $pers = $_POST['nbpers'];


        //Server settings
        $mail->SMTPDebug = 0;                                       
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'laure.bouet06@gmail.com';                     
        $mail->Password   = 'password'; // !!! à enlever avant de poster                           //SMTP password
        $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('laure.bouet06@gmail.com', 'Mailer');
        $mail->addAddress('', 'bouet');     
        //$mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('laure.bouet06@gmail.com', 'Mailer');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'test send email via php';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $content = "
        <font>
        Merci pour votre réservation,
        Nous avons le plaisir de confirmer votre réservation. 
        Le $date à $heure pour $pers personne(s).
    
        Dans le cas d'une annulation, merci de nous prévenir à l'avance, 
        Merci à vous, 
        
        </font>";
        $mail->MsgHTML($content);
        if(!$mail->Send()) {
            echo "Error while sending Email.";
            var_dump($mail);
        } 
        else {
            echo "Email sent successfully";
        }
        // $mail->send();
        // echo 'Message has been sent';

    //catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }






    if (isset($_POST['submit'])){
        include_once('class.phpmailer.php');

        require_once('class.smtp.php');

        $name = strip_tags($_POST['full_name']);
        $email = strip_tags ($_POST['email']);
        $msg = strip_tags ($_POST['description']);

        $subject = "Contact Form ";

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';

        $mail->Host       = "mail.example.com"; // SMTP server example
        //$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->Port       = 26;                    // set the SMTP port for the GMAIL server
        $mail->Username   = "info@example.com"; // SMTP account username example
        $mail->Password   = "password";        // SMTP account password example

        $mail->From = $email;
        $mail->FromName = $name;

        $mail->AddAddress('info@example.com', 'Information'); 
        $mail->AddReplyTo($email, 'Wale');

        $mail->IsHTML(true);

        $mail->Subject = $subject;

        $mail->Body    =  $msg;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if(!$mail->Send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
        }
        echo 'Message has been sent';
    }
?>