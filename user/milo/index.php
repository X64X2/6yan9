<html>
<head>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<link rel="stylesheet" href="/mumutheme.css">
<style>
#nametag{
font-size:50px;
color:purple;
font-weight: bold;
background-color:#f4f4f4;
padding:5px;
border-bottom:solid 5px purple;
margin: 0 auto;
width:100%;
text-align:left;
}
#everythingelse{
width:80%;
color:purple;
font-weight: normal;
background-color:#f4f4f4;
margin: 0 auto;
padding:20px;
text-align:left;
}
</style>
</head>
<body>

<br><br></div><br>
<div id="everythingelse"><br><div id="nametag">
<h1 style="font-size:30; overflow:auto;"><?php 
error_reporting(0);
$imageloca = fopen('imagename.txt', 'r');
$imageloca = fread($imageloca,filesize("imagename.txt"));
?> <img style="height:90px; width:90px; border:solid 1px black; float:right;" src="<?php echo $imageloca; ?>"><?php
$udir = getcwd();
$part = explode('/', $udir);
$last = array_key_last($part);
echo($part[$last]);
$mumucoins = fopen('mumucoins.txt', 'r');
$mumucoins = fread($mumucoins,filesize("mumucoins.txt"));

echo($mumucoins);
?></span></h1>
</div>
<p><?php
$bio = fopen('bio.txt', 'r');
$bio = fread($bio, filesize('bio.txt'));
echo $bio;
?></p><title><?php echo($part[$last]); ?></title></div>
</body>
</html>