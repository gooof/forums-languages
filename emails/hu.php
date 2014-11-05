<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Azonosító aktiválása

Üdvözlünk!

A "{USERNAME}" nevű azonosító deaktiválásra került, vagy újonnan létre lett hozva. Ellenőrizheted a felhasználó által megadott adatokat (amennyiben szükségesnek tartod) majd megteheted a szükséges lépéseket.

A következő linkre kattintva a felhasználó profiljához jutsz:
{U_USER_DETAILS}

A következő linkkel tudod aktiválni az azonosítót:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
A következő e-mailt a "{SITENAME}" fórum egyik adminisztrátora küldte neked. Amennyiben ez az üzenet kéretlen levél, sértő vagy egyéb támadó megjegyzéseket tartalmaz számodra, kérünk, lépj kapcsolatba az oldal adminisztrátorával a következő e-mail címen:

{CONTACT_EMAIL}

Idézd ezt az e-mailt (különösen ügyelve a fejlécre). 

A neked szóló e-mail a következő:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Azonosítód aktiválásra került!

Kedves {USERNAME}!

Az azonosítód a "{SITENAME}" oldalon aktiválásra került, most már beléphetsz regisztrált felhasználóneveddel.

A jelszavad biztonságosan került eltárolásra az adatbázisunkban, így nincs mód a kiderítésére. Ha esetleg mégis elfelejtenéd, akkor az azonosítódhoz társított e-mail cím segítségével igényelhetsz egy újat.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Üdvözlünk a "{SITENAME}" fórumon

{WELCOME_MSG}

Őrizd meg ezt az e-mailt, mert elképzelhető, hogy a későbbiekben szükséged lesz rá. A fórumon létrehozott azonosító információi:

----------------------------
Felhasználónév: {USERNAME}

Fórum URL: {U_BOARD}
----------------------------

A felhasználói azonosítód jelenleg inaktív, használatba vétele előtt a fórum adminisztrátorának aktiválnia kell. Amint megtörtént, egy másik értesítőt fogsz erről kapni e-mailben.

A jelszavad biztonságosan került eltárolásra az adatbázisunkban, így nincs mód a kiderítésére. Ha esetleg mégis elfelejtenéd, akkor az azonosítódhoz társított e-mail cím segítségével igényelhetsz egy újat.

Köszönjük, hogy regisztráltál!

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Üdvözlünk a "{SITENAME}" fórumon!

{WELCOME_MSG}

A COPPA szabályainak értelmében az azonosítód jelenleg inaktív.

Nyomtasd ki az alábbi üzenetet, és kérd meg egy szülődet vagy gondviselődet, hogy írja alá, majd küldje el faxon az alábbi FAX-számra:

{FAX_INFO}

vagy küldje el postai levélben a következő postacímre:

{MAIL_INFO}

------------------------------ PERFORÁCIÓ ------------------------------
Engedély a "{SITENAME}" ({U_BOARD}) oldal fórumához történő csatlakozáshoz.

Felhasználónév: {USERNAME}
E-mail cím: {EMAIL_ADDRESS}

ELLENŐRIZTEM A GONDVISELETEMBEN LEVŐ FIATALKORÚ ÁLTAL MEGADOTT INFORMÁCIÓKAT, ÉS HOZZÁJÁRULOK, HOGY AZ ÁLTALA MEGADOTT ADATOKAT A "{SITENAME}" OLDAL FÓRUMÁN TÁROLJÁK.
TISZTÁBAN VAGYOK VELE, HOGY EZEKET AZ ADATOKAT EGY JELSZÓ BEÍRÁSÁVAL BÁRMIKOR MEG LEHET VÁLTOZTATNI.
TISZTÁBAN VAGYOK VELE, HOGY BÁRMIKOR KÉRVÉNYEZHETEM EZEN ADATOK TÖRLÉSÉT A "{SITENAME}" OLDAL FÓRUMÁBÓL. 


Szülő vagy gondviselő
(olvasható név): _____________________

(aláírás): __________________ 

Dátum: _______________

------------------------------ PERFORÁCIÓ ------------------------------


Amint az adminisztrátorok megkapták a fenti engedélyt faxon vagy postán, az azonosító aktiválásra kerül.

A jelszavad biztonságosan került eltárolásra az adatbázisunkban, így nincs mód a kiderítésére. Ha esetleg mégis elfelejtenéd, akkor az azonosítódhoz társított e-mail cím segítségével igényelhetsz egy újat.

Köszönjük, hogy regisztráltál!

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Üdvözlünk a "{SITENAME}" fórumon!

{WELCOME_MSG}

A COPPA szabályainak értelmében az azonosítód jelenleg inaktív.

Nyomtasd ki az alábbi üzenetet, és kérd meg egy szülődet vagy gondviselődet, hogy írja alá, majd küldje el faxon az alábbi FAX-számra:

{FAX_INFO}

vagy küldje el postai levélben a következő postacímre:

{MAIL_INFO}

------------------------------ PERFORÁCIÓ ------------------------------
Engedély a "{SITENAME}" ({U_BOARD}) oldal fórumához történő csatlakozáshoz.

Felhasználónév: {USERNAME}
E-mail cím: {EMAIL_ADDRESS}

ELLENŐRIZTEM A GONDVISELETEMBEN LEVŐ FIATALKORÚ ÁLTAL MEGADOTT INFORMÁCIÓKAT, ÉS HOZZÁJÁRULOK, HOGY AZ ÁLTALA MEGADOTT ADATOKAT A "{SITENAME}" OLDAL FÓRUMÁN TÁROLJÁK.
TISZTÁBAN VAGYOK VELE, HOGY EZEKET AZ ADATOKAT EGY JELSZÓ BEÍRÁSÁVAL BÁRMIKOR MEG LEHET VÁLTOZTATNI.
TISZTÁBAN VAGYOK VELE, HOGY BÁRMIKOR KÉRVÉNYEZHETEM EZEN ADATOK TÖRLÉSÉT A "{SITENAME}" OLDAL FÓRUMÁBÓL. 


Szülő vagy gondviselő
(olvasható név): _____________________

(aláírás): __________________ 

Dátum: _______________

------------------------------ PERFORÁCIÓ ------------------------------


Amint az adminisztrátorok megkapták a fenti engedélyt faxon vagy postán, az azonosító aktiválásra kerül.

A jelszavad biztonságosan került eltárolásra az adatbázisunkban, így nincs mód a kiderítésére. Ha esetleg mégis elfelejtenéd, akkor az azonosítódhoz társított e-mail cím segítségével igényelhetsz egy újat.

Köszönjük, hogy regisztráltál!

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - e-mail egy barátodtól

Kedves {TO_USERNAME}!

Ezt az e-mailt a "{SITENAME}" fórumról {FROM_USERNAME} küldte neked, mert azt gondolta, a következő téma érdekelni fog: {TOPIC_NAME}

A következő linkre kattintva megtekintheted a témát:

{U_TOPIC}

{FROM_USERNAME} lehet, hogy megjegyzést is fűzött a levélhez, amit alább olvashatsz. Kérjük, vedd figyelembe, hogy a következő üznetetet nem látta a fórum adminisztrátora. Ha problémát jelent számodra ezen üzenet tartalma, lépj kapcsolatba a fórum adminisztrátorával a következő címen: {BOARD_CONTACT}. Amennyiben kapcsolatba lépsz, kérjük, idézd ezt az e-mailt is, különös tekintettel a fejlécre.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Fórumfigyelés értesítés - "{FORUM_NAME}"

Kedves {USERNAME}!

Ezt az e-mailt azért kapod, mert a "{SITENAME}" oldalon, a "{FORUM_NAME}" fórum figyelését kérted. Ebbe a fórumba, legutóbbi látogatásod óta, új hozzászólás érkezett a "{TOPIC_TITLE}" témába. A következő linkre kattintva eljuthatsz a legutóbbi olvasatlan válaszhoz, mindazonáltal újabb értesítést nem fogsz kapni, míg meg nem látogatod a fórumot.

{U_NEWEST_POST}

A téma megtekintéséhez kattints a következő linkre:
{U_TOPIC}

A fórum megtekintéséhez kattints a következő linkre:
{U_FORUM}

Amennyiben a továbbiakban nem kívánod figyelni a fórumot, kattints a "Leiratkozás a fórumról" linkre, melyet a fenti oldalon találsz, vagy egyszerűen kattints a következő linkre:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Sikeresen csatlakoztál egy felhasználói csoporthoz

Gratulálunk!

A "{SITENAME}" oldalon hozzáadásra kerültél a "{GROUP_NAME}" csoporthoz.
Ezt a fórum adminisztrátorának, vagy a csoport vezetőjének köszönheted. További információért fordult hozzájuk.

A csoport információit a következő linkre kattintva érheted el:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Csatlakozási kérelem a csoportodhoz

Kedves {USERNAME}!

"{REQUEST_USERNAME}" jelezte, hogy csatlakozni szeretne a "{SITENAME}" oldalon a "{GROUP_NAME}" csoporthoz, melynek te vagy a vezetője.
A csatlakozási kérelem elfogadásához vagy elutasításához látogass el a következő oldalra:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB telepítve

Gratulálunk!

Sikeresen telepítetted a phpBB-t a szerveredre.

Ez az e-mail fontos információkat tartalmaz az épp telepített fórumról, gondosan őrizd meg. A jelszavad biztonságosan került eltárolásra az adatbázisunkban, így nincs mód a kiderítésére. Ha esetleg mégis elfelejtenéd, akkor az azonosítódhoz társított e-mail cím segítségével igényelhetsz egy újat.

----------------------------
Felhasználónév: {USERNAME}

Fórum URL: {U_BOARD}
----------------------------

További hasznos információkat és a dokumentációt megtalálod a fórumod "docs" könyvtárában vagy a phpBB.com felhasználói segítségnyújtási oldalán a következő linken: http://www.phpbb.com/support/

Annak érdekében, hogy a fórumod biztonságos legyen, kimondottan javasoljuk, hogy tarts lépést a frissítésekkel. Ennek megkönnyítése érdekében a fenti oldalon feliratkozhatsz egy levelezőlistára.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Fórumfigyelés értesítés - "{FORUM_NAME}"

Kedves {USERNAME}!

Ezt az e-mailt azért kapod, mert a "{SITENAME}" oldalon a "{FORUM_NAME}" fórum figyelését kérted. Ebbe a fórumba, legutóbbi látogatásod óta új témát nyitottak, melynek címe: "{TOPIC_TITLE}". A következő linkre kattintva eljuthatsz az új témába, mindazonáltal újabb értesítést nem fogsz kapni, míg meg nem látogatod a fórumot.

{U_NEWEST_POST}

Amennyiben a továbbiakban nem kívánod figyelni a fórumot, kattints a "Leiratkozás a fórumról" linkre, melyet a fenti oldalon találsz, vagy egyszerűen kattints a következő linkre:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Jelentés lezárva - "{PM_SUBJECT}"

Kedves {USERNAME}!

Ezt az üzenetet azért kapod, mert a "{SITENAME}" oldalon a "{PM_SUBJECT}" privát üzenettel kapcsolatos jelentésed egy moderátor vagy adminisztrátor áttekintette. A jelentés lezárásra került. Amennyiben további kérdéseid vannak, lépj kapcsolatba privát üzenetben a jelentés lezárójával: {CLOSER_NAME}.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Jelentés törölve - "{PM_SUBJECT}"

Kedves {USERNAME}!

Ezt az üzenetet azért kapod, mert a "{SITENAME}" oldalon a "{PM_SUBJECT}" privát üzenettel kapcsolatos jelentésed egy moderátor vagy adminisztrátor törölte.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Hozzászólásod jóváhagyásra került - "{POST_SUBJECT}"

Kedves {USERNAME}!

Ezt az üzenetet azért kapod, mert a "{POST_SUBJECT}" témájú hozzászólásod a "{SITENAME}" oldalon jóváhagyásra került egy adminisztrátor vagy egy moderátor által.

Amennyiben meg szeretnéd tekinteni a hozzászólást, kattints a következő linkre:
{U_VIEW_POST}

Amennyiben meg szeretnéd tekinteni a témát, melyhez hozzászóltál, kattints a következő linkre:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Hozzászólásod elutasításra került - "{POST_SUBJECT}"

Kedves {USERNAME}!

Ezt az üzenetet azért kapod, mert a "{POST_SUBJECT}" témájú hozzászólásod a "{SITENAME}" oldalon elutasításra került egy adminisztrátor vagy egy moderátor által.

Az elutasítás indoka a következő:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Új privát üzeneted érkezett - "{FORUM_NAME}"

Kedves {USERNAME}!

A "{SITENAME}" oldalon új privát üzenetet kaptál, melynek feladója "{AUTHOR_NAME}". Az üzenet témája:
{SUBJECT}

A következő linkre kattintva tekintheted meg az érkezett üzenetet:

{U_VIEW_MESSAGE}

Ezt az e-mailt azért kapod, mert beállítottad, hogy privát üzenet érkezéséről értesülni szeretnél. Ne felejtsd el, hogy bármikor kikapcsolhatod az ilyen értesítéseket a felhasználói vezérlőpultban.

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
Kedves {TO_USERNAME}!

A következő üzenetet a "{SITENAME}" fórumról {FROM_USERNAME} küldte neked. Amennyiben ez az üzenet kéretlen, illetve számodra sértő vagy egyéb támadó megjegyzést tartalmaz, kérünk, lépj kapcsolatba az oldal adminisztrátorával a következő e-mail címen:

{BOARD_CONTACT}

A levélhez mellékeld ezt az üzenetet (különösen ügyelve a fejlécre). Ennek a levélnek a válaszcíme {FROM_USERNAME} e-mail címére van beállítva, így a választ ő kapja meg.

Az üzenet a következő:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Kedves {TO_USERNAME}!

A következő üzenetet a "{SITENAME}" fórumról {FROM_USERNAME} küldte neked. Amennyiben ez az üzenet kéretlen, illetve számodra sértő vagy egyéb támadó megjegyzést tartalmaz, kérünk, lépj kapcsolatba az oldal adminisztrátorával a következő e-mail címen:

{BOARD_CONTACT}

A levélhez mellékeld ezt az üzenetet. Kérjük, vedd figyelembe, hogy az üzenet küldőjének a fórum IM azonosítója került beállításra.

Az üzenet a következő:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Jelentés lezárva - "{POST_SUBJECT}"

Kedves {USERNAME}!

Ezt az üzenetet azért kapod, mert a "{SITENAME}" oldalon, a "{POST_SUBJECT}" hozzászólást a "{TOPIC_TITLE} témában jelentetted az adminisztrátorok és moderátorok felé. A jelentésed kezelése befejeződött, s ezzel lezárult. Amennyiben további kérdéseid vannak, lépj kapcsolatba privát üzenetben a jelentés lezárójával: {CLOSER_NAME}.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Jelentés törölve - "{POST_SUBJECT}"

Kedves {USERNAME}!

Ezt az üzenetet azért kapod, mert a "{SITENAME}" oldalon a "{POST_SUBJECT}" hozzászólást a "{TOPIC_TITLE} témában jelentetted az adminisztrátorok és moderátorok felé. A jelentésed törlésre került.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Téma jóváhagyva - "{TOPIC_TITLE}"

Kedves {USERNAME}!

Ezt az üzenetet azért kapod, mert a "{SITENAME}" oldalon az általad nyitott "{TOPIC_TITLE} témát jóváhagyta egy moderátor vagy egy adminisztrátor.

A témát megtekintheted a következő linkre kattintva:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Téma elutasítva - "{TOPIC_TITLE}"

Kedves {USERNAME}!

Ezt az üzenetet azért kapod, mert a "{SITENAME}" oldalon az általad nyitott "{TOPIC_TITLE}" témát egy moderátor vagy egy adminisztrátor elutasította.

Az elutasítás oka a következő:
{REASON}


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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Aktiváld az azonosítód

Kedves {USERNAME}!

Az azonosítód a "{SITENAME}" oldalon deaktiválásra került, valószínűleg a profilodban történt változások miatt. Ahhoz, hogy újra aktív legyen, kattints a következő linkre:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Deaktivált azonosító

Kedves {USERNAME}!

Az azonosítód a "{SITENAME}" oldalon deaktiválásra került, valószínűleg a profilodban történt változások miatt. Ahhoz, hogy újra aktív legyen, egy adminisztrátornak aktiválnia kell azt. Amint ez megtörténik, küldünk egy újabb értesítést.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Új jelszó aktiválása

Kedves {USERNAME}!

Ezt az üzenetet azért kapod, mert te (vagy valaki a te nevedben) új jelszót kért a "{SITENAME}" oldalon levő azonosítódhoz. Ha nem te kérted ezt az üzenetet, úgy hagyd figyelmen kívül. Amennyiben továbbra is hasonlókat kapsz, vedd fel a kapcsolatot az oldal adminisztrátorával.

Ahhoz, hogy használni tudd az új jelszót, aktiválod kell, ehhez kattints az alábbi linkre.

{U_ACTIVATE}

Ha ez sikeres volt, az alábbi jelszóval tudsz majd belépni:

Jelszó: {PASSWORD}

Természetesen ezt a jelszót meg tudod változtatni a profilodban. Amennyiben bármilyen problémád adódik, vedd fel a kapcsolatot az oldal adminisztrátorával.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Aktiváld újra az azonosítód az "{SITENAME}" oldalon!

A fórum egyik adminisztrátora újraaktiválásra kötelezte az azonosítód. Az azonosítód jelenleg inaktív.
Az azonosítód újraaktiválásához kövesd a következő lépéseket.

Kérjük, tartsd meg ezt az üzenetet. Az azonosítód adatai a következőek:

----------------------------
Felhasználónév: {USERNAME}
----------------------------

A jelszavad biztonságosan került eltárolásra az adatbázisunkban, így nincs mód a kiderítésére. Ha esetleg mégis elfelejtenéd, akkor az azonosítódhoz társított e-mail cím segítségével igényelhetsz egy újat.

Az azonosítód újraaktiválásához kattints az alábbi linkre:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Inaktív azonosító figyelmeztetés

Kedves {USERNAME}!

Ez az értesítő egy emlékeztető, hogy a "{SITENAME}" oldalon {REGISTER_DATE}-kor regisztrált azonosítód máig inaktív. Amennyiben aktiválni szeretnéd az azonosítód, látogass el a következő linkre:

{U_ACTIVATE}

Köszönjük, hogy regisztráltál a "{SITENAME}" oldalon, várjuk a közreműködésed.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Üdvözlünk a "{SITENAME}" fórumon!

{WELCOME_MSG}

Kérünk, tartsd meg ezt az üzenetet a továbbiakban. Az azonosítód adatai a következőek:

----------------------------
Felhasználónév: {USERNAME}
----------------------------

A jelszavad biztonságosan került eltárolásra az adatbázisunkban, így nincs mód a kiderítésére. Ha esetleg mégis elfelejtenéd, akkor az azonosítódhoz társított e-mail cím segítségével igényelhetsz egy újat.

Az azonosítód a következő linkre kattintva aktiválhatod:

{U_ACTIVATE}

Köszönjük, hogy regisztráltál!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Üdvözlünk a "{SITENAME}" fórumon!

{WELCOME_MSG}

Kérünk, tartsd meg ezt az üzenetet. Az azonosítód adatai a következőek:

----------------------------
Felhasználónév: {USERNAME}
{PASSWORD_EXTRA_LINE}
Fórum URL: {U_BOARD}
----------------------------

A jelszavad biztonságosan került eltárolásra az adatbázisunkban, így nincs mód a kiderítésére. Ha esetleg mégis elfelejtenéd, akkor az azonosítódhoz társított e-mail cím segítségével igényelhetsz egy újat.

Köszönjük, hogy regisztráltál!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Üdvözlünk a "{SITENAME}" fórumon!

{WELCOME_MSG}

Kérünk, tartsd meg ezt az üzenetet. Az azonosítód adatai a következőek:

----------------------------
Felhasználónév: {USERNAME}
{PASSWORD_EXTRA_LINE}
Fórum URL: {U_BOARD}
----------------------------

Az azonosítód jelenleg inaktív. A következő linkre kattintva aktiválhatod:

{U_ACTIVATE}

A jelszavad biztonságosan került eltárolásra az adatbázisunkban, így nincs mód a kiderítésére. Ha esetleg mégis elfelejtenéd, akkor az azonosítódhoz társított e-mail cím segítségével igényelhetsz egy újat.

Köszönjük, hogy regisztráltál!

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
