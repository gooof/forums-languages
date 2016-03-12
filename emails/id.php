<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Aktifkan account pengguna

Hallo,

Account yang dimiliki oleh "{USERNAME}" telah dinonaktifkan atau baru diciptakan, anda harus memeriksa keterangan-keterangan dari pengguna ini (jika dibutuhkan) dan menangani sewajarnya.

Gunakan link ini untuk melihat profil dari pengguna:
{U_USER_DETAILS}

Gunakan link ini untuk mengaktifkan account tersebut:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Berikut ini adalah sebuah e-mail yang dikirimkan kepada anda oleh administrator "{SITENAME}". Jika pesan ini dianggap sebagai spam, mengandung penghinaan atau komentar lain yang anda temukan sebagai penyerangan, silahkan menghubungi webmaster pada alamat berikut ini:

{CONTACT_EMAIL}

Mengikutsertakan keseluruhan e-mail ini (terutama judulnya). 

Pesan dikirim kepada anda sebagai berikut:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Account Aktif

Hallo {USERNAME},

Account anda pada situs "{SITENAME}" telah diaktifkan sekarang, anda boleh masuk dengan menggunakan nama pengguna dan kata sandi yang anda terima pada e-mail sebelumnya.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Selamat datang di "{SITENAME}"

{WELCOME_MSG}

Silahkan simpan e-mail ini sebagai catatan. Berikut ini adalah informasi account anda:

----------------------------
Nama Pengguna: {USERNAME}
Kata Sandi: {PASSWORD}

Halaman URL: {U_BOARD}
----------------------------

Account anda belum aktif sekarang ini dan perlu disetujui oleh administrator sebelum anda boleh masuk. Anda akan menerima e-mail yang lain setelah disetujui.

Mohon agar mengingat kata sandi anda yang telah dienkripsi di database kami dan kami tidak bisa memberikan kata sandi tersebut kepada anda. Akan tetapi, apabila anda tidak mengingat kata sandi anda, anda bisa meminta kata sandi yang baru yang akan diaktifkan kembali oleh administrator.

Terima kasih atas pendaftarannya.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Selamat Datang Di "{SITENAME}"

{WELCOME_MSG}

Sesuai dengan COPPA account anda diaktifkan sekarang ini.

Silahkan cetak pesan ini dan untuk ditandatangani oleh orang tua atau wali anda. Kemudian silahkan fax ke:

{FAX_INFO}

Atau kirimkan e-mail ke:

{MAIL_INFO}

------------------------------ POTONG DI SINI ------------------------------
Ijin untuk berpartisipasi pada "{SITENAME}" - {U_BOARD}

Nama Pengguna: {USERNAME}
E-mail: {EMAIL_ADDRESS}

SAYA TELAH MENINJAU INFORMASI YANG DIBERIKAN OLEH ANAK SAYA DAN DENGAN INI MEMBERIKAN IJIN KE "{SITENAME}" UNTUK MENYIMPAN INFORMASI INI. 
SAYA MENGETAHUI BAHWA INFORMASI INI DAPAT DIUBAH KAPAN SAJA DENGAN MEMASUKKAN KATA SANDI. 
SAYA MENGETAHUI BAHWA SAYA DAPAT MEMINTA AGAR INFORMASI INI DISINGKIRKAN DARI "{SITENAME}" SETIAP WAKTU.


Orang tua atau wali 
(tuliskan nama anda di sini): _____________________

(tanda tangan di sini): __________________ 

Tanggal: _______________

------------------------------ POTONG DI SINI ------------------------------


Segera sesudah administrator menerima formulir di atas melalui fax atau e-mail biasa, account anda akan diaktifkan.

Mohon agar mengingat kata sandi anda yang telah dienkripsi di database kami dan kami tidak dapat memberikan kata sandi itu kembali untuk anda. Akan tetapi, jika anda lupa kata sandi anda, anda dapat meminta password yang baru yang akan diaktifkan kembali sama seperti halnya account ini.

Terima kasih atas pendaftarannya.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Selamat Datang Ke "{SITENAME}"

{WELCOME_MSG}

Sesuai dengan COPPA account anda diaktifkan sekarang ini.

Silahkan cetak pesan ini dan untuk ditandatangani oleh orang tua atau wali anda. Kemudian silahkan kirim fax ke:

{FAX_INFO}

Atau kirimkan e-mail ke:

{MAIL_INFO}

------------------------------ POTONG DI SINI ------------------------------
Ijin untuk berpartisipasi pada "{SITENAME}" - {U_BOARD}

Nama Pengguna: {USERNAME}
Kata Sandi: {PASSWORD}
E-mail: {EMAIL_ADDRESS}

SAYA TELAH MENINJAU INFORMASI YANG DIBERIKAN OLEH ANAK SAYA DAN DENGAN INI MEMBERIKAN IJIN KE "{SITENAME}" UNTUK MENYIMPAN INFORMASI INI. 
SAYA MENGETAHUI BAHWA INFORMASI INI DAPAT DIUBAH KAPAN SAJA DENGAN MEMASUKKAN KATA SANDI. 
SAYA MENGETAHUI BAHWA SAYA DAPAT MEMINTA AGAR INFORMASI INI DISINGKIRKAN DARI "{SITENAME}" SETIAP WAKTU.


Orang tua atau wali
(tuliskan nama anda di sini): _____________________

(tanda tangan di sini): __________________ 

Tanggal: _______________

------------------------------ POTONG DI SINI ------------------------------


Segera sesudah administrator menerima formulir di atas melalui fax atau e-mail biasa, account anda akan diaktifkan.

Mohon agar mengingat kata sandi anda yang telah dienkripsi di database kami dan kami tidak dapat memberikan kata sandi itu kembali untuk anda. Akan tetapi, jika anda lupa kata sandi anda, anda dapat meminta password yang baru yang akan diaktifkan kembali sama seperti halnya account ini.

Terima kasih atas pendaftarannya.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - E-mail teman

Hallo {TO_USERNAME},

E-mail ini dikirim dari "{SITENAME}" oleh {FROM_USERNAME} yang menganggap anda tertarik dengan topik berikut ini:

{TOPIC_NAME}

Anda dapat menemukannya pada:

{U_TOPIC}

Pesan dari {FROM_USERNAME} juga dapat dimasukkan dibawah ini. Mohon dicatat, bahwa pesan ini belum dilihat ataupun disetujui oleh administrator. Jika anda ingin mengadukan keluhan telah menerima e-mail ini, silahkan menghubungi administrator di {BOARD_CONTACT}. Mohon mengikutkan judul pesan ketika menghubungi alamat-alamat ini.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Pemberitahuan Post Forum - "{FORUM_NAME}"

Hallo {USERNAME},

Anda menerima pemberitahuan ini karena anda sedang memperhatikan forum , "{FORUM_NAME}" di "{SITENAME}". Forum ini telah menerima sebuah balasan dari topik "{TOPIC_TITLE}" sejak kunjungan terakhir anda. Anda dapat menggunakan link berikut ini untuk melihat balasan terakhir yang belum terbaca, tidak ada pemberitahuan lagi yang akan dikirim sebelum anda mengunjungi topik tersebut.

{U_NEWEST_POST}

Jika anda ingin melihat topik tersebut, silahkan klik di link berikut ini:
{U_TOPIC}

Jika anda ingin melihat forum tersebut, silahkan klik di link berikut ini:
{U_FORUM}

Jika anda tidak lagi menginginkan untuk memperhatikan forum ini, anda dapat mengklik link "Berhenti berlangganan" yang terdapat dibawah forum, atau dengan mengklik link berikut ini:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Anda telah dimasukkan ke grup pengguna 

Selamat,

Anda telah dimasukkan ke grup pengguna "{GROUP_NAME}" di "{SITENAME}".
Hal tersebut dilakukan oleh pemimpin grup atau administrator, silahkan hubungi mereka untuk informasi lebih lanjut.

Anda dapat melihat informasi mengenai grup-grup anda di sini::
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Permintaan untuk bergabung dengan grup anda telah dibuat

Yang terhormat, {USERNAME},

Pengguna "{REQUEST_USERNAME}" telah meminta untuk bergabung dengan grup "{GROUP_NAME}" yang anda moderasi di "{SITENAME}".
Untuk menyetujui atau menolak permintaan ini silahkan kunjungi link berikut ini:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB terinstal

Selamat,

Anda telah berhasil menginstal phpBB di server anda.

E-mail ini mengandung informasi yang penting pada instalasi anda yang harus dijaga. Kata sandi ini telah dienkripsi dan tidak bisa didapatkan kembali, akan tetapi anda bisa meminta kata sandi yang baru jika kata sandi tersebut hilang.

----------------------------
Nama Pengguna: {USERNAME}
Kata Sandi: {PASSWORD}

URL Halaman: {U_BOARD}
----------------------------

Informasi yang berguna pada instalasi phpBB anda dapat ditemukan di folder docs dan di phpBB.com\'s support page - http://www.phpbb.com/support/

Untuk menjaga kerahasiaan dan keamanan, sangat disarankan supaya anda tetap terkini dengan software keluaran terbaru yang dapat dengan mudah dilakukan dengan berlangganan ke phpBB.com\'s mailing list, yang dialamatkan di atas.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Pemberitahuan topik baru - "{FORUM_NAME}"

Hallo {USERNAME},

Anda mendapatkan pemberitahuan ini karena anda sedang memperhatikan forum "{FORUM_NAME}" pada "{SITENAME}". Forum ini telah menerima sebuah topik baru sejak kunjungan terakhir anda, "{TOPIC_TITLE}". Anda dapat menggunakan link berikut ini untuk melihat forum tersebut, tidak akan ada lagi pemberitahuan yang akan dikirim kepada anda sampai anda mengunjungi forum tersebut.

{U_FORUM}

Jika anda sudah tidak ingin memperhatikan forum ini lagi, anda dapat mengklik link "Berhenti berlangganan" yang terdapat di bawah forum, atau dengan mengklik link berikut ini:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Laporan ditutup - "{PM_SUBJECT}"

Hallo {USERNAME},

 anda memperoleh notifikasi ini karena laporan yang ajukan mengenai pesan pribadi "{PM_SUBJECT}" di "{SITENAME}" sudah ditujukan pada moderator ataupun administrarot. Laporan tersebut sekarang ditutup. Jika anda memiliki pertanyaan lebih lanjut, silahkan hubungi {CLOSER_NAME} dengan pesan pribadi.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Laporan dihapus - "{PM_SUBJECT}"

Hallo {USERNAME},

 anda menerima notifikasi ni karena laporan yang anda ajukan mengenai pesan pribadi "{PM_SUBJECT}" di "{SITENAME}" sudah dihapus oleh moderator atau administrator.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Post disetujui - "{POST_SUBJECT}"

Hallo {USERNAME},

Anda menerima pemberitahuan ini karena post anda "{POST_SUBJECT}" di "{SITENAME}" telah disetujui oleh moderator atau administrator.

Jika anda ingin melihat post tersebut, klik link berikut ini:
{U_VIEW_POST}

Jika anda ingin melihat topik tersebut, klik link berikut ini:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Post ditolak - "{POST_SUBJECT}"

Hallo {USERNAME},

Anda menerima pemberitahuan ini karena post anda "{POST_SUBJECT}" di "{SITENAME}" telah ditolak oleh moderator ataupun administrator.

Alasan berikut ini diberikan atas penolakan tersebut:

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

you have received a new private message to your account on "{SITENAME}". You can view your new message by clicking on the following link: {U_VIEW_MESSAGE}
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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Pesan pribadi sudah sampai

Hallo {USERNAME},

Anda telah menerima sebuah pesan pribadi yang baru dari "{AUTHOR_NAME}" di "{SITENAME}" dengan subjek berikut ini:

{SUBJECT}

Anda dapat melihat pesan baru anda dengan mengklik link berikut ini:

{U_VIEW_MESSAGE}

Dalam hal ini, anda telah meminta untuk diberitahukan, mohon diingat bahwa anda dapat memilih untuk tidak diberitahukan atas pesan baru dengan mengubah pengaturan yang sesuai di profil anda.

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
Hallo {TO_USERNAME},

Berikut ini adalah e-mail yang dikirimkan kepada anda oleh {FROM_USERNAME} melalui account anda di "{SITENAME}". Jika pesan ini dianggap sebagai spam, mengandung penghinaan ataupun komentar lain yang anda temukan sebagai penyerangan, silahkan hubungi webmaster dengan alamat berikut ini:

{BOARD_CONTACT}

Mengikutsertakan keseluruhan e-mail (terutama sekali judulnya). Harap dicatat bahwa alamat balasan telah diatur sedemikian rupa dari {FROM_USERNAME}.

Pesan dikirim kepada anda sebagai berikut:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Hallo {TO_USERNAME},

Berikut ini adalah e-mail yang dikirimkan kepada anda oleh {FROM_USERNAME} melalui account anda di "{SITENAME}". Jika pesan ini dianggap sebagai spam, mengandung penghinaan ataupun komentar lain yang anda temukan sebagai penyerangan, silahkan hubungi webmaster dengan alamat berikut ini:

{BOARD_CONTACT}

Mengikutsertakan keseluruhan e-mail. Mohon dicatat bahwa alamat pengirim telah diatur ke IM account halaman.

Pesan dikirim kepada anda sebagai berikut:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Laporan ditutup - "{POST_SUBJECT}"

Hallo {USERNAME},

Anda menerima pemberitahuan ini karena laporan yang anda file-kan di post "{POST_SUBJECT}" pada topik "{TOPIC_TITLE}" di "{SITENAME}" telah ditangani oleh moderator atau administrator. Setelah itu laporan ditutup. Jika anda memiliki pertanyaan lebih lanjut silahkan hubungi {CLOSER_NAME} dengan pesan pribadi.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Laporan dihapus - "{POST_SUBJECT}"

Hallo {USERNAME},

Anda menerima pemberitahuan ini karena laporan yang anda file-kan di post "{POST_SUBJECT}" pada topik "{TOPIC_TITLE}" di "{SITENAME}" telah dihapus oleh moderator atau administrator.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/test.txt' 		=> '{EMAILSUBJECT:} phpBB - Test mail

Hello {USERNAME},

Congratulations. If you received this email, phpBB is correctly configured to send emails.

In case you require assistance, please visit the support forums - http://www.forums3.com/

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Topik disetujui - "{TOPIC_TITLE}"

Hallo {USERNAME},

Anda menerima pemberitahuan ini karena topik anda "{TOPIC_TITLE}" di "{SITENAME}" telah disetujui oleh moderator atau administrator.

Jika anda ingin melihat topik ini, silahkan klik link berikut ini:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Topik ditolak - "{TOPIC_TITLE}"

Hallo {USERNAME},

Anda menerima pemberitahuan ini karena topik anda "{TOPIC_TITLE}" di "{SITENAME}" telah ditolak oleh moderator atau administrator.

Alasan berikut ini diberikan atas penolakan tersebut:

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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Pengaktifan kembali account anda

Hallo {USERNAME},

Account anda di "{SITENAME}" telah dinonaktifkan, kemungkinan dikarenakan oleh perubahan yang dibuat pada profil anda. Untuk mengaktifkan account anda kembali, anda harus mengklik link dibawah ini:

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Account anda telah dinonaktifkan

Hallo {USERNAME},

Account anda di "{SITENAME}" telah dinonaktifkan, kemungkinan dikarenakan oleh perubahan yang dibuat pada profil anda. Administrator harus mengaktifkannya sebelum anda dapat masuk. Anda akan menerima pemberitahuan yang lain setelah account anda diaktifkan.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Pengaktifan kata sandi yang baru

Hallo {USERNAME}

Anda menerima pemberitahuan ini karena anda telah (atau seseorang yang menganggap dirinya adalah anda) telah meminta sebuah kata sandi yang baru untuk account anda di "{SITENAME}". Jika anda tidak meminta pemberitahuan ini, mohon diabaikan saja, dan jika anda tetap menerima pemberitahuan ini silahkan menghubungi administrator.

Untuk menggunakan kata sandi yang baru anda harus mengaktifkannya. Untuk mengaktifkan silahkan klik link yang diberikan di bawah ini.

{U_ACTIVATE}

Jika berhasil, maka anda akan dapat masuk menggunakan kata sandi berikut ini:

Kata Sandi: {PASSWORD}

Tentunya anda dapat mengubah kata sandi tersebut melalui halaman profil. Jika anda mengalami kesulitan, silahkan menghubungi administrator.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Pengaktifan kembali account anda di "{SITENAME}"

Administrator meminta agar account anda diaktifkan kembali. Account anda sekarang ini masih belum aktif.
Silahkan ikuti langkah-langkah berikut ini untuk mengaktifkan account anda kembali.

Silahkan simpan e-mail ini sebagai catatan. Berikut ini adalah informasi account anda:

----------------------------
Nama Pengguna: {USERNAME}
----------------------------

Kata sandi anda telah dienkripsi di database kami. Jika anda lupa kata sandi anda, anda dapat meminta kata sandi yang baru yang akan diaktifkan seperti account anda ini.

Silahkan kunjungi link berikut ini untuk mengaktifkan account anda kembali:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Pemberitahuan account nonaktif

Hallo {USERNAME},

Pada tanggal {REGISTER_DATE} anda mendaftarkan sebuah account baru di "{SITENAME}". Sampai saat ini anda belum mengaktifkan account ini sebagai salah satu syarat untuk bisa masuk. Untuk kenyamanan anda link aktifasi diulangi di bawah ini.

{U_ACTIVATE}

Terima kasih atas pendaftarannya di "{SITENAME}", kami menantikan partisipasi anda.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Selamat datang di "{SITENAME}"

{WELCOME_MSG}

Silahkan simpan e-mail ini sebagai catatan anda. Berikut ini adalah informasi account anda:

----------------------------
Nama Pengguna: {USERNAME}
----------------------------

Kata sandi anda telah dienkripsi di database kami. Jika anda lupa kata sandi anda, anda dapat meminta kata sandi yang baru yang akan diaktifkan seperti account anda ini.

Account anda dinonaktifkan sekarang ini. Anda tidak dapat menggunakannya sebelum anda mengunjung link berikut ini:

{U_ACTIVATE}


Terima kasih atas pendaftarannya.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Selamat datang di "{SITENAME}"

{WELCOME_MSG}

Silahkan simpan e-mail ini sebagai catatan. Berikut ini adalah informasi account anda:

----------------------------
Nama Pengguna: {USERNAME}
{PASSWORD_EXTRA_LINE}
URL: {U_BOARD}
----------------------------

Silahkan mengingat kata sandi anda karena sudah dienkripsu di database kami dan kami tidak dapat memberikannya lagi kepada anda. Akan tetapi, jika anda lupa kata sandi anda, anda dapat meminta kata sandi yang baru yang akan diaktifkan seperti account anda ini.

Terima kasih atas pendaftarannya.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Selamat datang di "{SITENAME}"

{WELCOME_MSG}

Silahkan simpan e-mail ini sebagai catatan. Berikut ini adalah informasi account anda:

----------------------------
Nama Pengguna: {USERNAME}
{PASSWORD_EXTRA_LINE}
URL: {U_BOARD}
----------------------------

Account anda masih belum aktif sekarang ini. Anda tidak dapat menggunakannya sampai anda mengunjungi link berikut ini:

{U_ACTIVATE}

Silahkan mengingat kata sandi anda karena sudah dienkripsu di database kami dan kami tidak dapat memberikannya lagi kepada anda. Akan tetapi, jika anda lupa kata sandi anda, anda dapat meminta kata sandi yang baru yang akan diaktifkan seperti account anda ini.

Terima kasih atas pendaftarannya.

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
