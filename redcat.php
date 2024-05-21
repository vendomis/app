 
<html>
<head>
<title>Xblack.ca Mailer</title>
<style>
BODY {
background-color :  12111f;
}
.button {
background-color : black;
color : green;
}
.myform {
border: solid 9px #ac851c;
}
</style>
</head>
<body>
<br><br><br><br>
<div class="myform">
<center><font color=green size=10>X Black</font>
<br><br>
<form method="post" name="f1">
<input type="text" name="subject" placeholder="Subject" size="27" id="subject">
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="from" placeholder="From" size="27" id="from">
<br><br>  
<input type="text" name="name" placeholder="Name" size="27" id="name">
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="dec" placeholder="Decryption" size="27" id="dec">
<br><br>
<textarea rows=10 cols=30 name="letter" placeholder="Letter" id="letter">
</textarea>
<textarea rows=10 cols=30 name="emails" placeholder="Mail List" id="mlist">
</textarea>
<br><br>
<input type="submit" name="post" class="button" value="Send :ON">
</form>
</div>
<?php 
if (isset($_POST['post']))
{
$from = $_POST['from'];
$subject = $_POST['subject'];
$name = $_POST['name'];
$letter = $_POST['letter'];
$dec = $_POST['dec'];
$headers = "From: $name <$from>" . "\r\n" ."CC: $from";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$mails = $_POST['emails'];
$usr=explode("\n",$_POST['emails']);
foreach($usr as $user)
{
$too = $user;
mail($too,$subject,$letter,$headers);
print "<center><br><font color=green size=4>[ By Tarek ] </font><font color=yellow size=4>Email Sent To : ".$too."</font></center>";
}
echo <<<script
<script>
document.getElementById("subject").value = "$subject";
document.getElementById("from").value = "$from";
document.getElementById("name").value = "$name";
document.getElementById("letter").value = "$letter";
document.getElementById("mlist").value = "$mails";
</script>
script;
}
?>
<img src="https://i.postimg.cc/d07HTC2v/public.jpg" class="img-svg img-2x img-inverse-primary align-text-bottom" style="height: 400px;width: 699px;margin-left: 350px;">
