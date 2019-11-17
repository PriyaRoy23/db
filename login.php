<?php
session_start();
?>
<html>
<body>
<form method="POST" action="logcheck.php">
<fieldset>
<legend><b> LOGIN </b></legend>
User Name <br>
<input type="text" name="uname" /> <br>
Password <br>
<input type="text" name="pass" /> <br>
<hr>
<input type="submit" name="submit" value="Login"/> 
<a href="fpass.php"> ForgotPassword? </a>

</fieldset>
</form>
</body>
</html>