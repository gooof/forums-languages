<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktivovat uživatelský účet

Dobrý den,

účet, který vlastní "{USERNAME}" byl deaktivován nebo nově vytvořen, měl byste zkontrolovat jeho údaje, pokud je to nutné, a aktivovat jeho účet pomocí následujícího odkazu:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Následující zpráva vám byla zaslána administrátorem fóra "{SITENAME}". Pokud je tato zpráva spam, obsahuje pohoršující nebo jiné komentáře, které shledáváte jako nevhodné, kontaktujte prosím správce fóra na následující adrese:

{CONTACT_EMAIL}

Přiložte celý e-mail, obzvláště hlavičky. 

Následuje zpráva pro vás:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Účet byl aktivován

Dobrý den {USERNAME},

váš účet na "{SITENAME}" byl aktivován administrátorem. Nyní se můžete přihlásit.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Vítejte na "{SITENAME}"

{WELCOME_MSG}

Prosím, uschovejte si tento e-mail pro případné zapomenutí údajů, následují vaše přihlašovací údaje:

----------------------------
Uživatelské jméno: {USERNAME}

URL fóra:         {U_BOARD}
----------------------------

Váš účet je momentálně neaktivní, administrátor fóra jej bude muset aktivovat, než se budete moci přihlásit. Obdržíte další e-mail, až toto administrátor provede.

Prosíme, nezapomeňte, že vaše heslo je zašifrováno v naší databázi a nelze jej získat zpět. Pokud jej přesto zapomenete nebo ztratíte, zašleme vám nové, které ale budete muset aktivovat stejným způsobem jako tento účet.

Děkujeme za vaši registraci.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Vítejte na "{SITENAME}"

{WELCOME_MSG}

Z důvodů pravidel COPPA (vyhláška o ochraně mládeže na internetu platící v USA) je váš účet neaktivní.

Prosím vytiskněte tuto stránku, a nechte ji podepsat rodiči. Poté ji odešlete na následující faxový účet:

{FAX_INFO}

nebo na e-mail:

{MAIL_INFO}

------------------------------ ODSTŘIHNĚTE ZDE ------------------------------
Potvrzení přístupu k "{SITENAME}" - {U_BOARD}

Uživatelské jméno: {USERNAME}
Email: {EMAIL_ADDRESS}

ZKONTROLOVAL/A JSEM ÚDAJE, KTERÉ BYLY POSKYTNUTY MÝM DÍTĚTEM A SOUHLASÍM S JEJICH UCHOVÁNÍM NA "{SITENAME}". 
JSEM SEZNÁMEN/A S TÍM, ŽE TYTO ÚDAJE LZE KDYKOLIV ZMĚNIT ZADÁNÍM HESLA.
JSEM SEZNÁMEN/A S TÍM, ŽE MOHU KDYKOLIV POŽÁDAT O TO, ABY TATO DATA BYLA STAŽENA A SMAZÁNA Z "{SITENAME}".


Rodič nebo zákonný zástupce
(Napište své jméno): _____________________

(podpis): __________________ 

Datum: _______________

------------------------------ ODSTŘIHNĚTE ZDE ------------------------------


Váš účet je momentálně neaktivní, administrátor fóra jej bude muset aktivovat, než se budete moci přihlásit. Administrátor jej aktivuje, jakmile obdrží prohlášení uvedené výše. Obdržíte další e-mail, až toto administrátor provede.

Prosíme nezapomeňte, že vaše heslo je zašifrováno v naší databázi a nelze jej získat zpět. Pokud jej přesto zapomenete nebo ztratíte, zašleme vám nové, které ale budete muset aktivovat stejným způsobem jako tento účet.

Děkujeme za vaši registraci.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Vítejte na "{SITENAME}"

{WELCOME_MSG}

Z důvodů pravidel COPPA (vyhláška o ochraně mládeže na internetu platící v USA) je váš účet neaktivní.

Prosím vytiskněte tuto stránku, a nechte ji podepsat rodiči. Poté ji odešlete na následující fax:

{FAX_INFO}

nebo na e-mail:

{MAIL_INFO}

Nakonec vám přijde e-mail aktivující váš účet

------------------------------ ODSTŘIHNĚTE ZDE ------------------------------
Potvrzení přístupu k "{SITENAME}" - {U_BOARD}

Uživatelské jméno: {USERNAME}
E-mailová adresa: {EMAIL_ADDRESS}

ZKONTROLOVAL/A JSEM ÚDAJE, KTERÉ BYLY POSKYTNUTY MÝM DÍTĚTEM A SOUHLASÍM S JEJICH UCHOVÁNÍM NA "{SITENAME}". 
JSEM SEZNÁMEN/A S TÍM, ŽE TYTO ÚDAJE LZE KDYKOLIV ZMĚNIT ZADÁNÍM HESLA.
JSEM SEZNÁMEN/A S TÍM, ŽE MOHU KDYKOLIV POŽÁDAT O TO, ABY TATO DATA BYLA STAŽENA A SMAZÁNA Z "{SITENAME}".


Rodič nebo zákonný zástupce
(Napište své jméno): _____________________

(podpis): __________________ 

Datum: _______________

------------------------------ ODSTŘIHNĚTE ZDE ------------------------------


Váš účet je momentálně neaktivní, administrátor fóra jej bude muset aktivovat, než se budete moci přihlásit. Obdržíte další e-mail, až toto administrátor provede.

Prosíme nezapomeňte, že vaše heslo je zašifrováno v naší databázi a nelze jej získat zpět. Pokud jej přesto zapomenete nebo ztratíte, zašleme vám nové, které ale budete muset aktivovat stejným způsobem jako tento účet.

Děkujeme za vaši registraci.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - e-mail kamarádovi o tématu

Dobrý den {TO_USERNAME},

tento e-mail byl odeslán z "{SITENAME}" uživatelem {FROM_USERNAME}, který se domnívá, že by vás mohlo zajímat následující téma:

{TOPIC_NAME}

Které najdete zde:

{U_TOPIC}

Zpráva od uživatele {FROM_USERNAME} může být uvedena níže. Berte na vědomí, že tato zpráva nebyla kontrolována administrátory fóra. Pokud si chcete stěžovat ohledně obdržení tohoto e-mailu, kontaktujte administrátora na adrese {BOARD_EMAIL}. Ocitujte prosím hlavičky tohoto e-mailu do stížnosti.

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
	'email/forum_notify.txt' 		=> '
{EMAILSUBJECT:} Upozornění na nový příspěvek na fóru - {FORUM_NAME}

Dobrý den {USERNAME},

obdrželi jste toto upozornění, protože sledujete fórum "{FORUM_NAME}" na stránce {SITENAME}. Toto fórum zaznamenalo novou odpověď na téma "{TOPIC_TITLE}" od vaší poslední návštěvy. Můžete použít následujícího odkazu pro zobrazení poslední nepřečtené odpovědi, nebude vám zaslán žádný další e-mail, dokud nezobrazíte toto téma.

{U_NEWEST_POST}

Chcete-li zobrazit téma, klikněte na následující odkaz:
{U_TOPIC}

Chcete-li zobrazit fórum, klikněte na následující odkaz:
{U_FORUM}
 
Pokud již dále nechcete sledovat toto téma, použijte odkaz "Nesledovat toto fórum" na samotném fóru, nebo použijte tento odkaz:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Byli jste přidáni do uživatelské skupiny

Gratulujeme,

byli jste přidáni do skupiny "{GROUP_NAME}" na stránce {SITENAME}.
Tato akce byla provedena administrátorem nebo moderátorem skupiny, kontaktujte je pro více informací.

Zde jsou informace o vaši nové skupině:
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Vaše žádost byla odsouhlasena

Gratulujeme,

vaše žádost vstoupit do skupiny "{GROUP_NAME}" na stránce {SITENAME} byla schválena.
Zde jsou další informace o vaší nové skupině:

{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Žádost o vstup do skupiny

Dobrý den {USERNAME},

uživatel "{REQUEST_USERNAME}" zažádal o vstup do skupiny "{GROUP_NAME}", kterou vedete na "{SITENAME}".
Pro schválení této žádosti použijte následující odkaz:

{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} Nová instalace phpBB

Gratulujeme,

úspěšně jste nainstalovali phpBB na váš server.

Tento e-mail obsahuje důležité informace a vaší instalaci, prosíme, uschovejte jej. Prosíme, nezapomeňte, že vaše heslo je zašifrováno v databázi a nelze jej získat zpět, ale je možné si nechat poslat nové.

----------------------------
Uživatelské jméno: {USERNAME}

Adresa fóra:       {U_BOARD}
----------------------------

Užitečné informace o phpBB lze nalézt ve složce docs u vaší instalace, nebo na stránce podpory phpBB - http://www.phpbb.com/support/, případně české podpory - http://www.phpbb.cz

Doporučujeme sledovat novinky v nových verzích našeho systému pro zajištění bezpečnosti vašeho fóra, novinky vám můžeme zasílat automaticky, pokud se přihlásíte na mailing list, který je na výše uvedeném odkazu.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Upozornění na odpověď v tématu - {FORUM_NAME}

Dobrý den {USERNAME},

tento e-mail jste obdržel/a jelikož sledujete téma "{FORUM_NAME}" na {SITENAME}. Toto téma zaznamenalo od vaší poslední návštěvy nový příspěvek v tématu "{TOPIC_TITLE}". Dokud toto fórum nenavštívíte, nedostanete další e-mail.

{U_FORUM}

Pokud si již nepřejete sledovat toto téma, můžete sledování ukončit buď kliknutím na "Ukončit sledování tohoto tématu" nacházející se ve spodní části tématu, nebo kliknutím na následující odkaz:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Hlášení uzavřeno - "{PM_SUBJECT}"

Dobrý den {USERNAME},

zpráva "{PM_SUBJECT}", kterou jste nahlásili na "{SITENAME}" byla zpracována administrátorem nebo moderátorem. Hlášení bylo uzavřeno, pokud máte další dotazy, kontaktujte {CLOSER_NAME} soukromou zprávou na fóru.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Hlášení odstraněno - "{PM_SUBJECT}"

Dobrý den {USERNAME},

hlášení o zprávě "{PM_SUBJECT}", které jste odeslali na "{SITENAME}" bylo moderátorem odstraněno.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Schválení příspěvku - {POST_SUBJECT}

Dobrý den {USERNAME},

dostal jste toto upozornění, protože váš příspěvek "{POST_SUBJECT}" na {SITENAME} byl schválen moderátorem nebo administrátorem.

Pokud chcete zobrazit příspěvek, klikněte na tento odkaz:
{U_VIEW_POST}

Pokud chcete zobrazit celé téma, klikněte na tento odkaz:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Neschválení příspěvku - {POST_SUBJECT}

Dobrý den {USERNAME},

dostal jste toto upozornění, protože váš příspěvek "{POST_SUBJECT}" na {SITENAME} nebyl schválen moderátorem nebo administrátorem.

Zde je důvod neschválení:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Nová soukromá zpráva

Dobrý den {USERNAME},

obdrželi jste novou soukromou zprávu od "{AUTHOR_NAME}" na fóru "{SITENAME}" s následujícím předmětem:

{SUBJECT}

Celou zprávu si můžete přečíst, když kliknete na následující odkaz:

{U_VIEW_MESSAGE}

Nastavení zasílání e-mailů si můžete nastavit v uživatelském panelu.

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
Dobrý den {TO_USERNAME},

byl vám zaslán e-mail od {FROM_USERNAME} z {SITENAME}. Pokud tento e-mail obsahuje spam, hanlivé výrazy nebo jiné komentáře, které pokládáte za útočné, kontaktujte administrátora na následující adrese:

{BOARD_EMAIL}

Následuje celá zpráva (podrobnosti jsou v hlavičce). Pamatujte, že když kliknete na odpovědět, odpovíte tomuto uživateli: {FROM_USERNAME}.

Celá zpráva
~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Dobrý den {TO_USERNAME},

obdrželi jste zprávu od uživatele {FROM_USERNAME} z {SITENAME}. Pokud je tato zpráva spam, kontaktujte administrátora fóra na následující adrese:

{BOARD_EMAIL}

Následuje celá zpráva. Pamatujte, že adresa odesílatele byla nastavena na IM účet fóra.

Celá zpráva
~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Nahlášení příspěvku uzavřeno - {POST_SUBJECT}

Dobrý den {USERNAME},

hlášení, které jste zaslal kvůli příspěvku "{POST_SUBJECT}" v "{TOPIC_TITLE}" na {SITENAME} bylo uzavřeno moderátorem nebo administrátorem. Pro další dotazy na {CLOSER_NAME} použijte soukromou zprávu.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Smazání nahlášení příspěvku - {POST_SUBJECT}

Dobrý den {USERNAME},

obdrželi jste tuto zprávu, protože vaše hlášení kvůli příspěvku "{POST_SUBJECT}" v "{TOPIC_TITLE}" na {SITENAME} bylo smazáno moderátorem nebo administrátorem.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Schválení tématu - {TOPIC_TITLE}

Dobrý den {USERNAME},

obdrželi jste toto oznámení, protože vaše téma "{TOPIC_TITLE}" na {SITENAME} bylo schváleno moderátorem nebo administrátorem.

Pokud chcete zobrazit celé téma, klikněte na tento odkaz:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Neschválení tématu - {TOPIC_TITLE}

Dobrý den {USERNAME},

obdrželi jste toto upozornění, protože vaše téma "{TOPIC_TITLE}" na {SITENAME} bylo zamítnuto moderátorem nebo administrátorem.

Zde je důvod neschválení:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Upozornění na odpověď v tématu - {TOPIC_TITLE}

Dobrý den {USERNAME},

obdrželi jste toto upozornění, protože sledujete téma "{TOPIC_TITLE}" na {SITENAME}. Toto téma zaznamenalo od vaší poslední návštěvy nový příspěvek. Dokud toto téma nenavštívíte, neobdržíte o něm žádné další e-maily.

Pokud chcete zobrazit nejnovější příspěvek od doby vaší poslední návštěvy, klikněte na následující odkaz:
{U_NEWEST_POST}

Pokud chcete zobrazit celé téma, použijte následující odkaz:
{U_TOPIC}

Chcete-li zobrazit fórum, klikněte na následující odkaz:
{U_FORUM}
 
Pokud si již nepřejete sledovat toto téma, můžete sledování ukončit buď kliknutím na "Ukončit sledování tohoto tématu" nacházející se ve spodní části tématu, nebo kliknutím na následující odkaz:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reaktivace vašeho účtu

Dobrý den {USERNAME},

váš účet na "{SITENAME}" byl deaktivován. Reaktivaci provedete kliknutím na tento odkaz:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Váš účet byl deaktivován

Dobrý den {USERNAME},

váš účet na "{SITENAME}" byl deaktivován, pravděpodobně kvůli změnám v profilu. Než se budete moci přihlásit, budete muset vyčkat, než účet znovu aktivuje administrátor. Jakmile jej aktivuje, obdržíte další e-mail.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Aktivace nového hesla

Dobrý den {USERNAME},

obdrželi jste tento e-mail, protože někdo zažádal o nové heslo přes naše fórum. Pokud jste o nové heslo nežádali, tento e-mail ignorujte.

Aktivace nového hesla:

{U_ACTIVATE}

K přihlášení použijte toto heslo:

Heslo: {PASSWORD}

Heslo můžete změnit ve vašem profilu. Pokud s tím budete mít jakékoliv potíže, kontaktujte administrátora.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reaktivujte svůj účet na "{SITENAME}"

Administrátor fóra uvalil na váš účet nucenou reaktivaci. Váš účet je nyní neaktivní.
Následujte uvedené kroky pro jeho reaktivaci.

Prosíme, ponechejte si tento e-mail pro záznam. Informace o vašem účtu následují:

----------------------------
Uživatelské jméno: {USERNAME}
----------------------------

Vaše heslo bylo zašifrováno v naší databázi. Pokud byste zapomněli vaše heslo, můžete zažádat o nové, které bude muset být reaktivováno stejně jako nyní tento účet.
Přejděte na následující odkaz pro reaktivaci vašeho účtu:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Neaktivní účet

Dobrý den {USERNAME},

{REGISTER_DATE} jste si registroval nový účet na "{SITENAME}". Zatím není váš účet aktivní. Pro aktivaci se musíte přihlásit. 
{U_ACTIVATE}

Děkujeme za registraci na našem webu "{SITENAME}".

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Vítejte na "{SITENAME}"

{WELCOME_MSG}

Prosím, uschovejte si tento e-mail pro případné zapomenutí údajů, následují vaše přihlašovací údaje:

----------------------------
Uživatelské jméno: {USERNAME}
----------------------------

Prosíme, nezapomeňte, že vaše heslo je zašifrováno v naší databázi a nelze jej zpětně získat. Pokud jej přesto zapomenete nebo ztratíte, zašleme vám nové, které ale budete muset aktivovat stejným způsobem jako tento účet.

Váš účet je nyní neaktivní, k aktivaci dojde po navštívení tohoto odkazu:

{U_ACTIVATE}


Děkujeme za vaši registraci.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Vítejte na "{SITENAME}"

{WELCOME_MSG}

Prosím, uschovejte si tento e-mail pro případné zapomenutí údajů, následují vaše přihlašovací údaje:

----------------------------
Uživatelské jméno: {USERNAME}
 {PASSWORD_EXTRA_LINE}
URL fóra:          {U_BOARD}
----------------------------

Prosíme, nezapomeňte, že vaše heslo je zašifrováno v naší databázi a nelze jej zpětně získat. Pokud jej přesto zapomenete nebo ztratíte, zašleme vám nové, které ale budete muset aktivovat stejným způsobem jako tento účet.

Děkujeme za vaši registraci.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Vítejte na "{SITENAME}"

{WELCOME_MSG}

Prosím, uschovejte si tento e-mail pro případné zapomenutí údajů, následují vaše přihlašovací údaje:

----------------------------
Uživatelské jméno: {USERNAME}
{PASSWORD_EXTRA_LINE}
URL fóra:          {U_BOARD}
----------------------------

Váš účet je momentálně neaktivní, aktivovat jej můžete kliknutím na následující odkaz:

{U_ACTIVATE}

Prosíme, nezapomeňte, že vaše heslo je zašifrováno v naší databázi a nelze jej zpětně získat. Pokud jej přesto zapomenete nebo ztratíte, zašleme vám nové, které ale budete muset aktivovat stejným způsobem jako tento účet.

Děkujeme za vaši registraci.

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
