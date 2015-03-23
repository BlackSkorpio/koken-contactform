<?php
//Settings.php version: 2015032315:30
/////////////////////////////////////
// settings.php
////////////////////////////////////
// THIS FILE MUST BE ANSI NOT UTF-8



	$recipient		=	"YOURMAIL@TDL.COM";
	$recipientname	=	"You Name";
	$sub_open		=	"[Koken] ";
//	$mailfunction can be either:
// 	mail
//	or 
// 	mb_send_mail
	$mailfunction 	=	"mail";
	$error_notice 	=	"Unable to deliver mail.";

// Use Google ReCaptcha
// Default is <1> (To use it)
	$userecapha		=	1;
// ReCaptcha key
	$recaptchakey	=	"6LcSAQITAAAAANwf3-rKzvUCXMTBnmjINf-uebrQ";

//what is the theme directorys name
// The name of your theme in lowercase
	$themedirname	=	'elementary';
//where is our header and footer?
// Either inc or layouts
	$placeofheader	=	'layouts';

// Constans used in our contact.lens

	$titleofpage	=	'Contact';

// Used in the form
	$nameofsender	=	'Name';
	$emailofsender	=	'Email';
	$subjectofemail	=	'Subject';
	$youmessage		=	'Your message';
	$submitbutton	=	'Submit';

// Used in the "businesscard"
	$addressline1	=	'Adress 1';
	$addressline2	=	'Adress 2';
	$contactme		=	'Contact me through';
	$followme		=	'Follow me on';

// Show		= 1
// No show	= 2
// Show/use the "businesscard
	$usebuscard		=	2;

// If you want to use custome fonts in the "businescard"
	$theheadertype	=	'<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Marck+Script" />';

// Show the Instagram link the in businescard
	$useinstagram	=	2;
	$instaname		=	'INSTAGRAMHANDLE';
// Show the 500px link the in businescard
	$usefivepx		=	2;
	$fivepxname		=	'500pxHANDLE';
// Show the Skype link the in businescard
	$useskype		=	2;
	$skypename		=	'SKYPEHANDLE';
	
// Icons that is are placed inside icons 
// directory of $contactformdir
// Should not be any larger than 34x34px

//Icon to use for Instagram
	$instpic		=	'instagram-4-64.png';
//Icon to use for 500px
	$fivehpxpic		=	'500px-4-64.png';
//Icon to use for Skype
	$skypepic		=	'skype-64.png';
//Icon to use for Facebook
	$facebookpic	=	'facebook-7-64.png';
//Icon to use for Twitter
	$twitterpic		=	'twitter-4-64.png';

// whats is the Contactform dir name
// DO NOT CHANGE IF YOUR NOT SURE ABOUT IT!!!!!!!!!
	$contactformdir	=	'contactform';
?>