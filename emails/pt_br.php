<?php
﻿
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Novo usuário registrado

Olá,

O registro do usuário "{USERNAME}" foi desativado ou recém-criado. Você deverá verificar as informações deste usuário (caso necessário) e ativá-lo apropriadamente.

Use este endereço para visualizar o perfil do usuário:
{U_USER_DETAILS}

Use este endereço para ativar o registro:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
A mensagem seguinte foi enviada à você por um administrador de "{SITENAME}". Se esta mensagem contém material abusivo, spam, ou comentários que você ache ofensivos, por favor, contate o webmaster do fórum pelo seguinte endereço:

{CONTACT_EMAIL}

Inclua este e-mail completo (particularmente os cabeçalhos). 

A mensagem enviada para você é a seguinte:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} O seu registro foi ativado

Olá {USERNAME},

O seu registro em "{SITENAME}" foi ativado por um administrador, agora você pode logar.

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bem-vindo ao fórum "{SITENAME}"

{WELCOME_MSG}

Por favor, salve este e-mail para consultas posteriores. As informações de seu registro são as seguintes:

----------------------------
Usuário: {USERNAME}

Endereço: {U_BOARD}
----------------------------

O seu registro encontra-se atualmente inativo. O administrador do fórum pede que ele seja ativado para que você possa utilizá-lo. Você não poderá utilizar o seu registro enquanto não ativá-lo. Você ainda receberá mais informações a respeito de sua conta em breve.

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Obrigado por registrar-se!

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bem-vindo ao fórum "{SITENAME}"

{WELCOME_MSG}

De acordo com a COPPA, o seu registro encontra-se presentemente inativo.

Por favor, imprima esta mensagem e peça aos seus pais ou responsáveis que a assine e coloque a data. Em seguida, esta mensagem deverá ser enviada por fax para:

{FAX_INFO}

Ou por correio para:

{MAIL_INFO}

------------------------------ RECORTE AQUI ------------------------------
PERMISSÃO PARA PARTICIPAR EM "{SITENAME}" - {U_BOARD}

Usuário: {USERNAME}
E-mail: {EMAIL_ADDRESS}

EU REVI A INFORMAÇÃO FORNECIDA PELA MINHA CRIANÇA E COMO TAL DOU PERMISSÃO A "{SITENAME}" PARA SALVAR ESTA INFORMAÇÃO. 
EU ENTENDO QUE ESTA INFORMAÇÃO POSSA SER MUDADA A QUALQUER MOMENTO DESDE QUE SE USE A RESPECTIVA SENHA. 
EU ENTENDO QUE SE POSSA SOLICITAR QUE ESTA INFORMAÇÃO SEJA RETIRADA DE "{SITENAME}" A QUALQUER MOMENTO.


Pais ou responsáveis 
(imprima o seu nome aqui): _____________________

(assine aqui): __________________ 

Data: _______________

------------------------------ RECORTE AQUI ------------------------------


Assim que o administrador receber as informações acima apresentadas via fax ou correio normal, o seu registro será ativado.

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Obrigado por registrar-se!

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bem-vindo ao fórum "{SITENAME}"

{WELCOME_MSG}

De acordo com a COPPA, o seu registro encontra-se presentemente inativo.

Por favor, imprima esta mensagem e peça aos seus pais ou responsáveis que a assine e coloque a data. Em seguida, esta mensagem deverá ser enviada por fax para:

{FAX_INFO}

Ou correio normal para:

{MAIL_INFO}

------------------------------ RECORTE AQUI ------------------------------
PERMISSÃO PARA PARTICIPAR EM "{SITENAME}" - {U_BOARD}

Usuário: {USERNAME}
E-mail: {EMAIL_ADDRESS}

EU REVI A INFORMAÇÃO FORNECIDA PELA MINHA CRIANÇA E COMO TAL DOU PERMISSÃO A "{SITENAME}" PARA SALVAR ESTA INFORMAÇÃO. 
EU ENTENDO QUE ESTA INFORMAÇÃO POSSA SER MUDADA A QUALQUER MOMENTO DESDE QUE SE USE A RESPECTIVA SENHA. 
EU ENTENDO QUE SE POSSA SOLICITAR QUE ESTA INFORMAÇÃO SEJA RETIRADA DE "{SITENAME}" A QUALQUER MOMENTO.


Pais ou responsáveis 
(imprima o seu nome aqui): _____________________

(assine aqui): __________________ 

Data: _______________

------------------------------ RECORTE AQUI ------------------------------


Assim que o administrador receber as informações acima apresentadas via fax ou correio normal, o seu registro será ativado.

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Obrigado por registrar-se!

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - E-mail de um amigo

Olá {TO_USERNAME},

Esta mensagem foi enviada de "{SITENAME}" por {FROM_USERNAME} que se apresentou interessado no seguinte tópico:

{TOPIC_NAME}

Você pode acessá-lo no seguinte endereço:

{U_TOPIC}

A mensagem de {FROM_USERNAME} está incluída abaixo. Por favor, note que esta mensagem não foi revisada nem aprovada pelos administradores. Se esta mensagem contém material abusivo, spam, ou comentários que você ache ofensivos, por favor, contate o webmaster do fórum pelo seguinte endereço: {BOARD_CONTACT}. Por favor, inclua este e-mail completo, particularmente os cabeçalhos.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Notificação de resposta ao fórum - "{FORUM_NAME}"

Olá {USERNAME},

Você recebeu este e-mail porque está visualizando o fórum "{FORUM_NAME}" em "{SITENAME}". Este fórum recebeu uma mensagem nova no tópico "{TOPIC_TITLE}" desde a sua última visita. Você pode usar o seguinte endereço para visualizar a última mensagem não lida ao fórum. Não serão enviadas mais notificações enquanto você não visitar o tópico.

{U_NEWEST_POST}

Se você deseja visualizar o tópico, clique no seguinte link:
{U_TOPIC}

Se você deseja visualizar o fórum, clique no seguinte link:
{U_FORUM}

Se você deseja parar de visualizar este fórum, clique no link "Parar de visualizar este fórum" encontrado na parte superior do fórum citado, ou clique no seguinte endereço:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Bem-vindo ao grupo de usuários

Parabéns,

Você foi adicionado ao grupo "{GROUP_NAME}" em "{SITENAME}".
Este passo foi dado pelo líder do grupo ou pelo administrador do fórum. Contate-os para mais informações.

Você pode ver as informações de seu grupo aqui:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} A sua inscrição foi aceita

Parabéns,

A sua inscrição para entrar no grupo "{GROUP_NAME}" em "{SITENAME}" foi aceita.
Você pode ver as informações de seu grupo aqui:

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Nova inscrição feita ao seu grupo

Prezado {USERNAME},

O usuário "{REQUEST_USERNAME}" se inscreveu no grupo "{GROUP_NAME}" do qual você é líder em "{SITENAME}".
Para aceitar ou recusar a inscrição do usuário em seu grupo, por favor, visite o seguinte endereço:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} Instalação do phpBB

Parabéns,

O phpBB foi instalado corretamente em seu servidor.

Este e-mail possui informações importantes sobre a sua instalação que você deve preservar de forma segura. A sua senha foi codificada em nosso banco de dados e não pode ser restaurada. Contudo, você poderá solicitar uma nova a qualquer momento.

----------------------------
Usuário: {USERNAME}

Endereço: {U_BOARD}
----------------------------

Algumas informações importantes sobre sua instalação do phpBB podem ser encontradas na pasta /docs de seu fórum e na página de suporte do phpBB.com - http://www.phpbb.com/support/

Para atualizar e preservar o seu phpBB seguro, é altamente recomendável que você fique atento às novidades e atualizações do sistema. Para sua conveniência, uma lista de e-mails encontra-se disponível na página acima referida.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Notificação de novo tópico - "{FORUM_NAME}"

Olá {USERNAME},

Você recebeu este e-mail porque está visualizando o fórum "{FORUM_NAME}" em "{SITENAME}". Este fórum recebeu um tópico novo desde a sua última visita, nomeado "{TOPIC_TITLE}". Você pode usar o seguinte endereço para ver o fórum, não serão enviadas mais notificações enquanto você não visitar este fórum.

{U_FORUM}

Se você deseja parar de visualizar este fórum, clique no link "Parar de visualizar este fórum" no fórum citado, ou clique no seguinte endereço:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Denúncia trancada - "{PM_SUBJECT}"

Olá {USERNAME},

Você recebeu esta notificação porque a sua denúncia feita acerca da mensagem particular "{PM_SUBJECT}" em "{SITENAME}" foi manuseada por um moderador ou administrador e trancada em seguida. Se você tem mais perguntas a respeito, contate o usuário {CLOSER_NAME} com uma mensagem particular.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Denúncia excluída - "{PM_SUBJECT}"

Olá {USERNAME},

Você recebeu esta notificação porque a sua denúncia feita acerca da mensagem particular "{PM_SUBJECT}" em "{SITENAME}" foi excluída por um moderador ou administrador do fórum.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Mensagem aprovada - "{POST_SUBJECT}"

Olá {USERNAME},

Você recebeu este e-mail porque a sua mensagem "{POST_SUBJECT}" em "{SITENAME}" foi aprovada por um moderador ou administrador do fórum.

Se você deseja ver a mensagem, clique no seguinte link:
{U_VIEW_POST}

Se você deseja ver o tópico, clique no seguinte link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Mensagem reprovada - "{POST_SUBJECT}"

Olá {USERNAME},

Você está recebendo este e-mail porque a sua mensagem "{POST_SUBJECT}" em "{SITENAME}" foi reprovada por um moderador ou administrador do fórum.

A seguinte razão foi dada para a reprovação:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Chegou uma mensagem particular nova

Olá {USERNAME},

Você recebeu uma mensagem particular nova de "{AUTHOR_NAME}" no seu registro em "{SITENAME}" com o seguinte título:

{SUBJECT}

Você pode ler a sua mensagem clicando no seguinte endereço:

{U_VIEW_MESSAGE}

Lembre-se que você pode escolher não ser notificado quando receber mensagens particulares novas, selecionando a respectiva opção em seu perfil.

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
Olá {TO_USERNAME},

A mensagem seguinte foi enviada à você por {FROM_USERNAME} através de seu registro em "{SITENAME}". Se esta mensagem contém material abusivo, spam, ou comentários que você ache ofensivos, por favor, contate o webmaster do fórum pelo seguinte endereço:

{BOARD_CONTACT}

Inclua este e-mail completo (particularmente os cabeçalhos). Por favor, note que o endereço de resposta para este e-mail é o do usuário {FROM_USERNAME}.

A mensagem enviada para você é a seguinte:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Olá {TO_USERNAME},

A mensagem seguinte foi enviada à você por um administrador de "{SITENAME}". Se esta mensagem contém material abusivo, spam, ou comentários que você ache ofensivos, por favor, contate o webmaster do fórum pelo seguinte endereço:

{CONTACT_EMAIL}

Inclua este e-mail completo (particularmente os cabeçalhos). Por favor, note que o endereço de resposta para este e-mail é o do registro IM do fórum. 

A mensagem enviada para você é a seguinte:
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Denúncia trancada - "{POST_SUBJECT}"

Olá {USERNAME},

Você recebeu esta notificação porque a sua denúncia feita acerca da mensagem "{POST_SUBJECT}" no tópico "{TOPIC_TITLE}" em "{SITENAME}" foi manuseada por um moderador ou administrador e trancada em seguida. Se você tem mais perguntas a respeito, contate o usuário {CLOSER_NAME} com uma mensagem particular.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Denúncia excluída - "{POST_SUBJECT}"

Olá {USERNAME},

Você recebeu esta notificação porque a sua denúncia feita acerca da mensagem "{POST_SUBJECT}" no tópico "{TOPIC_TITLE}" em "{SITENAME}" foi excluída por um moderador ou administrador do fórum.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tópico aprovado - "{TOPIC_TITLE}"

Olá {USERNAME},

Você recebeu este e-mail porque o seu tópico "{TOPIC_TITLE}" em "{SITENAME}" foi aprovado por um moderador ou administrador do fórum.

Se você deseja visualizar o tópico, clique no seguinte link:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tópico reprovado - "{TOPIC_TITLE}"

Olá {USERNAME},

Você recebeu este e-mail porque o seu tópico "{TOPIC_TITLE}" em "{SITENAME}" foi reprovado por um moderador ou administrador do fórum.

A seguinte razão foi dada para a reprovação:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Notificação de resposta ao tópico - "{TOPIC_TITLE}"

Olá {USERNAME},

Você recebeu este e-mail porque está visualizando o tópico "{TOPIC_TITLE}" em "{SITENAME}". Este tópico recebeu uma resposta desde a sua última visita. Você pode usar o seguinte endereço para ler as respostas escritas. Não serão enviadas mais notificações enquanto você não visitar este tópico.

Se você deseja visualizar a mensagem mais recente desde sua última visita, clique no seguinte link:
{U_NEWEST_POST}

Se você deseja visualizar o tópico, clique no seguinte link:
{U_TOPIC}

Se você deseja visualizar o fórum, clique no seguinte link:
{U_FORUM}

Se você deseja parar de visualizar este tópico, clique no link "Parar de visualizar este tópico" na parte inferior esquerda do tópico, ou clique no seguinte endereço:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reativação de registro

Olá {USERNAME},

O seu registro em "{SITENAME}" foi desativado, devido a alteração de informações importantes em seu perfil. Para reativar o seu registro, você deverá clicar no endereço abaixo:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Registro desativado

Olá {USERNAME},

O seu registro em "{SITENAME}" foi desativado, devido a alteração de informações importantes em seu perfil. É necessário que o administrador ative sua conta para que você possa autenticar-se no fórum. Você será devidamente avisado quando tal ocorrer.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Ativação de nova senha

Olá {USERNAME}

Você está recebendo este e-mail devido você (ou alguém se passando por você) ter solicitado que uma nova senha relativa à sua conta em "{SITENAME}" fosse enviada. Se você não solicitou este e-mail, por favor, ignore-o. Caso continue a recebê-lo, por favor, contate o administrador do fórum.

Para utilizar a sua nova senha, é necessário que a ative. Para o fazer, clique no endereço abaixo.

{U_ACTIVATE}

Se conseguir acessar o endereço indicado com sucesso, você poderá entrar no fórum utilizando a seguinte senha:

Senha: {PASSWORD}

Você poderá alterar esta senha quando desejar, através de seu perfil. Caso tenha alguma dificuldade, contate o administrador do fórum.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reativação de registro em "{SITENAME}"

O administrador do fórum solicita a você que reative o seu registro. O seu registro encontra-se atualmente inativo.
Por favor, siga estritamente às instruções para reativar a sua conta.

É recomendável que este e-mail seja salvo para consultas posteriores. As informações de seu registro são as seguintes:

----------------------------
Usuário: {USERNAME}
----------------------------

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Por favor, visite o seguinte endereço para reativar o seu registro:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Lembrete de registro inativo

Olá {USERNAME},

Esta notificação é um lembrete de que sua conta em "{SITENAME}", criada em {REGISTER_DATE}, continua inativa. Caso você deseje ativar o seu registro, por favor, visite o seguinte endereço:

{U_ACTIVATE}

Obrigado por registrar-se em "{SITENAME}", nós aguardamos a sua participação!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bem-vindo ao fórum "{SITENAME}"

{WELCOME_MSG}

Por favor, salve este e-mail para consultas posteriores. As informações de seu registro são as seguintes:

----------------------------
Usuário: {USERNAME}
----------------------------

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Por favor, visite o seguinte endereço para ativar o seu registro:

{U_ACTIVATE}


Obrigado por registrar-se!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Bem-vindo ao fórum "{SITENAME}"

{WELCOME_MSG}

Por favor, salve este e-mail para consultas posteriores. As informações de seu registro são as seguintes:

----------------------------
Usuário: {USERNAME}

Endereço: {U_BOARD}
----------------------------

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Obrigado por registrar-se!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bem-vindo ao fórum "{SITENAME}"

{WELCOME_MSG}

Por favor, salve este e-mail para consultas posteriores. As informações de seu registro são as seguintes:

----------------------------
Usuário: {USERNAME}

Endereço: {U_BOARD}
----------------------------

Por favor, visite o seguinte endereço para ativar o seu registro:

{U_ACTIVATE}

A sua senha foi codificada de forma segura em nosso banco de dados e não podemos restaurá-la. Contudo, caso se esqueça da mesma, você poderá resetá-la usando o endereço de e-mail associado ao seu registro.

Obrigado por registrar-se!

{EMAIL_SIG}',
));


