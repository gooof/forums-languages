<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktiviranje korisničkog naloga

Zdravo,

Nalog koji je u vlasništvu korisnika “{USERNAME}” je deaktiviran ili novokreiran, trebalo bi da proverite detalje ovog korisnika (ako je obavezno) i popunite ih kako treba.

Možete iskoristiti ovaj link da pogledate profil korisnika:
{U_USER_DETAILS}

Možete iskoristiti ovaj link da aktivirate nalog:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Ovaj email vam je poslao administrator foruma “{SITENAME}”. Ako je ova poruka spam, sadrži uvredljive ili bilo kakve druge komentare i smatrate se uvređenim, molimo vas da kontaktirate webmastera foruma na sledećoj adresi:

{CONTACT_EMAIL}

Pošaljite i kompletan email (naročito zaglavlje). 

Sledi poruka koja vam je poslata:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Vaš nalog je aktiviran

Zdravo {USERNAME},

Vaš nalog na forumu “{SITENAME}” je aktiviran, tako da se sada možete prijaviti koristeči korisničko ime i šifru koje ste dobili u prethodnom email-u.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na “{SITENAME}” — {U_BOARD}

{WELCOME_MSG}

Molimo vas da sačuvate ovaj email. Slede informacije o vašem nalogu:

----------------------------
Korisničko ime: {USERNAME}
Šifra: {PASSWORD}
----------------------------

Vaš nalog je trenutno neaktivan, administrator foruma će morati da ga aktivira pre nego što ćete biti u mogućnosti da se prijavite. Dobićete još jedan email kada se to desi.

Molimo vas da ne zaboravite vašu šifru jer je ona kriptovana u našoj bazi i ne možemo vam je poslati. Međutim, ukoliko zaboravite šifru možete zatražiti da vam pošaljemo novu koja će biti aktivirana na isti način kao i ovaj nalog.

Hvala vam što ste se registrovali.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na “{SITENAME}” — {U_BOARD}

{WELCOME_MSG}

Zbog potrebnog odobravanja od strane roditelja (COPPA) vaš nalog je trenutno neaktivan.

Molimo vas da odštampate ovu poruku i date je roditelju ili staratelju da je potpiše i stavi datum. Tek tada taj papir pošaljite na fax:

{FAX_INFO}

ili pošaljite poštom na:

{MAIL_INFO}

------------------------------ ISECITE OVDE ------------------------------
Dozvola za pristup forumu “{SITENAME}”

Korisničko ime: {USERNAME}
Šifra: {PASSWORD}
Email: {EMAIL_ADDRESS}

UPOZNAT SAM SA INFORMACIJOM KOJU MI JE DETE DALO I ODOBRAVAM FORUMU “{SITENAME}” DA SAČUVA OVE INFORMACIJE. 
RAZUMEM DA SE OVE INFORMACIJE MOGU KASNIJE MENJATI UNOSOM ŠIFRE. 
RAZUMEM DA MOGU DA ZATRAŽIM DA SE OVE INFORMACIJE UKLONE SA FORUMA “{SITENAME}” BILO KADA.


Roditelj ili staratelj 
(napišite vaše ime ovde): _____________________

(potpišite se ovde): __________________ 

Datum: _______________

------------------------------ ISECITE OVDE ------------------------------


Kada administrator primi ovaj obrazac iznad bilo putem faksa ili kalsičnom poštom vaš nalog će biti aktiviran.

Molimo vas da ne zaboravite vašu šifru jer je ona kriptovana u našoj bazi i ne možemo vam je posalti nazad. Međutim, ukoliko se desi da zaboravite šifru možete zatražiti novu koja će biti aktivirana na isti način kao i ovaj nalog.

Hvala vam što ste se registrovali.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na “{SITENAME}” — {U_BOARD}

{WELCOME_MSG}

Zbog potrebnog odobravanja od strane roditelja (COPPA) vaš nalog je trenutno neaktivan.

Molimo vas da odštampate ovu poruku i date je roditelju ili staratelju da je potpiše i stavi datum. Tek tada taj papir pošaljite na fax:

{FAX_INFO}

ili pošaljite poštom na:

{MAIL_INFO}

------------------------------ ISECITE OVDE ------------------------------
Dozvola za pristup forumu “{SITENAME}”

Korisničko ime: {USERNAME}
Šifra: {PASSWORD}
Email: {EMAIL_ADDRESS}

UPOZNAT SAM SA INFORMACIJOM KOJU MI JE DETE DALO I ODOBRAVAM FORUMU “{SITENAME}” DA SAČUVA OVE INFORMACIJE. 
RAZUMEM DA SE OVE INFORMACIJE MOGU KASNIJE MENJATI UNOSOM ŠIFRE. 
RAZUMEM DA MOGU DA ZATRAŽIM DA SE OVE INFORMACIJE UKLONE SA FORUMA “{SITENAME}” BILO KADA.


Roditelj ili staratelj 
(napišite vaše ime ovde): _____________________

(potpišite se ovde): __________________ 

Datum: _______________

------------------------------ ISECITE OVDE ------------------------------


Kada administrator primi ovaj obrazac iznad bilo putem faksa ili kalsičnom poštom vaš nalog će biti aktiviran.

Molimo vas da ne zaboravite vašu šifru jer je ona kriptovana u našoj bazi i ne možemo vam je posalti nazad. Međutim, ukoliko se desi da zaboravite šifru možete zatražiti novu koja će biti aktivirana na isti način kao i ovaj nalog.

Hvala vam što ste se registrovali.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} “{SITENAME}” — Email za prijatelja

Zdravo {TO_USERNAME},

Ovaj email je poslat sa foruma “{SITENAME}” od {FROM_USERNAME} jer je pomislio(la) da ćete biti zaiteresovani za temu:

{TOPIC_NAME}

Temu mođete pogledati klikom na sledeći link:

{U_TOPIC}

Poruka od {FROM_USERNAME} je prikazana ispod. Znajte da ovu poruku nije pregledao ili odobrio administrator. Ukoliko želite da se žalite zbog prijema ove poruke molimo vas da kontaktirate administratora na {BOARD_EMAIL}. Priključite i ovu poruku uz vaš email a naročito zaglavlje mail-a kada ukoliko priložite žalbu administratoru.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Obaveštenje o novom postu — “{FORUM_NAME}”

Zdravo {USERNAME},

Dobili ste ovu informaciju jer ste izabrali da pratite forum “{FORUM_NAME}” na sajtu “{SITENAME}”. Ovaj formum je dobio novi odgovor na temu “{TOPIC_TITLE}” od vaše poslednje posete. Možete koristiti sledeći link da pogledate ovu temu, nećete više dobijati obaveštenje dok ne posetite temu.

{U_NEWEST_POST}

Ukoliko ne želite da više pratite ovaj forum možete izmeniti opciju klikom na “Otkaži praćenje” link na forumu iznad, ili klikom na sledeći link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Dodati ste u korisničku grupu

Čestitamo,

Dodati ste u “{GROUP_NAME}” grupu na forumu “{SITENAME}”.
Ovu akciju je sproveo moderator grupe ili administrator sajta, kontaktirajte ih za više informacija.

Možete videti informacije o grupi klikom na link:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Vaš zahtev je odobren

Čestitamo,

Vaš zahtev da se pridružite “{GROUP_NAME}” grupi na forumu “{SITENAME}” je odobren.
Kliknite na sledeći link da pogledate vaše članstvo.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Zahtev za pridruživanje grupi

Dragi {USERNAME},

Korisnik je zahtevao da se pridruži grupi “{GROUP_NAME}” koju vi uređujete na forumu “{SITENAME}”.
Da bi odobrili ili odbili ovaj zahtev molimo vas da posetite sledeći link:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB je instaliran

Čestitamo,

Uspešno ste instalirali phpBB na vaš server.

Ovaj email sadrži važne informacije za vašu instalaciju i trebalo bi da ga sačuvate. Šifra je kriptovana u našoj bazi i ne može da se povrati, mada možete zatražiti novu šifru ako izgubite ovu

----------------------------
Korisničko ime: {USERNAME}
Šifra: {PASSWORD}

Adresa foruma: {U_BOARD}
----------------------------

Korisne informacije o vašoj phpBB instalaciji možete pronaći u docs folderu vaše instalacije i na phpBB.com’s stranici za podrški — http://www.phpbb.com/support/

Da bi board bio bezbedan, preporučljivo je da ga redovno ažurirate tako što ćete se jednostavno prijaviti na phpBB.com’s mailing listu, na adresi iznad.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Obaveštenje o novoj temi — “{FORUM_NAME}”

Zdravo {USERNAME},

Dobili ste ovo obaveštenje jer ste izabrali da pratite forum “{FORUM_NAME}” na sajtu “{SITENAME}”. Ovaj forum ima novu temu od vaše poslednje posete “{TOPIC_TITLE}”. Možete iskoristiti sledeći link da pogledate forum, a nećete dobijati više obaveštenja dok ne posetite forum.

{U_FORUM}

Ako ne želite da više pratite ovaj forum možete ili da kliknete na  “Otkaži pretplatu na forum” link koji se nalazi na forumu, ili klikom na sledeći link:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Izveštaj zatvoren - "{PM_SUBJECT}"

Zdravo {USERNAME},

Ovo pbaveštenje ste dobili zato što je izveštaj koji se tiče privatne porukue "{PM_SUBJECT}" na "{SITENAME}" prihvaćen od moderatora ili administratora. Izveštaj je sada zatvoren. Ukoliko imate dodatna pitanja, kontaktirajte {CLOSER_NAME} privatnom porukom.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Izveštaj obrisan - "{PM_SUBJECT}"

Tdravo {USERNAME},

Ovo obaveštenje ste dobili jer je izveštaj u vezi privatne poruke "{PM_SUBJECT}" na "{SITENAME}" obrisan od moderatora ili administratora.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Odobren post — “{POST_SUBJECT}”

Zdravo {USERNAME},

Dobili ste ovo obaveštenje jer je vaš post “{POST_SUBJECT}” na forumu “{SITENAME}” odobrio moderator ili administrator.

Da pogledate post, kliknite na sledeći link:
{U_VIEW_POST}

Ako želite da pogledate temu, kliknite na sledeći link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Post nije odobren — “{POST_SUBJECT}”

Zdravo {USERNAME},

Dobili ste ovo obaveštenje jer vaš post “{POST_SUBJECT}” na forumu “{SITENAME}” nije odobrio moderator ili administrator.

Sledi obražloženje:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Pristigla je nova privatna poruka

Zdravo {USERNAME},

Dobili ste novu privatnu poruku od “{AUTHOR_NAME}” na vaš nalog na forumu “{SITENAME}” sa sledećom temom:

{SUBJECT}

Možete pogledati vašu novu poruku klikom na sledeći link:

{U_INBOX}

Zahtevali sta da budete obavešteni za ovaj događaj, ali znajte da možete uvek izabrati da ne budete obavešteni o novim porukama tako što ćete izmeniti odgovarajuće podešavanje u vašem profilu.

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
Zdravo {TO_USERNAME},

Sledi email koji vam je poslao {FROM_USERNAME} putem vašeg naloga na forumu “{SITENAME}”. Ako je ova poruka spak, sadrži uvredljive ili neke druge komentare molimo vas da kontaktirate webmastera na sledecoj adresi:

{BOARD_EMAIL}

Priložite i kompletan email (naročito zaglavlje). Znajte da je adresa za odgovor na ovaj email podešena na korisnika {FROM_USERNAME}.

Sledi vaša poruka
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Zdravo {TO_USERNAME},

Ovo je poruka koju vam je poslao {FROM_USERNAME} preko vašeg naloga na forumu “{SITENAME}”. Ako je ova poruka spam, sadrži uvredljive ili neke druge komentare molimo vas da kontaktirate webmastera na sledećoj adresi:

{BOARD_EMAIL}

Pošaljite i kompletnu poruku. Znajte da je adresa pošaljioca podešena na forumov IM nalog.

Sledi poruka koja vam je poslata
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Izveštaj zatvoren — “{POST_SUBJECT}”

Zdravo {USERNAME},

Dobili ste ovo obaveštenje zato što je izveštaj koji ste popunili u postu “{POST_SUBJECT}” u “{TOPIC_TITLE}” na forumu “{SITENAME}” menjao moderator ili administrator. Izveštaj je do daljnjeg zatvoren. Ako imate nekih pitanja kontaktirajte {CLOSER_NAME}.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Obrisan izveštaj — “{POST_SUBJECT}”

Zdravo {USERNAME},

Dobili ste ovo obaveštenje jer je izveštaj koji ste popunili na postu “{POST_SUBJECT}” u “{TOPIC_TITLE}” na forumu “{SITENAME}” obrisao moderator ili administrator.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Odobrena tema — “{TOPIC_TITLE}”

Zdravo {USERNAME},

Dobili ste ovo obaveštenje zato što je vašu temu “{TOPIC_TITLE}” na forumu “{SITENAME}” odobrio moderator ili administrator.

Ako želite da pogledate temu, kliknite na link ispod:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tema nije odobrena — “{TOPIC_TITLE}”

Zdravo {USERNAME},

Dobili ste ovo obaveštenje jer vašu temu “{TOPIC_TITLE}” na forumu “{SITENAME}” nije odobrio moderator ili administrator.

Sledeći razlog je dat kao obrazloženje:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Obaveštenje o odgovoru na temu — “{TOPIC_TITLE}”

Zdravo {USERNAME},

Dobili ste ovo obaveštenje jer ste izabrali da pratite temu, “{TOPIC_TITLE}” na forumu “{SITENAME}”. Na ovu temu je odgovoreno od vaše poslednje posete. Možete koristiti sledeći link da bi pogledali odgovore, i nećete biti više obaveštavani sve dok ne posetite temu.

Ako želite da pogledate najnoviji odgovor od vaše poslednje posete, kliknite na sledeći link:
{U_NEWEST_POST}

Ako želite da pogledate temu, kliknite na link ispod:
{U_TOPIC}

Ako ne želite više da pratite temu možete ili da kliknete na “Prekid praćenja teme” link koji se nalazi u dnu tene iznad, ili klikom na sledeći link:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reaktivirajte vaš nalog

Zdravo {USERNAME},

Vaš nalog na forumu “{SITENAME}” je deaktiviran, najverovatnije zbog izmena u vašem profilu. Da bi reaktivirali vaš nalog morate kliknuti na link ispod:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Vaš nalog je deaktiviran

Zdravo {USERNAME},

Vaš nalog na forumu “{SITENAME}” je deaktiviran, najverovatnije zbog izmena u profilu. Administrator boarda će morati da ga aktivira pre nego što možete da se prijavite. Dobićete još jedno obaveštenje kada se to desi.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivacija nove šifre

Zdravo {USERNAME}

Ovo obaveštenje ste dobili zato što ste (ili neko ko se predstavlja kao vi) zahtevali da novu šifruru pošaljemo na vaš email na forumu “{SITENAME}”. Ako niste zahtevali ovo obaveštenje onda vas molimo da ga ignorišete, a ako nastavite da primate ovakva obaveštenja molimo vas da kontaktirate administratora foruma.

Da bi koristili novu šifru morate je aktivirati. Da bi to uradili, kliknite na link ispod.

{U_ACTIVATE}

Ako je nova šifra uspešno aktivirana moći ćete da se prijavite koristeći sledeću šifru:

Šifra: {PASSWORD}

Naravno, možete promeniti ovu šifru sami na stranici sa profilom. Ako imate nekih poteškoća molimo vas da kontaktirate administratora.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reaktiviranje vašeg naloga na "{SITENAME}" - {U_BOARD}

Administrator boarda je insistirao da reaktivirate nalog. Vaš nalog je trenutno neaktivan.
Molimo vas da pratite korake koji su prikazani ovde da bi ponova aktivirali vaš nalog.

Molimo vas da sačuvate ovaj email. Sledi informacija o vašem nalogu:

----------------------------
Korisničko ime: {USERNAME}
----------------------------

Vaša šifra je kriptovana u našoj bazi. Ukoliko je zaboravite, možete potražiti novu koja će biti aktivirana na isti način kao i ovaj nalog.

Molimo vas da posetite sledeći link da bi reaktivirali vaš nalog:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Podsetnik zbog neaktivnog naloga

Zdravo {USERNAME},

{REGISTER_DATE} registrovali ste nov nalog na forumu “{SITENAME}”. Do sada niste aktivirali ovaj nalog, a morate ovo da uradite pre nego što ćete biti u mogućnosti da se prijavite. Link za aktivaciju naloga je ispod.
 
{U_ACTIVATE}

Hvala vam što ste se registrovali na forumu  “{SITENAME}”.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na “{SITENAME}” — {U_BOARD}

{WELCOME_MSG}

Molimo vas da sačuvate ovaj email. Sledi informacija o vašem nalogu:

----------------------------
Korisničko ime: {USERNAME}
----------------------------

Nemojte zaboraviti vašu šifru jer je ona kodirana u našoj bazi i ne možemo vam je poslati nazad. Međutim, ukoliko zaboravite vašu šifru možete zatražiti novu koja će biti aktivirana na isti način kao i nalog.

Vaš nalog je trenutno neaktivan. Ne možete ga koristiti dok ne kliknete na sledeći link:

{U_ACTIVATE}


Hvala vam što ste se registrovali.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na “{SITENAME}” — {U_BOARD}

{WELCOME_MSG}

Molimo vas da sačuvate ovaj email. Sledi informacija o vašem nalogu:

----------------------------
Korisničko ime: {USERNAME}
{PASSWORD_EXTRA_LINE}
----------------------------

Nemojte zaboraviti vašu šifru jer je ona kodirana u našoj bazi i ne možemo vam je poslati nazad. Međutim, ukoliko zaboravite vašu šifru možete zatražiti novu koja će biti aktivirana na isti način kao i nalog.

Hvala vam što se se registrovali.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Dobrodošli na “{SITENAME}” — {U_BOARD}

{WELCOME_MSG}

Molimo vas da sačuvate ovaj email. Sledi informacija o vašem nalogu:

----------------------------
Korisničko ime: {USERNAME}
{PASSWORD_EXTRA_LINE}
----------------------------

Vaš nalog je trenutno neaktivan. Ne možete ga koristiti dok ne kliknete na sledeći link:

{U_ACTIVATE}

Nemojte zaboraviti vašu šifru jer je ona kodirana u našoj bazi i ne možemo vam je poslati nazad. Međutim, ukoliko zaboravite vašu šifru možete zatražiti novu koja će biti aktivirana na isti način kao i nalog.

Hvala vam što se se registrovali.

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
