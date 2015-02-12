<html>
<head></head>
<body>
<?php
require_once "config.php";
$inbox = imap_open('{' . $imap_server . '}INBOX', $email_address, $password );

// look at unopened messages only
$email_ids = imap_search ( $inbox, 'UNSEEN' );

if ( $email_ids ) {
  foreach($email_ids as $email_id) {
    echo "<p>".imap_fetch_overview($inbox, $email_id)[0]->subject."</p>";
  }
}


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

