<?php
session_start();
echo $_SESSION["username"];
?> 

<html>
<body>
<h1>Login Successful</h1>
<p> Welcome <?php echo $_SESSION["userData"][0];echo $_SESSION["userData"][1]; ?>! </P>
</body>
</html>
