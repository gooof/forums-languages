<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktivácia účtu uživateľa

Zdravíčko,

Účet patriaci uživateľovi "{USERNAME}" bol deaktivovaný, alebo novovytvorený. Mali by ste skontrolovať podrobnosti o tomto uživateľovi (ak je to nevyhnutné) a patrične s tým naložiť.

Odkaz na zobrazenie uživateľovho profilu:
{U_USER_DETAILS}

Odkaz na aktiváciu uživateľovho účtu:
{U_ACTIVATE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Nasledujúcu správu Vám poslal administrátor “{SITENAME}”. Ak tento email považujete za spam, obsahuje poznámky, ktoré sa Vám zdajú byť neprístojné, alebo Vás istým spôsbom uráža, prosím kontaktujte webmastera fóra na nasledujúcej adrese:

{CONTACT_EMAIL}

Nezabudnite priložiť aj tento celý email (hlavne hlavičky).

Nasleduje samotná správa:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Účet aktívny

Dobrý deň {USERNAME},

Váš účet na “{SITENAME}” bol aktivovaný administrátorom. Teraz sa môžete prihlásiť.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Vitajte na “{SITENAME}”

{WELCOME_MSG}

Prosím Vás, ponechajte si tento email pre budúcu potrebu. Údaje o Vašom účte sú nasledovné:

----------------------------
Uživateľ: {USERNAME}


Adresa fóra: {U_BOARD}
----------------------------

Váš účet momentálne nie je aktívny a bude musieť byť schválený administrátorom. Ďalším emailom budete o tom informovaný.


Prosíme nezabudnite, že vaše heslo je zašifrované a nebudeme Vám ho môcť preposlať. V prípade, že zabudnete Vaše heslo, môžete požiadať o nové, ktoré bude aktivované rovnakým spôsobom ako tento účet.

Ďakujeme Vám za registráciu.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Vitajte na "{SITENAME}" 



{WELCOME_MSG}

V súlade s nariadením COPPA, nie je Váš účet momentálne aktívny.

Prosím, vytlačte si túto správu a dajte ju vyplniť a podpísať Vášmu rodičovi, poprípade právnemu zástupcovi.
Potom ju pošlite faxom na:

{FAX_INFO}

Alebo ju odošlite na adresu:

{MAIL_INFO}

------------------------------ TU ODSTRIHNÚŤ ------------------------------
Povolenie na účasť na "{SITENAME}" - {U_BOARD}

Uživateľ: {USERNAME}
Email: {EMAIL_ADDRESS}

PREČÍTAL SOM INFORMÁCIE, KTORÉ MI MOJE DIEŤA POSKYTLO A TÝMTO UDEĽUJEM POVOLENIE "{SITENAME}" NA ARCHIVÁCIU TEJTO INFORMÁCIE.
SOM SI VEDOMÝ TOHO, ŽE TÁTO INFORMÁCIA MÔŽE BYŤ KEDYKOĽVEK ZMENENÁ VLOŽENÍM HESLA
SOM SI VEDOMÝ TOHO, ŽE MÔŽEM KEDYKOĽVEK POŽIADAŤ O ODSTRÁNENIE TEJTO INFORMÁCIE Z "{SITENAME}".


Rodič, alebo právny zástupca
(vytlačte sem svoje meno): _____________________

(podpíšte sem): __________________

Dátum: _______________

------------------------------ TU ODSTRIHNÚŤ ------------------------------


Akonáhle administrátor obdrží tento formulár faxom, alebo poštou, bude Váš účet aktivovaný.

Prosím Vás, dobre si zapamätajte Vaše heslo. V našej databáze bude zašifrované a nebudeme Vám ho môcť preposlať. V prípade, že zabudnete Vaše heslo, môžete požiadať o nové, ktoré bude aktivované rovnakým spôsobom ako tento účet.

Ďakujeme Vám za registráciu.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Vitajte na "{SITENAME}"

{WELCOME_MSG}

V súlade s nariadením COPPA, nie je Váš účet momentálne aktívny.

Prosím, vytlačte si túto správu a dajte ju vyplniť a podpísať Vášmu rodičovi, poprípade právnemu zástupcovi.
Potom ju pošlite faxom na:

{FAX_INFO}

Alebo ju odošlite na adresu:

{MAIL_INFO}

Potom vám príde email aktivujúci váš účet

------------------------------ TU ODSTRIHNÚŤ ------------------------------
Povolenie k prístupu na "{SITENAME}" - {U_BOARD}

Uživateľ: {USERNAME}

Email: {EMAIL_ADDRESS}

PREČÍTAL SOM INFORMÁCIE, KTORÉ MI MOJE DIEŤA POSKYTLO A TÝMTO UDEĽUJEM POVOLENIE "{SITENAME}" NA ARCHIVÁCIU TEJTO INFORMÁCIE.
SOM SI VEDOMÝ TOHO, ŽE TÁTO INFORMÁCIA MÔŽE BYŤ KEDYKOĽVEK ZMENENÁ VLOŽENÍM HESLA
SOM SI VEDOMÝ TOHO, ŽE MÔŽEM KEDYKOĽVEK POŽIADAŤ O ODSTRÁNENIE TEJTO INFORMÁCIE Z "{SITENAME}".


Rodič, alebo právny zástupca
(vytlačte sem svoje meno): _____________________

(podpíšte sem): __________________

Dátum: _______________

------------------------------ TU ODSTRIHNÚŤ ------------------------------


Akonáhle administrátor obdrží tento formulár faxom, alebo poštou, bude Váš účet aktivovaný.

Prosím Vás, dobre si zapamätajte Vaše heslo. V našej databáze bude zašifrované a nebudeme Vám ho môcť preposlať. V prípade, že zabudnete Vaše heslo, môžete požiadať o nové, ktoré bude aktivované rovnakým spôsobom ako tento účet.

Ďakujeme Vám za registráciu.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} “{SITENAME}” — Email od priateľa

Vážený/á {TO_USERNAME},

Tento email Vám bol poslaný z “{SITENAME}” uživateľom {FROM_USERNAME}, ktorý je názoru, že by ste mohli mať záujem o tému:

{TOPIC_NAME}

Nájdete ju na:

{U_TOPIC}

Môže nasledovať správa od {FROM_USERNAME}. Prosím, berte na vedomie, že túto správu administrátori fóra neschválili a ani nevideli. Ak sa chcete sťažovať, že ste tento email obdržali, kontaktujte administrátora na {BOARD_EMAIL}. Nezabudnite citovať hlavičky tejto správy.

----------

{MESSAGE}
',
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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Nový príspevok na fóre “{FORUM_NAME}”

Vážený/á {USERNAME},

Obdržali ste túto správu, pretože sledujete fórum, “{FORUM_NAME}” na “{SITENAME}”. Od Vašej poslednej návštevy, boli na tomto fóre pridané nové príspevky v téme “{TOPIC_TITLE}”. Ďalšia správa oznamujúca nové príspevky Vám bude poslaná, až po Vašej návšteve tejto témy.

{U_NEWEST_POST}

Ak chcete vidieť tému, kliknite na nasledujúci odkaz:
{U_TOPIC}

Ak chcete vidieť fórum, kliknite na nasledujúci odkaz:
{U_TOPIC}

Ak si už neželáte sledovať toto fórum, môžete buď kliknúť na odkaz “Prestať sledovať fórum”, ktorý nájdete na vyššie spomínanom fóre, alebo návštevou nasledujúceho odkazu:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Boli ste prijatý do tejto uživateľskej skupiny

Gratulujeme,

Boli ste pridaný do “{GROUP_NAME}” na stránke “{SITENAME}”.
Túto akciu vykonal moderátor skupiny alebo administrátor. Kontaktujte ich pre viac informácií.

Informácie o svojej skupine si môžete prezrieť tu:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Vaša žiadosť bola schválená

Gratulujeme,

Vaša žiadosť o účasť v skupine “{GROUP_NAME}” na “{SITENAME}” bola schválená.
Ak si prajete zobraziť Vaše členstvo v tejto skupine, navštívte nasledujúci odkaz:

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Žiadosť o prijatie do Vašej uživateľskej skupiny

Vážený/á {USERNAME},

Užívateľ "{REQUEST_USERNAME}" požiadal o vstup do skupiny "{GROUP_NAME}", ktorú moderujete na "{SITENAME}".
Ak si prajete túto žiadosť o členstvo v danej skupine schváliť, poprípade zamietnuť, navštívte prosím nasledujúci odkaz:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB nainštalované

Gratulujeme,

Inštalácia phpBB na Váš server prebehla úspešne.

Tento email obsahuje dôležité informácie týkajúce sa Vašej inštalácie. Mali by ste si ich bezpečne uschovať. Heslo bolo v databáze zašifrované a neexistuje možnosť, ako ho zistiť. V prípade, že zabudnete Vaše heslo, môžete požiadať o nové.

----------------------------
Užívateľ: {USERNAME}


URL fóra: {U_BOARD}
----------------------------

Za účelom bezpečnosti fóra, odporúčame držať krok s vývojom softvéru, čo ľahko dosiahnete prihlásením sa na prijímanie emailu týkajuceho sa phpBB.
Prihlásiť sa môťete na - http://www.phpbb.com/support/    prípadne českej podpory - http://www.phpbb.cz   slovenskej podpory -  http://www.phpbb3.sk 

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Bola založená nová téma — “{FORUM_NAME}”

Vážený/á {USERNAME},

Obdržali ste túto správu, pretože sledujete fórum, “{FORUM_NAME}” na “{SITENAME}”. Od Vašej poslednej návštevy, bola v tomto fóre založená nová téma, “{TOPIC_TITLE}”. Najbližší oznam Vám bude poslaný, až po Vašej návšteve daného fóra.

{U_FORUM}

Ak si už neželáte sledovať toto fórum, môžete buď kliknúť na odkaz “Prestať sledovať fórum”, ktorý nájdete na vyššie spomínanom fóre, alebo návštevou nasledujúceho odkazu:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Hlásenie uzavreté - "{PM_SUBJECT}"

Dobrý deň {USERNAME},

Správa "{PM_SUBJECT}", ktorú ste nahlásili na "{SITENAME}" bola spracovaná administrátorom alebo moderátorom. Hlásenie bolo uzavreté. Ak máte ďalšie otázky, kontaktujte {CLOSER_NAME} súkromnou správou na fóre.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Hlásenie odstránené - "{PM_SUBJECT}"

Dobrý deň {USERNAME},

Hlásenie o správe "{PM_SUBJECT}", ktoré ste odoslali na "{SITENAME}" bolo administrátorom alebo moderátorom odstránené.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Príspevok schválený — “{POST_SUBJECT}”

Vážený/á {USERNAME},

Obdržali ste túto správu, pretože Váš príspevok “{POST_SUBJECT}” na “{SITENAME}” bol moderátorom, či administrátorom schválený.

Ak si prajete tento príspevok zobraziŤ, navštívte nasledujúci odkaz:
{U_VIEW_POST}

Ak si prajete zobraziť tému v ktorej sa príspevok nachádza, navštívte nasledujúci odkaz:
{U_VIEW_TOPIC}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Príspevok zamietnutý — “{POST_SUBJECT}”

Vážený/á {USERNAME},

Obdržali ste túto správu, pretože Váš príspevok “{POST_SUBJECT}” na “{SITENAME}” bol moderátorom, či administrátorom zamietnutý.

Nasleduje dôvod zamietnutia Vášho príspevku:

{REASON}


{EMAIL_SIG}
',
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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Máte novú súkromnú správu

Vážený/á {USERNAME},

Obdržali ste novú súkromnú správu od “{AUTHOR_NAME}” na Vašom účte na “{SITENAME}” s nasledujúcim predmetom:

{SUBJECT}

Ak si prajete zobraziť správu, navštívte nasledujúci odkaz:

{U_VIEW_MESSAGE}

Požiadali ste, aby ste na túto udalosť boli upozornení. Nezabúdajte, že upozornenia na nové správy si môžete zrušiť v nastaveniach vo Vašom profile.

{EMAIL_SIG}
',
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
Vážený/á {TO_USERNAME},

Nasledujúci email ste obdržali od {FROM_USERNAME} na Vašom účte na “{SITENAME}”. Ak tento email považujete za spam, obsahuje poznámky, ktoré sa Vám zdajú byť neprístojné, alebo Vás istým spôsbom uráža, prosím kontaktujte webmastera fóra na nasledujúcej adrese:

{BOARD_EMAIL}

Nezabudnite priložiť aj tento celý email (hlavne hlavičky). Prosím, berte na vedomie, že adresa na spätnú odpoveď bola nastavená na adresu uživateľa {FROM_USERNAME}.

Nasleduje správa, ktorú ste obdržali:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Vážený/á {TO_USERNAME},

Nasledujúcu správu ste obdržali od {FROM_USERNAME} na Vašom účte na “{SITENAME}”. Ak túto správu považujete za spam, obsahuje poznámky, ktoré sa Vám zdajú byť neprístojné, alebo Vás istým spôsbom uráža, prosím kontaktujte webmastera fóra na nasledujúcej adrese:

{BOARD_EMAIL}

Nezabudnite priložiť aj túto celú správu. Prosím, berte na vedomie, že adresa odosielateľa bola uložená na IM účte fóra.

Nasleduje správa, ktorú ste obdržali:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Hlásenie uzavrené — “{POST_SUBJECT}”

Vážený/á {USERNAME},

Obdržali ste túto správu, pretože Vami podané hlásenie na príspevok “{POST_SUBJECT}” v “{TOPIC_TITLE}” na “{SITENAME}” bolo spracované moderátorom, alebo administrátorom. Potom bolo hlásenie uzavrené. S ďaľšími otázkami sa obráťte na {CLOSER_NAME}.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Hlásenie zmazané — "{PM_SUBJECT}"

Vážený/á {USERNAME},

Hlásenie o správe "{PM_SUBJECT}", které ste odeslali na "{SITENAME}" bolo odstranené moderátorom.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Téma schválená — “{TOPIC_TITLE}”

Vážený/á {USERNAME},

Obdržali ste túto správu, pretože Vami založená téma “{TOPIC_TITLE}” na “{SITENAME}” bola moderátorom, či administrátorom schválená.

Ak si prajete túto tému zobrazit, navštívte nasledujúci odkaz:
{U_VIEW_TOPIC}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Téma zamietnuta — “{TOPIC_TITLE}”

Vážený/á {USERNAME},

Obdržali ste túto správu, pretože Vami založená téma “{TOPIC_TITLE}” na “{SITENAME}” bola moderátorom, či administrátorom zamietnuta.

Nasleduje dôvod zamietnutia Vašej témy:

{REASON}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Nový príspevok v téme “{TOPIC_TITLE}”

Vážený/á {USERNAME},

Obdržali ste túto správu, pretože sledujete tému - “{TOPIC_TITLE}” na “{SITENAME}”. V tejto téme pribudli nové príspevky od Vašej poslednej návštevy. Ďalšia správa oznamujúca nové príspevky Vám bude poslaná, až po Vašej návšteve tejto témy.

Ak si prajete zobraziť najnovšie príspevky od Vašej poslednej návštevy, navštívte nasledujúci odkaz:
{U_NEWEST_POST}

Ak si prajete zobraziť tému “{TOPIC_TITLE}”, navštívte nasledujúci odkaz:
{U_TOPIC}

Ak si už neželáte sledovať túto tému, môžete buď kliknúť na odkaz “Prestať sledovať tému”, ktorý nájdete na konci vyššie spomínanej témy, alebo návštevou nasledujúceho odkazu:
{U_FORUM}

Ak si naďalej neželáte sledovať túto tému, môžete kliknúť na "odznačiť tému" odkaz nájdete na konci správy, alebo kliknutím na odkaz:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Aktivácia Vášho účtu

Vážený/á {USERNAME},

Váš účet na “{SITENAME}” bol deaktivovaný, pravdepodobne na základe zmien vykonaných vo Vašom profile. Aktiváciu uskutočníte návštevou nasledujúceho odkazu:

{U_ACTIVATE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Váš účet bol deaktivovaný

Vážený/á {USERNAME},

Váš účet na “{SITENAME}” bol deaktivovaný, pravdepodobne na základe zmien vykonaných vo Vašom profile. Pokiaľ Vám administrátor fóra Váš účet opäť neaktivuje, nebudete sa môcť prihlásiť. Akonáhle bude Váš účet aktivovaný, održíte ďalšiu správu.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivácia nového hesla

Vážený/á {USERNAME}

Obdržali ste túto správu, pretože ste (Vy, alebo niekto vydávajúci sa za Vás) požiadali o poslanie nového hesla pre Váš účet na “{SITENAME}”. Ak ste o zmenu hesla nežiadali, prosím, považujte túto správu za bezpredmetnú. Ak túto správu obdržiavate neustále, kontaktujte administrátora fóra.

Ak si prajete pužívať nové heslo, musíte ho aktivovať. Aktiváciu vykonáte návštevou nasledujúceho odkazu.

{U_ACTIVATE}

Ak aktivácia prebehne úspešne, budete sa môct prihlásiť použitím nového hesla:

Heslo: {PASSWORD}

Samozrejme, že heslo si môžete sami zmeniť na stránke Vášho profilu. Pri akýchkoľvek ťažkostiach, neváhajte a kontaktujte administrátora fóra.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reaktivujte si svoj účet na "{SITENAME}"

Administrátor fóra uvalil na váš účet nútenú reaktiváciu. Váš účet je práve neaktívny.
Nasledujte uvedené kroky pre jeho reaktiváciu.

Prosíme ponechajte si tento email pre záznam. Informácie o vašom účte nasledujú:

----------------------------
Užívateľské meno: {USERNAME}
----------------------------

Vaše heslo bolo zašifrované v našej databáze. Pokiaľ by ste si nezapamätali vaše heslo, môžete zažiadať o nové, ktoré bude musieť byť reaktivované rovnako ako teraz tento účet.

Prejdite na nasledujúci odkaz pre reaktiváciu vašeho účtu:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Pripomienka - aktivácia účtu

Vážený/á {USERNAME},

Dňa {REGISTER_DATE} ste si zaregistrovali nový účet na “{SITENAME}”. Zatiaľ ste si Váš účet neaktivovali. Prihlásiť sa však môžete až po úspešnej aktivácii. Aby sme Vám to uľahčili, nasleduje odkaz na aktiváciu.

{U_ACTIVATE}

Ďakujeme Vám za registráciu na “{SITENAME}”, tešíme sa na Vašu účasť.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Vitajte na "{SITENAME}"

{WELCOME_MSG}

Prosím Vás, ponechajte si tento email pre budúcu potrebu. Údaje o Vašom účte sú nasledovné:

----------------------------
Užívateľ: {USERNAME}
----------------------------

Vaše heslo bolo v našej databáze zašifrované. V prípade, že zabudnete Vaše heslo, môžete požiadať o nové, ktoré bude aktivované rovnakým spôsobom ako tento účet.

Váš účet nie je momentálne aktívny. Aktiváciu uskutočníte návštevou nasledujúceho odkazu:

{U_ACTIVATE}


Ďakujeme Vám za registráciu.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Vitajte na "{SITENAME}"

{WELCOME_MSG}

Prosím Vás, ponechajte si tento email pre budúcu potrebu. Údaje o Vašom účte sú nasledovné:

----------------------------
Užívateľ: {USERNAME}

Adresa fóra: {U_BOARD}
----------------------------

Prosíme nezabudnite, že vaše heslo je zašifrované a nebudeme Vám ho môcť preposlať. V prípade, že zabudnete Vaše heslo, môžete požiadať o nové, ktoré bude aktivované rovnakým spôsobom ako tento účet.

Ďakujeme Vám za registráciu.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Vitajte na "{SITENAME}"

{WELCOME_MSG}

Prosím Vás, ponechajte si tento email pre budúcu potrebu. Údaje o Vašom účte sú nasledovné:

----------------------------
Užívateľ: {USERNAME}

Adresa fóra: {U_BOARD}
----------------------------

Váš účet nie je momentálne aktívny. Aktiváciu uskutočníte návštevou nasledujúceho odkazu:

{U_ACTIVATE}

Prosíme nezabudnite, že vaše heslo zašifrované a nebudeme Vám ho môcť preposlať. V prípade, že zabudnete Vaše heslo, môžete požiadať o nové, ktoré bude aktivované rovnakým spôsobom ako tento účet.

Ďakujeme Vám za registráciu.

{EMAIL_SIG}
',
));


