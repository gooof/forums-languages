﻿<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Kullanıcı hesabı aktifleştirme

Merhaba,

"{USERNAME}" kullanıcı adı deaktif edildi veya yeni oluşturuldu. Bu kullanıcı hakkındaki bilgileri (eğer gerekiyorsa) kontrol etmelisiniz ve uygun olanı yapmalısınız.

Bu bağlantıyı kullanarak kullanıcının profilini görüntüleyin:
{U_USER_DETAILS}

Bu bağlantıyı kullanarak hesabı aktifleştirin:
{U_ACTIVATE}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Aşağıdaki e-posta size "{SITENAME}" yöneticisi tarafından gönderildi. Eğer bu e-postanın spam olduğunu düşünüyorsanız veya içeriğinden rahatsız olduysanız lütfen alttaki e-posta adresini kullanarak mesaj panosunun webmasterı ile iletişime geçin:

{CONTACT_EMAIL}

Size gönderilen e-posta:
~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Hesap aktif edilmiştir

Merhaba {USERNAME},

"{SITENAME}" mesaj panosunda bulunan hesabınız bir yönetici tarafından aktif edildi, şimdi giriş yapabilirsiniz.

Şifreniz veritabanımızda güvenli bir şekilde saklanmaktadır ve ele geçirilemeyecek durumdadır. Eğer şifrenizi unutursanız, hesabınız ile tanımlı olan e-posta adresinizi kullanarak şifrenizi sıfırlayabilirsiniz.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" mesaj panosuna hoşgeldiniz

{WELCOME_MSG}

Lütfen bu e-postayı saklayın. Kullanıcı bilgileriniz aşağıda bulunmaktadır:

----------------------------
Kullanıcı adı: {USERNAME}
Mesaj panosu URL adresi: {U_BOARD}
----------------------------

Hesabınız şu an pasif durumdadır ve giriş yapabilmeniz için önce bir yönetici tarafından onaylanması gerekmektedir. Onay işlemi gerçekleştiğinde e-posta ile tekrar bilgilendirileceksiniz.

Şifreniz veritabanımızda güvenli bir şekilde saklanmaktadır ve ele geçirilemeyecek durumdadır. Eğer şifrenizi unutursanız, hesabınız ile tanımlı olan e-posta adresinizi kullanarak şifrenizi sıfırlayabilirsiniz.

Üye olduğunuz için teşekkürler.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" forumlarına hoşgeldiniz

{WELCOME_MSG}

COPPA ilkelerine göre, hesabınız şu anda aktif değildir.

Lütfen bu mesajı yazdırın ve ailenize ya da velinize tarihi yazarak imzalatın. Daha sonra şuraya fakslayın:

{FAX_INFO}

Veya e-posta gönderin:

{MAIL_INFO}

------------------------------ BURADAN KESINIZ ------------------------------
"{SITENAME}" - {U_BOARD} katılma izni

Kullanıcı adı: {USERNAME}
E-posta: {EMAIL_ADDRESS}

"{SITENAME}" HAKKINDAKİ BİLGİLERİ ALDIM VE ADI GEÇEN KİŞİNİN ÜYELİĞİNİ ONAYLIYORUM.
BU BİLGİLERİN HERHANGİ BİR ZAMANDA ŞİFRE VE KULLANICI ADI GİRİLEREK DEĞİŞTİRİLEBİLECEĞİNİ KABUL EDİYORUM.
"{SITENAME}" SİTESİNİN İSTEDİĞİ ZAMAN BU BİLGİLERİ BENDEN TALEP EDEBİLECEĞİNİ KABUL EDİYORUM.


Aile veya Sorumlunun
(Adı): _____________________

(İmzası): __________________ 

Tarih: _______________

------------------------------ BURADAN KESINIZ ------------------------------


Mesaj panosu yöneticisi üstteki formu faks ya da normal posta yoluyla aldıktan sonra, hesabınız aktifleştirilecektir.

Şifreniz veritabanımızda güvenli bir şekilde saklanmaktadır ve ele geçirilemeyecek durumdadır. Eğer şifrenizi unutursanız, hesabınız ile tanımlı olan e-posta adresinizi kullanarak şifrenizi sıfırlayabilirsiniz.

Kayıt olduğunuz için teşekkürler.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" forumlarına hoşgeldiniz

{WELCOME_MSG}

COPPA ilkelerine göre, hesabınız şu anda aktif değildir.

Lütfen bu mesajı yazdırın ve ailenize ya da velinize tarihi yazarak imzalatın. Daha sonra şuraya fakslayın:

{FAX_INFO}

Veya e-posta gönderin:

{MAIL_INFO}

------------------------------ BURADAN KESİNİZ ------------------------------
"{SITENAME}" - {U_BOARD} katılma izni

Kullanıcı adı: {USERNAME}
E-posta: {EMAIL_ADDRESS}

"{SITENAME}" HAKKINDAKİ BİLGİLERİ ALDIM VE ADI GEÇEN KİŞİNİN ÜYELİĞİNİ ONAYLIYORUM.
BU BİLGİLERİN HERHANGİ BİR ZAMANDA ŞİFRE VE KULLANICI ADI GİRİLEREK DEĞİŞTİRİLEBİLECEĞİNİ KABUL EDİYORUM.
"{SITENAME}" SİTESİNİN İSTEDİĞİ ZAMAN BU BİLGİLERİ BENDEN TALEP EDEBİLECEĞİNİ KABUL EDİYORUM.


Aile veya Sorumlunun
(Adı): _____________________

(İmzası): __________________ 

Tarih: _______________

------------------------------ BURADAN KESİNİZ ------------------------------


Mesaj panosu yöneticisi üstteki formu faks ya da normal posta yoluyla aldıktan sonra, hesabınız aktifleştirilecektir.

Şifreniz veritabanımızda güvenli bir şekilde saklanmaktadır ve ele geçirilemeyecek durumdadır. Eğer şifrenizi unutursanız, hesabınız ile tanımlı olan e-posta adresinizi kullanarak şifrenizi sıfırlayabilirsiniz.

Üye olduğunuz için teşekkürler.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - Bir arkadaş e-postası

Merhaba {TO_USERNAME},

Bu e-posta size "{SITENAME}" mesaj panosunda kayıtlı olan {FROM_USERNAME} kullanıcısı tarafından gönderildi, alttaki başlığın ilginizi çekebileceğini düşünüyor:

{TOPIC_NAME}

Buradan inceleyebilirsiniz:

{U_TOPIC}

{FROM_USERNAME} kullanıcısı tarafından aşağıdaki bölüme bir mesaj eklenmiş olabilir. Not: Bu mesaj yöneticiler tarafından görüntülenemez veya onaylanamaz. Eğer bu mesajın içeriğinden rahatsız olduysanız lütfen {BOARD_CONTACT} adresinden mesaj panosu yöneticileri ile iletişime geçin. Bu adresle iletişime geçeceğiniz zaman lütfen bu mesajı alıntı yapın.

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Forum mesaj bildirisi - "{FORUM_NAME}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosunda "{FORUM_NAME}" isimli forumu takip ediyorsunuz. Bu forumdaki "{TOPIC_TITLE}" başlığına son ziyaretinizden sonra yeni cevaplar geldi. Alttaki bağlantıyı kullanarak son okunmamış cevabı görüntüleyebilirsiniz, başlığı ziyaret edene kadar daha fazla bildiri gönderilmeyecektir.

{U_NEWEST_POST}

Eğer başlığı görüntülemek istiyorsanız, alttaki bağlantıya tıklayın:
{U_TOPIC}
 
Eğer forumu görüntülemek istiyorsanız, alttaki bağlantıya tıklayın:
{U_FORUM}

Eğer bu forumu takip etmek istemiyorsanız forum içerisindeki "Bu foruma abone olmayı bırak" bağlantısını bulup kullanabilirsiniz, veya alttaki bağlantıya tıklayabilirsiniz:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Bu kullanıcı grubuna eklendiniz

Tebrikler,

"{SITENAME}" mesaj panosunda bulunan "{GROUP_NAME}" grubuna eklendiniz.
Bu eylem, bir grup lideri veya mesaj panosu yöneticisi tarafından yapılmış olabilir, daha fazla bilgi için onlarla iletişime geçin.

Grup bilgilerini buradan görüntüleyebilirsiniz:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Başvurunuz onaylandı

Tebrikler,

"{SITENAME}" mesaj panosunda bulunan "{GROUP_NAME}" grubuna katılım isteğiniz onaylandı.
Aşağıdaki bağlantıya tıklayarak grup üyeliğinizi inceleyebilirsiniz.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Grubunuza katılım için bir istek yapıldı

Değerli {USERNAME},

"{SITENAME}" mesaj panosunda bulunan "{REQUEST_USERNAME}" adlı kullanıcı, yöneticisi olduğunuz "{GROUP_NAME}" grubuna katılmak istiyor.
Grup üyeliğini onaylamak veya reddetmek için lütfen aşağıdaki bağlantıyı ziyaret edin:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB yüklendi

Tebrikler,

phpBB\'yi sunucunuza başarıyla yüklediniz.

Bu e-posta kurulumunuz hakkında önemli bilgiler içermektedir ve gerektiğinde başvurma açısından saklanmalıdır. Şifreniz veritabanımızda güvenli bir şekilde saklanmaktadır ve ele geçirilemeyecek durumdadır. Eğer şifrenizi unutursanız, hesabınız ile tanımlı olan e-posta adresinizi kullanarak şifrenizi sıfırlayabilirsiniz.

----------------------------
Kullanıcı adı: {USERNAME}

Mesaj Panosu URL adresi: {U_BOARD}
----------------------------

phpBB yazılımı hakkında ihtiyacınız olabilecek bilgilere kurulumunuz içerisindeki docs klasöründen ve phpBB.com\'un destek sayfasından ulaşabilirsiniz. - http://www.phpbb.com/support/

Mesaj panonuzu güvende ve emniyette tutmanız için, yazılım güncelleme duyurularını takip etmenizi kesinlikle öneririz. Size yardımcı olması için, sayfanın altındaki e-posta listesini kullanabilirsiniz.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Yeni başlık bildirisi - "{FORUM_NAME}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosunda "{FORUM_NAME}" isimli forumu takip ediyorsunuz. Bu forumda son ziyaretinizden sonra "{TOPIC_TITLE}" isimli yeni bir başlık açıldı. Alttaki bağlantıyı kullanarak bu forumu görüntüleyebilirsiniz, forumu ziyaret edene kadar daha fazla bildiri gönderilmeyecektir.

{U_FORUM}

Eğer bu forumu takip etmek istemiyorsanız forum içerisindeki "Bu foruma abone olmayı bırak" bağlantısını bulup kullanabilirsiniz, veya alttaki bağlantıya tıklayabilirsiniz:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Bildiri kapatıldı - "{PM_SUBJECT}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosunda bildiri yaptığınız "{PM_SUBJECT}" başlıklı özel mesaj bir moderatör ya da yönetici tarafından incelendi. Bildiri şimdi kapatıldı. Eğer daha fazla sorunuz varsa, lütfen {CLOSER_NAME} kullanıcı adı ile özel mesaj yoluyla iletişime geçin.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Bildiri silindi - "{PM_SUBJECT}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosunda bildiri yaptığınız "{PM_SUBJECT}" başlıklı özel mesaj bir moderatör ya da yönetici tarafından silindi.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Mesaj Onaylandı - "{POST_SUBJECT}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosunda bulunan "{POST_SUBJECT}" başlıklı mesajınız bir moderatör veya yönetici tarafından onaylandı.

Eğer mesajı görüntülemek istiyorsanız alttaki bağlantıya tıklayın:
{U_VIEW_POST}

Eğer başlığı görüntülemek istiyorsanız alttaki bağlantıya tıklayın:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Mesaj Onaylanmadı - "{POST_SUBJECT}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosunda bulunan "{POST_SUBJECT}" başlıklı mesajınız bir moderatör veya yönetici tarafından onaylanmadı.

Alttaki verilen sebepten dolayı onaylanmamıştır:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Yeni özel mesaj alındı

Merhaba {USERNAME},

"{SITENAME}" mesaj panosundaki hesabınıza "{AUTHOR_NAME}" tarafından alttaki başlık altında gönderilen yeni bir özel mesaj aldınız:

{SUBJECT}

Yeni mesajınızı alttaki bağlantıya tıklayarak görüntüleyebilirsiniz:

{U_VIEW_MESSAGE}

Unutmayın ki uyarılma seçeneğini profilinizden istediğiniz zaman kapatabilirsiniz.

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
Merhaba {TO_USERNAME},

Bu e-posta size {FROM_USERNAME} tarafından "{SITENAME}" mesaj panosunda bulunan hesabınız aracılığı ile gönderildi. Eğer bu e-postanın spam olduğunu düşünüyorsanız veya içeriğinden rahatsız olduysanız lütfen alttaki e-posta adresiyle iletişime geçin.

{BOARD_CONTACT}

Bu e-posta size {FROM_USERNAME} tarafından gönderildi.

Alttaki mesaj size gönderildi:
~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Merhaba {TO_USERNAME},

Bu e-posta size {FROM_USERNAME} tarafından "{SITENAME}" mesaj panosunda bulunan hesabınız aracılığı ile gönderildi. Eğer bu e-postanın spam olduğunu düşünüyorsanız veya içeriğinden rahatsız olduysanız lütfen alttaki e-posta adresiyle iletişime geçin.

{BOARD_CONTACT}

Not: Gönderici adresi mesaj panosunda bulunan IM hesabına (yahoo, icq, msn v.b.) göre ayarlandı.

Alttaki mesaj size gönderildi
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Bildiri Kapatıldı - "{POST_SUBJECT}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosunda bulunan "{TOPIC_TITLE}" isimli başlıktaki "{POST_SUBJECT}" isimli mesaja yaptığınız bildiri bir moderatör veya yönetici tarafından incelendi. Bildiri daha sonra kapatıldı. Eğer başka sorunuz varsa {CLOSER_NAME} ile özel mesaj yoluyla iletişime geçin.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Bildiri silindi - "{POST_SUBJECT}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosunda bulunan "{TOPIC_TITLE}" isimli başlıktaki "{POST_SUBJECT}" isimli mesaja yaptığınız bildiri bir moderatör veya yönetici tarafından silindi.


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Başlık onaylandı - "{TOPIC_TITLE}"

Merhaba {USERNAME},

Bu e-postayı alıyorsunuz çünkü "{SITENAME}" mesaj panosunda bulunan "{TOPIC_TITLE}" isimli başlığınız bir moderatör veya yönetici tarafından onaylandı.

Eğer başlığı görüntülemek istiyorsanız, alttaki bağlantıya tıklayınız:
{U_VIEW_TOPIC}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Başlık onaylanmadı - "{TOPIC_TITLE}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosunda bulunan "{TOPIC_TITLE}" isimli başlığınız bir moderatör veya yönetici tarafından onaylanmadı.

Alttaki verilen sebepten dolayı onaylanmamıştır:

{REASON}


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Başlık Cevap Bildirisi - "{TOPIC_TITLE}"

Merhaba {USERNAME},

Bu bildiriyi alıyorsunuz çünkü "{SITENAME}" mesaj panosundaki "{TOPIC_TITLE}" isimli başlığı takip ediyorsunuz. Bu başlığa son ziyaretinizden beri yeni bir cevap geldi. Alttaki bağlantıyı kullanarak verilen cevapları görüntüleyebilirsiniz, siz başlığı ziyaret edene kadar daha fazla bildiri gönderilmeyecektir.

Eğer son ziyaretinizden beri gelen yeni mesajı görüntülemek istiyorsanız, alttaki bağlantıya tıklayın:
{U_NEWEST_POST}

Eğer başlığı görüntülemek istiyorsanız, alttaki bağlantıya tıklayın:
{U_TOPIC}

Eğer forumu görüntülemek istiyorsanız, alttaki bağlantıya tıklayın:
{U_FORUM}

Eğer bu başlığı takip etmek istemiyorsanız başlığın altındaki "Bu başlığa abone olmayı bırak" bağlantısını bulup kullanabilirsiniz, ya da alttaki bağlantıya tıklayabilirsiniz:

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Hesabınızı yeniden aktif edin

Merhaba {USERNAME},

"{SITENAME}" mesaj panosunda bulunan hesabınız aktif değil. Bu, genellikle profil değişikliklerinde olur. Hesabınızı aktif etmek için lütfen alttaki bağlantıya tıklayın: 

{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Hesabınızı deaktif edildi

Merhaba {USERNAME},

"{SITENAME}" mesaj panosunda bulunan hesabınız aktif değil, bu genellikle profil değişikliklerinde olur. Giriş yapmadan önce mesaj panosu yöneticisinin hesabınızı aktif hale getirmesi gerekiyor. Bu işlem yapıldığı zaman başka bir bildiri alacaksınız.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Yeni şifre aktivasyonu

Merhaba {USERNAME}

Bu bildiriyi aldınız çünkü "{SITENAME}" mesaj panosunda bulunan hesabınızdan yeni şifre gönderilmesi için istekte bulunuldu. Eğer siz istemediyseniz lütfen mesaj panosu yöneticileriyle iletişime geçin ve bu bildiriyi yoksayın.

Yeni şifrenizi kullanmak için hesabınızı aktif etmeniz gerekmektedir.Lütfen ilk önce alttaki bağlantıya tıklayarak hesabınızı aktif edin.

{U_ACTIVATE}

Yeni şifreniz ile giriş yapabilirsiniz:

Şifre: {PASSWORD}

Şifrenizi profilinizden değiştirebilirsiniz. Herhangi bir zorlukla karşılaşırsanız mesaj panosu yöneticileriyle iletişime geçebilirsiniz.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" mesaj panosunda hesabınızın yeniden aktivasyonu

Bir mesaj panosu yöneticisi, hesabınızın yeniden aktivasyon edilmesini istiyor. Hesabınız şu anda aktif değil.
Hesabınızı yeniden aktif etmek için lütfen burada listelenen adımları takip edin.

Lütfen bu e-postayı kayıtlarınızda saklayın. Hesap bilginiz alttaki gibidir:

----------------------------
Kullanıcı adı: {USERNAME}
----------------------------

Şifreniz veritabanımızda güvenli bir şekilde saklanmaktadır ve ele geçirilemeyecek durumdadır. Eğer şifrenizi unutursanız, hesabınız ile tanımlı olan e-posta adresinizi kullanarak şifrenizi sıfırlayabilirsiniz.

Hesabınızı yeniden aktif etmek için lütfen alttaki bağlantıyı ziyaret edin:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Aktif olmayan hesap hatırlatıcı

Merhaba {USERNAME},

Bu bildiri "{SITENAME}" sitesinde, {REGISTER_DATE} tarihinde oluşturulmuş, aktif olmayan hesabınız için bir hatırlatıcı niteliğindedir. Eğer hesabınızı aktif hale getirmek istiyorsanız, lütfen alttaki bağlantıyı ziyaret edin:

{U_ACTIVATE}

"{SITENAME}" mesaj panosuna kayıt olduğunuz için teşekkür ederiz, katılımlarınızı bekliyoruz.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" forumlarına hoşgeldiniz

{WELCOME_MSG}

Lütfen bu e-postayı saklayın. Kullanıcı bilginiz altta bulunmaktadır:

----------------------------
Kullanıcı adı: {USERNAME}
----------------------------

Şifreniz veritabanımızda güvenli bir şekilde saklanmaktadır ve ele geçirilemeyecek durumdadır. Eğer şifrenizi unutursanız, hesabınız ile tanımlı olan e-posta adresinizi kullanarak şifrenizi sıfırlayabilirsiniz.

Hesabınızı aktif hale getirmek için lütfen alttaki bağlantıyı ziyaret edin:

{U_ACTIVATE}


Kayıt olduğunuz için teşekkürler.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" mesaj panosuna hoşgeldiniz

{WELCOME_MSG}

Lütfen bu e-postayı saklayınız. Kullanıcı bilgileriniz altta bulunmaktadır:

----------------------------
Kullanıcı adı: {USERNAME}
Mesaj panosu URL adresi: {U_BOARD}
----------------------------

Şifreniz veritabanımızda güvenli bir şekilde saklanmaktadır ve ele geçirilemeyecek durumdadır. Eğer şifrenizi unutursanız, hesabınız ile tanımlı olan e-posta adresinizi kullanarak şifrenizi sıfırlayabilirsiniz.

Kayıt olduğunuz için teşekkür ederiz.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" mesaj panosuna hoşgeldiniz

{WELCOME_MSG}

Lütfen bu e-postayı saklayın. Kullanıcı bilgileriniz altta bulunmaktadır:

----------------------------
Kullanıcı adı: {USERNAME}
Mesaj panosu URL adresi: {U_BOARD}
----------------------------

Hesabınızı aktif hale getirmek için lütfen alttaki bağlantıyı ziyaret edin:

{U_ACTIVATE}

Şifreniz veritabanımızda güvenli bir şekilde saklanmaktadır ve ele geçirilemeyecek durumdadır. Eğer şifrenizi unutursanız, hesabınız ile tanımlı olan e-posta adresinizi kullanarak şifrenizi sıfırlayabilirsiniz.

Kayıt olduğunuz için teşekkür ederiz.

{EMAIL_SIG}',
));


