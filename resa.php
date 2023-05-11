<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    // require '../projetWeb/PHPMailer/src/';
    require '../projetWeb/PHPMailer/src/Exception.php';
    require '../projetWeb/PHPMailer/src/PHPMailer.php';
    require '../projetWeb/PHPMailer/src/SMTP.php';

    include 'formulaire.html';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

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
