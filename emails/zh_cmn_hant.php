<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} 啟用會員帳號

您好：

目前這個會員帳號「{USERNAME}」已經被移除或是剛被建立，您必須要檢查這個會員的相關資料並做出適當的決定。

您可以點選下列連結檢視會員的個人資料：
{U_USER_DETAILS}

您可以點選下列連結直接啟用會員的帳號：
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
下面是來自「{SITENAME}」 的管理員發送給您的電子郵件。如果這訊息是廣告的，包含濫用的或其他令您厭惡的內容，那麼請透過下面的位址聯絡討論區的站長：

{CONTACT_EMAIL}

反映中請包含完整的電子郵件內容（特別是郵件開頭）。

以下是發送給您的訊息：
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} 帳號已經啟用

親愛的 {USERNAME} 您好：

您在「{SITENAME}」 申請的會員帳號已經被管理員啟用了，您現在可以登入。

您的密碼已被安全地存入我們的資料庫，且無法重新取得。如果您忘記了密碼，您可以使用 e-mail 與您的帳號，申請一組新的隨機密碼，再重新設定它。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} 歡迎光臨「{SITENAME}」

{WELCOME_MSG}

請妥善保留這封電子郵件。您的帳號資料如下：

----------------------------
帳號：{USERNAME}

討論區網址：{U_BOARD}
----------------------------

您的帳號尚未啟用，在您登入之前，需要獲得管理員的核准。當它被啟用後，您將會收到另一封 e-mail。

您的密碼已被安全地存入我們的資料庫，且無法重新取得。如果您忘記了密碼，您可以使用 e-mail 與您的帳號，申請一組新的隨機密碼，再重新設定它。

感謝您的註冊。

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} 歡迎光臨「{SITENAME}」

{WELCOME_MSG}

依照 COPPA 規定，您的帳號目前尚未啟用。

請列印以下訊息，並請您的父母或監護人簽上名字和日期。然後傳真到：

{FAX_INFO}

或者郵寄到：

{MAIL_INFO}

------------------------------ 由此裁開 ------------------------------
允許參與「{SITENAME}」 - {U_BOARD} 的同意書

會員名稱：{USERNAME}
E-mail：{EMAIL_ADDRESS}

我已看過保護兒童的條文並且允許「{SITENAME}」 儲存這些資訊。
我瞭解這些資訊可能在任何時候因被輸入密碼而更改。
我瞭解這些資料可能在任何時候由「{SITENAME}」 所移除。


父母或監護人
（請在此簽名）：_____________________

申請人（請在此簽名）：__________________

日期：_______________

------------------------------ 由此裁開 ------------------------------


一旦管理員收到以上的申請傳真或郵件，您的帳號將會被啟用。

您的密碼已被安全地存入我們的資料庫，且無法重新取得。如果您忘記了密碼，您可以使用 e-mail 與您的帳號，申請一組新的隨機密碼，再重新設定它。

感謝您的註冊。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} 歡迎光臨「{SITENAME}」

{WELCOME_MSG}

依照 COPPA 規定，您的帳號目前尚未啟用。

請列印以下訊息，並請您的父母或監護人簽上名字和日期。然後傳真到：

{FAX_INFO}

或者郵寄到：

{MAIL_INFO}

------------------------------ 由此裁開 ------------------------------
允許參與「{SITENAME}」 - {U_BOARD} 的同意書

會員名稱：{USERNAME}
E-mail：{EMAIL_ADDRESS}

我已看過保護兒童的條文並且允許「{SITENAME}」 儲存這些資訊。
我瞭解這些資訊可能在任何時候因被輸入密碼而更改。
我瞭解這些資料可能在任何時候由「{SITENAME}」 所移除。


父母或監護人
（請在此簽名）： _____________________

申請人（請在此簽名）： __________________

日期： _______________

------------------------------ 由此裁開 ------------------------------


一旦管理員收到以上的申請傳真或郵件，您的帳號將會被啟用。

您的密碼已被安全地存入我們的資料庫，且無法重新取得。如果您忘記了密碼，您可以使用 e-mail 與您的帳號，申請一組新的隨機密碼，再重新設定它。

感謝您的註冊。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> 'Subject:「{SITENAME}」 - E-mail 好友

親愛的 {TO_USERNAME} 您好：

這個電子郵件由 {FROM_USERNAME} 發送自「{SITENAME}」，他覺得您也許會對下面的主題感到興趣：

{TOPIC_NAME}

您可以點選下面的連結去檢視這個主題：

{U_TOPIC}

由 {FROM_USERNAME} 發送的訊息也包含在下面。請注意！這些訊息並沒有經過討論區管理員的審查或核准。如果您想要抱怨收到這個電子郵件，請聯絡討論區管理員 {BOARD_CONTACT}。當您聯絡討論區管理員時，請引用這個開頭訊息。

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} 版面文章通知 -「{FORUM_NAME}」

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您在「{SITENAME}」 訂閱了版面「{FORUM_NAME}」， 自從您最後訪問後在這個版面的主題「{TOPIC_TITLE}」收到了新的回覆。您可以點選下面的連結檢視最新尚未閱讀的回覆文章，在您檢視這個主題之前不會再有更多的通知。

{U_NEWEST_POST}

如果您要檢視這個主題，那麼請點選下面的連結：
{U_TOPIC}

如果您要檢視這個版面，那麼請點選下面的連結：
{U_FORUM}

如果您不想要再訂閱這個版面，那麼您可以點選版面上的「取消訂閱版面」連結，或者點選下面的連結：

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} 您已經被加入這個群組

恭喜您！

您已經被加入「{SITENAME}」 的「{GROUP_NAME}」群組了。
這是由群組組長或是管理員所做的決定，如有疑問或想詢問更多資訊可試著連絡他們。

您可以點選底下連結檢視群組的相關資訊：
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} 申請加入您的群組通知

親愛的 {USERNAME} 您好：

會員「{REQUEST_USERNAME}」希望加入您在「{SITENAME}」 所負責的群組「{GROUP_NAME}」中。
請點選底下的連結來核准或是拒絕：

{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB 安裝成功

恭喜您！

您已經成功的在主機上安裝了 phpBB。

這封電子郵件包含有關您安裝的重要資訊，請妥善保管以供參考。您的密碼已被安全地存入我們的資料庫，且無法重新取得。如果您忘記了密碼，您可以使用 e-mail 與您的帳號，申請一組新的隨機密碼，再重新設定它。

----------------------------
帳號：{USERNAME}

討論區網址：{U_BOARD}
----------------------------

您可以在 /docs/ 資料夾和 phpBB.com 的支援網頁 (http://www.phpbb.com/support/) 中找到與 phpBB 軟體相關的有用資訊。

為了確保討論區的安全可靠，我們高度建議您保持目前的軟體釋出版本。為了您的方便，加入在此網頁上面之郵寄名單是有用的。

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} 新主題通知 -「{FORUM_NAME}」

親愛的 {USERNAME} 您好：

您收到這個通知是因為您在「{SITENAME}」 訂閱了版面「{FORUM_NAME}」。自從您最後訪問後在這個版面收到了新主題「{TOPIC_TITLE}」。您可以點選下面的連結檢視此版面，在您檢視版面之前不會再有更多的通知。

{U_FORUM}

如果您不想要再訂閱這個版面，那麼您可以點選版面上的「取消訂閱版面」連結，或者點選下面的連結：

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} 檢舉已結案 -「{PM_SUBJECT}」

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您在「{SITENAME}」關於這則私訊「{PM_SUBJEC}」所提出的檢舉已經在版主或管理員處理後結案。如果您有任何的問題，那麼請以私人訊息聯絡 {CLOSER_NAME}。


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} 檢舉已刪除 -「{PM_SUBJECT}」

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您在「{SITENAME}」 針對這則私訊「{PM_SUBJECT}」所提出的檢舉已經被版主或管理員刪除。


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} 文章已核准 -「{POST_SUBJECT}」

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您在「{SITENAME}」 所發表的文章「{POST_SUBJECT}」已被版主或管理員核准。

如果您要檢視這篇文章，那麼請點選下面的連結：
{U_VIEW_POST}

如果您要檢視這個主題，那麼請點選下面的連結：
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} 文章未核准 -「{POST_SUBJECT}」

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您在「{SITENAME}」 所發表的文章「{POST_SUBJECT}」未被版主或管理員核准。

未核准的理由如下：

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} 新的私人訊息已經送達

親愛的 {USERNAME} 您好：

您在「{SITENAME}」的帳號收到了來自「{AUTHOR_NAME}」新的私人訊息，其標題如下：

{SUBJECT}

您可以點選下面的連結檢視您的新訊息：

{U_VIEW_MESSAGE}

您已經申請討論區在這類事件中通知您，記得您可以在個人資料設定中關閉它而不再收到這類的通知。

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
親愛的 {TO_USERNAME} 您好：

下面是您在「{SITENAME}」 的帳號收到了來自 {FROM_USERNAME} 發送給您的電子郵件。如果這訊息是廣告的，包含濫用的或其他令您厭惡的內容，那麼請透過下面的位址聯絡討論區的管理員：

{BOARD_CONTACT}

反映中請包含完整的電子郵件內容 (特別是郵件開頭)。請注意！這個電子郵件的回覆位址已經設定為 {FROM_USERNAME}。

以下是發送給您的訊息：
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
親愛的 {TO_USERNAME} 您好：

下面是您在「{SITENAME}」 的帳號收到了來自 {FROM_USERNAME} 發送給您的私人訊息。如果這訊息是廣告的，包含濫用的或其他令您厭惡的內容，那麼請透過下面的位址聯絡討論區的管理員：

{BOARD_CONTACT}

反映中請包含完整的訊息。請注意！發送者的位址已經設定為討論區 IM 帳號。

以下是發送給您的訊息：
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} 檢舉已結案 -「{POST_SUBJECT}」

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您在「{SITENAME}」 針對這個主題「{TOPIC_TITLE}」中的文章「{POST_SUBJECT}」所提出的檢舉已經在版主或管理員處理後結案。如果您有任何的問題，那麼請以私人訊息聯絡 {CLOSER_NAME}。


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} 檢舉已刪除 -「{POST_SUBJECT}」

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您在「{SITENAME}」 針對這個主題「{TOPIC_TITLE}」中的文章「{POST_SUBJECT}」所提出的檢舉已經被版主或管理員刪除。


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} 主題已核准 -「{TOPIC_TITLE}」

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您在「{SITENAME}」 所發表的主題「{TOPIC_TITLE}」已通過版主或管理員的審核。

如果您要檢視這個主題，那麼請點選下面的連結：
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} 主題未核准 -「{TOPIC_TITLE}」

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您在「{SITENAME}」 所發表的主題「{TOPIC_TITLE}」未通過版主或管理員的審核。

未核准的理由如下：

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Topic reply notification - "{TOPIC_TITLE}"

Hello {USERNAME},

You are receiving this notification because you are watching the topic "{TOPIC_TITLE}" at "{SITENAME}". This topic has received a reply<!-- IF AUTHOR_NAME !== \'\' --> by {AUTHOR_NAME}<!-- ENDIF --> since your last visit. No more notifications will be sent until you visit the topic.

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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} 重新啟用您的帳號

親愛的 {USERNAME} 您好：

您在「{SITENAME}」的帳號已經被停用了，原因可能是您修改了自己的個人資料。要重新啟用它，請點選以下連結：

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} 您的帳號已經被停用了

親愛的 {USERNAME} 您好：

您在「{SITENAME}」的帳號已經被停用了，原因可能是您修改了自己的個人資料。在管理員沒有啟用它之前，您無法登入本站。當它被啟用後，您將會收到另一封通知信。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} 新密碼啟用

親愛的 {USERNAME} 您好：

您會收到這個通知是因為您 (或者有人假裝是您) 在「{SITENAME}」為您的帳號申請一個新的密碼。如果您沒有提出申請，那麼請忽略這個通知；如果您一直收到類似的通知，那麼請聯絡討論區管理員。

要使用新的密碼必須啟用它。要啟用它，請點選以下連結。

{U_ACTIVATE}

如果啟用成功，那麼您得使用以下的密碼登入討論區：

密碼： {PASSWORD}

當然，您可以經由個人資料頁面去更改這個密碼。如果您有任何的困難，那麼請聯絡討論區管理員。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} 重新啟用您在「{SITENAME}」 的帳號

討論區管理員收到您重新啟用帳號的申請。您的帳號目前是未啟用的。
請依以下所列步驟，以重新啟用您的帳號。

請妥善保管這封信件。您的帳號資訊如下：

----------------------------
會員名稱： {USERNAME}
----------------------------

您的密碼已被安全地存入我們的資料庫，且無法重新取得。如果您忘記了密碼，您可以使用 e-mail 與您的帳號，申請一組新的隨機密碼，再重新設定它。

請點選以下的連結，以重新啟用您的帳號：

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} 未啟用帳號提醒

親愛的 {USERNAME} 您好：

這個通知是提醒您：您於 {REGISTER_DATE} 在「{SITENAME}」 註冊了一個帳號，至今尚未啟用。如果您想要啟用它，那麼請訪問以下連結：

{U_ACTIVATE}

感謝您在「{SITENAME}」 註冊，我們期待您的參與。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} 歡迎光臨「{SITENAME}」

{WELCOME_MSG}

請妥善保管這封信件。您的帳號資訊如下：

----------------------------
會員名稱：{USERNAME}
----------------------------

您的密碼已被安全地存入我們的資料庫，且無法重新取得。如果您忘記了密碼，您可以使用 e-mail 與您的帳號，申請一組新的隨機密碼，再重新設定它。

請訪問下面的連結以啟用您的帳號：

{U_ACTIVATE}


感謝您的註冊。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} 歡迎光臨「{SITENAME}」

{WELCOME_MSG}

請妥善保留這封電子郵件。您的帳號資料如下：

----------------------------
帳號：{USERNAME}
{PASSWORD_EXTRA_LINE}
討論區網址：{U_BOARD}
----------------------------

您的密碼已被安全地存入我們的資料庫，且無法重新取得。如果您忘記了密碼，您可以使用 e-mail 與您的帳號，申請一組新的隨機密碼，再重新設定它。

感謝您的註冊。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} 歡迎光臨「{SITENAME}」

{WELCOME_MSG}

請妥善保留這封電子郵件。您的帳號資料如下：

----------------------------
帳號：{USERNAME}
{PASSWORD_EXTRA_LINE}
討論區網址：{U_BOARD}
----------------------------

請訪問下面的連結以啟用您的帳號：

{U_ACTIVATE}

您的密碼已被安全地存入我們的資料庫，且無法重新取得。如果您忘記了密碼，您可以使用 e-mail 與您的帳號，申請一組新的隨機密碼，再重新設定它。

感謝您的註冊。

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
