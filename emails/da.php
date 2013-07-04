<?php
﻿
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktiver brugerkonto

Hej

Kontoen, der ejes af "{USERNAME}" er netop oprettet eller blevet deaktiveret. Du bedes kontrollere oplysningerne om denne bruger (hvis krævet) og aktivere den via disse links.

Brugerens profil: {U_USER_DETAILS}

Aktivering af kontoen: {U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Nedenstående email er sendt til dig fra en administrator på "{SITENAME}". Finder du indholdet af emailen anstødende eller på anden måde upassende bedes du kontakte boardets webmaster på denne adresse:

{CONTACT_EMAIL}

Inkluder hele emailen (specielt overskrifterne).

Indholdet af emailen er som følger:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Konto aktiveret

Hej {USERNAME}

Din konto på "{SITENAME}" er nu aktiveret af en administrator. Du kan logge ind.

Dit kodeord er gemt krypteret i vores database og kan derfor ikke genfindes eller genskabes. Skulle du glemme eller miste kodeordet, kan det nulstilles ved at anvende den emailadresse du anvendte ved din tilmelding, i kombination med dit brugernavn.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til "{SITENAME}"

{WELCOME_MSG}

Gem denne email til fremtidig brug. Din kontoinformation er som følger:

----------------------------
Brugernavn: {USERNAME}

Boardets URL: {U_BOARD}
----------------------------

Din konto er på nuværende tidspunkt ikke aktiveret, den afventer godkendelse fra en boardadministrator, før du kan logge ind. Du modtager endnu en email, når dette er sket.

Dit kodeord er gemt krypteret og sikkert i vores database, og kan derfor ikke genfindes. Glemmer du kodeordet, er du istand til at nulstille det ved brug af emailadressen knyttet til din konto.

Tak fordi du tilmeldte dig hos os.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til "{SITENAME}"

{WELCOME_MSG}

I overensstemmelse med COPPA lovgivning er din konto på nuværende tidspunkt ikke aktiv.

Udskriv venligst denne besked og få dine forældre eller værge til at underskrive og datere den. Fax den derefter til: {FAX_INFO}

ELLER send den til: {MAIL_INFO}

------------------------------ KLIP HER ------------------------------
Tilladelse til at deltage på "{SITENAME}" - {U_BOARD}

Brugernavn: {USERNAME}
Email: {EMAIL_ADDRESS}

JEG HAR LÆST INFORMATIONERNE MODTAGET FRA MIT BARN, OG GIVER HERMED "{SITENAME}" TILLADELSE TIL AT OPBEVARE DISSE INFORMATIONER. 
JEG FORSTÅR, AT DISSE INFORMATIONER KAN ÆNDRES NÅR SOM HELST VED INDTASTNING AF ET KODEORD.
JEG FORSTÅR, AT JEG NÅR SOM HELST KAN BEDE OM AT FÅ DISSE INFORMATIONER FJERNET FRA "{SITENAME}".


Forældre eller værge
(skriv dit navn her): _____________________

(underskriv her): __________________ 

Dato: _______________

------------------------------ KLIP HER ------------------------------


Din konto vil blive aktiveret, så snart administratoren har modtaget den ovenstående formular via fax eller traditionel post.

Dit kodeord er gemt krypteret og sikkert i vores database, og kan derfor ikke genfindes. Glemmer du kodeordet, er du istand til at nulstille det ved brug af emailadressen knyttet til din konto.

Tak fordi du tilmeldte dig hos os.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til "{SITENAME}"

{WELCOME_MSG}

I overensstemmelse med COPPA lovgivning er din konto på nuværende tidspunkt ikke aktiv.

Udskriv venligst denne besked og få dine forældre eller værge til at underskrive og datere den. Fax den derefter til: {FAX_INFO}

ELLER send den til: {MAIL_INFO}

------------------------------ KLIP HER ------------------------------
Tilladelse til at deltage på "{SITENAME}" - {U_BOARD}

Brugernavn: {USERNAME}
Email: {EMAIL_ADDRESS}

JEG HAR LÆST INFORMATIONERNE MODTAGET FRA MIT BARN, OG GIVER HERMED "{SITENAME}" TILLADELSE TIL AT OPBEVARE DISSE INFORMATIONER. 
JEG FORSTÅR, AT DISSE INFORMATIONER KAN ÆNDRES NÅR SOM HELST VED INDTASTNING AF ET KODEORD.
JEG FORSTÅR, AT JEG NÅR SOM HELST KAN BEDE OM AT FÅ DISSE INFORMATIONER FJERNET FRA "{SITENAME}".


Forældre eller værge
(skriv dit navn her): _____________________

(underskriv her): __________________

Dato: _______________

------------------------------ KLIP HER ------------------------------


Din konto vil blive aktiveret, så snart administratoren har modtaget den ovenstående formular via fax eller traditionel post.

Dit kodeord er gemt krypteret og sikkert i vores database, og kan derfor ikke genfindes. Glemmer du kodeordet, er du istand til at nulstille det ved brug af emailadressen knyttet til din konto.

Tak fordi du tilmeldte dig hos os.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - Email en ven

Hej {TO_USERNAME}

Denne email er blevet sendt fra "{SITENAME}" af {FROM_USERNAME}, som tænkte du kunne være interesseret i emnet: {TOPIC_NAME}

Emnet findes via dette link: {U_TOPIC}

En meddelelse fra {FROM_USERNAME} kan også være medtaget nedenfor. Bemærk venligst at denne meddelelse ikke er blevet set eller godkendt af boardets administratorer. Ønsker du at klage over denne email, bedes du kontakte boardets administratorer på {BOARD_EMAIL}. Citer venligst meddelelsens overskrift i forbindelse med indsendelse af klagen.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Nyt indlæg i forummet - "{FORUM_NAME}"

Hej {USERNAME}

Du overvåger ovennævnte forum på "{SITENAME}". Der er indsendt et nyt indlæg i emnet "{TOPIC_TITLE}" siden dit seneste besøg. Der fremsendes ikke flere beskeder om forummet, før du har besøgt det. Benyt nedenstående link hvis du vil se:

Seneste indlæg i forummet: {U_NEWEST_POST}

Emnet: {U_TOPIC}

Forummet: {U_FORUM}

Ønsker du ikke længere at få besked om nye indlæg i forummet, stoppes overvågningen ved at klikke på følgende link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Du er optaget som medlem af ny brugergruppe

Tillykke, du er nu blevet medlem af brugergruppen "{GROUP_NAME}" på "{SITENAME}".
Denne handling blev udført af en gruppeleder eller en boardadministrator, kontakt dem for mere information.

Du kan se information om din gruppe her: {U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Din anmodning gruppemedlemskab er godkendt

Tillykke, din anmodning om medlemskab af gruppen "{GROUP_NAME}" på "{SITENAME}" er blevet godkendt.

Du kan se information om din gruppe her: {U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Anmodning gruppemedlemsskab

Hej {USERNAME}

Brugeren "{REQUEST_USERNAME}" anmoder om medlemskab af gruppen "{GROUP_NAME}", som du administrerer på "{SITENAME}".

For at godkende eller afslå denne anmodning om gruppemedlemsskab, bedes du klikke på linket: {U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB installeret

Tillykke, du har med succes installeret phpBB på din server.

Denne email indeholder vigtig information om din installation og bør opbevares sikkert. Dit kodeord er gemt og krypteret sikkert i databasen, og kan derfor ikke genfindes. Glemmer du kodeordet, kan det nulstilles ved brug af emailadressen knyttet til din konto.

----------------------------
Brugernavn: {USERNAME}

Boardets URL: {U_BOARD}
----------------------------

Værdifuld information om phpBB-softwaren findes i docs-mappen i din installation og i supportforummet på www.phpbb.com - http://www.phpbb.com/support/ .

For at holde dit boardet sikkert og sikret, anbefales det kraftigt, at du holder boardet opdateret med de seneste softwarefrigivelser. Til orientering er en mailingliste tilgængelig på ovennævnte URL, ved at tilmelde sig den vil du modtage en email når nye frigivelser er tilgængelige.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Nyt emne i forummet - "{FORUM_NAME}"

Hej {USERNAME}

Du overvåger ovennævnte forum på "{SITENAME}". Siden dit seneste besøg er emnet "{TOPIC_TITLE}" oprettet. Du modtager ikke flere beskeder vedrørende dette forum, før du har besøgt det. Brug nedenstående link til forummet:

{U_FORUM}

Ønsker du ikke længere at få besked om nye emner i forummet, stoppes overvågningen ved at klikke på følgende link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Rapport lukket - "{PM_SUBJECT}"

Hej {USERNAME}

Din rapport vedrørende den private besked "{PM_SUBJECT}", du modtog på "{SITENAME}", er blevet behandlet af en redaktør eller administrator. Rapporten er nu lukket. Har du spørgsmål i den forbindelse, bedes du sende en privat besked til {CLOSER_NAME}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Rapport slettet - "{PM_SUBJECT}"

Hej {USERNAME},

Din rapport vedrørende den private besked "{PM_SUBJECT}", modtaget på "{SITENAME}", blev slettet af en redaktør eller administrator.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Indlæg godkendt - "{POST_SUBJECT}"

Hej {USERNAME}

Dit indlæg "{POST_SUBJECT}" på "{SITENAME}" er blevet godkendt af en redaktør eller administrator. Benyt nedenstående link hvis du vil se:

Indlægget: {U_VIEW_POST}

Emnet: {U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Indlæg afvist - "{POST_SUBJECT}"

Hej {USERNAME}

Dit indlæg "{POST_SUBJECT}" på "{SITENAME}" er blevet afvist af en redaktør eller administrator.

Følgende begrundelse blev givet for afvisningen:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Ny privat besked er ankommet

Hej {USERNAME}

Du har modtaget en privat besked fra "{AUTHOR_NAME}" til din konto på "{SITENAME}" med følgende titel:

{SUBJECT}

Læs beskeden ved at klikke på dette link:

{U_VIEW_MESSAGE}

Du har anmodet om at blive informeret ved nye private beskeder. Denne automatik kan fravælges i brugerkontrolpanelet under boardindstillingerne.

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
Hej {TO_USERNAME}

Denne email er sendt til dig fra {FROM_USERNAME} via din konto på "{SITENAME}". Finder du indholdet af emailen anstødende eller på anden måde upassende, kan boardets administratorer kontaktes på denne adresse:

{BOARD_CONTACT}

Inkluder hele emailen (specielt overskrifterne). Bemærk venligst, at afsenderadressen på denne email tilhører {FROM_USERNAME}.

Indholdet af emailen er som følger:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Hej {TO_USERNAME}

Beskeden er afsendt via din konto på "{SITENAME}". Afsender er boardets jabberkonto, og kan derfor ikke besvares. Finder du beskeden generende eller upassende, kan du rapportere den til boardets administratorer på denne emailadresse: {BOARD_CONTACT}. Kopier den fulde besked ind i emailen.
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Rapport lukket - "{POST_SUBJECT}"

Hej {USERNAME}

Den rapport du har indgivet for indlægget "{POST_SUBJECT}" i "{TOPIC_TITLE}" på "{SITENAME}" er blevet behandlet af en redaktør eller administrator. Rapporten blev herefter lukket. Hvis du har yderligere spørgsmål, bedes du kontakte {CLOSER_NAME} via en privat besked.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Rapport slettet - "{POST_SUBJECT}"

Hej {USERNAME}

Den rapport du har indgivet for indlægget "{POST_SUBJECT}" i "{TOPIC_TITLE}" på "{SITENAME}" er blevet slettet af en redaktør eller af en administrator.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Emne godkendt - "{TOPIC_TITLE}"

Hej {USERNAME}

Dit emne "{TOPIC_TITLE}" på "{SITENAME}"  er blevet godkendt af en redaktør eller administrator.

Klik på følgende link, for at se emnet: {U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Emne afvist - "{TOPIC_TITLE}"

Hej {USERNAME}

Dit emne "{TOPIC_TITLE}" på "{SITENAME}" er blevet afvist af en redaktør eller administrator.

Følgende begrundelse blev givet for afvisningen:

{REASON}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Nyt indlæg i emnet - "{TOPIC_TITLE}"

Hej {USERNAME}

Du overvåger ovennævnte emne på "{SITENAME}", hvor der er indsendt indlæg siden dit seneste besøg. Du modtager ikke flere beskeder vedrørende dette emne, før du har besøgt det. Benyt nedenstående link hvis du vil se:

Seneste indlæg i emnet: {U_NEWEST_POST}

Emnet: {U_TOPIC}

Forummet: {U_FORUM}

Ønsker du ikke længere at få besked om nye indlæg i emnet, stoppes overvågningen ved at klikke på følgende link:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Genaktiver din konto

Hej {USERNAME},

Din konto på "{SITENAME}" er blevet deaktiveret. Sandsynligvis fordi der er foretaget ændringer i din profil. For at genaktivere din konto er du nødt til at klikke på følgende link:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Din konto er blevet deaktiveret

Hej {USERNAME}

Din konto på "{SITENAME}" er blevet deaktiveret, mest sandsynligt på grund af ændringer foretaget i din profil. Boardets administrator er nødt til at aktivere den før du kan logge ind. Du vil modtage endnu en besked når dette er sket.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivering af nyt kodeord

Hej {USERNAME}

Du modtager denne meddelelse fordi du (eller nogen der lader som om, de er dig) har bedt om at få et nyt kodeord tilsendt til din konto på "{SITENAME}". Har du ikke bedt om et nyt kodeord, kan du blot ignorere denne besked, og undlade at aktivere det nye kodeord. Bliver du ved med at modtage meddelelser herom, bedes du kontakte boardets administrator.

Dit nye kodeord aktiveres ved at klikke på linket: {U_ACTIVATE}

Når denne aktivering er udført, kan du logge ind med dette nye kodeord: {PASSWORD}

Du kan selvfølgelig selv ændre ovennævnte nye kodeord via brugerkontrolpanelets profilindstillinger. Kontakt venligst boardets administratior, hvis du oplever problemer med det.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Genaktiver din konto på "{SITENAME}"

En boardadministrator beder om at du genaktiverer af din konto, den er derfor ikke aktiv i øjeblikket. Klik derfor venligst på nedenstående link for at genaktivere din konto:

{U_ACTIVATE}

Gem denne email til fremtidig brug. Din kontoinformation er følgende:

----------------------------
Brugernavn: {USERNAME}
----------------------------

Dit kodeord er gemt krypteret og sikkert i vores database, og kan derfor ikke genfindes. Glemmer du kodeordet, er du istand til at nulstille det ved brug af emailadressen knyttet til din konto.

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Påmindelse om inaktiv konto

Hej {USERNAME},

Du modtager denne påmindelse, fordi den konto du oprettede {REGISTER_DATE} på "{SITENAME}" stadig er inaktiv. Klik venligst på nedenstående link hvis du ønsker at aktivere kontoen.

{U_ACTIVATE}

Tak for din tilmelding på "{SITENAME}", vi ser frem til din deltagelse.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til "{SITENAME}"

{WELCOME_MSG}

Gem denne email til fremtidig brug. Din kontoinformation er følgende:

----------------------------
Brugernavn: {USERNAME}
----------------------------

Dit kodeord er gemt krypteret og sikkert i vores database, og kan derfor ikke genfindes. Glemmer du kodeordet, er du istand til at nulstille det ved brug af emailadressen knyttet til din konto.

Klik venligst på nedenstående link for at aktivere din konto:

{U_ACTIVATE}

Tak fordi du tilmeldte dig.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Velkommen til "{SITENAME}"

{WELCOME_MSG}

Gem denne email til fremtidig brug. Din kontoinformation er følgende:

----------------------------
Brugernavn: {USERNAME}

Boardets URL: {U_BOARD}
----------------------------

Dit kodeord er gemt krypteret og sikkert i vores database, og kan derfor ikke genfindes. Glemmer du kodeordet, er du istand til at nulstille det ved brug af emailadressen knyttet til din konto.

Tak for din tilmelding.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Velkommen til "{SITENAME}"

{WELCOME_MSG}

Gem denne email til fremtidig brug. Din kontoinformation er følgende:

----------------------------
Brugernavn: {USERNAME}

Boardets URL: {U_BOARD}
----------------------------

Klik venligst på nedenstående link for at aktivere din konto: 

{U_ACTIVATE}

Dit kodeord er gemt krypteret og sikkert i vores database, og kan derfor ikke genfindes. Glemmer du kodeordet, er du istand til at nulstille det ved brug af emailadressen knyttet til din konto.

Tak for din tilmelding.

{EMAIL_SIG}',
));


