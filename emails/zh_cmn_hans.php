<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} 用户帐号激活

您好,

用户帐号 "{USERNAME}" 刚刚建立但是还处于未激活状态, 您需要检查用户的资料(如果需要的话)并妥当处理这个帐号.

用户资料链接:
{U_USER_DETAILS}

用户帐号激活链接:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
以下是由 "{SITENAME}" 的管理员发送给您的email. 如果这个邮件是垃圾邮件, 或包含非法内容请联系该论坛的管理员, 联系地址:

{CONTACT_EMAIL}

包含完整email?(特别是邮件头). 

发送给您的邮件如下:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} 帐号已激活

您好, {USERNAME},

您在"{SITENAME}"上的帐号已经被管理员激活, 您现在可以登陆了。
在论坛数据库中只保存加密后的密码, 无法反向解密. 如果您不慎忘记密码, 你只能使用您的注册邮箱进行密码重设.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} 欢迎来到 "{SITENAME}"

{WELCOME_MSG}

请保留这封email作为备份. 您的帐号信息如下:

----------------------------
用户名: {USERNAME}

论坛链接: {U_BOARD}
----------------------------

您的帐号尚处于未激活状态, 需要由论坛的管理员审查后激活. 当帐号通过时您会收到另一封email通知.

请不要遗失自己的密码, 因为用户密码需要编码加密后存入数据库, 此过程不可逆, 我们不能再从中得到您的密码. 当然, 如果您不慎遗失了自己的密码, 您可以重新申请一个密码, 但是帐号将需要按照这样的方式重新激活一次.

感谢您的注册.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} 欢迎来到 "{SITENAME}"

{WELCOME_MSG}

根据 COPPA, 您的帐号暂时是未激活的.

请打印如下的内容并经您的父母或监护人签字后传真至:

{FAX_INFO}

或邮寄至:

{MAIL_INFO}

------------------------------ 由这里剪下 ------------------------------
Permission to participate at "{SITENAME}" - {U_BOARD}

Username: {USERNAME}
Email: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO "{SITENAME}" TO STORE THIS INFORMATION. 
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD. 
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM "{SITENAME}" AT ANY TIME.


Parent or guardian 
(print your name here): _____________________

(sign here): __________________ 

Date: _______________

------------------------------ 由这里剪下 ------------------------------


一旦管理员通过传真或邮件接收到以上的表单您的帐号将被激活.

请不要遗失自己的密码, 因为用户密码需要编码加密后存入数据库, 此过程不可逆, 所以我们不能再从中得到您的密码. 当然, 如果您不慎遗失了自己的密码, 您可以重新申请一个密码, 但是帐号将需要按照这样的方式重新激活一次.

感谢您的注册.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} 欢迎来到 "{SITENAME}"

{WELCOME_MSG}

根据 COPPA, 您的帐号暂时是未激活的.

请打印如下的内容并经您的父母或监护人签字后传真至:

{FAX_INFO}

或邮寄至:

{MAIL_INFO}

------------------------------ 由这里剪下 ------------------------------
Permission to participate at "{SITENAME}" - {U_BOARD}

Username: {USERNAME}
Email: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO "{SITENAME}" TO STORE THIS INFORMATION. 
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD. 
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM "{SITENAME}" AT ANY TIME.


Parent or guardian 
(print your name here): _____________________

(sign here): __________________ 

Date: _______________

------------------------------ 由这里剪下 ------------------------------


一旦管理员通过传真或邮件接收到以上的表单您的帐号将被激活.

请不要遗失自己的密码, 因为用户密码需要编码加密后存入数据库, 此过程不可逆, 所以我们不能再从中得到您的密码. 当然, 如果您不慎遗失了自己的密码, 您可以重新申请一个密码, 但是帐号将需要按照这样的方式重新激活一次.

感谢您的注册.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - 给朋友发送email

Hello {TO_USERNAME},

这个email由 {FROM_USERNAME} 发送自 "{SITENAME}",  他/她觉得您可能会对这些内容感兴趣:

{TOPIC_NAME}

您可以在如下链接中浏览:

{U_TOPIC}

 {FROM_USERNAME} 发送的邮件内容也在下面包含, 请注意这些内容并没有经过论坛管理员批准或审查. 如果您对这类邮件表示不满, 请联系论坛管理员 {BOARD_CONTACT}. 请在邮件中包含这个邮件的邮件头内容.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} 版面帖子通知 - "{FORUM_NAME}"

Hello {USERNAME},

您收到这个通知是因为您设置了在 "{SITENAME}" 上监视版面 "{FORUM_NAME}". 这个版面上刚有人回复了主题 "{TOPIC_TITLE}". 您可以使用下面的链接查看这个主题, 在您查看这个主题前不会再有任何通知.

{U_NEWEST_POST}

如果您想查看这个主题，点击下面的链接：
{U_TOPIC}

如果您想查看这个版面，点击下面的链接：
{U_FORUM}

如果您不想再监视这个版面, 您可以在上面的版面中点击 "取消订阅版面" 链接或点击下面的链接:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} 您已经加入这个用户组

恭喜,

您已经在 "{SITENAME}" 上被加入用户组 "{GROUP_NAME}".
这个操作由用户组管理者或论坛管理员完成, 可以联系他们得到更多的信息.

您可以通过下面的链接查看您的用户组信息:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} 您的请求已经被批准

恭喜,

您在 "{SITENAME}" 上加入 "{GROUP_NAME}" 用户组的请求已经被批准.
点击下面的链接可以看到您的用户组信息.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} 加入用户组的申请

{USERNAME}, 您好:

用户 "{REQUEST_USERNAME}" 请求加入您在 "{SITENAME}" 中管理的用户组 "{GROUP_NAME}".
如果您需要进行批准或者驳回操作, 请使用如下链接:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB 安装成功

恭喜！

您已经成功地安装了phpBB。

这封信包含了重要的安装信息，请妥善保管。注意数据库中的密码是被加密过的，无法直接读取，若您不幸遗失此密码，就只能再申请一个新的密码了。

----------------------------
用户名：{USERNAME}

论坛地址：{U_BOARD}
----------------------------

您可以在安装目录的“docs”文件夹，以及phpBB.com的支持页面“http://www.phpbb.com/support/”找到一些有用的信息。

为了保障您的论坛安全稳定，我们强烈建议您订阅邮件列表以便随时获得最新的发布消息，地址如下：

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} 新主题通知 - "{FORUM_NAME}"

Hello {USERNAME},

您收到这个通知是因为您在 "{SITENAME}" 上订阅了版面 "{FORUM_NAME}". 刚刚有人在这个版面发表了新主题 "{TOPIC_TITLE}". 您可以点击下面的链接查看版面, 在您查看版面前不会再有更多的通知.

{U_FORUM}

如果您不希望再监视这个版面, 您可以点击版面页面上的 "取消订阅" 链接或者点击下面的链接:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} 举报已关闭 - "{PM_SUBJECT}"

{USERNAME},

您好!

您在 "{SITENAME}" 上对于私人短信"{PM_SUBJECT}" 的举报已经被版主或管理员关闭. 如果您有任何问题, 请站内联系 {CLOSER_NAME}.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} 举报已删除 - "{PM_SUBJECT}"

{USERNAME},

您好!

您在 "{SITENAME}" 上对于私人短信"{PM_SUBJECT}" 的举报已经被版主或管理员删除. 


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} 帖子被批准 - "{POST_SUBJECT}"

Hello {USERNAME},

您收到这个通知是因为您在 "{SITENAME}" 上的帖子 "{POST_SUBJECT}" 已经被版主或管理员批准.

您可以点击下面的链接查看您的帖子:
{U_VIEW_POST}

您可以点击下面的链接查看这个主题:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} 帖子未批准 - "{POST_SUBJECT}"

Hello {USERNAME},

您收到这个通知是因为您在 "{SITENAME}" 上发表的帖子 "{POST_SUBJECT}" 未通过版主或管理员批准.

不批准的理由是:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} 收到新的私人短信

Hello {USERNAME},

您在 "{SITENAME}" 上的帐号收到了来自 "{AUTHOR_NAME}"的站内短信, 标题为:

{SUBJECT}

您可以使用下面的链接查看短信:

{U_VIEW_MESSAGE}

您的个人设置中允许论坛在此类事件中通知您, 如果您不希望再次收到这样的通知, 您可以在个人资料设置中关闭它.

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

您在 "{SITENAME}" 上的帐号收到了来自 {FROM_USERNAME} 的新email, 下面是email的内容. 如果是垃圾邮件或其他对您产生冒犯的内容请联系论坛的管理员, 通过如下的地址:

{BOARD_CONTACT}

在反馈中请包含完整的email内容 (特别是邮件头). 请注意这个email的回复地址已经被设置为帐号 {FROM_USERNAME}.

以下是发送给您的内容
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Hello {TO_USERNAME},

您在 "{SITENAME}" 上的帐号收到了来自 {FROM_USERNAME} 的新消息, 下面是消息的内容. 如果是垃圾消息或其他对您产生冒犯的内容请联系论坛的管理员, 通过如下的地址:

{BOARD_CONTACT}

反馈中请包含这个完整的信息. 请注意发送者的地址已经被设置到论坛 IM 帐号.

以下是发送给您的内容
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} 举报被关闭 - "{POST_SUBJECT}"

Hello {USERNAME},

您收到这个通知是因为您在 "{SITENAME}" 上对主题 "{TOPIC_TITLE}" 中的帖子 "{POST_SUBJECT}" 的举报已经被版主或管理员处理后关闭. 如果您有更多的问题请使用站内短信联系 {CLOSER_NAME}.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} 举报被删除 - "{POST_SUBJECT}"

Hello {USERNAME},

您收到这个通知是因为您在 "{SITENAME}" 上对主题 "{TOPIC_TITLE}" 中的帖子 "{POST_SUBJECT}" 的举报已经被版主或管理员删除.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} 主题已被批准 - "{TOPIC_TITLE}"

Hello {USERNAME},

您收到这个通知, 因为您在 "{SITENAME}" 上发表的主题 "{TOPIC_TITLE}" 已经被版主或管理员批准.

如果您希望查看这个主题, 请点击下面的链接:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} 主题未批准 - "{TOPIC_TITLE}"

Hello {USERNAME},

您收到这个通知是因为您在 "{SITENAME}" 上发表的主题 "{TOPIC_TITLE}" 未通过版主或管理员的批准.

不批准的理由是:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} 主题回复通知 - "{TOPIC_TITLE}"

Hello {USERNAME},

您收到这个通知, 因为您在 "{SITENAME}" 上订阅了主题 "{TOPIC_TITLE}". 有人刚刚回复这个主题. 您可以使用下面的链接访问这个新回复, 在您访问这个回复之前不会再有更多的通知.

如果您希望查看最新的帖子, 点击下面的链接:
{U_NEWEST_POST}

如果您想查看这个主题，点击下面的链接：
{U_TOPIC}

如果您想查看这个版面，点击下面的链接；
{U_FORUM}

如果您不希望再监视这个主题, 您可以点击主题浏览页面中的 "停止监视这个主题" 链接, 或者点击下面的链接:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} 重新激活您的帐户

您好 {USERNAME}，

您在 "{SITENAME}" 的帐户正处于未激活状态, 原因可能是您修改了自己的资料. 要重新激活它，请点击如下链接：

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} 您的帐户处于未激活状态

您好 {USERNAME},

您在 "{SITENAME}" 的帐户正处于未激活状态, 原因可能是您修改了自己的资料. 要继续使用, 您需要等待论坛管理员重新激活它. 激活后, 您将收到另一封通知信件.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} 激活新密码

您好 {USERNAME}，

您会收到这封信，是因为您（或其他人的错误操作）为您在 "{SITENAME}" 的帐户申请了新密码。如果您没有申请，请忽略这封信。如果您多次收到这封信，请联系管理员。

要使用新密码，您需要点击如下链接激活它：

{U_ACTIVATE}

成功后您将可以使用如下密码登录：

密码：{PASSWORD}

您将可以在个人资料里修改它。如果您遇到困难请联系管理员。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} 重新激活您在 "{SITENAME}" 上的帐号

论坛管理员需要您的帐号重新激活. 您的帐号暂时处于未激活状态.
请使用如下的步骤重新激活您的帐号.

请保存这封email作为记录. 您的帐号信息如下:

----------------------------
Username: {USERNAME}
----------------------------

您的密码被加密后存储于数据库中. 如果您忘记了以前的密码, 您可以重新申请密码并像这次一样重新激活您的帐号.

请访问下面的链接重新激活您的帐号:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} 帐户尚未激活

您好 {USERNAME}，

您于 {REGISTER_DATE} 在 "{SITENAME}" 注册了一个新账户，但尚未激活。要激活它，请点击如下链接：

{U_ACTIVATE}

感谢您在本站注册，我们期待您的进一步参与！

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} 欢迎光临 "{SITENAME}"

{WELCOME_MSG}

请妥善保管这封信件。您的帐户信息如下所示：

----------------------------
用户名：{USERNAME}
----------------------------

请注意避免遗失密码，因为数据库中保存的密码已被加密，无法直接读取。但是，如果您不幸遗忘了它，您还可以申请一个新的密码，并通过与激活此账户相同的方式激活它。

您的帐户尚未激活，请点击下面的链接激活它：

{U_ACTIVATE}


感谢您的注册！

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} 欢迎光临 "{SITENAME}"

{WELCOME_MSG}

请妥善保管这封信件。您的帐户信息如下所示：

----------------------------
用户名：{USERNAME}
{PASSWORD_EXTRA_LINE}
论坛链接: {U_BOARD}
----------------------------

请注意避免遗失密码，因为数据库中保存的密码已被加密。如果遗忘密码，您可以重新申请一个，并通过与激活此账户相同的方式激活它。

感谢您的注册！

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} 欢迎光临 "{SITENAME}"

{WELCOME_MSG}

请妥善保管这封信件。您的帐户信息如下所示：

----------------------------
用户名：{USERNAME}
{PASSWORD_EXTRA_LINE}
论坛链接: {U_BOARD}
----------------------------

您的帐户尚未激活，请点击下面的链接激活它：

{U_ACTIVATE}

请注意避免遗失密码，因为数据库中保存的密码已被加密。如果您忘了密码，可以重新申请一个，并通过与激活此账户相同的方式激活它。

感谢您的注册！

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
