<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Activeer gebruikersaccount

Hallo,

Het account van "{USERNAME}" is gedeactiveerd of zojuist aangemaakt, je zou de gegevens van de gebruiker (indien nodig) kunnen controleren. 

Gebruik deze link om de gegevens te controleren:
{U_USER_DETAILS}

Gebruik deze link om het account te activeren:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'Onderstaande e-mail werd naar jou gestuurd door een beheerder van "{SITENAME}". Als dit bericht ongewenste gegevens bevat, neem dan contact op met de beheerder van dit forum op het volgende e-mailadres:

{CONTACT_EMAIL}

Sluit de volledige mail (inclusief header) bij.

Verzonden bericht:
~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Account geactiveerd

Hallo {USERNAME},

Je account op "{SITENAME}" is geactiveerd door een beheerder, je kunt nu inloggen.

Je wachtwoord is veilig opgeslagen in onze database en kan niet worden achterhaald. Als je je wachtwoord bent vergeten, kun je het laten resetten via bij het account behorende e-mailadres. 

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Welkom op "{SITENAME}"

{WELCOME_MSG}

Deze e-mail bevat enkele belangrijke gegevens. Zorg dus dat je deze bewaart. Je gegevens zijn als volgt:

----------------------------
Gebruikersnaam: {USERNAME}

Forum URL: {U_BOARD}
----------------------------

Op dit moment is je account inactief en moet door een beheerder worden goedgekeurd voordat je kunt inloggen. Je ontvangt een e-mail zodra dit is gebeurd.

Je wachtwoord is veilig opgeslagen in onze database en kan niet meer worden opgevraagd. In geval dat je het bent vergeten, kun je het laten resetten met het bij het account behorende e-mailadres.

Bedankt voor je registratie.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/birthday_email.txt' 		=> '{EMAILSUBJECT:} Happy Birthday {USERNAME}! 

Dear {USERNAME},

Many congratulations on your birthday and have a great day !!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/calendar_new_event.txt' 		=> '{EMAILSUBJECT:} A new event has been added to the calendar

Dear {USERNAME},

The event "{EVENT_SUBJECT}" has been added in the calendar.

To view the calendar please visit the following link:
{U_CALENDAR}

To view the event please visit the following link:
{U_EVENT}

If you no longer wish to recieve emails about new calendar events click here:
{U_UNWATCH_CALENDAR}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/calendar_updated_event.txt' 		=> '{EMAILSUBJECT:} An event has been updated in the calendar

Dear {USERNAME},

The event "{EVENT_SUBJECT}" has been updated in the calendar.

To view this event please visit the following link:
{U_EVENT}

If you no longer wish to recieve emails about this event click here:
{U_UNWATCH_EVENT}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/calendar_updated_reply.txt' 		=> '{EMAILSUBJECT:} A new or updated calendar reply has been made

Dear {USERNAME},

A new or updated reply has been made to the calendar event "{EVENT_SUBJECT}"

To view this event please visit the following link:
{U_EVENT}

If you no longer wish to recieve emails about this event click here:
{U_UNWATCH_EVENT}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/contact.txt' 		=> '{EMAILSUBJECT:} [Contact] {SUBJECT}

Hello {ADM_USERNAME},

an message was entered in the contact form of your forum.


Date: {DATE}
Name: {USERNAME}
Email: {USER_EMAIL}
Reason: {REASON}

Message:
---------------------------------------------------------

{MESSAGE}

---------------------------------------------------------
Contact form from "{SITENAME}":
{SITEURL}


IP of the sender: {USER_IP}

Spam? Tell us a note in the support forum http://help.forums3.com.
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/contact_no_reason.txt' 		=> '{EMAILSUBJECT:} [Contact] {SUBJECT}

Hello {ADM_USERNAME},

an message was entered in the contact form of your forum.


Date: {DATE}
Name: {USERNAME}
Email: {USER_EMAIL}
Reason: There was no reason given.

Message:
---------------------------------------------------------

{MESSAGE}

---------------------------------------------------------
Contact form from "{SITENAME}":
{SITEURL}


IP of the sender: {USER_IP}

Spam? Tell us a note in the support forum http://help.forums3.com.
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Welkom op "{SITENAME}"

{WELCOME_MSG}

Door de COPPA-wetgeving is je account momenteel inactief.

Print dit bericht uit en laat je ouders/voogd dit formulier ondertekenen. Fax het daarna naar:

{FAX_INFO}

Of e-mail het naar:

{MAIL_INFO}

------------------------------ KNIP HIER ------------------------------
Toestemming om gebruik te maken van "{SITENAME}" - {U_BOARD}

Gebruikersnaam: {USERNAME}
E-mail: {EMAIL_ADDRESS}

IK HEB DE INFORMATIE DIE MIJN KIND OPGEGEVEN HEEFT GECONTROLEERD EN GEEF BIJ DEZE TOESTEMMING AAN {SITENAME} OM DEZE GEGEVENS OP TE SLAAN.
IK BEGRIJP DAT DEZE INFORMATIE ALTIJD VERANDERD KAN WORDEN DOOR MIDDEL VAN HET INVOEREN VAN EEN WACHTWOORD.
IK BEGRIJP DAT ER ALTIJD VERZOCHT KAN WORDEN DEZE INFORMATIE TE VERWIJDEREN VAN {SITENAME}.


Ouder of voogd
(vul naam in): _____________________

(handtekening): __________________

Datum: _______________

------------------------------ KNIP HIER ------------------------------


Als de beheerder het bovenstaande formulier heeft ontvangen via fax of e-mail, zal je account geactiveerd worden. 

Jouw wachtwoord is veilig opgeslagen in onze database en kan niet worden opgevraagd. Indien je het bent vergeten, kun je het laten resetten in combinatie met het e-mailadres behorende bij het account.

Bedankt voor je registratie.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Welkom op "{SITENAME}"

{WELCOME_MSG}

Door de COPPA-wetgeving is je account momenteel inactief.

Print dit bericht uit en laat je ouders/voogd dit formulier ondertekenen. Fax het daarna naar:

{FAX_INFO}

OF e-mail het naar:

{MAIL_INFO}

------------------------------ KNIP HIER ------------------------------
Toestemming om gebruik te maken van "{SITENAME}" - {U_BOARD}

Gebruikersnaam: {USERNAME}
E-mail: {EMAIL_ADDRESS}

IK HEB DE INFORMATIE DIE MIJN KIND OPGEGEVEN HEEFT GECONTROLEERD EN GEEF BIJ DEZE TOESTEMMING AAN {SITENAME} OM DEZE GEGEVENS OP TE SLAAN.
IK BEGRIJP DAT DEZE INFORMATIE ALTIJD VERANDERD KAN WORDEN DOOR MIDDEL VAN HET INVOEREN VAN EEN WACHTWOORD.
IK BEGRIJP DAT ER ALTIJD VERZOCHT KAN WORDEN DEZE INFORMATIE TE VERWIJDEREN VAN {SITENAME}.


Ouder of voogd
(vul naam in): _____________________

(handtekening): __________________

Datum: _______________

------------------------------ KNIP HIER ------------------------------


Als de beheerder het bovenstaande formulier heeft ontvangen via fax of e-mail zal je account geactiveerd worden. 

Jouw wachtwoord is veilig opgeslagen in onze database en kan niet worden opgevraagd. Indien je het bent vergeten, kun je het laten resetten in combinatie met het e-mailadres behorende bij het account.

Bedankt voor je registratie.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - Email een vriend

Hallo {TO_USERNAME},

Deze e-mail is gestuurd via "{SITENAME}" door {FROM_USERNAME} die dacht dat je wel geïnteresseerd zou zijn in het volgende onderwerp:

{TOPIC_NAME}

Je kunt het hier vinden:

{U_TOPIC}

Hieronder zou een bericht van {FROM_USERNAME} kunnen staan. Dit bericht is niet gezien of goedgekeurd door een beheerder. Indien je een klacht hebt betreffende dit bericht, neem dan contact op met de beheerder via {BOARD_CONTACT}. Sluit de volledige e-mail (inclusief header) bij als je contact opneemt via dit e-mailadres.

----------

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/footb_board_remember.txt' 		=> '
Hallo {SITENAME},
The following users have received a reminder e-mail:

{REMEMBER_LIST}


Link to {SITENAME}: {U_BOARD}.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/footb_send_remember.txt' 		=> '
Hallo {USERNAME},
You have not yet bet {MATCHDAY}. matchday.
Please bet until {LEAGUE} delivery {DELIVERY}.

 
Link to {SITENAME}: {U_BOARD}.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/footb_send_remember_all.txt' 		=> '
Hallo {USERNAME},
Don\'t forget betting {MATCHDAY}. matchday.
Please bet until {LEAGUE} delivery {DELIVERY}.


Link to {SITENAME}: {U_BOARD}.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Forum berichtherinnering - {FORUM_NAME}

Hallo {USERNAME},

Je hebt deze e-mail ontvangen omdat je een onderwerp volgt in, "{FORUM_NAME}" op "{SITENAME}". Dit forum heeft een nieuw bericht in het onderwerp "{TOPIC_TITLE}" sinds je laatste bezoek. Je kunt de volgende link gebruiken om het laatste nieuwe bericht te lezen. Er zullen geen herinneringen meer gestuurd worden tot je dit onderwerp bezocht hebt.

{U_NEWEST_POST}

Als je naar het onderwerp wilt gaan, klik dan op de volgende link:
{U_TOPIC}

Als je naar het forum wilt gaan, klik dan op de volgende link:
{U_FORUM}

Als je dit forum niet langer wilt bekijken kun je klikken op "Geen abonnement meer op dit forum" in het juiste forum, of door op de volgende link te klikken:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Je bent toegevoegd aan een gebruikersgroep

Gefeliciteerd,

Je bent toegevoegd aan de "{GROUP_NAME}" groep op "{SITENAME}". 
Deze actie is uitgevoerd door een groepsmoderator of door de beheerder. Neem contact met hen op voor meer informatie. 

Je kunt de groepsinformatie hier bekijken:
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Je verzoek is geaccepteerd

Gefeliciteerd,

Je verzoek om tot de gebruikersgroep "{GROUP_NAME}" op "{SITENAME}" toe te treden is geaccepteerd. Klik op de volgende link om je lidmaatschap van de groep te bekijken.

{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Een verzoek ingediend om tot jouw groep toe te treden

Beste {USERNAME},

Een gebruiker heeft verzocht om tot de groep "{GROUP_NAME}" toe te treden die jij modereert op {SITENAME}.
Om dit verzoek te accepteren of te weigeren voor lidmaatschap van de groep, kun je op de volgende link klikken:

{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB installatie geslaagd

Gefeliciteerd,

Je hebt phpBB succesvol op je server geïnstalleerd.

Deze e-mail bevat belangrijke informatie over je registratie en het is aan te raden om deze te bewaren. Je wachtwoord is veilig opgeslagen in onze database en kan niet worden opgevraagd. Indien je je wachtwoord bent vergeten, kun je deze laten resetten aan de hand van je opgegeven e-mailadres en gebruikersnaam.

----------------------------
Gebruikersnaam: {USERNAME}

Forumadres: {U_BOARD}
----------------------------

Belangrijke informatie over je phpBB-installatie vind je in de "docs" map van de installatie en op de website - http://www.phpbb.nl/documentatie

Om je forum veilig te houden, raden wij je aan om de meest recente versies van de forumsoftware bij te houden. Voor jouw gemak is er een nieuwsbrief beschikbaar, die je kunt vinden op bovengenoemde pagina.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/newcomment_notify.txt' 		=> '{EMAILSUBJECT:} New comment notification - "{IMAGE_NAME}"

Hello {USERNAME},

You are receiving this notification because you are watching the image, "{IMAGE_NAME}" at "{SITENAME}". This image has received a new comment since your last visit. You can use the following link to read the comment.

{U_IMAGE}

If you no longer wish to watch this image/album you can click the "Unsubscribe image" link found in the link above.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/newimage_notify.txt' 		=> '{EMAILSUBJECT:} New image notification - "{ALBUM_NAME}"

Hello {USERNAME},

You are receiving this notification because you are watching the album, "{ALBUM_NAME}" at "{SITENAME}". This album has received a new image since your last visit, "{IMAGE_NAME}". You can use the following link to view album.

{U_ALBUM}

If you no longer wish to watch this album you can click the "Unsubscribe album" link found in the link above.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Nieuwe onderwerpherinnering - {FORUM_NAME}

Hallo {USERNAME},

Je ontvangt deze e-mail omdat je een forum in de gaten houdt, "{FORUM_NAME}" op {SITENAME}. Dit forum heeft een nieuw onderwerp "{TOPIC_TITLE}" sinds je laatste bezoek. Je kunt de volgende link gebruiken om het forum te bekijken, er zullen geen herinneringen meer gestuurd worden tot je dit forum hebt bezocht.

{U_FORUM}

Als je dit forum niet langer wilt bekijken, kun je klikken op "Geen abonnement meer op dit forum" in het juiste forum, of door op de volgende link te klikken:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Melding gesloten - "{PM_SUBJECT}"

Hallo {USERNAME},

Je hebt deze e-mail ontvangen omdat je melding over het privébericht "{PM_SUBJECT}" op "{SITENAME}" is afgehandeld door een moderator of een beheerder. Je melding is nu gesloten. Als je nog vragen hebt, neem dan contact op met {CLOSER_NAME} door middel van een PB.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Melding verwijderd - "{PM_SUBJECT}"

Hallo {USERNAME},

Je hebt deze e-mail ontvangen omdat je melding over het privébericht "{PM_SUBJECT}" op "{SITENAME}" is verwijderd door een moderator of een beheerder.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Bericht geaccepteerd - {POST_SUBJECT}

Hallo {USERNAME},

Je ontvangt deze e-mail omdat je bericht "{POST_SUBJECT}" op {SITENAME} is geaccepteerd door een moderator of beheerder. 

Als je het bericht wilt bekijken, klik dan op de volgende link:
{U_VIEW_POST}

Als je het onderwerp wilt lezen, klik dan op de volgende link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Bericht geweigerd - {POST_SUBJECT}

Hallo {USERNAME},

Je ontvangt deze e-mail omdat je bericht "{POST_SUBJECT}" op {SITENAME} geweigerd is door een moderator of beheerder. 

De volgende reden is gegeven voor deze actie:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_forum.txt' 		=> '{EMAILSUBJECT:} Forum Notification - {FORUM_NAME}

Hello {USERNAME},

the forum "{FORUM_NAME}" at "{SITENAME}" has received a new reply since your last visit. You can view the forum by clicking on the following link: {U_FORUM}
_____________________________________________________________________
Topic: {TOPIC_TITLE}
Author: {AUTHOR}
Message:
{MESSAGE}
_____________________________________________________________________

{VISIT_MSG}If you no longer wish to watch this forum, either click the "Unsubscribe forum" link found in the forum above, or click the following link:
{U_STOP_WATCHING_FORUM}
{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/prime_notify_newtopic.txt' 		=> '{EMAILSUBJECT:} New Topic Notification - {FORUM_NAME}

Hello {USERNAME},

the forum "{FORUM_NAME}" at "{SITENAME}" has received a new topic since your last visit. You can view the forum by clicking on the following link: {U_FORUM}
_____________________________________________________________________
Topic: {TOPIC_TITLE}
Author: {AUTHOR}
Message:
{MESSAGE}
_____________________________________________________________________

{VISIT_MSG}If you no longer wish to watch this forum, either click the "Unsubscribe forum" link found in the forum above, or click the following link:
{U_STOP_WATCHING_FORUM}
{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/prime_notify_privmsg.txt' 		=> '{EMAILSUBJECT:} New Private Message: {SUBJECT}

Hello {USERNAME},

you have received a new private message to your account on "{SITENAME}". You can view your new message by clicking on the following link: {U_INBOX}
_____________________________________________________________________

From: {AUTHOR_NAME}
Subject: {SUBJECT}
Message:
{MESSAGE}
_____________________________________________________________________

You have requested that you be notified on this event; remember that you can always choose not to be notified of new messages by changing the appropriate setting in your profile.
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_topic.txt' 		=> '{EMAILSUBJECT:} Topic Reply Notification - "{TOPIC_TITLE}"

Hello {USERNAME}, 

the topic "{TOPIC_TITLE}" at "{SITENAME}" has received a new reply since your last visit. You can view this post by clicking on the following link: {U_NEWEST_POST}
_____________________________________________________________________
Topic: {TOPIC_TITLE}
Author: {AUTHOR}
Message:
{MESSAGE}
_____________________________________________________________________

If you want to view the topic, click the following link:
{U_TOPIC}

{VISIT_MSG}If you no longer wish to watch this topic, either click the "Unsubscribe topic" link found in the forum above, or click the following link:
{U_STOP_WATCHING_TOPIC}
{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Er is een nieuw bericht

Hallo {USERNAME},

Je hebt een nieuw bericht ontvangen van "{AUTHOR_NAME}" op het forum "{SITENAME}" met het volgende onderwerp:

{SUBJECT}

Klik op de volgende link om je berichten te bekijken:
{U_VIEW_MESSAGE}

Je kunt deze waarschuwingen eventueel uitschakelen via de instellingen in je profiel.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_comment_email.txt' 		=> '﻿
Welcome,
{USER_NAME} has sent you a comment on {SITENAME}.

To read the comment , click the link below.
{LINK_PROFILE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_email.txt' 		=> 'Hallo {TO_USERNAME},

Dit bericht bevat een e-mail die de gebruiker "{FROM_USERNAME}" naar jou gestuurd heeft via {SITENAME}. In geval van misbruik, neem contact op met de verzender van de e-mail of de beheerder van de site. De beheerder is te bereiken via het volgende e-mailadres:

{BOARD_CONTACT}

Neem in dat geval de volledige tekst van deze e-mail in je bericht op, inclusief de headers van het bericht.

Let op! Het antwoordadres voor deze mail is het e-mailadres van "{FROM_USERNAME}".

Het volgende bericht is naar je verzonden:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Hallo {TO_USERNAME},

Dit bericht bevat een e-mail die de gebruiker "{FROM_USERNAME}" naar jou gestuurd heeft via {SITENAME}. In geval van misbruik, neem contact op met de verzender van de e-mail of de beheerder van de site. De beheerder is te bereiken via het volgende e-mailadres:

{BOARD_CONTACT}

Neem in dat geval de volledige tekst van deze e-mail in je bericht op.
Let op, het adres van de afzender is ingesteld als "Instant Messenger" account van het forum.

Het bericht dat naar jou is verzonden:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Melding gesloten - {POST_SUBJECT}

Hallo {USERNAME},

Je hebt deze e-mail ontvangen omdat je melding over het bericht "{POST_SUBJECT}" in "{TOPIC_TITLE}" op {SITENAME} is afgehandeld door een moderator of een beheerder. Je melding is nu gesloten. Als je nog vragen hebt, neem dan contact op met {CLOSER_NAME} door middel van een PB.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Melding verwijderd - {POST_SUBJECT}

Hallo {USERNAME},

Je hebt deze e-mail ontvangen omdat je melding over het bericht "{POST_SUBJECT}" in "{TOPIC_TITLE}" op {SITENAME} is verwijderd door een moderator of een beheerder.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Onderwerp goedgekeurd - {TOPIC_TITLE}

Hallo {USERNAME},

Je hebt deze e-mail ontvangen omdat je onderwerp "{TOPIC_TITLE}" op {SITENAME} is goedgekeurd door een moderator of een beheerder. 

Als je het onderwerp wilt lezen, klik dan op de volgende link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Onderwerp afgekeurd - {TOPIC_TITLE}

Hallo {USERNAME},

Je ontvangt deze e-mail omdat je onderwerp "{TOPIC_TITLE}" op {SITENAME} is afgekeurd door een moderator of beheerder. 

De volgende reden is gegeven voor de afkeuring:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Melding van het plaatsen van een reactie - {TOPIC_TITLE}

Hallo {USERNAME},

Je hebt deze e-mail ontvangen omdat je geabonneerd bent op het onderwerp: "{TOPIC_TITLE}" op {SITENAME}. Er is een reactie gekomen op dit onderwerp na je laatste bezoek. Je kunt de volgende link gebruiken om deze reactie(s) te bekijken. Je ontvangt geen e-mails meer over dit onderwerp totdat je het bezocht hebt.

Als je de laatste berichten sinds je laatste bezoek wilt zien, klik dan op de volgende link:
{U_NEWEST_POST}

Als je naar het onderwerp wilt gaan, klik dan op de volgende link:
{U_TOPIC}

Als je naar het forum wilt gaan, klik dan op de volgende link:
{U_FORUM}

Als je geen e-mails wilt ontvangen, kun je op "Geen abonnement meer op dit onderwerp" klikken onderaan het onderwerp. Of klik op de volgende link:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Je moet je account opnieuw activeren!

Hallo {USERNAME},

Je account op "{SITENAME}" is gedeactiveerd, waarschijnlijk door wijzigingen in je profiel. Om je account weer actief te maken dien je op onderstaande link te klikken:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Je account is gedeactiveerd

Hallo {USERNAME},

Je account op "{SITENAME}" is gedeactiveerd, dit komt waarschijnlijk door een wijziging in je profiel. De beheerder van het forum zal hem moeten activeren voordat je weer kunt inloggen. Je krijgt een e-mail wanneer dit gebeurd is.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Nieuw wachtwoord activeren

Hallo {USERNAME},

Je ontvangt deze e-mail omdat je (of iemand die namens jou) een nieuw wachtwoord aangevraagd heeft voor jouw account op {SITENAME}. Mocht je deze niet hebben aangevraagd, negeer deze e-mail dan en klik vooral niet op onderstaande link! Als je deze melding blijft ontvangen, neem dan contact op met de beheerder. 

Om het nieuwe wachtwoord te activeren, hoef je alleen op deze link klikken:

{U_ACTIVATE}

Als het is gelukt kun je het volgende wachtwoord te gebruiken:

Wachtwoord: {PASSWORD}

Je kunt natuurlijk dit wachtwoord via je profiel wijzigen. Mocht je hiermee problemen hebben, neem dan contact op met de beheerder.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Heractiveer je account op "{SITENAME}"

Een beheerder heeft gevraagd om je account te heractiveren. Deze is momenteel inactief. 
Volg de stappen hieronder om je account te heractiveren. 

Bewaar deze e-mail goed. Je accountinformatie is als volgt:

----------------------------
Gebruikersnaam: {USERNAME}
----------------------------

Je wachtwoord is veilig opgeslagen in onze database en kan niet worden opgevraagd. Indien je het bent vergeten, kun je het laten resetten in combinatie met het e-mailadres behorende bij jouw account.

Volg onderstaande link om je account te heractiveren:

{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_delete_notify.txt' 		=> '{EMAILSUBJECT:} Deletion of your user account at "{SITENAME}"! 

Dear {USERNAME},

You have received at least two reminders from us in the recent past. 

As there has been no interest/action on your part to participate in any activities at {SITENAME} it has been decided to delete your account from our site.

Please note that your account cannot be recovered should you wish at a later time to join us again. You would need to register a new account at that time.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_inactive.txt' 		=> '{EMAILSUBJECT:} Reminder from "{SITENAME}"! 

Dear {USERNAME},

We are writing to you as we have noticed that you have not logged in to {SITENAME} for a while.

Please have a look at {U_BOARD} to have a look at our recent topics on our board. 

We look forward to seeing you back shortly.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_inactive_still.txt' 		=> '{EMAILSUBJECT:} 2nd Reminder from "{SITENAME}"! 

Dear {USERNAME},

We have recently written to you with regard to your lack of participation/activity on {SITENAME}.

There has been no change in activity from your part since that mail. We would like to make you aware that we consider deleting your account as you appear to be no longer interested in the community of {SITENAME}.

In case you just have misplaced your log in details, please find them below:
----------------------------
Username: {USERNAME}
Password: *

Board URL: {U_BOARD}
----------------------------

* Please note that your password has been encrypted in our database and we cannot retrieve it for you. Should you have forgotten your password you can request a new one which will be activated in the same way as your account.

We look forward to your participation on {SITENAME} shortly.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_not_logged_in.txt' 		=> '{EMAILSUBJECT:} Reminder from "{SITENAME}"! 

Dear {USERNAME},

We are writing to you as we have noticed that you registered an account on {SITENAME} a little while ago.

Although your account is activated, you have yet to log in to the site. 

Please find below for your ease of reference your user details and board url.
----------------------------
Username: {USERNAME}
Password: *

Board URL: {U_BOARD}
----------------------------

* Please note that your password has been encrypted in our database and we cannot retrieve it for you. Should you have forgotten your password you can request a new one which will be activated in the same way as your account.

We look forward to your participation on {SITENAME} shortly.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_zero_poster.txt' 		=> '{EMAILSUBJECT:} Reminder from "{SITENAME}"! 

Dear {USERNAME},

You registered on {SITENAME} a little while ago. 

We have noticed that to-date you have not yet participated in the community and posted in any of the forums.

Please take some time to have a look at some of our recent topics on {U_BOARD} which you may find interesting to get involved in.

Alternatively, please do not hesitate to start your own topic, even if it is just to introduce yourself to the rest of the community. This is normally the first ice-breaker.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Inactief account herinnering

Hallo {USERNAME},

Deze melding is een herinnering dat je account op"{SITENAME}", aangemaakt op {REGISTER_DATE}, nog inactief is. Als je dit account wilt activeren, kun je naar de volgende link gaan:

{U_ACTIVATE}

Bedankt voor je registratie op "{SITENAME}", en we zien je graag op het forum.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Welkom bij "{SITENAME}"

{WELCOME_MSG}

Bewaar deze e-mail goed ter informatie. Je accountinformatie is als volgt:

----------------------------
Gebruikersnaam: {USERNAME}
----------------------------

Je wachtwoord is veilig opgeslagen in onze database en kan niet worden opgevraagd. Indien je het bent vergeten, kun je het laten resetten in combinatie met het e-mailadres behorende bij het account.

Bezoek de volgende link om je account te activeren:

{U_ACTIVATE}


Dank je voor het registreren.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Welkom op "{SITENAME}"

{WELCOME_MSG}

Bewaar deze e-mail goed ter informatie. Je accountinformatie is als volgt:

----------------------------
Gebruikersnaam: {USERNAME}
{PASSWORD_EXTRA_LINE}
Forum URL: {U_BOARD}
----------------------------

Je wachtwoord is veilig opgeslagen in onze database en kan niet worden opgevraagd. Indien je het bent vergeten, kun je het laten resetten in combinatie met het e-mailadres behorende bij het account.

Bedankt voor je registratie!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Welkom op "{SITENAME}"

{WELCOME_MSG}

Bewaar deze e-mail goed ter informatie. Je accountinformatie is als volgt:

----------------------------
Gebruikersnaam: {USERNAME}
{PASSWORD_EXTRA_LINE}
Forum URL: {U_BOARD}
----------------------------

Ga naar de volgende link om je account te activeren:

{U_ACTIVATE}

Je wachtwoord is veilig opgeslagen in onze database en kan niet worden opgevraagd. Indien je het bent vergeten, kun je het laten resetten in combinatie met het e-mailadres behorende bij het account.

Bedankt voor je registratie!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/cron_formel1.txt' 		=> '{EMAILSUBJECT:} Formula 1 prediction game reminder

Hello {USERNAME},

please don\'t forget your Formula 1 prediction game on {SITENAME}.

The next race will start this weekend !!!

Deadline for the race in {RACENAME} is on
Date: {DEADLINEDATE}
Time: {DEADLINETIME}

Click here to get to the WebTipp: {U_BOARD}/formel1.php

{EMAIL_SIG}',
));
