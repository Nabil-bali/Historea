<?php
class Mail {

    // ## Définitions des deux constantes
    const ADRESSE_WEBMASTER = 'nabil.goual@laposte.net';
    const SUJET = 'Inscription à Historea';

    public function mailInscription($pseudo, $email)
    {
        ## Message qui vous sera envoyé
        $message = "Pseudo : ".$pseudo."\n\nMail : ".$email;

        ## Appel de la fonction mail() afin de vous envoyé un E-mail contenant les informations saisies par le visiteur
        mail(self::ADRESSE_WEBMASTER,self::SUJET,$message,'From: '.self::ADRESSE_WEBMASTER);

        ## Message envoyé au visiteur
        $message = "Bonjour ".$pseudo." !\n\nVotre inscription à Historea est confirmée.\n\nRappel de l'adresse inscrite : ".$email."\n\nBonne journée,\n\nvotre Webmaster.";

        ## Second appel de la fonction mail() : le visiteur reçoit cet E-mail
        mail($email,self::SUJET,$message,'From: '.self::ADRESSE_WEBMASTER);
    } 
}



