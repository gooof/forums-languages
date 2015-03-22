<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktivacija korisničkog računa

Poštovanje,

korisnički račun "{USERNAME}" je deaktiviran ili prepravljen/ponovo kreiran.

Trebao/la bi:
a) provjeriti detalje korisničkog računa klikom na sljedeći link: {U_USER_DETAILS};
b) aktivirati ga klikom na sljedeći link: {U_ACTIVATE}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Poštovanje,

ovaj e-mail ti je poslao/la administrator/ica foruma "{SITENAME}".

Ukoliko ovaj e-mail smatraš spamom, odnosno sadrži uvredljive ili druge nepoželjne komentare, kontaktiraj administratora/icu foruma na: {CONTACT_EMAIL} [priloži čitav e-mail, uključujući i zaglavlja].

Slijedi poslan ti e-mail...

~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Korisnički račun aktiviran

Poštovanje {USERNAME},

vaš korisnički račun na "{SITENAME}" je aktiviran, sada se možete prijaviti.

Tvoja lozinka je sigurno pohranjena unutar naše baze podataka i ne može biti pregledana. U slučaju da zaboraviš lozinku, možeš je resetirati pomoću e-mail adrese povezane sa tvojim korisničkim računom.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošao/la na "{SITENAME}"

Poštovanje,

postavke tvojeg korisničkog računa su sljedeće:

----------------------------
Korisničko ime: {USERNAME}
URL phpBB foruma: {U_BOARD}
----------------------------

Tvoj korisnički račun je trenutno neaktivan i mora biti odobren od strane administratora/ice prije nego se možeš prijaviti. Nova e-mail poruka će biti poslana nakon što račun bude odobren.

Tvoja lozinka je sigurno pohranjena unutar naše baze podataka i ne može biti pregledana. U slučaju da zaboraviš lozinku, možeš je resetirati pomoću e-mail adrese povezane sa tvojim korisničkim računom. Forum će ti nakon toga poslati novu softverski generiranu.

Hvala ti što si se registrirao/la na naš forum.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošao/la na "{SITENAME}"

Poštovanje,

u suglasnosti sa COPPA tvoj korisnički račun je trenutno neaktivan.

Isprintaj ovu poruku te ju daj roditelju odnosno staratelju da ju potpiše i datumira.

Zatim ju faksiraj na:

{FAX_INFO}

ili pošalji na:

{MAIL_INFO}

------------------------------ ODREŽI OVDJE ------------------------------

Dopuštenje za sudjelovanje na forumu "{SITENAME}" - {U_BOARD}

Korisničko ime: {USERNAME}
E-mail: {EMAIL_ADDRESS}

UPOZNAT/A SAM S PODATCIMA KOJE MI JE DALO NA UVID MOJE DIJETE I DOPUŠTAM DA {SITENAME} POHRANI TE PODATKE.
UPOZNAT/A SAM S ČINJENICOM DA OVI PODATCI MOGU BITI IZMIJENJENI U BILO KOJEM TRENUTKU UNOŠENJEM ZLOZINKE.
UPOZNAT/A SAM S ČINJENICOM DA MOGU ZAHTIJEVATI, U BILO KOJEM TRENUTKU, DA OVI PODATCI BUDU UKLONJENI S(A) "{SITENAME}".

Ime i prezime roditelja odnosno staratelja: _________________________________

Potpis: _________________________________

Datum: _____________

------------------------------ ODREŽI OVDJE  ------------------------------

Nakon što administrator/ica faksom, tj. poštanskim putem, primi potpisan formular, tvoj korisnički račun će biti aktiviran.

Tvoja lozinka  je sigurno pohranjena unutar naše baze podataka i ne može biti pregledana. U slučaju da zaboraviš lozinku, možeš je resetirati pomoću e-mail adrese povezane sa tvojim korisničkim računom.

Hvala ti što si se registrirao/la.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošao/la na "{SITENAME}"

Poštovanje,

u suglasnosti sa COPPA tvoj korisnički račun je trenutno neaktivan.

Isprintaj ovu poruku te ju daj roditelju odnosno staratelju da ju potpiše i datumira.

Zatim ju faksiraj na:

{FAX_INFO}

ili pošalji na:

{MAIL_INFO}

------------------------------ ODREŽI OVDJE ------------------------------

Dopuštenje za sudjelovanje na forumu "{SITENAME}" - {U_BOARD}

Korisničko ime: {USERNAME}
E-mail: {EMAIL_ADDRESS}

UPOZNAT/A SAM S PODATCIMA KOJE MI JE DALO NA UVID MOJE DIJETE I I DOPUŠTAM DA {SITENAME} POHRANI TE PODATKE.
UPOZNAT/A SAM S ČINJENICOM DA OVI PODATCI MOGU BITI IZMIJENJENI U BILO KOJEM TRENUTKU UNOŠENJEM ZAPORKE.
UPOZNAT/A SAM S ČINJENICOM DA MOGU ZAHTIJEVATI, U BILO KOJEM TRENUTKU, DA OVI PODATCI BUDU UKLONJENI S(A) "{SITENAME}".

Ime i prezime roditelja odnosno staratelja: _________________________________

Potpis: _________________________________

Datum: _____________

------------------------------ ODREŽI OVDJE  ------------------------------

Nakon što administrator/ica, faksom odnosno poštanskim putem, primi potpisan formular, tvoj korisnički račun će biti aktiviran.

Tvoja zaporka je sigurno pohranjena unutar naše baze podataka i ne može biti pregledana. U slučaju da zaboraviš zaporku, možeš je resetirati pomoću e-mail adrese povezane sa tvojim korisničkim računom.

Hvala ti što si se registrirao/la.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - E-mailiranje prijatelju/ici

Poštovanje {TO_USERNAME},

ovaj e-mail ti je, s foruma "{SITENAME}", poslao/la korisnik/ca {FROM_USERNAME}, vezano uz temu {TOPIC_NAME} koju možeš pročitati klikom na sljedeći link: {U_TOPIC}.

Poruka od korisnika/ce {USERNAME}, ako je ima, nalazi se ispod.
----------
{MESSAGE}
----------
Poruka nije pregledana ni odobrena od strane administratora/ice {SITENAME} foruma.
Ukoliko ovaj e-mail smatraš spamom, odnosno sadrži uvredljive ili druge nepoželjne komentare, kontaktiraj administratora/icu foruma na: {BOARD_CONTACT} [priloži čitav e-mail, uključujući i zaglavlja].

{EMAIL_SIG}',
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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Obavijest o odgovoru na temu - "{FORUM_NAME}"

Poštovanje {USERNAME},

ova obavijest ti je stigla jer si izabrao/la opciju obavješćivanja o raspravljanju na "{FORUM_NAME}" na forumu "{SITENAME}".

Od tvojeg zadnjeg posjeta, bilo je odgovora na temu "{TOPIC_TITLE}".

Odgovore možeš vidjeti klikom na sljedeći link: {U_NEWEST_POST}.

Temu možeš vidjeti klikom na sljedeći link: {U_TOPIC}.

Forum možeš vidjeti klikom na sljedeći link: {U_FORUM}.

[Neće ti biti slane nove obavijesti sve dok ne posjetiš temu.]

Ukoliko ne želiš više pratiti ovaj forum - klikni na sljedeći link: {U_STOP_WATCHING_FORUM}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Korisnički račun pridodan korisničkoj grupi

Poštovanje,

tvoj korisnički račun, na forumu "{SITENAME}", pridodan je korisničkoj grupi "{GROUP_NAME}".

Pridodavanje je obavljeno posredstvom moderatora/ice korisničke grupe odnosno administratora/ice foruma [koje možeš kontaktirati za podrobnije informacije].

Informacije o korisničkoj grupi možeš vidjeti ovdje: {U_GROUP}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Zahtjev za članstvom u korisničkoj grupi

Poštovanje {USERNAME},

korisnik/ca "{REQUEST_USERNAME}" je zatražio/la pristupanje korisničkoj grupi "{GROUP_NAME}", na forumu "{SITENAME}", koje si moderator/ica.

Za odobrenje/neodobrenje zahtjeva klikni na sljedeći link: {U_PENDING}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} Instaliran je phpBB

Poštovanje {USERNAME},

Tvoj phpBB forum je uspješno instaliran.

Ova e-mail poruka sadrži važne podatke povezane sa tvojom instalacijom. Tvoja lozinka je sigurno pohranjena unutar baze podataka i ne može biti pregledana. U slučaju da zaboraviš lozinku, možeš je resetirati pomoću e-mail adrese povezane sa tvojim korisničkim računom.

----------------------------
Korisničko ime: {USERNAME}
URL: {U_BOARD}
----------------------------

Korisne informacije o phpBB forumu možeš pročitati u mapi docs koja se nalazi unutar instalacije foruma ili pregledavanjem naše web stranice za podršku korisnicima http://www.phpbb.com/support/.

Predlažemo da se pretplatite na našu mailing listu, što možte preko gornjeg URL-a, kako bili na vrijeme informirani o svim novostima vezanim uz phpBB forum.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Obavijest o novoj temi - "{FORUM_NAME}"

Poštovanje {USERNAME},

ova obavijest ti je stigla jer si izabrao/la opciju obavješćivanja o raspravljanju na "{FORUM_NAME}" na forumu "{SITENAME}".

Od tvojeg zadnjeg posjeta, započeta [otvorena] je nova tema "{TOPIC_TITLE}".

Forum možeš vidjeti klikom na sljedeći link: {U_FORUM}.

[Neće ti biti slane nove obavijesti sve dok ne posjetiš forum.]

Ukoliko ne želiš više pratiti ovaj forum - klikni na sljedeći link: {U_STOP_WATCHING_FORUM}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> 'Naslov: Prijava zatvorena - "{PM_SUBJECT}"

Pozdrav {USERNAME},

Primio/la si ovu obavijest zato što je prijava koju si poslao/la u vezi privatne poruke naslova "{PM_SUBJECT}" na "{SITENAME}" pregledana od strane moderatora/ice ili administratora/ice. Prijava je zatvorena. Ukoliko imaš dodatnih pitanja, molimo te da kontaktiraš {CLOSER_NAME} putem privatne poruke.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> 'Naslov: Prijava izbrisana - "{PM_SUBJECT}"

Pozdrav {USERNAME},

Primio/la si ovu obavijest zato što je prijava koju si poslao/la u vezi privatne poruke naslova "{PM_SUBJECT}" na "{SITENAME}" izbrisana od strane moderatora/ice ili administratora/ice.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Post odobren - "{POST_SUBJECT}"

Poštovanje {USERNAME},

ova obavijest ti je stigla jer ti je post "{POST_SUBJECT}", na forumu "{SITENAME}", odobren.

Post možeš vidjeti klikom na sljedeći link: {U_VIEW_POST}.

Temu možeš vidjeti klikom na sljedeći link: {U_VIEW_TOPIC}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Post neodobren - "{POST_SUBJECT}"

Poštovanje {USERNAME},

ova obavijest ti je stigla jer ti post "{POST_SUBJECT}", na forumu "{SITENAME}", nije odobren.

Razlog neodobrenja je sljedeći: {REASON}.

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

you have received a new private message to your account on "{SITENAME}". You can view your new message by clicking on the following link: {U_VIEW_MESSAGE}
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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Nova privatna poruka

Poštovanje {USERNAME},

primili ste novu privatnu poruku od korisnika/ce "{AUTHOR_NAME}" na forumu "{SITENAME}" sljedećeg naslova:

{SUBJECT}

Poruku možete pročitati klikom na sljedeći link: 
{U_VIEW_MESSAGE}.

Zatražili ste da budete obaviješteni o novim porukama, ne zaboravite da uvijek možete samostalno promijeniti svoje postavke o novim pristiglim porukama u vašem profilu.

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
	'email/profile_send_email.txt' 		=> '
Poštovanje {TO_USERNAME},

posredstvom tvojeg korisničkog računa na forumu "{SITENAME}", korisnik/ca {FROM_USERNAME} ti je poslao/la e-mail.

Ukoliko ovaj e-mail smatraš spamom, odnosno sadrži uvredljive ili druge nepoželjne komentare, kontaktiraj administratora/icu foruma na: {BOARD_CONTACT} [priloži čitav e-mail, uključujući i zaglavlja].
Kao e-mail adresa za odgovor na ovaj e-mail postavljena je: {FROM_USERNAME}.

Slijedi poslan ti e-mail...

~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Poštovanje {TO_USERNAME},

posredstvom tvojeg korisničkog računa na forumu "{SITENAME}", korisnik/ca {FROM_USERNAME} ti je poslao/la e-mail.

Slijedi poslan ti e-mail...
~~~~~~~~~~~~~~~~~~~~~~~~~~~
{MESSAGE}
~~~~~~~~~~~~~~~~~~~~~~~~~~~
Ukoliko ovaj e-mail smatraš spamom, odnosno sadrži uvredljive ili druge nepoželjne komentare, kontaktiraj administratora/icu foruma na: {BOARD_CONTACT} [priloži čitav e-mail, uključujući i zaglavlja].
Kao e-mail adresa za odgovor na ovaj e-mail postavljena je e-mail adresa forumova IM korisničkog računa.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Prijava zaključena - "{POST_SUBJECT}"

Poštovanje {USERNAME},

ova obavijest ti je stigla zbog prijave posta "{POST_SUBJECT}" [u temi "{TOPIC_TITLE}"] na forumu "{SITENAME}".

Prijavu je obradio/la moderator(ica)/administrator(ica) i zaključio/la ju.

Ukoliko imaš daljnjih pitanja vezanih uz nju - kontaktiraj {CLOSER_NAME} privatnom porukom.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Prijava izbrisana - "{POST_SUBJECT}"

Poštovanje {USERNAME},

ova obavijest ti je stigla zbog prijave posta "{POST_SUBJECT}" [u temi "{TOPIC_TITLE}"] na forumu "{SITENAME}".

Prijavu je obradio/la moderator(ica)/administrator(ica) i izbrisao/la ju.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tema odobrena - "{TOPIC_TITLE}"

Poštovanje {USERNAME},

ova obavijest ti je stigla jer ti je tema "{TOPIC_TITLE}", na forumu "{SITENAME}", odobrena.

Temu možeš vidjeti klikom na sljedeći link: {U_VIEW_TOPIC}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tema neodobrena - "{TOPIC_TITLE}"

Poštovanje {USERNAME},

ova obavijest ti je stigla jer ti tema "{TOPIC_TITLE}", na forumu "{SITENAME}", nije odobrena.

Razlog neodobrenja je sljedeći: {REASON}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because you are watching the topic "{TOPIC_TITLE}" at "{SITENAME}". This topic has received a reply<!-- IF AUTHOR_NAME !== \'\' --> by {AUTHOR_NAME}<!-- ENDIF --> since your last visit. No more notifications will be sent until you visit the topic.

If you want to view the newest post made since your last visit, click the following link:
{U_NEWEST_POST}

If you want to view the topic, click the following link:
{U_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

If you no longer wish to watch this topic you can either click the "Unsubscribe topic" link found at the bottom of the topic above, or by clicking the following link:
{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reaktivacija korisničkog racuna

Poštovanje {USERNAME},

tvoj korisnički račun na forumu "{SITENAME}" je deaktiviran, najvjerojatnije zbog promjena napravljenih u korisničkom profilu.

Za reaktivaciju korisničkog računa klikni na sljedeći link: {U_ACTIVATE}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Korisnički račun deaktiviran

Poštovanje {USERNAME},

tvoj korisnički račun na forumu "{SITENAME}" je deaktiviran, najvjerojatnije zbog promjena napravljenih u korisničkom profilu.

Administrator/ica foruma ga mora aktivirati.
Obavijest o aktivaciji će ti stići e-mailom.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivacija nove lozinke

Poštovanje {USERNAME},

ovaj e-mail ti je stigao jer si zatražio/la [ili netko drugi "u tvoje ime"] novu lozinku na forumu "{SITENAME}".

Ukoliko nisi zatražio/la ovaj e-mail - ignoriraj ga, ukoliko ti nastavi stizati - kontaktiraj administratora/icu foruma.

Za korištenje nove lozinke moraš ju aktivirati. To možeš učiniti klikom na sljedeći link: {U_ACTIVATE}.

Ukoliko je sve prošlo kako treba, moći ćeš se prijaviti koristeći sljedeću lozinku: {PASSWORD}.

Lozinku možeš promijeniti u svom korisničkom profilu.

Ako imaš poteškoća s aktivacijom/promjenom lozinke - kontaktiraj administratora/icu foruma.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reaktivacija korisničkog računa na "{SITENAME}"

Poštovanje,

administrator/ica je podnio/la zahtjev za reaktivacijom tvojeg korisničkog računa [koji je trenutno neaktivan].

Korisnički račun možeš reaktivirati slijedeći donje korake.

Postavke tvojeg korisničkog računa su sljedeće:

----------------------------
Korisničko ime: {USERNAME}
----------------------------

Tvoja lozinka je sigurno pohranjena unutar naše baze podataka i ne može biti pregledana. U slučaju da zaboraviš lozinku, možeš je resetirati pomoću e-mail adrese povezane sa tvojim korisničkim računom.

Za reaktivaciju korisničkog računa, klikni na sljedeći link: {U_ACTIVATE}.

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Neaktivan korisnički račun

Poštovanje {USERNAME},

ova poruka je podsjetnik da je tvoj korisnički račun na forumu "{SITENAME}", otvoren dana {REGISTER_DATE} još uvijek neaktivan.

Ukoliko želiš aktivirati taj korisnički račun, možeš to napraviti pomoću slijedećeg linka: {U_ACTIVATE}.

Hvala ti što si se registrirao/la.
Radujemo se tvojem sudjelovanju na "{SITENAME}".

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošao/la na "{SITENAME}"

Poštovanje,

postavke tvojeg korisničkog računa su sljedeće:

----------------------------
Korisničko ime: {USERNAME}
----------------------------

Tvoja zaporka je sigurno pohranjena unutar naše baze podataka i ne može biti pregledana. U slučaju da zaboraviš zaporku, možeš je resetirati pomoću e-mail adrese povezane sa tvojim korisničkim računom.

Tvoj korisnički račun je trenutno neaktivan. Možeš ga aktivirati klikom na sljedeći link: {U_ACTIVATE}.

Hvala ti što si se registrirao/la.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Dobrodošao/la na "{SITENAME}"

Poštovanje,

postavke tvojeg korisničkog računa su sljedeće:

----------------------------
Korisničko ime: {USERNAME}
{PASSWORD_EXTRA_LINE}
URL foruma: {U_BOARD}
----------------------------

Tvoja zaporka je sigurno pohranjena unutar naše baze podataka i ne može biti pregledana. U slučaju da zaboraviš zaporku, možeš je resetirati pomoću e-mail adrese povezane sa tvojim korisničkim računom.

Hvala ti što si se registrirao/la.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošao/la na "{SITENAME}"

Poštovanje,

postavke tvojeg korisničkog računa su sljedeće:

----------------------------
Korisničko ime: {USERNAME}
{PASSWORD_EXTRA_LINE}
URL foruma: {U_BOARD}
----------------------------

Molimo te da posjetiš slijedeći link kako bi aktivirao/la tvoj korisnički račun:

{U_ACTIVATE}.

Tvoja zaporka je sigurno pohranjena unutar naše baze podataka i ne može biti pregledana. U slučaju da zaboraviš zaporku, možeš je resetirati pomoću e-mail adrese povezane sa tvojim korisničkim računom.

Hvala ti što si se registrirao/la.

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



$email = array_merge($email, array(
	'email/bookmark.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because a topic you bookmarked, "{TOPIC_TITLE}" at "{SITENAME}", has received a reply since your last visit. You can use the following link to view the replies made, no more notifications will be sent until you visit the topic.

If you want to view the newest post made since your last visit, click the following link:
{U_NEWEST_POST}

If you want to view the topic, click the following link:
{U_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

If you no longer wish to receive updates about replies to bookmarks, please update your notification settings here:

{U_NOTIFICATION_SETTINGS}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/contact_admin.txt' 		=> '
Hello {TO_USERNAME},

The following is an e-mail sent to you through the administration contact page on "{SITENAME}".

<!-- IF S_IS_REGISTERED -->
The message has been sent from an account on the site.
Username: {FROM_USERNAME}
E-mail address: {FROM_EMAIL_ADDRESS}
IP Address: {FROM_IP_ADDRESS}
Profile: {U_FROM_PROFILE}
<!-- ELSE -->
The message was sent from a guest who specified the following contact information:
Name: {FROM_USERNAME}
E-mail address: {FROM_EMAIL_ADDRESS}
IP Address: {FROM_IP_ADDRESS}
<!-- ENDIF -->


Message sent to you follows
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_in_queue.txt' 		=> '{EMAILSUBJECT:} Post moderation notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because the post "{POST_SUBJECT}" at "{SITENAME}" needs approval.

If you want to view the post, click the following link:
{U_VIEW_POST}

If you want to view the topic, click the following link:
{U_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/quote.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because "{AUTHOR_NAME}" quoted you in the topic "{TOPIC_TITLE}" at "{SITENAME}". You can use the following link to view the reply made.

If you want to view the quoted post, click the following link:
{U_VIEW_POST}

If you want to view the topic, click the following link:
{U_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

If you no longer wish to receive updates about replies quoting you, please update your notification settings here:

{U_NOTIFICATION_SETTINGS}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_pm.txt' 		=> '{EMAILSUBJECT:} Private Message report - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because a Private Message titled "{SUBJECT}" by "{AUTHOR_NAME}" at "{SITENAME}" was reported.

If you want to view the report, click the following link:
{U_VIEW_REPORT}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_post.txt' 		=> '{EMAILSUBJECT:} Post report - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because the post "{POST_SUBJECT}" at "{SITENAME}" was reported.

If you want to view the report, click the following link:
{U_VIEW_REPORT}

If you want to view the post, click the following link:
{U_VIEW_POST}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_in_queue.txt' 		=> '{EMAILSUBJECT:} Topic moderation notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because the topic "{TOPIC_TITLE}" at "{SITENAME}" needs approval.

If you want to view the topic, click the following link:
{U_VIEW_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/bookmark.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because a topic you bookmarked, "{TOPIC_TITLE}" at "{SITENAME}", has received a reply since your last visit. You can use the following link to view the replies made, no more notifications will be sent until you visit the topic.

If you want to view the newest post made since your last visit, click the following link:
{U_NEWEST_POST}

If you want to view the topic, click the following link:
{U_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

If you no longer wish to receive updates about replies to bookmarks, please update your notification settings here:

{U_NOTIFICATION_SETTINGS}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} New topic notification - "{FORUM_NAME}"

Hello {USERNAME},

You are receiving this notification because you are watching the forum "{FORUM_NAME}" at "{SITENAME}". This forum has received a new topic<!-- IF AUTHOR_NAME --> by {AUTHOR_NAME}<!-- ENDIF --> since your last visit, "{TOPIC_TITLE}". You can use the following link to view the forum, no more notifications will be sent until you visit the forum.

{U_FORUM}

If you no longer wish to watch this forum you can either click the "Unsubscribe forum" link found in the forum above, or by clicking the following link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/post_approved.txt' 		=> '{EMAILSUBJECT:} Post approved - "{POST_SUBJECT}"

Hello {USERNAME},

You are receiving this notification because your post "{POST_SUBJECT}" at "{SITENAME}" was approved by a moderator or administrator.

If you want to view the post, click the following link:
{U_VIEW_POST}

If you want to view the topic, click the following link:
{U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Post disapproved - "{POST_SUBJECT}"

Hello {USERNAME},

You are receiving this notification because your post "{POST_SUBJECT}" at "{SITENAME}" was disapproved by a moderator or administrator.

The following reason was given for the disapproval:

{REASON}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/post_in_queue.txt' 		=> '{EMAILSUBJECT:} Post moderation notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because the post "{POST_SUBJECT}" at "{SITENAME}" needs approval.

If you want to view the post, click the following link:
{U_VIEW_POST}

If you want to view the topic, click the following link:
{U_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} New private message has arrived

Hello {USERNAME},

You have received a new private message from "{AUTHOR_NAME}" to your account on "{SITENAME}" with the following subject:

{SUBJECT}

You can view your new message by clicking on the following link:

{U_VIEW_MESSAGE}

You have requested that you be notified on this event, remember that you can always choose not to be notified of new messages by changing the appropriate setting in your profile.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/quote.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because "{AUTHOR_NAME}" quoted you in the topic "{TOPIC_TITLE}" at "{SITENAME}". You can use the following link to view the reply made.

If you want to view the quoted post, click the following link:
{U_VIEW_POST}

If you want to view the topic, click the following link:
{U_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

If you no longer wish to receive updates about replies quoting you, please update your notification settings here:

{U_NOTIFICATION_SETTINGS}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/report_pm.txt' 		=> '{EMAILSUBJECT:} Private Message report - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because a Private Message titled "{SUBJECT}" by "{AUTHOR_NAME}" at "{SITENAME}" was reported.

If you want to view the report, click the following link:
{U_VIEW_REPORT}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/report_post.txt' 		=> '{EMAILSUBJECT:} Post report - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because the post "{POST_SUBJECT}" at "{SITENAME}" was reported.

If you want to view the report, click the following link:
{U_VIEW_REPORT}

If you want to view the post, click the following link:
{U_VIEW_POST}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/topic_approved.txt' 		=> '{EMAILSUBJECT:} Topic approved - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because your topic "{TOPIC_TITLE}" at "{SITENAME}" was approved by a moderator or administrator.

If you want to view the topic, click the following link:
{U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Topic disapproved - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because your topic "{TOPIC_TITLE}" at "{SITENAME}" was disapproved by a moderator or administrator.

The following reason was given for the disapproval:

{REASON}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/topic_in_queue.txt' 		=> '{EMAILSUBJECT:} Topic moderation notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because the topic "{TOPIC_TITLE}" at "{SITENAME}" needs approval.

If you want to view the topic, click the following link:
{U_VIEW_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/short/topic_notify.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because you are watching the topic "{TOPIC_TITLE}" at "{SITENAME}". This topic has received a reply<!-- IF AUTHOR_NAME --> by {AUTHOR_NAME}<!-- ENDIF --> since your last visit. You can use the following link to view the replies made, no more notifications will be sent until you visit the topic.

If you want to view the newest post made since your last visit, click the following link:
{U_NEWEST_POST}

If you want to view the topic, click the following link:
{U_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

If you no longer wish to watch this topic you can either click the "Unsubscribe topic" link found at the bottom of the topic above, or by clicking the following link:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));
