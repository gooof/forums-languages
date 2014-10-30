<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Activar cuenta de usuario.

Hola,

La cuenta de "{USERNAME}" ha sido desactivada o creada nuevamente, 
debería verificar los detalles de este usuario (si se requiere) y proceder según sea apropiado.

Siga este enlace para ver el perfil del usuario:
{U_USER_DETAILS}

Siga este enlace para activar la cuenta:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'El siguiente es un email enviado por La Administración de "{SITENAME}". 
Si este mensaje es spam, contiene comentarios abusivos o que considere ofensivos 
por favor contacte con La Administración del Sitio en esta dirección:

{CONTACT_EMAIL}

Adjunte este email completo (particularmente las cabeceras [headers]). 

Este es el mensaje enviado:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Cuenta activada

Hola {USERNAME},

Su cuenta en "{SITENAME}" ha sido activada por un Administrador, ahora puede identificarse.

Su contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvide tendrá la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a su cuenta.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenido a "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Por favor guarde este email para futuras referencias. La información de su cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}
URL del Sitio: {U_BOARD}
----------------------------

Su cuenta está actualmente inactiva y necesitará que sea aprobada por La Administración antes de que pueda identificarse. Recibirá otro email cuando esto haya ocurrido.

Su contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvide tendrá la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a su cuenta.

Gracias por registrarse.

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

In compliance with the COPPA, your account is currently inactive.

Please print this message and have your parent or guardian sign and date it. Then fax it to:

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


Once the administrator has received the above form via fax or regular mail, your account will be activated.

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Welcome to "{SITENAME}"

{WELCOME_MSG}

In compliance with the COPPA, your account is currently inactive.

Please print this message and have your parent or guardian sign and date it. Then fax it to:

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


Once the administrator has received the above form via fax or regular mail, your account will be activated.

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - Email a un amigo

Hola {TO_USERNAME},

Este email fue enviado desde "{SITENAME}" por {FROM_USERNAME} que pensó podría estar interesado en el siguiente tema:

{TOPIC_NAME}

Puede verlo en:

{U_TOPIC}

Un mensaje de {FROM_USERNAME} puede seguir debajo. 
Por favor fíjese en que este mensaje no ha sido visto o aprobado por La Administración del Sitio. 
Si quiere avisar que ha recibido este email como no-deseado (spam) por favor contacte con La Administración del Sitio en {BOARD_CONTACT}. 
Por favor subraye las cabeceras del mensaje cuando contacte con esa dirección de email.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Notificación de mensaje en el foro - "{FORUM_NAME}"

Hola {USERNAME},

Está recibiendo esta notificación porque está siguiendo el foro, "{FORUM_NAME}" en "{SITENAME}". 
Este foro tiene una nueva respuesta al tema "{TOPIC_TITLE}" desde su última visita. 
Siguiendo este enlace puede ver esa respuesta, no se enviarán más notificaciones hasta que visite ese enlace.

{U_NEWEST_POST}

Si quiere ver el tema, haga clic en el siguiente enlace:
{U_TOPIC}

Si quiere ver el foro, haga clic en el siguiente enlace:
{U_TOPIC}

Si no quiere seguir más ese foro puede hacer clic en "Cancelar suscripción al Foro" cuando esté allí, 
o bien siguiendo este enlace:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Ha ingresado en este grupo de usuarios

Felicidades,

Ha sido agregado al grupo "{GROUP_NAME}" en "{SITENAME}".
Esta acción la llevó a cabo un líder de grupo o La Administración del Sitio, contacte con ellos para más información.

Puede ver información sobre sus grupos aquí:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Se ha hecho una solicitud para ingresar en su grupo

Estimado {USERNAME},

El usuario "{REQUEST_USERNAME}" ha solicitado ingresar en el grupo "{GROUP_NAME}" que usted modera en "{SITENAME}".
Para aprobar o negar esta solicitud por favor visite el siguiente enlace:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB instalado

Felicidades,

Phpbb está instalado correctamente en su servidor.

Este correo contiene información importante acerca del foro recién instalado. La contraseña fue encriptada en la base de datos y no podrá recuperarla, sin embargo puede solicitar que se le recuerde la contraseña, y recibirá un correo como éste.

----------------------------
Username: {USERNAME}
Password: {PASSWORD}

URL del foro: {U_BOARD}
----------------------------

Información útil sobre la instalación de su foro phpBB puede ser encontrada en las carpeta docs de su instalación y en la página oficial de soporte (en inglés) phpBB.com - http://www.phpbb.com/support/

Con idea de mantener su foro a salvo y seguro, se recomienda enormemente que se mantenga al día de la última versión, lo cuál se puede hacer fácilmente suscribiéndose a la lista de correo de phpBB.com, localizable en la URL de arriba.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Notificación de nuevo tema - "{FORUM_NAME}"

Hola {USERNAME},

Está recibiendo esta notificación porque sigue el foro, "{FORUM_NAME}" de "{SITENAME}". 
Este foro tiene un nuevo tema desde su última visita, "{TOPIC_TITLE}". 
Puede usar el siguiente enlace para ver el foro. No se enviarán más notificaciones hasta que lo visite.

{U_FORUM}

Si no quiere seguir más ese foro puede hacer clic en "Cancelar suscripción al Foro" cuando esté allí, 
o bien siguiendo este enlace:

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
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Mensaje aprobado - "{POST_SUBJECT}"

Hola {USERNAME},

Está recibiendo esta notificación porque su mensaje "{POST_SUBJECT}" en "{SITENAME}" 
fue aprobado por un(a) moderador(a) o La Administración.

Si quiere ver el mensaje, haga clic en el siguiente enlace:
{U_VIEW_POST}

Si quiere ver el tema, haga clic en el siguiente enlace:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Mensaje desaprobado - "{POST_SUBJECT}"

Hola {USERNAME},

Está recibiendo esta notificación porque su mensaje "{POST_SUBJECT}" en "{SITENAME}" 
fue desaprobado por un(a) moderador(a) o La Administración.

Se dió la siguiente razón para desaprobarlo:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Tiene un nuevo mensaje privado

Hola {USERNAME},

Ha recibido un nuevo mensaje privado de "{AUTHOR_NAME}" en su cuenta de "{SITENAME}" 
con el siguiente tema:

{SUBJECT}

Puede ver su nuevo mensaje visitando el siguiente enlace:

{U_VIEW_MESSAGE}

Ha solicitado que se le notifique, recuerde que siempre puede elegir no ser notificado 
de nuevos mensajes cambiando esta opción en su perfil.

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
	'email/profile_send_email.txt' 		=> 'Hola {TO_USERNAME},

El siguiente es un email que le envía {FROM_USERNAME} mediante su cuenta en "{SITENAME}". 
Si este email es spam, contiene comentarios abusivos o que considere ofensivos 
por favor contacte con La Administración del Sitio en esta dirección:

{BOARD_CONTACT}

Adjunte este email completo (particularmente las cabeceras [headers]). Por favor asegúrese de que la dirección de respuesta 
a este email es la de {FROM_USERNAME}.

El mensaje enviado es el siguiente :
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Hola {TO_USERNAME},

El siguiente es un mensaje que le envía {FROM_USERNAME} mediante su cuenta en "{SITENAME}". 
Si este mensaje es spam, contiene comentarios abusivos o que considere ofensivos 
por favor contacte con La Administración del Sitio en esta dirección:

{BOARD_CONTACT}

Adjunte este mensaje completo. Por favor fíjese en que la dirección del remitente es la de la cuenta de IM.

El siguiente es el mensaje enviado:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Aviso cerrado - "{POST_SUBJECT}"

Hola {USERNAME},

Está recibiendo esta notificación porque el aviso que envió sobre el mensaje "{POST_SUBJECT}" 
en "{TOPIC_TITLE}" de "{SITENAME}" fue revisado por un(a) moderador(a) o por La Administración. 
El aviso fue posteriormente cerrado. Si tiene alguna duda contacte con {CLOSER_NAME} mediante un mensaje personal.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Aviso borrado - "{POST_SUBJECT}"

Hola {USERNAME},

Está recibiendo esta notificación porque el aviso que envió por el mensaje "{POST_SUBJECT}" 
en "{TOPIC_TITLE}" de "{SITENAME}" fue borrado por un moderador o por La Administración. 


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tema aprobado - "{TOPIC_TITLE}"

Hola {USERNAME},

Está recibiendo esta notificación porque su tema "{TOPIC_TITLE}" en "{SITENAME}" 
fue aprobado por un(a) moderador(a) o por La Administración. 

Si quiere ver el tema, visite el siguiente enlace:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tema no aprobado - "{TOPIC_TITLE}"

Hola {USERNAME},

Está recibiendo esta notificación porque su tema "{TOPIC_TITLE}" en "{SITENAME}" 
no fue aprobado por un(a) moderador(a) o por La Administración del Sitio.

No fue aprobado por esta razón:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because you are watching the topic "{TOPIC_TITLE}" at "{SITENAME}". This topic has received a reply<!-- IF AUTHOR_NAME !== '' --> by {AUTHOR_NAME}<!-- ENDIF --> since your last visit. No more notifications will be sent until you visit the topic.

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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reactivar su cuenta

Hola {USERNAME},

Su cuenta en "{SITENAME}" ha sido desactivada, probablemente debido a cambios hechos en su perfil. 
Para reactivar su cuenta tiene que hacer clic en el enlace siguiente:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Su cuenta ha sido desactivada

Hola {USERNAME},

Su cuenta en "{SITENAME}" ha sido desactivada, probablemente debido a cambios hechos en su perfil. 
La Administración del Sitio deberá activarla antes de que pueda identificarse de nuevo. 
Recibirá otra notificación cuando esto ocurra.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Activación de nueva clave

Hola {USERNAME}

Está recibiendo esta notificación porque usted (o alguien reemplazándole) solicitó una nueva clave 
para su cuenta en "{SITENAME}". Si usted no lo solicitó por favor ignore esta notificación. 
Si persiste la solicitud contacte con La Administración del Sitio.

Para usar la nueva clave necesita activarla. Para ello visite el enlace siguiente.

{U_ACTIVATE}

Si no hay inconvenientes podrá identificarse mediante la siguiente nueva clave:

Clave: {PASSWORD}

Por supuesto posteriormente puede cambiar esta clave para su cuenta mediante el Panel de Control de Usuario. 
Si tiene alguna dificultad contacte con La Administración del Sitio.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reactivar su cuenta en "{SITENAME}" - {U_BOARD}

La Administración ha requerido que su cuenta sea reactivada. Su cuenta está actualmente inactiva.
Por favor siga estos pasos para reactivar su cuenta.

Por favor guarde este email para futuras referencias. La información de su cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}
----------------------------

Su contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvide tendrá la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a su cuenta.

Por favor visite el siguiente enlace para reactivar su cuenta:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Recordatorio de cuenta inactiva

Hola {USERNAME},

Esta notificación es un recordatorio que su cuenta en "{SITENAME}", creada el {REGISTER_DATE}, permanece inactiva. Si quiere activar esta cuenta por favor visite el siguiente enlace:

{U_ACTIVATE}

Gracias por registrarse en "{SITENAME}", esperamos su participación.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenido a "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Por favor guarde este email para futuras referencias. La información de su cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}
----------------------------

Su contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvide tendrá la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a su cuenta.

Por favor visite el siguiente enlace para activar su cuenta:

{U_ACTIVATE}


Gracias por registrarse.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Bienvenido a "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Por favor guarde este email para futuras referencias. La información de su cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}
{PASSWORD_EXTRA_LINE}
URL del Sitio: {U_BOARD}
----------------------------

Su clave ha sido encriptada en nuestra base de datos. Si la olvidó podrá solicitar una nueva la cuál será activada en la misma forma que esta cuenta.

Gracias por registrarse.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenido a "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Por favor guarde este email para futuras referencias. La información de su cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}
{PASSWORD_EXTRA_LINE}
URL del Sitio: {U_BOARD}
----------------------------

Por favor visite el siguiente enlace para activar su cuenta:

{U_ACTIVATE}

Su contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvide tendrá la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a su cuenta.


Gracias por registrarse.

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
