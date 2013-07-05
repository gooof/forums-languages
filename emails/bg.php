<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Нов потребител

Здравейте,

Потребителят "{USERNAME}" е бил деактивиран или създаден наскоро, проверете детайлите за този потребител (ако е нужно) и го активирайте със следната връзка:

Вижте профила:
{U_USER_DETAILS}

Активиране на акаунта:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'Това съобщение е изпратено от администратора на "{SITENAME}". Ако това съобщение е спам, съдържа неприлични или други коментари които вие намирате за обидни, моля свържете се с автора на сайта на следния адрес:

{CONTACT_EMAIL}

Съобщението е
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Активиран потребител

Здравейте {USERNAME}!

Вашият акаунт в "{SITENAME}" вече е активиран. Можете да влезете.

Вашата парола е на сигурно място в нашата база данни и не може да ви бъде изпратена. Ако забравите паролата си ще можете да поискате нова като използвате
и-мейл адреса си, но не и да получите същата парола.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Добре дошли в форумите на {SITENAME}

{WELCOME_MSG}

Запазете това писмо, то съдържа важна информация.

----------------------------
Потребителско име: {USERNAME}

----------------------------

Вашият акаунт в момента е неактивен, трябва да бъде одобрен от администратор. Когато това стане ще получите уведомително писмо.

Не забравяйте Вашата парола, защото тя е криптирана и ние не можем да ви я пратим. В случай че я забравите, можете да поискате нова, която ще ви бъде пратена по същия начин както тази.

Благодаря Ви, че се регистрирахте!

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Добре дошли в "{SITENAME}"

{WELCOME_MSG}

Според разпоредбите COPPA в момента Вашият акаунт е неактивен.

Моля разпечатайте това съобщение и помолете Вашия родител или настойник да го разпише и постави дата на него. След това го изпратете по факс до:

{FAX_INFO}

или го пратете по пощата до:

{MAIL_INFO}

------------------------------ СРЕЖИ ТУК ------------------------------
Разрешение за участие в сайта {SITENAME} - {U_BOARD}

Потребителско име: {USERNAME}
Парола: {PASSWORD}

ПРЕГЛЕДАХ ИНФОРМАЦИЯТА, ДАДЕНА ОТ ДЕТЕТО МИ И ДАВАМ РАЗРЕШЕНИЕ НА {SITENAME} ДА ЗАПИШЕ ТАЗИ ИНФОРМАЦИЯ.
РАЗБИРАМ, ЧЕ ТАЗИ ИНФОРМАЦИЯ МОЖЕ ДА БЪДЕ ПРОМЕНЯНА ПО ВСЯКО ВРЕМЕ С ПОМОЩТА НА ПАРОЛАТА.
РАЗБИРАМ, ЧЕ МОГА ДА ИЗИСКАМ ПРЕМАХВАНЕТО НА ТАЗИ ИНФОРМАЦИЯ ОТ {SITENAME} ПО ВСЯКО ВРЕМЕ.


Родител или Настойник
(напишете вашето тук): _____________________

(подпис): __________________

Дата: _______________

------------------------------ СРЕЖИ ТУК ------------------------------


След като администраторите получат горния формуляр по факс или по пощата, акаунта Ви ще бъде активиран.

Не забравяйте Вашата парола, защото тя е криптирана и ние не можем да Ви я пратим. Но в случай че я забравите, можете да поискате нова, която ще Ви бъде пратена по същия начин като тази.

Благодарим Ви, че се регистрирахте.

{EMAIL_SIG}

',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Добре дошли в "{SITENAME}"

{WELCOME_MSG}

Според разпоредбите COPPA в момента Вашият акаунт е неактивен.

Моля разпечатайте това съобщение и помолете Вашия родител или настойник да го разпише и постави дата на него. След това го изпратете по факс до:

{FAX_INFO}

или го пратете по пощата до:

{MAIL_INFO}

------------------------------ СРЕЖИ ТУК ------------------------------
Разрешение за участие в сайта {SITENAME} - {U_BOARD}

Потребител: {USERNAME}

ПРЕГЛЕДАХ ИНФОРМАЦИЯТА, ДАДЕНА ОТ ДЕТЕТО МИ И ДАВАМ РАЗРЕШЕНИЕ НА {SITENAME} ДА ЗАПИШЕ ТАЗИ ИНФОРМАЦИЯ.
РАЗБИРАМ, ЧЕ ТАЗИ ИНФОРМАЦИЯ МОЖЕ ДА БЪДЕ ПРОМЕНЯНА ПО ВСЯКО ВРЕМЕ С ПОМОЩТА НА ПАРОЛАТА.
РАЗБИРАМ, ЧЕ МОГА ДА ИЗИСКАМ ПРЕМАХВАНЕТО НА ТАЗИ ИНФОРМАЦИЯ ОТ {SITENAME} ПО ВСЯКО ВРЕМЕ.


Родител или Настойник
(напишете вашето тук): _____________________

(подпис): __________________

Дата: _______________

------------------------------ СРЕЖИ ТУК ------------------------------


След като администраторите получат горния формуляр по факс или по пощата, акаунта Ви ще бъде активиран.

Моля не забравяйте Вашата парола, защото тя е криптирана и ние не можем да Ви я пратим. Но в случай че я забравите, можете да поискате нова, която ще Ви бъде пратена по същия начин като тази.

Благодарим Ви, че се регистрирахте.

{EMAIL_SIG}

',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - Изпрати на приятел

Здравейте {TO_USERNAME},

Това съобщение е изпратено от "{SITENAME}" от {FROM_USERNAME}, който си мисли че ще бъдете заинтересован от темата долу:

{TOPIC_NAME}

Можете да я намерите на:

{U_TOPIC}

Съобщение от {FROM_USERNAME} може да бъде показано долу. Тези съобщение не се преглеждат и одобряват от администратор. За въпроси се свържете с администратора {BOARD_CONTACT}.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Ново мнение - "{FORUM_NAME}"

Здравейте {USERNAME},

Вие получавате това известие, защото сте абониран за форум, "{FORUM_NAME}" на "{SITENAME}". Беше публикувано ново мнение в темата "{TOPIC_TITLE}" от последното Ви посещение. Можете да я прегледате, като използвате връзката долу.

{U_NEWEST_POST}

Ако искате да премахнете абонамент за форума, трябва да натиснете "Премахни абонамент" или на връзката долу

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Вие сте приет в потребителската група

Поздравления,

Вие бяхте добавен в групата "{GROUP_NAME}" на сайта "{SITENAME}".
Това действие беше предприето от администратор или лидер на групата.

Повече информация за групата можете да намерите на връзката долу
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Молбата ви беше одобрена

Поздравления,

Вашата молба за присъединяване към "{GROUP_NAME}" на сайта "{SITENAME}" беше одобрена.
Натиснете на връзката за повече информация.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Беше подадена молба за членство в група

{USERNAME},

Потребителя е подал молба за присъединяване към "{GROUP_NAME}" която Вие модерирате "{SITENAME}".
За да одобрите или отхвърлите неговото запитване, натиснете на връзката долу:

{U_PENDING}

{EMAIL_SIG}

',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB инсталиран

Поздравления,

Вие успешно инсталирахте phpBB на вашият сървър.

Съобщението съдържа важна информация за форума. Паролата е криптирана в базата данни и не може да бъде възстановена, докато не поискате нова.

----------------------------
Потребителско име: {USERNAME}

Адрес на форума: {U_BOARD}
----------------------------

Полезна информация за форума може да бъде намерена на - http://www.phpbb.com/support/ или в документацията.


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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Нова тема - "{FORUM_NAME}"

Здравейте {USERNAME},

Вие получавате това известие, защото сте абониран за форум, "{FORUM_NAME}" на "{SITENAME}". Беше публикувана нова тема, "{TOPIC_TITLE}" от последното Ви посещение. Можете да я прегледате, като използвате връзката долу.

{U_FORUM}

Ако искате да премахнете абонамента натиснете "Премахни абонамент" или на връзката долу.

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Затворен доклад - "{PM_SUBJECT}"

Здравейте {USERNAME},

Вие получавате това съобщение, защото сте докладвали съобщението "{PM_SUBJECT}" в "{SITENAME}".Въпросното съобщение е вече затворено. Ако имате въпроси се свържете с {CLOSER_NAME} на лично съобщение.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Изтрит доклад - "{PM_SUBJECT}"

Здравейте {USERNAME},

Вие получавате това съобщение, защото сте докладвали съобщението "{PM_SUBJECT}" в "{SITENAME}". Въпросното съобщение вече е изтрито от администратор или модератор на форума.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Одобрено мнение - "{POST_SUBJECT}"

Здравейте {USERNAME},

Вие получавате това известие защото мнението Ви "{POST_SUBJECT}" на "{SITENAME}" беше одобрено.

Ако искате да видите мнението си натиснете тук
{U_VIEW_POST}

Ако искате да видите темата си натиснете на тук
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Отхвърлено мнение - "{POST_SUBJECT}"

Здравейте {USERNAME},

Вие получавате това известие, защото мнението Ви "{POST_SUBJECT}" на "{SITENAME}" беше отхвърлено.

Причините са показани долу

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Вие получихте лично съобщение

Здравейте {USERNAME},

Вие получихте ново лично съобщение от "{AUTHOR_NAME}" на "{SITENAME}" със заглавие:

{SUBJECT}

Вие можете да прегледате съобщението като натиснете долу

{U_VIEW_MESSAGE}


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
	'email/profile_send_email.txt' 		=> 'Здравейте {TO_USERNAME},

Това съобщение е изпратено от {FROM_USERNAME} през форума "{SITENAME}". Ако в това съобщение се съдържа SPAM или нежелан текст свържете се с собственика на форума:

{BOARD_CONTACT}

Съобщението
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Здравейте {TO_USERNAME},

Това съобщение е изпратено от {FROM_USERNAME} до Вас от сайта "{SITENAME}". Ако това съобщение съдържа нежелан текст, свържете се с администратора на форума:

{BOARD_CONTACT}

Съобщението
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Затворен доклад - "{POST_SUBJECT}"

Здравейте {USERNAME},

Вие получавате това съобщение защото сигнала Ви за мнението "{POST_SUBJECT}" в темата "{TOPIC_TITLE}" в сайта "{SITENAME}" беше прегледано от модератор или администратор. Ако искате да получите повече информация се свържете с {CLOSER_NAME} чрез лично съобщение.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Изтрит доклад - "{POST_SUBJECT}"

Здравейте {USERNAME},

Вие получавате това известие защото доклада за мнение "{POST_SUBJECT}" в тема "{TOPIC_TITLE}" в "{SITENAME}" беше изтрито от модератор или администратор на форума.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Одобрена тема - "{TOPIC_TITLE}"

Здравейте {USERNAME},

Вие получавате това съобщение защото темата Ви "{TOPIC_TITLE}" в "{SITENAME}" беше одобрена.

Ако искате да я прегледате натиснете долу
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Отхвърлена тема - "{TOPIC_TITLE}"

Здравейте {USERNAME},

Вие получавате това известие, защото темата Ви "{TOPIC_TITLE}" в "{SITENAME}" беше отхвърлена от администратор или модератор на форума.

Причините са показани долу

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Отговор в тема - "{TOPIC_TITLE}"

Здравейте {USERNAME},

Вие получавате това известие, защото сте абониран за темата "{TOPIC_TITLE}" в "{SITENAME}". В нея са публикувани нови мнения от последното Ви посещение.

Ако искате да видите само непрочетените мнения натиснете тук
{U_NEWEST_POST}

Ако искате да прегледате цялата тема вижте връзката долу
{U_TOPIC}

Ако искате да премахнете абонамент посетете връзката долу

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Препреактивиране на акаунт

Здравейте {USERNAME},

Акаунта Ви "{SITENAME}" беше деактивиран, може би заради промените направени в профила. За да активирате акаунта натиснете на връзката долу

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Акаунта Ви беше деактивиран

Здравейте {USERNAME},

Вашият акаунт "{SITENAME}" беше деактивиран. За да можете да влезете отново, администраторът на форума трябва да го активира. Ще получите известие когато това стане.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Нова парола

Здравейте {USERNAME}

Вие получавате това известие защото сте поискали (или някой друг) нова парола за акаунта Ви в "{SITENAME}". Ако това не е направено от Вас, не предприемайте нищо.

За да използвате новата парола, Вие трябва да я активирате.

{U_ACTIVATE}

Ако това стане успешно, Вие ще можете да влезете с парола

Парола: {PASSWORD}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Реактивиране на акаунт в "{SITENAME}"

Администраторът изисква да реактивирате акаунта си.
Следвайте стъпките написани долу.

Пазете това съобщение. Информация за акаунта:

----------------------------
Потребителско име: {USERNAME}
----------------------------

Паролата е криптирана в базата данни. Ако забравите паролата си, старата не може да бъде върната. Нова ще се генерира като отидете на страницата "Забравена Парола" и ще бъде изпратена на този адрес.

Посетете страницата долу за да активирате отново акаунта си:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Неактивен акаунт

Здравейте {USERNAME},

Вашият акаунт "{SITENAME}", създаден на {REGISTER_DATE} е неактивен. Ако искате да активирате акаунта си посетете следният линк:

{U_ACTIVATE}

Благодарим Ви, че се регистрирахте в "{SITENAME}".

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Добре дошли в "{SITENAME}"

{WELCOME_MSG}

Пазете това съобщение, то съдържа важна информация.

----------------------------
Потребителско име: {USERNAME}
----------------------------

Паролата е криптирана в базата данни и не може да бъде възстановена.

Акаунтът Ви е неактивен, за да го активирате натиснете тук

{U_ACTIVATE}


Благодарим Ви, че се регистрирахте.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Добре дошли в "{SITENAME}"

{WELCOME_MSG}

Пазете това съобщение, то съдържа важна информация.

----------------------------
Потребителско име: {USERNAME}

Адрес на форума: {U_BOARD}
----------------------------

Моля не забравяйте Вашата парола, защото тя е криптирана и ние не можем да Ви я пратим. Но в случай че я забравите, можете да поискате нова, която ще Ви бъде пратена по същия начин като тази.

Благодарим Ви, че се регистрирахте!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Добре дошли в "{SITENAME}"

{WELCOME_MSG}

Пазете това съобщение, то съдържа важна информация.

----------------------------
Потребителско име: {USERNAME}

Адрес на форума: {U_BOARD}
----------------------------

Акаунтът Ви е неактивен, за да го активирате натиснете тук

{U_ACTIVATE}

Не забравяйте паролата си, тя е криптирана в базата данни и не може да бъде възстановявана.

Благодарим Ви, че се регистрирахте.

{EMAIL_SIG}',
));


