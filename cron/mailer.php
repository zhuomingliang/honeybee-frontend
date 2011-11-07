<?php
set_time_limit(0);

require 'Honeybee/include/phpmailer/class.phpmailer.php';

ini_set('auto_detect_line_endings', TRUE);

$handle = @fopen('email_lists.txt', 'r');

$per_count = 0;
$count = 0;

if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        if(++$count <= 1859) {
            if(preg_match("/qq\.com/", $buffer)) continue;
        }

        list($name,$email) = preg_split("/[\s]+/", $buffer, -1, PREG_SPLIT_NO_EMPTY);
        try {
          $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
          $mail->IsSMTP(); // telling the class to use SMTP
          $mail->CharSet    = 'UTF-8';
          $mail->Host       = "mail.flashbid.cn"; // SMTP server
          $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
          $mail->SMTPAuth   = true;                  // enable SMTP authentication
          $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
          $mail->Username   = "no-reply@flashbid.cn"; // SMTP account username
          $mail->Password   = "p0o9i8u7y6";        // SMTP account password
          $mail->SetFrom('no-reply@flashbid.cn', '玩拍网');
          $mail->AddReplyTo('no-reply@flashbid.cn', '玩拍网');
          $mail->AddAddress($email, $name);
          $mail->Subject = '玩拍网启用新域名 wanpai.com';
          $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
          $mail->MsgHTML(file_get_contents('contents.html'));
          $mail->Send();
          echo "$buffer Message Sent OK\n";
        } catch (phpmailerException $e) {
          echo "$buffer Message Sent ERROR\n"; //Pretty error messages from PHPMailer
        } catch (Exception $e) {
          echo "$buffer Message Sent ERROR\n"; //Boring error messages from anything else!
        }

        if(++$per_count == 20) {
            $per_count = 0;
            usleep(1000000);
        }
    }
    fclose($handle);
}



