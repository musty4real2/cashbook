<?php
//extract data from the post
extract($_POST);

//set POST variables
$url = 'http://www.edusoft.co/sms/apiware/sendmw.php';
	
$fields = array(
'uname' => urlencode("mobile_teller"),
            'userpass' => urlencode("28833"),
            'data' => urlencode("
			<sms>
			<auth>
			<username>uname</username>
			<password>userpass</password>
			</auth>
			<record>
			<sender>Mobile Teller Nigeria</sender>
			<recipient>$phone_number</recipient>
			<message>Dear $name your Mobile Teller account has been credited with the sum of $cardamount. Your current account balance is $bal.</message>
			</record>


</sms>")
        );

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);

?>