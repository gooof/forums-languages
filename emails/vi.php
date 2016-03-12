<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Kích hoạt tài khoản thành viên

Chào bạn,

Tài khoản thành viên mang tên "{USERNAME}" vừa bị ngưng kích hoạt hoặc vừa mới đăng ký, bạn nên kiểm tra thông tin chi tiết về thành viên này nếu cần thiết và chọn thao tác xử lý phù hợp.

Sử dụng liên kết này để xem thông tin cá nhân của thành viên:
{U_USER_DETAILS}

Sử dụng liên kết này để kích hoạt tài khoản thành viên:
{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '﻿{MESSAGE}

{EMAIL_SIG}

Email này được một nhà quản trị của "{SITENAME}" gửi đến cho bạn. Nếu email này là spam, chứa thông tin quấy nhiễu hay các bình luận bạn cho rằng là mang tính đã kích, hãy liên hệ với nhà quản trị web tại địa chỉ sau:

{CONTACT_EMAIL}
_EMAIL}',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Tài khoản của bạn đã được kích hoạt

Chào bạn, "{USERNAME}"

Tài khoản thành viên của bạn trong website "{SITENAME}" đã được kích hoạt, ngay bây giờ bạn có thể đăng nhập vào hệ thống bằng tên thành viên và mật khẩu mà bạn đã nhận được trong Email mà chúng tôi đã gửi cho bạn trước đây.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Chào mừng bạn đã đến với "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Hãy giữ lại Email này cẩn thận. Thông tin về tài khoản thành viên của bạn như sau:

----------------------------
Tên thành viên: {USERNAME}
Mật khẩu: {PASSWORD}
----------------------------

Tài khoản của bạn chưa được kích hoạt, hãy vui lòng chờ cho đến khi người quản trị kích hoạt tài khoản này thì bạn mới có thể đăng nhập được vào hệ thống. Bạn sẽ nhận được một Email thông báo khác khi việc kích hoạt hoàn tất.

Xin vui lòng đừng quên mật khẩu của bạn bởi vì nó đã được mã hoá trong cơ sở dữ liệu của hệ thống và chúng tôi không thể khôi phục lại nó cho bạn. Tuy nhiên, nếu bạn quên mật khẩu của mình, bạn có thể yêu cầu một mật khẩu mới và cũng cần phải được kích hoạt giống như tài khoản này.

Cám ơn bạn đã đăng ký làm thành viên của chúng tôi!

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Chào mừng bạn đã đến với "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Bạn đã đồng ý với điều khoản đăng ký thành viên COPPA, vì thế tài khoản hiện tại của bạn sẽ chưa được kích hoạt.

Hãy vui lòng in Email này ra rồi đưa cho cha mẹ hay người bảo hộ của bạn ký tên và ghi ngày tháng vào đây. Sau đó Fax lại đến địa chỉ:
{FAX_INFO}

Hoặc gửi Email về địa chỉ:
{MAIL_INFO}

-8<----------------------------- CẮT TẠI ĐÂY ------------------------------

Đồng ý cho phép tham gia vào website "{SITENAME}"

Tên thành viên: {USERNAME}
Địa chỉ Email: {EMAIL_ADDRESS}

TÔI ĐÃ XEM XÉT KỸ CÁC THÔNG TIN BÊN TRÊN VÀ ĐỒNG Ý CHO PHÉP ĐỨA TRẺ CỦA TÔI THAM GIA VÀO WEBSITE "{SITENAME}" VỚI NHỮNG THÔNG TIN LƯU TRỮ BÊN TRÊN. 
TÔI BIẾT NHỮNG THÔNG TIN TRÊN CÓ THỂ ĐƯỢC THAY ĐỔI LẠI BẤT CỨ KHI NÀO VỚI MỘT MẬT KHẨU ĐĂNG NHẬP THÀNH CÔNG VÀO TÀI KHOẢN THÀNH VIÊN. 
TÔI BIẾT TÔI CÓ THỂ YÊU CẦU NHỮNG THÔNG TIN TRÊN ĐƯỢC GỠ BỎ KHỎI WEBSITE "{SITENAME}" BẤT CỨ LÚC NÀO.

Cha mẹ hoặc người bảo hộ 
(Ghi rõ họ tên tại đây): ______________________________


(Ký tên tại đây): ____________________ 

Ngày tháng: _______________

-8<----------------------------- CẮT TẠI ĐÂY ------------------------------

Sau khi người quản trị nhận được cam kết bên trên thông qua địa chỉ Fax hay Email, tài khoản của bạn sẽ được kích hoạt.

Xin vui lòng đừng quên mật khẩu của bạn bởi vì nó đã được mã hoá trong cơ sở dữ liệu của hệ thống và chúng tôi không thể khôi phục lại nó cho bạn. Tuy nhiên, nếu bạn quên mật khẩu của mình, bạn có thể yêu cầu một mật khẩu mới và cũng cần phải được kích hoạt giống như tài khoản này.

Cám ơn bạn đã đăng ký làm thành viên của chúng tôi!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Chào mừng bạn đã đến với "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Bạn đã đồng ý với điều khoản đăng ký thành viên COPPA vì thế tài khoản hiện tại của bạn sẽ chưa được kích hoạt.

Hãy vui lòng in Email này ra rồi đưa cho cha mẹ hay người bảo hộ của bạn ký tên và ghi ngày tháng vào đây. Sau đó Fax lại đến địa chỉ:
{FAX_INFO}

Hoặc gửi Email về địa chỉ:
{MAIL_INFO}

-8<----------------------------- CẮT TẠI ĐÂY ------------------------------

Đồng ý cho phép tham gia vào website "{SITENAME}"

Tên thành viên: {USERNAME}
Mật khẩu: {PASSWORD}
Địa chỉ Email: {EMAIL_ADDRESS}

TÔI ĐÃ XEM XÉT KỸ CÁC THÔNG TIN BÊN TRÊN VÀ ĐỒNG Ý CHO PHÉP ĐỨA TRẺ CỦA TÔI THAM GIA VÀO WEBSITE "{SITENAME}" VỚI NHỮNG THÔNG TIN LƯU TRỮ BÊN TRÊN. 
TÔI BIẾT NHỮNG THÔNG TIN TRÊN CÓ THỂ ĐƯỢC THAY ĐỔI LẠI BẤT CỨ KHI NÀO VỚI MỘT MẬT KHẨU ĐĂNG NHẬP THÀNH CÔNG VÀO TÀI KHOẢN THÀNH VIÊN. 
TÔI BIẾT TÔI CÓ THỂ YÊU CẦU NHỮNG THÔNG TIN TRÊN ĐƯỢC GỠ BỎ KHỎI WEBSITE "{SITENAME}" BẤT CỨ LÚC NÀO.

Cha mẹ hoặc người bảo hộ 
(Ghi rõ họ tên tại đây): ______________________________


(Ký tên tại đây): ____________________ 

Ngày tháng: _______________

-8<----------------------------- CẮT TẠI ĐÂY ------------------------------

Sau khi người quản trị nhận được cam kết bên trên thông qua địa chỉ Fax hay Email, tài khoản của bạn sẽ được kích hoạt.

Xin vui lòng đừng quên mật khẩu của bạn bởi vì nó đã được mã hoá trong cơ sở dữ liệu của hệ thống và chúng tôi không thể khôi phục lại nó cho bạn. Tuy nhiên, nếu bạn quên mật khẩu của mình, bạn có thể yêu cầu một mật khẩu mới và cũng cần phải được kích hoạt giống như tài khoản này.

Cám ơn bạn đã đăng ký làm thành viên của chúng tôi!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} "{SITENAME}" - Gửi Email giới thiệu chủ đề

Chào bạn, "{TO_USERNAME}"

Email này được gửi đến bạn từ website "{SITENAME}" bởi thành viên "{FROM_USERNAME}" muốn giới thiệu với bạn về chủ đề dưới đây:
{TOPIC_NAME}

Bạn có thể xem chủ đề này tại đây:
{U_TOPIC}

Nội dung Email mà "{FROM_USERNAME}" gửi đến bạn được đính kèm bên dưới. Cần lưu ý rằng việc gửi những Email giới thiệu như thế này không cần được xem xét hay chấp nhận bởi quản trị viên của website. Vì thế, nếu bạn cảm thấy bị làm phiền bởi những Email như thế này từ website chúng tôi, hãy liên hệ ngay với người quản trị theo địa chỉ Email dưới đây:

{BOARD_CONTACT}

Hãy nhớ đính kèm bản sao của Email này, đặc biệt là phần tiêu đề Email khi bạn liên hệ với người quản trị qua địa chỉ Email trên.

Nội dung Email gửi cho bạn như sau:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
{MESSAGE}
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Thông báo bài viết mới - "{FORUM_NAME}"

Chào bạn, "{USERNAME}"

Bạn nhận được thông báo này vì bạn đã chọn theo dõi chuyên mục "{FORUM_NAME}" trong website "{SITENAME}". Chuyên mục này vừa có một bài viết trả lời mới trong chủ đề "{TOPIC_TITLE}" kể từ lần ghé thăm trước của bạn. Bạn có thể bấm vào liên kết bên dưới để xem chủ đề này, sẽ không có thông báo nào nữa về chủ đề này gửi đến bạn cho đến khi bạn xem qua:

{U_NEWEST_POST}

Nếu bạn muốn xem chủ đề, hãy bấm vào liên kết dưới đây:
{U_TOPIC}

Nếu bạn muốn xem chuyên mục, hãy bấm vào liên kết dưới đây:
{U_FORUM}

Nếu bạn không muốn theo dõi chuyên mục này nữa, bạn có thể bấm vào liên kết "Ngừng theo dõi chuyên mục này" trong phần xem chuyên mục hay bấm vào liên kết dưới đây:
{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Bạn đã được thêm vào một nhóm thành viên

Xin chúc mừng!

Bạn đã được thêm vào làm thành viên của nhóm "{GROUP_NAME}" trong website "{SITENAME}".
Quyết định này được thực hiện bởi người lãnh đạo của nhóm hoặc người quản trị của website, hãy liên hệ với họ để biết thêm thông tin.

Bạn có thể xem thông tin về nhóm của mình tại đây:
{U_GROUP}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Có yêu cầu tham gia vào nhóm của bạn

Chào người điều hành của nhóm, "{USERNAME}"

Một thành viên vừa gửi yêu cầu tham gia vào nhóm "{GROUP_NAME}" mà bạn đang điều hành trong website "{SITENAME}".
Để chấp thuận hay từ chối yêu cầu này về tư cách thành viên trong nhóm, hãy bấm vào liên kết dưới đây:
{U_PENDING}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} phpBB đã được cài đặt thành công

Xin chúc mừng!

Bạn đã cài đặt thành công hệ thống phpBB trên máy chủ của mình.

Email này chứa những thông tin quan trọng trong quá trình cài đặt hệ thống của bạn, vì thế hãy cất giữ Email này an toàn. Mật khẩu đã được mã hoá trong cơ sở dữ liệu của hệ thống và không thể phục hồi lại được, mặc dù bạn có thể yêu cầu một mật khẩu mới nếu bạn lỡ quên mật khẩu hiện tại.

--------------------------------------------------------
Tên thành viên: {USERNAME}
Mật khẩu: {PASSWORD}

Địa chỉ URL: {U_BOARD}
--------------------------------------------------------

Những thông tin hữu ích về việc cài đặt hệ thống phpBB bạn có thể tìm thấy trong thư mục "docs" của hệ thống hoặc tại trang hỗ trợ của phpBB.com - http://www.phpbb.com/support/

Ngoài ra, vì lý do giữ cho hệ thống an toàn và bảo mật, chúng tôi khuyến cáo bạn nên kiểm tra thường xuyên những thông tin phát hành về các phiên bản mới nhất của hệ thống bằng cách đăng ký tham gia vào danh sách Email thông báo của chúng tôi được cung cấp tại địa chỉ bên trên. Việc này rất nhanh chóng và dễ dàng.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Thông báo chủ đề mới - "{FORUM_NAME}"

Chào bạn, "{USERNAME}"

Bạn nhận được thông báo này vì bạn đã chọn theo dõi chuyên mục "{FORUM_NAME}" trong website "{SITENAME}". Chuyên mục này vừa có một chủ đề mới "{TOPIC_TITLE}" kể từ lần ghé thăm trước của bạn. Bạn có thể bấm vào liên kết bên dưới để xem chuyên mục này, sẽ không có thông báo nào nữa về chuyên mục này gửi đến bạn cho đến khi bạn xem qua:
{U_FORUM}

Nếu bạn không muốn theo dõi chuyên mục này nữa, bạn có thể bấm vào liên kết "Ngừng theo dõi chuyên mục này" trong phần xem chuyên mục hay bấm vào liên kết dưới đây:
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
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Bài viết của bạn đã được chấp nhận - "{POST_SUBJECT}"

Chào bạn, "{USERNAME}"

Bạn nhận được thông báo này bởi vì bài viết của bạn "{POST_SUBJECT}" trong website "{SITENAME}" đã được chấp nhận bởi một điều hành viên hoặc quản trị viên của website.

Nếu bạn muốn xem bài viết, hãy bấm vào liên kết dưới đây:
{U_VIEW_POST}

Nếu bạn muốn xem chủ đề, hãy bấm vào liên kết dưới đây:
{U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Bài viết của bạn bị từ chối - "{POST_SUBJECT}"

Chào bạn, "{USERNAME}"

Bạn nhận được thông báo này bởi vì bài viết của bạn "{POST_SUBJECT}" trong website "{SITENAME}" đã bị từ chối bởi một điều hành viên hoặc quản trị viên của website.

Nguyên nhân bài viết của bạn bị từ chối là:
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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Bạn có tin nhắn mới

Chào bạn, "{USERNAME}"

Bạn có một tin nhắn mới được gửi đến từ thành viên "{AUTHOR_NAME}" thông qua tài khoản của bạn trong website "{SITENAME}" với tiêu đề là:
{SUBJECT}

Bạn có thể xem nội dung của tin nhắn mới này bằng cách bấm vào liên kết dưới đây:
{U_VIEW_MESSAGE}

Bạn đã yêu cầu thông báo cho bạn biết về điều này. Hãy nhớ rằng bạn luôn luôn có quyền lựa chọn tắt thông báo này mỗi khi có tin nhắn mới bằng cách thay đổi lại thiết lập cá nhân của mình trong hệ thống.

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
Chào bạn, "{TO_USERNAME}"

Dưới đây là Email được gửi đến cho bạn từ thành viên "{FROM_USERNAME}" thông qua tài khoản của bạn trong website "{SITENAME}". Nếu đây là thư rác, lừa đảo hay có nội dung không đúng đắn, bạn có thể liên hệ về điều này với người chủ của website theo địa chỉ Email dưới đây:
{BOARD_CONTACT}

Hãy nhớ đính kèm bản sao của Email này, đặc biệt là phần tiêu đề Email. Lưu ý rằng địa chỉ trả lời của Email này đã được thiết lập lại thành địa chỉ Email của thành viên "{FROM_USERNAME}".

Nội dung Email gửi cho bạn như sau:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
{MESSAGE}
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Chào bạn, "{TO_USERNAME}"

Đây là tin nhắn được gửi đến cho bạn từ thành viên "{FROM_USERNAME}" thông qua tài khoản của bạn trong website "{SITENAME}". Nếu đây là thư rác, lừa đảo hay có nội dung không đúng đắn, bạn có thể liên hệ về điều này với người chủ của website theo địa chỉ Email dưới đây:
{BOARD_CONTACT}

Hãy nhớ đính kèm đầy đủ nội dung tin nhắn này. Lưu ý rằng địa chỉ của người gửi tin nhắn đã được thiết lập thành tài khoản tin nhắn nhanh trong website.

Nội dung tin nhắn gửi cho bạn như sau:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
{MESSAGE}
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Kết thúc báo cáo - "{POST_SUBJECT}"

Chào bạn, "{USERNAME}"

Bạn nhận được thông báo này vì báo cáo của bạn về bài viết "{POST_SUBJECT}" trong chủ đề "{TOPIC_TITLE}" tại website "{SITENAME}" đã được xử lý bởi một điều hành viên hoặc quản trị viên của website. Báo cáo này đã được kết thúc sau đó. Nếu bạn có bất cứ thắc mắc nào hãy liên hệ ngay với người đã kết thúc báo cáo này "{CLOSER_NAME}" bằng một tin nhắn cá nhân.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Kết thúc báo cáo - "{POST_SUBJECT}"

Chào bạn, "{USERNAME}"

Bạn nhận được thông báo này vì báo cáo của bạn về bài viết "{POST_SUBJECT}" trong chủ đề "{TOPIC_TITLE}" tại website "{SITENAME}" đã bị xoá bởi một điều hành viên hoặc quản trị viên của website.

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
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Chủ đề được chấp nhận - "{TOPIC_TITLE}"

Chào bạn, "{USERNAME}"

Bạn nhận được thông báo này bởi vì chủ đề của bạn "{TOPIC_TITLE}" trong website "{SITENAME}" đã được chấp nhận bởi một điều hành viên hoặc quản trị viên của website.

Nếu bạn muốn xem chủ đề này, hãy bấm vào liên kết dưới đây:
{U_VIEW_TOPIC}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Chủ đề bị từ chối - "{TOPIC_TITLE}"

Chào bạn, "{USERNAME}"

Bạn nhận được thông báo này bởi vì chủ đề của bạn "{TOPIC_TITLE}" trong website "{SITENAME}" đã bị từ chối bởi một điều hành viên hoặc quản trị viên của website.

Nguyên nhân chủ đề của bạn bị từ chối là:
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
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Kích hoạt lại tài khoản của bạn

Chào bạn, "{USERNAME}"

Tài khoản của bạn trong website "{SITENAME}" đã bị ngưng kích hoạt, hầu hết thường gặp trường hợp này khi bạn thay đổi thông tin cá nhân dùng để đăng ký làm thành viên của mình. Để kích hoạt lại tài khoản của mình, bạn phải bấm vào liên kết dưới đây:
{U_ACTIVATE}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Tài khoản của bạn đã bị ngưng kích hoạt

Chào bạn, "{USERNAME}"

Tài khoản của bạn trong website "{SITENAME}" đã bị ngưng kích hoạt, hầu hết thường gặp trường hợp này khi bạn thay đổi thông tin cá nhân dùng để đăng ký làm thành viên của mình. Người quản trị của website sẽ cần phải kích hoạt lại tài khoản này trước khi bạn có thể sử dụng nó để đăng nhập vào hệ thống. Bạn sẽ được nhận một thông báo khác khi việc kích hoạt hoàn tất.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Mật khẩu kích hoạt mới

Chào bạn, "{USERNAME}"

Bạn nhận được thông báo này bởi vì chính bạn hoặc một ai đó giả danh bạn đã yêu cầu một mật khẩu mới từ tài khoản thành viên của bạn trong website "{SITENAME}". Nếu đây không phải là yêu cầu của bạn thì hãy quên thông báo này đi và sẽ không có thay đổi nào xảy ra. Bạn cũng có thể liên hệ với người quản trị về việc này.

Để sử dụng được mật khẩu mới, bạn cần phải kích hoạt nó bằng cách bấm vào liên kết dưới đây:
{U_ACTIVATE}

Nếu kích hoạt thành công bạn sẽ có thể đăng nhập được vào hệ thống với mật khẩu mới bên dưới:

----------------------------------
Mật khẩu: {PASSWORD}
----------------------------------

Bạn có thể chắc chắn thay đổi mật khẩu của mình trong phần thiết lập cá nhân của hệ thống. Nếu bạn gặp bất cứ khó khăn nào, xin đừng ngần ngại liên hệ ngay với người quản trị để được giúp đỡ.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Kích hoạt lại tài khoản của bạn trong "{SITENAME}" - {U_BOARD}

Một quản trị viên đã yêu cầu bạn phải kích hoạt lại tài khoản của mình. Tài khoản của bạn tạm thời ngưng kích hoạt.
Bạn hãy vui lòng làm theo những bước dưới đây để kích hoạt lại tài khoản của mình.

Hãy giữ Email này cẩn thận. Thông tin về tài khoản thành viên của bạn như sau:

----------------------------------
Tên thành viên: {USERNAME}
----------------------------------

Xin vui lòng đừng quên mật khẩu của bạn bởi vì nó đã được mã hoá trong cơ sở dữ liệu của hệ thống và chúng tôi không thể khôi phục lại nó cho bạn. Tuy nhiên, nếu bạn quên mật khẩu của mình, bạn có thể yêu cầu một mật khẩu mới và cũng cần phải được kích hoạt giống như tài khoản này.

Hãy vui lòng bấm vào liên kết bên dưới để kích hoạt lại tài khoản của bạn:
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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Nhắc nhở tài khoản chưa kích hoạt

Chào bạn, "{USERNAME}"

Vào ngày {REGISTER_DATE}, bạn đã đăng ký một tài khoản thành viên mới trong website "{SITENAME}". Đến bây giờ, bạn vẫn chưa kích hoạt tài khoản này. Bạn phải thực hiện việc kích hoạt tài khoản theo yêu cầu này mới có thể đăng nhập được vào hệ thống. Để thuận tiện, bạn có thể bấm ngay vào liên kết kích hoạt tài khoản của mình dưới đây:
{U_ACTIVATE}

Cám ơn bạn đã đăng ký làm thành viên của website "{SITENAME}", chúng tôi đang mong chờ sự tham gia của bạn!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Chào mừng bạn đã đến với "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Hãy giữ Email này cẩn thận. Thông tin về tài khoản thành viên của bạn như sau:

----------------------------------
Tên thành viên: {USERNAME}
----------------------------------

Mật khẩu của bạn đã được mã hoá trong cơ sở dữ liệu của hệ thống. Nếu bạn quên mật khẩu của mình, bạn có thể yêu cầu một mật khẩu mới và cũng cần phải được kích hoạt giống như tài khoản này.

Tài khoản của bạn hiện tại chưa được kích hoạt. Bạn không thể sử dụng tài khoản này để đăng nhập vào hệ thống cho đến khi bạn kích hoạt nó bằng cách bấm vào liên kết dưới đây:
{U_ACTIVATE}

Cám ơn bạn đã đăng ký làm thành viên của chúng tôi!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Chào mừng bạn đã đến với "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Hãy giữ Email này cẩn thận. Thông tin về tài khoản thành viên của bạn như sau:

----------------------------------
Tên thành viên: {USERNAME}
{PASSWORD_EXTRA_LINE}
Mật khẩu: {PASSWORD}
----------------------------------

Xin vui lòng đừng quên mật khẩu của bạn bởi vì nó đã được mã hoá trong cơ sở dữ liệu của hệ thống và chúng tôi không thể khôi phục lại nó cho bạn. Tuy nhiên, nếu bạn quên mật khẩu của mình, bạn có thể yêu cầu một mật khẩu mới và cũng cần phải được kích hoạt giống như tài khoản này.

Cám ơn bạn đã đăng ký làm thành viên của chúng tôi!

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Chào mừng bạn đã đến với "{SITENAME}" - {U_BOARD}

{WELCOME_MSG}

Hãy giữ Email này cẩn thận. Thông tin về tài khoản thành viên của bạn như sau:

----------------------------------
Tên thành viên: {USERNAME}
{PASSWORD_EXTRA_LINE}
----------------------------------

Tài khoản của bạn hiện tại chưa được kích hoạt. Bạn không thể sử dụng tài khoản này để đăng nhập vào hệ thống cho đến khi bạn kích hoạt nó bằng cách bấm vào liên kết dưới đây:
{U_ACTIVATE}

Xin vui lòng đừng quên mật khẩu của bạn bởi vì nó đã được mã hoá trong cơ sở dữ liệu của hệ thống và chúng tôi không thể khôi phục lại nó cho bạn. Tuy nhiên, nếu bạn quên mật khẩu của mình, bạn có thể yêu cầu một mật khẩu mới và cũng cần phải được kích hoạt giống như tài khoản này.

Cám ơn bạn đã đăng ký làm thành viên của chúng tôi!

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
