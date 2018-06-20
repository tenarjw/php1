<?php
require 'vendor/autoload.php'; // załadowanie autoloadera stworzonego przez composer

function wyslij($host, $port, $user, $pass, 
                $adres, $subject, $body) {
  $transport = new Swift_SmtpTransport($host, $port);
  $transport=$transport->setUsername($user)
                       ->setPassword($pass);
  $mailer = new Swift_Mailer($transport);
  $message = (new Swift_Message($subject))
    ->setFrom($user)
    ->setTo([$adres])
    ->setBody($body)
    ;
  try {
    return $mailer->send($message);
  } catch (Exception $e) {
    return 'Błąd:'.$e->getMessage();
  }

}

include "par.php";

wyslij($par_mail['host'],
      $par_mail['port'],
      $par_mail['user'],
      $par_mail['pass'],
      'tenar@tenar.pl',
      'temat',
      'treść'
     );