<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Erabiltzaile kontua gaitu.

Kaixo,

"{USERNAME}"(r)en kontua ezgaitua edo berriki sortua izan da, erabiltzaile honen xehetasunak aztertu (beharrezkoa baldin bada) eta dagokion moduan kudeatu beharko zenuke.

Lotura hau jarrai ezazu erabiltzailearen profila ikusteko:
{U_USER_DETAILS}

Lotura hau jarrai ezazu kontua gaitzeko:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Hurrengo hau "{SITENAME}"(e)ko administratzaileren batek bidalitako mezua duzu. Mezu hau spamtzat, edo komentario gehiegizko edo/eta irangarriak dituela baderitxozu, mesedez jar zaitez foroaren webmasterrarekin kontaktuan hurrengo helbidean: 

{CONTACT_EMAIL}

E-mail hau osoan erantsi (batez ere goiburuak (headerrak))

Bidalitako mezua:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Kontua gaituta

Kaixo {USERNAME},

Administradoreren batek zure kontua "{SITENAME}"(e)n gaitu egin du, bertara konektatu zaitezke orain.

Pasahitza era seguruan gorde da gure datubaseetan eta ezin da berriro lortu. Ahazten baldin baduzu, helbide elektronikoa erabiliz ezarri zenezake berria.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Ongietorria "{SITENAME}"(e)ra

{WELCOME_MSG}

Mesedez, gorde ezazu mezu hau gerorako, zure kontuari buruzko informazioa bait du. Zure kontua: 

----------------------------
Erabitzaile izena: {USERNAME}


Board URL: {U_BOARD}
----------------------------

Zure kontua oraingoz ezgaituta dago, foroko administrariek gaitu beharko dute bertan izena eman dezazun. Beste e-mail mezu bat jasoko duzu hau gertatzerakoan.

Gogoratu zure pasahitza datubasean gorde dela era seguruan eta ezin dela bertatik berreskuratu. Dena dela, ahaztu egiten baldin baduzu, kontu hau gaitu den era berean gaituko den pasahitz berria eskatu zenezake.

Eskerrik asko izena emateagatik.

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

In compliance with the COPPA act your account is currently inactive.

Please print this message out and have your parent or guardian sign and date it. Then fax it to:

{FAX_INFO}

OR mail it to:

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
Permission to participate at "{SITENAME}"

Username: {USERNAME}
Email: {EMAIL_ADDRESS}

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

In compliance with the COPPA act your account is currently inactive.

Please print this message out and have your parent or guardian sign and date it. Then fax it to:

{FAX_INFO}

OR mail it to:

{MAIL_INFO}

------------------------------ CUT HERE ------------------------------
Permission to participate at "{SITENAME}"

Username: {USERNAME}

Email: {EMAIL_ADDRESS}

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
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - E-maila lagun bati

Kaixo {TO_USERNAME},

Mezu hau "{SITENAME}"(e)tik bidalia izan da {FROM_USERNAME}(e)gaitik hurrengo gaia interesatuko litzaizukelakoan:

{TOPIC_NAME}

Hemen ikusi zenezake:

{U_TOPIC}

Behekaldean {FROM_USERNAME}(r)en mezua ere egon daiteke. Mesedez, izan kontuan mezu hau ez dutela foroko administrariek onartu ezta irakurri ere. Mezu hau jasotzeari buruzko kexarik baldin baduzu, jar zaitez, mesedez, foroko administrariekin kontaktuan helbide honetan {BOARD_CONTACT}. Azpimarra itzazu mezu honen goiburuak (headerrak) helbide honetara joz gero.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Mezu berria foroan - "{FORUM_NAME}"

Kaixo {USERNAME},

"{SITENAME}"(e)ko "{FORUM_NAME}" forora harpidetuta zaudenez, zure azkeneko bisitatik hona "{TOPIC_TITLE}" gaiak mezu barriren bat duela jakinarazi nahi dizugu. Hurrengo lotura jarraituz, irakurrigabeko azkeneko erantzuna ikusi zenezake. Ez zaizu jakinarazpen gehiagorik bidaliko gaia bisitatu dezazun arte.

{U_NEWEST_POST}

Gaia ikusi nahi baduzu, jarrai ezazu hurrengo lotura:
{U_TOPIC}

Foroa ikusi nahi baduzu, jarrai ezazu hurrengo lotura:
{U_FORUM}

Ez baldin baduzu foroa gehiago jarraitu nahi "Foroaren harpidetza ezeztatu" loturan klikatu edo hurrengo lotura hau jarraitu:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Erabiltzaile talde honetara gehitu zaizu

Zorionak,

"{SITENAME}"(e)ko "{GROUP_NAME}" taldera gehitua izan zara. 
Ekintza hau taldeko erantzuleren batek edo foroko administrariren batek burutu du. Jar zaitez beraiekin harremanetan informazio gehiago nahi izanez gero.

Zure taldeetako informazioa ikusteko: 
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Eskaera onartu zaizu

Zorionak,

"{SITENAME}"(e)ko "{GROUP_NAME}" taldean sartzeko egin duzun eskaera onartu egin da. 
Jarrai ezazu hurrengo lotura zure taldeko kidetza ikusteko:

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Zure taldeko kide izateko eskaera sortu da

{USERNAME},

"{REQUEST_USERNAME}" erabiltzaileak "{SITENAME}"(e)n moderatzen duzun "{GROUP_NAME}" taldean sartzeko eskaera egin du. 
Eskaera hau onartu edo ukatzeko, jarrai ezazu hurrengo lotura:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB instalaturik

Zorionak,

Phpbb zuzen instalatu egin da zure zerbitzarian.

E-mail mezu honek instalatu berri duzun foroari buruzko informazio garrantzitsua du. Pasahitza datubasean enkriptatu egin da eta ezinezkoa da berreskuratzea. Dena dela, pasahitza berria eskatu zenezake eta beste honelako mezu bat bidaliko zaizu.

----------------------------
Erabiltzaile izena: {USERNAME}


Foroko URLa: {U_BOARD}
----------------------------

Zure phpBB instalazioari buruzko informazio erabilgarria docs karpetan edota phpBB.com - http://www.phpbb.com/support/ euskarri orrian (ingelesez) aurkitu zenezake.

Foroa salbu eta seguru mantentzearren, azkenengo bertsioarekin eguneratuta mantendu dezazula gomendatzen dizugu biziki. Goikaldean duzun URLan aurkituko duzun korreo zerrendara harpidetuz errazago ezagutu zenitzake azkeneko eguneraketak.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Gai berriaren jakinarazpena - "{FORUM_NAME}"

Kaixo {USERNAME},

Jakinarazpen hau jaso duzu "{SITENAME}"(e)ko "{FORUM_NAME}" foroa jarraitzen zaudelako. Foro honek gai berria jaso du zure azkeneko bisitatik hona, "{TOPIC_TITLE}". Hurrengo lotura erabili zenezake foroa ikusteko. Ez zaizu jakinarazpen gehiagorik bidaliko foroa bisitatu dezazun arte. 

{U_FORUM}

Ez baduzu foro hau gehiago jarraitu nahi "Forora harpidetza ezeztatu" loturan klikatu zenezake bertan zaudenean edota lotura hau jarraituz:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> 'Gaia: "{PM_SUBJECT}"(e)ri buruzko ohartarazpena itxi da

Kaixo {USERNAME},

"{SITENAME}"(e)an "{PM_SUBJECT}" Mezu Pribatuari buruz egindako ohartarazpena moderadore edo administrari baten eskuetan dagoela jakinarazteko bidaltzen dizugu honako hau. 

Ohartarazpena itxi egin da, informazio gehiagorako jo ezazu {CLOSER_NAME}(r)engana Mezu Pribatu bitartez.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> 'Gaia: "{PM_SUBJECT}"(e)ri buruzko ohartarazpena ezabatuta

Kaixo {USERNAME},

"{SITENAME}"(e)an "{PM_SUBJECT}" Mezu Pribatuari buruz egindako ohartarazpena moderadore edo administrariren batek ezabatu egin duela jakinarazteko bidaltzen dizugu honako hau. 


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Mezua onarturik - "{POST_SUBJECT}"

Kaixo {USERNAME},

Mezu hau jaso duzu "{SITENAME}"(e)ra bidali duzun "{POST_SUBJECT}" mezua moderadoreren batek edo foroko administrariek onartu dutelako.

Mezua ikusi nahi baduzu, jarraitu hurrengo lotura: 
{U_VIEW_POST}

Gaia ikusi nahi baduzu, jarraitu hurrengo lotura:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Mezua onartu gabe - "{POST_SUBJECT}"

Kaixo {USERNAME},

Mezu hau jaso duzu "{SITENAME}"(e)ra bidali duzun "{POST_SUBJECT}" mezua ez delako moderadore edo foro administrariekaitik onartu.

Onarpena ukatzeko hurrengo arrazoia eman da:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Mezu pribatu berria jaso duzu

Kaixo {USERNAME},

"{AUTHOR_NAME}"(r)en mezu pribatu berria jaso duzu zure "{SITENAME}"(e)ko kontuan hurrengo izenburuarekin:

{SUBJECT}

Mezua ikusteko jarraitu hurrengo lotura:

{U_VIEW_MESSAGE}

Jakinarazi diezaizugula eskatu duzu. Ez baduzu jakinarazpen gehiagorik jaso nahi, alda ezazu aukera hori zure profilan.

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
Kaixo {TO_USERNAME},

Hurrengo hau {FROM_USERNAME}(e)k bere "{SITENAME}"(e)ko kontu bitartetik bidaltzen dizun mezua duzu. Mezua spama dela baderitxozu edo gehiegizko edo/eta iraingarriak iruditzen zaizkizun iruzkinak dituela baditu, mesedez jar zaitez foroko administrariekin kontaktuan helbide honetan:

{BOARD_CONTACT}

Erantsi iezaiozu mezuari e-mail hau osoan (batez ere goiburuak (headerrak)). Kontuan izan erantzun helbidea {FROM_USERNAME}(r)ena dela.

Bidalitako mezua honako hau duzu:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Kaixo {TO_USERNAME},

Hurrengo hau {FROM_USERNAME}(e)k bere "{SITENAME}"(e)ko kontu bitartetik bidaltzen dizun mezua duzu.Mezua spama dela baderitxozu edo gehiegizko edo/eta iraingarriak iruditzen zaizkizun iruzkinak dituela baditu, mesedez jar zaitez foroko administrariekin kontaktuan helbide honetan:

{BOARD_CONTACT}

Erantsi iezaiozu mezuari e-mail hau osoan (batez ere goiburuak (headerrak)). Kontuan izan bidaltzailearen helbidea foroko IM kontutik datorrela.

Bidalitako mezua honako hau duzu:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Berri-emate itxia - "{POST_SUBJECT}"

Kaixo {USERNAME},

Mezu hau jaso duzu "{SITENAME}"(e)ko "{TOPIC_TITLE}" gaira bidalitako "{POST_SUBJECT}" mezuari buruz bidali zenuen berri-ematea moderadore edo foroko administrariren batek kudeatu egin duelako. Berri-ematea itxi egin da. Prozedurari buruzko zalantzarik izanez gero, jar zaitez {CLOSER_NAME}(r)ekin kontaktuan mezu pertsonalen bat bidaliz.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Berri-ematea ezabaturik - "{POST_SUBJECT}"

Kaixo {USERNAME},

Mezu hau jaso duzu "{SITENAME}"(e)ko "{TOPIC_TITLE}" gaira bidalitako "{POST_SUBJECT}" mezuari buruz bidali zenuen berri-ematea foroko moderadore edo administrariren batek ezabatu egin duela jakinarazteko.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Gaia onartua - "{TOPIC_TITLE}"

Kaixo {USERNAME},

Mezu hau jaso duzu "{SITENAME}"(e)ra bidali duzun "{TOPIC_TITLE}" gaia moderadore edo foroko administrariren batek onartu egin duela jakinarazteko. 

Gaia ikusteko, jarraitu hurrengo lotura:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Onartu gabeko gaia - "{TOPIC_TITLE}"

Kaixo {USERNAME},

Mezu hau jaso duzu "{SITENAME}"(e)ra bidali duzun "{TOPIC_TITLE}" gaia ez delako moderadore edo foroko administariren bategatik onartu jakinarazteko.

Onarpena ukatzeko hurrengo arrazoia eman da:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> 'Subject:"{TOPIC_TITLE}" - gaiari erantzun berriaren jakinarazpena 

Kaixo {USERNAME},

Mezu hau jaso duzu "{SITENAME}"(e)ko "{FORUM_NAME}" foroa jarraitzen duzulako. Gai honek erantzun berri bat jaso du zure azkeneko bisitatik hona. Erantzuna ikusteko jarraitu hurrengo lotura. Ez da jakinarazpen berririk egingo gaia bisitatu dezazun arte.

Zure azkeneko bisitatik hona bidalitako azken mezuak ikusi nahi badituzu, jarraitu hurrengo lotura:
{U_NEWEST_POST}

Gaia ikusteko, jarraitu hurrengo lotura:
{U_TOPIC}

Foroa ikusteko, jarraitu hurrengo lotura
{U_FORUM}

Ez baldin baduzu gaia gehiago jarraitu nahi,  gaiaren behekaldean agertuko zaizun "Gaira harpidetza ezeztatu" loturan klikatu zenezake edo hurrengo lotura hau jarraitu:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Zure kontua berriro gaitu

Hola {USERNAME},

Zure "{SITENAME}"(e)ko kontua ezgaitua izan da. Seguruenik zure profilan eginiko aldaketengaitik gertatu da hau. Kontua berriro gaitzeko jarraitu hurrengo lotura:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Zure kontua ezgaitua izan da

Kaixo {USERNAME},

Zure "{SITENAME}"(e)ko kontua ezgaitua izan da. Seguruenik zure profilan eginiko aldaketengaitik gertatu da hau. Foroko administrariek kontua berriro gaitu beharko dute forora sartu zaitezen. Jakinarazpen berria jasoko duzu hau gertatzerakoan.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Pasahitz berria gaitu

Kaixo {USERNAME}

Mezu hau jaso duzu pasahitz berria eskatu duzulako (zuk edo ordezkatu egin zaituen nonork) zure "{SITENAME}"(e)ko konturako. Ez baldin baduzu zuk eskatu, mesedez, bazter ezazu jakinarazpen hau, baina berriro jasoz gero, jar zaitez foroko administrariekin harremanetan.

Pasahitz berria erabilteko, lehenik gaitu egin behar duzu. Pasahitza gaitzeko jarraitu hurrengo lotura:

{U_ACTIVATE}

Gaitzea zuzen burutu egin baldin bada, foroan pasahitz berriarekin sartu zaitezke:

Pasahitza: {PASSWORD}

Pasahitz hau gerorago alda zenezake Erabiltzaile Kontrol Paneletik. Arazorik izanez gero, jar zaitez foroko administrariekin harremanetan.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Zure "{SITENAME}"(e)ko kontua berriro gaitzea

Gaur egun, zure kontua ezgaiturik dago. Foroko administrariren batek kontua berriro gaitu dezazula eskatu du. 
Mesedez, jarrai itzazu hemen zehazten zaizkizun pausuak kontua berriro gaitzeko.

Mesedez, gorde ezazu e-mail hau gerorako zure kontuari buruzko informazio garrantzitsua bait du: 

----------------------------
Erabiltzaile izena: {USERNAME}
----------------------------

Pasahitza era seguruan gorde da gure datubaseetan eta ezin da berriro lortu. Ahazten baldin baduzu, helbide elektronikoa erabiliz ezarri zenezake berria.

Kontua berriro gaitzeko jarraitu hurrengo lotura:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Jarduerarik gabeko kontuaren oroigarria

Kaixo {USERNAME},

Honako hau idazten dizugu "{SITENAME}"(e)an {REGISTER_DATE}(e)an izena emandako kontuak ez duela jarduerarik erakutsi abisatzeko. Oraindik ez duzu kontua gaitu eta pausu hori beharrezkoa da foroan sartzeko. Kontua gaitzeko jarraitu hurrengo lotura: 

{U_ACTIVATE}

Eskerrik asko "{SITENAME}"(e)an izena emateagatik, zure parte-hartzearen zain gaituzu.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Ongietorri "{SITENAME}"(e)ra 

{WELCOME_MSG}

Mesedez, gorde ezazu e-mail hau gerorako zure kontuari buruzko informazio garrantzitsua bait du: 

----------------------------
Erabiltzaile izena: {USERNAME}
----------------------------

Pasahitza era seguruan gorde da gure datubaseetan eta ezin da berriro lortu. Ahazten baldin baduzu, helbide elektronikoa erabiliz ezarri zenezake berria.

Zure kontua oraingoz ezgaituta dago. Kontua gaitzeko jarrai ezazu hurrengo lotura:

{U_ACTIVATE}


Eskerrik asko izena emateagatik.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Ongietorri "{SITENAME}"(e)ra 

{WELCOME_MSG}

Mesedez, gorde ezazu e-mail hau gerorako zure kontuari buruzko informazio garrantzitsua bait du: 

----------------------------
Erabiltzaile izena: {USERNAME}


Foroko URLa:  {U_BOARD} 
----------------------------

Pasahitza era seguruan gorde da gure datubaseetan eta ezin da berriro lortu. Ahazten baldin baduzu, helbide elektronikoa erabiliz ezarri zenezake berria.

Eskerrik asko izena emateagatik.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Ongietorri "{SITENAME}"(e)ra 

{WELCOME_MSG}

Mesedez, gorde ezazu e-mail hau gerorako zure kontuari buruzko informazio garrantzitsua bait du: 

----------------------------
Erabiltzaile izena: {USERNAME}


Foroko URLa:  {U_BOARD} 
----------------------------

Zure kontua oraindik ezgaituta dago. Kontua gaitzeko jarrai ezazu hurrengo lotura:

{U_ACTIVATE}

Pasahitza era seguruan gorde da gure datubaseetan eta ezin da berriro lortu. Ahazten baldin baduzu, helbide elektronikoa erabiliz ezarri zenezake berria.

Eskerrik asko izena emateagatik.

{EMAIL_SIG}',
));


