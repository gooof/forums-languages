<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Cont de utilizator nou

Salut,

Contul deţinut de "{USERNAME}" a fost dezactivat sau creat recent, ar fi indicat să verificaţi detaliile acestui utilizator (dacă este necesar), tratând problema cu importanţa cuvenită.

Folosiţi această legătură pentru a vedea profilul utilizatorului:
{U_USER_DETAILS}

Folosiţi această legătură pentru a activa contul:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Următorul mesaj v-a fost trimis de către un administrator al "{SITENAME}". Dacă acest mesaj este spam, conţine comentarii abuzive sau are vreun conţinut ofensator, vă rugăm să contactaţi webmaster-ul forumului la următoarea adresă:

{CONTACT_EMAIL}

Vă rugăm să includeţi acest email (mai ales header-ele).

Urmează mesajul care vă este adresat:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Contul activat

Salut {USERNAME},

Contul dumneavoastră de pe "{SITENAME}" a fost activat de către un administrator. Acum puteţi să vă autentificaţi.

Parola a fost stocată în siguranţă în baza noastră de date şi nu poate fi extrasă. În cazul în care este uitată, veţi putea să o resetaţi folosind adresa de email asociată cu contul propriu.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bine aţi venit la "{SITENAME}"

{WELCOME_MSG}

Vă rugăm sa păstraţi acest mesaj. Informaţia pentru contul dumneavoastră:

-----------------------------
Nume utilizator  : {USERNAME}

Adresa forumului : {U_BOARD}
-----------------------------

Contul dumneavoastră este momentan inactiv şi va fi aprobat de către un administrator înainte să vă puteţi autentifica. Un alt mesaj va fi trimis când se va întâmpla acest lucru.

Parola a fost stocată în siguranţă în baza noastră de date şi nu poate fi extrasă. În cazul în care este uitată, veţi putea să o resetaţi folosind adresa de email asociată cu contul propriu.

Va mulţumim pentru înregistrare.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bine aţi venit la "{SITENAME}"

{WELCOME_MSG}

Conform actului COPPA, contul dumneavoastră este deocamdată inactiv.

Vă rugăm să tipăriţi acest mesaj şi să cereţi părintelui sau tutorelui dumneavoastră să-l semneze şi să-l dateze. Apoi trimiteţi-l prin fax la:

{FAX_INFO}

Sau prin e-mail la:

{MAIL_INFO}

------------------------------ TAIE AICI ------------------------------
Permisiune pentru participare la "{SITENAME}" - {U_BOARD}

Nume utilizator: {USERNAME}
Email: {EMAIL_ADDRESS}

AM REVĂZUT INFORMAŢIILE OFERITE DE COPILUL MEU ŞI PRIN ACEASTA ÎI PERMIT "{SITENAME}" SĂ STOCHEZE ACEASTĂ INFORMAŢIE.
SUNT DE ACORD CU FAPTUL CĂ ACEASTĂ INFORMAŢIE POATE FI SCHIMBATĂ ORICÂND PRIN INTRODUCEREA UNEI PAROLE.
AM INŢELES CĂ POT CERE CA ACEASTĂ INFORMAŢIE SĂ FIE ŞTEARSĂ ORICÂND DIN BAZA DE DATE A "{SITENAME}".


Parinte sau tutore 
(numele): _____________________

(semnătura): __________________ 

Data: _______________

------------------------------ TAIE AICI ------------------------------


Îndată ce administratorul va primi formularul de mai sus prin fax sau email, contul dumneavoastră va fi activat.

Parola a fost stocată în siguranţă în baza noastră de date şi nu poate fi extrasă. În cazul în care este uitată, veţi putea să o resetaţi folosind adresa de email asociată cu contul propriu.

Vă mulţumim pentru înregistrare.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bine aţi venit la "{SITENAME}"

{WELCOME_MSG}

Conform actului COPPA, contul dumneavoastră este deocamdată inactiv.

Vă rugăm să tipăriţi acest mesaj şi să cereţi părintelui sau tutorelui dumneavoastră să-l semneze şi să-l dateze. Apoi trimiteţi-l prin fax la:

{FAX_INFO}

Sau prin e-mail la:

{MAIL_INFO}

------------------------------ TAIE AICI ------------------------------
Permisiune pentru participare la "{SITENAME}" - {U_BOARD}

Nume utilizator: {USERNAME}

Email: {EMAIL_ADDRESS}

AM REVĂZUT INFORMAŢIILE OFERITE DE COPILUL MEU ŞI PRIN ACEASTA ÎI PERMIT "{SITENAME}" SĂ STOCHEZE ACEASTĂ INFORMAŢIE.
SUNT DE ACORD CU FAPTUL CĂ ACEASTĂ INFORMAŢIE POATE FI SCHIMBATĂ ORICÂND PRIN INTRODUCEREA UNEI PAROLE.
AM INŢELES CĂ POT CERE CA ACEASTĂ INFORMAŢIE SĂ FIE ŞTEARSĂ ORICÂND DIN BAZA DE DATE A "{SITENAME}".


Părinte sau tutore 
(numele): _____________________

(semnătura): __________________ 

Data: _______________

------------------------------ TAIE AICI ------------------------------


Îndată ce administratorul va primi formularul de mai sus prin fax sau email, contul dumneavoastră va fi activat.

Parola a fost stocată în siguranţă în baza noastră de date şi nu poate fi extrasă. În cazul în care este uitată, veţi putea să o resetaţi folosind adresa de email asociată cu contul propriu.

Vă mulţumim pentru înregistrare.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" — E-mail către un prieten

Salut {TO_USERNAME},

Acest email a fost transmis de pe "{SITENAME}" de către {FROM_USERNAME} care crede că sunteţi interesat de următorul topic:

{TOPIC_NAME}

Îl găsiţi la:

{U_TOPIC}

Un mesaj de la {FROM_USERNAME} poate fi inclus mai jos. Vă rugăm să reţineţi că acest mesaj nu a fost văzut sau acceptat de către administratorul forumului. Dacă vreţi să reclamaţi ceva în legătură cu acest e-mail, vă rugăm să contactaţi administratorul forumului la {BOARD_CONTACT}. Vă rugăm să includeţi header-ul masajului când contactaţi administratorul.

----------

{MESSAGE}

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Notificare de răspuns la mesaj în forumul - "{FORUM_NAME}"

Salut {USERNAME},

Primiţi această notificare deoarece urmăriţi forumul "{FORUM_NAME}" pe "{SITENAME}". Acest forum a primit un nou răspuns la topicul "{TOPIC_TITLE}" de la ultima vizită. Puteţi să folosiţi legătura de mai jos pentru a vedea ultimul răspuns necitit. Nu vă vom mai anunţa de răspunsuri noi până nu vizitaţi topicul.

{U_NEWEST_POST}

Dacă doriţi să vizualizaţi acest subiect, apăsaţi pe următorul link:
{U_TOPIC}

Daca doriţi să vizualizaţi forumul, apăsaţi pe următorul link:
{U_FORUM}

Dacă nu mai doriţi să urmăriţi acest forum, puteţi să folosiţi legatura "Opreşte urmărirea acestui forum" care poate fi găsită în forumul de mai sus sau folosiţi următoarea legătură:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Aţi fost adăugat în acest grup

Felicitări,

Aţi fost adăugat grupului "{GROUP_NAME}" de pe "{SITENAME}".
Acţiunea a fost efectuată de către liderul de grup sau de administrator, contactaţi-i pentru mai multe informaţii.

Puteţi vizualiza informaţia grupului dumneavoastră aici:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Cererea dumneavoastră de aderare a fost aprobată

Felicitări,

Cererea dumneavoastră de a vă alătura grupului "{GROUP_NAME}" pe "{SITENAME}" a fost aprobată.
Folosiţi legătura de mai jos pentru a vedea informaţiile referitoare la apartenenţa la grup.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} O cerere pentru aderare la grupul dumneavoastră

Dragă {USERNAME},

Utilizator "{REQUEST_USERNAME}" a cerut să se alăture grupului "{GROUP_NAME}" pe care îl moderaţi pe "{SITENAME}".
Pentru a aproba sau respinge cererea lui, vă rugăm să vizitaţi următoarea legătură:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB a fost instalat

Felicitări,

Aţi instalat cu succes phpBB pe serverul dumneavoastră.

Acest email conţine informaţii importante despre instalare şi trebuie păstrate pentru a fi folosite ca referinţă. Parola a fost păstrată în siguranţă în baza noastră de date şi nu poate fi extrasă. În cazul în care este uitată, veţi putea să o resetaţi folosind adresa de email asociată cu contul propriu.

-----------------------------
Nume utilizator  : {USERNAME}

Adresa forumului : {U_BOARD}
-----------------------------

Informaţii folositoare despre instalarea phpBB pot fi găsite în dosarul docs sau pe paginile de suport de la phpBB.com — http://www.phpbb.com/support/ şi phpBB.ro - http://www.phpbb.ro 

Pentru a menţine în condiţii de siguranţă forumul, vă recomandăm să rămâneţi la curent cu actualizările software. Pentru mai multă uşurinţă, o lista de mail este disponibilă la adresa de mai sus.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Notificare subiect nou - "{FORUM_NAME}"

Salut {USERNAME},

Primiţi acest mesaj deoarece urmăriţi forumul "{FORUM_NAME}" la "{SITENAME}". Acest forum are un nou subiect de la ultima dumneavoastră vizită, "{TOPIC_TITLE}". Puteţi să vizualizaţi forumul urmând legătura de mai jos. Nu vă vom mai trimite notificări până nu vizitaţi forumul.

{U_FORUM}

Dacă nu mai doriţi să urmăriţi acest forum, puteţi să folosiţi legătura "Dezabonare forum" din forumul de mai sus sau folosiţi următoarea legătură:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> 'Subiect: Raport închis - "{PM_SUBJECT}"

Salut {USERNAME},

Primiţi aceasta notificare datorita raportului pe care l-aţi trimis privind mesajul privat "{PM_SUBJECT}" la "{SITENAME}" ce a fost evaluat de către un moderator sau administrator. Raportul este închis acum. Dacă aveţi alte întrebări, vă rugăm să luaţi legătura cu {CLOSER_NAME} prin intermediul unui mesaj privat.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> 'Subiect: Raport şters - "{PM_SUBJECT}"

Salut {USERNAME},

Primiţi aceasta notificare datorita raportului pe care l-aţi trimis privind mesajul privat "{PM_SUBJECT}" la "{SITENAME}" a fost şters de către un moderator sau administrator.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Mesaj aprobat — "{POST_SUBJECT}"

Salut {USERNAME},

Primiţi această notificare pentru că mesajul "{POST_SUBJECT}" la "{SITENAME}" a fost aprobat de un moderator sau administrator.

Dacă doriţi să vizualizaţi mesajul, apăsaţi pe următorul link:
{U_VIEW_POST}

Dacă doriţi să vizualizaţi subiectul, apăsaţi pe următorul link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Mesaj dezaprobat — "{POST_SUBJECT}"

Salut {USERNAME},

Primiţi această notificare pentru că mesajul dumneavoastră "{POST_SUBJECT}" la "{SITENAME}" a fost dezaprobat de un moderator sau administrator.

A fost dezaprobat din următorul motiv:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Aţi primit un nou mesaj privat

Salut {USERNAME},

Aţi primit un nou mesaj privat de la "{AUTHOR_NAME}" în contul dumneavoastră de la "{SITENAME}" cu următorul subiect: 

{SUBJECT}  

Puteţi să vedeţi noul dumneavoastră mesaj privat folosind următoarea legătură:

{U_VIEW_MESSAGE}

Aţi cerut să fiţi anunţat dacă se întâmplă acest lucru, nu uitaţi că puteţi întotdeauna să alegeţi să nu fiţi anunţat dacă primiţi mesaje noi prin schimbarea setării corespunzătoare din profilul dumneavoastră.

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
Salut {TO_USERNAME},

Urmează un e-mail trimis de către {FROM_USERNAME} prin intermediul contului dumneavoastră de la "{SITENAME}". Dacă acest mesaj este spam, conţine comentarii abuzive sau are vreun conţinut ofensator, vă rugăm să contactaţi webmaster-ul forumului la următoarea adresă:

{BOARD_CONTACT}

Vă rugăm să includeţi acest e-mail (mai ales header-ele). Adresa de răspuns pentru acest e-mail a fost setată către {FROM_USERNAME}.

Urmează mesajul care vă este adresat
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Salut {TO_USERNAME},

Urmează un mesaj trimis de către {FROM_USERNAME} prin intermediul contului dumneavoastră pe "{SITENAME}". Dacă acest mesaj este spam, conţine comentarii abuzive sau are vreun conţinut ofensator, vă rugăm să contactaţi webmaster-ul forumului la următoarea adresă:

{BOARD_CONTACT}

Vă rugăm să includeţi tot mesajul. Adresa de expeditor a fost setată la contul de IM precizat în forum.

Urmează mesajul care vă este adresat
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Raport închis - "{POST_SUBJECT}"

Salut {USERNAME},

Primiţi acest mesaj deoarece raportul pe care l-aţi trimis relativ la mesajul "{POST_SUBJECT}" din subiectul "{TOPIC_TITLE}" aflat în "{SITENAME}" a fost procesat de către un moderator sau un administrator. Ulterior raportul a fost închis. Dacă mai aveţi întrebări contactaţi {CLOSER_NAME} folosind un mesaj personal.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Raport şters - "{POST_SUBJECT}"

Salut {USERNAME},

Primiţi această notificare pentru că raportul dumneavoastră pe care l-ţi completat la mesajul "{POST_SUBJECT}" în "{TOPIC_TITLE}" la "{SITENAME}" a fost şters de un moderator sau administrator.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Subiect aprobat - "{TOPIC_TITLE}"

Salut {USERNAME},

Primiţi această notificare pentru că subiectul dumneavoastră "{TOPIC_TITLE}" la "{SITENAME}" a fost aprobat de un moderator sau administrator.

Dacă doriţi să vizualizaţi subiectul, apăsaţi pe link-ul următor:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Subiect neaprobat - "{TOPIC_TITLE}"

Salut {USERNAME},

Primiţi această notificare pentru că subiectul dumneavoastră "{TOPIC_TITLE}" la "{SITENAME}" nu a fost aprobat de un moderator sau administrator.

Nu a fost aprobat din următorul motiv:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Notificare de răspuns la subiectul - "{TOPIC_TITLE}"

Salut {USERNAME},

Primiţi acest mesaj deoarece urmăriţi pentru răspunsuri subiectul "{TOPIC_TITLE}" la "{SITENAME}". Acest subiect a primit un răspuns de la ultima dumneavoastră vizită. Puteţi să vizualizaţi răspunsurile urmând legătura de mai jos. Nu vă vom mai trimite notificări până nu vizitaţi subiectul.

Dacă doriţi să vizualizaţi mesajele scrise de la ultima dumneavoastră vizită, urmaţi legătura de mai jos:
{U_NEWEST_POST}

Dacă doriţi să vizualizaţi subiectul, urmaţi legătura de mai jos:
{U_TOPIC}

Dacă doriţi să vizualizaţi forumul, urmaţi legătura de mai jos:
{U_FORUM}

Dacă nu mai doriţi să urmăriţi acest subiect, puteţi să folosiţi legătura "Opreşte urmărirea acestui subiect" care poate fi găsită în josul topicului de mai sus sau folosiţi următoarea legătură:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reactivaţi-vă contul

Salut {USERNAME},

Contul dumneavoastră de la "{SITENAME}" a fost dezactivat, cel mai probabil datorită unor modificări făcute profilului dumneavoastră. Pentru a vă reactiva contul, vă rugăm să folosiţi legătura de mai jos:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Contul dumneavoastră a fost dezactivat

Salut {USERNAME},

Contul dumneavoastră de la "{SITENAME}" a fost dezactivat, cel mai probabil datorită unor modificări făcute profilului dumneavoastră. Va fi nevoie ca administratorul forumului să vi-l activeze înainte să vă puteţi autentifica. Veţi primi un alt mesaj când se va întampla acest lucru.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Activarea parolei noi

Salut {USERNAME},

Aţi primit acestă notificare deoarece dumneavoastră (sau cineva pretinzând a fi dumneavoastră) aţi(a) cerut să vă fie trimisă o nouă parolă pentru contul dumneavoastră de la "{SITENAME}". Dacă nu aţi cerut acest lucru, atunci vă rugăm să-l ignoraţi, iar dacă il primiţi de mai multe ori, vă rugăm să contactaţi administratorul forumului.

Pentru a vă folosi noua parolă, trebuie s-o activaţi folosind legătura de mai jos:

{U_ACTIVATE}

Dacă totul este în regulă, veţi putea sa vă autentificaţi folosind următoarea parolă:

Parola: {PASSWORD}

Evident, puteţi schimba această parolă din pagina de profil. Dacă întâmpinaţi dificultăţi, vă rugăm să contactaţi administratorul forumului.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reactivarea contului de la "{SITENAME}"

Administratorul forumului solicită reactivarea contului. Contul dumneavoastră este momentan inactiv.
Vă rugăm să urmaţi paşii de mai jos pentru reactivarea contului.

Vă rugăm să păstraţi acest e-mail în înregistrările personale. Informaţia despre contul dumneavoastră este:

----------------------------
Nume de utilizator: {USERNAME}
----------------------------

Parola a fost păstrată în siguranţă în baza noastră de date şi nu poate fi extrasă. În cazul în care este uitată, veţi putea să o resetaţi folosind adresa de email asociată cu contul propriu.

Vă rugăm să vizitaţi linkul următor pentru reactivarea contului:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Reamintire cont inactiv

Salut {USERNAME},

Acest mesaj este trimis pentru a vă reaminti că aveţi un cont inactiv la "{SITENAME}" creat în data de {REGISTER_DATE}. Dacă doriţi să activaţi acest cont, vă rugăm să folosiţi următoarea legătură:

{U_ACTIVATE}

Vă mulţumim că v-aţi înregistrat la "{SITENAME}", aşteptăm în continuare participarea dumneavoastră.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bine aţi venit la "{SITENAME}"

{WELCOME_MSG}

Vă rugăm să păstraţi acest e-mail. Informaţia pentru contul dumneavoastră urmează aici:

----------------------------
Utilizator: {USERNAME}
----------------------------

Parola a fost păstrată în siguranţă în baza noastră de date şi nu poate fi extrasă. În cazul în care este uitată, veţi putea să o resetaţi folosind adresa de email asociată cu contul propriu.

Dacă doriţi să activaţi acest cont, vă rugăm să folosiţi următoarea legătură:

{U_ACTIVATE}


Mulţumim pentru înregistrare.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Bine aţi venit la "{SITENAME}"

{WELCOME_MSG}

Vă rugăm să păstraţi acest e-mail. Informaţia pentru contul dumneavoastră urmează aici:

-----------------------------
Nume utilizator  : {USERNAME}
{PASSWORD_EXTRA_LINE}
Adresa forumului : {U_BOARD}
-----------------------------

Parola a fost stocată în siguranţă în baza noastră de date şi nu poate fi extrasă. În cazul în care este uitată, veţi putea să o resetaţi folosind adresa de email asociată cu contul propriu.

Vă mulţumim pentru înregistrare.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bine aţi venit la "{SITENAME}"

{WELCOME_MSG}

Vă rugăm să păstraţi acest e-mail. Informaţia pentru contul dumneavoastră urmează aici:

-----------------------------
Nume utilizator  : {USERNAME}
{PASSWORD_EXTRA_LINE}
Adresa forumului : {U_BOARD}
-----------------------------

Dacă doriţi să activaţi acest cont, vă rugăm să folosiţi următoarea legătură:

{U_ACTIVATE}

Parola a fost stocată în siguranţă în baza noastră de date şi nu poate fi extrasă. În cazul în care este uitată, veţi putea să o resetaţi folosind adresa de email asociată cu contul propriu.

Vă mulţumim pentru înregistrare.

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
