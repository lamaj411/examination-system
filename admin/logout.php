<html>
<head>
<script language="JavaScript"><!--
javascript:window.history.forward(0);
//--></script>
</head>
<body>
<?php
session_start();
unset($_SESSION['u']);
unset($_SESSION['a']);
session_destroy();
header("location:../index.php");
?>
</body>
</html>