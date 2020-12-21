<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/a-simple-ajax-contact-form-with-php-validation.html
*/

define("WEBMASTER_EMAIL", 'harvey.charles@gmail.com');

$post = (!empty($_POST)) ? true : false;

if($post)
{

function ValidateEmail($email)
{
/*
(Name) Letters, Numbers, Dots, Hyphens and Underscores
(@ sign)
(Domain) (with possible subdomain(s) ).
Contains only letters, numbers, dots and hyphens (up to 255 characters)
(. sign)
(Extension) Letters only (up to 10 (can be increased in the future) characters)
*/

$regex = '/([a-z0-9_.-]+)'. # name

'@'. # at

'([a-z0-9.-]+){1,255}'. # domain & possibly subdomains

'.'. # period

"([a-z]+){2,10}/i"; # domain extension 

if($email == '') {
	return false;
}
else {
$eregi = preg_replace($regex, '', $email);
}

return empty($eregi) ? true : false;
}

$name = stripslashes($_POST['name']);
$email = $_POST['email'];

$message = stripslashes($_POST['message']);

$error = '';

// Check name

if(!$name)
{
$error .= 'Please enter your name.';
}

// Check email

if(!$email)
{
$error .= 'Please enter an e-mail address.';
}



if($email && !ValidateEmail($email))
{
$error .= 'Please enter a valid e-mail address.';
}

// Check message (length)

if(!$message || strlen($message) < 15)
{
$error .= "Please enter your message. It should have at least 15 characters.";
}

if(!$error)
{

$messagesent = "Name: $name  \n \n  Email: $email  \n \n Message: \n \n $message ;
$subject = "Message from charles-harvey.co.uk";
$mail = mail(WEBMASTER_EMAIL, $subject, $messagesent,
     "From: ".$name." <".$email.">rn"
    ."Reply-To: ".$email."rn"
    ."X-Mailer: PHP/" . phpversion());

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>