<?php
//Created by AlexaMP
//03 Oct 2019
//Do not to sell
error_reporting(0);
 
//how to use?
//run on cmd/terminal/console
//Save your proxy list in proxy.txt
//format proxy => ip:port:username:password/alexamp
//Example => 95.216.1.195:80:gplkdghc-1:6x0hhh2aw037/alexamp
//Example => 95.216.1.195:80:gplkdghc-2:6x0hhh2aw037/alexamp
 
$file = file_get_contents("proxy.txt");
$data = explode("\n",$file);
echo "
[+]=================[START]=================[+]";
for($a=0;$a<count($data);$a++){
$data1 = explode("/",$data[$a]);
$proxy = explode(":",$data1[0]);
$proxyip = $proxy[0];
$proxyport = $proxy[1];
$proxyuser = $proxy[2];
$proxypass = $proxy[3];
$proxys = "$proxyip:$proxyport";
$auths = "$proxyuser:$proxypass";
if(!$proxyip){
break;
}else{
###################[ FIRST NAME MAKER ]######################
$firstnames = array(
"Marcus",
"Jacob",
"Jargon",
"Mitton",
"Gorgos",
"Alexa",
"Offcial",
"Steven",
"Margos",
"Stavin",
"Malvin"
);
shuffle($firstnames);
$firstname = array_shift($firstnames);
 
 
###################[ LAST NAME MAKER ]######################
$lastnames = array(
"Jhondoe",
"Garegar",
"Mantoras",
"Gondevst",
"Sorgan",
"Alexa",
"Offcials",
"Bontoe",
"Boel",
"Hebat",
"Gangan"
);
shuffle($lastnames);
$lastname = array_shift($lastnames);
 
###################[ EMAIL MAKER ]######################
 
$randangka = rand(0000000,9999999);
$email = "$firstname.$lastname$randangka@alexamp.io";
 
###################[ USERNAME MAKER ]######################
 
$username = "$firstname$lastname.$randangka";
 
###################[ PASSWORD MAKER ]######################
 
$password = "AlexaMP.Tools.IG01";
 
###################[ USERAGENT MAKER ]######################
 
$agents = array(
    'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1',
    'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.9) Gecko/20100508 SeaMonkey/2.0.4',
    'Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US)',
    'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; da-dk) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1'
);
###################[ END MAKER ]######################
$instagram = curl_init();
curl_setopt($instagram, CURLOPT_URL, "https://www.instagram.com/accounts/web_create_ajax/");
curl_setopt($instagram, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($instagram, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($instagram, CURLOPT_HTTPPROXYTUNNEL, 0);
curl_setopt($instagram, CURLOPT_TIMEOUT, 200);
curl_setopt($instagram, CURLOPT_PROXY, $proxys);
curl_setopt($instagram, CURLOPT_PROXYUSERPWD, $auths);
curl_setopt($instagram, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($instagram, CURLOPT_HTTPHEADER, array(
    'Host: www.instagram.com',
    'X-CSRFToken: EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I',
    'X-Instagram-AJAX: 1',
    'X-Requested-With: XMLHttpRequest',
    'Referer: https://www.instagram.com/',
    'Cookie: csrftoken=EJMrAsTOEi1SKiZLHzNf2RMBEZTQkI9I;'
));
curl_setopt($instagram, CURLOPT_POSTFIELDS, "email=$email&password=$password&username=$username&first_name=$firstname");
curl_setopt($instagram, CURLOPT_HEADER, 0);
curl_setopt($instagram,CURLOPT_USERAGENT,$agents[array_rand($agents)]);
$response = curl_exec($instagram);
$result = json_decode($response,true);
$bisa = $result['error_type'];
echo "
[+]=================[+]
Ip       : $proxyip
Port     : $proxyport
User     : $proxyuser
Pass     : $proxypass
Full     : $proxyip:$porxyport
 
Username : $username
Password : $password
Email    : $email
Full Name: $firstname $lastname
Status   : $bisa
Full     : $response
[+]=================[+]";
}
}
echo "
[+]=================[END]=================[+]
";
?>
