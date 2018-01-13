<?php

/* --------------------------------------------
Parameters validation
-------------------------------------------- */
// https://www.tutorialrepublic.com/faq/how-to-remove-empty-values-from-an-array-in-php.php
$parameters  = array_filter(explode('/', $_REQUEST["q"]));
// print("<pre>".print_r($parameters, true)."</pre>");

if (empty($parameters[0])) {
    die("Phone number is missing");
}

if (!isValidPhoneNumber($parameters[0])) {
    die("Phone number is not matching the valid format of 601x-xxxxxxxx");
}

if (empty($parameters[1])) {
    die("Text is missing");
}

if (sizeof($parameters) > 2) {
    die("Only phone number and text are accepted at this moment");
}

/* --------------------------------------------
Configuration - Enable one at one time
-------------------------------------------- */
// Option 1: Show  'WhatsApp Me' link and let user click it
displayWhatsAppLink($parameters[0], $parameters[1]);

// Option 2: Launch WhatsApp application straight away
// launchWhatsApp($parameters[0], $parameters[1]);

/* --------------------------------------------
Helpers
-------------------------------------------- */
function isValidPhoneNumber($phone) {
    return preg_match("/^60(10|12|13|14|16|17|18)\d{7,8}$/", (int)$phone);
}

function generateWhatsAppLink($phone, $text) {
    return "https://api.whatsapp.com/send?phone=$phone&text=$text";
}

function displayWhatsAppLink($phone, $text) {
    $url = generateWhatsAppLink($phone, $text);
    echo "<center><a href='$url'>WhatsApp Me</a></center>";
}

function launchWhatsApp($phone, $text) {
    $url = generateWhatsAppLink($phone, $text);
    header("Location: $url");
}

?>
