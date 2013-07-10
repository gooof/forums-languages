﻿<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Activar cuenta de usuario.

Hola,

La cuenta de "{USERNAME}" ha sido desactivada o creada nuevamente, 
deberías verificar los detalles de este usuario (si se requiere) y proceder según sea apropiado.

Seguí este enlace para ver el perfil del usuario:
{U_USER_DETAILS}

Seguí este enlace para activar la cuenta:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> 'El siguiente es un email enviado por La Administración de "{SITENAME}". 
Si este mensaje es spam, contiene comentarios abusivos o que consideres ofensivos 
por favor contactate con La Administración del Sitio en esta dirección:

{CONTACT_EMAIL}

Adjuntá este email completo (particularmente las cabeceras [headers]). 

Este es el mensaje enviado:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Cuenta activada

Hola {USERNAME},

Tu cuenta en "{SITENAME}" ha sido activada por un Administrador, ahora podés identificarte.

Tu contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvides tendrás la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a tu cuenta.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '﻿{EMAILSUBJECT:} Bienvenido a "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Por favor guardá este email para futuras referencias. La información de tu cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}
URL del Sitio: {U_BOARD}
----------------------------

Tu cuenta está actualmente inactiva y necesitará que sea aprobada por La Administración antes de que puedas identificarte. Recibirás otro email cuando esto haya ocurrido.

Tu contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvides tendrás la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a tu cuenta.

Gracias por registrarte.

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

Este email fue enviado desde "{SITENAME}" por {FROM_USERNAME} que pensó podrías estar interesado en el siguiente tema:

{TOPIC_NAME}

Podés verlo en:

{U_TOPIC}

Un mensaje de {FROM_USERNAME} puede seguir debajo. 
Por favor fijate en que este mensaje no ha sido visto o aprobado por La Administración del Sitio. 
Si querés avisar que has recibido este email como no-deseado (spam) por favor contactate con La Administración del Sitio en {BOARD_CONTACT}. 
Por favor subraya las cabeceras del mensaje cuando te contactes con esa dirección de email.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Notificación de mensaje en el foro - "{FORUM_NAME}"

Hola {USERNAME},

Estás recibiendo esta notificación porque estás siguiendo el foro, "{FORUM_NAME}" en "{SITENAME}". 
Este foro tiene una nueva respuesta al tema "{TOPIC_TITLE}" desde tu última visita. 
Siguiendo este enlace podés ver esa respuesta, no se enviarán más notificaciones hasta que visites este enlace.

{U_NEWEST_POST}

Si quéres ver el tema, hace clic en el siguiente enlace:
{U_TOPIC}

Si quéres ver el foro, hace clic en el siguiente enlace:
{U_TOPIC}

Si no quéres seguir más este foro podés hacer clic en "Cancelar suscripción al Foro" cuando estés ahí, 
o bien siguiendo este enlace:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Ha ingresado en este grupo de usuarios

Felicidades,

Has sido agregado al grupo "{GROUP_NAME}" en "{SITENAME}".
Esta acción la llevó a cabo un líder de grupo o La Administración del Sitio, contactate con ellos para más información.

Podés ver información sobre tus grupos aquí:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Su solicitud ha sido aprobada

Felicidades,

Tu solicitud para ingresar en el grupo "{GROUP_NAME}" en "{SITENAME}" ha sido aprobada.
Hace clic en el siguiente enlace para ver tu membresía.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Se ha hecho una solicitud para ingresar en tu grupo

Estimado {USERNAME},

El usuario "{REQUEST_USERNAME}" ha solicitado ingresar en el grupo "{GROUP_NAME}" que vos moderas en "{SITENAME}".
Para aprobar o negar esta solicitud por favor visita el siguiente enlace:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB instalado

Felicidades,

Phpbb está instalado correctamente en tu servidor.

Este correo contiene información importante acerca del foro recién instalado. La contraseña fue encriptada en la base de datos y no podrá recuperarla, sin embargo podés solicitar que se te recuerde la contraseña, y recibirás un correo como éste.

----------------------------
Username: {USERNAME}
Password: {PASSWORD}

URL del foro: {U_BOARD}
----------------------------

Información útil sobre la instalación de tu foro phpBB puede ser encontrada en las carpeta docs de tu instalación y en la página oficial de soporte (en inglés) phpBB.com - http://www.phpbb.com/support/

Con idea de mantener tu foro a salvo y seguro, se recomienda enormemente que se mantenga al día de la última versión, lo cuál se puede hacer fácilmente suscribiéndose a la lista de correo de phpBB.com, localizable en la URL de arriba.

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

Estás recibiendo esta notificación porque estás siguiendo el foro, "{FORUM_NAME}" de "{SITENAME}". 
Este foro tiene un nuevo tema desde tu última visita, "{TOPIC_TITLE}". 
Podés usar el siguiente enlace para ver el foro. No se enviarán más notificaciones hasta que lo visites.

{U_FORUM}

Si no querés seguir más ese foro podés hacer clic en "Cancelar suscripción al Foro" cuando estés ahí, 
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

Estás recibiendo esta notificación porque tu mensaje "{POST_SUBJECT}" en "{SITENAME}" 
fue aprobado por un(a) moderador(a) o La Administración.

Si querés ver el mensaje, hace clic en el siguiente enlace:
{U_VIEW_POST}

Si querés ver el tema, hace clic en el siguiente enlace:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Mensaje desaprobado - "{POST_SUBJECT}"

Hola {USERNAME},

Estás recibiendo esta notificación porque tu mensaje "{POST_SUBJECT}" en "{SITENAME}" 
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

Has recibido un nuevo mensaje privado de "{AUTHOR_NAME}" en tu cuenta de "{SITENAME}" 
con el siguiente tema:

{SUBJECT}

Podés ver tu nuevo mensaje visitando el siguiente enlace:

{U_VIEW_MESSAGE}

Has solicitado que se te notifique, recuerda que siempre podés elegir no ser notificado 
de nuevos mensajes cambiando esta opción en tu perfil.

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

El siguiente es un email que te envía {FROM_USERNAME} mediante tu cuenta en "{SITENAME}". 
Si este email es spam, contiene comentarios abusivos o que consideres ofensivos 
por favor contactate con La Administración del Sitio en esta dirección:

{BOARD_CONTACT}

Adjunte este email completo (particularmente las cabeceras [headers]). Por favor asegurate de que la dirección de respuesta 
a este email es la de {FROM_USERNAME}.

El mensaje enviado es el siguiente :
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> 'Hola {TO_USERNAME},

El siguiente es un mensaje que te envía {FROM_USERNAME} mediante tu cuenta en "{SITENAME}". 
Si este mensaje es spam, contiene comentarios abusivos o que consideres ofensivos 
por favor contactate con La Administración del Sitio en esta dirección:

{BOARD_CONTACT}

Adjunte este mensaje completo. Por favor fijate en que la dirección del remitente es la de la cuenta de IM.

El siguiente es el mensaje enviado:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Aviso cerrado - "{POST_SUBJECT}"

Hola {USERNAME},

Estás recibiendo esta notificación porque el aviso que enviaste sobre el mensaje "{POST_SUBJECT}" 
en "{TOPIC_TITLE}" de "{SITENAME}" fue revisado por un(a) moderador(a) o por La Administración. 
El aviso fue posteriormente cerrado. Si tenés alguna duda contactate con {CLOSER_NAME} mediante un mensaje personal.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Aviso borrado - "{POST_SUBJECT}"

Hola {USERNAME},

Estás recibiendo esta notificación porque el aviso que enviaste por el mensaje "{POST_SUBJECT}" 
en "{TOPIC_TITLE}" de "{SITENAME}" fue borrado por un moderador o por La Administración. 


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tema aprobado - "{TOPIC_TITLE}"

Hola {USERNAME},

Estás recibiendo esta notificación porque tu tema "{TOPIC_TITLE}" en "{SITENAME}" 
fue aprobado por un(a) moderador(a) o por La Administración. 

Si querés ver el tema, visita el siguiente enlace:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tema no aprobado - "{TOPIC_TITLE}"

Hola {USERNAME},

Estás recibiendo esta notificación porque tu tema "{TOPIC_TITLE}" en "{SITENAME}" 
no fue aprobado por un(a) moderador(a) o por La Administración del Sitio.

No fue aprobado por esta razón:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Notificación de respuesta al tema - "{TOPIC_TITLE}"

Hola {USERNAME},

Estás recibiendo esta notificación porque estás siguiendo el foro, "{FORUM_NAME}" de "{SITENAME}".
Este tema ha recibido una respuesta desde tu última visita. 
Siguiendo este enlace podés ver esta respuesta, no se enviarán más notificaciones hasta que visites este tema.

Si querés ver los nuevos mensajes desde tu última visita, hace clic en el siguiente enlace:
{U_NEWEST_POST}

Si querés ver el tema, hace clic en el siguiente enlace:
{U_TOPIC}

Si querés ver el foro, hace clic en el siguiente enlace:
{U_FORUM}

Si no querés seguir más este tema podés hacer clic en "Cancelar suscripción al tema" cuando estés ahí, 
o bien siguiendo este enlace:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reactivate your account

Hello {USERNAME},

Your account on "{SITENAME}" has been deactivated, most likely due to changes made to your profile. In order to reactivate your account you must click on the link below:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Su cuenta ha sido desactivada

Hola {USERNAME},

Tu cuenta en "{SITENAME}" ha sido desactivada, probablemente debido a cambios hechos en tu perfil. 
La Administración del Sitio deberá activarla antes de que puedas identificarte de nuevo. 
Recibirás otra notificación cuando esto ocurra.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Activación de nueva clave

Hola {USERNAME}

Estás recibiendo esta notificación porque vos (o alguien reemplazándote) solicitó una nueva clave 
para tu cuenta en "{SITENAME}". Si vos no la solicitaste por favor ignora esta notificación. 
Si persiste la solicitud contactate con La Administración del Sitio.

Para usar la nueva clave necesitás activarla. Para esto visita el siguiente enlace.

{U_ACTIVATE}

Si no hay inconvenientes podrás identificarte mediante la siguiente nueva clave:

Clave: {PASSWORD}

Por supuesto posteriormente podés cambiar esta clave para tu cuenta mediante el Panel de Control de Usuario. 
Si tenés alguna dificultad contactate con La Administración del Sitio.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reactivar tu cuenta en "{SITENAME}" - {U_BOARD}

La Administración ha requerido que tu cuenta sea reactivada. Tu cuenta está actualmente inactiva.
Por favor seguí estos pasos para reactivar tu cuenta.

Por favor guardá este email para futuras referencias. La información de tu cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}
----------------------------

Tu contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvides tendrás la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a tu cuenta.

Por favor visita el siguiente enlace para reactivar tu cuenta:

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

Esta notificación es un recordatorio que tu cuenta en "{SITENAME}", creada el {REGISTER_DATE}, permanece inactiva. Si querés activar esta cuenta por favor visita el siguiente enlace:

{U_ACTIVATE}

Gracias por registrarte en "{SITENAME}", esperamos tu participación.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenido a "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Por favor guardá este email para futuras referencias. La información de tu cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}
----------------------------

Tu contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvides tendrás la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a tu cuenta.

Por favor visita el siguiente enlace para activar tu cuenta:

{U_ACTIVATE}


Gracias por registrarte.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Bienvenido a "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Por favor guardá este email para futuras referencias. La información de tu cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}

URL del Sitio: {U_BOARD}
----------------------------

Tu clave ha sido encriptada en nuestra base de datos. Si la olvidaste podrás solicitar una nueva la cuál será activada en la misma forma que esta cuenta.

Gracias por registrarte.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenido a "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Por favor guardá este email para futuras referencias. La información de tu cuenta es la siguiente:

----------------------------
Nombre de usuario: {USERNAME}

URL del Sitio: {U_BOARD}
----------------------------

Por favor visitá el siguiente enlace para activar tu cuenta:

{U_ACTIVATE}

Tu contraseña ha sido guardada de forma segura en nuestra base de datos y no puede ser recuperada. En el caso de que la olvides tendrás la posibilidad de regenerarla usando la misma dirección de correo electrónico asociada a tu cuenta.


Gracias por registrarte.

{EMAIL_SIG}',
));


