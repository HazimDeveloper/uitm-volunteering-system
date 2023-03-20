<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

include 'config.php';
$id_event = $_GET['id_event'];
$result = mysqli_query($connect,"SELECT * FROM `user_event` JOIN user_form ON user_event.id_user = user_form.id WHERE user_event.id_event = $id_event;");
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'nabilahmisha@gmail.com';
$mail->Password = 'xvbddxxgptyhvpcf';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

while ($row = mysqli_fetch_assoc($result)) {
    // Recipient's email address
    $to = $row["email"];
    $mail->setFrom('nabilahmisha@gmail.com', 'misha');
$mail->addAddress(''.$to.'', 'Recipient Name');
$mail->addReplyTo('nabilahmisha@gmail.com', 'Reply-To Name');
$mail->Subject = 'Cerificated For Participated Of Joining Our Event (MYSVS)';
$mail->Body = 'Greetings,

Thank you for your participation in our event. 
Please find in the attachment your certificate of participant. 

Have a good day.

Sincerely,
MYSVS Universiti Teknologi Mara (UITM).';
$mail->addAttachment('file/uitm.pdf');

}
if (!$mail->send()) {
    echo "Error: " . $mail->ErrorInfo;
} else {
    echo "Email sent";
    $update_status = mysqli_query($connect,"UPDATE event SET status = 'completed' WHERE id_event = $id_event");
    header("location: officer_page.php");
}

?>