/\/\/\/\/\/\/\/\/\/\/\/\/\/\_READ ME FOR CONTACTFORM_/\/\/\/\/\/\/\/\/\/\/\/\/\/\

This module/plugin is based on the initial work of Mr Martin Herbst at 
www.brisoft.de
The orginal contact form can be found here:
https://www.brisoft.de/en/implementing-contact-form-koken/

All credits goes to him for his work and outstanding support helping me hunt 
down why it failed at my site to begin with

\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

Since i got tired of always needing to re-upload the "js" folder and the contact.lens, 
i decided to try to simplyfy it a bit.
The first sted was to move "all" files out of the theme folder, that way making sure 
they where left un touched in a theme upgrade.
In the same time i decided to move all settings related strings to a separate file 
(settings.php) that way we have a contact form that is almost modulare since we only 
have to remember to upload one file (contact.lens) to the theme folder after a upgrade.



SETTINGS.PHP
To use this "module" you need to go through the "settings.php" and change the values to your 
liking.
Line #6-14 is where you set your mail #13 is set to mail() and that should work in most
server settings: only change this if you know that your server host is using some other 
mail sender function ie mb_send_mail()
Line #18 is the directory name for your theme (most likely your theme name in lower case)
Line #21 most themes have there headers in "inc" but the theme Elementary uses "layouts"

Lines #43 - 71
Is all about the "business card" with contact information: i.e adress, skype, Instagram, 
500px, Facebook and Twitter links

BUSINESS CARD
IF you decide to use the Business card there is some things to keep in mind
Example fo the Business card in use can be found here:
	http://varoystrand.se/contact
Twitter and Facebook links will only show IF you filled out this info in the Koken settings!
Instagram, 500px and Skype is NOT handled by Koken, so you need to fill out these handles on
line #50, 53 and 56 (these are ONLY showing IF you decide to use the "Business card" 
(That is setting $usebuscard = 1)

Line #75 should NOT be changed if your not 100% sure what your doing
IF you do so, make sure that you change this in the contact_form.js also



CREATE_CONTACT_LENS.PHP
After you have done your changes to your liking, upload the whole contactform directory
to the root of your koken site, and run create_contact_lens.php
Running create_contact_lens.php will create the contact.lens for you, nothing more
If there already is a file called contact.lens, the script will tell you so and halt
leaving your original untouched.

!!!!You will need to run create_contact_lens.php after every theme upgrade!!!!!



Contents of:
<contactform>
	CHANGELOG.txt
	contact.php
	create_contact_lens.php
	README.txt
	settings.php
	<css>
		contact.css
	<icons>
		500px-4-64.png
		facebook-7-64.png
		google-plus-4-64.png
		instagram-4-64.png
		skype-64.png
		twitter-4-64.png
	<js>
		contact_form.js
