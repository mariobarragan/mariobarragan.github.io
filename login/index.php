<?php
$username = "tritech";
$password = "supercalifragilisticexpialidocious";
$nonsense = "supercalifragilisticexpialidocious";

if (isset($_COOKIE['PrivatePageLogin'])) {
   if ($_COOKIE['PrivatePageLogin'] == md5($password.$nonsense)) {
?>

<html>
<head>
  <title>Zulu : Coleman</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../dist/css/custom.css" >

  <script src="../dist/ajax/jquery.min.js"></script>
  <script src="../dist/js/bootstrap.min.js"></script>
</head>
<body>

<a href = "http://10.183.1.26"  target = "_blank">
 <button type="button" class="btn btn-primary btn-md">../directory/* works </button>
  </a>
 <!-- -->

</body>
</html>


<?php
      exit;
   } else {
      echo "Bad Cookie.";
      exit;
   }
}

if (isset($_GET['p']) && $_GET['p'] == "login") {
   if ($_POST['user'] != $username) {
      echo "Sorry, that username does not match.";
      exit;
   } else if ($_POST['keypass'] != $password) {
      echo "Sorry, that password does not match.";
      exit;
   } else if ($_POST['user'] == $username && $_POST['keypass'] == $password) {
      setcookie('PrivatePageLogin', md5($_POST['keypass'].$nonsense));
      header("Location: $_SERVER[PHP_SELF]");
   } else {
      echo "Sorry, you could not be logged in at this time.";
   }
}
?>
<style type="text/css">

div.content{
font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18pt;
}

-->
</style>
<div class="content">
<center>
<img src = "copyright-all-rights-reserved.jpg" height = "200">

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" method="post">
<label>USER NAME<input type="text" name="user" id="user" /> </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>PASSWORD <input type="password" name="keypass" id="keypass" /> </label>
<input type="submit" id="submit" value="Login" />
</form>
</center>
</div>
