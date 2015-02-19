<html>
<head></head>
<body>
<?php
require_once "config.php";

$curl = curl_init ();
curl_setopt($curl, CURLOPT_URL, "https://api.pushbullet.com/v2/pushes" );
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_USERPWD, $pushbullet_key );
curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json") );
curl_setopt($curl, CURLOPT_POSTFIELDS, '{"type": "note", "title": "meow test", "body": "Note Body"}');
curl_exec ( $curl );

//
// $inbox = imap_open('{' . $imap_server . '}INBOX', $email_address, $password );
//
// // look at unopened messages only
// $email_uids = imap_search ( $inbox, 'UNSEEN', SE_UID );
//
//
// if ( $email_uids ) {
//   foreach($email_uids as $email_uid) {
//     // echo "<p>".imap_fetch_overview($inbox, $email_uid)[0]->subject."</p>";
//     $structure = imap_fetchstructure ( $inbox, $email_uid, FT_UID );
//     // calling imap_body sets the message to SEEN
//     // $body = imap_body($inbox, $email_uid);
//     // echo imap_qprint(imap_body($inbox, $email_uid));
//     // echo "<p>".imap_fetchbody($inbox, $email_uid)[0]->subject."</p>";
//
//     // figure out how to set email to read in here!
//   }
// }
//

//
// if ($emails) {
//   $output = '';
//   foreach($emails as $email_number) {
//     /* get information specific to this email */
//     $overview = imap_fetch_overview($inbox,$email_number,0);
//     $message = imap_fetchbody($inbox,$email_number,);
//
//     /* output the email header information */
//     $output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
//     $output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
//     $output.= '<span class="from">'.$overview[0]->from.'</span>';
//     $output.= '<span class="date">on '.$overview[0]->date.'</span>';
//     $output.= '</div>';
//
//     /* output the email body */
//     $output.= '<div class="body">'.$message.'</div>';
//   }
//
//   echo $output;
// } 

/* close the connection */
imap_close($inbox);

?>
</body>
</html>

