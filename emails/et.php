<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Kasutaja konto aktiveerimine

Tere,

Konto "{USERNAME}" on deaktiveeritud või vastloodud, peaksid kontrollima andmeid (kui vaja) ja kasutama neid vastavalt.

Kasuta seda linki, et minna kasutaja profiili:
{U_USER_DETAILS}

Kasuta seda linki, et aktiveerida konto:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Järgnev on e-kiri saadetud teile foorumi "{SITENAME}" administraatorilt. Kui see on spämm, sisaldab sõimu või muid solvavaid kommentaare, siis võta ühendust foorumi administraatoriga:

{CONTACT_EMAIL}

Pane kaasa täielik e-kiri (eriti päised). 

Sulle saadetud sõnum on järgnev:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Konto aktiveeritud

Tere {USERNAME},

Sinu konto foorumis "{SITENAME}" on nüüd aktiveeritud foorumi administraatori poolt, võid nüüd sisse logida.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Teretulemast "{SITENAME}" foorumisse

{WELCOME_MSG}

Palume hoida see e-kiri alles. Sinu konto andmed on järgnevad:

----------------------------
Kasutajanimi: {USERNAME}
Parool: {PASSWORD}

Foorumi URL: {U_BOARD}
----------------------------
Sinu kasutaja pole hetkel aktiveeritud. Selle kasutamiseks on vaja administraatori heakskiitu. Kui see sooritatakse, saad vastavasisulise kirja.

Sinu parool on meie andmebaasis turvaliselt salvestatud, seega ei saa me seda ununemise korral taastada. Kui sa siiski unustad oma parooli, saad sisestada uue parooli, mis aktiveeritakse sinu kasutajakontol märgitud e-posti aadressi kasutades.

Täname registreerimast

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Teretulemast saidile "{SITENAME}"

{WELCOME_MSG}

COPPA lepinguga on su konto hetkel mitteaktiivne.

Palun prindi see välja, lase vanemal või hooldajal alla kirjutada ning faksi see:

{FAX_INFO}

VÕI maili see:

{MAIL_INFO}

------------------------------ LÕIKA SIIN ------------------------------
Luba osa võtta lehest "{SITENAME}" - {U_BOARD}

Kasutajanimi: {USERNAME}
E-post: {EMAIL_ADDRESS}

MA OLEN OMA LAPSE ANTUD ANDMED ÜLE VAADANUD JA LUBAN LEHEKÜLJEL "{SITENAME}" NEED SALVESTADA.
MA MÕISTAN, ET SEDA INFOT SAAB MUUTA IGAL AJAL, SISESTADES PAROOLI.
MA MÕISTAN, ET VÕIN IGAL AJAL NÕUDA SELLE INFO EEMALDAMIST "{SITENAME}" LEHELT.


Vanem või hooldaja
(trüki siia oma nimi): _____________________

(allkiri): __________________

Kuupäev: _______________

------------------------------ LÕIKA SIIN ------------------------------


Kui administraator on selle faksi või postiga saanud, aktiveeritakse su konto ja sulle teatatakse sellest.

Palun ära unusta oma parooli kuna andmebaasis on see kodeeritud ja me ei saa seda sulle hiljem öelda. Kui juhtub, et unustad parooli, siis tuleb see aktiveerida samal viisil mis kontogi.

Täname, et registreerisid.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Teretulemast saidile "{SITENAME}"

{WELCOME_MSG}

COPPA lepinguga on su konto hetkel mitteaktiivne.

Palun prindi see välja, lase vanemal või hooldajal alla kirjutada ning faksi see:

{FAX_INFO}

VõI maili see:

{MAIL_INFO}

------------------------------ LÕIKA SIIN ------------------------------
Luba osa võtta lehest "{SITENAME}" - {U_BOARD}

Kasutajanimi: {USERNAME}
E-post: {EMAIL_ADDRESS}

MA OLEN OMA LAPSE ANTUD ANDMED ÜLE VAADANUD JA LUBAN LEHEKÜLJEL "{SITENAME}" NEED SALVESTADA.
MA MÕISTAN, ET SEDA INFOT SAAB MUUTA IGAL AJAL, SISESTADES PAROOLI.
MA MÕISTAN, ET VÕIN IGAL AJAL NÕUDA SELLE INFO EEMALDAMIST "{SITENAME}" LEHELT.


Vanem või hooldaja
(trüki siia oma nimi): _____________________

(allkiri): __________________

Kuupäev: _______________

------------------------------ LÕIKA SIIN ------------------------------


Kui administraator on selle faksi või postiga saanud, aktiveeritakse su konto ja sulle teatatakse.

Palun ära unusta oma parooli, kuna andmebaasis on see kodeeritud ja me ei saa seda sulle hiljem öelda. Kui juhtub, et unustad parooli, siis tuleb see aktiveerida samal viisil mis kontogi.

Täname, et registreerisid.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - E-kiri sõbralt

Tere {TO_USERNAME},

Selle e-kirja saatis "{SITENAME}" foorumilt kasutaja {FROM_USERNAME}, kes arvas, et sa võid olla huvitatud järgnevast teemast:

{TOPIC_NAME}

Leiad selle:

{U_TOPIC}

Sõnum kasutajalt {FROM_USERNAME} on ka kaasa pandud all. Seda kirja pole näinud foorumi administraatorid. Kui sa ei soovi seda e-kirja saada, võta ühendust administraatoriga: {BOARD_CONTACT}. Palun kopeeri selle kirja päis administraatoriga kontakteerumisel.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Foorumist teatamine - "{FORUM_NAME}"

Tere {USERNAME},

Saad selle teate, sest sa oled tellinud foorumi "{FORUM_NAME}"  "{SITENAME}" foorumites. Foorum on saanud uue vastuse teemas "{TOPIC_TITLE}" peale su eelmist külastust. 
Võid kasutada järgnevat linki, et minna uue vastuse juurde, rohkem ei saadeta sulle teateid selle teema kohta, kuni sa pole teemat vaadanud.

{U_NEWEST_POST}

Kui soovid teemat vaadata, vajuta järgnevat linki:
{U_TOPIC}

Kui soovid foorumit vaadata, vajuta järgnevat linki:
{U_FORUM}

Kui sa ei soovi enam seda teemat tellida, võid vajutada "Ära telli teemat" linki foorumis või vajutada järgnevale lingile:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Sa oled lisatud kasutajagruppi

Õnnitleme,

Sa oled lisatud "{GROUP_NAME}" gruppi "{SITENAME}" foorumites.
Sind lisas grupi liider või foorumi administraator, kontakteeru nendega täpsema informatsiooni saamiseks.
Võid vaadata grupi andmeid siin:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Sa oled soovitud gruppi vastu võetud

Õnnitleme,

Sa oled "{GROUP_NAME}" gruppi "{SITENAME}" foorumites vastu võetud.
Vajuta järgnevale lingile, et näha grupi liikmestaatust.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Avaldus grupiga liitumiseks
{USERNAME},

Kasutaja "{REQUEST_USERNAME}" on avaldanud soovi liituda "{GROUP_NAME}" grupiga "{SITENAME}" foorumites.
Et avaldus vastu võtta või tagasi lükata, vajuta järgnevat linki:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB on installeeritud

Palju õnne,

Sa oled oma serverisse edukalt installeerinud phpBB.

See e-kiri sisaldab informatsiooni, mida peaksid hoidma turvaliselt. Parool on andmebaasis krüpteeritud ja seda ei saa taastada, kuigi saab küsida uut parooli, mis aktiveeritakse sinu kasutajakontol määratud e-postiaadressi kasutades.

----------------------------
Kasutajanim: {USERNAME}

Foorumi URL: {U_BOARD}
----------------------------

Kasulikku infot phpBB installeerimise ja kasutamise kohta leiab docs kaustast või phpBB.ee veebilehelt - http://www.phpbb.ee
Et hoida foorumit turvalisena, on rangelt soovitatav uuendada alati tarkvara, kui uuendused on olemas.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Uuest teemast teatamine - "{FORUM_NAME}"

Tere {USERNAME},

Saad selle kirja, kuna tellid foorumit "{FORUM_NAME}" , "{SITENAME}" foorumites. Foorumisse on tehtud uus teema peale sinu viimast külastust: "{TOPIC_TITLE}".
Võid kasutada järgnevat linki foorumi vaatamiseks, sulle ei saadeta rohkem teateid, kuni sa pole külastanud foorumit

{U_FORUM}

Kui sa ei soovi rohkem seda foorumit tellida, võid vajutada "Ära telli foorumit" lingile foorumis, või vajutada järgnevale lingile:
{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Raport suletud - "{PM_SUBJECT}"

Tere, {USERNAME},

Saad selle teate, sest raport, mille esitasid privaatsõnumi "{PM_SUBJECT}" suhtes "{SITENAME}" foorumitese, on vaadatud üle moderaatori või administraatori poolt. Raport on nüüd suletud. Edasiste küsimuste tekkimise kontakteeru kasutajaga {CLOSER_NAME} privaatsõnumi teel.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Raport kustutatud - "{PM_SUBJECT}"

Hello {USERNAME},

Saad selle teate, sest raport, mille esitasid privaatsõnumi "{PM_SUBJECT}" kohta "{SITENAME}" foorumites kustutati moderaatori või administraatori poolt.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> 'Pealkiri: Postitus on heaks kiidetud - "{POST_SUBJECT}"

Tere {USERNAME},

Sulle tuli see kiri, sest sinu postitus "{POST_SUBJECT}" lehel "{SITENAME}" on heakskiidetud moderaatori või administraatori poolt.

Kui sa tahad vaadata postitust, vajuta allpool olevale lingile:
{U_VIEW_POST}

Kui sa tahad vaadata teemat, vajuta allpool olevale lingile:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> 'Pealkiri: Postitus ei ole heaks kiidetud - "{POST_SUBJECT}"

Tere {USERNAME},

Sulle tuli see kiri, sest sinu postitus "{POST_SUBJECT}" lehel "{SITENAME}" ei ole heaks kiidetud moderaatori või administraatori poolt.

Põhjus:

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
{EMAILSUBJECT:} {SUBJECT}
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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Sulle on saabunud uus privaatsõnum

Tere {USERNAME},

Sulle saatis uue privaatsõnumi kasutaja "{AUTHOR_NAME}" sinu kasutajale "{SITENAME}" foorumites järgneva pealkirjaga:

{SUBJECT}

Saad vaadata sõnumit, kasutades järgnevat linki:

{U_VIEW_MESSAGE}

Oled soovinud, et sind teavitataks uue sõnumi saabumisest. Alati võid profiili muutes ka teavitamisest keelduda.
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
	'email/profile_send_email.txt' 		=> 'Tere {TO_USERNAME},

Järgnev on e-kiri, mille saatis {FROM_USERNAME} sinule "{SITENAME}"foorumites. Kui see kiri on spämm, sisaldab sõimu või muud solvavat kommentaari,
palun võta ühendust foorumi administraatoriga järgneval aadressil:

{BOARD_CONTACT}

Kaasa ka see e-kiri (eriti päis). Vastamise aadressiks on seotud kasutaja {FROM_USERNAME} aadress.

Sulle saadetud sõnuv on järgnev
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Hello {TO_USERNAME},

Järgnev on sõnum, mille saatis {FROM_USERNAME} sinule "{SITENAME}" foorumites. Kui see kiri on spämm, sisaldab sõimu või muud solvavat kommentaari,
palun võta ühendust foorumi administraatoriga järgneval aadressil:

{BOARD_CONTACT}

Kaasa ka see e-kiri (eriti päis). Vastamise aadressiks on seotud kasutaja {FROM_USERNAME} IM aadress.

Sulle saadetud sõnuv on järgnev
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Raport suletud - "{POST_SUBJECT}"

Tere {USERNAME},

Sa saad selle kirja, sest sinu raporteeritud postitus "{POST_SUBJECT}" teemas "{TOPIC_TITLE}" lehel "{SITENAME}" võeti ette moderaatori või administraatorid poolt. Raport suleti pärast vajalikke modereerimisi. Kui sul on küsimusi, siis kontakteeru kasutaja {CLOSER_NAME} privaatsõnumi teel.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Raport kustutatud - "{POST_SUBJECT}"

Tere {USERNAME},

Sa saad selle kirja, sest sinu raporteeritud postitus "{POST_SUBJECT}" teemas "{TOPIC_TITLE}" lehel "{SITENAME}" on kustutatud moderaatori või administraatorid poolt.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> 'Pealkiri: Teema on heaks kiidetud - "{TOPIC_TITLE}"

Tere {USERNAME},

Sulle tuli see kiri, sest sinu teema "{TOPIC_TITLE}" lehel "{SITENAME}" on heaks kiidetud moderaatori või administraatori poolt.

Kui sa tahad vaadata teemat, vajuta allpool olevale lingile:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> 'Pealkiri: Teema ei ole heaks kiidetud - "{TOPIC_TITLE}"

Tere {USERNAME},

Sulle tuli see kiri, sest sinu teema "{TOPIC_TITLE}" lehel "{SITENAME}" ei ole heaks kiidetud moderaatori või administraatori poolt.

Põhjus:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Teemast teatamine - "{TOPIC_TITLE}"

Tere {USERNAME},

Saad selle teate, kuna tellid teemat "{TOPIC_TITLE}" "{SITENAME}" foorumist. See teema on saanud uue vastuse peale sinu eelmist külastust. Sa võid kasutada järgnevat linki uute vastuste vaatamiseks; selle teema kohta ei saadeta enam sulle teateid, kuni sa pole teemat külastanud.
Kui sa soovid vaadata uusimat postitust peale sinu viimast külastust, vajuta järgnevale lingile:
{U_NEWEST_POST}
Kui soovid teemat vaadata, vajuta järgnevale lingile:
{U_TOPIC}

Kui soovid foorumit vaadata, vajuta järgnevale lingile:
{U_FORUM}
Kui sa ei soovi enam tellida seda teemat, võid vajutada "Ära telli teemat" linki teemas, või vajutada järgnevat linki:
{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Sinu kasutaja on deaktiveeritud

Tere {USERNAME},

Sinu kasutaja "{SITENAME}" foorumis on deaktiveeritud, tõenäoliselt profiilis tehtud muudatuste pärast. Et aktiveerida oma kasutaja uuesti, pead vajutama järgnevale lingile:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Sinu kasutaja on deaktiveeritud

Tere {USERNAME},

Sinu kasutaja "{SITENAME}" foorumis on deaktiveeritud, tõenäoliselt profiilis tehtud muudatuste pärast. Foorumi administraator peab su kasutaja enne aktiveerima, kui saad sisse logida. Saad uue e-kirja, kui see on juhtunud.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktiveeri oma kasutaja "{SITENAME}" foorumites uuesti

Foorumi administraator nõuab, et sa aktiveeriksid oma kasutaja uuesti. Sinu kasutaja pole hetkel aktiveeritud.
Palun järgi juhiseid konto aktiveerimiseks.

Palun hoia see e-kiri alles. Sinu kasutaja andmed on järgnevad:

----------------------------
Kasutajanimi: {USERNAME}
Parool: {PASSWORD}
----------------------------

Sinu parool on meie andmebaasis krüpteeritud. Kui sa peaksid selle unustama, saad soovida uut parooli, mis aktiveeritakse nagu su kasutakontogi.

Palun külasta järgnevat linki oma konto aktiveerimiseks:

{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Aktiveeri oma kasutaja "{SITENAME}" foorumites uuesti

Foorumi administraator nõuab, et sa aktiveeriksid oma kasutaja uuesti. Sinu konto pole hetkel aktiveeritud.
Palun järgi juhiseid konto aktiveerimiseks.

Palun hoia see e-kiri alles. Sinu kasutaja andmed on järgnevad:

----------------------------
Kasutajanimi: {USERNAME}
----------------------------

Sinu parool on meie andmebaasis turvaliselt salvestatud, seega ei saa me seda ununemise korral taastada. Kui sa siiski unustad oma parooli, saad sisestada uue parooli, mis aktiveeritakse sinu kasutajakontol märgitud e-postiaadressi kasutades.

Palun külasta järgnevat linki oma konto aktiveerimiseks:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Ebaaktiivse kasutaja meeldetuletus

Tere {USERNAME},

See kiri on meeldetuletus sellest, et sinu konto "{SITENAME}" foorumites, registreerimiskuupäev{REGISTER_DATE}, on siiani aktiveerimata. Kui soovid praegu oma konto aktiveerida, saad seda teha alljärgneval lingil:
{U_ACTIVATE}

Täname registreerimast "{SITENAME}" foorumites, me ootame teie osalemist.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Tere tulemast "{SITENAME}" foorumitesse!

{WELCOME_MSG}

Palun hoia see e-kiri alles. Sinu kasutaja andmed on järgnevad:

----------------------------
Kasutajanimi: {USERNAME}
----------------------------

Sinu parool on meie andmebaasis krüpteeritud. Kui sa peaksid selle unustama, saad soovida uut parooli, mis aktiveeritakse nagu su kasutajagi

Sinu kasutaja pole hetkel aktiveeritud. Külasta järgnevat linki aktiveerimiseks:

{U_ACTIVATE}


Täname registreerimast.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Tere tulemast "{SITENAME}" foorumitesse!

{WELCOME_MSG}

Palume hoida seda e-kirja alles. Sinu kasutaja andmed on järgnevad:

----------------------------
Kasutajanimi: {USERNAME}


Foorumi URL: {U_BOARD}
----------------------------

Sinu parool on meie andmebaasis turvaliselt salvestatud, seega ei saa me seda ununemise korral taastada. Kui sa siiski unustad oma parooli, saad sisestada uue parooli, mis aktiveeritakse sinu kasutajakontol märgitud e-postiaadressi kasutades.


Täname registreerimast.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Tere tulemast "{SITENAME}" foorumitesse!

{WELCOME_MSG}

Palume seda e-kirja alles hoida. Sinu kasutaja andmed on järgnevad:

----------------------------
Kasutajanimi: {USERNAME}

Foorumi URL: {U_BOARD}
----------------------------
Oma konto aktiveerimiseks vajuta allolevale lingile:

{U_ACTIVATE}

Palun ära oma unusta oma parooli; meie andmebaasis on see krüpteritud, sellest tulenevalt me ei saa sedu sulle soovi korral tagastada.

Kui sa siiski unustada oma parooli, saad soovida uut parooli, mis aktiveeritakse samal moel nagu sinu kasutajagi.

Täname registreerimast.

{EMAIL_SIG}',
));


