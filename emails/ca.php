<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Activació d\'un compte d\'usuari

Hola,

S\'ha desactivat o creat el compte de "{USERNAME}", cal que reviseu (si s\'escau) la informació d\'aquest usuari i el compte gestioneu adequadament.

Utilitzeu aquest enllaç per visualitzar el perfil de l\'usuari:
{U_USER_DETAILS}

Utilitzeu aquest enllaç per activar el compte:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
L\'administrador de "{SITENAME}" us ha enviat el correu electrònic següent. Si es tracta de correu brossa, conté insults o comentaris ofensius poseu-vos en contacte amb l\'administrador del fòrum a l\'adreça electrònica següent:

{CONTACT_EMAIL}

Incloeu aquest correu electrònic complet (especialment les capçaleres).

El missatge enviat es mostra a continuació
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Compte activat

Hola {USERNAME},

Un administrador ha activat el vostre compte a "{SITENAME}", ara ja podeu iniciar la sessió.

La vostra contrasenya està emmagatzemada de forma segura a la base de dades i no podeu recuperar el text desencriptat. Si l\'oblideu, podeu reiniciar-la utilitzant el correu electrònic associat al vostre compte.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Benvingut a "{SITENAME}"

{WELCOME_MSG}

Si us plau, guardeu aquest correu electrònic per a la vostra informació. Les dades del vostre compte són les següents:

----------------------------
Nom d\'usuari: {USERNAME}

URL del fòrum: {U_BOARD}
----------------------------

Actualment el vostre compte és inactiu i cal que l\'administrador del fòrum l\'activi abans que pugueu iniciar la sessió. Se us enviarà una altra notificació quan l’hagin activat.

La vostra contrasenya està emmagatzemada de forma segura a la base de dades i no podeu recuperar el text desencriptat. Si l\'oblideu, podeu reiniciar-la utilitzant el correu electrònic associat al vostre compte.

Gràcies per registrar-vos.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Benvingut a "{SITENAME}"

{WELCOME_MSG}

En compliment de la normativa COPPA, actualment el vostre compte és inactiu.

Si us plau, imprimiu aquest missatge i feu que algun dels vostres pares o el vostre tutor el signi i el dati. Llavors envieu-lo per fax a:

{FAX_INFO}

o envieu-lo per correu tradicional a:

{MAIL_INFO}

------------------------------ TALLEU PER AQUÍ ------------------------------
Permis per participar a "{SITENAME}" - {U_BOARD}

Nom d\'usuari: {USERNAME}
Correu electrònic: {EMAIL_ADDRESS}

HE REVISAT LA INFORMACIÓ PROPORCIONADA PEL MEU FILL/A I PER LA PRESENT DONO EL MEU PERMÍS A "{SITENAME}" PER QUE EMMAGATZEMI AQUESTA INFORMACIÓ. 
ENTENC QUE AQUESTA INFORMACIÓ ES POT CANVIAR EN QUALSEVOL MOMENT INTRODUÏNT UNA CONTRASENYA. 
ENTENC QUE TINC DRET A DEMANAR QUE AQUESTA INFORMACIÓ S\'ELIMINI DE "{SITENAME}" EN QUALSEVOL MOMENT.


Pare, mare o tutor 
(nom): _____________________

(signatura): __________________ 

Data: _______________

------------------------------ TALLEU PER AQUÍ ------------------------------


Un cop l\'administrador hagi rebut el formulari anterior per fax o per correu tradicional, el vostre compte serà activat.

La vostra contrasenya està emmagatzemada de forma segura a la base de dades i no podeu recuperar el text desencriptat. Si l\'oblideu, podeu reiniciar-la utilitzant el correu electrònic associat al vostre compte.

Gràcies per registrar-vos.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Benvingut a "{SITENAME}"

{WELCOME_MSG}

En compliment de la normativa COPPA, actualment el vostre compte és inactiu.

Si us plau, imprimiu aquest missatge i feu que algun dels vostres pares o el vostre tutor el signi i el dati. Llavors envieu-lo per fax a:

{FAX_INFO}

o envieu-lo per correu tradicional a:

{MAIL_INFO}

------------------------------ TALLEU PER AQUÍ ------------------------------
Permis per participar a "{SITENAME}" - {U_BOARD}

Nom d\'usuari: {USERNAME}
Correu electrònic: {EMAIL_ADDRESS}

HE REVISAT LA INFORMACIÓ PROPORCIONADA PEL MEU FILL/A I PER LA PRESENT DONO EL MEU PERMÍS A "{SITENAME}" PER QUE EMMAGATZEMI AQUESTA INFORMACIÓ. 
ENTENC QUE AQUESTA INFORMACIÓ ES POT CANVIAR EN QUALSEVOL MOMENT INTRODUÏNT UNA CONTRASENYA. 
ENTENC QUE TINC DRET A DEMANAR QUE AQUESTA INFORMACIÓ S\'ELIMINI DE "{SITENAME}" EN QUALSEVOL MOMENT.


Pare, mare o tutor 
(nom): _____________________

(signatura): __________________ 

Data: _______________

------------------------------ TALLEU PER AQUÍ ------------------------------


Un cop l\'administrador hagi rebut el formulari anterior per fax o per correu tradicional, el vostre compte serà activat.

La vostra contrasenya està emmagatzemada de forma segura a la base de dades i no podeu recuperar el text desencriptat. Si l\'oblideu, podeu reiniciar-la utilitzant el correu electrònic associat al vostre compte.

Gràcies per registrar-vos.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - Enviat per correu electrònic a un amic

Hola {TO_USERNAME},

{FROM_USERNAME} us ha enviat aquest correu electrònic des de "{SITENAME}" perquè creu que podeu estar interessat en el tema següent:

{TOPIC_NAME}

Podeu trobar-lo a:

{U_TOPIC}

És possible que a continuació aparegui un missatge de {FROM_USERNAME}. Tingueu en compte que aquest missatge no ha estat vist ni aprovat pels administradors del fòrum. Si voleu queixar-vos per haver rebut aquest correu electrònic poseu-vos en contacte amb l\'administrador del fòrum a {BOARD_CONTACT} incloent-hi les capcaleres del missatge.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Notificació d\'entrada nova en el fòrum "{FORUM_NAME}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè esteu subscrits al fòrum, "{FORUM_NAME}" a "{SITENAME}". S\'ha publicat un resposta nova al tema "{TOPIC_TITLE}" d\'aquest fòrum des de la vostra darrera visita. Podeu utilitzar l\'enllaç següent per veure la darrera resposta no llegida, no rebreu més notificacions fins que visiteu el fòrum.

{U_NEWEST_POST}

Si voleu veure el tema, feu clic a l\'enllaç següent:
{U_TOPIC}

Si voleu veure el fòrum, feu clic a l\'enllaç següent:
{U_FORUM}

Si ja no voleu estar subscrit a aquest fòrum podeu fer clic a l\'enllaç "Cancel·la la subscripció a aquest fòrum" ubicat a la part inferior del fòrum indicat, o bé fent clic a l\'enllaç següent:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Se us ha afegit a aquest grup d\'usuaris

Felicitats,

Se us ha afegit al grup "{GROUP_NAME}" de "{SITENAME}".
Ho ha fet un líder del grup o l\'administrador del fòrum, poseu-vos-hi en contacte per obtenir més informació.

Podeu visualitzar la informació dels vostres grups aquí:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} S\'ha aprovat la vostra sol·licitud

Felicitats,

S\'ha aprovat la vostra sol·licitud per afiliar-vos al grup "{GROUP_NAME}" de "{SITENAME}".
Feu clic a l\'enllaç següent per visualitzar la vostra afiliació al grup.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} S\'ha fet una sol·licitud per afiliar-se al vostre grup

Benvolgut {USERNAME},

L’usuari "{REQUEST_USERNAME}" ha sol·licitat afiliar-se al grup "{GROUP_NAME}" que modereu a "{SITENAME}".
Per aprovar o rebutjar aquesta sol·licitud d\'afiliació al grup visiteu l\'enllaç següent:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} S\'ha instal·lat el phpBB

Felicitats,

Heu instal·lat correctament el phpBB en el vostre servidor.

Aquest correu electrònic conté informació important sobre la instal·lació i és recomanable que el conserveu per a futures referències. La vostra contrasenya està emmagatzemada de forma segura a la base de dades i no podeu recuperar el text desencriptat. Si l\'oblideu, podeu reiniciar-la utilitzant el correu electrònic associat al vostre compte.

----------------------------
Nom d\'usuari: {USERNAME}

URL del fòrum: {U_BOARD}
----------------------------

Podeu trobar informació útil sobre el phpBB al directori "docs" i a la pàgina d\'assistència de phpBB.com - http://www.phpbb.com/support/

Per mantenir els fòrums segurs és molt recomanable que mantingueu el fòrum actualitzat amb les versions més recents. Per a la vostra comoditat, hi ha una llista de correu disponible a la pàgina referenciada a sobre.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Notificació de tema nou - "{FORUM_NAME}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè esteu subscrits al fòrum, "{FORUM_NAME}" a "{SITENAME}". S\'ha publicat un tema nou en aquest fòrum des de la vostra darrera visita. Podeu utilitzar l\'enllaç següent per veure el fòrum, no rebreu més notificacions fins que visiteu el fòrum.

{U_FORUM}

Si ja no voleu estar subscrit a aquest fòrum podeu fer clic a l\'enllaç "Cancel·la la subscripció a aquest fòrum" ubicat a la part inferior del fòrum indicat, o bé fent clic a l\'enllaç següent:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Informe tancat - "{PM_SUBJECT}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè l\'informe que heu fet del missatge privat "{PM_SUBJECT}" a "{SITENAME}" ha estat gestionat per un moderador o un administrador. L\'informe ja està tancat. Si teniu més preguntes poseu-vos en contacte amb {CLOSER_NAME} per missate privat.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Informe eliminat - "{PM_SUBJECT}"

Hola {USERNAME},

You are receiving this notification because the report you filed regarding the private message "{PM_SUBJECT}" at "{SITENAME}" was deleted by a moderator or administrator.
Heu rebut aquesta notificació perquè l\'informe que heu fet de l\'entrada "{PM_SUBJECT}" a "{SITENAME}" ha estat eliminat per un moderador o un administrador.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Entrada aprovada - "{POST_SUBJECT}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè la vostra entrada "{POST_SUBJECT}" a "{SITENAME}" ha estat aprovada per un moderador o un administrador.

Si voleu visualitzar l\'entrada, feu clic a l\'enllaç següent:
{U_VIEW_POST}

Si voleu visualitzar el tema, feu clic a l\'enllaç següent:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Entrada rebutjada - "{POST_SUBJECT}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè la vostra entrada "{POST_SUBJECT}" a "{SITENAME}" ha estat rebutjada per un moderador o un administrador.

S\'ha donat la següent raó per al rebuig:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Ha arribat un missatge privat nou

Hola {USERNAME},

Heu rebut un missatge privat nou de "{AUTHOR_NAME}" al vostre compte a "{SITENAME}" amb l\'assumpte següent:

{SUBJECT}

Podeu visualitzar el missatge nou fent clic a l\'enllaç següent:

{U_VIEW_MESSAGE}

Heu sol·licitat rebre notificacions quan arribin missatges privats nous, recordeu que podeu triar no rebre aquestes notificacions canviant l\'opció adequada del vostre perfil.

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
Hola {TO_USERNAME},

{FROM_USERNAME} us ha enviat el correu electrònic següent a través del vostre compte a "{SITENAME}". Si es tracta de correu brossa, conté insults o comentaris ofensius poseu-vos en contacte amb l\'administrador del fòrum a l\'adreça electrònica següent:

{BOARD_CONTACT}

Incloeu aquest correu electrònic complet (especialment les capçaleres). Tingueu en compte que l\'adreça de resposta utilitzada per aquest correu electrònic és la de {FROM_USERNAME}.

El missatge enviat es mostra a continuació
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Hola {TO_USERNAME},

{FROM_USERNAME} us ha enviat el missatge següent a través del vostre compte a "{SITENAME}". Si es tracta de correu brossa, conté insults o comentaris ofensius poseu-vos en contacte amb l\'administrador del fòrum a l\'adreça electrònica següent:

{BOARD_CONTACT}

Incloeu aquest missatge complet. Tingueu en compte que l\'adreça d\'enviament utilitzada és la del compte del fòrum per a missatgeria instantània.

El missatge enviat es mostra a continuació
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Informe tancat - "{POST_SUBJECT}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè l\'informe que heu fet de l\'entrada "{POST_SUBJECT}" al tema "{TOPIC_TITLE}" de "{SITENAME}" ha estat gestionat per un moderador o un administrador. Posteriorment s\'ha tancat l\'informe. Si teniu més preguntes poseu-vos en contacte amb {CLOSER_NAME} per missate privat.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Informe eliminat - "{POST_SUBJECT}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè l\'informe que heu fet de l\'entrada "{POST_SUBJECT}" al tema "{TOPIC_TITLE}" de "{SITENAME}" ha estat eliminat per un moderador o un administrador.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tema aprovat - "{TOPIC_TITLE}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè el vostre tema "{TOPIC_TITLE}" a "{SITENAME}" ha estat aprovat per un moderador o un administrador.

Si voleu visualitzar el tema, feu clic a l\'enllaç següent:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tema rebutjat - "{TOPIC_TITLE}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè el vostre tema "{TOPIC_TITLE}" a "{SITENAME}" ha estat rebutjat per un moderador o un administrador.

S\'ha donat la següent raó per al rebuig:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Notificació de respostes al tema "{TOPIC_TITLE}"

Hola {USERNAME},

Heu rebut aquesta notificació perquè esteu subscrits al tema, "{TOPIC_TITLE}" a "{SITENAME}". S\'ha publicat una resposta en aquest tema des de la vostra darrera visita. Podeu utilitzar l\'enllaç següent per veure les respostes que s\'han fet, no rebreu més notificacions fins que visiteu el tema.

Si voleu veure les entrades publicades des de la vostra darrera visita, feu clic al l\'enllaç següent:
{U_NEWEST_POST}

Si voleu veure el tema, feu clic al l\'enllaç següent:
{U_TOPIC}

Si voleu veure el fòrum, feu clic al l\'enllaç següent:
{U_FORUM}

Si ja no voleu estar subscrit a aquest tema podeu fer clic a l\'enllaç "Cancel·la la subscripció a aquest tema" ubicat a la part inferior del tema indicat, o bé fent clic a l\'enllaç següent:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reactiveu el vostre compte

Hola {USERNAME},

El vostre compte a "{SITENAME}" ha estat desactivat, probablement degut a canvis en el vostre perfil. Per reactivar el vostre compte heu de fer clic a l\'enllaç següent:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} El vostre compte ha estat desactivat

Hola {USERNAME},

El vostre compte a "{SITENAME}" ha estat desactivat, probablement degut a canvis en el vostre perfil. Cal que l\'administrador del fòrum l\'activi abans que pugueu tornar a iniciar la sessió. Rebreu una altra notificació quan això passi.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Activació de la contrasenya nova

Hola {USERNAME}

Heu rebut aquest correu electrònic perquè heu demanat (o algú en el vostre lloc) que se us envïi una contrasenya nova per al vostre compte a "{SITENAME}". Si no heu sol·licitat aquesta notificació, ignoreu-la. Si seguiu rebent-la poseu-vos en contacte amb l\'administrador del fòrum.

Per utilitzar la nova contrasenya cal que l\'activeu. Per fer-ho feu clic a l\'enllaç següent.

{U_ACTIVATE}

Si el procés es realitza correctament podreu iniciar la sessió utilitzant la contrasenya següent:

Contrasenya: {PASSWORD}

Obviament, podeu canviar aquesta contrasenya a la pàgina del vostre perfil. Si teniu algun problema poseu-vos en contacte amb l\'administrador del fòrum.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reactiveu el vostre compte a "{SITENAME}"

Un administrador del fòrum ha demanat la reactivació del vostre compte. Actualment el vostre compte és inactiu.
Si us plau seguiu els passos llistats per reactivar el vostre compte.

Si us plau, guardeu aquest correu electrònic per a la vostra informació. Les dades del vostre compte són les següents:

----------------------------
Nom d\'usuari: {USERNAME}
----------------------------

La vostra contrasenya està emmagatzemada de forma segura a la base de dades i no podeu recuperar el text desencriptat. Si l\'oblideu, podeu reiniciar-la utilitzant el correu electrònic associat al vostre compte.

Si us plau, visiteu l\'enllaç següent per reactivar el vostre compte:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Recordatori de compte inactiu

Hola {USERNAME},

Aquesta notificació és un recordatori de que el vostre compte a "{SITENAME}", creat el {REGISTER_DATE}, segueix inactiu. Si desitgeu activar aquest compte, visiteu l’enllaç següent:

{U_ACTIVATE}

Gràcies per registrar-vos a "{SITENAME}", esperem la vostra participació.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Benvingut a "{SITENAME}"

{WELCOME_MSG}

Si us plau, guardeu aquest correu electrònic per a la vostra informació. Les dades del vostre compte són les següents:

----------------------------
Nom d\'usuari: {USERNAME}
----------------------------

La vostra contrasenya està emmagatzemada de forma segura a la base de dades i no podeu recuperar el text desencriptat. Si l\'oblideu, podeu reiniciar-la utilitzant el correu electrònic associat al vostre compte.

Si us plau visiteu l\'enllaç següent per activar el vostre compte:

{U_ACTIVATE}


Gràcies per registrar-vos.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Benvingut a "{SITENAME}"

{WELCOME_MSG}

Si us plau, guardeu aquest correu electrònic per a la vostra informació. Les dades del vostre compte són les següents:

----------------------------
Nom d\'usuari: {USERNAME}

URL del fòrum: {U_BOARD}
----------------------------

La vostra contrasenya està emmagatzemada de forma segura a la base de dades i no podeu recuperar el text desencriptat. Si l\'oblideu, podeu reiniciar-la utilitzant el correu electrònic associat al vostre compte.

Gràcies per registrar-vos.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Benvingut a "{SITENAME}"

{WELCOME_MSG}

Si us plau, guardeu aquest correu electrònic per a la vostra informació. Les dades del vostre compte són les següents:

----------------------------
Nom d\'usuari: {USERNAME}

URL del fòrum: {U_BOARD}
----------------------------

Si us plau, visiteu l\'enllaç següent per activar el vostre compte:

{U_ACTIVATE}

La vostra contrasenya està emmagatzemada de forma segura a la base de dades i no podeu recuperar el text desencriptat. Si l\'oblideu, podeu reiniciar-la utilitzant el correu electrònic associat al vostre compte.

Gràcies per registrar-vos.

{EMAIL_SIG}',
));


