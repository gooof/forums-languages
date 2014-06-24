<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Benutzerkonto aktivieren

Guten Tag,

das Benutzerkonto von „{USERNAME}“ wurde deaktiviert oder neu erstellt. Sie sollten ggf. die Angaben des Benutzers prüfen und das Konto entsprechend behandeln:

Verwenden Sie diesen Link, um das Profil des Benutzers zu betrachten:
{U_USER_DETAILS}

Verwenden Sie diesen Link, um das Benutzerkonto zu aktivieren:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'Newsletter von {SITE_URL}
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}


Besuchen Sie das Forum: http://{SITE_URL}

--------- 
Die folgende Nachricht wurde Ihnen von einem Administrator von „{SITENAME}“ gesendet. Wenn diese Nachricht Werbung, Beleidigungen oder anderen anstößigen Inhalt enthält, können Sie die Board-Administration unter folgender Adresse erreichen:
{CONTACT_EMAIL}
Fügen Sie Ihrer Nachricht bitte die vollständige E-Mail (insbesondere die Nachrichtenkopfzeilen) bei. 

-- 
Service powered by www.phpBB8.de
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Benutzerkonto aktiviert

Guten Tag {USERNAME},

Ihr Benutzerkonto auf „{SITENAME}“ wurde von einem Administrator aktiviert. Sie können sich nun anmelden.

Ihr Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, können Sie es über die E-Mail-Adresse, die Ihrem Account zugeordnet ist, zurücksetzen lassen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Bitte bewahren Sie diese E-Mail in Ihren Unterlagen auf. Die Daten Ihres Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}

Board-URL:    {U_BOARD}
----------------------------

Ihr Account ist derzeit inaktiv und muss erst durch einen Administrator des Boards aktiviert werden, bevor Sie ihn verwenden können. Es wird eine weitere E-Mail versandt, sobald dies geschehen ist.

Ihr Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, können Sie es über die E-Mail-Adresse, die Ihrem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für Ihre Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/birthday_email.txt' 		=> '{EMAILSUBJECT:} Herzlichen Glückwunsch zum Geburtstag!

Liebes Mitglied {USERNAME},
 
es gibt da bei uns im Forum ein Gerücht: 
 
Sie haben heute Geburtstag?
 
Wir wünschen Ihnen von ganzem Herzen alles erdenklich Gute für Ihr neues Lebensjahr. Lassen Sie es sich heute mal so richtig gut gehen und sich verw�hnen.
Es braucht gar nicht viel, um diesen Tag zu einem richtigen Glückstag zu machen.

Als kleine Überraschung wartet hier ein nettes Geburtstags-Ständchen auf Dich. Wir hoffen, Ihnen damit ein Lächeln schenken zu können.
{U_BOARD}/forum.php?happy=card

Herzliche Grüße
{SITENAME}
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/calendar_new_event.txt' 		=> '{EMAILSUBJECT:} Ein neuer Termin wurde in den Kalender eingetragen

Guten Tag {USERNAME},

Der Termin "{EVENT_SUBJECT}" wurde im Kalender eingetragen.

Verwenden Sie diesen Link, um den Kalender zu betrachten:
{U_CALENDAR}

Verwenden Sie diesen Link, um den Termin zu betrachten:
{U_EVENT}

Verwenden Sie diesen Link, wenn Sie keine weiteren emails über neue Kalender-Termine erhalten möchten:
{U_UNWATCH_CALENDAR}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/calendar_updated_event.txt' 		=> '{EMAILSUBJECT:} Ein Termin im Kalender wurde geändert

Guten Tag {USERNAME},

Der Termin "{EVENT_SUBJECT}" wurde im Kalender geändert.

Verwenden Sie diesen Link, um den Termin zu betrachten:
{U_EVENT}

Verwenden Sie diesen Link, wenn Sie keine weiteren emails über diesen Kalender-Termin erhalten möchten:
{U_UNWATCH_EVENT}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/calendar_updated_reply.txt' 		=> '{EMAILSUBJECT:} Es gibt einen neuen oder geänderten Kalender-Kommentar

Guten Tag {USERNAME},

Es gibt einen neuen oder geänderten Kommentar zum Kalender-Termin "{EVENT_SUBJECT}"

Verwenden Sie diesen Link, um den Termin zu betrachten:
{U_EVENT}

Verwenden Sie diesen Link, wenn Sie keine weiteren emails über diesen Kalender-Termin erhalten möchten:
{U_UNWATCH_EVENT}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/contact.txt' 		=> '{EMAILSUBJECT:} [Kontaktformular] {SUBJECT}

Guten Tag {ADM_USERNAME},

es wurde eine Nachricht im Kontaktformular Ihres Forums eingeben.


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

es wurde eine Nachricht im Kontaktformular Ihres Forums eingeben.


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

Gemäß den Regelungen des COPPA ist Ihr Benutzerkonto derzeit inaktiv.

Bitte drucken Sie diese Nachricht aus und lassen Sie sie von einem Elternteil oder einem Erziehungsberechtigten unterzeichnen und datieren. Senden Sie sie anschließend per Fax an:

{FAX_INFO}

oder senden Sie sie per Post an:

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


Sobald der Administrator dieses Formular per Fax oder Post erhalten hat, wird er Ihren Account aktivieren.

Ihr Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, können Sie es über die E-Mail-Adresse, die Ihrem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für Ihre Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Gemäß den Regelungen des COPPA ist Ihr Benutzerkonto derzeit inaktiv.

Bitte drucken Sie diese Nachricht aus und lassen Sie sie von einem Elternteil oder einem Erziehungsberechtigten unterzeichnen und datieren. Senden Sie sie anschließend per Fax an:

{FAX_INFO}

oder senden Sie sie per Post an:

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


Sobald der Administrator dieses Formular per Fax oder Post erhalten hat, wird er Ihren Account aktivieren.

Ihr Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, können Sie es über die E-Mail-Adresse, die Ihrem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für Ihre Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} „{SITENAME}“ — Information über ein Thema

Guten Tag {TO_USERNAME},

diese Nachricht wurde Ihnen von „{SITENAME}“ geschickt, weil {FROM_USERNAME} glaubt, dass Sie an folgendem Thema interessiert sein könnten:

{TOPIC_NAME}

Sie können das Thema mit folgendem Link erreichen:

{U_TOPIC}

{FROM_USERNAME} kann Ihnen auch eine Nachricht geschickt haben, die Sie unten finden können. Bitte beachten Sie, dass diese Nachricht nicht durch einen Administrator des Boards geprüft wurde. Wenn Sie sich über den Erhalt dieser E-Mail beschweren möchten, wenden Sie sich bitte an die Board-Administration unter {BOARD_CONTACT}. Bitte fügen Sie die kompletten Nachrichtenkopfzeilen bei, wenn Sie sich an diese Adresse wenden.

----------

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/footb_board_remember.txt' 		=> '
Guten Tag {SITENAME},

folgende Tipper haben eine Erinnerungs-Mail erhalten:

{REMEMBER_LIST}


Hier geht es zu {SITENAME}: {U_BOARD}.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/footb_send_remember.txt' 		=> '
Guten Tag Tipper {USERNAME},

Sie haben bislang noch nicht den {MATCHDAY}. Spieltag getippt.
Bitte tippen Sie bis zum {LEAGUE} Abgabetermin {DELIVERY} Uhr.

 
Hier geht es zu {SITENAME}: {U_BOARD}.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/footb_send_remember_all.txt' 		=> '
Guten Tag Tipper {USERNAME},

bitte vergessen Sie nicht den {MATCHDAY}. Spieltag zu tippen.
Bitte tippen Sie bis zum {LEAGUE} Abgabetermin {DELIVERY} Uhr.

Hier geht es zu {SITENAME}: {U_BOARD}.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neue Antwort — „{FORUM_NAME}“

Guten Tag {USERNAME},

Sie erhalten diese Benachrichtigung, weil Sie das Forum „{FORUM_NAME}“ auf „{SITENAME}“ beobachten. Seit Ihrem letzten Besuch wurde in diesem Forum eine neue Antwort auf das Thema „{TOPIC_TITLE}“ erstellt. Sie können den folgenden Link benutzen, um den ersten ungelesenen Beitrag anzusehen. Sie erhalten keine weitere Benachrichtigung, bis Sie das Thema besucht haben.

{U_NEWEST_POST}

Wenn Sie das Thema ansehen möchten, verwenden Sie folgenden Link:
{U_TOPIC}

Wenn Sie das Forum ansehen möchten, verwenden Sie folgenden Link:
{U_FORUM}

Wenn Sie das Forum nicht länger abonnieren möchten, verwenden Sie entweder den Link „Forum nicht mehr abonnieren“ in dem entsprechenden Forum oder besuchen Sie folgenden Link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Sie wurden in eine Benutzergruppe aufgenommen

Herzlichen Glückwunsch,

Sie wurden in die Benutzergruppe „{GROUP_NAME}“ auf „{SITENAME}“ aufgenommen.
Dieser Vorgang wurde von einem Gruppenleiter oder einem Administrator durchgeführt. Kontaktieren Sie ihn, wenn Sie weitere Informationen erhalten möchten.

Sie können Ihre Gruppendaten hier anzeigen:
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Ihr Mitgliedsantrag wurde bestätigt

Herzlichen Glückwunsch,

Ihr Antrag auf Mitgliedschaft in der Benutzergruppe „{GROUP_NAME}“ auf „{SITENAME}“ wurde bestätigt.
Besuchen Sie folgenden Link, um Ihre Mitgliedschaft anzuzeigen:

{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Eine Anfrage auf Gruppenmitgliedschaft wurde gestellt

Guten Tag {USERNAME},

der Benutzer „{REQUEST_USERNAME}“ auf „{SITENAME}“ hat einen Antrag auf Mitgliedschaft in der Gruppe „{GROUP_NAME}“ gestellt, die Sie verwalten.
Um diese Anfrage zu bestätigen oder abzulehnen, besuchen Sie den folgenden Link:

{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB erfolgreich installiert

Herzlichen Glückwunsch!

Sie haben phpBB erfolgreich auf Ihrem Server installiert.

Diese E-Mail enthält wichtige Informationen über Ihre Installation, die Sie gut aufbewahren sollten. Ihr Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, können Sie es über die E-Mail-Adresse, die Ihrem Account zugeordnet ist, zurücksetzen lassen.

----------------------------
Benutzername: {USERNAME}

URL des Boards: {U_BOARD}
----------------------------

Hilfreiche Informationen über die phpBB-Software können im docs-Ordner Ihrer Installation und auf der Website der phpBB Group — http://www.phpbb.com/support/ — gefunden werden. Eine deutschsprachige Anlaufstelle finden Sie unter http://www.phpbb.de/.

Um die Sicherheit Ihres Boards zu gewährleisten, empfehlen wir Ihnen dringend, es immer auf der aktuellen Version zu halten. Damit Sie entsprechende Informationen zeitnah erhalten, kann auf den oben genannten Seite ein Newsletter abonniert werden.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/newcomment_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neuen Kommentar — „{IMAGE_NAME}“

Guten Tag {USERNAME},

Sie erhalten diese Benachrichtigung, weil Sie das Bild „{IMAGE_NAME}“ auf „{SITENAME}“ beobachten. Seit Ihrem letzten Besuch wurde zu diesem Bild ein neuer Kommentar abgegeben. Sie können den folgenden Link benutzen, um den Kommentar zu lesen.

{U_IMAGE}

Wenn Sie das Bild nicht länger beobachten möchten, verwenden Sie den Link „Bild nicht mehr beobachten“ im obigen Link.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/newimage_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neues Bild — „{ALBUM_NAME}“

Guten Tag {USERNAME},

Sie erhalten diese Benachrichtigung, weil Sie das Album „{ALBUM_NAME}“ auf „{SITENAME}“ beobachten. Seit Ihrem letzten Besuch wurde in diesem Album ein neues Bild hochgeladen: „{IMAGE_NAME}“. Sie können den folgenden Link benutzen, um das Album anzusehen.

{U_ALBUM}

Wenn Sie das Album nicht länger beobachten möchten, verwenden Sie den Link „Album nicht mehr beobachten“ im obigen Link.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neues Thema — „{FORUM_NAME}“

Guten Tag {USERNAME},

Sie erhalten diese Benachrichtigung, weil Sie das Forum „{FORUM_NAME}“ auf „{SITENAME}“ beobachten. Seit Ihrem letzten Besuch wurde in diesem Forum ein neues Thema erstellt: „{TOPIC_TITLE}“. Sie können den folgenden Link benutzen, um das Forum anzusehen. Sie erhalten keine weitere Benachrichtigung, bis Sie das Forum besucht haben.

{U_FORUM}

Wenn Sie das Forum nicht länger abonnieren möchten, verwenden Sie entweder den Link „Forum nicht mehr abonnieren“ in dem entsprechenden Forum oder besuchen Sie folgenden Link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Meldung geschlossen — „{PM_SUBJECT}“

Guten Tag {USERNAME},

Sie erhalten diese Nachricht, weil Ihre Meldung zur Privaten Nachricht „{PM_SUBJECT}“ auf „{SITENAME}“ von einem Moderator oder Administrator bearbeitet wurde. Die Meldung wurde anschließend geschlossen. Wenn Sie weitere Fragen dazu haben, können Sie {CLOSER_NAME} mit einer Privaten Nachricht kontaktieren.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Meldung gelöscht — „{PM_SUBJECT}“

Guten Tag {USERNAME},

Sie erhalten diese Nachricht, weil Ihre Meldung zur Privaten Nachricht „{PM_SUBJECT}“ auf „{SITENAME}“ von einem Moderator oder Administrator gelöscht wurde.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Beitrag freigegeben — „{POST_SUBJECT}“

Guten Tag {USERNAME},

Sie erhalten diese Nachricht, weil Ihr Beitrag „{POST_SUBJECT}“ auf „{SITENAME}“ durch einen Moderator oder Administrator freigegeben wurde.

Wenn Sie den Beitrag ansehen möchten, verwenden Sie folgenden Link:
{U_VIEW_POST}

Wenn Sie das Thema ansehen möchten, verwenden Sie folgenden Link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Beitragsfreigabe verweigert — „{POST_SUBJECT}“

Guten Tag {USERNAME},

Sie erhalten diese Nachricht, weil Ihrem Beitrag „{POST_SUBJECT}“ auf „{SITENAME}“ von einem Moderator oder Administrator die Freigabe verweigert wurde.

Der folgende Grund wurde dafür angegeben:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_forum.txt' 		=> '{EMAILSUBJECT:} Forum Benachrichtigung - {FORUM_NAME}

Guten Tag {USERNAME},

{AUTHOR} hat im Forum "{FORUM_NAME}" eine neue Antwort seit Ihrem letzten Besuch erstellt. Sie können das ganze Forum durch einen Klick auf den folgenden Link besuchen: {U_FORUM}

***************
Thema: {TOPIC_TITLE}
Nachricht:
{MESSAGE}
***************

{VISIT_MSG}Wenn Sie das Forum nicht mehr abonnieren wollen, dann klicken Sie den "nicht mehr abonnieren" Link im obigen Forum, oder klicken Sie folgenden Link:
{U_STOP_WATCHING_FORUM}
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_newtopic.txt' 		=> '{EMAILSUBJECT:} Neues Thema Benachrichtigung - {FORUM_NAME}

Guten Tag {USERNAME},

{AUTHOR} hat im Forum "{FORUM_NAME}" ein neues Thema seit Ihrem letzten Besuch erstellt. Sie können das Forum durch einen Klick auf den folgenden Link besuchen: {U_FORUM}

***************
Thema: {TOPIC_TITLE}
Nachricht:
{MESSAGE}
***************

{VISIT_MSG}Wenn Sie das Forum nicht mehr abonnieren wollen, dann klicken Sie den "nicht mehr abonnieren" Link im obigen Forum, oder klicken Sie folgenden Link:
{U_STOP_WATCHING_FORUM}
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_privmsg.txt' 		=> 'Subject: Neue private Nachricht: {SUBJECT}

Guten Tag {USERNAME}, 

Sie haben unter Ihrem Konto auf "{SITENAME}" eine neue private Nachricht erhalten. Sie können die Nachricht durch einen Klick auf den folgenden Link lesen und beantworten: {U_INBOX}
_____________________________________________________________________

Von: {AUTHOR_NAME}
Betreff: {SUBJECT}
Nachricht:
{MESSAGE}
_____________________________________________________________________

Sie haben darum gebeten, dass Sie über neue Persönliche Mitteilungen benachrichtigt werden wollen. Bitte beachten Sie, dass Sie Benachrichtigungen in Ihrem Profil an- und abstellen können.
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/prime_notify_topic.txt' 		=> '{EMAILSUBJECT:} Antwort zum Thema - "{TOPIC_TITLE}"

Guten Tag {USERNAME}, 

{AUTHOR} hat zum Thema "{TOPIC_TITLE}" eine neue Antwort seit Ihrem letzten Besuch erstellt. Sie können den Beitrag durch einen Klick auf den folgenden Link besuchen und eine Antwort schreiben: {U_NEWEST_POST}

***************
Thema: {TOPIC_TITLE}
Nachricht:
{MESSAGE}
***************

Wenn Sie das ganze Thema ansehen wollen, dann klicken Sie auf folgenden Link:
{U_TOPIC}

{VISIT_MSG}Wenn Sie das Thema nicht länger abonnieren möchten, verwenden Sie entweder den Link „Thema nicht mehr abonnieren“ in dem entsprechenden Thema oder besuchen Sie folgenden Link:

{U_STOP_WATCHING_TOPIC}
{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Neue Private Nachricht erhalten

Guten Tag {USERNAME},

Sie haben auf „{SITENAME}“ eine neue Private Nachricht von „{AUTHOR_NAME}“ mit folgendem Betreff erhalten:

{SUBJECT}

Sie können Ihre neue Nachricht ansehen, indem Sie den folgenden Link besuchen:

{U_VIEW_MESSAGE}

Sie haben ausgewählt, dass Sie bei neuen Privaten Nachrichten informiert werden möchten. Sie können diese Benachrichtigungen jederzeit in Ihrem persönlichen Bereich abstellen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_comment_email.txt' 		=> '
Guten Tag,

{USER_NAME} hat Ihnen ein Kommentar in Ihr Profil auf {SITENAME} gesendet.

Bitte klicken Sie auf den nachfolgenden Link um den Kommentar zu lesen:
{LINK_PROFILE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_email.txt' 		=> '
Guten Tag {TO_USERNAME},

die folgende Nachricht wurde Ihnen von {FROM_USERNAME} über Ihr Benutzerkonto auf „{SITENAME}“ geschickt. Wenn diese Nachricht Werbung, Beleidigungen oder anderen anstößigen Inhalt enthält, können Sie die Board-Administration unter folgender Adresse erreichen:

{BOARD_CONTACT}

Fügen Sie Ihrer Nachricht bitte die vollständige E-Mail (insbesondere die Nachrichtenkopfzeilen) bei. Bitte beachten Sie, dass als Antwortadresse dieser E-Mail die E-Mail-Adresse von {FROM_USERNAME} hinterlegt ist.

Es folgt die an Sie gesendete Nachricht
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Guten Tag {TO_USERNAME},

die folgende Nachricht wurde Ihnen von {FROM_USERNAME} über Ihr Benutzerkonto auf „{SITENAME}“ geschickt. Wenn diese Nachricht Werbung, Beleidigungen oder anderen anstößigen Inhalt enthält, können Sie die Board-Administration unter folgender Adresse erreichen:

{BOARD_CONTACT}

Fügen Sie Ihrer Nachricht bitte diese vollständige Nachricht bei. Bitte beachten Sie, dass als Antwortadresse das Instant Messaging-Konto des Boards angegeben wurde.

Es folgt die an Sie gesendete Nachricht
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Meldung geschlossen — „{POST_SUBJECT}“

Guten Tag {USERNAME},

Sie erhalten diese Nachricht, weil Ihre Meldung zum Beitrag „{POST_SUBJECT}“ in „{TOPIC_TITLE}“ auf „{SITENAME}“ von einem Moderator oder Administrator bearbeitet wurde. Die Meldung wurde anschließend geschlossen. Wenn Sie weitere Fragen dazu haben, können Sie {CLOSER_NAME} mit einer Privaten Nachricht kontaktieren.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Meldung gelöscht — „{POST_SUBJECT}“

Guten Tag {USERNAME},

Sie erhalten diese Nachricht, weil Ihre Meldung zum Beitrag „{POST_SUBJECT}“ in „{TOPIC_TITLE}“ auf „{SITENAME}“ von einem Moderator oder Administrator gelöscht wurde.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Thema freigegeben — „{TOPIC_TITLE}“

Guten Tag {USERNAME},

Sie erhalten diese Benachrichtigung, weil Ihr Thema „{TOPIC_TITLE}“ auf „{SITENAME}“ durch einen Moderator oder Administrator freigegeben wurde.

Wenn Sie das Thema ansehen möchten, verwenden Sie folgenden Link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Themenfreigabe verweigert — „{TOPIC_TITLE}“

Guten Tag {USERNAME},

Sie erhalten diese Benachrichtigung, weil Ihrem Thema „{TOPIC_TITLE}“ auf „{SITENAME}“ von einem Moderator oder Administrator die Freigabe verweigert wurde.

Der folgende Grund wurde dafür angegeben:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Benachrichtigung über neue Antwort — „{TOPIC_TITLE}“

Guten Tag {USERNAME},

Sie erhalten diese Benachrichtigung, weil Sie das Thema „{TOPIC_TITLE}“ auf „{SITENAME}“ beobachten. Seit Ihrem letzten Besuch wurde zu diesem Thema eine neue Antwort erstellt. Sie können den folgenden Link benutzen, um die neuen Antworten anzusehen. Sie erhalten keine weitere Benachrichtigung, bis Sie das Thema besucht haben.

Wenn Sie die neuesten Antworten seit Ihrem letzten Besuch ansehen möchten, verwenden Sie folgenden Link:
{U_NEWEST_POST}

Wenn Sie das Thema ansehen möchten, verwenden Sie folgenden Link:
{U_TOPIC}

Wenn Sie das Forum ansehen möchten, verwenden Sie folgenden Link:
{U_FORUM}

Wenn Sie das Thema nicht länger abonnieren möchten, verwenden Sie entweder den Link „Thema nicht mehr abonnieren“ in dem entsprechenden Thema oder besuchen Sie folgenden Link:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reaktivieren Sie Ihr Benutzerkonto

Guten Tag {USERNAME},

Ihr Benutzerkonto auf „{SITENAME}“ wurde deaktiviert; vermutlich, weil Sie Änderungen an Ihrem Profil vorgenommen haben. Um Ihr Benutzerkonto wieder zu aktivieren, müssen Sie den folgenden Link besuchen:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Ihr Benutzerkonto wurde deaktiviert

Guten Tag {USERNAME},

Ihr Benutzerkonto auf „{SITENAME}“ wurde deaktiviert, vermutlich, weil Sie Änderungen an Ihrem Profil vorgenommen haben. Ein Administrator des Boards muss Ihr Konto erst wieder aktivieren, bevor Sie es verwenden können. Sie erhalten eine weitere Benachrichtigung, sobald dies geschehen ist.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivierung eines neuen Passworts

Guten Tag {USERNAME},

Sie erhalten diese Benachrichtigung, weil Sie (oder jemand, der angegeben hat, Sie zu sein) ein neues Passwort für Ihr Benutzerkonto auf „{SITENAME}“ angefordert hat. Wenn Sie diese Benachrichtigung nicht angefordert haben, können Sie sie ignorieren. Falls Sie sie regelmäßig erhalten, kontaktieren Sie bitte die Board-Administration.

Um das neue Passwort zu verwenden, müssen Sie es aktivieren. Verwenden Sie dazu den folgenden Link:

{U_ACTIVATE}

Nach erfolgreicher Aktivierung können Sie sich mit folgendem Passwort anmelden:

Passwort: {PASSWORD}

Sie können dieses Passwort selbstverständlich in Ihrem persönlichen Bereich ändern. Wenn Sie auf Schwierigkeiten stoßen, kontaktieren Sie bitte die Board-Administration.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reaktivieren Sie Ihr Benutzerkonto „{SITENAME}“

Ein Board-Administrator hat eine erneute Aktivierung Ihres Benutzerkontos erzwungen. Ihr Benutzerkonto ist derzeit inaktiv.
Bitte folgen Sie den Anweisungen, um Ihr Konto wieder zu aktivieren.

Bitte bewahren Sie diese E-Mail in Ihren Unterlagen auf. Die Daten Ihres Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}
----------------------------

Ihr Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, können Sie es über die E-Mail-Adresse, die Ihrem Account zugeordnet ist, zurücksetzen lassen.

Bitte besuchen Sie folgenden Link, um Ihr Benutzerkonto zu reaktivieren:

{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_delete_notify.txt' 		=> '{EMAILSUBJECT:} Löschung Ihres Benutzerkontos auf "{SITENAME}"! 

Guten Tag {USERNAME},

In letzter Zeit haben Sie mindestens 2 Erinnerungen von uns bekommen. 

Da Sie jedoch kein Interesse zeigen, sich an Aktivitäten auf {SITENAME} zu beteiligen, wurde beschlossen Ihr Benutzerkonto zu löschen.

Die Löschung Ihres Kontos kann nicht mehr rückgängig gemacht werden. Sollten Sie sich doch irgendwann entschließen sich wieder bei uns zu beteiligen, müssten Sie sich erneut registrieren.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_inactive.txt' 		=> '{EMAILSUBJECT:} Erinnerung von "{SITENAME}"! 

Guten Tag {USERNAME},

Wir haben festgestellt, dass Sie sich seit einiger Zeit nicht auf {SITENAME} eingeloggt haben.

Schau doch bitte mal wieder auf {U_BOARD} vorbei um einen Blick auf unsere aktuellen Themen im Forum zu werfen. 

Wir freuen uns Sie bald wieder bei uns zu sehen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_inactive_still.txt' 		=> '{EMAILSUBJECT:} Zweite Erinnerung von "{SITENAME}"! 

Guten Tag {USERNAME},

Wir haben Ihnen kürzlich eine Mail bezüglich Ihrer Teilnahme/Aktivität auf {SITENAME} geschrieben.

Leider hat es seit dieser Mail keine Veränderung von Ihrer Seite bezüglich der Aktivität gegeben. Wir möchten Sie darauf aufmerksam machen, dass wir es in Betracht ziehen, Ihr Benutzerkonto zu löschen, da Sie anscheinend nicht mehr an der Community von {SITENAME} interessiert sind.

Falls Sie nur Ihre Login-Daten vergessen haben, finden Sie sie hier:
----------------------------
Username: {USERNAME}
Password: *

Board URL: {U_BOARD}
----------------------------

* Bitte beachten Sie, dass Ihr Passwort verschlüsselt in der Datenbank gespeichert wurde und wir es für Sie nicht wiederherstellen können. Falls Sie Ihr Passwort vergessen haben sollten, können Sie ein neues anfordern, das dann auf die gleiche Weise wie Ihr Benutzerkonto aktiviert wird.

Wir würden uns über Ihre baldige Beteiligung auf {SITENAME} sehr freuen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_not_logged_in.txt' 		=> '{EMAILSUBJECT:} Erinnerung von "{SITENAME}"! 

Guten Tag {USERNAME},

Wir haben festgestellt, dass Sie vor einiger Zeit ein Benutzerkonto auf {SITENAME} registriert haben.

Obwohl Ihr Benutzerkonto aktiviert ist, haben Sie sich noch nicht im Forum eingeloggt. 

Hier finden Sie nochmal Ihre Benutzerdaten und die Board-URL.
----------------------------
Username: {USERNAME}
Password: *

Board URL: {U_BOARD}
----------------------------

* Bitte beachten Sie, dass Ihr Passwort verschlüsselt in der Datenbank gespeichert wurde und wir es für Sie nicht wiederherstellen können. Falls Sie Ihr Passwort vergessen haben sollten, können Sie ein neues anfordern, das dann auf die gleiche Weise wie Ihr Benutzerkonto aktiviert wird.

Wir freuen uns, Sie bald auf {SITENAME} zu sehen.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reminder_zero_poster.txt' 		=> '{EMAILSUBJECT:} Erinnerung von "{SITENAME}"! 

Guten Tag {USERNAME},

Sie haben sich vor einiger Zeit auf {SITENAME} registriert. 

Wir haben festgestellt, dass Sie sich noch nicht aktiv an der Community beteiligt und noch keinen Beitrag geschrieben haben.

Nimm Ihnen doch bitte kurz Zeit, um einen Blick auf unsere aktuellen Themen im Forum unter {U_BOARD} zu werfen. Vielleicht finden Sie ja ein Thema interessant und werden darin mit einbezogen.

Anderenfalls zögere nicht, Ihr eigenes Thema zu erstellen, selbst wenn es auch zur Vorstellung an den Rest der Community dient. Dies bricht gewöhnlich das Eis.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Erinnerung an inaktives Benutzerkonto

Guten Tag {USERNAME},

diese Nachricht ist eine Erinnerung, dass Ihr Benutzerkonto auf „{SITENAME}“, erstellt am {REGISTER_DATE}, weiter inaktiv ist. Wenn Sie dieses Konto aktivieren möchten, besuchen Sie bitte den folgenden Link:
 
{U_ACTIVATE}

Vielen Dank für Ihre Registrierung auf „{SITENAME}“, wir freuen uns über Ihren Besuch.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Bitte bewahren Sie diese E-Mail in Ihren Unterlagen auf. Die Daten Ihres Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}
----------------------------

Ihr Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, können Sie es über die E-Mail-Adresse, die Ihrem Account zugeordnet ist, zurücksetzen lassen.

Bitte besuchen Sie folgenden Link, um den Account zu aktivieren:

{U_ACTIVATE}



Vielen Dank für Ihre Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Bitte bewahren Sie diese E-Mail in Ihren Unterlagen auf. Die Daten Ihres Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}
{PASSWORD_EXTRA_LINE}
Board-URL:    {U_BOARD}
----------------------------

Ihr Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, können Sie es über die E-Mail-Adresse, die Ihrem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für Ihre Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Willkommen auf „{SITENAME}“

{WELCOME_MSG}

Bitte bewahren Sie diese E-Mail in Ihren Unterlagen auf. Die Daten Ihres Benutzerkontos lauten:

----------------------------
Benutzername: {USERNAME}
{PASSWORD_EXTRA_LINE}
Board-URL:    {U_BOARD}
----------------------------

Bitte besuchen Sie folgenden Link, um Ihr Benutzerkonto zu aktivieren:

{U_ACTIVATE}

Ihr Passwort wurde sicher in unserer Datenbank gespeichert und kann nicht wiederhergestellt werden. Falls es vergessen werden sollte, können Sie es über die E-Mail-Adresse, die Ihrem Account zugeordnet ist, zurücksetzen lassen.

Vielen Dank für Ihre Registrierung.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/cron_formel1.txt' 		=> '{EMAILSUBJECT:} Formel 1 Tippspiel Erinnerung

Guten Tag {USERNAME},

bitte vergessen Sie nicht Ihren Formel 1 Tipp auf {SITENAME} abzugeben.

Das nächste Rennen findet an diesem Wochenende statt!

Deadline für das Rennen in {RACENAME} ist am
Datum:  {DEADLINEDATE}
Uhrzeit: {DEADLINETIME}

Hier geht es zum Tippspiel: {U_BOARD}/formel1.php

{EMAIL_SIG}',
));
