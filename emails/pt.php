<?php
﻿
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Novo utilizador registado

Olá;

Uma conta em nome de "{USERNAME}" foi desativada ou criada de novo.
Deverá verificar os seus dados (se necessário) e ativá-la.


Pode ver o Perfil do Utilizador no seguinte endereço:
{U_USER_DETAILS}

Pode ativar a conta no seguinte endereço:
{U_ACTIVATE}



{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Este email foi enviado pelo Administrador de "{SITENAME}".
Se há material abusivo, "spam", ou comentários que considera ofensivos contate o seguinte endereço:
{CONTACT_EMAIL}
Inclua este email completo (particularmente os cabeçalhos). 



A mensagem enviada para si é a seguinte:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

~~~~~~~~~~~~~~~~~~~~~~~~~~~~


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Registo Ativado

Olá {USERNAME};

O seu registo em "{SITENAME}" foi ativado.
Já pode entrar no Fórum.


A sua senha foi codificada na nossa Base de Dados e não é recuperável.
Se a perder pode solicitar uma senha nova, sendo ativada desta mesma forma.

{USERNAME}, obrigado pelo seu registo em "{SITENAME}".
Participe ativamente. A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bem vindo ao Fórum {SITENAME}

{WELCOME_MSG}

Por favor, guarde este email para consultas posteriores.

As informações do seu Registo são as seguintes:
==============================================
Utilizador: {USERNAME}

Endereço do Fórum: {U_BOARD}
==============================================

A sua conta está inativa e terá de ser aprovada por um Administrador antes de poder entrar no Fórum. Será enviado outro e-mail quando a conta for ativada.

A sua senha foi armazenada na nossa Base de Dados de forma segura e não pode ser recuperada. No caso de a esquecer, poderá redefini-la, usando o endereço de e-mail associado à sua conta.


{USERNAME}, obrigado pelo seu registo em "{SITENAME}".
Participe ativamente. A sua colaboração é fundamental para todos nós.


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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bem vindo ao Fórum {SITENAME}

{WELCOME_MSG}

Em conformidade com o COPPA, sua conta está inativa.

Por favor, imprima esta mensagem, obtenha a assinatura, com a data, dos seus pais ou tutor e envie por fax para:
{MAIL_INFO}

-- Recorte por aqui --

Autorização para a participação de {USERNAME} em {SITENAME} - {U_BOARD}

==============================================
Nome de Utilizador: {USERNAME}

Email: {EMAIL_ADDRESS}
==============================================

Li as regras de utilização e autorizo o "{SITENAME}" a guardar os dados do meu educando numa Base de Dados. 
Tenho consciência que estes dados podem ser alterados com o uso da senha correcta. 
A qualquer momento e a meu pedido, o "{SITENAME}" eliminará da Base de Dados toda a informação relativa ao meu educando.


Pais ou Encarregados de Educação

_____________________________________________________________________________________
(escreva o seu Nome de forma legível)


_____________________________________________________________________________________
(Assine)

______/_______/_____
(Data)



-- Recorte por aqui --

Quando o administrador receber o formulário, a sua conta será ativada.

A sua senha foi armazenada na nossa Base de Dados de forma segura e não pode ser recuperada.
No caso de a esquecer, poderá redefini-la, usando o endereço de e-mail associado à sua conta.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bem vindo ao Fórum {SITENAME}

{WELCOME_MSG}

Os dados da sua conta são os seguintes:
==============================================
Nome de Utilizador: {USERNAME}

E-mail: {EMAIL_ADDRESS}
==============================================

A sua senha foi codificada na nossa Base de Dados e não é recuperável.
Se a perder pode solicitar uma senha nova, sendo ativada desta mesma forma.

{USERNAME}, obrigado pelo seu registo em "{SITENAME}".
Em conformidade com o COPPA, sua conta encontra-se inativa.

Por favor, imprima esta mensagem, obtenha a assinatura, com a data, dos seus pais ou tutor e envie por fax para:
{MAIL_INFO}

-- Recorte por aqui --

Autorização para a participação de {USERNAME} em {SITENAME} - {U_BOARD}

==============================================
Nome de Utilizador: {USERNAME}
E-mail: {EMAIL_ADDRESS}
==============================================

Li a regras de utilização e autorizo o "{SITENAME}" a guardar os dados do meu educando numa Base de Dados. 
Tenho consciência que estes dados podem ser alterados com o uso da senha correcta. 
A qualquer momento e a meu pedido, o "{SITENAME}" eliminará da Base de Dados toda a informação relativa ao meu educando.


Pais ou Encarregados de Educação

_____________________________________________________________________________________
(escreva o seu Nome de forma legível)


_____________________________________________________________________________________
(Assine)

______/_______/_____
(Data)



-- Recorte por aqui --


Uma vez que o administrador tenha recebido o formulário acima, a sua conta será ativada.

A sua senha foi armazenada na nossa Base de Dados de forma segura e não pode ser recuperada.
No caso de a esquecer, poderá redefini-la, usando o endereço de e-mail associado à sua conta.


Participe ativamente. A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - email de um amigo

Olá {TO_USERNAME};

Este email foi enviado de "{SITENAME}" por {FROM_USERNAME} que se mostrou interessado no Tópico seguinte:
{TOPIC_NAME}

Pode vê-lo em:
{U_TOPIC}

Esta é uma mensagem automática que não foi vista nem aprovada por nenhum Administrador.
Se desejar queixar-se sobre a recepção deste email por favor contate o Administrador usando o seguinte endereço:
{BOARD_CONTACT}.

Envie o cabeçalho desta mensagem.


~~~~~~~~~~~~~~~~~~~~~~~~~~~~

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} {FORUM_NAME} - Notificação de resposta ao Fórum

Olá {USERNAME};

Está a observar o "{FORUM_NAME}", em "{SITENAME}", onde há uma resposta nova ao Tópico "{TOPIC_TITLE}".
Pode vê-la clicando no seguinte endereço:
{U_NEWEST_POST}
Não serão enviadas mais notificações enquanto não visitar o Tópico.

Se não pretende continuar a observar o Fórum, pode clicar em "Parar de observar este Fórum" no Fórum indicado ou no seguinte endereço:
{U_STOP_WATCHING_FORUM}


Obrigado {USERNAME}.
Continue a participar ativamente.
A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} {GROUP_NAME} - Bem vindo ao Grupo

Parabéns {USERNAME};

Foi adicionado ao Grupo "{GROUP_NAME}" em "{SITENAME}".
Este procedimento é da responsabilidade do Líder do Grupo ou do Administrador do Fórum.
Contate-o para mais informações.

Saiba mais sobre este Grupo no seguinte endereço:
{U_GROUP}


Obrigado {USERNAME}.
Continue a participar ativamente.
A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} {GROUP_NAME} - Inscrição aprovada

Parabéns {USERNAME};

O seu pedido para entrar no Grupo "{GROUP_NAME}" em "{SITENAME}" foi aceite.
Pode ver mais informações sobre o "{GROUP_NAME}" no seguinte endereço:
{U_GROUP}


Obrigado {USERNAME}.
Continue a participar ativamente.
A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} {GROUP_NAME} Nova inscrição

Olá {USERNAME};

O Utilizador {REQUEST_USERNAME} pediu entrar no Grupo "{GROUP_NAME}" no qual é Líder em "{SITENAME}".
Poderá aprovar ou recusar este pedido no endereço seguinte:
{U_PENDING}



{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} Instalação do phpBB

Parabéns,

O phpBB foi instalado correctamente no seu Servidor.

Este e-mail contém informações importantes sobre a instalação do seu Fórum e deve ser guardado para referência. A sua senha foi armazenada na nossa Base de Dados de forma segura e não pode ser recuperada. No caso de a esquecer, poderá redefini-la, usando o endereço de e-mail associado à sua conta.

----------------------------
Utilizador: {USERNAME}

Endereço do Fórum: {U_BOARD}
----------------------------

Informações úteis sobre o software phpBB podem ser encontradas na directoria docs da sua instalação e em phpBB.com na página de suporte - http://www.phpbb.com/support/

A fim de manter o seu Fórum seguro e protegido, é altamente recomendável mantê-lo atualizado com as versões mais recentes deste de software. Para sua comodidade, uma lista de endereços está disponível na página acima referenciada.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} {FORUM_NAME} - Novo Tópico

Olá {USERNAME},

Está a observar o "{FORUM_NAME}" em "{SITENAME}", onde foi criado o seguinte Tópico:
"{TOPIC_TITLE}". 

Pode vê-lo no seguinte endereço:
{U_FORUM}
Não receberá mais notificações enquanto não visitar este Fórum.


Se não pretende continuar a observar o Fórum, tanto poderá clicar em
"Parar de observar este Fórum" no Fórum mencionado, visitando o seguinte endereço:
{U_STOP_WATCHING_FORUM}


Obrigado {USERNAME}.
Continue a participar ativamente.
A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Denúncia fechada - "{PM_SUBJECT}"

Olá {USERNAME},

Está a receber esta notificação, porque o denúncia que apresentou sobre a mensagem privada "{PM_SUBJECT}" em "{SITENAME}" foi analisada por um Moderador ou Administrador. O relatório já foi encerrado. Se você tiver dúvidas, entre em contato com {CLOSER_NAME} por mensagem privada.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Denúncia apagada - "{PM_SUBJECT}"

Olá {USERNAME},

Está a receber esta notificação, porque a denúncia que apresentou sobre a mensagem "{PM_SUBJECT}" em "{SITENAME}" foi apagada por um moderador ou administrador.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} {POST_SUBJECT} - Mensagem aprovada

Olá {USERNAME},

A sua mensagem "{POST_SUBJECT}" em "{SITENAME}" foi aprovada por um Moderador ou Administrador do Fórum.
Veja a Mensagem no seguinte endereço:
{U_VIEW_POST}

Veja o Tópico no seguinte endereço:
{U_VIEW_TOPIC}


Obrigado {USERNAME}.
Continue a participar ativamente.
A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} {POST_SUBJECT} - Mensagem reprovada

Olá {USERNAME},

A sua Mensagem "{POST_SUBJECT}" em "{SITENAME}" foi reprovada por um Moderador ou Administrador do Fórum.
O motivo da reprovação é o seguinte:
{REASON}


Obrigado {USERNAME}.
Gostaríamos que continuasse a participar ativamente.
A sua colaboração é fundamental para todos nós.


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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} {SITENAME} - Nova Mensagem Privada

Olá {USERNAME};

Tem uma Mensagem Privada nova em "{SITENAME}" com o seguinte assunto:
{SUBJECT}

Veja a Mensagem no seguinte endereço:
{U_VIEW_MESSAGE}


Se não deseja continuar a ser notificado sempre que recebe Mensagens Privadas novas, altere a configuração desta opção no seu "Perfil".


Obrigado {USERNAME}.
Continue a participar ativamente.
A sua colaboração é fundamental para todos nós.



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
Olá {USERNAME};


O email que se segue foi enviado por {FROM_USERNAME} através da sua conta em {SITENAME}.
Se há material abusivo, "spam", ou comentários que considera ofensivos contate o seguinte endereço:
{BOARD_EMAIL}
enviando este email completo, particularmente os cabeçalhos.
Por favor note que o endereço da resposta para este email é do {FROM_USERNAME}.

Mensagem que lhe foi enviada é a seguinte:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Olá {USERNAME};


O email que se segue foi enviado por um Administrador de {SITENAME}.
Se há material abusivo, "spam", ou comentários que considera ofensivos contate o seguinte endereço:
{BOARD_CONTACT}
enviando este email completo, particularmente os cabeçalhos.
Por favor, note que o remetente desta mensagem é o Fórum (pela conta de IM do mesmo).

A Mensagem que lhe foi enviada é a seguinte:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} {POST_SUBJECT} - Denúncia Bloqueada

Olá {USERNAME};


A sua denúncia da Mensagem "{POST_SUBJECT}" no Tópico "{TOPIC_TITLE}" em "{SITENAME}" foi vista e bloqueada por um Moderador ou um Administrador.
Se tem mais perguntas a este respeito, contate o Utilizador {CLOSER_NAME} por Mensagem Particular.


Obrigado {USERNAME}.
Continue a participar ativamente.
A sua colaboração é fundamental para todos nós.



{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} {POST_SUBJECT} - Denúncia Apagada

Olá {USERNAME};


A sua Denúncia sobre a mensagem "{POST_SUBJECT}" no Tópico "{TOPIC_TITLE}" em "{SITENAME}" foi apagada por um Administrador ou Moderador.


Obrigado {USERNAME}.
Continue a participar ativamente.
A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Tópico {TOPIC_TITLE} aprovado

Olá {USERNAME};


O seu Tópico "{TOPIC_TITLE}" em {SITENAME} foi aprovado por um Moderador ou Administrador.
Pode vê-lo no seguinte endereço:
{U_VIEW_TOPIC}


Obrigado {USERNAME}.
Continue a participar ativamente.
A sua colaboração é fundamental para todos nós.



{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Tópico {TOPIC_TITLE} reprovado

Olá {USERNAME};


O seu Tópico "{TOPIC_TITLE}" em {SITENAME} não foi aprovado.

O motivo da não aprovação é o seguinte:
{REASON}


Obrigado {USERNAME}.
Gostaríamos que continuasse a participar ativamente.
A sua colaboração é fundamental para todos nós.



{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Notificação de Resposta ao Tópico {TOPIC_TITLE}

Olá {USERNAME};

Está a observar o Tópico "{TOPIC_TITLE}" em "{SITENAME}", onde há uma nova Mensagem que pode ver no seguinte endereço:
{U_NEWEST_POST}
Não receberá mais notificações enquanto não visitar o Tópico.

Pode ver o Tópico no seguinte endereço:
{U_TOPIC}


Se não pretende continuar a observar o Tópico, pode clicar em "Parar de observar Tópico" no Tópico indicado ou no atalho seguinte:
{U_STOP_WATCHING_TOPIC}


{USERNAME}, obrigado pela sua colaboração.




{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Reativação de Registo

Olá {USERNAME},

Devido a uma alteração do seu Perfil em "{SITENAME}" o registo necessita de ser reativado.
Para isso deverá proceder à sua ativação no endereço seguinte:
{U_ACTIVATE}


{USERNAME}, obrigado pelo seu registo em "{SITENAME}".
Participe ativamente. A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Registo desativado

Olá {USERNAME};

Devido a uma alteração do seu Perfil em "{SITENAME}" o registo necessita de ser reativado.

Para voltar a entrar em "{SITENAME} é necessário que um Administrador reative a sua conta.
Quando isso acontecer será notificado por email.


Pedimos desculpa por este incómodo. No entanto esta ação é fundamental por razões de segurança.
{USERNAME}, obrigado pela sua colaboração.



{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Pedido de Nova Senha

Olá {USERNAME};

Pediu (ou alguém por si) uma nova senha para a sua conta em "{SITENAME}".
Se não a solicitou ignore este email. Se continuar a receber emails com este conteúdo informe imediatamente o Administrador do Fórum.

A nova senha é a seguinte:
==============================================
Senha: {PASSWORD}
==============================================

Antes de poder utilizá-la tem que proceder à sua ativação no seguinte endereço:
{U_ACTIVATE}

A sua senha foi codificada na nossa Base de Dados e não é recuperável.
Se a perder continua a ser possível alterar a senha na página do seu Perfil.
Em caso de dificuldade contate o Administrador.



{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Reativação do registo em {SITENAME}

Olá {USERNAME};

O Administrador pede-lhe que reative a sua conta que se encontra atualmente inativa.


As informações da sua conta são as seguintes:
==============================================
Utilizador: {USERNAME}
==============================================

A sua senha foi armazenada na nossa Base de Dados de forma segura e não pode ser recuperada. No caso de a esquecer, poderá redefini-la, usando o endereço de e-mail associado à sua conta.


Reative a sua conta no seguinte endereço:
{U_ACTIVATE}
Guarde este email.

{USERNAME}, obrigado pelo seu registo em "{SITENAME}".
Participe ativamente. A sua colaboração é fundamental para todos nós.


{EMAIL_SIG} ',
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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Aviso de registo inativo

Olá {USERNAME};

Esta notificação é um aviso de que a sua conta em "{SITENAME}", criada em {REGISTER_DATE}, permanece inativa. Se quiser ativar essa conta, visite o seguinte link:

Para sua comodidade reenviamos o endereço de ativação:
{U_ACTIVATE}


{USERNAME}, obrigado pelo seu registo em "{SITENAME}".
Participe ativamente. A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Bem vindo ao Fórum {SITENAME}

{WELCOME_MSG}

LEIA ATENTAMENTE este email e guarde-o para consultas posteriores.

A informação da sua conta é a seguinte:
==============================================
Utilizador: {USERNAME}
==============================================

Por favor, visite o seguinte link para ativar sua conta:
{U_ACTIVATE}

A sua senha foi armazenada na nossa Base de Dados de forma segura e não pode ser recuperada. No caso de a esquecer, poderá redefini-la, usando o endereço de e-mail associado à sua conta.

{USERNAME}, obrigado pelo seu registo em "{SITENAME}".
Participe ativamente. A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Bem vindo ao Fórum {SITENAME}

{WELCOME_MSG}

LEIA ATENTAMENTE este email e guarde-o para consultas posteriores.

A informação da sua conta é a seguinte:
==============================================
Utilizador: {USERNAME}

Endereço do Fórum: {U_BOARD}
==============================================

A sua senha foi armazenada na nossa Base de Dados de forma segura e não pode ser recuperada. No caso de a esquecer, poderá redefini-la, usando o endereço de e-mail associado à sua conta.


{USERNAME}, obrigado pelo seu registo em "{SITENAME}".
Participe ativamente. A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Bem vindo ao Fórum {SITENAME}

{WELCOME_MSG}

LEIA ATENTAMENTE este email e guarde-o para consultas posteriores.

A informação da sua conta é a seguinte:
==============================================
Utilizador: {USERNAME}

Endereço do Fórum: {U_BOARD}
==============================================

Por favor, visite o seguinte link para ativar sua conta:
{U_ACTIVATE}

A sua senha foi armazenada na nossa Base de Dados de forma segura e não pode ser recuperada. No caso de a esquecer, poderá redefini-la, usando o endereço de e-mail associado à sua conta.

{USERNAME}, obrigado pelo seu registo em "{SITENAME}".
Participe ativamente. A sua colaboração é fundamental para todos nós.


{EMAIL_SIG}',
));


