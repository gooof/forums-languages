<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktivizimi i llogarise së përdoruesit

Përshëndetje,

Llogaria e mbajtur nga "{USERNAME}" është ç\'aktivizuar ose është e sapokrijuar, ju duhet të kontrolloni detajet e këtij përdoruesi (nëse kërkohet) dhe ta mirëmbani.

Përdor linkun për të aktivizuar profilin e përdoruesit:
{U_USER_DETAILS}

Përdor linkun për të aktivizuar llogarinë:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '{MESSAGE}

~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Mesazhi është dërguar nga faqja "{SITENAME}". Nëqoftëse ky mesazh konsiderohet si spam, abuziv ose komente ofenduese, ju lutem kontaktoni adresën e mëposhtme:

{CONTACT_EMAIL}

~~~~~~~~~~~~~~~~~~~~~~~~~~~~
{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Llogaria u aktivizua

Përshëndetje {USERNAME},

Llogaria juaj pranë "{SITENAME}" u aktivizua. Ju tashmë mund të identifikoheni me pseudonimin dhe fjalëkalimin që morët me e-mail e mëparshëm.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Mirë se vini tek "{SITENAME}"

{WELCOME_MSG}

Ju lutem ruajeni këtë  e-mail. Informacioni i llogarise tuaj është si vijon:

----------------------------
Pseudonimi: {USERNAME}
Fjalëkalimi: {PASSWORD}

URL i Bordit: {U_BOARD}
----------------------------

Llogaria juaj është përkohësisht jo altive. Administratori i bordit duhet ta aktivizojë atë para se ju të mund të identifikoheni. Ju do të merrni një e-mail tjetër kur kjo të ndodhë.

Mos harroni fjalëkalimin tuaj. Eshtë ruajtur në Bazën e informacionit dhe ne nuk mund ta gjejmë atë për ju. Gjithsesi, nëse kjo ndodh ju mund të kërkoni një fjalëkalim tjetër që do tju duhet ta aktivizoni në të njëjtën mënyrë që po aktivizoni llogarinë tuaj.

Faleminderit që u regjistruat.

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

In compliance with the COPPA your account is currently inactive.

Please print this message out and have your parent or guardian sign and date it. Then fax it to:

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


Once the administrator has received the above form via fax or regular mail your account will be activated.

Please do not forget your password as it has been encrypted in our database and we cannot retrieve it for you. However, should you forget your password you can request a new one which will be activated in the same way as this account.

Thank you for registering.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Welcome to "{SITENAME}"

{WELCOME_MSG}

In compliance with the COPPA your account is currently inactive.

Please print this message out and have your parent or guardian sign and date it. Then fax it to:

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


Once the administrator has received the above form via fax or regular mail your account will be activated.

Please do not forget your password as it has been encrypted in our database and we cannot retrieve it for you. However, should you forget your password you can request a new one which will be activated in the same way as this account.

Thank you for registering.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - E-mail a friend

Pershendetje {TO_USERNAME},

Ky e-mail u dërgua nga "{SITENAME}" prej {FROM_USERNAME} që mendoi që ju mund të jeni i/e interesuar për temën e mëposhtme:

{TOPIC_NAME}

Ju mund të gjeni këtë temë të plotë tek:

{U_TOPIC}

Një mesazh nga  {FROM_USERNAME} mund të jetë i përfshirë me poshtë. Ju lutem vini re që ky mesazh nuk është parë ose miratuar nga Bordi i Administratorëve. Nëse doni të ankoheni që moret këtë e-mail ju lutem kontaktoni Bordin e Administratorëve në  {BOARD_CONTACT}. Ju lutem përfshini të plotë këtë mesazh kur të kontaktoni.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Postim i ri në - "{FORUM_NAME}"

Përshëndetje {USERNAME},

Ju po merrni këtë lajmërim pasi jeni abonuar tek forumi "{FORUM_NAME}" në "{SITENAME}". Ky forum ka patur një përgjigje në temën "{TOPIC_TITLE}" që nga vizita juaj e fundit. Ju mund të përdorni linkun e mëposhtëm për të parë përgjigjen e fundit të palexuar. Ju nuk do të merrni më njoftime për këtë forum derisa të vizitoni temën.

{U_NEWEST_POST}

Nëse doni të shikoni temën, klikoni linkun e mëposhtëm:
{U_TOPIC}

Nëse doni të shikoni forumin, klikoni linkun e mëposhtëm:
{U_FORUM}

Nëse nuk doni të merrni më njoftime për këtë forum, ju mund të klikoni "Hiq abonimin e temës" në forumin përkatës, ose mund të klikoni linkun e mëposhtëm:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Jeni bashkuar me këtë grup

Urime,

Ju jeni bashkuar me grupin "{GROUP_NAME}" në "{SITENAME}".
Ky vendim u mor nga një lider grupi ose administrator. Kontaktoni me ta për më shumë informacion.

Ju mund të shikoni informacionin e grupit tuaj këtu:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Kërkesa juaj është miratuar

Urime,

Kërkesa juaj për t\'u bashkuar me grupin "{GROUP_NAME}" në "{SITENAME}" është miratuar.
Klikoni linkun e mëposhtëm për të parë antarsimin tuaj në grup.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Kërkesë për tu bashkuar në grup

Përshendetje {USERNAME},

Një përdorues ka bërë kërkesë për tu bashkuar me grupin "{GROUP_NAME}" që ju moderoni në "{SITENAME}".
Për të aprovuar ose refuzuar këtë kërkesë për antarësim në grup ju lutemi të vizitoni linkun e mëposhtëm:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB installed

Congratulations,

You have successfully installed phpBB on your server.

This e-mail contains important information on your installation that you should keep safe. The password has been encrypted in the database and cannot be recovered, although you can request a new password should you lose this one.

----------------------------
Username: {USERNAME}
Password: {PASSWORD}

Board URL: {U_BOARD}
----------------------------

Useful information on your phpBB installation can be found in the docs folder of your installation and on phpBB.com\'s support page - http://www.phpbb.com/support/

In order to keep the board safe and secure, it is highly recommended that you keep current with software releases which can be easily done by subscribing to phpBB.com\'s mailing list, located at the above URL.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Temë e re në "{FORUM_NAME}"

Përshëndetje {USERNAME},

Ju po merrni këtë lajmërim pasi ju jeni abonuar në forumin "{FORUM_NAME}" në "{SITENAME}". Në forum ka një temë të re që nga vizita juaj e fundit, "{TOPIC_TITLE}". Ju mund të perdorni linkun e mëposhtem për të parë forumin. Ju nuk do të merrni më lajmërime për këtë forum deri sa t\'a vizitoni atë.

{U_FORUM}

Nëse nuk dëshironi të merrni më njoftime nga ky forum ju mund të klikoni "Hiq abonimin e forumit" në forumin përkatës, ose duke klikuar linkun e mëposhtëm:

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
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Postim i pamiratuar - "{POST_SUBJECT}"

Përshëndetje {USERNAME},

Ju po merrni këtë lajmërim sepse postimi juaj "{POST_SUBJECT}" në "{SITENAME}" nuk u miratua nga një moderator ose administrator.

Arsyeja e mëposhtme u dha për këtë mos miratim:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Mesazh Privat

Përshëndetje {USERNAME},

Ju keni marrë një mesazh privat nga "{AUTHOR_NAME}" në llogarinë tuaj tek "{SITENAME}" me subjektin e mëposhtëm:

{SUBJECT}

Ju mund të shikoni këtë mesazh duke klikuar linkun e mëposhtëm:

{U_INBOX}

Ju keni kërkuar që të lajmëroheni sa herë merrni mesazh privat. Ju kujtojmë që ju mund të zgjidhni që të mos lajmëroheni për mesazhet e reja duke ndryshuar opsionet e duhura në profilin tuaj.

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
	'email/profile_send_email.txt' 		=> 'Përshëndetje {TO_USERNAME},

Email i mëposhtëm ju është dërguar nga {FROM_USERNAME} nëpërmjet llogarisë tuaj në  "{SITENAME}". Nëse ky mesazh është spam, abuziv ose përmban komente ofenduese ju lutemi kontaktoni bordin e administratorëve në adresën e mëposhtme:

{BOARD_CONTACT}

Përfshini të plotë këtë e-mail. Vini re që adresa e përgjigjes së ketij e-mail është vënë ajo e  {FROM_USERNAME}.

Mesazhi i dërguar vazhdon më poshtë.
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Përshëndetje {TO_USERNAME},

Mesazhi i mëposhtëm ju është dërguar nga {FROM_USERNAME} nëpërmjet llogarisë tuaj në "{SITENAME}". Nëse ky mesazh është spam, abuziv ose përmban komente ofenduese ju lutemi kontaktoni bordin e administratorëve në adresën e mëposhtme:

{BOARD_CONTACT}

Përfshini të plotë këtë mesazh. Vini re që adresa e dërguesit është ruajtur në llogaritë IM të bordit.

Mesazhi i dërguar vazhdon më poshtë.
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Raportimi u mbyll - "{POST_SUBJECT}"

Përshëndetje {USERNAME},

Ju po merrni këtë lajmërim sepse raportimi që ju bëtë për postimin "{POST_SUBJECT}" në "{TOPIC_TITLE}" tek "{SITENAME}" u mor parasysh nga një moderator ose administrator. Pas kësaj raportimi u mbyll. Nëse keni pyetje të mëtejshme kontaktoni {CLOSER_NAME} me një mesazh privat.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Raportimi u fshi - "{POST_SUBJECT}"

Përshëndetje {USERNAME},

Ju po merrni këtë lajmërim sepse raportimi që ju bëtë për postimin "{POST_SUBJECT}" në "{TOPIC_TITLE}" tek "{SITENAME}" u fshi nga një moderator ose administrator.


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
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:}  Përgjigjuni postimit - "{TOPIC_TITLE}"

Përshëndetje {USERNAME},

Sapo i janë përgjigjur temës në të cilën ju jeni abonuar, "{TOPIC_TITLE}" në forumin "{SITENAME}". Mund të jenë postuar përgjigje të tjera gjithashtu, por ju nuk do të merrni njoftime të tjera derisa ju të vizitoni forumin përsëri.

Tema dhe postimi i fundit ndodhen këtu:
{U_NEWEST_POST}

Tema ndodhet këtu::
{U_TOPIC}

Forumi ndodhet këtu:
{U_FORUM}

{EMAIL_SIG}
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Informacion për të ndërprerë abonimin:

Për të shkëputur abonimin nga kjo temë, ju lutemi vizitoni këtë faqe:
{U_STOP_WATCHING_TOPIC}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Riaktivizo llogarinë

Përshëndetje {USERNAME},

Llogaria juaj tek "{SITENAME}" është ç\'aktivizuar, mbase nga ndryshimet e bëra në profilin tuaj. Për të riaktivizuar llogarinë tuaj klikoni linkun e mëposhtëm:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Llogaria juaj është ç\'aktivizuar

Përshëndetje {USERNAME},

Llogaria juaj tek "{SITENAME}" është ç\'aktivizuar, ndoshta si pasojë e ndryshimeve të bëra në profilin tuaj. Administratori i bordit duhet ta aktivizojë para se ju të identifikoheni. Ju do të lajmëroheni me nje e-mail kur kjo të ndodhë.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivizimi i fjalëkalimit

Përshëndetje {USERNAME}

Ju po merrni këtë lajmërim sepse ju (ose dikush tjetër duke pretenduar që ishit ju) keni kërkuar që një fjalëkalim i ri tju dërgohet për llogarinë tuaj tek "{SITENAME}". Nëse ju nuk e kërkuat këtë lajmërim ju lutem injorojeni. Nëse vazhdon tju vije ky lajmërim ju lutemi kontaktoni bordin e administratorëve.

Për të përdorur fjalëkalimin e ri ju duhet ta aktivizoni atë. Për të bërë këtë klikoni linkun më poshtë.

{U_ACTIVATE}

Ju do të mund të identifikoheni me fjalëkalimin e mëposhtëm:

Fjalëkalimi: {PASSWORD}

Ju mund ta ndryshoni këtë fjalëkalim tek paneli i antarit në faqen e profilit. Nëse keni vështirësi kontaktoni bordin e administratorëve.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Riaktivizoni llogarinë tuaj në "{SITENAME}"

Një Administrator ka kërkuar që llogaria juaj të riaktivizohet. Llogaria juaj nuk është aktive për momentin. Ju lurtemi të ndiqni hapat e mëposhtëm për të riaktivizuar llogarinë tuaj.

Ruani këtë email për kujtesen tuaj. Informacioni i llogarisë tuaj është si më poshtë:

----------------------------
Pseudonimi: {USERNAME}
----------------------------

Fjalëkalimi juaj është koduar në databazën tonë. Nëse e harroni, ju mund të kërkoni një fjalëkalim të ri, i cili do të duhet të aktivizohet në të njëjtën mënyrë si në këtë rast.

Klikoni linkun e mëposhtëm për të riaktivizuar llogarinë tuaj:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Ju duhet të aktivizoni Llogarinë tuaj

Përshëndetje {USERNAME},

Më {REGISTER_DATE} ju keni rregjistruar një llogari tek faqja "{SITENAME}".  Deri më sot ju nuk e keni aktivizuar atë. Për të aktivizuar llogarinë tuaj klikoni në linkun e mëposhtëm.

{U_ACTIVATE}

Faleminderit për rregjistrimin tek "{SITENAME}"

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Mirë se vini tek "{SITENAME}"

{WELCOME_MSG}

Ju lutem ruajeni këtë e-mail. Informacioni i llogarisë tuaj është si më poshtë:

----------------------------
Pseudonimi: {USERNAME}
----------------------------

Fjalëkalimi juaj është ruajtur në bazën e të dhënave. Nëse ju e harroni mund të kërkoni një fjalëkalim të ri i cili do të aktivizohet në të njëjtën mënyrë si kjo llogari.

Llogaria juaj është për momentin e ç\'aktivizuar. Ju nuk mund ta përdorni atë deri kur të klikoni në linkun me poshtë:

{U_ACTIVATE}

Faleminderit që u regjistruat.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Mirë se vini tek "{SITENAME}"

{WELCOME_MSG}

Ju lutemi ruajeni këtë e-mail në arkivin tuaj, pasi janë të dhënat e identifikimit në Dea Portal. Informacionet e llogaris së hapur janë:

----------------------------
Pseudonimi: {USERNAME}
{PASSWORD_EXTRA_LINE}
Adresa e portalit: {U_BOARD}
----------------------------

Mos harroni fjalëkalimin tuaj pasi ai është ruajtur në bazën e informacionit dhe ne nuk mund ta rikuperojmë atë. Gjithsesi, nëse e harroni, ju mund të kërkoni një fjalëkalim te ri i cili do të riaktivizohet në të njëjtën mënyrë si kjo llogari.

Faleminderit për rregjistrimin.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Mirë se vini në "{SITENAME}"

{WELCOME_MSG}

Ju sapo jeni rregjistruar në forumin tonë.

Vini re! Llogaria juaj akoma nuk është aktive. Ju duhet të aktivizoni llogarinë tuaj duke klikuar adresën e mëposhtme:

{U_ACTIVATE}


Këto janë informacionet për tu identifikuar në forum pasi llogaria të jetë aktivizuar. Ju lutemi akrivoni këtë e-mail në skedarët tuaj:

----------------------------
Pseudonimi: {USERNAME}
{PASSWORD_EXTRA_LINE}
Adresa e forumit: {U_BOARD}
----------------------------


Ju lutemi të mos harroni fjalëkalimin tuaj pasi është koduar në databazën tonë dhe ne nuk mund ta rekuperojmë atë për ju. Gjithsesi, nëse e harroni, ju mund të kërkoni një fjalëkalim të ri i cili do të aktivizohet në të njëjtën mënyrë si kjo llogari.

Faleminderit për rregjistrimin.
{EMAIL_SIG}',
));


