<?php
﻿
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} تفعيل حساب عضو

مرحباً,

الحساب الذي يملكه المستخدم "{USERNAME}" قد أوقف أو أعيد تكوينه , عليك التدقيق على تفاصيله (إذا كانت هناك حاجة لذلك) ومن ثم تشغيله باستعمال الوصلة التالية.

لعرض ملف العضو اضغط على الوصلة التالية:
{U_USER_DETAILS}

لتفعيل حساب العضو:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
هذه رسالة من مدير  "{SITENAME}" . إذا كانت هذه الرسالة إعلانات أو تحتوي على لغة بذيئة أو أي كلام غير ملائم الرجاء مراسلة مسؤول الموقع على العنوان التالي:

{CONTACT_EMAIL}

أرفق الرسالة التي أرسِلَت بالكامل (خصوصاً رأس الرسالة).

محتوى الرسالة:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} تم تفعيل الاشتراك

مرحباً {USERNAME},

حسابك في "{SITENAME}" قد تم تشغيله بواسطة المدير. تستطيع الآن الدخول للمنتدى.


تم تشفير كلمة المرور الخاصة بك كإجراء أمني في قاعدة البيانات . في حال نسيتها لاحقاً , يمكنك الضغط على رابط نسيت كلمة المرور , و ستتمكن من إعادة تعيين كلمة المرور الخاصة بك .

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} أهلاً وسهلاً بك في "{SITENAME}"

{WELCOME_MSG}

الرجاء الاحتفاظ بهذه الرسالة . معلومات حسابك هي:

----------------------------
اسم المستخدم: {USERNAME}

عنوان المنتدى: {U_BOARD}
----------------------------

حسابك الآن غير نشط , على مدير الموقع تشغيله قبل أن تستطيع الدخول . سوف يصلك بريد آخر يعلمك بذلك.

لا تنسَ كلمة السر ، فقد تم تشفيرها في قاعدة البيانات ولن نستطيع استرجاعها . لكن , إذا نسيت كلمة السر تستطيع الطلب من المدير بإعادة تشغيل حسابك وتكوين كلمة سر جديدة.

شكرا لتسجيلك معنا ومرحباً بك.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} مرحبا بك فى "{SITENAME}"

{WELCOME_MSG}

حسابك غير نشطة حاليا.

	
يرجى طباعة هذه الرسالة وأن يكون لديك أحد الوالدين أو الوصي وتاريخ التوقيع عليه. ثم إرساله بالفاكس إلى :

{FAX_INFO}

أو البريد الإلكتروني الى :

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
إذن للمشاركة في "{SITENAME}" - {U_BOARD}

اسم المستخدم: {USERNAME}
البريد الالكترونى: {EMAIL_ADDRESS}

ولقد استعرضت المعلومات التي قدمتها وطفلي بموجبه منح الإذن ل"{SITENAME}" لتخزين هذه المعلومات. 
أنا أفهم أن المعلومات يمكن أن تتغير فى أي وقت بواسطة كتابة الباسورد
أفهم أنه قد تطلب هذه المعلومات عند إزالته من "(SITENAME)" في أي وقت.


الوالد أو الوصي 
(اكتب اسمك هنا): _____________________

(وقع هنا): __________________ 

التاريخ: _______________

------------------------------ CUT HERE ------------------------------


مرة واحدة كانت الإدارة قد وردت في النموذج أعلاه عن طريق الفاكس أو البريد العادي ، وسوف ينشط حسابك. 

كلمة السر الخاصة بك قد تم تخزنت بأمان في قاعدة البيانات الخاصة بنا والتي لا يمكن استردادها. في حالة نسيانك، سوف تكون قادرا على إعادة تعيينها باستخدام عنوان البريد الإلكتروني المرتبط بحسابك.

شكرا لكم على تسجيلكم

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} مرحبا بك فى "{SITENAME}"

{WELCOME_MSG}

حسابك غير نشطة حاليا.

	
يرجى طباعة هذه الرسالة وأن يكون لديك أحد الوالدين أو الوصي وتاريخ التوقيع عليه. ثم إرساله بالفاكس إلى :

{FAX_INFO}

أو البريد الإلكتروني الى :

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
إذن للمشاركة في "{SITENAME}" - {U_BOARD}

اسم المستخدم: {USERNAME}
البريد الالكترونى: {EMAIL_ADDRESS}

ولقد استعرضت المعلومات التي قدمتها وطفلي بموجبه منح الإذن ل"{SITENAME}" لتخزين هذه المعلومات. 
أنا أفهم أن المعلومات يمكن أن تتغير فى أي وقت بواسطة كتابة الباسورد
أفهم أنه قد تطلب هذه المعلومات إلى إزالته من "(SITENAME)" في أي وقت.


الوالد أو الوصي 
(اكتب اسمك هنا): _____________________

(وقع هنا): __________________ 

التاريخ: _______________

------------------------------ CUT HERE ------------------------------


مرة واحدة كانت الإدارة قد وردت في النموذج أعلاه عن طريق الفاكس أو البريد العادي ، وسوف ينشط حسابك. 

كلمة السر الخاصة بك قد تم تخزنت بأمان في قاعدة البيانات الخاصة بنا والتي لا يمكن استردادها. في حالة نسيانك، سوف تكون قادرا على إعادة تعيينها باستخدام عنوان البريد الإلكتروني المرتبط بحسابك.


شكرا لكم على تسجيلكم

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - رسالة من صديق

مرحباً {TO_USERNAME},

أرسٍلَت هذا البريد من خلال الموقع "{SITENAME}" بواسطة العضو {FROM_USERNAME} الذي اعتقدَ بأن هذا الموضوع قد يهمك:

{TOPIC_NAME}

للوصول إلى الموضوع اضغط على الوصلة التالية:

{U_TOPIC}

قد يكون العضو {FROM_USERNAME} أرسل لك تعليقاً أو رسالة . وهذه الرسالة وافق عليها مسؤول الموقع قبل الإرسال . إذا كانت هذه الرسالة إعلانات أو تحتوي على لغة بذيئة أو أي كلام غير ملائم الرجاء مراسلة مسؤول الموقع على العنوان التالي: {BOARD_CONTACT}. أرفق الرسالة التي تم أرسِلت بالكامل.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} التذكير بالردود على المواضيع - "{FORUM_NAME}"

مرحباً {USERNAME},

أرسلت لك هذه الرسالة لأنك طلبت متابعة القسم , "{FORUM_NAME}" في "{SITENAME}" . أضيف الموضوع الجديد التالي "{TOPIC_TITLE}" تستطيع استعمال الوصلة التالية للوصول إلى الموضوع , لن تستلم تنبيها آخر حتى تقوم بزيارة الموضوع

{U_NEWEST_POST}

إذا أردت مشاهدة الموضوع ، اتبع الرابط التالي :
{U_TOPIC}

إذا أردت مشاهدة المنتدى ، اتبع الرابط التالي :
{U_FORUM}

إذا لم تكن ترغب بمتابعة القسم اضغط على  "توقف عن متابعة القسم" الموجودة في القسم المذكور أعلاه , أو بالضغط على الوصلة التالية:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} تمت إضافتك للمجموعة

مبروك,

قد أضِفتَ للمجموعة "{GROUP_NAME}" في "{SITENAME}".
وقد أضِفتَ بواسطة رئيس الموقع أو المدير , راسلهم لمعلومات إضافية.

تستطيع الاطلاع على معلومات المجموعة هنا:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} تمت الموافقة على طلبك

مبروك,

تمت الموافقة على طلبك للانضمام للمجموعة "{GROUP_NAME}" في "{SITENAME}".
اضغط على الوصلة التالية للاطلاع على المجموعة.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} طلب للاشتراك في المجموعة

مرحباً {USERNAME},

طلب أحد الأعضاء الانضمام إلى المجموعة "{GROUP_NAME}" التي أنت رئيسها في "{SITENAME}".
للموافقة أو رفض الطلب نرجو زيارة الوصلة التالية:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} تثبيت منتدى phpBB

مبروك,

تم تثبيت منتدى phpBB على موقعك بنجاح

تحتوي هذه الرسالة على معلومات مهمة يجب حفظها في مكان آمن . كلمة المرور قد تم تشفيرها في قاعدة البيانات ولن نستطيع استرجاعها . لكن , إذا نسيت كلمة السر تستطيع تكوين كلمة مرور جديدة من خلال خيار "نسيت كلمة المرور" سيطلب منك المنتدى إدخال اسم المستخدم والبريد المسجل وسيتم إرسال كلمة مرور جديدة لبريدك.

----------------------------
اسم المستخدم: {USERNAME}

رابط المنتدى: {U_BOARD}
----------------------------

يمكنك معرفة المزيد من المعلومات من خلال ملف docs أو بزيارة موقع الدعم - http://www.phpbbarabia.com

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} التذكير بموضوع جديد - "{FORUM_NAME}"

مرحباً {USERNAME},

أرسلت لك هذه الرسالة لأنك طلبت متابعة القسم , "{FORUM_NAME}" في "{SITENAME}" .

تمت إضافة موضوع جديد منذ آخر زيارة لك بعنوان , "{TOPIC_TITLE}" . تستطيع استعمال الوصلة التالية للوصول إلى القسم , لن تستلم تنبيها آخر حتى تقوم بزيارة القسم

{U_FORUM}

إذا لم تكن ترغب بمتابعة القسم اضغط على "توقف عن متابعة القسم" الموجودة في القسم المذكور أعلاه, أو بالضغط على الوصلة التالية:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} تم إغلاق التبليغ - "{PM_SUBJECT}"

مرحباً {USERNAME},

هذه التنبيه هو بخصوص التبليغ الذي قدمته حول الرسالة الخاصة   "{PM_SUBJECT}" في "{SITENAME}" حيث تمت مراجعته و معالجته بواسطة المشرف أو المدير. التبليغ الآن مغلق. إذا كانت لديك أسئلة أخرى , رجاءً راسل {CLOSER_NAME} برسالة خاصة.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} تم حذف التبليغ - "{PM_SUBJECT}"

مرحباً {USERNAME},

هذا التنبيه هو بخصوص التبليغ الذي قدمته عن الرسالة الخاصة  "{PM_SUBJECT}" في "{SITENAME}" حيث حذِف بواسطة المشرف أو المدير .


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} الموافقة على مشاركتك - "{POST_SUBJECT}"

مرحباً {USERNAME},

أرسِلَت هذه الرسالة لأن مشاركتك "{POST_SUBJECT}" في "{SITENAME}" تمت الموافقة عليها المشرف أو مسؤول الموقع.

إذا كنت تود الوصول إلى الرد اضغط على الوصلة التالية:
{U_VIEW_POST}

إذا كنت تود الوصول إلى الموضوع اضغط على الوصلة التالية:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} عدم الموافقة على الموضوع - "{POST_SUBJECT}"

مرحباً {USERNAME},

أرسِلَت هذه الرسالة لأن موضوعك باسم "{POST_SUBJECT}" في "{SITENAME}" لم تتم الموافقة عليه من المشرف أو مسؤول الموقع.

وذلك للأسباب التالية:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} لديك رسالة خاصة جديدة

مرحباً {USERNAME},

لقد وصلتك رسالة خاصة من العضو "{AUTHOR_NAME}" لصندوق رسائل الوارد في "{SITENAME}" بالعنوان التالي:

{SUBJECT}

يمكنك قراءة الرسالة بالضغط على الوصلة التالية:

{U_VIEW_MESSAGE}

تستطيع إيقاف عملية إخبارك بوصول الرسالة بتعطيل هذا الخيار عن طريق ملفك الشخصي.

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
مرحباً {TO_USERNAME},

هذه الرسالة قد أرسلها {FROM_USERNAME} لحسابك في "{SITENAME}" . إذا كانت هذه الرسالة إعلانات أو تحتوي على لغة بذيئة أو أي كلام غير ملائم الرجاء مراسلة مسؤول الموقع على العنوان التالي:

{BOARD_CONTACT}

أرفق الرسالة التي أرسِلَت بالكامل وخصوصاً رأس الرسالة . لاحظ أن الرد لهذه الرسالة سيكون إلى {FROM_USERNAME}.

هذه هي الرسالة المرسلة إليك
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
مرحباً {TO_USERNAME},

هذه الرسالة قد أرسلها {FROM_USERNAME} لحسابك في "{SITENAME}" . إذا كانت هذه الرسالة إعلانات أو تحتوي على لغة بذيئة أو أي كلام غير ملائم الرجاء مراسلة مسؤول الموقع على العنوان التالي:

{BOARD_CONTACT}

أرفق الرسالة التي أرسِلَت بالكامل 

الرسالة تحتوي:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} تم إغلاق التقرير عن الموضوع - "{POST_SUBJECT}"

مرحباً {USERNAME},

أرسِلَت هذه الرسالة لأن تقريرك في الموضوع "{POST_SUBJECT}" في "{TOPIC_TITLE}" في "{SITENAME}" عُرِض بواسطة المشرف أو المسؤول العام . وأغلِقَ التقرير . إذا كانت لديك أي استفسارات يمكنك مراسلة العضو {CLOSER_NAME} برسالة خاصة.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} أغلِق التقرير عن الموضوع - "{POST_SUBJECT}"

مرحباً {USERNAME},

أرسِلَت هذه الرسالة لأن تقريرك في الموضوع "{POST_SUBJECT}" في "{TOPIC_TITLE}" في "{SITENAME}" عُرِض بواسطة المشرف أو المسؤول العام . وحُذِف التقرير.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} الموافقة على موضوعك - "{TOPIC_TITLE}"

مرحباً {USERNAME},

أرسِلَت هذه الرسالة لأن موضوعك باسم "{TOPIC_TITLE}" في "{SITENAME}"  تمت الموافقة عليه من المشرف أو مسؤول الموقع.

إذا كنت تود الوصول إلى الموضوع اضغط على الوصلة التالية:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} عدم الموافقة على موضوعك - "{TOPIC_TITLE}"

مرحباً {USERNAME},

أرسِلَت هذه الرسالة لأن موضوعك باسم "{TOPIC_TITLE}" في "{SITENAME}" لم تتم الموافقة عليه من المشرف أو مسؤول الموقع.

وذلك للأسباب التالية:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} التذكير بالردود على الموضوع - "{TOPIC_TITLE}"

مرحباً {USERNAME},

أرسلت لك هذه الرسالة لأنك طلبت متابعة الموضوع , "{TOPIC_TITLE}" في "{SITENAME}" . لقد وصل رد للموضوع منذ آخر زيارة لك . تستطيع استعمال الوصلة التالية للوصول إلى الرد , لن تستلم تنبيها آخر حتى تقوم بزيارة الموضوع.

إذا رغبت في زيارة آخر رد في الموضوع ، اضغط على الرابط :
{U_NEWEST_POST}

إذا رغبت في زيارة الموضوع ، اضغط على الرابط :
{U_TOPIC}

إذا رغبت في مشاهدة المنتدى ، اضغط على الرابط :
{U_FORUM}

إذا لم تكن ترغب بمتابعة الموضوع اضغط على "توقف عن متابعة الموضوع" الموجودة في آخر الموضوع المذكور أعلاه , أو بالضغط على الوصلة التالية:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} إعادة تفعيل حسابك

مرحباً {USERNAME},

لقد توقّف حسابك في "{SITENAME}" , قد يرجع ذلك إلى تغييرات قمت بها لمعلوماتك الشخصية . حتى تعيد تشغيل حسابك عليك الضغط على الوصلة التالية:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} تم تعطيل حسابك

مرحباً {USERNAME},

حسابك في موقع "{SITENAME}" عطِّل , ربما بسبب تعديل في ملفك الشخصي . ولن تتمكن من استخدام حسابك إلا بعد إعادة تفعيله بواسطة مسؤول الموقع وسترسَل رسالة تنبيه بذلك.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} كلمة مرور جديدة

مرحباً {USERNAME},

لقد وصلت لك هذه الرسالة لأنك (أو شخص يدعي أنه أنت) قد طلب كلمة سر جديدة ترسل لحسابك في "{SITENAME}" . إذا لم تكن أنت مقدم الطلب فتجاهل هذه الرسالة , إذا كانت هذه الرسالة تصلك باستمرار عليك الاتصال بمدير الموقع.

لاستعمال كلمة المرور الجديدة عليك تشغيلها . للتشغيل اضغط على الوصلة التالية.

{U_ACTIVATE}

إذا تمت العملية بنجاح سوف تستطيع استعمال كلمة المرور التالية:

كلمة المرور: {PASSWORD}

طبعاً بوسعك تغيير كلمة المرور بنفسك خلال صفحة معلوماتك الشخصية في لوحة تحكمك. إذا واجهت صعوبة عليك الاتصال بمدير الموقع.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} إعادة تفعيل حسابك في "{SITENAME}"

مدير المنتدى يطلب منك إعادة تفعيل حسابك.

اتبع الخطوات التالية لتفعيل حسابك.

رجاءً احتفظ بهذه الرسالة. معلومات حسابك كالتالي:

----------------------------
اسم المستخدم: {USERNAME}
----------------------------

كلمة السر تم تشفيرها في قاعدة البيانات ولن نستطيع استرجاعها . لكن , إذا نسيت كلمة السر تستطيع ستطيع تكوين كلمة مرور جديدة من خلال - دخول >> لقد نسيت كلمة المرور.

رجاءً قم زُر الوصلة التالية لتفعيل حسابك:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} التذكير بتفعيل حسابك

مرحباً {USERNAME},

بتاريخ {REGISTER_DATE} سجلتَ حسابا جديدا في موقع "{SITENAME}" . وتفعله بعد. ولتفعيله اضغط على الوصلة التالية:

{U_ACTIVATE}

شكراً لتسجيلك في موقع "{SITENAME}" , وبانتظار مشاركاتك معنا.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} أهلاً بك في "{SITENAME}"

{WELCOME_MSG}

رجاءً بهذه الرسالة. معلومات حسابك كالتالي:

----------------------------
اسم المستخدم: {USERNAME}
----------------------------

تم تشفير كلمة المرور في قاعدة البيانات .إذا فقدت كلمة المرور اطلب أخرى و ستكرر عملية التفعيل مرة أخرى

حسابك غير مفعل. ويمكنك تفعيله بالضغط على الوصلة التالية:

{U_ACTIVATE}


شكراً لتسجيلك معنا.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} مرحباً بك في "{SITENAME}"

{WELCOME_MSG}

الرجاء الاحتفاظ بهذه الرسالة . بيانات حسابك كالتالي:

----------------------------
اسم المستخدم: {USERNAME}

عنوان المنتدى: {U_BOARD}
----------------------------

لا تنسَ كلمة المرور ، فقد تم تشفيرها في قاعدة البيانات ولن نستطيع استرجاعها . لكن , إذا نسيت كلمة المرور تستطيع تكوين كلمة مرور جديدة من خلال - دخول >> لقد نسيت كلمة المرور , وسيطلب منك البرنامج إدخال اسم المستخدم والبريد المسجل وسترسَل كلمة مرور جديدة لبريدك.

نشكرك لتسجيلك معنا ومرحباً بك.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} مرحباً بك في "{SITENAME}"

{WELCOME_MSG}

الرجاء الاحتفاظ بهذه الرسالة. بيانات حسابك هي كالتالي:

----------------------------
اسم المستخدم: {USERNAME}

عنوان المنتدى: {U_BOARD}
----------------------------

حسابك الآن غير نشط. لا تستطيع استعمال حسابك حتى تنتقل إلى الوصلة التالية:

{U_ACTIVATE}

لا تنسَ كلمة المرور، فقد تم تشفيرها في قاعدة البيانات ولن نستطيع استرجاعها . لكن , إذا نسيت كلمة المرور تستطيع تكوين كلمة مرور جديدة من خلال - دخول >> لقد نسيت كلمة المرور , وسيطلب منك البرنامج إدخال اسم المستخدم والبريد المسجل وسترسَل كلمة مرور جديدة لبريدك.

نشكرك لتسجيلك ومرحباً بك.

{EMAIL_SIG}',
));


