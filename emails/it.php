<?php
﻿
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Attiva account utente

Ciao,

l\'account di "{USERNAME}" e\' stato disattivato o appena creato: dovresti controllare i dettagli di questo utente (se necessario) e gestirlo di conseguenza.

Usa questo link per controllare il profilo utente:
{U_USER_DETAILS}

Usa questo link per attivare l\'account:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Questa email ti e\' stata inviata da un Amministratore di "{SITENAME}". Se ritieni che questo messaggio costituisca spam (pubblicita\' non desiderata) o pensi che il suo contenuto sia offensivo, contatta il webmaster al seguente indirizzo:

{CONTACT_EMAIL}

Includi questa email, compresi gli headers. 

Testo del messaggio:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Account attivato

Ciao {USERNAME},

il tuo account su "{SITENAME}" e\' stato attivato da un amministratore, ora puoi collegarti.
La tua password e\' stata memorizzata in modo sicuro nel nostro database, e non puo\' essere recuperata. In caso di smarrimento della stessa, sara\' comunque possibile richiederne una nuova, utilizzando l\'indirizzo e-mail associato al tuo account.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Benvenuto su "{SITENAME}"

{WELCOME_MSG}

Per favore, conserva questa e-mail. Le informazioni del tuo account sono:

----------------------------
Nome utente: {USERNAME}
Password: {PASSWORD}
----------------------------

Il tuo account non e\' ancora attivo: un amministratore deve attivarlo prima che tu possa accedere. Riceverai un\'altra e-mail appena avviene l\'attivazione.

Non dimenticare la tua password perche\' e\' stata criptata nel nostro database e non abbiamo la possibilita\' di estrarla. Qualora la dimenticassi hai la possibilita\' di richiederne una nuova che sara\' attivata con lo stesso procedimento di questo account.

Ti ringraziamo per la registrazione.

{EMAIL_SIG}
',
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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Benvenuto su "{SITENAME}"


{WELCOME_MSG}

Nell\'attesa dell\'atto di Responsabilita\' Minore il Tuo account rimarra\' inattivo.
Stampa questo messaggio. Letto e approvato dal Genitore o dal Tutore Legale attendiamo fax a:

{FAX_INFO}

o via posta a:

{MAIL_INFO}


------------------------------ TAGLIA QUI ------------------------------

Consenso per la partecipazione a "{SITENAME}" - {U_BOARD}


Nome utente: {USERNAME}
E-mail: {EMAIL_ADDRESS}


HO CONTROLLATO LE INFORMAZIONI FORNITE DA MIO FIGLIO E AUTORIZZO {SITENAME} A UTILIZZARE QUESTE INFORMAZIONI. SONO CONSAPEVOLE CHE LE INFORMAZIONI POSSONO ESSERE CAMBIATE IN OGNI MOMENTO INSERENDO UNA PASSWORD D\'ACCESSO. SONO CONSAPEVOLE CHE POSSO RICHIEDERE CHE TALI INFORMAZIONI VENGANO RIMOSSE DA {SITENAME} IN QUALSIASI MOMENTO.


Genitore o Tutore Legale (Scrivi Nome e Cognome): _____________________(Firma): __________________


Data: _______________



------------------------------ TAGLIA QUI ------------------------------

Una volta che avremo ricevuto copia della presente via fax o per posta, il tuo account verra\' attivato.
Non scordare la tua password, non sara\' possibile recuperarla dal nostro database in quanto viene criptata.
In caso di smarrimento della stessa, sara\' comunque possibile richiederne una nuova, utilizzando l\'indirizzo e-mail associato al tuo account. Grazie per esserti iscritto. {EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Benvenuto su "{SITENAME}"


{WELCOME_MSG}

Nell\'attesa dell\'atto di Responsabilita\' Minore il tuo account rimarra\' inattivo.

Stampa questo messaggio. Letto e approvato dal Genitore o dal Tutore Legale attendiamo fax a:

{FAX_INFO}

o via posta a:

{MAIL_INFO}



------------------------------ TAGLIA QUI ------------------------------


Consenso per la partecipazione a "{SITENAME}"

Username: {USERNAME}
Password: {PASSWORD}
E-mail: {EMAIL_ADDRESS}


HO CONTROLLATO LE INFORMAZIONI PROVVISTE DA MIO FIGLIO E CON  LA PRESENTE DO IL CONSENSO A {SITENAME} DI UTILIZZARE QUESTE INFORMAZIONI. 
SONO CONSAPEVOLE CHE LE INFORMAZIONI POSSONO ESSERE CAMBIATE IN OGNI MOMENTO INSERENDO LA PASSWORD D\'ACCESSO.   
SONO CONSAPEVOLE CHE POSSO RICHIEDERE CHE TALI INFORMAZIONI VENGANO RIMOSSE DA {SITENAME} IN QUALSIASI MOMENTO.



Genitore o Tutore Legale 

(Scrivi Nome e Cognome): _____________________

(Firma): __________________ 

Data: _______________





------------------------------ TAGLIA QUI ------------------------------


Una volta che avremo ricevuto copia della presente via fax o per posta il tuo account verra\' attivato.

Non scordare la tua password, non sara\' possibile recuperarla dal nostro database in quanto viene criptata. In caso di smarrimento della stessa, sara\' comunque possibile richiederne una nuova dalla pagina di login.

Grazie per esserti iscritto.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - E-mail a un amico

Ciao {TO_USERNAME},

questa e-mail e\' stata inviata da {FROM_USERNAME} di "{SITENAME}", che pensa tu possa essere interessato al seguente argomento:

{TOPIC_NAME}

che puoi trovare all\'indirizzo:

{U_TOPIC}

{FROM_USERNAME} puo\' aver accluso un messaggio di seguito. N.B.: il messaggio non e\' stato letto o approvato da amministratori della Board. Se vuoi manifestare le tue rimostranze sul ricevimento di questa e-mail, ti preghiamo di contattare un amministratore su {BOARD_CONTACT}. Per favore accludi questa email, compresi gli headers quando contatti quell\'indirizzo.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Notifica argomento forum - "{FORUM_NAME}"

Ciao {USERNAME},

ricevi questa notifica perche\' stai controllando il forum "{FORUM_NAME}" su "{SITENAME}". C\'e\' stata una risposta all\'argomento "{TOPIC_TITLE}" dalla tua ultima visita. Tramite il link che segue puoi arrivare direttamente all\'argomento; non riceverai altre notifiche fino alla tua prossima visita all\'argomento:

{U_NEWEST_POST}

Per visualizzare l\'argomento clicca sul seguente link:
{U_TOPIC}

Per visualizzare il forum clicca sul seguente link:
{U_FORUM}

Se non desideri piu\' controllare questo forum puoi cliccare su "Annulla sottoscrizione forum" che trovi su "{SITENAME}", o cliccando sul link seguente:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Sei stato aggiunto a questo gruppo

Congratulazioni,

sei stato aggiunto al gruppo "{GROUP_NAME}" su "{SITENAME}".
Questa azione e\' stata intrapresa da un leader del gruppo o da un amministratore: contattali per maggiori informazioni.

Per visionare le tue informazioni sui gruppi:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} La tua richiesta e\' stata accettata

Congratulazioni,

la tua richiesta di adesione al gruppo "{GROUP_NAME}" su "{SITENAME}" e\' stata accettata.
Clicca sul link seguente per vedere la tua iscrizione al gruppo:

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} C\'e\' una richiesta di adesione al tuo gruppo

Ciao {USERNAME},

l\'utente "{REQUEST_USERNAME}" ha richiesto di aderire al gruppo "{GROUP_NAME}" che gestisci su "{SITENAME}".
Per approvare o meno questa richiesta di adesione, vai al link seguente:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB installato

Congratulazioni,

l\'installazione di phpBB sul tuo server e\' riuscita!

Questa e-mail contiene importanti informazioni sulla tua installazione che devi conservare. Non scordare la password perche\', se dovessi perderla, non sara\' possibile recuperarla dal nostro database in quanto viene criptata. In ogni caso qualora la perdessi puoi sempre richiederne una nuova.

----------------------------
Nome utente: {USERNAME}
Password: {PASSWORD}

URL: {U_BOARD}
----------------------------

Altre informazioni sulla tua installazione phpBB le trovi nella cartella docs e sulla pagina di supporto di phpBB.com - http://www.phpbb.com/support/

Per tenere in perfetta sicurezza il sistema, ti suggeriamo caldamente di mantenerti aggiornato con le release del software, cosa semplice da fare con l\'iscrizione alla mailing list di phpBB.com.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Notifica nuovo argomento - "{FORUM_NAME}"

Ciao {USERNAME},

ricevi questa notifica perche\' stai controllando il forum "{FORUM_NAME}" su "{SITENAME}". Dalla tua ultima visita e\' stato creato un nuovo argomento: "{TOPIC_TITLE}". Tramite il link che segue puoi arrivare direttamente al forum; non riceverai altre notifiche fino alla tua prossima visita:

{U_FORUM}

Se non desideri piu\' controllare questo forum puoi cliccare su "Annulla sottoscrizione forum" che trovi sul forum sottoscritto, o cliccando sul link seguente:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Chiusura segnalazione - "{PM_SUBJECT}"


Ciao {USERNAME},

ricevi questa notifica perche\' la segnalazione relativa al messaggio privato "{PM_SUBJECT}" su "{SITENAME}" e\' stata letta da un moderatore o da un amministratore. La segnalazione e\' stata poi chiusa. Se hai ulteriori domande contatta {CLOSER_NAME} con un messaggio privato.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Cancellazione segnalazione - "{PM_SUBJECT}"


Ciao {USERNAME},
ricevi questa notifica perche\' la segnalazione relativa al messaggio privato "{PM_SUBJECT}" su "{SITENAME}" e\' stata cancellata da un moderatore o da un amministratore.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Messaggio approvato - "{POST_SUBJECT}"

Ciao {USERNAME},

ricevi questa notifica perche\' il tuo messaggio "{POST_SUBJECT}" su "{SITENAME}" e\' stato approvato da un moderatore o da un amministratore.

Se vuoi vedere il tuo messaggio clicca sul link seguente:
{U_VIEW_POST}

Se vuoi vedere l\'intero argomento clicca sul link seguente:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Messaggio disapprovato - "{POST_SUBJECT}"

Ciao {USERNAME},

ricevi questa notifica perche\' il tuo messaggio "{POST_SUBJECT}" su "{SITENAME}" e\' stato disapprovato da un moderatore o da un amministratore.

La ragione della disapprovazione e\' la seguente:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Hai ricevuto un messaggio privato

Ciao {USERNAME},

hai ricevuto un nuovo messaggio privato da parte di "{AUTHOR_NAME}" nel tuo account su "{SITENAME}" e posta il seguente oggetto:

{SUBJECT}

Puoi vedere il tuo nuovo messaggio privato sul link seguente:

{U_VIEW_MESSAGE}

Hai richiesto di essere avvisato per questi eventi: ricorda che puoi sempre scegliere di non ricevere avvisi per i nuovi messaggi cambiando le impostazioni nel tuo profilo utente.

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
Ciao {TO_USERNAME},

quella che segue e\' un\'e-mail che ti e\' stata inviata da {FROM_USERNAME} tramite il tuo account su "{SITENAME}". Se il messaggio e\' spam, o contiene altri commenti che trovi offensivi, per favore contatta l\'amministratore della Board al seguente indirizzo:

{BOARD_CONTACT}

Ricordati di allegare tutta questa e-mail (soprattutto gli headers). Tieni presente che l\'indirizzo di risposta di questa e-mail e\' quello di {FROM_USERNAME}.

Segue il messaggio inviato
~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Ciao {TO_USERNAME},

quello che segue e\' un messaggio che ti e\' stato inviato da {FROM_USERNAME} tramite il tuo account su "{SITENAME}". Se il messaggio e\' spam, o contiene altri commenti che trovi offensivi, per favore contatta l\'amministratore della Board al seguente indirizzo:

{BOARD_CONTACT}

Allega questo messaggio completo. Tieni presente che l\'indirizzo mittente e\' quello dell\'account IM della Board.

Segue il messaggio inviato
~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Chiusura segnalazione - "{POST_SUBJECT}"

Ciao {USERNAME},

ricevi questa notifica, perche\' la segnalazione che hai fatto sul messaggio "{POST_SUBJECT}" in "{TOPIC_TITLE}" su "{SITENAME}" e\' stata letta da un moderatore o da un amministratore. La segnalazione e\' stata poi chiusa. Se hai ulteriori domande contatta {CLOSER_NAME} con un messaggio privato.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Cancellazione segnalazione - "{POST_SUBJECT}"

Ciao {USERNAME},

ricevi questa notifica, perche\' la segnalazione che hai fatto sul messaggio "{POST_SUBJECT}" in "{TOPIC_TITLE}" su "{SITENAME}" e\' stata cancellata da un moderatore o da un amministratore.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Argomento approvato - "{TOPIC_TITLE}"

Ciao {USERNAME},

ricevi questa notifica perche\' il tuo argomento "{TOPIC_TITLE}" su "{SITENAME}" e\' stato approvato da un moderatore o da un amministratore.

Se vuoi vedere il tuo argomento clicca sul link seguente:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Argomento disapprovato - "{TOPIC_TITLE}"

Ciao {USERNAME},

ricevi questa notifica perche\' il tuo argomento "{TOPIC_TITLE}" su "{SITENAME}" e\' stato disapprovato da un moderatore o da un amministratore.

La ragione della disapprovazione e\' la seguente:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Notifica risposta argomento - "{TOPIC_TITLE}"

Ciao {USERNAME},

ricevi questa notifica perche\' stai controllando il forum "{FORUM_NAME}" su "{SITENAME}". C\'e\' stata una risposta all\'argomento dalla tua ultima visita. Tramite i link seguenti puoi vedere tutte le risposte; non riceverai altre notifiche fino alla tua prossima visita.

Se vuoi vedere la risposta piu\' recente dalla tua ultima visita, clicca sul seguente link:
{U_NEWEST_POST}

Per visualizzare l\'argomento clicca sul seguente link:
{U_TOPIC}

Per visualizzare il forum clicca sul seguente link:
{U_FORUM}

Se non desideri piu\' controllare questo argomento puoi cliccare su "Annulla sottoscrizione argomento" che trovi sull\'argomento sottoscritto, o cliccando sul link seguente:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Riattiva il tuo account

Ciao {USERNAME},

il tuo account su "{SITENAME}" e\' stato disattivato, molto probabilmente a causa di modifiche fatte al tuo profilo. Per la riattivazione del tuo account devi cliccare sul link sottostante:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Il tuo account e\' stato disattivato

Ciao {USERNAME},

il tuo account su "{SITENAME}" e\' stato disattivato, molto probabilmente a causa di modifiche fatte al tuo profilo. L\'amministratore deve attivarlo prima che tu possa accedere. Riceverai un\'altra notifica ad attivazione avvenuta.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Attivazione nuova password

Ciao {USERNAME},

ricevi questa notifica perche\' hai (o qualcun altro ha) richiesto di ricevere una nuova password per il tuo account su "{SITENAME}". Se non hai effettuato tu questa richiesta allora ti preghiamo di ignorarla, ma se dovessi ricevere altre notifiche per favore contatta l\'amministratore.

La nuova password deve essere attivata. Per farlo devi cliccare sul link sottostante:

{U_ACTIVATE}

Se la procedura da\' esito corretto potrai accedere utilizzando la seguente password:

Password: {PASSWORD}

Puoi cambiare questa password dalla pagina del tuo profilo utente. Se incontrassi qualche difficolta\' puoi contattare l\'amministratore.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Riattiva il tuo account su "{SITENAME}"


Un amministratore ha richiesto la riattivazione del tuo account. Il tuo account e\' attualmente inattivo.

Per favore segui la procedura che segue per riattivare il tuo account.

Per favore conserva questa e-mail con le informazioni del tuo account:


Nome utente: {USERNAME}


Non scordare la tua password, non sara\' possibile recuperarla dal nostro database in quanto viene criptata. In caso di smarrimento della stessa, sara\' comunque possibile richiederne una nuova dalla pagina di login, utilizzando l\'indirizzo e-mail associato al tuo account.Per favore, visita il link seguente per riattivare il tuo account:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Avviso di account inattivo


Ciao {USERNAME},
il {REGISTER_DATE} hai registrato un nuovo account su "{SITENAME}". Ad oggi non hai ancora attivato il tuo account, procedura necessaria per poter accedere. Per comodita\' il link di attivazione e\' ripetuto qui sotto:

{U_ACTIVATE}

Grazie per esserti registrato su "{SITENAME}", attendiamo la tua partecipazione.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Benvenuto su "{SITENAME}"

{WELCOME_MSG}

Per favore conserva questa e-mail con le informazioni del tuo account:
Nome utente:{USERNAME}

Non scordare la tua password, non sara\' possibile recuperarla dal nostro database in quanto viene criptata. In caso di smarrimento della stessa, sara\' comunque possibile richiederne una nuova dalla pagina di login, utilizzando l\'indirizzo email associato al tuo account. Il tuo account e\' attualmente inattivo. Non puoi usarlo fintanto che non visiti il link seguente: {U_ACTIVATE}

Grazie per esserti iscritto.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Benvenuto su "{SITENAME}"

{WELCOME_MSG}

Per favore conserva questa e-mail con le informazioni del tuo account:
Nome utente: {USERNAME}
URL Board: {U_BOARD}


Non scordare la tua password, non sara\' possibile recuperarla dal nostro database in quanto viene criptata. In caso di smarrimento della stessa, sara\' comunque possibile richiederne una nuova dalla pagina di login, utilizzando l\'indirizzo email associato al tuo account. Grazie per esserti iscritto.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Benvenuto su "{SITENAME}"

{WELCOME_MSG}


Per favore conserva questa e-mail con le informazioni del tuo account:
Nome utente: {USERNAME}
URL Board: {U_BOARD}


Il tuo account e\' attualmente inattivo. Non puoi usarlo fintanto che non visiti il link seguente: {U_ACTIVATE}

Non scordare la tua password, non sara\' possibile recuperarla dal nostro database in quanto viene criptata. In caso di smarrimento della stessa, sara\' comunque possibile richiederne una nuova dalla pagina di login, utilizzando l\'indirizzo e-mail associato al tuo account.

Grazie per esserti iscritto.


{EMAIL_SIG}',
));


