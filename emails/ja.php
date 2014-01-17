<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} アカウントの有効化が必要です

「{USERNAME}」さんのアカウントが無効化されたかまたは新規に作成されました。
入力したプロフィール情報に間違いがないか、あるいは身に覚えがあるかどうかを確認の上
もし問題が無ければアカウントを有効化してください。

プロフィール情報を見るにはこちらをクリックしてください：
{U_USER_DETAILS}

確認して問題が無ければこちらをクリックしてアカウントを有効化してください：
{U_ACTIVATE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
このメールは フォーラムサイト「{SITENAME}」 の管理人が送信しました。
メッセージがスパムや誹謗中傷などを含むものであれば下記アドレスからウェブマスターにご連絡ください。

{CONTACT_EMAIL}

上記アドレスにメールする場合、メールの全内容を（特にヘッダー情報を含めて）送信してください。

以下があなたへのメッセージです
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} アカウントが有効化されました

{USERNAME} さん

フォーラムサイト「{SITENAME}」 のアカウントが有効化されました。
いつでもログインしていただけます。

パスワードはデータベース内に暗号化された状態で保管されます。
暗号化されたパスワードを元の状態に復元する事はできません。
その為もしパスワードを忘れてしまった場合、そのパスワードは二度と取り戻す事ができない点にご注意ください。
万が一パスワードを忘れてしまった場合、
アカウントのメールアドレスを使用してパスワードを再発行できます。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} フォーラムサイト "{SITENAME}" へようこそ

{WELCOME_MSG}

このメールは大切に保管してください。
あなたのアカウント情報はこちらです：

----------------------------
ユーザー名： {USERNAME}

フォーラムURL： {U_BOARD}
----------------------------

現在、あなたのアカウントはまだ無効です。
フォーラムサイト管理人がアカウントを有効化するまでログインする事はできません。
アカウントが有効化され次第、その旨の通知メールが送信されます。

パスワードはデータベース内に暗号化された状態で保管されます。
暗号化されたパスワードを元の状態に復元する事はできません。
その為もしパスワードを忘れてしまった場合、そのパスワードは二度と取り戻す事ができない点にご注意ください。
万が一パスワードを忘れてしまった場合、
アカウントのメールアドレスを使用してパスワードを再発行できます。

ユーザー登録して頂きありがとうございました。

{EMAIL_SIG}
',
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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} フォーラムサイト "{SITENAME}" へようこそ

{WELCOME_MSG}

アメリカ合衆国において施行されている COPPA（児童オンラインプライバシー保護法） に準拠し、あなたのアカウントを無効にしています。

アカウントを有効化するには、
先ずこのメールを印刷してあなたの両親または保護者にサインと日付を記入してもらい、
次にその用紙を下記 FAX 番号へ送信する必要があります：

{FAX_INFO}

もしくは下記住所へ郵送してください：

{MAIL_INFO}

------------------------------ 切り取り ----------------------------------------
私は私の子供がフォーラムサイト "{SITENAME}" へ参加する事を認めます - {U_BOARD}

ユーザー名： {USERNAME}
メールアドレス： {EMAIL_ADDRESS}

私は私の子供がインターネットで上記プライベート情報をあなたのサイトへ送信した事を確認しました。
その上でこの情報がフォーラムサイト "{SITENAME}" で保管される事を認めます。
パスワードを入力しさえすればいつでもこの情報を変更できる事を私は理解しています。
フォーラムサイト "{SITENAME}" で保管されているこの情報の削除を、
私はいつでもフォーラムサイト "{SITENAME}" に対し要求できる事を私は理解しています。 

両親または保護者へ
( あなたのお名前 ): _____________________

( サイン ): __________________ 

日付: _______________

------------------------------ 切り取り -----------------------------------------

サインが済み次第、上記用紙を FAX または郵便でお送りください。
フォーラムサイト管理人が受け取り次第、アカウントを有効化いたします。

パスワードはデータベース内に暗号化された状態で保管されます。
暗号化されたパスワードを元の状態に復元する事はできません。
その為もしパスワードを忘れてしまった場合、そのパスワードは二度と取り戻す事ができない点にご注意ください。
万が一パスワードを忘れてしまった場合、
アカウントのメールアドレスを使用してパスワードを再発行できます。

ユーザー登録して頂きありがとうございました。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} フォーラムサイト "{SITENAME}" へようこそ

{WELCOME_MSG}

アメリカ合衆国において施行されている COPPA（児童オンラインプライバシー保護法） に準拠し、あなたのアカウントを無効にしています。

アカウントを有効化するには、
先ずこのメールを印刷してあなたの両親または保護者にサインと日付を記入してもらい、
次にその用紙を下記 FAX 番号へ送信する必要があります：

{FAX_INFO}

または下記住所へ郵送してください：

{MAIL_INFO}

------------------------------ 切り取り ----------------------------------------
私は私の子供がフォーラムサイト "{SITENAME}" へ参加する事を認めます - {U_BOARD}

ユーザー名： {USERNAME}
メールアドレス： {EMAIL_ADDRESS}

私は私の子供がインターネットで上記プライベート情報をあなたのサイトへ送信した事を確認しました。
その上でこの情報がフォーラムサイト "{SITENAME}" で保管される事を認めます。
パスワードを入力しさえすればいつでもこの情報を変更できる事を私は理解しています。
フォーラムサイト "{SITENAME}" で保管されているこの情報の削除を、
私はいつでもフォーラムサイト "{SITENAME}" に対し要求できる事を私は理解しています。 

両親または保護者へ
( あなたのお名前 ): _____________________

( サイン ): __________________ 

日付: _______________

------------------------------ 切り取り -----------------------------------------

サインが済み次第、上記用紙を FAX または郵便でお送りください。
フォーラムサイト管理人が受け取り次第、アカウントを有効化いたします。

パスワードはデータベース内に暗号化された状態で保管されます。
暗号化されたパスワードを元の状態に復元する事はできません。
その為もしパスワードを忘れてしまった場合、そのパスワードは二度と取り戻す事ができない点にご注意ください。
万が一パスワードを忘れてしまった場合、
アカウントのメールアドレスを使用してパスワードを再発行できます。

ユーザー登録して頂きありがとうございました。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} フォーラムサイト "{SITENAME}" より - ユーザーからのお知らせ

{TO_USERNAME} さん

このメールは フォーラムサイト「{SITENAME}」 の ユーザー「{FROM_USERNAME}」 さんが送信しました。
「{FROM_USERNAME}」さんはあなたが下記トピックに興味があると判断してこのお知らせメールを送信しています：

{TOPIC_NAME}

こちらをクリックすればトピックを閲覧できます：

{U_TOPIC}

以下のメッセージはフォーラムサイト管理人がチェックしているわけではない点にご注意ください。
もしこのメールの受け取りについて苦情を述べたい場合、フォーラムサイト管理人の連絡先メールアドレス {BOARD_CONTACT} にメールしてください。
その際、このメールの全内容を引用文として含めてください。

----------
「{FROM_USERNAME}」さんからあなたへのメッセージ

{MESSAGE}
',
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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} 新着記事の通知 - フォーラム "{FORUM_NAME}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
フォーラム「{FORUM_NAME}」 の トピック「{TOPIC_TITLE}」 に返信記事が投稿されました。

これはあなたが最後にフォーラムに訪れた日時より後に返信されたものです。
下記リンクをクリックして返信を確認してください。
トピックを見るまでフォーラムに新しい返信記事が投稿されても通知される事はありません。

{U_NEWEST_POST}

トピックを確認するにはこちらをクリックしてください：
{U_TOPIC}

フォーラムを確認するにはこちらをクリックしてください：
{U_FORUM}

新着記事の通知メールを停止したい場合、
上記リンクのフォーラムで "このフォーラムのウォッチを解除する" をクリックするか
こちらをクリックしてください：

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} グループに追加されました

おめでとうございます

フォーラムサイト「{SITENAME}」 で
あなたは グループ「{GROUP_NAME}」 に追加されました。

このアクションはグループリーダーまたはフォーラムサイト管理人によって実行されました。
このグループ参加についての詳細が知りたい場合、グループリーダーまたはフォーラムサイト管理人に直接お問い合わせください。

グループ情報を見るにはこちらをクリックしてください：
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} グループへの参加が承認されました

おめでとうございます

フォーラムサイト「{SITENAME}」 で
あなたは グループ「{GROUP_NAME}」 への参加を承認されました。

グループのメンバーを確認するにはこちらをクリックしてください：

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} グループ参加の申請があります

{GROUP_MODERATOR} さん

フォーラムサイト「{SITENAME}」 で
ユーザー「{REQUEST_USERNAME}」 さんがあなたの管理する グループ「{GROUP_NAME}」 に参加を申請しました。

申請を承認または却下するにはこちらをクリックしてください：

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB3 のインストールに成功しました

おめでとうございます

phpBB3 のインストールに成功しました。

パスワードはデータベース内に暗号化された状態で保管されます。
暗号化されたパスワードを元の状態に復元する事はできません。
その為もしパスワードを忘れてしまった場合、そのパスワードは二度と取り戻す事ができない点にご注意ください。
万が一パスワードを忘れてしまった場合、
アカウントのメールアドレスを使用してパスワードを再発行できます。

----------------------------
ユーザー名： {USERNAME}

フォーラムURL： {U_BOARD}
----------------------------

phpBB3 のインストールに関して有益な情報を得るには phpBB3 パッケージ内の docs フォルダか、
phpBB オフィシャルサイトのサポートページ - http://www.phpbb.com/support/ をご参照ください。

フォーラムサイトを安全かつ安定して運営するには、phpBB3 を常に最新のバージョンへアップデートしておく事を強く勧めます。
上記オフィシャルサイトのメーリングリストに申し込めば phpBB3 の最新リリース情報をすぐに知る事ができるでしょう。

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} 新着トピックの通知 - フォーラム "{FORUM_NAME}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
フォーラム「{FORUM_NAME}」 に 新しいトピック「{TOPIC_TITLE}」 が投稿されました。

これはあなたが最後にフォーラムに訪れた日時より後に投稿されたものです。
下記リンクをクリックして新着トピックを確認してください。
トピックを見るまでフォーラムに新しいトピックが投稿されても通知される事はありません。

{U_FORUM}

新着トピックの通知メールを停止したい場合
上記リンクのフォーラムでリンク "このフォーラムのウォッチを解除する" をクリックするか
こちらをクリックしてください：

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} 通報 [ PM ] の審査が完了しました - "{PM_SUBJECT}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
あなたが通報したプライベートメッセージ「{PM_SUBJECT}」 が
モデレータまたはフォーラムサイト管理人によって審査されました。

既に審査は完了しています。
この件に関して何か疑問がある場合
審査したユーザー {CLOSER_NAME} に PM してください。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} 通報 [ PM ] は削除されました - "{PM_SUBJECT}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
あなたが通報したプライベートメッセージ「{PM_SUBJECT}」 が
モデレータまたはフォーラムサイト管理人によって削除されました。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} 投稿記事が承認されました - "{POST_SUBJECT}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
あなたが投稿した記事「{POST_SUBJECT}」 がモデレータまたはフォーラムサイト管理人によって承認されました。

記事を確認したい場合はこちらのリンクをクリックしてください：
{U_VIEW_POST}

投稿先トピックを確認したい場合はこちらのリンクをクリックしてください：
{U_VIEW_TOPIC}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} 投稿記事が却下されました - "{POST_SUBJECT}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
あなたが投稿した記事「{POST_SUBJECT}」 がモデレータまたはフォーラムサイト管理人によって却下されました。

却下された理由を確認するにはこちらをクリックしてください：

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} 新着プライベートメッセージの通知

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
ユーザー「{AUTHOR_NAME}」 さんからあなた宛へ下記件名のプライベートメッセージが届きました：

{SUBJECT}

プライベートメッセージを確認するにはこちらをクリックしてください：

{U_VIEW_MESSAGE}

新着プライベートメッセージの通知メールを受け取りたくない場合
ユーザーCP のプロフィール設定で該当のオプションを無効に設定してください。

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
{TO_USERNAME} さん

フォーラムサイト「{SITENAME}」 経由で フォーラムのユーザー「{FROM_USERNAME}」 からあなたへメールが送信されました。
メッセージがスパムや誹謗中傷などを含むものであれば下記アドレスからフォーラムサイト管理人にご連絡ください：

{BOARD_CONTACT}

上記アドレスにメールを送る場合、メールの全内容を（ヘッダー情報を含めて）送信してください。
このメールをそのまま返信すると フォーラムのユーザー「{FROM_USERNAME}」 にメールが送信されますのでご注意ください。

以下があなたへのメッセージです
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
{TO_USERNAME} さん

フォーラムサイト「{SITENAME}」 経由で フォーラムのユーザー「{FROM_USERNAME}」 からあなたへインスタントメッセージが送信されました。
メッセージがスパムや誹謗中傷などを含むものであれば下記アドレスからフォーラムサイト管理人にご連絡ください：

{BOARD_CONTACT}

上記アドレスにメールを送る場合、メールの全内容を（ヘッダー情報を含めて）送信してください。
このメールをそのまま返信すると フォーラムのユーザー「{FROM_USERNAME}」 にメールが送信されますのでご注意ください。

以下があなたへのメッセージです
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} 通報の審査が完了しました - "{POST_SUBJECT}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
トピック「{TOPIC_TITLE}」 の 記事「{POST_SUBJECT}」 に対してあなたが行った通報が
モデレータまたはフォーラムサイト管理人によって審査されました。

既に審査は完了しています。
この件に関して何か疑問がある場合
審査したユーザー {CLOSER_NAME} に直接お問い合わせください。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} 通報は削除されました - "{POST_SUBJECT}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
トピック「{TOPIC_TITLE}」 の 記事「{POST_SUBJECT}」 に対してあなたが行った通報が
モデレータまたはフォーラムサイト管理人によって削除されました。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} トピックが承認されました - "{TOPIC_TITLE}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
あなたが投稿したトピック「{TOPIC_TITLE}」 が
モデレータまたはフォーラムサイト管理人によって承認されました。

トピックを確認するにはこちらをクリックしてください：
{U_VIEW_TOPIC}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} トピックが却下されました - "{TOPIC_TITLE}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
あなたが投稿したトピック「{TOPIC_TITLE}」 が
モデレータまたはフォーラムサイト管理人によって却下されました。

以下は却下された理由です：

{REASON}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} 新着記事の通知 - トピック "{TOPIC_TITLE}"

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
トピック「{TOPIC_TITLE}」 に返信記事が投稿されました。

これはあなたが最後にトピックを見た日時より後に返信されたものです。
下記 URL をクリックして返信をご確認ください。
トピックを見るまでトピックに新しい返信記事が投稿されても通知される事はありません。

新着記事を確認するにはこちらをクリックしてください：
{U_NEWEST_POST}

トピックを確認するにはこちらをクリックしてください：
{U_TOPIC}

フォーラムを確認するにはこちらをクリックしてください：
{U_FORUM}

新着記事の通知メールを停止したい場合
上記のトピック URL にてリンク "このトピックのウォッチを解除する" をクリックするか
こちらをクリックしてください：

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} アカウントを有効化してください

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
あなたのプロフィール情報が変更されたため、あなたのアカウントを一時的に無効にしています。

こちらをクリックしてアカウントを有効化してください：

{U_ACTIVATE}
',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} アカウントが無効化されました

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
あなたのプロフィール情報が変更されたため、あなたのアカウントを一時的に無効にしています。

ログインするにはフォーラムサイト管理人がアカウントを有効化する必要があります。
アカウントが有効化され次第、その旨の通知メールがこのメールアドレスに送信されます。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} 新しいパスワードの有効化

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
あなた（またはあなたを装った誰か）が新しいパスワードの発行を要求しました。

パスワードの発行に身に覚えがない場合はこのメールを無視してください。
何度も同じメールが届く場合はフォーラムサイト管理人にご連絡ください。

新しいパスワードを使用するにはパスワードの有効化が必要です。
下記 URL をクリックしてパスワードを有効化してください。

{U_ACTIVATE}

有効化が完了し次第、下記パスワードでログインできます：

パスワード： {PASSWORD}

このパスワードは ユーザーCP のプロフィール編集ページで変更できます。
何か問題がある場合はフォーラムサイト管理人にご連絡ください。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} フォーラムサイト "{SITENAME}" のアカウントを有効化してください

フォーラムサイト管理人があなたに対してアカウントの再有効化を要求しました。
その為あなたのアカウントは現在、無効化されています。
フォーラムサイトにログインするにはアカウントを再有効化する必要があります。

このメールは大切に保管してください。
あなたのアカウント情報はこちらです：

----------------------------
ユーザー名： {USERNAME}
----------------------------

パスワードはデータベース内に暗号化された状態で保管されます。
暗号化されたパスワードを元の状態に復元する事はできません。
その為もしパスワードを忘れてしまった場合、そのパスワードは二度と取り戻す事ができない点にご注意ください。
万が一パスワードを忘れてしまった場合、
アカウントのメールアドレスを使用してパスワードを再発行できます。

こちらをクリックしてアカウントを有効化してください：

{U_ACTIVATE}

{EMAIL_SIG}
',
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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} アカウント有効化の催促

{USERNAME} さん

フォーラムサイト「{SITENAME}」 で
日付 {REGISTER_DATE} にユーザー登録した事を憶えていますか？

フォーラムサイトにログインするにはアカウントを有効化する必要があります。
もしまだ上記フォーラムサイトに登録ユーザーとして参加する意思がある場合
下記 URL をクリックしてアカウントを有効化してください。

{U_ACTIVATE}

フォーラムサイト 「{SITENAME}」 に参加して頂ける事をお待ちしています。

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} フォーラムサイト "{SITENAME}" へようこそ

{WELCOME_MSG}

このメールは大切に保管してください。
あなたのアカウント情報はこちらです：

----------------------------
ユーザー名： {USERNAME}
----------------------------

パスワードはデータベース内に暗号化された状態で保管されます。
暗号化されたパスワードを元の状態に復元する事はできません。
その為もしパスワードを忘れてしまった場合、そのパスワードは二度と取り戻す事ができない点にご注意ください。
万が一パスワードを忘れてしまった場合、
アカウントのメールアドレスを使用してパスワードを再発行できます。

こちらをクリックしてアカウントを有効化してください：

{U_ACTIVATE}

ご登録ありがとうございました。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} フォーラムサイト "{SITENAME}" へようこそ

{WELCOME_MSG}

このメールは大切に保管してください。
あなたのアカウント情報はこちらです：

----------------------------
ユーザー名： {USERNAME}
{PASSWORD_EXTRA_LINE}
フォーラムURL： {U_BOARD}
----------------------------

パスワードはデータベース内に暗号化された状態で保管されます。
暗号化されたパスワードを元の状態に復元する事はできません。
その為もしパスワードを忘れてしまった場合、そのパスワードは二度と取り戻す事ができない点にご注意ください。
万が一パスワードを忘れてしまった場合、
アカウントのメールアドレスを使用してパスワードを再発行できます。

ご登録ありがとうございました。

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} フォーラムサイト "{SITENAME}" へようこそ - {U_BOARD}

{WELCOME_MSG}

このメールは大切に保管してください。
あなたのアカウント情報はこちらです：

----------------------------
ユーザー名： {USERNAME}
{PASSWORD_EXTRA_LINE}
----------------------------

こちらをクリックしてアカウントを有効化してください：

{U_ACTIVATE}

パスワードはデータベース内に暗号化された状態で保管されます。
暗号化されたパスワードを元の状態に復元する事はできません。
その為もしパスワードを忘れてしまった場合、そのパスワードは二度と取り戻す事ができない点にご注意ください。
万が一パスワードを忘れてしまった場合、
アカウントのメールアドレスを使用してパスワードを再発行できます。

ご登録ありがとうございました。

{EMAIL_SIG}',
));


