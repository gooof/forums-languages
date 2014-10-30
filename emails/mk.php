<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '﻿{EMAILSUBJECT:} активирање на членски акаунт

Здраво,

Овој акаунт во сопственост на "{USERNAME}" беше деактивиран или ново регистриран, проверете ги деталите за овој член (ако е потребно) и средете го соодветно.

Искористете го овој линк за да го видите профилот на овој член:
{U_USER_DETAILS}

Искористете го овој линк за да го видите акаунтот на овој член:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '﻿
Следната мејл порака е испратена од администраторите на "{SITENAME}". Ако оваа порака е спам, содржи навредливи работи или други коментари, ве молиме директно конатктирајте го Основачот на форумот или пак пријавете на следниот мејл:

{CONTACT_EMAIL}

Доколку ги контактирате администраторите вклучете ја и оваа порака целосно.

Пораката што ја добивте е следната:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '﻿{EMAILSUBJECT:} Акаунтот е активиран

Здраво {USERNAME},

Вашиот акаунт на "{SITENAME}" беше активиран од администраторите, сега може да се логирате .

Вашата лозинка е сочувана во датабазата на форумот, и неможе да биде променете или избришана. Во случај да ја заборавите, имате можност да ја ресетирате користејќи ја вашата мејл адреса со која сте се регистрирале.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '﻿{EMAILSUBJECT:} Добредојдовте на "{SITENAME}"

{WELCOME_MSG}

Вашите акаунт информации се следните:

----------------------------
Членско име: {USERNAME}

Линк до форумот: {U_BOARD}
----------------------------

Вашиот акаунт е моментално неактивен и треба да биде одобрен од администраторите на форумот пред да можете да се логирате на форумот. Ќе добиете друг мејл кога вашиот акаунт ќе биде активиран.

Вашата лозинка е сочувана во датабазата на форумот, и неможе да биде променете или избришана. Во случај да ја заборавите, имате можност да ја ресетирате користејќи ја вашата мејл адреса со која сте се регистрирале.

Ви благодариме што се регистриравте на форумот.

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
	'email/coppa_resend_inactive.txt' 		=> '﻿{EMAILSUBJECT:} Добредојдовте на "{SITENAME}"

{WELCOME_MSG}

Со запазување за законот за малолетници, вашиот акаунт е моментално неактивен.

Ве молиме испринтајте ја оваа порака и дајте им ја на вашите родители или старатели да ја потпишат и исто така да внесат датум на потпишување. Псле тоа испратете ни ја по факс на:

{FAX_INFO}

Или на мејл поштата на:

{MAIL_INFO}

------------------------------ Одсечете го ова ------------------------------
Дозвола за членство на "{SITENAME}" - {U_BOARD}

Членско име: {USERNAME}
Мејл: {EMAIL_ADDRESS}

ЈАС ГИ РАЗГЛЕДАВ СИТЕ ИНФОРМАЦИИ КОИ МИ ГИ ДОСТАВИ МОЕТО ДЕТЕ И ДОЗВОЛУВАМ НА "{SITENAME}" ДА ГИ ЗАЧУВА И ОДОБРИ ОВИЕ ИНФОРМАЦИИ. 
РАЗБИРАМ ДЕКА ОВАА ИНФОРМАЦИЈА МОЖЕ ДА БИДЕ ПРОМЕНЕТА ВО БИЛО КОЕ ВРЕМЕ СО ВНЕСУВАЊЕ НА ЛОЗИНКАТА. 
иСТО ТАКА РАЗБИРМ ДЕКА МОЖАМ ДА ПОБАРАМ ОВАА ИНФОРМАЦИЈА ДА БИДЕ ОДСТРАНЕТА ОД "{SITENAME}" ВО БИЛО КОЕ ВРЕМЕ.


Родител или старател 
(Вашето име со кирилични букви): _____________________

(Ваш потпис): __________________ 

Датум: _______________

------------------------------ Одсечете го ова ------------------------------


веднаш по добивањето на оваа форма по факс или мејл вашиот акаунт ќе биде активиран.

Вашата лозинка е сочувана во датабазата и неможе изменета или поправена. Ако во случај ја заборавите лозинката, имате опција за ресетирање на истата користејќи го вашиот мејл со кој се регистриравте.

Ви благодариме за вашата регистрација.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '﻿{EMAILSUBJECT:} Добредојдовте на "{SITENAME}"

{WELCOME_MSG}

Со запазување за законот за малолетници, вашиот акаунт е моментално неактивен.

Ве молиме испринтајте ја оваа порака и дајте им ја на вашите родители или старатели да ја потпишат и исто така да внесат датум на потпишување. Псле тоа испратете ни ја по факс на:

{FAX_INFO}

Или на мејл поштата на:

{MAIL_INFO}

------------------------------ Одсечете го ова ------------------------------
Дозвола за членство на "{SITENAME}" - {U_BOARD}

Членско име: {USERNAME}
Мејл: {EMAIL_ADDRESS}

ЈАС ГИ РАЗГЛЕДАВ СИТЕ ИНФОРМАЦИИ КОИ МИ ГИ ДОСТАВИ МОЕТО ДЕТЕ И ДОЗВОЛУВАМ НА "{SITENAME}" ДА ГИ ЗАЧУВА И ОДОБРИ ОВИЕ ИНФОРМАЦИИ. 
РАЗБИРАМ ДЕКА ОВАА ИНФОРМАЦИЈА МОЖЕ ДА БИДЕ ПРОМЕНЕТА ВО БИЛО КОЕ ВРЕМЕ СО ВНЕСУВАЊЕ НА ЛОЗИНКАТА. 
иСТО ТАКА РАЗБИРМ ДЕКА МОЖАМ ДА ПОБАРАМ ОВАА ИНФОРМАЦИЈА ДА БИДЕ ОДСТРАНЕТА ОД "{SITENAME}" ВО БИЛО КОЕ ВРЕМЕ.


Родител или старател 
(Вашето име со кирилични букви): _____________________

(Ваш потпис): __________________ 

Датум: _______________

------------------------------ Одсечете го ова ------------------------------


веднаш по добивањето на оваа форма по факс или мејл вашиот акаунт ќе биде активиран.

Вашата лозинка е сочувана во датабазата и неможе изменета или поправена. Ако во случај ја заборавите лозинката, имате опција за ресетирање на истата користејќи го вашиот мејл со кој се регистриравте.

Ви благодариме за вашата регистрација.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '﻿{EMAILSUBJECT:} "{SITENAME}" - Мејл до пријател

Здраво {TO_USERNAME},

Овој мејл е пратен од "{SITENAME}" од {FROM_USERNAME} кој мисли дека вие може да бидете заинтересирани за следната темаc:

{TOPIC_NAME}

Може да ја најдете на:

{U_TOPIC}

Порака од {FROM_USERNAME} е вклучена подолу. Ве молиме запамтете дека ова порака не е одобрена од администраторите на форумот. Ако сакате да се пожалите во врска со примањето на оваа порака контактирајте ги администраторите на форумот {BOARD_CONTACT}. Ве молиме цитирајте ја пораката која сте ја добиле кога ќе ги контактирате администраторите.

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
	'email/forum_notify.txt' 		=> '﻿{EMAILSUBJECT:} Известување за мислење во форум - "{FORUM_NAME}"

Здраво {USERNAME},

Вие ја добивате оваа информација бидејќи го пратите овој форум, "{FORUM_NAME}" на "{SITENAME}". Овој форум има ново мислење во темата "{TOPIC_TITLE}" од вашата последна посета. Може да го искористите линкот подолу за да го видите непрочитаното мислење, нема да добивате повеќе информации за оваа тема доека не ја посетите.

{U_NEWEST_POST}

Ако сакате да ја видите темата, кликнете на следниот линк:
{U_TOPIC}

Ако сакате да го видите форумот, кликнете на следниот линк:
{U_FORUM}

Ако не сакате да го добивате известувања за овој форум, кликнете на "Престани со надгледување на форумот" линкот на форумот долу, или направете го тоа со кликање на следниот линк:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '﻿{EMAILSUBJECT:} Вие бевте додадени во оваа членска група

Честитки,

Вие бевте додадени во групата "{GROUP_NAME}" на  "{SITENAME}".
ова акција е направена од лидерот на групата или администраторите на форумот, контактирајте ги за повеќе информации.

Информацијата за вашата група може да ја видите овде:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '﻿{EMAILSUBJECT:} Направено е барање за приклучување во група

Почитувани {USERNAME},

Членот "{REQUEST_USERNAME}" испрати барање да се приклучи во групата "{GROUP_NAME}" вие имате модераторски права за ова на "{SITENAME}".
За да го одбрите или одбиете ова барање за членство во група ве молиме постете го линкот подолу:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '﻿{EMAILSUBJECT:} phpBB е успешно инсталиран

Честитки,

Вие успешно го инсталиравте phpBB на вашиот сервер.

Овој мејл ги содржи сите потребни информации за инсталацијата и треба да бидат сочувани за ваша потреба. Вашата лозинка е успешно сочувана во датабазата и неможе да биде избришана или променета. Доколку сте ја заборавиле имате можност да ја ресетирате користејќи го мејлот кој го внесовте при регистрацијата.

----------------------------
Членско име: {USERNAME}

Линк на форумот: {U_BOARD}
----------------------------

Корисни информации за phpBB софтверот моќат да се најдат во docs фолдерот од вашата инсталација или пак на  phpBB страната за подршка - http://www.phpbb.com/support/

Со цел вашиот форум да биде безбеден и сигурен, ви препорачуваме да останете во тек со последните верзии на софтверот. За ваша погодност, мејл листа е достапна на странат реферирана погоре.

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
	'email/newtopic_notify.txt' 		=> '﻿{EMAILSUBJECT:} Известување за нова тема - "{FORUM_NAME}"

Здраво {USERNAME},

Го добивате ова известување бидејќи се имате преплатено за пратење на форумот, "{FORUM_NAME}" на "{SITENAME}". Овој форум има нова тема од вашата последна посета, "{TOPIC_TITLE}". Искористете го следниот линк за да го видите форумот, нема да добивате повеќе исвестувања се додека него посетите форумот.

{U_FORUM}

Ако сакате да престанете со следење на форумот кликнете на "Престани со надгледување на форумот" линкот на дното на форумот, или со кликање на следниот линк:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '﻿{EMAILSUBJECT:} Пријавувањето е затворено - "{PM_SUBJECT}"

Здраво {USERNAME},

Го добивате ова известување бидејќи вашето пријавување на приватната порака "{PM_SUBJECT}" на "{SITENAME}" беше решено од модераторите или администраторите. Пријавувањето е затворено. Ако имате било какви прашања околу ова, ве молиме конттактирајте го {CLOSER_NAME} преку приватна порака.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '﻿{EMAILSUBJECT:} Пријавувањето е избришано - "{PM_SUBJECT}"

Здраво {USERNAME},

Го добивате ова известување бидејќи вашето пријавување на приватната порака "{PM_SUBJECT}" на "{SITENAME}" беше избришано од модераторите или администраторите.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '﻿{EMAILSUBJECT:} Мислењето е одобрено - "{POST_SUBJECT}"

Здраво {USERNAME},

Го добивате ова известување бидејќи вашето мислење "{POST_SUBJECT}" на "{SITENAME}" беше одобрено од модераторите или администраторите.

Ако сакате да го видите мислењето, кликнете на следниот линк:
{U_VIEW_POST}

Ако сакате да ја видите темата, кликнете на следниот линк:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '﻿{EMAILSUBJECT:} Мислењето не е одобрено - "{POST_SUBJECT}"

Здраво {USERNAME},

Го добивате ова известување бидејќи вашето мислење "{POST_SUBJECT}" на "{SITENAME}" не беше одобрено од модераторите или администраторите.

Следната причина беше дадена за неодобрувањето:

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
	'email/privmsg_notify.txt' 		=> '﻿{EMAILSUBJECT:} Добивте нова приватна порака

Здраво {USERNAME},

Добивте приватна порака од "{AUTHOR_NAME}" на вашиот акаунт на "{SITENAME}" со следниот наслов:

{SUBJECT}

Може да ја видите и прочитате пораката на следниот линк:

{U_INBOX}

Вие побаравте да бидете известени за нови приватни пораки, запомнете дека може и да не добивате известувања со изменување на подесувањата на вашиот профил.

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
	'email/profile_send_email.txt' 		=> '﻿
Здраво {TO_USERNAME},

Следната порака е мејл пратен до вас од {FROM_USERNAME} со акаунт на "{SITENAME}". Доколку оваа порака е спам, содржи навредливи коментари или слично ве молиме контактирајте ги администраторите на форумот на следната мејл адреса:

{BOARD_CONTACT}

Доколку ги контактирате администраторите вклучете ја и оваа порака целосно. Ве молиме запомнете дека адресата преку која е испратена е наместена на членскиот мејл од {FROM_USERNAME}.

Пораката која е испратена до вас е:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '﻿
Здраво {TO_USERNAME},

Оваа порака ви е испратена од {FROM_USERNAME} со акаунт на "{SITENAME}". Доколку оваа порака е спам, содржи навредливи коментари или слично ве молиме контактирајте ги администраторите на форумот на следната мејл адреса:

{BOARD_CONTACT}

Доколку ги контактирате администраторите вклучете ја и оваа порака целосно. Ве молиме запомнете дека адресата преку која е испратена е наместена на форумската мејл адреса.

Пораката која е испратена до вас е:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '﻿{EMAILSUBJECT:} Пријавувањето е затворено - "{POST_SUBJECT}"

Здраво {USERNAME},

Ја добивате оваа информација бидејќи вашето пријавување на мислењето "{POST_SUBJECT}" во "{TOPIC_TITLE}" на "{SITENAME}" беше средено од модераторите или администраторите. Пријавувањето е затворено. Ако имате прашање околу ова ве молиме контактирајте го {CLOSER_NAME} преку приватна порака.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '﻿{EMAILSUBJECT:} Пријавувањето е избришано - "{POST_SUBJECT}"

Здраво {USERNAME},

Ја добивате оваа информација бидејќи вашето пријавување на мислењето "{POST_SUBJECT}" во "{TOPIC_TITLE}" на "{SITENAME}" беше избришано од модераторите или администраторите.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '﻿{EMAILSUBJECT:} Темата е одобрена - "{TOPIC_TITLE}"

Здраво {USERNAME},

Ја добивате оваа информација бидејќи вашата тема "{TOPIC_TITLE}" на "{SITENAME}" беше одобрена од модераторите или администраторите.

Ако сакате да ја видите вашата тема, кликнете на следниот линк:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '﻿{EMAILSUBJECT:} Темата не е одобрена  - "{TOPIC_TITLE}"

Здраво {USERNAME},

Ја добивате оваа информација бидејќи вашата тема "{TOPIC_TITLE}" на "{SITENAME}" не беше одобрена од модераторите или администраторите.

Следната причина беше дадена за неодобрувањето на темата:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because you are watching the topic "{TOPIC_TITLE}" at "{SITENAME}". This topic has received a reply<!-- IF AUTHOR_NAME !== '' --> by {AUTHOR_NAME}<!-- ENDIF --> since your last visit. No more notifications will be sent until you visit the topic.

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
	'email/user_activate.txt' 		=> '﻿{EMAILSUBJECT:} Реактивирајте го вашиот акаунт

Здраво {USERNAME},

Вашиот акаунт на "{SITENAME}" беше деактивиран, најверојатно поради промените на вашиот профил. За да го реактивирате вашиот акаунт кликнете на линкот кој е подолу:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '﻿{EMAILSUBJECT:} Вашиот акаунт беше деактивиран

Здраво {USERNAME},

Вашиот акаунт на "{SITENAME}" беше деактивиран, најверојатно поради промените направени на вашиот профил. Администраторите на форумот ќе треба да го активираат вашиот акаунт пред да може да се логирате. Ќе добиете друго известување кога вашиот акаунт ќе биде активиран.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '﻿{EMAILSUBJECT:} Активација на нова лозинка

Здраво {USERNAME}

Вие го добивате ова известување зашто побаравте (или некој друг побарал) да биде испратен нова лозинка за пристап на "{SITENAME}". Доколку вие не сте побарале да се промени лозинката тогаш игнорирајте ја оваа информација, ако продолжите да го добивате ова ве молиме контаактирајте ги администраторите на форумот.

За да ја користите новата лозинка, треба да ја активирате. За да ја активирате новата лозинка, кликнете на линкот подолу.

{U_ACTIVATE}

Ако активирањето е успешно вие ќе можете да се логирате со лозинката која е подолу:

Лозинка: {PASSWORD}

Оваа лозинка може да ја промените на вашиот членски контролен панел. Ако имате потешкотии околу ова ве молиме контактирајте ги администраторите на форумот.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '﻿{EMAILSUBJECT:} Реактивирајте го вашиот акаунт на "{SITENAME}"

Администраторите на форумот бараат вашиот акаунт да биде повторно активиран.
Ве молиме следете ги чекорите подолу за да го реактивирате вашиот акаунт.

Вашите акаунт информации се следните:

----------------------------
Членско име: {USERNAME}
----------------------------

Вашата лозинка е сочувана во датабазата на форумот, и неможе да биде променете или избришана. Во случај да ја заборавите, имате можност да ја ресетирате користејќи ја вашата мејл адреса со која сте се регистрирале.

Ве молиме кликнете или копирајте го овој линк и залепете го во полето за пишување веб адреси и кликнете ентер за да го активирате вашиот акаунт:

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
	'email/user_remind_inactive.txt' 		=> '﻿{EMAILSUBJECT:} Потсетник за неактивиран акаунт

Здраво {USERNAME},

Ова е потсетување дека вашиот акаунт на "{SITENAME}", креиран на {REGISTER_DATE}, е сеуште неактивен. Ако сакате да го активирате вашиот акаунт, ве молиме посетете го следниот линк:

{U_ACTIVATE}

Ви благодариме што се регистриравте на "{SITENAME}", ве молиме активирајте го вашиот акаунт за да имате целосен пристап на форумот.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '﻿{EMAILSUBJECT:} Добредојдовте на "{SITENAME}"

{WELCOME_MSG}

Вашите акаунт информации се следните::

----------------------------
Членско име: {USERNAME}
----------------------------

Вашата лозинка е сочувана во датабазата на форумот, и неможе да биде променете или избришана. Во случај да ја заборавите, имате можност да ја ресетирате користејќи ја вашата мејл адреса со која сте се регистрирале.

Ве молиме кликнете или копирајте го овој линк и залепете го во полето за пишување веб адреси и кликнете ентер за да го активирате вашиот акаунт:

{U_ACTIVATE}


Ви благодариме што се регистриравте на форумот.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '﻿{EMAILSUBJECT:} Добредојдовте на "{SITENAME}"

{WELCOME_MSG}

Вашите акаунт информации се следните:

----------------------------
Членско име: {USERNAME}
{PASSWORD_EXTRA_LINE}
Линк до форумот: {U_BOARD}
----------------------------

Вашата лозинка е сочувана во датабазата на форумот, и неможе да биде променете или избришана. Во случај да ја заборавите, имате можност да ја ресетирате користејќи ја вашата мејл адреса со која сте се регистрирале.

Ви благодариме што се регистриравте на форумот.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '﻿{EMAILSUBJECT:} Добредојдовте на "{SITENAME}"

{WELCOME_MSG}

Вашите акаунт информации се следните:

----------------------------
Членско име: {USERNAME}
{PASSWORD_EXTRA_LINE}
Линк до форумот: {U_BOARD}
----------------------------

Ве молиме кликнете или копирајте го овој линк и залепете го во полето за пишување веб адреси и кликнете ентер за да го активирате вашиот акаунт:

{U_ACTIVATE}

Вашата лозинка е сочувана во датабазата на форумот, и неможе да биде променете или избришана. Во случај да ја заборавите, имате можност да ја ресетирате користејќи ја вашата мејл адреса со која сте се регистрирале.

Ви благодариме што се регистриравте на форумот.

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
