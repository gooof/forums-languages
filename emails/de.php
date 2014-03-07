<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Benutzerkonto aktivieren

Hallo,

das Benutzerkonto von „{USERNAME}“ wurde deaktiviert oder neu erstellt. Du solltest ggf. die Angaben des Benutzers prüfen und das Konto entsprechend behandeln:

Verwende diesen Link, um das Profil des Benutzers zu betrachten:
{U_USER_DETAILS}

Verwende diesen Link, um das Benutzerkonto zu aktivieren:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'Newsletter von {SITE_URL}
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}


Besuche das Forum: http://{SITE_URL}

--------- 
Die folgende Nachricht wurde dir von einem Administrator von „{SITENAME}“ gesendet. Wenn diese Nachricht Werbung, Beleidigungen oder anderen anstößigen Inhalt enthält, kannst du die Board-Administration unter folgender Adresse erreichen:
{CONTACT_EMAIL}
Füge deiner Nachricht bitte die vollständige E-Mail (insbesondere die Nachrichtenkopfzeilen) bei. 

-- 
Service powered by www.phpBB8.de
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Benutzerkonto aktiviert

Hallo {USERNAME},

dein Benutzerkonto auf „{SITENAME}“ wurde von einem Administrator aktiviert. Du kannst dich nun anmelden.

Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Bitte bewahre diese E-Mail in deinen Unterlagen auf. Die Daten deines Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}

Board-URL:    {U_BOARD}
----------------------------

Dein Account ist derzeit inaktiv und muss erst durch einen Administrator des Boards aktiviert werden, bevor du ihn verwenden kannst. Es wird eine weitere E-Mail versandt, sobald dies geschehen ist.

Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für deine Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/birthday_email.txt' 		=> '{EMAILSUBJECT:} Herzlichen Glückwunsch zum Geburtstag!

Liebes Mitglied {USERNAME},
 
es gibt da bei uns im Forum ein Gerücht: 
 
Du hast heute Geburtstag?
 
Wir wünschen Dir von ganzem Herzen alles erdenklich Gute für Dein neues Lebensjahr. Lass es Dir heute mal so richtig gut gehen und Dich verwöhnen.
Es braucht gar nicht viel, um diesen Tag zu einem richtigen Glückstag zu machen.

Als kleine Überraschung wartet hier ein nettes Geburtstags-Ständchen auf Dich. Wir hoffen, Dir damit ein Lächeln schenken zu können.
{U_BOARD}/forum.php?happy=card

Herzliche Grüße
{SITENAME}
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/calendar_new_event.txt' 		=> '{EMAILSUBJECT:} Ein neuer Termin wurde in den Kalender eingetragen

Hallo {USERNAME},

Der Termin "{EVENT_SUBJECT}" wurde im Kalender eingetragen.

Verwende diesen Link, um den Kalender zu betrachten:
{U_CALENDAR}

Verwende diesen Link, um den Termin zu betrachten:
{U_EVENT}

Verwende diesen Link, wenn du keine weiteren emails über neue Kalender-Termine erhalten möchtest:
{U_UNWATCH_CALENDAR}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/calendar_updated_event.txt' 		=> '{EMAILSUBJECT:} Ein Termin im Kalender wurde geändert

Hallo {USERNAME},

Der Termin "{EVENT_SUBJECT}" wurde im Kalender geändert.

Verwende diesen Link, um den Termin zu betrachten:
{U_EVENT}

Verwende diesen Link, wenn du keine weiteren emails über diesen Kalender-Termin erhalten möchtest:
{U_UNWATCH_EVENT}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/calendar_updated_reply.txt' 		=> '{EMAILSUBJECT:} Es gibt einen neuen oder geänderten Kalender-Kommentar

Hallo {USERNAME},

Es gibt einen neuen oder geänderten Kommentar zum Kalender-Termin "{EVENT_SUBJECT}"

Verwende diesen Link, um den Termin zu betrachten:
{U_EVENT}

Verwende diesen Link, wenn du keine weiteren emails über diesen Kalender-Termin erhalten möchtest:
{U_UNWATCH_EVENT}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/contact.txt' 		=> '{EMAILSUBJECT:} [Kontaktformular] {SUBJECT}

Guten Tag {ADM_USERNAME},

es wurde eine Nachricht im Kontaktformular deines Forums eingeben.


Datum: {DATE}
Name: {USERNAME}
Email: {USER_EMAIL}
Grund: {REASON}

Nachricht:
---------------------------------------------------------

{MESSAGE}

---------------------------------------------------------
Kontaktformular von "{SITENAME}":
{SITEURL}


IP des Absenders: {USER_IP}

Spam? Teile uns dies bitte im Support Forum www.phpbb9.de mit.
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/contact_no_reason.txt' 		=> '{EMAILSUBJECT:} [Kontaktformular] {SUBJECT}

Guten Tag {ADM_USERNAME},

es wurde eine Nachricht im Kontaktformular deines Forums eingeben.


Datum: {DATE}
Name: {USERNAME}
Email: {USER_EMAIL}
Grund: Es wurde kein Grund angegeben

Nachricht:
---------------------------------------------------------

{MESSAGE}

---------------------------------------------------------
Kontaktformular von "{SITENAME}":
{SITEURL}


IP des Absenders: {USER_IP}

Spam? Teile uns dies bitte im Support Forum www.phpbb9.de mit.
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Gemäß den Regelungen des COPPA ist dein Benutzerkonto derzeit inaktiv.

Bitte drucke diese Nachricht aus und lass sie von einem Elternteil oder einem Erziehungsberechtigten unterzeichnen und datieren. Sende sie anschließend per Fax an:

{FAX_INFO}

oder sende sie per Post an:

{MAIL_INFO}

-------------------------- HIER AUSSCHNEIDEN -------------------------
Genehmigung der Teilnahme auf „{SITENAME}“  — {U_BOARD}

Benutzername: {USERNAME}
E-Mail-Adresse: {EMAIL_ADDRESS}

ICH HABE DIE ANGABEN MEINES KINDES ÜBERPRÜFT UND GENEHMIGE „{SITENAME}“ HIERMIT, DIESE INFORMATIONEN ZU SPEICHERN.
ICH WEISS, DASS DIESE INFORMATIONEN JEDERZEIT NACH EINGABE EINES PASSWORTS GEÄNDERT WERDEN KÖNNEN.
ICH WEISS, DASS ICH JEDERZEIT VON „{SITENAME}“ VERLANGEN KANN, DASS DIESE INFORMATIONEN ENTFERNT WERDEN.


Elternteil oder Erziehungsberechtigter 
(Vollständiger Name): _____________________

(Unterschrift): __________________ 

Datum: _______________

-------------------------- HIER AUSSCHNEIDEN -------------------------


Sobald der Administrator dieses Formular per Fax oder Post erhalten hat, wird er deinen Account aktivieren.

Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für deine Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Gemäß den Regelungen des COPPA ist dein Benutzerkonto derzeit inaktiv.

Bitte drucke diese Nachricht aus und lass sie von einem Elternteil oder einem Erziehungsberechtigten unterzeichnen und datieren. Sende sie anschließend per Fax an:

{FAX_INFO}

oder sende sie per Post an:

{MAIL_INFO}

-------------------------- HIER AUSSCHNEIDEN -------------------------
Genehmigung der Teilnahme auf „{SITENAME}“ — {U_BOARD}

Benutzername: {USERNAME}
E-Mail-Adresse: {EMAIL_ADDRESS}

ICH HABE DIE ANGABEN MEINES KINDES ÜBERPRÜFT UND GENEHMIGE „{SITENAME}“ HIERMIT, DIESE INFORMATIONEN ZU SPEICHERN.
ICH WEISS, DASS DIESE INFORMATIONEN JEDERZEIT NACH EINGABE EINES PASSWORTS GEÄNDERT WERDEN KÖNNEN.
ICH WEISS, DASS ICH JEDERZEIT VON „{SITENAME}“ VERLANGEN KANN, DASS DIESE INFORMATIONEN ENTFERNT WERDEN.


Elternteil oder Erziehungsberechtigter 
(Vollständiger Name): _____________________

(Unterschrift): __________________ 

Datum: _______________

-------------------------- HIER AUSSCHNEIDEN -------------------------


Sobald der Administrator dieses Formular per Fax oder Post erhalten hat, wird er deinen Account aktivieren.

Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für deine Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} „{SITENAME}“ — Information über ein Thema

Hallo {TO_USERNAME},

diese Nachricht wurde dir von „{SITENAME}“ geschickt, weil {FROM_USERNAME} glaubt, dass du an folgendem Thema interessiert sein könntest:

{TOPIC_NAME}

Du kannst das Thema mit folgendem Link erreichen:

{U_TOPIC}

{FROM_USERNAME} kann dir auch eine Nachricht geschickt haben, die du unten finden kannst. Bitte beachte, dass diese Nachricht nicht durch einen Administrator des Boards geprüft wurde. Wenn du dich über den Erhalt dieser E-Mail beschweren möchtest, wende dich bitte an die Board-Administration unter {BOARD_CONTACT}. Bitte füge die kompletten Nachrichtenkopfzeilen bei, wenn du dich an diese Adresse wendest.

----------

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/footb_board_remember.txt' 		=> '
Hallo {SITENAME},
Folgende Tipper haben eine Erinnerungs-Mail erhalten:

{REMEMBER_LIST}


Hier geht es zur {SITENAME}: {U_BOARD}.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/footb_send_remember.txt' 		=> '
Hallo Tipper {USERNAME},

du hast bislang noch nicht den {MATCHDAY}. Spieltag getippt.
Bitte tipp bis zum {LEAGUE} Abgabetermin {DELIVERY} Uhr.

 
Hier geht es zur {SITENAME}: {U_BOARD}.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/footb_send_remember_all.txt' 		=> '
Hallo Tipper {USERNAME},

bitte vergiss nicht den {MATCHDAY}. Spieltag zu tippen.
Bitte tipp bis zum {LEAGUE} Abgabetermin {DELIVERY} Uhr.

Hier geht es zur {SITENAME}: {U_BOARD}.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neue Antwort — „{FORUM_NAME}“

Hallo {USERNAME},

du erhältst diese Benachrichtigung, weil du das Forum „{FORUM_NAME}“ auf „{SITENAME}“ beobachtest. Seit deinem letzten Besuch wurde in diesem Forum eine neue Antwort auf das Thema „{TOPIC_TITLE}“ erstellt. Du kannst den folgenden Link benutzen, um den ersten ungelesenen Beitrag anzusehen. Du erhältst keine weitere Benachrichtigung, bis du das Thema besucht hast.

{U_NEWEST_POST}

Wenn du das Thema ansehen möchtest, verwende folgenden Link:
{U_TOPIC}

Wenn du das Forum ansehen möchtest, verwende folgenden Link:
{U_FORUM}

Wenn du das Forum nicht länger abonnieren möchtest, verwende entweder den Link „Forum nicht mehr abonnieren“ in dem entsprechenden Forum oder besuche folgenden Link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Du wurdest in eine Benutzergruppe aufgenommen

Herzlichen Glückwunsch,

du wurdest in die Benutzergruppe „{GROUP_NAME}“ auf „{SITENAME}“ aufgenommen.
Dieser Vorgang wurde von einem Gruppenleiter oder einem Administrator durchgeführt. Kontaktiere ihn, wenn du weitere Informationen erhalten möchtest.

Du kannst deine Gruppendaten hier anzeigen:
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Dein Mitgliedsantrag wurde bestätigt

Herzlichen Glückwunsch,

dein Antrag auf Mitgliedschaft in der Benutzergruppe „{GROUP_NAME}“ auf „{SITENAME}“ wurde bestätigt.
Besuche folgenden Link, um deine Mitgliedschaft anzuzeigen:

{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Eine Anfrage auf Gruppenmitgliedschaft wurde gestellt

Hallo {USERNAME},

der Benutzer „{REQUEST_USERNAME}“ auf „{SITENAME}“ hat einen Antrag auf Mitgliedschaft in der Gruppe „{GROUP_NAME}“ gestellt, die du verwaltest.
Um diese Anfrage zu bestätigen oder abzulehnen, besuche den folgenden Link:

{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB erfolgreich installiert

Herzlichen Glückwunsch!

Du hast phpBB erfolgreich auf deinem Server installiert.

Diese E-Mail enthält wichtige Informationen über deine Installation, die du gut aufbewahren solltest. Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

----------------------------
Benutzername: {USERNAME}

URL des Boards: {U_BOARD}
----------------------------

Hilfreiche Informationen über die phpBB-Software können im docs-Ordner deiner Installation und auf der Website der phpBB Group — http://www.phpbb.com/support/ — gefunden werden. Eine deutschsprachige Anlaufstelle findest du unter http://www.phpbb.de/.

Um die Sicherheit deines Boards zu gewährleisten, empfehlen wir dir dringend, es immer auf der aktuellen Version zu halten. Damit du entsprechende Informationen zeitnah erhältst, kann auf den oben genannten Seite ein Newsletter abonniert werden.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/newcomment_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neuen Kommentar — „{IMAGE_NAME}“

Hallo {USERNAME},

du erhältst diese Benachrichtigung, weil du das Bild „{IMAGE_NAME}“ auf „{SITENAME}“ beobachtest. Seit deinem letzten Besuch wurde zu diesem Bild ein neuer Kommentar abgegeben. Du kannst den folgenden Link benutzen, um den Kommentar zu lesen.

{U_IMAGE}

Wenn du das Bild nicht länger beobachten möchtest, verwende den Link „Bild nicht mehr beobachten“ im obigen Link.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/newimage_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neues Bild — „{ALBUM_NAME}“

Hallo {USERNAME},

du erhältst diese Benachrichtigung, weil du das Album „{ALBUM_NAME}“ auf „{SITENAME}“ beobachtest. Seit deinem letzten Besuch wurde in diesem Album ein neues Bild hochgeladen: „{IMAGE_NAME}“. Du kannst den folgenden Link benutzen, um das Album anzusehen.

{U_ALBUM}

Wenn du das Album nicht länger beobachten möchtest, verwende den Link „Album nicht mehr beobachten“ im obigen Link.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neues Thema — „{FORUM_NAME}“

Hallo {USERNAME},

du erhältst diese Benachrichtigung, weil du das Forum „{FORUM_NAME}“ auf „{SITENAME}“ beobachtest. Seit deinem letzten Besuch wurde in diesem Forum ein neues Thema erstellt: „{TOPIC_TITLE}“. Du kannst den folgenden Link benutzen, um das Forum anzusehen. Du erhältst keine weitere Benachrichtigung, bis du das Forum besucht hast.

{U_FORUM}

Wenn du das Forum nicht länger abonnieren möchtest, verwende entweder den Link „Forum nicht mehr abonnieren“ in dem entsprechenden Forum oder besuche folgenden Link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Meldung geschlossen — „{PM_SUBJECT}“

Hallo {USERNAME},

du erhältst diese Nachricht, weil deine Meldung zur Privaten Nachricht „{PM_SUBJECT}“ auf „{SITENAME}“ von einem Moderator oder Administrator bearbeitet wurde. Die Meldung wurde anschließend geschlossen. Wenn du weitere Fragen dazu hast, kannst du {CLOSER_NAME} mit einer Privaten Nachricht kontaktieren.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Meldung gelöscht — „{PM_SUBJECT}“

Hallo {USERNAME},

du erhältst diese Nachricht, weil deine Meldung zur Privaten Nachricht „{PM_SUBJECT}“ auf „{SITENAME}“ von einem Moderator oder Administrator gelöscht wurde.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Beitrag freigegeben — „{POST_SUBJECT}“

Hallo {USERNAME},

du erhältst diese Nachricht, weil dein Beitrag „{POST_SUBJECT}“ auf „{SITENAME}“ durch einen Moderator oder Administrator freigegeben wurde.

Wenn du den Beitrag ansehen möchtest, verwende folgenden Link:
{U_VIEW_POST}

Wenn du das Thema ansehen möchtest, verwende folgenden Link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Beitragsfreigabe verweigert — „{POST_SUBJECT}“

Hallo {USERNAME},

du erhältst diese Nachricht, weil deinem Beitrag „{POST_SUBJECT}“ auf „{SITENAME}“ von einem Moderator oder Administrator die Freigabe verweigert wurde.

Der folgende Grund wurde dafür angegeben:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_forum.txt' 		=> '{EMAILSUBJECT:} Forum Benachrichtigung - {FORUM_NAME}

Hallo {USERNAME},

{AUTHOR} hat im Forum "{FORUM_NAME}" eine neue Antwort seit deinem letzten Besuch erstellt. Du kannst das ganze Forum durch einen Klick auf den folgenden Link besuchen: {U_FORUM}

***************
Thema: {TOPIC_TITLE}
Nachricht:
{MESSAGE}
***************

{VISIT_MSG}Wenn du das Forum nicht mehr abonnieren willst, dann klicke den "nicht mehr abonnieren" Link im obigen Forum, oder klicke folgenden Link:
{U_STOP_WATCHING_FORUM}
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_newtopic.txt' 		=> '{EMAILSUBJECT:} Neues Thema Benachrichtigung - {FORUM_NAME}

Hallo {USERNAME},

{AUTHOR} hat im Forum "{FORUM_NAME}" ein neues Thema seit deinem letzten Besuch erstellt. Du kannst das Forum durch einen Klick auf den folgenden Link besuchen: {U_FORUM}

***************
Thema: {TOPIC_TITLE}
Nachricht:
{MESSAGE}
***************

{VISIT_MSG}Wenn du das Forum nicht mehr abonnieren willst, dann klicke den "nicht mehr abonnieren" Link im obigen Forum, oder klicke folgenden Link:
{U_STOP_WATCHING_FORUM}
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_privmsg.txt' 		=> 'Subject: Neue private Nachricht: {SUBJECT}

Hallo {USERNAME}, 

du hast unter deinem Konto auf "{SITENAME}" eine neue private Nachricht erhalten. Du kannst die Nachricht durch einen Klick auf den folgenden Link lesen und beantworten: {U_INBOX}
_____________________________________________________________________

Von: {AUTHOR_NAME}
Betreff: {SUBJECT}
Nachricht:
{MESSAGE}
_____________________________________________________________________

Du hast darum gebeten, dass du über neue Persönliche Mitteilungen benachrichtigt werden willst. Bitte beachte, dass du Benachrichtigungen in deinem Profil an- und abbestellen kannst.
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_topic.txt' 		=> '{EMAILSUBJECT:} Antwort zum Thema - "{TOPIC_TITLE}"

Hallo {USERNAME}, 

{AUTHOR} hat zum Thema "{TOPIC_TITLE}" eine neue Antwort seit deinem letzten Besuch erstellt. Du kannst den Beitrag durch einen Klick auf den folgenden Link besuchen und eine Antwort schreiben: {U_NEWEST_POST}

***************
Thema: {TOPIC_TITLE}
Nachricht:
{MESSAGE}
***************

Wenn du das ganze Thema ansehen willst, dann klicke auf folgenden Link:
{U_TOPIC}

{VISIT_MSG}Wenn du das Thema nicht länger abonnieren möchtest, verwende entweder den Link „Thema nicht mehr abonnieren“ in dem entsprechenden Thema oder besuche folgenden Link:

{U_STOP_WATCHING_TOPIC}
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Neue Private Nachricht erhalten

Hallo {USERNAME},

du hast auf „{SITENAME}“ eine neue Private Nachricht von „{AUTHOR_NAME}“ mit folgendem Betreff erhalten:

{SUBJECT}

Du kannst deine neue Nachricht ansehen, indem du den folgenden Link besuchst:

{U_VIEW_MESSAGE}

Du hast ausgewählt, dass du bei neuen Privaten Nachrichten informiert werden möchtest. Du kannst diese Benachrichtigungen jederzeit in deinem persönlichen Bereich abstellen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_comment_email.txt' 		=> '
Guten Tag,

{USER_NAME} hat dir ein Kommentar in dein Profil auf {SITENAME} gesendet.

Bitte klicke auf den nachfolgenden Link um den Kommentar zu lesen:
{LINK_PROFILE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_email.txt' 		=> '
Hallo {TO_USERNAME},

die folgende Nachricht wurde dir von {FROM_USERNAME} über dein Benutzerkonto auf „{SITENAME}“ geschickt. Wenn diese Nachricht Werbung, Beleidigungen oder anderen anstößigen Inhalt enthält, kannst du die Board-Administration unter folgender Adresse erreichen:

{BOARD_CONTACT}

Füge deiner Nachricht bitte die vollständige E-Mail (insbesondere die Nachrichtenkopfzeilen) bei. Bitte beachte, dass als Antwortadresse dieser E-Mail die E-Mail-Adresse von {FROM_USERNAME} hinterlegt ist.

Es folgt die an dich gesendete Nachricht
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Hallo {TO_USERNAME},

die folgende Nachricht wurde dir von {FROM_USERNAME} über dein Benutzerkonto auf „{SITENAME}“ geschickt. Wenn diese Nachricht Werbung, Beleidigungen oder anderen anstößigen Inhalt enthält, kannst du die Board-Administration unter folgender Adresse erreichen:

{BOARD_CONTACT}

Füge deiner Nachricht bitte diese vollständige Nachricht bei. Bitte beachte, dass als Antwortadresse das Instant Messaging-Konto des Boards angegeben wurde.

Es folgt die an dich gesendete Nachricht
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Meldung geschlossen — „{POST_SUBJECT}“

Hallo {USERNAME},

du erhältst diese Nachricht, weil deine Meldung zum Beitrag „{POST_SUBJECT}“ in „{TOPIC_TITLE}“ auf „{SITENAME}“ von einem Moderator oder Administrator bearbeitet wurde. Die Meldung wurde anschließend geschlossen. Wenn du weitere Fragen dazu hast, kannst du {CLOSER_NAME} mit einer Privaten Nachricht kontaktieren.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Meldung gelöscht — „{POST_SUBJECT}“

Hallo {USERNAME},

du erhältst diese Nachricht, weil deine Meldung zum Beitrag „{POST_SUBJECT}“ in „{TOPIC_TITLE}“ auf „{SITENAME}“ von einem Moderator oder Administrator gelöscht wurde.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Thema freigegeben — „{TOPIC_TITLE}“

Hallo {USERNAME},

du erhältst diese Benachrichtigung, weil dein Thema „{TOPIC_TITLE}“ auf „{SITENAME}“ durch einen Moderator oder Administrator freigegeben wurde.

Wenn du das Thema ansehen möchtest, verwende folgenden Link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Themenfreigabe verweigert — „{TOPIC_TITLE}“

Hallo {USERNAME},

du erhältst diese Benachrichtigung, weil deinem Thema „{TOPIC_TITLE}“ auf „{SITENAME}“ von einem Moderator oder Administrator die Freigabe verweigert wurde.

Der folgende Grund wurde dafür angegeben:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neue Antwort — „{TOPIC_TITLE}“

Hallo {USERNAME},

du erhältst diese Benachrichtigung, weil du das Thema „{TOPIC_TITLE}“ auf „{SITENAME}“ beobachtest. Seit deinem letzten Besuch wurde zu diesem Thema eine neue Antwort erstellt. Du kannst den folgenden Link benutzen, um die neuen Antworten anzusehen. Du erhältst keine weitere Benachrichtigung, bis du das Thema besucht hast.

Wenn du die neuesten Antworten seit deinem letzten Besuch ansehen möchtest, verwende folgenden Link:
{U_NEWEST_POST}

Wenn du das Thema ansehen möchtest, verwende folgenden Link:
{U_TOPIC}

Wenn du das Forum ansehen möchtest, verwende folgenden Link:
{U_FORUM}

Wenn du das Thema nicht länger abonnieren möchtest, verwende entweder den Link „Thema nicht mehr abonnieren“ in dem entsprechenden Thema oder besuche folgenden Link:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reaktiviere dein Benutzerkonto

Hallo {USERNAME},

dein Benutzerkonto auf „{SITENAME}“ wurde deaktiviert; vermutlich, weil du Änderungen an deinem Profil vorgenommen hast. Um dein Benutzerkonto wieder zu aktivieren, musst du den folgenden Link besuchen:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Dein Benutzerkonto wurde deaktiviert

Hallo {USERNAME},

dein Benutzerkonto auf „{SITENAME}“ wurde deaktiviert, vermutlich, weil du Änderungen an deinem Profil vorgenommen hast. Ein Administrator des Boards muss dein Konto erst wieder aktivieren, bevor du es verwenden kannst. Du erhältst eine weitere Benachrichtigung, sobald dies geschehen ist.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivierung eines neuen Passworts

Hallo {USERNAME},

du erhältst diese Benachrichtigung, weil du (oder jemand, der angegeben hat, du zu sein) ein neues Passwort für dein Benutzerkonto auf „{SITENAME}“ angefordert hat. Wenn du diese Benachrichtigung nicht angefordert hast, kannst du sie ignorieren. Falls du sie regelmäßig erhältst, kontaktiere bitte die Board-Administration.

Um das neue Passwort zu verwenden, musst du es aktivieren. Verwende dazu den folgenden Link:

{U_ACTIVATE}

Nach erfolgreicher Aktivierung kannst du dich mit folgendem Passwort anmelden:

Passwort: {PASSWORD}

Du kannst dieses Passwort selbstverständlich in deinem persönlichen Bereich ändern. Wenn du auf Schwierigkeiten stößt, kontaktiere bitte die Board-Administration.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reaktiviere dein Benutzerkonto „{SITENAME}“

Ein Board-Administrator hat eine erneute Aktivierung deines Benutzerkontos erzwungen. Dein Benutzerkonto ist derzeit inaktiv.
Bitte folge den Anweisungen, um dein Konto wieder zu aktivieren.

Bitte bewahre diese E-Mail in deinen Unterlagen auf. Die Daten deines Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}
----------------------------

Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

Bitte besuche folgenden Link, um dein Benutzerkonto zu reaktivieren:

{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_delete_notify.txt' 		=> '{EMAILSUBJECT:} Löschung Deines Benutzerkontos auf "{SITENAME}"! 

Hallo {USERNAME},

In letzter Zeit hast Du mindestens 2 Erinnerungen von uns bekommen. 

Da Du jedoch kein Interesse zeigst, dich an Aktivitäten auf {SITENAME} zu beteiligen, wurde beschlossen Dein Benutzerkonto zu löschen.

Die Löschung Deines Kontos kann nicht mehr rückgängig gemacht werden. Solltest Du Dich doch irgendwann entschließen Dich wieder bei uns zu beteiligen, müsstest Du Dich erneut registrieren.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_inactive.txt' 		=> '{EMAILSUBJECT:} Erinnerung von "{SITENAME}"! 

Hallo {USERNAME},

Wir haben festgestellt, dass du dich seit einiger Zeit nicht auf {SITENAME} eingeloggt hast.

Schau doch bitte mal wieder auf {U_BOARD} vorbei um einen Blick auf unsere aktuellen Themen im Forum zu werfen. 

Wir freuen uns dich bald wieder bei uns zu sehen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_inactive_still.txt' 		=> '{EMAILSUBJECT:} Zweite Erinnerung von "{SITENAME}"! 

Hallo {USERNAME},

Wir haben dir kürzlich eine Mail bezüglich deiner Teilnahme/Aktivität auf {SITENAME} geschrieben.

Leider hat es seit dieser Mail keine Veränderung von deiner Seite bezüglich der Aktivität gegeben. Wir möchten dich darauf aufmerksam machen, dass wir es in Betracht ziehen, dein Benutzerkonto zu löschen, da du anscheinend nicht mehr an der Community von {SITENAME} interessiert bist.

Falls du nur deine Login-Daten vergessen hast, findest du sie hier:
----------------------------
Username: {USERNAME}
Password: *

Board URL: {U_BOARD}
----------------------------

* Bitte beachte, dass dein Passwort verschlüsselt in der Datenbank gespeichert wurde und wir es für dich nicht wiederherstellen können. Falls du dein Passwort vergessen haben solltest, kannst du ein neues anfordern, das dann auf die gleiche Weise wie dein Benutzerkonto aktiviert wird.

Wir würden uns über deine baldige Beteiligung auf {SITENAME} sehr freuen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_not_logged_in.txt' 		=> '{EMAILSUBJECT:} Erinnerung von "{SITENAME}"! 

Hallo {USERNAME},

Wir haben festgestellt, dass du vor einiger Zeit ein Benutzerkonto auf {SITENAME} registriert hast.

Obwohl dein Benutzerkonto aktiviert ist, hast du dich noch nicht im Forum eingeloggt. 

Hier findest du nochmal deine Benutzerdaten und die Board-URL.
----------------------------
Username: {USERNAME}
Password: *

Board URL: {U_BOARD}
----------------------------

* Bitte beachte, dass dein Passwort verschlüsselt in der Datenbank gespeichert wurde und wir es für dich nicht wiederherstellen können. Falls du dein Passwort vergessen haben solltest, kannst du ein neues anfordern, das dann auf die gleiche Weise wie dein Benutzerkonto aktiviert wird.

Wir freuen uns, dich bald auf {SITENAME} zu sehen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_zero_poster.txt' 		=> '{EMAILSUBJECT:} Erinnerung von "{SITENAME}"! 

Hallo {USERNAME},

Du hast dich vor einiger Zeit auf {SITENAME} registriert. 

Wir haben festgestellt, dass du dich noch nicht aktiv an der Community beteiligt und noch keinen Beitrag geschrieben hast.

Nimm dir doch bitte kurz Zeit, um einen Blick auf unsere aktuellen Themen im Forum unter {U_BOARD} zu werfen. Vielleicht findest du ja ein Thema interessant und wirst darin mit einbezogen.

Anderenfalls zögere nicht, dein eigenes Thema zu erstellen, selbst wenn es auch zur Vorstellung an den Rest der Community dient. Dies bricht gewöhnlich das Eis.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Erinnerung an inaktives Benutzerkonto

Hallo {USERNAME},

diese Nachricht ist eine Erinnerung, dass dein Benutzerkonto auf „{SITENAME}“, erstellt am {REGISTER_DATE}, weiter inaktiv ist. Wenn du dieses Konto aktivieren möchtest, besuche bitte den folgenden Link:
 
{U_ACTIVATE}

Vielen Dank für deine Registrierung auf „{SITENAME}“, wir freuen uns über deinen Besuch.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Bitte bewahre diese E-Mail in deinen Unterlagen auf. Die Daten deines Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}
----------------------------

Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

Bitte besuche folgenden Link, um den Account zu aktivieren:

{U_ACTIVATE}



Vielen Dank für deine Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Bitte bewahre diese E-Mail in deinen Unterlagen auf. Die Daten deines Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}
{PASSWORD_EXTRA_LINE}
Board-URL:    {U_BOARD}
----------------------------

Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für deine Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Bitte bewahre diese E-Mail in deinen Unterlagen auf. Die Daten deines Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}
{PASSWORD_EXTRA_LINE}
Board-URL:    {U_BOARD}
----------------------------

Bitte besuche folgenden Link, um dein Benutzerkonto zu aktivieren:

{U_ACTIVATE}

Dein Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, kannst du es über die E-Mail-Adresse, die deinem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für deine Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/cron_formel1.txt' 		=> '{EMAILSUBJECT:} Formel 1 Tippspiel Erinnerung

Hallo {USERNAME},

vergiss bitte nicht Deinen Formel 1 Tipp auf {SITENAME} abzugeben.

Das nächste Rennen findet an diesem Wochenende statt!

Deadline für das Rennen in {RACENAME} ist am
Datum:  {DEADLINEDATE}
Uhrzeit: {DEADLINETIME}

Hier geht es zum Tippspiel: {U_BOARD}/formel1.php

{EMAIL_SIG}',
));
