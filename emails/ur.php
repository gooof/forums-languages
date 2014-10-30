<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} صارف اکائونٹ چالو کریں

اسلام علیکم ،

"{USERNAME}" کا کھاتہ یا تو غیر فعال ہے، یا یہ ایک نیا کھاتہ ہے۔ آ] اس کا معائنہ کریں (اگر ضرورت ہو تو) اور کوئی مناسب اقدام اٹھائیں

رکن کی پروفائل دیکھنے کے لئے نیچھے دئیے گئے لنک پر کلک کریں :
{U_USER_DETAILS}

نیچھے دئیے گئے لنک سے اکائونٹ فعال کریں
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
زیل کا پرقی مراسلہ آپ کو "{SITENAME}" کے منتظم کی جانب سے بھیجا گیا ہے۔ اگر اس مراسلے مین غلیظ الفاط، یا ایس لفاظ جو زاتیات  پر مبنی ہیں شامل ہیں تو آپ  اس فورم کے منتظم اعلٰی سے زیل کے برقی پتہ پر رابطہ کریں۔

{CONTACT_EMAIL}

اور اس جوابی مراسلے مین مکمل مراسلہ بشمول مراسلے کے ہیڈر کے ضرور اقتباس میں بھیجیں۔

آپ کو بھیجا گیا پیغام hsb zil oy
~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> 'subject: اکائونٹ چالو کر دیا گیا ہے

اسلام علیکم {USERNAME},

{SITENAME} پر آپکا اکائونٹ چالو کر دیا گیا ہے. آپ پہلے ای میل میں موصول ہوئے رکنی نام سے لاگن کر سکتے ہیں. 

آپکا پاس ورڈ ہماری ڈیٹا بیس میں محفوط کیا جا چکا ہے جسے عام طریقے سے دیکھا نہیں جا سکتا. اگر آپ پاس ورڈ بھول جائیں تو آپ اسے {SITENAME} پر رجسٹر ہوئے ای میل کے زریعے بحال کر سکتے ہیں. 

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} "%1$s" پر خوش آمدید

{WELCOME_MSG}

برائے مہربانی اس ای-میل کو اپنے ریکارڈ کے لیے رکھیں. 

---------------------------------------------
رکنیتی نام:  {USERNAME}
بورڈ کا ربط: {BOARD_URL}
---------------------------------------------

یہ اکاؤنٹ فی الوقت غیر فعال ہے اور کسی منتظم کی جانب سے منظوری کا منتظر ہے. ایسا ہونے کے بعد ای-میل کر دی جائے گی. 

رجسٹر کرنے کا شکریہ

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" پر خوش آمدید

{WELCOME_MSG}

COPPA کے عمل میں آپکا اکائونٹ فی الحال غیر فعال ہے. 

براہ مہربانی اس پیغام کو پرنٹ کریں اور اپنے والدین کے تاریخ کے ساتھ دستخط کروائیں. پھر اسکو زیلی پتہ پر فیکس کریں

{FAX_INFO}

یا میل کریں


{MAIL_INFO}

----------------------- یہاں سے کاٹیں ---------------------------------

"{SITENAME}" - {U_BOARD} پر شمولیت کی اجازت

رکنی نام:  {USERNAME}
ای-میل:  {EMAIL_ADDRESS}

میں نے اپنے بچے کی طرف سے دی گئی تفصیلات کو پڑھ لیا ہے اور "{SITENAME}" کو اجازت دیتا ہوں کہ وہ یہ معلومات محفوظ کر سکتے ہیں. 

میں‌سمجھ سکتا ہوں کہ یہ معلومات پاسورڈ داخل کرنے بعد تبدیل کی جا سکتی ہیں. 

میں سمجھ سکتا ہوں کہ میں "{SITENAME}" سے ان معلومات کو ختم کرنے کی درخواست کر سکتا ہوں.

والدین یا سرپرست
(اپنا نام یہاں لکھیں): ____________________________

(یہاں‌دستخط کریں): ______________________________

تاریخ: _____________________________

----------------------- یہاں سے کاٹیں -------------------------------------------------

ایک بار منتظم کو فیکس یا باقاعدہ ای میل کے ذریعے اوپر فارم موصول ہوا ، آپ کے اکاؤنٹ کو چالو کیا جائے گا.

رجسٹر کرنے کا شکریہ


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" پر خوش آمدید

{WELCOME_MSG}

COPPA کے عمل میں آپکا اکائونٹ فی الحال غیر فعال ہے. 

براہ مہربانی اس پیغام کو پرنٹ کریں اور اپنے والدین کے تاریخ کے ساتھ دستخط کروائیں. پھر اسکو زیلی پتہ پر فیکس کریں

{FAX_INFO}

یا میل کریں


{MAIL_INFO}

----------------------- یہاں سے کاٹیں ---------------------------------

"{SITENAME}" - {U_BOARD} پر شمولیت کی اجازت

رکنی نام:  {USERNAME}
ای-میل:  {EMAIL_ADDRESS}

میں نے اپنے بچے کی طرف سے دی گئی تفصیلات کو پڑھ لیا ہے اور "{SITENAME}" کو اجازت دیتا ہوں کہ وہ یہ معلومات محفوظ کر سکتے ہیں. 

میں‌سمجھ سکتا ہوں کہ یہ معلومات پاسورڈ داخل کرنے بعد تبدیل کی جا سکتی ہیں. 

میں سمجھ سکتا ہوں کہ میں "{SITENAME}" سے ان معلومات کو ختم کرنے کی درخواست کر سکتا ہوں.

والدین یا سرپرست
(اپنا نام یہاں لکھیں): ____________________________

(یہاں‌دستخط کریں): ______________________________

تاریخ: _____________________________

----------------------- یہاں سے کاٹیں -------------------------------------------------

ایک بار منتظم کو فیکس یا باقاعدہ ای میل کے ذریعے اوپر فارم موصول ہوا ، آپ کے اکاؤنٹ کو چالو کیا جائے گا.

رجسٹر کرنے کا شکریہ


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - دوست کو ای-میل کریں

اسلام علیکم {TO_USERNAME}

یہ ای-میل "{SITENAME}" سے {FROM_USERNAME} کی طرف سے بھیجی گئی ہے جو سمجھتے ہیں کہ آپ شاید درج ذیل موضوع میں دلچسپی رکھ سکتے ہیں.

{TOPIC_NAME}

آپ اسکو یہاں تلاش کر سکتے ہیں

{U_TOPIC}

{FROM_USERNAME} کی طرف سے پیغام شامل بھی ہو سکتا ہے. براہ کرم نوٹ فرمائیں کہ یہ پیغام منظور شدہ نہیں ہے اگر آپ اس بارے میں شکا یت کرنا چاہتے ہیں تو بورڈ منتظم کو {BOARD_CONTACT} پر رابطہ کریں.
-------------------------

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} فورم پوسٹ کی اہم اطلاع - "{FORUM_NAME}"

اسلام علیکم {USERNAME}،

آپکو یہ اطلاع اس لیے دی جا رہی ہے کیونکہ آپ "{SITENAME}" پر فورم "{FORUM_NAME}" کو دیکھ رہے ہیں. اس فورم میں موضوع "{TOPIC_TITLE}" میں ایک نیا جواب موصول ہوا ہے. درج ذیل لنک پر کلک کر کے آپ اسے دیکھ سکتے ہیں. 

{U_NEWEST_POST}

اگر آپ موضوع دیکھنا چاہتے ہیں تو ذیل میں لنک پر کلک کریں.
{U_TOPIC}

اگر آپ فورم دیکھنا چاہتے ہیں تو زیل میں لنک پر کلک کریں.
{U_FORUM}

اگر آپ س فورم کو مزید نہیں‌دیکھنا چاہتے تو زیل میں لنک پر کلک کریں.
{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} آپ کو اس گروہ میں شامل کیا گیا ہے.

مبارکباد تسلیم کریں، 

آپکو "{SITENAME"  پر، گروہ "{GROUP_NAME}" میں شامل کیا گیا ہے.
یہ عمل گروہ کے رہنما یا منتظم کی طرف سے کیا گیا ہے.  مزید معلومات کے لیے ان سے رابطہ کریں.

آپ اپنے گروہ کی تفصیلات یہاں دیکھ سکتے ہیں.
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} گروہ کی رکنیت کے لیے درخواست

مکرمی {USERNAME},

 "{GROUP_NAME}" نامی گروہ میں رکنیت کے لیے درخواست موصول ہوئی ہے 

اس درخواست کی منظوری یا نامنظوری کے بارے میں فیصلہ کے لیے ذیل کے ربط کا دورہ کریں ـ

شکریہ

{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} PHPBB اسنٹال ہو گیا ہے.

مبارک تسلیم کریں،

آپ نے کامیابی سے اپنے سرور پر PHPBB انسٹال کر لیا ہے. 

اس ای-میل میں آپکو اکائونٹ سے متعلق اہم اطلاعات موجود ہیں اور آپ اسے حوالہ کے لیے سنبھال کر رکھیں. آپکا پاسورڈ ہماری ڈیٹابیس میں‌محفوظ طریقہ سے شامل کر دیا گیا ہے. اگر آپ پاسورڈ بھول جائیں تو اپنے رجسٹرڈ شدہ ای-میل کے زریعے اسے ریسیٹ کر سکتے ہیں.

--------------------------------------------------------
رکنیتی نام: {USERNAME}
بورڈ کا ربط: {U_BOARD}
--------------------------------------------------------

PHPbb سے متعلق اہم معلومات فائلز میں یا PHPbb کی حمائیتی سائٹ پر پڑھی جا سکتی ہیں. http://www.phpbb.com/support/

اپنے بورڈ کو محفوظ رکھنے کے لیے آپ سے درخواست ہے کہ آپ موجودہ سافٹ وئیر کو اپ ڈیٹ رکھیں. آپکی آسانی کے لیے، ای-میلز کی ایک فہرست اوپر دیے گئے صفحے پر دیکھی جا سکتی ہے.

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
	'email/newtopic_notify.txt' 		=> 'موضوع: نئے موضوع کے بارے میں اہم اطلاع - "{FORUM_NAME}"

اسلام علیکم {USERNAME}

آپ کو یہ اطلاع اس لیے موصول ہوئی ہے کیونکہ آپ "{SITENAME}" پر "{FORUM_NAME}" پر نظر رکھے ہوئے ہیں. اس فورم پر آپکے آخری دورہ کے بعد ایک نیا موضوع شروع ہوا ہے، "{TOPIC_TITLE}". آپ فورم کو دیکھنے کے لیے مندرجہ زیل لنک استعمال کر سکتے ہیں. آپکو فورم کا دورہ کرنے تک کوئی ای میل نہیں بھیجی جائے گی.

{U_FORUM}

اگر آپ مزید اس فورم پر نظر نہیں‌رکھنا چاہتے تو آپ یا تو "فورم سے رکنیت ختم کریں" کے لنک کا استعمال کریں کو کہ  فورم میں اوپر ہے یا مندرجہ زیل لنک کا استعمال کریں.

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} رپورٹ بند کر دی گئی ہے - "{PM_SUBJECT}"

اسلام علیکم {USERNAME}

آپ اس اطلاع کو اس لیے موصول کر رہے ہیں کیونکہ آپکی ذاتی پیغام "{PM_SUBJECT}" پر درج کی گئی رپورٹ کو منتظمین کی طرف سے پڑھ لیا گیا ہے. اس رپورٹ کو بند کر دیا گیا ہے. اگر آپ اس بارے میں مزید جاننا چاہتے ہیں تو {CLOSER_NAME}  کو ذاتی پیغام میں رابطہ کریں. 

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} رپورٹ حذف کر دی گئی ہے - "{PM_SUBJECT}"

اسلام علیکم {USERNAME}،

آپکو یہ اطلاع اس لیے مل رہی ہے کیونکہ"{SITENAME}" پر آپکا رپورٹ کیے گئے ذاتی پیغام "{PM_SUBJECT}" کی رپورٹ کو منتظم یا مدیر کی طرف سے ختم کر دی گئی ہے.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} مراسلہ کی منظوری - "{POST_SUBJECT}"

اسلام علیکم {USERNAME}

آپ اس اطلاع کو اس لیے موصول کر رہے ہیں کیونکہ "{SITENAME}" پر آپکا مراسلہ "{POST_SUBJECT}" منتظمین کی طرف سے منظور کر لیا گیا ہے. 

اگر آپ مراسلہ دیکھنا چاہتے ہیں تو مندرجہ زیل ربط کا استعمال کریں.
{U_VIEW_POST}

اگر آپ موضوع دیکھنا چاہتے ہیں تو مندرجہ زیل ربط کا استعمال کریں.
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} مراسلہ "{POST_SUBJECT}" منظور نہیں ہوا.

اسلام علیکم {USERNAME}،

آپ یہ اہم اطلاع اس لیے دیکھ رہی ہیں کیونکہ آپکا مراسلہ "{POST_SUBJECT}" "{SITENAME}" پر منتظم یا مدیر کی طرف سے منظور نہیں ہوا.

نامنظوری کی وجہ درج ذیل ہے.

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} نئے ذاتی پیغام کی آمد

مکرمی {USERNAME}!

السلام علیکم !

"{SITENAME}" پر آپ کے لیے "{AUTHOR_NAME}" کی جانب سے ایک ذاتی پیغام بہ عنوان  ذیل موصول ہوا ہے:

{SUBJECT}

آپ اس نئے ذاتی پیغام کو  ذیل میں مہیا کیے گئے ربط پر ملاحظہ کر سکتے ہیں:

{U_INBOX}

اس اطلاع نامہ کے حصول کے لیے آپ نے اپنے کوائف نامہ میں درخواست کر رکھی ہے، یاد رھے کہ اگر آپپ آئندہ اس قسم کا اطلاع نامہ وصول نہیں کرنا چاہتے تو اپنے کوائف نامہ کی ترتیبات میں تبدیلی کے ذریعہ ایسا کر سکتے ہیں ـ

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
	'email/profile_send_email.txt' 		=> 'مکرمی {TO_USERNAME}

السلام علیکم!

ذیل میں ایک برقی خط ہے جو کہ آپ کو {FROM_USERNAME} کی جانب سے "{SITENAME}" پر موجود آپ کے کھاتہ کے ذریعہ ارسال کیا گیا ہے، اگر یہ پیغام غیر اخلاقی مواد یا نا زیبا کلمات پر مشتمل ہے تو آپ بورڈ کی انتظامیہ کو ذیل کے ربط کے ذریعہ مطلع کر سکتے ہیں ـ
براہ کرم انتظامیہ کو مطلع کرتے وقت مکمل برقی مراسلہ کو  ہیڈر سمیت ااپنے پیغام میں بصورت اقتباس شامل کریں

{BOARD_CONTACT}

آپ کو بھیجا گیا برقی مراسلہ یہ ہے:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'اسلام علیکم {USERNAME}،

ذیل کا پیغام آپکو {FROM_USERNAME} کی طرف سے بھیجا گیا ہے. اگر اس پیغام میں‌ناذیبا الفاظ موجود ہیں تو یہاں‌رابطہ کریں.

{BOARD_CONTACT}

یہ پورا پیغام شامل کریں. براہ مہربانی نوٹ فرمائیں کہ بھیجنے والا پتہ بورڈ کے فوری پیغام رسانی کے اکائونٹ پر سیٹ ہے. 

آپکو بھیجا گیا پیغام یہ ہے
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:}  شکایت نامہ کی بندش - "{POST_SUBJECT}"

مکرمی {USERNAME}

السلام علیکم!

"{TOPIC_TITLE}" نامی موضوع میں "{POST_SUBJECT}" کے زیر عنوان مراسلہ کے بارے میں آپ کی شکایت کے سلسلہ میں  آپ کو مطلع کیا جاتا ہے کہ آپ کی جانب سے ارسال کی گئی شکایت پر فورم کے مدیر اور  بورڈ کی انتظامیہ نے مناسب کارروائی مکمل کر کے اش شکایت کو نمٹا دیا ہے ـ اگر اس سلسلہ میں آپ کے ذھن میں مزید کوئی سوال موجود ہے تو آپ  {CLOSER_NAME} سے بذریعہ ذاتی پیغام رابطہ کر سکتے ہیں ـ شکریہ


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} شکایت نام بسلسلہ مراسلہ "{POST_SUBJECT}" حذف ـ

مکرمی {USERNAME}

السلام علیـــکم!

بحوالہ  "{SITENAME}" پر  "{TOPIC_TITLE}"  نامی موضوع میں مراسلہ بعنوان "{POST_SUBJECT}" کے سلسلہ میں آپ کا ارسال کر دہ شکایت نامہ، آپ کو  مطلع کیا جاتا ہے کہ فورم کے مدیر/بورڈ کی انتظامیہ نے آپ کے مراسلہ کو  حذف کر دیا ہے لہذا مطلع رھیں ـ

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} موضوع "{TOPIC_TITLE}" کی منظوری

مکرمی {USERNAME}

السلام علیکم!

بحوالہ  "{SITENAME}"  پر آپ کی جانب سے شروع کیا گیا موضوع "{TOPIC_TITLE}" آپ کو مطلع کیا جاتا ہے کہ آپ کا شروع کیا گیا موضوع انتظامیہ کی جانب سے اشاعت کے لیے منظور کر لیا گیا ہے، اگر آپ موضوع کا مطالعہ کرنا چاھتے ہیں تو ذیل کے ربط کو استعمال کریں:

{U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} موضوع "{TOPIC_TITLE}" کی نا منظوری

مکرمی {USERNAME}

السلام علیکم!

بحوالہ "{SITENAME}"  پر آپ کی جانب سے شروع کیا گیا موضوع بعوان "{TOPIC_TITLE}" آپ کو مطلع کیا جاتا ہے کہ آپ کی جانب سے شروع کیا گیا موضوع فورم کی انتظامیہ کی جانب سے مندرجہ ذیل وجوہ کی بنا پر اشاعت کے لیے منظور نہیں کیا گیا:

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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} اپنا کھاتہ دوبارہ فعال کیجئے



مکرمی {USERNAME}،



السلام علیکم!



آپ کے کوائف نامہ میں کی گئی تبدیلیوں کی بنا پر  "{SITENAME}" پر آپ کا کھاتہ غیر فعال ہو گیا ہے، براہ کرم اسے دوبارہ فعال بنانے کے لیے ذیل میں دیے گئے ربط پر کلک کریں:





{U_ACTIVATE}



{EMAIL_SIG}





{EMAILSUBJECT:} Reactivate your account



Hello {USERNAME},



Your account on "{SITENAME}" has been deactivated, most likely due to changes made to your profile. In order to reactivate your account you must click on the link below:



{U_ACTIVATE}



{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} آپ کا کھاتہ غیر فعال ہوگیا ہے


مکرمی {USERNAME}

السلام علیکم!

"{SITENAME}"  پر آپ کا کھاتہ کوائف نامہ میں کی جانے والی تبدیلیوں کی بنا پر  غیر فعال ہو گیا ہے ـ آئندہ فورم پر متصل ہونے سے پہلے اسے  بورڈ کی انتظامیہ کی جانب  سے فعال کیا جانا ضروری ہے ـ جب آپ کا کھاتہ فعال ہو جا نے پر آپ کو ایک علیحدہ برقی مراسلہ کے ذریعہ مظع کیا جائے گا ـ


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} نئے کلمہء عبو کی فعالیت

مکرمی {USERNAME}

السلام علیکم!

آپ کو یہ اطلاع اس غرض سے ارسال کی جا رہی ہے کہ آپ نے ﴿یا کسی دوسرے شخص نے آپ کے نام سے﴾ نئے  کلمہء عبور کی فراھمی کے لیے درخواست کی ہے ـ جس پر کارروائی کرتے ہوئے  "{SITENAME}".  پر موجود آپ کے کھاتہ کے لیے ایک نیا کلمہء عبور آپ کو بھیجا جا رھا ہے ـ اگر آپ نے یہ درخواست  نہیں کی تو اس اطلاع نامہ پر کوئی توجہ نہ دیں ـ اس کے باوجود اگر  آپکو اس قسم کے مراسلے موصول ہو رہے ہیں تو  بورڈ کی انتظامیہ سے رابطہ کریں ـ

اگر آپ نے اس سلسلہ میں درخواست کی ہے تو  نئے کلمہء عبور کو  استعمال کرنے سے پہلے اسے فعال کرنا ضروری ہے اگر آپ اسے فعال کرنا چاہتے ہیں تو ذیل میں دیے گئے ربط پر کلک کریں:

{U_ACTIVATE}

یہ عمل کامیابی سے مکمل کر لینے کے بعد آپ ذیل میں دیے گئے کلمہء عبور کے ذریعہ فورم سے متصل ہو سکیں گے:


کلمہء عبور: {PASSWORD}

آپ اس کلمہء عبور کو اپنے کوائف نامہ میں مہیا شدہ سہولت  کے ذریعہ حسب دلخواہ تبدیل کر سکتے ہیں ـ اگر آپ کو اس سلسلہ میں کوئی مشکلات پیش ہو تو بورڈ کی انتظامیہ سے رجوع کریں ـ شکریہ


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} براہ مہربانی "{SITENAME}" پر اپنا اکائونٹ دوبارہ چالو کریں.

بورڈ انتظامیہ کی طرف سے درخواست ہے کہ آپ اپنا اکائونٹ دوبارہ چالو کر سکتے ہیں.
آپکا اکائونٹ فی الحال غیر فعال ہے.
اپنا اکائونٹ چالو کرنے کے لیے مندرجہ زیل اقدام اٹھائیں.

اس ای-میل کو اپنے ریکارڈ کیلیے رکھیں. آپکے اکائونٹ کی تفصیلات درج ذیل ہیں.

-----------------------------------------
رکنیتی نام: {USERNAME}
-----------------------------------------

آپکا پاسورڈ محفوظ طریقے سے ہماری ڈیٹابیس میں شامل کر دیا گیا ہے. اگر آپ کسی موقع پر اسے بھول جائیں تو رجسٹرڈ شدہ ای-میل کے زریعے اسے ریسیٹ کر سکتے ہیں. 
اپنے اکائونٹ کو دوبارہ چالو کرنے کے لیے ذیل میں لنک پر کلک کریں.

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} غیر فعال اکائونٹ کی اطلاع

اسلام علیکم {USERNAME}،

یہ ایک اطلاع ہے کہ "{SITENAME}" پر آپکا اکائونٹ جو {REGISTER_DATE} کو بنایا گیا تھا، ابھی تک غیر فعال ہے. اگر آپ سے فعال کرنا چاہتے ہیں تو براہ مہربانی ذیل میں لنک پر کلک کریں.

{U_ACTIVATE}

"{SITENAME}" پر رجسٹر کرنے کا شکریہ اور ہم آپکی شرکت کی راہ دیکھتے ہیں.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" پر خوش آمدید

{WELCOME_MSG}

اس ای-میل کو اپنے ریکارڈ کیلیے رکھیں. آپکے اکائونٹ کی تفصیلات درج ذیل ہیں.

-----------------------------------------
رکنیتی نام: {USERNAME}
-----------------------------------------

آپکا پاسورڈ محفوظ طریقے سے ہماری ڈیٹابیس میں شامل کر دیا گیا ہے. اگر آپ کسی موقع پر اسے بھول جائیں تو رجسٹرڈ شدہ ای-میل کے زریعے اسے ریسیٹ کر سکتے ہیں. 
اپنے اکائونٹ کو چالو کرنے کے لیے ذیل میں لنک پر کلک کریں.

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" پر خوش آمدید

{WELCOME_MSG}

اس ای میل کو اپنے ریکارڈ کے لیے رکھیں. آپکی تفصیلات درج ذیل ہیں.

-------------------------------------------------------------
رکنی نام: {USERNAME}
{PASSWORD_EXTRA_LINE}
بورڈ کا ربط: {U_BOARD}
-------------------------------------------------------------

آپکا پاسورڈ محفوظ‌طریقے سے ڈیٹابیس میں سٹور کر دیا گیا ہے. اگر آپ اپنا پاسورڈ بھول جائیں تو آپ درج شدہ ای میل کے زریعے اسے ری سیٹ کر سکتے ہیں. 
رجسٹر کرنے کا شکریہ.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} آپکو {SITENAME} پر خوش آمدید

{WELCOME_MSG}

براہ کرم اس ای میل کو آپ اپنے پتے کے لیے رکھیں. آپکے اکائونٹ کی تفصیلات درج زیل ہیں.

-----------------------------------------------------------
رکنی نام: {USERNAME}
{PASSWORD_EXTRA_LINE}
بورڈ کا ربط:‌ {U_BOARD}
----------------------------------------------------------

اپنے اکائونٹ کو چالو کرنے کے لیے درج زیل ربط کا استعمال کریں

{U_ACTIVATE}

آپکا پاس ورڈ ہماری ڈیٹا بیس میں محفوظ ہو گیا ہے جسے عام طریقے سے دیکھا نہیں جا سکتا. اگر آپ سے بھول جائیں تو آپ اسے {SITENAME} پر رجسٹر شدہ ای میل کے زریعے بحال کر سکتے ہیں.

رجسٹر کرنے کا شکریہ.

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
