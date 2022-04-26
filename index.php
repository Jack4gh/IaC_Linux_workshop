<!DOCTYPE html>
<html>
<head>
  <title>IaC workshop Linux Essentials</title>
  <link rel="stylesheet" href="css/style.css">
  <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200italic,200,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- For-Mobile-Apps-and-Meta-Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="IaC workshop" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //For-Mobile-Apps-and-Meta-Tags -->

</head>
<body>

<div id="grad">

<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
   <tr>
      <td><div align="center">
         <img src="/images/devops-iac.jpg" alt="" height="130" width="600" />
      </div></td>
   </tr>
</table>

<div class="main">
  <h1>Jippie-a-Yeah</h1>
  <h2>you are on the IaC workshop - <br>Linux Essentials webpage</h2>
  <h3>your visit will NOT end here ;-)</h3>
  <a href="http://www.simac.com/" class="back">wie is Simac ?</a>

  <p>
</div>

<h2>Get ready for some more action</h2>
<p>
&nbsp;<p>

</div>
<p>

<?php
date_default_timezone_set ('Europe/Amsterdam');
$ts = date('l jS \of F Y H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$hostaddress = gethostbyaddr($ip);
$browser = $_SERVER['HTTP_USER_AGENT'];
if(isset($_SERVER['HTTP_REFERER'])) {
  $referred = $_SERVER['HTTP_REFERER']; // a quirky spelling mistake that stuck in php
}
?>

<table width="90%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
   <td col width="30%"><div align="left">
     <a href="https://nl.wikipedia.org/wiki/Tux">
     <img src="/images/tux-code.png" alt="Hi iam Tux" height="130" width="144" />
     </a>
   </div></td>

   <td col width="30%"><div align="center">
     <?php
printf ("\n\n<font size=\"-7\"><center><i>At %s your IP address was : %s (%s)</i></font><br/><br /> \n", $ts, $ip, $hostaddress);
     ?>
   </div></td>

   <td col width="30%"><div align="right">
     <a href="https://www.bmc.com/blogs/infrastructure-as-code/">
     <img src="/images/iac.png" alt="Infrastructure as Code" height="110" width="145" />
     </a>
   </div></td>
  </tr>
</table>


</body>
</html>

