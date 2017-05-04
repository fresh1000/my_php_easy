<?php // formtest2.php
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(?? ???????)";
echo <<<_END
<html>
<head>
<title>Form Test</title>
</head>
<body>
??? ?????: $name<br>
<form method="post" action="formtest2.php">
??? ??? ??????
<input type="text" name="name">
<input type="submit">
</form>
</body>
</html>
_END;
?>
