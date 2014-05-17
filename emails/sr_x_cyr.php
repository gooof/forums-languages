<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktiviranje korisnickog naloga

Поздрав,

Налог у власништву корисника "{USERNAME}" је деактивиран или новонаправљен, требало би да проверите појединости овог корисника (ако је потребно) и одговарајуће их обрадите.

Користите ову везу да погледате корисников профил:
{U_USER_DETAILS}

Користите ову везу да активирате налог:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Следећи e-mail вам је послат од администратора форума "{SITENAME}". Ако је ова порука спам, садржи наопаке или друге коментаре за које налазите да су одвратни молимо вас да се повежете са администратором форума на следећој адреси:

{CONTACT_EMAIL}

Укључите и овај e-mail у потпуности (посебно заглавља). 

Следи порука која вам је послата:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Vas nalog je aktiviran

Поздрав {USERNAME},

Ваш налог на форуму "{SITENAME}" је активиран од администратора, тако да се сада можете пријавити на форум.

Ваша лозинка је безбедно похрањена у нашој бази и не може вам бити извађена. У случају да је заборављена, бићете у могућности да је васпоставите користећи мејл адресу удружену са вашим налогом.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobro dosli na "{SITENAME}"

{WELCOME_MSG}

Молимо вас да сачувате овај e-mail. Подаци вашег налога су као што следи:

----------------------------
Корисничко име: {USERNAME}

Форум URL: {U_BOARD}
----------------------------

Ваш налог је тренутно неактиван и треба да буде потврђен од администратора форума пре него што будете могли да се пријавите. Добићете још један мејл када се то деси.

Ваша лозинка је безбедно похрањена у нашој бази. У случају да је заборављена, бићете у могућности да је васпоставите користећи мејл адресу удружену са вашим налогом.

Хвала вам што сте се регистровали.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Dobro dosli na "{SITENAME}"

{WELCOME_MSG}

У сагласности са COPPA, ваш налог је тренутно неактиван.

Молимо вас да одштампате ову поруку и дате је родитељу или старатељу да је потпише и стави датум. Потом то пошаљите на факс:

{FAX_INFO}

ИЛИ поштом на:

{MAIL_INFO}

------------------------------ ИСЕЦИТЕ ОВДЕ ------------------------------
Дозвола за учешће на форуму "{SITENAME}" - {U_BOARD}

Корисничко име: {USERNAME}
E-mail: {EMAIL_ADDRESS}

ПРЕГЛЕДАО САМ ПОДАТКЕ КОЈЕ МИ ЈЕ ДАЛО МОЈЕ ДЕТЕ И ОВИМ ДАЈЕМ ДОЗВОЛУ ФОРУМУ "{SITENAME}" ДА САЧУВА ОВЕ ПОДАТКЕ. 
РАЗУМЕМ ДА ОВИ ПОДАЦИ МОГУ БИТИ ПРОМЕЊЕНИ У БИЛО КОЈЕ ВРЕМЕ УНОШЕЊЕМ ЛОЗИНКЕ. 
РАЗУМЕМ ДА МОГУ ДА ТРАЖИМ ДА СЕ ОВИ ПОДАЦИ УКЛОНЕ СА ФОРУМА "{SITENAME}" БИЛО КАДА.


Родитељ или старатељ 
(Ваше име овде): _____________________

(потпис овде): __________________ 

Датум: _______________

------------------------------ ИСЕЦИТЕ ОВДЕ ------------------------------


Када администратор једном добије образац изнад преко факса или класичне поште, ваш налог ће бити активиран.

Ваша лозинка је безбедно похрањена у нашој бази. У случају да је заборављена, бићете у могућности да је васпоставите користећи мејл адресу удружену са вашим налогом.

Хвала вам што сте се регистровали.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobro dosli na "{SITENAME}"

{WELCOME_MSG}

У сагласности са COPPA, ваш налог је тренутно неактиван.

Молимо вас да одштампате ову поруку и дате је родитељу или старатељу да је потпише и стави датум. Потом то пошаљите на факс:

{FAX_INFO}

ИЛИ поштом на:

{MAIL_INFO}

------------------------------ ИСЕЦИТЕ ОВДЕ ------------------------------
Дозвола за учешће на форуму "{SITENAME}" - {U_BOARD}

Корисничко име: {USERNAME}
E-mail: {EMAIL_ADDRESS}

ПРЕГЛЕДАО САМ ПОДАТКЕ КОЈЕ МИ ЈЕ ДАЛО МОЈЕ ДЕТЕ И ОВИМ ДАЈЕМ ДОЗВОЛУ ФОРУМУ "{SITENAME}" ДА САЧУВА ОВЕ ПОДАТКЕ. 
РАЗУМЕМ ДА ОВИ ПОДАЦИ МОГУ БИТИ ПРОМЕЊЕНИ У БИЛО КОЈЕ ВРЕМЕ УНОШЕЊЕМ ЛОЗИНКЕ. 
РАЗУМЕМ ДА МОГУ ДА ТРАЖИМ ДА СЕ ОВИ ПОДАЦИ УКЛОНЕ СА ФОРУМА "{SITENAME}" БИЛО КАДА.


Родитељ или старатељ 
(Ваше име овде): _____________________

(потпис овде): __________________ 

Датум: _______________

------------------------------ ИСЕЦИТЕ ОВДЕ ------------------------------


Када администратор једном добије образац изнад преко факса или класичне поште, ваш налог ће бити активиран.

Ваша лозинка је безбедно похрањена у нашој бази. У случају да је заборављена, бићете у могућности да је васпоставите користећи мејл адресу удружену са вашим налогом.

Хвала вам што сте се регистровали.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - E-mail a friend

Hello {TO_USERNAME},

This e-mail was sent from "{SITENAME}" by {FROM_USERNAME} who thought you may be interested in the following topic:

{TOPIC_NAME}

You can find it at:

{U_TOPIC}

A message from {FROM_USERNAME} may also be included below. Please note that this message has not been seen or approved by the board administrators. If you wish to complain about having received this e-mail please contact the board administrator at {BOARD_CONTACT}. Please quote the message headers when contacting this address.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Obavestenje o novoj poruci - "{FORUM_NAME}"

Поздрав {USERNAME},

Добијате ово обавештење јер пратите форум, "{FORUM_NAME}" на "{SITENAME}". Овај форум је добио нови одговор на тему "{TOPIC_TITLE}" од ваше последње посете. Можете користити следећу везу да прегледате последњи непрочитани одговор, нећете добијати више обавештења док не посетите тему.

{U_NEWEST_POST}

Уколико желите да прегледате тему, кликните на следећу везу:
{U_TOPIC}

Уколико желите да прегледате форум, кликните на следећу везу:
{U_FORUM}

Уколико више не желите да пратите овај форум можете кликнути на везу "Прекини праћење форума" у форуму изнад, или кликом на следећу везу:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Dodati ste u ovu korisnicku grupu

Честитамо,

Додати сте у групу "{GROUP_NAME}" на форуму "{SITENAME}".
Овај поступак је спровео вођа групе или администратор форума, повежите се са њима за више података.

Можете прегледати податке о вашој групи овде:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Vas zahtev je odobren

Честитамо,

Ваш захтев да се придружите групи "{GROUP_NAME}" на форуму "{SITENAME}" је одобрен.
Кликните на следећу везу да погледате чланство ваше групе.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Zahtev za pridruzivanje grupi je stigao

Поштовани {USERNAME},

Корисник "{REQUEST_USERNAME}" је затражио да се придружи групи "{GROUP_NAME}" коју ви уређујете на форуму "{SITENAME}".
За одобрење или одбијање овог захтева за чланство у групи молимо вас да посетите следећу везу:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB je instaliran

Честитамо,

Успешно сте инсталирали phpBB на ваш сервер.

Овај e-mail садржи важне податке о вашој инсталацији и требало би да га чувате као одредницу. Ваша лозинка је безбедно похрањена у нашој бази. У случају да је заборављена, бићете у могућности да је васпоставите користећи мејл адресу удружену са вашим налогом.

----------------------------
Корисничко име: {USERNAME}

Форум URL: {U_BOARD}
----------------------------

Корисни подаци о phpBB програму могу бити пронађени у docs фасцикли ваше инсталације и на phpBB.com страници за подршку - http://www.phpbb.com/support/

Како бисте форум држали сигурним и безбедним, веома је препоручљиво да програм редовно ажурирате. За вашу удобност, доступна је мејлинг листа на страници са одредницом горе изнад.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Obavestenje o novoj temi - "{FORUM_NAME}"

Поздрав {USERNAME},

Добијате ово обавештење јер пратите форум, "{FORUM_NAME}" на "{SITENAME}". Овај форум је добио нову тему од ваше последње посете, "{TOPIC_TITLE}". Можете користити следећу везу да прегледате форум, нећете добијати више обавештења док не посетите форум.

{U_FORUM}

Уколико више не желите да пратите овај форум можете кликнути на везу "Прекини праћење форума" у форуму изнад, или кликом на следећу везу:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Zatvorena prijava - "{PM_SUBJECT}"

Поздрав {USERNAME},

Примате ово обавештење јер је пријава коју сте попунили поводом приватне поруке "{PM_SUBJECT}" на "{SITENAME}" примљена од уредника или администратора. Пријава је сада затворена. Уколико надаље имате питања, молимо вас да се повежете са {CLOSER_NAME} приватном поруком.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Obrisana prijava - "{PM_SUBJECT}"

Поздрав {USERNAME},

Примате ово обавештење јер је пријава коју сте попунили поводом приватне поруке "{PM_SUBJECT}" на "{SITENAME}" обрисана од уредника или администратора.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Odobrena poruka - "{POST_SUBJECT}"

Поздрав {USERNAME},

Добијате ово обавештење јер је ваша порука "{POST_SUBJECT}" на форуму "{SITENAME}" одобрена од уредника или администратора.

Да бисте прегледали поруку, кликните на следећу везу:
{U_VIEW_POST}

Ако желите да прегледате тему, кликните на следећу везу:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Poruka nije odobrena - "{POST_SUBJECT}"

Поздрав {USERNAME},

Добијате ово обавештење јер ваша порука "{POST_SUBJECT}" на форуму "{SITENAME}" није одобрена од уредника или администратора.

Следећи разлог је дат за неодобрење:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Stigla je nova privatna poruka

Поздрав {USERNAME},

Добили сте нову приватну поруку од "{AUTHOR_NAME}" на ваш налог на форуму "{SITENAME}" са следећим насловом:

{SUBJECT}

Можете прегледати вашу нову поруку кликом на следећу везу:

{U_VIEW_MESSAGE}

Захтевали сте да будете обавештени за овај догађај, али знајте да можете увек изабрати да не будете обавештени о новим порукама променом одговарајуће поставке у вашем профилу.

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
Hello {TO_USERNAME},

The following is an e-mail sent to you by {FROM_USERNAME} via your account on "{SITENAME}". If this message is spam, contains abusive or other comments you find offensive please contact the webmaster of the board at the following address:

{BOARD_CONTACT}

Include this full e-mail (particularly the headers). Please note that the reply address to this e-mail has been set to that of {FROM_USERNAME}.

Message sent to you follows
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Hello {TO_USERNAME},

The following is a message sent to you by {FROM_USERNAME} via your account on "{SITENAME}". If this message is spam, contains abusive or other comments you find offensive please contact the webmaster of the board at the following address:

{BOARD_CONTACT}

Include this full message. Please note that the sender address has been set to the boards IM account.

Message sent to you follows
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Prijava zatvorena - "{POST_SUBJECT}"

Поздрав {USERNAME},

Добијате ово обавештење зато што је пријава коју сте испунили за поруку "{POST_SUBJECT}" у теми "{TOPIC_TITLE}" на форуму "{SITENAME}" обрађена од уредника или администратора. Пријава је потом затворена. Уколико имате даљих питања повежите се са {CLOSER_NAME} приватном поруком.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Obrisana prijava - "{POST_SUBJECT}"

Поздрав {USERNAME},

Добијате ово обавештење зато што је пријава коју сте испунили за поруку "{POST_SUBJECT}" у теми "{TOPIC_TITLE}" на форуму "{SITENAME}" обрисана од уредника или администратора.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Odobrena tema - "{TOPIC_TITLE}"

Поздрав {USERNAME},

Добијате ово обавештење јер је ваша тема "{TOPIC_TITLE}" на форуму "{SITENAME}" одобрена од уредника или администратора.

Уколико желите да прегледате тему, кликните на следећу везу:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tema nije odobrena - "{TOPIC_TITLE}"

Поздрав {USERNAME},

Добијате ово обавештење јер ваша тема "{TOPIC_TITLE}" на форуму "{SITENAME}" није одобрена од уредника или администратора.

Следећи разлог је дат за неодобрење:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Obavestenje o odgovoru na temu - "{TOPIC_TITLE}"

Поздрав {USERNAME},

Добијате ово обавештење јер пратите тему, "{TOPIC_TITLE}" на форуму "{SITENAME}". Ова тема је добила одговор од ваше последње посете. Можете користити следећу везу за преглед одговора, нећете добијати више обавештења док не посетите тему.

Уколико желите да прегледате најновију поруку од ваше последње посете, кликните на следећу везу:
{U_NEWEST_POST}

Уколико желите да прегледате тему, кликните на следећу везу:
{U_TOPIC}

Уколико желите да прегледате форум, кликните на следећу везу:
{U_FORUM}

Уколико више не желите да пратите ову тему можете или да кликнете на везу "Прекини праћење теме" при дну теме изнад, или кликом на следећу везу:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reaktivirajte vas nalog

Поздрав {USERNAME},

Ваш налог на форуму "{SITENAME}" је деактивиран, највероватније због промена у вашем профилу. Да бисте поново активирали ваш налог морате кликнути на везу испод:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Vas nalog je deaktiviran

Поздрав {USERNAME},

Ваш налог на форуму "{SITENAME}" је деактивиран, највероватније због промена у вашем профилу. Администратор форума треба да га активира пре него што могнете да се пријавите. Добићете још једно обавештење када се то деси.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivacija nove lozinke

Поздрав {USERNAME}

Добијате ово обавештење зато што сте (или неко ко се представља као ви) захтевали да нова лозинка буде послата за ваш налог на форуму "{SITENAME}". Ако нисте захтевали ово обавештење онда вас молимо да га занемарите, а уколико наставите да га примате молимо вас да се повежете са администратором форума.

Да бисте користили нову лозинку треба прво да је активирате. Како бисте то урадили кликните на везу испод.

{U_ACTIVATE}

Ако је нова лозинка успешно активирана моћи ћете да се пријавите користећи следећу лозинку:

Лозинка: {PASSWORD}

Можете наравно променити ову лозинку сами на страници профила. Уколико имате неких потешкоћа молимо вас да се повежете са администратором.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reaktiviranje vaseg naloga na "{SITENAME}"

Администратор форума захтева да ваш налог буде поново активиран. Ваш налог је тренутно неактиван.
Молимо вас да следите кораке који су приказани овде како бисте поново активирали ваш налог.

Молимо вас да сачувате овај e-mail. Подаци вашег налога су као што следи:

----------------------------
Корисничко име: {USERNAME}
----------------------------

Ваша лозинка је безбедно похрањена у нашој бази. У случају да је заборављена, бићете у могућности да је васпоставите користећи мејл адресу удружену са вашим налогом.

Молимо вас да посетите следећу везу како бисте поново активирали ваш налог:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Podsetnik za neaktivni nalog

Поздрав {USERNAME},

Ово обавештење је подсетник да ваш налог на форуму "{SITENAME}", направљен {REGISTER_DATE}, остаје неактиван. Уколико желите да активирате овај налог, молимо посетите следећу везу:

{U_ACTIVATE}

Хвала вам што сте се регистровали на форуму "{SITENAME}", надамо се вашем учешћу.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Dobro dosli na "{SITENAME}"

{WELCOME_MSG}

Молимо вас да сачувате овај e-mail. Подаци вашег налога су као што следи:

----------------------------
Корисничко име: {USERNAME}
----------------------------

Ваша лозинка је безбедно похрањена у нашој бази. У случају да је заборављена, бићете у могућности да је васпоставите користећи мејл адресу удружену са вашим налогом.

Молимо посетите следећу везу у настојању да активирате ваш налог:

{U_ACTIVATE}


Хвала вам што сте се регистровали.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Dobro dosli na "{SITENAME}"

{WELCOME_MSG}

Молимо вас да сачувате овај e-mail. Подаци вашег налога су као што следи:

----------------------------
Корисничко име: {USERNAME}
{PASSWORD_EXTRA_LINE}
Форум URL: {U_BOARD}
----------------------------

Ваша лозинка је безбедно похрањена у нашој бази. У случају да је заборављена, бићете у могућности да је васпоставите користећи мејл адресу удружену са вашим налогом.

Хвала вам што сте се регистровали.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobro dosli na "{SITENAME}"

{WELCOME_MSG}

Молимо вас да сачувате овај e-mail. Подаци вашег налога су као што следи:

----------------------------
Корисничко име: {USERNAME}
{PASSWORD_EXTRA_LINE}
Форум URL: {U_BOARD}
----------------------------

Молимо посетите следећу везу у настојању да активирате ваш налог:

{U_ACTIVATE}

Ваша лозинка је безбедно похрањена у нашој бази. У случају да је заборављена, бићете у могућности да је васпоставите користећи мејл адресу удружену са вашим налогом.

Хвала вам што сте се регистровали.

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
