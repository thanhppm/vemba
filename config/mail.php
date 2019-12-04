<?php
/**
 * Config email
 */


$email_config = new stdClass();

$email_config->mail_title = "New contact from ".$base_url ;
$email_config->host = "smtp.gmail.com";
$email_config->port = 587;
$email_config->email_send = "vembaeduvn@gmail.com";
$email_config->pass_send = "fjvkktizsaphnmri";   //  google app password

// recipient
$email_config->email_receive = ["vembaeduvn@gmail.com","dohoa@hawaii.edu"];
$email_config->sender_name = "Vemba";








