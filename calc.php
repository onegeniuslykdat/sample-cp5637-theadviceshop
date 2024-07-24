<?php include("dbconnect.php");
include("functions.php") ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Login</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
    <?php include("inc_header.php");
    include("inc_nav.php");
    echo "<h3>Sum of 5, 6 and 7 is: " . getResult("5,6,7", '+') . "</h3>";
    echo "<h3>Product of 5, 6 and 7 is: " . getResult("5,6,7", '*') . "</h3>";
    include("inc_footer.php"); ?>
</body>

</html>