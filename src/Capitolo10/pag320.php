<?php
/**
 * Codice sorgente riportato nella II edizione del libro "Sviluppare in PHP 7" di Enrico Zimuel
 * Tecniche Nuove editore, 2019, ISBN 978-88-481-4031-7
 * @see http://www.sviluppareinphp7.it
 */

$gRecaptchaResponse = $_POST['g-recaptcha-response'];
$remoteIp = $_SERVER['REMOTE_ADDR'];

$recaptcha = new \ReCaptcha\ReCaptcha($secretKey);
$resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
if ($resp->isSuccess()) {
    // Verified!
    // if Domain Name Validation turned off
    // don't forget to check hostname field
    // if($resp->getHostName() === $_SERVER['SERVER_NAME']) {
} else {
    $errors = $resp->getErrorCodes();
}
