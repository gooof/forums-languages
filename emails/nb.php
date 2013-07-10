<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Ny brukerkonto opprettet

Hei,

Brukerkontoen til "{USERNAME}" har enten blitt deaktivert eller nylig blitt opprettet. Du burde sjekke denne brukerens kontodetaljer, og om nødvendig aktivere brukerkontoen ved å gå til følgende nettadresse:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'Under følger en epost som er sendt til deg av en administrator fra siden "{SITENAME}". Hvis du mener at denne meldingen er spam eller på annen måte upassende kan du kontakte forumets kontaktperson på følgende e-postadresse:

{CONTACT_EMAIL}

Inkluder i så fall hele denne meldingen i henvendelsen, spesielt også emnefeltet.

Under følger meldingen:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Brukerkonto aktivert

Hei {USERNAME},

Din brukerkonto på siden "{SITENAME}" er nå blitt aktivert. Du kan logge deg inn ved å bruke brukernavnet og passordet du mottok i den forrige e-posten.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til {SITENAME} sitt forum

{WELCOME_MSG}

Vi har registrert følgende brukerdetaljer om deg:

----------------------------
Brukernavn: {USERNAME}
Passord: {PASSWORD}
----------------------------

Din brukerkonto er fortsatt inaktiv; en forumadministrator må aktivere den før du kan logge inn. Du vil motta en ny epost når kontoen er aktivert.

Av hensyn til din sikkerhet er ditt passord lagret i kryptert versjon i databasen, og vi har derfor ikke mulighet til å se det. Derfor har vi heller ikke mulighet til å gi deg det om du skulle miste det, så derfor ber vi deg ta vare på denne eposten på en sikker måte. Om du likevel skulle miste passordet har du mulighet til å få generert et nytt passord som blir aktivert på samme måte som dette, og deretter sendes til deg på e-post.

Takk for at du registrerte deg.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til forumet på siden {SITENAME}

{WELCOME_MSG}

I henhold til COPPA-lovgivningen er din brukerkonto inntill videre inaktiv.

Vennligst skriv ut denne meldingen og få foreldre/en foresatt til å signere med navn og dato. Deretter fakser du den til:

{FAX_INFO}

Eller sender en innskannet kopi til:

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
Permission to Participate at {SITENAME}

Username: {USERNAME}
Email: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO {SITENAME} TO STORE THIS INFORMATION. 
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD. 
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM {SITENAME} AT ANY TIME.


Parent or Guardian 
(print your name here): _____________________

(sign here): __________________ 

Date: _______________

------------------------------ CUT HERE ------------------------------

(Meldingen er på engelsk siden denne lovgivningen ikke gjelder for norske sider.)


Så fort en administrator har mottatt skjemaet, vil din brukerkonto bli aktivert.

Ikke glem ditt passord, siden det har blitt kryptert i vår database og dermed ikke kan hentes ut av oss. Hvis du skulle glemme det vil det være mulig å få generert et nytt som må aktiveres på samme måte som dette.

Takk for at du registrerte deg.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til forumet på siden {SITENAME}

{WELCOME_MSG}

I henhold til COPPA-lovgivningen er din brukerkonto inntill videre inaktiv.

Vennligst skriv ut denne meldingen og få foreldre/en foresatt til å signere med navn og dato. Deretter fakser du den til:

{FAX_INFO}

Eller sender en innskannet kopi til:

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
Permission to Participate at {SITENAME}

Username: {USERNAME}
Email: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO {SITENAME} TO STORE THIS INFORMATION. 
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD. 
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM {SITENAME} AT ANY TIME.


Parent or Guardian 
(print your name here): _____________________

(sign here): __________________ 

Date: _______________

------------------------------ CUT HERE ------------------------------

(Meldingen er på engelsk siden denne lovgivningen ikke gjelder for norske sider.)


Så fort en administrator har mottatt skjemaet, vil din brukerkonto bli aktivert.

Ikke glem ditt passord, siden det har blitt kryptert i vår database og dermed ikke kan hentes ut av oss. Hvis du skulle glemme det vil det være mulig å få generert et nytt som må aktiveres på samme måte som dette.

Takk for at du registrerte deg.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> 'Hei {TO_USERNAME},

Denne e-posten er sendt fra "{SITENAME}" av {FROM_USERNAME}, som tror du kan være interresert i følgende emne:

{TOPIC_NAME}

Adressen er:

{U_TOPIC}

En melding fra {FROM_USERNAME} kan også være inkludert under. Denne meldingen har ikke blitt sett eller godkjent av administratorer. Hvis innholdet i meldingen ikke er i tråd med brukerbetingelsene, kontakt administrator: {BOARD_CONTACT}. Siter meldingshodene til denne e-posten dersom du kontakter denne adressen.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Nytt svar på emne i forumet {FORUM_NAME}

Hei {USERNAME},

Du mottar denne meldingen fordi du har abonnert på epostvarsler ved nye innlegg i forumet "{FORUM_NAME}" på siden {SITENAME}. Det har blitt lagt inn et nytt svar på emnet "{TOPIC_TITLE}" siden sist du besøkte forumet. Linken under leder til emnet der du kan lese de siste svarene. Først etter at du har gjort det vil nye e-postvarsler sendes ut.

{U_NEWEST_POST}

Hvis du ikke lenger ønsker å abonnere på e-postvarsler for dette forumet kan du enten melde deg av varslingsabonnementet ved å klikke på linken i forumet nevnt over, eller bruke følgende link for å melde deg av direkte:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Medlemskap i ny gruppe

Gratulerer,

Du har blitt lagt til i gruppen "{GROUP_NAME}" på siden {SITENAME}.
Innmeldingen er foretatt av en gruppemoderator eller forumadministrator, kontakt en av dem for mer informasjon.

Du kan se på gruppeinformasjonen her:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Søknad om gruppemedlemskap innvilget

Gratulerer,

Din søknad om medlemskap i gruppen "{GROUP_NAME}" på siden {SITENAME} har blitt innvilget.
Gå til følgende nettadresse for å se gruppeinformasjonen:

{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Søknad om gruppemedlemskap mottatt

Hei {USERNAME},

En bruker har lagt inn en søknad om å bli medlem av gruppen "{GROUP_NAME}" på siden {SITENAME}. 
Denne gruppen er du gruppemoderator for, og du kan dermed innvilge eller avslå søknaden via denne nettadressen:

{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB installert

Gratulerer,

Du har nå foretatt en vellykket installasjon av phpBB på din server.

Denne e-posten inneholder viktig informasjon om ditt passord, så sørg for å oppbevare den sikkert om du sparer på den. Passordet er kryptert i databasen og kan dermed ikke framskaffes om du skulle miste det. Likevel kan et nytt passord genereres og sendes til denne epostadressen om du skulle miste dette.

----------------------------
Brukernavn: {USERNAME}
Passord: {PASSWORD}

Forumets nettadresse: {U_BOARD}
----------------------------

Ytterligere informasjon om din phpBB-installasjon kan enten finnes i mappen "docs" som fulgte med nedlastingen, eller på phpBBs nettsider - http://www.phpbb.com/support/ eller http://www.phpbb.no/ for norsk support.

Vi anbefaler at du følger med på oppdateringer av phpBB, og installerer disse snarest mulig for å holde ditt forum sikkert. Informasjon om oppdateringer vil umiddelbart komme i administrasjonspanelet, dessuten kan du melde deg på en e-postliste ved å følge den første linken over.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Nytt emne i forumet {FORUM_NAME}

Hei {USERNAME},

Du mottar denne meldingen fordi du har abonnert på epostvarsler ved nye innlegg i forumet "{FORUM_NAME}" på siden {SITENAME}. Det har blitt lagt inn et nytt emne med tittelen "{TOPIC_TITLE}" siden sist du besøkte forumet. Linken under leder til det nye emnet. Først etter at du har lest dette emnet vil nye e-postvarsler sendes ut.

{U_NEWEST_POST}

Hvis du ikke lenger ønsker å abonnere på epostvarsler for dette forumet kan du enten melde deg av varslingsabonnementet ved å klikke på linken i forumet nevnt over, eller bruke følgende link for å melde deg av direkte:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Report closed - "{PM_SUBJECT}"

Hello {USERNAME},

You are receiving this notification because the report you filed regarding the private message "{PM_SUBJECT}" at "{SITENAME}" has been tended to by a moderator or administrator. The report is now closed. If you have further questions, please contact {CLOSER_NAME} by private message.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Report deleted - "{PM_SUBJECT}"

Hello {USERNAME},

You are receiving this notification because the report you filed regarding the private message "{PM_SUBJECT}" at "{SITENAME}" was deleted by a moderator or administrator.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Innlegg godkjent - {POST_SUBJECT}

Hei {USERNAME},

Du mottar denne eposten fordi ditt innlegg "{POST_SUBJECT}" på siden {SITENAME} har blitt godkjent av en moderator eller administrator.

Hvis du vil gå direkte til innlegget ditt, gå til følgende nettadresse:
{U_VIEW_POST}

Hvis du vil gå til første side i det aktuelle emnet, gå til denne nettadressen:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Innlegg ikke godkjent - {POST_SUBJECT}

Hei {USERNAME},

Du mottar denne eposten fordi ditt innlegg "{POST_SUBJECT}" på siden {SITENAME} ikke ble godkjent av en moderator eller administrator.

Følgende begrunnelse ble gitt for avslaget:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Du har mottatt en ny personlig melding

Hei {USERNAME},

Du har mottatt en ny personlig melding fra "{AUTHOR_NAME}" til din brukerkonto på siden "{SITENAME}". Meldingen har følgende emne:

{SUBJECT}

Du kan lese denne meldingen ved å klikke på følgende link:

{U_INBOX}

Du mottar denne e-posten fordi du har valgt å motta slike varsler i profilinnstillingene dine. Hvis du ikke lenger ønsker å motta slike varsler kan du deaktivere dette i profilen din.

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
	'email/profile_send_email.txt' 		=> 'Hei {TO_USERNAME},

Denne e-posten ble sendt til deg av brukeren {FROM_USERNAME} via din profil på siden {SITENAME}. Husk at denne meldingen er sendt direkte fra brukeren til deg, og den har derfor ikke blitt sjekket av forumadministrasjonen. Hvis du mener at denne meldingen er spam eller på annen måte upassende kan du kontakte forumets kontaktperson på følgende e-postadresse:

{BOARD_EMAIL}

Inkluder i så fall hele meldingen, også emnefeltet. Merk deg at svaradressen på denne e-posten har blitt satt til e-postadressen til brukeren {FROM_USERNAME}.

Meldingen som ble sendt til deg følger under:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Hei {TO_USERNAME},

Denne meldingen ble sendt til deg av brukeren {FROM_USERNAME} via din profil på siden {SITENAME}. Husk at denne meldingen er sendt direkte fra brukeren til deg, og den har derfor ikke blitt sjekket av forumadministrasjonen. Hvis du mener at denne meldingen er spam eller på annen måte upassende kan du kontakte forumets kontaktperson på følgende e-postadresse:

{BOARD_EMAIL}

Inkluder i så fall hele meldingen. Vennligst merk deg at svaradressen på denne e-posten har blitt satt til forumets IM-adresse.

Meldingen som ble sendt til deg følger under:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Rapport behandlet - {POST_SUBJECT}

Hei {USERNAME},

Du mottar denne e-posten fordi rapporten du sendte inn om innlegget "{POST_SUBJECT}" i emnet "{TOPIC_TITLE}" på siden {SITENAME} er blitt behandlet av en moderator eller administrator. Rapporten ble etterpå stengt. Hvis du har ytterligere spørsmål kan du kontakte personen som stengte rapporten, {CLOSER_NAME}, via en privat melding på forumet.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Rapport behandlet - {POST_SUBJECT}

Hei {USERNAME},

Du mottar denne e-posten fordi rapporten du sendte inn om innlegget "{POST_SUBJECT}" i emnet "{TOPIC_TITLE}" på siden {SITENAME} er blitt slettet av en moderator eller administrator.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Emne godkjent - {TOPIC_TITLE}

Hei {USERNAME},

Du mottar denne e-posten fordi emnet med tittelen "{TOPIC_TITLE}" du skrev på siden {SITENAME} har blitt godkjent av en moderator eller administrator.

Bruk følgende link forå se på emnet:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Emne ikke godkjent - {TOPIC_TITLE}

Hei {USERNAME},

Du mottar denne e-posten fordi emnet med tittelen "{TOPIC_TITLE}" du skrev på siden {SITENAME} ikke ble godkjent av en moderator eller administrator.

Følgende begrunnelse ble oppgitt for avslaget:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Varsel om svar på emne - {TOPIC_TITLE}

Hei {USERNAME},

Du mottar denne e-posten fordi du abonnerer på e-postvarsler for emnet "{TOPIC_TITLE}" på siden {SITENAME}. Det har blitt postet et svar i dette emnet siden sist du besøkte forumet. Linken under tar deg til emnet hvor du kan lese svaret. Vi gjør oppmerksom på at du ikke vil motta flere varsler om svar i dette emnet før du har lest alle de uleste svarene i dette emnet.

Hvis du vil se det nyeste svaret siden sist du leste emnet, gå til følgende nettadresse:
{U_NEWEST_POST}

Hvis du vil gå til førstesiden av emnet, gå til denne nettadressen:
{U_TOPIC}

Hvis du ikke lenger ønsker å motta e-postvarsler for dette emnet kan du enten bruke linken som finnes på bunnen av emnet, eller gå til følgende nettadresse for å melde deg av umiddelbart:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reaktiver din brukerkonto

Hei {USERNAME},

Din brukerkonto på siden "{SITENAME}" har blitt deaktivert, mest sannsynlig på grunn av endringer som er gjort i dine profildetaljer. For å reaktivere brukerkontoen din trenger du bare å gå til nettadressen under.

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Din brukerkonto er blitt deaktivert

Hei {USERNAME},

Din brukerkonto på siden "{SITENAME}" har blitt deaktivert, sannsynligvis grunnet endringer som er gjort i profilen. En administrator på siden må aktivere kontoen igjen før du kan logge deg inn. Du vil få beskjed når dette er gjort via en ny e-post.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Din brukerkonto må reaktiveres grunnet nytt passord

Hei {USERNAME},

Du mottar denne e-posten fordi du (eller noen som utgir seg for å være deg) har bedt om å få et nytt passord tilsendt til denne e-postadressen for din brukerkonto på siden {SITENAME}. Hvis det ikke er du som har bedt om dette kan du trygt ignorere denne e-posten og fortsette å bruke ditt gamle passord. Skulle du få flere slike e-poster uten å ha bedt om det kan du kontakte forumets administrator.

For å kunne bruke det nye passordet må du aktivere det. Det gjør du ved å gå til nettadressen under:

{U_ACTIVATE}

Når du har gjort dette vil du kunne logge deg inn med følgende passord:

Passord: {PASSWORD}

Du kan selvsagt forandre dette passordet selv i brukerkontrollpanelet. Hvis du har noen problemer kan du spørre forumets administrator.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reaktiver brukerkontoen din på "{SITENAME}" - {U_BOARD}

En forumadministrator krever at brukerkontoen din reaktiveres. Kontoen er nå inaktiv.
Utfør følgende for å reaktivere kontoen:

Behold denne e-posten i tilfelle informasjonen kan komme til nytte. Her følger kontoinformasjonen din:

----------------------------
Brukernavn: {USERNAME}
----------------------------

Passordet ditt er kryptert i vår database. Skulle du glemme det, kan du be om et nytt som vil bli aktivert på samme måte som denne brukerkontoen.

Gå til følgende nettadresse for å reaktivere brukerkontoen din:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Påminnelse om manglende brukerkontoaktivering

Hei {USERNAME},

Den {REGISTER_DATE} registrerte du en ny brukerkonto på siden "{SITENAME}". Du har ennå ikke aktivert denne kontoen, noe du må gjøre før du kan logge deg inn og bruke den. 

Gå til nettadressen under for å aktivere brukerkontoen:

{U_ACTIVATE}

Takk for din registrering, vi ser fram til din deltakelse.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til forumet på siden {SITENAME}

{WELCOME_MSG}

Under følger informasjon om din brukerkonto:

----------------------------
Brukernavn: {USERNAME}
----------------------------

Ditt passord har blitt kryptert i vår database. Skulle du miste det har du mulighet for å be om å få et nytt tilsendt, som da må aktiveres på samme måtte som dette passordet ble aktivert.

Din brukerkonto er fortsatt inaktiv. Du kan aktivere den ved å gå til følgende nettadresse:

{U_ACTIVATE}

Takk for at du registrerte deg.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Velkommen til forumet på siden {SITENAME}

{WELCOME_MSG}

Under følger informasjon om din brukerkonto:

----------------------------
Brukernavn: {USERNAME}
Passord: {PASSWORD}
----------------------------

Ditt passord har blitt kryptert i vår database. Skulle du miste det har du mulighet til å be om å få et nytt tilsendt, som da må aktiveres på samme måtte som dette passordet ble aktivert.

Takk for at du registrerte deg.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til forumet på siden {SITENAME}

{WELCOME_MSG}

Under følger informasjon om din brukerkonto:

----------------------------
Brukernavn: {USERNAME}
Passord: {PASSWORD}
----------------------------

Din brukerkonto er fortsatt inaktiv. Du kan aktivere den ved å klikke på følgende link:

{U_ACTIVATE}

Ditt passord har blitt kryptert i vår database, og vi kan derfor verken se det eller gi det til deg om du skulle glemme det. Skulle du likevel miste det har du mulighet for å be om å få et nytt tilsendt, som da må aktiveres på samme måtte som dette passordet ble aktivert.

Takk for at du registrerte deg.

{EMAIL_SIG}',
));


