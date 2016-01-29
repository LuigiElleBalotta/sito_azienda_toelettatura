<?php

include_once($_SERVER['DOCUMENT_ROOT']."/config.php");

class mail_manager
{
    public function sendMail($from, $to, $testomail, $subject)
    {
        include_once("class.phpmailer.php");
        
        
        // Recupero tutte le variabili dal mio form
        $nome = "no-reply";
        $cognome = "HappyDogs";
        $telefono = "+39 0521 3139";
        $email = $from;
        $testo = "";
        // Sistemo le variabili nel messaggio che mi arriverà per email
        $messaggio = $testomail;
        
        $mail = new PHPMailer();
        
        $mail->IsSMTP(); 
        // L'host remoto con cui spediremo, nel caso di gmail è smtp.gmail.com
        $mail->Host = "192.168.150.1";
        $mail->SMTPAuth = false;
        
        // Specifichiamo che vogliamo spedire tramite ssl, se non volete basta eliminare queste due righe
        /*$mail->SMTPSecure = 'ssl';
        $mail->Port = 465;*/
        
        // Inseriamo i dati della casella che utilizzeremo per spedire
        /*$mail->Username = "username";
        $mail->Password = "password";*/
        
        // Se avete problemi con l'invio decommentatelo
        // $mail->SMTPDebug = 1;
        
        $mail->From = "$email";
        $mail->FromName = "$nome";
        
        // Qui inseriamo l'indirizzo a cui recapitare le email spedite tramite il form
        $mail->AddAddress($to);
        
        //$mail->AddReplyTo("$email", "$nome");
        
        // Lunghezza massima delle stringhe
        $mail->WordWrap = 50; 
        
        $mail->IsHTML(true);
        
        $mail->Subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
        $mail->Body    = "$messaggio</b>";
        if($mail->Send())
            return "Inviata";
        else
            return "Non Inviata";
    }

}


?>