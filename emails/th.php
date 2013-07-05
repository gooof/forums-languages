<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '﻿{EMAILSUBJECT:} Activate user account

ถึงคุณ {USERNAME}

ชื่อบัญชีของ "{USERNAME}" ได้ถูกระงับชั่วคราว หรือเพิ่งจะถูกสร้างขึ้นใหม่
คุณควรตรวจสอบรายละเอียดของชื่อผู้ใช้นี้ (ถ้าจำเป็น)

คุณสามารถดูข้อมูลส่วตตัวของผู้ใช้นี้ได้ที่ลิงค์ด้านล่างนี้:
{U_USER_DETAILS}

คุณสามารถทำการยืนยันบัญชีของผู้ใช้นี้ได้ที่ลิงค์ด้านล่างนี้:
{U_ACTIVATE}

{EMAIL_SIG}

Use this link to view the user\'s profile and activate the account:
{U_VERIFY}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
ข้อความต่อไปนี้ถูกส่งถึงคุณโดยผู้ดูแลบอร์ดของเว็บ "{SITENAME}";
ถ้าข้อความนี้ก่อความรำคาญให้คุณ กรุณาติดต่อ webmaster ของบอร์ด ตาม email นี้:
{CONTACT_EMAIL}
โดยให้คุณแนบข้อความทั้งหมดมาด้วย (โดยเฉพาะข้อความทางเทคนิคด้านบนนี้)

ต่อไปนี้คือข้อความที่ส่งถึงคุณ
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Account activated

ถึงคุณ {USERNAME}

ชื่อสมาชิกองคุณที่เว็บ "{SITENAME}" ได้เปิดให้ใช้งานแล้ว โดย administrator 
ตอนนี้คุณสามารถเข้าสู่ระบบได้แล้ว

รหัสผ่านของคุณ ถูกเก็บไว้ในฐานข้อมูลของเราอย่างปลอดภัยที่สุด และ ไม่มีใครสามารถเรียกดูได้. ในกรณีที่ลืมรหัสผ่านคุณสามารถเปลี่ยนรหัสได้ด้วยอีเมลที่ผู้กับชื่อสมาชิกของคุณ.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} ยินดีตอนรับสู่ "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Board URL: {U_BOARD}
----------------------------

บัญชีของคุณไม่สามารถใช้งานได้ และ จะต้องได้รับการอนุมัติ โดยผู้ดูแลระบบก่อนที่จะสามารถเข้าสู่ ระบบได้. คุณจะได้รับเมลแจ้งเมื่อผู้ดูแลระบบอนุมัติ

รหัสผ่านของคุณ ถูกเก็บไว้ในฐานข้อมูลของเราอย่างปลอดภัยที่สุด.  และ ไม่มีใครสามารถเรียกดูได้. ในกรณีที่ลืมรหัสผ่านคุณสามารถเปลี่ยนรหัสได้ด้วยอีเมลที่ผู้กับชื่อสมาชิกของคุณ.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Welcome to "{SITENAME}"

{WELCOME_MSG}

In compliance with the COPPA, your account is currently inactive.

Please print this message and have your parent or guardian sign and date it. Then fax it to:

{FAX_INFO}

OR mail it to:

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
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

------------------------------ CUT HERE ------------------------------


Once the administrator has received the above form via fax or regular mail, your account will be activated.

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Welcome to "{SITENAME}"

{WELCOME_MSG}

In compliance with the COPPA, your account is currently inactive.

Please print this message and have your parent or guardian sign and date it. Then fax it to:

{FAX_INFO}

OR mail it to:

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
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

------------------------------ CUT HERE ------------------------------


Once the administrator has received the above form via fax or regular mail, your account will be activated.

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - E-mail a friend

ถึงคุณ {TO_USERNAME}

ข้อความต่อไปนี้ถูกส่งถึงคุณโดย {FROM_USERNAME} จากเว็บ "{SITENAME}"
ซึ่งเขาคิดว่าคุณอาจสนใจในหัวข้อนี้:
{TOPIC_NAME}

คุณสามารถอ่านได้ที่ลิงค์นี้:
{U_TOPIC}

อาจมีข้อความจาก {FROM_USERNAME} แนบต่อท้ายมาด้วย ซึ่งข้อความนี้ไม่ได้ถูกตรวจสอบโดยผู้ดูแลบอร์ด

ถ้าคุณต้องการร้องเรียนเกี่ยวกับ e-mail นี้ กรุณาติดต่อผู้ดูแลบอร์ด ที่ {BOARD_CONTACT}
โดยให้แนบข้อความทั้งหมดนี้มาด้วย

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} แจ้งมีการตอบกระทู้ - "{FORUM_NAME}"

ถึงคุณ {USERNAME}

คุณได้รับการแจ้งเตือนนี้ เพราะคุณได้ทำการเฝ้าดูฟอรัม "{FORUM_NAME}" ที่เว็บ {SITENAME}
และมีการตอบในหัวข้อ "{TOPIC_TITLE}" หลังจากที่คุณออกจากระบบไปแล้ว คุณสามารถคลิกที่ลิงค์ด้านล่างนี้เพื่ออ่านข้อความที่ตอบ
จะไม่มีการแจ้งเตือนใดๆอีกจนกว่าคุณจะเข้าไปอ่านในหัวข้อนี้
{U_NEWEST_POST}

ถ้าคุณไม่ต้องการรับการแจ้งเตือนอีกต่อไป คุณสามารถคลิกที่ลิงค์ "ยกเลิกส่งเมลล์แจ้งเมื่อมีการตอบกระทู้นี้" ซึ่งจะอยู่ที่ด้านล่างของกระทู้นั้นๆ หรือจะคลิกที่ลิงค์ด้านล่างนี้ก็ได้:
{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} You have been added to this usergroup

ขอแสดงความยินดีด้วย

คุณได้รับอนุญาตให้เข้ากลุ่มผู้ใช้ "{GROUP_NAME}" บนเว็บ "{SITENAME}" เรียบร้อยแล้ว
ซึ่งผู้ดูแลกลุ่ม หรือ ผู้ดูแลเว็บ ได้เป็นผู้จัดการให้
ถ้าคุณต้องการข้อมูลเพิ่มเติม ให้ติดต่อกลับมาทางเรา

คุณสามารถดูรายละเอียดของกลุ่มผู้ใช้ได้ที่นี่:
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Your request has been approved

ขอแสดงความยินดีด้วย

คุณได้รับอนุญาตให้เข้าร่วมกลุ่มผู้ใช้ "{GROUP_NAME}" บนเว็บ "{SITENAME}" เรียบร้อยแล้ว
คลิกที่ลิงค์ด้านล่างนี้ เพื่อดูสถานะการเป็นสมาชิกกลุ่มของคุณ
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} A request to join your group has been made

ถึงคุณ {USERNAME}

ได้มีผู้ขอสมัครเข้าร่วมกลุ่ม "{GROUP_NAME}" ที่คุณดูแลอยู่บนเว็บ "{SITENAME}"
ให้คลิกที่ลิงค์ด้านล่างนี้ เพื่อทำการอนุญาตหรือปฏิเสธ:
{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB ติดตั้งเรียบร้อยแล้ว

ขอแสดงความยินดี

คุณได้ทำการติดตั้ง phpBB เสร็จเรียบร้อยแล้ว

กรุณาอย่าทำรหัสผ่านหาย ซึ่งรหัสผ่านนี้ได้ถูกเข้ารหัสไว้ในฐานข้อมูล และไม่สามารถส่งให้คุณได้
อย่างไรก็ตาม ถ้าคุณลืมรหัสผ่าน คุณสามารถขอรหัสผ่านอันใหม่ได้

----------------------------
Username: {USERNAME}

Board URL: {U_BOARD}
----------------------------

คุณสามารถอ่านรายละเอียดเพิ่มเติมได้ที่โฟลเดอร์ docs และ support page ของ phpBB.com - http://www.phpbb.com/support/
เพื่อให้บอร์ดของคุณปลอดภัยที่สุด คุณควรจะหมั่นอัปเกรดเว็บบอร์ดให้เป็นเวอร์ชันล่าสุดอยู่เสมอ 
ติดตามข่าวการอัพเกรด phpbb3 ภาษาไทยได้ที่ http://www.phpbbthailand.com
คุณควรจะสมัครสมาชิกที่ลิงค์ด้านบน เพื่อรับการแจ้งเตือนเมื่อมีเว็บบอร์ดเวอร์ชันใหม่ออกมา 

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} แจ้งมีหัวข้อใหม่ - "{FORUM_NAME}"

ถึงคุณ {USERNAME}

คุณได้รับการแจ้งเตือนนี้ เพราะคุณได้ตั้งค่าให้เตือนเมือมีข้อความใหม่ที่บอร์ด "{FORUM_NAME}" ที่เว็บ {SITENAME}
และได้มีการสร้างหัวข้อใหม่ คือ "{TOPIC_TITLE}" หลังจากที่คุณออกจากระบบไปแล้ว
คุณสามารถคลิกที่ลิงค์ด้านล่างนี้เพื่อเข้าไปอ่านในบอร์ดนั้น
และจะไม่มีการแจ้งเตือนใดๆ อีกจนกว่าคุณจะเข้าไปอ่านในบอร์ดนั้น
{U_FORUM}

ถ้าคุณไม่ต้องการรับการแจ้งเตือนอีก คุณสามารถคลิกที่ลิงค์ "หยุดการเฝ้าดูหัวข้อนี้" ซึ่งจะอยู่ที่ด้านล่างของหัวข้อนั้นๆ หรือคลิกที่ลิงค์ด้านล่างนี้ก็ได้:
{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Report closed - "{PM_SUBJECT}"

Hello {USERNAME},

You are receiving this notification because the report you filed regarding the private message "{PM_SUBJECT}" at "{SITENAME}" has been tended to by a moderator or administrator. The report is now closed. If you have further questions, please contact {CLOSER_NAME} by private message.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Report deleted - "{PM_SUBJECT}"

Hello {USERNAME},

You are receiving this notification because the report you filed regarding the private message "{PM_SUBJECT}" at "{SITENAME}" was deleted by a moderator or administrator.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Post approved - "{POST_SUBJECT}"

ถึงคุณ {USERNAME}

คุณได้รับการแจ้งเตือนนี้ เพราะข้อความของคุณ "{POST_SUBJECT}" ที่เว็บ "{SITENAME}"
ได้รับการรับรองจากผู้ดูแลบอร์ดเรียบร้อยแล้ว

คลิกที่ลิงค์ด้านล่างนี้ เพื่อดูข้อความ:
{U_VIEW_POST}

คลิกที่ลิงค์ด้านล่างนี้ เพื่อดูหัวข้อ:
{U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Post disapproved - "{POST_SUBJECT}"

ถึงคุณ {USERNAME}

คุณได้รับการแจ้งเตือนนี้ เพราะข้อความของคุณ "{POST_SUBJECT}" ที่เว็บ "{SITENAME}"
ได้ถูกปฏิเสธการรับรองจากผู้ดูแลบอร์ด

นี่คือเหตุผลของการปฏิเสธการรับรอง

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} New private message has arrived

ถึงคุณ {USERNAME}

มีข้อความส่วนตัว จาก "{AUTHOR_NAME}" ส่งมาถึงคุณ บนเว็บ "{SITENAME}"
มีหัวข้อว่า
{SUBJECT}

คุณสามารถอ่านข้อความได้โดยคลิกที่ลิงค์ด้านล่างนี้:
{U_VIEW_MESSAGE}

คุณสามารถกำหนดไม่ให้มีการแจ้งเตือนได้ โดยการเปลี่ยนการตั้งค่าในข้อมูลส่วนตัว

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
ถึงคุณ {TO_USERNAME}

ข้อความต่อไปนี้ ได้ส่งถึงคุณโดย {FROM_USERNAME} ผ่านทางชื่อบัญชีของคุณบนเว็บ {SITENAME}
ถ้าข้อความนี้ก่อความรำคาญให้คุณ กรุณาติดต่อ webmaster ของบอร์ดที่ email นี้:
{BOARD_CONTACT}
โดยให้คุณแนบข้อความทั้งหมดมาด้วย (โดยเฉพาะข้อความทางเทคนิคด้านบนนี้)

หมายเหตุ: ข้อความที่คุณตอบกลับ (Reply) จะถูกส่งไปให้ {FROM_USERNAME}

ต่อไปนี้คือข้อความที่ส่งถึงคุณ
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
ถึงคุณ {TO_USERNAME}

ข้อความต่อไปนี้ ได้ส่งถึงคุณโดย {FROM_USERNAME} ผ่านทางชื่อบัญชีของคุณบนเว็บ {SITENAME}
ถ้าข้อความนี้ก่อความรำคาญให้คุณ กรุณาติดต่อ webmaster ของบอร์ดที่ email นี้:
{BOARD_CONTACT}

หมายเหตุ: ที่อยู่ของผู้ส่งข้อความ เป็นชื่อบัญชี IM ของบอร์ด

ต่อไปนี้คือข้อความที่ส่งถึงคุณ
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Report closed - "{POST_SUBJECT}"

ถึงคุณ {USERNAME}

คุณได้รับการแจ้งเตือนนี้ เพราะรายงานที่คุณแจ้งเกี่ยวกับข้อความ "{POST_SUBJECT}" ในหัวข้อ "{TOPIC_TITLE}" ที่เว็บ "{SITENAME}"
ได้ถูกปิดแล้ว ถ้าคุณมีข้อสงสัย กรุณาส่งข้อความส่วนตัวไปหา {CLOSER_NAME}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Report deleted - "{POST_SUBJECT}"

ถึงคุณ {USERNAME}

คุณได้รับการแจ้งเตือนนี้ เพราะรายงานที่คุณแจ้งเกี่ยวกับข้อความ "{POST_SUBJECT}" ในหัวข้อ "{TOPIC_TITLE}" ที่เว็บ "{SITENAME}"
ได้ถูกลบโดยผู้ดูแลบอร์ดแล้ว

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Topic approved - "{TOPIC_TITLE}"

ถึงคุณ {USERNAME}

คุณได้รับการแจ้งเตือนนี้ เพราะหัวข้อของคุณ "{TOPIC_TITLE}" ที่เว็บ "{SITENAME}"
ได้รับการรับรองจากผู้ดูแลบอร์ดเรียบร้อยแล้ว

คลิกที่ลิงค์ด้านล่างนี้ เพื่อดูหัวข้อ:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Topic disapproved - "{TOPIC_TITLE}"

ถึงคุณ {USERNAME}

คุณได้รับการแจ้งเตือนนี้ เพราะหัวข้อของคุณ "{TOPIC_TITLE}" ที่เว็บ "{SITENAME}"
ได้ถูกปฏิเสธการรับรองจากผู้ดูแลบอร์ด

นี่คือเหตุผลของการปฏิเสธการรับรอง

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

ถึงคุณ {USERNAME}

คุณได้รับการแจ้งเตือนนี้ เพราะคุณได้ทำการเฝ้าดูหัวข้อ "{TOPIC_TITLE}" ที่เว็บ {SITENAME}
และมีการตอบในหัวข้อนี้หลังจากที่คุณออกจากระบบไปแล้ว

คุณสามารถคลิกที่ลิงค์ด้านล่างนี้เพื่ออ่านข้อความที่ตอบล่าสุด
{U_NEWEST_POST}

หรือคลิกที่ลิงค์ด้านล่างนี้เพื่ออ่านหัวข้อทั้งหมด
{U_TOPIC}

ถ้าคุณไม่ต้องการรับการแจ้งเตือนอีกต่อไป คุณสามารถคลิกที่ลิงค์ "หยุดการเฝ้าดูหัวข้อนี้" ซึ่งจะอยู่ที่ด้านล่างของหัวข้อนั้นๆ หรือจะคลิกที่ลิงค์ด้านล่างนี้ก็ได้:
{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reactivate your account

ถึงคุณ {USERNAME}

ชื่อบัญชีของคุณบนเว็บ "{SITENAME}" ได้ถูกระงับชั่วคราว อาจเกิดจากการเปลี่ยนแปลงข้อมูลส่วนตัวของคุณ
ให้คุณคลิกที่ลิงค์ด้านล่างนี้ เพื่อทำการยืนยันชื่อบัญชีของคุณ ใหม่อีกครั้ง:
{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Your account has been deactivated

ถึงคุณ {USERNAME}

ชื่อบัญชีของคุณบนเว็บ "{SITENAME}" ถูกระงับชั่วคราว ซึ่งอาจเกิดจากการเปลี่ยนแปลงข้อมูลส่วนตัว
คุณต้องรอให้ผู้ดูแลบอร์ด ทำการยืนยันบัญชีให้คุณก่อน คุณจึงจะสามารถเข้าสู่ระบบได้
คุณจะได้รับ e-mail แจ้งเตือน เมื่อผู้ดูแลบอร์ดได้ทำการยืนยันให้แล้ว

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} New password activation

ถึงคุณ {USERNAME}

คุณได้รับจดหมายฉบับนี้เพราะคุณ (หรือบางคนที่ใช้ชื่อบัญชีของคุณ) ได้ทำการขอรหัสผ่านใหม่ บนเว็บ {SITENAME}
ถ้าคุณไม่ได้ทำการขอรหัสผ่านใหม่ ขอให้คุณลบจดหมายฉบับนี้ทิ้ง และอย่าพยายามตอบกลับมา
ถ้าคุณยังได้รับจดหมายฉบับนี้อยู่อีก กรุณาติดต่อ administrator ของบอร์ด

ถ้าคุณได้ทำการขอรหัสผ่านใหม่ไว้ คุณต้องทำการยืนยันรหัสผ่านอันใหม่ของคุณเสียก่อน
โดยการคลิกที่ลิงค์ด้านล่างนี้
{U_ACTIVATE}

หลังจากนั้น คุณจะสามารถเข้าสู่ระบบได้โดยใช้รหัสผ่านอันใหม่ คือ:

Password: {PASSWORD}

คุณสามารถเปลี่ยนแปลงรหัสผ่านใหม่ได้ด้วยตัวเอง ที่ข้อมูลส่วนตัว
ถ้าคุณต้องการความช่วยเหลือ กรุณาติดต่อ administrator ของบอร์ด

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} เปิดใช้งานบัญชีของคุณ "{SITENAME}" - {U_BOARD}

ผู้ดูแลบอร์ดได้ทำการระงับบัญชีของคุณชั่วคราว
คุณจะไม่สามารถเข้าสู่ระบบได้ จนกว่าคุณจะทำการยืนยันบัญชีของคุณ โดยคลิกที่ลิงค์ด้านล่างนี้

กรุณาเก็บรักษา e-mail นี้ไว้ให้ดี รายละเอียดชื่อบัญชีของคุณคือ:

----------------------------
Username: {USERNAME}
----------------------------

กรุณาอย่าทำรหัสผ่านหาย ซึ่งรหัสผ่านนี้ได้ถูกเข้ารหัสไว้ในฐานข้อมูล และทางเราไม่สามารถส่งให้คุณได้
อย่างไรก็ตาม ถ้าคุณลืมรหัสผ่าน คุณสามารถขอรหัสผ่านอันใหม่ได้ ซึ่งจะใช้วิธียืนยันชื่อบัญชีเหมือนเดิม

คลิกที่ลิงค์ด้านล่างนี้ เพื่อยืนยันบัญชีของคุณ:
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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} เตือนบัญชีไม่ได้ใช้งาน

ถึงคุณ {USERNAME}

ข้อความแจ้งเตือนเรื่องบัญชีของคุณที่เว็บ "{SITENAME}" สมัครสมาชิกไว้เมื่อวันที่ {REGISTER_DATE} และคุณยังไม่ได้ทำการยืนยันบัญชี
กรุณาคลิกที่ลิงค์ด้านล่างนี้เพื่อยืนยันบัญชีของคุณ
{U_ACTIVATE}

ขอบคุณที่ทำการสมัครสมาชิกที่เว็บ "{SITENAME}"
เราหวังอย่างยิ่งว่าคุณจะมาร่วมเป็นสมาชิกกับเรา

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} ยินดีตอนรับสู่ "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

กรุณาเก็บรักษา e-mail นี้ไว้ รายละเอียดชื่อบัญชีของคุณคือ:

----------------------------
Username: {USERNAME}
----------------------------

กรุณาอย่าทำรหัสผ่านหาย รหัสผ่านนี้ได้ถูกเข้ารหัสแลพเก็บไว้ในฐานข้อมูล และทางเราไม่สามารถส่งให้คุณใหม่ได้
แต่อย่างไรก็ตาม ถ้าคุณลืมรหัสผ่าน คุณสามารถขอรหัสผ่านใหม่ได้ ซึ่งจะใช้วิธียืนยันชื่อบัญชีเหมือนเดิม

ขณะนี้บัญชีของคุณยังไม่ได้รับการยืนยัน กรุณาคลิกที่ลิงค์ด้านล่างนี้เพื่อทำการยืนยัน:
{U_ACTIVATE}

ขอบคุณที่ทำการสมัครสมาชิก

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} ยินดีตอนรับสู่ "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

กรุณาเก็บรักษา e-mail นี้ไว้ให้ดี รายละเอียดชื่อบัญชีของคุณคือ:

----------------------------
Username: {USERNAME}
Board URL: {U_BOARD}
----------------------------

กรุณาอย่าทำรหัสผ่านหาย รหัสผ่านนี้ได้ถูกเข้ารหัสแลพเก็บไว้ในฐานข้อมูล และทางเราไม่สามารถส่งให้คุณใหม่ได้
แต่อย่างไรก็ตาม ถ้าคุณลืมรหัสผ่าน คุณสามารถขอรหัสผ่านใหม่ได้ ซึ่งจะใช้วิธียืนยันชื่อบัญชีเหมือนเดิม

ขอบคุณที่ทำการสมัครสมาชิก

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} ยินดีตอนรับสู่ "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

กรุณาเก็บรักษา e-mail นี้ไว้ให้ดี รายละเอียดชื่อบัญชีของคุณคือ:

----------------------------
Username: {USERNAME}

Board URL: {U_BOARD}
----------------------------

ชื่อบัญชีของคุณยังไม่ได้รับการยืนยัน
คุณจะยังไม่สามารถเข้าสู่ระบบได้ จนกว่าคุณจะคลิกเข้าไปที่ลิงค์ด้านล่างนี้:
{U_ACTIVATE}

กรุณาอย่าทำรหัสผ่านหาย รหัสผ่านนี้ได้ถูกเข้ารหัสแลพเก็บไว้ในฐานข้อมูล และทางเราไม่สามารถส่งให้คุณใหม่ได้
แต่อย่างไรก็ตาม ถ้าคุณลืมรหัสผ่าน คุณสามารถขอรหัสผ่านใหม่ได้ ซึ่งจะใช้วิธียืนยันชื่อบัญชีเหมือนเดิม

ขอบคุณที่ทำการสมัครสมาชิก

{EMAIL_SIG}',
));


