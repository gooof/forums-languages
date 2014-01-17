<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} چالاککردنی هەژماری بەکارهێنەر

سڵاو،

هەژماری "{USERNAME}" ناچالاککرا یان بەم دواییانە دروستکرا پێویستە وردەکارییەکانی ئەم بەکارهێنەرە بپشکنیت (ئەگەر پێویستە).

ئەم بەستەرە بەکار ببە بۆ بینینی پڕۆفایلی بەکارهێنەر:
{U_USER_DETAILS}

ئەم بەستەرە بەکار ببە بۆ چالاککردنی هەژمارەکە
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '{EMAILSUBJECT:} پەیام لەبەڕێوەبەری "{SITENAME}"
ئەم نامەیە نێردراوە لەلایەن بەڕێوەبەری "{SITENAME}" ـەـوە. ئەگەر سپامە، تکایە پەیوەندی بە بەڕێوەبرانی مەکۆوە بکە بکە بەم ئیمەیلەی خوارەوە:

{CONTACT_EMAIL}

هەموو نامەکەی تێهەڵکێشە بەسەردێڕیشەوە.

ئەم پەیامە نێدرا:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}

',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} هەژمار چالاککرا

سڵاو {USERNAME}،
ئێستا هەژمارەکەت لە "{SITENAME}" چالاککرا لەلایەن بەڕێوەبەرێکەوە ،ئێستا دەتوانی بچیتە ژوورەوە.

تێپەڕەوشەکەت بە باشی پارێزراوە لە بنکەدراوەکەماندا و ناتوانرێت بگێڕدرێتەوە. ئەگەر هاتوو بیرچووەوە، ئەتوانیت تێپەڕەوشەیەکی نوێ داوا بکەیت بە بەکارهێنانی ئەو ئیمەیلەی خۆت پێ تۆمار کردووە.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} بەخێربێیت بۆ "{SITENAME}"

{WELCOME_MSG}

تکایە ئەم ئیمەیلە لە تۆمارەکانتدا بپارێزە، ئەمانەی خوارەوە زانیارییەکانی هەژمارەکەتن.

----------------------------
ناوی بەکارهێنەر: {USERNAME}

بەستەری مەکۆ: {U_BOARD}
----------------------------

هەنووکە هەژمارەکەت ناچالاکە و پێویستی بە چالاککردنە لە لایەن بەڕێوەبەرێکەوە پێش ئەوەی بتوانیت بچیتە ژوورەوە. ئیمەیلێکی ترت پێ دەگات کاتێک کارەکە جێبەجێکرا.

تێپەڕەوشەکەت بە باشی پارێزراوە لە بنکەدراوەکەماندا و ناتوانرێت بگێڕدرێتەوە. ئەگەر هاتوو بیرچووەوە، ئەتوانیت تێپەڕەوشەیەکی نوێ داوا بکەیت بە بەکارهێنانی ئەو ئیمەیلەی خۆت پێ تۆمار کردووە.

سوپاس بۆ خۆتۆمارکردنت.

{EMAIL_SIG}
',
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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} بەخێربێیت بۆ "{SITENAME}"

{WELCOME_MSG}

بەشداربوون لە COPPA، هەژمارەکەت ناچالاکە ئێستا.

تکایە ئەم پەیامە چاپ بکە و باوانت یان بەخێوکەرت واژۆ و مێژووی لێ بدات. پاشان فاکسی بکە بۆ:

{FAX_INFO}

یان پەیام بۆ:

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
ڕێگەدانی بەبەشداربوونم لە "{SITENAME}" - {U_BOARD}

ناو: {USERNAME}
پۆستی ئەلیکترۆنی: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO "{SITENAME}" TO STORE THIS INFORMATION.
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD.
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM "{SITENAME}" AT ANY TIME.


باوان یان بەخێوکەر
(print your name here): _____________________

(sign here): __________________

Date: _______________

------------------------------ CUT HERE ------------------------------


هەرکاتێک بەڕێوەبەر فۆڕمەکەی پێ گەیشت بە فاکس یان مەیل، هەژمارەکەت چالاک دەکرێت.

تێپەڕەوشەکەت بە باشی پارێزراوە لە بنکەدراوەکەماندا و ناتوانرێت بگێڕدرێتەوە. ئەگەر هاتوو بیرچووەوە، ئەتوانیت تێپەڕەوشەیەکی نوێ داوا بکەیت بە بەکارهێنانی ئەو ئیمەیلەی خۆت پێ تۆمار کردووە.


سوپاس بۆ خۆتۆمارکردنت.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} بەخێرهاتی بۆ "{SITENAME}"


{WELCOME_MSG}

بەشداربوون لە COPPA، هەژمارەکەت ناچالاکە ئێستا.

تکایە ئەم پەیامە چاپ بکە و باوانت یان بەخێوکەرت واژۆ و مێژووی لێ بدات. پاشان فاکسی بکە بۆ:

{FAX_INFO}

یان پەیام بۆ:

{MAIL_INFO}



------------------------------ CUT HERE ------------------------------
Permission to participate at "{SITENAME}" - {U_BOARD}

Username: {USERNAME}
E-mail: {EMAIL_ADDRESS}

I HAVE REVIEWED THE INFORMATION PROVIDED BY MY CHILD AND HEREBY GRANT PERMISSION TO "{SITENAME}" TO STORE THIS INFORMATION.
I UNDERSTAND THIS INFORMATION CAN BE CHANGED AT ANY TIME BY ENTERING A PASSWORD.
I UNDERSTAND THAT I MAY REQUEST FOR THIS INFORMATION TO BE REMOVED FROM "{SITENAME}" AT ANY TIME.


باوان یان بەخێوکەر
(print your name here): _____________________

(sign here): __________________

Date: _______________

------------------------------ CUT HERE ------------------------------



هەرکاتێک بەڕێوەبەر فۆڕمەکەی پێ گەیشت بە فاکس یان مەیل، هەژمارەکەت چالاک دەکرێت.

تێپەڕەوشەکەت بە باشی پارێزراوە لە بنکەدراوەکەماندا و ناتوانرێت بگێڕدرێتەوە. ئەگەر هاتوو بیرچووەوە، ئەتوانیت تێپەڕەوشەیەکی نوێ داوا بکەیت بە بەکارهێنانی ئەو ئیمەیلەی خۆت پێ تۆمار کردووە.


سوپاس بۆ خۆتۆمارکردنت.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - پەیام ناردن بۆ هاوڕێ

سڵاو{TO_USERNAME},

ئەم نامەیە نێردراوە لە "{SITENAME}"ـەوە لەلایەن {FROM_USERNAME} وا بیری کردۆتەوە کە ئەم جۆرە بابەتانە بەلاتەوە گرنگ بێت:

{TOPIC_NAME}

دەتوانیت بیدۆزیتەوە لە:

{U_TOPIC}

لەوانەیە پەیامێک لەلایەن {FROM_USERNAME} ـەوە نووسرابێت. تکایە سەرنجی ئەوە بدە کە ئەم پەیامە لەلایەن بەڕێوەبەرانی مەکۆوە نەبینراوە و پەسەند کرابێت. ئەگەر بەو پەیامە ڕازی نیت و ئارەزووی ناکەیت تکایە پەیوەندی بە بەڕێوەبەرانەوە بکە لە {BOARD_CONTACT}  تکایە ئاماژە بە سەرپەڕەی پەیام بکە کاتێک پەیوەندی بەم ناونیشانەوە دەکەیت.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} ئاگادارکردنەوە لە پەیامی مەکۆوە - "{FORUM_NAME}"

سڵاو {USERNAME}،

تۆ ئەم ئاگادارکردنەوەیەت پێ گەیشتووە لەبەرئەوەی چاودێری مەکۆی "{FORUM_NAME}" دەکەیت لە "{SITENAME}". لەم مەکۆیەد پەیامێکی نوێ نوسراوە بۆ بابەتی "{TOPIC_TITLE}" لە دوا سەردانتەوە، ئەتوانیت کرتە لەو بەستەرەی خوارەوە بکەیت بۆ بینینی دوا وەڵامی نەخوێندراوە، هیچ ئاگادارکردنەوەیەکی تر نانێردرێت هەتا بابەتەکە ئەبینیت.

{U_NEWEST_POST}

ئەگەر دەتەوێت بابەتەکە ببینیت، کرتەی ئەم بەستەرەی خوارەوە بکە:
{U_TOPIC}

ئەگەر ئەتەوێت مەکۆکەی ببینیت کرتەی ئەم بەستەرەی خوارەوە بکە:
{U_FORUM}

ئەگەر ناتەوێت ئیتر نامەی ئاگاداری ئەو مەکۆیەت بۆ بێت، کرتەی "ناچالاکردنی بەشداری" بکە لە خوار مەکۆکە یان کرتەی ئەم بەستەرەی خوارەوە بکە:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} تۆ زۆرکرایت لەم گرووپە

پیرۆزبایی،

تۆ زۆرکرایت بۆ گرووپی "{GROUP_NAME}" لە "{SITENAME}".
کردارەکە لەلایەن پێشڕەوی گرووپەکەوە کراوە، بۆ زانیاری زیاتر پەیوەندیان پێوە بگرە.

ئەتوانیت زانیاریی گرووپەکانت لێرە ببینیت:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} داواکاریەکەت پەسەندکرا

پیرۆزبایی،

داواکاریەکەت بۆ بەشداربوون لەگرووپی "{GROUP_NAME}" لە "{SITENAME}" پەسەندکرا.
کرتە لەم بەستەرە بکە بۆ بینینی زانیاریی ئەندامەتیت لە گرووپ.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} داواکاری بۆ بەشداردبوونت لە گرووپ دروستکرا

بەڕێز {USERNAME}،

ئەم بەکارهێنەرە "{REQUEST_USERNAME}" داوای کردووە کە بەشداربێت لە گرووپی "{GROUP_NAME}" کە تۆ چاودێریی دەکەیت لە "{SITENAME}".
بۆ پەسەندکردن یان ڕەفزکردنی ئەم داوایە تکایە سەردانی ئەم بەستەرەی خوارەوە بکە:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB دامەزرا

پیرۆزە،

بە سەرکەتوویی phpBB ـت لەسەر راژەکارەکەت دامەزراند.

ئەم ئیمەیلە زانیاری زۆر گرنگی تیادایە دەربارەی دامەزراندن کە پێویستە بە سەلامەتی بیپارێزیت. تێپەڕەوشەکەت بە باشی پارێزراوە لە بنکەدراوەکەماندا و ناتوانرێت بگێڕدرێتەوە. ئەگەر هاتوو بیرچووەوە، ئەتوانیت تێپەڕەوشەیەکی نوێ داوا بکەیت بە بەکارهێنانی ئەو ئیمەیلەی خۆت پێ تۆمار کردووە.
----------------------------
ناوی بەکارهێنەر: {USERNAME}

بەستەری مەکۆ: {U_BOARD}
----------------------------

ئەتوانیت زانیاری زیاتر بدۆزیتەوە لە بوخچەی بەڵگەنامەکانی دامەزراندنی phpBB و هەروەها لە ماڵپەڕی سەرەکی پاڵپشتیکردنی phpBB, http://www.phpbb.com/support. وەزانیاری زیاتر و پشتگیری بە زمانی کوردی لەم بەستەری خوارەوەیە:
http://www.chawg.org/meko/viewforum.php?f=14

بۆ پاراستنی مەکۆکەت، ئامۆژگاریت دەکەین کە هەمیشە دوا وەشان بەکار ببەیت. بۆ زانیاریت مەیلین لیستێک ئامادەیە لەو بەستەرەی سەرەوە.

{EMAIL_SIG}
',
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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} ئاگادری بابەتی نوێ - "{FORUM_NAME}"

سڵاو {USERNAME}،

ئەم ئاگاداریەت بۆ هاتووە، چونکە خۆت ئاگادارکردنەوەت هەڵبژاردوە لەم "{FORUM_NAME}" ــیە لە "{SITENAME}". ئەم مەکۆیە بابەتێکی نوێی تیادا نووسراوە لە دوا سەردانتەوە، "{TOPIC_TITLE}". دەتوانیت ئەم بەستەرە بەکاربەریت بۆ بینینی. هیچ ئاگادارکردنەوەیەکی تر نانێردرێت هەتا مەکۆکە ئەبینیت.

{U_FORUM}

گەر ناتەوێت چیتر ئاگادارکردنەوەت بۆ بێت لە مەکۆی ناوبراوەوە ئەتوانیت کرتە لە "بەشدار نەبوون لە مەکۆ" بکەیت کە لە خوارەوەی مەکۆ نووسراوە یان کرتە لەم بەستەرەی خوارەوە بکە:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> 'سەردێڕ: ڕاپۆرتی داخستن - "{PM_SUBJECT}"

سڵاو {USERNAME}،

ئەم ئاگادارییەت پێ گەیشتووە لەبەر ئەوەی ئەو ڕاپۆرتەی دەربارەی "{PM_SUBJECT}" دابووت لە "{SITENAME}" پەسەند کرا لە لایەن بەڕێوەبەر یان چاودێرێکەوە. ئێستا ڕاپۆرتەکە داخراوە. گەر پرسیاری زیاترت هەیە، تکایە پەیوەندی بە "{SITENAME}" ـەوە بکە بە پەیامی تایبەت.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> 'سەردێڕ: ڕاپۆترت سڕدرایەوە - "{PM_SUBJECT}"

سڵاو {USERNAME}،

ئەم ئاگادارییەت پێ گەیشتووە لەبەر ئەوەی ڕاپۆرتەکەت لەسەر پەیامی تایبەتیی "{PM_SUBJECT}" لە "{SITENAME}" سڕدرایەوە لە لایەن بەڕێوەبەر یان چاودێرێکەوە.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} بابەت پەسەندکرا - "{POST_SUBJECT}"

سڵاو {USERNAME}،

ئەم ئاگاداریەت بۆ هاتووە، چونکە پەیامەکەت "{POST_SUBJECT}" لە "{SITENAME}" لەلایەن چاودێر یان بەڕێوەبەرەوە پەسەندکرا.

بۆ بینینی پەیامەکەت کرتەی ئەم بەستەرە بکە:
{U_VIEW_POST}

بۆ بینینی بابەتەکە کرتە لەم بەستەرە بکە:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} پەیام پەسەند نەکرا - "{POST_SUBJECT}"

سڵاو {USERNAME}،

ئەم ئاگاداریەت بۆ هاتووە، چونکە پەیامەکەت "{POST_SUBJECT}" لە "{SITENAME}" لەلایەن چاودێر یان بەڕێوەبەرەوە پەسەند نەکرا.

ئەمەش هۆکارەکەیەتی:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} پەیامی تایبەتی نوێت بۆ هاتووە

سڵاو {USERNAME}،

پەیامێکی تایبەتی نوێت بۆ هاتووە لەلایەن "{AUTHOR_NAME}" بۆ هەژمارەکەت لە "{SITENAME}" بەم ناونیشانەوە:

{SUBJECT}

بۆ بینینی کرتە لەم بەستەرە بکە:

{U_VIEW_MESSAGE}

خۆت داوات کردووە کە لەم ڕووداوە ئاگادار بکرێیتەوە. لە بیرت بێت کە ئەتوانیت ئەوە هەڵبژێریت کە لە هاتنی پەیامی تایبەتی ئاگادار نەکرێیتەوە لە پڕۆفایلەکەتدا.

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
	'email/profile_send_email.txt' 		=> 'سڵاو {TO_USERNAME}،

ئەم پەیامەت بۆ نێردراوە لەلایەن {FROM_USERNAME} بە هۆی هەژمارەکەتەوە لە "{SITENAME}". گەر ئەم پەیامە سپامە، یان لێدوانی توند و نابەجێی تیادایە تکایە پەیوەندی بکە بەڕێوەبەرایەتی مەکۆکانەوە لە:

{BOARD_CONTACT}

ئەم ئیمەیلەی بە تەواوی تێ هەڵبکێشە (بە سەرپەڕەشەوە)، وریای ئەوە بە ناونیشانی وڵامدانەوە (reply) دەنێردرێت  بۆ {FROM_USERNAME}.

ئەمە ناواخنی پەیامەکەیە:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'سڵاو {TO_USERNAME}،

ئەمەی خوارەوە پەیامێکە بۆت نێردراوە لەلایەن {FROM_USERNAME} بە هۆی هەژمارەکەتەوە لە "{SITENAME}". گەر ئەم پەیامە سپامە یان لێدوانی توند و نابەجێی تیادایە، پەیوەندی بکە بەڕێوەبەرایەتی مەکۆکانەوە لە:

{BOARD_CONTACT}

ئەم پەیامەی بە تەواوی تێ هەڵبکێشە، تکایە وریای ئەوە بە کە ناونیشانی نێرەر ڕێکخراوە بۆ هەژماری IM ـی مەکۆ.

ئەمە ناواخنی پەیامەکەیە:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} ڕاپۆرت داخرا - "{POST_SUBJECT}"

سڵاو {USERNAME}،

ئەم پەیامەت بۆ هاتووە، چونکە جەنابتان ڕاپۆرتی پەیامی "{POST_SUBJECT}" ـتان کردووە لەبابەتی "{TOPIC_TITLE}" لە "{SITENAME}" لەلایەن چاودێر و بەڕێوەبەرانەوە چاوی لێکرا و داخرا. بۆ پرسیاری زیاتر پەیوەندی بکە بە {CLOSER_NAME} ـەوە.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} ڕاپۆرت سڕدرایەوە - "{POST_SUBJECT}"

سڵاو {USERNAME}،

ئەم پەیامەت بۆ هاتووە، چونکە جەنابتان ڕاپۆرتی ئەم پەیامەتان "{POST_SUBJECT}" کردووە لەبابەتی "{TOPIC_TITLE}" لە "{SITENAME}" لەلایەن چاودێر و بەڕێوەبەرانەوە چاوی لێکرا و سڕدرایەوە.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} بابەت پەسەندکرا - "{TOPIC_TITLE}"

سڵاو {USERNAME}،

تۆ ئەم پەیامەت بۆ هاتووە، چونکە بابەتەکەت "{TOPIC_TITLE}" لە "{SITENAME}" پەسەندکرا لەلایەن بەڕێوەبەرەوە.

بۆ بینینی بابەتەکە سەردانی ئەم بەستەرە بکە:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} بابەت پەسەند نەکرا - "{TOPIC_TITLE}"

سڵاو {USERNAME}،

ئەم ئاگاداریەت بۆ هاتووە، چونکە بابەتەکەت "{TOPIC_TITLE}" لە "{SITENAME}" پەسەند نەکرا لەلایەن بەڕێوبەرەوە.

ئەمەش هۆکارەکەیەتی:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} ئاگاداری لە وەڵامدانەوەی بابەت - "{TOPIC_TITLE}"

سڵاو {USERNAME}،

تۆ ئەم ئاگادارکردنەوەت بۆ هاتووە، چونکە ویستوتە ئاگادار بکرێیتەوە لەبابەتی  "{TOPIC_TITLE}" لە "{SITENAME}". ئەم بابەتەش وەڵامی نوێی تێدا نوسراوە لە دوا سەردانتەوە کرتە لەو بەستەرەی خوارەوە بکە بۆ بینینی وەڵامەکان، هیچ ئاگادارکردنەوەیەکی ترت پێ ناگات هەتا سەردانی بابەتەکە ئەکەیت
گەر دەتەوێت نوێترین پەیام ببینیت لە دوا سەردانتەوە کرتە لەم بەستەرە بکە:
{U_NEWEST_POST}

بۆ بینینی بابەتەکە، کرتە لەم بەستەرە بکە:
{U_TOPIC}

بۆ بینینی مەکۆکان کرتە لەم بەستەرە بکە:
{U_FORUM}

ئەگەر ناتەوێت چیتر ئاگادر بکرێیتەوە، ئەوە کرتە لە "بەشدار نەبوون لە بابەت" بکە کە لە خوارەوەی بابەتەکە نووسراوە یان کرتە لەم بەستەرە بکە:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} چالاککردنەوەی هەژمارەکەت

سڵاو {USERNAME}،

هەژمارەکەت لە "{SITENAME}" ناچالاک کراوە، لەبەر ئەوەی هەندێک گۆڕانکاریت کردووە لە پڕۆفایلەکەت. بۆ چالاککردنەوەی پێویستە کرتە لەم بەستەرەی خوارەوە بکەیت.

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} هەژمارەکەت ناچالاککرا

سڵاو {USERNAME}،

هەژمارەکەت لە"{SITENAME}" ناچالاک کرا، لەبەر ئەوەی هەندێک گۆڕانکاریت کردووە لە پڕۆفایلەکەت، پێویستە بەڕێوەبەر چالاکی بکات پێش ئەوەی بتوانیت بچیتە ژوورەوە. ئیمەیلێکی ترت پێ ئەگات کاتێک ئەم کارە ئەنجامدرا.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} چالاککردنی تێپەڕەوشەی نوێ

سڵاو {USERNAME}،

ئەم ئاگادارییەت پێ گەیشتووە لەبەر ئەوەی خۆت (یان کەسێکی تر) داوای تێپەڕەوشەیەکی نوێی کردووە بۆ هەژمارەکەت لە "{SITENAME}". گەر داوای تێپەڕەوشەی نوێی نەکردووە، ئەم ئیمەیلە فەرامۆش بکە. گەر هەر بە بەردەوامی ئەم پەیامەت پێ ئەگات، تکایە بەڕێوەبەری مەکۆ ئاگادار بکەوە.

بۆ بەکاربردنی تێپەڕەوشەی نوێ دەبێت چالاکی بکەیت، بۆ چالاککردنیشی دەبێت کرتە لەم بەستەرەی خوارەوە بکەیت:

{U_ACTIVATE}

ئەگەر سەرکەوتووانە کۆتایی هات دەتوانیت ئەم تێپەڕەوشەیە بەکاربەریت بۆ چوونەژوورەوە:

تێپەڕەوشە: {PASSWORD}

بە دڵنیاییەوە دەتوانیت خۆت تێپەڕەوشە بگۆڕیت لە ڕێگای پەڕەی پڕۆفایلەکەتەوە لە مەکۆکان. گەر هەر ئاڵۆزییەک هاتە ڕێت تکایە پەیوەندی بە بەڕێوەبەرانەوە بکە.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} چالاککردنەوەی هەژمارەکەت لە "{SITENAME}"

بەڕێوەبەرێکی مەکۆ داوای کردووە کە هەژمارەکەت چالاک بکرێتەوە. هەنووکە هەژمارەکەت ناچالاکە.

تکایە ئەم ئیمەیلە لە تۆمارەکانتدا بپارێزە. ئەمەی خوارەوە زانیاریی هەژمارەکەتە:

----------------------------
ناوی بەکارهێنەر: {USERNAME}
----------------------------

تێپەڕەوشەکەت بە باشی پارێزراوە لە بنکەدراوەکەماندا و ناتوانرێت بگێڕدرێتەوە. ئەگەر هاتوو بیرچووەوە، ئەتوانیت تێپەڕەوشەیەکی نوێ داوا بکەیت بە بەکارهێنانی ئەو ئیمەیلەی خۆت پێ تۆمار کردووە.

تکایە سەردانی ئەم بەستەرە بکە، بۆ چالاککردنەوەی هەژمارەکەت:

{U_ACTIVATE}


{EMAIL_SIG}
',
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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} بەبیرهێنانەوەی هەژماری ناچالاک

سڵاو {USERNAME}،

لە ڕێکەوتی {REGISTER_DATE} هەژمارێکی نوێت تۆمار کردووە لە "{SITENAME}". بەڵام تاوەکو ئێستا چالاک نەکراوە، ئێستا دەتوانیت چالاکی بکەیت بە کرتە کردن لەم بەستەرەی خوارەوە:

{U_ACTIVATE}

سوپاس بۆ خۆتۆمارکردنت لە "{SITENAME}"، خۆشحاڵین بە بەئەندامبوونت.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} بەخێرهاتی بۆ  "{SITENAME}"

{WELCOME_MSG}

تکایە ئەم ئیمەیلە لە تۆمارەکانتدا بپارێزە. ئەمەی خوارەوە زانیاریی هەژمارەکەتە:

----------------------------
ناوی بەکارهێنەر: {USERNAME}
----------------------------

تێپەڕەوشەکەت بە باشی پارێزراوە لە بنکەدراوەکەماندا و ناتوانرێت بگێڕدرێتەوە. ئەگەر هاتوو بیرچووەوە، ئەتوانیت تێپەڕەوشەیەکی نوێ داوا بکەیت بە بەکارهێنانی ئەو ئیمەیلەی خۆت پێ تۆمار کردووە.

تکایە سەردانی بەستەری خوارەوە بکە بۆ چالاککرندی هەژمارەکەت:

{U_ACTIVATE}


سوپاس بۆ خۆتۆمارکردنت و بەهیوای کاتێکی خۆش لەگەڵماندا.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} بەخێربێیت بۆ "{SITENAME}"

{WELCOME_MSG}

تکایە ئەم ئیمەیلە لە تۆمارەکانتدا بپارێزە. ئەمەی خوارەوە زانیاریی هەژمارەکەتە:

----------------------------
ناوی بەکارهێنەر: {USERNAME}
{PASSWORD_EXTRA_LINE}
بەستەری مەکۆکان: {U_BOARD}
----------------------------

تێپەڕەوشەکەت بە باشی پارێزراوە لە بنکەدراوەکەماندا و ناتوانرێت بگێڕدرێتەوە. ئەگەر هاتوو بیرچووەوە، ئەتوانیت تێپەڕەوشەیەکی نوێ داوا بکەیت بە بەکارهێنانی ئەو ئیمەیلەی خۆت پێ تۆمار کردووە.


سوپاس بۆ خۆتۆمارکردنت و بەهیوای کاتێکی خۆش لەگەڵماندا.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} بەخێربێیت بۆ "{SITENAME}"

{WELCOME_MSG}

تکایە ئەم ئیمەیلە لە تۆمارەکانتدا بپارێزە. ئەمەی خوارەوە زانیاریی هەژمارەکەتە:

----------------------------
ناوی بەکارهێنەر: {USERNAME}
{PASSWORD_EXTRA_LINE}
بەستەری مەکۆ: {U_BOARD}
----------------------------

تکایە سەردانی بەستەری خوارەوە بکە بۆ چالاککردنی هەژمارەکەت:

{U_ACTIVATE}

تێپەڕەوشەکەت بە باشی پارێزراوە لە بنکەدراوەکەماندا و ناتوانرێت بگێڕدرێتەوە. ئەگەر هاتوو بیرچووەوە، ئەتوانیت تێپەڕەوشەیەکی نوێ داوا بکەیت بە بەکارهێنانی ئەو ئیمەیلەی خۆت پێ تۆمار کردووە.


سوپاس بۆ خۆتۆمارکردنت و بەهیوای کاتێکی خۆش لەگەڵماندا.

{EMAIL_SIG}
',
));


