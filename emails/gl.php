<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Activar conta de usuario 

Ola,

A conta a nome do usuario "{USERNAME}" foi desactivada ou creada de novo, deberías verificar os detalles deste usuario (se é preciso) e xestionalos axeitadamente.

Usa esta ligazón para ver o perfil do usuario:
{U_USER_DETAILS}

Usa esta ligazón para activar a conta:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
O seguinte é un correo-e que che enviou un administrador de "{SITENAME}". Se esta mensaxe é spam, contén insultos ou outros comentarios que che parecen ofensivos, por favor contacta co xestor do sitio do taboleiro no seguinte enderezo:

{CONTACT_EMAIL}

Inclúe este correo-e completo (incluídas especialmente as cabeceiras).

A mensaxe que che enviaron é a seguinte:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Conta activada

Ola {USERNAME},

A túa conta de "{SITENAME}" ven de ser activada por un administrador, agora xa podes iniciar unha sesión.

O teu contrasinal foi gardado de xeito seguro no noso banco de datos e non pode ser recuperado. No caso de o esqueceres, poderás reinicialo empregando o enderezo de correo-e asociado coa túa conta.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Benvido a "{SITENAME}"

{WELCOME_MSG}

Porfavor garda este correo para a túa lembranza. A información da túa conta é a seguinte:

----------------------------
Nome de usuario: {USERNAME}

Enderezo URL do taboleiro: {U_BOARD}
----------------------------

A túa conta está actualmente inactiva e precisa ser aprobada por un administrador do taboleiro antes de que poidas acceder. Recibirás outro correo-e cando esto ocorra.

O teu contrasinal foi gardado de xeito seguro no noso banco da datos e non pode ser recuperado. Con todo, se o esqueceres, poderás reinicialo empregando o enderezo de correo-e asociado coa túa conta.

Grazas por te rexistrares.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Benvido a "{SITENAME}"

{WELCOME_MSG}

Dacordo co COPPA a túa conta está actualmente inactiva.

Por favor imprime esta mensaxe e dálla a asinar e datar ao teu pai ou titor. Logo envíaa por fax a:

{FAX_INFO}

ou por correo a:

{MAIL_INFO}

---------------------cortar por aquí--------------------------------
Autorización para participar en "{SITENAME}" - {U_BOARD}

Nome de usuario: {USERNAME}
Correo-e:{EMAIL_ADDRESS}

COMPROBEI A INFORMACIÓN PROPORCIONADA POLO MEU FILLO/TUTELADO E POR ESTE MEDIO AUTORIZO A "{SITENAME}" A GARDAR ESTA INFORMACIÓN.
ENTENDO QUE ESTA INFORMACIÓN PODE SER MUDADA EN CALQUER MOMENTO POR MEDIO DUN CONTRASINAL.
ENTENDO QUE PODO SOLICITAR A ELIMINACIÓN DESTA INFORMACIÓN EN CALQUERA MOMENTO DE "{SITENAME}".


Pai ou titor
(escribe o teu nome aquí): _____________________

(asina aquí): __________________

Data: _______________

---------------------cortar por aquí--------------------------------

Unha vez que o administrador reciba o formulario anterior vía fax ou correo ordinario a túa conta será activada.

O teu contrasinal foi gardado de xeito seguro no noso banco da datos e non pode ser recuperado. Con todo, se o esqueceres, poderás reinicialo empregando o enderezo de correo-e asociado coa túa conta.

Grazas por te rexistrares.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Benvido a "{SITENAME}"

{WELCOME_MSG}

Dacordo co COPPA a túa conta está actualmente inactiva.

Por favor, imprime esta mensaxe e dálla a asinar e datar ao teu pai ou titor. Logo envíaa por fax a:

{FAX_INFO}

ou por correo a:

{MAIL_INFO}

---------------------cortar por aquí--------------------------------
Autorización para participar en "{SITENAME}" - {U_BOARD}

Nome de usuario: {USERNAME}
Correo-e:{EMAIL_ADDRESS}

COMPROBEI A INFORMACIÓN PROPORCIONADA POLO MEU FILLO/TUTELADO E POR ESTE MEDIO AUTORIZO A "{SITENAME}" A GARDAR ESTA INFORMACIÓN.
ENTENDO QUE ESTA INFORMACIÓN PODE SER MUDADA EN CALQUERA MOMENTO POR MEDIO DUN CONTRASINAL.
ENTENDO QUE PODO SOLICITAR A ELIMINACIÓN DESTA INFORMACIÓN EN CALQUERA MOMENTO DE "{SITENAME}".


Pai ou titor:
(escribe o teu nome aquí): _____________________

(asina aquí): __________________

Data: _______________

---------------------cortar por aquí--------------------------------


Unha vez que o administrador reciba o formulario anterior vía fax ou correo ordinario a túa conta será activada.

O teu contrasinal foi gardado de xeito seguro no noso banco da datos e non pode ser recuperado. Con todo, se o esqueceres, poderás reinicialo empregando o enderezo de correo-e asociado coa túa conta.

Grazas por te rexistrares.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - Correo-e a un amigo

Ola {TO_USERNAME},

Este correo-e foi enviado desde "{SITENAME}" por {FROM_USERNAME} pensando que podías ter interés no seguinte tema:

{TOPIC_NAME}

Podes atopalo en:

{U_TOPIC}

Unha mensaxe desde {FROM_USERNAME} pode que sexa tamén incluída debaixo. Por favor ten en conta que esta mensaxe non foi enviada ou aprobada polos administradores do taboleiro. Se desexas presentar unha queixa por recibires este correo-e contacta co administrador en {BOARD_CONTACT}. Por favor cita as cabeceiras da mensaxe cando contactes con este enderezo.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Notificación de mensaxe publicada no foro – "{FORUM_NAME}"

Ola {USERNAME},

Estás a recibir esta notificación por estares subscrito ao foro, "{FORUM_NAME}" en "{SITENAME}". Este foro recibiu unha nova resposta ao tema "{TOPIC_TITLE}" dende a túa última visita. Podes empregar a seguinte ligazón para veres a última resposta sen ler. Non se che enviarán máis notificacións até visitares o tema.

{U_NEWEST_POST}

Se queres ver o tema, preme na seguinte ligazón:
{U_TOPIC}

Se queres ver o foro, preme na seguinte ligazón:
{U_FORUM}

Se non desexas seguir subscrito a este foro podes premer na ligazón "Deixar de seguir este foro" que se atopa na parte superior do foro ou premendo na seguinte ligazón:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Foches engadido a este grupo de usuarios

Noraboa,

Foches engadido ao grupo "{GROUP_NAME}" de "{SITENAME}".
Esta acción foi efectuadaa polo xefe do grupo ou polo administrador do sitio. Contacta con eles para obter máis información.

Podes ver a información dos teus grupos aquí:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} A túa petición foi aprobada

Noraboa,

A túa petición para uníreste ao grupo "{GROUP_NAME}" de "{SITENAME}" foi aprobada.
Preme na seguinte ligazón para veres a túa pertenza ao grupo.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Foi realizada unha petición para unirse ao teu grupo.

Prezado {USERNAME},

O usuario "{REQUEST_USERNAME}" solicitou unirse ao grupo "{GROUP_NAME}" que ti moderas en "{SITENAME}".
Para aprobar ou rexeitar esta petición, por favor, visita a seguinte ligazón:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB instalado

Parabéns,

Instalaches correctamente o phpBB no teu servidor.

Este correo-e contén información importante verbo da túa instalación e deberás gardala para futuras referencias. O teu contrasinal foi gardado de xeito seguro no noso banco da datos e non pode ser recuperado. Con todo, se o esqueceres, poderás reinicialo empregando o enderezo de correo-e asociado coa túa conta.

----------------------------
Nome de usuario: {USERNAME}

URL do Taboleiro: {U_BOARD}
----------------------------

Podes atopar información útil sobre a túa instalación do phpBB no cartafol de documentos da mesma e na páxina de soporte de phpBB.com - http://www.phpbb.com/support/

Co fin de manter o taboleiro seguro e protexido, é especialmente recomendable que o manteñas actualizado cos lanzamentos de software que poderás conseguir doadamente subscribíndote á lista de correo do phpBB.com localizada no URL de enriba.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Notificación de novo tema – "{FORUM_NAME}"

Ola {USERNAME},

Estás a recibir esta notificación porque estás subscrito ao foro "{FORUM_NAME}" en "{SITENAME}". Este foro recibiu un novo tema dende a túa última visita, "{TOPIC_TITLE}". Podes usar a seguinte ligazón para veres o foro. Non se che enviarán máis notificacións ata que o visites.

{U_FORUM}

Se non desexas seguir subscrito a este foro podes premer na ligazón "Deixar de seguir o foro" que se atopa na parte superior do foro, ou ben premendo na seguinte:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Informe pechado - "{PM_SUBJECT}"

Ola {USERNAME},

Estás a recibir esta notificación debido a que o informe que enviaches con respecto á mensaxe privada "{PM_SUBJECT}" en "{SITENAME}" foi atendida por un moderador ou administrador. O informe está pechado agora. Se tiveres máis preguntas, por favor, contacta con {CLOSER_NAME} enviándolle unha mensaxe privada.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Informe eliminado - "{PM_SUBJECT}"

Ola {USERNAME},

Estás a recibir esta notificación debido a que o informe que enviaches con respecto á mensaxe privada "{PM_SUBJECT}" en "{SITENAME}" foi eliminado por un moderador ou administrador.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Mensaxe aprobada – "POST_SUBJECT}"

Ola {USERNAME},

Estás a recibir esta notificación porque a túa mensaxe "{POST_SUBJECT}" en "{SITENAME}" foi aprobado por un moderador ou administrador.

Se queres ver a mensaxe, preme na seguinte ligazón:
{U_VIEW_POST}

Se queres ver o tema, preme nesta outra:
{U_VIEW_TOPIC}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Mensaxe non aprobado – "{POST_SUBJECT}"           

Ola {USERNAME},

Estás a recibir esta notificación porque a túa mensaxe "{POST_SUBJECT}" en "{SITENAME}" non foi aprobada por un moderador ou administrador.

A razón indicada para a desaprobación foi a seguinte:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Recibida unha nova mensaxe privada

Ola {USERNAME},

Recibiches unha nova mensaxe privada de "{AUTHOR_NAME}" na túa conta en "{SITENAME}" co seguinte asunto:

{SUBJECT}

Podes ver a túa nova mensaxe premendo na seguinte ligazón:

{U_VIEW_MESSAGE}

Solicitaches ser avisado destos eventos, pero lembra que sempre podes escoller non seres notificado de novas mensaxes seleccionando as opcións axeitadas no teu perfil.

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
Ola {TO_USERNAME},

O seguinte correo-e foiche enviado por {FROM_USERNAME} a través da túa conta en "{SITENAME}". Se esta mensaxe é spam, contén insultos ou outros comentarios ofensivos, por favor, contacta co xestor do sitio do taboleiro no seguinte enderezo:

{BOARD_CONTACT}

Inclúe este correo-e completo (especialmente as cabeceiras). Ten en conta que  o enderezo de resposta a este correo-e é o de {FROM_USERNAME}.

A mensaxe que che foi enviada é a seguinte:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Ola {TO_USERNAME},

A seguinte mensaxe foiche enviada por {FROM_USERNAME} a través da túa conta en "{SITENAME}". Se esta mensaxe é spam, contén insultos ou outros comentarios que consideres ofensivos, por favor, contacta co xestor do sitio do taboleiro no seguinte enderezo:

{BOARD_CONTACT}

Inclúe esta mensaxe completa. Ten en conta que o enderezo do remitente foi establecido para a conta IM do taboleiro.

A mensaxe que che enviaron é a seguinte
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Informe pechado – "{POST_SUBJECT}"

Ola {USERNAME},

Estás a recibir esta notificación porque o informe que enviaches verbo da mensaxe "{POST_SUBJECT}" de "{TOPIC_TITLE}" en "{SITENAME}" foi comprobado por un moderador ou administrador. O informe foi posteriormente pechado. Se tes máis preguntas contacta con {CLOSER_NAME} cunha mensaxe persoal.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Informe eliminado – "{POST_SUBJECT}"

Ola {USERNAME},

Estás a recibir esta notificación porque o informe que anviaches verbo da mensaxe "{POST_SUBJECT}" de "{TOPIC_TITLE}" en "{SITENAME}" foi suprimido por un moderador ou administrador.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tema aprobado – "{TOPIC_TITLE}"

Ola {USERNAME},

Estás a recibir esta notificación porque o teu tema "{TOPIC_TITLE}" proposto en "{SITENAME}" foi aprobado por un moderador ou un administrador.

Se queres ver o tema, preme na seguinte ligazón:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tema non aprobado – "{TOPIC_TITLE}"

Ola {USERNAME},

Estás a recibir esta notificación porque o teu tema "{TOPIC_TITLE}" proposto en "{SITENAME}" non foi aprobado por un moderador ou administrador.

A razón indicada para esta desaprobación é a seguinte:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Notificación de resposta ao tema – "{TOPIC_TITLE}"

Ola {USERNAME},

Estás a recibir esta notificación porque estás subscrito ao tema "{TOPIC_TITLE}" en "{SITENAME}". Este tema recibiu unha resposta desde a túa última visita. Podes usar a seguinte ligazón para ver a resposta enviada. Non se che enviarán máis notificacións ata que visites o tema.

Se queres ver as últimos mensaxes publicadas dende a túa última visita, preme na seguinte ligazón:
{U_NEWEST_POST}

Se queres ver o tema, preme na seguinte ligazón:
{U_TOPIC}

Se queres ver o foro, preme na seguinte ligazón:
{U_FORUM}

Se non desexas seguir subscrito a este tema podes premer na ligazón "Deixar de seguir este tema" que se atopa no fondo do tema indicado enriba, ou premendo na seguinte ligazón:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reactivar a túa conta

Ola {USERNAME},

A túa conta en "{SITENAME}" foi desactivada, posiblemente debido a trocos feitos no teu perfil. Para reactivar a túa conta debes premer na ligazón de embaixo:

{U_ACTIVATE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} A túa conta foi desactivada

Ola {USERNAME},

A túa conta en "{SITENAME}" foi desactivada, probabelmente por cambios realizados no teu perfil. Para poder iniciar sesión nos foros, os/as administradores/as deben activar a conta. Recibirás outro correo de notificación cando isto ocorra.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Activación de novo contrasinal

Ola {USERNAME}

Estás a recibir este correo electrónico debido a que ti (ou alguén facéndose pasar por ti) pediu que se enviase un novo contrasinal para a túa conta en "{SITENAME}. Se non solicitaches este correo, ignórao. Se segues a recibilo, por favor contacta co administrador dos foros.

Para usar o novo contrasinal debes activalo. Para facelo usa a seguinte ligazón.

{U_ACTIVATE}

Se todo vai ben poderás entrar usando o seguinte contrasinal:

Contrasinal: {PASSWORD}

Obviamente poderás mudar este contrasinal a través da páxina do teu perfil. Se tes algún problema por favor ponte en contacto co administrador dos foros.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reactivar a túa conta en "{SITENAME}"

Un administrador do taboleiro requeriu a reactivación da túa conta, polo que agora mesmo a mesma está inactiva.
Porfavor, segue os chanzos indicados de seguido para reactivar a túa conta.

Por favor conserva este correo electrónico para a túa lembranza. Os datos da túa conta son os seguintes:

----------------------------
Nome de usuario: {USERNAME}
----------------------------

O teu contrasinal foi gardado de xeito seguro no noso banco da datos e non pode ser recuperado. Con todo, se o esqueceres, poderás reinicialo empregando o enderezo de correo-e asociado coa túa conta.

Por favor, visita a seguinte ligazón para reactivar a túa conta:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Lembranza de conta inactiva

Ola {USERNAME},

Esta notificación é para lembrarche que a túa conta de usuario en "{SITENAME}", creada o {REGISTER_DATE}, aínda está sen activar. Se quixeres activar esta conta, por favor, visita a seguinte ligazón:

{U_ACTIVATE}

Moitas grazas por te rexistrares en "{SITENAME}", agardamos verte axiña polos foros.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Benvido/a a "{SITENAME}"

{WELCOME_MSG}

Por favor conserva este correo electrónico para a túa lembranza. Os datos da túa conta son os seguintes:

----------------------------
Nome de usuario/a: {USERNAME}
----------------------------

O teu contrasinal foi gardado de xeito seguro no noso banco da datos e non pode ser recuperado. Con todo, se o esqueceres, poderás reinicialo empregando o enderezo de correo-e asociado coa túa conta.

Por favor, visita a seguinte ligazón para activares a túa conta:

{U_ACTIVATE}


Moitas grazas por te rexistrares.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Benvido/a a "{SITENAME}"

{WELCOME_MSG}

Por favor conserva este correo electrónico para a túa lembranza. Os datos da túa conta son os seguintes:

----------------------------
Nome de usuario/a: {USERNAME}
{PASSWORD_EXTRA_LINE}
Enderezo URL do taboleiro: {U_BOARD}
----------------------------

O teu contrasinal foi gardado de xeito seguro no noso banco da datos e non pode ser recuperado. Con todo, se o esqueceres, poderás reinicialo empregando o enderezo de correo-e asociado coa túa conta.

Moitas grazas por te rexistrares.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Benvido/a a "{SITENAME}"

{WELCOME_MSG}

Por favor conserva este correo electrónico para a túa lembranza. Os datos da túa conta son os seguintes:

----------------------------
Nome de usuario/a: {USERNAME}
{PASSWORD_EXTRA_LINE}
Enderezo URL do taboleiro: {U_BOARD}
----------------------------

Por favor, visita a seguinte ligazón para activares a túa conta:

{U_ACTIVATE}

O teu contrasinal foi gardado de xeito seguro no noso banco da datos e non pode ser recuperado. Con todo, se o esqueceres, poderás reinicialo empregando o enderezo de correo-e asociado coa túa conta.

Moitas grazas por te rexistrares.

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
