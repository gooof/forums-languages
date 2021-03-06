﻿<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Актывуйце ўліковы запіс карыстальніка

Добры дзень!

Уліковы запіс карыстальніка {USERNAME} быў дэактываваны альбо зноўку створаны. Вы павінны праверыць профіль гэтага карыстальніка і (калі патрабуецца) актываваць яго.

Спасылка на прагляд профіля карыстальніка:
{U_USER_DETAILS}

Спасылка для актывацыі ўліковага запісу:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Гэты ліст адпраўлены вам адміністратарам канферэнцыі «{SITENAME}». Калі гэтае паведамленне з\'яўляецца спамам, утрымоўвае абразы або іншыя прыкрыя вам выказвання, калі ласка, звяжыцеся з адміністратарам канферэнцыі па адрасе:

{CONTACT_EMAIL}

Уключыце дадзенае паведамленне цалкам (асабліва загалоўкі).

Адпраўленае вам паведамленне:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Уліковы запіс актываваны

Добры дзень, {USERNAME}!

Ваш уліковы запіс на канферэнцыі «{SITENAME}» быў актываваны адміністратарам. Зараз вы можаце ўваходзіць на канферэнцыю. 

Ваш пароль быў захаваны ў бяспечным выглядзе ў базе дадзеных канферэнцыі. Калі Вы забудзеце пароль, то зможаце атрымаць новы, выкарыстоўваючы адрас email, зададзены пры рэгістрацыі.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Сардэчна запрашаем на канферэнцыю «{SITENAME}»

{WELCOME_MSG}

Калі ласка, захаваеце гэтае паведамленне. Параметры вашага ўліковага запісу такія:

----------------------------
Імя карыстальніка: {USERNAME}

Адрас канферэнцыі: {U_BOARD}
----------------------------

Ваш уліковы запіс зараз неактыўны і павінен быць адобраны адміністратарам перш, чым вы зможаце ўвайсці на канферэнцыю. Пасля актывацыі вашага ўліковага запісу вам прыйдзе яшчэ адно паведамленне. 

Ваш пароль надзейна захаваны ў нашай базе дадзеных і не можа быць здабыты з яе. Калі вы ўсё жа забудзецеся на свой пароль, то вы зможаце аднавіць яго, выкарыстоўваючы для гэтага адрас электроннай пошты, звязаны з вашым уліковым запісам. 

Дзякуем за рэгістрацыю!

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Сардэчна запрашаем на канферэнцыю «{SITENAME}»

{WELCOME_MSG}

У адпаведнасці з COPPA ваш уліковы запіс не быў актываваны.

Калі ласка, раздрукуйце гэтае паведамленне і папытаеце свайго бацьку або апякуна падпісаць яго і паставіць дату. Затым адпраўце яго па факсе:

{FAX_INFO}

Або па пошце:

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
Permission to participate at “{SITENAME}” - {U_BOARD}

Username: {USERNAME}
Email: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO “{SITENAME}” TO STORE THIS INFORMATION. 
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD. 
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM “{SITENAME}” AT ANY TIME.


Parent or guardian 
(print your name here): _____________________

(sign here): __________________ 

Date: _______________

------------------------------ CUT HERE ------------------------------


Як толькі адміністратар атрымае гэтую форму па факсе або па пошце, ваш уліковы запіс будзе актываваны.

Ваш пароль надзейна захаваны ў нашай базе дадзеных і не можа быць здабыты з яе. Калі вы ўсё жа забудзеце на свой пароль, то вы зможаце аднавіць яго, выкарыстоўваючы для гэтага адрас электроннай пошты, звязаны з вашым уліковым запісам.

Дзякуем за рэгістрацыю!

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Сардэчна запрашаем на канферэнцыю «{SITENAME}»

{WELCOME_MSG}

У адпаведнасці з COPPA ваш уліковы запіс не быў актываваны.

Калі ласка, раздрукуйце гэтае паведамленне і папытаеце свайго бацьку або апякуна падпісаць яго і паставіць дату. Затым адпраўце яго па факсе:

{FAX_INFO}

Або па пошце:

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
Permission to participate at “{SITENAME}” — {U_BOARD}

Username: {USERNAME}
Email: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO “{SITENAME}” TO STORE THIS INFORMATION. 
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD. 
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM “{SITENAME}” AT ANY TIME.


Parent or guardian 
(print your name here): _____________________

(sign here): __________________ 

Date: _______________

------------------------------ CUT HERE ------------------------------


Як толькі адміністратар атрымае гэтую форму па факсе або па пошце, ваш уліковы запіс будзе актываваны.

Ваш пароль надзейна захаваны ў нашай базе дадзеных і не можа быць здабыты з яе. Калі вы ўсё жа забудзеце свой пароль, то вы зможаце аднавіць яго, выкарыстоўваючы для гэтага адрас электроннай пошты, звязаны з вашым уліковым запісам.

Дзякуем за рэгістрацыю!

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} «{SITENAME}» — Ліст сябра

Добры дзень, {TO_USERNAME}!

Дадзены ліст быў адпраўлены з канферэнцыі «{SITENAME}» карыстальнікам {FROM_USERNAME}, які лічыць, што вам можа быць цікавая дадзеная тэма:

{TOPIC_NAME}

Вы можаце знайсці яе па гэтым адрасе:

{U_TOPIC}

Зыходнае паведамленне ад {FROM_USERNAME} варта ніжэй. Улічыце, што дадзенае паведамленне не было прагледжана або ўхвалена адміністрацыяй форума. Калі вы жадаеце паскардзіцца на гэты ліст, то можаце звязацца з адміністратарам па адрасе {BOARD_EMAIL}. Пры адпраўцы паведамлення на гэты адрас, калі ласка, працытуйце загалоўкі атрыманага ліста.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Апавяшчэнне аб новым паведамленні - «{FORUM_NAME}»

Добры дзень, {USERNAME}!

Вы атрымалі гэтае паведамленне таму, што сочыце за форумам «{FORUM_NAME}» на канферэнцыі «{SITENAME}». У гэтым форуме са часу вашага апошняга наведвання з\'явілася новае паведамленне ў тэме «{TOPIC_TITLE}». Вы можаце перайсці па спасылцы, каб праглядзець апошняе непрачытанае паведамленне; новыя апавяшчэнні не будуць прыходзіць, пакуль вы не праглядзіце тэму.

{U_NEWEST_POST}

Калі вы жадаеце праглядзець тэму, перайдзіце па наступнай спасылцы:
{U_TOPIC}

Калі вы жадаеце праглядзець форум, перайдзіце па наступнай спасылцы:
{U_FORUM}

Калі вы больш не жадаеце сачыць за форумам, то альбо пстрыкніце па змешчанай у ім спасылцы «Адпісацца ад форума», альбо перайдзіце па наступнай спасылцы:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Вы былі ўключаныя ў групу

Віншуем!

Вы былі прынятыя ў групу «{GROUP_NAME}» на канферэнцыі «{SITENAME}».
Гэта было прароблена лідэрам групы або адміністратарам бачыны, звернецеся да іх за дадатковай інфармацыяй. 

Перайдзіце па спасылцы, каб убачыць інфармацыю аб вашым чалецтве ў групах:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Запыт аб уступе ў групу

Паважаны(ая) {USERNAME},

На канферэнцыі «{SITENAME}» карыстальнік "{REQUEST_USERNAME}" папытаў аб уступе ў групу «{GROUP_NAME}», лідэрам якой вы з\'яўляецеся.
Каб задаволіць або адхіліць гэты запыт, перайдзіце па наступнай спасылцы:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB усталяваны

Віншуем!

Вы паспяхова ўсталявалі phpBB на сервер.

Гэтае паведамленне ўтрымоўвае важную інфармацыю аб усталёўцы, якую варта захаваць. Пароль захаваны ў базе дадзеных у зашыфраваным выглядзе і не можа быць адноўлены ў выпадку страты. Калі вы ўсё жа забудзеце пароль, то зможаце запытаць новы.

---------------------------------
Імя карыстальніка: 	   {USERNAME}

Адрас канферэнцыі: {U_BOARD}
---------------------------------

Карысная інфармацыя аб phpBB знаходзіцца ў тэчцы docs і на старонцы падтрымкі phpBB.com - http://www.phpbb.com/support/

Для забеспячэння бяспекі канферэнцыі настойліва рэкамендуецца сачыць за абнаўленнямі, што вы можаце лёгка ажыццявіць, падпісаўшыся на рассылку phpBB.com па пазначанай вышэй спасылцы.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Апавяшчэнне аб новай тэме — «{FORUM_NAME}»

Добры дзень, {USERNAME},

Вы атрымалі гэтае паведамленне таму, што сочыце за форумам «{FORUM_NAME}» на канферэнцыі «{SITENAME}». У гэтым форуме з моманту вашага апошняга наведвання з\'явілася новая тэма «{TOPIC_TITLE}». Вы можаце перайсці па спасылцы, каб праглядзець яе. Новыя апавяшчэнні не будуць прыходзіць, пакуль вы не праглядзіце форум:

{U_FORUM}

Калі вы больш не жадаеце сачыць за форумам, то альбо пстрыкніце па змешчанай у ім спасылцы «Адпісацца ад форума», альбо перайдзіце па наступнай спасылцы:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Скарга на асабістае паведамленне {PM_SUBJECT} зачыненая

Добры дзень, {USERNAME}!

Вы атрымалі гэтае апавяшчэнне таму, што адпраўленая вамі скарга на асабістае паведамленне {PM_SUBJECT}, атрыманае вамі на канферэнцыі «{SITENAME}», была прагледжана мадэратарам або адміністратарам. Пасля прагляду скарга была зачынена. Па пытаннях звяжыцеся з {CLOSER_NAME} (карыстальнік, які зачыніў скаргу) пасродкам асабістага паведамлення. 


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Скарга на паведамленне {PM_SUBJECT} выдаленая

Добры дзень, {USERNAME}!

Вы атрымалі гэтае апавяшчэнне таму, што адпраўленая вамі скарга на асабістае паведамленне {PM_SUBJECT}, атрыманае вамі на канферэнцыі «{SITENAME}», была выдалена мадэратарам або адміністратарам.


(EMAIL_SIG)',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Паведамленне ўхвалена — «{POST_SUBJECT}»

Добры дзень, {USERNAME}!

Вы атрымалі гэтае апавяшчэнне таму, што ваша паведамленне «{POST_SUBJECT}» на канферэнцыі «{SITENAME}» было ўхвалена мадэратарам або адміністратарам.

Калі вы жадаеце праглядзець сваё паведамленне, перайдзіце па наступнай спасылцы:
{U_VIEW_POST}

Калі вы жадаеце праглядзець тэму, перайдзіце па наступнай спасылцы:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Паведамленне адхілена — «{POST_SUBJECT}»

Добры дзень, {USERNAME}!

Вы атрымалі гэтае апавяшчэнне таму, што ваша паведамленне «{POST_SUBJECT}» на канферэнцыі «{SITENAME}» было адхілена мадэратарам або адміністратарам.

Паведамленне было адхілена па наступным чынніку:

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

you have received a new private message to your account on "{SITENAME}". You can view your new message by clicking on the following link: {U_VIEW_MESSAGE}
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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Новае асабістае паведамленне

Добры дзень, {USERNAME}!

Вам прыйшло новае асабістае паведамленне ад {AUTHOR_NAME} на канферэнцыі «{SITENAME}» з тэмай:

{SUBJECT}

Вы можаце прачытаць гэтае паведамленне, пяройдучы па наступнай спасылцы:

{U_VIEW_MESSAGE}

Памятайце, вы можаце адмовіцца ад атрымання падобных апавяшчэнняў, калі зменіце налады ў сваім асабістым раздзеле.

{EMAIL_SIG}
',
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
Добры дзень, {TO_USERNAME}!

Ніжэй ёсць ліст, адпраўлены вам карыстальнікам {FROM_USERNAME} праз ваш уліковы запіс на канферэнцыі «{SITENAME}». Калі гэтае паведамленне з\'яўляецца спамам, утрымоўвае абразы або іншыя прыкрыя вам выказвання, калі ласка звяжыцеся з адміністратарам канферэнцыі па адрасе:

{BOARD_EMAIL}

Уключыце дадзенае паведамленне цалкам (асабліва загалоўкі). Калі ласка ўлічыце, што зваротны адрас гэтага ліста прыналежыць карыстальніку {FROM_USERNAME}.

Пасланае вам паведамленне:
~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Добры дзень, {TO_USERNAME}!

Ніжэй ёсць ліст, адпраўлены вам карыстальнікам {FROM_USERNAME} праз ваш уліковы запіс на канферэнцыі «{SITENAME}». Калі гэтае паведамленне з\'яўляецца спамам, утрымоўвае абразы або іншыя прыкрыя вам выказвання, калі ласка звяжыцеся з адміністратарам канферэнцыі па адрасе:

{BOARD_EMAIL}

Уключыце дадзенае паведамленне цалкам. Калі ласка ўлічыце, што адрас адпраўніка з\'яўляецца адрасам уліковага запісу канферэнцыі для імгненных паведамленняў.

Пасланае вам паведамленне:
~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Скарга зачыненая — «{POST_SUBJECT}»

Добры дзень, {USERNAME}!

Вы атрымалі гэтае апавяшчэнне таму, што пададзеная вамі скарга на паведамленне «{POST_SUBJECT}» у тэме «{TOPIC_TITLE}» на канферэнцыі «{SITENAME}» была разгледжаная мадэратарам або адміністратарам. Пасля разгляду скарга была зачыненая. Па ўзніклых у далейшым пытанням звяжыцеся з {CLOSER_NAME} пасродкам асабістага паведамлення.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Скарга выдаленая — «{POST_SUBJECT}»

Добры дзень, {USERNAME}!

Вы атрымалі гэтае апавяшчэнне таму, што пададзеная вамі скарга на паведамленне «{POST_SUBJECT}» у тэме «{TOPIC_TITLE}» на канферэнцыі «{SITENAME}» была выдаленая мадэратарам або адміністратарам.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/test.txt' 		=> '{EMAILSUBJECT:} phpBB - Test mail

Hello {USERNAME},

Congratulations. If you received this email, phpBB is correctly configured to send emails.

In case you require assistance, please visit the support forums - http://www.forums3.com/

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Тэма ўхваленая — «{TOPIC_TITLE}»

Добры дзень, {USERNAME}!

Вы атрымалі гэтае апавяшчэнне таму, што ваша тэма «{TOPIC_TITLE}» на канферэнцыі «{SITENAME}» была ўхваленая мадэратарам або адміністратарам.

Калі вы жадаеце праглядзець тэму, перайдзіце па наступнай спасылцы:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Тэма адхіленая — «{TOPIC_TITLE}»

Добры дзень, {USERNAME}!

Вы атрымалі гэтае апавяшчэнне таму, што ваша тэма «{TOPIC_TITLE}» на канферэнцыі «{SITENAME}» была адхіленая мадэратарам або адміністратарам.

Тэма была адхіленая па наступным чынніку:

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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Паўторная актывацыя ўліковага запісу

Добры дзень, {USERNAME}!

Ваш уліковы запіс на канферэнцыі «{SITENAME}» быў адключаны, хутчэй усяго з-за занесеных у ваш профіль змен. Каб ізноў яе актываваць, перайдзіце па гэтай спасылцы:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Ваш уліковы запіс быў адключаны

Добры дзень, {USERNAME}!

Ваш уліковы запіс на канферэнцыі «{SITENAME}» быў адключаны, хутчэй усяго з-за занесеных у ваш профіль змен. Адміністратар канферэнцыі павінен актываваць ваш уліковы запіс, каб вы змаглі ім карыстацца. Пасля актывацыі вы атрымаеце паўторнае апавяшчэнне.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Актывацыя новага пароля

Добры дзень, {USERNAME}!

Вы атрымалі гэты ліст таму, што вы (альбо хтосьці, які выдае сябе за вас) папыталі выслаць новы пароль для вашага ўліковага запісу на канферэнцыі «{SITENAME}». Калі вы не прасілі выслаць пароль, то не звяртайце ўвагі на гэты ліст, калі жа падобныя лісты будуць працягваць прыходзіць, звернецеся да адміністратара канферэнцыі.

Перш чым выкарыстаць новы пароль, вы павінны яго актываваць. Для гэтага перайдзіце па спасылцы:

{U_ACTIVATE}

У выпадку паспяховай актывацыі вы зможаце ўваходзіць на канферэнцыю, выкарыстаючы наступны пароль:

Пароль: {PASSWORD}

Вы зможаце змяніць гэты пароль на старонцы рэдагавання профіля ў асабістым раздзеле. Калі ў вас паўстануць якія-небудзь цяжкасці, звернецеся да адміністратара канферэнцыі.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Паўторная актывацыя ўліковага запісу на канферэнцыі «{SITENAME}»

Адміністратар канферэнцыі запытаў паўторную актывацыю вашага ўліковага запісу. Ваш уліковы запіс зараз неактыўны.
Для актывацыі ўліковага запісу выконвайце прапанаваныя ніжэй інструкцыі.

Захавайце гэтае паведамленне. Параметры вашага ўліковага запісу такія:

----------------------------
Імя карыстальніка: {USERNAME}
----------------------------

Ваш пароль надзейна захаваны ў нашай базе дадзеных і не можа быць здабыты з яе. Калі вы ўсё жа забудзеце свой пароль, то вы зможаце аднавіць яго, выкарыстоўваючы для гэтага адрас электроннай пошты, звязаны з вашым уліковым запісам.

Перайдзіце па наступнай спасылцы для актывацыі ўліковага запісу:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Напамінак аб адключаным уліковым запісе

Добры дзень, {USERNAME}!

Дадзенае апавяшчэнне адпраўлена вам для напаміну пра тое, што ваш уліковы запіс на канферэнцыі «{SITENAME}», зарэгістраваны {REGISTER_DATE}, да гэтага часу застаецца неактыўным. Калі вы жадаеце актываваць гэты ўліковы запіс, то пстрыкніце па спасылцы ніжэй: 

{U_ACTIVATE}

Дзякуем за рэгістрацыю на канферэнцыі «{SITENAME}» і спадзяемся на ваш удзел у абмеркаваннях.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Сардэчна запрашаем на канферэнцыю «{SITENAME}»

{WELCOME_MSG}

Калі ласка, захаваеце гэтае паведамленне. Параметры вашага ўліковага запісу такія:

----------------------------
Імя карыстальніка: {USERNAME}
----------------------------

Ваш пароль надзейна захаваны ў нашай базе дадзеных і не можа быць здабыты з яе. Калі вы ўсё жа забудзеце свой пароль, то вы зможаце аднавіць яго, выкарыстоўваючы для гэтага адрас электроннай пошты, звязаны з вашым уліковым запісам.

Пстрыкніце па спасылцы ніжэй для актывацыі ўліковага запісу:

{U_ACTIVATE}


Дзякуй за рэгістрацыю.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Сардэчна запрашаем на канферэнцыю «{SITENAME}»

{WELCOME_MSG}

Калі ласка, захаваеце гэтае паведамленне. Параметры вашага ўліковага запісу такія:

----------------------------
Імя карыстальніка: {USERNAME}
 {PASSWORD_EXTRA_LINE}
Адрас канферэнцыі: {U_BOARD}
----------------------------

Ваш пароль надзейна захаваны ў нашай базе дадзеных і не можа быць здабыты з яе. Калі вы ўсё жа забудзеце свой пароль, то вы зможаце аднавіць яго, выкарыстоўваючы для гэтага адрас электроннай пошты, звязаны з вашым уліковым запісам.

Дзякуем за рэгістрацыю!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Сардэчна запрашаем на канферэнцыю «{SITENAME}»

{WELCOME_MSG}

Рэкамендуецца захаваць гэта паведамленне. Параметры вашага ўліковага запісу такія:

----------------------------
Імя карыстальніка: {USERNAME}
{PASSWORD_EXTRA_LINE}
Адрас канферэнцыі: {U_BOARD}
----------------------------

Пстрыкніце па спасылцы ніжэй для актывацыі ўліковага запісу:

{U_ACTIVATE}

Ваш пароль надзейна захаваны ў нашай базе дадзеных і не можа быць здабыты з яе. Калі вы ўсё жа забудзеце свой пароль, то вы зможаце аднавіць яго, выкарыстоўваючы для гэтага адрас электроннай пошты, звязаны з вашым уліковым запісам.

Дзякуем за рэгістрацыю!

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
