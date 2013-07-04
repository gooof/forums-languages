<?php
﻿
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} הפעלת חשבון משתמש

שלום,

החשבון בבעלות "{USERNAME}" הופסק או נוצר מחדש, אתה צריך לבדוק את הפרטים של משתמש זה (אם נדרש) ולפעול כראוי.

השתמש בקישור זה על מנת לצפות בפרופיל המשתמש:
{U_USER_DETAILS}

השתמש בקישור זה על מנת להפעיל את החשבון:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
ההודעה הבאה נשלחה אליך על-ידי המנהל הראשי של "{SITENAME}". אם הודעה זו הינה דואר-זבל, מכילה חומר פוגע או הערות אחרות השנויות במחלוקת, צור קשר עם המנהל הראשי של המערכת בכתובת הבאה:

{CONTACT_EMAIL}

כלול את הודעת הדוא"ל המלאה (כולל הכותרת). 

ההודעה שנשלחה אליך היא:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} חשבונך הופעל

שלום {USERNAME},

חשבונך ב "{SITENAME}" הופעל על ידי מנהל ראשי, תוכל להתחבר תוכל להתחבר כעת.

סיסמתך נשמרה מוצפנת בבסיס הנתונים שלנו ולא ניתנת לשחזור. במקרה והיא תשכח, תוכל להגדירה מחדש על ידי שימוש בכתובת הדואר האלקטרוני המקושרת לחשבונך.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} ברוך הבא אל "{SITENAME}"

{WELCOME_MSG}

אנא שמור הודעה זו לאזכור פרטים בעתיד. פרטי חשבונך הם:

----------------------------
שם משתמש: {USERNAME}

כתובת המערכת: {U_BOARD}
----------------------------

חשבונך לא פעיל כרגע ויזדקק לאישור של מנהל ראשי לפני שתוכל להתחבר. דואר אלקטרוני נוסף ישלח כאשר זה יקרה.

סיסמתך נשמרה מוצפנת בבסיס הנתונים שלנו ולא ניתנת לשחזור. במקרה והיא תשכח, תוכל להגדירה מחדש על ידי שימוש בכתובת הדואר האלקטרוני המקושרת לחשבונך.

תודה שנרשמת.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} ברוך הבא אל "{SITENAME}"

{WELCOME_MSG}

בהתאמה לארגון ההגנה והשמירה על פרטיות הילדים חשבונך כרגע לא פעיל.

אנא הדפס הודעה זו ובקש מהורה שלך או אפוטרופוס לחתום ולכתוב תאריך עליה. לאחר מכן פקסס אותה אל:

{FAX_INFO}

או בדואר אל:

{MAIL_INFO}

------------------------------ חתוך כאן ------------------------------
גישה להשתתפות ב "{SITENAME}" - {U_BOARD}

שם משתמש: {USERNAME}
דואר אלקטרוני: {EMAIL_ADDRESS}

קראתי את המידע אשר סופק על-ידי בני ובזאת אני מאפשר למערכת "{SITENAME}" לאחר את המידע. 
אני יודע שאת הפרטים ניתן לשנות בכל זמן נתון על-ידי הזנת סיסמה. 
אני יודע שאני יכול לבקש להסיר את המידע ממערכת "{SITENAME}" בכל זמן נתון.


הורה או אפוטרופוס 
(רשום את שמך כאן): _____________________

(חתום כאן): __________________ 

תאריך: _______________

------------------------------ חתוך כאן ------------------------------


לאחר שהמנהל הראשי יקבל את האישור דרך פקס או דואר רגיל, חשבונך יופעל.

סיסמתך נשמרה מוצפנת בבסיס הנתונים שלנו ולא ניתנת לשחזור. במקרה והיא תשכח, תוכל להגדירה מחדש על ידי שימוש בכתובת הדואר האלקטרוני המקושרת לחשבונך.

תודה שנרשמת.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} ברוך הבא אל "{SITENAME}"

{WELCOME_MSG}

בהתאמה לארגון ההגנה והשמירה על פרטיות הילדים חשבונך כרגע לא פעיל.

אנא הדפס הודעה זו ובקש מהורה שלך או אפוטרופוס לחתום ולכתוב תאריך עליה. לאחר מכן פקסס אותה אל:

{FAX_INFO}

או בדואר אל:

{MAIL_INFO}

------------------------------ חתוך כאן ------------------------------
גישה להשתתפות ב "{SITENAME}" - {U_BOARD}

שם משתמש: {USERNAME}
דואר אלקטרוני: {EMAIL_ADDRESS}

קראתי את המידע אשר סופק על-ידי בני ובזאת אני מאפשר למערכת "{SITENAME}" לאחר את המידע. 
אני יודע שאת הפרטים ניתן לשנות בכל זמן נתון על-ידי הזנת סיסמה. 
אני יודע שאני יכול לבקש להסיר את המידע ממערכת "{SITENAME}" בכל זמן נתון.


הורה או אפוטרופוס 
(רשום את שמך כאן): _____________________

(חתום כאן): __________________ 

תאריך: _______________

------------------------------ חתוך כאן ------------------------------


לאחר שהמנהל הראשי יקבל את האישור דרך פקס או דואר רגיל, חשבונך יופעל.

סיסמתך נשמרה מוצפנת בבסיס הנתונים שלנו ולא ניתנת לשחזור. במקרה והיא תשכח, תוכל להגדירה מחדש על ידי שימוש בכתובת הדואר האלקטרוני המקושרת לחשבונך.

תודה שנרשמת.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - שלח דואר אלקטרוני לחבר

שלום {TO_USERNAME},

דואר אלקטרוני זה נשלח אליך מ "{SITENAME}" על-ידי {FROM_USERNAME} אשר חושב כי הנושא הבא עשוי לעניין אותך:

{TOPIC_NAME}

תוכל למצוא אותו כאן:

{U_TOPIC}

הודעה מ {FROM_USERNAME} יכולה בנוסף להכלל כאן. שים לב שהודעה זו לא נראתה או אושרה על-ידי המנלים הראשיים של המערכת. אם תרצה להתלונן על קבלת דואר אלקטרוני זה, צור קשר עם המנהל הראשי של המערכת ב {BOARD_CONTACT}. אנא צטט גם את כותרת ההודעה כולל הכתובת.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} קבלת עידכונים מפורום - "{FORUM_NAME}"

שלום {USERNAME},

קיבלת הודעה זו מפני שאתה עוקב אחר הפורום "{FORUM_NAME}" ב "{SITENAME}". פורום זה קיבל תגובה חדשה לנושא "{TOPIC_TITLE}" מאז ביקורך האחרון. תוכל להשתמש בקישור הבא על מנת לצפות בתגובה האחרונה שלא נקרא, לא ישלחו אליך עוד התראות עד שתבקר בנושא.

{U_NEWEST_POST}

אם אתה מעוניין לצפות בנושא, לחץ על הקישור הבא:
{U_TOPIC}

אם אתה מעוניין לצפות בפורום, לחץ על הקישור הבא:
{U_FORUM}

אם אינך מעונין יותר לעקוב אחר הפורום, לחץ על הקישור "בטל הרשמתך מפורום זה" הנמצא מעל הפורום, או לחץ על הקישור הבא:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} הצטרפת לקבוצת משתמשים זו

ברכותינו,

הצטרפת לקבוצה "{GROUP_NAME}" ב "{SITENAME}".
פעולה זו התבצעה על-ידי ראש הקבוצה או המנהל הראשי של הפורום, צור קשר איתם לפרטים נוספים.

תוכל לראות את פרטי הקבוצה כאן:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} בקשתך אושרה

ברכותינו,

בקשתך להצטרף לקבוצה "{GROUP_NAME}" ב "{SITENAME}" אושרה.
לחץ על הקישור הבא על מנת לצפות בחברותך בקבוצה.

{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} בקשת הצטרפות לקבוצה נשלחה

{USERNAME} היקר,

המשתמש "{REQUEST_USERNAME}" ביקש להצטרף לקבוצה "{GROUP_NAME}" שאתה מנהל ב "{SITENAME}".
על מנת לאשר או לדחות את הבקשה לחברות בקבוצה זו בקר בקישור הבא:

{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB הותקנה

ברכותינו,

התקנת בהצלחה את phpBB על השרת שלך.

דואר אלקטרוני זה מכיל מידע חשוב אודות ההתקנה אשר מומלץ שתשמור להתייחסות עתידית. סיסמתך נשמרה מוצפנת בבסיס הנתונים שלנו ולא ניתנת לשחזור. במקרה והיא תשכח, תוכל להגדירה מחדש על ידי שימוש בכתובת הדואר האלקטרוני המקושרת לחשבונך.

----------------------------
שם משתמש: {USERNAME}

כתובת המערכת: {U_BOARD}
----------------------------

מידע שימושי על מערכת phpBB ניתן למצוא בתיקיה docs של המערכת שלך ובעמוד התמיכה של phpBB.co.il - http://www.phpbb.co.il/

בשביל לשמור על המערכת מאובטחת, אנו ממליצים בחום להשאר מעודכנים עם גרסאות התוכנה. בשביל הנוחיות שלך,  קיימת רשימת תפוצה בכתובת המצורפת מעלה.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} נושא חדש בפורום - "{FORUM_NAME}"

שלום {USERNAME},

קיבלת הודעה זו מפני שאתה עוקב אחר הפורום "{FORUM_NAME}" ב "{SITENAME}". לפורום נשלח נושא חדש מאז ביקורך האחרון, "{TOPIC_TITLE}". תוכל להשתמש בקישור הבא על מנת לצפות בפורום, לא ישלחו התראות נוספות עד שתבקר בפורום.

{U_FORUM}

אם אינך מעונין יותר לעקוב אחר הפורום, לחץ על הקישור "בטל הרשמתך מפורום זה" הנמצא מעל הפורום, או לחץ על הקישור הבא:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} דיווח נסגר - "{PM_SUBJECT}"

שלום {USERNAME},

אתה מקבל את הודעה זו עקב הדיווח שלך אודות ההודעה הפרטית "{PM_SUBJECT}" ב"{SITENAME}" שטופל על ידי מנהל או מנהל ראשי. הדיווח עכשיו סגור. אם יש לך שאלות נוספות, אנא צור קשר עם {CLOSER_NAME} בהודעה פרטית.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} דיווח נמחק - "{PM_SUBJECT}"

שלום {USERNAME},

אתה מקבל את הודעה זו עקב הדיווח שלך אודות ההודעה הפרטית "{PM_SUBJECT}" ב"{SITENAME}" הדיווח נמחק על ידי מנהל או מנהל ראשי.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} הודעה אושרה - "{POST_SUBJECT}"

שלום {USERNAME},

קיבלת הודעה זו מפני שהודעתך "{POST_SUBJECT}" ב "{SITENAME}" אושרה על-ידי מנהל או מנהל ראשי.

אם אתה מעוניין לצפות בהודעה, לחץ על הקישור הבא:
{U_VIEW_POST}

אם אתה מעוניין לצפות בנושא, לחץ על הקישור הבא:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} ההודעה נדחתה - "{POST_SUBJECT}"

שלום {USERNAME},

קיבלת הודעה זו מפני שהודעתך "{POST_SUBJECT}" ב "{SITENAME}" נדחתה על-ידי מנהל או מנהל ראשי.

להלן הסיבה אשר נתנה לדחייה:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} הודעה פרטית חדשה התקבלה

שלום {USERNAME},

קיבלת הודעה פרטית חדשה מ "{AUTHOR_NAME}" לחשבונך ב "{SITENAME}" עם הכותרת הבאה:

{SUBJECT}

תוכל לצפות בהודעה החדשה שלך על-ידי לחיצה על הקישור הבא:

{U_VIEW_MESSAGE}

ביקשת לקבל הודעה במקרה כזה, זכור שתמיד תוכל לבחור לא לקבל הודעה על הודעות חדשות על-ידי שינוי ההגדרה המתאימה בפרופיל שלך.

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
שלום {TO_USERNAME},

ההודעה הבאה נשלחה אליך על-ידי {FROM_USERNAME} דרך חשבונך ב "{SITENAME}". אם הודעה זו הינה דואר-זבל, מכילה חומר פוגע או הערות אחרות השנויות במחלוקת, צור קשר עם המנהל הראשי של המערכת בכתובת הבאה:

{BOARD_CONTACT}

כלול את הודעת הדוא"ל המלאה (כולל הכותרת). שים לב שהכתובת למענה להודעה זו נקבעה לזו של {FROM_USERNAME}.

ההודעה שנשלחה אליך היא
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
שלום {TO_USERNAME},

ההודעה הבאה נשלחה אליך על-ידי {FROM_USERNAME} דרך חשבונך ב "{SITENAME}". אם הודעה זו הינה דואר-זבל, מכילה חומר פוגע או הערות אחרות השנויות במחלוקת, צור קשר עם המנהל הראשי של המערכת בכתובת הבאה:

{BOARD_CONTACT}

כלול את ההודעה המלאה. שים לב שכתובת השולח נקבעה לחשבון ההודעות המיידיות של המערכות.

ההודעה שנשלחה אליך היא
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} הדיווח שלך נסגר - "{POST_SUBJECT}"

שלום {USERNAME},

קיבלת הודעה זו מפני שהדיווח ששלחת לגבי ההודעה "{POST_SUBJECT}" בנושא "{TOPIC_TITLE}" ב "{SITENAME}" טופל על-ידי מנהל או מנהל ראשי. הדיווח לאחר מכן נסגר. אם יש לך שאלות נוספות צור קשר עם {CLOSER_NAME} בעזרת הודעה פרטית.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} הדיווח שלך נמחק - "{POST_SUBJECT}"

שלום {USERNAME},

קיבלת הודעה זו מפני שהדיווח ששלחת לגבי ההודעה "{POST_SUBJECT}" בנושא "{TOPIC_TITLE}" ב "{SITENAME}" נמחק על-ידי מנהל או מנהל ראשי.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} נושא מאושר - "{TOPIC_TITLE}"

שלום {USERNAME},

קיבלת הודעה זו מפני שהנושא שלך "{TOPIC_TITLE}" ב "{SITENAME}" אושר על-ידי מנהל או מנהל ראשי.

אם תרצה לצפות בנושא, לחץ על הקישור הבא:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} הנושא שלך נדחה - "{TOPIC_TITLE}"

שלום {USERNAME},

קיבלת הודעה זו מפני שהנושא שלך "{TOPIC_TITLE}" ב "{SITENAME}" נדחה על-ידי מנהל ראשי.

להלן הסיבה אשר נתנה לדחייה:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} קבלת עידכונים מנושא - "{TOPIC_TITLE}"

שלום {USERNAME},

קיבלת הודעה זו מפני שאתה עוקב אחר הנושא "{TOPIC_TITLE}" ב "{SITENAME}". הנושא קיבל תגובה מאז ביקורך האחרון. תוכל להשתמש בקישור הבא על מנת לצפות בתגובות שנעשו, לא ישלחו התראות נוספות עד שלא תבקר בנושא.

אם אתה רוצה לצפות בתגובה האחרונה שנשלחה מאז ביקורך האחרון, לחץ על הקישור הבא:
{U_NEWEST_POST}

אם אתה רוצה לצפות בנושא, לחץ על הקישור הבא:
{U_TOPIC}

אם אתה רוצה לצפות בפורום, לחץ על הקישור הבא:
{U_FORUM}

אם אינך מעונין יותר לעקוב אחר הנושא, לחץ על הקישור "בטל הרשמתך מנושא זה" הנמצא בתחתית הנושא, או לחץ על הקישור הבא:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} הפעל מחדש את חשבונך

שלום {USERNAME},

חשבונך ב "{SITENAME}" הופסק, כנראה עקב שינויים שהתבצעו בפרופיל שלך. על מנת להפעיל מחדש את חשבונך אתה חייב ללחוץ על הקישור הבא:

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
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} הפעלת סיסמה חדשה

שלום {USERNAME}

קיבלת הודעה זו מפני שאתה (או מישהו המתחזה לך) ביקשת לשלוח סיסמה חדשה לחשבונך "{SITENAME}". אם לא ביקשת הודעה זו אנא התעלם ממנה, אם תמשיך לקבל כאלו צור קשר עם המנהל הראשי של המערכת.

על מנת להשתמש בסיסמה החדשה אתה צריך להפעיל אותה. על מנת לעשות זאת לחץ על הקישור הבא.

{U_ACTIVATE}

אם תצליח תוכל להתחבר בעזרת הסיסמה הבאה:

סיסמה: {PASSWORD}

תוכל כמובן לשנות את הסיסמה בעצמך דרך עמוד הפרופיל. אם תתקל בקשיים כלשהם, צור קשר עם המנהל הראשי.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} הפעל מחדש את חשבונך ב "{SITENAME}"

מנהל ראשי של המערכת דרש את הפעלת חשבונך מחדש. חשבונך אינו פעיל כרגע.
אנא עקוב אחר השלבים הרשומים להלן על מנת להפעיל את חשבונך.

אנא שמור הודעה זו לאזכור פרטים בעתיד. פרטי חשבונך הם:

----------------------------
שם משתמש: {USERNAME}
----------------------------

סיסמתך נשמרה מוצפנת בבסיס הנתונים שלנו ולא ניתנת לשחזור. במקרה והיא תשכח, תוכל להגדירה מחדש על ידי שימוש בכתובת הדואר האלקטרוני המקושרת לחשבונך.

אנא בקר בקישור הבא על מנת להפעיל את חשבונך מחדש:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} תזכורת לחשבון לא פעיל

שלום {USERNAME},

הודעה זו היא תזכורת שחשבונך ב"{SITENAME}", שנוצר בתאריך {REGISTER_DATE}, עדיין לא פעיל. אם תרצה להפעיל את חשבון זה, אנא בקר הקישור הבא:

{U_ACTIVATE}

תודה שנרשמת ל "{SITENAME}", אנו מחכים להשתתפותך.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} ברוך הבא ל "{SITENAME}"

{WELCOME_MSG}

אנא שמור הודעה זו לאזכור פרטים בעתיד. פרטי חשבונך הם:

----------------------------
שם משתמש: {USERNAME}
----------------------------

סיסמתך נשמרה מוצפנת בבסיס הנתונים שלנו ולא ניתנת לשחזור. במקרה והיא תשכח, תוכל להגדירה מחדש על ידי שימוש בכתובת הדואר האלקטרוני המקושרת לחשבונך.

אנא בקר בקישור הבא על מנת להפעיל את חשבונך:

{U_ACTIVATE}


תודה שנרשמת.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} ברוך הבא ל "{SITENAME}"

{WELCOME_MSG}

אנא שמור הודעה זו לאזכור פרטים בעתיד. פרטי חשבונך הם:

----------------------------
שם משתמש: {USERNAME}

כתובת הפורום: {U_BOARD}
----------------------------

סיסמתך נשמרה מוצפנת בבסיס הנתונים שלנו ולא ניתנת לשחזור. במקרה והיא תשכח, תוכל להגדירה מחדש על ידי שימוש בכתובת הדואר האלקטרוני המקושרת לחשבונך.

תודה שנרשמת.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} ברוך הבא ל "{SITENAME}"

{WELCOME_MSG}

אנא שמור הודעה זו לאזכור פרטים בעתיד. פרטי חשבונך הם:

----------------------------
שם משתמש: {USERNAME}

כתובת הפורום: {U_BOARD}
----------------------------

אנא בקר בקישור הבא על מנת להפעיל את חשבונך:

{U_ACTIVATE}

סיסמתך נשמרה מוצפנת בבסיס הנתונים שלנו ולא ניתנת לשחזור. במקרה והיא תשכח, תוכל להגדירה מחדש על ידי שימוש בכתובת הדואר האלקטרוני המקושרת לחשבונך.

תודה שנרשמת.

{EMAIL_SIG}',
));


