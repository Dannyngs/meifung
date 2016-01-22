<?php




require(dirname(__FILE__) . '/phpmailer/sendamail.php');

$msg="<p>Name:".$_POST['name']."</p>";
$msg.="<p>Email:".$_POST['email']."</p>";
$msg.="<p>Subject:".$_POST['subject']."</p>";
$msg.="<p>Message:".$_POST['msg']."</p>";
















if(smtp_mail("danny.ng198811@yahoo.com", "Application Form " ,$msg))
    echo "ok";
else echo "not ok!";

