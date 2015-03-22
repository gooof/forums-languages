<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Vartotojo vardo aktyvavimas

Sveiki,

Ką tik buvo sukurtas arba deaktyvuotas vartotojo vardas "{USERNAME}". Jeigu reikia, patikrinkite šio vartotojo aprašymą ir priimkite teisingą sprendimą.

Paspaudę ant šios nuorodos pamatysite vartotojo aprašymą:
{U_USER_DETAILS}

Paspaudę ant šios nuorodos aktyvuosite vartotojo vardą:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'Jums rašo "{SITENAME}" diskusijų administratorius.

Laiško tekstas:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Vartotojo vardas aktyvuotas

Sveiki {USERNAME},

Jūsų vartotojo vardas "{SITENAME}" diskusijose buvo aktyvuotas. Jau galite prisijungti.

Jūsų slaptažodis saugiai saugomas mūsų duomenų bazėje ir mes negalime jums jo atsiųsti. Jeigu jį pamiršite, visada galėsite paprašyti naujo slaptažodžio, pasinaudoję el. paštu, kuris susietas su šiuo vartotojo vardu.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Sveiki atvykę į "{SITENAME}" diskusijas

{WELCOME_MSG}

Išsaugokite šį laišką. Jūsų prisijungimo informacija:

----------------------------
Vartotojo vardas: {USERNAME}

Diskusijų adresas: {U_BOARD}
----------------------------

Jūs negalėsite prisijungti, kol diskusijų administratorius nepatvirtins jūsų vartotojo vardo. Kai tik tai įvyks, gausite dar vieną el. laišką.

Jūsų slaptažodis saugiai saugomas mūsų duomenų bazėje ir mes negalime jums jo atsiųsti. Jeigu jį pamiršite, visada galėsite paprašyti naujo slaptažodžio, pasinaudoję el. paštu, kuris susietas su šiuo vartotojo vardu.

Dėkojame, kad užsiregistravote.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Sveiki atvykę į "{SITENAME}" diskusijas

{WELCOME_MSG}

Įjungta apsaugos nuo vaikų funkcija (COPPA). Jūsų vartotojo vardas neaktyvus.

Išspausdinkite šį laišką ir duokite pasirašyti savo tėvams ar globėjams. Tada išsiųskite ją faksu:

{FAX_INFO}

ARBA adresu:

{MAIL_INFO}

------------------------------ KIRPTI ČIA ------------------------------
Leidimas dalyvauti "{SITENAME}" diskusijose - {U_BOARD}

Vartotojo vardas: {USERNAME}
El. pašto adresas: {EMAIL_ADDRESS}

SUSIPAŽINAU SU INFORMACIJA, KURIĄ MAN PATEIKĖ MANO VAIKAS IR LEIDŽIU "{SITENAME}" PUSLAPIUI SAUGOTI ŠIĄ INFORMACIJĄ. SUPRANTU, KAD ŠIUOS DUOMENIS GALIMA BET KADA PAKEISTI ĮVEDUS SLAPTAŽODĮ. TAIP PAT SUPRANTU, KAD ŠI INFORMACIJA BUS PAŠALINTA IŠ "{SITENAME}" PUSLAPIO KAI TIK AŠ PAPRAŠYSIU.


Tėvai arba globėjai 
(jūsų vardas): _____________________

(parašas): __________________ 

Data: _______________

------------------------------ KIRPTI ČIA ------------------------------


Kai tik administratorius gaus šią pasirašytą formą faksu arba paštu, jūsų vartotojo vardas bus aktyvuotas.

Jūsų slaptažodis saugiai saugomas mūsų duomenų bazėje ir mes negalime jums jo atsiųsti. Jeigu jį pamiršite, visada galėsite paprašyti naujo slaptažodžio, pasinaudoję el. paštu, kuris susietas su šiuo vartotojo vardu.

Dėkojame, kad užsiregistravote.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Sveiki atvykę į "{SITENAME}" diskusijas

{WELCOME_MSG}

Įjungta apsaugos nuo vaikų funkcija (COPPA). Jūsų vartotojo vardas neaktyvus.

Išspausdinkite šį laišką ir duokite pasirašyti savo tėvams ar globėjams. Tada išsiųskite ją faksu:

{FAX_INFO}

ARBA adresu:

{MAIL_INFO}

------------------------------ KIRPTI ČIA ------------------------------
Leidimas dalyvauti "{SITENAME}" diskusijose - {U_BOARD}

Vartotojo vardas: {USERNAME}
El. pašto adresas: {EMAIL_ADDRESS}

SUSIPAŽINAU SU INFORMACIJA, KURIĄ MAN PATEIKĖ MANO VAIKAS IR LEIDŽIU "{SITENAME}" PUSLAPIUI SAUGOTI ŠIĄ INFORMACIJĄ. SUPRANTU, KAD ŠIUOS DUOMENIS GALIMA BET KADA PAKEISTI ĮVEDUS SLAPTAŽODĮ. TAIP PAT SUPRANTU, KAD ŠI INFORMACIJA BUS PAŠALINTA IŠ "{SITENAME}" PUSLAPIO KAI TIK AŠ PAPRAŠYSIU.


Tėvai arba globėjai 
(jūsų vardas): _____________________

(parašas): __________________ 

Data: _______________

------------------------------ KIRPTI ČIA ------------------------------


Kai tik administratorius gaus šią pasirašytą formą faksu arba paštu, jūsų vartotojo vardas bus aktyvuotas.

Jūsų slaptažodis saugiai saugomas mūsų duomenų bazėje ir mes negalime jums jo atsiųsti. Jeigu jį pamiršite, visada galėsite paprašyti naujo slaptažodžio, pasinaudoję el. paštu, kuris susietas su šiuo vartotojo vardu.

Dėkojame, kad užsiregistravote.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} laiškas nuo "{SITENAME}" diskusijų dalyvio

Sveiki {TO_USERNAME},

Šis laiškas jums siunčiamas nuo "{SITENAME}" diskusijų dalyvio {FROM_USERNAME}, kuris mano jog jus sudomins ši tema:

{TOPIC_NAME}

Ją galite perskaityti paspaudę ant nuorodos žemiau:

{U_TOPIC}

Taip pat dar žemiau galite perskaityti vartotojo {FROM_USERNAME} žinutę skirtą jums. Atsiminkite, kad šis laiškas nebuvo patikrintas diskusijų administratoriaus. Jeigu norite pasiskųsti apie tai, kad gavote šį laišką, susisiekite su juo adresu {BOARD_CONTACT}. Į savo laišką įtraukite ir šio laiško antraštes.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Naujas pranešimas forume "{FORUM_NAME}"

Sveiki {USERNAME},

Jūs gavote šį laišką, nes "{SITENAME}" diskusijose esate užsiprenumeravę forumą "{FORUM_NAME}". Po jūsų paskutinio apsilankymo, temoje "{TOPIC_TITLE}" buvo parašytas naujas pranešimas. Norėdami peržiūrėti paskutinį neperskaitytą šios temos pranešimą, paspauskite ant žemiau esančios nuorodos. Kol joje neapsilankysite, daugiau laiškų apie naujus pranešimus šioje temoje negausite.

{U_NEWEST_POST}

Jeigu norite peržiūrėti visą temą, paspauskite ant šios nuorodos:
{U_TOPIC}

Jeigu norite peržiūrėti visą forumą, paspauskite ant šios nuorodos:
{U_FORUM}

Jeigu daugiau nebenorite prenumeruoti šio forumo, paspauskite ant nuorodos "Atsisakyti forumo" minėtame forume arba ant šios nuorodos:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Jūs buvote priimtas į vartotojų grupę

Sveikiname,

Grupės lyderis arba "{SITENAME}" diskusijų administratorius priėmė jus į grupę "{GROUP_NAME}".

Informaciją apie savo grupes galite matyti paspaudę ant šios nuorodos:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Vartotojo prašymas prisijungti prie jūsų grupės

Brangus {USERNAME},

Prie jūsų moderuojamos grupės "{GROUP_NAME}" "{SITENAME}" diskusijose nori prisijungti vartotojas "{REQUEST_USERNAME}".
Norėdami patvirtinti arba atmesti jo kandidatūrą paspauskite ant nuorodos žemiau:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB sėkmingai įdiegta

Sveikiname,

Jūsų sėkmingai savo serveryje įdiegėte phpBB.

Išsaugokite šį laišką ir jame esančią informaciją. Jūsų slaptažodis saugiai saugomas mūsų duomenų bazėje ir mes negalime jums jo atsiųsti. Jeigu jį pamiršite, visada galėsite paprašyti naujo slaptažodžio, pasinaudoję el. paštu, kuris susietas su šiuo vartotojo vardu.

----------------------------
Vartotojo vardas: {USERNAME}

Diskusijų URL: {U_BOARD}
----------------------------

Daugiau naudingos informacijos apie phpBB galite rasti jūsų serveryje įdiegtos phpBB programinės įrangos dokumentacijos kataloge arba phpBB.com palaikymo puslapyje - http://www.phpbb.com/support/

Dėl saugumo rekomenduojame visada įdiegti naujausią phpBB versiją. Naujienas apie visus naujausius programinės įrangos leidimus galite gauti prisijungę prie el. pašto konferencijos, kurią rasite nuorodoje viršuje.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Nauja tema forume "{FORUM_NAME}"

Sveiki {USERNAME},

Jūs gavote šį laišką, nes "{SITENAME}" diskusijose esate užsiprenumeravę forumą "{FORUM_NAME}". Po jūsų paskutinio apsilankymo, šiame forume buvo sukurta nauja tema, "{TOPIC_TITLE}". Norėdami peržiūrėti minėtą forumą, paspauskite ant žemiau esančios nuorodos. Kol joje neapsilankysite, daugiau laiškų apie naujas temas šiame forume negausite.

{U_FORUM}

Jeigu daugiau nebenorite prenumeruoti šio forumo, paspauskite ant nuorodos "Atsisakyti forumo" minėtame forume arba ant šios nuorodos:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Raportas "{PM_SUBJECT}" uždarytas

Sveiki {USERNAME},

Jūs gavote šį laišką, nes moderatorius arba administratorius pasirūpino raportu, kurį apie asmeninę žinutę "{PM_SUBJECT}" užpildėte "{SITENAME}" diskusijose. Raportas uždarytas. Jeigu turite tolesnių klausimų, kreipkitės į {CLOSER_NAME} asmenine žinute.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Raportas "{PM_SUBJECT}" ištrintas

Sveiki {USERNAME},

Jūs gavote šį laišką, nes moderatorius arba administratorius ištrynė raportą, kurį apie asmeninę žinutę "{PM_SUBJECT}" užpildėte "{SITENAME}" diskusijose.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Pranešimas "{POST_SUBJECT}" patvirtintas

Sveiki {USERNAME},

Jūsų gavote šį laišką, nes administratorius arba moderatorius "{SITENAME}" diskusijose patvirtinto jūsų pranešimą "{POST_SUBJECT}".

Jeigu norite peržiūrėti pranešimą, paspauskite ant šios nuorodos:
{U_VIEW_POST}

Jeigu norite peržiūrėti visą temą, paspauskite ant šios nuorodos:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Pranešimas "{POST_SUBJECT}" atmestas

Sveiki {USERNAME},

Jūs gavote šį laišką, nes moderatorius arba administratorius "{SITENAME}" diskusijose atmetė jūsų pranešimą "{POST_SUBJECT}".

Pranešimo atmetimo priežastis:

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

you have received a new private message to your account on "{SITENAME}". You can view your new message by clicking on the following link: {U_VIEW_MESSAGE}
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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Jūs gavote naują asmeninę žinutę

Sveiki {USERNAME},

"{SITENAME}" diskusijose nuo vartotojo "{AUTHOR_NAME}" jūs gavote naują asmeninę žinutę. Žinutės tema:

{SUBJECT}

Norėdami ją perskaityti paspauskite ant nuorodos žemiau:

{U_VIEW_MESSAGE}

Atsiminkite, kad visada galite išjungti laiško apie naujas asmenines žinutes siuntimą per savo aprašymą.

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
	'email/profile_send_email.txt' 		=> 'Sveiki {TO_USERNAME},

Šis laiškas jums siunčiamas nuo "{SITENAME}" diskusijų dalyvio {FROM_USERNAME}. Jeigu laiškas yra internetinė šiukšlė (spam), arba įžeidžiančio ar kitokio nemalonaus turinio, prašome susisiekti su diskusijų administratoriumi šiuo adresu:

{BOARD_CONTACT}

Į savo laišką įtraukite ir šį laišką (įskaitant visas antraštes). Taip pat atminkite, kad atsakydami į šį laišką, nusiųsite pranešimą vartotojui {FROM_USERNAME}, todėl jeigu norite susisiekti su administratoriumi, turėsite sukurti naują laišką.

Jums siunčiamo laiško tekstas
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Sveiki {TO_USERNAME},

Ši žinutė jums siunčiama nuo "{SITENAME}" diskusijų dalyvio {FROM_USERNAME}. Jeigu žinutė yra internetinė šiukšlė (spam), arba įžeidžiančio ar kitokio nemalonaus turinio, prašome susisiekti su diskusijų administratoriumi šiuo adresu:

{BOARD_CONTACT}

Į laišką įtraukite ir šią žinutę. Taip pat atminkite, kad šios žinutės siuntėjo adresas yra diskusijų lentos IM adresas.

Jums siunčiamos žinutės tekstas
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Raportas "{POST_SUBJECT}" uždarytas

Sveiki {USERNAME},

Jūs gavote šį laišką, nes "{SITENAME}" diskusijų moderatorius arba administratorius uždarė raportą "{POST_SUBJECT}", kurį užpildėte, temoje "{TOPIC_TITLE}". Jeigu turite dar kokių nors klausimų, susisiekite su {CLOSER_NAME} asmenine žinute.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Raportas "{POST_SUBJECT}" ištrintas

Sveiki {USERNAME},

Jūs gavote šį laišką, nes "{SITENAME}" diskusijų moderatorius arba administratorius ištrynė raportą "{POST_SUBJECT}", kurį užpildėte, temoje "{TOPIC_TITLE}".


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tema "{TOPIC_TITLE}" patvirtinta

Sveiki {USERNAME},

Jūs gavote šį laišką, nes "{SITENAME}" diskusijų moderatorius arba administratorius patvirtino jūsų temą "{TOPIC_TITLE}".

Jeigu norite peržiūrėti temą, paspauskite ant šios nuorodos:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tema "{TOPIC_TITLE}" atmesta

Sveiki {USERNAME},

Jūs gavote šį laišką, nes "{SITENAME}" diskusijų moderatorius arba administratorius atmetė jūsų temą "{TOPIC_TITLE}".

Temos atmetimo priežastis:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because you are watching the topic "{TOPIC_TITLE}" at "{SITENAME}". This topic has received a reply<!-- IF AUTHOR_NAME !== \'\' --> by {AUTHOR_NAME}<!-- ENDIF --> since your last visit. No more notifications will be sent until you visit the topic.

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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Aktyvuokite savo vartotojo vardą

Sveiki {USERNAME},

Greičiausiai dėl pakeitimų aprašyme, jūsų vartotojo vardas "{SITENAME}" diskusijose buvo deaktyvuotas. Jeigu norite vėl aktyvuoti savo vartotojo vardą, paspauskite ant nuorodos žemiau:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Jūsų vartotojo vardas buvo deaktyvuotas

Sveiki {USERNAME},

Greičiausiai dėl pakeitimų aprašyme, jūsų vartotojo vardas "{SITENAME}" diskusijose buvo deaktyvuotas. Jį turi aktyvuoti diskusijų administratorius. Kai tik tai įvyks, gausite dar vieną laišką.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Naujo slaptažodžio patvirtinimas

Sveiki {USERNAME}

Jūs gavote šį laišką, nes "{SITENAME}" diskusijose paprašėte (arba kažkas apsimetantis jumis paprašė) naujo slaptažodžio. Jeigu neprašėte naujo slaptažodžio, tiesiog ignoruokite šį laišką, arba jeigu gaunate tokį laišką prieš savo norą nebe pirmą kartą, kreipkitės į diskusijų administratorių.

Jeigu norite naudotis naujuoju slaptažodžiu, paspauskite ant nuorodos žemiau.

{U_ACTIVATE}

Sėkmingai jį patvirtinę nuo šiol galėsite prisijungti šiuo slaptažodžiu:

Slaptažodis: {PASSWORD}

Taip pat, bet kada galite pasikeisti slaptažodį per savo aprašymą. Jeigu iškilo kokių nors neaiškumų, susisiekite su diskusijų administratoriumi.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Aktyvuokite savo vartotojo vardą "{SITENAME}" diskusijose

Diskusijų administratorius paprašė dar kartą aktyvuoti savo vartotojo vardą.
Norėdami tai padaryti, sekite instrukcijomis žemiau.

Išsaugokite šį laišką. Jūsų prisijungimo informacija:

----------------------------
Vartotojo vardas: {USERNAME}
----------------------------

Jūsų slaptažodis saugiai saugomas mūsų duomenų bazėje ir mes negalime jums jo atsiųsti. Jeigu jį pamiršite, visada galėsite paprašyti naujo slaptažodžio, pasinaudoję el. paštu, kuris susietas su šiuo vartotojo vardu.

Jūs negalėsite prisijungti, kol nepaspausite ant šios nuorodos:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Priminimas apie neaktyvų vartotojo vardą

Sveiki {USERNAME},

Šiuo laišku primename, kad {REGISTER_DATE} jūs užsiregistravote "{SITENAME}" diskusijose. Iki šiol jūs neaktyvavote savo vartotojo vardo. Jeigu norite jį aktyvuoti, aplankykite šią nuorodą:

{U_ACTIVATE}

Dėkojame, kad užsiregistravote "{SITENAME}" diskusijose. Tikimės jūsų dalyvavimo.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Sveiki atvykę į "{SITENAME}" diskusijas

{WELCOME_MSG}

Išsaugokite šį laišką. Jūsų prisijungimo informacija:

----------------------------
Vartotojo vardas: {USERNAME}
----------------------------

Jūsų slaptažodis saugiai saugomas mūsų duomenų bazėje ir mes negalime jums jo atsiųsti. Jeigu jį pamiršite, visada galėsite paprašyti naujo slaptažodžio, pasinaudoję el. paštu, kuris susietas su šiuo vartotojo vardu.

Norėdami aktyvuoti savo vartotojo vardą aplankykite šią nuorodą:

{U_ACTIVATE}


Dėkojame, kad užsiregistravote.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Sveiki atvykę į "{SITENAME}" diskusijas

{WELCOME_MSG}

Išsaugokite šį laišką. Jūsų prisijungimo informacija:

----------------------------
Vartotojo vardas: {USERNAME}
{PASSWORD_EXTRA_LINE}
Diskusijų adresas: {U_BOARD}
----------------------------

Jūsų slaptažodis saugiai saugomas mūsų duomenų bazėje ir mes negalime jums jo atsiųsti. Jeigu jį pamiršite, visada galėsite paprašyti naujo slaptažodžio, pasinaudoję el. paštu, kuris susietas su šiuo vartotojo vardu.

Dėkojame, kad užsiregistravote.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Sveiki atvykę į "{SITENAME}" diskusijas

{WELCOME_MSG}

Išsaugokite šį laišką. Jūsų prisijungimo informacija:

----------------------------
Vartotojo vardas: {USERNAME}
{PASSWORD_EXTRA_LINE}
Diskusijų adresas: {U_BOARD}
----------------------------

Norėdami aktyvuoti savo vartotojo vardą aplankykite šią nuorodą:

{U_ACTIVATE}

Jūsų slaptažodis saugiai saugomas mūsų duomenų bazėje ir mes negalime jums jo atsiųsti. Jeigu jį pamiršite, visada galėsite paprašyti naujo slaptažodžio, pasinaudoję el. paštu, kuris susietas su šiuo vartotojo vardu.

Dėkojame, kad užsiregistravote.

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
