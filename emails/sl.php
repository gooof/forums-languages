<?php
﻿
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktivacija uporabniškega računa

Pozdravljeni,

Uporabniški račun "{USERNAME}" je bil onemogočen oziroma na novo ustvarjen. Prosimo, poglejte podrobnosti tega uporabniškega računa.

Uporabite spodnjo povezavo za ogled uporabniškega profila:
{U_USER_DETAILS}

Uporabite spodnjo povezavo za aktivacijo uporabniškega računa:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Spodnje e-sporočilo vam je poslal administrator spletne strani "{SITENAME}". Če menite, da je to sporočilo spam, vsebuje neprimerno vsebino ali kaj drugega, prosimo kontaktirajte administratorja foruma na naslednji e-naslov:

{CONTACT_EMAIL}

Vključi cel email.

Sporočilo:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Račun aktiviran

Pozdravljeni, {USERNAME},

Vaš uporabniški račun na spletni strani "{SITENAME}" je bil aktiviran s strani administratorjev - sedaj se lahko prijavite.

Prosimo, ne pozabite svojega gesla, saj je v naši bazi zakodirano in vam ga v primeru, da ga pozabite oz. izgubite, ne bomo mogli posredovati. Če izgubite geslo, lahko zaprosite za novega.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na spletni strani "{SITENAME}"

{WELCOME_MSG}

Prosimo, ohranite to e-sporočilo, saj vsebuje podatke o vašem uporabniškem računu. Vaši uporabniški podatki so naslednji:

----------------------------
Uporabniško ime: {USERNAME}

Spletni naslov: {U_BOARD}
----------------------------

Uporabniški račun je trenutno še onemogočen, saj ga mora administrator strani ročno potrditi, preden se lahko prijavite. Ko bo administrator to storil, boste o tem obveščeni prek e-pošte.

Prosimo, ne pozabite svojega gesla, saj je v naši bazi zakodirano in vam ga v primeru, da ga pozabite oz. izgubite, ne bomo mogli posredovati. Če izgubite geslo, lahko zaprosite za novega.

Hvala vam za registracijo.

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
	'email/coppa_resend_inactive.txt' 		=> 'Zadeva: Dobrodošli na "{SITENAME}"

{WELCOME_MSG}

S privolitvijo akta COPPA je vaš račun trenutno neaktiven.

Prosimo, natisnite to sporočilo in naj ga vaš starš ali skrbnik podpiše ter pripiše datum. Nato ga pošljite po faksu na:

{FAX_INFO}

ALI preko navadne pošte na naslov:

{MAIL_INFO}

------------------------------ ODREŽI TUKAJ ------------------------------
Dovoljujem udeležbo na spletni strani "{SITENAME}" - {U_BOARD}

Uporabniško ime: {USERNAME}
E-mail: {EMAIL_ADDRESS}

PREGLEDAL/A SEM INFROMACIJE, KI JIH JE VNESEL MOJ OTROK, IN S PODPISOM DOVOLJUJEM, DA "{IME STRANI}" TE INFORMACIJE SHRANI. 
ZAVEDAM SE, DA SO TE INFORMACIJE LAHKO KADARKOLI SPREMENJENE Z VNOSOM GESLA. 
ZAVEDAM SE, DA LAHKO KADARKOLI ZAPROSIM, DA SE INFORMACIJE ODSTRANIJO S STRANI "{IME STRANI}".


Starš ali skrbnik
(čitljivo napišite ime in priimek): _____________________

(podpis): __________________ 

Datum: _______________

------------------------------ ODREŽI TUKAJ ------------------------------


Ko bo administrator zgoraj navedeno prejel preko faksa ali navadne pošte, bo vaš račun aktiviran.

Prosimo, ne pozabite svojega gesla, saj je v naši bazi zakodirano in vam ga v primeru, da ga pozabite oz. izgubite, ne bomo mogli posredovati. Če izgubite geslo, lahko zaprosite za novega.

Hvala za vašo registracijo.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> 'Zadeva: Dobrodošli na "{SITENAME}"

{WELCOME_MSG}

S privolitvijo akta COPPA je vaš račun trenutno neaktiven.

Prosimo, natisnite to sporočilo in naj ga vaš starš ali skrbnik podpiše ter pripiše datum. Nato ga pošljite po faksu na:

{FAX_INFO}

ALI preko navadne pošte na naslov:

{MAIL_INFO}

------------------------------ ODREŽI TUKAJ ------------------------------
Dovoljujem udeležbo na spletni strani "{SITENAME}" - {U_BOARD}

Uporabniško ime: {USERNAME}
E-mail: {EMAIL_ADDRESS}

PREGLEDAL/A SEM INFROMACIJE, KI JIH JE VNESEL MOJ OTROK, IN S PODPISOM DOVOLJUJEM, DA "{SITENAME}" TE INFORMACIJE SHRANI. 
ZAVEDAM SE, DA SO TE INFORMACIJE LAHKO KADARKOLI SPREMENJENE Z VNOSOM GESLA. 
ZAVEDAM SE, DA LAHKO KADARKOLI ZAPROSIM, DA SE INFORMACIJE ODSTRANIJO S STRANI "{SITENAME}".


Starš ali skrbnik
(čitljivo napišite ime in priimek): _____________________

(podpis): __________________ 

Datum: _______________

------------------------------ ODREŽI TUKAJ ------------------------------


Ko bo administrator zgoraj navedeno prejel preko faksa ali navadne pošte, bo vaš račun aktiviran.

Prosimo, ne pozabite svojega gesla, saj je v naši bazi zakodirano in vam ga v primeru, da ga pozabite oz. izgubite, ne bomo mogli posredovati. Če izgubite geslo, lahko zaprosite za novega.

Hvala za vašo registracijo.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - Prijateljski e-mail

Pozdravljeni, {TO_USERNAME},

To e-sporočilo je bil poslano s spletne strani "{SITENAME}" od uporabnika {FROM_USERNAME}, ki meni, da bi vas ena izmed tem na forumu lahko zanimala:

{TOPIC_NAME}

Temo lahko najdete na spodnji povezavi:

{U_TOPIC}

Uporabnik {FROM_USERNAME} vam pošilja tudi spodnje sporočilo. Sporočilo ni bilo videno oziroma potrjeno s strani administratorja. Če se želite zoper to sporočilo pritožiti, prosimo kontaktirajte administratorja strani na naslednji naslov: {BOARD_CONTACT}. Pri pošiljanju pritožbe navedite oz. citirajte prejeto sporočilo.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Obvestilo o novih prispevkih na spletnem forumu - "{FORUM_NAME}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker spremljate forum "{FORUM_NAME}" na spletni strani "{SITENAME}". Ta forum ima od vašega zadnjega obiska nove prispevke v temi "{TOPIC_TITLE}". Nove prispevke si lahko ogledate na spodnji povezavi. Sporočil o novih prispevkih ne boste prejemali, dokler ne obiščete teme oz. foruma, ki ga spremljate. 

{U_NEWEST_POST}

Če si želite ogledati temo, kliknite na spodnjo povezavo:
{U_TOPIC}

Če si želite ogledati forum, kliknite na spodnjo povezavo:
{U_FORUM}

Če ne želite več prejemati sporočil o novih prispevkih na forumu, kliknite na spodnjo povezavo:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Dodani ste bili v novo uporabniško skupino

Čestitamo,

Dodani ste bili v uporabniško skupino "{GROUP_NAME}" na spletni strani "{SITENAME}".
Dodal vas je vodja skupine oz. administrator strani - za več informacij kontaktirajte vodjo oz. administratorja strani.

Informacije o uporabniški skupini lahko vidite na spodnji povezavi:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Vaša zahteva je bila odobrena

Čestitamo,

Vaša zahteva za pridružitev v uporabniško skupino "{GROUP_NAME}" na spletni strani "{SITENAME}" je bila odobrena.
Za seznam članov v skupini kliknite na spodnjo povezavo:

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Zahteva za pridružitev uporabniški skupini je zaključena

Spoštovani {USERNAME},

Uporabnik/-ca "{REQUEST_USERNAME}" je podal/-a zahtevo za pridružitev uporabniški skupini "{GROUP_NAME}", katere vodja ste na spletnem forumu "{SITENAME}".
Za več informacij o zahtevku oz. za potrditev ali zavrnitev le-tega obiščite spodnjo povezavo:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB nameščen

Čestitamo,

Usprešno ste namestili phpBB.

To e-sporočilo vsebuje pomembne podatke o vaši namestitvi, zato jih shranite na varno mesto. Geslo je zakodirano v bazi, zato ga ne morete povrniti, lahko pa zahtevate novega.

----------------------------
Uporabniško ime: {USERNAME}

Spletni naslov: {U_BOARD}
----------------------------

Vse splošne informacije o namestitvi in pomoči lahko najdete na spletnem naslovu - http://www.phpbb.com/support/

Priporočamo, da forum redno nadgrajujete, saj s tem ohranite njegovo varnost. Da boste pa še bolj na tekočem s posodobitvami, obstaja na zgornjem naslovu mailing lista.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Obvestilo o novi temi - "{FORUM_NAME}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker spremljate forum "{FORUM_NAME}" na spletni strani "{SITENAME}". Ta forum ima od vašega zadnjega obiska novo temo "{TOPIC_TITLE}". Temo lahko pogledate na spodnji povezavi. Sporočil o novih temah ne boste dobivali, dokler ne obiščete foruma.

{U_FORUM}

Če ne želite več prejemati obvestil o novih temah na forumu, kliknite na spodnjo povezavo.

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Prijava zaprta - "{PM_SUBJECT}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker je bila vaša prijava zasebnega sporočila "{PM_SUBJECT}" na spletni strani "{SITENAME}" obravnavana s strani moderatorjev oz. administratorjev. Prijava je bila po obravnavi zaprta. Če imate kakšno vprašanje, kontaktirajte uporabnika "{CLOSER_NAME}" preko zasebnih sporočil.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Prijava izbrisana - "{PM_SUBJECT}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker je bila vaša prijava zasebnega sporočila "{PM_SUBJECT}" na spletni strani "{SITENAME}" izbrisana s strani moderatorja ali administratorja.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '﻿{EMAILSUBJECT:} Prispevek odobren - "{POST_SUBJECT}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker je bil vaš prispevek "{POST_SUBJECT}" na spletni strani "{SITENAME}" odobren s strani moderatorja oz. administratorja.

Če želite videti svoj prispevek, kliknite na spodnjo povezavo:
{U_VIEW_POST}

Če želite videti temo, kliknite na spodnjo povezavo:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Prispevek zavrnjen - "{POST_SUBJECT}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker je bil vaš prispevek "{POST_SUBJECT}" na spletni strani "{SITENAME}" zavrnjen s strani moderatorja oz. administratorja.

Spodaj je naveden razlog za zavrnitev prispevka.

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Novo zasebno sporočilo

Pozdravljeni, {USERNAME},

Na forumu "{SITENAME}" ste prejeli zasebno sporočilo od "{AUTHOR_NAME}" s sledečim naslovom:

{SUBJECT}

Sporočilo si lahko ogledate s klikom na spodnjo povezavo:

{U_VIEW_MESSAGE}

Zahtevali ste, da vas obveščamo o novih zasebnih sporočilih. To lahko kadarkoli spremenite v svojem profilu na spletni strani.

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
Pozdravljeni, {TO_USERNAME},

Sledeče e-sporočilo vam pošilja uporabnik {FROM_USERNAME} v vaš uporabniški račun na spletni strani "{SITENAME}". Če menite, da je to e-sporočilo spam, vsebuje neprimerno vsebino ali kaj drugega, prosimo kontaktirajte administratorja foruma na naslednji e-naslov:

{BOARD_CONTACT}

Vključen bo celoten email. Pomnite, da odgovor na ta email bo poslan iz {FROM_USERNAME}.

Sporočilo:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Pozdravljeni, {TO_USERNAME},

Sledeče e-sporočilo vam pošilja uporabnik {FROM_USERNAME} v vaš uporabniški račun na spletni strani "{SITENAME}". Če menite, da je to e-sporočilo spam, vsebuje neprimerno vsebino ali kaj drugega, prosimo kontaktirajte administratorja foruma na naslednji e-naslov:

{BOARD_CONTACT}

Vključen bo celoten email. Pomnite, da odgovor bo bil poslan iz IM računa, ki je naveden na forumu.

Sporočilo:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Prijava zaprta - "{POST_SUBJECT}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker je bila vaša prijava prispevka "{POST_SUBJECT}" v temi "{TOPIC_TITLE}" na spletni strani "{SITENAME}" obravnavana s strani moderatorjev oz. administratorjev. Prijava je bila po obravnavi zaprta. Če imate kakšno vprašanje, kontaktirajte uporabnika "{CLOSER_NAME}" preko zasebnih sporočil.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Prijava izbrisana - "{POST_SUBJECT}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker je bila vaša prijava prispevka "{POST_SUBJECT}" v temi "{TOPIC_TITLE}" na spletni strani "{SITENAME}" izbrisana s strani moderatorja ali administratorja.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tema odobrena - "{TOPIC_TITLE}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker je bila vaša tema "{TOPIC_TITLE}" na spletni strani "{SITENAME}" odobrena s strani moderatorja oz. administratorja.

Za ogled teme kliknite na spodnjo povezavo:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tema zavrnjena - "{TOPIC_TITLE}"

Pozdravljeni, {USERNAME},

To sporočilo ste prejeli, ker je bila vaša tema "{TOPIC_TITLE}" na spletni strani "{SITENAME}" zavrnjena s strani moderatorja oz. administratorja.

Spodaj je naveden razlog za zavrnitev teme:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Obvestilo o novem prispevku v temi - "{TOPIC_TITLE}"

Pozdravljeni, {USERNAME},

Sporočilo ste prejeli, ker spremljate temo "{TOPIC_TITLE}" na spletni strani "{SITENAME}". Tema je od vašega zadnjega obiska prejela nov prispevek. Dokler ne boste obiskali teme, ne boste več prejemali obvestil o novih prispevkih v izbrani temi.

Za ogled novih prispevkov kliknite na:
{U_NEWEST_POST}

Za ogled teme kliknite na:
{U_TOPIC}

If you want to view the forum, click the following link:
{U_FORUM}

Za prenehanje prejemanja teh sporočil kliknite na:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Vaš uporabniški račun je ponovno omogočen

Pozdravljeni, {USERNAME},

Vaš uporabniški račun na spletni strani "{SITENAME}" je bil deaktiviran najverjetneje zaradi sprememb, narejenih v vašem profilu. Za aktivacijo računa kliknite na spodnjo povezavo.

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Vaš uporabniški račun je bil deaktiviran

Pozdravljeni, {USERNAME},

Vaš uporabniški račun na spletni strani "{SITENAME}" je bil deaktiviran najverjetneje zaradi sprememb, narejenih v vašem profilu. Preden se lahko ponovno prijavite, vam mora administrator ponovno aktivirati uporabniški račun. Ko bo administrator to storil, boste o tem obveščeni prek e-sporočila.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivacija novega gesla

Pozdravljeni, {USERNAME}

To sporočilo ste prejeli, ker ste zahtevali novo geslo za svoj uporabniški račun na spletni strani "{SITENAME}". Če temu ni tako, to sporočilo ignorirajte. Če taka sporočila prejemate neprestano, prosimo kontaktirajte administratorja strani.

Novo geslo morate pred uporabo aktivirati. To storite s klikom na spodnjo povezavo:

{U_ACTIVATE}

Če je bila aktivacija gesla uspešna, se lahko s spodaj navedenim geslom prijavite na spletno stran.

Geslo: {PASSWORD}

Seveda lahko geslo spremenite prek uporabniškega profila na spletni strani. Če imate pri tem težave, kontaktirajte administratorja strani.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reaktivacija vašega uporabniškega računa na strani "{SITENAME}" 

Administrator je zahteval za reaktivacijo vašega uporabniškega računa. Trenutno je neaktiven.
Za ponovno aktivacijo svojega uporabniškega računa sledite spodnjim navodilom.

Prosimo, ohranite to e-sporočilo, saj vsebuje podatke o vašem uporabniškem
računu. Vaši podatki o uporabniškem računu so sledeči:

----------------------------
Uporabniško ime: {USERNAME}
----------------------------

Vaše geslo je v naši bazi kodirano. Če ga pozabite, lahko zaprosite za novega.

Za aktivacijo svojega uporabniškega računa kliknite spodnjo povezavo:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Obvestilo o neaktivnosti uporabniškega računa

Pozdravljeni, {USERNAME},

Dne {REGISTER_DATE} ste si ustvarili uporabniški račun na spletni strani "{SITENAME}". Do danes ga še niste aktivirali, kar je potrebno storiti, preden se lahko prijavite na spletno stran. Za aktivacijo kliknite na spodnjo povezavo:

{U_ACTIVATE}

Hvala vam za registracijo na "{SITENAME}", veselimo se vašega obiska.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na spletni strani "{SITENAME}"

{WELCOME_MSG}

Vaše uporabniške informacije so sledeče:

----------------------------
Uporabniško ime: {USERNAME}
----------------------------

Vaše geslo je v naši bazi kodirano. Če ga pozabite, lahko zahtevate novega, ki ga aktivirate po istem postopku kot ta uporabniški račun.

Vaš uporabniški račun trenutno ni aktiviran. Brez aktivacije se ne morete prijaviti na spletno stran. Za aktivacijo uporabite spodnjo povezavo:

{U_ACTIVATE}


Hvala vam za registracijo.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na spletni strani "{SITENAME}"

{WELCOME_MSG}

Vaše uporabniške informacije so sledeče:

----------------------------
Uporabniško ime: {USERNAME}

Spletni naslov: {U_BOARD}
----------------------------

Prosimo, ne pozabite svojega gesla, saj je v naši bazi zakodirano in vam ga ne bomo mogli posredovati, če ga pozabite oz. izgubite. Če se to vseeno zgodi, lahko zaprosite za novega.

Hvala vam za registracijo.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na "{SITENAME}"

{WELCOME_MSG}

Vaše uporabniške informacije so sledeče:

----------------------------
Uporabniško ime: {USERNAME}

Spletni naslov: {U_BOARD}
----------------------------

Vaš uporabniški račun trenutno ni aktiviran - za aktivacijo kliknite na spodnjo povezavo:

{U_ACTIVATE}

Prosimo, ne pozabite svojega gesla, saj je v naši bazi zakodirano in vam ga ne bomo mogli posredovati, če ga pozabite oz. izgubite. Če se to vseeno zgodi, lahko zaprosite za novega.

Hvala vam za registracijo.

{EMAIL_SIG}',
));


