<?php
// create_contact_lens.php version: 2015032018:18
// Make sure we get the settings with us
include 'settings.php';
// file extension for the file we create (only for dev purpose)
$lensextension	=	'lens';
$filename = $_SERVER['DOCUMENT_ROOT'].'storage/themes/'.$themedirname.'/contact.'.$lensextension;
// check if contact.lens exits
if (file_exists($filename)) {
	// There is a contact.lens already, leave it alone
	echo ' Your contact.'.$lensextension.' exists already, so we are leaving it alone';
	die;
} else {
	// Could not find a contact.lens, so we creates one for you
echo 'Creating the standard /storage/themes/'.$themedirname.'/contact.'.$lensextension.' for you';

// Create a empty contact.lens
$contact_lens = fopen($_SERVER['DOCUMENT_ROOT'].'storage/themes/'.$themedirname.'/contact'.$lensextension,'wr');
// Start writing the code to contact.lens
fwrite($contact_lens, '<koken:include file="'.$placeofheader.'/header.html" />

    <koken:head>
		<title>'.$titleofpage.' {{ site.title }}</title>
      <meta property="og:site_name" content="'.$titleofpage.' {{ site.title }}" />
      <meta property="og:type" content="website" />
	  <!-- Get the CSS for the contact.lens -->
	  <link rel="stylesheet" type="text/css" href="/'.$contactformdir.'/css/contact.css" />
	  ');
	//Check if we will be using the "Businesscard" or not
	// If yes, print out the extra JS line to get the correct font
	 if ($usebuscard == 1) {
	  fwrite($contact_lens, $theheadertype);
	 }
    fwrite($contact_lens, '
	</koken:head>

<script src="/'.$contactformdir.'/js/contact_form.js"></script>
<div id="content">
  <article>
  <h1>'.$titleofpage.' {{ site.title }}&nbsp;</h1>
    <form id="ajax-contact-form" role="form" class="form-horizontal">
      <fieldset>
        <div id="fields">
          <div class="form_group">
            <label class="contact_label" for="name">'.$nameofsender.':</label>
            <input id="name" type="text" size="30" name="name" required value="" placeholder="'.$nameofsender.'" />
          </div>
          <div class="form_group">
            <label class="contact_label" for="email">'.$emailofsender.':</label>
            <input id="email" type="email" size="30" name="email" required value="" placeholder="adress@email.com" />
          </div>
          <div class="form_group">
            <label class="contact_label" for="subject">'.$subjectofemail.':</label>
            <input id="subject" type="text" size="30" name="subject" required value="" placeholder="Text" />
          </div>
          <div class="form_group">
            <label class="contact_label" for="message">'.$youmessage.':</label>
            <textarea id="message" name="message" required rows="10" cols="30" placeholder="'.$youmessage.'" ></textarea>
          </div>
          <input type="submit" value="'.$submitbutton.'" />
        </div>
        <div id="note"></div>
      </fieldset>
    </form>');
	//Check if we will be using the "Businesscard" or not
	if ($usebuscard == 1) {
		fwrite($contact_lens, '<div class="visitkort">
			<h1 id="visitkort">{{ site.title }}</h1>
			<p>&nbsp;{{ profile.name }}<br />
				&nbsp;'.$addressline1.'<br />
				&nbsp;'.$addressline2.'<br />
			</p>
				<div class="socialicons">
				');
				//Check if we will be using the "Businesscard" AND is using Skype
				if($usebuscard == 1 && $useskype == 1) {
					fwrite($contact_lens, '&nbsp;<a href="skype:'.$skypename.'?call" title="'.$contactme.' skype">
						<img src="/'.$contactformdir.'/icons/'.$skypepic.'" width="34" height="34" hspace="5" vspace="5" alt="skype" />
					</a>'
					);
				}
					fwrite($contact_lens, '<koken:profile_facebook>
						<a href="{{ profile.facebook }}" title="'.$contactme.' Facebook">
							<img src="/'.$contactformdir.'/icons/'.$facebookpic.'" width="34" height="34" hspace="5" vspace="5" alt="Facebook" />
						</a>
					</koken:profile_facebook>');
				//Check if we will be using the "Businesscard" or not AND is using 500px
				if ($usebuscard == 1 && $usefivepx == 1) {
					fwrite($contact_lens, '<a href="http://www.500px.com/'.$fivepxname.'" title="'.$contactme.'g via 500px">
						<img src="/'.$contactformdir.'/icons/'.$fivehpxpic.'" width="34" height="34" hspace="5" vspace="5" alt="500px" />
					</a>
					');
				}
				//Check if we will be using the "Businesscard" or not AND is using Instagram
				if ($usebuscard == 1 && $useinstagram == 1) {
					fwrite($contact_lens, '<a href="http://instagram.com/'.$instaname.'/" title="'.$followme.' Instagram">
						<img src="/'.$contactformdir.'/icons/'.$instpic.'" width="34" height="34" hspace="5" vspace="5" alt="Instagram" />
					</a>
					');
				}
					fwrite($contact_lens, '<koken:profile_twitter>
						<a href="https://twitter.com/{{ profile.twitter }}" title="'.$followme.' Twitter">
							<img src="/'.$contactformdir.'/icons/'.$twitterpic.'" width="34" height="34" hspace="5" vspace="5" alt="Twitter" />
						</a>
					</koken:profile_twitter>
				</div>
			
		</div>');
		}
  fwrite($contact_lens, '</article>
</div>
<koken:include file="'.$placeofheader.'/footer.html" />');
// Stop writing to contact.lens
fclose($contact_lens);
}
?>