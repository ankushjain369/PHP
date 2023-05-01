<?php

$to_email = "ankush11189121@gmail.com";
$subject = "Testing PHP";
$body = "Hi Ankush, How are you? I hope your doing great";
$header = "From:ankushjain369@gmail.com";

if(mail($to_email, $subject, $body, $header)){
	echo "Email send to $to_email";
}else{
	echo "Email not delivered to $to_email";
}

?>