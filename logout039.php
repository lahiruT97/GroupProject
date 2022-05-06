<html>
<head>

</head>
<body>
<?php
session_start();
session_destroy();
echo "<div style='margin:20% 30%;'><h4>You have been logged out.</h4></div>";
header('Refresh:1; URL=login039.php');
?>
</body>
</html>