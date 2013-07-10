﻿<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Käyttäjätunnukset

Terve,

Käyttäjätunnus "{USERNAME}" on suljettu tai se on luotu äskettäin. Voit tarkistaa käyttäjän tiedot vierailemalla alapuolella olevassa linkissä.
{U_USER_DETAILS}

Voit aktivoida tunnuksen käyttämällä tätä linkkiä.
{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Tämän viestin on lähettänyt sinulle "{SITENAME}" sivuston ylläpitäjä. Mikäli tämä on roskapostia, tai sisältää loukkaavaa materiaalia. Ota yhteyttä ylläpitoon lähettämällä sähköpostia osoitteeseen:

{CONTACT_EMAIL}

Liitä mukaan tämä koko viesti (Varsinkin header- tiedot). 

Sinulle lähetetty viesti:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Käyttäjätunnukset on aktivoitu

Terve {USERNAME},

Ylläpitäjä on aktivoinut käyttäjätunnuksesi "{SITENAME}" sivustolla. Voit kirjautua sisään.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Tervetuloa {SITENAME} keskustelufoorumille

{WELCOME_MSG}

Ole hyvä ja pidä tämä viesti omana tietonasi. Käyttäjätunnuksesi on:

----------------------------
Käyttäjätunnus: {USERNAME}
----------------------------

Käyttäjätunnuksesi on tällähetkellä suljettu ja sivuston ylläpitäjän täytyy aktivoida ne ensin, ennen kuin voit kirjautua sisään. Saat toisen ilmoituksen, kun tunnuksesi on käytössä.

Älä unohda salasanaasi, sillä se on salakirjoitettuna tietokannassamme, emmekä voi sitä sieltä sinulle hakea. Mikäli unohdat salasanasi, voit pyytää uutta käyttämällä samaa sähköpostiosoitetta, kuin rekisteröityessäsi

Kiitos rekisteröitymisestä.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Tervetuloa {SITENAME} Keskustelufoorumeille

{WELCOME_MSG}

COPPA lain mukaisesti Käyttäjätunnuksesi on suljettu, kunnes saamme vahvistuksen.

Ole hyvä ja tulosta tämä lomake paperille ja pyydä vanhempiasi tai holhoajaasi allekirjoittamaan ja lisäämään päiväys. Lähetä täytetty lomake faksilla:

{FAX_INFO}

TAI postita se osoitteeseen:

{MAIL_INFO}

------------------------------ LEIKKAA TÄSTÄ ------------------------------
Lupa käyttää sivustoa {SITENAME}

Käyttäjätunnus: {USERNAME}
Sähköpostiosoite: {EMAIL_ADDRESS}

OLEN TARKISTANUT LAPSENI ANTAMAT TIEDOT JA ANNAN LUPANI {SITENAME} SIVUSTON TALLENTAA NÄMÄ TIEDOT.
YMMÄRRÄN, ETTÄ NÄMÄ TIEDOT VOI MUUTTAA KOSKA TAHANSA ANtAMALLA OIKEAN SALASANAN OMISSA ASETUKSISSA. 
YMMÄRRÄN, ETTÄ VOIN PYYTÄÄ NÄIDEN TIETOJEN POISTAMISTA {SITENAME} SIVUSTOLTA KOSKA TAHANSA.


VANHEMPI TAI HUOLTAJA 
(Nimen selvennys): _____________________

(Allekirjoitus): __________________ 

Päivämäärä: _______________

------------------------------ LEIKKAA TÄSTÄ ------------------------------


Kun ylläpitäjä saa tämän lomakkeen faksilla tai postilla, tunnuksesi voidaan aktivoida.

Älä unohda salasanaasi, sillä se on salakirjoitettu tietokantaamme. Mikäli kuitenkin unohdat salasanasi, voit pyytää uuden, joka aktivoidaan samalla tavalla kuin tämäkin.

Kiitos rekisteröitymisestä.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Tervetuloa {SITENAME} Keskustelufoorumeille

{WELCOME_MSG}

COPPA lain mukaisesti Käyttäjätunnuksesi on suljettu, kunnes saamme vahvistuksen.

Ole hyvä ja tulosta tämä lomake paperille ja pyydä vanhempiasi tai holhoajaasi allekirjoittamaan ja lisäämään päiväys. Lähetä täytetty lomake faksilla:

{FAX_INFO}

TAI postita se osoitteeseen:

{MAIL_INFO}

------------------------------ LEIKKAA TÄSTÄ ------------------------------
Lupa käyttää sivustoa {SITENAME}

Käyttäjätunnus: {USERNAME}
Salasana: {PASSWORD}
Sähköpostiosoite: {EMAIL_ADDRESS}

OLEN TARKISTANUT LAPSENI ANTAMAT TIEDOT JA ANNAN LUPANI {SITENAME} SIVUSTON TALLENTAA NÄMÄ TIEDOT.
YMMÄRRÄN, ETTÄ NÄMÄ TIEDOT VOI MUUTTAA KOSKA TAHANSA ANtAMALLA OIKEAN SALASANAN OMISSA ASETUKSISSA.  
YMMÄRRÄN, ETTÄ VOIN PYYTÄÄ NÄIDEN TIETOJEN POISTAMISTA {SITENAME} SIVUSTOLTA KOSKA TAHANSA.


VANHEMPI TAI HOLHOAJA 
(Nimen selvennys): _____________________

(Allekirjoitus): __________________ 

Päivämäärä: _______________

------------------------------ LEIKKAA TÄSTÄ ------------------------------


Kun ylläpitäjä saa tämän lomakkeen faksilla tai postilla, tunnuksesi voidaan aktivoida.

Älä unohda salasanaasi, sillä se on salakirjoitettu tietokantaamme. Mikäli kuitenkin unohdat salasanasi, voit pyytää uuden, joka aktivoidaan samalla tavalla kuin tämäkin.

Kiitos rekisteröitymisestä.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Lähetä viesti kaverille

Terve {TO_USERNAME},

Tämä viesti on lähetetty "{SITENAME}" sivustolta käyttäjän {FROM_USERNAME} toimesta. Hän arveli sinun olevan kiinnostunut seuraavasta viestiketjusta:

{TOPIC_NAME}

Viestiketjun osoite

{U_TOPIC}

Alempana voi olla myös viesti käyttäjältä {FROM_USERNAME}. Huomaa, että tätä viestiä ei ole tarkistettu tai hyväksytty ylläpidon toimesta. Mikäli haluat valittaa tämän viestin vastaanottamisesta, voit ottaa yhteyttä ylläpitäjiin osoitteessa {BOARD_EMAIL}. Muista liittää mukaan kopio viestistä ja myöskin header tiedot.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Uusi viesti keskustelualueella - {FORUM_NAME}

Terve {USERNAME},

Sait tämän viestin, koska seuraat keskustelualuetta, "{FORUM_NAME}", {SITENAME} sivustolla. Tälle alueelle on tullut vastaus viimeisen käyntisi jälkeen viestiketjuun "{TOPIC_TITLE}". Voit käyttää allaolevaa linkkiä lukeaksesi viestin. Uusia ilmoituksia ei lähetetä ennen kuin olet vieraillut keskustelufoorumilla.

{U_NEWEST_POST}

Mikäli et halua seurata alueen vastauksia, voit lopettaa seuranna klikkaamalla "Lopeta seuraaminen" linkkiä, joka löytyy ylläolevalta alueelta, Tai klikkaamalla alapuolella olevaa linkkiä:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Sinut on lisätty ryhmään

Onneksiolkoon,

Sinut on lisätty "{GROUP_NAME}" ryhmään, {SITENAME} sivustolla.
Tämän on tehnyt ryhmän valvoja tai sivuston ylläpitäjä. Ota yhteyttä heihin saadaksesi lisätietoja

Voit katsoa ryhmän tietoja täällä:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Hakemuksesi on hyväksytty

Onnea,

Jäsenhakemuksesi "{GROUP_NAME}" ryhmään, {SITENAME} sivustolla on hyväksytty.
Klikkaa allaolevaa linkkiä nähdäksesi ryhmän tiedot.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Jäsenhakemus käyttäjäryhmään

Hyvä {USERNAME},

Käyttäjä on pyytänyt jäsenyyttä "{GROUP_NAME}" ryhmässä, jota sinä valvot {SITENAME} sivustolla.
Hyväksyäksesi tai hylätäksesi tämän hakemuksen. vieraile alla olevassa linkissä:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB on asennettu

Onnea,

Olet suorittanut phpBB3:n asennuksen onnistuneesti palvelimellesi.

Tässä viestissä on tärkeää tietoa, joka täytyisi pitää tallessa. Salasana on salakirjoitettu tietokantaan ja sitä ei voi palauttaa sieltä jos unohdat tämän. Voit tosin pyytää uutta salasanaa, mikäli unohdat salasanasi.

----------------------------
Käyttäjätunnus: {USERNAME}

Keskustelufoorumin osoite: {U_BOARD}
----------------------------

Saat palvelimella olevassa Docs kansiosta lisätietoja phpBB ohjelmistosta tai suoraan sivustoltamme - http://www.phpbb.com/support/

Pitääksesi ohjelmistosi ajan tasalla. Suosittelemme liittymistä postituslistallemme, joka löytyy yllä olevasta osoitteesta.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} uusi viestiketju - {FORUM_NAME}

Terve {USERNAME},

Sait tämän viestin, koska seuraat keskustelualuetta "{FORUM_NAME}", {SITENAME} sivustolla. Tälle alueelle on lähetetty uusi viestiketju "{TOPIC_TITLE}", edellisen käyntisi jälkeen. Voit käyttää tätä linkkiä lukeaksesi viestin. Uusia ilmoituksia ei lähetetä ennen kuin olet vieraillut keskustelufoorumilla.

{U_FORUM}

Mikäli et halua seurata alueen vastauksia, voit lopettaa seurannan klikkaamalla "Lopeta seuraaminen" linkkiä, joka löytyy ylläolevalta alueelta, Tai klikkaamalla alapuolella olevaa linkkiä:
{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Ilmoitus suljettu - "{PM_SUBJECT}"

Terve {USERNAME},

Sait tämän viestin, koska ilmoitit yksityisviestin otsikolla "{PM_SUBJECT}", "{SITENAME}" -sivustolla. Ylläpitäjä tai valvoja on käsitellyt ilmoituksen. Ilmoitus on suljettu ja jos haluatte lisätietoja tapauksesta olkaa hyvä ja lähettäkää yksitysiviesti käyttäjälle nimeltä {CLOSER_NAME}.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Ilmoitus poistettu - "{PM_SUBJECT}"

Terve {USERNAME},

Sait tämän viestin, koska ilmoittamasi yksityisviesti otsikolla "{PM_SUBJECT}", "{SITENAME}"-sivustolla on poistettu ylläpitäjän tai valvojan toimesta.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Viesti on hyväksytty - {POST_SUBJECT}

Terve {USERNAME},

Sait tämän sähköpostin, koska viestisi "{POST_SUBJECT}", {SITENAME} sivustolla on hyväksytty valvojan tai ylläpitäjän toimesta.

Mikäli haluat nähdä viestin. Klikkaa tätä linkkiä:
{U_VIEW_POST}

Jos haluat nähdä viestiketjun. klikkaa tätä linkkiä:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Viesti on hylätty - {POST_SUBJECT}

Terve {USERNAME},

Sait tämän sähköpostin, koska viestisi "{POST_SUBJECT}", {SITENAME} sivustossa on hylätty valvojan tai ylläpitäjän toimesta.

Hylkäämiselle annettiin seuraava syy:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Olet saanut uuden yksityisviestin

Terve {USERNAME},

Olet saanut uuden yksityisviestin käyttäjältä {AUTHOR_NAME}, {SITENAME} sivustolla. 
Viestin otsikko.

{SUBJECT}

Voit katsoa viestin klikkaamalla alapuolella olevaa linkkiä:

{U_VIEW_MESSAGE}

Olet pyytänyt ilmoitusta uusista yksityisviesteistä. Muistathan, että voit myös estää viestien ilmoittamisen muuttamalla asetusta omassa profiilissasi.

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
Terve {TO_USERNAME},

Seuraavan viestin on lähettänyt {FROM_USERNAME}, {SITENAME} sivustolta. Mikäli tämä viesti on roskapostia, tai sisältää loukkaavaa materiaalia. Ota yhteys sivuston ylläpitäjään lähettämällä sähköpostia osoitteeseen:

{BOARD_EMAIL}

Liitä mukaan koko tämä viesti (myös header tiedot). Huomaa, että vastausosoitteeksi on laitettu lähettäjän {FROM_USERNAME} osoite.

Sinulle lähetetty viesti
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Terve {TO_USERNAME},

Seuraavan viestin on lähettänyt {FROM_USERNAME}, {SITENAME} sivustolta. Mikäli tämä viesti on roskapostia, tai sisältää loukkaavaa materiaalia. Ota yhteys sivuston ylläpitäjään lähettämällä sähköpostia osoitteeseen:

{BOARD_EMAIL}

Liitä mukaan koko tämä viesti (myös header tiedot). Huomaa, että vastausosoitteeksi on laitettu lähettäjän {FROM_USERNAME} osoite.

Sinulle lähetetty viesti
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Ilmoitus on suljettu - {POST_SUBJECT}

Terve {USERNAME},

Sait tämän viestin, koska ilmoittamaasi viestiä "{POST_SUBJECT}", joka sijaitsee ketjussa "{TOPIC_TITLE}" palvelimella {SITENAME}, on käsitelty valvojan tai ylläpitäjän toimesta. Ilmoitus on suljettu. Mikäli sinulla on kysyttävää, ota yhteyttä ilmoitukseen sulkijaan ({CLOSER_NAME}) yksityisviestillä.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Ilmoitus on suljettu - {POST_SUBJECT}

Terve {USERNAME},

Sait tämän viestin, koska ilmoituksesi viestistä "{POST_SUBJECT}" joka on ketjussa "{TOPIC_TITLE}", {SITENAME}-sivustolla on poistettu valvojan tai ylläpitäjän toimesta. Mikäli sinulla on kysyttävää, ota yhteyttä {CLOSER_NAME} yksityisviestillä.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Viesti on hyväksytty - {TOPIC_TITLE}

Terve {USERNAME},

Sait tämän sähköpostin, koska kirjoittamasi viesti  "{TOPIC_TITLE}", {SITENAME} sivustolla on hyväksytty valvojan tai ylläpitäjän toimesta.

Jos haluat nähdä viestisi, klikkaa alla olevaa linkkiä:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Viesti on hylätty - {TOPIC_TITLE}

Terve {USERNAME},

Sait tämän sähköpostin, koska kirjoittamasi viesti  "{TOPIC_TITLE}", {SITENAME} sivustolla on hylätty valvojan tai ylläpitäjän toimesta.

Hylkäykselle annettiin seuraava syy:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Ilmoitus vastauksesta - {TOPIC_TITLE}

Terve {USERNAME},

sait tämän ilmoituksen, koska seuraat viestiketjua, "{TOPIC_TITLE}", {SITENAME} sivustolla. Tähän ketjuun on tullut uusi vastaus edellisen käyntisi jälkeen. Voit katsoa vastaukset klikkaamalla allaolevia linkkejä. Et saa muita ilmoituksia, ennen kuin olet käynyt lukemassa tämän.

Jos haluat nähdä uusimman viestin viime käyntisi jälkeen, klikkaa allaolevaa linkkiä:
{U_NEWEST_POST}

Jos haluat nähdä koko viestiketjun, klikkaa allaolevaa linkkiä:
{U_TOPIC}

Mikäli et enää halua seurata tämän viestiketjun vastauksia, voit klikata "Lopeta seuranta" -linkkiä ketjun lopussa tai alla olevaa linkkiä:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Aktoivoi tunnuksesi uudelleen

Terve {USERNAME},

Käyttäjätunnuksesi "{SITENAME}" sivustolla on suljettu ja vaatii uudellen aktivointia. Tämä tapahtui todennäköisesti siksi, koska muokkasit profiiliasi. Aktivoidaksesi tunnukset uudelleen. Klikkaa alapuolella olevaa linkkiä:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Käyttäjätunnuksesi on suljettu

Terve {USERNAME},

Käyttäjätunnuksesi "{SITENAME}" sivustolla on suljettu. Tämä tapahtui todennäköisesti siksi, koska muokkasit profiiliasi. Sivuston ylläpitäjän täytyy aktivoida tunnukset uudelleen, ennen kuin voit kirjautua sisään. saat uuden viestin, kun tunnuksesi on aktivoitu.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Uuden salasanan aktivointi

Terve {USERNAME}

Sait tämän viestin, koska olet (Tai joku muu on yrittänyt esiintyä sinuna) pyytänyt käyttäjätunnuksellesi uutta salasanaa {SITENAME} sivustolla. Mikäli et pyytänyt uutta salasanaa. Älä välitä tästä viestistä, Mikäli tämä viesti tulee sinulle useamman kerran. Ota yhteyttä sivuston ylläpitäjiin.

Käyttääksesi uutta salasanaa. Sinun tulee aktivoida se. Klikkaa alla olevaa linkkiä aktivoidaksesi salasanan

{U_ACTIVATE}

Mikäli kaikki onnistui. Voit kirjautua sisään käyttämällä uutta salasanaasi:

Salasana: {PASSWORD}

Voit halutessasi vaihtaa tämän salasanan omissa asetuksissasi. Mikäli sinulla on kysyttävää, ota yhteyttä sivuston ylläpitäjiin.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Käyttäjätunnustesi uudelleenaktivointi "{SITENAME}" - {U_BOARD}

Keskustelufoorumin ylläpitäjä on pakottanut käyttäjätunnuksesi uudelleenaktivoitavaksi. Tunnuksesi ovat tällähetkellä suljetut.
Ole hyvä ja seuraa näitä ohjeita aktivoidaksesi tunnuksesi uudelleen.

Ole hyvä ja pidä tämä viesti tallessa. Käyttäjätunnuksesi on:

----------------------------
Käyttäjätunnus: {USERNAME}
----------------------------

Älä unohda salasanaasi, sillä se on salakirjoitettu tietokantaamme emmekä voi hakea sitä sieltä sinulle. Mikäli kuitenkin unohdat salasanasi, voit pyytää uutta käyttämällä tunnuksillasi olevaa sähköpostia.

Ole hyvä ja klikkaa alapuolella olevaa linkkiä aktivoidaksesi tunnuksesi.

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Muistutus tunnusten aktivoinnista

Terve {USERNAME},

Tämä on muistutus, että tunnuksesi "{SITENAME}" sivustolla, jotka ovat rekisteröity {REGISTER_DATE} ovat edelleen aktivoimattomat. Ole hyvä ja klikkaa alapuolella olevaa linkkiä mikäli haluat aktivoida tunnuksesi.
 
{U_ACTIVATE}

Kiitos, että rekisteröidyit "{SITENAME}" sivustolle. Odotamme osallistumistasi keskusteluihin.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Tervetuloa "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Pidä tämä viesti tallessa. Käyttäjätunnuksesi on:

----------------------------
Käyttäjätunnus: {USERNAME}
----------------------------

Älä unohda salasanaasi, sillä se on salakirjoitettu tietokantaamme emmekä voi hakea sitä sieltä sinulle. Voit pyytää uuden salasanan käyttämällä tunnuksillasi olevaa sähköpostia.

Käyttäjätunnuksesi on tällä hetkellä suljettu. Et voi käyttää sitä ennen kuin aktivoit sen vierailemalla alapuolella olevassa linkissä:

{U_ACTIVATE}


Kiitoksia rekisteröitymisestä.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Tervetuloa "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Pidä tämä viesti tallessa. Käyttäjätunnuksesi on:

----------------------------
Käyttäjätunnus: {USERNAME}
----------------------------

Älä unohda salasanaasi, sillä se on salakirjoitettu tietokantaamme emmekä voi hakea sitä sieltä sinulle. Mikäli kuitenkin unohdat salasanasi, voit pyytää uuden käyttämällä sähköpostiosoitettasi.

Kiitoksia rekisteröitymisestä.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Tervetuloa "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Pidä tämä viesti tallessa. Käyttäjätunnuksesi on:

----------------------------
Käyttäjätunnus: {USERNAME}
----------------------------

Käyttäjätunnuksesi on tällä hetkellä suljettu. Et voi käyttää sitä ennen kuin aktivoit sen vierailemalla alapuolella olevassa linkissä:

{U_ACTIVATE}

Älä unohda salasanaasi, sillä se on salakirjoitettu tietokantaamme emmekä voi hakea sitä sieltä sinulle. Mikäli kuitenkin unohdat salasanasi, voit pyytää uuden käyttämällä sähköpostiosoitettasi.

Kiitoksia rekisteröitymisestä.

{EMAIL_SIG}',
));


