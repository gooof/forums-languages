<?php
/*
* fix
*/
$email = array_merge($email, array(
	'email/admin_activate.txt' 		=> '{EMAILSUBJECT:} Ενεργοποίηση λογαριασμού μέλους

Γεια σας,

Ο λογαριασμός που ανήκει στο μέλος "{USERNAME}" απενεργοποιήθηκε ή μόλις δημιουργήθηκε, Πρέπει να ελέγξετε τα στοιχεία αυτού του μέλους (εάν χρειάζεται) και να τον ενεργοποιήσετε.

Χρησιμοποιήστε την ακόλουθη διαδρομή για να δείτε το προφίλ του μέλους:
{U_USER_DETAILS}

Χρησιμοποιήστε την ακόλουθη διαδρομή για να ενεργοποιήσετε τον λογαριασμό:
{U_ACTIVATE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_send_email.txt' 		=> '
Το ακόλουθο μήνυμα το  απέστειλε ένας διαχειριστής του "{SITENAME}". Εάν το μήνυμα αυτό είναι ανεπιθύμητο με ενοχλητικό ή και προσβλητικό περιεχόμενο σας παρακαλώ επικοινωνήστε με τον διαχειριστή της Δ. Συζήτησης στην ακόλουθη διεύθυνση:

{CONTACT_EMAIL}

Συμπεριλάβετε το μήνυμα, (κυρίως τις κεφαλίδες του). 

Το περιεχόμενο του μηνύματος που σας απεστάλη:
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_activated.txt' 		=> '{EMAILSUBJECT:} Ενεργοποίηση λογαριασμού

Γεια σου {USERNAME},

Ο λογαριασμός σου στο "{SITENAME}" ενεργοποιήθηκε από τον διαχειριστή, τώρα μπορείς να συνδεθείς.

Ο κωδικός πρόσβασης σας είναι κρυπτογραφημένος στην βάση μας και δεν μπορεί να ανακτηθεί. Αν τον ξεχάσετε μπορείτε να ζητήσετε νέον κωδικό που θα ενεργοποιηθεί με τον ίδιο τρόπο με αυτόν τον λογαριασμό.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/admin_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Καλώς ήρθατε στο "{SITENAME}" 

{WELCOME_MSG}

Προσοχή! Κρατήστε αυτό το μήνυμα! Περιέχει βασικές πληροφορίες του λογαριασμού σας:

----------------------------
Όνομα μέλους: {USERNAME}

Ιστοσελίδας σύνδεσμος: {U_BOARD}
----------------------------

Ο λογαριασμός σας προσωρινά είναι ανενεργός, για να συνδεθείτε πρώτα πρέπει να ενεργοποιηθεί από τον διαχειριστή του συστήματος πριν συνδεθείτε. Θα λάβετε ένα καινούργιο μήνυμα όταν αυτό θα είναι δυνατό.

Ο κωδικός πρόσβασης σας είναι κρυπτογραφημένος στην βάση μας και δεν μπορεί να ανακτηθεί. Αν τον ξεχάσετε μπορείτε να ζητήσετε νέον κωδικό που θα ενεργοποιηθεί με τον ίδιο τρόπο με αυτόν τον λογαριασμό.

Σας ευχαριστούμε για την εγγραφή σας.

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
	'email/coppa_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Καλώς ήρθατε στο "{SITENAME}" 

{WELCOME_MSG}

Σύμφωνα με το διακήρυξη COPPA, ο λογαριασμός σας είναι προσωρινά ανενεργός.

Παρακαλώ εκτυπώστε το ακόλουθο κείμενο και δώστε το προς έγκριση και υπογραφή στον κηδεμόνα σας, κατόπιν στείλτε το με φαξ στο:

{FAX_INFO}

ή με ηλεκτρονικό ταχυδρομείο:

{MAIL_INFO}

------------------------------ να κοπεί εδώ ------------------------------
Έγκριση για συμμετοχή στο "{SITENAME}" - {U_BOARD}

Όνομα χμέλους: {USERNAME}
Διεύθυνση αλληλογραφίας: {EMAIL_ADDRESS}

ΕΧΩ ΕΞΕΤΑΣΕΙ ΤΑ ΣΤΟΙΧΕΙΑ ΠΟΥ ΜΟΥ ΠΡΟΣΚΟΜΙΣΕ ΤΟ ΠΑΙΔΙ ΜΟΥ ΚΑΙ ΕΠΙΤΡΕΠΩ ΣΤΟ "{SITENAME}" ΝΑ ΑΠΟΘΗΚΕΥΣΕΙ ΑΥΤΑ ΤΑ ΣΤΟΙΧΕΙΑ.
ΚΑΤΑΝΟΩ, ΟΤΙ ΤΑ ΠΑΡΑΠΑΝΩ ΑΠΟΘΗΚΕΥΜΕΝΑ ΣΤΟΙΧΕΙΑ ΜΠΟΡΟΥΝ ΝΑ ΑΛΛΑΞΟΥΝ ΟΠΟΙΑΔΗΠΟΤΕ ΣΤΙΓΜΗ ΜΕ ΤΗΝ ΕΙΣΑΓΩΓΗ ΤΟΥ ΚΩΔΙΚΟΥ.
ΚΑΤΑΝΟΩ, ΟΤΙ ΑΥΤΕΣ ΟΙ ΠΛΗΡΟΦΟΡΙΕΣ ΜΠΟΡΟΥΝ ΝΑ ΔΙΑΓΡΑΦΟΥΝ ΟΠΟΙΑΔΗΠΟΤΕ ΣΤΙΓΜΗ, ΑΠΟ ΤΟ {SITENAME} ,ΚΑΤΟΠΙΝ ΑΙΤΗΣΕΩΣ ΜΟΥ.



Γονέας ή Κηδεμόνας
(το Ονοματεπώνυμο σας): _____________________

(Υπογραφή): __________________ 

Ημερομηνία: _______________

------------------------------ να κοπεί εδώ ------------------------------

Από την στιγμή που ο διαχειριστής θα λάβει αυτό το έντυπο μέσω φαξ ή ηλεκτρονικού ταχυδρομείου, ο λογαριασμός θα ενεργοποιηθεί.
Ο κωδικός πρόσβασης σας είναι κρυπτογραφημένος στην βάση μας και δεν μπορεί να ανακτηθεί. Αν τον ξεχάσετε μπορείτε να ζητήσετε νέον κωδικό που θα ενεργοποιηθεί με τον ίδιο τρόπο με αυτόν τον λογαριασμό.

Σας ευχαριστούμε για την εγγραφή σας

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/coppa_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Καλώς ήρθατε στο "{SITENAME}" 

{WELCOME_MSG}

Σύμφωνα με το διακήρυξη COPPA, ο λογαριασμός σας είναι προσωρινά ανενεργός.

Παρακαλώ εκτυπώστε το ακόλουθο κείμενο και δώστε το προς έγκριση και υπογραφή στον κηδεμόνα σας, κατόπιν στείλτε το με φαξ στο:

{FAX_INFO}

ή με ηλεκτρονικό ταχυδρομείο:

{MAIL_INFO}

------------------------------ να κοπεί εδώ ------------------------------
Έγκριση για συμμετοχή στο "{SITENAME}" - {U_BOARD}

Όνομα χμέλους: {USERNAME}

Διεύθυνση αλληλογραφίας: {EMAIL_ADDRESS}

ΕΧΩ ΕΞΕΤΑΣΕΙ ΤΑ ΣΤΟΙΧΕΙΑ ΠΟΥ ΜΟΥ ΠΡΟΣΚΟΜΙΣΕ ΤΟ ΠΑΙΔΙ ΜΟΥ ΚΑΙ ΕΠΙΤΡΕΠΩ ΣΤΟ "{SITENAME}" ΝΑ ΑΠΟΘΗΚΕΥΣΕΙ ΑΥΤΑ ΤΑ ΣΤΟΙΧΕΙΑ.
ΚΑΤΑΝΟΩ, ΟΤΙ ΤΑ ΠΑΡΑΠΑΝΩ ΑΠΟΘΗΚΕΥΜΕΝΑ ΣΤΟΙΧΕΙΑ ΜΠΟΡΟΥΝ ΝΑ ΑΛΛΑΞΟΥΝ ΟΠΟΙΑΔΗΠΟΤΕ ΣΤΙΓΜΗ ΜΕ ΤΗΝ ΕΙΣΑΓΩΓΗ ΤΟΥ ΚΩΔΙΚΟΥ.
ΚΑΤΑΝΟΩ, ΟΤΙ ΑΥΤΕΣ ΟΙ ΠΛΗΡΟΦΟΡΙΕΣ ΜΠΟΡΟΥΝ ΝΑ ΔΙΑΓΡΑΦΟΥΝ ΟΠΟΙΑΔΗΠΟΤΕ ΣΤΙΓΜΗ, ΑΠΟ ΤΟ {SITENAME} ,ΚΑΤΟΠΙΝ ΑΙΤΗΣΕΩΣ ΜΟΥ.



Γονέας ή Κηδεμόνας
(το Ονοματεπώνυμο σας): _____________________

(Υπογραφή): __________________ 

Ημερομηνία: _______________

------------------------------ να κοπεί εδώ ------------------------------

Από την στιγμή που ο διαχειριστής θα λάβει αυτό το έντυπο μέσω φαξ ή ηλεκτρονικού ταχυδρομείου, ο λογαριασμός θα ενεργοποιηθεί.
Ο κωδικός πρόσβασης σας είναι κρυπτογραφημένος στην βάση μας και δεν μπορεί να ανακτηθεί. Αν τον ξεχάσετε μπορείτε να ζητήσετε νέον κωδικό που θα ενεργοποιηθεί με τον ίδιο τρόπο σε αυτόν τον λογαριασμό.
Σας ευχαριστούμε για την εγγραφή σας

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/email_notify.txt' 		=> '{EMAILSUBJECT:} „{SITENAME}“ —  E-mail σε φίλο

Γεια σου {TO_USERNAME},

Αυτό το μήνυμα αλληλογραφίας έχει σταλεί από το "{SITENAME}" από τον {FROM_USERNAME} ο οποίος πιστεύει ότι θα σας ενδιαφέρει το ακόλουθο θέμα:

{TOPIC_NAME}

Μπορείτε να το βρείτε εδώ:

{U_TOPIC}

Ένα μήνυμα από τον {FROM_USERNAME} επισυνάπτετε παρακάτω. Σημειώστε ότι αυτό το μήνυμα δεν έχει σταλεί ή αποδεχτεί από τους διαχειριστές της κοινότητας. Αν θέλετε να μην λαμβάνετε άλλο μηνύματα αλληλογραφίας παρακαλώ επικοινωνήστε με τον διαχειριστή της κοινότητας στο {BOARD_CONTACT}. Παρακαλούμε επισυνάψτε τα στοιχεία του μηνύματος όταν επικοινωνήσετε με αυτήν την διεύθυνση.

----------

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
	'email/forum_notify.txt' 		=> '{EMAILSUBJECT:} Γνωστοποίηση απάντησης στη Δ. Συζήτηση - "{FORUM_NAME}"

Γεια σας  {USERNAME},

Λάβατε αυτό το μήνυμα γιατί παρακολουθείτε την Δ. Συζήτηση, "{FORUM_NAME}" στο "{SITENAME}". Αναρτήθηκε ένα νέο μήνυμα στο Θέμα "{TOPIC_TITLE}" μετά την τελευταία σας επίσκεψη. Μπορείτε να χρησιμοποιήσετε την ακόλουθη σύνδεση για να δείτε την τελευταία αδιάβαστη απάντηση, δεν θα υπάρξει άλλη ειδοποίηση για αυτήν την ανάρτηση, μέχρι να επισκεφτείτε το Θέμα.

{U_NEWEST_POST}

Εάν θέλετε να κάνετε δείτε το θέμα, πατήστε τον ακόλουθο σύνδεσμο:
{U_TOPIC}

Εάν θέλετε να δείτε την Δ. Συζήτηση, πατήστε τον ακόλουθο σύνδεσμο:
{U_FORUM}

Εάν δεν επιθυμείτε πλέον, την παρακολούθηση του Θέματος επιλέξτε "Παύση παρακολούθησης αυτού του Θέματος" στο κάτω τμήμα της σελίδας του Θέματος ή πατήστε στον ακόλουθο δεσμό:

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/group_added.txt' 		=> '{EMAILSUBJECT:} Προστεθήκατε στην ομάδα

Συγχαρητήρια,

Προστεθήκατε στην ομάδα "{GROUP_NAME}" στο "{SITENAME}".
Αυτή η ενέργεια έγινε από κάποιον Συντονιστή Ομάδας ή Διαχειριστή της Δ. Συζήτησης, επικοινωνήστε μαζί τους για περαιτέρω πληροφορίες.

Μπορείτε να δείτε της πληροφορίες της ομάδας σας εδώ:
{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_approved.txt' 		=> '{EMAILSUBJECT:} Το αίτημα σας εγκρίθηκε

Συγχαρητήρια,

Το αίτημα σας για να γίνετε μέλος της ομάδας "{GROUP_NAME}" στο "{SITENAME}" εγκρίθηκε.
Ακολουθήστε τον δεσμό για να δείτε τα στοιχεία τις ιδιότητες σας σαν μέλους.

{U_GROUP}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/group_request.txt' 		=> '{EMAILSUBJECT:} Αίτηση για συμμετοχή στην ομάδα σας

Αγαπητέ {USERNAME},

ένα μέλος "{REQUEST_USERNAME}" ζήτησε να ενταχθεί στην ομάδα "{GROUP_NAME}" που συντονίζετε στο "{SITENAME}".
Για να εγκρίνετε ή να αρνηθείτε αυτήν την αίτηση παρακαλώ ακολουθήστε ον παρακάτω σύνδεσμο:

{U_PENDING}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/installed.txt' 		=> '{EMAILSUBJECT:} Εγκαταστάθηκε το phpBB

Συγχαρητήρια,

εγκαταστήσατε επιτυχώς το phpBB στον διακομιστή σας.

Αυτό το μήνυμα αλληλογραφίας περιέχει σημαντικές πληροφορίες για την εγκατάσταση σας που πρέπει να φυλαχτούν. Ο κωδικός πρόσβασης έχει αποθηκευτεί κρυπτογραφημένος στην βάση μας και δεν μπορεί να ανακτηθεί. Μπορείτε να τον επαναφέρετε χρησιμοποιώντας τη διεύθυνση ηλεκτρονικού ταχυδρομείου που συνδέεται με το λογαριασμό σας.

----------------------------
Όνομα μέλους: {USERNAME}


Δεσμός κοινότητας: {U_BOARD}
----------------------------

Χρήσιμες πληροφορίες για την εγκατάσταση του phpBB λογισμικού μπορούν να βρεθούν στον φάκελο "docs" στην εγκατάσταση σας και στην σελίδα υποστήριξης του phpBB.com - http://www.phpbb.com/support/

Για να κρατήσετε την κοινότητα σας ασφαλή και προστατευμένη, σας προτείνουμε να την κρατάτε ενημερωμένη με τις τρέχουσες εκδόσεις του λογισμικού που μπορεί να γίνει εύκολα αν γραφτείτε στην λίστα αλληλογραφίας του phpBB.com, που αναφέρετε πιο πάνω.

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
	'email/newtopic_notify.txt' 		=> '{EMAILSUBJECT:} Γνωστοποίηση νέου θέματος - "{FORUM_NAME}"

Γεια σας {USERNAME},

Λάβατε αυτό το μήνυμα γιατί παρακολουθείτε την Δ. Συζήτηση, "{FORUM_NAME}" στο "{SITENAME}". Αναρτήθηκε νέο θέμα από την τελευταία σας επίσκεψη, "{TOPIC_TITLE}". Ακολουθήστε τον παρακάτω δεσμό για να το διαβάσετε. Δεν θα υπάρξει άλλη ειδοποίηση για αυτήν την ανάρτηση, μέχρι να επισκεφτείτε την Δ. Συζήτηση

{U_FORUM}

Εάν δεν επιθυμείτε πλέον, την παρακολούθηση του Θέματος επιλέξτε "Παύση παρακολούθησης αυτού του Θέματος" στο κάτω τμήμα της σελίδας του Θέματος ή πατήστε στον ακόλουθο δεσμό

{U_STOP_WATCHING_FORUM}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/pm_report_closed.txt' 		=> '{EMAILSUBJECT:} Κλείσιμο αναφοράς  -  "{PM_SUBJECT}"

Hello {USERNAME},

Έχετε λάβει αυτήν την ειδοποίηση επειδή η αναφορά που θέσατε με προσωπικό μήνυμα  "{PM_SUBJECT}" και "{SITENAME}" έχει χειριστεί από κάποιον συντονιστή ή από τον διαχειριστή. Η αναφορά μετά θα κλείσει. Εάν έχετε περισσότερες ερωτήσεις ελάτε σε επικοινωνία {CLOSER_NAME} με προσωπικό μήνυμα


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/pm_report_deleted.txt' 		=> '{EMAILSUBJECT:} Διαγραφή αναφοράς- "{PM_SUBJECT}"

Γεια σου {USERNAME},

Έχετε λάβει αυτήν την ειδοποίηση επειδή η αναφορά που κάνατε για αυτό το προσωπικό μήνυμα "{PM_SUBJECT}" και  "{SITENAME}" έχει διαγραφεί από κάποιον συντονιστή ή από τον διαχειριστή


{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/post_approved.txt' 		=> '{EMAILSUBJECT:} Αποδοχή θέματος - "{POST_SUBJECT}"

Γεια σας {USERNAME},

Λάβατε αυτήν την ειδοποίηση γιατί η δημοσίευση σας "{POST_SUBJECT}" στο "{SITENAME}" έγινε αποδεκτή από κάποιον συντονιστή ή διαχειριστή.

Αν θέλετε να δείτε την δημοσίευση ακολουθήστε τον παρακάτω δεσμό:
{U_VIEW_POST}

Αν θέλετε να δείτε το θέμα ακολουθήστε τον παρακάτω δεσμό:
{U_VIEW_TOPIC}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/post_disapproved.txt' 		=> '{EMAILSUBJECT:} Απόρριψη δημοσίευσης — „{POST_SUBJECT}“

Γεια σας {USERNAME},

Λάβατε αυτήν την ειδοποίηση γιατί η δημοσίευση σας „{POST_SUBJECT}“ στο „{SITENAME}“ δεν έγινε αποδεκτή από κάποιον συντονιστή ή διαχειριστή.

Ο ακόλουθος λόγο δόθηκε για την μη αποδοχή:

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
	'email/privmsg_notify.txt' 		=> '{EMAILSUBJECT:} Ένα νέο προσωπικό μήνυμα αφίχθη

Γεια σας {USERNAME},

Έχετε λάβει ένα νέο προσωπικό μήνυμα από τον "{AUTHOR_NAME}" στο λογαριασμό σας του "{SITENAME}" με το ακόλουθο θέμα:

{SUBJECT}

Μπορείτε να διαβάσετε το μήνυμα σας  ακολουθώντας τον παρακάτω σύνδεσμο:

{U_VIEW_MESSAGE}

Έχετε επιλέξει να ειδοποιήστε για κάθε εισερχόμενο μήνυμα, να θυμάστε πως μπορείτε να απενεργοποιήσετε την λειτουργία της ειδοποίησης, αλλάζοντας την κατάλληλη ρύθμιση στο προφίλ σας.

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
Γεια σας {TO_USERNAME},

Το ακόλουθο είναι ένα email από τον {FROM_USERNAME} μέσο του λογαριασμού σας στο "{SITENAME}". Εάν το μήνυμα αυτό αποτελεί ενόχληση με προσβλητικό ή ανόητο περιεχόμενο παρακαλώ επικοινωνήστε με τον διαχειριστή της κοινότητας στην ακόλουθη διεύθυνση:

{BOARD_CONTACT}

Να συμπεριλάβετε ολόκληρο το μήνυμα ιδίως τις κεφαλίδες. Έχετε υπόψη ότι ως διεύθυνση απάντησης έχει ορισθεί η διεύθυνση του {FROM_USERNAME}.

Ακολουθεί το μήνυμα που σας απεστάλη
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/profile_send_im.txt' 		=> '
Γεια σας {TO_USERNAME},

το ακόλουθο είναι ένα email από τον {FROM_USERNAME} μέσο του λογαριασμού σας στο "{SITENAME}". Εάν το μήνυμα αυτό αποτελεί ενόχληση με προσβλητικό ή ανόητο περιεχόμενο παρακαλώ επικοινωνήστε με τον διαχειριστή της κοινότητας στην ακόλουθη διεύθυνση:

{BOARD_CONTACT}

Να συμπεριλάβετε ολόκληρο το μήνυμα. Έχετε υπόψη ότι ως  διεύθυνση απάντησης έχει ορισθεί o λογαριασμός του IM.

Ακολουθεί το μήνυμα που σας απεστάλη
~~~~~~~~~~~~~~~~~~~~~~~~~~~

{MESSAGE}
',
));



$email = array_merge($email, array(
	'email/report_closed.txt' 		=> '{EMAILSUBJECT:} Αναφορά κλειδώματος — „{POST_SUBJECT}“

Γεια σας {USERNAME},

Λαμβάνετε αυτην την ειδοποίηση γιατί η αναφορά που συμπληρώσατε στην δημοσίευση „{POST_SUBJECT}“  στο θέμα „{TOPIC_TITLE}“  στο „{SITENAME}“ χειρίσθηκε από έναν συντονιστή ή διαχειριστή. Η αναφορά κλειδώθηκε. Αν έχετε ερωτήσεις πάνω σε αυτό επικοινωνήστε με τον {CLOSER_NAME} χρησιμοποιώντας προσωπικό μήνυμα.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/report_deleted.txt' 		=> '{EMAILSUBJECT:} Διαγραφή αναφοράς — „{POST_SUBJECT}“

Γεια σας {USERNAME},

Λαμβάνετε αυτήν την ειδοποίηση γιατί η αναφορά που συμπληρώσατε στην δημοσίευση „{POST_SUBJECT}“ στο θέμα „{TOPIC_TITLE}“ στο „{TOPIC_TITLE}“ διεγράφη από κάποιον συντονιστή ή διαχειριστή.


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/topic_approved.txt' 		=> '{EMAILSUBJECT:} Αποδοχή θέματος — „{TOPIC_TITLE}“

Γεια σας {USERNAME},

Λάβατε αυτήν την ειδοποίηση γιατί το θέμα σας „{TOPIC_TITLE}“ στο „{SITENAME}“ έγινε αποδεκτό από κάποιον συντονιστή ή διαχειριστή.

Αν θέλετε να δείτε το θέμα ακολουθήστε τον παρακάτω σύνδεσμο:
{U_VIEW_TOPIC}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/topic_disapproved.txt' 		=> '{EMAILSUBJECT:} Απόρριψη δημοσίευσης  — „{TOPIC_TITLE}“

Γεια σας {USERNAME},

Λάβατε αυτήν την ειδοποίηση γιατί η δημοσίευση σας "{POST_SUBJECT}" στο "{SITENAME}" δεν έγινε αποδεκτή από κάποιον συντονιστή ή διαχειριστή.

Ο ακόλουθος λόγο δόθηκε για την μη αποδοχή:

{REASON}


{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/topic_notify.txt' 		=> '{EMAILSUBJECT:} Γνωστοποίηση απάντησης στη Θ. Ενότητα - "{TOPIC_TITLE}"

Γεια σας {USERNAME},

Λάβατε αυτό το μήνυμα γιατί παρακολουθείτε το θέμα, "{TOPIC_TITLE}" στο "{SITENAME}". Αναρτήθηκε ένα νέο μήνυμα στο θέμα μετά την τελευταία σας επίσκεψη. Δεν θα υπάρξει άλλη ειδοποίηση για αυτήν την ανάρτηση, μέχρι να επισκεφτείτε την Θ. Ενότητα.

Εάν θέλετε να δείτε τις νέες δημοσιεύσεις στο θέμα ακολουθήστε τον σύνδεσμο:
{U_NEWEST_POST}

Εάν θέλετε να δείτε το θέμα, πατήστε τον ακόλουθο σύνδεσμο:
{U_TOPIC}

Εάν θέλετε να δείτε την Δ. Συζήτηση, πατήστε τον ακόλουθο σύνδεσμο:
{U_FORUM}

Εάν δεν επιθυμείτε πλέον, την παρακολούθηση του Θέματος επιλέξτε "Παύση παρακολούθησης αυτού του Θέματος" στο κάτω τμήμα της σελίδας του Θέματος ή πατήστε στον ακόλουθο σύνδεσμο

{U_STOP_WATCHING_TOPIC}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate.txt' 		=> '{EMAILSUBJECT:} Επανεργοποίηστε τον λογαριασμό σας

Γεια σας {USERNAME},

Ο λογαριασμό σας στο "{SITENAME}" απενεργοποιήθηκε, πιθανότατα από αλλαγές που έγιναν στο προφίλ σας. Για να τον ενεργοποιήσετε ξανά ακολουθήστε τον παρακάτω σύνδεσμο:

{U_ACTIVATE}

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_activate_inactive.txt' 		=> '{EMAILSUBJECT:} Ο λογαριασμός σας απενεργοποιήθηκε

Γεια σας {USERNAME},

Ο λογαριασμό σας στο "{SITENAME}" απενεργοποιήθηκε, πιθανότατα από αλλαγές που έγιναν στο προφίλ σας. Ο διαχειριστής της κοινότητας θέλει να τον ενεργοποιήσετε πριν μπορέσετε να συνδεθείτε. Θα λάβετε και άλλη ειδοποίηση όταν γίνει αυτό.

{EMAIL_SIG
',
));



$email = array_merge($email, array(
	'email/user_activate_passwd.txt' 		=> '{EMAILSUBJECT:} Ενεργοποίηση νέου κωδικού πρόσβασης

Γεια σας {USERNAME}

Λάβατε αυτό το μήνυμα γιατί (ή κάποιος που προσποιήθηκε ότι ήσασταν εσείς) ζητήσατε να σας αποσταλεί νέος κωδικός σύνδεσης για τον λογαριασμό σας στο "{SITENAME}". Αν δεν το ζητήσατε εσείς παρακαλούμε αγνοήστε αυτό το μήνυμα, αν συνεχίσετε να το λαμβάνετε παρακαλώ επικοινωνήστε με τον διαχειριστή της Δ. Συζήτησης.

Για να χρησιμοποιήσετε τον νέο κωδικό σας πρέπει να τον ενεργοποιήσετε. Για να το κάνετε αυτό ακολουθήστε τον παρακάτω σύνδεσμο.

{U_ACTIVATE}

Όταν ολοκληρωθεί η ενεργοποίηση θα μπορείτε να εισέλθετε χρησιμοποιώντας τον παρακάτω κωδικό πρόσβασης:

Κωδικός σύνδεσης: {PASSWORD}

Μπορείτε φυσικά να αλλάξετε τον κωδικό πρόσβασης και μόνος σας απο το προφίλ σας. Αν συναντήσετε οποιαδήποτε δυσκολία παρακαλώ επικοινωνήστε με τον διαχειριστή της κοινότητας.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_reactivate_account.txt' 		=> '{EMAILSUBJECT:} Επανεργοποίηση του λογαριασμού σας στο "{SITENAME}" - {U_BOARD}

Ένας διαχειριστής ανάγκασε τον λογαριασμό σας σε ενανεργοποίηση. Ο λογαριασμός σας είναι προσωρινά ανενεργός.
Παρακαλούμε ακολουθήστε τα παρακάτω βήματα για αν ενεργοποιήσετε ξανά τον λογαριασμό σας.

Παρακαλούμε κρατήστε αυτό το μήνυμα στο αρχείο σας. Οι λεπτομέρειες του λογαριασμού σας είναι οι:

----------------------------
Όνομα μέλους: {USERNAME}
----------------------------

	
Ο κωδικός πρόσβασης αποθηκεύεται κρυπτογραφημένος στην βάση μας και δεν μπορεί να ανακτηθεί. Αν τον ξεχάσετε μπορείτε να ζητήσετε νέον κωδικό που θα ενεργοποιηθεί με τον ίδιο τρόπο σε αυτόν τον λογαριασμό.

Παρακαλώ ακολουθήστε τον παρακάτω σύνδεσμο για να ενεργοποιήσετε πάλι τον λογαριασμό σας:

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
	'email/user_remind_inactive.txt' 		=> '{EMAILSUBJECT:} Υπενθύμιση ανενεργού λογαριασμού

Γεια σας {USERNAME},

Αυτή η γνωστοποίηση  είναι μια υπενθύμιση ότι ο λογαριασμός σας στο  "{SITENAME}", που δημιουργήθηκε στις {REGISTER_DATE}, παραμένεις ανενεργός. Αν θέλετε να ενεργοποιήσετε το λογαριασμό αυτό, μπορείτε να επισκεφθείτε τον παρακάτω σύνδεσμο:

{U_ACTIVATE}

Ευχαριστούμε για την έγγραφη στο "{SITENAME}", περιμένουμε την συμμετοχή σας.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_resend_inactive.txt' 		=> '{EMAILSUBJECT:} Καλώς ήρθατε στο „{SITENAME}“ — {U_BOARD}

{WELCOME_MSG}

Παρακαλούμε κρατήστε αυτό το μήνυμα στο αρχείο σας. Οι λεπτομέρειες του λογαριασμού σας είναι οι:

----------------------------
Όνομα μέλους: {USERNAME}
----------------------------

Ο κωδικός πρόσβασης σας είναι κρυπτογραφημένος στην βάση μας και δεν μπορεί να ανακτηθεί. Αν τον ξεχάσετε μπορείτε να ζητήσετε νέον κωδικό που θα ενεργοποιηθεί με τον ίδιο τρόπο σε αυτόν τον λογαριασμό.

Επισκεφθείτε τον ακόλουθο σύνδεσμο για να ενεργοποιήσετε τον λογαριασμό σας:

{U_ACTIVATE}


Ευχαριστούμε για την εγγραφή σας.

{EMAIL_SIG}
',
));



$email = array_merge($email, array(
	'email/user_welcome.txt' 		=> '{EMAILSUBJECT:} Καλώς ήρθατε στο „{SITENAME}“ 

{WELCOME_MSG}

Παρακαλούμε κρατήστε αυτό το μήνυμα στο αρχείο σας. Οι λεπτομέρειες του λογαριασμού σας είναι οι:

----------------------------
Όνομα μέλους: {USERNAME}


Ιστοσελίδας σύνδεσμος: {U_BOARD}
----------------------------

Ο κωδικός πρόσβασης έχει αποθυκευτεί κρυπτογραφημένος στην βάση μας και δεν μπορεί να ανακτηθεί. Αν τον ξεχάσετε μπορείτε να ζητήσετε νέον κωδικό που θα ενεργοποιηθεί με τον ίδιο τρόπο σε αυτόν τον λογαριασμό.


Ευχαριστούμε για την εγγραφή σας.

{EMAIL_SIG}',
));



$email = array_merge($email, array(
	'email/user_welcome_inactive.txt' 		=> '{EMAILSUBJECT:} Καλώς ήρθατε στο „{SITENAME}“ — {U_BOARD}

{WELCOME_MSG}

Παρακαλούμε κρατήστε αυτό το μήνυμα στο αρχείο σας. Οι λεπτομέρειες του λογαριασμού σας είναι οι:

----------------------------
Όνομα μέλους: {USERNAME}

Σύνδεσμος ιστοσελίδας: {U_BOARD}
----------------------------

Παρακαλώ ακολουθήστε τον σύνδεσμο για να ενεργοποιήσετε τον λογαριασμό σας:

{U_ACTIVATE}

Ο κωδικός πρόσβασης αποθηκεύεται κρυπτογραφημένος στην βάση μας και δεν μπορεί να ανακτηθεί. Αν τον ξεχάσετε μπορείτε να ζητήσετε νέον κωδικό που θα ενεργοποιηθεί με τον ίδιο τρόπο σε αυτόν τον λογαριασμό.

Ευχαριστούμε για την εγγραφή σας.

{EMAIL_SIG}
',
));


