<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Activate user account

Hello,

The account owned by "{USERNAME}" has been deactivated or newly created, you should check the details of this user (if required) and handle it appropriately.

Use this link to view the user\'s profile:
{U_USER_DETAILS}

Use this link to activate the account:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
The following is an e-mail sent to you by an administrator of "{SITENAME}". If this message is spam, contains abusive or other comments you find offensive please contact the webmaster of the board at the following address:

{CONTACT_EMAIL}

Include this full e-mail (particularly the headers). 

Message sent to you follows:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Account activated

Hello {USERNAME},

Your account on "{SITENAME}" has now been activated, you may login using the username you received in a previous e-mail.

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Welcome to "{SITENAME}"

{WELCOME_MSG}

Please keep this e-mail for your records. Your account information is as follows:

----------------------------
Username: {USERNAME}

Board URL: {U_BOARD}
----------------------------

Your account is currently inactive and will need to be approved by an administrator before you can log in. Another email will be sent when this has occurred.

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

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

Hello {TO_USERNAME},

This e-mail was sent from "{SITENAME}" by {FROM_USERNAME} who thought you may be interested in the following topic:

{TOPIC_NAME}

You can find it at:

{U_TOPIC}

A message from {FROM_USERNAME} may also be included below. Please note that this message has not been seen or approved by the board administrators. If you wish to complain about having received this e-mail please contact the board administrator at {BOARD_CONTACT}. Please quote the message headers when contacting this address.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Forum post notification - "{FORUM_NAME}"

Hello {USERNAME},

You are receiving this notification because you are watching the forum, "{FORUM_NAME}" at "{SITENAME}". This forum has received a new reply to the topic "{TOPIC_TITLE}" since your last visit. You can use the following link to view the last unread reply, no more notifications will be sent until you visit the topic.

{U_NEWEST_POST}

If you want to view the topic, click the following link:
{U_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

If you no longer wish to watch this forum you can either click the "Unsubscribe forum" link found in the forum above, or by clicking the following link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} You have been added to this usergroup

Congratulations,

You have been added to the "{GROUP_NAME}" group on "{SITENAME}".
This action was done by a group leader or the site administrator, contact them for more information.

You can view your groups information here:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Your request has been approved

Congratulations,

Your request to join the "{GROUP_NAME}" group on "{SITENAME}" has been approved.
Click on the following link to see your group membership.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} A request to join your group has been made

Dear {USERNAME},

The user "{REQUEST_USERNAME}" has requested to join the group "{GROUP_NAME}" you moderate on "{SITENAME}".
To approve or deny this request for group membership please visit the following link:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB installed

Congratulations,

You have successfully installed phpBB on your server.

This e-mail contains important information regarding your installation and should be kept for reference. Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

----------------------------
Username: {USERNAME}

Board URL: {U_BOARD}
----------------------------

Useful information regarding the phpBB software can be found in the docs folder of your installation and on phpBB.com\'s support page - http://www.phpbb.com/support/

In order to keep your board safe and secure, we highly recommended keeping current with software releases. For your convenience, a mailing list is available at the page referenced above.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} New topic notification - "{FORUM_NAME}"

Hello {USERNAME},

You are receiving this notification because you are watching the forum, "{FORUM_NAME}" at "{SITENAME}". This forum has received a new topic since your last visit, "{TOPIC_TITLE}". You can use the following link to view the forum, no more notifications will be sent until you visit the forum.

{U_FORUM}

If you no longer wish to watch this forum you can either click the "Unsubscribe forum" link found in the forum above, or by clicking the following link:

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

Hello {USERNAME},

You are receiving this notification because your post "{POST_SUBJECT}" at "{SITENAME}" was approved by a moderator or administrator.

If you want to view the post, click the following link:
{U_VIEW_POST}

If you want to view the topic, click the following link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Post disapproved - "{POST_SUBJECT}"

Hello {USERNAME},

You are receiving this notification because your post "{POST_SUBJECT}" at "{SITENAME}" was disapproved by a moderator or administrator.

The following reason was given for the disapproval:

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

Hello {USERNAME},

You have received a new private message from "{AUTHOR_NAME}" to your account on "{SITENAME}" with the following subject:

{SUBJECT}

You can view your new message by clicking on the following link:

{U_INBOX}

You have requested that you be notified on this event, remember that you can always choose not to be notified of new messages by changing the appropriate setting in your profile.

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
',
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
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Report closed - "{POST_SUBJECT}"

Hello {USERNAME},

You are receiving this notification because the report you filed on the post "{POST_SUBJECT}" in "{TOPIC_TITLE}" at "{SITENAME}" was handled by a moderator or by an administrator. The report was afterwards closed. If you have further questions contact {CLOSER_NAME} with a personal message.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Report deleted - "{POST_SUBJECT}"

Hello {USERNAME},

You are receiving this notification because the report you filed on the post "{POST_SUBJECT}" in "{TOPIC_TITLE}" at "{SITENAME}" was deleted by a moderator or by an administrator.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Topic approved - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because your topic "{TOPIC_TITLE}" at "{SITENAME}" was approved by a moderator or administrator.

If you want to view the topic, click the following link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Topic disapproved - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because your topic "{TOPIC_TITLE}" at "{SITENAME}" was disapproved by a moderator or administrator.

The following reason was given for the disapproval:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because you are watching the topic, "{TOPIC_TITLE}" at "{SITENAME}". This topic has received a reply since your last visit. You can use the following link to view the replies made, no more notifications will be sent until you visit the topic.

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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reactivate your account

Hello {USERNAME},

Your account on "{SITENAME}" has been deactivated, most likely due to changes made to your profile. In order to reactivate your account you must click on the link below:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Your account has been deactivated

Hello {USERNAME},

Your account on "{SITENAME}" has been deactivated, most likely due to changes made to your profile. The administrator of the board will need to activate it before you can log in. You will receive another notification when this has occurred.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} New password activation

Hello {USERNAME}

You are receiving this notification because you have (or someone pretending to be you has) requested a new password be sent for your account on "{SITENAME}". If you did not request this notification then please ignore it, if you keep receiving it please contact the board administrator.

To use the new password you need to activate it. To do this click the link provided below.

{U_ACTIVATE}

If successful you will be able to login using the following password:

Password: {PASSWORD}

You can of course change this password yourself via the profile page. If you have any difficulties please contact the board administrator.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reactivate your account on "{SITENAME}"

A board administrator requested that your account be reactivated. Your account is currently inactive.
Please follow the steps listed here to reactivate your account.

Please keep this e-mail for your records. Your account information is as follows:

----------------------------
Username: {USERNAME}
----------------------------

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Please visit the following link to reactivate your account:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Inactive account reminder

Hello {USERNAME},

This notification is a reminder that your account at "{SITENAME}", created on {REGISTER_DATE}, remains inactive. If you would like to activate this account, please visit the following link:

{U_ACTIVATE}

Thank you for registering at "{SITENAME}", we look forward to your participation.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Welcome to "{SITENAME}"

{WELCOME_MSG}

Please keep this e-mail for your records. Your account information is as follows:

----------------------------
Username: {USERNAME}
----------------------------

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Please visit the following link in order to activate your account:

{U_ACTIVATE}


Thank you for registering.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Welcome to "{SITENAME}"

{WELCOME_MSG}

Please keep this e-mail for your records. Your account information is as follows:

----------------------------
Username: {USERNAME}

Board URL: {U_BOARD}
----------------------------

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Welcome to "{SITENAME}"

{WELCOME_MSG}

Please keep this e-mail for your records. Your account information is as follows:

----------------------------
Username: {USERNAME}

Board URL: {U_BOARD}
----------------------------

Please visit the following link in order to activate your account:

{U_ACTIVATE}

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

{EMAIL_SIG}',
));


