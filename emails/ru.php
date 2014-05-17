<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Активируйте учётную запись пользователя

Здравствуйте!

Учётная запись пользователя {USERNAME} была деактивирована либо заново создана. Вы должны проверить профиль этого пользователя и (если требуется) активировать его.

Ссылка на просмотр профиля пользователя:
{U_USER_DETAILS}

Ссылка для активации учётной записи:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Это письмо отправлено вам администратором конференции «{SITENAME}». Если это сообщение является спамом, содержит оскорбления или другие неприятные вам высказывания, пожалуйста, свяжитесь с администратором конференции по адресу:

{CONTACT_EMAIL}

Включите данное сообщение целиком (особенно заголовки).

Отправленное вам сообщение:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Учётная запись активирована

Здравствуйте, {USERNAME}!

Ваша учётная запись на конференции «{SITENAME}» была активирована администратором. Теперь вы можете войти на конференцию.

Ваш пароль был сохранён в безопасном виде в базе данных конференции. Если вы забудете пароль, то сможете получить новый, используя адрес email, заданный при регистрации.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Добро пожаловать на конференцию «{SITENAME}»

{WELCOME_MSG}

Пожалуйста, сохраните это сообщение. Параметры вашей учётной записи таковы:

----------------------------
Имя пользователя: {USERNAME}

Адрес конференции: {U_BOARD}
----------------------------

Ваша учётная запись в настоящее время неактивна и должна быть одобрена администратором прежде, чем вы сможете войти на конференцию. После активации вашей учётной записи вам придёт ещё одно сообщение.

Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Благодарим за регистрацию!

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Добро пожаловать на конференцию «{SITENAME}»

{WELCOME_MSG}

В соответствии с COPPA ваша учётная запись не была активирована.

Пожалуйста, распечатайте это сообщение и попросите своего родителя или опекуна подписать его и поставить дату. Затем отправьте его по факсу:

{FAX_INFO}

Или по почте:

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


Как только администратор получит эту форму по факсу или по почте, ваша учётная запись будет активирована.

Ваш пароль надёжно сохранен в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Благодарим за регистрацию!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Добро пожаловать на конференцию «{SITENAME}»

{WELCOME_MSG}

В соответствии с COPPA ваша учётная запись не была активирована.

Пожалуйста, распечатайте это сообщение и попросите своего родителя или опекуна подписать его и поставить дату. Затем отправьте его по факсу:

{FAX_INFO}

Или по почте:

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


Как только администратор получит эту форму по факсу или по почте, ваша учётная запись будет активирована.

Ваш пароль надёжно сохранен в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Благодарим за регистрацию!

{EMAIL_SIG}',
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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Уведомление о новом сообщении — «{FORUM_NAME}»

Здравствуйте, {USERNAME}!

Вы получили это сообщение потому, что следите за форумом «{FORUM_NAME}» на конференции «{SITENAME}». В этом форуме со времени вашего последнего посещения появились новые сообщения в теме «{TOPIC_TITLE}». Вы можете перейти по следующей ссылке для просмотра последних непрочитанных сообщений. Новые уведомления не будут приходить, пока вы не просмотрите тему.

{U_NEWEST_POST}

Если вы хотите просмотреть тему, перейдите по следующей ссылке:
{U_TOPIC}

Если вы хотите просмотреть форум, перейдите по следующей ссылке:
{U_FORUM}

Если вы больше не хотите следить за форумом, то либо щёлкните по находящейся в нём ссылке «Отписаться от форума», либо перейдите по следующей ссылке:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Вы были включены в группу

Поздравляем!

Вы были приняты в группу «{GROUP_NAME}» на конференции «{SITENAME}».
Это было проделано лидером группы или администратором сайта, обратитесь к ним за дополнительной информацией. 

Перейдите по ссылке, чтобы увидеть информацию о вашем членстве в группах:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Ваша просьба была удовлетворена

Поздравляем!

Ваша просьба о вступлении в группу «{GROUP_NAME}» на конференции «{SITENAME}» была удовлетворена.
Перейдите по ссылке, чтобы увидеть информацию о вашем членстве в группах: 

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Просьба о вступлении в группу

Уважаемый(ая) {USERNAME}!

Пользователь «{REQUEST_USERNAME}» попросил о вступлении в группу «{GROUP_NAME}», лидером которой вы являетесь на конференции «{SITENAME}» .
Чтобы удовлетворить или отклонить эту просьбу, перейдите по следующей ссылке:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB установлен

Поздравляем!

Вы успешно установили phpBB на сервер.

Это сообщение содержит важную информацию, касающуюся только что установленного phpBB. Сохраните это сообщение. Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

---------------------------------
Имя пользователя: {USERNAME}

Адрес конференции:	{U_BOARD}
---------------------------------

Полезная информация о phpBB находится в папке docs и на странице поддержки phpBB.com — http://www.phpbb.com/support/
Сайт официальной русскоязычной поддержки phpBB — http://www.phpbbguru.net

Для обеспечения безопасности конференции настоятельно рекомендуется следить за обновлениями, что вы можете легко осуществить, подписавшись на рассылку phpBB.com по указанной выше ссылке.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Уведомление о новой теме — «{FORUM_NAME}»

Здравствуйте, {USERNAME}!

Вы получили это сообщение потому, что следите за форумом «{FORUM_NAME}» на конференции «{SITENAME}». В этом форуме с момента вашего последнего посещения появилась новая тема «{TOPIC_TITLE}». Вы можете перейти по ссылке, чтобы просмотреть её. Новые уведомления не будут приходить, пока вы не просмотрите форум:

{U_FORUM}

Если вы больше не хотите следить за форумом, то либо щёлкните по находящейся в нём ссылке «Отписаться от форума», либо перейдите по следующей ссылке:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Жалоба на личное сообщение {PM_SUBJECT} закрыта

Здравствуйте, {USERNAME}!

Вы получили это уведомление потому, что отправленная вами жалоба на личное сообщение {PM_SUBJECT}, полученное вами на конференции «{SITENAME}», была просмотрена модератором или администратором. После просмотра жалоба была закрыта. По возникшим вопросам свяжитесь с {CLOSER_NAME} (пользователь, закрывший жалобу) посредством личного сообщения.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Жалоба на сообщение {PM_SUBJECT} удалена

Здравствуйте, {USERNAME}!

Вы получили это уведомление потому, что отправленная вами жалоба на личное сообщение {PM_SUBJECT}, полученное вами на конференции «{SITENAME}», была удалена модератором или администратором.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Сообщение одобрено — «{POST_SUBJECT}»

Здравствуйте, {USERNAME}!

Вы получили это уведомление потому, что ваше сообщение «{POST_SUBJECT}» на конференции «{SITENAME}» было одобрено модератором или администратором.

Если вы хотите просмотреть свое сообщение, перейдите по следующей ссылке:
{U_VIEW_POST}

Если вы хотите просмотреть тему, перейдите по следующей ссылке:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Сообщение отклонено — «{POST_SUBJECT}»

Здравствуйте, {USERNAME}!

Вы получили это уведомление потому, что ваше сообщение «{POST_SUBJECT}» на конференции «{SITENAME}» было отклонено модератором или администратором.

Сообщение было отклонено по следующей причине:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Новое личное сообщение

Здравствуйте, {USERNAME}!

Вам пришло новое личное сообщение от {AUTHOR_NAME} на конференции «{SITENAME}» с темой:

{SUBJECT}

Вы можете прочитать это сообщение, перейдя по следующей ссылке:

{U_VIEW_MESSAGE}

Помните, вы можете отказаться от получения подобных уведомлений, если измените настройки в своём личном разделе.

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
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Жалоба закрыта — «{POST_SUBJECT}»

Здравствуйте, {USERNAME}!

Вы получили это уведомление потому, что поданная вами жалоба на сообщение «{POST_SUBJECT}» в теме «{TOPIC_TITLE}» на конференции «{SITENAME}» была рассмотрена модератором или администратором. После рассмотрения жалоба была закрыта. По возникшим в дальнейшем вопросам свяжитесь с {CLOSER_NAME} посредством личного сообщения.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Жалоба удалена — «{POST_SUBJECT}»

Здравствуйте, {USERNAME}!

Вы получили это уведомление потому, что поданная вами жалоба на сообщение «{POST_SUBJECT}» в теме «{TOPIC_TITLE}» на конференции «{SITENAME}» была удалена модератором или администратором.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Тема одобрена — «{TOPIC_TITLE}»

Здравствуйте, {USERNAME}!

Вы получили это уведомление потому, что ваша тема «{TOPIC_TITLE}» на конференции «{SITENAME}» была одобрена модератором или администратором.

Если вы хотите просмотреть тему, перейдите по следующей ссылке:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Тема отклонена — «{TOPIC_TITLE}»

Здравствуйте, {USERNAME}!

Вы получили это уведомление потому, что ваша тема «{TOPIC_TITLE}» на конференции «{SITENAME}» была отклонена модератором или администратором.

Тема была отклонена по следующей причине:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Уведомление об ответе — «{TOPIC_TITLE}»

Здравствуйте, {USERNAME}!

Вы получили это сообщение потому, что следите за темой «{TOPIC_TITLE}» на конференции «{SITENAME}». В этой теме со времени вашего последнего посещения появилось новое сообщение. Вы можете перейти по ссылке, чтобы прочитать поступившие ответы; новые уведомления не будут приходить, пока вы не просмотрите тему.

Если вы хотите просмотреть самое новое сообщение с момента вашего последнего посещения, перейдите по следующей ссылке:
{U_NEWEST_POST}

Если вы хотите просмотреть всю тему, перейдите по следующей ссылке:
{U_TOPIC}

Если вы хотите просмотреть форум, перейдите по следующей ссылке:
{U_FORUM}

Если вы больше не хотите следить за темой, то либо щёлкните по находящейся в ней ссылке «Отписаться от темы», либо перейдите по следующей ссылке:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Повторная активация учётной записи

Здравствуйте, {USERNAME}!

Ваша учётная запись на конференции «{SITENAME}» была отключена, скорее всего из-за внесенных в ваш профиль изменений. Чтобы вновь её активировать, перейдите по этой ссылке:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Ваша учётная запись была отключена

Здравствуйте, {USERNAME}!

Ваша учётная запись на конференции «{SITENAME}» была отключена, скорее всего из-за внесенных в ваш профиль изменений. Администратор конференции должен активировать вашу учётную запись, чтобы вы смогли ей пользоваться. После активации вы получите повторное уведомление.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Активация нового пароля

Здравствуйте, {USERNAME}!

Вы получили это письмо потому, что вы (либо кто-то, выдающий себя за вас) попросили выслать новый пароль для вашей учётной записи на конференции «{SITENAME}». Если вы не просили выслать пароль, то не обращайте внимания на это письмо, если же подобные письма будут продолжать приходить, обратитесь к администратору конференции.

Прежде чем использовать новый пароль, вы должны его активировать. Для этого перейдите по ссылке:

{U_ACTIVATE}

В случае успешной активации вы сможете входить на конференцию, используя следующий пароль:

Пароль: {PASSWORD}

Вы сможете сменить этот пароль на странице редактирования профиля в личном разделе. Если у вас возникнут какие-либо трудности, обратитесь к администратору конференции.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Повторная активация учётной записи на конференции «{SITENAME}»

Администратор конференции запросил повторную активацию вашей учётной записи. В настоящее время ваша учётная запись неактивна.
Для активации учётной записи следуйте предложенным ниже инструкциям.

Сохраните это сообщение. Параметры вашей учётной записи таковы:

----------------------------
Имя пользователя: {USERNAME}
----------------------------

Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Перейдите по следующей ссылке для активации учётной записи:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Напоминание об отключённой учётной записи

Здравствуйте, {USERNAME}!

Данное уведомление отправлено вам для напоминания о том, ваша учётная запись на конференции «{SITENAME}», зарегистрированная {REGISTER_DATE}, до сих пор остаётся неактивной. Если вы хотите активировать эту учётную запись, то щёлкните по ссылке ниже:

{U_ACTIVATE}

Благодарим за регистрацию на конференции «{SITENAME}» и надеемся на ваше участие в обсуждениях.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Добро пожаловать на конференцию «{SITENAME}»

{WELCOME_MSG}

Пожалуйста, сохраните это сообщение. Параметры вашей учётной записи таковы:

----------------------------
Имя пользователя: {USERNAME}
----------------------------

Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Щёлкните по ссылке ниже для активации учётной записи:

{U_ACTIVATE}


Благодарим за регистрацию!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Добро пожаловать на конференцию «{SITENAME}»

{WELCOME_MSG}

Пожалуйста, сохраните это сообщение. Параметры вашей учётной записи таковы:

----------------------------
Имя пользователя: {USERNAME}
{PASSWORD_EXTRA_LINE}
Адрес конференции: {U_BOARD}
----------------------------

Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Благодарим за регистрацию!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Добро пожаловать на конференцию «{SITENAME}»

{WELCOME_MSG}

Рекомендуется сохранить это сообщение. Параметры вашей учётной записи таковы:

----------------------------
Имя пользователя: {USERNAME}
{PASSWORD_EXTRA_LINE}
Адрес конференции: {U_BOARD}
----------------------------

Щёлкните по ссылке ниже для активации учётной записи:

{U_ACTIVATE}

Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Благодарим за регистрацию!

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
