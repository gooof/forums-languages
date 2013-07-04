<?php
﻿
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktivera användarkonto

Hej,

Kontot "{USERNAME}" har inaktiverats eller skapats, du bör granska användares uppgifter (om det krävs) och hantera det på lämpligt sätt.

Använd denna länk för att visa användarens profil:
{U_USER_DETAILS}

Använd denna länk för att aktivera kontot:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'Följande är ett e-postmeddelande som har skickats till dig av en administratör på "{SITENAME}". Om detta meddelande är skräppost eller innehåller stötande/kränkande material/kommentarer, kontakta diskussionsforumets administratör på följande adress: {CONTACT_EMAIL}

Inkludera hela detta meddelande (framförallt överdelen).

Meddelandet som skickades till dig följer nedan
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Kontot aktiverat

Hej {USERNAME},

Ditt konto på "{SITENAME}" har nu aktiverats, du kan nu logga in. Ditt lösenord har krypterats i vår databas och kan inte hämtas därifrån av oss. Om du glömmer ditt lösenord så kan du nollställa det och begära ett nytt till e-postadressen, som hör ihop med ditt konto.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Välkommen till "{SITENAME}"

{WELCOME_MSG}

Spara detta e-postmeddelande för framtida bruk. Dina kontouppgifter:

----------------------------
Användarnamn: {USERNAME}

Forumadress: {U_BOARD}
----------------------------

Ditt konto är för närvarande inaktiverat, administratören måste aktivera det innan du kan logga in. Det kommer att sändas ett nytt e-postmeddelande när detta har skett.

Glöm inte bort ditt lösenord eftersom det har krypterats i vår databas och vi inte kan ge dig tillbaka det. 
Skulle du glömma ditt lösenord så kan du dock begära ett nytt lösenord till e-postadressen, som hör ihop med ditt konto.

Tack för att du registrerade dig.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Välkommen till "{SITENAME}"

{WELCOME_MSG}

I enlighet med COPPA-lagen så är ditt konto för närvarande inaktiverat.

Skriv ut detta meddelande och be din förälder eller förmyndare att skriva under och datummärka det. Faxa det sedan till:

{FAX_INFO}

ELLER skicka det per post till:

{MAIL_INFO}

------------------------------ KLIPP HÄR ------------------------------
Tillåtelse att delta på "{SITENAME}" - {U_BOARD}

Användarnamn: {USERNAME}
E-postadress: {EMAIL_ADDRESS}

JAG HAR GRANSKAT INFORMATIONEN TILLHANDAHÅLLEN AV MITT BARN OCH TILLÅTER HÄRMED “{SITENAME}” ATT LAGRA DENNA INFORMATION. 
JAG ÄR MEDVETEN OM ATT DENNA INFORMATION KAN ÄNDRAS NÄR SOM HELST GENOM ATT ANGE ETT LÖSENORD. 
JAG ÄR MEDVETEN OM ATT JAG KAN BEGÄRA ATT DENNA INFORMATION TAS BORT FRÅN “{SITENAME}” NÄR SOM HELST.


Förälder eller förmyndare
(Texta ditt namn här): _____________________

(Underskrift): __________________ 

Datum: _______________

------------------------------ KLIPP HÄR ------------------------------


När administratören mottagit ovanstående formulär via fax eller vanlig post så kommer ditt konto aktiveras.

Glöm inte bort ditt lösenord eftersom det har krypterats i vår databas och vi inte kan ge dig tillbaka det. Om du skulle glömma ditt lösenord så kan du dock begära ett nytt lösenord till e-postadressen, som hör ihop med ditt konto.

Tack för att du registrerade dig.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Välkommen till "{SITENAME}"

{WELCOME_MSG}

I enlighet med COPPA-lagen så är ditt konto för närvarande inaktiverat.

Skriv ut detta meddelande och be din förälder eller förmyndare att skriva under och datera det. Faxa det sedan till:

{FAX_INFO}

ELLER skicka det per post till:

{MAIL_INFO}

------------------------------ KLIPP HÄR ------------------------------
Tillåtelse att delta på "{SITENAME}" - {U_BOARD}

Användarnamn: {USERNAME}
E-postadress: {EMAIL_ADDRESS}

JAG HAR GRANSKAT INFORMATIONEN TILLHANDAHÅLLEN AV MITT BARN OCH TILLÅTER HÄRMED "{SITENAME}" ATT LAGRA DENNA INFORMATION. 
JAG ÄR MEDVETEN OM ATT DENNA INFORMATION KAN ÄNDRAS NÄR SOM HELST GENOM ATT ANGE ETT LÖSENORD. 
JAG ÄR MEDVETEN OM ATT JAG KAN BEGÄRA ATT DENNA INFORMATION TAS BORT FRÅN "{SITENAME}" NÄR SOM HELST.


Förälder eller förmyndare
(Texta ditt namn här): _____________________

(Underskrift): __________________ 

Datum: _______________

------------------------------ KLIPP HÄR ------------------------------


När administratören mottagit ovanstående formulär via fax eller vanlig post så kommer ditt konto aktiveras.

Glöm inte bort ditt lösenord eftersom det har krypterats i vår databas och vi inte kan ge dig tillbaka det. Om du skulle glömma ditt lösenord så kan du dock begära ett nytt lösenord till e-postadressen, som hör ihop med ditt konto.

Tack för att du registrerade dig.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" — Tipsa en vän

Hej {TO_USERNAME},

Detta e-postmeddelande skickades från "{SITENAME}" av {FROM_USERNAME} som tror att du skulle vara intresserad av följande tråd:

{TOPIC_NAME}

Du kan hitta den här:

{U_TOPIC}

Ett meddelande från {FROM_USERNAME} kan också finnas nedan. Notera att detta meddelande inte har setts eller godkänts av administratörerna. Om du vill klaga på nedanstående meddelande, kontakta administratören på {BOARD_CONTACT}. Inkludera hela detta meddelande (framförallt överdelen) när du kontaktar denna adress.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Meddelande om nytt inlägg i kategori — "{FORUM_NAME}"

Hej {USERNAME},

Du får detta meddelande för att du bevakar kategorin "{FORUM_NAME}" på "{SITENAME}". Denna kategori har fått ett nytt svar i tråden "{TOPIC_TITLE}" sedan ditt senaste besök. Du kan använda följande länk för att visa det senaste olästa svaret, inga fler meddelanden kommer att skickas till dig förrän du besökt tråden.

{U_NEWEST_POST}

Om du vill besöka tråden, klicka på följande länk:
{U_TOPIC}

Om du vill besöka kategorin, klicka på följande länk:
{U_FORUM}

Om du inte längre vill bevaka denna kategori kan du antingen klicka på "Sluta bevaka denna kategori"-länken som du hittar i kategorin ovan, eller genom att klicka på följande länk:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Du har lagts till i en användargrupp

Grattis,

Du har lagts till i gruppen "{GROUP_NAME}" på "{SITENAME}".
Denna åtgärd utfördes av en gruppledare eller en administratör, kontakta någon av dem för mer information.

Du kan se information om gruppen här:
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Din ansökan har godkänts

Grattis,

Din ansökan om att bli medlem i gruppen "{GROUP_NAME}" på "{SITENAME}" har godkänts.
Klicka på följande länk för att se ditt gruppmedlemskap.

{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} En ansökan om medlemskap i din grupp har gjorts
Hej {USERNAME},
Användaren "{REQUEST_USERNAME}" har ansökt om medlemskap i gruppen "{GROUP_NAME}" som du leder på "{SITENAME}".
För att godkänna eller avslå denna ansökan, besök följande länk:
{U_PENDING}
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB installerat

Grattis,

phpBB har installerats på din server.

Detta e-postmeddelande innehåller viktig information om din installation som du bör förvara säkert. Lösenordet har krypterats i databasen och kan inte återfås, men du kan begära ett nytt lösenord till e-postadressen som hör ihop med ditt användarkonto på forumet.

----------------------------
Användarnamn: {USERNAME}

Forum-URL: {U_BOARD}
----------------------------

Användbar information om din phpBB installation kan hittas i docs-mappen i din installation, på phpBB.com\'s supportsida — http://www.phpbb.com/support/ och på svanska supporten - http://www.phpbb-se.com/forum/

För att hålla ditt diskussionsforum säkert så är det varmt rekommenderat att hålla sig uppdaterad med nya versioner av mjukvaran vilket enkelt kan göras genom att börja prenumerera på phpBB.com\'s nyhetsbrev, som finns tillgänglig på http://www.phpbb.com/support/

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Meddelande om ny tråd — "{FORUM_NAME}"

Hej {USERNAME},

Du får detta meddelande för att du bevakar kategorin "{FORUM_NAME}" på "{SITENAME}". Det har skapats en ny tråd, "{TOPIC_TITLE}", i denna kategori sedan ditt senaste besök.
Du kan använda följande länk för att besöka denna kategori, inga fler meddelanden kommer att skickas till dig förrän du besökt kategorin.

{U_FORUM}

Om du inte längre vill bevaka denna kategori kan du antingen klicka på "Sluta bevaka denna kategori"-länken som du hittar i kategorin ovan, eller genom att klicka på följande länk:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '﻿{EMAILSUBJECT:} Rapport stängd - "{PM_SUBJECT}"

Hej {USERNAME},

Du får detta meddelande eftersom rapporten du gjorde angående det privata meddelandet "{PM_SUBJECT}" på "{SITENAME}" nu har hanterats av en moderator eller administratör. Rapporten har markerats som avklarad och stängd. Kontakta {CLOSER_NAME} med ett personligt meddelande om du har några frågor.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Rapport borttagen - "{PM_SUBJECT}"

Hej {USERNAME},

Du får detta meddelande eftersom rapporten du gjorde angående det privata meddelandet "{PM_SUBJECT}" på "{SITENAME}" har tagits bort av en moderator eller administratör.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Inlägg godkänt — "{POST_SUBJECT}"

Hej {USERNAME},

Du får detta meddelande för att ditt inlägg "{POST_SUBJECT}" på "{SITENAME}" har godkänts av en moderator eller administratör.

Om du vill besöka inlägget, klicka på följande länk:
{U_VIEW_POST}

Om du vill besöka tråden, klicka på följande länk:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Inlägg avslaget — "{POST_SUBJECT}"

Hej {USERNAME},

Du får detta meddelande för att ditt inlägg "{POST_SUBJECT}" på "{SITENAME}" avslagits av en moderator eller administratör.

Följande skäl gavs:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Nytt personligt meddelande

Hej {USERNAME},

Du har fått ett nytt personligt meddelande från "{AUTHOR_NAME}" till ditt konto på "{SITENAME}" med ämnet:

{SUBJECT}

Du kan läsa meddelandet genom att klicka på följande länk:

{U_VIEW_MESSAGE}

Du har begärt att bli meddelad vid nya personliga meddelanden, men kom ihåg att du alltid kan välja att inte bli meddelad om nya meddelanden genom att ändra inställningarna i din profil.

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
Hej {TO_USERNAME},

Följande är ett e-postmeddelande som har skickats till dig från {FROM_USERNAME} via ditt konto på "{SITENAME}". Om detta meddelande är skräppost eller innehåller stötande/kränkande material/kommentarer, kontakta diskussionsforumets administratör på följande adress:

{BOARD_CONTACT}

Inkludera hela detta meddelande (framförallt överdelen) när du kontaktar denna adress. Notera att svarsadressen för detta e-postmeddelande tillhör {FROM_USERNAME}.

Meddelandet som skickades till dig följer nedan
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Hej {TO_USERNAME},

Följande är ett meddelande som har skickats till dig från {FROM_USERNAME} via ditt konto på "{SITENAME}". Om detta meddelande är skräppost eller innehåller stötande/kränkande material/kommentarer, kontakta diskussionsforumets administratör på följande adress:

{BOARD_CONTACT}

Inkludera hela detta meddelande när du kontaktar denna adress. Notera att svarsadressen för detta e-postmeddelande är satt till diskussionsforumets snabbmeddelandekonto.

Meddelandet som skickades till dig följer nedan
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Rapport stängd — "{POST_SUBJECT}"

Hej {USERNAME},

Du får detta meddelande eftersom rapporten du gjorde angående inlägget "{POST_SUBJECT}" i "{TOPIC_TITLE}" på "{SITENAME}" nu har hanterats av en moderator eller administratör. Rapporten har markerats som avklarad och stängd. Kontakta {CLOSER_NAME} med ett personligt meddelande om du har några frågor.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Rapport borttagen — "{POST_SUBJECT}"

Hej {USERNAME},

Du får detta meddelande eftersom rapporten du gjorde angående inlägget "{POST_SUBJECT}" i "{TOPIC_TITLE}" på "{SITENAME}" har tagits bort av en moderator eller administratör.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tråd godkänd — "{TOPIC_TITLE}"

Hej {USERNAME},

Du får detta meddelande för att din tråd "{TOPIC_TITLE}" på "{SITENAME}" har godkänts av en moderator eller administratör.

Om du vill besöka tråden, klicka på följande länk:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tråd avslagen — "{TOPIC_TITLE}"

Hej {USERNAME},

Du får detta meddelande för att din tråd "{TOPIC_TITLE}" på "{SITENAME}" har avslagits av en moderator eller administratör.

Följande skäl gavs:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Meddelande om svar på tråd — "{TOPIC_TITLE}"

Hej {USERNAME},

Du får detta meddelande för att du bevakar tråden "{TOPIC_TITLE}" på "{SITENAME}". Denna tråd har besvarats sedan ditt senaste besök. Du kan använda följande länk för att läsa svaren som gjorts, inga fler meddelanden kommer att skickas förrän du besökt tråden.

Om du vill visa det nyaste inlägget som gjorts sedan ditt senaste besök, klicka på följande länk:
{U_NEWEST_POST}

Om du vill besöka tråden, klicka på följande länk:
{U_TOPIC}

Om du vill besöka kategorin, klicka på följande länk:
{U_FORUM}

Om du inte längre vill bevaka denna tråd klickar du antingen på "Sluta bevaka denna tråd"-länken som du hittar ovanför tråden i länken ovan, eller genom att klicka på följande länk:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Återaktivera ditt konto

Hej {USERNAME},

Ditt konto på "{SITENAME}" har inaktiverats, förmodligen på grund av att förändringar har gjorts till din profil. För att återaktivera ditt konto måste du klicka på länken nedan:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Ditt konto har inaktiverats

Hej {USERNAME},

Ditt konto på "{SITENAME}" har inaktiverats, förmodligen på grund av ändringar som har gjorts i din profil. Administratören måste aktivera det igen innan du kan logga in. Du kommer få ett nytt meddelande när detta har skett.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivera nytt lösenord

Hej {USERNAME},

Du får detta meddelande för att du (eller någon som utger sig för att vara dig) har begärt ett nytt lösenord för ditt konto på "{SITENAME}". Om du inte begärt detta, ignorera detta meddelande. Om du fortsätter att få samma meddelande som detta, kontakta administratören.

För att kunna använda det nya lösenordet måste du aktivera det. Klicka på nedanstående länk för att göra detta.

{U_ACTIVATE}

När du aktiverat det kan du logga in med ditt nya lösenord:

Lösenord: {PASSWORD}

Du kan självklart sedan byta detta lösenord i kontrollpanelen. Kontakta administratören om några problem uppstår.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Återaktivera ditt konto på "{SITENAME}"

En administratör har begärt att ditt konto återaktiveras. Ditt konto är för närvarande inaktiverat.
Följ instruktionerna nedan för att återaktivera ditt konto.

Spara detta e-postmeddelande för framtida bruk. 

----------------------------
Ditt användarnamn: {USERNAME}
----------------------------

Ditt lösenord har krypteras i vår databas och kan inte hämtas därifrån av oss. Om du glömmer ditt lösenord så kan du nollställa det och begära ett nytt till e-postadressen, som hör ihop med ditt konto.

Klicka på följande länk för att åkteraktivera ditt konto:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Påminnelse om inaktivt konto

Hej {USERNAME},

Detta meddelande är en påminnelse om att ditt konto på "{SITENAME}", skapad {REGISTER_DATE}, är inaktivt. Om du vill aktivera detta konto, besök följande länk:

{U_ACTIVATE}

Tack för att du registrerade dig på "{SITENAME}", vi ser fram emot ditt deltagande.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Välkommen till "{SITENAME}"

{WELCOME_MSG}

Spara detta e-postmeddelande för framtida bruk. Dina kontouppgifter:

----------------------------
Användarnamn: {USERNAME}
----------------------------

Ditt lösenord har krypteras i vår databas och kan inte hämtas därifrån av oss. Om du glömmer ditt lösenord så kan du nollställa det och begära ett nytt till e-postadressen, som hör ihop med ditt konto.

Var god, besök följande länk för att aktivera ditt konto:

{U_ACTIVATE}

Tack för att du registrerade dig.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Välkommen till "{SITENAME}"

{WELCOME_MSG}

Spara detta e-postmeddelande för framtida bruk. Dina kontouppgifter:

----------------------------
Användarnamn: {USERNAME}
Forumadress: {U_BOARD}
----------------------------

Ditt lösenord har krypterats i vår databas och kan inte hämtas därifrån av oss. Om du glömmer ditt lösenord så kan du nollställa det och begära ett nytt till e-postadressen, som hör ihop med ditt konto.

Tack för att du registrerade dig.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Välkommen till "{SITENAME}"

{WELCOME_MSG}

Spara detta e-postmeddelande för framtida bruk. Dina kontouppgifter:

----------------------------
Användarnamn: {USERNAME}
Forumadress: {U_BOARD}
----------------------------

Ditt konto är för närvarande inaktiverat. Du kan inte använda det förrän du besökt följande länk:

{U_ACTIVATE}

Ditt lösenord har krypterats i vår databas och kan inte hämtas därifrån av oss. Om du glömmer ditt lösenord så kan du nollställa det och begära ett nytt till e-postadressen, som hör ihop med ditt konto.

Tack för att du registrerade dig.

{EMAIL_SIG}',
));


