<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Activation du compte d’un utilisateur

Bonjour,

Le compte de « {USERNAME} » a été désactivé ou nouvellement créé. Vous devriez, si nécessaire, gérer et vérifier les informations concernant cet utilisateur.

Veuillez vous rendre sur ce lien afin de consulter le profil de l’utilisateur :
{U_USER_DETAILS}

Veuillez vous rendre sur ce lien afin d’activer le compte :
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Ce qui suit est un courriel envoyé par un administrateur de « {SITENAME} ». Si ce message est un pourriel ou qu’il contient des commentaires que vous trouvez déplacés, veuillez contacter le webmestre du forum à l’adresse suivante :

{CONTACT_EMAIL}

Incluez ce courriel en entier (particulièrement les en-têtes).

Message qui vous a été envoyé :
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Compte activé

Bonjour {USERNAME},

Votre compte sur « {SITENAME} » a été activé par un administrateur, vous pouvez à présent vous connecter.

Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courrier électronique associée à votre compte.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenue sur « {SITENAME} »

{WELCOME_MSG}

Veuillez conserver ce courriel dans vos archives. Les informations concernant votre compte sont les suivantes :

----------------------------
Nom d’utilisateur : {USERNAME}

Lien du forum : {U_BOARD}
----------------------------

Votre compte est actuellement inactif et devra être approuvé par un administrateur avant que vous ne puissiez vous connecter. Un autre courriel sera envoyé lorsque cela aura été effectué.

Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courrier électronique associée à votre compte.

Nous vous remercions de votre inscription.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenue sur « {SITENAME} »

{WELCOME_MSG}

En accord avec la COPPA, votre compte est actuellement inactif.

Veuillez imprimer ce message et le faire signer et dater par vos parents ou vos tuteurs. Puis, faxez-le à :

{FAX_INFO}

Ou envoyez-le par courriel à :

{MAIL_INFO}

------------------------------ COUPEZ ICI ------------------------------
Permission de participer à « {SITENAME} » - {U_BOARD}

Nom d’utilisateur : {USERNAME}
Adresse de courrier électronique : {EMAIL_ADDRESS}

J’AI VERIFIÉ L’INFORMATION FOURNIE PAR MON ENFANT ET DONNE LA PERMISSION À « {SITENAME} » DE STOCKER CETTE INFORMATION.
JE CONÇOIS QUE CETTE INFORMATION PEUT ÊTRE MODIFIÉE A TOUT MOMENT EN ENTRANT UN MOT DE PASSE.
JE SAIS QUE JE PEUX DEMANDER LE RETRAIT DE CETTE INFORMATION SUR « {SITENAME} » À TOUT MOMENT.


Parent ou tuteur
(inscrivez votre nom ici) : _____________________

(signez ici) : __________________ 

Date : _______________

------------------------------ COUPEZ ICI ------------------------------


Une fois que l’administrateur aura reçu le texte ci-dessus par courriel, fax ou courrier ordinaire, votre compte sera activé.

Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courrier électronique associée à votre compte.

Nous vous remercions de votre inscription.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenue sur « {SITENAME} »

{WELCOME_MSG}

En accord avec la COPPA, votre compte est actuellement inactif.

Veuillez imprimer ce message et le faire signer et dater par vos parents ou vos tuteurs. Puis, faxez-le à :

{FAX_INFO}

Ou envoyez-le par courriel à :

{MAIL_INFO}

------------------------------ COUPEZ ICI ------------------------------
Permission de participer à « {SITENAME} » - {U_BOARD}

Nom d’utilisateur : {USERNAME}
Adresse de courrier électronique : {EMAIL_ADDRESS}

J’AI VERIFIÉ L’INFORMATION FOURNIE PAR MON ENFANT ET DONNE LA PERMISSION À « {SITENAME} » DE STOCKER CETTE INFORMATION.
JE CONÇOIS QUE CETTE INFORMATION PEUT ÊTRE MODIFIÉE A TOUT MOMENT EN ENTRANT UN MOT DE PASSE.
JE SAIS QUE JE PEUX DEMANDER LE RETRAIT DE CETTE INFORMATION SUR « {SITENAME} » À TOUT MOMENT.


Parent ou tuteur
(inscrivez votre nom ici) : _____________________

(signez ici) : __________________ 

Date : _______________

------------------------------ COUPEZ ICI ------------------------------


Une fois que l’administrateur aura reçu le texte ci-dessus par courriel, fax ou courrier ordinaire, votre compte sera activé.

Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courrier électronique associée à votre compte.

Nous vous remercions de votre inscription.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} « {SITENAME} » - Envoi d’un courriel par un ami

Bonjour {TO_USERNAME},

Ce courriel a été envoyé de « {SITENAME} » par {FROM_USERNAME}, qui a pensé que vous pourriez être intéressé(e) par le sujet suivant :

{TOPIC_NAME}

Vous pouvez le retrouver ici :

{U_TOPIC}

Un message de la part de {FROM_USERNAME} peut également être inclus ci-dessous. Veuillez noter que ce message n’a pas été consulté ou approuvé par les administrateurs du forum. Si vous souhaitez vous plaindre à propos de la réception de ce courriel, veuillez contacter l’administrateur du forum sur {BOARD_CONTACT}. Veuillez citer les en-têtes du message lorsque vous contacterez cette adresse.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Notification de publication d’un message dans un forum - « {FORUM_NAME} »

Bonjour {USERNAME},

Vous recevez cette notification car vous surveillez le forum « {FORUM_NAME} » sur « {SITENAME} ». Ce forum a reçu une nouvelle réponse sur le sujet « {TOPIC_TITLE} » depuis votre dernière visite. Vous pouvez utiliser le lien suivant afin de consulter la dernière réponse non lue, aucune nouvelle notification ne vous sera envoyée jusqu’à ce que vous visitiez le sujet.

{U_NEWEST_POST}

Si vous souhaitez consulter le sujet, veuillez cliquer sur le lien suivant :
{U_TOPIC}

Si vous souhaitez consulter le forum, veuillez cliquer sur le lien suivant :
{U_FORUM}

Si vous ne souhaitez plus surveiller ce forum, vous pouvez cliquer sur le lien « Se désabonner au forum » situé au-dessous du forum en question ou cliquer sur le lien suivant :

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Vous avez été ajouté(e) à un groupe d’utilisateurs

Félicitations,

Vous avez été ajouté(e) au groupe « {GROUP_NAME} » sur « {SITENAME} ».
Cette action a été réalisée par le responsable du groupe ou par l’administrateur du site, contactez-les pour plus d’informations.

Vous pouvez consulter les informations de votre groupe ici :
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Demande à rejoindre votre groupe

Cher {USERNAME},

L’utilisateur « {REQUEST_USERNAME} » a demandé à rejoindre le groupe « {GROUP_NAME} » que vous modérez sur « {SITENAME} ».
Veuillez vous rendre sur le lien suivant afin d’approuver ou de refuser cette demande d’adhésion au groupe :

{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB a été installé

Félicitations,

Vous avez correctement installé phpBB sur votre serveur.

Ce courriel contient des informations importantes concernant votre installation et devrait être conservé précieusement. Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courrier électronique associée à votre compte.

----------------------------
Nom d’utilisateur : {USERNAME}

Lien du forum : {U_BOARD}
----------------------------

Des informations utiles concernant le logiciel phpBB peuvent être trouvées dans le dossier « docs » de votre installation, sur la page de support du site officiel (http://www.phpbb.com/support/) ou sur sa communauté francophone (http://www.phpbb.fr/).

Afin de garantir la sécurité de votre forum, nous vous recommandons fortement de toujours détenir la dernière version du logiciel. Pour votre confort, une liste de diffusion est disponible à la page référencée ci-dessus.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Notification de publication d’un nouveau sujet - « {FORUM_NAME} »

Bonjour {USERNAME},

Vous recevez cette notification car vous surveillez le forum « {FORUM_NAME} » sur « {SITENAME} ». Ce forum a reçu un nouveau sujet depuis votre dernière visite, « {TOPIC_TITLE} ». Vous pouvez utiliser le lien suivant afin de consulter le forum, aucune nouvelle notification ne vous sera envoyée jusqu’à ce que vous visitiez le forum.

{U_FORUM}

Si vous ne souhaitez plus surveiller ce forum, vous pouvez cliquer sur le lien « Se désabonner au forum » situé au-dessous du forum en question ou cliquer sur le lien suivant :

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Rapport fermé - « {PM_SUBJECT} »

Bonjour {USERNAME},

Vous recevez cette notification car le rapport que vous avez envoyé concernant le message privé « {PM_SUBJECT} » sur « {SITENAME} » a été traité par un modérateur ou un administrateur. Le rapport est à présent fermé. Si vous souhaitez obtenir plus d’informations, veuillez contacter {CLOSER_NAME} par message privé.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Rapport supprimé - « {PM_SUBJECT} »

Bonjour {USERNAME},

Vous recevez cette notification car le rapport que vous avez envoyé concernant le message privé « {PM_SUBJECT} » sur « {SITENAME} » a été supprimé par un modérateur ou un administrateur.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Message approuvé - « {POST_SUBJECT} »

Bonjour {USERNAME},

Vous recevez cette notification car votre message « {POST_SUBJECT} » sur « {SITENAME} » a été approuvé par un modérateur ou un administrateur.

Si vous souhaitez consulter le message, veuillez cliquer sur le lien suivant :
{U_VIEW_POST}

Si vous souhaitez consulter le sujet, veuillez cliquer sur le lien suivant :
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Message désapprouvé - « {POST_SUBJECT} »

Bonjour {USERNAME},

Vous recevez cette notification car votre message « {POST_SUBJECT} » sur « {SITENAME} » a été désapprouvé par un modérateur ou un administrateur.

Les raisons suivantes ont été prononcées concernant la désapprobation :

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Un nouveau message privé est arrivé

Bonjour {USERNAME},

Vous avez reçu un nouveau message privé de « {AUTHOR_NAME} » sur votre compte de « {SITENAME} » dont le sujet est :

{SUBJECT}

Vous pouvez consulter votre nouveau message en cliquant sur le lien suivant :

{U_VIEW_MESSAGE}

Vous avez demandé à recevoir une notification lors de cet évènement, sachez que vous pouvez toujours choisir de ne pas être notifié(e) lors de la réception de nouveaux messages en modifiant le réglage approprié dans votre profil.

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
Bonjour {TO_USERNAME},

Ce qui suit est un courriel qui vous a été envoyé par {FROM_USERNAME} par l’intermédiaire de votre compte sur « {SITENAME} ». Si ce message est un pourriel ou qu’il contient des commentaires que vous trouvez déplacés, veuillez contacter le webmestre du forum à l’adresse suivante :

{BOARD_CONTACT}

Incluez ce courriel en entier (particulièrement les en-têtes). Veuillez noter que l’adresse de réponse à ce courriel a été réglée avec celle de {FROM_USERNAME}.

Le message qui vous a été envoyé est le suivant :
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Bonjour {TO_USERNAME},

Ce qui suit est un message qui vous a été envoyé par {FROM_USERNAME} par l’intermédiaire de votre compte sur « {SITENAME} ». Si ce message est un pourriel ou qu’il contient des commentaires que vous trouvez déplacés, veuillez contacter le webmestre du forum à l’adresse suivante :

{BOARD_CONTACT}

Incluez ce courriel en entier. Veuillez noter que l’adresse de l’expéditeur a été réglé sur le compte IM des forums.

Le message qui vous a été envoyé est le suivant :
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Rapport fermé - « {POST_SUBJECT} »

Bonjour {USERNAME},

Vous recevez cette notification car le rapport que vous avez rempli sur le message « {POST_SUBJECT} » dans « {TOPIC_TITLE} » sur « {SITENAME} » a été vérifié par un modérateur ou un administrateur. Le rapport a alors été fermé. Si vous souhaitez avoir plus d’informations à ce sujet, veuillez contacter {CLOSER_NAME} par message privé.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Rapport supprimé - « {POST_SUBJECT} »

Bonjour {USERNAME},

Vous recevez cette notification car le rapport du message « {POST_SUBJECT} » dans « {TOPIC_TITLE} » sur « {SITENAME} » a été supprimé par un modérateur ou un administrateur.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Sujet approuvé - « {TOPIC_TITLE} »

Bonjour {USERNAME},

Vous recevez cette notification car votre sujet « {TOPIC_TITLE} » sur « {SITENAME} » a été approuvé par un modérateur ou un administrateur.

Si vous souhaitez consulter le sujet, veuillez cliquer sur le lien suivant :

{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Sujet désapprouvé - « {TOPIC_TITLE} »

Bonjour {USERNAME},

Vous recevez cette notification car votre sujet « {TOPIC_TITLE} » sur « {SITENAME} » a été désapprouvé par un modérateur ou un administrateur.

Les raisons suivantes ont été prononcées concernant cette désapprobation :

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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Réactivez votre compte

Bonjour {USERNAME},

Votre compte sur « {SITENAME} » a été désactivé, sûrement à cause de modifications effectuées sur votre profil. Afin de réactiver votre compte, vous devez cliquer sur le lien ci-dessous :

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Votre compte a été désactivé

Bonjour {USERNAME},

Votre compte sur « {SITENAME} » a été désactivé, sûrement à cause de modifications effectuées sur votre profil. L’administrateur du forum devra l’activer avant que vous ne puissiez vous connecter. Vous recevrez une autre notification lorsque cela aura été effectué.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Activation d’un nouveau mot de passe

Bonjour {USERNAME},

Vous recevez cette notification car vous (ou quelqu’un se faisant passer pour vous) avez demandé qu’un nouveau mot de passe vous soit envoyé pour votre compte sur « {SITENAME} ». Si vous n’avez pas demandé cette modification, veuillez alors l’ignorer. Si vous continuez à recevoir cette notification, veuillez contacter l’administrateur du forum.

Pour utiliser le nouveau mot de passe, vous avez besoin de l’activer. Pour cela, veuillez cliquer sur le lien ci-dessous :

{U_ACTIVATE}

Si cela a fonctionné, vous pourrez vous connecter en utilisant le mot de passe suivant :

Mot de passe : {PASSWORD}

Vous pouvez modifier ce mot de passe par l’intermédiaire de votre profil. Si vous éprouvez une quelconque difficulté durant ces étapes, veuillez contacter l’administrateur du forum.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Réactivez votre compte sur « {SITENAME} »

Un administrateur du forum demande à ce que votre compte soit réactivé. Votre compte est actuellement inactif.
Veuillez suivre les étapes listées ici afin de réactiver votre compte.

Veuillez conserver ce courriel dans vos archives. L’information de votre compte est la suivante :

----------------------------
Nom d’utilisateur : {USERNAME}
----------------------------

Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courrier électronique associée à votre compte.

Veuillez vous rendre sur le lien suivant afin de réactiver votre compte :

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Compte inactif

Bonjour {USERNAME},

Cette notification est un rappel car votre compte sur « {SITENAME} », créé le {REGISTER_DATE}, demeure inactif. Si vous souhaitez activer ce compte, veuillez vous rendre sur le lien suivant :

{U_ACTIVATE}

Nous vous remercions de votre inscription sur « {SITENAME} » et attendons avec impatience votre participation.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenue sur « {SITENAME} »

{WELCOME_MSG}

Veuillez conserver ce courriel dans vos archives. L’information concernant votre compte est la suivante :

----------------------------
Nom d’utilisateur : {USERNAME}
----------------------------

Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courrier électronique associée à votre compte.

Veuillez vous rendre sur le lien suivant afin d’activer votre compte :

{U_ACTIVATE}


Nous vous remercions de votre inscription.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Bienvenue sur « {SITENAME} »

{WELCOME_MSG}

Veuillez conserver ce courriel dans vos archives. Les informations concernant votre compte sont les suivantes :

----------------------------
Nom d’utilisateur : {USERNAME}
{PASSWORD_EXTRA_LINE}
Lien du forum : {U_BOARD}
----------------------------

Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courrier électronique associée à votre compte.

Nous vous remercions de votre inscription.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bienvenue sur « {SITENAME} »

{WELCOME_MSG}

Veuillez conserver ce courriel dans vos archives. Les informations concernant votre compte sont les suivantes :

----------------------------
Nom d’utilisateur : {USERNAME}
{PASSWORD_EXTRA_LINE}
Lien du forum : {U_BOARD}
----------------------------

Veuillez vous rendre sur le lien suivant afin d’activer votre compte :

{U_ACTIVATE}

Votre mot de passe a été stocké en toute sécurité dans notre base de données et ne pourra pas être retrouvé. Dans le cas où vous l’oubliez, vous pourrez le réinitialiser en utilisant l’adresse de courrier électronique associée à votre compte.

Nous vous remercions de votre inscription.

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
