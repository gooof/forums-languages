<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Aktywuj konto użytkownika

Witaj,

Konto "{USERNAME}" zostało utworzone lub deaktywowane, powinieneś przejrzeć jego szczegóły (jeśli to konieczne) i zrobić z nim to, co uznasz za stosowne.

Użyj tego linku, aby zobaczyć profil użytkownika:
{U_USER_DETAILS}

Użyj tego linku, żeby aktywować konto:
{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'Witaj,

Tę wiadomość wysłał do Ciebie administrator "{SITENAME}". Jeśli jest to spam lub zawiera obraźliwe treści, to wyślij informację o tym na ten adres e-mail:

{CONTACT_EMAIL}

Załącz cały e-mail (szczególnie nagłówki).

Treść wiadomości:
~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Konto aktywowane

Witaj {USERNAME},

Twoje konto zostało aktywowane, możesz już się zalogować.

Adres forum: {U_BOARD}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Witamy na forum

Witaj {USERNAME},

Twoje konto zostało utworzone, ale jest obecnie nieaktywne.

Adres forum: {U_BOARD}

Zanim będziesz mógł/mogła się zalogować, musi zostać aktywowane przez administratora forum. Gdy to się stanie, otrzymasz kolejną wiadomość.

Twoje hasło zostało bezpiecznie zaszyfrowane w bazie danych i jego odzyskanie jest niewykonalne. Jeśli je zapomnisz, będziesz mógł/mogła poprosić o nowe, używając adresu e-mail powiązanego z kontem.

Dziękujemy za rejestrację.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Witamy na forum

Witaj {USERNAME},

Twoje konto zostało utworzone, ale jest obecnie nieaktywne.

Adres forum: {U_BOARD}

Zgodnie z amerykańskim prawem COPPA administrator będzie mógł je aktywować dopiero gdy otrzyma poniższą wiadomość. Wydrukuj ją i poproś swojego rodzica lub opiekuna o podpis, a potem prześlij ją faxem do:

{FAX_INFO}

lub pocztą do:

{MAIL_INFO}

--------------------------- PRZETNIJ TUTAJ ---------------------------
Permission to participate at "{SITENAME}" - {U_BOARD}

Username: {USERNAME}
E-mail: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO "{SITENAME}" TO STORE THIS INFORMATION.
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD.
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM "{SITENAME}" AT ANY TIME.


Parent or guardian
(print your name here): _____________________

(sign here): __________________

Date: _______________

--------------------------- PRZETNIJ TUTAJ ---------------------------


Twoje hasło zostało bezpiecznie zaszyfrowane w bazie danych i jego odzyskanie jest niewykonalne. Jeśli je zapomnisz, będziesz mógł/mogła poprosić o nowe, używając adresu e-mail powiązanego z kontem.

Dziękujemy za rejestrację.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Witamy na forum

Witaj {USERNAME},

Twoje konto zostało utworzone, ale jest obecnie nieaktywne.

Adres forum: {U_BOARD}

Zgodnie z amerykańskim prawem COPPA administrator będzie mógł je aktywować dopiero gdy otrzyma poniższą wiadomość. Wydrukuj ją i poproś swojego rodzica lub opiekuna o podpis, a potem prześlij ją faxem do:

{FAX_INFO}

lub pocztą do:

{MAIL_INFO}

--------------------------- PRZETNIJ TUTAJ ---------------------------
Permission to participate at "{SITENAME}" - {U_BOARD}

Username: {USERNAME}
E-mail: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO "{SITENAME}" TO STORE THIS INFORMATION.
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD.
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM "{SITENAME}" AT ANY TIME.


Parent or guardian
(print your name here): _____________________

(sign here): __________________

Date: _______________

--------------------------- PRZETNIJ TUTAJ ---------------------------


Twoje hasło zostało bezpiecznie zaszyfrowane w bazie danych i jego odzyskanie jest niewykonalne. Jeśli je zapomnisz, będziesz mógł/mogła poprosić o nowe, używając adresu e-mail powiązanego z kontem.

Dziękujemy za rejestrację.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Powiadom znajomego

Witaj {TO_USERNAME},

Ten e-mail został wysłany z "{SITENAME}" przez {FROM_USERNAME}, który uznał, że ten wątek może Cię zainteresować:

{TOPIC_NAME}

Możesz go przeczytać pod tym adresem:

{U_TOPIC}

Poniżej może również być załączona wiadomość od {FROM_USERNAME}. Nie była ona widziana lub zaakceptowana przez administratorów forum. Jeśli chcesz poskarżyć się na treść tego e-maila, skontaktuj się z administracją forum pod adresem e-mail {BOARD_CONTACT}. W e-mailu zacytuj nagłówki tego e-maila.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Powiadomienie o odpowiedzi w dziale "{FORUM_NAME}"

Witaj {USERNAME},

Przed chwilą ktoś odpowiedział w wątku "{TOPIC_TITLE}", znajdującym się w obserwowanym przez Ciebie dziale "{FORUM_NAME}".

Post: {U_NEWEST_POST}
Wątek: {U_TOPIC}
Dział: {U_FORUM}
Forum: {U_BOARD}

Dopóki nie zobaczysz tego wątku, nie otrzymasz żadnego następnego powiadomienia.

Jeśli nie chcesz już obserwować tego działu, kliknij na poniższy link:
{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Zostałeś/aś dodany/a do grupy {GROUP_NAME}

Gratulujemy,

Zostałeś/aś dodany/a do grupy "{GROUP_NAME}"!

Dodał Cię do niej lider tej grupy lub administrator forum, skontaktuj się z nimi, aby uzyskać więcej informacji.

Informacje o swoich grupach możesz zobaczyć tutaj:
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Zostałeś/aś przyjęty/a do grupy {GROUP_NAME}

Gratulujemy,

Zostałeś/aś przyjęty/a do grupy "{GROUP_NAME}"!

Informacje o swoich grupach możesz zobaczyć tutaj:
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - {REQUEST_USERNAME} poprosił o przyjęcie do grupy {GROUP_NAME}

Witaj {USERNAME},

Użytkownik "{REQUEST_USERNAME}" poprosił o przyjęcie do grupy "{GROUP_NAME}", której jesteś liderem.

Aby zaakceptować lub odrzucić tę prośbę, kliknij tutaj:
{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB3 zainstalowane

Witaj {USERNAME},

Gratulacje!

Właśnie zainstalowałeś/aś swoje własne forum oparte na skrypcie phpBB3.

Adres: {U_BOARD}

Twoje hasło zostało bezpiecznie zaszyfrowane w bazie danych i jego odzyskanie jest niewykonalne. Jeśli je zapomnisz, będziesz mógł/mogła poprosić o nowe, używając adresu e-mail powiązanego z kontem.

Przydatne informacje o phpBB możesz znaleźć w folderze "docs" i na polskiej stronie WWW skryptu:
http://phpbb3.pl/

Aby Twoje forum było bezpieczne zalecamy aktualizowanie go do najnowszej wersji phpBB. Jeśli chcesz otrzymywać powiadomienia o nowych wydaniach phpBB3, zasubskrybuj poniższy kanał Atom za pomocą czytnika RSS/Atom:
http://phpbb3.pl/feed.php?mode=news

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Powiadomienie o nowym wątku w dziale "{FORUM_NAME}"

Witaj {USERNAME},

Przed chwilą ktoś rozpoczął wątek "{TOPIC_TITLE}" w obserwowanym przez Ciebie dziale "{FORUM_NAME}".

Wątek: {U_TOPIC}
Dział: {U_FORUM}
Forum: {U_BOARD}

Dopóki nie zobaczysz tego wątku, nie otrzymasz żadnego następnego powiadomienia.

Jeśli nie chcesz już obserwować tego działu, kliknij na poniższy link:
{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Zgłoszenie zamknięte - "{PM_SUBJECT}"

Witaj {USERNAME},

Wysłane przez Ciebie zgłoszenie dotyczące wiadomości "{PM_SUBJECT}" zostało zamknięte przez moderatora lub administratora. Jeśli masz jakieś pytania, to skontaktuj się z {CLOSER_NAME} za pomocą prywatnej wiadomości.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Zgłoszenie usunięte - "{PM_SUBJECT}"

Witaj {USERNAME},

Wysłane przez Ciebie zgłoszenie dotyczące wiadomości "{PM_SUBJECT}" zostało usunięte przez moderatora lub administratora.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Post "{POST_SUBJECT}" został zaakceptowany

Witaj {USERNAME},

Twój post "{POST_SUBJECT}" w wątku "{TOPIC_TITLE}" został zaakceptowany przez moderatora lub administratora.

Post: {U_VIEW_POST}
Wątek, w którym go napisałeś: {U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Post "{POST_SUBJECT}" został odrzucony

Witaj {USERNAME},

Twój post "{POST_SUBJECT}" w wątku "{TOPIC_TITLE}" został odrzucony przez moderatora lub administratora.

Powód odrzucenia:
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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - {AUTHOR_NAME} wysłał(a) Ci wiadomość

Witaj {USERNAME},

{AUTHOR_NAME} wysłał(a) Ci wiadomość pt. "{SUBJECT}".

Możesz ją zobaczyć klikając na ten link:
{U_VIEW_MESSAGE}

Prosiłeś/aś, żeby powiadamiać Cię, gdy przychodzą nowe wiadomości. Jeśli zmieniłeś/aś zdanie, możesz zrezygnować z powiadomień, zmieniając odpowiednie ustawienia w Twoim panelu użytkownika.

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
	'email/profile_send_email.txt' 		=> 'Witaj {TO_USERNAME},

Tę wiadomość wysłał(a) do Ciebie {FROM_USERNAME} przez Twoje konto na "{SITENAME}". Jeśli jest to spam lub zawiera obraźliwe treści, to wyślij informację o tym na ten adres e-mail:

{BOARD_CONTACT}

Załącz cały e-mail (szczególnie nagłówki). Zauważ, że adres e-mail nadawcy tej wiadomości został ustawiony na ten należący do {FROM_USERNAME}.

Treść wiadomości:
~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Witaj {TO_USERNAME},

Tę wiadomość wysłał(a) do Ciebie {FROM_USERNAME} przez Twoje konto na "{SITENAME}". Jeśli jest to spam lub zawiera obraźliwe treści, to wyślij informację o tym na ten adres e-mail:

{BOARD_CONTACT}

Załącz całą wiadomość. Zauważ, że adres nadawcy tej wiadomości został ustawiony na ten należący do forum.

Treść wiadomości:
~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Zgłoszenie zamknięte - "{POST_SUBJECT}"

Witaj {USERNAME},

Wysłane przez Ciebie zgłoszenie dotyczące postu "{POST_SUBJECT}" w wątku "{TOPIC_TITLE}" zostało zamknięte przez moderatora lub administratora. Jeśli masz jakieś pytania, to skontaktuj się z {CLOSER_NAME} za pomocą prywatnej wiadomości.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Zgłoszenie usunięte - "{POST_SUBJECT}"

Witaj {USERNAME},

Wysłane przez Ciebie zgłoszenie dotyczące postu "{POST_SUBJECT}" w wątku "{TOPIC_TITLE}" zostało usunięte przez moderatora lub administratora.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Wątek "{TOPIC_TITLE}" został zaakceptowany

Witaj {USERNAME},

Twój wątek "{TOPIC_TITLE}" został zaakceptowany przez moderatora lub administratora.

Link: {U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Wątek "{TOPIC_TITLE}" został odrzucony

Witaj {USERNAME},

Twój wątek "{TOPIC_TITLE}" został odrzucony przez moderatora lub administratora.

Powód odrzucenia:
{REASON}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Powiadomienie o odpowiedzi w wątku "{TOPIC_TITLE}"

Witaj {USERNAME},

Przed chwilą ktoś odpowiedział w wątku "{TOPIC_TITLE}".

Post: {U_NEWEST_POST}
Wątek: {U_TOPIC}
Dział: {U_FORUM}
Forum: {U_BOARD}

Dopóki nie zobaczysz tego wątku, nie otrzymasz żadnego następnego powiadomienia.

Jeśli nie chcesz już obserwować tego wątku, kliknij na poniższy link:
{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Ponownie aktywuj konto

Witaj {USERNAME},

Twoje konto zostało deaktywowane, najprawdopodobniej z powodu zmian w Twoim profilu.

Zanim będziesz mógł/mogła się zalogować, musisz je aktywować, klikając na poniższy link:
{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Twoje konto zostało deaktywowane

Witaj {USERNAME},

Twoje konto zostało deaktywowane, najprawdopodobniej z powodu zmian w Twoim profilu.

Zanim będziesz mógł/mogła się zalogować, musi zostać aktywowane przez administratora forum. Gdy to się stanie, otrzymasz kolejną wiadomość.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Aktywacja nowego hasła

Witaj {USERNAME},

Otrzymałeś/aś ten e-mail, ponieważ poprosiłeś/aś (lub ktoś podszywający się pod Ciebie poprosił) o zmianę hasła Twojego konta na inne. Jeśli nie prosiłeś/aś o to, to zignoruj ten list, a jeżeli ciągle go otrzymujesz, to skontaktuj się z administratorem forum.

Aby używać nowego hasła, musisz je aktywować, klikając na poniższy link:
{U_ACTIVATE}

Jeśli aktywacja się powiedzie, to będziesz mógł/mogła zalogować się używając tego hasła:
{PASSWORD}

Możesz oczywiście zmienić hasło samodzielnie, korzystając z panelu użytkownika. Jeśli masz z tym problemy, skontaktuj się z administratorem forum.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Aktywuj ponownie swoje konto

Witaj {USERNAME},

Administrator forum poprosił o ponowną aktywację Twojego konta.

Zanim będziesz mógł/mogła się zalogować, musisz je aktywować, klikając na poniższy link:
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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Przypomnienie o nieaktywnym koncie

Witaj {USERNAME},

{REGISTER_DATE} zarejestrowałeś/aś nowe konto na forum "{SITENAME}". Do tej pory go jeszcze nie aktywowałeś/aś. Nie będziesz mógł/mogła go używać, póki nie klikniesz na poniższy link:
{U_ACTIVATE}

Dziękujemy za rejestrację.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Witamy na forum

Witaj {USERNAME},

Twoje konto zostało utworzone, ale jest obecnie nieaktywne.

Adres forum: {U_BOARD}

Zanim będziesz mógł/mogła się zalogować, musisz je aktywować, klikając na poniższy link:
{U_ACTIVATE}

Twoje hasło zostało bezpiecznie zaszyfrowane w bazie danych i jego odzyskanie jest niewykonalne. Jeśli je zapomnisz, będziesz mógł/mogła poprosić o nowe, używając adresu e-mail powiązanego z kontem.

Dziękujemy za rejestrację.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Witamy na forum

Witaj {USERNAME},

Twoje konto zostało utworzone.

Adres forum: {U_BOARD}

Twoje hasło zostało bezpiecznie zaszyfrowane w bazie danych i jego odzyskanie jest niewykonalne. Jeśli je zapomnisz, będziesz mógł/mogła poprosić o nowe, używając adresu e-mail powiązanego z kontem.

Dziękujemy za rejestrację.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Witamy na forum

Witaj {USERNAME},

Twoje konto zostało utworzone, ale jest obecnie nieaktywne.

Adres forum: {U_BOARD}

Zanim będziesz mógł/mogła się zalogować, musisz je aktywować, klikając na poniższy link:
{U_ACTIVATE}

Twoje hasło zostało bezpiecznie zaszyfrowane w bazie danych i jego odzyskanie jest niewykonalne. Jeśli je zapomnisz, będziesz mógł/mogła poprosić o nowe, używając adresu e-mail powiązanego z kontem.

Dziękujemy za rejestrację.

{EMAIL_SIG}',
));


